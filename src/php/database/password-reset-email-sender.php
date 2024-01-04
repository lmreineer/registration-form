<?php

require_once "../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../../");

require __DIR__ . "/database.php";

$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../../PHPMailer/src/Exception.php";
require "../../PHPMailer/src/PHPMailer.php";
require "../../PHPMailer/src/SMTP.php";

$unique_code = uniqid();
$_SESSION["unique_code"] = $unique_code;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = $_ENV["MAIL_HOST"];
$mail->SMTPAuth = true;
$mail->Username = $_ENV["MAIL_USER_NAME"];
$mail->Password = $_ENV["MAIL_PASSWORD"];
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

$mail->setFrom("enteryouremailhere@email.com", "Name");
$mail->addAddress($_POST["email"]);

$mail->isHTML(true);

$mail->Subject = "Reset your Company account password";
$mail->Body    = "Hello, <br><br> You have requested to recover your account by resetting your password on this email. To confirm that you performed this, please open the link below: <br><br> <b><a href='http://localhost/registration-form/src/View/forgot-password.php?session={$unique_code}'>http://localhost/registration-form/src/View/forgot-password.php?session={$unique_code}</a></b>";
$mail->AltBody = "Hello, you have requested to recover your account by resetting your password on this email. To confirm that you performed this, please open this link: http://localhost/registration-form/src/View/forgot-password.php?session={$unique_code}";

$email = $_POST["email"];

$query = "SELECT * FROM user WHERE email = '$email'";

$result = $conn->query($query);

$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    $mail->send();
}
