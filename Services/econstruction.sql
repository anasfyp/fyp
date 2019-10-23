-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 09:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `econstruction`
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
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
  `realstate_id` int(11) NOT NULL DEFAULT 0,
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

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
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `serviceadd`
--
ALTER TABLE `serviceadd`
  ADD PRIMARY KEY (`service_id`);

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
-- AUTO_INCREMENT for table `serviceadd`
--
ALTER TABLE `serviceadd`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
