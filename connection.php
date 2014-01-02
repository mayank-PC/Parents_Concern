<?php
$db = mysql_connect("localhost", "root", "") or die("Could not connect.");

if(!$db) 

	die("no db");

if(!mysql_select_db("parents_concern",$db))

 	die("No database selected.");
?>