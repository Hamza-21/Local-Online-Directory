<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gas Stations</title>
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark btn-edit">Gas Station 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark btn-edit">Gas Station 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark btn-edit">Gas Station 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark btn-edit">Gas Station 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark btn-edit">Gas Station 5</button>
            </div> 
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark btn-edit">Gas Station 6</button>
            </div>

        </div>
    </div>

    <!-- Indian Oil -->
    <div class="container" id="station1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?q=Indian%20Oil%20Fuel%20Station%20nerul&rlz=1C1RLNS_enIN906IN906&oq=Indian+Oil+Fuel+Station+neurl&aqs=chrome..69i57j33i10i160l3.2735j0j7&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk01_uuH92vQefxaCgWU7-H0fz_uisA:1607681537677&rflfq=1&num=10&rldimm=10924708504425740025&lqi=Ch1JbmRpYW4gT2lsIEZ1ZWwgU3RhdGlvbiBuZXJ1bCIDiAEBSMGQourmgICACFpKChdpbmRpYW4gb2lsIGZ1ZWwgc3RhdGlvbhAAEAEQAhADGAAYARgCGAMYBCIdaW5kaWFuIG9pbCBmdWVsIHN0YXRpb24gbmVydWw&ved=2ahUKEwjE6du32MXtAhWYdn0KHVfHCEQQvS4wAXoECAEQKA&rlst=f#rlfi=hd:;si:10924708504425740025,l,Ch1JbmRpYW4gT2lsIEZ1ZWwgU3RhdGlvbiBuZXJ1bCIDiAEBSMGQourmgICACFpKChdpbmRpYW4gb2lsIGZ1ZWwgc3RhdGlvbhAAEAEQAhADGAAYARgCGAMYBCIdaW5kaWFuIG9pbCBmdWVsIHN0YXRpb24gbmVydWw;mv:[[19.0923929,73.0794042],[19.0173868,72.99890070000001]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/petrol/ind1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '2'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Indian Oil Fuel Station</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div> 

    <!-- Shri Sai Auto Service -->
    <div class="container" id="station2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Indian+Oil+Shri+Sai+Auto+Service/@19.0456728,73.0239591,15z/data=!4m5!3m4!1s0x0:0x6ea9772603f8aae0!8m2!3d19.0456728!4d73.0239591" target="_blank"><img src="images/petrol/shri.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '3'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Shri Sai Auto Service</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div> 

    <!-- Anuj Auto -->
    <div class="container" id="station3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Anuj+Automobile/@18.9836684,73.1132279,15z/data=!4m2!3m1!1s0x0:0xf559b79e5b00633a?sa=X&ved=2ahUKEwjC-YXQ2cXtAhUIxTgGHcFZDeIQ_BIwE3oECB8QBQ" target="_blank"><img src="images/petrol/petrol.png" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '4'";
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

    <!-- Gyan Automobiles -->
    <div class="container" id="station4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/HP+Petrol+Pump+-+Gian+Automobile/@19.02403,73.02188,15z/data=!4m2!3m1!1s0x0:0xfba6611b42c7829?sa=X&ved=2ahUKEwji16r32cXtAhXbyDgGHUSfAakQ_BIwE3oECBsQBQ" target="_blank"><img src="images/petrol/gyan1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '5'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Gyan Automobiles</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div> 

    <!-- Om Sai Petroleum -->
    <div class="container" id="station5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/OM+Sai+Petroleum+Petrol+pump/@19.020257,73.028477,15z/data=!4m2!3m1!1s0x0:0xb3678a4c049975e3?sa=X&ved=2ahUKEwiftIyz2sXtAhWCwzgGHcPGDBIQ_BIwDHoECBUQBQ" target="_blank"><img src="images/petrol/sai.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '6'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Om Sai Petroleum</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div>

    <!-- HP Petrol Pump -->
    <div class="container" id="station6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Hindustan+Petroleum/@19.013281,73.013447,15z/data=!4m5!3m4!1s0x0:0xc57da76e8f394d60!8m2!3d19.013281!4d73.013447" target="_blank"><img src="images/petrol/hp1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '7'";
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

            // Indian Oil

            function loadcontent1() {
                var x = document.getElementById("station1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Shri Sai Auto Service

            function loadcontent2() {
                var x = document.getElementById("station2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Anuj Auto

            function loadcontent3() {
                var x = document.getElementById("station3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Gyan Automobiles

            function loadcontent4() {
                var x = document.getElementById("station4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Om Sai Petroleum

            function loadcontent5() {
                var x = document.getElementById("station5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // HP Petrol Pump

            function loadcontent6() {
                var x = document.getElementById("station6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>