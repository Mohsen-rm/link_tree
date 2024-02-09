<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aljiashi_link_me";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// ================================ check user if exist or not (for removed account).?>