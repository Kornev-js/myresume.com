<?php $connect = mysqli_connect('localhost', 'developer', 'root', 'my_db');

if (!$connect) {
    die('error connect to db');
}