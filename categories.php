<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Non-Essential Services</title>
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

            .item a {
                text-decoration: none;
                font-size: 20px;
                color: #000000;
                transition: 0.3s ease;
            }

            .item a:hover{
                color: #595959;
            }

            .navbar .navbar-brand {
                font-size: 25px;
            }

            .but {
                display: inline-block;
            }

            .about, .contact{
                padding-right: 10px;
                margin: auto;
            }

            .container1{
                text-align: center;
                display: grid;
                padding: 4%;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-row-gap: 3%;
                grid-column-gap: 8%;

            }

            .container1 img{
                height: 200px;
            }

            .text {
                padding-top: 10px;
            }

            /** Responsive styling **/
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
<!-- Navigation bar -->
<?php 
    include 'navbarloginnon.php '; 
    if (isset($_SESSION['username'])) { ?>
        <div class="text-dark text-center text">
            <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
        </div> <?php
    } ?>

    <div class="container1">
        <div class="item">
            <a href="hotel.php"><img src="images/hotel.png" alt="" width=100%>
            <p>Hotels</p></a>
        </div>
        <div class="item">
            <a href="hardware.php"><img src="images/hard.jpg" alt="" width=100%>
            <p>Hardware Stores</p></a>
        </div>
        <div class="item">
            <a href="atm.php"><img src="images/atm.jpg" alt="" width=100%>
            <p>ATMs</p></a>
        </div>
        <div class="item">
            <a href="cafe.php"><img src="images/cafe.jpg" alt="" width=100%>
            <p>Cafés</p></a>
        </div>
        <div class="item">
            <a href="theatre.php"><img src="images/cine.jpg" alt="" width=100%>
            <p>Movie Cinemas</p></a>
        </div>
        <div class="item">
            <a href="school.php"><img src="images/school.png" alt="" width=100%>
            <p>Schools</p></a>
        </div>
        <div class="item">
            <a href="ice.php"><img src="images/ice.jpg" alt="" width=100%>
            <p>Ice-cream Parlours</p></a>
        </div>
        <div class="item">
            <a href="pet.php"><img src="images/pet.jpg" alt="" width=100%>
            <p>Pet Shops</p></a>
        </div>
    </div>
</body>
</html>