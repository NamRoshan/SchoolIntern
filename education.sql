-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 29, 2020 at 08:14 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.0.33-12+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `class` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `sub_topic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `class`, `subject`, `topic`, `sub_topic`) VALUES
(1, '1', 'English 1', 'We are together', 'English sub topic'),
(2, '1', 'English 1', 'Major English Addition', '1 digit'),
(3, '3', 'English', 'Addition', '1 digit'),
(4, '4', 'English', 'Addition', '1 digit'),
(5, '5', 'English', 'Addition', '1 digit'),
(6, '6', 'English', 'Addition', '1 digit'),
(7, '7', 'English', 'Addition', '1 digit'),
(8, '1', 'Math', 'Addition', '1 digit'),
(9, '1', 'Math', 'Multiplication', '1 digit'),
(10, '3', 'Math', 'Addition', '1 digit'),
(11, '4', 'Math', 'Addition', '1 digit'),
(12, '5', 'Math', 'Addition', '1 digit'),
(13, '6', 'Math', 'Addition', '1 digit'),
(14, '7', 'Math', 'Addition', '1 digit'),
(15, '1', 'Math', 'Subtraction', '1 digit'),
(16, '2', 'Science', 'Addition', '1 digit'),
(17, '3', 'Science', 'Addition', '1 digit'),
(18, '4', 'Science', 'Addition', '1 digit'),
(19, '5', 'Science', 'Addition', '1 digit'),
(20, '6', 'Science', 'Addition', '1 digit'),
(21, '7', 'Science', 'Addition', '1 digit'),
(22, '1', 'Math', 'Addition', '2 digit'),
(23, '1', 'Math', 'Addition', '3 digit'),
(24, '1', 'English 1', 'We are together', 'No matter'),
(25, '1', 'English 1', 'We are together', 'Some thing different');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
