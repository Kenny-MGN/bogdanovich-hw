<?
    /**
    * @var $page_title - определяется в целевых страницах
    */
    require_once ('funs.php');
    // Данные для динамической генерации элементов меню для страниц сайта:
    $existing_pages = [
        'index' => 'index.php" title="Вернуться на главную страницу">Вернуться на главную страницу',
        'arrays' => 'arrays.php" title="Массивы">Массивы',
        'mend' => 'mend.php" title="Периодическая система химических элементов Д. И. Менделеева">Периодическая таблица',
        'qtest' => 'qtest.php" title="Тестик">Тест',
        'auth' => 'auth.php" title="Авторизация">Авторизация'
    ];
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
<body>
<header>
    <nav>
        <ul>
            <li>
                <a href="https://fact.digital/" title="Факт" target="_blank" class="">
                    <img src="images/fact_logo.jpg" alt="Логотип компании &quot;Факт&quot;" width="222" height="65" id="fact_logo">
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
</header>