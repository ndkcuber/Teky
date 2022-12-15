-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 01:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
  `ip` varchar(50) NOT NULL,
  `banned` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`fullname`, `username`, `password`, `role`, `ip`, `banned`, `user_id`, `reg_date`) VALUES
('Nguyễn Đông Kha', 'ndkcuber', '$2y$10$13L5.uXOD9rpYKkL8KQm3.laEP/5MMvkibVdX.fP7gC.k7xfbUpxW', 'Customer', '::1', 0, '1', '2022-12-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
