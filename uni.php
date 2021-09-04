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
            <a href = "https://www.google.com/search?q=union%20bank%20of%20india%20atm%20sector%2020%20nerul&rlz=1C1RLNS_enIN906IN906&oq=union+bank+of+india+atm+sector+20+nerul&aqs=chrome..69i57j33i22i29i30.10303j0j9&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:4&tbm=lcl&sxsrf=ALeKk01a-n7vSg0R9BrJvltyJOeGKCeH2A:1616577183204&rflfq=1&num=10&rldimm=7314315050363970853&lqi=Cid1bmlvbiBiYW5rIG9mIGluZGlhIGF0bSBzZWN0b3IgMjAgbmVydWwiA4gBAUii3Zqt1JWAgAhaWgoXdW5pb24gYmFuayBvZiBpbmRpYSBhdG0QABABEAIQAxAEGAAYARgCGAMYBRgGGAciJ3VuaW9uIGJhbmsgb2YgaW5kaWEgYXRtIHNlY3RvciAyMCBuZXJ1bJIBEnB1YmxpY19zZWN0b3JfYmFua5oBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VObmMySnBVbFIzRUFFqgEfEAEqGyIXdW5pb24gYmFuayBvZiBpbmRpYSBhdG0oAA&ved=2ahUKEwizwIamy8jvAhWozDgGHXx2DL4QvS4wAHoECAMQJA&rlst=f#rlfi=hd:;si:7314315050363970853,l,Cid1bmlvbiBiYW5rIG9mIGluZGlhIGF0bSBzZWN0b3IgMjAgbmVydWwiA4gBAUii3Zqt1JWAgAhaWgoXdW5pb24gYmFuayBvZiBpbmRpYSBhdG0QABABEAIQAxAEGAAYARgCGAMYBRgGGAciJ3VuaW9uIGJhbmsgb2YgaW5kaWEgYXRtIHNlY3RvciAyMCBuZXJ1bJIBEnB1YmxpY19zZWN0b3JfYmFua5oBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VObmMySnBVbFIzRUFFqgEfEAEqGyIXdW5pb24gYmFuayBvZiBpbmRpYSBhdG0oAA;mv:[[19.0831177,73.1001627],[19.0100066,72.99706909999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3,lf:1,lf_ui:4" target="_blank"><img src="images/atm.jpg" alt="No Image" width="300" height = "300"class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <a href="kotak.php"><button type="button" class="btn btn-outline-dark btn-edit">Previous</button></a>
            </div>
            <div class="column text-center">
                <a href="https://www.google.com/maps/place/Union+Bank+of+India+ATM/@19.033471,73.017628,15z/data=!4m5!3m4!1s0x0:0x32c086fa6ddf61c8!8m2!3d19.033471!4d73.017628" target="_blank"><img src="images/atm.jpg" alt="No Image Available" 
                class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <a href="hdfc.php"><button type="button" class="btn btn-outline-dark btn-edit">Next</button></a>
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

            $sql = "SELECT name, address FROM nonessen WHERE id = '10'";
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
                <input type="hidden" name="place" value="Union Bank of India ATM">
                <input type="hidden" name="address" value="Nerul Station Complex, Mata Amritanandamayi Marg, Sector 20, Nerul West, Navi Mumbai">
                <input type="hidden" name="contact" value="0">
            </form>
        </div>

        <div>
            <a href="atm.php"><button type="button" class="btn btn-success">&larr; Back to ATMs</button></a>
        </div>

    </div> 

</body>
</html>
