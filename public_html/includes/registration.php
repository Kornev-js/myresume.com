<?php
session_start();
require_once 'connect.php';
session_start();

$userName = $_POST['lastName'];
$userSurname = $_POST['firstName'];
$userEmail = $_POST['email'];
$userPass = $_POST['password'];
$userConfPass = $_POST['confirmPass'];

if ($userPass === $userConfPass) {
    //con
    header('Location:../index.php');
    $userPass = md5($userPass);
    mysqli_query($connect, "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES('$userName', '$userSurname', '$userEmail', '$userPass' )");

}else {
    $_SESSION['message'] = 'Password do not match;';
    header('Location:../regForm.php');
}


//if (empty('$lastName') && empty('$firstName') && empty('$email') && empty('password')) {
//    $_SESSION['message'] = 'Fill all fields';
//    header('Location:../regForm.php');
//    exit();
//} elseif ($userPass !== $userConfPass) {
//    $_SESSION['message'] = 'Password do not match;';
//  header('Location:../regForm.php');
//  exit();
//} else {
//    header('Location:../index.php');
//   $userPass = md5($userPass);
//    mysqli_query($connect, "INSERT INTO `users` (`name`, `lastname`, `email`, `password`) VALUES('$userName', '$userSurname', '$userEmail', '$userPass' )");
//}
//
//
//
//
//
//
//
//
//
//
////$_SESSION['message'] = 'Success';
////header('Location: ../index.php');



