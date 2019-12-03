<?php
	// php code to insert Course---------------------------------------------------
	if(isset($_POST['addListing'])) {
	  // get values 
	  $name = $_POST['name'];
	  $street = $_POST['street'];
	  $city = $_POST['city'];
	  $state = $_POST['state'];
	  $zip = $_POST['zip'];
	  $bed = $_POST['bed'];
	  $bath = $_POST['bath'];
	  $sqft = $_POST['sqft'];
	  $price = $_POST['price'];
	  $description = $_POST['description'];
	  $times = $_POST['times'];
			  
	  // mysql query to Update data
	  $query = "INSERT INTO listings (name, street, city, state, zip, bed, bath, sqft, price, description, times)
	  VALUES ('".$name."', '".$street."', '".$city."', '".$state."', '".$zip."', '".$bed."', '".$bath."', 
	  '".$sqft."', '".$price."', '".$description."', '".$times."')";
	  
	  $result = mysqli_query($con, $query);
	}

	mysqli_close($con);
?>
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
		<?php include('../navBar/navBar.php')?>
		<!--Main Body--------------------------------------------------->
		<div id="mainBody" class="container-fluid overflow-auto">
			<form id="addListingForm" action="addListingPage.php" method="post">
				<h1>Add a Listing</h1>
				<!--Listing Information------------------------------------->
				<h>Listing Information</h>
				<!--Address------------------------------------------------->

				<input type="text" class="form-control" name="name" placeholder="Listing Name">

				<div class="form-group">
					<label for="street">Street</label>
					<input type="text" class="form-control" name="street" placeholder="1234 Main St">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="city">City</label>
						<input type="text" class="form-control" name="city">
					</div>
					<div class="form-group col-md-4">
						<label for="state">State</label>
						<select name="state" class="form-control">
							<option selected>Choose...</option>
							<option>NY</option>
						</select>
					</div>
					<div class="form-group col-md-2">
						<label for="zip">Zip</label>
						<input type="text" class="form-control" name="zip">
					</div>
				</div>
				<!--Number of bed, bath, and size of listing------------------>
				<div class="form-row">
					<div class="form-group col-md-4">
						<!--Bed-->
						<label for="bed">Beds</label>
						<select class="form-control" name="bed">
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
						<select class="form-control" name="bath">
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
						<input type="number" name="sqft" class="form-control" placeholder="sqft">
					</div>
				</div>
				<!--Price------------------------------------------->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="price">price</label>
						<input type="number" name="price" class="form-control" placeholder="$/month">
					</div>
				</div>
				<!--Description-->
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" class="form-control"></textarea>
				</div>
				<!--Availability------------------------------------------->
				<h>Availability</h> 
				<div class="form-group">
					<input type="text" class="form-control" name="times" placeholder="Available Times">
				</div>
				<!--Picture Upload-->		
				<h>Upload Picture of Listing</h> 
				<div class="row">
					<div class="col-md-12">
						<input type="file" id="Picture" name="Picture">
					</div>
				</div>
				<!--Submit Button-->
				<input type="submit" name="addListing" value="addListingForm">
			</form>
		</div>
	</body>
	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>