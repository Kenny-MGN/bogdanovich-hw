<?
    require_once('scripts/get_weather_icon.php');
    /**
    * @var $time_icon_name - переменная подключаемого файла
    */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Богданович Вадим</title>
    <link rel="stylesheet" href="styles/main.css">
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
                <li class="no_print">
                    <a href="subpages/mend.php" title="Периодическая система химических элементов Д. И. Менделеева">Периодическая таблица</a>
                </li>
                <li class="text_with_image no_print">
                    <img src="images/github.jpg" alt="GitHub" id="github_logo">
                    <a href="https://github.com/Kenny-MGN/bogdanovich-hw" title="GitHub" target="_blank">GitHub</a>
                </li>
                <li class="no_print">
                    <a href="https://time.is/" title="Точное время" target="_blank">
                        <img src="images/icons/<?=$time_icon_name?>.png" alt="Точное время">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="profile">
            <figure id="profile_photo">
                <img src="images/my_photo.jpg" alt="Фотография курсанта )" width="278" height="364" id="my_photo">
            </figure>
            <h1 id="my_name">Богданович Вадим</h1>
            <p id="about_me">
                Окончил МГТУ им. Г.И. Носова по специальности &quot;Технология молока и молочных продуктов&quot;.
                В данный момент работаю в МП Маггортранс в качестве водителя трамвая.
                Мое хобби в последнее время &ndash; изучение программирования.
            </p>
            <p id="feedback">
                Курсом доволен: удобное расписание, комфортный темп, практические советы.
                Работа в группе создает особую атмосферу и возможность обсудить изучаемые темы и возникающие проблемы с людьми,
                изучающими тот же стек технологий.
            </p>
        </section>
        <section class="images_block">
            <h2>Постеры фильмов:</h2>
            <div id="block_type1">
                <figure>
                    <a href="https://www.kinopoisk.ru/film/586397/" title="На КиноПоиск" target="_blank">
                        <img src="images/posters/django.jpg" alt="Джанго Освобожденный" class="block_image">
                    </a>
                    <figcaption>Джанго Освобожденный (2012)</figcaption>
                </figure>
                <figure>
                    <a href="https://www.kinopoisk.ru/film/423063/" title="На КиноПоиск" target="_blank">
                        <img src="images/posters/suspiria.jpg" alt="Суспирия" class="block_image">
                    </a>
                    <figcaption>Суспирия (2018)</figcaption>
                </figure>
                <figure>
                    <a href="https://www.kinopoisk.ru/film/708/" title="На КиноПоиск" target="_blank">
                        <img src="images/posters/identity.jpg" alt="Идентификация" class="block_image">
                    </a>
                    <figcaption>Идентификация (2003)</figcaption>
                </figure>
                <figure>
                    <a href="https://www.kinopoisk.ru/film/382/" title="На КиноПоиск" target="_blank">
                        <img src="images/posters/amer_hist.jpg" alt="Американская история X" class="block_image">
                    </a>
                    <figcaption>Американская история X (1998)</figcaption>
                </figure>
            </div>
        </section>
        <section class="images_block">
            <h2>Азы веб-разработки:</h2>
            <div id="block_type2">
                <figure>
                    <a href="https://www.piter.com/product_by_id/128966045" title="Купить" target="_blank">
                        <img src="images/covers/hf_html.jpg" alt="Изучаем HTML, XHTML и CSS" class="block_image">
                    </a>
                    <figcaption>Изучаем HTML, XHTML и CSS (2017)</figcaption>
                </figure>
                <figure>
                    <a href="https://www.piter.com/product_by_id/108571539" title="Купить" target="_blank">
                        <img src="images/covers/hf_js.jpg" alt="Изучаем программирование на JavaScript" class="block_image">
                    </a>
                    <figcaption>Изучаем программирование на JavaScript (2015)</figcaption>
                </figure>
                <figure>
                    <a href="https://www.labirint.ru/books/365029/" title="Купить" target="_blank">
                        <img src="images/covers/hf_html5.jpg" alt="Изучаем программирование на HTML5" class="block_image">
                    </a>
                    <figcaption>Изучаем программирование на HTML5 (2013)</figcaption>
                </figure>
                <figure>
                    <a href="https://www.labirint.ru/books/250051/" title="Купить" target="_blank">
                        <img src="images/covers/hf_php.jpg" alt="Изучаем PHP и MySQL" class="block_image">
                    </a>
                    <figcaption>Изучаем PHP и MySQL (2010)</figcaption>
                </figure>
            </div>
        </section>
    </main>
    <footer>
        <section id="social_block">
            <a href="https://vk.com/kenny_mgn" title="VK" target="_blank">
                <img src="images/social/vk.png" alt="ВКонтакте">
            </a>
            <a href="https://t.me/kenny_mgn" title="Telegram" target="_blank" id="telegram_anchor">
                <img src="images/social/telegram.png" alt="Telegram">
            </a>
            <a href="https://steamcommunity.com/id/kennymgn" title="Steam" target="_blank">
                <img src="images/social/steam.png" alt="Steam">
            </a>
        </section>
        <p>2021 &copy; Богданович Вадим</p>
    </footer>
</body>
</html>