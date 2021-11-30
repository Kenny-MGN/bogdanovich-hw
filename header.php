<?
    /**
    * @var $page_title - определяется в целевых страницах
    */
    date_default_timezone_set("Asia/Dushanbe"); // Установка часового пояса UTC+5
    $now = localtime(); // Получение массива содержащего компоненты метки времени Unix
    $now_minutes = $now[1]; // Получение значения из массива (минуты)
    $now_hours = $now[2]; // Получение значения из массива (часы)
    $now_days = $now[3]; // Получение значения из массива (день месяца)
    $now_month = $now[4] + 1; // Получение значения из массива (месяц), +1 т.к. 0 (Jan) to 11 (Dec)
    $now_year = $now[5] + 1900; // Получение значения из массива (год), +1 т.к years since 1900;
    $date_to_menu_item = "$now_days.$now_month.$now_year"; // Формирование даты для меню

    $time_in_minutes = ($now_hours * 60) + $now_minutes; // Перевод текущего времени в минуты
    $time_icon_name = ($time_in_minutes < 480 || $time_in_minutes > 1200) ? 'moon' : 'sun'; // 480 соответствует 8:00, 1200 - 20:00

    $current_page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php'); // Запись в переменную имени текущего сценария
    // Данные для динамической генерации элементов меню для страниц сайта:
    $existing_pages = [
        'index' => 'index.php" title="Вернуться на главную страницу">Вернуться на главную страницу',
        'arrays' => 'arrays.php" title="Массивы">Массивы',
        'mend' => 'mend.php" title="Периодическая система химических элементов Д. И. Менделеева">Периодическая таблица'
    ];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title?></title>
    <link rel="stylesheet" href="styles/main.css">
    <? // Подключение индивидуальной таблицы стиля в зависимости от имени страницы
        switch ($current_page_name) {
            case 'arrays':
                echo '<link rel="stylesheet" href="styles/arrays.css">';
                break;
            case 'mend':
                echo '<link rel="stylesheet" href="styles/mend.css">';
                break;
        }
    ?>
    <link rel="icon" type="image/png" href="images/icons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="images/icons/favicon-32x32.png" sizes="32x32">
</head>
<body>
<header>
    <nav>
        <ul>
            <li>
                <a href="https://fact.digital/" title="Факт" target="_blank" class="">
                    <img src="images/fact_logo.jpg" alt="Логотип компании &quot;Факт&quot;" width="278" height="81" id="fact_logo">
                </a>
            </li>
            <? // Динамическая генерация элементов меню для страниц сайта
                foreach ($existing_pages as $page_name => $link) {
                    if ($page_name != $current_page_name) echo '<li class="no_print"><a href="', $link, '</a></li>';
                }
            ?>
            <li>
                <a href="https://kalen-dar.ru/" title="Календарь" target="_blank">
                    <?=$date_to_menu_item?>
                </a>
            </li>
            <li class="no_print">
                <a href="https://time.is/" title="Точное время" target="_blank">
                    <img src="images/icons/<?=$time_icon_name?>.png" alt="Точное время" width="100%">
                </a>
            </li>
        </ul>
    </nav>
</header>