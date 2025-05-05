-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 11:55 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `password`) VALUES
(5, 'Creative', 'cdmi@gmail.com', '123'),
(6, 'Hemanshi', 'hemanshi@gmail.com', '789'),
(9, 'Hemanshi', 'hemanshi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `number` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `name`, `number`, `email`, `password`) VALUES
(17, 'Hemanshi', '997478596', 'hemanshi@gmail.com', '123'),
(18, 'priya', '997478596', 'priya@gmail.com', '123'),
(19, 'yami', '997478596', 'yami@gmail.com', '123'),
(20, 'yami', '997478596', 'yami@gmail.com', '123'),
(21, 'yami', '997478596', 'yami@gmail.com', '123'),
(22, 'priya', '997478596', 'priya@gmail.com', '963258'),
(23, 'Mayank', '997478596', 'mayank@gmail.com', '963258'),
(39, 'Hemanshi', 'sdad', 'sdasd@gmail.com', 'xasd'),
(41, 'Hemanshi', '997478596', 'hemanshi@gmail.com', '3698'),
(42, 'Hemanshi', '997478596', 'hemanshi@gmail.com', '3698');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `hobby` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `email`, `password`, `gender`, `city`, `hobby`, `image`) VALUES
(1, '0000-00-00', 'mayank@gmail.com', 'hgh', 'male', 'BB', 'bb', 'avatar3.png'),
(3, '0000-00-00', 'cdmi@gmail.com', 'cvgxc', 'male', 'AA', 'cc', 'user4-128x128.jpg'),
(4, 'cvcvcxv', 'rahul@gmail.com', 'nbn', 'male', 'BB', 'bb', 'user6-128x128.jpg'),
(5, 'Mayank', 'cdmi@gmail.com', 'm,nb,', 'male', 'BB', 'aa', 'user2-160x160.jpg'),
(6, 'Mayank', 'admin@gmail.com', 'zxzx', 'female', 'BB', 'bb', 'user2-160x160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `demo1`
--

CREATE TABLE `demo1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `hobby` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo1`
--

INSERT INTO `demo1` (`id`, `name`, `email`, `password`, `hobby`, `image`) VALUES
(15, 'Hemanshiiiiiiiiiii', 'hem@gmail.com', '9856', 'cricket,reading', 'avatar2.png'),
(16, 'Mayank', 'mayank@gmail.com', 'wsdf', 'cricket,reading', 'avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `hobby` text NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `name`, `email`, `password`, `contact`, `hobby`, `gender`, `city`, `image`) VALUES
(33, 'Mayank', 'mayank@gmail.com', '1236', 9876543210, 'cricket,camping', 'female', 'navsari', 'user6-128x128.jpg'),
(39, 'Hem', 'hem@gmail.com', 'cvcx', 9876543210, 'cricket,camping', 'female', 'navsari', 'avatar2.png'),
(41, 'Creative', 'cdmi@gmail.com', '123', 9876543210, 'camping', 'female', 'navsari', 'user2-160x160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `number` bigint(20) NOT NULL,
  `gender` text NOT NULL,
  `hobby` text NOT NULL,
  `city` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `number`, `gender`, `hobby`, `city`, `image`) VALUES
(21, 'Creativeeeeeeeeeee', 'cdmi@gmail.com', '9856', 997478596, '', 'Cricket,Reading', 'Navsari', 'avatar3.png'),
(22, 'Creative', 'cdmi@gmail.com', '9856', 997478596, 'Male', 'Cricket,Reading', 'Navsari', 'avatar3.png'),
(23, 'Mayank', 'mayank@gmail.com', '9856', 997478596, 'Male', 'Cricket,Reading', 'Rajkot', 'avatar3.png'),
(24, 'Mayank', 'mayank@gmail.com', '9856', 997478596, 'Male', 'Cricket,Reading', 'Rajkot', 'avatar3.png'),
(26, 'priya', 'priya@gmail.com', '9856', 9874, 'Female', 'Reading,Dancing', 'Navsari', 'user2-160x160.jpg'),
(30, 'Hemanshi', 'hemanshi@gmail.com', '9856', 997478596, 'Female', 'Reading,Dancing', 'Navsari', 'user7-128x128.jpg'),
(32, 'mahi', 'mahi@gmail.com', '9856', 997478596, 'Female', 'Reading,Dancing', 'Surat', 'user4-128x128.jpg'),
(33, 'kaushikkkkkk', 'kaushik@gmail.commmm', '9635gg', 997478596, 'male', 'Cricket,Reading,Camping', 'Rajkot', 'user1-128x128.jpg'),
(34, 'Mayank', 'mayank@gmail.com', '9856', 997478596, 'male', 'Cricket,Reading', 'Rajkot', 'user6-128x128.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo1`
--
ALTER TABLE `demo1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `demo1`
--
ALTER TABLE `demo1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
