<?php
session_start(); // тут начинается сессиия для сохранения пользователя
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIbox</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleauthmodal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        /* Стиль для параграфов */
        p {
            color: var(--text-color); /* Цвет текста, можно изменить на свой */
            margin-bottom: 15px; /* Отступ снизу для разделения с другими элементами */
        }
    </style>
</head>

<body>
    <!-- модальное окно для входа и регистрации -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <div class="blur-screen" onclick="hidemodal()"></div>
                <div class="modal-window">
                    <div class="d-flex justify-content-center">
                        <div class="double_button">
                            <div class="float"></div>
                            <label class="button1">
                                <input type="radio" name="db-b" checked="checked" onclick="Button1()" /> Логин
                            </label>
                            <label class="button2">
                                <input type="radio" name="db-b" onclick="Button2()" /> Регистрация
                            </label>
                        </div>
                    </div>
                    <div class="auth-container">
                        <div class="auth text-center">
                            <!-- форма регистрации -->
                            <form action="request/register.php" class="registration" method="POST">
                                <div class="register">
                                    <p>Регистрация</p>
                                    <input class="regemail" type="email" placeholder=" e-mail" name="email" id="email" required />
                                    <input class="password1" type="password" placeholder=" Пароль" name="password" id="password1" required />
                                    <input class="password2" type="password" placeholder=" Подтверждение пароля" name="password2" id="password2" required />
                                    <div class="error-message" id="reg-error-message"></div>
                                    <button class="subbtn" type="button" onclick="next()">Далее</button>
                                </div>

                                <div class="createusername">
                                    <p>Придумайте имя</p>
                                    <input class="inputusername" type="text" placeholder=" McLovin" name="username" required />
                                    <div class="error-message" id="username-error-message"></div>
                                    <input class="subbtn reg-sub-btn" type="submit" value="Подтвердить" />
                                </div>
                            </form>

                            <!-- форма авторизации -->
                            <form action="request/login.php" class="login" method="POST">
                                <p>Авторизация</p>
                                <input class="logemail" type="text" placeholder=" e-mail или username" name="email" required />
                                <input class="password" type="password" placeholder=" Пароль" name="password" required />
                                <input class="subbtn log-sub-btn" type="submit" value="Войти" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- шапка сайта -->
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex justify-content-center">
                    <div class="title-bar d-flex align-items-center justify-content-between">
                        <a href="index.php" class="name">UIbox</a>
                        <?php if (isset($_SESSION['user'])): ?>
                            <a href="personal.php" class="auth-username ms-auto"><?php echo htmlspecialchars($_SESSION['user']); ?></a>
                            <a href="request/logout.php" class="auth-btn ms-2">Выйти</a>
                        <?php else: ?>
                            <button class="auth-btn ms-auto" onclick="modalanim()">Вход | Регистрация</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- основное содержимое сайта -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-sm-12">
                    <h1>Политика конфиденциальности</h1>
                    <h2>Дата вступления в силу: [Введите дату]</h2>
                    <h3>1. Введение</h3>
                    <h2>Мы ценим вашу конфиденциальность и обязуемся защищать ваши личные данные. Эта Политика конфиденциальности объясняет, как мы собираем, используем, передаем и защищаем вашу информацию, когда вы используете наш веб-сайт [название сайта] и наши услуги.</h2>

                    <h3>2. Информация, которую мы собираем</h3>
                    <h2>Мы можем собирать и обрабатывать следующие данные о вас:</h2>
                    <ul>
                        <li>Личная информация, которую вы предоставляете, например, имя, адрес электронной почты, номер телефона и другие контактные данные.</li>
                        <li>Информация об использовании, такая как ваши предпочтения и поведение при использовании нашего веб-сайта.</li>
                        <li>Технические данные, включая IP-адрес, тип браузера и устройства.</li>
                    </ul>

                    <h3>3. Как мы используем вашу информацию</h3>
                    <h2>Мы можем использовать ваши данные для следующих целей:</h2>
                    <ul>
                        <li>Обеспечение и управление нашими услугами.</li>
                        <li>Улучшение нашего веб-сайта и услуг.</li>
                        <li>Общение с вами, включая отправку информационных и маркетинговых материалов.</li>
                        <li>Соблюдение юридических обязательств.</li>
                    </ul>

                    <h3>4. Передача ваших данных</h3>
                    <h2>Мы можем передавать ваши личные данные третьим лицам только в следующих случаях:</h2>
                    <ul>
                        <li>Для выполнения наших обязательств перед вами.</li>
                        <li>В случае юридических требований или в ответ на запросы государственных органов.</li>
                    </ul>

                    <h3>5. Безопасность ваших данных</h3>
                    <h2>Мы принимаем все необходимые меры для защиты ваших данных от несанкционированного доступа, изменения, раскрытия или уничтожения.</h2>

                    <h3>6. Ваши права</h3>
                    <h2>Вы имеете право на доступ к вашим данным, исправление неточных данных, удаление ваших данных и ограничение их обработки. Вы также имеете право на переносимость данных.</h2>

                    <h3>7. Изменения в Политике конфиденциальности</h3>
                    <h2>Мы можем периодически обновлять эту Политику конфиденциальности. Мы уведомим вас о любых значительных изменениях через наш веб-сайт.</h2>

                    <h3>8. Контакты</h3>
                    <h2>Если у вас есть вопросы или комментарии по поводу этой Политики конфиденциальности, пожалуйста, свяжитесь с нами по адресу [ваш адрес электронной почты].</>

                    <div class="separator"></div> <!-- Разделительная полоска -->

                    <h1>Политика использования файлов cookie</h1>
                    <h2>Дата вступления в силу: [Введите дату]</h2>

                    <h3>1. Что такое файлы cookie?</h3>
                    <h2>Файлы cookie — это небольшие текстовые файлы, которые сохраняются на вашем устройстве при посещении веб-сайтов. Они помогают улучшить ваш опыт работы с сайтом, позволяя ему запоминать вашу информацию.</h2>

                    <h3>2. Какие файлы cookie мы используем?</h3>
                    <h2>Мы используем следующие типы файлов cookie:</h2>
                    <ul>
                        <li>Функциональные файлы cookie: Эти файлы необходимы для работы сайта и не могут быть отключены.</li>
                        <li>Аналитические файлы cookie: Мы используем их для сбора информации о том, как пользователи взаимодействуют с нашим сайтом.</li>
                        <li>Маркетинговые файлы cookie: Эти файлы используются для отображения рекламы, которая может быть вам интересна.</li>
                    </ul>

                    <h3>3. Как вы можете управлять файлами cookie?</h3>
                    <h2>Вы можете управлять файлами cookie через настройки вашего браузера. Большинство браузеров позволяют блокировать файлы cookie или уведомлять вас, когда они отправляются. Пожалуйста, обратите внимание, что блокировка файлов cookie может повлиять на функциональность нашего веб-сайта.</h2>

                    <h3>4. Изменения в Политике использования файлов cookie</h3>
                    <h2>Мы можем обновлять эту Политику использования файлов cookie. Изменения вступают в силу с момента их публикации на нашем веб-сайте.</h2>

                    <h3>5. Контакты</h3>
                    <h2>Если у вас есть вопросы по поводу нашей Политики использования файлов cookie, пожалуйста, свяжитесь с нами по адресу [ваш адрес электронной почты].</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- футер -->
    <footer>
        <div class="footer d-flex justify-content-center align-items-center">
            <p class="footer-text mb-0">2024 - 2024 © UIbox</p>
            <p class="footer-text mx-2 mb-0">∘</p>
            <a href="Policy.php" class="footer-text mb-0">Privacy Policy and Cookies Policy</a>
            <p class="footer-text mx-2 mb-0">∘</p>
            <a href="#" class="footer-text mb-0">Telegram</a>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/auth.ui.js"></script>
</body>

</html>