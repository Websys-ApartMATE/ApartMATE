<!DOCTYPE html>
<html>
	<head>
		<title>homePage</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="homePage.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!--Font awesome icons-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	</head>
	<body>
        <?php include('../navBar/navBar.php')?>
		<div id="backgroundImg"></div>
		<img id="houseImg" src="../resources/house1.png" width="450" height="400">
		<div id="mainBody">
			<!--Search bar-------------------------------------------------------------------------------------->
			<form id="content" method="get" action="../searchPage/searchPage.php">
				<div id="oneline">
					<h>Find your home away from home.</h>
				</div>
				<!--Search input field-->
				<div id="searchBar" class="input-group">
					<form action="/searchPage/searchPage.php" method="get">
						<input id="zipcode" type="text" name="zip" class="form-control" placeholder="Enter Zipcode">
						<div class="input-group-append">
							<button id="searchBtn" class="btn form-control btn-secondary noBoxShadow" type="submit">Search</button>
						</div>
					</form>
				</div>		
			</form>
		</div>
	</body>
	<!--Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

