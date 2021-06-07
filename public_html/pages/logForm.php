<?php // session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/logForm.css">

</head>

<body>
<div class="form">
    <form action="../functionality/login.php" method="POST">
        <h1>Login Form</h1>
        <div class="form__item">
            <label for="formName" class="formLabel validation">Login or Email</label>
            <input id="formName"  type="email" name="email" class="form__input-name " placeholder="Login">
        </div>
        <div class="form__item">
            <label for="formPass" class="formLabel">Password</label>
            <input id="formPass"  type="password" name="password" class="form__input-name validation" placeholder="******">
        </div>
        <div id="error"></div>
        <a href="#" class="reminder">Forgot Password?</a>
        <button type="submit" class="loginButton">Log In</button>
        <p class="regLink">Not a member? <a href="../pages/regForm.php">Signup now</a></p>

    </form>
</div>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/logFormValidation.js"></script>
</body>
</html>