-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 09:29 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume_table`
--

CREATE TABLE `resume_table` (
  `s_no` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `resume_id` int(20) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_table`
--

INSERT INTO `resume_table` (`s_no`, `user_id`, `name`, `resume_id`, `file`) VALUES
(4, 82371, 'kshitiz', 19502, '19502resumefile.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_sign`
--

CREATE TABLE `user_sign` (
  `s_no` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `user_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sign`
--

INSERT INTO `user_sign` (`s_no`, `user_id`, `name`, `password`, `email`, `dob`, `user_pic`) VALUES
(7, 82371, 'anshuman singh', 'anshu', 'jitendra3042.av@gmail.com', '2019-06-12', '82371me.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume_table`
--
ALTER TABLE `resume_table`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `user_sign`
--
ALTER TABLE `user_sign`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume_table`
--
ALTER TABLE `resume_table`
  MODIFY `s_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sign`
--
ALTER TABLE `user_sign`
  MODIFY `s_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
