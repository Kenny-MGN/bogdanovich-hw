<?
    session_start();
    require_once ('funs.php');
    require_once ('header.php');
?>
<main>
<?
    if(isset($_POST['reg_button']) && !empty($_POST['user_name']) && $_POST['user_password1'] == $_POST['user_password2']):
        echo '<h2 style="text-align: center">', $_POST['user_name'], ', вы успешно зарегистрировались!';
    else:
?>
    <section id="auth_form">
        <? if(isset($_POST['reg_button']) && empty($_POST['user_name'])) echo '<span>Вы не ввели имя пользователя!</span><br>'; ?>
        <? if($_POST['user_password1'] != $_POST['user_password2']) echo '<span>Пароли не совпадают!</span>'; ?>
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
    <? endif; ?>
</main>
<? require_once ('footer.php'); ?>