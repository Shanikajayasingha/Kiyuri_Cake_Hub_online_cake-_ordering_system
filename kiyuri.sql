-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 06:35 AM
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
-- Database: `kiyuri`
--

-- --------------------------------------------------------

--
-- Table structure for table `oder_table`
--

CREATE TABLE `oder_table` (
  `ID` int(50) NOT NULL,
  `Item` varchar(100) NOT NULL,
  `price_RS` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Contact_No` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oder_table`
--

INSERT INTO `oder_table` (`ID`, `Item`, `price_RS`, `quantity`, `customer`, `location`, `Contact_No`) VALUES
(13, 'pizza', 'RS. 50', '1', 'shanika jayasingha', 'F67 FORESTHILL WATTA', '+94755544819'),
(14, 'cola', 'RS. 5', '2', 'sewmini sanjana', 'galigamuwa', '0708866235'),
(15, 'burger', 'RS. 10', '2', 'shanika jayasingha', 'F67 FORESTHILL WATTA', '+94755544819'),
(16, 'chees', 'RS. 4', '6', 'sasanka', 'bulathkohupitiya', '0784468257'),
(17, 'chees', 'RS. 4', '2', 'sasanka', 'bulathkohupitiya', '0784468257'),
(18, 'wedding Rose cake ', 'RS. 15000', '1', 'arjuna', 'galigamuwa', '0784468257'),
(19, 'wedding Rose cake ', 'RS. 15000', '1', 'arjuna', 'bulathkohupitiya', '0784468257'),
(20, 'wedding Rose cake ', 'RS. 15000', '1', 'arjuna', 'bulathkohupitiya', '0784468257'),
(21, 'cup cake', 'RS. 300', '2', 'arjuna', 'bulathkohupitiya', '0784468257'),
(22, 'cup cake', 'RS. 300', '1', 'arjuna', 'yattogoda', '0784468257'),
(23, 'wedding Rose cake ', 'RS. 15000', '1', 'sewmini', 'yattogoda', '0784468257');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(14, 'wedding Rose cake ', '15000', 'wedding cake 2.jpg'),
(18, 'birthday cake', '4000', 'cake9.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `nic`, `address`, `phone`, `email`, `password`) VALUES
(1, 'sewmini', '200082003305', 'yattogoda', '0755544819', 'sewmini@gmail.com', 'sew'),
(2, 'shanika', '199919001817', 'molagoda', '0755544819', 'shanu@gmail.com', 'shanu'),
(3, 'admin', '200019001716', 'admin', '0703196917', 'admin', '1234'),
(7, 'arjuna mudannayaka', '200026501799', 'galigamuwa', '076281677', 'arjuna@gmail.com', '12345'),
(8, 'kavini', '2324575', 'kegalle', '07176543', 'kavini@gmail.com', 'asd1'),
(9, 'a', 'c', 'gh', '543', 'dew@gmail.com', '098'),
(10, 'hansi', '6655883737', 'bulathkohupitiya', '0745533716', 'hansi@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oder_table`
--
ALTER TABLE `oder_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nic_2` (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oder_table`
--
ALTER TABLE `oder_table`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
