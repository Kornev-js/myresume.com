<?php //session_start()  ?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navMenu</title>
    <link rel="stylesheet" href="../css/navmenu.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
<nav class = "navigation">
    <ul class="navMenu">
        <li class="navMenu__item"><a href="?tab=pages/logForm">Login</a></li>
        <li class="navMenu__item"><a href="?tab=pages/CV">Resume</a></li>
        <li class="navMenu__item"><a href="?tab=pages/indexForm">Form</a></li>
        <?php if(array_key_exists('user', $_SESSION)){ ?>
            <li class="navMenu__item"><a href="?tab=pages/regForm">Register</a></li>
            <li class="navMenu__item"><a href="?tab=pages/edit_form">Edit Form</a></li>
            <li class="navMenu__item"><a href="#">Docs</a></li>
            <li class="navMenu__item"><a href="#">Support</a></li>
            <li class="navMenu__item"><a href="#">Plans</a></li>
            <li class="navMenu__item"><a href="">Blog</a></li>
        <?php } ?>
    </ul>


</nav>
</body>
</html>