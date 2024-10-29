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
                <div class="col-xl-7 col-md-10 col-sm-12 d-flex justify-content-start">
                    <div class="welcome">
                        <img class="section-image" src="css.webp" alt="empty">
                        <h1 class="text-start">название раздела</h1>
                        <h2 class="text-start">
                            В этом разделе представлена информация, касающаяся ключевых аспектов темы, которая будет интересна и полезна для наших пользователей. Мы постарались охватить все важные моменты и представить их в доступной форме, чтобы каждый мог легко разобраться и найти нужные ответы.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-md-10 col-sm-12">
                    <div class="row">

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">

                            <a href="content.php" class="text-decoration-none text-dark">
                                <div class="mini-content d-flex flex-column justify-content-center">
                                    <div class="mini-photo-container mx-auto">
                                        <img class="mini-photo" src="1.png" alt="EMPTY" />
                                    </div>
                                    <h1 class="mini-content-name text-start">Название продукта1</h1>
                                    <h2 class="mini-description">Краткое описание</h2>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <a href="content.php" class="text-decoration-none text-dark">
                                <div class="mini-content d-flex flex-column justify-content-center">
                                    <div class="mini-photo-container mx-auto">
                                        <img class="mini-photo" src="1.png" alt="EMPTY" />
                                    </div>
                                    <h1 class="mini-content-name text-start">Название продукта1</h1>
                                    <h2 class="mini-description">Краткое описание</h2>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <a href="content.php" class="text-decoration-none text-dark">
                                <div class="mini-content d-flex flex-column justify-content-center">
                                    <div class="mini-photo-container mx-auto">
                                        <img class="mini-photo" src="1.png" alt="EMPTY" />
                                    </div>
                                    <h1 class="mini-content-name text-start">Название продукта1</h1>
                                    <h2 class="mini-description">Краткое описание</h2>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <a href="content.php" class="text-decoration-none text-dark">
                                <div class="mini-content d-flex flex-column justify-content-center">
                                    <div class="mini-photo-container mx-auto">
                                        <img class="mini-photo" src="1.png" alt="EMPTY" />
                                    </div>
                                    <h1 class="mini-content-name text-start">Название продукта1</h1>
                                    <h2 class="mini-description">Краткое описание</h2>
                                </div>
                            </a>

                            <div class="mini-content d-flex flex-column justify-content-center">
                                <div class="mini-photo-container mx-auto">
                                    <img class="mini-photo" src="1.png" alt="EMPTY" />
                                </div>
                                <h1 class="mini-content-name text-start">Название продукта1</h1>
                                <h2 class="mini-description">Краткое описание</h2>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <div class="mini-content d-flex flex-column justify-content-center">
                                <div class="mini-photo-container mx-auto">
                                    <img class="mini-photo" src="1.png" alt="EMPTY" />
                                </div>
                                <h1 class="mini-content-name text-start">Название продукта2</h1>
                                <h2 class="mini-description">Краткое описание</h2>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <div class="mini-content d-flex flex-column justify-content-center">
                                <div class="mini-photo-container mx-auto">
                                    <img class="mini-photo" src="1.png" alt="EMPTY" />
                                </div>
                                <h1 class="mini-content-name text-start">Название продукта3</h1>
                                <h2 class="mini-description">Краткое описание</h2>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <div class="mini-content d-flex flex-column justify-content-center">
                                <div class="mini-photo-container mx-auto">
                                    <img class="mini-photo" src="1.png" alt="EMPTY" />
                                </div>
                                <h1 class="mini-content-name text-start">Название продукта4</h1>
                                <h2 class="mini-description">Краткое описание</h2>
                            </div>

                        </div>

                    </div>
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

            <a href="#" class="footer-text mb-0">Privacy Policy and Cookies Policy</a>

            <p class="footer-text mx-2 mb-0">∘</p>
            <a href="#" class="footer-text mb-0">Telegram</a>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/auth.ui.js"></script>
</body>

</html>