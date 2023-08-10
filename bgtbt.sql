-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 10 2023 г., 19:46
-- Версия сервера: 10.4.26-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bgtbt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `argue`
--

CREATE TABLE `argue` (
  `id` int(11) NOT NULL,
  `oglavlenie` varchar(32) NOT NULL,
  `poema` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `argue`
--

INSERT INTO `argue` (`id`, `oglavlenie`, `poema`) VALUES
(1, '', ''),
(2, 'fhgfhfh', 'fgfgfgfgfgffbfg');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` varchar(340) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`) VALUES
(6, 'мне очень плохо'),
(7, 'тут очень страшно'),
(8, 'тут очень страшно');

-- --------------------------------------------------------

--
-- Структура таблицы `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `zagalovok` varchar(32) NOT NULL,
  `incridients` text NOT NULL,
  `cookin_steps` text NOT NULL,
  `photo` varchar(10000) DEFAULT 'https://gas-kvas.com/uploads/posts/2023-01/1673537027_gas-kvas-com-p-lyubimoe-blyudo-detskii-risunok-29.jpg',
  `users_id_pub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publication`
--

INSERT INTO `publication` (`id`, `zagalovok`, `incridients`, `cookin_steps`, `photo`, `users_id_pub`) VALUES
(1, 'Королина', 'Кавказкая греча', 'первое второе и полдник', 'https://gas-kvas.com/uploads/posts/2023-01/1673537027_gas-kvas-com-p-lyubimoe-blyudo-detskii-risunok-29.jpg', 0),
(2, 'Королина1', 'Кавказкая греча', 'первое второе и полдник', 'https://gas-kvas.com/uploads/posts/2023-01/1673537027_gas-kvas-com-p-lyubimoe-blyudo-detskii-risunok-29.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(16) DEFAULT NULL,
  `age` int(11) DEFAULT 18
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `age`) VALUES
(1, 'luda', 'koroleva', 'kazol', 23),
(2, 'korol', 'luda', 'vasy', 18);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `argue`
--
ALTER TABLE `argue`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `argue`
--
ALTER TABLE `argue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
