-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2022 г., 22:25
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web_about_me`
--

-- --------------------------------------------------------

--
-- Структура таблицы `difference_image`
--

CREATE TABLE `difference_image` (
  `diff_id` int NOT NULL COMMENT 'Индекс различия',
  `image_id` int NOT NULL COMMENT 'Индекс изображения с различием',
  `diff_x_1` int NOT NULL COMMENT 'Первая точка прямоугольника с различием: координата x',
  `diff_y_1` int NOT NULL COMMENT 'Первая точка прямоугольника с различием: координата y',
  `diff_x_2` int NOT NULL COMMENT 'Вторая точка прямоугольника с различием: координата x',
  `diff_y_2` int NOT NULL COMMENT 'Вторая точка прямоугольника с различием: координата y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Различия на изображении';

--
-- Дамп данных таблицы `difference_image`
--

INSERT INTO `difference_image` (`diff_id`, `image_id`, `diff_x_1`, `diff_y_1`, `diff_x_2`, `diff_y_2`) VALUES
(0, 0, 543, 339, 990, 805),
(1, 0, 1038, 877, 1276, 1078),
(2, 0, 1305, 210, 1547, 457),
(3, 1, 682, 645, 1342, 994),
(4, 1, 1418, 262, 1801, 533),
(5, 1, 1220, 0, 1568, 159),
(6, 2, 133, 680, 378, 838),
(7, 2, 810, 868, 1100, 1048),
(8, 2, 795, 533, 1098, 753),
(9, 3, 1251, 14, 1736, 488),
(10, 3, 480, 714, 813, 1035),
(11, 3, 1444, 545, 1707, 761),
(12, 4, 858, 0, 1060, 182),
(13, 4, 631, 786, 823, 1001),
(14, 4, 931, 310, 1617, 949),
(15, 5, 0, 0, 311, 173),
(16, 5, 890, 330, 1164, 558),
(17, 5, 1194, 738, 1443, 916),
(18, 5, 1424, 539, 1596, 712),
(19, 5, 1702, 527, 1890, 714);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `difference_image`
--
ALTER TABLE `difference_image`
  ADD PRIMARY KEY (`diff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
