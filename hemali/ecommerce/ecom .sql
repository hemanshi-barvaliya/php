-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 12:03 PM
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
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `name`, `email`, `password`) VALUES
(8, 'test', 'first_user@gmail.com', '1233'),
(9, 'test', 'user123@gmail.com', '23444'),
(10, 'Princess frock', 'admin@gmail.com', '3444'),
(11, 'Dr.Smith ', 'scoat@gmail.com', '666'),
(12, 'hhh', 'hhh@gmail.com', '345'),
(13, 'Scoat', 'admin@gmail.com', '4444'),
(14, ' frock', 'admin@gmail.com', '4566'),
(15, ' frock', 'first_user@gmail.com', '5555');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `date` date NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `name`, `date`, `title`, `description`) VALUES
(1, 'b1.png', 'ABC', '2024-11-22', 'Winter wear', '“Color Me Courtney” is a personal blog run by Courtney, a New Yorker with a passion for color and style. The website stands out for its bright, bold aesthetics and Courtney’s unique approach to fashion and lifestyle. Her content is not just about style; it’s about living life colorfully and embracing individuality. The site’s personal touch makes it feel like you’re getting advice from a fashionable friend.  The main income streams for the website include sponsored content partnerships, affiliate marketing, and merchandise sales.\"'),
(2, 'b2.png', 'XYZ', '2024-07-10', 'Office wear', 'Fashion Jackson is one of the top fashion blogs created by Amy Jackson, based in Nashville. The site stands out for its focus on minimalist sophistication, offering style and beauty tips, home decor ideas, and travel experiences. She’s all about good quality and keeping things simple but fashionable. Her personal touch adds a unique flavor to the blog, making it relatable for her readers.'),
(3, 'b3.png', 'ABCD', '2024-11-07', 'Traditional wear', 'Sincerely Jules is a fashion and lifestyle blog by Julie Sariñana. Julie’s style is spot-on, and she gives great tips on mixing everyday wear with high-end fashion. The blog stands out because it feels like getting style advice from a knowledgeable friend. Julie also dives into travel and beauty topics, giving her blog a wide range of interesting content beyond just fashion.  The main income streams for the site include affiliate links, brand collaborations, and sponsored content, all seamlessly integrated into its stylish platform.'),
(8, 'b5.png', 'HJUGUJH', '2024-11-22', 'Winter Special', 'With fashion businesses recognizing the benefits that blogging can bring to their websites, it’s understandable that many are rushing to create their own blogs. There is no shortage of potential blog post topics to select from, and a fashion blog is not only cheaper than traditional advertising, but it can have greater reach as well.  Fashion is an everchanging subject that can give rise to new trends overnight, so fashion aficionados will be looking for blogs with daily updates of expert insights, creative guides, and general news regarding what is currently stylish. Having an informative fashion blog on your website is important in not only bringing in new customers to your site but also in giving your readers the confidence that your business is genuinely interested in fashion trends.'),
(9, 'b6.png', 'Anaya', '2024-11-10', 'Casual Wear', 'Guy Overboard is a blog by Riccardo Onorato, based in Rome, dedicated to plus-size fashion and promoting body confidence. It stands out by addressing a relatively underserved market with a mix of fashion tips, lifestyle content, and thoughtful commentary on body image. Riccardo’s approach is about more than just clothes; it’s about embracing self-confidence and challenging norms in fashion.  The site likely earns revenue through affiliate marketing, as indicated by product links, and through sponsored content and collaborations with fashion and lifestyle brands.'),
(10, 'b4.png', 'Amir', '2024-08-09', 'Traditional Collection', 'The Blonde Salad is a fashion and lifestyle blog by Chiara Ferragni. It’s known for mixing high-end fashion with everyday style, along with Chiara’s own stories and experiences. In 2013, Chiara launched her own collection, adding trendy clothes, accessories, and shoes to the mix. The blog is a go-to for fashion, beauty, travel, and lifestyle, attracting a wide audience interested in fashion blog examples with its mix of professional insights and personal touches.  The main sources of income for The Blonde Salad include partnerships with luxury brands, affiliate marketing, and the sale of exclusive fashion merchandise from the Chiara Ferring Collection.');

-- --------------------------------------------------------

--
-- Table structure for table `catergory`
--

CREATE TABLE `catergory` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catergory`
--

INSERT INTO `catergory` (`id`, `name`) VALUES
(1, 'Women'),
(2, 'Men'),
(3, 'Kids'),
(4, 'Ethnic'),
(5, 'Wrist Watch'),
(6, 'hand bag'),
(7, 'Glasses');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `b_id` text NOT NULL,
  `comment` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `b_id`, `comment`, `name`, `email`, `suggestion`) VALUES
(2, '10', 'this is only for testing purpose....!', 'test', 'test@gmail.com', ''),
(3, '10', 'this is only for testing purpose....!', 'test', 'test@gmail.com', ''),
(4, '10', 'this is for testing', 'test', 'test@gmail.com', ''),
(5, '10', 'tregfc', 'test', 'test@gmail.com', ''),
(6, '2', 'This is admin...', 'admin', 'admin@gmail.com', ''),
(7, '9', 'Hello world........', 'Hello', 'first_user@gmail.com', ''),
(8, '3', 'this is just for admin', 'admin', 'user123@gmail.com', ''),
(9, '8', 'hey...this id just for demo', 'demo', 'demo@gmail.com', ''),
(10, '8', 'hello...this is admin', 'Admin', 'admin@gmail.com', ''),
(11, '1', 'Hello this is new test site', 'Hello', 'hello@gmail.com', ''),
(12, '1', 'hello how are you?', 'hello', 'hello@gmail.com', '');

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
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `education` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `hobby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`id`, `name`, `education`, `dob`, `email`, `password`, `gender`, `hobby`) VALUES
(3, 'admin', 'Graduate', '2024-12-25', 'admin@gmail.com', '789', 'female', 'reading,singing'),
(5, 'test', 'H.S.C.', '2024-12-18', 'user123@gmail.com', '456', 'male', 'reading,singing,cricket'),
(28, 'Dr.Smith ', 'Post-graduate', '2024-11-20', 'first_user@gmail.com', '159753', 'female', 'singing'),
(29, 'demo', 'Graduate', '2024-09-13', 'demo@gmail.com', '951', 'male', 'reading,cricket'),
(30, 'test', 'H.S.C.', '3456-01-02', 'test@gmail.com', '753', 'female', 'singing');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `catergory` text NOT NULL,
  `name` text NOT NULL,
  `basic` text NOT NULL,
  `discount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `catergory`, `name`, `basic`, `discount`) VALUES
(1, '8.png', '2', 'kurta', '90', '50'),
(5, '2.png', '1', 'hand bag', '70', '50'),
(6, '6.png', '1', 'Wrist Watch', '150', '100'),
(7, '5.png', '2', 'Wrist Watch', '170', '120'),
(8, '9.png', '3', 'Princess frock', '70', '45'),
(9, '10.png', '3', 'frock', '60', '35'),
(10, '12.png', '2', 'Glasses', '200', '170'),
(11, '13.png', '1', 'Glasses', '180', '100'),
(12, '11.png', '3', 'jeans', '120', '90'),
(13, '14.png', '1', 'hand bag', '150', '120'),
(14, '15.png', '1', 'sling bag', '100', '80'),
(15, '17.png', '1', 'clutch', '170', '130'),
(16, '16.png', '4', 'clutch', '180', '150'),
(17, '18.png', '2', 'hand bag for men', '150', '140'),
(18, '19.png', '2', 'hand bag', '100', '90'),
(19, '20.png', '2', 'gym bag for men', '250', '200'),
(21, '5.png', '2', ' watch', '150', '120'),
(22, '4.png', '2', 'shirt', '100', '50');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `image` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `surname`, `image`, `email`, `password`, `country`) VALUES
(1, 'first', 'user', 'b2.png', 'first_user@gmail.com', '123456789', 'India'),
(8, 'user', 'Obama', 'b2.png', 'userobama@gmail.com', '12345678', 'America'),
(9, 'admin', '123', 'b5.png', 'admin123@gmail.com', '9876543210', 'America');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `sub` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `sub`, `title`, `description`, `image`) VALUES
(4, 'Update your look with..', 'Our Winter Collection..', 'Formal wear and  casual wear...', '03.png'),
(6, 'Complete Your Look with..', 'Our Great collection of Watches...', 'Smart watch, casual watch, sports watch..', '04.png'),
(7, 'Complete Your Look with..', 'Our New Collection....!', 'Accessories, Ornaments, Cosmetics Product...', '05.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catergory`
--
ALTER TABLE `catergory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `catergory`
--
ALTER TABLE `catergory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `function`
--
ALTER TABLE `function`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
