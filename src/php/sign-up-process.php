<?php

$stage = 1;

$emailSent = isset($_SESSION["emailSent"]) ? $_SESSION["emailSent"] : false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($stage === 1) {

        $stage = 2;

        if (!$emailSent) {
            require_once "registration-email-sender.php";
            $_SESSION["emailSent"] = true;
        }
    }
}
