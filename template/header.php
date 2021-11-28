<?
    /**
    * @var $page_title - определяется в целевых страницах
    */
    date_default_timezone_set("Asia/Dushanbe"); // Установка часового пояса UTC+5
    $now = localtime(); // Получение массива содержащего компоненты метки времени Unix
    $now_hours = $now[2]; // Получение значения из массива (часы)
    $now_minutes = $now[1]; // Получение значения из массива (минуты)
    $time_in_minutes = ($now_hours * 60) + $now_minutes; // Перевод текущего времени в минуты
    $time_icon_name = ($time_in_minutes < 480 || $time_in_minutes > 1200) ? 'moon' : 'sun'; // 480 соответствует 8:00, 1200 - 20:00

    $host = 'http://' . $_SERVER['HTTP_HOST'];
    $current_page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php'); // Запись в переменную имени текущего сценария
    // Данные для динамической генерации элементов меню для страниц сайта:
    $existing_pages = [
        'index' => '/index.php" title="Вернуться на главную страницу">Вернуться на главную страницу',
        'arrays' => '/subpages/arrays.php" title="Массивы">Массивы',
        'mend' => '/subpages/mend.php" title="Периодическая система химических элементов Д. И. Менделеева">Периодическая таблица'
    ];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title?></title>
    <link rel="stylesheet" href="<?=$host?>/styles/main.css">
    <? // Подключение индивидуальной таблицы стиля в зависимости от имени страницы
        switch ($current_page_name) {
            case 'arrays':
                echo '<link rel="stylesheet" href="', $host, '/styles/arrays.css">';
                break;
            case 'mend':
                echo '<link rel="stylesheet" href="', $host, '/styles/mend.css">';
                break;
        }
    ?>
    <link rel="icon" type="image/png" href="<?=$host?>/images/icons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?=$host?>/images/icons/favicon-32x32.png" sizes="32x32">
</head>
<body>
<header>
    <nav>
        <ul>
            <li>
                <a href="https://fact.digital/" title="Факт" target="_blank" class="">
                    <img src="<?=$host?>/images/fact_logo.jpg" alt="Логотип компании &quot;Факт&quot;" width="278" height="81" id="fact_logo">
                </a>
            </li>
            <? // Динамическая генерация элементов меню для страниц сайта
                foreach ($existing_pages as $page_name => $link) {
                    if ($page_name != $current_page_name) echo '<li class="no_print"><a href="', $host, $link, '</a></li>';
                }
            ?>
            <li class="no_print">
                <a href="https://time.is/" title="Точное время" target="_blank">
                    <img src="<?=$host?>/images/icons/<?=$time_icon_name?>.png" alt="Точное время" width="100%">
                </a>
            </li>
        </ul>
    </nav>
</header>