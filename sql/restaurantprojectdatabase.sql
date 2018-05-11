-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 12:50 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `email`, `password`) VALUES
(3, 'admin@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `name` varchar(50) NOT NULL,
  `file` longblob NOT NULL,
  `dateinserted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE `functions` (
  `functionID` int(10) NOT NULL,
  `functiontype` varchar(30) NOT NULL,
  `functiondescription` text NOT NULL,
  `adminID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`functionID`, `functiontype`, `functiondescription`, `adminID`) VALUES
(1, 'Anniversary', 'This is the anniversary function type.', 0),
(2, 'Birthday', 'This is the birthday function type.', 0),
(3, 'Corporate', 'This is the corporate function type.', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerID` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerID`, `email`, `password`) VALUES
(1, 'manager@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberID` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `imagePath` varchar(255) NOT NULL DEFAULT '../img/userPictures/defaultUser.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberID`, `email`, `password`, `firstname`, `lastname`, `imagePath`) VALUES
(1, '13muskanbakshi@gmail.com', '1234567890', 'Muskaan', 'Bakshi', '../img/userPictures/defaultUser.png'),
(41, 'Steve@Steve.Steve', 'Steve123', 'Steve', 'Steve', '../img/userPictures/defaultUser.png'),
(44, 'ginajingli@hotmail.com', '1234567890', 'Gina', 'Li', '../img/userPictures/defaultUser.png'),
(45, 'rayshamasengi@hotmail.com', '1234567890', 'Raysha', 'Masengi', '../img/userPictures/defaultUser.png'),
(46, '1rayshamasengi@hotmail.com', '12345Raysha', 'Raysha', 'Masengi', '../img/userPictures/defaultUser.png'),
(47, '123@gmail.com', '1111Gina', 'Gina', 'Li', '../img/userPictures/defaultUser.png'),
(48, 'Steve@Mac.com', 'Steve123', 'Steve', 'Mac', '../img/userPictures/defaultUser.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `dishID` int(10) NOT NULL,
  `dishtitle` varchar(30) NOT NULL,
  `dishdescription` text NOT NULL,
  `dishprice` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`dishID`, `dishtitle`, `dishdescription`, `dishprice`) VALUES
(19, 'Pea and Potato Samosa', 'Spicy peas and potato pastry parcels', '10.50'),
(20, 'Garlic Aloo Bondas', 'Golden battered spicy potato and garlic balls', '10.50'),
(21, 'Mirchi Vada', 'Special chilli fritter with a spicy potato stuffing in a potato and golden batter', '10.50'),
(22, 'Tandoori Tiger Prawns', 'Marinated tiger prawns cooked in the tandoor', '16.50'),
(24, 'f', 'f', 'f'),
(25, 'k', 'k', 'k'),
(26, '2', '2', '3'),
(27, 'g', 'g', 'g'),
(28, 'j', 'j', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time(4) NOT NULL,
  `guestno` int(10) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `memberID` int(10) NOT NULL,
  `functionID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationID`, `date`, `time`, `guestno`, `comment`, `memberID`, `functionID`) VALUES
(42, '2018-03-30', '17:00:00.0000', 20, 'test.', 1, 2),
(43, '2018-04-18', '09:00:00.0000', 10, '', 1, 1),
(45, '2018-05-11', '09:00:00.0000', 30, 'HIIIIIIIIIIIIIIII ', 1, 3),
(46, '2018-05-31', '09:00:00.0000', 30, 'Hello, my name is Elder Price', 1, 2),
(47, '2018-06-30', '12:00:00.0000', 120, 'I AM INVITING THE ENTIRE VILLAGE TO MY BIRTHDAY!\r\n\r\nExcept you Nathan, screw you Nathan >:(', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(10) NOT NULL,
  `reviewtitle` varchar(60) NOT NULL,
  `reviewscore` int(11) NOT NULL,
  `reviewcontent` text NOT NULL,
  `memberID` int(10) NOT NULL,
  `adminID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `functions`
--
ALTER TABLE `functions`
  ADD PRIMARY KEY (`functionID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `logdata`
--
ALTER TABLE `logdata`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `memberlogdata` (`memberID`),
  ADD KEY `adminlogdata` (`adminID`),
  ADD KEY `managerlogdata` (`managerID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`dishID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `reservationfunction` (`functionID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `adminID` (`adminID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `functions`
--
ALTER TABLE `functions`
  MODIFY `functionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `dishID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `adminfunction` FOREIGN KEY (`adminID`) REFERENCES `functions` (`functionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adminmenu` FOREIGN KEY (`adminID`) REFERENCES `functions` (`functionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logdata`
--
ALTER TABLE `logdata`
  ADD CONSTRAINT `adminlogdata` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `managerlogdata` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `memberlogdata` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservationfunction` FOREIGN KEY (`functionID`) REFERENCES `functions` (`functionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservationmember` FOREIGN KEY (`memberID`) REFERENCES `member` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `adminreview` FOREIGN KEY (`reviewID`) REFERENCES `admin` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
