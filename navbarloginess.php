<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
            .navbar .navbar-brand {
                font-size: 25px;
            }

            .button {
                margin-top: -5px;
                font-size: 20px;
                padding: 5px;
            }
    </style>
</head>

<body>

<?php
if (!isset($_SESSION['username'])) { ?>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-static-top">
        <a href="title.php" class="navbar-brand text-warning font-weight-bold">
        <img src="images/logo.png" width="30px" height="30px" class="d-inline-block"> Online Directory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarcollapse">
            <!-- Search box -->
            <form class="form-inline but" action="essensearch.php">
                <button class="btn btn-success" type="submit">Click to Search</button>
            </form> 
            <!-- Navbar right side-->
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="login.php" class="nav-link"><h4>Login</h4></a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link"><h4>Contact us</h4></a>
                </li>
            </div>
        </div>
    </nav> <?php
} else { ?>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-static-top">
        <a href="title.php" class="navbar-brand text-warning font-weight-bold">
        <img src="images/logo.png" width="30px" height="30px" class="d-inline-block"> Online Directory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarcollapse">
            <!-- Search box -->
            <form class="form-inline but" action="essensearch.php">
                <button class="btn btn-success" type="submit">Click to Search</button>
            </form> 
            <!-- Navbar right side-->
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="favourites.php" class="nav-link"><h4>Favourites</h4></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link"><button class="btn btn-danger button">Logout</button></a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link"><h4>Contact us</h4></a>
                </li>
            </div>
        </div>
    </nav> <?php
} ?>
    

</body>
</html>