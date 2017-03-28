<! DOCTYPE html>

<html>

	<head>
		<title> Quiz 2 Stephen Slusarczyk</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	
		<header>
			<h1> This is my PHP coding quiz!</h1>
		</header>
		
		<div id="inputs">
			<br>
		<?php
			if(!isset($_COOKIE["name"])){
				echo "<form action=\"register.php\" method=\"post\">\n";
				echo "First name:  <input type=\"text\" name=\"first\">\n";
				echo "<br><br>\n";
				echo "Last name:  <input type=\"text\" name=\"last\">\n";
				echo "<br><br>\n";
				echo "email:  <input type=\"text\" name=\"email\">\n";
				echo "<br><br>\n";
				echo "<input type=\"submit\" value=\"Submit\">\n";
				echo "<br>\n";
				echo "</form>\n";
			}else{
				echo "<h2>Welcome back " . $_COOKIE["fc"] . "</h2>\n";
				echo "<h3>Last time you signed in with " .$_COOKIE["ec"] . "email </h3>";
			}
		?>
		</div>
		
	<body>
</html>