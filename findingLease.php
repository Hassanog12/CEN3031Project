<?php

    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gator SubLease Login</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="findingLease.css">

    </head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="navbar">
        <a href="frontPG.html"><img src="images/logo.png" class="logo"></a>
        <ul>
            <li><a href="ListingLease.php">List Sublease</a></li>
            <li><a href="findingLease.php">Find Sublease</a></li>
            <?php
                    if(isset($_SESSION["userUFid"])){
                        echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        
                      }else{
                        echo "<li><a href='LoginPG.php'>Log in</a></li>";
                      }

                    ?>
        </ul>
        <!-- CHANGE ICONSSSSS -->
    </div>


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <form action="">

        <h3>find your perfect home</h3>

        <div class="buttons-container">
            <a href="#" class="btn">Filtering</a>
            <a href="#" class="btn">Listings</a>
        </div>

        <div class="inputBox">
            <select name="" id="">
                <option value="" disabled hidden selected>Minimum Price per Month</option>
                <option value="$5000">$500</option>
                <option value="$10000">$600</option>
                <option value="$15000">$700</option>
                <option value="$20000">$800</option>
                <option value="$25000">$900</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>Maximum Price per Month</option>
                <option value="$30000">$700</option>
                <option value="$35000">$800</option>
                <option value="$40000">$900</option>
                <option value="$45000">$1000</option>
                <option value="$50000">$1100</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>Property Status</option>
                <option value="Ready To Move">Ready To Move Now!</option>
                <option value="NextSemester">Next Semester Sublease</option>
                <option value="furnished">Furnished</option>
                <option value="unfurnished">unfurnished</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>Property Type</option>
                <option value="Apartment">Apartment</option>
                <option value="house">House</option>
                <option value="studio">Studio</option>
                <option value="townhouse">townhouse</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>Minimum Square Footage</option>
                <option value="500SQFT">500 SQFT</option>
                <option value="750SQFT">750 SQFT</option>
                <option value="1000SQFT">1000 SQFT</option>
                <option value="1250SQFT">1250 SQFT</option>
                <option value="1500SQFT">1500 SQFT</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>Aminities</option>
                <option value="parking space">Free Parking Space</option>
                <option value="swimming pool">Swimming Pool</option>
                <option value="playground">Gym</option>
                <option value="security">Security</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>Bedrooms Available</option>
                <option value="1 bedroom">1 Bedroom</option>
                <option value="2 bedroom">2 Bedroom</option>
                <option value="Sharing">Sharing Bedroom with roommate</option>
            </select>
            <select name="" id="">
                <option value="" disabled hidden selected>Bathrooms Available</option>
                <option value="1 bathroom">1 Bathroom</option>
                <option value="2 bathroom">2 Bathroom</option>
                <option value="3 bathroom">Sharing Bathroom with roommates</option>
            </select>
        </div>

        <input type="submit" value="search property" class="btn">

    </form>

</section>

<!-- home section ends -->


<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> properties </h1>

    <div class="box-container">

        <div class="box">
            <div class="image-container">
                <img src="images/canopygainesville.jpg" alt="">
                <div class="info">
                    <h3>10 days ago</h3>
                    <h3>Sublease till January 2023</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$725/Month</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Canopy Apartments</h3>
                    <p>Subleasing a 1x1 with 4 other roommates</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 2000 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 4 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 4 baths </h3>
                </div>
                <div class="buttons">
                    <a href="SubmitAppPG.php" class="btn">Submit App</a>
                    <a href="#" class="btn">More Details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/OxfordManor.jpg" alt="">
                <div class="info">
                    <h3>6 days ago</h3>
                    <h3>Sublease till November 2023</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>2</h3></a>
                    <a href="#" class="fas fa-camera"><h3>7</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$934/Month</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Oxford Manor</h3>
                    <p>Subleasing a whole townhouse</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 1700 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="SubmitAppPG.php" class="btn">Submit App</a>
                    <a href="#" class="btn">More Details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/lexington-crossing.jpg" alt="">
                <div class="info">
                    <h3>1 days ago</h3>
                    <h3>Sublease till April 2023</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$1,215/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Lexington Crossing</h3>
                    <p>Subleasing a 1x1</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 1300 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 2 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="SubmitAppPG.php" class="btn">Submit App</a>
                    <a href="#" class="btn">More Details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/Rawlings - Copy.jpg" alt="">
                <div class="info">
                    <h3>3 hours ago</h3>
                    <h3>Sublease till August 2023</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>2</h3></a>
                    <a href="#" class="fas fa-camera"><h3>6</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$815/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Rawlings Hall</h3>
                    <p>Subleasing a on-campus dorm spot with another roomate </p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 500 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 1 beds </h3>
                    <h3> <i class="fas fa-bath"></i> Communal baths </h3>
                </div>
                <div class="buttons">
                    <a href="SubmitAppPG.php" class="btn">Submit App</a>
                    <a href="#" class="btn">More Details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="images/Gainesville-Place-Apartments.jpg" alt="">
                <div class="info">
                    <h3>2 days ago</h3>
                    <h3>Subleasing till March 2023</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>3</h3></a>
                    <a href="#" class="fas fa-camera"><h3>8</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$540/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Gainesville Place</h3>
                    <p>Subleasing a 2x2 Apartment </p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 1200 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 2 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                </div>
                <div class="buttons">
                    <a href="SubmitAppPG.php" class="btn">Submit App</a>
                    <a href="#" class="btn">More Details</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image-container">
                <img src="image/SingleFamily.jpg" alt="">
                <div class="info">
                    <h3>15 days ago</h3>
                    <h3>Sublease till Graduation</h3>
                </div>
                <div class="icons">
                    <a href="#" class="fas fa-film"><h3>1</h3></a>
                    <a href="#" class="fas fa-camera"><h3>4</h3></a>
                </div>
            </div>
            <div class="content">
                <div class="price">
                    <h3>$1367/mo</h3>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fas fa-phone"></a>
                </div>
                <div class="location">
                    <h3>Private owned home</h3>
                    <p>Close to campus home 1 bedroom shared bathroom</p>
                </div>
                <div class="details">
                    <h3> <i class="fas fa-expand"></i> 1300 sqft </h3>
                    <h3> <i class="fas fa-bed"></i> 3 beds </h3>
                    <h3> <i class="fas fa-bath"></i> 1 baths </h3>
                </div>
                <div class="buttons">
                    <a href="SubmitAppPG.php" class="btn">Submit App</a>
                    <a href="#" class="btn">More Details</a>
                </div>
            </div>
        </div>

    </div>
    
</section>

<!-- featured section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/ListingSub.png" class="ListingSub">
            <h3>Listing Sublease</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/FindingSub.png" class="FindingSub">
            <h3>Finding Sublease</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/SubmitApplication.png" class="SubmitAppLogo">
            <h3>Submitting Application</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam distinctio ipsa ab cum error quas fuga ad? Perspiciatis, autem officiis?</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- services section ends -->
<!-- services section ends -->
</body>
</html>