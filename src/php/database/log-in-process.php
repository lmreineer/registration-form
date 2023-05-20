<?php

require_once "../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../../");

require __DIR__ . "/database.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];

    $query = "SELECT * FROM user WHERE email = '$email'";

    $result = $conn->query($query);

    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        $name = $row["name"];
        $password_hash = $row["password_hash"];

        if (password_verify($_POST["password"], $password_hash)) {
            session_start();

            $_SESSION["name"] = $name;

            header("Location: ../../src/View/template/log-in/log-in-successful.php");
            exit;
        } else {
            $logInFailure = true;
        }
    } else {
        $logInFailure = true;
    }
}

$conn->close();
