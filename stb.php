<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafes</title>
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
            height: 300px;
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
            <a href = "https://www.google.com/maps/place/Starbucks/@19.0213091,73.0181987,15z/data=!4m2!3m1!1s0x0:0xc57f4ef9546a240f?sa=X&hl=en&ved=2ahUKEwjDm5-KzpHtAhX7yTgGHX1CA8gQ_BIwC3oECBMQBQ" target="_blank"><img src="images/cafe/stb1.jpg" alt="No Image" width="700" class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <a href="ccd.php"><button type="button" class="btn btn-outline-dark btn-edit">Previous</button></a>
            </div>
            <div class="column text-center">
                <a href="https://www.google.com/maps/place/Starbucks/@19.0213091,73.0181987,15z/data=!4m2!3m1!1s0x0:0xc57f4ef9546a240f?sa=X&hl=en&ved=2ahUKEwjDm5-KzpHtAhX7yTgGHX1CA8gQ_BIwC3oECBMQBQ" target="_blank"><img src="images/cafe/stb1.jpg" alt="No Image Available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <button type="button" class="btn btn-outline-dark btn-edit" disabled>Next</button>
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

            $sql = "SELECT name, address, contact FROM cafe WHERE id = '6'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Starbucks</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
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
                <input type="hidden" name="place" value="Starbucks">
                <input type="hidden" name="address" value="UG Level, Seawoods Grand Central, Sector 40, Nerul, Navi Mumbai, Maharashtra 400706">
                <input type="hidden" name="contact" value="7045107808">
            </form>
        </div>

        <div>
            <a href="cafe.php"><button type="button" class="btn btn-success">&larr; Back to Cafés</button></a>
        </div>

    </div> 

</body>
</html>
