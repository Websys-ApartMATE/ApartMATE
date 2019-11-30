<!DOCTYPE html>
<html>
    <head>
        <title>ApartMATE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="profilePage.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" >
            <a class="navbar-brand" href="#"><img id="piclogo" src="logo.png" alt="ApartMATE logo"/></a>
            <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-light" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add a Listing</a>
                    </li>    
                </ul>
                <form class="navbar-nav ml-auto">
                    <input type="button" value="Sign Out"/>
                </form>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <?php
                    $conn=mysqli_connect("localhost","test","*C44E1F4F0C910DD1FDB5DCE5CA243964A07E2EDF","ApartMATE");
                    $id = $_GET["user"];
                    $usersql = "SELECT * FROM `users` WHERE `user_id` = " . $id;
                    $userres = mysqli_query($conn, $usersql);
                    $userrow = mysqli_fetch_assoc($userres);
                ?>
                <div class="col-lg-4">
                    <img src="profilePicture.png" alt="Default profile picture" height="250" width="250">
                    <h3 id="rating">Rating:</h3>
                    <img id="stars" src="stars.png" alt="Stars" height="50px" width="175px">
                </div>
                <div class="col-lg-4">
                    <h1 id="name"><?php echo $userrow['full_name'];?></h1>
                    <h3 id="birthday">DOB: <?php echo $userrow['dob'];?></h3>
                    <h3 id="email">Email: <?php echo $userrow['email'];?></h3>
                    <h3 id="phone">Phone Number: <?php echo $userrow['phone_number'];?></h3>
                </div>
                <div id="mainBody" class="container col-lg-4 overflow-auto">
                    <?php
                        $listingsql = "SELECT * FROM `listings` WHERE `landlord` = " . $id;
                        $listingres = mysqli_query($conn, $listingsql);
                    ?>
                    <h3 id="avail_list">Available Listings</h3>
                    <?php
                        while($listing = mysqli_fetch_assoc($listingres)){
                            echo "<div class=\"individualListing container\">";
                            echo "<div class=\"col-12 apartmentNameDisplay\">";
                            echo "<h1>" . $listing['name'] . "</h1>";
                            echo "<p>" . $listing['address'] . "</p>";
                            echo "</div>";
                            echo "<a href=\"../listing/listing.html?listing=" . $listing['listing_id'] . "\">";
                            echo "<img class=\"listingPic\" src=\"" . $listing['Picture'] . "\" alt=\"" . $listing['name'] . "\">";
                            echo "</a>";
                            echo "<div class=\"row-lg-12 listingInfo\">";
                            echo "<h1 class=\"price\">$" . $listing['price'] . "/mo</h1>";
                            echo "<ul class=\"list-inline\">";
                            echo "<li class=\"list-inline-item\">" . $listing['bed'] . " bed(s)</li>"; 
                            echo "<li class=\"list-inline-item\">" . $listing['bath'] . " bath(s)</li>";
                            echo "<li class=\"list-inline-item\">" . $listing['sqft'] . " sqft</li>";
                            echo "</ul>";
                            echo "<h2>Description</h2>";
                            echo "<p>" . $listing['description'] . "</p>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>