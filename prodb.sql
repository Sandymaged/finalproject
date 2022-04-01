-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 07:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `midname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `nameuser` varchar(100) NOT NULL,
  `location_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `nameuser`, `location_status`) VALUES
(168, 27.1858, 31.1823, 'salmasayed', 1),
(169, 27.187, 31.1806, 'salmasayed1', 1),
(170, 27.186, 31.1818, 'salmasayed2', 0),
(171, 27.1862, 31.1814, 'salma2', 1),
(172, 27.1861, 31.1813, 'salma3', 1),
(173, 27.1859, 31.1818, 'salma4', 1),
(174, 27.1874, 31.1802, 'salma5', 1),
(175, 27.1886, 31.1656, 'ahmedsameh12', 1),
(176, NULL, NULL, 'rana', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_07_14_050346_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `userr` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `place1` varchar(100) DEFAULT NULL,
  `dov1` date DEFAULT NULL,
  `tov1` time DEFAULT NULL,
  `place2` varchar(100) DEFAULT NULL,
  `dov2` date DEFAULT NULL,
  `tov2` time DEFAULT NULL,
  `place3` varchar(200) DEFAULT NULL,
  `dov3` date DEFAULT NULL,
  `tov3` time DEFAULT NULL,
  `place4` varchar(200) DEFAULT NULL,
  `dov4` date DEFAULT NULL,
  `tov4` time DEFAULT NULL,
  `place5` varchar(200) DEFAULT NULL,
  `dov5` date DEFAULT NULL,
  `tov5` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `userr`, `gender`, `place1`, `dov1`, `tov1`, `place2`, `dov2`, `tov2`, `place3`, `dov3`, `tov3`, `place4`, `dov4`, `tov4`, `place5`, `dov5`, `tov5`, `created_at`, `updated_at`) VALUES
(13, 'patiant1', 'on', 'كلية حاسبات ومعلومات مبني \r\n المعامل \r\n3ِب', '2021-07-11', '15:00:00', 'شركة الكهرباء الاربعين،الدور التالت', '2021-07-13', '09:00:00', 'مدرسة السلام شارع الجمهورية شئون العاملين', '2021-07-13', '17:28:00', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-14 08:28:36', '2021-07-14 08:28:36'),
(14, 'patiant2', 'on', 'كلية صيدله \r\nمبني الاداره', '2021-07-10', '15:23:00', 'مجمع المصالح الحكوميه الدور الرابع خلف السكه الحديد', '2021-07-13', '17:27:00', 'كنيسة  الملاك شارع النميس', '2021-07-13', '17:28:00', 'المديريه الماليه الدور الاول \r\nالوليديه', '2021-07-12', '07:00:00', NULL, NULL, NULL, '2021-07-14 08:30:04', '2021-07-14 08:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `ques1` varchar(4) NOT NULL,
  `ques2` varchar(4) NOT NULL,
  `ques3` varchar(4) NOT NULL,
  `ques4` varchar(4) NOT NULL,
  `ques5` varchar(4) NOT NULL,
  `ques6` varchar(4) NOT NULL,
  `ques7` varchar(4) NOT NULL,
  `ques8` varchar(4) NOT NULL,
  `ques9` varchar(4) NOT NULL,
  `ques10` varchar(4) NOT NULL,
  `ques11` varchar(4) NOT NULL,
  `ques12` varchar(4) NOT NULL,
  `ques13` varchar(4) NOT NULL,
  `ques14` varchar(4) NOT NULL,
  `ques15` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `ques1`, `ques2`, `ques3`, `ques4`, `ques5`, `ques6`, `ques7`, `ques8`, `ques9`, `ques10`, `ques11`, `ques12`, `ques13`, `ques14`, `ques15`, `created_at`, `updated_at`) VALUES
(52, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:41:20', '2021-04-05 11:41:20'),
(53, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:42:55', '2021-04-05 11:42:55'),
(54, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:43:24', '2021-04-05 11:43:24'),
(55, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:43:35', '2021-04-05 11:43:35'),
(56, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:43:43', '2021-04-05 11:43:43'),
(57, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:44:01', '2021-04-05 11:44:01'),
(58, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:44:16', '2021-04-05 11:44:16'),
(59, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:47:24', '2021-04-05 11:47:24'),
(60, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 11:48:09', '2021-04-05 11:48:09'),
(61, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:15:56', '2021-04-05 12:15:56'),
(62, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:16:26', '2021-04-05 12:16:26'),
(63, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:25:26', '2021-04-05 12:25:26'),
(64, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:26:22', '2021-04-05 12:26:22'),
(65, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:27:04', '2021-04-05 12:27:04'),
(66, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:27:24', '2021-04-05 12:27:24'),
(67, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:27:39', '2021-04-05 12:27:39'),
(68, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:29:06', '2021-04-05 12:29:06'),
(69, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:31:20', '2021-04-05 12:31:20'),
(70, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:31:44', '2021-04-05 12:31:44'),
(71, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:32:00', '2021-04-05 12:32:00'),
(72, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:32:23', '2021-04-05 12:32:23'),
(73, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:41:43', '2021-04-05 12:41:43'),
(74, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:43:41', '2021-04-05 12:43:41'),
(75, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:43:52', '2021-04-05 12:43:52'),
(76, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:51:39', '2021-04-05 12:51:39'),
(77, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:52:02', '2021-04-05 12:52:02'),
(78, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:52:15', '2021-04-05 12:52:15'),
(79, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:52:31', '2021-04-05 12:52:31'),
(80, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:52:44', '2021-04-05 12:52:44'),
(81, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:53:33', '2021-04-05 12:53:33'),
(82, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:53:56', '2021-04-05 12:53:56'),
(83, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:54:45', '2021-04-05 12:54:45'),
(84, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:55:49', '2021-04-05 12:55:49'),
(85, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:57:29', '2021-04-05 12:57:29'),
(86, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:57:56', '2021-04-05 12:57:56'),
(87, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:58:20', '2021-04-05 12:58:20'),
(88, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:58:55', '2021-04-05 12:58:55'),
(89, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:59:09', '2021-04-05 12:59:09'),
(90, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:59:19', '2021-04-05 12:59:19'),
(91, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:59:31', '2021-04-05 12:59:31'),
(92, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 12:59:49', '2021-04-05 12:59:49'),
(93, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:00:57', '2021-04-05 13:00:57'),
(94, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:02:53', '2021-04-05 13:02:53'),
(95, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:03:23', '2021-04-05 13:03:23'),
(96, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:03:41', '2021-04-05 13:03:41'),
(97, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:05:08', '2021-04-05 13:05:08'),
(98, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:05:24', '2021-04-05 13:05:24'),
(99, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:05:50', '2021-04-05 13:05:50'),
(100, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:08:08', '2021-04-05 13:08:08'),
(101, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:09:18', '2021-04-05 13:09:18'),
(102, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:11:14', '2021-04-05 13:11:14'),
(103, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:11:54', '2021-04-05 13:11:54'),
(104, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:26:43', '2021-04-05 13:26:43'),
(105, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:27:00', '2021-04-05 13:27:00'),
(106, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:28:10', '2021-04-05 13:28:10'),
(107, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:29:32', '2021-04-05 13:29:32'),
(108, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:29:59', '2021-04-05 13:29:59'),
(109, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:30:17', '2021-04-05 13:30:17'),
(110, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:30:34', '2021-04-05 13:30:34'),
(111, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:31:16', '2021-04-05 13:31:16'),
(112, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:31:44', '2021-04-05 13:31:44'),
(113, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:32:04', '2021-04-05 13:32:04'),
(114, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:32:32', '2021-04-05 13:32:32'),
(115, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:33:19', '2021-04-05 13:33:19'),
(116, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:41:43', '2021-04-05 13:41:43'),
(117, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:41:53', '2021-04-05 13:41:53'),
(118, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:41:56', '2021-04-05 13:41:56'),
(119, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:42:08', '2021-04-05 13:42:08'),
(120, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:43:29', '2021-04-05 13:43:29'),
(121, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:43:42', '2021-04-05 13:43:42'),
(122, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:44:20', '2021-04-05 13:44:20'),
(123, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:45:08', '2021-04-05 13:45:08'),
(124, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:45:12', '2021-04-05 13:45:12'),
(125, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:45:21', '2021-04-05 13:45:21'),
(126, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:46:31', '2021-04-05 13:46:31'),
(127, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', '2021-04-05 13:46:49', '2021-04-05 13:46:49'),
(128, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', '2021-04-05 13:48:36', '2021-04-05 13:48:36'),
(129, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', '2021-04-05 13:48:57', '2021-04-05 13:48:57'),
(130, 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', '2021-04-05 13:59:53', '2021-04-05 13:59:53'),
(131, 'no', 'no', 'no', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'yes', '2021-04-05 14:07:46', '2021-04-05 14:07:46'),
(132, 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2021-04-05 16:09:02', '2021-04-05 16:09:02'),
(133, 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'yes', '2021-04-05 16:36:54', '2021-04-05 16:36:54'),
(134, 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '2021-05-26 00:24:37', '2021-05-26 00:24:37'),
(135, 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', '2021-05-26 02:38:20', '2021-05-26 02:38:20'),
(136, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:07:36', '2021-07-11 10:07:36'),
(137, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:08:45', '2021-07-11 10:08:45'),
(138, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:14:00', '2021-07-11 10:14:00'),
(139, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:14:32', '2021-07-11 10:14:32'),
(140, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:14:50', '2021-07-11 10:14:50'),
(141, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:15:04', '2021-07-11 10:15:04'),
(142, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:15:17', '2021-07-11 10:15:17'),
(143, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:15:30', '2021-07-11 10:15:30'),
(144, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:17:00', '2021-07-11 10:17:00'),
(145, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:17:55', '2021-07-11 10:17:55'),
(146, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:18:06', '2021-07-11 10:18:06'),
(147, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:20:43', '2021-07-11 10:20:43'),
(148, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:21:06', '2021-07-11 10:21:06'),
(149, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:21:51', '2021-07-11 10:21:51'),
(150, 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-11 10:22:37', '2021-07-11 10:22:37'),
(151, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2021-07-12 03:12:05', '2021-07-12 03:12:05'),
(152, 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', '2021-07-12 20:19:03', '2021-07-12 20:19:03'),
(153, 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '2021-07-12 20:20:49', '2021-07-12 20:20:49'),
(154, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2021-07-13 11:29:41', '2021-07-13 11:29:41'),
(155, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '2021-07-14 07:51:31', '2021-07-14 07:51:31'),
(156, 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', '2021-07-14 09:10:37', '2021-07-14 09:10:37'),
(157, 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', '2021-07-14 15:25:00', '2021-07-14 15:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `id` int(11) NOT NULL,
  `tent` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `credit` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `numrandom` int(11) NOT NULL,
  `result` varchar(100) NOT NULL,
  `nameuser` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id`, `tent`, `phone`, `credit`, `date`, `time`, `numrandom`, `result`, `nameuser`, `gender`, `created_at`, `updated_at`) VALUES
(105, 'tent1', '01148752494', '1234567891123456', '2021-07-15', '15:08:00', 194902828, 'positive', 'salmasayed', 'female', '2021-07-14 08:09:15', '2021-07-14 08:19:06'),
(106, 'tent1', '01148752494', '1234567891123456', '2021-07-15', '15:08:00', 949554578, 'positive', 'salmasayed1', 'female', '2021-07-14 08:12:39', '2021-07-14 08:19:16'),
(107, 'tent1', '01148752494', '1234567891123456', '2021-07-15', '15:08:00', 527121266, 'negative', 'salmasayed2', 'female', '2021-07-14 08:13:33', '2021-07-14 09:06:24'),
(108, 'tent1', '01148752494', '1234567891123456', '2021-07-15', '15:08:00', 517813299, 'positive', 'salma2', 'female', '2021-07-14 08:15:17', '2021-07-14 08:21:21'),
(109, 'tent1', '01148752494', '1234567891123456', '2021-07-15', '15:08:00', 964434718, 'positive', 'salma3', 'female', '2021-07-14 08:15:50', '2021-07-14 08:21:30'),
(110, 'tent1', '01148752494', '1234567891123456', '2021-07-15', '15:08:00', 804111099, 'positive', 'salma4', 'female', '2021-07-14 08:16:13', '2021-07-14 08:21:39'),
(111, 'tent1', '01148752494', '1234567891123456', '2021-07-15', '15:08:00', 430000102, 'positive', 'salma5', 'female', '2021-07-14 08:16:40', '2021-07-14 08:21:48');

--
-- Triggers `reserves`
--
DELIMITER $$
CREATE TRIGGER `after_delete_user4` AFTER DELETE ON `reserves` FOR EACH ROW BEGIN
DELETE FROM locations WHERE locations.nameuser=OLD.nameuser; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_user4` AFTER INSERT ON `reserves` FOR EACH ROW INSERT INTO locations VALUES(null,null,null,NEW.nameuser,0)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_ubdate_user4` AFTER UPDATE ON `reserves` FOR EACH ROW BEGIN 
IF(OLD.result <> NEW.result AND NEW.result="positive") THEN UPDATE locations SET locations.location_status=1 WHERE NEW.nameuser=locations.nameuser ; 
ELSEIF(OLD.result <> NEW.result) THEN UPDATE locations SET locations.location_status=0 WHERE NEW.nameuser=locations.nameuser ; 
END IF ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reserves2`
--

CREATE TABLE `reserves2` (
  `id` int(11) NOT NULL,
  `tent` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `credit` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `numrandom` int(11) NOT NULL,
  `result` varchar(100) NOT NULL,
  `nameuser` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserves2`
--

INSERT INTO `reserves2` (`id`, `tent`, `phone`, `credit`, `date`, `time`, `numrandom`, `result`, `nameuser`, `gender`, `created_at`, `updated_at`) VALUES
(54, 'tent2', '01028323278', '1234567891123456', '2021-07-15', '15:12:00', 893417800, 'positive', 'ahmedsameh12', 'male', '2021-07-14 09:13:10', '2021-07-14 09:18:30');

--
-- Triggers `reserves2`
--
DELIMITER $$
CREATE TRIGGER `after_delete_user3` AFTER DELETE ON `reserves2` FOR EACH ROW BEGIN
DELETE FROM locations WHERE locations.nameuser=OLD.nameuser; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_user3` AFTER INSERT ON `reserves2` FOR EACH ROW INSERT INTO locations VALUES(null,null,null,NEW.nameuser,0)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_ubdate_user3` AFTER UPDATE ON `reserves2` FOR EACH ROW BEGIN 
IF(OLD.result <> NEW.result AND NEW.result="positive") THEN UPDATE locations SET locations.location_status=1 WHERE NEW.nameuser=locations.nameuser ; 
ELSEIF(OLD.result <> NEW.result) THEN UPDATE locations SET locations.location_status=0 WHERE NEW.nameuser=locations.nameuser ; 
END IF ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reserves3`
--

CREATE TABLE `reserves3` (
  `id` int(11) NOT NULL,
  `tent` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `credit` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `numrandom` int(11) NOT NULL,
  `result` varchar(100) NOT NULL,
  `nameuser` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserves3`
--

INSERT INTO `reserves3` (`id`, `tent`, `phone`, `credit`, `date`, `time`, `numrandom`, `result`, `nameuser`, `gender`, `created_at`, `updated_at`) VALUES
(8, 'tent3', '01148752491', '1234567891123456', '2021-07-15', '22:27:00', 829401520, '.', 'rana', 'male', '2021-07-14 15:27:48', '2021-07-14 15:27:48');

--
-- Triggers `reserves3`
--
DELIMITER $$
CREATE TRIGGER `after_delete_user2` AFTER DELETE ON `reserves3` FOR EACH ROW BEGIN
DELETE FROM locations WHERE locations.nameuser=OLD.nameuser; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_user2` AFTER INSERT ON `reserves3` FOR EACH ROW BEGIN
INSERT INTO locations VALUES(null,null,null,NEW.nameuser,0);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_ubdate_user2` AFTER UPDATE ON `reserves3` FOR EACH ROW BEGIN 
IF(OLD.result <> NEW.result AND NEW.result="positive") THEN UPDATE locations SET locations.location_status=1 WHERE NEW.nameuser=locations.nameuser ; 
ELSEIF(OLD.result <> NEW.result) THEN UPDATE locations SET locations.location_status=0 WHERE NEW.nameuser=locations.nameuser ; 
END IF ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reserves4`
--

CREATE TABLE `reserves4` (
  `id` int(11) NOT NULL,
  `tent` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `credit` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `numrandom` int(11) NOT NULL,
  `result` varchar(100) NOT NULL,
  `nameuser` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `reserves4`
--
DELIMITER $$
CREATE TRIGGER `after_delete_user` AFTER DELETE ON `reserves4` FOR EACH ROW BEGIN
DELETE FROM locations WHERE locations.nameuser=OLD.nameuser; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_user` AFTER INSERT ON `reserves4` FOR EACH ROW BEGIN
INSERT INTO locations VALUES(null,null,null,NEW.nameuser,0);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_ubdate_user` AFTER UPDATE ON `reserves4` FOR EACH ROW BEGIN 
IF(OLD.result <> NEW.result AND NEW.result="positive") THEN UPDATE locations SET locations.location_status=1 WHERE NEW.nameuser=locations.nameuser ; 
ELSEIF(OLD.result <> NEW.result) THEN UPDATE locations SET locations.location_status=0 WHERE NEW.nameuser=locations.nameuser ; 
END IF ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Admin`) VALUES
(5, 'salma', 'salma_sayed@gmail.com', 1148752478, NULL, '$2y$10$rOLtcbZ5cMUYia7aSeAWNuNS4Kx.a6qlxjHtejtjESnyvoHriI2Ry', NULL, '2021-07-14 08:08:11', '2021-07-14 08:08:11', 0),
(6, 'ahmed', 'ahmed@gmail', 1124587531, NULL, '$2y$10$piXjIHvTyCBWu1vbW8WtN.P139eqBL8m/KWknkCSOuKoDTnwhc2wm', NULL, '2021-07-14 09:11:48', '2021-07-14 09:11:48', 0),
(7, 'ahmed', 'ahmedsameh2226@gmail.com', 1148752491, NULL, '$2y$10$5lMNmRPmvzTRG5i1xsPkUOF0V1SnsXSOVw6nqDo4mOut6x9aQyO76', NULL, '2021-07-14 15:09:46', '2021-07-14 15:09:46', 1),
(8, 'rana', 'rana@gmail', 1148752491, NULL, '$2y$10$LuaVvSSma3/nnUTVPg77WunwI.FFr.eL8wI/u33nSDp4AqIh6IOre', NULL, '2021-07-14 15:26:05', '2021-07-14 15:26:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameuser` (`nameuser`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserves2`
--
ALTER TABLE `reserves2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserves3`
--
ALTER TABLE `reserves3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameuser` (`nameuser`);

--
-- Indexes for table `reserves4`
--
ALTER TABLE `reserves4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nameuser` (`nameuser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `reserves2`
--
ALTER TABLE `reserves2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `reserves3`
--
ALTER TABLE `reserves3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reserves4`
--
ALTER TABLE `reserves4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
