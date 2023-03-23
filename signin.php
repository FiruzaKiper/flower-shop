<?php
session_start();
@include 'config.php';

$name = $_POST['name'];
$password = $_POST['password'];

$error_fields = [];

if ($name === '') {
    $error_fields[] = 'name';
}
if ($password === '') {
    $error_fields[] = 'password';
}

if(!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "täytä kentät oikein!",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

$password = md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $response = [
        "status" => true
    ];

    echo json_encode($response);

}else {

    $response = [
        "status" => false,
        "message" => 'salasana tai sähköpostiosoite on virheellinen!'
    ];

    echo json_encode($response);

}
?>