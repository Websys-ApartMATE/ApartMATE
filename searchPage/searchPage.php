<!DOCTYPE html>
<html>
    <head>
        <title>ApartMATE</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="searchPage.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
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
                <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='../homePage/homePage.html'"">Sign Out</button>
            </div>
        </nav>
        
        <div id="searchDisplay">
            <input id="searchbox" type="text" placeholder="Search...">
            <a href="#"><button id="searchBtn" class="btn btn-light">Search</button></a>
        </div>

        <div id="mainBody" class="container col-lg-12 overflow-auto">
            <div class="row">
                <div id= "listings" class="col-lg-6 no-gutters nopadding">

                    <div class="individualListing container nopadding">
                        <div class="row">
                            <div class="col-lg-12 apartmentNameDisplay">
                                <h1>Country Garden Apartments</h1>
                                <p>110 Colleen Rd, Troy, NY 12180</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-7">
                                <a href="../listing/listing.html">
                                  <img class="listingPic" src="countryGardenPic.jpg" alt="Responsive image"> 
                                </a>
                            </div>
                            <div class="col-lg-5 listingInfo">
                                <h class="price">$1,783/mo</h>
                                <ul class="list-inline">
                                    <li class="list-inline-item">2 beds</li>
                                    <li class="list-inline-item">1 bath</li>
                                    <li class="list-inline-item">1200 sqft</li>
                                </ul>
                                <p>518-934-0239</p>
                                <h>Features</h>
                                <ul>
                                    <li>High Speed Internet Access</li>
                                    <li>Heating</li>
                                    <li>Ceiling Fans</li>
                                    <li>Smoke Free</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="individualListing container mt-3">
                        <div class="row">
                            <div class="col-lg-12 apartmentNameDisplay">
                                <h1>The Summit at Duncan Meadows</h1>
                                <p>6 Ridgeway Ln, Troy, NY 12180</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-7">
                                <img class="listingPic" src="duncanMeadows.jpg"alt="Responsive image"> 
                            </div>
                            <div class="col-lg-5 listingInfo">
                                <h class="price">$1,200/mo</h>
                                <ul class="list-inline">
                                    <li class="list-inline-item">3 beds</li>
                                    <li class="list-inline-item">1 bath</li>
                                    <li class="list-inline-item">1000 sqft</li>
                                </ul>
                                <p>518-944-1189</p>
                                <h>Features</h>
                                <ul>
                                    <li>Cable Ready</li>
                                    <li>Storage Units</li>
                                    <li>Tub/Shower</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                    <div class="individualListing container mt-3">
                        <div class="row">
                            <div class="col-lg-12 apartmentNameDisplay">
                                <h1>Hudson Pointe</h1>
                                <p>2 Stanton St, Troy, NY 12180</p>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-7">
                                <img class="listingPic" src="hudsonPointe.jpg"alt="Responsive image"> 
                            </div>
                            <div class="listingInfo col-lg-5">
                                <h class="price">$900/mo</h>
                                <ul class="list-inline">
                                    <li class="list-inline-item">2 beds</li>
                                    <li class="list-inline-item">2 baths</li>
                                    <li class="list-inline-item">700 sqft</li>
                                </ul>
                                <p>518-474-0242</p>
                                <h>Features</h>
                                <ul>
                                    <li>High Speed Internet Access</li>
                                    <li>Heating</li>
                                    <li>Smoke Free</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>

                
                <div id="mapDisplay" class="col-lg-6 no-gutters nopadding">
                    <!-- <img id="map" src="map.png" class="img-fluid" alt="Responsive image"> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93761.72263885058!2d-73.74772925047569!3d42.74491326607372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de0fa74c108773%3A0x33117ef9f5a4723c!2sTroy%2C%20NY!5e0!3m2!1sen!2sus!4v1575147791230!5m2!1sen!2sus" width="100%" height="90%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </body>
</html>