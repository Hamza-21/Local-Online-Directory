<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Office</title>
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
            <a href = "https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbm=lcl&sxsrf=ALeKk01gm7KFQj2Xbjx1DfnlGf6g2wg1BQ%3A1607680930513&ei=okPTX6vhHvaW4-EPurSsIA&q=india+post+nerul&oq=india+post+nerul&gs_l=psy-ab.3..35i39k1j0i7i30k1j0j38l2.333.333.0.1627.1.1.0.0.0.0.206.206.2-1.1.0....0...1c.1.64.psy-ab..0.1.206....0.T6WLPjCYynE#rlfi=hd:;si:13462645450326965840,l,ChBpbmRpYSBwb3N0IG5lcnVsWh4KCmluZGlhIHBvc3QiEGluZGlhIHBvc3QgbmVydWw;mv:[[19.0719414,73.0465912],[19.0211537,73.0102208]]" target="_blank"><img src="images/post/po1.webp" alt="No Image" width="500" class="center"></a>
        </div> -->

        <div class="row">
            <div class="column text-center">
                <button type="button" class="btn btn-outline-dark btn-edit" disabled>
                Previous</button>
            </div>
            <div class="column text-center">
                <a href="https://www.google.com/search?rlz=1C1RLNS_enIN906IN906&tbm=lcl&sxsrf=ALeKk01gm7KFQj2Xbjx1DfnlGf6g2wg1BQ%3A1607680930513&ei=okPTX6vhHvaW4-EPurSsIA&q=india+post+nerul&oq=india+post+nerul&gs_l=psy-ab.3..35i39k1j0i7i30k1j0j38l2.333.333.0.1627.1.1.0.0.0.0.206.206.2-1.1.0....0...1c.1.64.psy-ab..0.1.206....0.T6WLPjCYynE#rlfi=hd:;si:13462645450326965840,l,ChBpbmRpYSBwb3N0IG5lcnVsWh4KCmluZGlhIHBvc3QiEGluZGlhIHBvc3QgbmVydWw;mv:[[19.0719414,73.0465912],[19.0211537,73.0102208]]" target="_blank"><img src="images/post/po1.webp" alt="No Image Available" class="center img-fluid"></a>
            </div>
            <div class="column text-center">
                <a href="post1.php"><button type="button" class="btn btn-outline-dark btn-edit">
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

            $sql = "SELECT name, address, contact FROM essential WHERE id = '15'";
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

        <div class="text-center" style="margin-bottom: 10px;">
            <form action="fav_insert.php" method="POST">
                <button type="submit" class="btn btn-outline-danger" name="add_fav">Add to Favourites</button>
                <input type="hidden" name="place" value="India Post">
                <input type="hidden" name="address" value=" Sector 8, Nerul, First Floor, Nerul, Navi Mumbai - 400706">
                <input type="hidden" name="contact" value="9172573229">
            </form>
        </div>

        <div>
            <a href="post.php"><button type="button" class="btn btn-success">
            &larr; Back to Post Offices</button></a>
        </div>

    </div> 

</body>
</html>
