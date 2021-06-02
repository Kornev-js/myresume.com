<?php $connect = mysqli_connect('localhost', 'admin', 'root', 'my_db');

if (!$connect) {
    die('error connect to db');
}