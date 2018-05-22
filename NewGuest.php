<?php
date_default_timezone_set('America/New_York');

$first = $_POST["first"];
$last = $_POST["last"];
$city = $_POST["city"];
$state = $_POST["state"];
$ts = time();

//save
$FileName = "TheBook.txt";
$entry = '';
$MyHandle = fopen ($FileName, "a");
$entry = $ts . "\t" . $first . "\t" . $last . "\t" . $city . "\t" . $state . "\n";
fwrite($MyHandle, $entry);
fclose ($MyHandle);

include 'makeJSON.php';
?>
