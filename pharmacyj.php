<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy</title>
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

            .btn-edit {
                font-size: 10px;
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark btn-edit">Pharmacy 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark btn-edit">Pharmacy 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark btn-edit">Pharmacy 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark btn-edit">Pharmacy 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark btn-edit">Pharmacy 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark btn-edit">Pharmacy 6</button>
            </div>

        </div>
    </div>

    <!-- Wellness Forever -->
    <div class="container" id="pharm1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk03j1vXshJEZura1vcsHtkIzN7LpMA:1615979284070&q=wellness+forever+nerul&rflfq=1&num=10&ved=2ahUKEwjxrsP5l7fvAhXyzzgGHXV2CR0QtgN6BAgCEAc#rlfi=hd:;si:;mv:[[19.0845466,73.07153269999999],[19.0068826,72.9943491]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3,lf:1,lf_ui:4" target="_blank"><img src="images/pharmacy/well1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '8'";
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

    <!-- DY Patil Pharmacy -->
    <div class="container" id="pharm2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Ashirvad+Medical+Stores/@19.0343584,73.009542,15z/data=!4m8!1m2!2m1!1sdy+patil+pharmacy+shop+nerul!3m4!1s0x0:0xbb8e337f10eb84be!8m2!3d19.0408265!4d73.0229178" target="_blank"><img src="images/pharmacy/dy1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '9'";
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

    <!-- Adarsh Medical -->
    <div class="container" id="pharm3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?q=Adarsh%20Medical%20%26%20General%20Stores&rlz=1C1RLNS_enIN906IN906&oq=Adarsh+Medical+%26+General+Stores&aqs=chrome..69i57j69i60j69i61&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:10&tbm=lcl&sxsrf=ALeKk01xQOVlLOuGFcAyGiQu61OKdGh-iw:1607682795209&rflfq=1&num=10&rldimm=9326980562528868079&ved=2ahUKEwjMxK2P3cXtAhUPA3IKHWsmBnAQvS4wAXoECAIQKQ&rlst=f#rlfi=hd:;si:9326980562528868079;mv:[[19.313508499999998,73.10670139999999],[18.9897582,72.8323654]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:10" target="_blank"><img src="images/pharmacy/ada1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '10'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Adarsh Medical & General Stores</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>       
    </div> 

    <!-- Shri Dattakripa Pharmacy -->
    <div class="container" id="pharm4" style="display: none;">
        <div class="box">
            <a href = "exception.php" target="_blank"><img src="images/pharmacy/data1.webp" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '11'";
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

    <!-- National Medico -->
    <div class="container" id="pharm5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lf:1,lf_ui:10&tbm=lcl&sxsrf=ALeKk02UgmWagWdeHkDS5sweuPgw8neukA:1607683224562&q=national+medico+nerul&rflfq=1&num=10&ved=2ahUKEwix_orc3sXtAhXBpOkKHapbCFMQtgN6BAgCEAg#rlfi=hd:;si:15138449408843653749;mv:[[19.168487799999998,73.0772534],[19.005377199999998,72.9009903]]" target="_blank"><img src="images/pharmacy/nat1.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '12'";
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

    <!-- Wellness Forever (Different Branch) -->
    <div class="container" id="pharm6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3,lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk03j1vXshJEZura1vcsHtkIzN7LpMA:1615979284070&q=wellness%20forever%20nerul&rflfq=1&num=10&ved=2ahUKEwjxrsP5l7fvAhXyzzgGHXV2CR0QtgN6BAgCEAc&rlst=f#rlfi=hd:;si:;mv:[[19.0845466,73.07153269999999],[19.0068826,72.9943491]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3,lf:1,lf_ui:4" target="_blank"><img src="images/pharmacy/well2.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '13'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>Wellness Forever (Different branch)</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
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

            // Wellness Forever

            function loadcontent1() {
                var x = document.getElementById("pharm1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // DY Patil Pharmacy

            function loadcontent2() {
                var x = document.getElementById("pharm2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Adarsh Medical

            function loadcontent3() {
                var x = document.getElementById("pharm3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Shri Dattakripa Pharmacy

            function loadcontent4() {
                var x = document.getElementById("pharm4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // National Medico

            function loadcontent5() {
                var x = document.getElementById("pharm5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Wellness Forever (Different Branch)

            function loadcontent6() {
                var x = document.getElementById("pharm6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>