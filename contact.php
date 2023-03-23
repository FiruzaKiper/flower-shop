<?php
 require_once 'connect.php';


 $name = $_POST['name'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 mysqli_query($connect, "INSERT INTO `contact-data` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message')");

 header('Location: message.html');

?>



