<?php
  include("connect.php")
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>




<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact US</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./background-main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <header>
        <img class="logo"
            src="../HTML & CSS Practices/Images/f3e7d78a-6d94-4f31-ba2b-331e25402b53 (online-video-cutter.com).gif"
            alt="logo">
        <nav>
            <ul class="nav__links">
                <li><a href="#home">Home</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#compromise">Compromise</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="about">About</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>Contact</button></a>

        <div class="icon-bar">
            <i class="fas fa-blog"></i>
            <i class="fas fa-house-chimney"></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-envelope"></i>
            <i class="fas fa-map-marker-alt"></i>
        </div>

    </header>

    <div class="contaner">
        <form action="./php/connect.php" method="post">
            <h1>Sign Up</h1>
            <div class="form-input">
                <label for="firstname"></label>
                <input type="text" id="firstname" placeholder="Enter your First Name" required>
                <i class="fa-solid fa-user fa-bounce"></i>

                <label for="username"></label>
                <input type="text" id="username" placeholder="Enter your UserName" required>
                <i class="fa-solid fa-user-pen fa-spin"></i>

                <label for="password"></label>
                <input type="text" id="password" placeholder="Enter your Password" required>
                <i class="fa-solid fa-key fa-shake"></i>

                <label for="email"></label>
                <input type="text" id="email" placeholder="Enter your Email" required>
                <i class="fa-solid fa-envelope fa-beat"></i>

                <button type="submit" class="login-btn">Create Account</button>
            </div>
        </form>
    </div>
</body>

</html>