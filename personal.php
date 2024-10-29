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
    <link rel="stylesheet" href="css/styleimportmodal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            <div class="row">
                <div class="col-10 d-flex justify-content-start align-items-center">
                    <div class="avatar position-relative">
                        <div class="edit position-absolute d-flex justify-content-center align-items-center" onclick="editProfile()">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <img class="profile-photo" src="img/default-avatar.jpg" alt="empty">
                    </div>
                    <div class="profile-info">
                        <p class="username"><?php echo htmlspecialchars($_SESSION['user']); ?></p>
                        <h2 class="reg-date"><?php echo htmlspecialchars($_SESSION['user_created_at']); ?></h2>
                    </div>
                </div>
            </div>
        </div>
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-sm-12 d-flex justify-content-center">
                    <div class="section-bar">
                        <a class="bar-button purchases-btn" onclick="showPurchases()">Покупки</a>
                        <a class="bar-button self-project-btn" onclick="showSelfProjects()">Мои документы</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="purchases">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <?php include("ui/mini-content-card.php");?>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <?php include("ui/mini-content-card.php");?>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <?php include("ui/mini-content-card.php");?>
                    </div>
                </div>
            </div>
        </div>

        <div class="self-projects">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <?php include("ui/mini-content-card.php");?>
                    </div>
                    

                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <?php include("ui/mini-content-card.php");?>
                    </div>
                    
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="add-btn col-xl-2 col-md-4 col-sm-6 flex-column justify-content-center d-flex" onclick="addcontent()">
                            <img class="add-btn-img mx-auto" src="img/addbtn.png" alt="empty">
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
    <script src="js/profile.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/importmodal.js"></script>
</body>

</html>