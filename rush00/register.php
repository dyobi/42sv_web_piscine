<?php
    include("format.php");
?>
<html>
    <head>
        <link rel="stylesheet" text="text/css" href="form.css">
    </head>
    <body>
        <div class="user-authentication">
            <form action="welcome.php" method="post" id="register">
                <h1>Create An Account</h1>
                Username : <input type="text" name="login" id="login">
                <br ><br >
                Password : <input type="password" name="passwd" id="passwd">
                <br ><br >
                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </body>
</html>
