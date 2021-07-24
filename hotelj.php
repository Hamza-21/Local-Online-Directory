<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotels</title>
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
    <?php include 'navbarnon.php'; ?> 
    <h5 class="text-center">Note: Click on the button once to display, click again to hide</h5>
    <div class="text-center">
        <div class="btn btn-group btn-edit">

            <div>
                <button onclick="loadcontent1()" class="btn btn-outline-dark">Hotel 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">Hotel 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">Hotel 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark">Hotel 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark">Hotel 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark">Hotel 6</button>
            </div>

        </div>
    </div>

    <!-- Hotel Starwood -->
    <div class="container" id="hotel1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/OYO+19748+Starwood+Residency+Hotel+Mumbai/@19.050941,73.020046,15z/data=!4m2!3m1!1s0x0:0x624ad7ba1a84c8e4?sa=X&ved=2ahUKEwi7uL70uJHtAhWRwzgGHT0FC_QQ_BIwDXoECBYQBQ" target="_blank"><img src="images/hotels/star1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM hotel WHERE id = '1'";
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

    <!-- Sky Suites by Monarch -->
    <div class="container" id="hotel2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Sky+Suites+by+Monarch/@19.0616374,73.0026103,15z/data=!4m2!3m1!1s0x0:0x1f954e2afe9a0a71?sa=X&ved=2ahUKEwiujr7GuZHtAhXLzTgGHZpJAKoQ_BIwDXoECBMQBQ" target="_blank"><img src="images/hotels/sky1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM hotel WHERE id = '5'";
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

    <!-- The Park -->
    <div class="container" id="hotel3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/The+Park+Hotel+Navi+Mumbai/@19.025015,73.0369429,15z/data=!4m2!3m1!1s0x0:0x37deb2a938bd9e94?sa=X&hl=en&ved=2ahUKEwivwKL7uZHtAhVNxjgGHQfIC20Q_BIwFnoECBUQBQ" target="_blank"><img src="images/hotels/park1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM hotel WHERE id = '4'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>The Park</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div> 

    <!-- Raj Inn Guest House -->
    <div class="container" id="hotel4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/SPOT+ON+24681+Hotel+Raj+Inn/@19.0478334,73.0276244,15z/data=!4m2!3m1!1s0x0:0xf7519e62babbd0f0?sa=X&ved=2ahUKEwiR2Z_AupHtAhWZ4zgGHX8GC8gQ_BIwDHoECBUQBQ" target="_blank"><img src="images/hotels/raj1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM hotel WHERE id = '3'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Raj Inn Guest House</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div> 

    <!-- Aishwarya Residency -->
    <div class="container" id="hotel5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/OYO+2026+Hotel+Aishwarya+Residency/@19.0247228,73.0184144,15z/data=!4m2!3m1!1s0x0:0xee7c2594c4398f80?sa=X&ved=2ahUKEwjFm5n3upHtAhVT4zgGHWN7Cl4Q_BIwDXoECBQQBQ" target="_blank"><img src="images/hotels/aish1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM hotel WHERE id = '2'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Aishwarya Residency</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div>

    <!-- Season's Hotel -->
    <div class="container" id="hotel6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Seasons+Hotel-+Nerul/@19.0345535,73.0289866,15z/data=!4m8!3m7!1s0x0:0xc2c3fd020ba15358!5m2!4m1!1i2!8m2!3d19.0345535!4d73.0289866" target="_blank"><img src="images/hotels/sea1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM hotel WHERE id = '6'";
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

            // Hotel Starwood

            function loadcontent1() {
                var x = document.getElementById("hotel1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Sky Suites by Monarch

            function loadcontent2() {
                var x = document.getElementById("hotel2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // The Park

            function loadcontent3() {
                var x = document.getElementById("hotel3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Raj Inn Guest House

            function loadcontent4() {
                var x = document.getElementById("hotel4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Aishwarya Residency

            function loadcontent5() {
                var x = document.getElementById("hotel5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Season's Hotel

            function loadcontent6() {
                var x = document.getElementById("hotel6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>