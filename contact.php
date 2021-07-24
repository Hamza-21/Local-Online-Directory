<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us!</title>
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

    <!-- Styling -->
    <style type="text/css">

      body{
        margin: 0px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        background-color: aliceblue;
        }

        h1{
          font-size:100px;
          font-family: font-family: 'PT Sans Narrow', sans-serif;
          margin-top:0;
        }
        .themiddlebox{
          font-size:40px;
          padding-top: 30px;

        }
        .navbar .navbar-brand {
            font-size: 25px;
        }
        .thelowerbox{
        font-size: 20px;
        }
        .last{
          fontsize:20px;
        }

        @media (max-width: 800px) {
        .themiddlebox {
          font-size: 20px;
            }

        .thelowerbox {
          font-size: 17px;
          }
        }
    </style>

  </head>

  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-static-top">
      <a href="title.php" class="navbar-brand text-warning font-weight-bold">
      <img src="images/logo.png" width="30px" height="30px" class="d-inline-block"> Online Directory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarcollapse">

            <!-- Navbar right side-->
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="contact.php" class="nav-link"><h4>Contact us</h4></a>
                </li>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="themiddlebox">
      <h2>CONTACT US!</h2>
      <p>Reach out to us for adding your own online listing or any other problem!</p>
    </div>
    <hr></hr>
    <div class="thelowerbox">
    <form action="title.php" method="post">
    <label>Your Name:</label>
    <input type="text">
    <br>
    <label>Your E-mail:</label>
    <input type="text">
    <br></br>
    <label>Your message:</label>
    <textarea name="yourMessage" rows="2" cols="20"  placeholder="Write something..."></textarea>
    <br></br>
    <input type="submit" name="" class="btn btn-primary"></input>
    <br></br>
    <label>Do you want to enable notifications?</label>
      <input type="checkbox"></input>
    <hr></hr>
    </form>
    </div>
    <div class="last">
    <table cellspacing="30" class="table">
    <tr>
      <td>  <img src="images/satyam.jpeg" alt="atharvas profile picture" width="200px" height="200px"></td>
      <td>  <h3>Satyam Agarwal</h3>
        <p>A computer science student.
        <br>
        <p>A  technical student studying at DY patil university.</p></td>
    </tr>
  </table>
  <table cellspacing="30" class="table">
      <tr>
        <td>  <img src="images/simp.jpg" alt="atharvas profile picture"></td>
        <td>  <h3>Hamza Ansari</h3>
          <p>A computer science student.
          <br>
          <p>A  technical student studying at DY patil university.</p></td>
      </tr>
    </table>
    <table cellspacing="30" class="table">
        <tr>
          <td>  <img src="images/atharva.jpeg" alt="atharvas profile picture" width="200px" height="200px"></td>
          <td>  <h3>Atharva Chandras</h3>
            <p>A computer science student.
            <br>
            <p>A  technical student studying at DY patil university.</p></td>
        </tr>
      </table>
</div>
</div>

  </body>
</html>