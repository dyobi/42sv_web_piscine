<?php
    include("format.php");
    function userExists() {
        $contents = unserialize(file_get_contents("./htdocs/private/passwd"));
        foreach ($contents as $users)
            if ($_POST['login'] === $users['login'])
                return (1);
        return (0);
    }
    function pwdCheck() {
        if ($_POST['login'] != NULL && $_POST['oldpw'] != NULL && $_POST['newpw'] != NULL && $_POST['submit'] === "submit" && userExists()) {
            $contents = unserialize(file_get_contents("./htdocs/private/passwd"));
            for ($i = 0; $i < sizeof($contents); $i++) {
                if ($_POST['login'] == $contents[$i]['login'] && hash('md5', $_POST['oldpw']) == $contents[$i]['passwd']) {
                    $contents[$i]['passwd'] = hash('md5', $_POST['newpw']);
                    echo "OK!";
                    file_put_contents("./htdocs/private/passwd", serialize($contents));
                    return (1);
                }
            }
            return (0); 
        }
        else
            return (0);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modify</title>
</head>
<body>
    <?php if (pwdCheck()) : ?>
        <h1>Hello World</h1>
    <?php else : ?>
        <h1>Too bad</h1>
    <?php endif; ?>
</body>
</html>
