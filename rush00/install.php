<?php
	// Sets-up our environmental variables
	session_start();	
	/* Create serialized db and file */
	include("./csv/csv.php");
	$db = csv_parser("./csv/gg.csv");
    $fp = fopen("./csv/db", "w");
    file_put_contents('./csv/db', $db);
    fclose($fp);
	// Includes format file
	include("format.php");
	// Stores the name of folders we want to create
	$folders = array("./htdocs", "./htdocs/private");
	// Custom function where we create the folders
	createFolder($folders);
	/* Possibly...?  For testing only */
	//delAllCookies();
	cookiesForItems();
?>
