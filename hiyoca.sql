-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 03:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiyoca`
--

-- --------------------------------------------------------

--
-- Table structure for table `mallen`
--

CREATE TABLE `mallen` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `nickname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mallen`
--

INSERT INTO `mallen` (`id`, `name`, `lname`, `nickname`) VALUES
(1, 'Hiyoca', 'Willa', 'sinuka'),
(2, 'Cherlyn', 'Mallen', 'cherlyn'),
(3, 'Grace', 'Fantonial', 'Gracia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mallen`
--
ALTER TABLE `mallen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mallen`
--
ALTER TABLE `mallen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
