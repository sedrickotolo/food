<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);

// Check connection
if (!$con) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}
?>




