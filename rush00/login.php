<?php
	// Used to constantly bring back the formatted background image and top bar
    include("format.php");
?>
<html>
    <head>
        <link rel="stylesheet" text="text/css" href="form.css">
    </head>
    <body>
        <div class="user-authentication">
            <form action="index.php" method="get" id="sign-in">
                <h1>Sign In</h1>
                Username : <input type="text" name="login" id="login">
                <br ><br >
                Password : <input type="password" name="passwd" id="passwd">
                <br ><br >
                <input type="submit" name="submit" value="log-in">
            </form>
        </div>
    </body>
</html>
