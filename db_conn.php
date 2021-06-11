<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "saif_db";

$conn = mysqli_connect($localhost, $root, $saif_db);

if (!$conn) {
	echo "Connection failed!";
}