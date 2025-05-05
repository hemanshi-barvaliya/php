-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 08:12 AM
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
-- Database: `yom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Forest'),
(2, 'Mountain'),
(3, 'house'),
(6, 'island'),
(7, 'sea'),
(8, 'Demo'),
(9, 'beach');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `name` text NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `name`, `place`) VALUES
(1, 'This is just for testing purpose.........!!!! ', 'Demo', 'Surat'),
(2, 'This is demo....', 'Test', 'mumbai'),
(3, 'abcdefghijklmnopqrstuvwxyz', 'Test', 'Delhi'),
(4, 'This is just for testing purpose.........!!!! ', 'Test', 'Chennai'),
(5, 'This is demo....', 'localdemo', 'jaipur'),
(6, 'abcdefghijklmnopqrstuvwxyz', 'hello', 'US'),
(7, 'Hello world...!!!', 'India', 'India'),
(8, 'This is just for testing purpose.........!!!! ', 'Demo', 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'hello', 'hello@gmail.com', 'sea', 'hello world'),
(2, 'hello', 'hello@gmail.com', 'mountain', 'hello world'),
(3, 'Demo', 'dhananimeet63@gmail.com', 'aaaa', 'fyhryhe44et6'),
(4, 'Demo', 'dhananimeet63@gmail.com', 'aaaa', 'fyhryhe44et6'),
(5, 'hello', 'raina@gmail.com', '789', 'reytgfvuiyug8'),
(6, 'Demo', 'harshdungrani19@gmail.com', '789', 'uhjkiygikygjmgyuj');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `discription` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `discription`, `image`) VALUES
(1, 'ABC', 'hello!!!!!.......', '1.jpeg'),
(2, 'Hello ', 'hello miss!!.....', '7.webp'),
(3, 'hello', 'Hello World!!.....', '9.jpeg'),
(5, 'Demo', 'This is a Demo Slider', '1.jpeg'),
(6, 'Test', 'This is a Demo Slider', '10.jpeg'),
(7, 'hello', 'Hello World...', '11.jpeg'),
(8, 'Test', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', '12.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `tital` text NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `icon`, `tital`, `discription`) VALUES
(3, 'fa-pencil-square-o ', 'Demo', 'Lorem ipsum dolor Nostrum nam '),
(4, 'fa-star-half-full', 'Hello........!!!', 'Hello World...'),
(5, ' fa-thumbs-up', 'Test', 'This is for testing purpose'),
(6, 'fa-university', 'Tutorial', 'This is just for tutorial purpose....'),
(7, ' fa-arrows', 'abc', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.'),
(8, ' fa-thumbs-up', 'Demo', 'This is a Demo Slider');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `tital` text NOT NULL,
  `author` text NOT NULL,
  `date` text NOT NULL,
  `category` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `image`, `tital`, `author`, `date`, `category`, `description`) VALUES
(1, '2.jpeg', 'fgklfskgnm', 'oin,fnj', '2023-10-29', 'mountain', 'dfdfdf'),
(3, '6.jpeg', 'ABC.....', 'abc', '2024-10-10', 'forest', 'This is only for testing purpose'),
(4, '7.jpeg', 'DEMO', 'DEMONAME', '2024-10-09', 'sea', 'This is other slider'),
(5, '3.jpeg', 'DEMO', 'Demo', '2024-09-06', 'Mountain', 'This is a Demo Slider'),
(7, '1.jpeg', 'DEMO', 'hello', '2024-11-10', 'island', 'This is other slider'),
(8, '4.jpeg', 'DEMO', 'hello', '2024-11-10', 'island', 'This is other slider'),
(9, '9.jpeg', 'DEMO', 'hello', '2024-11-10', 'house', 'This is other slider'),
(10, '5.jpeg', 'DEMO', 'Demo', '2024-10-04', 'island', 'This is only for testing purpose'),
(12, '7.jpeg', 'fgklfskgnm', 'hello', '2024-10-19', 'Demo', 'This is other slider'),
(13, '10.jpeg', 'DEMO', 'Test', '2024-10-20', 'Mountain', 'This is a Demo Slider'),
(14, '7.webp', 'xyz', 'Demo', '2024-10-06', 'Forest', 'This is a Demo Slider'),
(15, '5.jpeg', 'xyz', 'abc', '2024-10-17', 'Forest', 'This is other slider'),
(16, '9.jpeg', 'fgklfskgnm', 'abc', '1995-04-05', 'Forest', 'This is a Demo Slider'),
(17, '9.jpeg', 'ABC.....', 'hello', '2024-12-03', 'beach', 'This is other slider');

-- --------------------------------------------------------

--
-- Table structure for table `postcom`
--

CREATE TABLE `postcom` (
  `id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `postcom`
--

INSERT INTO `postcom` (`id`, `b_id`, `image`, `name`, `email`, `subject`, `comment`) VALUES
(6, 16, '10.jpeg', 'rfdf', 'dobariyakrushi@gmail.com', '765432', 'htf nyrt'),
(7, 16, '11.jpeg', 'hello', 'hellomaya@gmail.com', '789', 'rt45eeeeeeeeeeeee3rf23w2qa'),
(8, 16, '12.jpeg', 'sea', 'hellomaya@gmail.com', 'aaaa', '57ur45thyer4y634we '),
(9, 15, 'Screenshot 2024-08-05 163505.png', 'Demo', 'hellomiss@fgmail.com', '765432', 'hello'),
(10, 17, '1000_F_406867978_IWVNPI4VP1UGwolabmOInCmc9giTcnBl.jpg', 'gjty', 'jasoliyaravi@gmail.com', 'iuol7t5678', 'tyrf6u65u7j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postcom`
--
ALTER TABLE `postcom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `postcom`
--
ALTER TABLE `postcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
