<?php
session_start();
$connect = mysqli_connect('localhost', 'admin', 'root', 'my_db');

if (!$connect) {
    die('error connect to db');
}
require_once 'connect.php';


$userEmail = $_POST['email'];
$userPass = md5($_POST['password']);
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$userEmail' AND `password` = '$userPass'");
//var_dump($check_user, mysqli_num_rows($check_user) );
//die();
//
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [

        "id" => $user['id'],
        "name" => $user['lastName'],
        "full_name" => $user['email']
    ];

    header('Location:../index.php');
//    echo 'You are Logged In' . "$user['email']";



//    echo 'Hello' . 'email';
}else {
    header('Location:../regForm.php');
    $_SESSION['message'] = 'Wrong pass or login';

}


























//
//$userEmail = $check_user->fetch_assoc();
//
//if (count($userEmail) == 0) {
//    header('Location:../regForm.php');
//    exit();
//
//}
//session_start();
//$_SESSION["email"] = $userEmail;
//$_SESSION["password"] = $userPass;
//echo "Данные сохранены в сессии";
