<?php

define ('DB_NAME', 'FAT');
define ('DB_USER', 'FAT');
define ('DB_PASSWORD', 'P@ssword');
define ('DB_HOST', 'localhost'); 

$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) { 
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db (DB_NAME, $link);

if (!$db_selected) { 
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$sql = "INSERT INTO Testfile (`ID`, `Tools`, `case`, `Text`, `date`, `date2`, `time`) VALUES (NULL, '" . $_POST['Tools'] . "','" . $_POST['case'] . "','" . $_POST['Text'] . "','" . $_POST['date'] . "','" . $_POST['date2'] . "','" . $_POST['time'] . "');";
//print $sql;

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
} 

mysql_close();

echo 'Your configuration has been recieved and will be processed.';

?>
 

