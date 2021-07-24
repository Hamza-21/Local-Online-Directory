<!DOCTYPE html>
<html>
<head>
	<title>Online Directory</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	
	<!-- Styling -->

	<style type="text/css">
		*{
		  padding:0;
		  margin:0;
		}

		.container {
		  height: 100vh;
		  display: flex;
		}

		section {
		  height: 100%;
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  flex: 1;
		  transition: all .5s;
		  filter: grayscale(100%);
		}

		section:hover {
		  flex:2;
		  filter: grayscale(0);
		}

		section h1 a{
		  background:rgba(0,0,0,0.6);
		  color:white;
		  padding: 12px 32px;
		  font-size: 30px;
          font-family: 'Montserrat', sans-serif;
		  text-decoration: none;
		  transition: .5s ease;
		}

		section h1 a:hover{
		  background:rgba(255,255,255,0.6);
		  color: #000000;
		}

		.essential{
		  background:url('images/ess.jpg') #ff0909;
		  background-position: center;
		  background-size: cover;
		}

		.nonessential{
		  background:url('images/hall.jpg') #d2ff09;
		  background-position: center;
		  background-size: cover;
		}

		@media screen and (max-width: 1140px) {
			section:hover { flex: 1.5 } 
		 	.essential h1 a{ font-size: 30px }
			.nonessential h1 a{ font-size: 30px }
		}

		@media screen and (max-width: 700px) {
			section:hover { flex: 1.3 } 
		 	.essential h1 a{ font-size: 10px }
			.nonessential h1 a{ font-size: 10px }
		}

		@media screen and (max-width: 400px) { 
		  section:hover { flex: 1.3 }
		  .essential h1 a{ font-size: 10px; }
		  .nonessential h1 a{ font-size: 10px; }
		}
	</style>

</head>
<body>

	<div class="container">

	    <section class="essential">
	      <h1><a href="cateess.php">Essential Services</a></h1>
	    </section>

	    <section class="nonessential">
	      <h1><a href="categories.php"> Non-Essential Services</a></h1>
	    </section>

    </div>

</body>
</html>