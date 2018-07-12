-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 09 2018 г., 22:53
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `header` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `contents`
--

INSERT INTO `contents` (`id`, `header`, `date`, `content`) VALUES
(1, 'Заголовок', '', 'fasdfasfd asfdfas fdasfdsafasfs'),
(2, 'dfasfasdfsad', '', 'sdfasdfdsfxcfvxczvxdgfds'),
(3, 'ваываываы', '22:50:13', 'ваываываы');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
