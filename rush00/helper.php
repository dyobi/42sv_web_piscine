<?php
    //Sets cookies for all items in serialized db file, created in install.php
    function cookiesForItems() {
        $item_amt = 18;
        $items = unserialize(file_get_contents("./csv/db"));
        for ($i = 1; $i <= $item_amt; $i++)
            if (!isset($_COOKIE[$items[$i][1]]))
                setcookie($items[$i][1], 0, time() + 84600,'/');
    //Deletes cookies -> for clean slate
    }
    function delAllCookies() {
        $past = time() - 3600;
        foreach ($_COOKIE as $key => $value)
            setcookie($key, $value, $past, '/');
    }
    function checkUser() {
		return (isset($_SESSION['logged_user']) && $_SESSION['logged_user'] != NULL) ? true: false;
	}
	// Creates a folder with array of names to be used passed as param
    function createFolder($folders) {
        foreach ($folders as $folder)
            if (!file_exists($folder))
                mkdir($folder);
	}
	// Pulls serialized data (usernames and hashed passwords) to verify if the user is allowed to log on
    function auth($login, $passwd) {
		// Pulls serialized data (formatted a certain way) from file and sets it back to array
		$content = unserialize(file_get_contents("./htdocs/private/passwd"));
		foreach ($content as $users)
			// Compares all of the hashed passwords to current hashed passwords and current login to 
			// stored logins to verify if the user is allowed to log on
            if ($users['login'] === $login && $users['passwd'] === hash('md5', $passwd))
                return true;
        return false;
    }
?>
