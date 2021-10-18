-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2021 at 11:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Barami_Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksinfomation`
--

CREATE TABLE `booksinfomation` (
  `booksinfomationid` varchar(50) NOT NULL,
  `booktitle` varchar(100) NOT NULL,
  `synopsis` varchar(250) NOT NULL,
  `authorsname` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `numberofpage` int(255) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `amount` int(40) NOT NULL,
  `available_amount` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrowid`
--

CREATE TABLE `borrowid` (
  `borrowid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `booksinfomationid` varchar(50) NOT NULL,
  `borrowfromdate` date NOT NULL,
  `borrowtodate` date NOT NULL,
  `actualreturndate` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usergroup` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksinfomation`
--
ALTER TABLE `booksinfomation`
  ADD PRIMARY KEY (`booksinfomationid`);

--
-- Indexes for table `borrowid`
--
ALTER TABLE `borrowid`
  ADD PRIMARY KEY (`borrowid`),
  ADD KEY `userid_fk1` (`userid`),
  ADD KEY `booksid_fk1` (`booksinfomationid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowid`
--
ALTER TABLE `borrowid`
  ADD CONSTRAINT `booksid_fk1` FOREIGN KEY (`booksinfomationid`) REFERENCES `booksinfomation` (`booksinfomationid`),
  ADD CONSTRAINT `userid_fk1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
