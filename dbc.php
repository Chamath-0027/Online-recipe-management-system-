<?php
$serverName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "recipe";

$conn = new mysqli($serverName, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
