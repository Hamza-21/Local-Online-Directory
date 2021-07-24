<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Enrichment</title>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

        .btn-edit{
            padding: 10px;
        } 

        .button{
            font-size: 15px;
        }

        .box{
            margin-left: auto;
            margin-right: auto;
            width: 500px;
        }

        .center {
            display: block;
            margin-top: 20px;
            margin-bottom: 20px;
            border: 4px solid #000000;
        }

        @media screen and (max-width: 800px) { 
            .center { width: 400px }
        }

        @media screen and (max-width: 450px) { 
            .center { 
                width: 300px;
                }
            .box {
                width: 300px;
            }
        }

    </style>
</head>


<body>

<!-- Navigation Bar -->
    <?php include 'navbarnon.php'; ?> 
    <h5 class="text-center">Note: Click on the button once to display, click again to hide</h5>
    <div class="text-center">
        <div class="btn btn-group btn-edit">

            <div>
                <button onclick="loadcontent1()" class="btn btn-outline-dark">Pets 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">Pets 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">Pets 3</button>
            </div>

        </div>
    </div>

    <!-- Yes Says Doggie -->
    <div class="container" id="pet1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Yes+Says+Doggie+Salon/@19.0120445,73.0235263,15z/data=!4m2!3m1!1s0x0:0x27d0f74bd6b263dc?sa=X&ved=2ahUKEwiLtK2Ck9LtAhWRbysKHf6qA-IQ_BIwDXoECBQQBQ" target="_blank"><img src="images/pet/yes1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '40'";
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
    </div> 

    <!-- Dogs N Pups -->
    <div class="container" id="pet2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Dogs+'N'+Pups+%7C+The+Pet+Shop+-+Nerul/@19.0437042,73.0118205,15z/data=!4m5!3m4!1s0x0:0x305997fdb8ceab8d!8m2!3d19.0437042!4d73.0118205" target="_blank"><img src="images/pet/pup1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '41'";
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
    </div>

    <!-- Pets 4 U -->
    <div class="container" id="pet3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Pets+4+U/@19.015383,73.013583,15z/data=!4m2!3m1!1s0x0:0x29c61667de936a24?sa=X&ved=2ahUKEwjko5fEk9LtAhVIfSsKHb4bADMQ_BIwDXoECBYQBQ" target="_blank"><img src="images/pet/pets1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '42'";
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
    </div> 

        <script>

            // Yes Says Doggie

            function loadcontent1() {
                var x = document.getElementById("pet1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Dogs N Pups

            function loadcontent2() {
                var x = document.getElementById("pet2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Pets 4 U

            function loadcontent3() {
                var x = document.getElementById("pet3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>