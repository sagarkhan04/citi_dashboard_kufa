-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2023 at 02:05 PM
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
(2, '3K', 'Keaton Preston', 'fab fa-aws'),
(3, '345', 'MONA STEWART', 'fab fa-blogger'),
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
(1, 'Martin Holden', 'sagor1769133@gmail.com', 'Elit modi totam nul', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
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
  `description` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'activate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `design_name`, `description`, `image`, `status`) VALUES
(18, 'Giselle Roy', 'Hayfa Weber', 'Samson Beck', '8d420fa35754d1f1c19969c88780314d.png', 'active'),
(19, 'Keane Rivers', 'Leah Prince', 'Ezekiel David', '2023-09-22-10.jpg', 'active'),
(20, 'Rigel Walls', 'Odette Hodges', 'Halee Copeland', '2023-09-22-30.png', 'active'),
(21, 'Tanek Oliver', 'Jescie Frederick', 'Nina Singleton', '2023-09-22-52.png', 'active'),
(22, 'Dahlia Robinson', 'Yetta Thornton', 'Oleg Gilbert', '2023-09-23-59.jpg', 'active'),
(24, 'Lavinia Pollard', 'Joshua Cash', 'Deborah Hurst', '9f8785c7f9b578bec2c09e616568d270.png', 'active');

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
(1, 'Sagar Khan', 'Bengali original', 'আমার সোনার বাংলা, আমি তোমায় ভালোবাসি।\r\n𝄆 চিরদিন তোমার আকাশ, 𝄇\r\nতোমার বাতাস, আমার প্রাণে\r\nও মা, আমার প্রাণে বাজায় বাঁশি॥\r\nসোনার বাংলা, আমি তোমায় ভালোবাসি।\r\nও মা, ফাগুনে তোর আমের বনে ঘ্রাণে পাগল করে,\r\nমরি হায়, হায় রে—\r\nও মা, ফাগুনে তোর আমের বনে ঘ্রাণে পাগল করে,\r\nও মা, অঘ্রাণে তোর ভরা ক্ষেতে কী দেখেছি\r\nআমি কী দেখেছি মধুর হাসি॥\r\nসোনার বাংলা, আমি তোমায় ভালোবাসি।', '2023-09-20-09.png', 'active'),
(2, 'Sagar Khan', 'Romanisation of Bengali', 'Amar shonar Bangla, ami tomay bhalobashi.\r\n𝄆 Cirodin tomar akash, 𝄇\r\nTomar batash, amar prane\r\nO ma, amar prane bajay bãshi.\r\nShonar Bangla, ami tomay bhalobashi.\r\nO ma, phagune tor amer bone ghrane pagol kôre,\r\nMori hay, hay re:\r\nO ma, phagune tor amer bone ghrane pagol kôre,\r\nO ma, Ôghrane tor bhôra khete ki dekhechi\r\nAmi ki dekhechi modhur hashi.\r\nShonar Bangla, ami tomay bhalobashi.', '2023-09-20-21.png', 'active'),
(3, 'Claudia Waters', 'Petra Morgan', 'আমার সোনার বাংলা, আমি তোমায় ভালোবাসি।\r\n𝄆 চিরদিন তোমার আকাশ, 𝄇', '2023-09-20-06.jpg', 'active');

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
(1, 'Admin', 'poryniqud@mailinator.com', '1-Admin-2023-09-17.png', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'qaviruv', 'nyfysalab@mailinator.com', 'default-img.jpg', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(3, 'koroxekijy', 'wuxa@mailinator.com', 'default-img.jpg', 'f3ed11bbdb94fd9ebdefbaf646ab94d3');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
