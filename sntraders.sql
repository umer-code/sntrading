-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 08:07 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sntraders`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `srno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `datee` date NOT NULL,
  `quantity` int(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `flavour` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`srno`, `name`, `datee`, `quantity`, `size`, `price`, `flavour`) VALUES
(1, 'Kurleez Catchy Ketchup-(1X36)-20', '2020-07-20', 10, '36', 30000, 'Kurleez Catchy Ketchup'),
(2, 'Kurleez Catchy Ketchup-(1X36)-20', '2020-07-20', 10, '36', 30000, 'Kurleez Catchy Ketchup'),
(3, 'Kurleez Catchy Ketchup-(1X36)-20', '2020-07-20', 10, '36', 30000, 'Kurleez Catchy Ketchup'),
(4, 'Kurleez Catchy Ketchup-(1X36)-20', '2020-07-20', 10, '36', 30000, 'Kurleez Catchy Ketchup'),
(5, 'Kurleez Salt & Paper-(1X48)-10', '2020-07-20', 100, '48', 400000, 'Kurleez Salt & Paper'),
(6, 'Kurleez Catchy Ketchup-(1X12)-50', '2020-07-28', 10, '12', 10000, 'Kurleez Catchy Ketchup'),
(7, 'Kurleez Mirch Masala-(1X48)-10', '2020-07-29', 10, '48', 40000, 'Kurleez Mirch Masala'),
(8, 'Kurleez Catchy Ketchup-(1X64)-10', '2020-07-29', 500, '64', 2500000, 'Kurleez Catchy Ketchup');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `srno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `datee` date NOT NULL,
  `quantity` int(200) NOT NULL,
  `flavour` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `shop` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `cradit` int(11) NOT NULL,
  `mt` int(11) NOT NULL,
  `expense` int(11) NOT NULL,
  `other_expense` int(11) NOT NULL,
  `shortage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`srno`, `name`, `datee`, `quantity`, `flavour`, `area`, `shop`, `amount`, `cradit`, `mt`, `expense`, `other_expense`, `shortage`) VALUES
(1, 'akhtar', '2020-07-16', 9, 'Kurleez Catchy Ketchup-(1X36)-20', 'nfc', 'Salman', 36000, 3, 233, 0, 0, 0),
(2, 'akhtar', '2020-07-29', 10, 'Kurleez Salt & Paper-(1X48)-10', 'nfc', 'Salman', 36616, 8, 200, 0, 0, 0),
(3, 'akhtar', '2028-07-20', 10, 'Kurleez Mirch Masala-(1X48)-10', 'nfc', 'Salman', 30000, 0, 0, 0, 0, 0),
(4, 'akhtar', '0000-00-00', 1, 'Kurleez Salt & Paper-(1X48)-10', 'nfc', 'Salman', 4000, 0, 0, 0, 0, 0),
(5, 'akhtar', '2020-07-29', 10, 'Kurleez Catchy Ketchup-(1X64)-10', 'nfc', 'Salman', 50000, 8, 0, 0, 0, 0),
(6, 'akhtar', '0000-00-00', 7, 'Kurleez Catchy Ketchup-(1X64)-10', 'nfc', 'Salman', 30400, 12, 100, 100, 100, 100),
(7, 'akhtar', '2020-07-29', 20, 'Kurleez Catchy Ketchup-(1X64)-10', 'nfc', 'Salman', 87300, 12, 200, 200, 200, 100),
(8, 'akhtar', '2020-07-30', 10, 'Kurleez Catchy Ketchup-(1X64)-10', 'nfc', 'Salman', 30000, 12, 200, 200, 200, 200),
(9, 'akhtar', '2020-07-30', 4, 'Kurleez Catchy Ketchup-(1X64)-10', 'nfc', 'Salman', 19600, 0, 200, 90, 0, 110),
(10, 'akhtar', '2020-07-30', 2, 'Kurleez Catchy Ketchup-(1X64)-10', 'nfc', 'Salman', 9400, 0, 200, 200, 100, 100),
(11, 'akhtar', '0000-00-00', 1, 'Kurleez Salt & Paper-(1X48)-10', 'nfc', 'Salman', 1760, 12, 0, 0, 0, 0),
(12, 'akhtar', '2020-07-30', 5, 'Kurleez Catchy Ketchup-(1X64)-10', 'nfc', 'ali store', 24544, 0, 100, 100, 134, 122);

-- --------------------------------------------------------

--
-- Table structure for table `saleman`
--

CREATE TABLE `saleman` (
  `srno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `datee` date NOT NULL,
  `vehicle` varchar(200) NOT NULL,
  `phno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saleman`
--

INSERT INTO `saleman` (`srno`, `name`, `datee`, `vehicle`, `phno`) VALUES
(1, 'akhtar', '2020-07-15', 'helicopter', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `srno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phno` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`srno`, `name`, `phno`, `sname`, `area`) VALUES
(1, 'Salman', 2147483647, 'ali', 'nfc'),
(2, 'ali store', 2147483647, 'javad', 'dha');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `srno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `crtn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`srno`, `name`, `crtn`) VALUES
(1, 'Kurleez Catchy Ketchup-(1X36)-20', 1),
(2, 'Kurleez Catchy Ketchup-(1X48)-10', 0),
(3, 'Kurleez Catchy Ketchup-(1X64)-10', 435),
(4, 'Kurleez Catchy Ketchup-(1X24)-30', 0),
(5, 'Kurleez Catchy Ketchup-(1X12)-50', 0),
(6, 'Kurleez Mirch Masala-(1X48)-10', 0),
(7, 'Kurleez Mirch Masala-(1X64)-10', 0),
(8, 'Kurleez Mirch Masala-(1X36)-20', 0),
(9, 'Kurleez Mirch Masala-(1X24)-30', 0),
(10, 'Kurleez Mirch Masala-(1X12)-50', 0),
(11, 'Kurleez Salt & Paper-(1X48)-10', 78),
(12, 'Kurleez Salt & Paper-(1X64)-10', 0),
(13, 'Kurleez Salt & Paper-(1X36)-20', 0),
(14, 'Kurleez Salt & Paper-(1X24)-30', 0),
(15, 'Kurleez Salt & Paper-(1X12)-50', 0),
(16, 'Kurleez Special salt-(1X48)-10', 0),
(17, 'Kurleez Special salt-(1X64)-10', 0),
(18, 'Kurleez Special salt-(1X36)-20', 0),
(19, 'Kurleez Special salt-(1X24)-30', 0),
(20, 'Kurleez Special salt-(1X12)-50', 0),
(21, 'Kurleez Swis cheez-(1X48)-10', 0),
(22, 'Kurleez Swis cheez-(1X64)-10', 0),
(23, 'Kurleez Swis cheez-(1X36)-20', 0),
(24, 'Kurleez Swis cheez-(1X24)-30', 0),
(25, 'Kurleez Swis cheez-(1X12)-50', 0),
(26, 'Kurleez Barbecue-(1X48)-10', 0),
(27, 'Kurleez Barbecue-(1X64)-10', 0),
(28, 'Kurleez Barbecue-(1X36)-20', 0),
(29, 'Kurleez Barbecue-(1X24)-30', 0),
(30, 'Kurleez Barbecue-(1X12)-50', 0),
(31, 'Kurleez Grek yorgert-(1X48)-10', 0),
(32, 'Kurleez Grek yorgert-(1X64)-10', 0),
(33, 'Kurleez Grek yorgert-(1X36)-20', 0),
(34, 'Kurleez Grek yorgert-(1X24)-30', 0),
(35, 'Kurleez Grek yorgert-(1X12)-50', 0),
(36, 'Peanutz Salted-(1X48)-10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `saleman`
--
ALTER TABLE `saleman`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saleman`
--
ALTER TABLE `saleman`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
