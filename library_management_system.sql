-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 03:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `pages` int(11) NOT NULL,
  `publication_year` date NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `genre`, `language`, `pages`, `publication_year`, `author`) VALUES
(13, 'Children of Time', 'Science Fiction', 'English', 450, '2023-08-02', 'Adrian Tchaikovsky'),
(14, 'Animal Farm', 'fiction', 'English', 150, '2023-06-06', 'George Orwell'),
(15, 'Meditation', 'Phylosophy', 'English', 220, '2023-08-04', 'Marcus Aurelius'),
(16, 'To Kill a Mockingbird', 'fiction', 'English', 330, '2023-08-04', 'Harper Lee'),
(17, 'Muna Madan', 'fiction', 'Nepali', 450, '2023-08-03', 'Laxmi Prasad Devkota');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_name`, `time`, `date`, `status`) VALUES
(2, 'teststudent123', 1691577549, '2023-08-09', 'login'),
(3, 'teststudent123', 1691577747, '2023-08-09', 'logout'),
(4, 'admin.system', 1691578095, '2023-08-09', 'login'),
(5, 'admin.system', 1691578193, '2023-08-09', 'logout'),
(6, 'admin.system', 1691578210, '2023-08-09', 'login'),
(7, 'admin.system', 1691578236, '2023-08-09', 'logout'),
(8, 'teststaff123', 1691600066, '2023-08-09', 'login'),
(9, 'teststaff123', 1691600082, '2023-08-09', 'logout'),
(10, 'teststudent123', 1691601206, '2023-08-09', 'login'),
(11, 'teststudent123', 1691601627, '2023-08-09', 'logout'),
(12, 'teststudent123', 1691601719, '2023-08-09', 'login'),
(13, 'teststudent123', 1691601768, '2023-08-09', 'logout'),
(14, 'teststaff123', 1691601782, '2023-08-09', 'login'),
(15, 'teststaff123', 1691601792, '2023-08-09', 'logout'),
(16, 'teststudent123', 1691601799, '2023-08-09', 'login'),
(17, 'teststudent123', 1691601915, '2023-08-09', 'logout'),
(18, 'teststaff123', 1691601923, '2023-08-09', 'login'),
(19, 'teststaff123', 1691602037, '2023-08-09', 'logout'),
(20, 'teststaff123', 1691602055, '2023-08-09', 'login'),
(21, 'teststaff123', 1691602081, '2023-08-09', 'logout'),
(22, 'admin.system', 1691602091, '2023-08-09', 'login'),
(23, 'admin.system', 1691602233, '2023-08-09', 'logout'),
(24, 'ram', 1691895072, '2023-08-13', 'login'),
(25, 'ram', 1691895168, '2023-08-13', 'logout'),
(26, 'teststudent123', 1691983624, '2023-08-14', 'login'),
(27, 'teststudent123', 1691983656, '2023-08-14', 'logout'),
(28, 'teststaff123', 1691983665, '2023-08-14', 'login'),
(29, 'teststaff123', 1691983678, '2023-08-14', 'logout'),
(30, 'admin.system', 1691983694, '2023-08-14', 'login'),
(31, 'admin.system', 1691983715, '2023-08-14', 'logout'),
(32, 'admin.system', 1694014290, '2023-09-06', 'login'),
(33, 'admin.system', 1694015700, '2023-09-06', 'logout'),
(34, 'admin.system', 1694015792, '2023-09-06', 'login'),
(35, 'admin.system', 1694015821, '2023-09-06', 'logout'),
(36, 'teststudent123', 1694058688, '2023-09-07', 'login'),
(37, 'teststudent123', 1694058699, '2023-09-07', 'logout'),
(38, 'admin.system', 1694059816, '2023-09-07', 'login'),
(39, 'admin.system', 1694059838, '2023-09-07', 'logout'),
(40, 'abcde12345', 1694060466, '2023-09-07', 'login'),
(41, 'abcde12345', 1694060566, '2023-09-07', 'logout'),
(42, 'abcde12345', 1694060771, '2023-09-07', 'login'),
(43, 'abcde12345', 1694060855, '2023-09-07', 'logout'),
(44, 'abcde12345', 1694060863, '2023-09-07', 'login'),
(45, 'abcde12345', 1694060892, '2023-09-07', 'logout'),
(46, 'admin.system', 1694061051, '2023-09-07', 'login'),
(47, 'admin.system', 1694061073, '2023-09-07', 'logout'),
(48, 'teststaff123', 1694061080, '2023-09-07', 'login'),
(49, 'teststaff123', 1694061095, '2023-09-07', 'logout'),
(50, 'teststudent123', 1694061263, '2023-09-07', 'login'),
(51, 'teststudent123', 1694061287, '2023-09-07', 'logout'),
(52, 'teststaff123', 1694061295, '2023-09-07', 'login'),
(53, 'teststaff123', 1694061334, '2023-09-07', 'login'),
(54, 'teststaff123', 1694061371, '2023-09-07', 'login'),
(55, 'teststaff123', 1694061408, '2023-09-07', 'login'),
(56, 'teststaff123', 1694061496, '2023-09-07', 'login'),
(57, 'teststaff123', 1694061567, '2023-09-07', 'logout'),
(58, 'teststaff123', 1694061578, '2023-09-07', 'login'),
(59, 'teststaff123', 1694062109, '2023-09-07', 'logout'),
(60, 'teststaff123', 1694062128, '2023-09-07', 'login'),
(61, 'teststaff123', 1694062140, '2023-09-07', 'logout'),
(62, 'teststaff123', 1694062215, '2023-09-07', 'login'),
(63, 'teststaff123', 1694062230, '2023-09-07', 'logout'),
(64, 'teststaff123', 1694062997, '2023-09-07', 'login'),
(65, 'teststaff123', 1694063023, '2023-09-07', 'logout'),
(66, 'teststaff123', 1694063040, '2023-09-07', 'login'),
(67, 'teststaff123', 1694063097, '2023-09-07', 'logout'),
(68, 'teststudent123', 1694104572, '2023-09-07', 'login'),
(69, 'teststudent123', 1694104810, '2023-09-07', 'logout'),
(70, 'teststudent123', 1694104817, '2023-09-07', 'login'),
(71, 'teststudent123', 1694105227, '2023-09-07', 'logout'),
(72, 'teststaff123', 1694105307, '2023-09-07', 'login'),
(73, 'teststaff123', 1694105320, '2023-09-07', 'logout'),
(74, 'teststudent123', 1694105590, '2023-09-07', 'login'),
(75, 'teststudent123', 1694105618, '2023-09-07', 'logout'),
(76, 'teststudent123', 1694105626, '2023-09-07', 'login'),
(77, 'teststudent123', 1694105686, '2023-09-07', 'logout'),
(78, 'teststudent123', 1694146546, '2023-09-08', 'login'),
(79, 'teststudent123', 1694146626, '2023-09-08', 'logout'),
(80, 'teststaff123', 1694154897, '2023-09-08', 'login'),
(81, 'teststaff123', 1694154988, '2023-09-08', 'logout'),
(82, 'teststaff123', 1694157769, '2023-09-08', 'login'),
(83, 'admin.system', 1694174123, '2023-09-08', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `order_book`
--

CREATE TABLE `order_book` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `request_book` tinyint(1) NOT NULL,
  `return_book` tinyint(1) NOT NULL,
  `request_date` date NOT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_book`
--

INSERT INTO `order_book` (`id`, `user_id`, `book_id`, `request_book`, `return_book`, `request_date`, `return_date`) VALUES
(22, 8, 15, 0, 1, '2023-08-08', '2023-08-08'),
(23, 8, 14, 0, 0, '2023-08-08', NULL),
(24, 8, 14, 1, 0, '2023-08-09', NULL),
(25, 8, 16, 1, 0, '2023-08-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `font_size` varchar(11) NOT NULL,
  `theme` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `font_size`, `theme`) VALUES
(1, 8, '1', '1'),
(2, 9, '1', '1'),
(3, 7, '1', '1'),
(4, 10, '1', '1'),
(5, 11, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `select_question` int(10) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `verify` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `phone`, `password`, `user_type`, `first_name`, `last_name`, `address`, `select_question`, `answer`, `verify`) VALUES
(7, 'admin.system', 2147483647, '$2y$10$wdkufb0UYXD7Cdvi9/s7weU/wXvKJZ10E8XVrGGhkpHPoZsJnodO6', 'admin', 'Bhushan', 'GC', 'kathmandu', 4, 'football', 1),
(8, 'teststudent123', 123456789, '$2y$10$H2Z3x2Gh7r045kbeOSJm8O1JcaGJZStZ5Cb1pV7KN4ciVI6PMDAGW', 'Student', 'Student', 'Test', 'kathmandu', 2, 'abc', 1),
(9, 'teststaff123', 123456789, '$2y$10$y3E0bhlFB7J3.DXiZnbEN.TiCRqnfD/EISUI75ZtiGDULsCgZjD.S', 'Staff', 'Staff', 'Test', 'lalitpur', 3, 'abc', 1),
(10, 'ram', 123456234, '$2y$10$0OfJ4LFIcWcVIi3TUckMROUANdQjDdG2wzQR.bMFaFwWOSHpUgpdm', 'Student', 'ram', 'rai', 'bkt', 1, 'math', 0),
(11, 'abcde12345', 2147483647, '$2y$10$bmoZOZ6KFM/Xh3px1.54DuSgHzAHUg14VsJfCV8JEaoKL0Onjtpmq', 'Staff', 'Bhushan', 'GC', 'kathmandu', 1, 'abcde', 1),
(12, 'aaaaa', 235, '$2y$10$JOAkIxuhSiQB3Fv6UpPW6eN6U6lutRYLJfruUv9HvEOeXmhM1A3t.', 'Staff', 'abc', 'GC', 'asd', 1, 'abc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_book`
--
ALTER TABLE `order_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `order_book`
--
ALTER TABLE `order_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_book`
--
ALTER TABLE `order_book`
  ADD CONSTRAINT `order_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`ID`),
  ADD CONSTRAINT `order_book_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
