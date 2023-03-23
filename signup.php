<?php
session_start();
@include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

// Onko tätä käyttäjää olemassa: 

$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$name'");
if (mysqli_num_rows($check_login) > 0) {
    $response = [
        "status" => false, 
        "type" => 1,
        "message" => "Käyttäjä on jo olemassa!",
        "fields" => ['name']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($name === '') {
    $error_fields[] = 'name';
}
if ($password === '') {
    $error_fields[] = 'password';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {  // EMAIL ADDRESS CHECKING
    $error_fields[] = 'email';
}
if ($password_confirm === '') {
    $error_fields[] = 'password_confirm';
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

if ($password === $password_confirm) {
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')");
   
    $response = [
        "status" => true,
        "message" => "Rekisteröinti onnistui!"
    ];

    echo json_encode($response);
    die();

}else {

    $response = [
        "status" => false,
        "message" => 'salasana tai sähköpostiosoite on virheellinen!'
    ];

    echo json_encode($response);

}


?>