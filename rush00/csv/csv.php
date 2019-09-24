<?php
function largest_line($file)
{
	$max = 0;
	try {
		if (($f = fopen($file, 'r')) !== FALSE)
			while (($line = fgets($f)) !== false)
				if (strlen($line) > $max)
					$max = strlen($line);
		fclose($f);
		return (int)$max;
	} catch(Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
}
function csv_parser($csvfile)
{
	$out = Array(Array());
	try {
		if (($file = fopen($csvfile, 'r')) !== FALSE)
		{
			$i = -1;
			while (($lines = fgetcsv($file, largest_line($csvfile), ",")) !== FALSE)
				$out[++$i] = $lines; 
			fclose($file);
		}
		return serialize($out);
	} catch(Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
}
function add_extra_content($csvfile, $Item, $ID, $Price, $Path)
{
	try {
		$file = fopen($csvfile, "a");
		$new_line = (string)$Item.",".(string)$ID.",".(string)$Price.",".(string)$Path;
		fwrite($file, $new_line."\n");
		fclose($file);
	} catch(Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
}
?>
