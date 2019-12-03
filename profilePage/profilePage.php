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
        <!--Font awesome icons-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    </head>
    <body>
        <!--Navigation Bar--------------------------------------------->
        <?php include('../navBar/navBar.php')?>
        <div id="profileBody">
            <div class="container">
                <div class="row">
                    <?php
                        $conn=mysqli_connect("localhost","test","kuzmin","ApartMATE");
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
                                echo "<p>" . $list['street'] . ", " . $list['city'] . ", " . $list['state'] . " " . $list['zip'] . "</p>";
                                echo "</div>";
                                echo "<a href=\"../listingPage/listingPage.php?listing=" . $listing['listing_id'] . "\">";
                                echo "<img class=\"listingPic\" src=\"" . $listing['Picture'] . "\" alt=\"" . $listing['name'] . "\">";
                                echo "</a>";
                                echo "<div class=\"row-lg-12 listingInfo\">";
                                echo "<h1 class=\"price\">$" . number_format($listing['price']) . "/mo</h1>";
                                echo "<ul class=\"list-inline\">";
                                echo "<li class=\"list-inline-item\">" . $listing['bed'] . " bed(s)</li>"; 
                                echo "<li class=\"list-inline-item\">" . $listing['bath'] . " bath(s)</li>";
                                echo "<li class=\"list-inline-item\">" . number_format($listing['sqft']) . " sqft</li>";
                                echo "</ul>";
                                echo "<h2>Description</h2>";
                                echo "<p>" . $listing['description'] . "</p>";
                                echo "</div>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>