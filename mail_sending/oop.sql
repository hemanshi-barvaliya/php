-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 11:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `email`, `password`) VALUES
(1, 'Creativee', 'cdmi@gmail.com', '888'),
(2, 'Hemanshi', 'hemanshi@gmail.com', '888'),
(3, 'hem', 'hem.paghadal@gmail.com', '1234'),
(5, 'hemali', 'hemalitalaviya2@gmail.com', '123'),
(7, 'admin', 'bhumihemli128@gmail.com', '456'),
(8, 'nirali', 'niralikhunt27@gmail.com', '789');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `hobby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `password`, `hobby`) VALUES
(1, 'user', 'first_user@gmail.com', '123', 'aa,bb,cc,dd'),
(2, 'user', 'first_user@gmail.com', '1234555', 'cc'),
(3, 'user', 'first_user@gmail.com', '123', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `hobby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `email`, `password`, `hobby`) VALUES
(1, 'Hemanshiiiiiiiiiii', 'hemanshi@gmail.com', '123456', 'reading'),
(3, 'Mayankkkk', 'mayank@gmail.com', '987', 'reading,cricket'),
(4, 'yami', 'yami@gmail.com', '741', 'reading,cricket');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `hobby` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `name`, `email`, `password`, `hobby`, `image`) VALUES
(1, 'Hemanshiiii', 'hemanshi@gmail.com', '123', 'cricket,camping', ''),
(3, 'Hemanshiiiii', 'hemanshi@gmail.com', 'ghghfh', 'cricket,camping', ''),
(4, 'Hemanshi', 'hemanshi@gmail.com', '123', 'cricket,camping', ''),
(6, 'Hemanshi', 'hemanshi@gmail.com', '123', 'cricket,camping', ''),
(7, 'priya', 'priya@gmail.com', '123', 'cricket,camping', ''),
(8, 'yami', 'yami@gmail.com', '789', 'cricket,camping', ''),
(9, 'yami', 'yami@gmail.com', '789', 'cricket,camping', ''),
(10, 'yami', 'yami@gmail.com', '789', 'cricket,camping', ''),
(11, 'yami', 'yami@gmail.com', '789', 'cricket,camping', ''),
(12, 'yami', 'yami@gmail.com', '789', 'cricket,camping', ''),
(13, 'Hemanshi', 'hemanshi@gmail.com', '9856', 'cricket,camping', 'avatar.png'),
(14, 'Hemanshi', 'hemanshi@gmail.com', '9856', 'cricket,camping', 'avatar.png'),
(15, 'Hemanshi', 'hemanshi@gmail.com', '9856', 'cricket,camping', 'avatar.png'),
(16, 'priya', 'priya@gmail.com', '963', 'camping,reading', 'user2-160x160.jpg'),
(17, 'priya', 'priya@gmail.com', '963', 'camping,reading', 'user2-160x160.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
