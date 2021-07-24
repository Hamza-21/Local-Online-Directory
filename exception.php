<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exception</title>
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

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }

        body, html{
            font-family: 'Big Shoulders Inline Text', cursive;
            font-family: 'Montserrat', sans-serif;
            width: 100%;
            height: 100%;
            background-color: aliceblue;
        }

    </style>
</head>


<body>

<!-- Navigation Bar -->

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
                    <a href="contact.php" class="nav-link"><h4>Contact us</h4></a>
                </li>
            </div>
        </div>
    </nav>

    <div class="text-center"><h1> Sorry No Map Available. <a href="pharmacy.php">Click here to go back</a></h1></div>
</body>
</html>