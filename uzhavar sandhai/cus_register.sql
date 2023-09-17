-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2023 at 04:53 AM
-- Server version: 8.0.33-0ubuntu0.20.04.4
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uzhavar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cus_register`
--

CREATE TABLE `cus_register` (
  `uname1` varchar(20) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numbe` bigint NOT NULL,
  `upswd1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `upswd2` varchar(255) DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cus_register`
--

INSERT INTO `cus_register` (`uname1`, `email`, `numbe`, `upswd1`, `upswd2`, `address`) VALUES
('ram', 'kavithas@gmail.com', 2343454235, '1234', '1234', 'sdfasdf'),
('satheesh', 'satheesh12345678@gmail.com', 2343454235, '$2y$10$zK5es8bZbzdXpeRJk9Rf6OVhwGDtckjF65lEWOn/JFYZYLWE4Gyzi', NULL, 'sdfasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus_register`
--
ALTER TABLE `cus_register`
  ADD PRIMARY KEY (`uname1`),
  ADD UNIQUE KEY `unique` (`uname1`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
