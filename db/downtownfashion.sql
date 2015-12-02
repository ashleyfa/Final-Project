-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2015 at 04:05 AM
-- Server version: 5.7.9
-- PHP Version: 5.5.27

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
-- Table structure for table `men_product`
--

CREATE TABLE `men_product` (
  `product_id` int(36) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(36,0) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_product`
--

INSERT INTO `men_product` (`product_id`, `url`, `name`, `price`, `description`) VALUES
(1, 'img/suit1.jpg', 'Black Suit with Gold Tie', '93', 'Black Suit with Gold Tie'),
(2, 'img/suit2.jpg', 'Black Suit with Teal Tie', '99', 'Black Suit with Teal Tie'),
(3, 'img/suit3.jpg', 'Black Suit no Tie', '85', 'Black Suit no Tie'),
(4, 'img/suit4.jpg', 'Black and White Tie', '86', 'Black and White Tie'),
(5, 'img/suit5.jpg', 'Blue Suit Stripped Tie', '94', 'Blue Suit Stripped Tie'),
(6, 'img/suit6.jpg', 'Blue Suit Brown Tie', '97', 'Blue Suit Brown Tie');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datepurchase` varchar(36) NOT NULL,
  `totalprice` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_num`, `user_id`, `datepurchase`, `totalprice`) VALUES
(1, 1, 'December 1, 2015', '99');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_num`, `user_id`, `product_id`, `category`) VALUES
(1, 1, 2, 'men_product');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(36) NOT NULL,
  `first_name` varchar(36) NOT NULL,
  `last_name` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'ashley', 'fagaragan', 'aloha@yahoo.com', 'lalala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `men_product`
--
ALTER TABLE `men_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_num`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `men_product`
--
ALTER TABLE `men_product`
  MODIFY `product_id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
