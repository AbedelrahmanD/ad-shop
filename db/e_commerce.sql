-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `company_enabled` tinyint(4) NOT NULL,
  `company_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ' '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_enabled`, `company_image`) VALUES
(1, 'company1', 1, '  ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `productColorsId` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1,2,3,4',
  `product_category_id` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL DEFAULT 1,
  `company_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `product_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  `product_price` double NOT NULL,
  `product_price_discount` double NOT NULL,
  `product_description` text NOT NULL,
  `product_enabled` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `productColorsId`, `product_category_id`, `product_type_id`, `company_id`, `product_name`, `product_image`, `product_price`, `product_price_discount`, `product_description`, `product_enabled`) VALUES
(1, '4,2,3', 2, 1, 1, 'product1', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(2, '1,2,3,4', 2, 1, 1, 'product2', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(3, '1,2,3,4', 2, 1, 1, 'product3', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(4, '1,2,3,4', 3, 1, 1, 'product4', 'back_end\\upload\\products\\image3.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(5, '1,2,3,4', 2, 2, 3, 'product5', 'back_end\\upload\\products\\image2.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(6, '1,2,3,4', 1, 6, 1, 'product6', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(7, '1,2,3,4', 3, 5, 1, 'product7', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(8, '1,2,3,4', 3, 5, 1, 'product8', 'back_end\\upload\\products\\image2.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(9, '1,2,3,4', 3, 3, 1, 'product9', 'back_end\\upload\\products\\image3.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(10, '1,2,3,4', 3, 3, 1, 'product10', 'back_end\\upload\\products\\image2.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(11, '1,2,3,4', 3, 3, 1, 'product11', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(12, '1', 1, 3, 1, 'product12', 'back_end\\upload\\products\\image2.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(13, '3', 1, 3, 1, 'product13', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(14, '1,2,3,4', 3, 1, 1, 'product14', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(15, '1,2,3,4', 2, 1, 1, 'product15', 'back_end\\upload\\products\\image1.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(16, '1,2,3,4', 2, 1, 1, 'product16', 'back_end\\upload\\products\\image3.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(17, '1,2,3,4', 2, 5, 3, 'product17', 'back_end\\upload\\products\\image2.png', 50, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(18, '1,2,3,4', 2, 4, 1, 'product18', 'back_end\\upload\\products\\image1.png', 50, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(19, '1,2,3,4', 2, 3, 1, 'product19', 'back_end\\upload\\products\\image1.png', 50, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(20, '1,2,3,4', 2, 3, 1, 'product20', 'back_end\\upload\\products\\image2.png', 50, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(21, '1,2,3,4', 2, 1, 1, 'product21', 'back_end\\upload\\products\\image3.png', 50, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(22, '1,2,3,4', 2, 4, 1, 'product22', 'back_end\\upload\\products\\image2.png', 50, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(23, '1,2,3,4', 2, 4, 1, 'product23', 'back_end\\upload\\products\\image1.png', 50, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(24, '1,2,3,4', 2, 4, 1, 'product24', 'back_end\\upload\\products\\image2.png', 50, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(25, '1,4', 1, 1, 1, 'product25', ' ', 70, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(26, '3,4', 1, 1, 1, 'product26', ' ', 60, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(31, '1,2,3,4', 1, 6, 1, 'product31', ' ', 40, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1),
(32, '1,2,3,4', 1, 6, 1, 'product32', ' ', 80, 60, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium magnam sequi magni cumque nam sed soluta saepe expedita quod', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productcolors`
--

CREATE TABLE `productcolors` (
  `productColorsId` int(11) NOT NULL,
  `productColorsName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcolors`
--

INSERT INTO `productcolors` (`productColorsId`, `productColorsName`) VALUES
(1, '\0\0\0B\0\0\0l\0\0\0a\0\0\0c\0\0\0k'),
(2, '\0\0\0R\0\0\0e\0\0\0d'),
(3, '\0\0\0B\0\0\0l\0\0\0u\0\0\0e'),
(4, '\0\0\0G\0\0\0r\0\0\0e\0\0\0e\0\0\0n');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL,
  `product_category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_category_enabled` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_enabled`) VALUES
(1, 'men', 1),
(2, 'women', 1),
(3, 'kids', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type_id` int(11) NOT NULL,
  `product_type_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type_type`) VALUES
(1, 'Shoes'),
(2, 'Glasses'),
(3, 'Watch'),
(4, 'Bag'),
(5, 'Hat'),
(6, 'Belt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `productcolors`
--
ALTER TABLE `productcolors`
  ADD PRIMARY KEY (`productColorsId`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `productcolors`
--
ALTER TABLE `productcolors`
  MODIFY `productColorsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
