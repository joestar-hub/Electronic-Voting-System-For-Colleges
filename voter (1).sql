-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2022 at 07:50 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `email` text,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'me@gmail.com', 'happy\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int NOT NULL,
  `name` text,
  `email` text,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `position_id` text,
  `votes` text,
  `date_joined` text,
  `manifesto` text,
  `candidate_id` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `photo`, `position_id`, `votes`, `date_joined`, `manifesto`, `candidate_id`) VALUES
(1, 'Chief Orlando Kingsley', 'amengy@gmail.com', 'not now', '1', '3', '6-Mar-2022', 'we are doing best to serve you better', '1'),
(3, 'Wale Adenuga', 'wine@gmail.com', '3FPoWRyslX.jpg', 'v6hJl1pib', '3', NULL, 'i like your shirt\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'wTHc2AqFD'),
(4, 'Jonathan ize', 'elijah@gmail.com', 'KuQ4SUerDm.jpg', 'v6hJl1pib', '5', NULL, '\r\nhave faith in me\r\n\r\n\r\n\r\n\r\n\r\n', 'W30hpNzfY'),
(5, 'Junior Luggard', 'elijah@gmail.com', '6pIrineJ9g.jpg', 'v6hJl1pib', '6', NULL, '\r\ni trust luck\r\n\r\n\r\n\r\n\r\n\r\n', 'SjMTtnYW3'),
(6, 'Osayande Destiny', 'y@gmail.com', 'gyDCpWGxUE.jpg', 'Ue4q1baYd', '1', NULL, 'This \r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'IlzOKRpiQ');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int NOT NULL,
  `position_name` text,
  `position_id` text,
  `position_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `election_status` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `position_name`, `position_id`, `position_desc`, `election_status`) VALUES
(0, 'President', 'v6hJl1pib', 'd\r\n\r\n\r\n\r\n\r\n\r\n\r\n                    ', 'active'),
(0, 'Secretary', 'Ue4q1baYd', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n                    ', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int NOT NULL,
  `jambno` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `date_joined` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `alias` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `department` text,
  `dob` text,
  `gender` text,
  `level` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `voter_id` text,
  `validation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `jambno`, `phone`, `date_joined`, `name`, `alias`, `department`, `dob`, `gender`, `level`, `voter_id`, `validation`) VALUES
(1, '345', '090', '2022-03-03 13:06:14', 'Teni Adekunle', 'Billionaire', 'Cultural Science', '2022-02-27', 'female', 'Bsc', 'uXzLJAwBsFNtGRZEYc', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `vote_record`
--

CREATE TABLE `vote_record` (
  `id` int NOT NULL,
  `voter_id` text,
  `position_id` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vote_record`
--
ALTER TABLE `vote_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vote_record`
--
ALTER TABLE `vote_record`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
