<?
    /**
    * @var $page_title - определяется в целевых страницах
    */
    session_start();
    if ($_GET['action'] == 'logout') {
        $_SESSION['user_name'] = '';
        // $_SESSION = array(); - очистка массива $_SESSION
        // session_destroy(); - удаляет данные сессии
    }
    require_once ('funs.php');
    // Данные для динамической генерации элементов меню для страниц сайта:
    $existing_pages = [
        'index' => 'index.php" title="Вернуться на главную страницу">Вернуться на главную страницу',
        'arrays' => 'arrays.php" title="Массивы">Массивы',
        'mend' => 'mend.php" title="Периодическая система химических элементов Д. И. Менделеева">Периодическая таблица',
        'qtest' => 'qtest.php" title="Тестик">Тест'
    ];
    if (isset($_POST['color_picker_button'])) {
        setcookie('background_color', $_POST['picked_background_color'], time() + 3600 * 24 * 30);
        header('Location: ' . $_SERVER['PHP_SELF']);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title?></title>
    <link rel="stylesheet" href="styles/main.css">
    <!-- Подключение индивидуальной таблицы стиля, если страница не является главной: -->
    <?=generate_subpage_css_link()?>
    <link rel="icon" type="image/png" href="images/icons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="images/icons/favicon-32x32.png" sizes="32x32">
</head>
<body style="background-color:<?=$_COOKIE['background_color']?>">
<header>
    <nav>
        <ul>
            <li>
                <a href="https://fact.digital/" title="Факт" target="_blank" class="">
                    <img src="images/fact_logo.svg" alt="Логотип компании &quot;Факт&quot;" width="222" height="65" id="fact_logo">
                </a>
            </li>
            <? // Динамическая генерация элементов меню для страниц сайта (исключение ссылки на текущую страницу)
                generate_menu_items($existing_pages);
            ?>
            <li>
                <a href="https://kalen-dar.ru/" title="Календарь" target="_blank">
                    <?=get_local_date()?>
                </a>
            </li>
            <li class="no_print">
                <a href="https://time.is/" title="Точное время" target="_blank">
                    <img src="images/icons/<?=get_daytime_icon_name()?>.png" alt="Точное время" width="100%">
                </a>
            </li>
        </ul>
    </nav>
    <form id="background_color_picker_form" method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <label for="background_color_picker">Цвет фона:</label>
        <input type="color" list="preset_colors" id="background_color_picker"
               value="<?=$_COOKIE['background_color']?>" name="picked_background_color">
        <datalist id="preset_colors">
            <option value="#ffffff">Белый</option>
            <option value="#f2f3f4">Матовый белый</option>
            <option value="#fffacd">Лимонно-кремовый</option>
            <option value="#e0ffff">Светлый циан</option>
        </datalist>
        <button type="submit" name="color_picker_button" id="color_picker_button">Выбрать</button>
    </form>
</header>