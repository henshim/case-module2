-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2021 at 08:21 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_study_m2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dat_san`
--

CREATE TABLE `dat_san` (
  `id` int DEFAULT NULL,
  `ma_kh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ma_san` int DEFAULT NULL,
  `bat_dau` time DEFAULT NULL,
  `ket_thuc` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dat_san`
--

INSERT INTO `dat_san` (`id`, `ma_kh`, `ma_san`, `bat_dau`, `ket_thuc`) VALUES
(1, '1', 1, '17:15:00', '19:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int DEFAULT NULL,
  `ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sđt` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_bong`
--

CREATE TABLE `san_bong` (
  `id` int NOT NULL,
  `ten` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `san_bong`
--

INSERT INTO `san_bong` (`id`, `ten`) VALUES
(1, 'san 1'),
(2, 'san 2'),
(3, 'san 3'),
(4, 'san 4'),
(5, 'san 5'),
(6, 'san 6'),
(7, 'san 7'),
(8, 'san 8');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `user`, `password`) VALUES
(1, 'hieu', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_san`
--
ALTER TABLE `dat_san`
  ADD PRIMARY KEY (`ma_kh`),
  ADD KEY `ma_san` (`ma_san`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD KEY `ten` (`ten`);

--
-- Indexes for table `san_bong`
--
ALTER TABLE `san_bong`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dat_san`
--
ALTER TABLE `dat_san`
  ADD CONSTRAINT `dat_san_ibfk_1` FOREIGN KEY (`ma_san`) REFERENCES `san_bong` (`id`);

--
-- Constraints for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `khach_hang_ibfk_1` FOREIGN KEY (`ten`) REFERENCES `dat_san` (`ma_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
