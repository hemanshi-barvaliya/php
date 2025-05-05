-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 11:45 AM
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
-- Database: `projectwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cupiditate cumque vitae necessitatibus recusandae suscipit ipsum a harum illo odit, facilis optio aspernatur, accusantium mollitia aut incidunt quasi earum libero possimus quaerat iste blanditiis assumenda dolorum ducimus ab. <br><br> <em><i class=\"fa fa-info\"></i>Quis, sequi illo nobis velit. Quas minima corporis quis laborum, ex odit natus.</em><br><br>Blanditiis possimus voluptas similique numquam consequatur dolorem labore veritatis quaerat laboriosam, porro tenetur vel exercitationem laborum aperiam repellat expedita ipsum corrupti perspiciatis! Quia necessitatibus totam repudiandae ipsam aut repellendus, aspernatur soluta consectetur aperiam accusantium aliquid beatae nihil magni nulla, similique minus perspiciatis provident qui veritatis dolorum quasi sint. Quam impedit in eos illum sint officiis reiciendis repellendus quia, similique ipsa porro accusantium dolores sunt error, ex, tempora et voluptatibus eveniet. <br><br>Voluptatibus libero laboriosam tempore rerum error non. Perspiciatis deleniti iste a. Illo ipsum, commodi vel necessitatibus assumenda veritatis a velit possimus sint!');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `title`, `description`, `icon`) VALUES
(12, 'Fully Responsive', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', 'fa-envelope'),
(13, 'Retina Ready', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', 'fa-house'),
(14, 'service-item', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', 'fa-comment'),
(16, 'serviece', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', ' fa-camera-retro'),
(17, 'Retina', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', 'fa-video'),
(18, 'hhh', 'lorem sdfdfsdfgsdfsd', 'fa-envelope');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `image`) VALUES
(5, 'Synth Thundercats', 'Lorem ipsum dolor sit amet consectetur', '04-blog.jpg'),
(6, 'Synth', 'Lorem ipsum dolor sit amet consectetur', '08-portfolio.jpg'),
(11, 'dasd', 'sdasdasdasd', '07-portfolio.jpg'),
(12, 'dfsd', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', '04-portfolio.jpg'),
(13, '123', 'sdasdasdasd', '08-client.png');

-- --------------------------------------------------------

--
-- Table structure for table `project1`
--

CREATE TABLE `project1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `hobby` text NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `reset_token` varchar(255) NOT NULL,
  `reset_token_expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project1`
--

INSERT INTO `project1` (`id`, `name`, `email`, `password`, `contact`, `hobby`, `gender`, `city`, `reset_token`, `reset_token_expiration`) VALUES
(2, 'Creative', 'cdmi@gmail.com', '9999', 9876543210, 'cricket,reading', 'male', 'surat', '2244ca3ec04bb72798f9a4a27d6b014acf258ed3b575bfea113efe7eae0931e5', 1742295291),
(6, 'Creative', 'cdmi@gmail.commmmmmmmm', '123', 9876543210, 'cricket,camping,reading', 'male', 'surat', '', 0),
(13, 'Shruti', 'shrutirakholiya154@gmail.com', '7777', 9874563218, 'cricket,reading', 'female', 'navsari', '256673b32ad31dd7dd722298c9bfb3b1d47fd3d11179d0f3331068ff9e29d464', 1742385733),
(14, 'hemali', 'hemalitalaviya2@gmail.com', '123', 9876543210, 'cricket,camping', 'female', 'navsari', '27eb26c6cd5c8596d064a58ac30294fad88c75b269b2dfbd40e6fdca7bf0bf22', 1742298693),
(15, 'Hemanshi', 'hem@gmail.com', '1234', 9876543210, 'cricket', 'female', 'navsari', '', 0),
(16, 'nirali', 'niralikhunt27@gmail.com', '123', 1234567890, 'reading', 'female', 'surat', '14e91dc15b36e3f9090ff338e6dbecefce4e186e8c0537f8ce63aded790bf866', 1742386679),
(17, 'kaushik', 'kaushikwebdesigner@gmail.com', '1234', 9632574156, 'cricket,travelling', 'male', 'surat', '5656ace2d1d49c68fa50c337ea2e0e4452a4c249e7b506f75a5fc5f042dd58e2', 1742533439),
(18, 'hem', 'hem.paghadal@gmail.com', '321', 9876543210, 'camping,travelling', 'female', 'navsari', '04ca51ef304587afd90b1db5e9638c8af8bc0aed44d110b44db867e811ae6cab', 1742538801);

-- --------------------------------------------------------

--
-- Table structure for table `project2`
--

CREATE TABLE `project2` (
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
-- Dumping data for table `project2`
--

INSERT INTO `project2` (`id`, `name`, `email`, `password`, `contact`, `hobby`, `gender`, `city`, `image`) VALUES
(4, 'Creative', 'cdmi@gmail.com', '123', 9876543210, 'cricket', 'male', 'surat', 'avatar5.png'),
(6, 'Hemanshi', 'hem@gmail.com', '1234', 9876543210, 'travelling,cricket', 'female', 'ahmedabad', 'avatar2.png'),
(7, 'Hemanshi', 'hem@gmail.com', '1234', 9876543210, 'travelling,cricket', 'female', 'ahmedabad', 'avatar2.png'),
(8, 'Mayank', 'mayank@gmail.com', '1234', 9876543210, 'travelling,cricket', 'male', 'rajkot', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `description`, `image`) VALUES
(57, 'priyaaa', 'lorem sdfdfsdfgsdfsdggjghjghjghjghjghjkdfgdfggf', '04-portfolio.jpg'),
(65, 'Hemanshiiiiiiiiiii', 'lorem sdfdfsdfgsdfsdggjghjghjghjghjghjkdfgdfggf', '05-blog.jpg'),
(66, 'Creativeeeeeeeeeee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.', '09-portfolio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `yom`
--

CREATE TABLE `yom` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yom`
--

INSERT INTO `yom` (`id`, `name`, `email`, `password`) VALUES
(1, 'hemanshi', 'hemanshi@gmail.com', '123'),
(2, 'Mayank', 'mayank@gmail.com', '123'),
(3, 'Creative', 'cdmi@gmail.com', '123'),
(5, 'Creative', 'cdmi@gmail.com', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
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
-- Indexes for table `project1`
--
ALTER TABLE `project1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project2`
--
ALTER TABLE `project2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yom`
--
ALTER TABLE `yom`
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
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project1`
--
ALTER TABLE `project1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `project2`
--
ALTER TABLE `project2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `yom`
--
ALTER TABLE `yom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
