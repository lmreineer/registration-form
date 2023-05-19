<?php

require "../php/sign-up-process.php";

// save information to session that was previously inputted
isset($_POST["name"]) ? $_SESSION["name"] = $_POST["name"] : '';
isset($_POST["email"]) ? $_SESSION["email"] = $_POST["email"] : '';
isset($_POST["password"]) ? $_SESSION["password_hash"] = password_hash($_POST["password"], PASSWORD_DEFAULT) : '';

// attach saved information to variable if available
$savedName = isset($_SESSION["name"]) ? $_SESSION["name"] : '';
$savedEmail = isset($_SESSION["email"]) ? $_SESSION["email"] : '';

if (isset($_SESSION["unique_code"])) {
    $unique_code = $_SESSION["unique_code"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include default codes -->
    <?php require "template/form-head.html";  ?>

    <title>Sign up to Company</title>
    <script src="../Script/validation/sign-up-validation.js" defer></script>
</head>

<body>
    <main class="container">

        <?php

        if (isset($_SESSION["unique_code"]) && isset($_GET["session"]) && $_GET["session"] === $unique_code) {
            require_once "../php/database/account-inserter.php";
            require "template/sign-up-sucessful.html";
        } else if ($stage === 1) {
            require "template/stage-one.php";
        } elseif ($stage === 2) {
            require "template/stage-two.php";
        }

        ?>

    </main>
</body>

</html>

<script>
    // avoid unwanted events when user is on stage two
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href)
    }
</script>