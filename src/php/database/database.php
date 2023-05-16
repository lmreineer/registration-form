<?php

require_once "../../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../../../");
$dotenv->load();

$hostname = $_ENV["DB_HOST_NAME"];
$username = $_ENV["DB_USER_NAME"];
$password = $_ENV["DB_PASSWORD"];
$db_name = $_ENV["DB_NAME"];

// Create connection
$conn = new mysqli($hostname, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
