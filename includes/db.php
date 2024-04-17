<?php
$host = 'localhost'; // or your host
$dbname = 'is117';
$username = 'js426';
$password = '3$B7g*9!kLp4^2@';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>