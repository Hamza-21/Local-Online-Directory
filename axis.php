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

        .center {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 400px;
            height: 300px;
            border: 4px solid #000000;
        } 

        .btn-edit{
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        @media screen and (max-width: 800px) { 
            .column {
                width: 100%;
            }

            .center {
                margin-top: 10px;
                margin-bottom: 0px;  
            } 
        }

    </style>
</head>


<body>

<!-- Navigation Bar -->
    <?php include 'navbarnon.php'; ?>
    
    <div class="container-fluid">
        <!-- <div class="box">
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&sz=0&biw=1366&bih=657&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk00Bcd2s_kXoERdrLCdwM02Fn_y1Bg:1616576289650&q=axis+bank+atm+nerul&rflfq=1&num=10&ved=2ahUKEwjlvfz7x8jvAhWMwjgGHWHKBaAQtgN6BAgDEAc#rlfi=hd:;si:;mv:[[19.0595136,73.0296086],[19.014115699999998,73.0054561]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3,lf:1,lf_ui:4" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <button type="button" class="btn btn-outline-dark btn-edit" disabled>Previous</button>
            </div>
            <div class="column text-center">
                <a href="https://www.google.com/maps/place/Axis+Bank+ATM/@19.0379752,73.014851,15z/data=!4m2!3m1!1s0x0:0x2b372cf9ec20644b?sa=X&ved=2ahUKEwj-1Ijhg-7vAhVNSX0KHdF6AI0Q_BIwDnoECBkQBQ" target="_blank"><img src="images/atm.jpg" alt="No Image Available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <a href="sbi.php"><button type="button" class="btn btn-outline-dark btn-edit">Next</button></a>
            </div>
        </div>
        
        <table class="table text-center">
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>

            <?php
            $conn = mysqli_connect("localhost", "root", "", "info_for_directory");
            if ($conn -> connect_error) {
                die("Connection Failed!".$conn -> connect_error);
            }

            $sql = "SELECT name, address FROM nonessen WHERE id = '7'";
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

        <div class="text-center" style="margin-bottom: 10px;">
            <form action="fav_insert.php" method="POST">
                <button type="submit" class="btn btn-outline-danger" name="add_fav">Add to Favourites</button>
                <input type="hidden" name="place" value="Axis Bank ATM">
                <input type="hidden" name="address" value="Nerul West, Station Road, NL - 1 Type, Sector 10, Nerul, Navi Mumbai">
                <input type="hidden" name="contact" value="0">
            </form>
        </div>

        <div>
            <a href="atm.php"><button type="button" class="btn btn-success">&larr; Back to ATMs</button></a>
        </div>

    </div> 

</body>
</html>
