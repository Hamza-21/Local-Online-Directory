<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATMs</title>
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark">ATM 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark">ATM 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark">ATM 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark">ATM 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark">ATM 5</button>
            </div>
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark">ATM 6</button>
            </div>

        </div>
    </div>

    <!-- Axis Bank ATM -->
    <div class="container" id="atm1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk00sBIjDOlk-3dbUE_h62cxV9lSYOQ:1605889784101&q=axis+bank+atm+nerul&rflfq=1&num=10&ved=2ahUKEwiguoTRxZHtAhW1oekKHSRsAMsQtgN6BAgBEAc#rlfi=hd:;si:;mv:[[19.0545822,73.03032689999999],[19.0157694,73.0056826]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address FROM atm WHERE id = '1'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>
    </div> 

    <!-- State Bank of India ATM -->
    <div class="container" id="atm2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbm=lcl&sxsrf=ALeKk03rp9HHZdOY660h5WvS0G-FEFlkvw:1605889888624&q=sbi+bank+atm+nerul&spell=1&sa=X&ved=0ahUKEwiXhfCCxpHtAhU1yDgGHS2AChEQBQgkKAA&biw=1366&bih=657&dpr=1#rlfi=hd:;si:;mv:[[19.0519879,73.02950469999999],[19.0082132,73.0110393]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address FROM atm WHERE id = '2'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>
    </div>

    <!-- Kotak Mahindra Bank ATM -->
    <div class="container" id="atm3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&biw=1366&bih=657&tbm=lcl&sxsrf=ALeKk031Jt13CJT2QsoloyBz-Lc0OqLCOg%3A1605889937425&ei=ke-3X-XDGYia4-EPtoCjmAo&q=kotak+mahindra+bank+atm+nerul&oq=kotak+bank+atm+nerul&gs_l=psy-ab.3.0.0i7i30k1j38l4.36672.37262.0.38669.5.5.0.0.0.0.161.427.0j3.3.0....0...1c.1.64.psy-ab..2.3.426....0.LmbBItYxjH0#rlfi=hd:;si:;mv:[[19.086623600000003,73.0722296],[19.0105824,72.9930523]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address FROM atm WHERE id = '3'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>
    </div>

    <!-- Union Bank of India ATM -->
    <div class="container" id="atm4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&biw=1366&bih=657&tbm=lcl&sxsrf=ALeKk02dbq8CP-dpvLOuvJZfNEWrsWbybw%3A1605890004566&ei=1O-3X6-dIuaU4-EP4L-moAI&q=union+bank+of+india+atm+in+nerul&oq=uni+bank+atm+nerul&gs_l=psy-ab.3.1.0i7i30k1j0i8i7i30k1.34030.34367.0.36383.3.3.0.0.0.0.154.275.0j2.2.0....0...1c.1.64.psy-ab..1.2.274....0.rdApB0e-RR8#rlfi=hd:;si:16596279825413919126,l,CiB1bmlvbiBiYW5rIG9mIGluZGlhIGF0bSBpbiBuZXJ1bCIDiAEBWjsKF3VuaW9uIGJhbmsgb2YgaW5kaWEgYXRtIiB1bmlvbiBiYW5rIG9mIGluZGlhIGF0bSBpbiBuZXJ1bA;mv:[[19.0831177,73.0644496],[19.0100066,72.9990906]]" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address FROM atm WHERE id = '4'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>
    </div>

    <!-- HDFC Bank ATM -->
    <div class="container" id="atm5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbm=lcl&sxsrf=ALeKk03HRwe0v-Ci8K2Y20CkV9gubQP8_Q%3A1605889791446&ei=_-63X8nsGuWX4-EPxtWI2AM&q=hdfc+bank+atm+nerul&oq=hdfc+bank+atm+nerul&gs_l=psy-ab.3..0i30k1j38l5.293244.293704.0.293838.4.4.0.0.0.0.133.259.0j2.2.0....0...1c.1.64.psy-ab..2.2.257...0i7i30k1.0.4Yc0vccc9Ko#rlfi=hd:;si:;mv:[[19.058818499999997,73.0438437],[19.005999499999998,73.00663039999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address FROM atm WHERE id = '5'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
                }
            }
            else {
                echo "0 result";
            }

            $conn -> close();

            ?>
        </table>
    </div>

    <!-- ICICI Bank ATM -->
    <div class="container" id="atm6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbm=lcl&sxsrf=ALeKk010CnTgpuq_8t2YEzika1R-qvBK8A%3A1605890086320&ei=JvC3X4mbE6_G4-EPgquD-AU&q=icici+bank+atm+nerul&oq=icici+bank+atm+nerul&gs_l=psy-ab.3..0i30k1j38l5.91064.91491.0.91722.5.5.0.0.0.0.181.311.0j2.2.0....0...1c.1.64.psy-ab..3.2.310...0i7i30k1.0.YJ3qDF0oa7E#rlfi=hd:;si:;mv:[[19.064873199999997,73.0408688],[19.010213399999998,73.002104]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div>
        
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address FROM atm WHERE id = '6'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
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

            // Axis Bank

            function loadcontent1() {
                var x = document.getElementById("atm1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // SBI

            function loadcontent2() {
                var x = document.getElementById("atm2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Kotak Mahindra Bank

            function loadcontent3() {
                var x = document.getElementById("atm3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Union Bank of India

            function loadcontent4() {
                var x = document.getElementById("atm4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // HDFC

            function loadcontent5() {
                var x = document.getElementById("atm5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // ICICI

            function loadcontent6() {
                var x = document.getElementById("atm6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>