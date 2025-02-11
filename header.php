<?
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CultCars</title>
    <link rel="stylesheet" href="scss/<?=$style?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- <video autoplay muted loop>
        <source src="test.mp4" type="video/mp4">
    </video> -->
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
                    <?
                    if(!empty($_SESSION['user']['id'])){?>
                    <div class="login">
                        <a href="<?
                        if($_SESSION['user']['role'] == 1){ ?>
                            admin-panel.php
                        <?}else{?>
                            profile.php
                        <?}?>"><img src="img/profile.svg" alt=""></a>
                        <a href="logout.php" class="admin-button">Выйти</a>
                    </div>
                    <?}else{?>
                        <a href="login.php"><button id="admin-button">Войти</button></a>
                    <?}
                    ?>
                </div>
            </div>
        </header>
    </div>