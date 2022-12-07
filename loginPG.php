<?php

    session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Gator SubLease Login</title>
        <link rel="stylesheet" href="loginPG.css">
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
                <img src="images/icon.png" class="avatar">
                    <h1>Login Here</h1>
                    <form action="includes/login.inc.php" method="post">
                        <p>Enter UF Email or UFID</p>
                        <input type="text" name="ufid" placeholder="FloridaGator@ufl.edu or UFID">
                        <p>Password</p>
                        <input type="password" name="pwd" placeholder="Enter Password">
                        <input type="submit" name="submit" value="Login">


                        <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo "<p> Fill in all fields!</p>";
                            }elseif($_GET["error"] == "wrongLogin"){
                                echo "<p> Incorrect Login Information</p>";
                            }
                            elseif($_GET["error"] == "wrongPassword"){
                                echo "<p> Incorrect Password</p>";
                            }
                            else if($_GET["error"] == "none"){
                                echo "<p> Succesfully logged in!</p>";
                            }
                        }
                        ?>

                        <a href="createAccPG.php">Dont have an account?</a>
                    </form>
            </div>
        </div>
    </body>
</html>