<?php
    session_start();
	include("format.php");
	// Sets the user's value to null, then goes back to index page
    $_SESSION['logged_user'] = "";
    header("Location: index.php");
?>
