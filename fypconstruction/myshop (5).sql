-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 09:22 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contact`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(14, 'Stile'),
(15, 'ABM'),
(16, 'PEC');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(19, 'Tile'),
(20, 'Sand');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `customer_id`) VALUES
(1, 'musab', 'musab@email.com', '0315241454', 'abc message', 1),
(2, 'asd', 'asd@sad.asd', 'asd', 'asd', 1),
(8, 'asd', 'asd@asdasd.asd', 'asd', 'asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(50) NOT NULL,
  `customer_country` varchar(50) NOT NULL,
  `customer_city` varchar(50) NOT NULL,
  `customer_contact` int(50) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_image` varchar(500) NOT NULL,
  `customer_ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, '', '', 'musab123', 'Pakistan', 'Karachi', 0, '', '', 0),
(4, 'saad', 'saademail.com', 'asd', 'Pakistan', 'Karachi', 2147483647, 'House 465, Block H, New Clifton ', '', 0),
(5, 'Hadeed', 'hadeed@emal.com', 'asd', 'Pakistan', 'Karachi', 315454545, 'House 465. Sector 7-D North Karachi', '', 1),
(6, 'Anas', 'anas@gmail.com', '12345678', 'Pakistan', 'Karachi', 2147483647, 'r35 block 2 ayaz town', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `due_amout` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_address` varchar(500) NOT NULL,
  `order_country` varchar(50) NOT NULL,
  `order_city` varchar(50) NOT NULL,
  `order_state` varchar(50) NOT NULL,
  `order_postcode` varchar(50) NOT NULL,
  `order_phone` varchar(50) NOT NULL,
  `order_shipping` int(50) NOT NULL,
  `order_comment` varchar(100) NOT NULL,
  `order_payment_type` varchar(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amout`, `invoice_no`, `total_products`, `order_address`, `order_country`, `order_city`, `order_state`, `order_postcode`, `order_phone`, `order_shipping`, `order_comment`, `order_payment_type`, `order_date`, `order_status`) VALUES
(35, 1, 25000, 738838487, 2, 'asda', 'Pakistan', 'dasda', 'Karachi', '234', '234234324', 0, '', 'Pay by bank wire', '2019-09-05 11:25:32', 'Compelete'),
(42, 1, 110120, 994658022, 2, 'abc', 'Pakistan', 'abc', 'Lahore', '674090', '031515454', 60, '', '', '2019-08-27 09:02:56', 'Compelete'),
(55, 1, 33000, 2034970286, 2, 'asd', 'Pakistan', 'asd', 'Karachi', 'asd', 'asd', 0, '', '', '2019-09-22 21:46:42', 'Compelete'),
(62, 1, 60000, 1684874891, 2, 'asd', 'Pakistan', 'sad', 'Karachi', 'asd', 'sad', 0, '', '', '2019-09-05 11:28:05', 'Compelete'),
(81, 1, 50000, 1670191295, 1, 'asd', 'Pakistan', 'asd', 'Karachi', 'as', 'asd', 1, '', '', '2019-09-05 11:51:04', 'Compelete'),
(82, 1, 3060, 1108549783, 1, 'asd', 'Pakistan', 'asd', 'Karachi', 'asd', 'asd', 60, '', '', '2019-09-22 21:46:50', 'Compelete'),
(83, 1, 10000, 354472826, 1, 'pioneer pc', 'Pakistan', 'Karachi', 'Karachi', '123', '03343348028', 60, '', '', '2019-09-22 21:48:17', 'Compelete'),
(84, 6, 200, 1163445683, 1, 'r35 ayaztown`', 'Pakistan', 'karachi', 'Karachi', '21212121', '22112122222222', 1, '', '', '2019-09-22 21:48:43', 'Compelete');

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

CREATE TABLE `customize` (
  `id` int(11) NOT NULL,
  `delivery_charges` varchar(50) NOT NULL,
  `free_delivery_over` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customize`
--

INSERT INTO `customize` (`id`, `delivery_charges`, `free_delivery_over`) VALUES
(1, 'SDASD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forget_pass`
--

CREATE TABLE `forget_pass` (
  `pwd_id` int(11) NOT NULL,
  `pwd_email` text NOT NULL,
  `pwd_selector` text NOT NULL,
  `pwd_token` longtext NOT NULL,
  `pwd_expires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forget_pass`
--

INSERT INTO `forget_pass` (`pwd_id`, `pwd_email`, `pwd_selector`, `pwd_token`, `pwd_expires`) VALUES
(1, 'musab@email.com', '53adf9d1b1c82d06', '$2y$10$z5AfhqW9RP4E0lwcRReYLunU1lIP.AJxhmCq7r27AWhY9CvFgm1We', '1567691766');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `product_name`, `product_price`, `product_qty`) VALUES
(27, 2, 'Gabbage', 0, 1),
(27, 14, 'DELL-8090 P3', 0, 2),
(27, 11, 'Strawberry', 0, 1),
(28, 2, 'Gabbage', 50000, 1),
(28, 16, 'Onion', 36000, 2),
(28, 14, 'DELL-8090 P3', 30000, 2),
(29, 2, 'Gabbage', 150000, 3),
(30, 11, 'Strawberry', 10000, 1),
(31, 16, 'Onion', 18000, 1),
(34, 11, 'Strawberry', 10000, 1),
(35, 11, 'Strawberry', 10000, 1),
(35, 14, 'DELL-8090 P3', 15000, 1),
(39, 16, 'Onion', 18000, 1),
(40, 15, 'asds', 20000, 1),
(40, 16, 'Onion', 36000, 2),
(40, 14, 'DELL-8090 P3', 15000, 1),
(41, 2, 'Gabbage', 50000, 1),
(41, 11, 'Strawberry', 10000, 1),
(42, 19, 'iPhone Max', 100000, 1),
(42, 11, 'Strawberry', 10000, 1),
(43, 2, 'Gabbage', 50000, 1),
(44, 2, 'Gabbage', 50000, 1),
(45, 16, 'Onion', 18000, 1),
(46, 14, 'DELL-8090 P3', 15000, 1),
(47, 2, 'Gabbage', 50000, 1),
(48, 2, 'Gabbage', 50000, 1),
(49, 2, 'Gabbage', 50000, 1),
(49, 11, 'Strawberry', 10000, 1),
(50, 11, 'Strawberry', 10000, 1),
(50, 14, 'DELL-8090 P3', 15000, 1),
(51, 14, 'DELL-8090 P3', 15000, 1),
(51, 11, 'Strawberry', 10000, 1),
(52, 11, 'Strawberry', 10000, 1),
(52, 2, 'Gabbage', 50000, 1),
(53, 11, 'Strawberry', 10000, 1),
(53, 14, 'DELL-8090 P3', 15000, 1),
(54, 11, 'Strawberry', 10000, 1),
(54, 14, 'DELL-8090 P3', 15000, 1),
(55, 14, 'DELL-8090 P3', 15000, 1),
(55, 16, 'Onion', 18000, 1),
(56, 11, 'Strawberry', 10000, 1),
(56, 16, 'Onion', 18000, 1),
(57, 2, 'Gabbage', 50000, 1),
(58, 16, 'Onion', 18000, 1),
(59, 16, 'Onion', 18000, 1),
(59, 11, 'Strawberry', 20000, 2),
(60, 11, 'Strawberry', 10000, 1),
(60, 2, 'Gabbage', 50000, 1),
(61, 2, 'Gabbage', 50000, 1),
(61, 11, 'Strawberry', 10000, 1),
(62, 2, 'Gabbage', 50000, 1),
(62, 11, 'Strawberry', 10000, 1),
(63, 2, 'Gabbage', 50000, 1),
(63, 11, 'Strawberry', 10000, 1),
(64, 2, 'Gabbage', 50000, 1),
(64, 11, 'Strawberry', 10000, 1),
(65, 2, 'Gabbage', 50000, 1),
(65, 11, 'Strawberry', 10000, 1),
(66, 14, 'DELL-8090 P3', 15000, 1),
(66, 11, 'Strawberry', 10000, 1),
(67, 11, 'Strawberry', 20000, 2),
(68, 2, 'Gabbage', 50000, 1),
(69, 11, 'Strawberry', 10000, 1),
(70, 11, 'Strawberry', 10000, 1),
(71, 11, 'Strawberry', 10000, 1),
(71, 14, 'DELL-8090 P3', 15000, 1),
(72, 11, 'Strawberry', 10000, 1),
(72, 14, 'DELL-8090 P3', 15000, 1),
(73, 2, 'Gabbage', 50000, 1),
(74, 2, 'Gabbage', 50000, 1),
(74, 14, 'DELL-8090 P3', 15000, 1),
(75, 2, 'Gabbage', 50000, 1),
(75, 14, 'DELL-8090 P3', 15000, 1),
(76, 2, 'Gabbage', 50000, 1),
(76, 11, 'Strawberry', 10000, 1),
(77, 14, 'DELL-8090 P3', 15000, 1),
(77, 11, 'Strawberry', 10000, 1),
(78, 2, 'Gabbage', 50000, 1),
(78, 11, 'Strawberry', 10000, 1),
(79, 11, 'Strawberry', 10000, 1),
(79, 14, 'DELL-8090 P3', 15000, 1),
(80, 11, 'Strawberry', 10000, 1),
(80, 2, 'Gabbage', 50000, 1),
(81, 2, 'Gabbage', 50000, 1),
(82, 18, 'Coca Nata', 3000, 1),
(83, 11, 'Strawberry', 10000, 1),
(84, 25, 'ABM Concrete M-Sand', 200, 1),
(85, 21, 'E-SC-AS-001 Flouring Tile', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `ref_no` int(50) NOT NULL,
  `code` int(50) NOT NULL,
  `payment_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 1077900139, 900, 'Bank Transfer', 234, 234324, '2019-07-12 16:55:56'),
(3, 1077900139, 900, 'Bank Transfer', 324, 342423, '2019-07-12 16:58:55'),
(4, 399959755, 1160, 'Bank Transfer', 151414, 165445, '2019-07-24 17:11:36'),
(5, 1048175408, 180, 'Bank Transfer', 432, 23432, '2019-07-24 17:12:27'),
(6, 2120691281, 400, 'Bank Transfer', 243, 2434, '2019-07-24 17:44:38'),
(7, 1862693950, 400, 'Bank Transfer', 34234, 4234324, '2019-07-24 18:28:39'),
(8, 1638490717, 3180, 'Bank Transfer', 324432, 3432432, '2019-07-24 18:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `customer_id` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(1, 1743444233, 2, 1, 'Pending'),
(1, 1087541045, 11, 2, 'Pending'),
(1, 1538073562, 14, 2, 'Pending'),
(1, 309185229, 14, 2, 'Pending'),
(1, 1776174193, 15, 1, 'Pending'),
(1, 912798977, 11, 2, 'Pending'),
(1, 695279868, 14, 1, 'Pending'),
(1, 829787293, 2, 2, 'Pending'),
(1, 2770615, 15, 4, 'Pending'),
(1, 2111966599, 15, 1, 'Pending'),
(1, 2111966599, 11, 2, 'Pending'),
(1, 861099485, 2, 2, 'Pending'),
(1, 861099485, 16, 4, 'Pending'),
(1, 1223028977, 2, 1, 'Pending'),
(1, 1938001519, 2, 1, 'Pending'),
(1, 439548111, 14, 3, 'Pending'),
(1, 1152709532, 14, 2, 'Pending'),
(1, 1701728419, 11, 2, 'Pending'),
(1, 1547312617, 14, 3, 'Pending'),
(1, 371969446, 11, 2, 'Pending'),
(1, 367921115, 11, 2, 'Pending'),
(1, 591853893, 16, 3, 'Pending'),
(1, 285863719, 11, 4, 'Pending'),
(1, 1650110058, 14, 5, 'Pending'),
(1, 888407195, 2, 3, 'Pending'),
(1, 1170375671, 11, 1, 'Pending'),
(1, 2004233096, 16, 1, 'Pending'),
(1, 596847902, 11, 3, 'Pending'),
(1, 1812042197, 11, 1, 'Pending'),
(1, 838104293, 11, 1, 'Pending'),
(1, 738838487, 14, 2, 'Pending'),
(1, 423101498, 2, 1, 'Pending'),
(1, 645547595, 2, 1, 'Pending'),
(1, 840629964, 16, 1, 'Pending'),
(1, 1624102658, 16, 1, 'Pending'),
(1, 299341488, 14, 4, 'Pending'),
(1, 54914154, 11, 2, 'Pending'),
(1, 994658022, 11, 2, 'Pending'),
(1, 1332398688, 2, 1, 'Pending'),
(1, 1589244507, 2, 1, 'Pending'),
(1, 1429692142, 16, 1, 'Pending'),
(1, 1526276416, 14, 1, 'Pending'),
(1, 1375781442, 2, 1, 'Pending'),
(1, 621295792, 2, 1, 'Pending'),
(1, 868612347, 11, 2, 'Pending'),
(1, 1499975247, 14, 2, 'Pending'),
(1, 2104135544, 11, 2, 'Pending'),
(1, 916073070, 2, 2, 'Pending'),
(1, 1783584545, 14, 2, 'Pending'),
(1, 358086467, 14, 2, 'Pending'),
(1, 2034970286, 16, 2, 'Pending'),
(1, 847342043, 16, 2, 'Pending'),
(1, 1726791320, 2, 1, 'Pending'),
(1, 1529854928, 16, 1, 'Pending'),
(1, 647259822, 11, 3, 'Pending'),
(1, 1483147596, 2, 2, 'Pending'),
(1, 353913807, 11, 2, 'Pending'),
(1, 1684874891, 11, 2, 'Pending'),
(1, 1542115567, 11, 2, 'Pending'),
(1, 822058589, 11, 2, 'Pending'),
(1, 1244698967, 11, 2, 'Pending'),
(1, 1237727857, 11, 2, 'Pending'),
(1, 742237599, 11, 2, 'Pending'),
(1, 1458801130, 2, 1, 'Pending'),
(1, 605500896, 11, 1, 'Pending'),
(1, 944232621, 11, 1, 'Pending'),
(1, 1544077248, 14, 2, 'Pending'),
(1, 562025151, 14, 2, 'Pending'),
(1, 78396840, 2, 1, 'Pending'),
(1, 1614446274, 14, 2, 'Pending'),
(1, 906858914, 14, 2, 'Pending'),
(1, 1644267518, 11, 2, 'Pending'),
(1, 700248437, 11, 2, 'Pending'),
(1, 668303140, 11, 2, 'Pending'),
(1, 382385334, 14, 2, 'Pending'),
(1, 470789645, 2, 2, 'Pending'),
(1, 1670191295, 2, 1, 'Pending'),
(1, 1108549783, 18, 1, 'Pending'),
(1, 354472826, 11, 1, 'Pending'),
(6, 1163445683, 25, 1, 'Pending'),
(6, 1810840117, 21, 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` varchar(100) NOT NULL,
  `product_img1` varchar(500) NOT NULL,
  `product_img2` varchar(500) NOT NULL,
  `product_img3` varchar(500) NOT NULL,
  `product_price` varchar(500) NOT NULL,
  `sales_price` int(11) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `qty` int(100) NOT NULL,
  `status` int(10) NOT NULL,
  `product_keyword` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `sales_price`, `product_desc`, `qty`, `status`, `product_keyword`, `count`, `rating`) VALUES
(21, 19, 14, '2019-09-21 07:55:26', 'E-SC-AS-001 Flouring Tile', 'E_SC_AS_001_20Multi_20Wood_20E_SC_AS_002_20Rustic_20Brown-Copy-150x150.jpg', 'E-SC-AS-001-Copy-150x150.jpg', 'E-SC-AS-001-Copy-150x150.jpg', '200', 222, 'E-SC-AS-001  Multi Wood Rustic Brown\r\ninches 24x24\r\nTile/Box 4', 100, 0, '', 0, 0),
(22, 19, 14, '2019-09-21 07:59:19', 'E-SC-AS-002 Flouring Tile', 'E-SC-AS-002-Rustic-Brown-Copy-150x150 2.jpg', 'E-SC-AS-002-Rustic-Brown-Copy-150x150.jpg', 'E-SC-AS-002-Rustic-Brown-Copy-150x150.jpg', '200', 222, 'E-SC-AS-002 Rustic Brown \r\ninches 24x24\r\nTile/Box 4', 100, 0, '', 0, 0),
(23, 19, 14, '2019-09-21 08:05:19', 'E-SC-AS-004 Flouring Tile', 'E-SC-AS-004-Beige-Copy-150x150 2.jpg', 'E-SC-AS-004-Beige-Copy-150x150.jpg', 'E-SC-AS-004-Beige-Copy-150x150.jpg', '200', 222, 'E-SC-AS-004 Beige Color\r\ninches 24x24\r\nTile/Box 4', 100, 0, '', 0, 0),
(24, 19, 14, '2019-09-21 08:08:50', 'E-SC-GR-003 Flouring Tile', 'Floor-3-150x150.jpg', 'E_SC_GR_003_20Brownish_20Grey_20Random_1-Copy-150x150.jpg', 'E_SC_GR_003_20Brownish_20Grey_20Random_1-Copy-150x150.jpg', '200', 222, 'E-SC-GR-003 Brownish Grey Random\r\ninches 24x24\r\nTile/Box 4', 100, 0, '', 0, 0),
(25, 20, 15, '2019-09-21 08:14:18', 'ABM Concrete M-Sand', 'GCP Concrete M-Sand - 30 Tons2.jpg', 'GCP Concrete M-Sand - 30 Tons.jpg', 'ABM Concrete M-Sand1.jpg', '200', 300, 'ABM Concrete M-Sand Ton 30', 100, 0, '', 0, 0),
(26, 20, 16, '2019-09-21 08:22:54', 'PEC Concrete M-Sand ', 'PEC Concrete M-Sand - 30 Tons1.jpg', 'PEC Concrete M-Sand - 30 Tons.jpg', 'PEC Concrete M-Sand - 30 Tons.jpg', '200', 222, 'PEC Concrete M-Sand - 30 Tons', 100, 0, '', 0, 0),
(27, 19, 14, '2019-09-21 08:28:13', 'E-MIJ-001kitchenTile', 'E-MIJ-002 KITCHEN-TILE.jpg', 'E-MIJ-002-Grey-Matt-Copy-150x150 3.jpg', 'E-MIJ-002-Motif-Grey-Matt-Copy-150x150 2.jpg', '200', 222, 'E-MIJ-002 Motif Grey Matt\r\ninches 24x24\r\nTitle/Box 4', 100, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `realstate`
--

CREATE TABLE `realstate` (
  `realstate_id` int(11) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `Property_type` varchar(50) NOT NULL,
  `Select_city` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Property_Title` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Land_area` varchar(100) NOT NULL,
  `Add_Images` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `cell_no` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `realstate_admin`
--

CREATE TABLE `realstate_admin` (
  `realstate_id` int(11) NOT NULL DEFAULT '0',
  `Purpose` varchar(100) NOT NULL,
  `Property_type` varchar(50) NOT NULL,
  `Select_city` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Property_Title` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Land_area` varchar(100) NOT NULL,
  `Add_Images` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `cell_no` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `review_title` varchar(50) NOT NULL,
  `your_review` varchar(255) NOT NULL,
  `your_name` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` date NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `pro_id`, `review_title`, `your_review`, `your_name`, `rating`, `date`, `count`) VALUES
(3, 2, 'Nice', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 'Musab', 5, '2019-08-19', 2),
(4, 2, 'sad', 'asdsa', 'asdas', 0, '2019-08-20', 3),
(9, 14, 'Appreciated', 'Very Nice Service', 'Thomas', 4, '2019-08-20', 1),
(10, 14, 'Yeah Good', 'recently i manage to order products from here service is good though', 'Arther Shelby', 2, '2019-08-20', 2),
(19, 2, 'great', 'loremipsum', 'Hamza', 3, '2019-08-20', 3),
(22, 2, 'ad', 'asd', 'sad', 0, '2019-08-23', 4),
(23, 2, 'ewr', 'ewrwre', 'ewr', 2, '2019-08-23', 5),
(24, 2, 'ewr', 'ewrwre', 'ewr', 2, '2019-08-23', 6),
(25, 11, 'asdw', 'daw', 'wd', 4, '2019-08-23', 1),
(26, 11, 'dawd', 'sadw', 'sadw', 3, '2019-08-23', 2),
(29, 18, 'sadw', 'asdw', 'asdw', 5, '2019-08-23', 1),
(30, 18, 'asdw', 'asdw', 'asdw', 3, '2019-08-23', 2),
(31, 19, 'abc', 'abc', 'aaa', 5, '2019-08-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customize`
--
ALTER TABLE `customize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forget_pass`
--
ALTER TABLE `forget_pass`
  ADD PRIMARY KEY (`pwd_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`,`brand_id`);

--
-- Indexes for table `realstate`
--
ALTER TABLE `realstate`
  ADD PRIMARY KEY (`realstate_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `realstate_admin`
--
ALTER TABLE `realstate_admin`
  ADD PRIMARY KEY (`realstate_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `customize`
--
ALTER TABLE `customize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forget_pass`
--
ALTER TABLE `forget_pass`
  MODIFY `pwd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `realstate`
--
ALTER TABLE `realstate`
  MODIFY `realstate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
