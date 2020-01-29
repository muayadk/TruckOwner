-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 يناير 2020 الساعة 12:57
-- إصدار الخادم: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agala`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `username`, `password`, `phone`, `email`, `image_id`) VALUES
(1, 'saif', 'ali', 'admin', '123', 966500076, 'admin@gmail.com', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `bayment`
--

CREATE TABLE `bayment` (
  `paymentId` int(11) NOT NULL,
  `paymet` int(20) NOT NULL,
  `address` varchar(65) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `name` varchar(65) NOT NULL,
  `country_name` varchar(65) NOT NULL,
  `city` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `bayment`
--

INSERT INTO `bayment` (`paymentId`, `paymet`, `address`, `order_id`, `date`, `name`, `country_name`, `city`) VALUES
(1, 150, 'taiz', 1, '2020-01-01 21:00:00.000000', 'abobaker', 'yemen', 'taiz'),
(2, 200, 'Hivan', 2, '2020-01-01 21:00:00.000000', 'bakr', 'Yemen', 'Taiz'),
(3, 300, 'adan', 3, '2020-01-04 21:00:00.000000', 'salan', 'yemen', 'adan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `chartdriverincom`
-- (See below for the actual view)
--
CREATE TABLE `chartdriverincom` (
`username` varchar(50)
,`order_price` int(11)
,`order_id` int(11)
);

-- --------------------------------------------------------

--
-- بنية الجدول `chat`
--

CREATE TABLE `chat` (
  `message_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `drive_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `img` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `username`, `password`, `email`, `address`, `phone`, `img`) VALUES
(1, 'waleed', 'sami', 'ahmed', '123', 'ahmed@@gmail.com', 'ksa maka', 966687001, 'p1.jpg'),
(2, 'mohammad', 'mosalam', 'mohamad', '123', 'm@gmail.com', 'taiz', 8888, 'p2.jpg'),
(3, 'salam', 'said', 'na', '123', 's@gmail.com', 'adan', 321, '');

-- --------------------------------------------------------

--
-- بنية الجدول `driver`
--

CREATE TABLE `driver` (
  `drive_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `truckowner_id` int(11) NOT NULL,
  `truck_id` int(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `img` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `driver`
--

INSERT INTO `driver` (`drive_id`, `username`, `password`, `truckowner_id`, `truck_id`, `address`, `phone`, `email`, `img`) VALUES
(1, 'ali', '123', 1, 1, 'ksa riad', 966676501, 'ali@gmail.com', 'p1.jpg'),
(2, 'foad', '123', 2, 2, 'ksa jada', 966684001, 'foad@gmail.com', 'p2.jpg'),
(3, 'fatmah', '87696', 2, 2, 'bbgg', 87696, 'moayadabdo0@gmail.com', 'ca.jpg'),
(4, 'mlak', '55', 0, 2, '5dcd', 55, 'nal@gmail.com', 'p2.jpg'),
(8, 'muayad', '123', 2, 1, 'taiz', 770376055, 'nal@gmail.com', 'm.jpg'),
(9, 'mmm', '123', 2, 2, 'tao', 4455, 'n@gmail.com', 'p1.jpg'),
(10, 'ff', 'vvv', 2, 2, 'nnn', 887, 'nal@gmail.com', ''),
(11, 'hhq', '123', 2, 2, 'tyyo', 87, 'nanostore0@gmail.com', 'p2.jpg'),
(12, 'FVF', '1234', 2, 2, 'DD', 55, 'moayadabdo0@gmail.com', ''),
(15, 'moayad', '1111', 2, 2, 'tttt', 87965, 'b@gmail.com', '');

-- --------------------------------------------------------

--
-- بنية الجدول `driverlog`
--

CREATE TABLE `driverlog` (
  `id` int(11) NOT NULL,
  `driverId` int(11) NOT NULL,
  `timelog` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `logout` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `driverlog`
--

INSERT INTO `driverlog` (`id`, `driverId`, `timelog`, `logout`, `status`) VALUES
(1, 1, '2020-01-14 23:12:11.108070', '2020-01-16 02:12:11.108070', 1),
(2, 2, '2020-01-15 00:12:11.108070', '2020-01-16 03:12:11.108070', 1),
(3, 3, '2020-01-13 23:12:11.108070', '2020-01-16 03:12:11.108070', 1),
(4, 1, '2020-01-15 21:12:11.108070', '2020-01-16 02:12:11.108070', 1),
(5, 3, '2020-01-15 21:08:11.108070', '2020-01-16 02:12:11.108070', 1),
(6, 1, '2020-01-15 21:19:11.108070', '2020-01-16 01:12:11.108070', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getdriverpayment`
-- (See below for the actual view)
--
CREATE TABLE `getdriverpayment` (
`username` varchar(50)
,`img` varchar(65)
,`paymentId` int(11)
,`paymet` int(20)
,`address` varchar(65)
,`order_id` int(11)
,`date` timestamp(6)
,`name` varchar(65)
,`country_name` varchar(65)
,`city` varchar(65)
);

-- --------------------------------------------------------

--
-- بنية الجدول `order_customer`
--

CREATE TABLE `order_customer` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `drive_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `date_trip` datetime NOT NULL,
  `order_confirmation` tinyint(4) NOT NULL DEFAULT '0',
  `order_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `order_customer`
--

INSERT INTO `order_customer` (`order_id`, `customer_id`, `drive_id`, `trip_id`, `date_trip`, `order_confirmation`, `order_price`) VALUES
(3, 2, 3, 2, '2020-01-01 02:00:00', 0, 600),
(4, 2, 2, 1, '2020-01-01 00:00:00', 0, 7000);

-- --------------------------------------------------------

--
-- بنية الجدول `rate`
--

CREATE TABLE `rate` (
  `rate_id` int(11) NOT NULL,
  `drive_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `rate`
--

INSERT INTO `rate` (`rate_id`, `drive_id`, `order_id`, `rate`, `comment`) VALUES
(1, 1, 1, 3, 'good'),
(2, 3, 3, 2, 'fff'),
(3, 2, 4, 3, 'ffyyui'),
(4, 2, 3, 5, 'oii'),
(5, 4, 2, 2, 'ffff'),
(6, 5, 3, 1, 'fff'),
(7, 1, 4, 3, 'ffff');

-- --------------------------------------------------------

--
-- بنية الجدول `trip_record`
--

CREATE TABLE `trip_record` (
  `trip_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `location_from` varchar(100) NOT NULL,
  `location_to` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `trip_record`
--

INSERT INTO `trip_record` (`trip_id`, `driver_id`, `date`, `location_from`, `location_to`) VALUES
(1, 1, '2019-12-11 00:00:00', 'ksa jada ', 'ksa riad'),
(2, 3, '2020-01-11 00:00:00', 'taiz', 'adan'),
(3, 1, '2020-01-15 00:00:00', 'sanna', 'adan');

-- --------------------------------------------------------

--
-- بنية الجدول `truck`
--

CREATE TABLE `truck` (
  `truck_id` int(11) NOT NULL,
  `truck_no` int(11) NOT NULL,
  `truckowner_id` int(11) NOT NULL,
  `truck_type` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `truck`
--

INSERT INTO `truck` (`truck_id`, `truck_no`, `truckowner_id`, `truck_type`, `price`) VALUES
(1, 201718, 1, 'small truck', 20),
(2, 206621, 2, 'long truck', 40);

-- --------------------------------------------------------

--
-- بنية الجدول `truckowner`
--

CREATE TABLE `truckowner` (
  `truckowner_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_no` int(11) NOT NULL,
  `company_reg` int(11) NOT NULL,
  `img` varchar(65) NOT NULL,
  `code` int(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `truckowner`
--

INSERT INTO `truckowner` (`truckowner_id`, `first_name`, `last_name`, `username`, `password`, `phone`, `email`, `company_name`, `company_no`, `company_reg`, `img`, `code`) VALUES
(1, 'khalid', 'qasem', 'sam', '123', 966600001, 'sam@gmail.com', 'SamComp', 76765, 98811, '', 0),
(2, 'm', 'saeed', 'm', '123', 966600003, 'nanostore0@gmail.com', 'ManalComp', 12875, 8874, 'm.jpg', 0),
(3, 'bakar', 'jg', 'mmm', '123', 1234, 'm@gmail.com', 'ggg', 12, 544, '1.jpg', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vdriver`
-- (See below for the actual view)
--
CREATE TABLE `vdriver` (
`drive_id` int(11)
,`username` varchar(50)
,`password` varchar(50)
,`truckowner_id` int(11)
,`truck_id` int(11)
,`address` varchar(400)
,`phone` int(11)
,`email` varchar(250)
,`img` varchar(65)
,`truck_no` int(11)
,`truck_type` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `chartdriverincom`
--
DROP TABLE IF EXISTS `chartdriverincom`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chartdriverincom`  AS  select `tr`.`username` AS `username`,`ord`.`order_price` AS `order_price`,`ord`.`order_id` AS `order_id` from (((`rate` `r` join `driver` `d` on((`d`.`drive_id` = `r`.`drive_id`))) join `truckowner` `tr` on((`tr`.`truckowner_id` = `d`.`truckowner_id`))) join `order_customer` `ord` on((`ord`.`order_id` = `r`.`order_id`))) where (month(`ord`.`date_trip`) = month(curdate())) ;

-- --------------------------------------------------------

--
-- Structure for view `getdriverpayment`
--
DROP TABLE IF EXISTS `getdriverpayment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getdriverpayment`  AS  select `driver`.`username` AS `username`,`driver`.`img` AS `img`,`bayment`.`paymentId` AS `paymentId`,`bayment`.`paymet` AS `paymet`,`bayment`.`address` AS `address`,`bayment`.`order_id` AS `order_id`,`bayment`.`date` AS `date`,`bayment`.`name` AS `name`,`bayment`.`country_name` AS `country_name`,`bayment`.`city` AS `city` from ((`bayment` join `order_customer` on((`order_customer`.`order_id` = `bayment`.`order_id`))) join `driver` on((`driver`.`drive_id` = `order_customer`.`drive_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vdriver`
--
DROP TABLE IF EXISTS `vdriver`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdriver`  AS  select `driver`.`drive_id` AS `drive_id`,`driver`.`username` AS `username`,`driver`.`password` AS `password`,`driver`.`truckowner_id` AS `truckowner_id`,`driver`.`truck_id` AS `truck_id`,`driver`.`address` AS `address`,`driver`.`phone` AS `phone`,`driver`.`email` AS `email`,`driver`.`img` AS `img`,`truck`.`truck_no` AS `truck_no`,`truck`.`truck_type` AS `truck_type` from (`driver` join `truck` on((`truck`.`truck_id` = `driver`.`truck_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bayment`
--
ALTER TABLE `bayment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`drive_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `driverlog`
--
ALTER TABLE `driverlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_customer`
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `trip_record`
--
ALTER TABLE `trip_record`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`truck_id`);

--
-- Indexes for table `truckowner`
--
ALTER TABLE `truckowner`
  ADD PRIMARY KEY (`truckowner_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayment`
--
ALTER TABLE `bayment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `drive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `driverlog`
--
ALTER TABLE `driverlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trip_record`
--
ALTER TABLE `trip_record`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `truck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `truckowner`
--
ALTER TABLE `truckowner`
  MODIFY `truckowner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
