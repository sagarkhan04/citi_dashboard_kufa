-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2023 at 05:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kufa`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int NOT NULL,
  `top_about` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bottom_about` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `top_about`, `bottom_about`, `image`) VALUES
(1, 'I\'m Will Smith, professional web developer with long time experience in this field​.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit. Numquam!', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `brand_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `facebook` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `linkedin` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `github` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `github`, `phone`, `email`, `address`) VALUES
(1, 'https://www.facebook.com/hridaykhan.sagor', 'https://twitter.com/sagarkhan04', 'https://www.instagram.com/hriday.khan_sagor01/', 'https://www.linkedin.com/in/sagar-khan-537383258/', 'https://github.com/sagarkhan04', '01700000000', 'sagar.cmt1920@gmail.com', 'Dhaka, Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `progress` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `year`, `subject`, `progress`) VALUES
(1, '2020', 'PHD of Interaction Design &amp; Animation', 100),
(2, '2015', 'Iona Graves', 1982),
(7, '2015', 'Iona Graves bangladesh', 20);

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int NOT NULL,
  `number` varchar(10000) COLLATE utf8mb4_general_ci NOT NULL,
  `info_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `number`, `info_name`, `icon`) VALUES
(4, '381', 'Grady Orr', 'fab fa-adversal'),
(6, '733', 'Prescott Pace', 'fab fa-btc'),
(7, '550', 'Cullen Cooke', 'fab fa-angrycreative');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Mark Harding', 'sagar.cmt4059459rpi@gmail.com', 'Consequatur Vel vol', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'Palmer Ortega', 'mdsagor1769133@gmail.com', 'Omnis inventore fugi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'Sagar Khan', 'sagor1769133@gmail.com', 'Subject Name', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `design_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description_short` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description_long` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'activate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `design_name`, `description_short`, `description_long`, `image`, `status`) VALUES
(18, 'Giselle Roy', 'Hayfa Weber', 'Samson Beck', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam nobis error aliquid obcaecati a aliquam, dolorem, alias dolor dicta, corrupti sit assumenda voluptates harum vitae? Ea labore earum dolores suscipit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam nobis error aliquid obcaecati a aliquam, dolorem, alias dolor dicta, corrupti sit assumenda voluptates harum vitae? Ea labore earum dolores suscipit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam nobis error aliquid obcaecati a aliquam, dolorem, alias dolor dicta, corrupti sit assumenda voluptates harum vitae? Ea labore earum dolores suscipit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam nobis error aliquid obcaecati a aliquam, dolorem, alias dolor dicta, corrupti sit assumenda voluptates harum vitae? Ea labore earum dolores suscipit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam nobis error aliquid obcaecati a aliquam, dolorem, alias dolor dicta, corrupti sit assumenda voluptates harum vitae? Ea labore earum dolores suscipit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam nobis error aliquid obcaecati a aliquam, dolorem, alias dolor dicta, corrupti sit assumenda voluptates harum vitae? Ea labore earum dolores suscipit.', '8d420fa35754d1f1c19969c88780314d.png', 'active'),
(19, 'Keane Rivers', 'Leah Prince', 'Lorem ipsum, dolor', '', '2023-09-22-10.jpg', 'active'),
(20, 'Rigel Walls', 'Odette Hodges', 'Halee Copeland', '', '2023-09-22-30.png', 'active'),
(21, 'Tanek Oliver', 'Jescie Frederick', 'Nina Singleton', '', '2023-09-22-52.png', 'active'),
(22, 'Dahlia Robinson', 'Yetta Thornton', 'Oleg Gilbert', '', '2023-09-23-59.jpg', 'active'),
(24, 'Lavinia Pollard', 'Joshua Cash', 'Deborah Hurst', '', '9f8785c7f9b578bec2c09e616568d270.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(32, 'Web Design', 'orem Ipsum es simplemente el texto de relleno de las imprentas ', 'fa fa-globe', 'active'),
(33, 'Web Development', 'orem Ipsum es simplemente el texto de relleno de las', 'fas fa-allergies', 'active'),
(36, 'Voluptatibus aut exe', 'Incidunt explicabo', 'fa fa-ambulance', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `social_medias`
--

CREATE TABLE `social_medias` (
  `id` int NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_medias`
--

INSERT INTO `social_medias` (`id`, `icon`, `link`) VALUES
(5, 'fab fa-facebook', 'https://www.facebook.com/hridaykhan.sagor'),
(7, 'fab fa-instagram', 'https://www.instagram.com/hriday.khan_sagor01/'),
(8, 'fab fa-linkedin-in', 'https://www.linkedin.com/in/sagar-khan-537383258/'),
(9, 'fab fa-twitter', 'https://twitter.com/sagarkhan04'),
(10, 'fab fa-github', 'https://github.com/sagarkhan04'),
(11, 'fab fa-codepen', 'https://codepen.io/Sagar-khan'),
(14, 'fab fa-whatsapp', 'phone=8801643161999&text=Hi%2C%20how%20can%20I%20help%20you%3F');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `sub_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `sub_name`, `description`, `image`, `status`) VALUES
(1, 'Sagar Khan', 'Bengali original', 'Become an IT Pro & Rule the Digital World\r\nWith a vision to turn manpower into assets, Creative IT Institute is ready to enhance your learning experience with skilled mentors and updated curriculum. Pick your desired course from more than 30 trendy options.', '2023-09-20-09.png', 'active'),
(2, 'Sagar Khan', 'Romanisation of Bengali', 'Become an IT Pro & Rule the Digital World\r\nWith a vision to turn manpower into assets, Creative IT Institute is ready to enhance your learning experience with skilled mentors and updated curriculum. Pick your desired course from more than 30 trendy options.', '2023-09-20-21.png', 'active'),
(3, 'Claudia Waters', 'Petra Morgan', 'Become an IT Pro & Rule the Digital World\r\nWith a vision to turn manpower into assets, Creative IT Institute is ready to enhance your learning experience with skilled mentors and updated curriculum. Pick your desired course from more than 30 trendy options.', '2023-09-20-06.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default-img.jpg',
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`) VALUES
(4, 'Sagar Khan', 'sagar.cmt1920@gmail.com', '4-Sagar Khan-2023-09-27.png', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_medias`
--
ALTER TABLE `social_medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `social_medias`
--
ALTER TABLE `social_medias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
