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
	<title>Model Kits</title>
	<!-- Imports our info.css attributes-->
    <link rel="stylesheet" text="text/css" href="items.css">
</head>
<body>
	<div>
		<!-- <a class="item"><img src="imgs/items/ModelKits/Goku.png" id="Goku"></a></BR>
		<a class="item"><img src="imgs/items/ModelKits/OnePunchMan.png" id="OnePunchMan"></a></BR> -->
		<form action="model_kits.php" method="post">
			<div class="item">
				<img src="imgs/items/ModelKits/Goku.png" id="Goku">
				<div class="item-description">
					<h2>Goku</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="Goku">
					<input type="submit" name="submit" value="Goku">
				</div>
			</div>
		</form>
		<br >
		<form action="model_kits.php" method="post">
			<div class="item">
				<img src="imgs/items/ModelKits/OnePunchMan.png" id="OnePunchMan">
				<div class="item-description">
					<h2>One Punch Man</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="OnePunchMan">
					<input type="submit" name="submit" value="OnePunchMan">
				</div>
			</div>
		</form>
		<br >
	</div>
</body>
</html>
