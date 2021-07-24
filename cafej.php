<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafés</title>
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark">Café 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">Café 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">Café 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark">Café 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark">Café 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark">Café 6</button>
            </div>

        </div>
    </div>

    <!-- Contigo Café -->
    <div class="container" id="cafe1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Contigo+Cafe/@19.0917045,73.0052732,15z/data=!4m2!3m1!1s0x0:0x6988f42dd67079ee?sa=X&ved=2ahUKEwjmmY_xtbrvAhUjyzgGHfQaA8UQ_BIwE3oECCYQBQ" target="_blank"><img src="images/cafe/cont1.webp" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM cafe WHERE id = '1'";
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

    <!-- Café Creme -->
    <div class="container" id="cafe2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Cafe+Creme/@19.0895895,73.0074999,15z/data=!4m2!3m1!1s0x0:0x93cc9ffcee218f57?sa=X&ved=2ahUKEwjB84CMtrrvAhXAzDgGHfRYCbgQ_BIwHHoECCwQBQ" target="_blank"><img src="images/cafe/cre1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM cafe WHERE id = '2'";
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

    <!-- Lokal Café & Bistro -->
    <div class="container" id="cafe3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/LOKAL+CAFE+%26+BISTRO/@19.027452,73.0557452,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c3804b6fbd6d:0x81cabe3f7442cfdc!8m2!3d19.0274469!4d73.0579339" target="_blank"><img src="images/cafe/lok1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM cafe WHERE id = '3'";
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

    <!-- Hugs & Mugs -->
    <div class="container" id="cafe4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Hugs+And+Mugs/@19.033862,73.063609,15z/data=!4m2!3m1!1s0x0:0x936f205a38c2abf0?sa=X&ved=2ahUKEwidlPqKzZHtAhW1zTgGHTxxBaQQ_BIwC3oECBMQBQ" target="_blank"><img src="images/cafe/hugs1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM cafe WHERE id = '4'";
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

    <!-- CCD -->
    <div class="container" id="cafe5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Cafe+Coffee+Day/@19.0461163,73.0242626,15z/data=!4m5!3m4!1s0x0:0xf22e9186d393312f!8m2!3d19.0461163!4d73.0242626" target="_blank"><img src="images/cafe/ccd1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM cafe WHERE id = '5'";
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

    <!-- Starbucks -->
    <div class="container" id="cafe6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Starbucks/@19.0213091,73.0181987,15z/data=!4m2!3m1!1s0x0:0xc57f4ef9546a240f?sa=X&hl=en&ved=2ahUKEwjDm5-KzpHtAhX7yTgGHX1CA8gQ_BIwC3oECBMQBQ" target="_blank"><img src="images/cafe/stb1.jpg" alt="No Image" width="700" class="center"></a>
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
    </div>

        <script>

            // Contigo Café

            function loadcontent1() {
                var x = document.getElementById("cafe1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Creme

            function loadcontent2() {
                var x = document.getElementById("cafe2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Lokal Bistro

            function loadcontent3() {
                var x = document.getElementById("cafe3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Hugs & Mugs

            function loadcontent4() {
                var x = document.getElementById("cafe4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // CCD

            function loadcontent5() {
                var x = document.getElementById("cafe5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Starbucks

            function loadcontent6() {
                var x = document.getElementById("cafe6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>