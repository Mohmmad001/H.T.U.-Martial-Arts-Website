-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 16, 2026 at 01:03 PM
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
-- Database: `htu_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timetable_id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`ID`, `user_id`, `timetable_id`, `day`) VALUES
(2, 3, 6, 'Tuesday'),
(3, 3, 6, 'Tuesday'),
(4, 3, 6, 'Tuesday'),
(5, 3, 7, 'Tuesday'),
(6, 3, 7, 'Tuesday'),
(7, 3, 7, 'Tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Job` varchar(30) NOT NULL,
  `Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`ID`, `Name`, `Job`, `Details`) VALUES
(1, 'Ali Mohammed', 'gym owner/head martial arts', 'Coaches in all martial arts; 4th Dan Blackbelt judo; 3rd Dan Blackbelt jiu-jitsu; 1st Dan Blackbelt karate; Accredited Muay Thai coach'),
(2, 'Sarah Saleh', 'Assistant Martial Arts Coach', '5th Dan Blackbelt Karate'),
(3, 'Fares Qasem', 'Assistant Martial Arts Coach', '2nd Dan Blackbelt Jiu-Jitsu; 1st Dan Blackbelt Judo; Accredited Muay Thai Coach'),
(4, 'Maen Mohanad', 'Assistant Martial Arts Coach', '3rd Dan Blackbelt Karate'),
(5, 'Reem Emad', 'Fitness Coach', 'BSc in Sports Science; Qualified in Health and Nutrition; Specialises in strength and conditioning programs for combat athletes'),
(6, 'Jana Qader', 'Fitness Coach', 'BSc in Physiotherapy; MSc in Sports Science');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `ID` int(11) NOT NULL,
  `Option` text NOT NULL,
  `Details` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`ID`, `Option`, `Details`, `Price`) VALUES
(1, 'Basic', '1 martial art, 2 sessions per week, monthly fee', 25),
(2, 'Intermediate', '1 martial art, 3 sessions per week, monthly fee', 35),
(3, 'Advanced', 'Any 2 martial arts, 5 sessions per week, monthly fee', 45),
(4, 'Elite', 'Unlimited classes', 60),
(5, 'Private Tuition', 'Private martial arts tuition per hour', 15),
(7, 'junior', 'Access to all kids sessions', 15);

-- --------------------------------------------------------

--
-- Table structure for table `member_user`
--

CREATE TABLE `member_user` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_user`
--

INSERT INTO `member_user` (`ID`, `user_id`, `member_id`) VALUES
(1, 3, 6),
(2, 6, 3),
(3, 5, 2),
(6, 7, 1),
(8, 2, 4),
(9, 9, 7),
(10, 12, 1),
(11, 15, 4),
(12, 16, 3),
(13, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `name`, `email`, `message`) VALUES
(1, 'mohammad', 'moh@gmail.com', 'thank you for your service'),
(2, 'Naser', 'moh@gmail.com', 'this is could make me happy');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Service` text NOT NULL,
  `Details` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Service`, `Details`, `Price`) VALUES
(1, 'Six-week beginners self defense course', '2*1 session per week', 180),
(3, 'Personal fitness training', 'Per hour', 35),
(4, 'Use of fitness room', 'per visit', 6);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `ID` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `monday` varchar(50) NOT NULL,
  `tuesday` varchar(50) NOT NULL,
  `wednesday` varchar(50) NOT NULL,
  `thursday` varchar(50) NOT NULL,
  `friday` varchar(50) NOT NULL,
  `saturday` varchar(50) NOT NULL,
  `sunday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`ID`, `time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '06:00-07:30         ', 'Jiu-jitsu                                    ', 'Karate                                    ', 'Judo                                    ', 'Jiu-jitsu                                    ', 'Muay Thai                                    ', '               ', '-'),
(2, '08:00-10:00', 'Muay Thai', 'Private tuition', 'Private tuition', 'Private tuition', 'Jiu-jitsu', 'Private tuition', 'Private tuition'),
(3, '10:30-12:00', 'Private tuition', 'Private tuition', 'Private tuition', 'Private tuition', 'Private tuition', 'Judo', 'Karate'),
(4, '13:00-14:30', 'Open mat / personal practice', 'Open mat / personal practice', 'Open mat / personal practice', 'Open mat / personal practice', 'Open mat / personal practice', 'Karate', 'Judo'),
(5, '15:00-17:00', 'Kids Jiu-jitsu', 'Kids Judo', 'Kids Karate', 'Kids Jiu-jitsu', 'Kids Judo', 'Muay Thai', 'Jiu-jitsu'),
(6, '17:30-19:00', 'Karate', 'Muay Thai', 'Judo', 'Jiu-jitsu', 'Muay Thai', '-', '-'),
(7, '19:00-21:00', 'Jiu-jitsu', 'Judo', 'Jiu-jitsu', 'Karate', 'Private tuition', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `username`, `email`, `password`) VALUES
(2, 'Moh', 'Naser', 'moh@gmail.com', '123'),
(5, 'Admin', 'Admin', 'Admin@gmail.com', '123'),
(7, 'one', 'two', 'three@gmail.com', '123'),
(9, 'Naser', 'Naser', 'Naser@gmail.com', '123'),
(12, 'mod', 'mod', 'mod@gmail.com', '123'),
(15, 'Abdallah', 'Abdallah06', 'Abood@gmail.com', '123'),
(16, 'gg', 'gg', 'gg@gmail.com', '123'),
(17, 'hello ', 'hello123', 'hello123@gmail.com', '123'),
(18, 'Ali Mohammed', 'Ali', 'Ali@gmail.com', '123'),
(19, 'carlo', 'carlo', 'carlo@gmail.com', '123'),
(20, 'ronaldo', 'ronaldo', 'ronaldo@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_service`
--

CREATE TABLE `user_service` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_service`
--

INSERT INTO `user_service` (`ID`, `user_id`, `service`) VALUES
(1, 2, 'Personal fitness training'),
(2, 2, 'Personal fitness training'),
(3, 2, 'Use of fitness room'),
(4, 2, 'Six-week beginners self defense course');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member_user`
--
ALTER TABLE `member_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_service`
--
ALTER TABLE `user_service`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member_user`
--
ALTER TABLE `member_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_service`
--
ALTER TABLE `user_service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
