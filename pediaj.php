<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pediatricians</title>
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark btn-edit">Pediatrician 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark btn-edit">Pediatrician 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark btn-edit">Pediatrician 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark btn-edit">Pediatrician 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark btn-edit">Pediatrician 5</button>
            </div> 
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark btn-edit">Pediatrician 6</button>
            </div>

        </div>
    </div>

    <!-- Dr. Sawant Clinic -->
    <div class="container" id="pedia1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Dr.+Sawant+Clinic+(Pediatrician)/@19.0308866,73.0221165,15z/data=!4m5!3m4!1s0x0:0x29a1877e38272236!8m2!3d19.0308866!4d73.0221165" target="_blank"><img src="images/pedia/pedia.jpg" alt="No Image" width="500" height="380" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '23'";
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

    <!-- Dr. Shruti Kalkekar Paediatrician -->
    <div class="container" id="pedia2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Dr.+Sanjeevkumar+Kalkekar,+Cardiologist+Navi+Mumbai/@19.0116619,73.0145279,15z/data=!4m5!3m4!1s0x0:0xfcb0b5b075ac0efb!8m2!3d19.0116619!4d73.0145279" target="_blank"><img src="images/pedia/shru1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '24'";
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

    <!-- Jack N Jill Pediatrician -->
    <div class="container" id="pedia3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Jack+N+Jill+Childrens+Clinic/@19.0196943,73.0148447,15z/data=!4m5!3m4!1s0x0:0x78a496935da10782!8m2!3d19.0196943!4d73.0148447" target="_blank"><img src="images/pedia/jack1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '25'";
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


    <!-- Subhashish Children Clinic -->
    <div class="container" id="pedia4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Dr.Shirodkar's+Subhashish+Children+Clinic/@19.0352415,73.012172,15z/data=!4m2!3m1!1s0x0:0x7ad8458a92bfda59?sa=X&ved=2ahUKEwiGtev-_JjtAhXlyzgGHcYqAjsQ_BIwE3oECBMQBQ" target="_blank"><img src="images/pedia/shu1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '26'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Shubhashish Children's Clinic</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div> 

    <!-- Dr. Anand Sude Pediatrician -->
    <div class="container" id="pedia5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Dr.+Anand+Sude+-+Pediatrician,+Best+Child+Specialist,+Child+Doctor+in+Navi+Mumbai/@19.0519305,73.0169841,15z/data=!4m2!3m1!1s0x0:0xaede630cecf6ebbc?sa=X&ved=2ahUKEwjKm77f_JjtAhXLbX0KHUZEA9kQ_BIwCnoECBcQBQ" target="_blank"><img src="images/pedia/sud1.png" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '27''";
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

    <!-- Child Health Centre -->
    <div class="container" id="pedia6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Dr+Gaikwad+Child+Health+Care/@19.0411409,73.0148202,15z/data=!4m2!3m1!1s0x0:0x12c4bec0373557d7?sa=X&ved=2ahUKEwj4sZ7G_pjtAhVIwjgGHXbPArQQ_BIwCnoECBQQAw" target="_blank"><img src="images/pedia/child1.webp" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '28'";
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

            // Dr. Sawant Clinic

            function loadcontent1() {
                var x = document.getElementById("pedia1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Dr. Shruti Kalkekar Paediatrician

            function loadcontent2() {
                var x = document.getElementById("pedia2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Jack N Jill Pediatrician

            function loadcontent3() {
                var x = document.getElementById("pedia3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Subhashish Children Clinic

            function loadcontent4() {
                var x = document.getElementById("pedia4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Dr. Anand Sude Pediatrician

            function loadcontent5() {
                var x = document.getElementById("pedia5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Child Health Centre

            function loadcontent6() {
                var x = document.getElementById("pedia6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>