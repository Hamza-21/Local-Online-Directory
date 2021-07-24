<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navigation Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@900&family=Montserrat&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Styling -->

    <style type="text/css">

            *{
                padding: 0px;
                margin: 0px;
            }
            body{
                background-color: aliceblue;
                display: grid;
                grid-template-rows: auto 1fr auto;
                font-family: 'Montserrat', sans-serif;
                
            }

            header{
                background-color: aqua;
                border-radius: 20px;
                width: 100%;
                font-size: 20px;
                display: grid;
                align-items: center;
            }

            .navbar .navbar-brand {
                font-size: 25px;
            }

            .about, .contact{
                padding-right: 10px;
                margin: auto;
            }

            .btn {        
                font-size: 20px;
            }

            .text {
                margin: 10px;
            }

    </style>
    
</head>
<body>  

    <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-static-top">
        <a href="title.php" class="navbar-brand text-warning font-weight-bold">
        <img src="images/logo.png" width="30px" height="30px" class="d-inline-block"> Online Directory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarcollapse">
            <!-- Navbar right side-->
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php"><button type="logout" class="btn btn-danger but" name="logout">Logout</button> </a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link"><h4>Contact us</h4></a>
                </li>
            </div>
        </div>
    </nav>

    <div class="text-center text">
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 text-center">
                <a href="cateess.php"><img class="img-thumbnail" src="images/site/ess.png">
                <button type="essential" class="btn btn-warning text-dark text"> 
                Essential Categories</button></a>
            </div>
            <div class="col-lg-6 text-center">
                <a href="categories.php"><img class="img-thumbnail" src="images/site/non_ess.png">
                <button type="essential" class="btn btn-warning text-dark text"> 
                Non-Essential Categories</button></a>
            </div>
        </div>
    </div>

</body>
</html>