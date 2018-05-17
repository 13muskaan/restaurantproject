-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 03:40 PM
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
-- Table structure for table `log`
--

CREATE TABLE `log` (
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
(16, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-17 16:51:03', -1),
(17, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-17 16:51:47', -1),
(18, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 16:52:03', 1),
(19, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 16:52:13', 1),
(20, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 16:53:03', 1),
(21, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 16:53:15', -1),
(22, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-17 16:53:16', -1),
(23, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 16:53:44', 2),
(24, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 16:53:48', 2),
(25, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 16:53:56', -1),
(26, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 16:54:04', -1),
(27, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 16:54:15', -1),
(28, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 16:54:26', -1),
(29, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 16:58:30', -1),
(30, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-17 16:58:55', -1),
(31, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 16:58:57', -1),
(32, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 16:59:06', -1),
(33, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:02:52', -1),
(34, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:03:00', -1),
(35, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-17 17:03:15', -1),
(36, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:03:48', 3),
(37, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:04:07', -1),
(38, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:04:27', -1),
(39, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:06:05', -1),
(40, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:06:21', -1),
(41, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:06:29', -1),
(42, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:07:02', -1),
(43, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:07:08', -1),
(44, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:07:14', -1),
(45, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:07:47', -1),
(46, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:07:56', -1),
(47, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:08:04', -1),
(48, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:09:13', -1),
(49, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:09:20', -1),
(50, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:10:43', -1),
(51, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:10:55', -1),
(52, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:11:00', -1),
(53, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:11:58', -1),
(54, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:12:04', -1),
(55, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:12:14', -1),
(56, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:13:25', -1),
(57, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:13:31', -1),
(58, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:14:26', -1),
(59, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:14:33', 3),
(60, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:15:16', 3),
(61, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:15:22', 3),
(62, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:15:57', 3),
(63, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:15:59', 3),
(64, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:16:07', 3),
(65, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:16:14', 3),
(66, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:16:21', 3),
(67, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:17:26', 3),
(68, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:18:18', 3),
(69, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:18:26', 3),
(70, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:18:32', 3),
(71, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:18:40', 3),
(72, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:18:57', 3),
(73, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:19:02', 3),
(74, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:19:07', 3),
(75, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:23:52', 3),
(76, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:24:06', 3),
(77, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:24:17', 3),
(78, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:25:18', 3),
(79, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:26:45', 3),
(80, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:26:50', 3),
(81, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:26:59', 3),
(82, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:27:34', 3),
(83, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:27:41', 3),
(84, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:27:47', 3),
(85, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:28:21', 3),
(86, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:28:25', 3),
(87, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:28:32', 3),
(88, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:28:58', 3),
(89, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:29:02', 3),
(90, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:29:08', 3),
(91, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:29:35', 3),
(92, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:29:39', 3),
(93, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:29:44', 3),
(94, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:29:54', 3),
(95, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:30:10', 3),
(96, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:30:15', 3),
(97, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:30:32', 3),
(98, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:30:36', 3),
(99, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:30:41', 3),
(100, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:31:37', 3),
(101, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:31:41', 3),
(102, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:31:48', 3),
(103, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:33:11', -1),
(104, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/admin/index_admin.php', '127.0.0.1', '2018-05-17 17:37:28', 0),
(105, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/admin/function_manage.php', '127.0.0.1', '2018-05-17 17:38:26', 0),
(106, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/admin/function_manage.php', '127.0.0.1', '2018-05-17 17:38:27', 0),
(107, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/admin/menuitem_manage.php', '127.0.0.1', '2018-05-17 17:38:31', 0),
(108, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/admin/user_manage.php', '127.0.0.1', '2018-05-17 17:38:33', 0),
(109, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/admin/review_manage.php', '127.0.0.1', '2018-05-17 17:38:36', 0),
(110, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/admin/user_manage.php', '127.0.0.1', '2018-05-17 17:38:39', 0),
(111, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-05-17 17:50:03', 0),
(112, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-05-17 17:51:10', 0),
(113, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-05-17 17:51:32', 0),
(114, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-05-17 17:52:09', 0),
(115, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-05-17 17:52:31', 0),
(116, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/register.php', '127.0.0.1', '2018-05-17 17:57:58', 0),
(117, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:58:09', 0),
(118, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 17:58:12', 0),
(119, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 17:58:24', -1),
(120, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 17:58:36', 1),
(121, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 17:58:40', 1),
(122, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:03:55', 1),
(123, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:04:12', 1),
(124, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:04:33', 1),
(125, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:04:54', 1),
(126, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:06:13', 1),
(127, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:06:14', 1),
(128, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:21:22', 1),
(129, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:22:46', 1),
(130, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:22:47', 1),
(131, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:22:50', 1),
(132, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:32:45', 1),
(133, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:32:45', 1),
(134, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:32:47', 1),
(135, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:34:02', 1),
(136, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:34:03', 1),
(137, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:34:05', 1),
(138, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:34:41', 1),
(139, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:38:16', 1),
(140, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:38:16', 1),
(141, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:38:19', 1),
(142, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:42:06', 1),
(143, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:42:07', 1),
(144, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 18:42:19', 1),
(145, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:42:25', 1),
(146, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 18:42:37', 1),
(147, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:43:36', 1),
(148, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 18:43:39', 1),
(149, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:53:04', 1),
(150, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:53:04', 1),
(151, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 18:53:05', 1),
(152, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:53:06', 1),
(153, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 18:55:53', 1),
(154, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php', '127.0.0.1', '2018-05-17 18:55:53', 1),
(155, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php', '127.0.0.1', '2018-05-17 18:55:53', 1),
(156, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:55:59', 1),
(157, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 18:57:50', 1),
(158, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 18:57:50', 1),
(159, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 18:57:50', 1),
(160, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:57:57', 1),
(161, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:59:39', 1),
(162, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 18:59:54', 1),
(163, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:00:16', 1),
(164, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.jpg', '127.0.0.1', '2018-05-17 19:00:16', 1),
(165, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.jpg', '127.0.0.1', '2018-05-17 19:00:16', 1),
(166, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:01:28', 1),
(167, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:01:35', 1),
(168, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 19:01:35', 1),
(169, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 19:01:35', 1),
(170, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:01:40', 1),
(171, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 19:02:30', -1),
(172, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 19:02:31', -1),
(173, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 19:02:37', 2),
(174, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:02:41', 2),
(175, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:02:53', 2),
(176, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:02:53', 2),
(177, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:02:53', 2),
(178, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:03:34', 2),
(179, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:03:34', 2),
(180, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:04:05', 2),
(181, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:04:05', 2),
(182, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:04:31', 2),
(183, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:04:31', 2),
(184, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:04:55', 2),
(185, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:04:55', 2),
(186, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:11:49', 2),
(187, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:11:49', 2),
(188, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:11:51', 2),
(189, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:12:05', 2),
(190, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:12:05', 2),
(191, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:12:05', 2),
(192, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:12:27', 2),
(193, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:12:34', 2),
(194, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:12:34', 2),
(195, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/2.png', '127.0.0.1', '2018-05-17 19:12:34', 2),
(196, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:12:50', 2),
(197, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 19:12:53', -1),
(198, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 19:13:01', 1),
(199, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:13:04', 1),
(200, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:13:10', 1),
(201, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 19:13:10', 1),
(202, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 19:13:10', 1),
(203, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:13:19', 1),
(204, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:13:26', 1),
(205, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 19:13:26', 1),
(206, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 19:13:26', 1),
(207, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:13:42', 1),
(208, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 19:23:31', 1),
(209, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.jpeg', '127.0.0.1', '2018-05-17 19:23:31', 1),
(210, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.jpeg', '127.0.0.1', '2018-05-17 19:23:31', 1),
(211, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:23:33', 1),
(212, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:30:58', 1),
(213, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:31:42', 1),
(214, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:32:46', 1),
(215, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:33:35', 1),
(216, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 19:33:53', 1),
(217, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:24:25', 1),
(218, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:25:09', 1),
(219, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:25:10', 1),
(220, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:25:36', 1),
(221, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:25:46', 1),
(222, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:26:47', 1),
(223, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:26:53', 1),
(224, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:26:54', 1),
(225, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:27:09', 1),
(226, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:27:20', 1),
(227, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:27:21', 1),
(228, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:27:27', 1),
(229, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:27:57', 1),
(230, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:27:57', 1),
(231, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:27:58', 1),
(232, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:30:13', 1),
(233, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 21:30:26', 1),
(234, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:30:29', 1),
(235, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/upload_file.php', '127.0.0.1', '2018-05-17 21:30:51', 1),
(236, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 21:30:51', 1),
(237, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/control/memberprofile_updateprocess.php?imageLink=../view/img/userPictures/1.png', '127.0.0.1', '2018-05-17 21:30:51', 1),
(238, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:30:53', 1),
(239, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:30:58', 1),
(240, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:31:07', -1),
(241, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:31:20', -1),
(242, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 21:32:44', 3),
(243, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:32:48', 3),
(244, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:34:22', 3),
(245, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-05-17 21:35:13', 3),
(246, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-05-17 21:35:22', 3),
(247, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/function.php', '127.0.0.1', '2018-05-17 21:35:23', 3),
(248, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/menu.php', '127.0.0.1', '2018-05-17 21:35:24', 3),
(249, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-05-17 21:35:26', 3),
(250, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:35:34', 3),
(251, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:35:39', 3),
(252, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:41:22', 3),
(253, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:41:27', 3),
(254, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:42:27', 3),
(255, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:43:15', 3),
(256, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-05-17 21:43:24', 3),
(257, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:43:54', -1),
(258, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:45:50', -1),
(259, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:46:00', -1),
(260, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:46:14', -1),
(261, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:47:16', -1),
(262, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:47:39', -1),
(263, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:47:40', -1),
(264, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:47:55', -1),
(265, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:49:17', -1),
(266, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:49:37', -1),
(267, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:50:24', -1),
(268, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:50:25', -1),
(269, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:50:40', -1),
(270, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:50:49', -1),
(271, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:50:58', -1),
(272, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:51:10', -1),
(273, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:51:27', -1),
(274, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:51:28', -1),
(275, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:51:50', -1),
(276, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:52:12', -1),
(277, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:52:24', -1),
(278, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:53:33', -1),
(279, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:53:34', -1),
(280, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:55:02', -1),
(281, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:55:03', -1),
(282, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:56:24', -1),
(283, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:56:37', -1),
(284, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:56:38', -1),
(285, 'o0dac94bi65v8tnrb0g94ric6o', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 21:57:29', -1),
(286, 'b8v6e1punovpim6ef4h55mf5dd', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-17 23:39:38', -1);

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
-- Table structure for table `membois`
--

CREATE TABLE `membois` (
  `memberID` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `imagePath` varchar(255) NOT NULL DEFAULT '../img/userPictures/defaultUser.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membois`
--

INSERT INTO `membois` (`memberID`, `email`, `password`, `firstname`, `lastname`, `imagePath`) VALUES
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
(47, '2018-06-30', '12:00:00.0000', 120, 'I AM INVITING THE ENTIRE VILLAGE TO MY BIRTHDAY!\r\n\r\nExcept you Nathan, screw you Nathan >:(', 1, 2),
(48, '2018-05-22', '12:00:00.0000', 43, 'hwrhw4', 1, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `userType` varchar(10) NOT NULL DEFAULT 'member',
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
(0, 'admin', 'God', 'PLEASE HELP HE\'S GOT A GUN', 'admin@banyan.com', '1234567890', '../img/userPictures/defaultUser.png'),
(1, 'member', 'steve', 'steve', 'steve@steve.com', 'Steve123', '../img/userPictures/1.png'),
(2, 'member', 'SMECH', 'SMECH', ';', '\'', '../img/userPictures/defaultUser.png'),
(3, 'member', 'Muskaan', 'Bakshi', '13muskanbakshi@gmail.com', '1234567890Dd', '../img/userPictures/defaultUser.png');

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
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `memberlogdata` (`memberID`),
  ADD KEY `adminlogdata` (`adminID`),
  ADD KEY `managerlogdata` (`managerID`);

--
-- Indexes for table `logdata`
--
ALTER TABLE `logdata`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerID`);

--
-- Indexes for table `membois`
--
ALTER TABLE `membois`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

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
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logdata`
--
ALTER TABLE `logdata`
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membois`
--
ALTER TABLE `membois`
  MODIFY `memberID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `dishID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `adminlogdata` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `managerlogdata` FOREIGN KEY (`managerID`) REFERENCES `manager` (`managerID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `memberlogdata` FOREIGN KEY (`memberID`) REFERENCES `membois` (`memberID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservationfunction` FOREIGN KEY (`functionID`) REFERENCES `functions` (`functionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservationmember` FOREIGN KEY (`memberID`) REFERENCES `membois` (`memberID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `adminreview` FOREIGN KEY (`reviewID`) REFERENCES `admin` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
