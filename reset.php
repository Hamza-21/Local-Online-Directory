<?php

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "users_registry";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    mysqli_select_db($conn, $dbname);

    if (mysqli_connect_error()) {
        die('Connection unsuccessful');
    } else {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];

            $emailquery = "SELECT * FROM register WHERE email = '$email'";
            $result = mysqli_query($conn, $emailquery);

            $emailcount = mysqli_num_rows($result);

            if ($emailcount) {

                $userdata = mysqli_fetch_assoc($result);

                $username = $userdata['username'];
                
                $subject = "Password Reset";
                $body = "Hi $username, click on the link below to reset your password
                http://localhost/project/reset-password.php";
                $sender_email = "From : hamzaansari200118@gmail.com";

                if (mail($email, $subject, $body, $sender_email)) { 
                    echo "Reset link sent successfully!";
                } else {
                    echo "Email sending failed...";
                }

            } else {
                echo "No account with associated email found";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset your password</title>
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

            .but {
                display: inline-block;
            }

            .about, .contact{
                padding-right: 10px;
                margin: auto;
            }

            .login-form {
                width: 340px;
                margin: 50px auto;
                font-size: 15px;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }

            .edit {
                margin: 7px;
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
                    <a href="contact.php" class="nav-link"><h4>Contact us</h4></a>
                </li>
            </div>
        </div>
    </nav>

    <div class="login-form">
        <form action="reset.php" method="POST">
            <h2 class="text-center">Enter Email</h2> 
            <h5 class="text-muted text-center">Enter the email associated with your account</h5>      
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="required" name="email">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block" name="submit">Send reset link</button>
            </div>       
        </form>
    </div>

</body>
</html>