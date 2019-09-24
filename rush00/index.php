<?php
	// THIS IS USED WHEN LOGGGING IN
	// The include_once() statement can be used to include a php file in another one, when you may need to 
	// include the called file more than once
	include_once("install.php");
	// If the login and password credintials are set up from install.php file are set =, BUT still empty
    if (isset($_GET['login']) && isset($_GET['passwd']) && $_GET['login'] != "" && $_GET['passwd'] != "") {
		// Pulls serialized data (usernames and hashed passwords) to verify if the user is allowed to log on
		if (auth($_GET['login'], $_GET['passwd'])) {
			// Pulls data from our Login from HTML and sets our ENV to that data
			$_SESSION['logged_user'] = $_GET['login'];
			// Redirects client back to this file
            header("Location: index.php");
		} else {
			// Sets the logged user as empty
			$_SESSION['logged_user'] = '';
			// Redirects client to new set of commands stored in "login"
            header("Location: login.php");
        }
	}
	if (isset($_POST["qty"]) && isset($_POST["qty"]) != "")
		setcookie($_POST["submit"], $_COOKIE[$_POST["submit"]] + (int)$_POST["qty"], time() + 84600, '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- If you set this, it ensures future validiy -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
	<style>
		img#OnePunchMan, img#zakuII, img#NoseCutter {
			float : left;
			width : 200px;
			height : 200px;
		}
  
		.item {
    		display : inline-block;
    		background-color : rgba(28, 31, 36, 0.9);
		}

		.item-description {
    		float : right;
		}

		h2 {
    		color : dodgerblue;
		}
	</style>
</head>
<body>
	<form action="index.php" method="post">
		<div class="item">
			<img src="imgs/items/ModelKits/OnePunchMan.png" id="OnePunchMan">
			<div class="item-description">
				<h2>OnePunchMan</h2>
				<h2>Quantity</h2><input type="text" name="qty" id="OnePunchMan">
				<input type="submit" name="submit" value="OnePunchMan">
			</div>
		</div>
	</form>
	<form action="index.php" method="post">
		<div class="item">
			<img src="imgs/items/Gundam/HG/1.png" id="zakuII">
			<div class="item-description">
				<h2>ZakuII</h2>
				<h2>Quantity</h2><input type="text" name="qty" id="zakuII">
				<input type="submit" name="submit" value="zakuII">
			</div>
		</div>
	</form>
	<form action="index.php" method="post">
		<div class="item">
			<img src="imgs/items/Tools/NoseCutter.png" id="NoseCutter">
			<div class="item-description">
				<h2>NoseCutter</h2>
				<h2>Quantity</h2><input type="text" name="qty" id="NoseCutter">
				<input type="submit" name="submit" value="NoseCutter">
			</div>
		</div>
	</form>
</body>
</html>
