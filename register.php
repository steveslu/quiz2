<! DOCTYPE html>
<?php
	$f=$_POST["first"];
	$e=$_POST["email"];
	$name="fc";
	$email="ec";
	setcookie($name, $f, time() + (86400 * 30), "/");
	setcookie($email, $e, time() + (86400 * 30), "/");
?>
<html>

	<head>
		<title> Quiz 2 Stephen Slusarczyk</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<div>
			<header>
				<h1> This is my PHP coding quiz!</h1>
			</header>
			<br>
			<div>
				<h3> Name and email saved in cookie.</h3>
			</div>
		</div>
	<body>
</html>