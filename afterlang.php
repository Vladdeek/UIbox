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
    </header>

    <!-- основное содержимое сайта -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-md-10 col-sm-12 d-flex justify-content-start">
                    <div class="welcome">
                        <img class="section-image" src="img/css.webp" alt="empty">
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
                                <?php include("ui/mini-content-card.php");?>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <a href="content.php" class="text-decoration-none text-dark">
                                <?php include("ui/mini-content-card.php");?>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <a href="content.php" class="text-decoration-none text-dark">
                                <?php include("ui/mini-content-card.php");?>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-4 col-sm-6 col-6">
                            <a href="content.php" class="text-decoration-none text-dark">
                                <?php include("ui/mini-content-card.php");?>
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
        <?php include("ui/footer.php");?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/auth.ui.js"></script>
</body>

</html>