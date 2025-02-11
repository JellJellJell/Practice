<?php     
    include 'connect.php';
    $_SESSION['error']['autherror'] = '';
    if($_POST){
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $users = $conn -> query("SELECT * FROM `users` WHERE `pass` = '$pass' AND `login` = '$login'");
        if($users->num_rows>0){
            $user = $users -> fetch_assoc();
            $_SESSION['user'] = [
                'id' => $user['id'],
                'login' => $user['login'],
                'pass' => $user['pass'],
                'role' => $user['role']
            ];
            $_SESSION['error']['autherror'] = '';
            if($_SESSION['user']['role'] == 1){
                header('location:admin-panel.php');
            }else{
                header('location:profile.php');
            }
            
    
        }else{
            $_SESSION['error']['autherror'] = 'Неправильный логин или пароль';
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
                <h1>Авторизация</h1>
                <label>Логин*</label>
                <input type="text" name="login" required>              
                <label>Пароль*</label>
                <input type="password" name="pass" required>
                <button type="submit" class="button-style">Войти</button>
                <p class="error-text"><?if(!empty($_SESSION['error']['autherror'])){
                echo $_SESSION['error']['autherror'];
                }?></p>
                <p>Не зарегестрированы?<a href="reg.php"> Зарегестрироваться</a></p>
            </div>
        </form>
    </main>
</body>
</html>