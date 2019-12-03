<?php 
//config
$host = "localhost"; //host name 
$user = "test"; //User
$password = "kuzmin"; //Password
$dbname = "ApartMATE"; //Database name
   
$con=mysqli_connect($host,$user,$password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

$listing_id = $_GET['listing']; 
/*$zip = $_POST['zip']; 
$address = $_POST['address']; 
$price = $_POST['price']; 
$sqft = $_POST['sqft']; 
$bed = $_POST['bed']; 
$bath = $_POST['bath']; 
$description = $_POST['description']; 
$times = $_POST['times']; 
$rating = $_POST['rating']; 
$type = $_POST['type']; 
$utilities = $_POST['utilities']; 
$landlord = $_POST['landlord']; 
$Picture = $_POST['Picture'];*/

$sql = "SELECT * from listings WHERE listing_id = $listing_id"; 

$results = mysqli_query($con,$sql); 
$row = mysqli_fetch_array($results, MYSQLI_ASSOC); 
 

/*if ($row['utilites'] == 0) {
  $utilites = "Full";  
} else if ($row['utilites'] == 1) {
  $utilites = "Partial"; 
} else {
  $utilites = "All Included"; 
}*/


/*$response = "<table border ='0', width = '100%'>"; 

while ($row = mysqli_fetch_array($results)) {
  $listing_id = $row['listing_id']; 
  $zip = $row['zip']; 
  $address = $row['address']; 
  $price = $row['price']; 
  $sqft = $row['sqft']; 
  $bed = $row['bed']; 
  $bath = $row['bath']; 
  $description = $row['description']; 
  $times = $row['times']; 
  $rating = $row['rating']; 
  $type = $row['type']; 
  $utilities = $row['utilities']; 
  $landlord = $row['landlord']; 
  $Picture = $row['Picture']; 

  $response .= "<tr>";
  $response .= "<td>Listing ID:  </td><td>".$listing_id."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Zip: </td><td>".$zip."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Address: </td><td>".$address."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Price: </td><td>".$price."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Sqft: </td><td>".$sqft."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Bed: </td><td>".$bed."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Bath: </td><td>".$bath."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Description: </td><td>".$description."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Times: </td><td>".$times."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Rating: </td><td>".$rating."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Utilities: </td><td>".$utilities."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Landlord: </td><td>".$landlord."</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Picture: </td><td>".$Picture."</td>";
  $response .= "</tr>";

}
$response .= "</table>"; 

echo $response; 
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ApartMATE</title>
  <link rel="stylesheet" href="listingPage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!--Font awesome icons-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>

<body>
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" >
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
      <button type="button" class="btn btn-outline-secondary" onclick="window.location.href=../homePage/homePage.html">Sign Out 
      </button>
    </div>
  </nav> -->
  <?php include("../navBar/navBar.php"); ?>



  <div class= "container">
    <div class="row">
      <div id="listing_info" class="col-lg-5">
        <h1 id="name"><?php echo $row['name'] ?></h1>
        <h2 id="address"><?php echo $row['street']. ', '. $row['city']. ', '. $row['state']. ', '. $row['zip']?> </h2>
        <h3 id="price">$<?php echo $row['price']?> per month</h3>
        <h4 class="title">Features:</h4>
        <ul id="basic_info">
          <li><?php echo $row['bed']?> Beds</li>
          <li><?php echo $row['bath']?> Bath</li>
          <li><?php echo $row['sqft']?> Sqft</li>
        </ul>
        <h4 class="title">Description:</h4>
        <ul id="description">
          <li><?php echo $row['description']?>
          </li>
        </ul>
        <h4 class="title">Details:</h4>
        <ul id="details" class="col-lg-12">
          <li>Times for Inquiry: <?php echo $row['times'] ?></li>
          <li>User Rating: <?php echo $row['rating'] ?> out of 5</li>
        </ul>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <img id="apartment_img" src= "<?php echo "../resources/" . $row['Picture']?>" alt="">
      </div>
    </div>

</body>

</html>

