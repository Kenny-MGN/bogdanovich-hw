<?
    session_start();
    $page_title = 'Регистрация';
    require_once ('funs.php');
    require_once ('header.php');
    require_once ('classes/DBAuth.php');
?>
<main>
<?
    $button_pressed = isset($_POST['reg_button']);
    if (!$button_pressed) getRegForm();
    else {
        $empty_user_name = empty($_POST['user_name']);
        $passwords_match = $_POST['user_password1'] == $_POST['user_password2'];
        if (!$empty_user_name) {
            $db_auth = new DBAuth();
            $login_to_check = clean_form_input($_POST['user_name']);
            $user_already_exists = $db_auth->checkUserExistence($login_to_check);
            if ($passwords_match && !$user_already_exists) {
                    $valid_login = $login_to_check;
                    $valid_pw = trim($_POST['user_password1']);
                    $reg_success = $db_auth->addUser($valid_login, $valid_pw);
                    if ($reg_success) {
                        echo '<h2 style="text-align: center">', $valid_login, ', вы успешно зарегистрировались!';
                        $_SESSION['user_name'] = $valid_login;
                        $_SESSION['auth_result'] = true;
                        header('refresh: 4; url=index.php');
                    }
                    else getRegForm(true, false, true, false, $reg_success);
            }
            else getRegForm(true, false, $passwords_match, $user_already_exists);
        }
        else getRegForm(true, true, $passwords_match);
    }