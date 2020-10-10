-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 01:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_managment`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Account_No` varchar(20) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `State` varchar(300) NOT NULL,
  `District` varchar(300) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Account_No`, `Name`, `State`, `District`, `Mobile`, `E-mail`, `Gender`, `Balance`) VALUES
('0112424430', 'SANTOSH SINGH', 'WEST BENGAL', 'HOWRAH', '9886608403', 'singh.89Santo@gmail.com', 'Male', 10000),
('0112414430', 'SONIYA KUMARI MISHRA', 'WEST BENGAL', 'KOLKATA', '7478273566', 'mishra.soniya171@gmail.com', 'Female', 8000),
('0112384430', 'NITISH KUMAR RAI', 'WEST BENGAL', 'KOLKATA', '8739088467', 'nitish.rai.467@gmail.com', 'Male', 51000.45),
('0112444430', 'ZAFRIN KHAN', 'WEST BENGAL', 'KOLKATA', '9888008807', 'zafrinKhan9888@gmail.com', 'Female', 0),
('0112424830', 'PINKY KESHRI', 'WEST BENGAL', 'KOLKATA', '7488725344', 'keshri.pinky7488@gmail.com', 'Female', 45000),
('0112474430', 'AHEM KUMAR', 'WEST BENGAL', 'KOLKATA', '8446623232', 'kumar.ahem98@gmail.com', 'Male', 1000),
('0112464430', 'RAJESH KUMAR SHAW', 'WEST BENGAL', 'KOLKATA', '7700453366', 'shaw.kumar.rajesh77@gmail.com', 'Male', 55672.98),
('0112454430', 'SAHIL RAI', 'WEST BENGAL', 'KOLKATA', '9069778700', 'raisahil9069@gmail.com', 'Male', 55000),
('0112434430', 'RAHUL SINGH', 'WEST BENGAL', 'KOLKATA', '9884590122', 'rahulsingh1217@gmail.com', 'Male', 2304.9),
('0112394430', 'SUSHMA KUMARI SHAW', 'WEST BENGAL', 'KOLKATA', '9088698407', 'sushmashaw8011@gmail.com', 'Female', 0),
('0112404430', 'SUMAN KUMARI SHAW', 'WEST BENGAL', 'KOLKATA', '8777623133', 'suman.shaw.111@gmail.com', 'Female', 81899.12);

-- --------------------------------------------------------

--
-- Table structure for table `viewcustomers`
--

CREATE TABLE `viewcustomers` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Account_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewcustomers`
--

INSERT INTO `viewcustomers` (`Id`, `Name`, `Account_No`) VALUES
(1, 'NITISH KUMAR RAI', '0112384430'),
(2, 'SUSHMA KUMARI SHAW', '0112394430'),
(3, 'SUMAN KUMARI SHAW', '0112404430'),
(4, 'SONIYA KUMARI MISHRA', '0112414430'),
(5, 'SANTOSH SINGH', '0112424430'),
(6, 'PINKY KESHRI', '0112424830'),
(7, 'RAHUL SINGH', '0112434430'),
(8, 'ZAFRIN KHAN', '0112444430'),
(9, 'SAHIL RAI', '0112454430'),
(10, 'RAJESH KUMAR SHAW', '0112464430'),
(11, 'AHEM KUMAR', '0112474430');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `viewcustomers`
--
ALTER TABLE `viewcustomers`
  ADD PRIMARY KEY (`Account_No`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `viewcustomers`
--
ALTER TABLE `viewcustomers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
