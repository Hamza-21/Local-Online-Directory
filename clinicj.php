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
                <button onclick="loadcontent1()" class="btn btn-outline-dark">Clinic 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">Clinic 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">Clinic 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark">Clinic 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark">Clinic 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark">Clinic 6</button>
            </div>

        </div>
    </div>

    <!-- Healthspring Clinic -->
    <div class="container" id="clinic1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Healthspring+Nerul/@19.0424416,73.0096493,15z/data=!4m5!3m4!1s0x0:0xdc94bf36922487c4!8m2!3d19.0424416!4d73.0096493" target="_blank"><img src="images/clinic/spring1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '29'";
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

    <!-- Apollo Sugar Clinic -->
    <div class="container" id="clinic2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Apollo+Sugar+Clinics+%26+Hospital+-+Best+Diabetologist+%26+Endocrinologist+in+CBD+Belapur+Navi+Mumbai/@19.020651,73.029422,15z/data=!4m2!3m1!1s0x0:0x35016f3a76db16cc?sa=X&ved=2ahUKEwiwpdvPmIrtAhWExDgGHQudDoYQ_BIwCnoECBIQBQ" target="_blank"><img src="images/clinic/apollo1.jpg" alt="No Image" width="500" class="center"></a>
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
    </div>

    <!-- Bansal Speciality Clinic -->
    <div class="container" id="clinic3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Bansal+Clinic+-+Orthopedic+and+Spine+Specialist+%7C+Gynaecologist+%7C+Obstetrics/@19.0274227,73.0230952,15z/data=!4m5!3m4!1s0x0:0xd82ee1a7e3b2579!8m2!3d19.0274227!4d73.0230952?hl=en" target="_blank"><img src="images/clinic/bansal1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '31'";
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


    <!-- Shivangi Clinic -->
    <div class="container" id="clinic4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Shivangi+Clinic+-+Dr.+Tripti+Dubey+Yadav/@19.0200186,73.0169654,15z/data=!4m5!3m4!1s0x0:0xd6d5c5d0ad859763!8m2!3d19.0200186!4d73.0169654?hl=en" target="_blank"><img src="images/clinic/shivangi1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '32'";
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

    <!-- Dnyan Raj's True Health Clinic -->
    <div class="container" id="clinic5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Dnyan+Raj's+TRUE+HEALTH+CARE/@19.043427,73.0153801,15z/data=!4m2!3m1!1s0x0:0xe5cc1cdb8163c561?sa=X&ved=2ahUKEwjmxrXui5ntAhX_4zgGHcu8DRYQ_BIwCnoECBIQBQ" target="_blank"><img src="images/clinic/dnyan1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '33'";
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

    <!-- Aesthe Dental Clinic -->
    <div class="container" id="clinic6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Aesthe+Touch+Dental+Care/@19.0155772,73.0223732,15z/data=!4m5!3m4!1s0x0:0x1c4fc93872a84276!8m2!3d19.0155772!4d73.0223732?hl=en" target="_blank"><img src="images/clinic/dental1.jpg" alt="No Image" width="500" height="400" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '34'";
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

            // Health Spring

            function loadcontent1() {
                var x = document.getElementById("clinic1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Apollo Sugar

            function loadcontent2() {
                var x = document.getElementById("clinic2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Bansal Clinic

            function loadcontent3() {
                var x = document.getElementById("clinic3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Shivangi Clinic

            function loadcontent4() {
                var x = document.getElementById("clinic4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Dnyan Clinic

            function loadcontent5() {
                var x = document.getElementById("clinic5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Aesthe Dental Clinic

            function loadcontent6() {
                var x = document.getElementById("clinic6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>