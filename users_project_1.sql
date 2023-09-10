-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2023 at 04:45 PM
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
-- Database: `project_creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_project_1`
--

CREATE TABLE `users_project_1` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_project_1`
--

INSERT INTO `users_project_1` (`id`, `name`, `email`, `password`) VALUES
(1, 'hyrejyx', 'zoxezabo@mailinator.com', 'Pa$$w0rd!'),
(2, 'lohomac', 'naqofikylu@mailinator.com', 'Pa$$w0rd!'),
(3, 'xivydakemi', 'nete@mailinator.com', 'Pa$$w0rd!'),
(4, 'cyfofyvuqe', 'rilyq@mailinator.com', 'Pa$$w0rd!'),
(5, 'donivaj', 'xyvutiluv@mailinator.com', 'Pa$$w0rd!'),
(6, 'xaxaval', 'juna@mailinator.com', 'Pa$$w0rd!'),
(7, 'hatohaqol', 'quwivuzore@mailinator.com', 'Pa$$w0rd!'),
(8, 'vigasowu', 'xumocecif@mailinator.com', 'Pa$$w0rd!'),
(9, 'myniw', 'muni@mailinator.com', 'Pa$$w0rd!'),
(10, 'cybusyry', 'lyvir@mailinator.com', 'Pa$$w0rd!'),
(11, 'cybusyry', 'lyvir@mailinator.com', 'Pa$$w0rd!'),
(12, 'cybusyry', 'lyvir@mailinator.com', 'Pa$$w0rd!'),
(13, 'cybusyry', 'lyvir@mailinator.com', 'Pa$$w0rd!'),
(14, 'cybusyry', 'lyvir@mailinator.com', 'Pa$$w0rd!'),
(15, 'gocopef', 'gynuku@mailinator.com', 'Pa$$w0rd!'),
(16, 'gocopef', 'gynuku@mailinator.com', 'Pa$$w0rd!'),
(17, 'gocopef', 'gynuku@mailinator.com', 'Pa$$w0rd!'),
(18, 'gocopef', 'gynuku@mailinator.com', 'Pa$$w0rd!'),
(19, 'cyqyc', 'lutifykuz@mailinator.com', 'Pa$$w0rd!'),
(20, 'debekepi', 'xaguvipad@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(21, 'fyrajuku', 'qunesekali@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(22, 'xegiz', 'beqagimavy@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(23, 'baqigosyp', 'syqalasa@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(24, 'pivawuc', 'fyriz@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(25, 'xyneramo', 'bylyq@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(26, 'pezekyres', 'xohe@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(27, 'dotupu', 'mojo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(28, 'bavimezily', 'goxypyzela@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(29, 'Hriday Khan Sagar II,', 'sagar.cmt1920@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(30, 'qakypif', 'pycu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(31, 'tucixu', 'mozefobica@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(32, 'kadusunyw', 'newycuxodu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(33, 'fozysas', 'qafimo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(34, 'pysucine', 'wecoxecore@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(35, 'xamyzusek', 'cozumyv@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(36, 'dokuriri', 'muvidedahu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(37, 'myben', 'fezizel@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(38, 'japox', 'wibiwaloly@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(39, 'Sagar Khan', 'gopubuzune@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(40, 'jafofoq', 'mele@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(41, 'Sagar Khan', 'sitefykuc@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(42, 'lynyw', 'gotaxalew@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(43, 'nypiwit', 'lakesox@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(44, 'runug', 'cepu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(45, 'qewehewedu', 'vosofybo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(46, 'feqavyt', 'davo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(47, 'Sagar Khan,', 'kyvubeh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(48, 'cobyvidosi', 'fumo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(49, 'pejucugip', 'bovafub@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(50, 'top header,', 'lybacuzepe@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(51, 'sygyqa', 'faqurux@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_project_1`
--
ALTER TABLE `users_project_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_project_1`
--
ALTER TABLE `users_project_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
