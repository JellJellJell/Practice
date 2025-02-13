    <?
        $style = 'profile.css';
        include 'header.php';
        if(!empty($_POST)){
            $_SESSION['error']['autherror'] = '';
            $idUserf= $_SESSION['user']['id'];
            $name = $_POST['new-name'];
            $login = $_POST['new-login'];
            $email = $_POST['new-email'];
            $pass = $_POST['new-pass'];
            $users = $conn -> query("SELECT * FROM `users` WHERE `name` = '$name',`login` =  '$login', `email` = '$email', `pass` = '$pass'");

                $update = $conn -> query("UPDATE `users` SET `name`='$name',`login`='$login',`email`='$email',`pass`='$pass' WHERE `id` = '$idUserf'");
                $_SESSION['error']['autherror'] = '';
            
        }
        $idUser = $_SESSION['user']['id'];
        $usersAuth = $conn -> query("SELECT * FROM `users` WHERE `id` =  '$idUser'");
    ?>
    
    <main>
        <div class="container">
            <div class="profile">
                <h1>Ваш профиль:</h1>
                    <div class="avatar">
                        <img src="img/profile.svg" alt="">
                    </div>
                <div class="info">
                <?foreach ($usersAuth as $key => $value) {?>
        <div class="label-stat">
            <p>Имя: <span id="span1" class=""><?= $value['name']?></span></p>
            <div class="input-wrap">
                <form action="" method="POST">
                    <input type="text" name="new-name" class="hidden"  value="<?= $value['name']?>" id="input1" maxlength="15">
                    <img src="img/pen.svg" alt="" class="" id="change1">
                    <button class="bgbtnsubmit hidden" id="ok1"></button>
            </div>
        </div>
    <?}?>
    <?foreach ($usersAuth as $key => $value) {?>
        <div class="label-stat">
            <p>Логин: <span id="span2" class=""><?= $value['login']?></span></p>
            <div class="input-wrap">
                    <input type="text" name="new-login" class="hidden"  value="<?= $value['login']?>" id="input2" maxlength="20">
                    <img src="img/pen.svg" alt="" class="" id="change2">
                    <button class="bgbtnsubmit hidden" id="ok2"></button>
            </div>
        </div>
    <?}?>

    <?foreach ($usersAuth as $key => $value) {?>
        <div class="label-stat">
            <p>Почта: <span id="span3" class=""><?= $value['email']?></span></p>
            <div class="input-wrap">
          
                    <input type="text" name="new-email" class="hidden"  value="<?= $value['email']?>" id="input3" maxlength="40">
                    <img src="img/pen.svg" alt="" class="" id="change3">
                    <button class="bgbtnsubmit hidden" id="ok3"></button>
              
            </div>
        </div>
    <?}?>
                    <?foreach ($usersAuth as $key => $value) {?>
        <div class="label-stat">
            <p>Пароль: <span id="span4" class=""><?= $value['pass']?></span></p>
            <div class="input-wrap">
          
                    <input type="text" name="new-pass" class="hidden"  value="<?= $value['pass']?>" id="input4" maxlength="25">
                    <img src="img/pen.svg" alt="" class="" id="change4">
                    <button class="bgbtnsubmit hidden" id="ok4"></button>
                </form>
            </div>
        </div>
    <?}?>
                </div>
            </div>
        </div>
        
    </main>
    <?
    include 'footer.php';
    ?>
    <script src="scripts/profile.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>    
</body>
</html>