<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Here!</title>
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
                overflow-y: hidden;
                
            }

            header{
                background-color: aqua;
                border-radius: 20px;
                width: 100%;
                height: fit-content;
                font-family: 'Big Shoulders Inline Text', cursive;
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
                padding: 6%;
                grid-template-columns: 1fr 1fr 1fr;
                grid-row-gap: 3%;
                grid-column-gap: 8%;

            }

            .container1 img{
                height: 200px;
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
                margin: 8px;
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
            <!-- Navbar right side-->
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="contact.php" class="nav-link"><h4>Contact us</h4></a>
                </li>
            </div>
        </div>
    </nav>

    <div class="login-form">
        <form action="insert.php" method="POST">
            <h2 class="text-center">Register</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="required" 
                name="username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="required" 
                name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required"
                name="password" id="password">
                <input type="checkbox" onclick="passMatch()" class="edit">Show Password
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" required="required"
                name="confirm_pass" id="confirmpassword">
                <input type="checkbox" onclick="conPassMatch()" class="edit">Show Password
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <div id="msg"></div>      
        </form>
        <p class="text-center"><a href="login.php">Already have an account? Login here!</a></p>
    </div>


    <script type="text/javascript">

        function passMatch() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }

        function conPassMatch() {
        var x = document.getElementById("confirmpassword");
        if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }

        $(document).ready(function(){
        $("#confirmpassword").keyup(function(){
             if ($("#password").val() != $("#confirmpassword").val()) {
                 $("#msg").html("Password do not match").css("color","red");
             } else {
                 $("#msg").html("Password matched").css("color","green");
                }
            });
        });

    </script>

</body>
</html>