<?
    function get_random_color(): string {
        // Здесь всё очевидно
        $red = mt_rand(0, 255);
        $green = mt_rand(0, 255);
        $blue = mt_rand(0, 255);
        return "rgb($red, $green, $blue)";
    }

    function get_local_date(): string {
        date_default_timezone_set("Asia/Dushanbe"); // Установка часового пояса UTC+5
        $now = localtime(); // Получение массива содержащего компоненты метки времени Unix
        $now_days = $now[3]; // Получение значения из массива (день месяца)
        $now_month = $now[4] + 1; // Получение значения из массива (месяц), +1 т.к. 0 (Jan) to 11 (Dec)
        $now_year = $now[5] + 1900; // Получение значения из массива (год), +1900 т.к. отсчет с 1900;
        return "$now_days.$now_month.$now_year";
    }

    function get_daytime_icon_name(): string {
        date_default_timezone_set("Asia/Dushanbe"); // Установка часового пояса UTC+5
        $now = localtime(); // Получение массива содержащего компоненты метки времени Unix
        $now_minutes = $now[1]; // Получение значения из массива (минуты)
        $now_hours = $now[2]; // Получение значения из массива (часы)

        $time_in_minutes = ($now_hours * 60) + $now_minutes; // Перевод текущего времени в минуты
        // 480 соответствует 8:00, 1200 - 20:00
        return ($time_in_minutes < 480 || $time_in_minutes > 1200) ? 'moon' : 'sun';
    }

    function generate_menu_items($pages) {
        // Запись в переменную имени текущего сценария:
        $current_page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');
        foreach ($pages as $page_name => $link) {
            if ($page_name != $current_page_name) echo '<li class="no_print"><a href="', $link, '</a></li>';
        }
        if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
            echo '<li class="no_print"><a href="' . $_SERVER['PHP_SELF'] .  '?action=logout" title="Выйти">Выйти</a></li>';
        else
            echo '<li class="no_print"><a href="auth.php" title="Авторизация">Авторизация</a></li>';
    }

    function generate_subpage_css_link(): string {
        $current_page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');
        if ($current_page_name != 'index')
            return '<link rel="stylesheet" href="styles/' . $current_page_name . '.css">';
        return '';
    }

    function str_word_count_ru($data) {
        // Модификация (слой) над стандартной функцией для поддержки кириллицы и массивов
        $ru_chars = "АаБбВвГгҐґДдЕеЁёЄєЖжЗзИиІіЇїЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЬьЪъЫыЮюЬьЭэЯя";
        // Поддержка обработки массивов
        if (is_array($data)) {
            $count = 0;
            foreach ($data as $str) $count += str_word_count($str, 0, $ru_chars);
            return $count;
        }
        return str_word_count($data, 0, $ru_chars);
    }

    function str_vowels_count_ru($data) {
        // Функция для подсчета гласных
        // Модификатор /i - игнорирование регистра, /u - режим кодировки UTF-8
        $reg = '/[аеёиоуыэюя]/iu';
        // Поддержка обработки массивов
        if (is_array($data)) {
            $count = 0;
            foreach ($data as $str) $count += preg_match_all($reg, $str);
            return $count;
        }
        return preg_match_all($reg, $data);
    }

    function string_to_double_color($str): string {
        $arr = explode(' ', $str);
        $color1 = '#666';
        $color2 = '#e32030';
        foreach ($arr as $index => $word) {
            if ($index % 2 == 0) $arr[$index] = '<span style="color: ' . $color1 . '">' . "$word</span>";
            else $arr[$index] = '<span style="color: ' . $color2 . '">' . "$word</span>";
        }
        return implode(' ', $arr);
    }

    function days_diff_with_now($date) {
        // Создаем экземпляр DateTime с текущей датой
        $now = new DateTime();
        // Создаем экземпляр DateTime с переданной в параметре датой в формате ДД.ММ.ГГГГ
        $date_to_compare = DateTime::createFromFormat('d.m.Y', $date);
        // Вызываем метод diff и получаем экземпляр DateInterval
        $difference = $now->diff($date_to_compare);
        // Возвращаем разницу в днях при помощи свойства days объекта DateInterval
        return $difference->days;
    }

    function phrase_to_color($str, $color, $n): string {
        // $color - цвет совместимый со свойством color
        // $n - количество слов для покраски :)
        $arr = preg_split('/\s+/', $str);
        $phrase = '';
        for ($i = 0; $i < $n; $i++) {
            if (count($arr) > 0) {
                $phrase .= array_shift($arr) . ' ';
            }
            else break;
        }
        $colored_phrase = '<span style="color: ' . $color . '">' . "$phrase</span>";
        array_unshift($arr, $colored_phrase);
        return implode(' ', $arr);
    }

    function get_external_url_block() {
        if (isset($_COOKIE['last_visit_page_' . $_SESSION['user_name']])) {
            switch ($_COOKIE['last_visit_page_' . $_SESSION['user_name']]) {
                case 'fact':
                    $company_str = 'компании &quot;Факт&quot;';
                    break;
                case '1c':
                    $company_str = 'продукта 1C-Битрикс';
            }
            echo '<p style="text-align: center; font-size: 130%">В прошлый раз вы перешли на страницу ', $company_str,
            '. Какую страницу хотите посетить на этот раз?</p>';
        }
        echo '<div style="display: flex; justify-content: center">';
        echo '<figure>';
        echo '<a href="cgi/redirection.php?site=fact" title="ФАКТ"><img src="images/fact_logo.svg" alt="Факт" height="56"></a>';
        echo '</figure>';
        echo '<figure>';
        echo '<a href="cgi/redirection.php?site=1c" title="Битрикс"><img src="images/bitrix_logo.png" alt="Битрикс"></a>';
        echo '</figure>';
        echo '</div>';
    }
    function clean_form_input($value): string {
        $value = trim($value);              // убирает пробелы в начале и конце строки
        $value = stripslashes($value);      // удаление экранированных символов
        $value = strip_tags($value);        // очищает от HTML и PHP тегов
        return htmlspecialchars($value);    // кодирует спец.символы
    }
    function getRegForm
    (
        $button_pressed = false,
        $empty_user_name = false,
        $passwords_match = true,
        $user_already_exists = false,
        $reg_success = true
    )
    {
        require_once ('regform.php');
    }