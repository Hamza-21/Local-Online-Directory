<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hardware Stores</title>
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark">Store 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">Store 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">Store 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark">Store 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark">Store 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark">Store 6</button>
            </div>

        </div>
    </div>

    <!-- Selection Plywood Hardware -->
    <div class="container" id="hstore1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Selection+Plywood+%26+Hardware/@19.041006,73.009519,15z/data=!4m5!3m4!1s0x0:0x3c29d20909bd008f!8m2!3d19.041006!4d73.009519" target="_blank"><img src="images/hardware/sel.webp" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '25'";
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

    <!-- Draksha Park Hardware -->
    <div class="container" id="hstore2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Draksha+Park/@19.041668,73.014592,15z/data=!4m2!3m1!1s0x0:0xadecd0d8a78f61f6?sa=X&ved=2ahUKEwjdpu-S_NHtAhUoyzgGHS1SBkUQ_BIwE3oECB8QBQ" target="_blank"><img src="images/hardware/drak1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '26'";
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

    <!-- Swastik Hardware -->
    <div class="container" id="hstore3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Swastik+Hardware/@19.0342059,73.0199095,15z/data=!4m5!3m4!1s0x0:0x1bc51328ed970556!8m2!3d19.0342059!4d73.0199095" target="_blank"><img src="images/hardware/swas1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '27'";
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

    <!-- Shree Grocery -->
    <div class="container" id="hstore4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Shivam+Electric+%26+Hardware/@19.0341406,73.0198696,15z/data=!4m2!3m1!1s0x0:0xbbbb3bfe84e02600?sa=X&ved=2ahUKEwjBsoPM_tHtAhXRwjgGHb4hB_UQ_BIwCnoECBAQBQ" target="_blank"><img src="images/hardware/shiv1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '28'";
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

    <!-- Vardhaman Electric & Hardware -->
    <div class="container" id="hstore5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Vardhaman+Electric+%26+Hardware/@19.0342059,73.0199095,15z/data=!4m12!1m6!3m5!1s0x0:0x1bc51328ed970556!2sSwastik+Hardware!8m2!3d19.0342059!4d73.0199095!3m4!1s0x0:0x8e6a95b56ff7cc4e!8m2!3d19.0294825!4d73.0230707" target="_blank"><img src="images/hardware/vard1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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
    </div>

    <!-- Ply Point Hardware -->
    <div class="container" id="hstore6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Ply+Point/@19.0305605,73.0223939,15z/data=!4m5!3m4!1s0x0:0xd59da72d26634c87!8m2!3d19.0305605!4d73.0223939" target="_blank"><img src="images/hardware/ply1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '30'";
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

            // Selection Plywood Hardware

            function loadcontent1() {
                var x = document.getElementById("hstore1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Draksha Park Hardware

            function loadcontent2() {
                var x = document.getElementById("hstore2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Swastik Hardware

            function loadcontent3() {
                var x = document.getElementById("hstore3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Shivam Electrical & Hardware Store

            function loadcontent4() {
                var x = document.getElementById("hstore4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Vardhaman Electric & Hardware

            function loadcontent5() {
                var x = document.getElementById("hstore5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Ply Point Hardware

            function loadcontent6() {
                var x = document.getElementById("hstore6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>