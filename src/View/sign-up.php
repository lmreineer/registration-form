<?php

$emailSenderLink = "registration-email-sender.php";
require "../php/sign-up-and-account-recovery-process.php";

// save information to session that was previously inputted
isset($_POST["name"]) ? $_SESSION["name"] = $_POST["name"] : '';
isset($_POST["email"]) ? $_SESSION["email"] = $_POST["email"] : '';
isset($_POST["password"]) ? $_SESSION["password_hash"] = password_hash($_POST["password"], PASSWORD_DEFAULT) : '';

// attach saved information to variable if available
$savedName = isset($_SESSION["name"]) ? $_SESSION["name"] : '';
$savedEmail = isset($_SESSION["email"]) ? $_SESSION["email"] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include default codes -->
    <?php require "template/form-head.html";  ?>

    <title>Sign up to Company</title>
    <script src="../Script/validation/sign-up-validation.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="../Script/validation/sign-up-email-availability-displayer.js" defer></script>
</head>

<body>
    <main class="container">

        <?php

        if (isset($_SESSION["unique_code"]) && isset($_GET["session"])) {
            if ($_GET["session"] === $_SESSION["unique_code"]) {
                require_once "../php/database/account-inserter.php";
                require "template/sign-up/sign-up-sucessful.html";
            } else {
                header("Location: sign-up.php");
                exit;
            }
        } else if ($stage === 1) {
            require "template/sign-up/sign-up-stage-one.php";
        } elseif ($stage === 2) {
            require "template/sign-up/sign-up-stage-two.php";
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