-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 25 2017 г., 12:39
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `files`
--

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `randomName` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`randomName`, `name`, `size`) VALUES
('tyu92.txt', 'C:xampp	mp', 0),
('plk60.txt', 'C:xampp	mp', 0),
('dsa79.txt', 'C:xampp	mp', 0),
('tyu61.txt', '1.txt', 0),
('jhg88.txt', '22.txt', 0),
('hgf23.txt', '22.txt', 30),
('tyu75.txt', '22.txt', 30),
('sa81.txt', '22.txt', 30),
('sa7.txt', '11.txt', 0),
('opl64.txt', 'ee.txt', 33),
('opl26.txt', 'card.txt', 206),
('kjh66.txt', 'card.txt', 206),
('yui19.txt', 'card.txt', 206),
('kjh65.txt', 'card.txt', 206),
('qwe5.txt', 'card.txt', 206),
('rty96.txt', 'card.txt', 206),
('opl33.txt', '222.txt', 42),
('plk19.txt', '222.txt', 42),
('yui39.txt', '222.txt', 42),
('fds42.txt', 'card.txt', 206),
('gfd7.txt', 'card.txt', 206);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
