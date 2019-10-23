-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 05:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `customer_Name` varchar(100) NOT NULL,
  `Customer_cell` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `customer_Name`, `Customer_cell`, `customer_address`, `customer_message`) VALUES
(0, '', 'yaseen', '03232624343', 'zczczczxczxczxczxc', 'zxczxczxczxc');

-- --------------------------------------------------------

--
-- Table structure for table `serviceadd`
--

CREATE TABLE `serviceadd` (
  `service_id` int(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_img` varchar(100) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `service_price` varchar(100) NOT NULL,
  `service_Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceadd`
--

INSERT INTO `serviceadd` (`service_id`, `service_name`, `service_img`, `service_type`, `service_price`, `service_Description`) VALUES
(1, 'asdasdasdasdasd', 'gloriajeans_chillers2.jpg', 'asdasdasdasd', 'asdasdasd', 'sadasd'),
(2, 'asdasdasdasdasd', '5ef6fac3b859bda32552555b77f147dd.jpg', 'asdasdasdasd', 'asdasdasd', 'sadasd'),
(3, 'asdasdasdasdasd', '5ef6fac3b859bda32552555b77f147dd.jpg', 'asdasdasdasd', 'asdasdasd', 'sadasd'),
(4, 'asdasdasdasdasd', '5ef6fac3b859bda32552555b77f147dd.jpg', 'asdasdasdasd', 'asdasdasd', 'sadasd'),
(5, 'asdasdasdasdasd', '5ef6fac3b859bda32552555b77f147dd.jpg', 'asdasdasdasd', 'asdasdasd', 'sadasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serviceadd`
--
ALTER TABLE `serviceadd`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serviceadd`
--
ALTER TABLE `serviceadd`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
