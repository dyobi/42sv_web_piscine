<?php
     include("format.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" text="text/css" href="account.css">
</head>
<body>
    <h1>Welcome</h1>
    <br >
    <div class="main">
        <div class="user-changes">
            <div class="pwd-change">
                <h3>Change Password</h3>
                <form action="modify.php" method="post" id="modify">
                    Username : <input type="text" name="login" id="login">
                    <br ><br >
                    Old Password : <input type="password" name="oldpw" id="oldpw">
                    <br ><br >
                    New Password : <input type="password" name="newpw" id="newpw">
                    <br ><br >
                    <input type="submit" name="submit" value="submit" id="submit">
                </form>
            </div>
            <div class="user-delete">
                <h3>Delete Account</h3>
                <form action="delete.php" method="get" id="delete">
                    Username : <input type="text" name="login" id="login">
                    <br ><br >
                    Password : <input type="password" name="passwd" id="passwd">
                    <br ><br >
                    <input type="submit" name="submit" value="delete">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
