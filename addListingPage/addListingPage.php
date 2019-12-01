<!DOCTYPE html>
<html>
	<head>
		<title>addListing</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="addListingPage.css">
		<!--Font awesome icons-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	</head>
	<body>
		<!--Navigation Bar--------------------------------------------->
		<nav class="navbar navbar-expand-lg bg-white" >
			<a class="navbar-brand" href="#">
				<img id="piclogo" src="../resources/logo.png" onclick="window.location.href='../homePage/homePage.php'" width="130" height="27" class="d-inline-block align-top" draggable = "false" alt="ApartMATE logo"/>
			</a>
			<!--Collapsable links on the left-->
			<button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="../searchPage/searchPage.php">Rent</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Add a Listing</a>
					</li>    
				</ul>
				<!--Chat button-->
				<button type="button" id="chatBtn" class="btn" onclick="window.location.href='../chatPage/chatPage.php'">
					<i class="fa fa-comments fa-lg"></i>
				</button>
				<!--Profile Dropdown button-->
				<div class="btn-group">
					<button type="button" id="profileBtn" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user fa-lg"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-right">
						<button class="dropdown-item" type="button" onclick="window.location.href='../profilePage/profilePage.php'">Profile</button>
						<button class="dropdown-item" type="button" onclick="window.location.href='../homePage/homePage.php'">Sign Out</button>
					</div>
				</div>
			</div>
		</nav>
		<!--Main Body--------------------------------------------------->
		<div id="mainBody" class="container-fluid overflow-auto">
			<form id="addListingForm">
				<h1>Add a Listing</h1>
				<!--Contact Information------------------------------------->
				<h>Contact Information</h>
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="firstName" placeholder="First Name">
					</div>
					<div class="form-group col-md-6">
						<input type="text" class="form-control" id="lastName" placeholder="Last Name">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
					</div>
				</div>
				<!--Availability------------------------------------------->
				<h>Availability</h> 
				<div class="form-group">
					<input type="text" class="form-control" id="times" placeholder="Available Times">
				</div>
				<!--Listing Information------------------------------------->
				<h>Listing Information</h>
				<!--Address------------------------------------------------->
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" id="address" placeholder="1234 Main St">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="city">City</label>
						<input type="text" class="form-control" id="city">
					</div>
					<div class="form-group col-md-4">
						<label for="state">State</label>
						<select id="state" class="form-control">
							<option selected>Choose...</option>
							<option>NY</option>
						</select>
					</div>
					<div class="form-group col-md-2">
						<label for="zip">Zip</label>
						<input type="text" class="form-control" id="zip">
					</div>
				</div>
				<!--Type of Housing-------------------------------------->
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-md-3 pt-0">Type of Housing</legend>
						<div class="col-md-9">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
								<label class="form-check-label" for="gridRadios1">
									Apartment
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
								<label class="form-check-label" for="gridRadios2">
									Condo
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
								<label class="form-check-label" for="gridRadios3">
									Townhome
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4">
								<label class="form-check-label" for="gridRadios4">
									Single Family Home
								</label>
							</div>
						</div>
					</div>
				</fieldset>
				<!--Number of bed, bath, and size of listing------------------>
				<div class="form-row">
					<div class="form-group col-md-4">
						<!--Bed-->
						<label for="bed">Beds</label>
						<select class="form-control" id="bed">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<!--Baths-->
						<label for="bath">Baths</label>
						<select class="form-control" id="bath">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<!--Square Feet-->
						<label for="sqft">Square Feet</label>
						<input type="number" id="sqft" class="form-control" placeholder="sqft">
					</div>
				</div>
				<!--Price------------------------------------------->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="price">price</label>
						<input type="number" id="price" class="form-control" placeholder="$/month">
					</div>
				</div>
				<!--Utilities------------------------------------------->
				<div class="form-row">
					<div class="form-group col-md-6">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="utilities">
							<label class="form-check-label" for="utilities">
								Utilities included
							</label>
						</div>
					</div>
				</div>
				<!--Features----------------------------------------->
				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-md-3 pt-0">Features</legend>
						<div class="col-md-9">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="feature1">
								<label class="form-check-label" for="feature1">
									High Speed Internet Access
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="feature2">
								<label class="form-check-label" for="feature2">
									Heating
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="feature3">
								<label class="form-check-label" for="feature3">
									Ceiling Fans
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="feature4">
								<label class="form-check-label" for="feature4">
									Smoke Free
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="feature5">
								<label class="form-check-label" for="feature5">
									Cable Ready
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="feature6">
								<label class="form-check-label" for="feature6">
									Storage Units
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="feature7">
								<label class="form-check-label" for="feature7">
									Tub/Shower
								</label>
							</div>
						</div>
					</div>
				</fieldset>
				<!--Description-->
				<div class="form-group">
					<label for="description">Description</label>
					<textarea id="description" class="form-control"></textarea>
				</div>
				<!--Picture Upload-->		
				<h>Upload Picture of Listing</h> 
				<div class="row">
					<div class="col-md-12">
						<input type="file" id="Picture" name="Picture">
					</div>
				</div>
				<!--Submit Button-->
				<button id="postListingBtn" type="submit" class="btn mt-2">Post Listing</button>
			</form>
		</div>
	</body>
	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>