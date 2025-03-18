-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 06:30 AM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(20) NOT NULL,
  `salutation` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_phone_number` varchar(255) NOT NULL,
  `year_of_enrollment` int(50) NOT NULL,
  `grade_level_of_entry` varchar(255) NOT NULL,
  `current_school` varchar(255) NOT NULL,
  `current_grade_level` varchar(255) NOT NULL,
  `how_did_you_first_hear_about_us` text NOT NULL,
  `additional_information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `salutation`, `relationship`, `first_name`, `last_name`, `date_of_birth`, `email`, `mobile_phone_number`, `year_of_enrollment`, `grade_level_of_entry`, `current_school`, `current_grade_level`, `how_did_you_first_hear_about_us`, `additional_information`) VALUES
(8, 'hsdhfhsd', 'ldsakjsadd', 'as', 'asd', '2025-07-31', 'sadas@asdsa', '20245', 2002, 'sadas', 'sdas', 'sdas', 'ad', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `email`) VALUES
(289, 'mark', 'tanate', 'magabto', 'mark123', 'qwer', 'mark@gmail.com'),
(290, 'dsfsdf', 'dsfdsf', 'dsfdsf', 'dsfdsfds', 'asdsa', 'dsfsdf@sdasd'),
(291, 'dsas', 'sd', 'sad', 'sd', 'sdasd', 'asd@sad'),
(292, '', '', '', 'agay', '$2y$10$aVqZm2qPR9XMTJyPRwlDqeOt3FSHoKZI.whC13LP5cgSPKRNrLl6.', 'agay@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
