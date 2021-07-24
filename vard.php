<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hardware Store</title>
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
            font-family: 'Montserrat', sans-serif;
            width: 100%;
            height: 100%;
            background-color: aliceblue;
        }

        .center {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 4px solid #000000;
        } 

        .btn-edit{
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        @media screen and (max-width: 800px) { 
            .column {
                width: 100%;
            }

            .center {
                margin-top: 10px;
                margin-bottom: 0px;
                
            } 
        }

    </style>

</head>
<body>

<!-- Navigation Bar -->
    <?php include 'navbarnon.php'; ?>
    
    <div class="container-fluid">
        <!-- <div class="box">
            <a href = "https://www.google.com/maps/place/Vardhaman+Electric+%26+Hardware/@19.0342059,73.0199095,15z/data=!4m12!1m6!3m5!1s0x0:0x1bc51328ed970556!2sSwastik+Hardware!8m2!3d19.0342059!4d73.0199095!3m4!1s0x0:0x8e6a95b56ff7cc4e!8m2!3d19.0294825!4d73.0230707" target="_blank"><img src="images/hardware/vard1.jpg" alt="No Image" width="500" height="400" class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <a href="shiv.php"><button type="button" class="btn btn-outline-dark btn-edit">Previous</button></a>
            </div>
            <div class="column">
                <a href = "https://www.google.com/maps/place/Vardhaman+Electric+%26+Hardware/@19.0342059,73.0199095,15z/data=!4m12!1m6!3m5!1s0x0:0x1bc51328ed970556!2sSwastik+Hardware!8m2!3d19.0342059!4d73.0199095!3m4!1s0x0:0x8e6a95b56ff7cc4e!8m2!3d19.0294825!4d73.0230707" target="_blank"><img src="images/hardware/vard1.jpg" alt="No Image Available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <a href="ply.php"><button type="button" class="btn btn-outline-dark btn-edit">Next</button></a>
            </div>
        </div>

        <div class="text-center text-danger">
            <p>This is not a verified service</p>
        </div>
        
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '29'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>

        <div class="text-center" style="margin-bottom: 10px;">
            <form action="fav_insert.php" method="POST">
                <button type="submit" class="btn btn-outline-danger" name="add_fav">Add to Favourites</button>
                <input type="hidden" name="place" value="Vardhaman Electric & Hardware">
                <input type="hidden" name="address" value="Shop No 12, Seawoods Arcade, Plot No 65, Sector No 19, Nerul, Navi Mumbai - 400706, Opp Agrawal Corner">
                <input type="hidden" name="contact" value="9820227561">
            </form>
        </div>

        <div>
            <a href="hardware.php"><button type="button" class="btn btn-success">
            &larr; Back to Hardware Stores</button></a>
        </div>

    </div> 

</body>
</html>
