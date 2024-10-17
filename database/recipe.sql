-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 10:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `username`, `password`) VALUES
(1, 'chathuranga', '123454321');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `Email`, `Message`, `created_at`) VALUES
(6, 'induwara@gmail.com', ' is there japanese recipies', '2023-10-19 20:23:44'),
(7, 'chathuranga@gmail.com', ' can i download', '2023-10-19 20:24:11'),
(8, 'sachintha@gmail.com', ' is there are update ', '2023-10-19 20:25:21'),
(9, 'madara@gmai.com', ' can i add recipies\r\n', '2023-10-19 20:26:04'),
(11, 'Chamath@gmail.com', '  what is name of', '2023-10-20 07:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(500) NOT NULL,
  `LastName` varchar(500) NOT NULL,
  `EmailAddress` varchar(200) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `StreetAddress` varchar(255) NOT NULL,
  `City` varchar(500) NOT NULL,
  `ZipPostalCode` varchar(110) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `AonymousDonation` tinyint(1) NOT NULL,
  `DonationAmount` int(11) NOT NULL,
  `DonationMessage` text NOT NULL,
  `Donated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`ID`, `FirstName`, `LastName`, `EmailAddress`, `PhoneNumber`, `StreetAddress`, `City`, `ZipPostalCode`, `Country`, `AonymousDonation`, `DonationAmount`, `DonationMessage`, `Donated_at`) VALUES
(3, 'chamath', 'deshan', 'chamth@gmail.com', '0758452698', '23', 'kandy', '4344', 'srilanka', 0, 2333, '', '2023-10-19 20:28:26'),
(4, 'kasun', 'bandara', 'isira@gmail.com', '075415787', 'a/iuuhauhs', 'ampara', '32001', 'srilanka', 1, 20000, 'iddasudga', '2023-10-20 10:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `message` text NOT NULL,
  `Send_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `message`, `Send_at`) VALUES
(7, 'Is the system responsive and fast? Are there any bugs or errors that users might encounter? ', '2023-10-19 20:39:23'),
(8, ' Ensure that user data, especially login information, is secure. Is the login system robust? ', '2023-10-19 20:39:58'),
(9, ' Implement a way for users to provide feedback within the system. Whether it\'s a form for suggestions or a rating system for recipes, feedback is essential for continuous improvement.', '2023-10-19 20:40:18'),
(10, 'can i add more recipes\r\n\r\n', '2023-10-20 07:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `created_at`) VALUES
(13, 'kavinga', 'kavinga@gmail.com', '$2y$10$F6Pnups/mrClkEAiguai2e7X8qMHKHZtmhqWXcAA4nV5BWoDQKxvG', '2023-10-17 00:47:46.249573'),
(16, 'chamath', 'chamath@gmail.com', '$2y$10$e5XU2t9Leqp2NCkT6tI7teDU.4lhmVs1jpw.XGMjBNriMkfvuMb52', '2023-10-19 20:17:43.831591'),
(18, 'sachintha', 'sachintha@gmail.com', '$2y$10$DTIlXI3KQiK.roUiCQGQW.W3Hz.yH65iXc4izXfWlYoUOnICJpzru', '2023-10-19 20:19:42.832656'),
(19, 'madara', 'madara@gmail.com', '$2y$10$5DB.Slai6lEn/VgMDQOujOdbXYT9KlKIBFeEj8NikkI7XjBz9FZYK', '2023-10-19 20:21:07.723993'),
(21, 'induwara', 'induwara@gmail.com', '$2y$10$puMGS6gWmC9RBRZIzmTk9eK.DyOsasN8PUo.ivLkO1UcTOnCCz6qW', '2023-10-20 07:02:33.321212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
