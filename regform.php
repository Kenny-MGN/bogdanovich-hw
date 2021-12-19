<section id="auth_form">
    <h2>Регистрация</h2>
    <?
    if ($button_pressed) {
        if ($empty_user_name) echo '<span>Вы не ввели имя пользователя!</span><br>';
        if (!$passwords_match) echo '<span>Пароли не совпадают!</span><br>';
        if ($user_already_exists) echo '<span>Такой пользователь уже существует!</span>';
        if (!$reg_success) echo '<span>Произошла ошибка сервера, повторите попытку</span>';
    }
    ?>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <div class="form_row">
            <label for="login">Имя пользователя:</label>
            <input type="text" name="user_name" id="login" placeholder="Имя пользователя">
        </div>

        <div class="form_row">
            <label for="password1">Пароль:</label>
            <input type="password" name="user_password1" id="password1" placeholder="Ваш пароль">
        </div>

        <div class="form_row">
            <label for="password2">Повторите пароль:</label>
            <input type="password" name="user_password2" id="password2" placeholder="Ваш пароль">
        </div>

        <button type="submit" name="reg_button" id="submit_button" title="Вход">Зарегистрироваться</button>

        <div class="form_row">
            <a href="auth.php" title="Авторизация">Уже зарегистрированы? Войти</a>
        </div>
    </form>
</section>