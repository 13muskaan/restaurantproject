-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 02:07 PM
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
(833, 'd0gbqqb78dt1v3luk2b22fn1o6', '/restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-05-29 11:06:06', -1),
(834, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-06-07 18:52:08', -1),
(835, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-06-07 18:52:28', -1),
(836, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-06-07 18:52:39', -1),
(837, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-06-07 18:52:54', 0),
(838, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-06-07 18:52:57', 0),
(839, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/function_manage.php', '127.0.0.1', '2018-06-07 18:53:03', 0),
(840, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/function_manage.php', '127.0.0.1', '2018-06-07 18:54:49', 0),
(841, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage.php', '127.0.0.1', '2018-06-07 18:54:53', 0),
(842, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage.php', '127.0.0.1', '2018-06-07 18:55:33', 0),
(843, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage.php', '127.0.0.1', '2018-06-07 18:55:38', 0),
(844, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage_editform.php?id=25', '127.0.0.1', '2018-06-07 18:57:46', 0),
(845, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage.php', '127.0.0.1', '2018-06-07 18:58:33', 0),
(846, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage_insertform.php', '127.0.0.1', '2018-06-07 18:59:40', 0),
(847, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage.php', '127.0.0.1', '2018-06-07 19:00:17', 0),
(848, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage_insertform.php', '127.0.0.1', '2018-06-07 19:00:26', 0),
(849, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage.php', '127.0.0.1', '2018-06-07 19:00:51', 0),
(850, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/review_manage.php', '127.0.0.1', '2018-06-07 19:01:31', 0),
(851, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/review_manage.php', '127.0.0.1', '2018-06-07 19:02:26', 0),
(852, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-06-07 19:02:53', 0),
(853, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-06-07 19:04:29', 0),
(854, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-06-07 19:04:43', 0),
(855, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-06-07 19:05:51', 0),
(856, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/user_manage.php', '127.0.0.1', '2018-06-07 19:05:55', 0),
(857, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-06-07 19:08:43', -1),
(858, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-06-07 19:08:52', 1),
(859, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/manager/reservation_manage.php', '127.0.0.1', '2018-06-07 19:08:57', 1),
(860, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/manager/index_manager.php', '127.0.0.1', '2018-06-07 19:09:35', 1),
(861, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/manager/index_manager.php', '127.0.0.1', '2018-06-07 19:10:15', 1),
(862, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/manager/reservation_manage.php', '127.0.0.1', '2018-06-07 19:10:18', 1),
(863, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/manager/reservation_manage.php', '127.0.0.1', '2018-06-07 19:11:45', 1),
(864, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/manager/reservation_manage.php', '127.0.0.1', '2018-06-07 19:11:47', 1),
(865, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-06-07 19:11:56', -1),
(866, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-06-07 19:12:09', 8),
(867, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-06-07 19:12:12', 8),
(868, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-06-07 19:12:13', 8),
(869, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-06-07 19:12:30', 8),
(870, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/memberprofile.php', '127.0.0.1', '2018-06-07 19:12:39', 8),
(871, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/admin/menuitem_manage.php', '127.0.0.1', '2018-06-07 19:13:15', 8),
(872, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/index.php', '127.0.0.1', '2018-06-07 19:13:15', 8),
(873, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-06-07 19:17:50', 8),
(874, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/reservation.php', '127.0.0.1', '2018-06-07 19:18:25', 8),
(875, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/login.php', '127.0.0.1', '2018-06-07 19:22:05', -1),
(876, 'qlp7urr0513rlos847pss6j3cu', '//restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-06-07 19:22:08', -1),
(877, 'qlp7urr0513rlos847pss6j3cu', '////restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-06-07 19:22:32', 8),
(878, 'qlp7urr0513rlos847pss6j3cu', '////restaurantproject_muskaanbakshi_9105462916/view/pages/review.php', '127.0.0.1', '2018-06-07 19:25:12', 8),
(879, 'huqfhv2jv9rh6f8notg9mur8hh', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 19:44:22', -1),
(880, 'd50duhu9ogjnprv1vrl5pmqld1', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 19:44:52', -1),
(881, 'l4r3pnkorevo57gf2uggd6fp68', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 19:47:36', -1),
(882, '3tg3lli8hl1lsd97kiok739poi', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 19:59:26', -1),
(883, 'hqh98pbmd0t72jlnq6jmtoo4ce', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:03:58', -1),
(884, '8srdafhshv3a6allmmlhsjsm6k', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:05:10', -1),
(885, '9ju97b8217el4up6ar8b7ja1u6', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:05:38', -1),
(886, 'e8n5v2v2ppu3gmqd3nra93aqkb', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:06:21', -1),
(887, 'tp4dv157f69jcu4p6ife5a5a46', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:07:06', -1),
(888, '8j7cp4hpqa4b1eoh7a2dqug8ac', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:09:00', -1),
(889, 'sh5eacjk37rubajrtafe5u5o9g', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:10:08', -1),
(890, 'euee06s2rnt10l1k8pa93vg367', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:10:18', -1),
(891, 'pmlgov43r667maguom6og9gdm8', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:10:49', -1),
(892, 'u1btj985rdg07nvaouib3u0hfc', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:16:15', -1),
(893, '82sa75rc9mslej9pt911t5hqmo', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:17:09', -1),
(894, 'ha9i4l7dvonocberef1dh70ob2', '/restaurantproject_muskaanbakshi_9105462916/control/session.php', '127.0.0.1', '2018-06-07 20:17:56', -1);

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
(25, 'K-pop', 'I literally killed a K-Pop star to make this dish.', '1000.0'),
(27, 'g', 'g', 'g'),
(28, 'hejfjefo', 'j', 'j'),
(30, 'Lasagnae', 'I don\'t think I spelled that right, I\'m not an Italy.', '500 eu');

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
(21, '2018-06-30', '09:00:00.0000', 92, 'HAHAHAHAHAHAHAHAHA', 8, 1),
(22, '2018-06-30', '12:00:00.0000', 92, 'I will delete your data!\"; delete * from users;', 8, 2);

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
(2, 'HAH', '2018-05-30 14:00:00', 2, 4, 3, 1, 4, 'HAHAHAHAHAHAHAHAHAH', 1, 1),
(7, 'These prices would make you think you\'re buying gold!', '2018-06-07 09:25:12', 3, 2, 5, 0, 4, 'Literally, there was no gold on my plate! Except for, of course the blissful shimmering gold of the sun filtering through the window planes. This would have to be the best location for a restaurant. But I mean, come on, 500 euro for a K-Pop star?! Ridiculous!', 8, 0);

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
(0, 3, 'Admin', 'God', 'admin@banyan.com', '$2y$10$lrJQyfyEG3.JW5P.JTEULeSLr0GbJMKN8To/1qMqOBU76LF0T4/Kq', '../img/userPictures/0.jpg'),
(1, 2, 'Manager', 'Guy', 'manager@banyan.com', '$2y$10$VYFOhr3nzn0hHv3zn24lNOXAN6FZYrlafvjusuK2V/IEyvYGe1Ica', '../img/userPictures/1.png'),
(3, 1, 'Muskaan', 'Bakshi', 'muskanbakshi@gmail.com', '$2y$10$1Pb1o1B1DwstlZT.cNoZpO/FNQqXrku6.6W/gW2k/5dkPCTR7kNN2', '../img/userPictures/defaultUser.png'),
(8, 1, 'Generic', 'Grill', 'member@gmail.com', '$2y$10$HCdImI8toOoLT1CZFmYk..XFRZrV/9U81I.A5JrEjBmyIgnsAkuLG', '../img/userPictures/8.jpg');

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
  MODIFY `logID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=895;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `dishID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
