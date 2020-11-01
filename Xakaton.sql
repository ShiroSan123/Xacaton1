-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 01 2020 г., 08:23
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Xakaton`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Login`
--

CREATE TABLE `Login` (
  `name` varchar(355) NOT NULL,
  `surname` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Login`
--

INSERT INTO `Login` (`name`, `surname`, `password`) VALUES
('Василий', 'Чичигинаров', 'Chichi123'),
('Михаил', 'Иванов', 'Mix128N'),
('Ренат', 'Харлампьев', 'Pxap512'),
('Никита', 'Халустянов', 'HikXal'),
('Яобо', 'Дзёсай', '1Yaobo1'),
('Кейко', 'Акихамару', 'Keiko_Aki'),
('Маша', 'Уйгурова', 'Masha>_<');

-- --------------------------------------------------------

--
-- Структура таблицы `Logo`
--

CREATE TABLE `Logo` (
  `logo` varchar(355) NOT NULL,
  `prof` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `message2`
--

CREATE TABLE `message2` (
  `text` text NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message2`
--

INSERT INTO `message2` (`text`, `id`) VALUES
('sdfbsb', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `message3`
--

CREATE TABLE `message3` (
  `text` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message3`
--

INSERT INTO `message3` (`text`, `id`) VALUES
('Миша лох', 1),
('gwjgiwg0ipeqWEG', 2),
('qaefa', 3),
('Миша лох', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Plan`
--

CREATE TABLE `Plan` (
  `texts` text NOT NULL,
  `whens` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Plan`
--

INSERT INTO `Plan` (`texts`, `whens`) VALUES
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message2`
--
ALTER TABLE `message2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `message3`
--
ALTER TABLE `message3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message2`
--
ALTER TABLE `message2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `message3`
--
ALTER TABLE `message3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
