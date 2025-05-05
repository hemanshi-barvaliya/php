-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 11:50 AM
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
-- Database: `fristdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactbook`
--

CREATE TABLE `contactbook` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `hobby` text NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactbook`
--

INSERT INTO `contactbook` (`id`, `name`, `contact`, `email`, `password`, `hobby`, `gender`, `city`, `image`) VALUES
(1, 'Hemanshii', 9874563218, 'hemanshi@gmail.com', '123', 'travelling,reading', 'female', '---city----', 'image/avatar2.png'),
(3, 'jay', 7896554132, 'jaydeep@gmail.com', '654', 'travelling,cricket,reading', 'male', 'Navsari', 'image/creative-logo-blue.png'),
(10, 'nia', 9874563218, 'nia@gmail.com', '456', 'travelling,reading', 'Female', 'Navsari', 'asset 11.jpeg'),
(14, 'radhi', 9874563218, 'radhika@gmail.com', '987', 'cricket,reading', 'female', 'Navsari', 'asset 11.jpeg'),
(17, 'radhika', 9874563218, 'radhika@gmail.com', '987', 'reading,camping', 'Female', 'Navsari', 'asset 11.jpeg'),
(18, 'khushi', 1215454545, 'khushi@gmail.com', '789', 'reading,camping', 'Female', 'Surat', 'asset 11.jpeg'),
(20, 'priti', 9685741236, 'priti@gmail.com', '741', 'travelling,reading', 'Female', 'Rajkot', 'car1.jpeg'),
(22, 'priti', 9685741236, 'priti@gmail.com', '741', 'travelling,reading', 'Female', 'Rajkot', 'car1.jpeg'),
(24, 'raha', 9874563258, 'raha@gmail.com', '123', 'travelling,cricket,camping', 'Female', 'Navsari', ''),
(29, 'Creative', 9876543210, 'hemanshi@gmail.com', '8888', 'travelling,cricket', 'Male', 'Rajkot', 'car1.jpeg'),
(30, 'ridhima', 963258741, 'ridhima@gmail.com', '147', 'travelling,reading', 'Female', 'Rajkot', 'creative-logo-blue.png'),
(32, 'yami', 789654123, 'yami@gmail.com', '123', 'reading,camping', 'Female', 'Rajkot', 'flowers1.jpg'),
(33, 'Hemanshiiiiiiiiiii', 9876543210, 'cdmi@gmail.com', '1236', 'travelling,reading', '', '---city----', 'image/avatar5.png'),
(34, 'Hemanshiiiiiiiiiii', 9876543210, 'cdmi@gmail.com12', '1236gjg', 'travelling,cricket,reading', 'female', '---city----', 'image/user4-128x128.jpg'),
(35, 'Hemanshi', 9876543210, 'hemanshi@gmail.com', 'saa', 'travelling,reading', 'female', '---city----', 'image/user7-128x128.jpg'),
(36, 'Creative', 9874563218, 'cdmi@gmail.com', 'q1', 'travelling', 'male', 'Navsari', 'image/user2-160x160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `hobby`, `gender`, `city`, `image`) VALUES
(29, 'Rajviii', '', '', 0, 'Array', '', '--Select City--', ''),
(31, 'Dharaaa', 'dharaaa@gmail.com', '7485', 7894568523, 'travelling', 'male', '--Select City--', ''),
(32, 'Nimeshhh', 'nimesh@gmail.comm', 'sdasda', 8478965812, 'travelling,cricket', 'male', 'ahmedabad', ''),
(33, 'Arya', 'arya@gmail.com', '789654', 9874563587, 'travelling,reading', 'female', 'rajkot', ''),
(34, 'Fenisha', 'fenisha@gmail.com', '852145', 9825936547, 'travelling,cricket', 'female', 'ahmedabad', ''),
(35, 'Rushabh', 'rushabh@gmail.com', '78954', 9624638251, 'travelling,reading', 'male', 'ahmedabad', ''),
(36, 'Dhruvi', 'dhruvi@gmail.com', '852147', 9585634789, 'travelling,cricket', 'female', 'surat', ''),
(37, 'Mahipal', 'mahipal@gmail.com', 'mahi', 8478965812, 'cricket,reading', 'male', 'ahmedabad', ''),
(39, 'Sia', 'sia@gmail.com', '987456', 9987456785, 'reading', 'female', 'ahmedabad', ''),
(40, 'Elisha', 'elisha@gmail.com', '8574124', 8469648787, 'travelling', 'female', 'surat', ''),
(41, 'Maulik', 'maulik@gmail.com', '789654', 8478965871, 'travelling,cricket', 'male', 'rajkot', ''),
(42, 'Maulik', 'maulik@gmail.com', '789654', 8478965871, 'travelling,cricket', 'male', 'rajkot', ''),
(44, 'Hem', 'hem@gmail.com', '789654', 9624638251, 'travelling,reading', 'female', 'surat', ''),
(45, 'Raha', 'raha@gmail.com', '78954', 9874563218, 'travelling,cricket', 'female', 'ahmedabad', ''),
(85, 'Hemanshi', 'hemanshi@gmail.com', '78958', 7896541238, 'travelling', 'female', 'surat', ''),
(87, 'rahul', 'rahul@gmail.com', '789587', 9852639685, 'travelling,reading', 'male', 'surat', ''),
(89, 'sdfsdfs', 'cdmi@gmail.com', 'csc', 0, 'travelling', 'male', 'ahmedabad', ''),
(90, 'sdsa', 'cdmi@gmail.com', 'adsa', 0, 'travelling', 'male', 'ahmedabad', ''),
(92, 'piyu', 'piyu@gmail.com', 'dasdadas', 997845171, 'travelling', 'female', 'rajkot', ''),
(93, 'piyu', 'piyu@gmail.com', 'dasdadas', 997845171, 'travelling', 'female', 'rajkot', ''),
(128, 'Mayank', 'mayank@gmail.com', '56+456', 9876543210, 'travelling,cricket', 'male', 'ahmedabad', ''),
(130, 'raj', 'raj@gmail.com', '56265', 9874563214, 'travelling,cricket,reading', 'male', 'surat', ''),
(131, 'Ankit', 'ankit@gmail.com', '1111', 7986541320, 'travelling,reading', 'male', 'ahmedabad', ''),
(132, 'Ankit', 'ankit@gmail.com', '1111', 7986541320, 'travelling,reading', 'male', 'ahmedabad', ''),
(133, 'Shruti', 'shruti@gmail.com', '111', 8796543210, 'reading', 'female', 'surat', 'asset 5.png'),
(134, 'Rina', 'rina@gmail.com', '222', 7986543210, 'reading', 'female', 'rajkot', 'asset 12.jpeg'),
(135, 'Aarti', 'arti@gmail.com', '333', 7986451323, 'travelling,reading', 'female', 'rajkot', 'asset 26.jpeg'),
(137, 'Creativeeee', '', '', 0, 'Array', '', '--Select City--', ''),
(138, 'Mayank', 'mayank1@gmail.com', '666', 7985621033, 'travelling,cricket', 'male', 'surat', 'car2.jpg'),
(140, 'priya', 'priya@gmail.com', '111', 7965412033, 'travelling,reading', 'female', 'ahmedabad', 'car1.jpeg'),
(141, 'Devanshuuu', 'dev@gmail.com', '666sasda', 99999999999, 'travelling,reading', 'female', '--Select City--', 'car1.jpeg'),
(142, 'Creativeeeeeeeeeee', 'cdmi@gmail.com', 'dfs232', 85854255425, 'travelling,cricket,reading', 'male', '--Select City--', ''),
(143, 'Creative', 'cdmi@gmail.com', 'dfs', 9876543210, 'cricket', 'male', 'rajkot', ''),
(144, 'divyayy', 'divya@gmail.comm', 'dfsdf', 8796543210, 'travelling', 'male', 'ahmedabad', ''),
(145, 'arti', 'arti@gmail.com', 'arti', 9876543210, 'travelling,cricket', 'female', 'ahmedabad', 'car1.jpeg'),
(146, 'Fenisha', 'fenisha@gmail.com', 'Fenisha', 9874563218, 'travelling,cricket', 'female', 'ahmedabad', 'car1.jpeg'),
(147, 'Fenisha', 'fenisha@gmail.com', 'Fenisha', 9874563218, 'travelling,cricket', 'female', 'ahmedabad', 'car1.jpeg'),
(148, 'Creative', 'sadad@gmail.com', 'sadasd', 0, 'travelling', 'male', 'surat', 'car1.jpeg'),
(149, 'Creative', 'cdmi@gmail.com', 'dfsfds', 4656565232, 'cricket', 'male', 'surat', 'creative-logo-blue.png'),
(150, 'Kavya', 'kavya@gmail.com', '1234', 9876543210, 'travelling,cricket', 'female', 'surat', 'flowers1.jpg'),
(151, 'yami', 'yami@gmail.com', 'yami', 9876543210, 'travelling,cricket', 'female', 'ahmedabad', 'car1.jpeg'),
(152, 'Creative', 'cdmi@gmail.com', '123', 9876543210, 'travelling,cricket', 'male', 'surat', 'avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
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
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `name`, `email`, `password`, `contact`, `hobby`, `gender`, `city`, `image`) VALUES
(1, 'rahul', 'rahul@gmail.com', '789587', 9852639685, '0', 'male', 'surat', ''),
(2, 'Hemanshi', 'hemanshi@gmail.com', '788542', 985863258, '0', 'female', 'ahmedabad', ''),
(6, 'kia', 'kia@gmail.com', '9874563', 9974122321, '0', 'female', 'ahmedabad', ''),
(7, 'Komal', 'komal@gmail.com', 'asad', 9874563214, '0', 'female', 'ahmedabad', ''),
(8, 'piyu', 'piyu@gmail.com', 'dasdadas', 997845171, '0', 'female', 'rajkot', ''),
(9, 'piyu', 'piyu@gmail.com', 'dasdadas', 997845171, '0', 'female', 'rajkot', ''),
(21, 'sdadsa', 'ddmi@gmail.com', 'sda', 9858874533, '0', 'male', 'surat', ''),
(22, 'vcxcvxv', 'cvxvxc@ghfgh.hj', 'cvxcvxv', 146854, '0', 'male', 'ahmedabad', ''),
(23, 'priya', 'priya@gmail.com', 'dfsdf', 987456321, '0', 'male', 'surat', ''),
(24, 'dfsdf', 'dfsdf@cgdfgd.com', 'dgsd', 9876543210, '0', 'female', 'ahmedabad', ''),
(25, 'Creative', 'cdmi@gmail.com', '985875', 9874563218, '0', 'female', 'ahmedabad', ''),
(26, 'mahira', 'mahira@gmail.com', 's131', 9876543210, '0', 'male', 'ahmedabad', ''),
(27, 'mahira', 'mahira@gmail.com', 's131', 9876543210, '0', 'male', 'ahmedabad', ''),
(29, 'dfsdf', 'fsd@fg.hjghj', 'ghfgh', 98512, '0', 'male', 'surat', ''),
(30, 'Creative', 'fdsf@gmail.com', 'dfsd', 9874563218, '0', 'male', 'rajkot', ''),
(31, 'Creative', 'fdsf@gmail.com', 'dfsd', 9874563218, '0', 'male', 'rajkot', ''),
(32, 'Hrujul', 'hrujul@gmail.com', '1234', 9875463210, '0', 'female', 'ahmedabad', ''),
(33, 'Hrujul', 'hrujul@gmail.com', '1234', 9875463210, '0', 'female', 'ahmedabad', ''),
(34, 'Creative', 'cdmi@gmail.com', '666', 9624638251, '0', 'male', 'ahmedabad', ''),
(35, 'Kamal', 'kamal@gmail.com', '556556', 7986543210, '0', 'male', 'rajkot', ''),
(36, 'Kamal', 'kamal@gmail.com', '556556', 7986543210, '0', 'male', 'rajkot', ''),
(37, 'Yogesh', 'yogesh@gmail.com', '55555', 9714162238, '0', 'male', 'surat', ''),
(38, 'Anil', 'anil@gmail.com', '55555', 7896453210, 'cricket,reading', 'male', 'ahmedabad', ''),
(39, 'priya', 'priya@gmail.com', 'dfsdfs', 9985622545, 'travelling', 'female', 'ahmedabad', ''),
(40, 'priya', 'priya@gmail.com', 'dfsdfs', 9985622545, 'travelling', 'female', 'ahmedabad', ''),
(41, 'priya', 'priya@gmail.com', 'dfsdfs', 9985622545, 'travelling', 'female', 'ahmedabad', ''),
(42, 'priya', 'priya@gmail.com', 'dfsdfs', 9985622545, 'travelling', 'female', 'ahmedabad', ''),
(43, 'priya', 'priya@gmail.com', 'dfsdfs', 9985622545, 'travelling', 'female', 'ahmedabad', ''),
(44, 'priya', 'priya@gmail.com', 'dfsdfs', 9985622545, 'travelling', 'female', 'ahmedabad', ''),
(45, 'priya', 'priya@gmail.com', 'dfsdfs', 9985622545, 'travelling', 'female', 'ahmedabad', ''),
(46, 'Creative', 'cdmi@gmail.com', 'dfsd', 9874563214, 'travelling', 'male', 'surat', ''),
(47, 'Creative', 'cdmi@gmail.com', 'dfsd', 9874563214, 'travelling', 'male', 'surat', ''),
(48, 'Creative', 'cdmi@gmail.com', 'dfsd', 9874563214, 'travelling', 'male', 'surat', ''),
(49, 'Creative', 'cdmi@gmail.com', 'dfse', 9874563214, 'travelling', 'male', 'surat', ''),
(50, 'Creative', 'cdmi@gmail.com', 'dfse', 9874563214, 'travelling', 'male', 'surat', ''),
(51, 'Creative', 'cdmi@gmail.com', 'dfse', 9874563214, 'travelling', 'male', 'surat', ''),
(52, 'Hemanshi', 'hemanshi@gmail.com', 'xcfsadc', 9876543210, 'travelling', 'female', 'ahmedabad', ''),
(53, 'priya', 'priya@gmail.com', 'dfsdf', 9876543210, 'travelling', 'female', 'surat', ''),
(54, 'Mayank', 'mayank@gmail.com', 'sdada', 9876543210, 'travelling,cricket', 'male', 'ahmedabad', ''),
(55, 'Hemanshi', 'hemanshi@gmail.com', 'dfsdfs', 9876543210, 'travelling,cricket', 'female', 'ahmedabad', ''),
(56, 'vijay', 'vijay@gmail.com', '165', 9874563218, 'travelling', 'male', 'ahmedabad', 'flowers1.jpg'),
(57, 'kia', 'kia@gmail.com', 'dsfdsf', 9874563218, 'travelling,cricket', 'female', 'surat', ''),
(58, 'Rahul Sharma', 'rahul@gmail.com', '6651', 9874563218, 'travelling,cricket', 'male', 'surat', ''),
(59, 'yami', 'yami@gmail.com', '546465', 9874563218, 'travelling,cricket', 'female', 'ahmedabad', ''),
(60, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(61, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(62, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(63, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(64, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(65, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(66, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(67, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(68, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(69, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(70, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(71, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(72, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(73, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(74, 'Creative', 'cdmi@gmail.com', 'dfsd', 9876543210, 'travelling', 'male', 'ahmedabad', ''),
(75, 'skavya', 'skavya@gmail.com', 'fgfdg', 8796543210, 'travelling', 'female', 'surat', ''),
(76, 'skavya', 'skavya@gmail.com', 'fgfdg', 8796543210, 'travelling', 'female', 'surat', ''),
(77, 'skavya', 'skavya@gmail.com', 'fgfdg', 8796543210, 'travelling', 'female', 'surat', ''),
(78, 'sdfsf', 'sdfsdf@gmail.com', 'dsdfsd', 0, 'travelling', 'male', 'ahmedabad', ''),
(79, 'sdfsf', 'sdfsdf@gmail.com', 'dsdfsd', 0, 'travelling', 'male', 'ahmedabad', ''),
(80, 'sdfsf', 'sdfsdf@gmail.com', 'dsdfsd', 0, 'travelling', 'male', 'ahmedabad', ''),
(81, 'sdfsf', 'sdfsdf@gmail.com', 'dsdfsd', 0, 'travelling', 'male', 'ahmedabad', ''),
(82, 'yami', 'yami@gmail.com', 'sadasda', 9876543210, 'travelling', 'female', 'ahmedabad', ''),
(83, 'yami', 'yami@gmail.com', 'sadasda', 9876543210, 'travelling', 'female', 'ahmedabad', 'car1.jpeg'),
(84, 'yami', 'yami@gmail.com', 'sadasda', 9876543210, 'travelling', 'female', 'ahmedabad', 'car1.jpeg'),
(85, 'yami', 'yami@gmail.com', 'sadasda', 9876543210, 'travelling', 'female', 'ahmedabad', 'car1.jpeg'),
(86, 'yami', 'yami@gmail.com', 'sadasda', 9876543210, 'travelling', 'female', 'ahmedabad', 'car1.jpeg'),
(87, 'rutvi', 'rutvi@gmail.com', 'xdfsfsdf', 9876543210, 'travelling', 'female', 'surat', 'car1.jpeg'),
(88, 'rutvi', 'rutvi@gmail.com', 'xdfsfsdf', 9876543210, 'travelling', 'female', 'surat', 'car1.jpeg'),
(89, 'rutvi', 'rutvi@gmail.com', 'xdfsfsdf', 9876543210, 'travelling', 'female', 'surat', 'car1.jpeg'),
(90, 'rutvi', 'rutvi@gmail.com', 'xdfsfsdf', 9876543210, 'travelling', 'female', 'surat', 'car1.jpeg'),
(91, 'rutvi', 'rutvi@gmail.com', 'xdfsfsdf', 9876543210, 'travelling', 'female', 'surat', 'car1.jpeg'),
(92, 'rutvi', 'rutvi@gmail.com', 'xdfsfsdf', 9876543210, 'travelling', 'female', 'surat', 'car1.jpeg'),
(93, 'rutvi', 'rutvi@gmail.com', 'xdfsfsdf', 9876543210, 'travelling', 'female', 'surat', 'car1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
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
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`id`, `name`, `email`, `password`, `contact`, `hobby`, `gender`, `city`, `image`) VALUES
(1, 'Creative', 'cdmi@gmail.com', '9856', 9876543210, 'traveling,cricket', 'Male', 'navsari', ''),
(2, 'Creative', 'cdmi@gmail.com', '9856', 9876543210, 'traveling,cricket', 'Male', 'navsari', ''),
(6, 'Hemanshi', 'hemanshi@gmail.com', '9856', 9876543210, 'traveling,cricket', 'Female', 'navsari', ''),
(11, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(12, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(13, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(14, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(15, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(16, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(17, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(18, 'Creative', 'cdmi@gmail.com', '9856', 9874563218, 'traveling', 'Male', 'navsari', ''),
(19, 'priya', 'priya@gmail.com', '9856', 32156987987, 'traveling,dancing', 'Female', 'rajkot', ''),
(20, 'priya', 'priya@gmail.com', '9856', 32156987987, 'traveling,dancing', 'Female', 'rajkot', ''),
(21, 'Mayank', 'mayank@gmail.com', '9856', 9876543210, 'traveling,cricket', 'male', 'navsari', ''),
(22, 'Rahul Sharma', 'rahul@gmail.com', '9856', 9874563214, 'traveling,dancing,reading', 'male', 'navsari', ''),
(23, 'Rahul Sharma', 'rahul@gmail.com', '9856', 9874563214, 'traveling,dancing,reading', 'male', 'navsari', ''),
(24, 'Rahul Sharma', 'rahul@gmail.com', '9856', 9874563214, 'traveling,dancing,reading', 'male', 'navsari', ''),
(25, 'yami', 'yami@gmail.com', '11165', 9876543210, 'traveling,cricket', 'male', 'navsari', ''),
(26, 'yami', 'yami@gmail.com', '11165', 9876543210, 'traveling,cricket', 'male', 'navsari', ''),
(27, 'yami', 'yami@gmail.com', '11165', 9876543210, 'traveling,cricket', 'male', 'navsari', ''),
(28, 'kriti', 'kriti@gmail.com', '45465', 9876543275, 'traveling,cricket', 'female', 'navsari', ''),
(29, 'rajvi', 'rajvi@gmail.com', 'dqwedrwe', 9876543210, 'cricket', 'female', 'navsari', ''),
(30, 'kavya', 'kavya@gamil.com', '62632+', 9874563255, 'traveling', 'female', 'surat', ''),
(31, 'shivani', 'shivani@gmail.com', '122', 9876543210, 'traveling,cricket', 'female', 'navsari', ''),
(32, 'Creative', 'cdmi@gmail.com', 'dfs', 9876543210, 'cricket', 'male', 'rajkot', ''),
(33, 'Creative', 'cdmi@gmail.com', 'dfsdf', 9874563218, 'travelling', 'male', 'ahmedabad', 'car1.jpeg'),
(34, 'princy', 'princy@gmail.com', '525', 9876543254, 'cricket,reading', 'female', 'ahmedabad', 'car1.jpeg'),
(35, 'princy', 'princy@gmail.com', 'hfghfh', 9874563285, 'cricket,dancing', 'female', 'navsari', ''),
(36, 'mahi', 'mahi@gmail.com', '15464', 9624638278, 'cricket,dancing', 'female', 'navsari', ''),
(37, 'Hemanshi', 'hemanshi@gmail.com', 'dfdfg', 9876543210, 'traveling,cricket', 'female', 'navsari', ''),
(38, 'priya', 'priya@gmail.com', 'vgbfg', 9874563214, 'traveling,cricket', 'female', 'rajkot', ''),
(39, 'Hemanshi', 'cdmi@gmail.com', 'dfsf', 9874563218, 'traveling', 'female', 'navsari', ''),
(40, 'Creative', 'cdmi@gmail.com', 'dfdsf', 9874563214, 'traveling', 'male', 'surat', ''),
(41, 'Hemanshi', 'cdmi@gmail.com', 'dfsdf', 9874563218, 'traveling', 'female', 'navsari', ''),
(42, 'Hemanshi', 'cdmi@gmail.com', 'dfsdf', 9874563218, 'traveling', 'female', 'navsari', ''),
(43, 'Hemanshi', 'cdmi@gmail.com', 'dfsdf', 9874563218, 'traveling', 'female', 'navsari', ''),
(44, 'Hemanshi', 'cdmi@gmail.com', 'dfsdf', 9874563218, 'traveling', 'female', 'navsari', ''),
(45, 'Hemanshi', 'cdmi@gmail.com', 'dfsdf', 9874563218, 'traveling', 'female', 'navsari', ''),
(46, 'Hemanshi', 'cdmi@gmail.com', 'dfsdf', 9874563218, 'traveling', 'female', 'navsari', ''),
(47, 'arti', 'arti@gmail.com', 'dfsdaf', 6528956784, 'traveling,cricket', 'female', 'rajkot', 'car1.jpeg'),
(48, 'radhi', 'radhika@gmail.com', 'sdadsa', 9874563214, 'traveling', 'female', 'surat', 'car1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactbook`
--
ALTER TABLE `contactbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactbook`
--
ALTER TABLE `contactbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
