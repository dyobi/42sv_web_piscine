<?php
    include("helper.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
	<!-- Import our style.css file -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<ul>
		<!-- Everytime we click on home button, we are redirected to our "index.php" -->
		<li><a href="index.php" class="tabs-left">Home</a></li>
		<!-- Redirects us to a new page containing the contact info-->
        <li><a href="contact.php" class="tabs-left">Contact</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Catalogue</a>
            <div class="dropdown-content">
                <a href="gundam1.php">Gundam</a>
                <a href="tools.php">Tools</a>
                <a href="model_kits.php">Model Kits</a>
            </div>
        </li>
        <a href="basket.php"><img src="imgs/basket.png" id="basket"></a>
        <?php if (!checkUser()) : ?>
            <li><a href="register.php" class="tabs-right">Register</a></li>
            <li><a href="login.php" class="tabs-right">Sign In</a></li>
        <?php else : ?>
            <li><a href="logout.php" class="tabs-right">Sign Out</a></li>
            <li><a href="account.php" class="tabs-right">Account</a></li>
        <?php endif; ?>
    </ul>
</body>
</html>
