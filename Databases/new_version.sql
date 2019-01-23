-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 09:39 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_version`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Item 1', '1.png', 40.00),
(2, 'Item 2', '2.png', 50.00),
(3, 'Item 3', '3.png', 100.00),
(4, 'Item 4', '4.png', 130.00),
(5, 'Item 5', '5.png', 170.00),
(6, 'Item 6', '6.png', 210.00),
(7, 'Item 7', '7.png', 240.00),
(8, 'Item 8', '8.png', 260.00),
(9, 'Item 9', '9.png', 300.00),
(10, 'Item 10', '10.png', 340.00),
(11, 'Item 11', '11.png', 390.00),
(12, 'Item 12', '12.png', 410.00),
(13, 'Item 13', '13.png', 440.00),
(14, 'Item 14', '14.png', 460.00),
(15, 'Item 15', '15.png', 520.00),
(16, 'Item 16', '16.png', 550.00),
(17, 'Item 17', '17.png', 600.00),
(18, 'Item 18', '18.png', 620.00),
(19, 'Item 19', '19.png', 650.00),
(20, 'Item 20', '20.png', 670.00),
(21, 'Item 21', '21.png', 60.00),
(22, 'Item 22', '22.png', 80.00),
(23, 'Item 23', '23.png', 140.00),
(24, 'Item 24', '24.png', 190.00),
(25, 'Item 25', '25.png', 330.00),
(26, 'Item 26', '26.jpg', 680.00),
(27, 'Item 27', '27.jpg', 700.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
