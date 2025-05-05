-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 07:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_inquiry`
--

CREATE TABLE `assign_inquiry` (
  `assign_id` int(11) NOT NULL,
  `inquiry_id` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assign_inquiry`
--

INSERT INTO `assign_inquiry` (`assign_id`, `inquiry_id`, `name`) VALUES
(2, '1', 'jay'),
(3, '2', 'Yogesh');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` text NOT NULL,
  `address` text NOT NULL,
  `branch_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `address`, `branch_contact`) VALUES
(1, 'YOGICHOWK', '401-404, 4th Floor, City Center Complex, Nr. Yogichowk, Varachha, Surat - 395006.', '9033316003'),
(2, 'KATARGAM', '324-327, 3rd Floor, Laxmi Enclave, Opp. Gajera School, Katargam, Surat - 395004.', '9033335009'),
(4, 'MOTA VARACHHA', 'B 201-203, 2nd Floor, Aditya Complex, VIP Circle, Mota Varachha, Surat-395006.', '9459459673'),
(5, 'ADAJAN', 'UG-1/2, 1st Floor, V3 Corner, Honey Park Rd, Opp. 9 Square, L.P. Savani Road, Adajan, Surat-395009', '9081545151');

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
(1, 'Web Design', 'Photoshop, Illustrator, Figma, HTML/HTML5, CSS/CSS3, Media-Query, Bootstrap, Javascript, JQuery, SASS/SCSS, Git-Management', '85000'),
(2, 'Full Stack Development', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning\r\nPowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', '85000'),
(3, 'Data Science', 'C, C++, Python, Numpy, Pandas, Flask, Tableue, AIML, DeepLearning\r\nPowerBI, Statestics, WebScraping, Capstone(Project), Git-Management', '85000'),
(4, 'CCC', 'Basic-Computer, , Paint, , Notepad, Wordpad, Word, Excel, Power-Point', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `followup`
--

CREATE TABLE `followup` (
  `follow_id` int(11) NOT NULL,
  `inquiry_id` int(11) NOT NULL,
  `follow_detail` text NOT NULL,
  `follow_by` text NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followup`
--

INSERT INTO `followup` (`follow_id`, `inquiry_id`, `follow_detail`, `follow_by`, `add_time`) VALUES
(1, 1, 'tomorrow inform', 'Jaydip Thummar', '2024-06-18 10:12:54'),
(2, 2, 'tomorrow inform', 'Avin Prajapati', '2024-06-18 10:12:54'),
(4, 4, '5 days pachhi inform karse', 'Avin Prajapati', '2024-06-18 10:12:54'),
(5, 2, 'aje call karse', 'Jaydip Thummar', '2024-06-18 10:12:54'),
(6, 1, 'Aaje avse demo mate', 'jay', '2024-06-19 10:12:54'),
(7, 5, 'after exam result join', 'Jaydip Thummar', '2024-06-19 10:12:54'),
(8, 2, 'kale inform karse', 'Yogesh', '2024-06-19 11:21:52'),
(9, 4, 'month na end ma inform karse', 'kevin', '2024-06-19 11:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `parent_contact` text NOT NULL,
  `course` text NOT NULL,
  `course_content` text NOT NULL,
  `fees` text NOT NULL,
  `reference` text NOT NULL,
  `reference_name` text NOT NULL,
  `inquiryby` text NOT NULL,
  `addedby` text NOT NULL,
  `joindate` text NOT NULL,
  `batch` text NOT NULL,
  `branch` text NOT NULL,
  `status` text NOT NULL,
  `inquirydetail` text NOT NULL,
  `assign_to` text NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `name`, `contact`, `parent_contact`, `course`, `course_content`, `fees`, `reference`, `reference_name`, `inquiryby`, `addedby`, `joindate`, `batch`, `branch`, `status`, `inquirydetail`, `assign_to`, `add_time`) VALUES
(1, 'kevin Khunt', '7485967485', '7485936785', 'Web Design', 'full', '75000', 'Internet', 'google', 'Jaydip Thummar', 'Jaydip Thummar', '2024-06-19', '8 to 10', 'YOGICHOWK', 'Pending', '12% discount', '6', '2024-06-18 07:58:49'),
(2, 'ravi dhanani', '7776669995', '8585858596', 'Full Stack Development', 'full', '85000', 'Student', 'gaurav malaviya', 'Jaydip Thummar', 'Avin Prajapati', '2024-06-20', '10 to 12', 'KATARGAM', 'Pending', '10% discount', '6', '2024-06-18 07:58:49'),
(4, 'hrujul', '7532684595', '5864957685', 'Data Science', 'full', '85000', 'Student', 'jay koladiya', 'Avin Prajapati', 'Avin Prajapati', '2024-06-21', '2 to 4', 'YOGICHOWK', 'Pending', '5% discount apel che', '4', '2024-06-19 07:58:49'),
(5, 'manish vaghasiya', '8529632589', '8854678958', 'Data Science', 'full', '80000', 'Internet', 'google', 'Jaydip Thummar', 'Jaydip Thummar', '2024-06-20', '10 to 12', 'MOTA VARACHHA', 'Demo', 'give 7% discount', '6', '2024-06-19 09:43:14');

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
(4, 'Inquiry');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contact` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `password`, `contact`, `image`, `status`, `role`) VALUES
(1, 'Jaydip Thummar', 'admin@gmail.com', '123', '9999999999', 'admin.png', 'active', 'Admin'),
(4, 'jay', 'jay@gmail.com', '123', '9586748598', '2024-06-17-124048-r8180-memsi 8.png', 'pending', 'Inquiry'),
(5, 'kevin', 'kevin@gmail.com', '123', '8567485269', '2024-06-17-140701-r3914-memsi 4.png', 'pending', 'Inquiry Manager'),
(6, 'Yogesh', 'yogesh@gmail.com', '123', '7595842653', '2024-06-17-141334-r3258-tisha 5.png', 'active', 'Inquiry'),
(7, 'Avin Prajapati', 'avin@gmail.com', '123', '8567954869', '2024-06-18-122434-r4666-memsi 12.png', 'block', 'Branch Manager');

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
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `followup`
--
ALTER TABLE `followup`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
