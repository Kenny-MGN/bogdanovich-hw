<?
    session_start();
    $page_title = 'Авторизация';
    require_once ('funs.php');
    require_once ('header.php');
    $login = 'admin';
    // Пароль root4321
    $password = '7f872adbb81324cfa4665b07b78083c4ce2a2aa3';
?>
<main>
    <?
        if(!isset($_POST['submit']) || $login != $_POST['user_name'] || sha1($_POST['user_password']) != $password):
            if  (isset($_POST['user_name']) && $login != $_POST['user_name'] ||
                isset($_POST['user_password']) && sha1($_POST['user_password']) != $password) {
                    $_SESSION['auth_result'] = false;
            }
    ?>
    <section id="auth_form">
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <?
                if (isset($_SESSION['auth_result']) && $_SESSION['auth_result'] == false) {
                        echo '<span>Неверная пара логин-пароль, попробуйте ещё раз</span>';
                    }
            ?>
            <div class="form_row">
                <label for="login">Имя пользователя:</label>
                <input type="text" name="user_name" id="login" placeholder="Имя пользователя">
            </div>

            <div class="form_row">
                <label for="password">Пароль:</label>
                <input type="password" name="user_password" id="password" placeholder="Ваш пароль">
            </div>

            <div class="form_row">
                <button type="submit" name="submit" id="submit_button" title="Вход">Войти</button>
            </div>

            <div class="form_row">
                <a href="reg.php" title="Регистрация">Зарегистрироваться</a>
            </div>
        </form>
        <?
        else:
            $_SESSION['auth_result'] = true;
            $_SESSION['user_name'] = $_POST['user_name'];
            header('Location: index.php');
        endif;
        ?>
    </section>
</main>
<?
    require_once ('footer.php');
?>