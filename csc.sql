-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 02:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc`
--

-- --------------------------------------------------------

--
-- Table structure for table `choose`
--

CREATE TABLE `choose` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `naumber` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choose`
--

INSERT INTO `choose` (`id`, `name`, `naumber`) VALUES
(1, 'food', 1),
(2, 'food2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `type`, `name`) VALUES
(1, 1, 'Apple'),
(2, 1, 'Lemon'),
(3, 1, 'WaterMelon'),
(4, 2, 'potato'),
(5, 2, 'onion'),
(6, 2, 'cucumber'),
(7, 3, 'spinach'),
(8, 3, 'nana');

-- --------------------------------------------------------

--
-- Table structure for table `item_num`
--

CREATE TABLE `item_num` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `user` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_num`
--

INSERT INTO `item_num` (`id`, `item`, `quantity`, `user`) VALUES
(1, 'Apple', '20', 4),
(2, 'Orang', '50', 4),
(3, 'Apple', '10', 4),
(4, 'Tomato', '40', 4),
(5, 'Orang', '60', 4),
(6, 'Tomato', '20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `id` int(10) NOT NULL,
  `item` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `user` int(10) DEFAULT NULL,
  `buy` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`id`, `item`, `quantity`, `user`, `buy`) VALUES
(4, 'lemon', 15, 13, 5),
(5, 'lemon', 15, 13, 5),
(6, 'Lemon', 20, 4, 5),
(7, 'Carrots', 10, 4, 5),
(8, 'Apple', 9, 4, 5),
(9, 'Apple', 9, 4, 5),
(10, 'Apple', 9, 4, 5),
(11, 'Apple', 9, 4, 5),
(12, 'nana', 100, 13, 11),
(13, 'lemon', 15, 13, 11),
(14, 'kosa', 100, 4, 11),
(15, 'Orange', 40, 4, 11),
(16, 'Spanich', 3, 10, 5),
(17, 'melon', 3, 13, 5),
(18, 'Spanich', 3, 10, 5),
(19, 'Orange', 40, 4, 5),
(20, 'Orange', 40, 4, 5),
(21, 'Lemon', 20, 4, 5),
(22, 'Carrots', 10, 4, 5),
(23, 'Carrots', 10, 4, 5),
(24, 'Lemon', 20, 4, 11),
(25, 'Lemon', 20, 4, 12),
(26, 'Lemon', 20, 4, 5),
(27, 'Lemon', 20, 4, 12),
(28, 'Lemon', 20, 4, 4),
(29, 'Carrots', 10, 4, 4),
(30, 'tomato', 100, 10, 4),
(31, 'Lemon', 20, 4, 5),
(32, 'WaterMelon', 7, 4, 4),
(33, 'Lemon', 20, 4, 14),
(34, 'Lemon', 20, 4, 14),
(35, 'Apple', 9, 4, 14),
(36, 'Apple', 63521, 4, 4),
(37, 'tomato', 1000, 4, 11),
(38, 'Lemon', 20, 4, 12),
(39, 'Lemon', 20, 4, 12),
(40, 'ss', 6, 4, 12),
(41, 'Orange', 40, 4, 12),
(42, 'tomato', 1000, 4, 12),
(43, 'tomato', 1000, 4, 12),
(44, 'Apple', 63521, 4, 12),
(45, 'rrrrrrrrr', 5555, 4, 12),
(46, 'Lemon', 20, 4, 12),
(47, 'tomato', 100, 13, 12),
(48, 'Lemon', 5, 4, 4),
(49, 'Lemon', 5, 4, 12),
(50, 'Apple', 10, 4, 12),
(51, 'Lemon', 5, 4, 12),
(52, 'WaterMelon', 10, 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'fruits'),
(2, 'vegatable'),
(3, 'papers');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `tax_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`, `tax_number`) VALUES
(4, 'Seller_1', 'eyadalbaik01@gmail.com', '123', 'admin', '123'),
(10, 'Seller_2', 'ahamd@gmail.com', '123', 'admin', '123'),
(11, 'Rami', 'rami@gmail.com', '123', 'user', '0'),
(12, 'mohammad', 'mohammad@gmail.com', '123', 'user', '0'),
(13, 'Seller_3', 'abdullah@gmail.com', '123', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `statuss` varchar(10) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `user` int(10) DEFAULT NULL,
  `sales` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ve`
--

INSERT INTO `ve` (`id`, `name`, `price`, `image`, `description`, `statuss`, `quantity`, `code`, `user`, `sales`) VALUES
(121, 'Lemon', '5000', '', 'Grade C', 'Sold', '5', 'Lemon', 4, 5),
(123, 'Lemon', '50000', '', 'Grade B', 'Sold', '50', 'Lemon', 4, 50),
(124, 'WaterMelon', '4000', '', 'Grade A', 'Available', '7', 'WaterMelon', 4, 0),
(125, 'Apple', '70000', '', 'Grade A', 'Available', '70', 'Apple', 10, 0),
(126, 'Mint', '500', '', 'Grade A', 'Available', '1', 'Mint', 10, 0),
(127, 'WaterMelon', '10000', '', 'Grade B', 'Available', '10', 'WaterMelon', 10, 0),
(128, 'Lemon', '70000', '', 'Grade B', 'Available', '70', 'Lemon', 10, 0),
(129, 'Lemon', '10000', '', 'Grade C', 'Available', '10', 'Lemon', 10, 0),
(130, 'Apple', '20000', '', 'Grade B', 'Available', '20', 'Apple', 10, 0),
(131, 'Apple', '10000', '', 'Grade A', 'Available', '10', 'Apple', 4, 0),
(132, 'Apple', '20000', '', 'Grade B', 'Available', '20', 'Apple', 4, 0),
(133, 'WaterMelon', '40000', '', 'Grade B', 'Available', '50', 'WaterMelon', 4, 0),
(134, 'Lemon', '10000', '', 'Grade A', 'Available ', '10', 'Lemon', 4, 0),
(135, 'Lemon', '20000', '', 'Grade B', 'Available', '20', 'Lemon', 13, 0),
(136, 'Apple', '10000', '', 'Grade A', 'Available', '10', 'Apple', 13, 0),
(137, 'Mint', '100', '', 'Grade A', 'Available', '1', 'Mint', 13, 0),
(138, 'Lemon', '4000', '', 'Grade A', 'Available', '4', 'Lemon', 13, 0),
(139, 'Apple', '7000', '', 'Grade A', 'Sold', '7', 'Apple', 4, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choose`
--
ALTER TABLE `choose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_num`
--
ALTER TABLE `item_num`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choose`
--
ALTER TABLE `choose`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item_num`
--
ALTER TABLE `item_num`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
