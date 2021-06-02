<?php
session_start();


include "navigation.php";


$arr = array('logForm', 'CV', 'indexForm', 'regForm', 'edit_form') ;
$pages = (isset($_GET['tab'])) ? $_GET['tab']: 'CV';
if (in_array($pages, $arr)) {
    include("$pages.php");
}

if(array_key_exists('user', $_SESSION)){
    echo 'hello, ' . $_SESSION['user']['name'];
    echo ' To logout click' . '<a href = includes/logout.php>Here</a>';
}

