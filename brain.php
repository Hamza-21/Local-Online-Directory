<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice Cream</title>
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
            height: 400px;
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
            <a href = "https://www.google.com/maps/place/BRAIN+FREEZE+ICE+CREAM+%26+DESSERTS/@19.0207383,73.0172644,15z/data=!4m5!3m4!1s0x0:0xcce4e232446cdba2!8m2!3d19.0207383!4d73.0172644" target="_blank"><img src="images/ice/brain.jpg" alt="No Image" width="500" height="400" class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <a href="frost.php"><button type="button" class="btn btn-outline-dark btn-edit">Previous</button></a>
            </div>
            <div class="column text-center">
                <a href = "https://www.google.com/maps/place/BRAIN+FREEZE+ICE+CREAM+%26+DESSERTS/@19.0207383,73.0172644,15z/data=!4m5!3m4!1s0x0:0xcce4e232446cdba2!8m2!3d19.0207383!4d73.0172644" target="_blank"><img src="images/ice/brain.jpg" alt="No Image available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <button type="button" class="btn btn-outline-dark btn-edit" disabled>Next</button>
            </div>
        </div>

        <div class="text-center text-success">
            <p>This is a verified service</p>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '39'";
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
                <input type="hidden" name="place" value="Brain Freeze Ice Cream And Desserts">
                <input type="hidden" name="address" value="Shop No 16, Plot No 46/47, Ramkrishna Niwas Co Operative Housing Society, Seawoods, Navi Mumbai - 400706, Near Sector 40, Opposite Seawoods Grand Central Mall">
                <input type="hidden" name="contact" value="8657368996">
            </form>
        </div>

        <div>
            <a href="ice.php"><button type="button" class="btn btn-success">&larr; Back to Ice-cream Parlours</button></a>
        </div>

    </div> 

</body>
</html>
