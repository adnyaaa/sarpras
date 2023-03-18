<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_sarprass";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

	die("failed to connect!");
}