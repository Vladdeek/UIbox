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