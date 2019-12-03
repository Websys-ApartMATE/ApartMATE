<!DOCTYPE html>
<html>
	<head>
		<title>searchPage</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="searchPage.css">
		<!--Font awesome icons-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	</head>
	<body>
		<!--Navigation Bar--------------------------------------------->
		<?php include('../navBar/navBar.php')?>
		<!--Main Body--------------------------------------------------->
		<div id="mainBody" class="container-fluid overflow-auto">
			<!--Search bar------------------------------------------------>
			<div id="searchRow" class="row h-100">
				<div id="searchDisplay">
					<!--Search input field-->
					<form class="input-group" method="get" action="searchPage.php">
						<input type="text" name="zip" class="form-control py-2" placeholder="Search Listings">
						<div class="input-group-append">
							<button id="searchBtn" class="btn btn-secondary noBoxShadow" type="submit">
								<i class="fa fa-search fa-sm"></i>
							</button>
						</div>
					</form>		
				</div>
			</div>
			<!--Listings and Map row--------------------------------------->
			<div class="row">
				<!--Listings column-->
				<div id= "listings" class="col-lg-6 m-0 p-0">
                    <?php
                        $conn=mysqli_connect("localhost","test","kuzmin","ApartMATE");
                        $zip = $_GET["zip"];
                        $listsql = "SELECT * FROM `listings` WHERE `zip` = " . $zip;
                        $listres = mysqli_query($conn, $listsql);
                        while($list = mysqli_fetch_assoc($listres)){
                            echo "<div class=\"individualListing container p-0\">";
                            echo "<div class=\"row\">";
                            echo "<div class=\"col-lg-12 apartmentNameDisplay\">";
                            echo "<h1>" . $list['name'] . "</h1>";
                            echo "<p>" . $list['street'] . ", " . $list['city'] . ", " . $list['state'] . " " . $list['zip'] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class=\"row\">";
                            echo "<div class=\"col-lg-8 p-0\">";
                            echo "<img class=\"img-fluid\" src=\"../resources/" . $list['Picture'] . "\">";
                            echo "</div>";
                            echo "<div class=\"col-lg-4 listingInfo pl-2\">";
                            echo "<h1 class=\"price\">$" . number_format($list['price']) . "/mo</h>";
                            echo "<ul class=\"list-inline m-0\">";
                            echo "<li class=\"list-inline-item listingSizeTags\">" . $list['bed'] . " bed(s)</li>";
                            echo "<li class=\"list-inline-item listingSizeTags\">" . $list['bath'] . " bath(s)</li>";
                            echo "<li class=\"list-inline-item listingSizeTags\">" . number_format($list['sqft']) . " sqft</li>";
                            echo "</ul>";
                            echo "<h2>Description</h2>";
                            echo "<p>" . $list['description'] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    ?>			
				</div>
				<!--Map----------------------------------------------->
				<div id="mapDisplay" class="col-lg-6 m-0 p-0">
					<!-- <img id="map" src="../resources/map.png" class="img-fluid" alt="Responsive image"> -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93761.72263885058!2d-73.7477292504757!3d42.74491326607373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de0fa74c108773%3A0x33117ef9f5a4723c!2sTroy%2C%20NY!5e0!3m2!1sen!2sus!4v1575326194909!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</body>
	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>