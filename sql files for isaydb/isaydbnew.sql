-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 02 2013 г., 07:21
-- Версия сервера: 5.5.27
-- Версия PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `isaydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adimages`
--

CREATE TABLE IF NOT EXISTS `adimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  `ad_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `adimages`
--

INSERT INTO `adimages` (`id`, `name`, `ad_id`) VALUES
(1, 'namw', 5),
(2, '362713101721463321083621919363432521114281617153625.jpg', 0),
(3, '20331725333111820535221283218161030514117353532812813.jpg', 0),
(4, '2415272831111642910101659302710303372034317104173111.jpg', 0),
(5, '2072222224369121133928118322167731322720614722216.jpg', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  `pic` text CHARACTER SET utf8 NOT NULL,
  `countrie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `ads`
--

INSERT INTO `ads` (`id`, `name`, `link`, `pic`, `countrie_id`) VALUES
(5, 'Sale in TALLY WEIJL 40 % and more!!!', 'link for ad', '', 0),
(6, 'new ads', '', '', 0),
(7, 'Sale in TALLY WEIJL 49 % and more!!!', 'www.tallyweijl.com', '', 2),
(8, 'iphone', 'www.apple.com', '', 2),
(9, 'fsv', 'sv', '', 2),
(10, 'dfv', 'dfvc', '', 2),
(11, 'erf', 'ercc', '', 2),
(12, 'xc', 'x c ', '', 2),
(13, 'dfv', 'd', '', 2),
(14, 'dfv', 'd', '', 2),
(15, 'dfv', 'd', '', 2),
(16, 'dfv', 'd', '', 2),
(17, 'dfv', 'd', '', 2),
(18, 'dfvee', 'qqqq', '', 2),
(19, 'kjl', 'lk;ik', '', 2),
(20, '', '', '34263213201342733163528333322631333452215211518312171410.jpg', 0),
(21, 'khgvk', 'lk;oi;o', '', 2),
(22, '', '', '43213283035812222515303337527281022183031283225301236.jpg', 0),
(23, '', '', '922136322386346563293630261719193235354141236322322.jpg', 0),
(24, 'hl', 'h', '', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text CHARACTER SET utf8 NOT NULL,
  `picpath` text CHARACTER SET utf8 NOT NULL,
  `backgroundpath` text CHARACTER SET utf8 NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  `about` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `url`, `picpath`, `backgroundpath`, `name`, `link`, `about`) VALUES
(1, 'usa', 'avatar_usa', 'MEDIA/Images/flags/51-1.jpg', 'USA', 'www.isay.net/usa', 'Official ISay USA '),
(2, 'index', 'worldava', 'MEDIA/Images/18254-1920x1200d.jpg', 'WORLD', 'isay.net', 'Official ISay World <br> We are OPEN and FREE platform for the scalable votings for the most important  current topics around The World. Join us to build the best future!'),
(3, 'belarus', 'avatar_belarus', 'MEDIA/Images/flags/esrrtt.jpg', 'BELARUS', 'www.isay.net/belarus', 'Official ISay Belarus'),
(4, 'china', 'avatar_china', 'MEDIA/Images/flags/rbvgerg.jpg', 'CHINA', 'www.isay.net/china', 'Official ISay China'),
(5, 'russia', 'avatar_russia', 'MEDIA/Images/flags/dfbsrn.jpg', 'RUSSIA', 'www.isay.net/russia', 'Official ISay Russia'),
(6, 'uk', 'avatar_uk', 'MEDIA/Images/flags/zsdfg.jpg', 'UNITED KINGDOM', 'www.isay.net/uk', 'Official United Kingdom'),
(7, 'adnews', '', '', 'NEWS', '', 'NEWS'),
(8, 'adads', '', '', 'ADS', 'ADS', '');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(2, 1),
(15, 1),
(15, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `first_name` text NOT NULL,
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `picpath` text NOT NULL,
  `backgroundpath` text NOT NULL,
  `aboutuser` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `first_name`, `password`, `logins`, `last_login`, `picpath`, `backgroundpath`, `aboutuser`) VALUES
(2, 'myemail@gmail.com', 'stacey', 'Anastasia ', 'f917ac0dd152f833fba11c05f811a5e7ee015d63178edd9e7b8f61666d048cd7', 52, 1375216672, 'MEDIA/Images/akyla-hichnica.jpg', 'MEDIA/Images/akyla-hichnica.jpg', 'I am a vegetarian blue shark living in the big ocean called the World'),
(15, 'admin@gmail.com', 'admin', 'thisisadmin', '132273e4c241004494c1294c2699e2a7be9404bcb2c4e5564b5316405ce2518d', 10, 1372591905, '', 'MEDIA/Images/km.jpg', 'I am Admin  of this strange project ');

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `worldnews`
--

CREATE TABLE IF NOT EXISTS `worldnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  `pic` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  `countrie_id` int(11) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Дамп данных таблицы `worldnews`
--

INSERT INTO `worldnews` (`id`, `name`, `pic`, `link`, `countrie_id`, `text`) VALUES
(12, 'Technology', '', 'nyti.ms/1ahbnZE ', 2, 'Rough Road Ahead'),
(13, 'How much should you', '', 'bit.ly/13Jined ', 2, 'withdraw from retirement savings each year? '),
(16, '30 Under 30', '', ' http://bit.ly/147LwhX ', 2, 'veteran @MacMiller returns to @Forbes '),
(18, 'Rapper  tells us', '', 'on.mtv.com/19YPFcw  ', 2, '"this music is so good, it''s gonna change the rest of my life."'),
(19, 'BREAKING:', '', 'on.mtv.com/13P3SDV ', 2, 'Kim Kardashian gives birth'),
(20, 'BREAKING:', '', 'on.mtv.com/13P3SDV ', 1, 'Kim Kardashian gives birth'),
(21, '"A life of entrepreneurship is', '', ' http://on.wsj.com/12LUZQg', 2, '" Advice from CEO dad:'),
(22, '"A life of entrepreneurship is', '', ' http://on.wsj.com/12LUZQg', 1, '" Advice from CEO dad:'),
(23, '"A life of entrepreneurship is', '', ' http://on.wsj.com/12LUZQg', 6, '" Advice from CEO dad:'),
(26, 'Are English majors ', '', 'on.wsj.com/18HdWG7 ', 2, 'Experts debate the importance of a college major: http://'),
(28, 'Tracy Britt, 28', '', 'on.wsj.com/12u6uKM ', 2, ' has become one of the most influential women '),
(29, 'E-cigarettes are firing up', '', 'http://on.wsj.com/11NcnAU ', 2, ' top investors, including entrepreneur Sean Parker.'),
(30, 'E-cigarettes are firing up', '', 'http://on.wsj.com/11NcnAU ', 1, ' top investors, including entrepreneur Sean Parker.'),
(31, 'Photographing', '', 'on.natgeo.com/148aIVy ', 2, 'Transylvania''s wildlife'),
(32, 'Photographing', '', 'on.natgeo.com/148aIVy ', 1, 'Transylvania''s wildlife'),
(33, 'Photographing', '', 'on.natgeo.com/148aIVy ', 6, 'Transylvania''s wildlife'),
(35, 'Restoring trees to save ', '', 'http://on.natgeo.com/12O1vpR', 1, 'the world''s rarest parrot: '),
(36, 'Restoring trees', '', 'http://on.natgeo.com/12O1vpR', 6, ' to save the world''s rarest parrot: '),
(37, 'That was fast', '', 'nswk.ly/18ypF9G ', 1, ' Is this Putin''s new Mrs.?'),
(38, 'That was fast:', '', 'nswk.ly/18ypF9G ', 6, ' Is this Putin''s new Mrs.?'),
(40, 'Nice speech', '', 'nswk.ly/13C68jt ', 2, ' but after graduation'),
(41, 'Nice speech', '', 'nswk.ly/13C68jt ', 1, ' but after graduation'),
(42, 'Where', '', 'nswk.ly/11zgVHR ', 2, ' do modern Einsteins live?'),
(43, 'Where', '', 'nswk.ly/11zgVHR ', 1, ' do modern Einsteins live?'),
(44, 'What "democracy" meant ', '', 'nswk.ly/13C6c2I ', 1, ' to Genghis Khan'),
(47, 'Президент Беларуси', '', 'http://www.sb.by/', 3, 'Поздравления работникам здравоохранения'),
(48, 'Интеграция:', '', 'http://www.sb.by/', 3, 'Беларусь принимала 44–ю сессию Парламентского собрания'),
(49, 'Есть ли в Минске катакомбы?', '', 'http://vminsk.by/news/74/73466/', 3, 'Конечно, катакомбы есть! Вот только попасть в них непросто…'),
(53, 'Не шути с законом', '', 'http://www.sb.by/', 3, 'Судебные исполнители должников разыскивают '),
(56, '迪拜建成世界最高转体大厦', '', 'http://www.chinadaily.com.cn/hqzx/', 4, '由沙特卡延房地产投资开发公司投资兴建，原名“无限塔'),
(57, '2013世界卫生日：控制你的血压', '', 'http://health.chinadaily.com.cn/', 4, '高血压会加大心脏病发作、中风和肾衰竭的'),
(59, 'Очередная блондинка из свиты Сердюкова', '', 'www.kp.ru/', 5, 'Екатерину Приезжеву подозревают в хищение на 60 млн рублей'),
(60, 'ВКонтакте может потерять всех пользователей', '', 'http://www.kp.ru/', 5, 'из-за пиратской музыки'),
(61, 'Медведев напомнил министрам о дисциплине', '', 'http://www.kp.ru/', 5, 'По словам премьера, с исполнением бюджета у нас постоянные проблемы'),
(62, 'Амнистия для предпринимателей: ', '', 'http://www.kp.ru/', 5, 'Возмести ущерб и выйди на свободу'),
(64, 'Сергей Собянин', '', 'http://vmdaily.ru/', 5, ' подал документы для участия в выборах '),
(65, 'СЕРГЕЙ ЛАЗАРЕВ', '', ' http://vmdaily.ru/', 5, 'Борьба с пиратством повысит уровень российской музыки ');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
