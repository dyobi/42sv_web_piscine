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
	<title>Tools</title>
	<!-- Imports our info.css attributes-->
    <link rel="stylesheet" text="text/css" href="items.css">
</head>
<body>
	<div>
		<form action="tools.php" method="post">
			<div class="item">
				<img src="imgs/items/Tools/BMC.png" id="BMC">
				<div class="item-description">
					<h2>BMC</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="BMC">
					<input type="submit" name="submit" value="BMC">
				</div>
			</div>
		</form>
		<br >
		<form action="tools.php" method="post">
			<div class="item">
				<img src="imgs/items/Tools/GlueDeluxe.png" id="GlueDeluxe">
				<div class="item-description">
					<h2>Glue Deluxe</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="GlueDeluxe">
					<input type="submit" name="submit" value="GlueDeluxe">
				</div>
			</div>
		</form>
		<br >
		<form action="tools.php" method="post">
			<div class="item">
				<img src="imgs/items/Tools/LineTape.png" id="LineTape">
				<div class="item-description">
					<h2>Line Tape</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="LineTape">
					<input type="submit" name="submit" value="LineTape">
				</div>
			</div>
		</form>
		<br >
		<form action="tools.php" method="post">
			<div class="item">
				<img src="imgs/items/Tools/NoseCutter.png" id="NoseCutter">
				<div class="item-description">
					<h2>Nose Cutter</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="NoseCutter">
					<input type="submit" name="submit" value="NoseCutter">
				</div>
			</div>
		</form>
		<br >
	</div>
</body>
</html>
