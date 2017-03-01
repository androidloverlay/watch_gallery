-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 03:46 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thewatchgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `payment_account` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=2340;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `status`, `created_date`, `modified_date`, `payment_account`) VALUES
(18, 'Arker', 'ar@gmail.com', 123456, 'Tarmwe', 0, '2017-01-11 00:51:51', '2017-01-11 00:51:51', 2147483647),
(19, 'Wira', 'we@gmail.com', 789456, 'Mayangone', 0, '2017-01-11 00:52:17', '2017-01-11 00:52:17', 2147483647),
(20, 'AungMyint', 'am@gmail.com', 9789, 'Sangchaung', 0, '2017-01-11 16:09:05', '2017-01-11 16:09:05', 1210000),
(21, 'wewe', 'wewe', 222, 'we', 0, '2017-01-12 00:29:46', '2017-01-12 00:29:46', 2147483647),
(22, 'ew', 'ew', 0, 'ew', 0, '2017-01-12 00:32:57', '2017-01-12 00:32:57', 2147483647),
(23, 'ar', 'ar', 0, 'ar', 0, '2017-01-12 00:45:20', '2017-01-12 00:45:20', 123),
(24, 'sd', 'sd', 0, 'sd', 0, '2017-01-27 09:33:01', '2017-01-27 09:33:01', 0),
(25, 'd', 'd', 0, 'd', 0, '2017-01-27 19:30:20', '2017-01-27 19:30:20', 0),
(26, 'Aung Min Tun', 'aungmintun@gmail.com', 223232, 'botahtaung ', 0, '2017-01-28 10:52:17', '2017-01-28 10:52:17', 25555),
(27, 'AAA', 'AAA', 1234, 'Yangon', 0, '2017-01-31 23:50:56', '2017-01-31 23:50:56', 5678),
(28, 'we', 'we@gmail.com', 2222, 'yangon', 0, '2017-02-01 12:29:33', '2017-02-01 12:29:33', 3333);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
`id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1820;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`) VALUES
(24, 18, 10023, 1),
(25, 19, 10024, 1),
(26, 20, 10019, 1),
(27, 21, 10023, 1),
(28, 22, 10024, 1),
(29, 0, 10019, 1),
(30, 0, 10019, 1),
(31, 23, 10019, 1),
(32, 24, 10027, 1),
(33, 25, 10024, 1),
(34, 26, 10036, 2),
(35, 26, 10030, 1),
(36, 27, 10030, 1),
(37, 28, 10029, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminregister`
--

CREATE TABLE IF NOT EXISTS `tbl_adminregister` (
`AdminID` int(20) NOT NULL,
  `AdminName` varchar(50) NOT NULL,
  `Passwords` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=2730;

--
-- Dumping data for table `tbl_adminregister`
--

INSERT INTO `tbl_adminregister` (`AdminID`, `AdminName`, `Passwords`) VALUES
(1, 'a', 'a'),
(2, 'amt', 'amt'),
(3, 'abc', 'abc'),
(4, 'admin', 'admin'),
(5, 'tester', 'tester'),
(6, 'controller', 'controladmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `CategoryName` varchar(50) NOT NULL,
  `CategoryDescription` varchar(255) NOT NULL,
`CategoryID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1260;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`CategoryName`, `CategoryDescription`, `CategoryID`) VALUES
('EMPORIO ARMANI', 'EMPORIO ARMANI', 1),
('CITIZEN', 'CITIZEN', 2),
('DKNY', 'DKNY', 3),
('FOSSIL', 'FOSSIL', 4),
('G-SHOCK', 'G-SHOCK', 5),
('GUESS', 'GUESS', 6),
('MICHAEL KORS', 'MICHAEL KORS', 7),
('RADO', 'RADO', 8),
('ROTARY', 'ROTARY', 9),
('TISSOT', 'TISSOT', 10),
('Alexander', 'Japan', 11),
('dfsddf', 'fdsf', 12),
('FOX', 'FOX', 13),
('Testingm ', 'Testing', 14),
('DUMP', 'DUMP', 15),
('NEW CATEGORY', 'NEW', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
`CustomerID` int(20) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Passwords` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1638;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`CustomerID`, `CustomerName`, `Address`, `Phone`, `Email`, `Passwords`) VALUES
(1, 'Arker', 'Tarmwe', '0123456', 'ar@gmail.com', 'ar'),
(2, 'Wira', 'Mayangone', '0789456', 'we@gmail.com', 'we'),
(3, 'AungMyint', 'Sangchaung', '9789', 'am@gmail.com', 'am'),
(4, 'LIAM', 'Brisbane', '08332 687 677', 'liam@gmail.com', 'liam'),
(5, 'aung', 'Yangon', '012838494', 'aung@gmail.com', '11111111'),
(6, 'aung', 'aung', 'aung', 'aung', 'aung'),
(7, 'aa', 'aa', 'aa', 'aa', 'aa'),
(8, 'tester', 'hhd', 'dffd', 'tester@gmail.com', 'tester'),
(9, 'Wira', 'Myangone', '0789456', 'we@gmail.com', 'we'),
(10, 'Aung Min Tun', 'Yangon', '12345678', 'aungmintun@gmail.com', 'aungmintun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
`ProductID` int(20) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ModelNo` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Image` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10042 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=1170;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`ProductID`, `ProductName`, `ModelNo`, `Price`, `Category`, `Image`) VALUES
(10027, 'CITIZEN', 'CITIZEN', '300000', '2', 'CX12.jpg'),
(10028, 'EMPORIO ARMANI', 'EMPORIO ARMANI', '720000', '1', 'AX3.jpg'),
(10029, 'DKNY', 'DKNY', '380000', '3', 'DK1.jpg'),
(10030, 'MICHAEL KORS', 'MICHAEL KORS', '540000', '7', 'MI2.jpg'),
(10031, 'RADO', 'RADO', '630000', '8', 'RA3.jpg'),
(10033, 'TISSOT', 'TISSOT', '730000', '10', 'TI1.png'),
(10034, 'GUESS', 'GUESS', '490000', '6', 'GU1.jpg'),
(10035, 'FOSSIl', 'FOSSIL', '660000', '4', 'FO13.jpg'),
(10036, 'G-SHOCK', 'G-SHOCK', '340000', '5', 'G111.png'),
(10037, 'CITIZEN', 'CITIZEN', '300000', '2', 'P17716387.jpg'),
(10038, 'update', 'update', '120000', '13', 'G112.png'),
(10039, 'DKNY', 'DKNY', '350000', '3', 'DK3.jpg'),
(10041, 'AAAA', 'SSSS', '1111', '16', 'P16798936.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_adminregister`
--
ALTER TABLE `tbl_adminregister`
 ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
 ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
 ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_adminregister`
--
ALTER TABLE `tbl_adminregister`
MODIFY `AdminID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
MODIFY `CustomerID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
MODIFY `ProductID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10042;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
