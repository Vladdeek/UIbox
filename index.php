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
    <?php include("ui/auth-modal.php");?>

    <!-- шапка сайта -->
    <header>
        <?php include("ui/header.php");?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-sm-12 d-flex justify-content-center">
                    <div class="lang-bar">
                        <a class="bar-button" href="afterlang.php">CSS</a>
                        <a class="bar-button" href="afterlang.php">HTML</a>
                        <a class="bar-button" href="afterlang.php">JavaScript</a>
                        <a class="bar-button" href="afterlang.php">Other</a>
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
                        <h1 class="text-start">Welcome to UIbox!</h1>
                        <h2 class="text-start">
                            Откройте для себя нашу тщательно отобранную коллекцию из фрагментов кода в HTML, CSS, JavaScript и других языках. Эти ресурсы предназначены для того, чтобы помочь вам в разработке интерфейсов, независимо от вашего уровня опыта.
                        </h2>
                        <h2 class="text-start">Начинайте создавать и вдохновляйтесь.</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-md-10 col-sm-12 d-flex justify-content-center flex-column">
                    <?php include("ui/content-card.php")?>

                    <?php include("ui/content-card.php")?>

                    <?php include("ui/content-card.php")?>
                </div>
            </div>
        </div>
    </section>

    <!-- футер -->
    <footer>
        <?php include("ui/footer.php");?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/auth.ui.js"></script>
</body>

</html>