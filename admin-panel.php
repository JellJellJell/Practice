<?php
session_start();

$style = "admin.css";
include 'header.php';
?>
    <main>
        <div class="container">
            <div class="panel">
                <ul class="mode-panel">
                    <li id="add-but">Добавить</li>
                    <li id="change-but">Изменить</li>
                    <li id="delete-but">Удалить</li>
                </ul>
                <div class="main-panel" id="add">
                    <h1>Добавление события</h1>
                    <form method="POST" class="form-admin">    
                        <label>Название</label>
                        <input type="text" name="name">           
                        <label>Время события</label>
                        <input type="text" name="pass">
                        <label>Дата события</label>
                        <input type="text" name="pass">
                        <label>Описание события</label>
                        <input type="text" name="pass">
                        <button type="submit" class="button-style">Опубликовать</button>
                    </form>
                </div>
                <div class="hidden" id="change">
                    <h1>Изменение события</h1>
                    <form method="POST" class="form-admin">    
                        <label>Название</label>
                        <input type="text" name="name">           
                        <label>Время события</label>
                        <input type="text" name="pass">
                        <label>Дата события</label>
                        <input type="text" name="pass">
                        <label>Описание события</label>
                        <input type="text" name="pass">
                        <button type="submit" class="button-style">Опубликовать</button>
                    </form>
                </div>
                <div class="hidden" id="delete">
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