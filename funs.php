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
    }

    function generate_subpage_css_link(): string {
        $current_page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');
        if ($current_page_name != 'index')
            return '<link rel="stylesheet" href="styles/' . $current_page_name . '.css">';
        return '';
    }

    function str_word_count_ru($data) {
        // Модификация (слой) над стандартной функцией для поддержки кириллицы и массивов
        $chars = "АаБбВвГгҐґДдЕеЁёЄєЖжЗзИиІіЇїЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЬьЪъЫыЮюЬьЭэЯя";
        // Поддержка обработки массивов
        if (is_array($data)) {
            $count = 0;
            foreach ($data as $str) $count += str_word_count($str, 0, $chars);
            return $count;
        }
        return str_word_count($data, 0, $chars);
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