<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice-Cream Parlours</title>
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

            .btn-edit {
                font-size: 12px;
            }
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark btn-edit">Parlour 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark btn-edit">Parlour 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark btn-edit">Parlour 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark btn-edit">Parlour 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark btn-edit">Parlour 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark btn-edit">Parlour 6</button>
            </div>

        </div>
    </div>

    <!-- Natural Ice Cream Parlour -->
    <div class="container" id="parlour1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Natural+Ice+Cream/@19.0203159,73.018111,15z/data=!4m2!3m1!1s0x0:0x303ba503c44036cc?sa=X&ved=2ahUKEwjBlqe5j9LtAhXlH7cAHYbMB7EQ_BIwE3oECCQQBQ" target="_blank"><img src="images/ice/natur1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '34'";
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

    <!-- Havmor Ice Cream -->
    <div class="container" id="parlour2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Havmor+Havfunn+Ice+Cream+Parlour/@19.0250584,73.0209876,15z/data=!4m2!3m1!1s0x0:0x4f8800af118fbfb9?sa=X&ved=2ahUKEwj5m-fbj9LtAhX1zjgGHbUQBvAQ_BIwEXoECCEQBQ" target="_blank"><img src="images/ice/havmor1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '35'";
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

    <!-- Icekraft -->
    <div class="container" id="parlour3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/IceKraft/@19.011437,73.012173,15z/data=!4m2!3m1!1s0x0:0x1c6b4d96ba4ae3f5?sa=X&ved=2ahUKEwiT-Z__j9LtAhU44zgGHaSHC_sQ_BIwFXoECCEQBQ" target="_blank"><img src="images/ice/kraft1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '36'";
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

    <!-- A1 Ice Cream And Juice Centre -->
    <div class="container" id="parlour4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/A1+Juice+Center/@19.0339207,73.0179376,15z/data=!4m5!3m4!1s0x0:0xa6850acf9b62ab62!8m2!3d19.0375617!4d73.020019" target="_blank"><img src="images/ice/a1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '37'";
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

    <!-- The Frosty Cream -->
    <div class="container" id="parlour5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/The+Frosty+Cream/@19.0111882,73.0120317,15z/data=!4m5!3m4!1s0x0:0x4d69a6e2975124e7!8m2!3d19.0111882!4d73.0120317" target="_blank"><img src="images/ice/frost1.webp" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM nonessen WHERE id = '38'";
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

    <!-- Brain Freeze -->
    <div class="container" id="parlour6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/BRAIN+FREEZE+ICE+CREAM+%26+DESSERTS/@19.0207383,73.0172644,15z/data=!4m5!3m4!1s0x0:0xcce4e232446cdba2!8m2!3d19.0207383!4d73.0172644" target="_blank"><img src="images/ice/brain.jpg" alt="No Image" width="500" height="400" class="center"></a>
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
    </div>

        <script>

            // Natural Ice Cream

            function loadcontent1() {
                var x = document.getElementById("parlour1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Havmor

            function loadcontent2() {
                var x = document.getElementById("parlour2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Icekraft

            function loadcontent3() {
                var x = document.getElementById("parlour3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // A1 Ice Cream And Juice Centre

            function loadcontent4() {
                var x = document.getElementById("parlour4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // The Frosty Cream

            function loadcontent5() {
                var x = document.getElementById("parlour5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Brain Freeze

            function loadcontent6() {
                var x = document.getElementById("parlour6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>