<?php
// Database configuration
$dbHost     = "localhost:8889";
$dbUsername = "root";
$dbPassword = "123";
$dbName     = "temp";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>