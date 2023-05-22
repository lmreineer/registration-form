<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Recovery</title>
    <link rel="stylesheet" href="../../../Style/reset.css">
    <link rel="stylesheet" href="../../../Style/main.css">
</head>

<body>
    <main class="container">
        <div id="success-field">
            <p class="message">Your password has been reset.</p>
            <p class="message">Log in <a href="../../log-in.php">here</a></p>
        </div>
    </main>
</body>

</html>

<?php

session_unset();
session_destroy();

?>