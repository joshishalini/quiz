-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 12:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `easy`
--

CREATE TABLE `easy` (
  `id` int(11) NOT NULL,
  `que` varchar(100) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `easy`
--

INSERT INTO `easy` (`id`, `que`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'How can we resize the image?', 'Using resize attribute', 'Using height and width', 'Using size attribute', 'Using rs attribute', 'Using height and width'),
(2, 'What is the only function all C programs must contain?', 'start()', 'system() ', 'main() ', 'void()', 'main()'),
(3, 'A random access file is organized most like a(n):', 'Array', 'Object', 'Class', 'Pointer', 'Array'),
(4, 'Which of the following is not a dynamic data structure?', 'Linked list', 'Stack', 'Array', 'Binary tree', 'Binary Tree'),
(5, 'When java developed>', '1990', '1991', '1993', '1995', '1991');

-- --------------------------------------------------------

--
-- Table structure for table `hard`
--

CREATE TABLE `hard` (
  `id` int(11) NOT NULL,
  `que` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hard`
--

INSERT INTO `hard` (`id`, `que`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'mica is abundantly availabile in:', 'rajasthan', 'bihar', 'karnataka', 'haryana', 'bihar'),
(2, '2nd world war began in', '1935', '1936', '1937', '1938', '1938'),
(3, 'cheif justice of supreme court hold the place of', '63', '64', '65', '66', '65'),
(4, 'largest gland in human body is', 'pitutary', 'none of these', 'adrenal', 'liver', 'liver'),
(5, 'election comission can be removed by', 'the parliament', 'president', 'prime minister', 'lok sabha', 'teh parliament');

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

CREATE TABLE `medium` (
  `id` int(11) NOT NULL,
  `que` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`id`, `que`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'who is the father of physics ?', 'albert einstein', 'madam curie', 'issac newton', 'john dalton', 'albert einstein'),
(2, 'Which crop is sown on the largest area in India?', 'Maize', 'wheat', 'rice', 'sugercane', 'rice'),
(3, 'the value pf gold is determined by: ', 'Rome', 'Washington', 'Teheran', 'London', 'london'),
(4, 'taj mahal is on the banks of: ', 'ganga', 'jamuna', 'tapi', 'cauvery', 'jamuna'),
(5, 'largest ocean in the world', 'pacific ocean', 'atalantic ocean', 'antarctic ocean', 'indian ocean', 'pacific ocean');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `phno`, `pass`) VALUES
(1, 'shalini', 'shalini@gmail.com', 9415, 'sha'),
(5, 'shanu', 'shanu@gmail.com', 941467, '123'),
(6, '', '', 0, ''),
(10, 'hello', 'sha@gb.gh', 652, 'bhjn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `easy`
--
ALTER TABLE `easy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hard`
--
ALTER TABLE `hard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medium`
--
ALTER TABLE `medium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `easy`
--
ALTER TABLE `easy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hard`
--
ALTER TABLE `hard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medium`
--
ALTER TABLE `medium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
