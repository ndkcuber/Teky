-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 02:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teky`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `fullname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `banned` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`fullname`, `username`, `password`, `role`, `ip`, `banned`, `user_id`, `reg_date`) VALUES
('ndkcuber', 'ndkcuber', '$2y$10$SLtzW23c/yDuob5c9PkEvehAT.iyhVE4WwcRAd9aHXcxw7VKElh22', 'Admin', '::1', 0, '1', '2022-12-10'),
('ads1', 'a2sd', '$2y$10$Yytfwf5A2NhbmDoXQ2NXMuD/LWb.KGdyrL769gFfqndI5QhyyLI/q', 'Admin', '::1', 0, '2', '2022-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` text NOT NULL DEFAULT 'unknown',
  `product_price` int(255) NOT NULL DEFAULT 0,
  `product_stock` int(255) NOT NULL DEFAULT 0,
  `product_des_short` text NOT NULL DEFAULT 'unknown',
  `product_des_long` text NOT NULL DEFAULT 'unknown',
  `product_author` text NOT NULL DEFAULT 'unknown',
  `product_id` varchar(999) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_price`, `product_stock`, `product_des_short`, `product_des_long`, `product_author`, `product_id`) VALUES
('RTX 4090ti', 2000, 982, 'real 4090ti riel !! ', 'look at this nigga omg real rtx 4090ti bitcoin miner halah 2022 free hot 2000 !!!@#!@#!@#!@#', 'ndkcuber', '1'),
('Dong Kha sieu dep tr', 2147483647, 2147483647, 'me may beo', 'me may beo me may beo me may beo me may beo me may beo me may beo me may beo me may beo me may beo me may beo me may beo me may beome may beome may beo me may beo me may beo me may beo me may beo me may beome may beome may beome may beome may beome may beome may beome may beo', 'ndkcuber', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
