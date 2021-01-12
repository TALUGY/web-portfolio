<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PERCUDANI DESIGN</title>

	<!-- CSS -->
	<link rel="stylesheet" href="../css/style.css">


</head>
<body>
	<div class="container">
		
		<!-- NAVBAR -->	
		<div class="navbar">
			<a href="#aboutME"> ABOUT ME </a>
			<a href=""> TECHNOLOGIES </a>
			<a href=""> WORKS </a>
			<a href=""> CONTACT </a>
		</div>

		<!-- PORTADA -->
		<div class="portada">
			<img src="../img/imgPortada.svg" alt="">
			<div class="portada_title">
				<h1> ALEJO PERCUDANI</h1>			
				<h2> WEB DESIGNER </h2>
			</div>
		</div>


		<!-- ABOUT ME -->
		<?php 
		include("aboutME.php");
		?>

		<!-- TECHNOLOGIES -->
		<?php 
		include("techs.php");
		?>
	</div>
</body>
</html>