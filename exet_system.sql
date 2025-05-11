-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exet_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `phone`, `status`) VALUES
(1, 'System Administrator', 'admin@admin.com', '060f08f0f0bf1cfc07c035a337747cdf579330e9', '08101009014', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('001dq5eihcc4a6d3oi71mocfhqs31im1', '127.0.0.1', 1572300768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330303736383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('00cbp626fa5r5ase6hb4gtusdsbik877', '127.0.0.1', 1572293582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239333538323b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('2i0onmsfaummfnoqfu4k1oit2eeref9l', '::1', 1736363946, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733363336333934363b),
('32554bukq6gskpmc7qod5oga9qtfs90q', '127.0.0.1', 1572304088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330343038383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('3a62c6c923ac3d4c7765a32e26de9c8d92f61273', '20.171.206.35', 1727719553, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373731393535333b),
('3rbqgrualqvp7o0uc5r0dkf3ikcjf3e8', '::1', 1735555800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733353535353830303b),
('55bda0dc6388697d10948fec0cfe370aa8e96730', '20.171.206.25', 1727719242, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373731393234323b),
('619hop63a4q7qh1n1gjchme8f783fcr7', '127.0.0.1', 1580029838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032393833383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('70dfngk89mnotbi8urd1bnslhu2oej3o', '127.0.0.1', 1580030140, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303033303134303b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('7r7qu6klijvn00g62komglqadm7d1bs8', '127.0.0.1', 1580029158, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032393135383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('8tiri85c67jdo9ouisegu3i8jo33jnsn', '127.0.0.1', 1572298949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239383934393b),
('a299c4bb03aa23a62d0f9403689d46e1b52312c3', '20.171.206.58', 1727719546, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732373731393534363b6572726f725f6d6573736167657c733a32303a22496e76616c6964204c6f67696e2044657461696c223b5f5f63695f766172737c613a313a7b733a31333a226572726f725f6d657373616765223b733a333a226e6577223b7d),
('c4rpeot7p2i6e7bhtpkm82mu02fv2gb4', '127.0.0.1', 1572303777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330333737373b),
('d311k8db71p6gikrjfnqtngn6puur9q9', '127.0.0.1', 1572301474, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330313437343b),
('djb2jfmlndq32khq5d8teo3l49nk85cl', '127.0.0.1', 1572293243, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239333234333b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('eto8ll3famtr3q6hln09cngph1klnlhd', '127.0.0.1', 1580028821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032383832313b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('gghcarbdp8fv7901nstqt5ivbq6pjf7j', '127.0.0.1', 1572304823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330343832333b),
('ghtfb9hnftr2lbsd0r29k036g4nm8n8p', '127.0.0.1', 1572302906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330323930363b6572726f725f6d6573736167657c733a32303a22496e76616c6964204c6f67696e2044657461696c223b5f5f63695f766172737c613a313a7b733a31333a226572726f725f6d657373616765223b733a333a226f6c64223b7d),
('n867phmuemnm9sm76ceshe8e16isdeg6', '127.0.0.1', 1572304538, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330343533383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('nkqoee4ecmsuqhoql57m1tsjsprhjglf', '::1', 1736266433, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733363236363433333b),
('nm98573n3rmbcdgljvti8o089k85p17b', '127.0.0.1', 1580029468, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303032393436383b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('p0nuernv942dni5vmds5ri6p8qtt67mp', '127.0.0.1', 1580030378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538303033303337383b),
('p57bpq8kos2b4i2anht4tkgeegkoo3fj', '127.0.0.1', 1572292174, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239313938353b),
('qd3obl2dov09ld7189kgtlk6drk0slna', '127.0.0.1', 1572299559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239393535393b),
('re86ouansimg7gsai1u6rb2nbre7a8a8', '127.0.0.1', 1572300042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330303034323b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226e6577223b7d),
('rh5k6no76vaqji9dcj3bo99t08j7f8ih', '::1', 1735555800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313733353535353830303b),
('rv3oue3n0nrm5u0k6fjd2k1cji6kh93g', '127.0.0.1', 1572298465, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323239383436353b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b),
('sk50c4rmgo44v9glgq1jpeamj4i3n2cf', '127.0.0.1', 1572302520, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537323330323532303b);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_numeric` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `name_numeric`) VALUES
(13, 'SOFTWARE ENGINEERING', 'SOFTWARE DEVELOPMENT'),
(30, 'Devops', 'Devops'),
(32, 'B.Sc.Public Administration', 'B.SC. P. Admin'),
(33, 'Artificial Intelligience', 'AI'),
(34, 'Data Engineering', 'Data Engineering'),
(35, 'Computer SCIENCE', 'Comp Science');

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `phone` longtext NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_message`
--

CREATE TABLE `general_message` (
  `general_message_id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `general_message`
--

INSERT INTO `general_message` (`general_message_id`, `user_id`, `message`, `date`) VALUES
(1, 'admin-1', 'This is a general notice from the desk of the administrator. Please ensure you come to the admin office for your payment information', 1589392800),
(2, 'student-1', 'This is me and I am the student of the computer science', 1589392800),
(3, 'admin-1', 'fjfffjfjfj', 1736118000),
(4, 'hostel-2', 'fkfkfkkf', 1736118000),
(5, 'admin-1', 'Tomorrow is public holiday', 1736118000),
(6, 'security-3', 'Noted', 1736118000),
(7, 'security-3', 'Please admin, must students hav\'ent retured yet', 1736204400),
(8, 'security-3', 'This is Announcement from the head of security. No students will be allowed to leave the hotel from 24th January to 21 February', 1736290800);

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `guardian_id` int(15) NOT NULL,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `phone` longtext NOT NULL,
  `address` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`guardian_id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(2, 'Paul Guardian', 'pauljeremiah259@gmail.com', '07089544726', 'Gwarinpa', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'Friday Favour', 'michaelanietiejack@gmail.com', '07089544726', 'Gwarinpa', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 'Monday Musa Daniel', 'michaelanietiejack@gmail.com', '08101009014', 'Abuja', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5, 'Anietie Michael', 'michaelanietiejack@gmail.com', '08101009014', 'kubwa Abuja', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(6, 'Daniel Justin', 'anazorjustin@gmail.com', '08101009014', 'Abuja', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(7, 'Justin Parent', 'anazorjustin@gmail.com', '091546377282', 'Abuja', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` longtext NOT NULL,
  `phone` varchar(150) NOT NULL,
  `type` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `name`, `email`, `password`, `phone`, `type`) VALUES
(1, 'Mr. Micheal', 'michaelanietiejack@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '07089544726', 2),
(2, 'Joshua', 'jp.aluwaye@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '08039260253', 3),
(3, 'Jeremiah Paul Aluwaye', 'superadmin@neocloud.cloud', '7c4a8d09ca3762af61e59520943dc26494f8941b', '07089544726', 2),
(4, 'Mr. Josiah', 'joshiah@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '091293939399', 2),
(5, 'Anietie Michael', 'michaelanietiejack@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '08101009014', 5),
(6, 'Justin Emeka', 'justingabby01@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '08101009014', 5),
(7, 'Felix Imeh', 'justingabby01@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '08101009014', 6),
(8, 'Justin', 'justingabby01@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '09021254848', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_type`
--

CREATE TABLE `hostel_type` (
  `id` int(15) NOT NULL,
  `name` longtext NOT NULL,
  `rooms` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel_type`
--

INSERT INTO `hostel_type` (`id`, `name`, `rooms`) VALUES
(2, 'New Boys Hotels', 25),
(3, 'New girls Hostel', 30),
(5, 'Internation Hostel', 100),
(6, 'SUG Hotel', 100);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(15) NOT NULL,
  `student_id` int(15) NOT NULL,
  `description` longtext NOT NULL,
  `reason` longtext NOT NULL,
  `time_start` varchar(100) NOT NULL,
  `time_end` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL,
  `admin_status` varchar(255) NOT NULL,
  `dean_status` varchar(255) NOT NULL,
  `days_overstayed` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `running_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `student_id`, `description`, `reason`, `time_start`, `time_end`, `status`, `p_status`, `admin_status`, `dean_status`, `days_overstayed`, `date`, `running_year`) VALUES
(2, 12, 'A vacation for a birthday party in my house', 'My younger sister is the celebrant', '2025-01-01', '2025-01-02', 'approved', 'approved', 'approved', 'approved', '', '0000-00-00 00:00:00', '2024-2025'),
(3, 10, 'A vacation to visit parent for weding', 'Am part of the bride friend', '2025-01-07', '2025-01-08', 'approved', 'approved', 'approved', 'approved', 'overdue (85 days)', '0000-00-00 00:00:00', '2024-2025'),
(20, 10, 'Feeling Sick', 'I have stomach', '2025-01-07', '2025-01-07', 'approved', 'approved', 'approved', 'approved', '', '2025-01-07 05:10:42', '2024-2025'),
(22, 12, 'I want to Exaet from school ', 'This is to enable me attend a Tech conference in UK', '2025-01-07', '2025-01-14', 'approved', 'approved', 'approved', 'approved', '', '2025-01-07 05:35:35', '2024-2025'),
(23, 13, 'Travelling for Check up', 'I will be travelling to Uk for my medical check ups.', '2025-01-10', '2025-01-24', 'pending', 'permission', '', '', '', '2025-01-07 16:35:57', '2024-2025'),
(24, 10, 'Test', 'I seriously sick and i need medical attention', '2025-01-09', '2025-01-16', 'pending', '', '', '', '', '2025-01-08 19:33:41', '2024-2025'),
(25, 14, 'Exeating From Campus', 'Want to go see my parents', '2025-01-09', '2025-01-10', 'pending', '', '', '', '', '2025-01-08 22:10:46', '2024-2025'),
(26, 14, 'Exeating From Campus', 'Want to go see my parents', '2025-01-09', '2025-01-10', 'pending', '', '', '', '', '2025-01-08 22:11:55', '2024-2025'),
(27, 14, 'Exeating From Campus', 'Want to go see my parents', '2025-01-09', '2025-01-10', 'pending', '', '', '', '', '2025-01-09 18:43:01', '2024-2025'),
(28, 15, 'I will be leaving school', 'I will be going for a medical check up abroad', '2025-01-10', '2025-01-14', 'approved', 'approved', 'approved', 'approved', '', '2025-01-09 19:15:55', '2024-2025'),
(29, 16, 'This is testing', 'This is the student sending request to the hotel admin', '2025-01-09', '2025-01-09', 'pending', 'approved', 'permission', '', '', '2025-01-09 19:33:04', '2024-2025'),
(30, 17, 'Request for a short break', 'To attend my sis wedding', '2025-02-17', '2025-02-21', 'approved', 'approved', 'approved', 'approved', '', '2025-02-16 17:46:32', '2024-2025'),
(32, 18, 'Requesting for exeat', 'Will be attending a wedding', '2025-02-17', '2025-02-21', 'approved', 'approved', 'approved', 'approved', '', '2025-02-16 20:30:07', '2024-2025'),
(33, 19, 'Will be leaving for Hackathon ', 'I\'m among the set of students that will be going for the coding challenge tomorrow', '2025-02-18', '2025-02-19', 'approved', 'approved', 'approved', 'approved', 'overdue (43 days)', '2025-02-18 21:42:41', '2024-2025'),
(34, 19, 'Exeat Request', 'I will be attending my brother\'s ordination', '2025-02-20', '2025-02-22', 'pending', '', '', '', '', '2025-02-20 09:30:22', '2024-2025'),
(36, 12, 'Holiday', 'Holiday', '2025-03-30', '2025-04-03', 'approved', 'approved', 'approved', 'approved', '', '2025-03-30 20:18:41', '2024-2025'),
(37, 12, 'Visit to parent', 'Short Break', '2025-04-03', '2025-04-17', 'approved', 'approved', 'approved', 'approved', 'returned', '2025-04-03 07:40:06', '2024-2025');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nick_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `name`, `nick_name`, `class_id`) VALUES
(1, 'First semester', '', 13),
(2, 'Third semester', '', 13),
(3, 'Third semester', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `security_id` int(15) NOT NULL,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `phone` longtext NOT NULL,
  `designation` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`security_id`, `name`, `email`, `phone`, `designation`, `password`) VALUES
(2, 'Jeremiah Paul', 'ACA120', '07089544726', '', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'James Iddi', 'ACA1221', '07089544726', '', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Veritas University (Exeat System)'),
(2, 'system_title', 'Exeat System'),
(3, 'address', 'Abuja'),
(4, 'phone', '09066021052'),
(6, 'currency', 'Naira'),
(7, 'system_email', 'info@gmail.com'),
(11, 'language', 'english'),
(12, 'text_align', 'left-to-right'),
(16, 'skin_colour', 'blue'),
(21, 'session', '2024-2025'),
(22, 'footer', 'Developed by Justin 2025. All Right Reserved'),
(116, 'paypal_email', 'clone@paypalemail.com'),
(117, 'timezone', 'Africa/Lagos');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `hostel` int(11) NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `session` longtext NOT NULL,
  `parent_id` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `class_id`, `hostel`, `sex`, `phone`, `address`, `email`, `password`, `session`, `parent_id`) VALUES
(12, 'Ibrahim Adams', 32, 2, 'Male', '091293939399', 'Abuja', 'VET/101/20001', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-2025', 2),
(11, 'jerry Paul', 13, 2, 'Male', '07089544726', 'Abuja', 'VET/101/1999', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2023-2024', 2),
(10, 'Jeremiah Paul', 30, 3, 'Male', '07089544726', 'Gwarinpa', 'pauljeremiah25@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2023-2024', 3),
(13, 'Femi Emmanuel Kehinde', 33, 2, 'Male', '08101009014', 'Ochacho Estate2, lifecamp', 'VU/202/2025', '8cb2237d0679ca88db6464eac60da96345513964', '2024-2025', 4),
(14, 'Sharon Bassey', 34, 5, 'Female', '081010090172', 'Abuja', 'VU/CMP/2025', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-2025', 5),
(16, 'Gloria Michael Felix', 35, 6, 'Female', '08101009014', 'Abuja', 'Vug/sen/21/6311', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-2025', 6),
(17, 'John Paul', 35, 2, 'Male', '08101009014', 'Abuja', 'VET/202/2003', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-2025', 5),
(18, 'Justin Student', 35, 2, 'Male', '090242526262', 'Abuja', 'VET/202/300', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-2025', 7),
(19, 'Michael', 33, 2, 'Male', '08101009014', 'Abuja', 'VET/0010/2025', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-2025', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_message`
--
ALTER TABLE `general_message`
  ADD PRIMARY KEY (`general_message_id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`guardian_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `hostel_type`
--
ALTER TABLE `hostel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`security_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `dean`
--
ALTER TABLE `dean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_message`
--
ALTER TABLE `general_message`
  MODIFY `general_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `guardian_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hostel_type`
--
ALTER TABLE `hostel_type`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `security_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
