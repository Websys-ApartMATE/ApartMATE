<style>
<?php include("navBar.css");
?>
</style>
<!--Navbar----------------------------------------------------------------------------------------->
<!--!!!<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="../homePage/homePage.php">
        <img id="piclogo" src="../resources/logo.png" width="130" height="27" class="d-inline-block align-top"
            draggable="false" alt="ApartMATE logo" />
    </a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../searchPage/searchPage.php">Rent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../addListingPage/addListingPage.php">Add a Listing</a>
            </li>
        </ul>
        <!--Log in Form------------------------------------------------------------------------------------>
        <!--!!!<form>
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="col-auto">
                    <button type="button" id="loginBtn" class="btn"
                        onclick="window.location.href='../searchPage/searchPage.php'">Log In</button>
                </div>
            </div>
        </form>
        <button type="button" id="navbarSignupBtn" class="btn" data-toggle="modal" data-target="#modalRegisterForm">Sign
            Up</button>
    </div>
</nav>-->

<!--Logged in navbar------------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-white">
    <a class="navbar-brand" href="../homePage/homePage.php">
        <img id="piclogo" src="../resources/logo.png" width="130" height="27" class="d-inline-block align-top"
            draggable="false" alt="ApartMATE logo" />
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
            <li class="nav-item">
                <a class="nav-link" href="../addListingPage/addListingPage.php">Add a Listing</a>
            </li>
        </ul>
        <!--Chat button-->
        <button type="button" id="chatBtn" class="btn" onclick="window.location.href='../chatPage/chatPage.php'">
            <i class="fa fa-comments fa-lg"></i>
        </button>
        <!--Profile Dropdown button-->
        <div class="btn-group">
            <button type="button" id="profileBtn" class="btn dropdown-toggle" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-lg"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button"
                    onclick="window.location.href='../profilePage/profilePage.php'">Profile</button>
                <button class="dropdown-item" type="button"
                    onclick="window.location.href='../homePage/homePage.php'">Sign Out</button>
            </div>
        </div>
    </div>
</nav>

<!--Register modal--------------------------------------------------------------------------------->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-3">
                    <label for="inputFullName">Name</label>
                    <input type="text" class="form-control" id="inputFullName" placeholder="Please enter full name">
                </div>
                <div class="md-form mb-3">
                    <label for="inputSchool">School</label>
                    <input type="text" class="form-control" id="inputSchool" placeholder="Please enter school">
                </div>
                <div class="md-form mb-3">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Please enter email">
                </div>
                <div class="md-form mb-3">
                    <label for="inputPhoneNumber">Phone Number</label>
                    <input type="tel" class="form-control" id="inputPhoneNumber"
                        placeholder="Please enter phone number">
                </div>
                <div class="md-form mb-3">
                    <label for="inputBirthDate">Birthdate:</label>
                    <input type="date" class="form-control" id="inputBirthDate" placeholder="Please enter birthdate">
                </div>
                <div class="md-form mb-3">
                    <label for="inputPassword">Password:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Please enter password">
                </div>
                <div class="md-form mb-3">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" id="modalSignupBtn" class="btn"
                    onclick="window.location.href='../searchPage/searchPage.php'">Sign up</button>
            </div>
        </div>
    </div>
</div>