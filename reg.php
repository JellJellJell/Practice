<?php
    session_start();
    $conn = new mysqli('localhost','root','','cultcars');
    if(!empty($_POST)){
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];
        $reg = $conn -> query("INSERT INTO `users`(`name`, `pass`, `role`) VALUES ('$name','$pass', '$role')");
        header('location:login.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="scss/form.css">
</head>
<body>
<div class="header-wrapper">
        <header class="header">
            <div class="container">
                <div class="header__row">
                    <div class="header__row_logo">
                        <a href="index.php#" class="header__logo_link">
                            Cult<span>Cars</span>
                        </a>
                    </div>
                    <div class="header__row_menu">
                        <ul class="header__menu">
                            <li class="header__menu_item"><a href="index.php#about" class="header__menu_link">О НАС</a></li>
                            <li class="header__menu_item"><a href="index.php#events" class="header__menu_link">ВСЕ СОБЫТИЯ</a></li>
                            <li class="header__menu_item"><a href="index.php#letter" class="header__menu_link">ОБРАТНАЯ СВЯЗЬ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <main>
        <form method="POST" class="form-wrap">
            <div class="form-container">
                <h1>Регистрация</h1>
                <label>Имя</label>
                <input type="text" name="name">              
                <label>Пароль</label>
                <input type="password" name="pass">
                <input type="text" name="role" value="0" class="hidden">
                <button type="submit" class="button-style">Зарегестрироваться</button>
                <p>Зарегестрированы?<a href="login.php"> Войти</a></p>
            </div>
        </form>
    </main>
</body>
</html>