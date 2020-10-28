-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 02:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garments_market_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `buyer_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `identification_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`buyer_id`, `name`, `email`, `phone`, `company_name`, `address`, `nid`, `identification_id`, `password`) VALUES
(1, 'sas', 'ask@gmail.com', 'sndfeko', 'sdnfk', 'lskfmsxlkd', 'skfn', 'slkfn', 'lkfnl'),
(2, 'dkfsklLKSND', 'DKLK@flkdnkjlf.com', 'lksdmfl', 'dlksmdfk', 'klfmoif', 'lkfcslk', 'lksdnfkl', 'lksdnfiko'),
(500, '', '', '', '', '', 'saki@gmail.com', '', 'saki');

-- --------------------------------------------------------

--
-- Table structure for table `garments_catagory`
--

CREATE TABLE `garments_catagory` (
  `gc_id` int(255) NOT NULL,
  `catagory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `garments_info`
--

CREATE TABLE `garments_info` (
  `license_id` int(250) NOT NULL,
  `gname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `catagory` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `garments_information`
--

CREATE TABLE `garments_information` (
  `license_id` int(50) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garments_information`
--

INSERT INTO `garments_information` (`license_id`, `gname`, `address`, `email`, `country`, `phone`, `website`, `password`) VALUES
(122331, 'assdds', 'adsdsas', 'sads@gmail.com', 'bd', 's11111', 'SNCJD', 'SNDJL');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logintest`
--

CREATE TABLE `logintest` (
  `id` int(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `u_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintest`
--

INSERT INTO `logintest` (`id`, `email`, `password`, `u_type`) VALUES
(1, '', 'saki', 'buyer'),
(2, 'DKLK@flkdnkjlf.com', 'lksdnfiko', 'buyer'),
(3, 's@gmail.com', '1234', 'garment'),
(4, 'sads@gmail.com', 'SNDJL', 'garment');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(64) NOT NULL,
  `product_id` int(64) DEFAULT NULL,
  `quantity` int(64) DEFAULT NULL,
  `total_price` double(64,4) DEFAULT NULL,
  `gid` int(250) DEFAULT NULL,
  `p_colour` varchar(250) DEFAULT NULL,
  `p_size` varchar(250) DEFAULT NULL,
  `buyers_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `min_order` int(255) NOT NULL,
  `price` decimal(60,0) NOT NULL,
  `size` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `garments_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` double NOT NULL,
  `colour` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `name`, `description`, `image`, `price`, `colour`, `size`) VALUES
(19, 'ass', 'asassa', '0_1603749137.png', 60, 'red,green,yollow', 'x,xl,m,l');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(255) NOT NULL,
  `ut_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`buyer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `garments_catagory`
--
ALTER TABLE `garments_catagory`
  ADD PRIMARY KEY (`gc_id`),
  ADD UNIQUE KEY `catagory_name` (`catagory_name`);

--
-- Indexes for table `garments_info`
--
ALTER TABLE `garments_info`
  ADD PRIMARY KEY (`license_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `FK_catagory` (`catagory`);

--
-- Indexes for table `garments_information`
--
ALTER TABLE `garments_information`
  ADD PRIMARY KEY (`license_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD KEY `FK_user_type` (`user_type`);

--
-- Indexes for table `logintest`
--
ALTER TABLE `logintest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `offer_id` (`product_id`),
  ADD KEY `gid` (`gid`),
  ADD KEY `buyers_id` (`buyers_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orderid` (`order_id`),
  ADD KEY `FK_productid` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `garments_id` (`garments_id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `buyer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `logintest`
--
ALTER TABLE `logintest`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `garments_info`
--
ALTER TABLE `garments_info`
  ADD CONSTRAINT `FK_catagory` FOREIGN KEY (`catagory`) REFERENCES `garments_catagory` (`catagory_name`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_admin_email` FOREIGN KEY (`email`) REFERENCES `admin` (`email`),
  ADD CONSTRAINT `FK_email` FOREIGN KEY (`email`) REFERENCES `buyers_info` (`email`),
  ADD CONSTRAINT `FK_gemail` FOREIGN KEY (`email`) REFERENCES `garments_info` (`email`),
  ADD CONSTRAINT `FK_user_type` FOREIGN KEY (`user_type`) REFERENCES `user_type` (`id`);

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`gid`) REFERENCES `garments_info` (`license_id`),
  ADD CONSTRAINT `order_info_ibfk_3` FOREIGN KEY (`buyers_id`) REFERENCES `buyers_info` (`bid`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `FK_orderid` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`),
  ADD CONSTRAINT `FK_productid` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`garments_id`) REFERENCES `garments_info` (`license_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
