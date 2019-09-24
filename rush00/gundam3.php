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
		<form action="gundam3.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/RG/1.png" id="justice">
				<div class="item-description">
					<h2>Justice</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="justice">
					<input type="submit" name="submit" value="justice">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam3.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/RG/2.png" id="RX-78">
				<div class="item-description">
					<h2>RX-78</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="RX-78">
					<input type="submit" name="submit" value="RX-78">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam3.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/RG/3.png" id="sinanju">
				<div class="item-description">
					<h2>Sinanju</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="sinanju">
					<input type="submit" name="submit" value="sinanju">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam3.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/RG/4.png" id="XXXG-00W0">
				<div class="item-description">
					<h2>XXXG-00W0</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="XXXG-00W0">
					<input type="submit" name="submit" value="XXXG-00W0">
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
