<?php

require_once "../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../../");

require __DIR__ . "/database.php";

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$password_hash = $_SESSION["password_hash"];

$stmt = $conn->prepare("INSERT IGNORE INTO user (name, email, password_hash) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password_hash);

$stmt->execute();

$stmt->close();
$conn->close();

session_unset();
session_destroy();
