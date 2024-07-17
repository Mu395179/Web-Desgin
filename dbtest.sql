-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-17 14:07:44
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
(45, '20240715140056.jpg', 'image/jpeg', '2026343', 'image2'),
(46, '20240715140103.jpg', 'image/jpeg', '377159', 'image3'),
(53, '20240715161415.jpg', 'image/jpeg', '1027467', 'image1'),
(54, '20240715161423.jpg', 'image/jpeg', '2047289', 'image4'),
(55, '20240715161521.jpg', 'image/jpeg', '628927', 'title');

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
(13, 'IryS', 'image3'),
(14, 'Koseki Bijou', 'image4'),
(31, 'suisei', 'image2'),
(32, 'Gawr Gura', 'image1');

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
(5, '更換測試', '更換成功', 'yoyoyooyoy');

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
(27, 'HOLOLIVE EN', 'HOLOLIVE MATH', 'HOLOLIVE EN AMEZING');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `name_home_image`
--
ALTER TABLE `name_home_image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `text_about`
--
ALTER TABLE `text_about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `name_home_image`
--
ALTER TABLE `name_home_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `text_about`
--
ALTER TABLE `text_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
