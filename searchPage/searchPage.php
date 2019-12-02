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
					<div class="input-group">
						<input type="text" class="form-control py-2" placeholder="Search Listings">
						<div class="input-group-append">
							<button id="searchBtn" class="btn btn-secondary noBoxShadow" type="button">
								<i class="fa fa-search fa-sm"></i>
							</button>
						</div>
					</div>		
				</div>
				<!--Price Filter-->
				<div class="btn-group filterBox">
					<button type="button" id="filterBtn" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Price
					</button>
					<div class="dropdown-menu">
						<button class="dropdown-item" type="button">$500 - $700</button>
						<button class="dropdown-item" type="button">$700 - $900</button>
						<button class="dropdown-item" type="button">$900 - $1100</button>
						<button class="dropdown-item" type="button">$1100 - $1300</button>
						<button class="dropdown-item" type="button">$1300 - $1500</button>
					</div>
				</div>
				<!--Beds Filter-->
				<div class="btn-group filterBox">
					<button type="button" id="filterBtn" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Beds
					</button>
					<div class="dropdown-menu">
						<button class="dropdown-item" type="button">1 bed</button>
						<button class="dropdown-item" type="button">2 beds</button>
						<button class="dropdown-item" type="button">3 beds</button>
						<button class="dropdown-item" type="button">4 beds</button>
						<button class="dropdown-item" type="button">5 beds</button>
					</div>
				</div>
				<!--Baths Filter-->
				<div class="btn-group filterBox">
					<button type="button" id="filterBtn" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Baths
					</button>
					<div class="dropdown-menu">
							<button class="dropdown-item" type="button">1 bath</button>
							<button class="dropdown-item" type="button">2 baths</button>
							<button class="dropdown-item" type="button">3 baths</button>
							<button class="dropdown-item" type="button">4 baths</button>
							<button class="dropdown-item" type="button">5 baths</button>
					</div>
				</div>
				<!--Size Filter-->
				<div class="btn-group filterBox">
					<button type="button" id="filterBtn" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Size
					</button>
					<div class="dropdown-menu">
						<button class="dropdown-item" type="button">500 - 1000 sqft</button>
						<button class="dropdown-item" type="button">1000 - 1500 sqft</button>
						<button class="dropdown-item" type="button">1500 - 2000 sqft</button>
						<button class="dropdown-item" type="button">2000 - 2500 sqft</button>
						<button class="dropdown-item" type="button">2500 - 3000 sqft</button>
					</div>
				</div>
			</div>
			<!--Listings and Map row--------------------------------------->
			<div class="row">
				<!--Listings column-->
				<div id= "listings" class="col-lg-6 m-0 p-0">
					<!--Listing 1---------------------------------------------->
					<div class="individualListing container p-0" data-toggle="modal" data-target="#myModal">
						<div class="row">
							<div class="col-lg-12 apartmentNameDisplay">
								<h1>Country Garden Apartments</h1>
								<p>110 Colleen Rd, Troy, NY 12180</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 p-0">
								<img class="img-fluid" src="../resources/countryGardenPic.jpg"> 	
							</div>
							<div class="col-lg-4 listingInfo pl-2">
								<h class="price">$1,783/mo</h>
								<ul class="list-inline m-0">
									<li class="list-inline-item listingSizeTags">2 beds</li>
									<li class="list-inline-item listingSizeTags">1 bath</li>
									<li class="list-inline-item listingSizeTags">1200 sqft</li>
								</ul>
								<h2>Features</h2>
								<ul class="features">
									<li>High Speed Internet Access</li>
									<li>Heating</li>
									<li>Ceiling Fans</li>
									<li>Smoke Free</li>
								</ul>
								<h2>Description</h2>
								<p class="description">This is a great place to rent. The internet is really fast, theres heating, ceiling fans, and its smoke
            free. Looking for student tenants for the Spring Semester</p>
							</div>
						</div>
					</div>
					<!-- Potential Modal -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">	
							<!-- Modal content-->
							<div class="modal-content">		
							</div>
						</div>
					</div>
					<!--Listing 2----------------------------------------------->
					<div class="individualListing container p-0">
						<div class="row">
							<div class="col-lg-12 apartmentNameDisplay">
								<h1>The Summit at Duncan Meadows</h1>
								<p>6 Ridgeway Ln, Troy, NY 12180</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 p-0">
								<img class="img-fluid" src="../resources/duncanMeadows.jpg""> 
							</div>
							<div class="col-lg-4 listingInfo pl-2">
								<h class="price">$1,200/mo</h>
								<ul class="list-inline m-0">
									<li class="list-inline-item listingSizeTags">3 beds</li>
									<li class="list-inline-item listingSizeTags">1 bath</li>
									<li class="list-inline-item listingSizeTags">1000 sqft</li>
								</ul>
								<h2>Features</h2>
								<ul class="features">
									<li>Cable Ready</li>
									<li>Storage Units</li>
									<li>Tub/Shower</li>
								</ul>
								<h2>Description</h2>
								<p class="description">Looking for student tenants for the Summer Semester</p>
							</div>
						</div>
					</div>
					<!--Listing 3-------------------------------------------->
					<div class="individualListing container p-0">
						<div class="row">
							<div class="col-lg-12 apartmentNameDisplay">
								<h1>Hudson Pointe</h1>
								<p>2 Stanton St, Troy, NY 12180</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8 p-0">
								<img class="img-fluid" src="../resources/hudsonPointe.jpg"> 
							</div>
							<div class="listingInfo col-lg-4 pl-2">
								<h class="price">$900/mo</h>
								<ul class="list-inline">
									<li class="list-inline-item listingSizeTags">2 beds</li>
									<li class="list-inline-item listingSizeTags">2 baths</li>
									<li class="list-inline-item listingSizeTags">700 sqft</li>
								</ul>
								<h2>Features</h2>
								<ul class="features">
									<li>High Speed Internet Access</li>
									<li>Heating</li>
									<li>Smoke Free</li>
								</ul>
								<h2>Description</h2>
								<p class="description">Looking for student tenants for the Summer Semester</p>
							</div>
						</div>
					</div>					
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