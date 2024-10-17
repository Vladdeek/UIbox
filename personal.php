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
    <link rel="stylesheet" href="css/stylemodal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- шапка сайта -->
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex justify-content-center">
                    <div class="title-bar d-flex align-items-center justify-content-between">
                        <a href="index.php" class="name">UIbox</a>
                        <?php if (isset($_SESSION['user'])): ?>
                            <span class="auth-username ms-auto"><?php echo htmlspecialchars($_SESSION['user']); ?></span>
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
            <div class="row">
                <div class="col-10 d-flex justify-content-start align-items-center">
                    <img class="profile-photo" src="крутая_ава.webp" alt="empty">
                    <div class="profile-info">
                        <p class="username">Username</p>
                        <h2 class="reg-date">September 11, 2024</h2>
                    </div>
                </div>
            </div>
        </div>
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-sm-12 d-flex justify-content-center">
                    <div class="section-bar">
                        <a class="bar-button purchases-btn" onclick="showPurchases()">Purchases</a>
                        <a class="bar-button self-project-btn" onclick="showSelfProjects()">My post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="purchases">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="mini-content col-xl-2 col-md-4 col-sm-6 flex-column justify-content-center d-flex">
                            <div class="mini-photo-container mx-auto">
                                <img class="mini-photo" src="1.png" alt="EMPTY" />
                            </div>
                            <h1 class="mini-content-name text-start">Название продукта1</h1>
                            <h2 class="mini-date-post">September 27, 2005</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="mini-content col-xl-2 col-md-4 col-sm-6 flex-column justify-content-center d-flex">
                            <div class="mini-photo-container mx-auto">
                                <img class="mini-photo" src="1.png" alt="EMPTY" />
                            </div>
                            <h1 class="mini-content-name text-start">Название продукта1</h1>
                            <h2 class="mini-date-post">September 27, 2005</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="mini-content col-xl-2 col-md-4 col-sm-6 flex-column justify-content-center d-flex">
                            <div class="mini-photo-container mx-auto">
                                <img class="mini-photo" src="1.png" alt="EMPTY" />
                            </div>
                            <h1 class="mini-content-name text-start">Название продукта1</h1>
                            <h2 class="mini-date-post">September 27, 2005</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="self-projects">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="mini-content col-xl-2 col-md-4 col-sm-6 flex-column justify-content-center d-flex">
                            <div class="mini-photo-container mx-auto">
                                <img class="mini-photo" src="1.png" alt="EMPTY" />
                            </div>
                            <h1 class="mini-content-name text-start">Название продукта1</h1>
                            <h2 class="mini-date-post">September 27, 2005</h2>
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
            <a href="#" class="footer-text mb-0">Privacy Policy and Cookies Policy</a>
            <p class="footer-text mx-2 mb-0">∘</p>
            <a href="#" class="footer-text mb-0">Telegram</a>
        </div>
    </footer>
    <script src="js/profile.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>