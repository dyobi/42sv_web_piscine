<?php
	include("format.php");
	if (isset($_POST["qty"]) && isset($_POST["qty"]) != "")
		setcookie($_POST["submit"], $_COOKIE[$_POST["submit"]] + (int)$_POST["qty"], time() + 84600, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Gundam</title>
	<!-- Imports our info.css attributes-->
    <link rel="stylesheet" text="text/css" href="items.css">
</head>
<body>
	<div>
		<form action="gundam2.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/MG/1.png" id="banshee">
				<div class="item-description">
					<h2>Banshee</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="banshee">
					<input type="submit" name="submit" value="banshee">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam2.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/MG/2.png" id="DoubleX">
				<div class="item-description">
					<h2>Double X</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="DoubleX">
					<input type="submit" name="submit" value="DoubleX">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam2.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/MG/3.png" id="SengokuAstray">
				<div class="item-description">
					<h2>Sengoku Astray</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="SengokuAstray">
					<input type="submit" name="submit" value="SengokuAstray">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam2.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/MG/4.png" id="Phenex">
				<div class="item-description">
					<h2>Phenex</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="Phenex">
					<input type="submit" name="submit" value="Phenex">
				</div>
			</div>
		</form>
		<br >
		<center>
			<form>
				<button type="submit" formaction="gundam1.php" class="btn nav">1</button>
				<button type="submit" formaction="gundam2.php" class="btn nav">2</button>
				<button type="submit" formaction="gundam3.php" class="btn nav">3</button>
			</form>
		</center>
	</div>
</body>
</html>
