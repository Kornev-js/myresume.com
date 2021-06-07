<?php
session_start();




$arr = array('registration', 'login') ;

$action = $_GET['action'] ?? $_POST['action'] ?? null;

//var_dump($action);
if (in_array($action, $arr)) {
    include("./functionality/$action.php");
    exit();
}

$arr = array('pages/logForm', 'pages/CV', 'pages/indexForm', 'pages/regForm', 'pages/edit_form') ;
$pages = (isset($_GET['tab'])) ? $_GET['tab']: 'pages/CV';
include "pages/navigation.php";

if (in_array($pages, $arr)) {
    include("$pages.php");
}

if(array_key_exists('user', $_SESSION)){
    echo 'hello, ' . $_SESSION['user']['name'];
    echo ' To logout click' . '<a href = functionality/logout.php>Here</a>';
}

