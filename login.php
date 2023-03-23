<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="style.css">

    
</head>
<body>
<header>
        <input id="menu-toggle" type="checkbox"/>
        <label class="fas fa-bars" for="menu-toggle"></label>

        <a href="#" class="logo">Neilikka <span>.</span></a>

        <nav class="navbar">
            <a href="index.php">Etusivu</a>
            <a href="index.php#products">Tuotteet</a>
            <a href="index.php#about">Tietoa Meistä</a>
            <a href="index.php#shops">Myymälät</a>
            <a href="index.php#contact">Ota yhteyttä</a>
            <a href="login.php">Kirjaudu sisään</a>
        </nav>
    </header>

<section class="form-container">
<form>
   <h3>Kirjaudu sisään</h3>
   <input type="name" name="name" class="box" placeholder="syötä nimesi" required>
   <input type="password" name="password" class="box" placeholder="syötä salasanasi" required>
   <button type="submit" class="btn" id="button">Kirjaudu sisään</button>
   <p>ei ole vielä rekisteröitynyt? <a href="register.php">Rekisteröidy</a></p>
   <p id="msg" class="none">Hello!</p>
</form>
</section>

<footer>
        <div class="footer-content">
            <h4>Puutarhaliike Neilikka</h4>
            <ul class="socials">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </footer>


    <script src="jquery-3.6.3.min.js"></script>
    <script src="main.js"></script>
</body>
</html>