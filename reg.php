<?php
    include 'connect.php';
    if(!empty($_POST)){
        $_SESSION['error']['autherror'] = '';
        $name = $_POST['name'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $checkPass = $_POST['check-pass'];
        $role = $_POST['role'];
        $users = $conn -> query("SELECT * FROM `users` WHERE `login` =  '$login'");
        if($users->num_rows>0){
            $_SESSION['error']['autherror'] = 'Такой логин уже существует';
        }
        else
        {
            if($pass == $checkPass){
                $reg = $conn -> query("INSERT INTO `users`(`name`, `login`, `email`, `pass`, `role`) VALUES ('$name', '$login', '$email', '$pass', '$role')");
                $_SESSION['error']['autherror'] = '';
                 header('location:login.php');
            }
            else
            {
                $_SESSION['error']['autherror'] = 'Пароли не совпадают';
            };  
        }  
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
                <label>Имя*</label>
                <input type="text" name="name" required>  
                <label>Логин*</label>
                <input type="text" name="login" required>     
                <label>Email</label>
                <input type="email" name="email">        
                <label>Пароль*</label>
                <input type="password" name="pass" required>
                <label>Повторите пароль*</label>
                <input type="password" name="check-pass" required>
                <input type="text" name="role" value="0" class="hidden">
                <button type="submit" class="button-style">Зарегестрироваться</button>
                <p class="error-text"><?if(!empty($_SESSION['error']['autherror'])){
                echo $_SESSION['error']['autherror'];
                }?></p>
                <p>Зарегестрированы?<a href="login.php"> Войти</a></p>
            </div>
        </form>
    </main>
</body>
</html>