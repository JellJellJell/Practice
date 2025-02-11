<?php
$style = "admin.css";
include 'header.php';
?>
    <main>
        <div class="container">
            <div class="panel">
                <p class="login-text">Логин: <?= $_SESSION['user']['login']?></p>
                <ul class="mode-panel">
                    <li id="add-but">Добавить</li>
                    <li id="change-but">Изменить</li>
                    <li id="delete-but">Удалить</li>
                </ul>
                <div class="main-panel" id="add" data-aos="fade-up">
                    <h1>Добавление события</h1>
                    <form method="POST" class="form-admin" enctype="multipart/form-data">    
                        <label>Название</label>
                        <input type="text" name="name">
                        <label>Изображение</label>
                        <label class="add-photo">Выберите изображение<input type="file" accept="image/jpeg, image/png, image/jpg, image/gif" id="add-photo"></label>
                        <label>Время события</label>
                        <input type="text" name="pass">
                        <label>Дата события</label>
                        <input type="text" name="pass">
                        <label>Описание события</label>
                        <input type="text" name="pass">
                        <button type="submit" class="button-style">Опубликовать</button>
                    </form>
                </div>
                <div class="hidden" id="change" data-aos="fade-up">
                    <h1>Изменение события</h1>
                    <form method="POST" class="form-admin" enctype="multipart/form-data">    
                        <label>Название</label>
                        <input type="text" name="name">   
                        <label>Изображение</label>
                        <label class="add-photo">Выберите изображение<input type="file" accept="image/jpeg, image/png, image/jpg, image/gif" id="add-photo"></label>    
                        <label>Время события</label>
                        <input type="text" name="pass">
                        <label>Дата события</label>
                        <input type="text" name="pass">
                        <label>Описание события</label>
                        <input type="text" name="pass">
                        <button type="submit" class="button-style">Изменить</button>
                    </form>
                </div>
                <div class="hidden" id="delete" data-aos="fade-up">
                    <h1>Удаление события</h1>
                    <form method="POST" class="form-admin">    
                        <label>id</label>
                        <input type="text" name="name">
                        <button type="submit" class="button-style">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?
        include 'footer.php';
    ?>
    <script src="scripts/admin.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>