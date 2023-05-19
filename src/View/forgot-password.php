<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include default codes -->
    <?php require "template/form-head.html";  ?>

    <title>Log in to Company</title>
    <script src="../Script/validation/account-recovery-validation.js" defer></script>
</head>

<body>
    <main class="container">
        <h1 class="heading">Account Recovery</h1>
        <form action="" method="post" class="form-container" id="account-recovery-form" autocomplete="off" spellcheck="false">
            <p class="message">To recover your account by resetting your password, please enter your email where we could send a password reset link below:</p>
            <div class="input-area">
                <input type="email" name="email" class="email" id="account-recovery-email" placeholder="Email">
            </div>
            <div id="account-recovery-submit-area">
                <input type="submit" class="submit" id="account-recovery-submit" value="Submit">
            </div>
        </form>
    </main>
</body>

</html>

<script>
    // avoid unwanted events when user is on stage two
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href)
    }
</script>