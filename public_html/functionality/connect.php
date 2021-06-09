<?php
$connect = mysqli_connect('127.0.0.1', 'developer', 'root', 'my_db');
if (!$connect) {
    die('error connect to db');
}
return $connect;