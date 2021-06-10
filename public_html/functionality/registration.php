<?php

$connect = require_once 'connect.php';


$userName = $_POST['name'];
$userSurname = $_POST['lastName'];
$userEmail = $_POST['email'];
$userPass = $_POST['password'];
$userConfPass = $_POST['confirmPass'];
if (empty($lastName) || empty($firstName) || empty($email) || empty(password)) {
    $_SESSION['message'] = 'Fill all fields';
    header('Location:../functionality/regForm.php');
    exit();
} elseif ($userPass !== $userConfPass) {
    $_SESSION['message'] = 'Password do not match;';
    header('Location:../functionality/regForm.php');
    exit();
}
if ($userPass === $userConfPass) {

    $userPass = md5($userPass);
    mysqli_query($connect, "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES('$userName', '$userSurname', '$userEmail', '$userPass' )");
    header('Content-Type: application/json');
    echo json_encode(['message' => 'ok']);
    $_SESSION['message'] = 'Success';
}









