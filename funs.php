<?
    function get_random_color(): string {
        // Здесь всё очевидно
        $red = mt_rand(0, 255);
        $green = mt_rand(0, 255);
        $blue = mt_rand(0, 255);
        return "rgb($red, $green, $blue)";
    }
    function str_word_count_ru($str) {
        // Модификация (слой) над стандартной функцией для поддержки кириллицы
        return str_word_count( $str, 0,
            "АаБбВвГгҐґДдЕеЁёЄєЖжЗзИиІіЇїЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЬьЪъЫыЮюЬьЭэЯя" );
    }
    function str_vowels_count_ru($str) {
        // Функция для подсчета гласных
        // Модификатор /i - игнорирование регистра, /u - режим кодировки UTF-8
        $reg = '/[аеёиоуыэюя]/iu';
        return preg_match_all($reg, $str);
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