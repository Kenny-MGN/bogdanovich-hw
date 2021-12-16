<?
    session_start();
    $page_title = 'Регистрация';
    require_once ('funs.php');
    require_once ('header.php');
    require_once ('cgi/db_auth.php');
?>
<main>
<?
    if (isset($_POST['reg_button'])) {
        $query = "SELECT login FROM users";
        $res = $db->query($query);
        $logins_arr = $res->fetchAll(PDO::FETCH_COLUMN, 0);
        $valid_login = clean_form_input($_POST['user_name']);
    }
    if(
        isset($_POST['reg_button'])
        && !empty($_POST['user_name'])
        && $_POST['user_password1'] == $_POST['user_password2']
        && !in_array($valid_login, $logins_arr)
    )
    {
        $valid_pw = trim($_POST['user_password1']);
        $db->query("INSERT INTO users VALUES (NULL, '$valid_login', SHA1('$valid_pw'))");
        echo '<h2 style="text-align: center">', $valid_login, ', вы успешно зарегистрировались!';
        $_SESSION['user_name'] = $valid_login;
        $_SESSION['auth_result'] = true;
        header('refresh: 4; url=index.php');
    }
    else {
?>
    <section id="auth_form">
        <? if(isset($_POST['reg_button']) && empty($_POST['user_name'])) echo '<span>Вы не ввели имя пользователя!</span><br>'; ?>
        <? if($_POST['user_password1'] != $_POST['user_password2']) echo '<span>Пароли не совпадают!</span><br>'; ?>
        <? if (isset($_POST['reg_button']) && in_array(clean_form_input($_POST['user_name']), $logins_arr))
            echo '<span>Такой пользователь уже существует!</span>';
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
    <? } ?>
</main>
<? require_once ('footer.php'); ?>