<?

$style = "styletwo.css";
include 'header.php';
?>
    <main class="main">
        <div class="hidden" id="modal-accept">
            <div class="modal-accept-event">
                <img src="img/close-but.svg" id="close-but">
                <h3>Принять участие</h3>
                    <form action="" class="form-style">
                        <div class="input-style">
                            <lebel>Ваше имя*</lebel>
                            <input type="text" maxlength="15" required placeholder="Иван" class="input-check">
                        </div>
                        <div class="input-style">
                            <lebel>Номер телефона</lebel>
                            <input type="tel" required pattern="\+\d-\d{3}-\d{3}-\d{2}-\d{2}" placeholder="+0-000-000-00-00" maxlength="11">
                        </div>
                        <div class="input-style">
                            <lebel>Ваш автомобиль (Марка, Модель)*</lebel>
                            <input name="" id="" maxlength="20" placeholder="пример: BMW E30" class="input-check1">
                        </div>           
                        <p class="hidden" id="error-text">Заполните необходимые поля!</p>
                        <p class="name-text">Ваш номер участника: 1</p>
                        <button type="reset" class="button-style" id="but-add-rider">Отправить</button>
                    </form>
            </div> 
        </div>
        <div class="container">
            <div class="main__content" id="to-header" data-aos="fade-up">
                <a href="index.php#events">< Назад</a>
                <div class="main__content_info-event">
                    <img src="img/event1.svg" alt="" class="main__info-event_img">
                    <div class="main__info-event_text-info">
                        <div class="main__text-info_text">
                            <h2>НОЧНОЙ ЗАЕЗД В КРАСНОДАРЕ</h2>
                            <div class="main__text-info_time">
                                <img src="img/clock.svg" alt="">
                                <p>02:30 по МСК</p>
                            </div>
                            <div class="main__text-info_time">
                                <img src="img/calendar.svg" alt="">
                                <p>23.07.2024</p>
                            </div>
                        </div>
                        <div class="main__text-info_buttons">
                            <button id="but-accept-event">Принять участие</button>
                            <button class="hidden">Изменить</button>
                        </div>
                        
                    </div>
                </div>
                <div class="main__info-event_main-text">
                    <p>Привет, любители скорости! Спешим сообщить, что 23.07.2024 в 02:30 по МСК состоится нелегальный заезд. Старт у главного входа парка Галицкого. Любой может принять участие в гонке, но или быть наблюдателем. Минимальная ставка для участия - 5 000 рублей.</p>
                    <p>10.07.24</p>
                </div>
            </div>
        </div>
        <div class="main__riders" data-aos="fade-up" id="all-riders">
            <h2>Участники</h2>
        </div>
            <div class="main__more-events" data-aos="fade-up">
                <h2>ДРУГИЕ СОБЫТИЯ</h2>
                <div class="main__more-events_events">
                    <div class="main__events_event" data-aos="fade-up">
                        <div class="main__event_event-container">
                            <img src="img/event2.svg" alt="">
                            <div class="main__event-container_right-text">
                                <div class="main__right-text_about-event">
                                    <h3>НОЧНОЙ ЗАЕЗД В МОСКВЕ</h3>
                                    <p>Привет, любители скорости! Спешим сообщить, что 30.06.2024 в 02:30 по МСК состоится нелегальный заезд. Старт у Moscow sity. Любой может принять участие в гонке, но или быть наблюдателем. Минимальная ставка для участия - 10 000 рублей.</p>
                                </div>                      
                                <a href="event2.php"><button class="button-style">Подробнее</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="main__events_event" data-aos="fade-up">
                        <div class="main__event_event-container">
                            <img src="img/event3.svg" alt="">
                            <div class="main__event-container_right-text">
                                <div class="main__right-text_about-event">
                                    <h3>ВЫСТАВКА АВТОМОБИЛЕЙ В МОСКВЕ</h3>
                                    <p>Привет, любители машин! Спешим сообщить, что 20.05.2024 в 12:00 по МСК состоится выставка JDM автомобилей. Выставка будет проходить на порковке МЕГИ МОСКВА. Вход бесплатный.</p>
                                </div>                      
                                <a href="event3.php"><button class="button-style">Подробнее</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="main__events_event" data-aos="fade-up">
                        <div class="main__event_event-container">
                            <img src="img/event1.svg" alt="">
                            <div class="main__event-container_right-text">
                                <div class="main__right-text_about-event">
                                    <h3>НОЧНОЙ ЗАЕЗД В КРАСНОДАРЕ</h3>
                                    <p>Привет, любители скорости! Спешим сообщить, что 23.07.2024 в 02:30 по МСК состоится нелегальный заезд. Старт у главного входа парка Галицкого. Любой может принять участие в гонке, но или быть наблюдателем. Минимальная ставка для участия - 5 000 рублей.</p>
                                </div>                      
                                <a href="event1.php"><button class="button-style">Подробнее</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="main__events_event" data-aos="fade-up">
                        <div class="main__event_event-container">
                            <img src="img/event1.svg" alt="">
                            <div class="main__event-container_right-text">
                                <div class="main__right-text_about-event">
                                    <h3>НОЧНОЙ ЗАЕЗД В КРАСНОДАРЕ</h3>
                                    <p>Привет, любители скорости! Спешим сообщить, что 23.07.2024 в 02:30 по МСК состоится нелегальный заезд. Старт у главного входа парка Галицкого. Любой может принять участие в гонке, но или быть наблюдателем. Минимальная ставка для участия - 5 000 рублей.</p>
                                </div>                      
                                <a href="event1.php"><button class="button-style">Подробнее</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?
    include 'footer.php';
    ?>
    <script src="scripts/events.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>