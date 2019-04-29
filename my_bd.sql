-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 27 2019 г., 11:52
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu_options`
--

CREATE TABLE `menu_options` (
  `option_id` int(11) UNSIGNED NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu_options`
--

INSERT INTO `menu_options` (`option_id`, `options`) VALUES
(1, 'Разгрузка'),
(2, 'Погрузка'),
(3, 'Комплектовка');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `player_id` int(5) UNSIGNED NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `messages` varchar(100) NOT NULL,
  `timing` text NOT NULL,
  `options` varchar(100) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`player_id`, `player_name`, `messages`, `timing`, `options`, `images`) VALUES
(299, 'Голубь Антон Олегович', 'jukonda23@gmail.com', '2019-04-27 11:20:54', '1', 'img/post-1337372-1273062970.png'),
(300, 'Голубь Антон Олегович', 'jukonda23@gmail.com', '2019-04-27 11:52:03', '2', 'img/post-1337372-1273062970.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `menu_options`
--
ALTER TABLE `menu_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `menu_options`
--
ALTER TABLE `menu_options`
  MODIFY `option_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `player_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
