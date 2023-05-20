<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company - Where It All Starts</title>
    <link rel="stylesheet" href="../../../Style/reset.css">
    <link rel="stylesheet" href="../../../Style/main.css">
</head>

<body>
    <main class="container">
        <h1 class="heading">Home</h1>
        <div class="form-container">
            <p class="message">Welcome,
                <?= ucfirst($_SESSION["name"]); ?>
            </p>
        </div>
    </main>
</body>

</html>