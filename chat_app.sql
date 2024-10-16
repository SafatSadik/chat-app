-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 03:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat app`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_friends`
--

CREATE TABLE `add_friends` (
  `id` int(12) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_friends`
--

INSERT INTO `add_friends` (`id`, `sender`, `reciever`) VALUES
(87, '36', '29'),
(88, '44', '29'),
(89, '44', '36'),
(90, '48', '29');

-- --------------------------------------------------------

--
-- Table structure for table `developers_sww`
--

CREATE TABLE `developers_sww` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `usr_uniq_id` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `first_friend` varchar(255) NOT NULL,
  `second_friend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `first_friend`, `second_friend`) VALUES
(8, '36', '42'),
(9, '44', '49');

-- --------------------------------------------------------

--
-- Table structure for table `messege`
--

CREATE TABLE `messege` (
  `id` int(11) NOT NULL,
  `replied_msg_id` int(11) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `reciever_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `un_read` varchar(255) NOT NULL DEFAULT 'yes',
  `send_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messege`
--

INSERT INTO `messege` (`id`, `replied_msg_id`, `sender_id`, `reciever_id`, `msg`, `picture`, `video`, `un_read`, `send_time`) VALUES
(556, 0, '56', '54', 'dcvf', '', '', 'yes', '2023-08-26 21:56:36'),
(625, 0, '44', '47', 'bainco lelelel', '', '', '', '2022-01-25 23:43:34'),
(627, 0, '47', '44', 'okhei ', '', '', '', '2022-01-25 23:43:39'),
(628, 0, '47', '44', 'okhei ', '', '', '', '2022-01-25 23:44:13'),
(634, 0, '44', '47', 'naki naki', '', '', '', '2022-01-25 23:49:16'),
(635, 631, '47', '44', 'pichi', '', '', '', '2022-01-25 23:54:28'),
(640, 0, '44', '34', 'm', '', '', '', '2022-01-26 15:06:15'),
(643, 0, '44', '47', 'mew', '', '', '', '2022-01-26 15:12:24'),
(656, 0, '44', '47', 'm', '', '', '', '2022-01-26 20:58:23'),
(658, 656, '44', '47', 'chapmew', '', '', '', '2022-02-01 21:40:17'),
(659, 0, '47', '44', 'kirre', '', '', '', '2022-02-02 03:05:31'),
(660, 0, '47', '44', 'aos', '', '', '', '2022-02-02 03:05:33'),
(661, 0, '47', '44', 'asoss', '', '', '', '2022-02-02 03:05:44'),
(663, 662, '44', '47', 's', '', '', '', '2022-02-02 14:47:37'),
(664, 0, '44', '47', 'm', '', '', '', '2022-02-02 14:56:48'),
(666, 0, '44', '34', 's', '', '', '', '2022-02-05 03:08:33'),
(675, 0, '44', '47', 'm', '', '', '', '2022-02-11 01:21:01'),
(714, 0, '44', '47', '&#128512;', '', '', '', '2022-02-16 20:31:30'),
(718, 0, '44', '47', '&#128519;', '', '', '', '2022-02-16 20:36:19'),
(732, 0, '44', '47', 'ae', '', '', '', '2022-02-22 23:17:01'),
(798, 0, '47', '44', 'kisse', '', '', 'yes', '2022-02-25 01:13:06'),
(800, 0, '44', '47', 'lnljblj', '', '', '', '2022-02-25 01:22:03'),
(809, 0, '44', '34', 'ae', '', '', '', '2022-03-14 16:21:11'),
(811, 0, '44', '47', 'kew', '', '', '', '2022-03-23 18:48:40'),
(812, 0, '44', '47', 'hb', '', '', '', '2022-03-24 16:49:26'),
(813, 660, '44', '47', 'mew', '', '', '', '2022-06-06 16:56:11'),
(814, 714, '44', '47', 'kjwbebwejkb', '', '', '', '2022-06-06 16:56:17'),
(816, 0, '44', '34', 'oi', '', '', '', '2022-06-07 00:17:16'),
(817, 0, '44', '34', 'kaenfajenaejnfeojnfewojfneojfnfnrwjfnrwojfnrwfljnrgfsnviornvsk voervnerojgnerojgnrojv rjnrejgnreonrelkvreoknerojgerlknreoknreognrelkrekognreoignrgnrokgnreognrknrgonro', '', '', '', '2022-06-07 00:17:33'),
(818, 0, '44', '34', 'hi', '', '', '', '2022-06-08 19:52:06'),
(819, 0, '44', '34', '', '', '40153308062022WebSockets (Using PHP) Tutorial #2 _ How to Connect PHP with WebSockets (1).mp4', '', '2022-06-08 19:52:39'),
(820, 0, '44', '34', '', 'public/image/898653080620221.png', '', '', '2022-06-08 19:53:18'),
(821, 0, '44', '34', '', '', '71940808062022283569636_1116891965561898_7390272173546532975_n.mp4', '', '2022-06-08 19:53:37'),
(822, 0, '44', '34', 'লাএহফউশফউশফউর্ববফউও', '', '', '', '2022-06-10 17:50:41'),
(823, 0, '44', '34', 'কিররে', '', '', '', '2022-06-10 17:50:45'),
(826, 0, '44', '34', 'ওয়াতের', '', '', '', '2022-06-10 17:50:58'),
(827, 0, '44', '34', 'আক্রেস্পফন্সপফনেসগ', '', '', '', '2022-06-10 17:50:58'),
(828, 0, '44', '34', 'সগ', '', '', '', '2022-06-10 17:50:59'),
(829, 0, '44', '34', 'ঙ্গামার নামে ', '', '', '', '2022-06-10 17:51:03'),
(830, 0, '44', '34', 'সাফাত', '', '', '', '2022-06-10 17:51:04'),
(831, 0, '44', '34', 'তর নামে ', '', '', '', '2022-06-10 17:51:07'),
(832, 0, '44', '34', 'ই ', '', '', '', '2022-06-10 17:51:08'),
(833, 0, '44', '34', '/\"', '', '', '', '2022-06-10 17:51:09'),
(834, 0, '44', '34', '?', '', '', '', '2022-06-10 17:51:09'),
(835, 0, '44', '34', '?', '', '', '', '2022-06-10 17:51:10'),
(836, 0, '44', '34', '?', '', '', '', '2022-06-10 17:51:10'),
(837, 0, '44', '34', '?', '', '', '', '2022-06-10 17:51:11'),
(838, 0, '44', '34', '?', '', '', '', '2022-06-10 17:51:12'),
(839, 0, '44', '34', 'unried', '', '', '', '2022-06-11 17:00:29'),
(840, 0, '44', '34', 'lejfnsekjfbsdkjfbdsds', '', '', '', '2022-06-11 17:01:48'),
(841, 0, '44', '34', 'lejfnsekjfbsdkjfbdsdsfdv', '', '', '', '2022-06-11 17:01:48'),
(842, 0, '44', '34', 'f', '', '', '', '2022-06-11 17:01:49'),
(843, 0, '44', '34', 'ff', '', '', '', '2022-06-11 17:01:49'),
(844, 0, '44', '34', 'fd', '', '', '', '2022-06-11 17:01:49'),
(845, 0, '44', '34', 'fd', '', '', '', '2022-06-11 17:01:50'),
(846, 0, '44', '34', 'v', '', '', '', '2022-06-11 17:01:50'),
(847, 0, '44', '34', 'fd', '', '', '', '2022-06-11 17:01:50'),
(848, 0, '44', '34', 'fdgfd', '', '', '', '2022-06-11 17:01:50'),
(849, 0, '44', '34', 'g', '', '', '', '2022-06-11 17:01:51'),
(850, 0, '44', '34', 'g', '', '', '', '2022-06-11 17:01:51'),
(851, 0, '44', '34', 'g', '', '', '', '2022-06-11 17:01:51'),
(852, 0, '44', '34', 'gg', '', '', '', '2022-06-11 17:01:51'),
(853, 0, '44', '34', 'g', '', '', '', '2022-06-11 17:01:52'),
(854, 0, '44', '34', 'g', '', '', '', '2022-06-11 17:01:52'),
(855, 0, '44', '34', 'g', '', '', '', '2022-06-11 17:01:52'),
(858, 0, '44', '48', 'kirre', '', '', '', '2022-06-12 14:19:28'),
(859, 0, '44', '48', 'mangeer pola ', '', '', '', '2022-06-12 14:19:31'),
(860, 0, '48', '44', 'YOYo', '', '', '', '2022-06-12 14:19:53'),
(861, 0, '48', '44', 'oi tor app e name change kore kemne', '', '', '', '2022-06-12 14:20:02'),
(862, 0, '44', '48', '', 'https://media.tenor.com/images/0ff1b503d251c3d5f79b41ad3589e144/tenor.gif', '', '', '2022-06-12 14:20:28'),
(863, 861, '44', '48', 'system nai lmao ', '', '', '', '2022-06-12 14:20:40'),
(865, 0, '49', '44', 'Sura target', '', '', '', '2022-06-12 14:22:27'),
(866, 635, '44', '47', 'wlrjhosufhgsjgrdkjgb', '', '', '', '2022-06-13 14:15:38'),
(867, 0, '44', '48', ',', '', '', '', '2022-06-13 14:18:38'),
(868, 865, '44', '49', 'chura', '', '', '', '2022-06-13 14:26:22'),
(869, 0, '44', '47', 'dknfljrwnf', '', '', '', '2022-06-14 20:26:56'),
(870, 0, '44', '47', 'dknfljrwnf', '', '', '', '2022-06-14 20:26:58'),
(871, 0, '50', '29', 'krie ', '', '', '', '2023-08-25 23:23:06'),
(872, 0, '50', '29', 'ki oosta', '', '', '', '2023-08-25 23:23:08'),
(873, 0, '50', '29', 'valo asos', '', '', '', '2023-08-25 23:23:11'),
(874, 0, '50', '29', '', 'https://media.tenor.com/pLmhGBqO6soAAAAM/lisa-cute-lisa.gif', '', '', '2023-08-25 23:24:08'),
(875, 0, '56', '54', 'dcvf', '', '', 'yes', '2023-08-26 21:57:21'),
(876, 0, '44', '47', 'mewm', '', '', '', '2023-08-26 22:10:09'),
(877, 0, '44', '47', 'd', '', '', '', '2023-08-26 22:10:39'),
(878, 0, '44', '47', 'd', '', '', '', '2023-08-26 22:10:41'),
(879, 0, '44', '47', 'd', '', '', '', '2023-08-26 22:10:41'),
(880, 0, '44', '47', 'dd', '', '', '', '2023-08-26 22:10:42'),
(881, 0, '51', '30', '', 'https://media.tenor.com/14kE8a_geYkAAAAM/astasiadream-tiktok.gif', '', '', '2023-10-04 01:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `s1`
--

CREATE TABLE `s1` (
  `id` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usr_uniq_code` varchar(255) NOT NULL,
  `day` int(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `status` varchar(255) NOT NULL DEFAULT 'Online',
  `banner_image` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL DEFAULT 'New To this plat form',
  `public_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s1`
--

INSERT INTO `s1` (`id`, `usr_name`, `email`, `password`, `usr_uniq_code`, `day`, `month`, `year`, `Date`, `image`, `status`, `banner_image`, `intro`, `public_code`) VALUES
(29, 'safat', 'safat@gmail.com', 'sss43673504b705fd33744bc11b3584b0c77297215e9c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '650401cd4c17079bd7d455aa8205cb8c6c9dd05b', 23, 'July', 1912, '2021-12-13', 'user.png', 'Online', '', 'New To this plat form', '66e40864fb26fc9bd532f833f52d54197d15bc81'),
(30, 'epa', 'epa@gmail.com', 'sss43673504b705fd33744bc11b3584b0c77297215e9c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '98539c39ae4a8a1a71c8aa35e198b7a381e0c92f', 17, 'February', 1912, '2021-12-13', 'user.png', 'Online', '', 'New To this plat form', '9de1d17cbc4c7cc927c69fb580aec451db8f75d5'),
(34, 'mew', 'mim@gmail.com', 'sss43673504b705fd33744bc11b3584b0c77297215e9c6a6c450d9c5c9493dd4b38425b72462a984898safat33', 'a22a43d63200c11a69570c05c35306cab15f41f5', 21, 'April', 1915, '2021-12-13', 'user.png', 'Online', '', 'New To this plat form', '4f019a1e026c8e4a51ad7b5ca433259e9ce84970'),
(35, 'mia vai ', 'miavai@gmail.com', 'sss34e808e95f9a2463537a73ff4093d3c77dd8c0949c6a6c450d9c5c9493dd4b38425b72462a984898safat33', 'a05a812fbdb09d118771f8dd358868cf6636d053', 19, 'April', 1911, '2021-12-13', 'user.png', 'Online', '', 'New To this plat form', 'd727a9fbf1262dee0604340efc2827c8bc5d05c1'),
(36, 'safat', 'kuturkutur@gmail.com', 'sss34e808e95f9a2463537a73ff4093d3c77dd8c0949c6a6c450d9c5c9493dd4b38425b72462a984898safat33', 'e629e6c855578f092a5fceacff6fed49794d5aea', 18, 'April', 1917, '2021-12-13', 'mew.gif', 'Online', '', 'New To this plat form', '8f8a0a6d6498438757ac93d40472f75c74b987e0'),
(41, '.safat.', 'resgtdh@gmail.com', 'sss43673504b705fd33744bc11b3584b0c77297215e9c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '9554b2e012173d7606daea14ddebb68232e4f2a1', 16, 'May', 1919, '2021-12-13', 'user.png', 'Online', '', 'New To this plat form', '434912e0cc9d77405c0f31777220f32895210bbf'),
(42, 'sih marka', 'miavaimew@gmail.com', 'sss4a88b909388fa64d91059fed17b1025c11fe5db59c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '3a47d7aacae616f6f335315eca444347f5a244ed', 24, 'April', 1913, '2021-12-23', 'user.png', 'Online', '', 'New To this plat form', 'ca509e503476af111015e49487c1ca7657bd6c0a'),
(43, 'safat', 'sdfsgdfhgj@gmail.com', 'sss34e808e95f9a2463537a73ff4093d3c77dd8c0949c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '5277d90f5bae8d5599a5c19a5841550e3e474705', 18, 'February', 1915, '2022-01-13', 'user.png', 'Online', '', 'New To this plat form', '3382ab2413b3649b17d16ad43a75a880fcd2464b'),
(44, 'zizi', 'zizan@gmail.com', 'sss846b5b58936ac1be226caba0a39d4260a45165a79c6a6c450d9c5c9493dd4b38425b72462a984898safat33', 'f8a6cda5bec2052efd70438b1b6c9d6d50149d8e', 16, 'Mars', 1916, '2022-01-14', 'mmmm.png', 'Online', '', 'New To this plat form', 'c1af38cf6fda53c3a57a00629b39da458b9e6be3'),
(45, 'vaaau', 'ryguhbj@gmail.com', 'sss34e808e95f9a2463537a73ff4093d3c77dd8c0949c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '952fd732e4e09fbb3078c75885396f8f7e39d781', 16, 'February', 1913, '2022-01-15', 'user.png', 'Online', '', 'New To this plat form', '4cfd68aebaa6f5c82dcc772c7d37c392823cd637'),
(47, 'sifat', 'sifat@gmail.com', 'sss5eebc5f1069e3303e0a330381996cff8945624a89c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '98892af481bf3296de2d313a92aefc34ac2ac092', 13, 'October', 1910, '2022-01-23', 'user.png', 'Online', '', 'New To this plat form', '2184f43bbbe3300e2fa925740bd9544330087abe'),
(49, 'Riadul Islam Zizan', 'zizan6969riz@gmail.com', 'sssbc1637a4ff550bc082b1cacd5077a8b0cb6339499c6a6c450d9c5c9493dd4b38425b72462a984898safat33', 'bea6511878c7136ba8ba425b0d7fa89114b92ebd', 10, 'October', 2007, '2022-06-12', 'user.png', 'Online', '', 'New To this plat form', '4189d260942a061565c7cb12c57bb3a67a776c25'),
(50, 'mew mew ', 'mew9@gmail.com', 'sss846b5b58936ac1be226caba0a39d4260a45165a79c6a6c450d9c5c9493dd4b38425b72462a984898safat33', 'ae981bb1b363ae75dd7b1ccf9426c3e22815acfa', 2, 'January', 1912, '2023-08-25', 'user.png', 'Online', '', 'New To this plat form', '30b69acb435cba1c7f27a3a1de1c350526ae8c97'),
(51, 'mew', 'mewmewmew@gmail.com', 'sss846b5b58936ac1be226caba0a39d4260a45165a79c6a6c450d9c5c9493dd4b38425b72462a984898safat33', '792d685d094037cc3de4fc783be5636739aa511c', 14, 'Mars', 1914, '2023-10-04', 'user.png', 'Online', '', 'New To this plat form', '6737a866749f2474ddb9a332ebd2f5ccd53f8aa3');

-- --------------------------------------------------------

--
-- Table structure for table `side_bar_peoples`
--

CREATE TABLE `side_bar_peoples` (
  `serial_number` int(255) NOT NULL,
  `usr_uniq_code` varchar(255) NOT NULL,
  `oponent_uniq_code` varchar(255) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `op_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `side_bar_peoples`
--

INSERT INTO `side_bar_peoples` (`serial_number`, `usr_uniq_code`, `oponent_uniq_code`, `usr_name`, `image`, `status`, `op_id`) VALUES
(46, '24', '16', 'safat', 'user.png', 'Online', 16),
(47, '24', '18', 'safatergsdh', 'user.png', 'Online', 18),
(58, '24', '22', 'Salmon Sadik ', 'mew.gif', 'Online', 22),
(59, '28', '22', 'Salmon Sadik ', 'mew.gif', 'Online', 22),
(223, '36', '42', 'sih marka', 'user.png', 'Online', 42),
(241, '36', '29', 'safat', 'user.png', 'Online', 29),
(244, '43', '29', 'safat', 'user.png', 'Online', 29),
(246, '43', '42', 'sih marka', 'user.png', 'Online', 42),
(249, '43', '36', 'safat', 'mew.gif', 'Online', 36),
(256, '45', '29', 'safat', 'user.png', 'Online', 29),
(261, '46', '36', 'safat', 'mew.gif', 'Online', 36),
(681, '44', '34', 'mew', 'user.png', 'Online', 34),
(685, '48', '44', 'zizi', 'mmmm.png', 'Online', 44),
(689, '49', '44', 'zizi', 'mmmm.png', 'Online', 44),
(691, '44', '48', 'Manger Pola', 'user.png', 'Online', 48),
(692, '44', '49', 'Riadul Islam Zizan', 'user.png', 'Online', 49),
(698, '50', '29', 'safat', 'user.png', 'Online', 29),
(703, '44', '47', 'sifat', 'user.png', 'Online', 47),
(704, '51', '30', 'epa', 'user.png', 'Online', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `public_code` varchar(255) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `extra_status` varchar(255) NOT NULL,
  `current_city` varchar(255) NOT NULL,
  `home_town` varchar(255) NOT NULL,
  `born_in` varchar(255) NOT NULL,
  `born_place` varchar(255) NOT NULL,
  `reletionship` varchar(255) NOT NULL,
  `personal_email` varchar(255) NOT NULL,
  `work_email` varchar(255) NOT NULL,
  `phon` int(20) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `public_code`, `usr_id`, `banner_image`, `profile_picture`, `intro`, `extra_status`, `current_city`, `home_town`, `born_in`, `born_place`, `reletionship`, `personal_email`, `work_email`, `phon`, `gender`) VALUES
(1, '2184f43bbbe3300e2fa925740bd9544330087abe', 47, '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(2, 'c1af38cf6fda53c3a57a00629b39da458b9e6be3', 44, '', '', '', '', '', '', '', '', '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_friends`
--
ALTER TABLE `add_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers_sww`
--
ALTER TABLE `developers_sww`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messege`
--
ALTER TABLE `messege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s1`
--
ALTER TABLE `s1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `side_bar_peoples`
--
ALTER TABLE `side_bar_peoples`
  ADD PRIMARY KEY (`serial_number`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_friends`
--
ALTER TABLE `add_friends`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `developers_sww`
--
ALTER TABLE `developers_sww`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messege`
--
ALTER TABLE `messege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=882;

--
-- AUTO_INCREMENT for table `s1`
--
ALTER TABLE `s1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `side_bar_peoples`
--
ALTER TABLE `side_bar_peoples`
  MODIFY `serial_number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
