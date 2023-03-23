<?php
$connect = mysqli_connect('localhost', 'root', '', 'shop_db');

if (!$connect) {
    die('Error connect to DataBase');
}