-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 02:21 PM
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
(711, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-27 13:38:11', 2),
(712, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-27 13:38:11', 2),
(713, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 13:41:48', 2),
(714, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 13:47:25', 2),
(715, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 13:47:59', 2),
(716, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 13:48:19', 2),
(717, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:11:42', 2),
(718, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:12:16', 2),
(719, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:12:41', 2),
(720, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:16:36', 2),
(721, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:17:35', 2),
(722, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/function.php', '127.0.0.1', '2018-05-27 14:18:08', 2),
(723, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:18:26', 2),
(724, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:33:52', 2),
(725, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/function.php', '127.0.0.1', '2018-05-27 14:34:04', 2),
(726, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:34:07', 2),
(727, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:34:48', 2),
(728, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:35:05', 2),
(729, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:35:29', 2),
(730, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:35:52', 2),
(731, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:35:56', 2),
(732, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/contact.php', '127.0.0.1', '2018-05-27 14:35:59', 2),
(733, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:36:01', 2),
(734, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/contact.php', '127.0.0.1', '2018-05-27 14:36:12', 2),
(735, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:36:13', 2),
(736, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:37:18', 2),
(737, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:37:38', 2),
(738, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:37:51', 2),
(739, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:38:38', 2),
(740, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:38:58', 2),
(741, 'tqvaulqd2c9smpki5u2hfq7uql', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:39:03', 2),
(742, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-27 14:40:38', -1),
(743, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:40:42', -1),
(744, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:40:54', 2),
(745, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/menu.php', '127.0.0.1', '2018-05-27 14:41:20', 2),
(746, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 14:41:42', 2),
(747, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/menu.php', '127.0.0.1', '2018-05-27 14:47:05', 2),
(748, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 14:47:25', 2),
(749, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:04:20', 2),
(750, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:07:48', 2),
(751, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:07:55', 2),
(752, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/function.php', '127.0.0.1', '2018-05-27 15:07:56', 2),
(753, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:07:58', 2),
(754, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:09:31', 2),
(755, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:10:07', 2),
(756, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:10:30', 2),
(757, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:12:25', 2),
(758, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:12:36', 2),
(759, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:12:46', 2),
(760, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:13:12', 2),
(761, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:14:04', 2),
(762, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:14:58', 2),
(763, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:15:13', 2),
(764, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:15:26', 2),
(765, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:15:50', 2),
(766, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:16:17', 2),
(767, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:16:29', 2),
(768, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:16:39', 2),
(769, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:16:48', 2),
(770, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:17:34', 2),
(771, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:17:43', 2),
(772, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:18:01', 2),
(773, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:18:10', 2),
(774, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:22:54', 2),
(775, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:23:12', 2),
(776, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:25:48', 2),
(777, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:27:26', 2),
(778, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:28:11', 2),
(779, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:28:34', 2),
(780, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:28:48', 2),
(781, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 15:29:02', 2),
(782, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:01:48', 2),
(783, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:02:09', 2),
(784, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/contact.php', '127.0.0.1', '2018-05-27 16:02:24', 2),
(785, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/function.php', '127.0.0.1', '2018-05-27 16:02:28', 2),
(786, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 16:02:30', 2),
(787, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:02:36', 2),
(788, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:03:13', 2),
(789, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:12:11', 2),
(790, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:12:31', 2),
(791, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:13:29', 2),
(792, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:13:40', 2),
(793, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:14:11', 2),
(794, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:14:59', 2),
(795, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:15:46', 2),
(796, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:15:55', 2),
(797, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:16:00', 2),
(798, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:16:29', 2),
(799, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:17:00', 2),
(800, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:17:18', 2),
(801, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:17:39', 2),
(802, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:19:52', 2),
(803, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:21:45', 2),
(804, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:29:27', 2),
(805, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:29:51', 2),
(806, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 16:30:13', 2),
(807, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-27 22:20:02', 2),
(808, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 22:20:06', 2),
(809, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 22:20:10', 2),
(810, 'mkhjkd49mt208ev85394h3jca8', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-27 22:20:11', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(10) NOT NULL,
  `reviewtitle` varchar(60) NOT NULL,
  `foodscore` int(1) NOT NULL,
  `servicescore` int(1) NOT NULL,
  `locationscore` int(1) NOT NULL,
  `pricescore` int(1) NOT NULL,
  `cleanlinessscore` int(1) NOT NULL,
  `reviewcontent` text NOT NULL,
  `userID` int(10) NOT NULL,
  `approverID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 1, 'Generic', 'Joe', 'member@gmail.com', '$2y$10$ZyV1dCyT8ZxaTC.2bAq49eXFqrEka6/aNHdvJBuiIhkPNlzn3g/DK', '../img/userPictures/defaultUser.png');

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
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=811;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `dishID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `reservationfunction` FOREIGN KEY (`functionID`) REFERENCES `functions` (`functionID`) ON DELETE CASCADE ON UPDATE CASCADE,
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
