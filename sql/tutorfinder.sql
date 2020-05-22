-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 03:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `userfk`) VALUES
(2, 'john@test.com', '123456', 8),
(3, 't@test.com', '123456', 9),
(4, 'joyee@test.com', '123456', 10),
(5, 'max@test.com', '123456', 11),
(9, 'moli@test.com', '123456', 15),
(11, 'p@test.com', '123456', 17),
(12, 'jj@test.com', '123456', 18),
(14, 'pbilash64@gmail.com', '123456', 20),
(15, 'sample@test.com', '123456', 21);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nid` int(10) NOT NULL,
  `postId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `reqId` int(10) NOT NULL,
  `approve` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `postId`, `userId`, `reqId`, `approve`) VALUES
(1, 6, 10, 17, 1),
(3, 7, 17, 10, 1),
(5, 5, 10, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `class` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `lowSal` int(100) NOT NULL,
  `highSal` int(100) NOT NULL,
  `institution` varchar(150) NOT NULL,
  `preftime` varchar(150) NOT NULL,
  `deadline` date NOT NULL,
  `userIdFk` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `medium`, `subject`, `class`, `location`, `lowSal`, `highSal`, `institution`, `preftime`, `deadline`, `userIdFk`, `name`, `status`) VALUES
(3, 'Bangla, ', 'Physic, ', 'Eleven', 'Nikunjo', 2000, 3000, 'Any', '15:30', '2020-05-31', 9, 'test', '1'),
(4, 'English, ', 'English, ', 'One', 'Nikunjo', 2000, 4000, 'Any', '15:30', '2020-06-01', 9, 'test', '1'),
(5, 'Bangla, ', 'Biology, ', 'Nine', 'Badda', 1000, 2000, 'Any', '16:30', '2020-06-05', 10, 'joyee', '1'),
(6, 'English, ', 'Physic, ', 'Ten', 'Badda', 3000, 5000, 'Any', '15:33', '2020-06-05', 10, 'joyee', '1'),
(7, 'English, ', 'Math, ', 'One', 'Badda', 1000, 2000, 'Buet', '19:48', '2020-06-05', 17, 'Pri', '2');

-- --------------------------------------------------------

--
-- Table structure for table `systeminfo`
--

CREATE TABLE `systeminfo` (
  `id` int(10) NOT NULL,
  `contract` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systeminfo`
--

INSERT INTO `systeminfo` (`id`, `contract`, `email`, `description`) VALUES
(1, '01788228533', 'pbilash64@gmail.com', 'Online Tutor Finder is Bangladesh\'s first-ever free online platform for tutors & students. It helps\r\nstudent/parents to find verified & skilled tutor in-person & online in many different categories\r\nsince 2020.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `pending` int(10) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `password`, `usertype`, `gender`, `status`, `pending`, `image`, `address`, `institution`) VALUES
(8, 'John', 'john@test.com', '01788220033', '123456', 'student', 'male', 1, 0, NULL, NULL, NULL),
(9, 'test', 't@test.com', '12345678901', '123456', 'student', 'male', 1, 0, 'photos/batman-logo-png-2032.png', '', ''),
(10, 'joyee', 'joyee@test.com', '01788228533', '123456', 'student', 'male', 1, 0, NULL, NULL, NULL),
(11, 'max', 'max@test.com', '12345678912', '123456', 'student', 'male', 1, 0, NULL, NULL, NULL),
(15, 'moli', 'moli@test.com', '01788228533', '123456', 'student', 'female', 1, 0, NULL, NULL, NULL),
(17, 'Pri', 'p@test.com', '01788228533', '123456', 'teacher', 'male', 2, 0, NULL, NULL, NULL),
(18, 'joye', 'jj@test.com', '01456872354', '123456', 'student', 'female', 1, 0, NULL, 'Dinajpur', 'RUET'),
(19, 'Reg', 'r@test.com', '01788228533', '123456', 'student', 'male', 1, 0, NULL, NULL, NULL),
(20, 'Bilash', 'pbilash64@gmail.com', '01788228533', '123456', 'admin', 'male', 0, 0, NULL, 'Dinajpur', 'AIUB'),
(21, 'sample', 'sample@test.com', '01423547896', '123456', 'teacher', 'male', 2, 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userfk` (`userfk`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systeminfo`
--
ALTER TABLE `systeminfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `systeminfo`
--
ALTER TABLE `systeminfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`userfk`) REFERENCES `user` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
