<?php

$serverName = "db";
$userName = "user";
$password = "password";
$dbName = "mydb";

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
