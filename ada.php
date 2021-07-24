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
            height: 350px;
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
    <?php include 'navbar.php'; ?>
    <div class="container-fluid">
        <!-- <div class="box">
            <a href = "https://www.google.com/search?q=Adarsh%20Medical%20%26%20General%20Stores&rlz=1C1RLNS_enIN906IN906&oq=Adarsh+Medical+%26+General+Stores&aqs=chrome..69i57j69i60j69i61&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:10&tbm=lcl&sxsrf=ALeKk01xQOVlLOuGFcAyGiQu61OKdGh-iw:1607682795209&rflfq=1&num=10&rldimm=9326980562528868079&ved=2ahUKEwjMxK2P3cXtAhUPA3IKHWsmBnAQvS4wAXoECAIQKQ&rlst=f#rlfi=hd:;si:9326980562528868079;mv:[[19.313508499999998,73.10670139999999],[18.9897582,72.8323654]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:10" target="_blank"><img src="images/pharmacy/ada1.jpg" alt="No Image" width="500" class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <a href="dyp.php"><button type="button" class="btn btn-outline-dark btn-edit">
                Previous</button></a>
            </div>
            <div class="column text-center">
                <a href="https://www.google.com/search?q=Adarsh%20Medical%20%26%20General%20Stores&rlz=1C1RLNS_enIN906IN906&oq=Adarsh+Medical+%26+General+Stores&aqs=chrome..69i57j69i60j69i61&sourceid=chrome&ie=UTF-8&tbs=lf:1,lf_ui:10&tbm=lcl&sxsrf=ALeKk01xQOVlLOuGFcAyGiQu61OKdGh-iw:1607682795209&rflfq=1&num=10&rldimm=9326980562528868079&ved=2ahUKEwjMxK2P3cXtAhUPA3IKHWsmBnAQvS4wAXoECAIQKQ&rlst=f#rlfi=hd:;si:9326980562528868079;mv:[[19.313508499999998,73.10670139999999],[18.9897582,72.8323654]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u16!2m2!16m1!1e1!1m4!1u16!2m2!16m1!1e2!2m1!1e16!2m1!1e3!3sIAE,lf:1,lf_ui:10" target="_blank"><img src="images/pharmacy/ada1.jpg" alt="No Image Available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <a href="data.php"><button type="button" class="btn btn-outline-dark btn-edit">
                Next</button></a>
            </div>
        </div>

        <div class="text-center text-success">
            <p>This is a verified service</p>
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

        <div class="text-center" style="margin-bottom: 10px;">
            <form action="fav_insert.php" method="POST">
                <button type="submit" class="btn btn-outline-danger" name="add_fav">Add to Favourites</button>
                <input type="hidden" name="place" value="Adarsh Medical & General Stores">
                <input type="hidden" name="address" value="1st Floor Ashirwad Hospital, Nerul, Navi Mumbai - 400706, Sector 1">
                <input type="hidden" name="contact" value="9833694354">
            </form>
        </div>

        <div>
            <a href="pharmacy.php"><button type="button" class="btn btn-success">
            &larr; Back to Pharmacies</button></a>
        </div>

    </div> 

</body>
</html>
