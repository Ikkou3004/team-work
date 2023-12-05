-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 05:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `tenloai`) VALUES
(1, 'Ví da'),
(2, 'Cà vạt'),
(3, 'Thắt lưng'),
(4, 'Lắc tay'),
(5, 'Nhẫn'),
(6, 'PHỤ KIỆN'),
(7, 'Quần Jogger'),
(8, 'Quần Jean'),
(9, 'Quần Kaki'),
(10, 'Quần Short'),
(11, 'QUẦN'),
(12, 'Áo T-Shirt'),
(13, 'Áo sơ mi'),
(14, 'Áo thun'),
(15, 'Áo Blazer'),
(16, 'ÁO');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` double DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(7, 'quan jean', 10000000, 'quan-jean-rach-nam-5-1.jpg', 'pqweerr', 10, 16),
(8, 'Áo sơ mi', 1000000, 'fashion_women.jpg', 'áo so mi', 9, 16),
(9, 'Quần jogger rách', 1000000, 'jean.jpg', 'qqqqq', 8, 16),
(10, 'Quần jean rách', 1000000, 'jean.jpg', '', 7, 15),
(15, 'Quần jogger xanh', 1007789, 'jean.jpg', '', 0, 11),
(16, 'aos jean', 33333333, 'fashion_women.jpg', 'lllll', 0, 16),
(18, 'Quần kaki nau', 800000, 'quan-kaki-nau.jpg', 'qqqq', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'phuceptrai', '147852369', 'phhucvan@gmail.com', NULL, NULL, 0),
(32, 'datbi', '1236988547', 'datfuho@gmail.com', NULL, NULL, 0),
(33, 'phuc', '123', 'lethithanhngoc69@gmail.com', NULL, NULL, 1),
(34, 'dat', '123', 'phuchuynhqn77@gmail.com', NULL, NULL, 0),
(35, 'phuc2', '123', 'phuchuynhqn77@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
