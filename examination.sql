-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2021 at 10:53 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `date_create` date NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `quantity`, `date_create`, `detail`) VALUES
(6, 'j3', 'samsung', 234, 1, '2021-09-15', 'san pham tuyet voi'),
(7, 'j5', 'samsung', 225, 1, '2021-09-14', 'Chiec dien thoai tuyet voi gia re va tot'),
(8, 'j3', 'samsung', 234, 1, '2021-09-15', 'san pham tuyet voi'),
(9, 'j1', 'samsung', 234, 1, '2021-09-15', 'san pham tuyet voi'),
(10, 'j3', 'samsung', 234, 1, '2021-09-15', 'san pham tuyet voi'),
(11, 'j3', 'samsung', 234, 1, '2021-09-15', 'san pham tuyet voi'),
(13, 'j65', 'samsung', 422, 1, '2021-09-09', 'Chiec dien thoai tuyet voi gia re va tot'),
(14, 'j3', 'samsung', 234, 1, '2021-09-15', 'san pham tuyet voi'),
(15, 'j12', 'samsung', 23, 1, '2021-09-02', 'yeah'),
(16, 'j12', 'samsung', 23, 1, '2021-09-02', 'yeah'),
(17, 'j3', 'samsung', 234, 1, '2021-09-15', 'san pham tuyet voi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
