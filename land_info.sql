-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 09:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jomiseba`
--

-- --------------------------------------------------------

--
-- Table structure for table `land_info`
--

CREATE TABLE `land_info` (
  `No.` int(100) NOT NULL,
  `lid` varchar(10) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  `tax` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `psnum` int(11) NOT NULL,
  `bsnum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land_info`
--

INSERT INTO `land_info` (`No.`, `lid`, `owner`, `email`, `type`, `tax`, `address`, `district`, `amount`, `psnum`, `bsnum`) VALUES
(1, 'LID100', 'Mr. Forhad Alam', 'forhad121@yahoo.com', 'Bought', 'Clear', 'Badda', 'Dhaka', '2', 203, 504),
(2, 'LID201', 'Mr. Swapon', 'swapon201@yahoo.com', 'Bought', 'Clear', 'Uttara', 'Dhaka', '3', 603, 222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `land_info`
--
ALTER TABLE `land_info`
  ADD PRIMARY KEY (`No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `land_info`
--
ALTER TABLE `land_info`
  MODIFY `No.` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
