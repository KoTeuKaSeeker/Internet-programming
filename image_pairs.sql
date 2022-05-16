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
-- Структура таблицы `image_pairs`
--

CREATE TABLE `image_pairs` (
  `image_id` int NOT NULL COMMENT 'Индекс изображения',
  `path_image1` varchar(2048) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Путь до первого изображения',
  `path_image2` varchar(2048) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Путь до второго изображения'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Изображения';

--
-- Дамп данных таблицы `image_pairs`
--

INSERT INTO `image_pairs` (`image_id`, `path_image1`, `path_image2`) VALUES
(0, 'images/differencesImage/pairs0/image0.png', 'images/differencesImage/pairs0/image1.png'),
(1, 'images/differencesImage/pairs1/image0.png', 'images/differencesImage/pairs1/image1.png'),
(2, 'images/differencesImage/pairs2/image0.png', 'images/differencesImage/pairs2/image1.png'),
(3, 'images/differencesImage/pairs3/image0.png', 'images/differencesImage/pairs3/image1.png'),
(4, 'images/differencesImage/pairs4/image0.png', 'images/differencesImage/pairs4/image1.png'),
(5, 'images/differencesImage/pairs5/image0.png', 'images/differencesImage/pairs5/image1.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image_pairs`
--
ALTER TABLE `image_pairs`
  ADD PRIMARY KEY (`image_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
