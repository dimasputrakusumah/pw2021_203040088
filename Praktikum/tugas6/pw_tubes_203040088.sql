-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 06:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040088`
--

-- --------------------------------------------------------

--
-- Table structure for table `outfit`
--

CREATE TABLE `outfit` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outfit`
--

INSERT INTO `outfit` (`id`, `picture`, `name`, `description`, `price`, `category`) VALUES
(1, 'cargopants.png', 'Cargo Pants', 'Cargo pants are a type of trousers that have many pockets with pockets that stick out.', 'Rp.180.000', 'Pants'),
(2, 'chinopants.png', 'Chino Pants', 'are twill pants, 100% cotton. The origin of the word chino itself comes from the Chinese word, becau', 'Rp.170.000', 'Pants'),
(3, 'denimpants.png', 'Denim Pants Black', 'Jeans and Denim we can say are something different. Because Jeans are a product (pants), and Denim i', 'Rp.190.000', 'Pants'),
(4, 'coachjacketred.png', 'Coach Jacket Red', 'is one type of jacket that is on the rise among children today, the cool name of this jacket is the ', 'Rp.150.000', 'Jacket'),
(5, 'coachjacketblack.png', 'Coach Jacket Black', 'A coach jacket has a history of its own in sports. \r\nA style that develops and gets the most followe', 'Rp.160.000', 'Jacket'),
(6, 'jacketdenim.png', 'Jacket Denim', 'Denim jacket is one of a number of clothing items that make it unnecessary for the wearer to bother ', 'Rp.250.000', 'Jacket'),
(7, 'crewneckgrey.png', 'Crewneck Grey', 'Round neck or crew neck is the type of shirt that is easiest to find and is widely used. The charact', 'Rp.140.000', 'Crewneck'),
(8, 'crewneckblack.png', 'Crewneck Black', 'Crew neck is a type of shirt or sweater that has a round neckline and no collar, often worn with ano', 'Rp.140.000', 'Crewneck'),
(9, 'hoodiered.png', 'Hoodie Red', 'A hoodie is a sweatshirt with a hood. Hoodies often include gloves sewn on the bottom front, and dra', 'Rp.170.000', 'Hoodie'),
(10, 'hoodieblack.png', 'Hoodie Black', 'hoodie is a sweater that has a head cover. The word hoodie comes from English, which means hood or h', 'Rp.170.000', 'Hoodie');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(4, 'dimas', '$2y$10$fS2usUCuCYLeF97AB4qeXOA0qPvX3omB4/JnLUsjKEmVYzNzlnbKC'),
(5, 'putra', '$2y$10$ggH.I282z42ee2cbmtuhJeK7DKSeL3FULn3xgIEyoGRJIp0LKUH5C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outfit`
--
ALTER TABLE `outfit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outfit`
--
ALTER TABLE `outfit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
