<?php

    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gator Submit Application</title>
        <link rel="stylesheet" href="submitAppPG.css">
    </head>


    <body>
        <div class="banner">
            <div class="navbar">
                <a href="frontPG.html"><img src="images/logo.png" class="logo"></a>
                <ul>
                    <li><a href="ListingLease.php">List Sublease</a></li>
                    <li><a href="findingLease.php">Find Sublease</a></li>
                </ul>
            </div>
            <div class="loginbox">
                    <h1>Listing Sublease Application</h1>
                    <form>
                        <p>Enter UF Email or UFID</p>
                        <input type="text" name="" placeholder="FloridaGator@ufl.edu or XXXX-XXXX">
                        <p>Password</p>
                        <input type="password" name="" placeholder="Enter Password">
                        <input type="submit" name="" value="Login">

                        <a href="createAccPG.php">Dont have an account?</a>
                    </form>
            </div>
        </div>
    </body>
</html>