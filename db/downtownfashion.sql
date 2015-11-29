-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2015 at 09:29 AM
-- Server version: 5.7.9
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `downtownfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `Address`
--

CREATE TABLE `Address` (
  `ID` bigint(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Apt` text NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` text NOT NULL,
  `ZipCode` int(5) NOT NULL,
  `Country` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `men_product`
--

CREATE TABLE `men_product` (
  `ID` bigint(36) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_product`
--

INSERT INTO `men_product` (`ID`, `url`, `name`, `price`, `description`) VALUES
(1, 'img/suit1.jpg', 'black', '2.00', 'black'),
(2, 'img/suit1.jpg', 'white', '4.00', 'white'),
(3, 'img/suit1.jpg', 'black', '3.00', 'black'),
(4, 'img/suit1.jpg', 'white', '5', 'white'),
(5, 'img/suit1.jpg', 'purple', '1', 'purple'),
(6, 'img/suit1.jpg', 'purple', '1', 'purple'),
(7, 'img/suit1.jpg', 'yellow', '8', 'yellow'),
(8, 'img/suit1.jpg', 'yellow', '8', 'yellow'),
(9, 'img/suit1.jpg', 'green', '9', 'green'),
(10, 'img/suit1.jpg', 'green', '9', 'green'),
(11, 'img/suit1.jpg', 'orange', '2', 'orange'),
(12, 'img/suit1.jpg', 'orange', '2', 'orange'),
(13, 'img/suit1.jpg', 'red', '6', 'red'),
(14, 'img/suit1.jpg', 'red', '6', 'red'),
(15, 'img/suit1.jpg', 'blue', '7', 'blue'),
(16, 'img/suit1.jpg', 'blue', '7', 'blue'),
(17, 'img/suit1.jpg', 'gray', '11.00', 'gray');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(36) NOT NULL,
  `last_name` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES
('ashley', 'fagaragan', 'aloha@yahoo.com', 'lalala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Address`
--
ALTER TABLE `Address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `men_product`
--
ALTER TABLE `men_product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Address`
--
ALTER TABLE `Address`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
