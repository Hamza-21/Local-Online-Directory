<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
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
                height: fit-content;
                font-size: 20px;
                display: grid;
                grid-template-columns: 1fr 2fr auto auto;
                align-items: center;
            }

            .navbar .navbar-brand {
                font-size: 25px;
            }

            .item a {
                text-decoration: none;
                font-size: 20px;
                color: #000000;
                transition: 0.3s ease;
            }

            .item a:hover{
                color: #595959;
            }

            .about, .contact{
                padding-right: 10px;
                margin: auto;
            }

            .container1{
                text-align: center;
                display: grid;
                padding: 6%;
                grid-template-columns: 1fr 1fr 1fr;
                grid-row-gap: 3%;
                grid-column-gap: 8%;

            }

            .container1 img{
                height: 200px;
            }

            /* Responsive Styling */
            @media (max-width: 800px) {
                .container1{
                    grid-template-columns: 1fr 1fr 1fr;
                }

            }
            @media (max-width: 500px) {
                .container1{
                    grid-template-columns: 1fr 1fr;
                }

            }
            @media (max-width: 200px) {
                .container1{
                    grid-template-columns: 1fr;
                }

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
            <!-- Search box -->
            <form class="form-inline but" action="nonessensearch.php">
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