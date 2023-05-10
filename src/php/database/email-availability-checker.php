<?php

require __DIR__ . "/database.php";

// check if email is already taken
$query = "SELECT * FROM user WHERE email='" . $_POST["email"] . "'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo "<div>Email is invalid or already taken</div>";
    echo "<script>$('.submit').prop('disabled',true);</script>";
} else {
    echo "<script>$('.submit').prop('disabled',false);</script>";
}
