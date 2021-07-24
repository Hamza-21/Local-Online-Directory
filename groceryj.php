<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grocery Shops</title>
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
    <?php include 'navbar.php'; ?> 
    <h5 class="text-center">Note: Click on the button once to display, click again to hide</h5>
    <div class="text-center">
        <div class="btn btn-group btn-edit">

            <div>
                <button onclick="loadcontent1()" class="btn btn-outline-dark">Shop 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">Shop 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">Shop 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark">Shop 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark">Shop 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark">Shop 6</button>
            </div>

        </div>
    </div>

    <!-- DMart Store -->
    <div class="container" id="gstore1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/D+Mart+Nerul/@19.0311954,73.0219966,15z/data=!4m2!3m1!1s0x0:0x2e0d5332b960d244?sa=X&ved=2ahUKEwix_ejEiZntAhUGwTgGHTHTAa8Q_BIwE3oECCMQBQ" target="_blank"><img src="images/grocery/dmart1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '41'";
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

    <!-- Krishna Grocery Store -->
    <div class="container" id="gstore2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbm=lcl&sxsrf=ALeKk01w846VN4i12xlNII_iBxaQW-oVrw%3A1606148660025&ei=NOK7X7qBAfGc4-EP2oal-Aw&q=krishna+super+market+juinagar&oq=krishna+super+market+juinagar&gs_l=psy-ab.3..38.4207.5563.0.5801.8.8.0.0.0.0.195.1161.0j8.8.0....0...1c.1.64.psy-ab..0.8.1159...0i457i22i30k1.0.NuYRTqCltGs#rlfi=hd:;si:16940724967508764910;mv:[[19.05035397731903,73.01581240522029],[19.049994022680973,73.01543159477968]]" target="_blank"><img src="images/grocery/kri1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '43'";
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

    <!-- Vishwas Grocery -->
    <div class="container" id="gstore3" style="display: none;">
        <div class="box">
            <a href = "https://www.justdial.com/Mumbai/Vishwas-General-Store-Near-Bus-Depot-Nerul/022PXX22-XX22-141103180250-R1R8_BZDET" target="_blank"><img src="images/grocery/grocery.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '44'";
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
    <div class="container" id="gstore4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Shree+Ashapura+General+Store/@19.033872,73.021307,15z/data=!4m2!3m1!1s0x0:0x2b1004ffe16c901e?sa=X&ved=2ahUKEwiS-pHgipntAhVCyDgGHVOeAFsQ_BIwCnoECBEQAw" target="_blank"><img src="images/grocery/grocery.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '45'";
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

    <!-- Reliance Fresh -->
    <div class="container" id="gstore5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Reliance+Fresh/@19.0388799,73.025881,15z/data=!4m5!3m4!1s0x0:0x88ff25340f075acc!8m2!3d19.0388799!4d73.025881" target="_blank"><img src="images/grocery/rel1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '42'";
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

    <!-- Apna Bazaar -->
    <div class="container" id="gstore6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Apna+Bazar/@19.0415686,73.0095009,15z/data=!4m5!3m4!1s0x0:0xd276fe0aee936535!8m2!3d19.0415686!4d73.0095009" target="_blank"><img src="images/grocery/apn1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '46'";
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

            // Dmart

            function loadcontent1() {
                var x = document.getElementById("gstore1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Krishna Grocery

            function loadcontent2() {
                var x = document.getElementById("gstore2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Vishwas Grocery

            function loadcontent3() {
                var x = document.getElementById("gstore3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Shree Grocery

            function loadcontent4() {
                var x = document.getElementById("gstore4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Reliance Fresh

            function loadcontent5() {
                var x = document.getElementById("gstore5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Apna Bazaar

            function loadcontent6() {
                var x = document.getElementById("gstore6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>