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
			<a href="#aboutme"> ABOUT ME </a>
			<a href="#techs"> TECHNOLOGIES </a>
			<a href="#works"> WORKS </a>
			<a href="#contact"> CONTACT </a>
		</div>

		<!-- PORTADA -->
		<div class="portada">
			<img src="../img/imgPortada.svg" alt="">
			<div class="portada_title">
				<h1> ALEJO PERCUDANI</h1>			
				<h2> WEB DESIGNER </h2>
			</div>
		</div>


		<div class="categories">

			<!-- ABOUT ME -->
			<?php 
				include("aboutME.php");
			?>
	
			<!-- TECHNOLOGIES -->
			<?php 
				include("techs.php");
			?>

			<!-- WORKS -->
			<?php 
				include("works.php");
			?>

			<!-- CONTACT -->
			<?php 
				include("contact.php");
			?>

		</div>
	</div>

</body>
</html>