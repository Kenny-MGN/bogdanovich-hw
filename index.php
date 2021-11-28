<?
    $page_title = 'Богданович Вадим';
    require_once ('template/header.php');
?>
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
<? require_once ('template/footer.php'); ?>