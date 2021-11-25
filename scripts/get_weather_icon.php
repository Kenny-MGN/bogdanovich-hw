<?
    date_default_timezone_set("Asia/Dushanbe"); // Установка часового пояс UTC+5
    $now = localtime(); // Получение массива содержащего компоненты метки времени Unix
    $now_hours = $now[2]; // Получение значения из массива (часы)
    $now_minutes = $now[1]; // Получение значения из массива (минуты)
    $time_in_minutes = ($now_hours * 60) + $now_minutes; // Перевод текущего времени в минуты
    $time_icon_name = ($time_in_minutes < 480 || $time_in_minutes > 1200) ? 'moon' : 'sun'; // 480 соответствует 8:00, 1200 - 20:00