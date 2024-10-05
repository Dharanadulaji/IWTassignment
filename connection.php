<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwtassignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection succeeded";
}

require_once './connection.php';
