<?php

require_once "../../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../../../");

require __DIR__ . "/database.php";

if (isset($_POST["repeat-password"])) {
    session_start();

    $email = $_SESSION["email"];

    $query = "SELECT * FROM user WHERE email = '$email'";

    $result = $conn->query($query);

    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        $newPassword = password_hash($_POST["repeat-password"], PASSWORD_DEFAULT);

        echo $newPassword;

        $password_hash = $row["password_hash"];

        $secondQuery  = "UPDATE user SET password_hash='$newPassword' WHERE password_hash='$password_hash'";

        $secondResult = $conn->query($secondQuery);

        header("Location: ../../View/template/account-recovery/account-recovery-succesful.html");
        exit;
    } else {
        echo "S";
    }
}
