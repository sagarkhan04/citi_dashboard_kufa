-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2023 at 02:06 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
