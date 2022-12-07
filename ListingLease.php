<?php

    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gator SubLease Lease</title>
        <link rel="stylesheet" href="listingLease.css">
    </head>


    <body>
        <div class="banner">
            <div class="navbar">
                <a href="frontPG.html"><img src="images/logo.png" class="logo"></a>
                <ul>
                    <li><a href="ListingLease.php">List Sublease</a></li>
                    <li><a href="findingLease.php">Find Sublease</a></li>

                    <?php
                        if(isset($_SESSION["userUFid"])){
                          echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                          
                        }else{
                          echo "<li><a href='LoginPG.php'>Login</a></li>";
                        }
                    ?>
                </ul>
            </div>

        </div>

        <div class="createbox">
          <h1>List Your Sublease<br> Today!</h1>
            <form >
                <p>Full Name</p>
                <input type="text" name="" placeholder="Jacob Saarela">
                <p>Property Type</p>
                <input type="text" name="" placeholder="Townhouse/Apartment/House">
                <p>Price</p>
                <input type="text" name="" placeholder="$520/Month">
                <p>Length of Sublease</p>
                <input type="text" name="" placeholder="3 Months">
                <p>How many Bedrooms</p>
                <input type="text" name="" placeholder="1 Bedroom">
                <p>How many Bathrooms</p>
                <input type="text" name="" placeholder="1 Bathroom">
                <p>Size of Property</p>
                <input type="text" name="" placeholder="1230 (SQFT)">

                <p>Description of amenties</p>
                <input type="text" name="pwd" placeholder="i.e. Pool">
                
                <!--<button type="submit" name="submit"> Create Account </button>  -->
                <input type="submit" href="findingLease.php" name="" value="List your Sublease">
          </div>


    </body>
</html>