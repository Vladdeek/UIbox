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
    <?php include("ui/auth-modal.php");?>

    <!-- шапка сайта -->
    <header>
        <?php include("ui/header.php");?>
    </header>

    <!-- основное содержимое сайта -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center d-flex">
                    <?php include("ui/tg-card.php")?>
                    <?php include("ui/tg-card.php")?>
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