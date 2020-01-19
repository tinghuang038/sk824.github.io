-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `skate`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '流水號',
  `userName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '使用者名稱',
  `pwd` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '使用者密碼',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電子信箱',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '姓名',
  `phone_number` int(11) DEFAULT NULL COMMENT '電話號碼',
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '地址',
  `userImg` int(11) NOT NULL COMMENT '照片',
  `is_activated` tinyint(1) DEFAULT 0 COMMENT '開通狀態',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT '建立時間',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='使用者資料表';

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `userName`, `pwd`, `email`, `name`, `phone_number`, `address`, `userImg`, `is_activated`, `created_at`, `updated_at`) VALUES
(1, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@test.com', '陳豆皮', 933521415, '106台北市大安區復興南路一段390號2樓', 0, 0, '2020-01-01 19:29:52', '2020-01-02 19:21:54');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
