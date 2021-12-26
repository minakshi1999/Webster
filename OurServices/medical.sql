-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 08:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sno` int(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` bigint(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Sno`, `Fname`, `Lname`, `email`, `phoneNo`, `message`) VALUES
(1, 'nandini', 'Yadav', 'nandiniy@gmail.com', 8318825685, 'hello'),
(2, 'nandini', 'yadav', 'nandini.2020ca045@mnnit.ac.in', 8318825685, 'hello'),
(3, 'nandini', 'yadav', 'nandini.2020ca045@mnnit.ac.in', 8318825685, 'hello'),
(4, 'nandini', 'yadav', 'nandini.2020ca045@mnnit.ac.in', 8318825685, 'hello'),
(5, 'nandini', 'yadav', 'nandini.2020ca045@mnnit.ac.in', 8318825685, 'hello'),
(6, 'nandini', 'yadav', 'nandini.2020ca045@mnnit.ac.in', 8318825685, 'hello'),
(7, 'nandini', 'yadav', 'nandini.2020ca045@mnnit.ac.in', 8318825685, 'hello'),
(8, 'jaenny', 'lopace', 'jenny@gmail.com', 1234567890, 'i m cold flue.'),
(9, 'priti', 'kumari', 'priti@gmail.com', 123, 'how to contact'),
(10, 'o', 'o', 'o@gmail.com', 123, 'dcbibcdskcdis');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `rpswd` varchar(20) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `FirstName`, `LastName`, `email`, `city`, `pswd`, `rpswd`, `usertype`) VALUES
(1, 'nandini', 'yadav', 'nandini@gmail.com', 'vns', '123', '123', ''),
(20, 'ram', 'kumar', 'ram@gmail.com', 'vns', '123', '123', ''),
(21, 'sita', 'kumari', 'sita@gmai.com', 'vns', '123', '123', ''),
(22, 'sanaya', 'kumari', 'sanaya@gmail.com', 'vns', '123', '123', 'patient'),
(23, 'rina', 'ghosh', 'r@gmail.com', 'vns', '123', '123', 'doctor'),
(24, 'gita', 'singh', 'g@gmail.com', 'kolkata', '123', '123', 'patient'),
(25, 'sakshi', 'singh', 's@gmail.com', 'kkr', '123', '123', 'patient'),
(26, 'j', 'k', 'l@gmail.com', 'l', '123', '123', ''),
(27, 'j', 'j', 'j@gmail.com', 'j', '123', '123', ''),
(28, 'o', 'o', 'o@gmail.com', 'o', '123', '123', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
