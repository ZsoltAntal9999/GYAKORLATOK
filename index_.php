<?php

session_start();

?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="bootstrap/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css">                                            
	<script src="menu.js"></script>
	
	<title>Diakkönyvtár</title>
	
	<style>
		body {
    min-height: 75rem;
    padding-top: 4.5rem;
	}
		th{
			text-align: center;
		}
		td{
			text-align: center;
		}
		
	</style>

</head>
<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">    
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuid" aria-controls="menuid" aria-expanded="false" aria-label="Toggle navigation">    
			<span class="navbar-toggler-icon"></span>    
		</button>    
		<span class="navbar-brand">Diákkönyvtár</span>
	<div class="navbar-collapse collapse " id="menuid">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index_.php">Főoldal</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php?p=konyvek.php">Könyvek</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php?p=kotelezo_olvasmanyok.php">Kötelező olvasmányok</a></li>
			<li class="nav-item"><a class="nav-link" href="index_.php?p=kolcsonzesek.php">Kölcsönzések</a></li>
			<li class="nav-item"><a class="nav-link" href="">Új könyv</a></li>
			<li class="nav-item"><a class="nav-link" href="">Évfolyam módosítás</a></li>
		</ul>
	</div>
</nav>  

<main role="main" class="container p-2">
	<div class="jumbotron">
		<?php
			if(isset($_GET["p"])){
				include($_GET["p"]);
			}
			else{
				include("fooldal.php");
			}
		?>
	</div>
</main>
	 <script src="bootstrap/bootstrap/jquery.min.js"></script>
	 <script src="bootstrap/bootstrap/bootstrap.min.js"></script>
</body>
</html>