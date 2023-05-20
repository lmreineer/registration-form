<?php

require_once "../../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable("../../");
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

$mail->setFrom("thewebsitenoreply@gmail.com", "Company");
$mail->addAddress($_POST["email"]);

$mail->isHTML(true);

$mail->Subject = "Verify your Company account";
$mail->Body    = "Hello, <br><br>  You have chosen this email to be the email of your new Company account. To verify that this email belongs to you, please open the link below: <br><br> <b><a href='http://localhost/php-projects/registration-form/src/View/sign-up.php?session={$unique_code}'>http://localhost/php-projects/registration-form/src/View/sign-up.php?session={$unique_code}</a></b> <br><br> Thank you for signing up.";
$mail->AltBody = "Hello, you have chosen this email to be the email of your new Company account. To verify that this email belongs to you, please open this link: http://localhost/php-projects/registration-form/src/View/sign-up.php?session={$unique_code}";

$mail->send();
