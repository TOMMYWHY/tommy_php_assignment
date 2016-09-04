-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-08-22 04:29:52
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q4_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `orderform`
--

CREATE TABLE `orderform` (
  `id` int(11) NOT NULL,
  `tires` int(11) NOT NULL,
  `oil` int(11) NOT NULL,
  `spark_plugs` int(11) NOT NULL,
  `address` varchar(11) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orderform`
--

INSERT INTO `orderform` (`id`, `tires`, `oil`, `spark_plugs`, `address`, `subtotal`) VALUES
(1, 12, 11, 1, '430', 0),
(2, 0, 0, 0, 'adasd', 0),
(3, 0, 0, 1, 'ff', 0),
(4, 0, 0, 0, 'qewe', 0),
(5, 12, 1, 21, 'é˜¿æ¶è¶£å‘', 130.9),
(6, 12, 23, 1, 'wqeqw', 69.3),
(7, 0, 0, 0, 'aaa', 0),
(8, 4, 4, 4, '44qqq', 35.2),
(9, 33, 33, 33, '33qqq', 290.4),
(10, 22, 22, 22, 'qwe2', 193.6),
(11, 99, 99, 99, '430queen', 871.2),
(12, 1, 2, 0, 'qqqq', 5.5),
(13, 1, 2, 0, 'qqqq', 5.5),
(14, 4, 2, 0, 'qwe', 8.8),
(15, 0, 0, 0, 'aaaaa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderform`
--
ALTER TABLE `orderform`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `orderform`
--
ALTER TABLE `orderform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
