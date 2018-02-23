-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 11:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testserver`
--

-- --------------------------------------------------------

--
-- Table structure for table `serverstatus`
--

CREATE TABLE `serverstatus` (
  `id` int(4) NOT NULL,
  `website_name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serverstatus`
--

INSERT INTO `serverstatus` (`id`, `website_name`, `status`, `date`) VALUES
(1, 'www.bigperl.com', 'SERVER-LIVE', '2018-02-23'),
(2, 'www.woof.co.in', 'SERVER-LIVE', '2018-02-23'),
(3, 'www.abadhya.com/abadhyaweb/', 'SERVER-LIVE', '2018-02-23'),
(4, 'www.google.co.in', 'SERVER-LIVE', '2018-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `webservices`
--

CREATE TABLE `webservices` (
  `id` int(4) NOT NULL,
  `websitename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webservices`
--

INSERT INTO `webservices` (`id`, `websitename`) VALUES
(1, 'www.bigperl.com'),
(2, 'www.woof.co.in'),
(3, 'www.abadhya.com/abadhyaweb/'),
(4, 'www.google.co.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serverstatus`
--
ALTER TABLE `serverstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webservices`
--
ALTER TABLE `webservices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serverstatus`
--
ALTER TABLE `serverstatus`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `webservices`
--
ALTER TABLE `webservices`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
