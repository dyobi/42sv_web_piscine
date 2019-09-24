<?php
    include("format.php");
    function checkFolder() {
        $contents = unserialize(file_get_contents("./htdocs/private/passwd"));
        foreach ($contents as $users)
            if ($users['login'] === $_POST['login'])
                return (0);
        return (1);
    }
    function register() {
        if ($_POST['submit'] === "Register" && $_POST['login'] != "" && $_POST['passwd'] != "") {
            if (checkFolder()) {
                $new_user = array('login' => $_POST['login'], 'passwd' => hash('md5', $_POST['passwd']));
                $contents = unserialize(file_get_contents("./htdocs/private/passwd"));
                $contents[] = $new_user;
                file_put_contents("./htdocs/private/passwd", serialize($contents));
                return true;
            } else 
                return false;
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
    <title>Welcome</title>
    <link rel="stylesheet" text="text/css" href="info.css">
</head>
<body>
    <div class="user-registration">
        <?php if (register() == true) : ?>
            <h2>Welcome <?php echo $_POST['login']; ?>  Please Sign In to access your account</h2>
        <?php elseif (register() === false) : ?>
            <h2>This user is already registered.  Please try again.</h2>
        <?php else : ?>
            <h2>Please fill in the fields</h2>
        <?php endif; ?>
    </div>
</body>
</html>

