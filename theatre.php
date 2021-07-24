<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Theatres</title>
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
                font-family: 'Montserrat', sans-serif;
                
            }

            header{
                background-color: aqua;
                border-radius: 20px;
                width: 100%;
                height: fit-content;
                font-size: 20px;
                display: grid;
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

            .but {
                display: inline-block;
            }

            .about, .contact{
                padding-right: 10px;
                margin: auto;
            }

            .container1{
                text-align: center;
                padding: 6%;

            }

            .container1 img{
                height: 300px;
            }

    </style>
    
</head>
<body>  
<!-- Navigation Bar -->
    <?php include 'navbarnon.php'; ?>
    
    <div class="container1">
        <div class="row">
            <div class="col-md-4 item">
                <a href="cine.php"><img src="images/cinema/cine.jpg" alt="" width=100%>
                <p>Cinepolis</p></a>
            </div>
            <div class="col-md-4 item">
                <a href="max.php"><img src="images/cinema/cinema.jpg" alt="" width=100%>
                <p>Max Movies</p></a>
            </div>
            <div class="col-md-4 item">
                <a href="inox.php"><img src="images/cinema/inox.webp" alt="" width=100%>
                <p>INOX movies</p></a>
            </div>
        </div>
    </div>
    <div class="text-left">
        <a href="theatrej.php"><h4>For slower internet connections, click here</h4></a>
    </div>
</body>
</html>