-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 11:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animefigurineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phone` varchar(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `AnimeCharacter` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Quality` varchar(255) DEFAULT NULL,
  `ShippingMethod` varchar(255) DEFAULT NULL,
  `TotalPrice` decimal(10,2) DEFAULT NULL,
  `Information` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `FullName`, `Address`, `Phone`, `Email`, `AnimeCharacter`, `Quantity`, `Quality`, `ShippingMethod`, `TotalPrice`, `Information`) VALUES
(9, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Son Goku (Adult Base)', 1, 'Regular', 'Standard', 1550.00, ''),
(12, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Sasuke (Kid)', 1, 'Limited', 'Express', 3100.00, ''),
(13, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(14, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(16, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(17, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(18, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Sasuk Uchicha (Clothing: Taka)', 1, 'Regular', 'Standard', 1550.00, ''),
(19, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, 'hello'),
(20, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(21, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(22, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(23, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(24, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Sasuk Uchicha (Clothing: Hebi)', 2, 'Limited', 'Express', 6100.00, 'f64f6gfg5f6g5'),
(25, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Sasuk Uchicha (Clothing: Hebi)', 2, 'Limited', 'Express', 6100.00, 'f64f6gfg5f6g5'),
(26, 'Samuel Smith', '#35 Pampanga Street', '09952133356', 'star41@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(27, 'fdfdfas', 'fsdfsfd', '12056548232', 'altojijoidf@gmail.com', 'Son Goku (Adult Base)', 2, 'Limited', 'Express', 6100.00, '.354353'),
(28, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(29, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(30, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(31, 'Samuel G', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(32, 'dffdsf', '#35 Pampanga Street', '09952133356', 'altoverossam@gmail.com', 'Sasuk Uchicha (Clothing: Taka)', 3, 'Limited', 'Express', 9100.00, '9498753'),
(33, 'dffdsf', '#35 Pampanga Street', '09952133356', 'altoverossam@gmail.com', 'Sasuk Uchicha (Clothing: Taka)', 3, 'Limited', 'Express', 9100.00, '9498753'),
(34, 'dffdsf', '#35 Pampanga Street', '09952133356', 'altoverossam@gmail.com', 'Naruto (Kid)', 3, 'Regular', 'Standard', 4550.00, ''),
(35, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(36, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(37, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(38, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(39, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(40, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(41, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(45, 'fdfdfas', 'fsdfsfd', '12056548232', 'fjdlfkldkfl@gmail.com', 'Son Goku SSJ', 1, 'Limited', 'Express', 3100.00, ''),
(46, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(47, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(48, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(49, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(50, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(51, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(52, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(53, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(54, 'Samuel James A. Gimena', '#35 Pampanga Street', '09951416169', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(55, 'dffdsf', '#35 Pampanga Street', '09952133356', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(56, 'dffdsf', '#35 Pampanga Street', '09952133356', 'altoverossam@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, ''),
(59, 'Gacha Man', '#35 Pampanga Street', '09786513248', 'star41@gmail.com', 'Naruto (Kid)', 1, 'Regular', 'Standard', 1550.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Email`, `Password`) VALUES
(2, 'Shinroi', 'star41@gmail.com', '$2y$10$MMLvbr90MZYsSemgeLjV1Ogb/sRwaCV.OMr8Mtl7suqry2Ci1P.Ki'),
(3, 'Shinroi1', 'altoverossam@gmail.com', '$2y$10$Zln4NnN7.NkwNnmZwwL0wuPufJv8q9QgaU8i0HgGBNCloWXxXPzV6'),
(4, 'Samuel', 'gachaman8@gmail.com', '$2y$10$atS782jVt09N37hmQ02FcuXvFxf5Hv9VeJWAEXh5hxPQfoXT2BF.i'),
(6, 'Yuya', 'gachaman95@gmail.com', '$2y$10$LUKMFsq1aYyuz0nUZCT77un3o9ASE7PZ2epJ9akWaSUyz2MiKe.Ba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
