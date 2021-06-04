<?php
session_start();


include "pages/navigation.php";


$arr = array('pages/logForm', 'pages/CV', 'pages/indexForm', 'pages/regForm', 'pages/edit_form') ;
$pages = (isset($_GET['tab'])) ? $_GET['tab']: 'pages/CV';
if (in_array($pages, $arr)) {
    include("$pages.php");
}

if(array_key_exists('user', $_SESSION)){
    echo 'hello, ' . $_SESSION['user']['name'];
    echo ' To logout click' . '<a href = includes/logout.php>Here</a>';
}

