-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 04:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `price`, `quantity`) VALUES
(7, 'sdfdsdc', 22, 2),
(8, 'asacd', 33, 1),
(9, 'as', 1, 2),
(10, 'rice', 1000, 10),
(12, 'rice and jute', 1000, 10),
(13, 'rice', 1000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phoneno`, `address`, `Password`) VALUES
(2, 'arshad', '1233211230', 'gg', '$2y$10$7ulQ32Tm/q9CAqOwDsyW8.w7Ao97IrYLfp4qA3F.Piw9E6tR7CkD6'),
(3, 'arshad shahoriar', '1233211230', 'gg', '$2y$10$Y.B5Ab7ID0fkMYYlgjKguOlz0UM6Rags39W8/mP5zl7B6uGKeqlg2'),
(5, 'arshad shahoriar13', '1233211230', 'gg', '23'),
(9, 'arshad12', '1233211230', 'gg', '$2y$10$7ulQ32Tm/q9CAqOwDsyW8.w7Ao97IrYLfp4qA3F.Piw9E6tR7CkD6'),
(15, 'arshad', '1233211230', 'gg', '$2y$10$7ulQ32Tm/q9CAqOwDsyW8.w7Ao97IrYLfp4qA3F.Piw9E6tR7CkD6'),
(17, 'arshad shahoriar', '1233211230', 'gg', '$2y$10$Y.B5Ab7ID0fkMYYlgjKguOlz0UM6Rags39W8/mP5zl7B6uGKeqlg2'),
(18, 'arshad shahoriar', '1233211230', 'gg', '$2y$10$Y.B5Ab7ID0fkMYYlgjKguOlz0UM6Rags39W8/mP5zl7B6uGKeqlg2'),
(19, 'arshad', '1233211230', 'gg', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
