<?php
    include("format.php");
    function delUser() {
        if (isset($_GET['login']) && isset($_GET['passwd']) && $_GET['login'] != "" && $_GET['passwd'] != "" && $_GET['submit'] === 'delete') {
            $contents = unserialize(file_get_contents("./htdocs/private/passwd"));
            for ($i = 0; $i < sizeof($contents); $i++) {
                if ($_GET['login'] == $contents[$i]['login'] && hash('md5', $_GET['passwd']) == $contents[$i]['passwd']) {
                    unset($contents[$i]);
                    array_values($contents);
                    $_SESSION['logged_user'] = "";
                    file_put_contents("./htdocs/private/passwd", serialize($contents));
                    return (1);
                }
            }
            return (0);
        } else
            return (0);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Successful</title>
    <link rel="stylesheet" text="text/css" href="account.css">
</head>
<body>
    <?php header("refresh: 3; url=index.php"); ?>
    <?php if (delUser()) : ?>
        <h1>User has been successfully deleted</h1>
    <?php else : ?>
        <h1>Username/Password does not exist or incorrect</h1>
    <?php endif; ?>
    <br >
    <h3>REDIRECTING...</h3>
</body>
</html>
