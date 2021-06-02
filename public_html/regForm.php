<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration form</title>
    <link rel="stylesheet" href="regForm.css">
</head>

<body>
<div class="form">
    <form action="includes/registration.php" class="form__body" method="post">
        <div class="title">
       <div class="line"><hr size="4"></div>
        <h1 class="formName">Register</h1>
            <div class="line"><hr size="4"></div>

        </div>
        <p>Create your account.It's free and only takes a minute</p>
        <div class="name">
        <div class="form__item">
            <label for="formName" class="formLabel"></label>
            <input id="formName"  type="text" name="lastName" class="form__input-name _req" placeholder="First Name" required>
        </div>
        <div class="form__item">
            <label for="formSurname" class="formLabel"></label>
            <input id="formSurname"  type="text" name="firstName" class="form__input-name _req" placeholder="Last Name" required>
        </div>
        </div>
        <div class="form__item">
            <label for="formEmail" class="formLabel"></label>
            <input id="formEmail"  type="email" name="email" class="form__input _req" placeholder="Email" required>
        </div>
        <div class="form__item">
            <label for="formPassword" class="formLabel"></label>
            <input id="formPassword"  type="password" name="password" class="form__input _req" placeholder="Password" required>
        </div>
        <div class="form__item">
            <label for="formConfPassword" class="formLabel"></label>
            <input id="formConfPassword"  type="password" name="confirmPass" class="form__input _req" placeholder="Confirm Password" required  >
        </div>
        <div class="form__item">
            <div class="checkbox">
                <input id="formAgreement" required  type="checkbox" name="agreement" class="checkbox__input _req">
                <label for="formAgreement" class="checkbox__label">I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a> </label>
            </div>
        </div>
        <button type="submit" class="form__button">Register Now</button>
    </form>
    <p class="Registered">Already have an account? <a href="logForm.php">Sign in</a> </p>
   <?php if ($_SESSION['message']) {
       echo '<p class = "msg">' . $_SESSION['message'] . ' </p>';
   }
   unset($_SESSION['message']);
   ?>

</div>

</body>
</html>