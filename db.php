<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$server = "localhost";
$username = "swadeepx_swades";
$password = "3%}DCR6?5D^K";
$dbname = "swadeepx_swades";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
	// echo "Connected";
}
?>