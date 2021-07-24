<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinics</title>
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

    <?php include 'navbar.php'; ?>
    <div class="container-fluid">
        <!-- <div class="box">
            <a href = "https://www.google.com/maps/place/Apollo+Sugar+Clinics+%26+Hospital+-+Best+Diabetologist+%26+Endocrinologist+in+CBD+Belapur+Navi+Mumbai/@19.020651,73.029422,15z/data=!4m2!3m1!1s0x0:0x35016f3a76db16cc?sa=X&ved=2ahUKEwiwpdvPmIrtAhWExDgGHQudDoYQ_BIwCnoECBIQBQ" target="_blank"><img src="images/clinic/apollo1.jpg" alt="No Image" width="500" class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <a href="info.php"><button type="button" class="btn btn-outline-dark btn-edit">Previous</button></a>
            </div>
            <div class="column text-center">
                <a href="https://www.google.com/maps/place/Apollo+Sugar+Clinics+%26+Hospital+-+Best+Diabetologist+%26+Endocrinologist+in+CBD+Belapur+Navi+Mumbai/@19.020651,73.029422,15z/data=!4m2!3m1!1s0x0:0x35016f3a76db16cc?sa=X&ved=2ahUKEwiwpdvPmIrtAhWExDgGHQudDoYQ_BIwCnoECBIQBQ" target="_blank"><img src="images/clinic/apollo1.jpg" alt="No Image Available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <a href="bansal.php"><button type="button" class="btn btn-outline-dark btn-edit">Next</button></a>
            </div>
        </div>

        <div class="text-center text-success">
            <p>This is a verified service</p>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '30'";
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
                <input type="hidden" name="place" value="Apollo Sugar Clinic">
                <input type="hidden" name="address" value="Parsik Hill Road, Ekta Vihar-Cbd Belapur, Sector Number- 21, Off Uran Nerul Road, Landmark: Opposite Wounderspark, Navi Mumbai">
                <input type="hidden" name="contact" value="8049475028">
            </form>
        </div>

        <div>
            <a href="clinic.php"><button type="button" class="btn btn-success">&larr; Back to Clinics</button></a>
        </div>

    </div> 

</body>
</html>
