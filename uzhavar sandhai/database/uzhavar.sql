-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 04:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `add_card`
--

CREATE TABLE `add_card` (
  `uname1` varchar(20) NOT NULL,
  `id` int(100) NOT NULL,
  `qty` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cus_register`
--

CREATE TABLE `cus_register` (
  `uname1` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `numbe` int(10) NOT NULL,
  `upswd1` varchar(30) NOT NULL,
  `upswd2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productname` varchar(20) NOT NULL,
  `produtqty` int(100) NOT NULL,
  `productprice` int(100) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `farmeraddress` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `uname1` varchar(20) NOT NULL,
  `img` longblob NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname1` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `numbe` int(10) NOT NULL,
  `upswd1` varchar(30) NOT NULL,
  `upswd2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `uname1` (`uname1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
