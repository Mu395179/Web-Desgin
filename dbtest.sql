-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-24 02:33:50
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dbtest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `acc` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `size` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `images`
--

INSERT INTO `images` (`id`, `name`, `type`, `size`, `class`) VALUES
(72, '20240720082542.jpg', 'image/jpeg', '628927', 'title'),
(82, '20240720083019.jpg', 'image/jpeg', '22218', 'user'),
(90, '20240720154919.jpg', 'image/jpeg', '2393522', 'image1'),
(91, '20240720154925.jpg', 'image/jpeg', '2026343', 'image2'),
(92, '20240720154931.jpg', 'image/jpeg', '377159', 'image3'),
(93, '20240720154944.jpg', 'image/jpeg', '2047289', 'image4'),
(95, '20240720155727.jpg', 'image/jpeg', '380248', 'popular_image1'),
(96, '20240720155744.jpg', 'image/jpeg', '391648', 'popular_image2'),
(98, '20240720155808.jpg', 'image/jpeg', '2056817', 'popular_image3'),
(99, '20240720155823.jpg', 'image/jpeg', '1053160', 'explore_title'),
(103, '20240721043828.jpg', 'image/jpeg', '3190194', 'about'),
(104, '20240721043838.jpg', 'image/jpeg', '1562942', 'join');

-- --------------------------------------------------------

--
-- 資料表結構 `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `source` text NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `links`
--

INSERT INTO `links` (`id`, `name`, `source`, `type`) VALUES
(1, 'title', 'https://x.com/baloolax/status/1810744203875635342', 'line1'),
(2, 'google', 'https://www.google.com/', 'line1'),
(3, 'facebook', 'https://www.google.com/', 'line1'),
(4, 'instagram', 'https://www.instagram.com/', 'line2'),
(5, '999', '999.com/', 'line3'),
(6, '777', '777.com/', 'line5'),
(7, '333', '333.com/', 'line2'),
(8, '444', '444.com/', 'line3'),
(9, '555', '555.com/', 'line3'),
(11, '111', '111.com/', 'line2'),
(12, '123', '123.com', 'line1');

-- --------------------------------------------------------

--
-- 資料表結構 `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `logo`
--

INSERT INTO `logo` (`id`, `name`) VALUES
(7, 'HOLOLIVE');

-- --------------------------------------------------------

--
-- 資料表結構 `name_home_image`
--

CREATE TABLE `name_home_image` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `name_home_image`
--

INSERT INTO `name_home_image` (`id`, `name`, `type`) VALUES
(37, 'Gawr Gura', 'image1'),
(38, 'Suisei', 'image2'),
(40, 'IryS', 'image3'),
(41, 'Bijue', 'image4');

-- --------------------------------------------------------

--
-- 資料表結構 `name_popular_image`
--

CREATE TABLE `name_popular_image` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `name_popular_image`
--

INSERT INTO `name_popular_image` (`id`, `name`, `text`, `type`) VALUES
(9, 'David Wu', '', ''),
(10, 'David Wu', '', ''),
(11, 'David Wu', '', ''),
(12, 'Ame ', 'Time Trvealer', 'image1'),
(13, 'Ame', 'sitting', 'image2'),
(14, 'Ame', 'Standing', 'image3');

-- --------------------------------------------------------

--
-- 資料表結構 `text_about`
--

CREATE TABLE `text_about` (
  `id` int(11) NOT NULL,
  `subtitle` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `text_about`
--

INSERT INTO `text_about` (`id`, `subtitle`, `title`, `description`) VALUES
(9, 'HOLO CHAD', 'HOLOLIVE CHAT PODCAST', 'Hakos Baelz& IRyS & Mori Calliope  \nGIRLS TALKING');

-- --------------------------------------------------------

--
-- 資料表結構 `text_popular`
--

CREATE TABLE `text_popular` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `id` int(11) NOT NULL,
  `subtitle` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`id`, `subtitle`, `title`, `description`) VALUES
(37, 'Hololive', 'Hololive EN', 'Hololive EN Myth');

-- --------------------------------------------------------

--
-- 資料表結構 `title_explore`
--

CREATE TABLE `title_explore` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title_explore`
--

INSERT INTO `title_explore` (`id`, `title`, `description`) VALUES
(3, 'Gura', 'Gura Adventure');

-- --------------------------------------------------------

--
-- 資料表結構 `title_join`
--

CREATE TABLE `title_join` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title_join`
--

INSERT INTO `title_join` (`id`, `title`, `description`) VALUES
(4, 'See you sooon', 'This is my website');

-- --------------------------------------------------------

--
-- 資料表結構 `title_popular`
--

CREATE TABLE `title_popular` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title_popular`
--

INSERT INTO `title_popular` (`id`, `title`) VALUES
(6, 'AME  Universe');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(9, 'David Wu');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `name_home_image`
--
ALTER TABLE `name_home_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `name_popular_image`
--
ALTER TABLE `name_popular_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `text_about`
--
ALTER TABLE `text_about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `text_popular`
--
ALTER TABLE `text_popular`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title_explore`
--
ALTER TABLE `title_explore`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title_join`
--
ALTER TABLE `title_join`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title_popular`
--
ALTER TABLE `title_popular`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `name_home_image`
--
ALTER TABLE `name_home_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `name_popular_image`
--
ALTER TABLE `name_popular_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `text_about`
--
ALTER TABLE `text_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `text_popular`
--
ALTER TABLE `text_popular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_explore`
--
ALTER TABLE `title_explore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_join`
--
ALTER TABLE `title_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_popular`
--
ALTER TABLE `title_popular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
