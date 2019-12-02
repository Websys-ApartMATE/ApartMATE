<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ApartMATE</title>
        <link rel="stylesheet" href="listingPage.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include('../navBar/navBar.php')?>
        <div class="container">
            <div class="row">
                <div id="listing_info" class="col-lg-5">
                    <h1 id="name">Country Garden Apartments</h1>
                    <h2 id="address">110 Colleen Rd, Troy, NY 12180</h2>
                    <h3 id="price">$1783 per month</h3>
                    <h4 class="title">Features:</h4>
                    <ul id="basic_info">
                        <li>2 Beds</li>
                        <li>1 Bath</li>
                        <li>1200 Sqft</li>
                        <li>High Speed Internet Access</li>
                        <li>Heating</li>
                        <li>Ceiling Fans</li>
                        <li>Smoke Free</li>
                    </ul>
                    <h4 class="title">Description:</h4>
                    <ul id="description">
                        <li>This is a great place to rent. The internet is really fast, theres heating, ceiling fans, and its smoke
                            free. Looking for student tenants for the Spring Semester
                        </li>
                    </ul>
                    <h4 class="title">Details:</h4>
                    <ul id="details" class="col-lg-12">
                        <li>Times for Inquiry: Mondays 5pm-9pm</li>
                        <li>User Rating: 3 out of 5</li>
                        <li>Utilities: Yes</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <img id="apartment_img" src="../searchPage/countryGardenPic.jpg" alt="">
                </div>
            </div>
        </div>
    </body>
</html>