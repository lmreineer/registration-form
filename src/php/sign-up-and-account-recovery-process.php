<?php

session_start();

$stage = 1;

// disable email sender if user is on stage two
$emailSent = isset($_SESSION["emailSent"]) ? $_SESSION["emailSent"] : false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($stage === 1) {

        $stage = 2;

        if (!$emailSent) {
            require_once $emailSenderLink;
            $_SESSION["emailSent"] = true;
        }
    }
}

// re-enable email sending if user is back on stage one
$stage === 1 ? $_SESSION["emailSent"] = false : true;
