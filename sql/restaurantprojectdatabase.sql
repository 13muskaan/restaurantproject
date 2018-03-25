-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 02:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `logdata`
--

CREATE TABLE `logdata` (
  `logID` int(10) NOT NULL,
  `sessionID` varchar(256) NOT NULL,
  `url` varchar(212) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `datestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `memberID` int(10) NOT NULL,
  `adminID` int(10) NOT NULL,
  `managerID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logdata`
--
ALTER TABLE `logdata`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `memberlogdata` (`memberID`),
  ADD KEY `adminlogdata` (`adminID`),
  ADD KEY `managerlogdata` (`managerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logdata`
--
ALTER TABLE `logdata`
  ADD CONSTRAINT `adminlogdata` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `managerlogdata` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `memberlogdata` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
