<?php

if(isset($_POST["submit"])){

    $ufid = $_POST["ufid"];
    $password = $_POST["pwd"];

    //Links to dbs for error handling
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($ufid, $password) !== false){
        header("location: ../loginPG.php?error=emptyinput");
        exit();
    }

    //Logins the User in
    loginUser($conn, $ufid, $password);
}else{
    header("location: ../loginPG.php");
    exit();
}