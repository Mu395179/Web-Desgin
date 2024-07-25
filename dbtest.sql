-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-25 10:22:10
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
(122, '20240724164724.jpg', 'image/jpeg', '76466', 'image1'),
(124, '20240724164739.jpg', 'image/jpeg', '52363', 'image3'),
(125, '20240724164747.jpg', 'image/jpeg', '31350', 'image4'),
(127, '20240724173557.jpg', 'image/jpeg', '1030057', 'about'),
(128, '20240725023022.jpg', 'image/jpeg', '239166', 'title'),
(129, '20240725023242.jpg', 'image/jpeg', '46139', 'image2'),
(131, '20240725031656.jpg', 'image/jpeg', '575073', 'popular_image2'),
(132, '20240725031706.jpg', 'image/jpeg', '623537', 'popular_image1'),
(133, '20240725031714.jpg', 'image/jpeg', '643579', 'popular_image3'),
(134, '20240725034620.jpg', 'image/jpeg', '361055', 'explore_title'),
(135, '20240725040950.jpg', 'image/jpeg', '136781', 'user'),
(136, '20240725075811.jpg', 'image/jpeg', '628251', 'join');

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
(3, 'facebook', 'https://www.google.com/', 'line3'),
(4, 'instagram', 'https://www.instagram.com/', 'line3'),
(13, 'image1', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(14, 'image2', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(15, 'image3', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(16, 'image4', 'https://x.com/SK_Jynx/status/1785340509927428519', 'line1'),
(17, 'image5', 'https://x.com/SK_Jynx/status/1789453855865901142', 'line2'),
(18, 'image6', 'https://x.com/SK_Jynx/status/1789453855865901142', 'line2'),
(19, 'image7', 'https://x.com/SK_Jynx/status/1789453855865901142', 'line2'),
(20, 'title2', 'https://x.com/Anonamos_701/status/1812968389700382776/photo/1', 'line2');

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
(10, 'HOLOLIVE EN');

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
(48, 'Hakos Baelz', 'image1'),
(53, 'IryS', 'image3'),
(54, 'Ceres Fauna', 'image4'),
(55, 'Nanashi Mumei', 'image2');

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
(17, 'Hakos Baelz', 'Admiral', 'image1'),
(18, 'Ceres Fauna', ' Assassin', 'image2'),
(19, 'Takanashi Kiara', 'Air Chief', 'image3');

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
(11, 'HOLO CHAD ', 'HOLOLIVE CHAT PODCAST ', 'Hakos Baelz& IRyS & Mori Calliope  GIRLS TALKING ');

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
(40, 'HOLOLIVE', 'HOLOLIVE EN', 'HOLOLIVE Myth Ame & Sama');

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
(4, 'Ame', 'Ame Adventure');

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
(8, 'Ame Universe');

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
(10, 'Gigi Murin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `name_home_image`
--
ALTER TABLE `name_home_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `name_popular_image`
--
ALTER TABLE `name_popular_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `text_about`
--
ALTER TABLE `text_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_explore`
--
ALTER TABLE `title_explore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_join`
--
ALTER TABLE `title_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title_popular`
--
ALTER TABLE `title_popular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
