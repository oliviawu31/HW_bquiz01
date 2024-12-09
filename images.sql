-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-12-06 09:30:25
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- 資料庫： `db20`
--
-- --------------------------------------------------------
--
-- 資料表結構 `images`
--
CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--
--
-- 資料表索引 `images`
--
ALTER TABLE
  `images`
ADD
  PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--
--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE
  `images`
MODIFY
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;