-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 08:24 AM
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
-- Database: `saki_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `generated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `password`, `type`, `generated_at`) VALUES
(3, 'admin@dotapk.in', 'admin', 'admin', '2019-04-08 17:14:25'),
(4, 'admin@saki.com', 'admin@saki.com', 'admin', '2019-04-08 17:14:25'),
(5, 'user@gmail.com', 'user@gmail.com', 'user', '2019-04-08 17:17:11'),
(6, 'sender@gmail.com', 'sender@gmail.com', 'sender', '2019-04-08 17:17:11'),
(7, 'supplier@gmail.com', 'supplier@gmail.com', 'supplier', '2019-04-08 17:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `generated_at` datetime(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `generated_at`) VALUES
(5, 'unit 1 category', '2019-04-02 11:22:50.15'),
(14, 'petkar', '2019-04-03 15:20:20.08');

-- --------------------------------------------------------

--
-- Table structure for table `create_transfer`
--

CREATE TABLE `create_transfer` (
  `id` int(255) NOT NULL,
  `factory_name` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `part_number` varchar(255) NOT NULL,
  `operation_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `transportation` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `generated_at` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_transfer`
--

INSERT INTO `create_transfer` (`id`, `factory_name`, `supplier_name`, `product_name`, `part_number`, `operation_name`, `price`, `sender_name`, `transportation`, `vehicle_number`, `quantity`, `generated_at`) VALUES
(12, 'saki', 'omkar', 'tankiii', '90111', 'finishing', '100', 'priyanka', 'Road', '20100', '0', '2019-04-03 06:08:07.73'),
(15, 'saki', 'omkar', 'motor', '124560', 'weighing', '100', 'priyanka', 'Road', '20100', '80', '2019-04-03 07:14:43.27'),
(16, 'unit 1', 'omkar', 'motor3', '90111', 'finishing', '100', 'priyanka', 'Road', '20100', '530', '2019-04-03 08:51:23.14'),
(17, 'swpneel', 'vijay', 'swapneel', '6565565656565', 'cover', '90', 'sushank', 'Air', 'mh1288800', '0', '2019-04-03 09:54:27.94'),
(18, 'unit 1', 'omkar', 'swapneel new', '6565565656565', 'screen gaurd', '100', 'priyanka hh', 'Road', '20100', '10', '2019-04-03 10:51:29.52');

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE `factory` (
  `id` int(255) NOT NULL,
  `factory_name` varchar(255) NOT NULL,
  `factory_location` varchar(255) NOT NULL,
  `generated_at` datetime(1) NOT NULL DEFAULT CURRENT_TIMESTAMP(1)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`id`, `factory_name`, `factory_location`, `generated_at`) VALUES
(3, 'unit 1', 'chinchwad', '2019-04-02 11:22:23.1'),
(4, 'saki', 'Pune', '2019-04-02 11:43:10.4'),
(5, 'swpneel', 'sangali', '2019-04-03 15:20:08.9');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `operation_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `generated_at` datetime(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pressing`
--

CREATE TABLE `pressing` (
  `id` int(10) NOT NULL,
  `factory_name` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `part_number` varchar(20) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `sender_name` varchar(10) NOT NULL,
  `transportation` varchar(20) NOT NULL,
  `vehicle_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pressing`
--

INSERT INTO `pressing` (`id`, `factory_name`, `supplier_name`, `product_name`, `part_number`, `operation_name`, `quantity`, `price`, `sender_name`, `transportation`, `vehicle_number`) VALUES
(46, 'swpneel', 'vijay', 'swapneel new', '6565565656565', 'moto1', '1729', '150', 'sushank', 'Air', '20100'),
(47, 'swpneel', 'vijay', 'swapneel new', '6565565656565', 'moto2', '1729', '150', 'sushank', 'Air', '20100'),
(48, 'swpneel', 'vijay', 'swapneel new', '6565565656565', 'moto3', '90', '150', 'sushank', 'Air', '20100'),
(49, 'saki', 'vijay', 'motor3', '90111', 'sush1', '100', '230', 'sushank', 'Ship', '50000'),
(50, 'saki', 'vijay', 'motor3', '90111', 'sush2', '200', '230', 'sushank', 'Ship', '50000'),
(51, 'saki', 'vijay', 'motor3', '90111', 'sush3', '90', '230', 'sushank', 'Ship', '50000'),
(52, 'saki', 'vijay', 'motor3', '90111', 'sush4', '1000', '230', 'sushank', 'Ship', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `pressing_return`
--

CREATE TABLE `pressing_return` (
  `id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pressing_return`
--

INSERT INTO `pressing_return` (`id`, `product_name`, `operation_name`, `quantity`) VALUES
(1, 'swapneel new', 'pressing 1', '100'),
(2, 'swapneel new', 'pressing 2', '200'),
(3, 'swapneel new', 'pressing 3', '300'),
(7, 'motor3', 'press2', '90'),
(9, 'anujj', 'anuj1', '9099'),
(10, 'anujj', 'anuj2', '678');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `part_number` varchar(255) NOT NULL,
  `product_selling_price` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `generated_at` datetime(2) DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_name`, `product_name`, `product_size`, `part_number`, `product_selling_price`, `product_quantity`, `operation_name`, `price`, `generated_at`) VALUES
(9, 'unit 1 category', 'tankiii', '150mm', '90111', '890', '10', 'welding', 80, '2019-04-02 13:26:53.14'),
(10, 'unit 1 category', 'motor3', '900mm', '90111', '890', '900', 'finishing', 100, '2019-04-03 14:20:44.77'),
(11, 'unit 1 category', 'motor3', '900mm', '90111', '890', '900', 'welding', 200, '2019-04-03 14:20:44.82'),
(12, 'petkar', 'swapneel new', '500 ml', '6565565656565', '88', '800', 'screen gaurd', 100, '2019-04-03 15:22:01.90'),
(13, 'petkar', 'swapneel new', '500 ml', '6565565656565', '88', '800', 'display', 500, '2019-04-03 15:22:02.08'),
(14, 'petkar', 'swapneel new', '500 ml', '6565565656565', '88', '800', 'cover', 90, '2019-04-03 15:22:02.16'),
(15, 'unit 1 category', 'tank12', '150', '1234', '89000', '100', 'weld1', 100, '2019-04-04 16:54:35.04'),
(16, 'petkar', 'anujj', '12340', '0000', '300', '230', 'anuj1', 100, '2019-04-04 16:55:40.39'),
(17, 'petkar', 'anujj', '12340', '0000', '300', '230', 'anuj2', 100, '2019-04-04 16:55:40.54'),
(18, 'petkar', 'anujj', '12340', '0000', '300', '230', 'anuj3', 100, '2019-04-04 16:55:40.65'),
(19, 'unit 1 category', 'anujj', '150mm', '', '', '', '', 0, '2019-04-04 22:57:58.98');

-- --------------------------------------------------------

--
-- Table structure for table `receive_pressing`
--

CREATE TABLE `receive_pressing` (
  `id` int(10) NOT NULL,
  `factory_name` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_challan` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  `available_quantity` varchar(50) NOT NULL,
  `receive_quantity` varchar(50) NOT NULL,
  `minus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receive_pressing`
--

INSERT INTO `receive_pressing` (`id`, `factory_name`, `supplier_name`, `supplier_challan`, `sender_name`, `product_name`, `operation_name`, `available_quantity`, `receive_quantity`, `minus`) VALUES
(1, 'swpneel', 'vijay', '7865', 'sushank', 'swapneel new', '', '1829', '20', ''),
(2, 'swpneel', 'vijay', '6765', 'sushank', 'swapneel new', 'moto2', '1829', '50', ''),
(3, 'swpneel', 'vijay', '6765', 'sushank', 'swapneel new', 'moto2', '1829', '50', ''),
(4, 'swpneel', 'vijay', '6765', 'sushank', 'swapneel new', 'moto2', '1779', '50', '');

-- --------------------------------------------------------

--
-- Table structure for table `receive_pressing_history`
--

CREATE TABLE `receive_pressing_history` (
  `id` int(10) NOT NULL,
  `factory_name` varchar(50) NOT NULL,
  `supplier_challan` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `operation_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `available_quantity` varchar(50) NOT NULL,
  `receive_quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receive_transfer`
--

CREATE TABLE `receive_transfer` (
  `id` int(11) NOT NULL,
  `factory_name` varchar(11) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_challan` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `available_quantity` varchar(50) NOT NULL,
  `receive_quantity` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receive_transfer`
--

INSERT INTO `receive_transfer` (`id`, `factory_name`, `supplier_name`, `supplier_challan`, `product_name`, `available_quantity`, `receive_quantity`, `price`) VALUES
(22, 'saki', 'omkar', '78650000', 'tankiii', '800', '200', '100'),
(23, 'saki', 'omkar', '78650000', 'tankiii', '600', '200', '100'),
(24, 'saki', 'omkar', '78650000', 'motor', '300', '50', '100'),
(25, 'unit 1', 'omkar', '78564', 'motor3', '580', '40', '100'),
(26, 'unit 1', 'omkar', '78564', 'motor3', '540', '10', '100'),
(27, 'swpneel', 'vijay', 'vijay99', 'swapneel new', '900', '880', '90'),
(28, 'swpneel', 'vijay', 'vijay99', 'swapneel new', '20', '10', '90'),
(29, 'swpneel', 'vijay', '', 'swapneel new', '10', '10', '90'),
(30, 'unit 1', 'omkar', '', 'swapneel new', '150', '110', '100'),
(31, 'saki', 'omkar', '78564', 'motor', '250', '90', '100'),
(32, 'saki', 'omkar', '78650ui', 'tankiii', '400', '50', '100'),
(33, 'saki', 'omkar', '', 'tankiii', '350', '20', '100'),
(34, 'saki', 'omkar', '', 'tankiii', '330', '20', '100'),
(35, 'saki', 'omkar', '', 'tankiii', '310', '20', '100'),
(36, 'saki', 'omkar', '', 'tankiii', '290', '20', '100'),
(37, 'saki', 'omkar', '', 'tankiii', '270', '20', '100'),
(38, 'saki', 'omkar', '', 'tankiii', '250', '20', '100'),
(39, 'saki', 'omkar', '', 'tankiii', '230', '40', '100'),
(40, 'unit 1', 'omkar', '', 'swapneel new', '40', '10', '100'),
(41, 'saki', 'omkar', '', 'tankiii', '190', '10', '100'),
(42, 'saki', 'omkar', '', 'tankiii', '180', '180', '100'),
(43, 'saki', 'omkar', '78650000', 'motor', '160', '10', '100'),
(44, 'saki', 'omkar', '78650000', 'motor', '150', '50', '100'),
(45, 'unit 1', 'omkar', 'vijay99', 'swapneel new', '30', '20', '100'),
(46, 'saki', 'omkar', '78650ui', 'motor', '100', '20', '100');

-- --------------------------------------------------------

--
-- Table structure for table `receive_transfer_history`
--

CREATE TABLE `receive_transfer_history` (
  `id` int(10) NOT NULL,
  `factory_name` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_challan` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `available_quantity` varchar(50) NOT NULL,
  `receive_quantity` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receive_transfer_history`
--

INSERT INTO `receive_transfer_history` (`id`, `factory_name`, `supplier_name`, `supplier_challan`, `product_name`, `available_quantity`, `receive_quantity`, `price`) VALUES
(24, 'unit 1', 'omkar', 'vijay99', 'swapneel new', '30', '20', '100'),
(25, 'saki', 'omkar', '78650ui', 'motor', '100', '20', '100');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `id` int(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`id`, `sender_name`) VALUES
(1, 'priyanka'),
(2, 'sushank');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_location` varchar(255) NOT NULL,
  `supplier_description` varchar(255) NOT NULL,
  `supplier_gst` varchar(255) NOT NULL,
  `contact_person_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `generated_at` datetime(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_name`, `supplier_location`, `supplier_description`, `supplier_gst`, `contact_person_name`, `email`, `mobile`, `generated_at`) VALUES
(1, 'omkar', 'pune', 'hgfydhh', '4563', 'anuj', 'anuj@gmail.com', '9089786756', '2019-04-02 11:51:56.63'),
(2, 'vijay', 'vijay', 'vijay', 'vijay', 'vijay', 'anujbidkar8@gmail.com', '8087610967', '2019-04-03 15:23:29.54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_transfer`
--
ALTER TABLE `create_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory`
--
ALTER TABLE `factory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pressing`
--
ALTER TABLE `pressing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pressing_return`
--
ALTER TABLE `pressing_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_pressing`
--
ALTER TABLE `receive_pressing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_pressing_history`
--
ALTER TABLE `receive_pressing_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_transfer`
--
ALTER TABLE `receive_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receive_transfer_history`
--
ALTER TABLE `receive_transfer_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `create_transfer`
--
ALTER TABLE `create_transfer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `factory`
--
ALTER TABLE `factory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pressing`
--
ALTER TABLE `pressing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pressing_return`
--
ALTER TABLE `pressing_return`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `receive_pressing`
--
ALTER TABLE `receive_pressing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receive_pressing_history`
--
ALTER TABLE `receive_pressing_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receive_transfer`
--
ALTER TABLE `receive_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `receive_transfer_history`
--
ALTER TABLE `receive_transfer_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
