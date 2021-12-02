<?
    $page_title = 'Богданович Вадим';
    // feedback в одну строку, иначе символы табуляции тоже включаются в обработку функцией string_to_double_color()
    $page_text_content = [
        'arrays_menu_item' => 'Массивы',
        'mend_menu_item' => 'Периодическая таблица',
        'my_name' => 'Богданович Вадим',
        'birth_date_text' => 'Дата рождения: ',
        'birth_date_ddmmYY' => '16.11.1988',
        'expire_days_text' => 'Прожил дней: ',
        'about_me' =>
            'Окончил МГТУ им. Г.И. Носова по специальности &quot;Технология молока и молочных продуктов&quot;.
            В данный момент работаю в МП Маггортранс в качестве водителя трамвая.
            Мое хобби в последнее время &ndash; изучение программирования.',
        'feedback' =>
            'Курсом доволен: удобное расписание, комфортный темп, практические советы. Работа в группе создает особую атмосферу и возможность обсудить изучаемые темы и возникающие проблемы с людьми, изучающими тот же стек технологий.',
        'posters_h2' => 'Постеры фильмов:',
        'django_title' => 'Джанго Освобожденный (2012)',
        'suspiria_title' => 'Суспирия (2018)',
        'identity_title' => 'Идентификация (2003)',
        'history_x_title' => 'Американская история X (1998)',
        'books_h2' => 'Азы веб-разработки:',
        'html_css_title' => 'Изучаем HTML, XHTML и CSS (2017)',
        'js_title' => 'Изучаем программирование на JavaScript (2015)',
        'html5_title' => 'Изучаем программирование на HTML5 (2013)',
        'php_mysql_title' => 'Изучаем PHP и MySQL (2010)',
        'copyright' => '2021 &copy; Богданович Вадим'
    ];
    require_once ('header.php');
    require_once ('funs.php');
?>
<main>
    <section id="profile">
        <figure id="profile_photo">
            <img src="images/my_photo.jpg" alt="Фотография курсанта )" width="278" height="364" id="my_photo">
        </figure>
        <h1 id="my_name">
            <?=$page_text_content['my_name']?>
        </h1>
        <h2 id="birth_info">
            <?
                echo $page_text_content['birth_date_text'], $page_text_content['birth_date_ddmmYY'], '<br>';
                echo $page_text_content['expire_days_text'], days_diff_with_now($page_text_content['birth_date_ddmmYY']);
            ?>
        </h2>
        <p id="about_me">
            <!-- В пользовательскую функцию передаем строку, цвет и необходимое количество слов -->
            <?=phrase_to_color($page_text_content['about_me'], get_random_color(), 2)?>
        </p>
        <p id="feedback">
            <?=string_to_double_color($page_text_content['feedback'])?>
        </p>
    </section>
    <section class="images_block">
        <h2>
            <?=$page_text_content['posters_h2']?>
        </h2>
        <div id="block_type1">
            <figure>
                <a href="https://www.kinopoisk.ru/film/586397/" title="На КиноПоиск" target="_blank">
                    <img src="images/posters/django.jpg" alt="Джанго Освобожденный" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['django_title']?>
                </figcaption>
            </figure>
            <figure>
                <a href="https://www.kinopoisk.ru/film/423063/" title="На КиноПоиск" target="_blank">
                    <img src="images/posters/suspiria.jpg" alt="Суспирия" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['suspiria_title']?>
                </figcaption>
            </figure>
            <figure>
                <a href="https://www.kinopoisk.ru/film/708/" title="На КиноПоиск" target="_blank">
                    <img src="images/posters/identity.jpg" alt="Идентификация" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['identity_title']?>
                </figcaption>
            </figure>
            <figure>
                <a href="https://www.kinopoisk.ru/film/382/" title="На КиноПоиск" target="_blank">
                    <img src="images/posters/amer_hist.jpg" alt="Американская история X" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['history_x_title']?>
                </figcaption>
            </figure>
        </div>
    </section>
    <section class="images_block">
        <h2>
            <?=$page_text_content['books_h2']?>
        </h2>
        <div id="block_type2">
            <figure>
                <a href="https://www.piter.com/product_by_id/128966045" title="Купить" target="_blank">
                    <img src="images/covers/hf_html.jpg" alt="Изучаем HTML, XHTML и CSS" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['html_css_title']?>
                </figcaption>
            </figure>
            <figure>
                <a href="https://www.piter.com/product_by_id/108571539" title="Купить" target="_blank">
                    <img src="images/covers/hf_js.jpg" alt="Изучаем программирование на JavaScript" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['js_title']?>
                </figcaption>
            </figure>
            <figure>
                <a href="https://www.labirint.ru/books/365029/" title="Купить" target="_blank">
                    <img src="images/covers/hf_html5.jpg" alt="Изучаем программирование на HTML5" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['html5_title']?>
                </figcaption>
            </figure>
            <figure>
                <a href="https://www.labirint.ru/books/250051/" title="Купить" target="_blank">
                    <img src="images/covers/hf_php.jpg" alt="Изучаем PHP и MySQL" class="block_image">
                </a>
                <figcaption>
                    <?=$page_text_content['php_mysql_title']?>
                </figcaption>
            </figure>
        </div>
    </section>
    <section id="page_service_info">
        <h3>Служебная информация:</h3>
        <? // Вывод при помощи обновленных функций (добавлена возможность передачи массива в параметр)
            echo '<p>Количество гласных букв на странице: ', str_vowels_count_ru($page_text_content), '</p>';
            echo '<p>Количество слов на странице: ', str_word_count_ru($page_text_content), '</p>';
        ?>
    </section>
</main>
<? require_once ('footer.php'); ?>