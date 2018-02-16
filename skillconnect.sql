-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:41 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `collegeID` int(100) NOT NULL,
  `usrname` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `email` varchar(34) NOT NULL,
  `contact` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`collegeID`, `usrname`, `password`, `email`, `contact`) VALUES
(1, '#l.d.c.e', 'secret', 'abc@ldce.ac.in', '9876432612');

-- --------------------------------------------------------

--
-- Table structure for table `jobprovider`
--

CREATE TABLE `jobprovider` (
  `providerID` int(100) NOT NULL,
  `usrname` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `email` varchar(34) NOT NULL,
  `contact` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobprovider`
--

INSERT INTO `jobprovider` (`providerID`, `usrname`, `password`, `email`, `contact`) VALUES
(1, 'xyz corp ltd.', 'goodbye', 'xyz123@yahoo.com', '9843232133');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `seekerID` int(100) NOT NULL,
  `usrname` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `email` varchar(34) NOT NULL,
  `phone` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`seekerID`, `usrname`, `password`, `email`, `phone`) VALUES
(1, 'alice', 'bob', 'alice123@gmail.com', '9238432321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`collegeID`);

--
-- Indexes for table `jobprovider`
--
ALTER TABLE `jobprovider`
  ADD PRIMARY KEY (`providerID`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`seekerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `collegeID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobprovider`
--
ALTER TABLE `jobprovider`
  MODIFY `providerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `seekerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
