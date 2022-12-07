<?php

function emptyInputSignup($nameFirst,$nameLast, $uf_id, $ufEmail,$password,$passwordR){
    $result = false;
    if(empty($nameFirst) || empty($nameLast) || empty($ufEmail) || empty($uf_id) || empty($password) || empty($passwordR)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidUF_ID($uf_id){
    $result = false;
    if (!preg_match("/^[0-9]{8}$/", $uf_id)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUFEmail($ufEmail){
    $result = false;
    if(!filter_var($ufEmail, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function passwordMatch($password,$passwordR){
    $result = false;
    if($password !== $passwordR){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function UF_IDExists($conn, $uf_id, $ufEmail){
    $sql = "SELECT * FROM usersaccounts WHERE uf_id = ? OR email =?; ";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../createAccPG.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $uf_id,$ufEmail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn,$nameFirst,$nameLast,$uf_id,$ufEmail,$password){
    $sql = "INSERT INTO usersaccounts (uf_id, name_first,name_last, email, pasw) VALUES (?,?,?,?,?); ";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../createAccPG.php?error=stmtfailed");
        exit();
    }

    //Security
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $uf_id, $nameFirst, $nameLast, $ufEmail, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../createAccPG.php?error=none");
    exit();

}
function emptyInputLogin($ufid, $password){
    $result = false;
    if(empty($ufid) || empty($password)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function loginUser($conn, $ufid, $password){
    $ufidExists = UF_IDExists($conn, $ufid, $ufid);

    if($ufidExists === false){
        header("location: ../loginPG.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $ufidExists["pasw"];
    $checkPWD = password_verify($password, $pwdHashed);

    if($checkPWD === false){
        header("location: ../loginPG.php?error=wrongPassword");
        exit();
    }else if($checkPWD === true){
        session_start();
        $_SESSION["userid"] = $ufidExists["uf_id"];
        $_SESSION["userUFid"] = $ufidExists["uf_id"];
        header("location: ../findingLease.php");
        exit();
    }
}