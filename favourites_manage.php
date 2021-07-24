<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favourites</title>
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

            .button {
            	margin-top: -5px;
            }

    </style>
    
</head>

<?php


if (isset($_SESSION['username'])) { 
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		{
			if (isset($_POST['add_favourites'])) {
				if (isset($_SESSION['favs'])) {

					$myplaces = array_column($_SESSION['favs'],'place');
					if (in_array($_POST['place'], $myplaces)) {
						echo "<script>alert('Place already in Favourites')</script>";
					}

					$count = count($_SESSION['favs']);
					$_SESSION['favs'][$count] = array('Place' => $_POST['place']);
					print_r($_SESSION['favs']); 


				} else {

					$_SESSION['favs'] [0] = array('Place' => $_POST['place']);
					print_r($_SESSION['favs']);

				}
			}
		}
	}

} else { 
	header("location: login.php");
 } ?>



