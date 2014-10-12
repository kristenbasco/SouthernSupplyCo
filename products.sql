-- phpMyAdmin SQL Dump
-- version 4.2.4
-- http://www.phpmyadmin.net
--
-- Host: sulley.cah.ucf.edu
-- Generation Time: Oct 12, 2014 at 05:03 PM
-- Server version: 5.5.38-0ubuntu0.12.04.1
-- PHP Version: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `YOURNID`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(5) NOT NULL DEFAULT '0',
  `productName` varchar(30) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `category` varchar(15) DEFAULT NULL,
  `SKU` int(5) DEFAULT NULL,
  `stock` int(4) DEFAULT NULL,
  `cost` decimal(3,2) DEFAULT NULL,
  `price` decimal(3,2) DEFAULT NULL,
  `salePrice` decimal(3,2) DEFAULT NULL,
  `productImage` varchar(30) DEFAULT NULL,
  `rating` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `description`, `category`, `SKU`, `stock`, `cost`, `price`, `salePrice`, `productImage`, `rating`) VALUES
(1, '2x4x8 Whitewood Stud', 'A standard pine 2"x4"x8'' board used in construction.', 'softwood', 157, 453, '2.00', '3.15', '3.00', 'img/products/1.jpg', 5),
(2, '50lb Concrete', 'A 50lb bag of ready-to-mix concrete.', 'concrete', 5763, 275, '2.00', '2.48', NULL, 'img/products/2.jpg', 5),
(3, '80lb Concrete', 'An 80lb bag or ready-to-mix concrete.', 'concrete', 5543, 123, '3.00', '3.95', NULL, 'img/products/3.jpg', 4),
(4, '50lb Fast-Setting Concrete', 'A 50lb bag of Fast-Setting Concrete', 'concrete', 2646, 120, '4.00', '4.98', NULL, 'img/products/4.jpg', 3),
(5, '80lb ProFinish Concrete', 'An 80lb bag of ProFinish Concrete', 'concrete', 24564, 80, '5.00', '5.18', NULL, 'img/products/5.jpg', 4),
(6, '50lb All-Purpose Sand', 'A 50lb bag of All-Purpose Sand', 'concrete', 5464, 58, '3.00', '3.98', NULL, 'img/products/6.jpg', 5),
(7, '60lb Gray Mortar Repair Mix', 'A 60lb bag of Gray Mortar Repair Mix', 'concrete', 45646, 57, '4.50', '5.15', NULL, 'img/products/7.jpg', 3),
(8, '47lb Portland Cement', 'A 47lb bag of Portland Cement.', 'concrete', 1561, 79, '5.00', '5.47', NULL, 'img/products/8.jpg', 3),
(9, '10lb Concrete Mix', 'A 10lb bag of Concrete Mix', 'concrete', 4566, 98, '2.00', '2.26', NULL, 'img/products/9.jpg', 4),
(10, '10lb Gray Mortar Repair Mix', 'A 10lb bag of Gray Mortar Repair Mix', 'concrete', 15644, 78, '2.00', '2.17', NULL, 'img/products/10.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`productID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
