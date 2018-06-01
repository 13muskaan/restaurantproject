-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 01:05 PM
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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `name` varchar(50) NOT NULL,
  `file` longblob NOT NULL,
  `dateinserted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `functionID` int(10) NOT NULL,
  `functiontype` varchar(50) NOT NULL,
  `functiondescription` text NOT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`functionID`, `functiontype`, `functiondescription`, `userID`) VALUES
(0, 'Anniversary', 'This is the anniversary function type', 0),
(1, 'Birthday', 'This is for birthdays.', 0),
(2, 'Corporate', 'This is for coporate functions.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logdata`
--

CREATE TABLE `logdata` (
  `logID` int(10) NOT NULL,
  `sessionID` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `datestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int(10) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logdata`
--

INSERT INTO `logdata` (`logID`, `sessionID`, `url`, `ip`, `datestamp`, `userID`) VALUES
(702, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-27 13:35:11', -1),
(703, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-27 13:35:49', 0),
(704, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-27 13:35:49', 0),
(705, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-27 13:36:57', -1),
(706, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-27 13:37:05', -1),
(707, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-27 13:37:25', 1),
(708, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-27 13:37:25', 1),
(709, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-27 13:37:47', -1),
(710, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-27 13:37:49', -1),
(742, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-27 14:40:38', -1),
(743, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:40:42', -1),
(811, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-28 08:43:40', -1),
(812, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-28 08:43:43', -1),
(813, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-28 09:16:21', -1),
(814, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-28 15:12:54', -1),
(815, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/menu.php', '127.0.0.1', '2018-05-28 15:13:16', -1),
(816, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/function.php', '127.0.0.1', '2018-05-28 15:13:31', -1),
(817, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/menu.php', '127.0.0.1', '2018-05-28 15:13:34', -1),
(818, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/contact.php', '127.0.0.1', '2018-05-28 15:13:35', -1),
(819, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-28 15:13:39', -1),
(820, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/contact.php', '127.0.0.1', '2018-05-28 15:13:41', -1),
(821, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-28 15:13:42', -1),
(822, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-28 15:13:45', -1),
(823, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/menu.php', '127.0.0.1', '2018-05-28 15:13:48', -1),
(824, '0j0b38ncmu4c3r4b9qd754eu5c', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-28 15:13:49', -1),
(825, '67t16illl8tmb4sn2eef1flju2', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-28 17:06:41', -1),
(826, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-29 11:03:17', -1),
(827, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-29 11:03:17', -1),
(828, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-29 11:03:26', -1),
(829, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-29 11:03:41', -1),
(830, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-29 11:03:49', 0),
(831, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/admin/function_manage.php', '127.0.0.1', '2018-05-29 11:04:04', 0),
(832, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-29 11:05:46', 0),
(833, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-29 11:06:06', -1);

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
(25, 'k', 'k', 'k'),
(26, '2', '2', '3'),
(27, 'g', 'g', 'g'),
(28, 'hejfjefo', 'j', 'j'),
(29, 'neg3', 'ef', 'evgoig');

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
  `userID` int(10) NOT NULL,
  `functionID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationID`, `date`, `time`, `guestno`, `comment`, `userID`, `functionID`) VALUES
(19, '2018-06-19', '09:00:00.0000', 30, 'gj\'oir.', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(10) NOT NULL,
  `reviewtitle` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foodscore` int(1) NOT NULL,
  `servicescore` int(1) NOT NULL,
  `locationscore` int(1) NOT NULL,
  `pricescore` int(1) NOT NULL,
  `cleanlinessscore` int(1) NOT NULL,
  `reviewcontent` text NOT NULL,
  `userID` int(10) NOT NULL,
  `approverID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `reviewtitle`, `date`, `foodscore`, `servicescore`, `locationscore`, `pricescore`, `cleanlinessscore`, `reviewcontent`, `userID`, `approverID`) VALUES
(1, 'WOW', '2018-05-30 14:00:00', 5, 5, 4, 5, 5, 'WOWOWOWOWOWOWOWOW', 1, 1),
(2, 'HAH', '2018-05-30 14:00:00', 2, 4, 3, 1, 4, 'HAHAHAHAHAHAHAHAHAH', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `userType` int(1) NOT NULL DEFAULT '1',
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `imageLink` varchar(255) NOT NULL DEFAULT '../img/userPictures/defaultUser.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userType`, `firstname`, `lastname`, `email`, `password`, `imageLink`) VALUES
(-1, 0, 'Anon', 'ymous', '', '', '../img/userPictures/defaultUser.png'),
(0, 3, 'Admin', 'God', 'admin@banyan.com', '$2y$10$lrJQyfyEG3.JW5P.JTEULeSLr0GbJMKN8To/1qMqOBU76LF0T4/Kq', '../img/userPictures/defaultUser.png'),
(1, 2, 'Manager', 'Guy', 'manager@banyan.com', '$2y$10$VYFOhr3nzn0hHv3zn24lNOXAN6FZYrlafvjusuK2V/IEyvYGe1Ica', '../img/userPictures/defaultUser.png'),
(3, 1, 'Muskaan', 'Bakshi', 'muskanbakshi@gmail.com', '$2y$10$1Pb1o1B1DwstlZT.cNoZpO/FNQqXrku6.6W/gW2k/5dkPCTR7kNN2', '../img/userPictures/defaultUser.png');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `usertypeID` int(1) NOT NULL,
  `usertypename` varchar(10) NOT NULL,
  `usertypepass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`usertypeID`, `usertypename`, `usertypepass`) VALUES
(0, 'anon', ''),
(1, 'member', '1234567890'),
(2, 'manager', '1234567890'),
(3, 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`functionID`),
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- Indexes for table `logdata`
--
ALTER TABLE `logdata`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `userID` (`userID`);

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
  ADD KEY `memberID` (`userID`),
  ADD KEY `reservationfunction` (`functionID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `memberID` (`userID`),
  ADD KEY `approver` (`approverID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userType` (`userType`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`usertypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=834;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `dishID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `function`
--
ALTER TABLE `function`
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logdata`
--
ALTER TABLE `logdata`
  ADD CONSTRAINT `userlogdata` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservationfunction` FOREIGN KEY (`functionID`) REFERENCES `function` (`functionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `approver` FOREIGN KEY (`approverID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `creator` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `usertype` FOREIGN KEY (`userType`) REFERENCES `usertypes` (`usertypeID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
