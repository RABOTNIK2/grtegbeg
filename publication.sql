-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 12 2023 г., 10:12
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `htth`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `publication`
--

INSERT INTO `publication` (`id`, `zagalovok`, `incridients`, `cookin_steps`, `photo`, `users_id_pub`) VALUES
(1, 'Королина', 'Кавказкая греча', 'первое второе и полдник', 'https://gas-kvas.com/uploads/posts/2023-01/1673537027_gas-kvas-com-p-lyubimoe-blyudo-detskii-risunok-29.jpg', 0),
(2, 'Королина1', 'Кавказкая греча', 'первое второе и полдник', 'https://gas-kvas.com/uploads/posts/2023-01/1673537027_gas-kvas-com-p-lyubimoe-blyudo-detskii-risunok-29.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
