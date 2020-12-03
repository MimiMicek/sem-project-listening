-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 09:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem_project`
--
CREATE DATABASE IF NOT EXISTS `sem_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `sem_project`;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer8` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`) VALUES
(1, '', '', '', '', '', '', '', ''),
(2, 'fsdfsdf', 'sdfsdf', 'dsfsdfsd', 'dsfsdf', 'sdfsdf', 'dsfsdf', 'sdfsdfsd', 'fsdfsdf'),
(3, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `essays`
--

CREATE TABLE `essays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `essay` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `essays`
--

INSERT INTO `essays` (`id`, `essay`) VALUES
(1, 'sgsgsgsfgm');

-- --------------------------------------------------------

--
-- Table structure for table `timestamps`
--

CREATE TABLE `timestamps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pageName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timestamps`
--

INSERT INTO `timestamps` (`id`, `dateTime`, `pageName`) VALUES
(1, '30/11/2020 11:43:20', 'overviewPage'),
(2, '30/11/2020 11:43:23', 'listeningPage'),
(3, '30/11/2020 11:43:24', 'attentionPage'),
(4, '30/11/2020 11:43:29', 'questionsPage'),
(5, '30/11/2020 11:43:49', 'questionsPage'),
(6, '30/11/2020 11:43:56', 'essayMazePage'),
(7, '30/11/2020 11:45:41', 'overviewPage'),
(8, '30/11/2020 11:45:42', 'listeningPage'),
(9, '30/11/2020 11:45:44', 'attentionPage'),
(10, '30/11/2020 11:45:45', 'questionsPage'),
(11, '30/11/2020 11:45:49', 'essayMazePage'),
(12, '30/11/2020 11:46:52', 'essayMazePage'),
(13, '30/11/2020 11:49:23', 'essayMazePage'),
(14, '30/11/2020 11:51:53', 'essayMazePage'),
(15, '30/11/2020 11:52:30', 'essayMazePage'),
(16, '30/11/2020 11:53:44', 'essayMazePage'),
(17, '30/11/2020 11:55:20', 'essayMazePage'),
(18, '01/12/2020 09:57:33', 'overviewPage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `essays`
--
ALTER TABLE `essays`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `timestamps`
--
ALTER TABLE `timestamps`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `essays`
--
ALTER TABLE `essays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timestamps`
--
ALTER TABLE `timestamps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
