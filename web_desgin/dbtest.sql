-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-28 05:50:36
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
(141, '20240725123042.jpg', 'image/jpeg', '609055', 'image1'),
(142, '20240725123108.jpg', 'image/jpeg', '685602', 'image2'),
(143, '20240725123159.jpg', 'image/jpeg', '374049', 'image3'),
(144, '20240725123225.jpg', 'image/jpeg', '528313', 'image4'),
(145, '20240725123256.jpg', 'image/jpeg', '700137', 'about'),
(146, '20240725123500.jpg', 'image/jpeg', '636166', 'popular_image1'),
(148, '20240725123519.jpg', 'image/jpeg', '707724', 'popular_image3'),
(149, '20240725123530.jpg', 'image/jpeg', '569127', 'popular_image2'),
(152, '20240725123944.jpg', 'image/jpeg', '800791', 'join'),
(157, '20240725124911.jpg', 'image/jpeg', '815202', 'user'),
(158, '20240725124921.jpg', 'image/jpeg', '517166', 'explore_title'),
(159, '20240725124933.jpg', 'image/jpeg', '524215', 'title');

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
(2, 'google', 'https://www.google.com/', 'line3'),
(4, 'instagram', 'https://www.instagram.com/', 'line3'),
(13, 'image1', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(14, 'image2', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(15, 'image3', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(16, 'image4', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(17, 'image5', 'https://x.com/SK_Jynx/status/1789453855865901142', 'line2'),
(18, 'image6', 'https://x.com/SK_Jynx/status/1789453855865901142', 'line2'),
(19, 'image7', 'https://x.com/SK_Jynx/status/1789453855865901142', 'line2'),
(20, 'title2', 'https://x.com/Anonamos_701/status/1812968389700382776/photo/1', 'line2'),
(21, 'facebook', 'https://facebook.com', 'line3');

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
(11, 'RONG ART');

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
(58, 'CHI CHI', 'image3'),
(60, 'Miru', 'image2'),
(61, 'YuNi', 'image1'),
(62, 'U Ni', 'image4');

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
(20, 'Impressionnisme', 'Alishan', 'image1'),
(22, 'Impressionnisme', 'falls Park', 'image2'),
(23, 'Impressionnisme', 'stream of early morning', 'image3');

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
(12, 'Forest and  Raindeer', 'SNOWLIY FOREST', 'SOLD OUT');

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
(41, '興趣使燃的畫家', '不RONG於水', '油然而生');

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
(5, 'Rong Art', ' Straight your Soul');

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
(7, 'My GITHUB', 'IF you want to see more detail you can go to my github');

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
(9, 'RONG ARTIST');

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
(12, 'Mong Rong');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `name_home_image`
--
ALTER TABLE `name_home_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `name_popular_image`
--
ALTER TABLE `name_popular_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `text_about`
--
ALTER TABLE `text_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_explore`
--
ALTER TABLE `title_explore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_join`
--
ALTER TABLE `title_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_popular`
--
ALTER TABLE `title_popular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
