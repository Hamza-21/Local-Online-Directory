<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gynaecologists</title>
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
                font-size: 9.5px;
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
    <?php include 'navbar.php'; ?> 
    <h5 class="text-center">Note: Click on the button once to display, click again to hide</h5>
    <div class="text-center">
        <div class="btn btn-group btn-edit">

            <div>
                <button onclick="loadcontent1()" class="btn btn-outline-dark btn-edit">Gynaecologist 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark btn-edit">Gynaecologist 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark btn-edit">Gynaecologist 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark btn-edit">Gynaecologist 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark btn-edit">Gynaecologist 5</button>
            </div> 
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark btn-edit">Gynaecologist 6</button>
            </div>

        </div>
    </div>

    <!-- DY Patil Healthcare -->
    <div class="container" id="gynae1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/D+Y+Patil+Hospital/@19.0411561,73.0246854,15z/data=!4m5!3m4!1s0x0:0xa446b85191e625c8!8m2!3d19.0411561!4d73.0246854?hl=en" target="_blank"><img src="images/gynae/dy1.jpeg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '17'";
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

    <!-- Tulsi Maternity & Gynaecology Clinic -->
    <div class="container" id="gynae2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Tulsi+Maternity+%26+Gynaecology+Clinic/@19.0200873,73.0165129,15z/data=!4m5!3m4!1s0x0:0x85b7becf167214b4!8m2!3d19.0200873!4d73.0165129" target="_blank"><img src="images/gynae/tulsi1.jpg" alt="No Image" width="500" height="350"class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '18'";
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

    <!-- Shree Women Clinic -->
    <div class="container" id="gynae3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Radha+Krishna+Chs+Ltd,+Krishna+Changa+Naik+Marg,+Seawoods+West,+Karave+Nagar,+Seawoods,+Navi+Mumbai,+Maharashtra+400706/@19.0160413,73.0137793,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c3986cff8049:0x1aaf06e45af861a6!8m2!3d19.0160413!4d73.015968" target="_blank"><img src="images/gynae/shr1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '19'";
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

    <!-- Motherhood Hospital -->
    <div class="container" id="gynae4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Motherhood+Hospital+-+Kharghar,+Navi+Mumbai/@19.0357324,73.0632202,15z/data=!4m5!3m4!1s0x0:0x73fab948d50aaf4c!8m2!3d19.0357324!4d73.0632202" target="_blank"><img src="images/gynae/moth.jpg" alt="No Image" width="500" height="350" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '20'";
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

    <!-- Apollo Hospitals -->
    <div class="container" id="gynae5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Apollo+Hospitals/@19.0205055,73.0289405,15z/data=!4m5!3m4!1s0x0:0xa0fac0993993ee7c!8m2!3d19.0205055!4d73.0289405?hl=en" target="_blank"><img src="images/gynae/apollo1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '21'";
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

    <!-- Terna Speciality Hospital -->
    <div class="container" id="gynae6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Terna+Speciality+Hospital+%26+Research+Centre/@19.0315617,73.0162449,15z/data=!4m5!3m4!1s0x0:0x7f154e8cdff9c916!8m2!3d19.0315617!4d73.0162449?hl=en" target="_blank"><img src="images/gynae/terna1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '22'";
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

            // DY Patil Healthcare

            function loadcontent1() {
                var x = document.getElementById("gynae1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Tulsi Maternity & Gynaecology Clinic

            function loadcontent2() {
                var x = document.getElementById("gynae2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Shree Women Clinic

            function loadcontent3() {
                var x = document.getElementById("gynae3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Motherhood Hospital

            function loadcontent4() {
                var x = document.getElementById("gynae4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Apollo Hospitals

            function loadcontent5() {
                var x = document.getElementById("gynae5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Terna Speciality Hospital

            function loadcontent6() {
                var x = document.getElementById("gynae6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>