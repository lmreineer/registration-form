<?php

$dotenv->load();

$hostname = $_ENV["DB_HOST_NAME"];
$username = $_ENV["DB_USER_NAME"];
$password = $_ENV["DB_PASSWORD"];
$db_name = $_ENV["DB_NAME"];

// create connection
$conn = new mysqli($hostname, $username, $password, $db_name);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
