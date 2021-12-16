<?
    session_start();
    $page_title = 'Авторизация';
    require_once ('funs.php');
    require_once ('header.php');
    require_once ('cgi/db_auth.php');
?>
<main>
    <?
        if (isset($_POST['submit']) && !empty($_POST['user_name']) && !empty($_POST['user_password'])) {
            $login_to_check = clean_form_input($_POST['user_name']);
            $password_to_check = sha1(trim($_POST['user_password']));
            $query = "SELECT login, password FROM users WHERE login = '$login_to_check'";
            $res = $db->query($query);
            $row = $res->fetch(PDO::FETCH_ASSOC);
            if ($row['login'] == $login_to_check && $row['password'] == $password_to_check) {
                $_SESSION['auth_result'] = true;
                $_SESSION['user_name'] = $login_to_check;
                header('Location: index.php');
            }
            else {
                $_SESSION['auth_result'] = false;
            }
        }
    ?>
    <section id="auth_form">
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <?
                if (isset($_POST['submit']) && isset($_SESSION['auth_result']) && $_SESSION['auth_result'] == false) {
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
    </section>
</main>
<?
    require_once ('footer.php');
?>