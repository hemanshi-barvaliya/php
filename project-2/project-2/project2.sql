-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 12:05 PM
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
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(4, 'Creative', 'cdmi@gmail.com', '123'),
(5, 'Creative', 'cdmi@gmail.com', '123');

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
(14, '03.png', 'ABCD', '2025-04-03', 'makeup', 'Sincerely Jules is a fashion and lifestyle blog by Julie Sariñana. Julie’s style is spot-on, and she gives great tips on mixing everyday wear with high-end fashion. The blog stands out because it feels like getting style advice from a knowledgeable friend. Julie also dives into travel and beauty topics, giving her blog a wide range of interesting content beyond just fashion.  The main income streams for the site include affiliate links, brand collaborations, and sponsored content, all seamlessly integrated into its stylish platform.'),
(15, 'blog4.png', 'cde', '2025-03-04', 'Winter Special', 'Fashion Jackson is one of the top fashion blogs created by Amy Jackson, based in Nashville. The site stands out for its focus on minimalist sophistication, offering style and beauty tips, home decor ideas, and travel experiences. She’s all about good quality and keeping things simple but fashionable. Her personal touch adds a unique flavor to the blog, making it relatable for her readers.'),
(16, 'blog5.png', 'aaa', '2025-03-05', 'Casual Wear', 'Guy Overboard is a blog by Riccardo Onorato, based in Rome, dedicated to plus-size fashion and promoting body confidence. It stands out by addressing a relatively underserved market with a mix of fashion tips, lifestyle content, and thoughtful commentary on body image. Riccardo’s approach is about more than just clothes; it’s about embracing self-confidence and challenging norms in fashion.  The site likely earns revenue through affiliate marketing, as indicated by product links, and through sponsored content and collaborations with fashion and lifestyle brands.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`) VALUES
(1, 1, 15),
(2, 1, 42),
(3, 1, 17);

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
(3, 'men'),
(4, 'women'),
(5, 'kids'),
(9, 'Wrist Watch'),
(10, 'hand bag'),
(11, 'Glasses');

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
  `suggetion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `b_id`, `comment`, `name`, `email`, `suggetion`) VALUES
(1, '1', '22', 'Creative', 'cdmi@gmail.com', 'asa'),
(2, '2', 'w', 'Creative', 'cdmi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `contact`, `message`) VALUES
(1, 'Creative', 'cdmi@gmail.com', 9876543210, 'abc'),
(2, 'Mayank', 'mayank@gmail.com', 1234567890, 'abc'),
(3, 'Mayank', 'mayank@gmail.com', 1234567890, 'abc'),
(4, 'Mayank', 'mayank@gmail.com', 1234567890, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `category` text NOT NULL,
  `name` text NOT NULL,
  `basic` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `category`, `name`, `basic`, `discount`) VALUES
(15, 'w.jpg', '3', 'kurta', 55, 82),
(17, 'd.webp', '10', 'hand bag', 64, 77),
(18, 'g.jpg', '10', 'hand bag', 70, 80),
(23, 'b.webp', '11', 'Glasses', 22, 30),
(24, 'a.jpg', '11', 'Glasses', 78, 90),
(25, 'k.jpg', '9', 'watch', 66, 70),
(26, 'j.webp', '9', 'watch', 80, 94),
(27, 'o.jpg', '5', 'Princess frock', 55, 60),
(28, 'p.jpeg', '5', 'Princess frock', 70, 88),
(32, 's.jpg', '8', 'dress', 33, 80),
(33, 't.webp', '8', 'dress', 77, 88),
(34, 'z.webp', '3', 'kurta', 66, 80),
(35, 'v.png', '4', 'dress', 100, 90),
(36, 'cc.webp', '3', 'shirt', 77, 88),
(37, 'v.png', '4', 'dress', 77, 80),
(38, 's.jpg', '4', 'dress', 111, 122),
(39, 'q.jpg', '5', 'Princess frock', 87, 99),
(41, 'u.jpg', '4', 'dress', 121, 132),
(42, 'ee.webp', '3', 'shirt', 12, 20),
(43, 'aa.webp', '3', 'kurta', 70, 77);

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
(1, 'hemanshi', 'paghadal', '2.png', 'hemanshi@gmail.com', '123', 'India'),
(2, 'priya', 'vekriya', 'avatar-2.png', 'priya@gmail.coma', '123', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `subject`, `title`, `description`, `image`) VALUES
(7, 'Has just arrived!', 'Huge Summer Collection', 'Swimwear, Tops, Shorts, Sunglasses & much more...', 'slider1.png'),
(11, 'Hurry up! Limited time offer.', 'Women Sportswear Sale', 'Sneakers, Keds, Sweatshirts, Hoodies & much more...', 'slider_3.png'),
(14, 'Complete your look with', 'New Men\'s Accessories', 'Hats & Caps, Sunglasses, Bags & much more...', 'slider_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `country`) VALUES
(3, 'hem', 'paghadal', 'hem@gmail.com', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
