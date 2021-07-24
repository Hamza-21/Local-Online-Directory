<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banks</title>
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
                <button onclick="loadcontent1()" class="btn btn-outline-dark btn-edit">Bank 1</button>
            </div>
            <div>
                <button onclick="loadcontent2()" class="btn btn-outline-dark btn-edit">Bank 2</button>
            </div>
            <div>
                <button onclick="loadcontent3()" class="btn btn-outline-dark btn-edit">Bank 3</button>
            </div>
            <div>
                <button onclick="loadcontent4()" class="btn btn-outline-dark btn-edit">Bank 4</button>
            </div>
            <div>
                <button onclick="loadcontent5()" class="btn btn-outline-dark btn-edit">Bank 5</button>
            </div> 
            <div>
                <button onclick="loadcontent6()" class="btn btn-outline-dark btn-edit">Bank 6</button>
            </div>

        </div>
    </div>

    <!-- HDFC bank -->
    <div class="container" id="bank1" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk01AqYTH3nSkKOnXQ1e1gy2k4vqPCw:1606147097150&q=hdfc+bank+nerul&rflfq=1&num=10&ved=2ahUKEwjMvrqZhJntAhWZyDgGHbWhA7IQtgN6BAgBEAc#rlfi=hd:;si:;mv:[[19.0477003,73.025782],[19.006628799999998,73.0076528]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/banks/bank.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '35''";
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

    <!-- ICICI Bank Ltd -->
    <div class="container" id="bank2" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk03ZAY8QZQ__p_ZEJzdA677hF2f9jA:1606147104190&q=icici+bank+nerul&rflfq=1&num=10&ved=2ahUKEwitquichJntAhVDwzgGHZLyDlsQtgN6BAgBEAc#rlfi=hd:;si:;mv:[[19.0372342,73.01845940000001],[19.029520899999998,73.012878]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/banks/bank.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '36'";
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

    <!-- Union Bank Of India -->
    <div class="container" id="bank3" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/maps/place/Union+Bank+of+India+Nerul/@19.033484,73.0175785,15z/data=!4m5!3m4!1s0x0:0x6581aac9103ce525!8m2!3d19.033484!4d73.0175785" target="_blank"><img src="images/banks/bank.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '37'";
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

    <!-- Axis Bank Ltd -->
    <div class="container" id="bank4" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk00IQap6kV_mZ9WGsPINRX07KGoKvA:1606147122109&q=axis+bank+nerul&rflfq=1&num=10&ved=2ahUKEwjLg66lhJntAhWZwjgGHTbdAm8QtgN6BAgBEAc#rlfi=hd:;si:;mv:[[19.0445215,73.026153],[19.0235473,73.0059188]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/banks/bank.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '38'";
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

    <!-- Kotak Mahindra Bank -->
    <div class="container" id="bank5" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?bih=600&biw=1366&rlz=1C1RLNS_enIN906IN906&hl=en&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk01n6JLP77cC4FzP4ATMMBY38_-YjA:1606147329813&q=kotak+mahindra+bank+nerul&rflfq=1&num=10&ved=2ahUKEwj2lLOIhZntAhUcyzgGHYipBXgQtgN6BAgBEAc#rlfi=hd:;si:;mv:[[19.076777399999997,73.04108839999999],[19.011139699999998,73.000051]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/banks/bank.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '39'";
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

    <!-- State Bank Of India -->
    <div class="container" id="bank6" style="display: none;">
        <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk00J0fezvtuXy2KKltgjeSwolzoAWw:1606147138030&q=sbi+nerul&rflfq=1&num=10&ved=2ahUKEwj92fmshJntAhXZyjgGHY3eBxwQtgN6BAgBEAc#rlfi=hd:;si:;mv:[[19.046186799999997,73.02880789999999],[19.0083357,73.0110787]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:4" target="_blank"><img src="images/banks/bank.jpg" alt="No Image" width="500" class="center"></a>
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '40'";
            $result = $conn -> query($sql);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>State Bank of India</td><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
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

            // HDFC bank

            function loadcontent1() {
                var x = document.getElementById("bank1");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // ICICI Bank Ltd

            function loadcontent2() {
                var x = document.getElementById("bank2");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Union Bank Of India

            function loadcontent3() {
                var x = document.getElementById("bank3");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Axis Bank Ltd

            function loadcontent4() {
                var x = document.getElementById("bank4");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // Kotak Mahindra Bank

            function loadcontent5() {
                var x = document.getElementById("bank5");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

            // State Bank Of India

            function loadcontent6() {
                var x = document.getElementById("bank6");
                if (x.style.display === "none") {
                x.style.display = "block";
                } else {
                x.style.display = "none";
                }
            }

        </script>

</body>
</html>