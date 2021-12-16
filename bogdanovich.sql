-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 16 2021 г., 20:09
-- Версия сервера: 5.7.33-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bogdanovich`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`) VALUES
(1, 'admin', '7f872adbb81324cfa4665b07b78083c4ce2a2aa3'),
(2, 'guest', '76e1f98366934e087adb4ea26a45ca208e6ab340'),
(3, 'seo_leo', '65b5f53abcae96fd3ee6734b5c9168f8b840a279'),
(5, 'dimon', '85cfbf4a2be622e56d6f22fc514595ba297fbcba'),
(6, 'agent_smith', '99f026bba938da858b2b334d887380596327c0b7'),
(7, 'Neo', 'bf2f749e80c970f50552e9d5f3e8434e78b88d35'),
(8, 'johny', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(9, 'Nika', '9f2feb0f1ef425b292f2f94bc8482494df430413'),
(10, 'Jess', '8cb2237d0679ca88db6464eac60da96345513964'),
(11, 'cm', '481902ec14eaf3fcfec6be82bd6a63b972ac517f'),
(12, 'anna', '808dbd4fc51e54effb5c0c10d38888b5829b041b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
