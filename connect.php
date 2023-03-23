<?php

    $connect = mysqli_connect('localhost', 'root', '', 'contactform');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>