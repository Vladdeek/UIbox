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