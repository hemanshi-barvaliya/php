-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 12:08 PM
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
-- Database: `ims_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_inquiry`
--

CREATE TABLE `assign_inquiry` (
  `assign_id` int(11) NOT NULL,
  `inquiry_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` text NOT NULL,
  `address` text NOT NULL,
  `branch_contact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `address`, `branch_contact`) VALUES
(3, 'VARACHHA', '401-404, 4th Floor, City Center Complex, Nr. Yogichowk, Varachha, Surat - 395006.', 9033316003),
(4, 'KATARGAM', '324-327, 3rd Floor, Laxmi Enclave, Opp. Gajera School, Katargam, Surat - 395004.', 9033335009),
(5, 'MOTA VARACHHA', 'B 201-203, 2nd Floor, Aditya Complex, VIP Circle, Mota Varachha, Surat-395006.', 9974122545);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_content` text NOT NULL,
  `course_amt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_content`, `course_amt`) VALUES
(3, 'Web Design', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning, PowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', '85000'),
(4, 'Full Stack Development', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning PowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', '850000'),
(5, 'Data Science', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning PowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', '75000'),
(6, 'CCC', 'Basic-Computer, , Paint, , Notepad, Wordpad, Word, Excel, Power-Point', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE `followup` (
  `follow_id` int(11) NOT NULL,
  `inquiry_id` int(11) NOT NULL,
  `follow_detail` text NOT NULL,
  `follow_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`follow_id`, `inquiry_id`, `follow_detail`, `follow_by`) VALUES
(1, 1, 'Pending', 'Hemanshi'),
(2, 1, 'panding', 'jay'),
(3, 1, 'panding', 'jay'),
(4, 2, 'confirm', 'Hemanshi'),
(5, 3, 'padding', 'jay'),
(6, 3, 'panding', 'jay'),
(7, 1, 'panding', 'Hemanshi'),
(8, 2, '', 'Hemanshi'),
(9, 2, '', 'jay'),
(10, 2, 'panding', 'Hemanshi'),
(11, 1, 'panding', 'jay'),
(12, 2, 'panding', 'jay'),
(13, 2, 'panding', 'Hemanshi'),
(14, 1, 'panding', 'Mayank'),
(15, 1, 'panding', 'Shruti'),
(16, 3, 'panding', 'Hem'),
(17, 1, 'panding', 'Hemanshi'),
(18, 1, 'panding', 'Shruti'),
(19, 1, 'panding', 'Hem');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `parent_contact` bigint(20) NOT NULL,
  `course` text NOT NULL,
  `course_content` text NOT NULL,
  `fees` int(11) NOT NULL,
  `reference` text NOT NULL,
  `reference_name` text NOT NULL,
  `inquiryby` text NOT NULL,
  `addedby` text NOT NULL,
  `joindate` date NOT NULL,
  `batch` text NOT NULL,
  `branch` text NOT NULL,
  `status` text NOT NULL,
  `inquirydetail` text NOT NULL,
  `assign_to` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `name`, `contact`, `parent_contact`, `course`, `course_content`, `fees`, `reference`, `reference_name`, `inquiryby`, `addedby`, `joindate`, `batch`, `branch`, `status`, `inquirydetail`, `assign_to`) VALUES
(1, 'Hemanshi', 9876543210, 1234567890, 'Full Stack Development', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning PowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', 85000, 'Student', 'priya', 'Hemanshi', 'Hemanshi', '2025-04-16', '10 to 12', 'MOTA VARACHHA', 'Pending', '12% discount', '8'),
(2, 'hirva', 9876543210, 1234567890, 'Full Stack Development', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning PowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', 85000, 'Seminar', 'priya', 'Hemanshi', 'Hemanshi', '2025-04-29', '8 to 10', 'KATARGAM', 'Demo', '20% discount', ''),
(3, 'Komal', 9874563218, 1234567890, 'Web Design', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning PowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', 10000, 'Staff', 'jay', '', 'jay', '2025-04-30', '4 to 6', 'VARACHHA', 'Demo', '12% discount', '8');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(1, 'Hemanshi', 'hemanshi@gmail.com', '123'),
(2, 'Creative', 'cdmi@gmail.com', '123'),
(3, 'admin', 'cdmi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Branch Manager'),
(3, 'Inquiry Manager'),
(4, 'Inquiry'),
(5, 'Inquiry'),
(6, 'Inquiry'),
(7, 'Inquiry');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `password`, `contact`, `image`, `status`, `role`) VALUES
(6, 'Hemanshi', 'hemanshi@gmail.com', '1234', 9876543210, '2025-04-08-080306-r8222-avatar-3.png', 'active', 'Admin'),
(7, 'jay', 'jay@gmail.com', '123', 9874563214, '2025-04-08-080159-r1775-avatar-1.png', 'block', 'Branch Manager'),
(8, 'Mayank', 'mayank@gmail.com', '123', 1234567890, '2025-04-08-080447-r5850-04.png', 'pending', 'Inquiry'),
(10, 'Shrutiiiiiiiiiiiiii', 'shrutirakholiya154@gmail.com', '111', 9874563218, '2025-04-09-070119-r4722-', 'pending', 'Inquiry Manager'),
(13, 'Hem', 'hem.paghadal@gmail.com', '111', 9874563214, 'avatar-2.png', 'pending', 'Inquiry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_inquiry`
--
ALTER TABLE `assign_inquiry`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `followup`
--
ALTER TABLE `followup`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_inquiry`
--
ALTER TABLE `assign_inquiry`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `followup`
--
ALTER TABLE `followup`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
