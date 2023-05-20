<?php

$emailSenderLink = "database/password-reset-email-sender.php";
require "../php/sign-up-and-account-recovery-process.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include default codes -->
    <?php require "template/form-head.html";  ?>

    <title>Account Recovery</title>
    <script src="../Script/validation/account-recovery-validation.js" defer></script>
</head>

<body>
    <main class="container">
        <?php

        if (isset($_SESSION["unique_code"]) && isset($_GET["session"]) && $_GET["session"] === $_SESSION["unique_code"]) {
            require "template/account-recovery/account-recovery-stage-three.php";
        } elseif ($stage === 1) {
            require "template/account-recovery/account-recovery-stage-one.php";
        } elseif ($stage === 2) {
            $_SESSION["email"] = $_POST["email"];

            require "template/account-recovery/account-recovery-stage-two.php";
        }

        ?>
    </main>
</body>

</html>

<script>
    // avoid unwanted events when user is on stage two
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>