-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 08:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `econstruction`
--

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE IF NOT EXISTS `property_type` (
`type_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`type_id`, `type`, `sub_type`) VALUES
(3, 'Home', 'House'),
(4, 'Home', 'Flat'),
(5, 'Home', 'Upper Portion'),
(6, 'Home', 'Lower Portion'),
(7, 'Home', 'Room'),
(8, 'Home', 'Penthouse'),
(9, 'Plots', 'Residential Plot'),
(10, 'Plots', 'Commercial Plot'),
(11, 'Plots', 'Agricultural Land'),
(12, 'Plots', 'Industrial Land'),
(13, 'Plots', 'Plot File'),
(14, 'Plots', 'Plot Form'),
(15, 'Commercial', 'Office'),
(16, 'Commercial', 'Shop'),
(17, 'Commercial', 'Warehouse'),
(18, 'Commercial', 'Factory'),
(19, 'Commercial', 'Building'),
(20, 'Commercial', 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
 ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
