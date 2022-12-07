<?php

    //If user accessed the page the right way
     if(isset($_POST['submit'])){

        //Variables taken in by the create account page
        $nameFirst = $_POST["nameFirst"];
        $nameLast = $_POST["nameLast"];
        $ufEmail = $_POST["email"];
        $uf_id = $_POST["ufid"];
        $password = $_POST["pwd"];
        $passwordR = $_POST["pwdrepeat"];

        //Links to dbs for error handling
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        
        //Checks for error handling
        
        //Checks if the input was empty
        if(emptyInputSignup($nameFirst,$nameLast, $uf_id, $ufEmail,$password,$passwordR) !== false){
            header("location: ../createAccPG.php?error=emptyinput");
            exit();
        }
        //Checks if UF ID is unique but also if the string is 8 integers
        if(invalidUF_ID($uf_id) !== false){
            header("location: ../createAccPG.php?error=InvalidUFID");
            exit();
        }
        //Checks if Email is a valid email
        if(invalidUFEmail($ufEmail) !== false){
            header("location: ../createAccPG.php?error=InvalidEmail");
            exit();
        }
        //Checks if Passwords match
        if(passwordMatch($password,$passwordR) !== false){
            header("location: ../createAccPG.php?error=PasswordsDontMatch");
            exit();
        }
        //Checks if UF_IF already exits
        if(UF_IDExists($conn, $uf_id, $ufEmail) !== false){
            header("location: ../createAccPG.php?error=UFIDisAlreadyRegistered");
            exit();
        }

        //If everything passes create User
        createUser($conn, $nameFirst, $nameLast, $uf_id, $ufEmail, $password);
    }

     else{
        header("location: ../createAccPG.php");
        exit();
     }