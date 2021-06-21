-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `avatar` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `profession` text DEFAULT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`, `email`, `avatar`, `phone`, `profession`, `usertype`) VALUES
(1, 'youssef Sobhy', '12345', 'yossefm2013@gmail.com', NULL, 1017553009, 'Software engineer', 'user'),
(2, 'youssefm155', '123456', 'yossefadmin@admin.com', NULL, NULL, NULL, 'admin'),
(14, 'test0', '123', '1234@yah.com', 'profileImg/IMG-5ffe31736bbdc9.07213764.jpg', NULL, NULL, 'user'),
(15, 'mizo', '12321312', 'mizo@gmi.ocm', 'profileImg/IMG-5fff0ab3b681b4.48194497.jpg', 1243124, 'oasdoasdaso', 'user'),
(16, 'sob7y', '123', 'sob7y@gmail.com', 'profileImg/IMG-5ffe4578704569.96130911.png', NULL, NULL, 'user'),
(17, '7amm', '123', '7am@g.com', 'profileImg/IMG-5ffef2a2bb96d9.66305332.jpg', NULL, NULL, 'user'),
(18, 'mohamed', '123', 'mo@yahoo.com', 'profileImg/IMG-5ffef26559e6b5.15763849.jpg', NULL, NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Dance', 'dance.jpg', 100.00),
(2, 'Cardio', 'cardio.jpg', 299.00),
(3, 'Gymnastics', 'Gym.jpg', 125.00),
(10, 'lalo', 'cardio.jpg', 1231.00),
(11, 'Zumba', 'gym.jpg', 400.00),
(12, 'dany', 'dance.jpg', 2000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
