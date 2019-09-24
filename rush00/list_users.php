<?php
	function list_all_users()
	{
		$users = Array();
		if (isset($_GET['login']) && isset($_GET['passwd']) && $_GET['login'] != "") {
            $contents = unserialize(file_get_contents("./htdocs/private/passwd"));
            for ($i = 0; $i < sizeof($contents); $i++) 
				$users = array_merge($contents[$i]['login'], $users);
            return $users;
        } else
            return (0);
	}
?>
