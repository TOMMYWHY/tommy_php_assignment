-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-07-19 13:13:05
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Q5_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(11) NOT NULL,
  `admin_pw` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `admin_name`, `admin_pw`) VALUES
(1, 'tommy', '123456'),
(2, 'sookie', 'asdasd');

-- --------------------------------------------------------

--
-- 表的结构 `brand_tb`
--

CREATE TABLE `brand_tb` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `brand_tb`
--

INSERT INTO `brand_tb` (`brand_id`, `brand_name`) VALUES
(1, 'bmw'),
(2, 'benz'),
(11, 'auto'),
(12, 'gratewall');

-- --------------------------------------------------------

--
-- 表的结构 `product_tb`
--

CREATE TABLE `product_tb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `description` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product_tb`
--

INSERT INTO `product_tb` (`id`, `product_name`, `product_price`, `brand_id`, `description`) VALUES
(42, 'bmw1', 1, 1, '11'),
(43, 'benz1', 2, 2, '222'),
(44, 'auto1', 111, 11, '333'),
(45, 'gratewall1', 1212, 12, '121212'),
(46, 'auto2', 112, 11, '112');

-- --------------------------------------------------------

--
-- 表的结构 `product_tb2`
--

CREATE TABLE `product_tb2` (
  `id` int(11) NOT NULL,
  `productName` varchar(11) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `brandName` varchar(11) NOT NULL,
  `detail` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `user_name` varchar(11) NOT NULL,
  `user_pw` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_tb`
--

INSERT INTO `user_tb` (`id`, `user_name`, `user_pw`) VALUES
(1, 'aa', '123456'),
(2, 'tommy', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_tb`
--
ALTER TABLE `brand_tb`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `product_tb2`
--
ALTER TABLE `product_tb2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `brand_tb`
--
ALTER TABLE `brand_tb`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- 使用表AUTO_INCREMENT `product_tb2`
--
ALTER TABLE `product_tb2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 限制导出的表
--

--
-- 限制表 `product_tb`
--
ALTER TABLE `product_tb`
  ADD CONSTRAINT `product_tb_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand_tb` (`brand_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
