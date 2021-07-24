<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schools</title>
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark">School 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">School 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">School 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark">School 4</button>
            </div>

        </div>
    </div>

    <!-- Apeejay -->
    <div class="container" id="school1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Apeejay+School+(Nerul)+-+Navi+Mumbai/@19.035376,73.021064,15z/data=!4m2!3m1!1s0x0:0x1361c939173c9106?sa=X&ved=2ahUKEwjP3K_Ai9LtAhUUyDgGHTAzDckQ_BIwHHoECC8QBQ" target="_blank"><img src="images/schools/apj1.jpeg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '19'";
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

    <!-- DPS -->
    <div class="container" id="school2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Delhi+Public+School,+Navi+Mumbai/@19.0055371,73.0184506,15z/data=!4m5!3m4!1s0x0:0x129d6afa541fb994!8m2!3d19.0055371!4d73.0184506" target="_blank"><img src="images/schools/dps1.webp" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '20'";
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

    <!-- Jaipuriar -->
    <div class="container" id="school3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Jaipuriar+School/@19.056319,73.0054224,15z/data=!4m2!3m1!1s0x0:0x7df8417a79392a51?sa=X&ved=2ahUKEwi0zoabjNLtAhXUyDgGHffxCBUQ_BIwFXoECCoQBQ" target="_blank"><img src="images/schools/jaip1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '21'";
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

    <!-- DAV -->
    <div class="container" id="school4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/DAV+Public+School+Nerul/@19.0129963,73.0153445,15z/data=!4m5!3m4!1s0x0:0x719dd41d7ac88d91!8m2!3d19.0129963!4d73.0153445" target="_blank"><img src="images/schools/dav1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '23'";
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

            // Apeejay

            function loadcontent1() {
                var x = document.getElementById("school1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // DPS

            function loadcontent2() {
                var x = document.getElementById("school2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Jaipuriar

            function loadcontent3() {
                var x = document.getElementById("school3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // DAV

            function loadcontent4() {
                var x = document.getElementById("school4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>