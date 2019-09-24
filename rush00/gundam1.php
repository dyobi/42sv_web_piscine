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
		<form action="gundam1.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/HG/1.png" id="zakuIII">
				<div class="item-description">
					<h2>Zaku III</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="zakuIII">
					<input type="submit" name="submit" value="zakuIII">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam1.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/HG/2.png" id="zakuII">
				<div class="item-description">
					<h2>Zaku II</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="zakuII">
					<input type="submit" name="submit" value="zakuII">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam1.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/HG/3.png" id="zerachiel">
				<div class="item-description">
					<h2>Zerachiel</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="zerachiel">
					<input type="submit" name="submit" value="zerachiel">
				</div>
			</div>
		</form>
		<br >
		<form action="gundam1.php" method="post">
			<div class="item">
				<img src="imgs/items/Gundam/HG/4.png" id="karl">
				<div class="item-description">
					<h2>Karl</h2>
					<h2>Quantity</h2><input type="text" name="qty" id="karl">
					<input type="submit" name="submit" value="karl">
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
