-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 04:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_visitors`
--

CREATE TABLE `all_visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_visitors`
--

INSERT INTO `all_visitors` (`id`, `visitor_ip`, `status`, `date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '::1', 1, '2022-06-02 10:58:44', NULL, '2022-06-02 04:58:44', '2022-06-02 04:58:44'),
(2, '::1', 1, '2022-06-02 12:03:30', NULL, '2022-06-02 06:03:30', '2022-06-02 06:03:30'),
(3, '::1', 1, '2022-06-02 12:03:39', NULL, '2022-06-02 06:03:39', '2022-06-02 06:03:39'),
(4, '::1', 1, '2022-06-02 12:47:36', NULL, '2022-06-02 06:47:36', '2022-06-02 06:47:36'),
(5, '::1', 1, '2022-06-02 12:59:36', NULL, '2022-06-02 06:59:36', '2022-06-02 06:59:36'),
(6, '::1', 1, '2022-06-02 15:28:58', NULL, '2022-06-02 09:28:58', '2022-06-02 09:28:58'),
(7, '::1', 1, '2022-06-02 15:30:58', NULL, '2022-06-02 09:30:58', '2022-06-02 09:30:58'),
(8, '::1', 1, '2022-06-02 15:31:00', NULL, '2022-06-02 09:31:00', '2022-06-02 09:31:00'),
(9, '::1', 1, '2022-06-02 15:32:39', NULL, '2022-06-02 09:32:39', '2022-06-02 09:32:39'),
(10, '::1', 1, '2022-06-02 15:32:42', NULL, '2022-06-02 09:32:42', '2022-06-02 09:32:42'),
(11, '::1', 1, '2022-06-02 15:37:03', NULL, '2022-06-02 09:37:03', '2022-06-02 09:37:03'),
(12, '::1', 1, '2022-06-02 15:37:13', NULL, '2022-06-02 09:37:13', '2022-06-02 09:37:13'),
(13, '::1', 1, '2022-06-02 15:38:14', NULL, '2022-06-02 09:38:14', '2022-06-02 09:38:14'),
(14, '::1', 1, '2022-06-02 15:38:16', NULL, '2022-06-02 09:38:16', '2022-06-02 09:38:16'),
(15, '::1', 1, '2022-06-02 15:38:41', NULL, '2022-06-02 09:38:41', '2022-06-02 09:38:41'),
(16, '::1', 1, '2022-06-02 15:38:43', NULL, '2022-06-02 09:38:43', '2022-06-02 09:38:43'),
(17, '::1', 1, '2022-06-02 15:47:30', NULL, '2022-06-02 09:47:30', '2022-06-02 09:47:30'),
(18, '::1', 1, '2022-06-02 15:48:25', NULL, '2022-06-02 09:48:25', '2022-06-02 09:48:25'),
(19, '::1', 1, '2022-06-02 15:52:28', NULL, '2022-06-02 09:52:28', '2022-06-02 09:52:28'),
(20, '::1', 1, '2022-06-02 16:00:06', NULL, '2022-06-02 10:00:06', '2022-06-02 10:00:06'),
(21, '::1', 1, '2022-06-02 16:02:07', NULL, '2022-06-02 10:02:07', '2022-06-02 10:02:07'),
(22, '::1', 1, '2022-06-02 16:16:18', NULL, '2022-06-02 10:16:18', '2022-06-02 10:16:18'),
(23, '::1', 1, '2022-06-02 16:23:43', NULL, '2022-06-02 10:23:43', '2022-06-02 10:23:43'),
(24, '::1', 1, '2022-06-02 19:33:24', NULL, '2022-06-02 13:33:24', '2022-06-02 13:33:24'),
(25, '::1', 1, '2022-06-02 19:35:09', NULL, '2022-06-02 13:35:09', '2022-06-02 13:35:09'),
(26, '::1', 1, '2022-06-02 20:29:06', NULL, '2022-06-02 14:29:06', '2022-06-02 14:29:06'),
(27, '::1', 1, '2022-06-02 20:34:25', NULL, '2022-06-02 14:34:25', '2022-06-02 14:34:25'),
(28, '::1', 1, '2022-06-02 20:46:18', NULL, '2022-06-02 14:46:19', '2022-06-02 14:46:19'),
(29, '::1', 1, '2022-06-02 20:47:25', NULL, '2022-06-02 14:47:25', '2022-06-02 14:47:25'),
(30, '::1', 1, '2022-06-02 20:57:19', NULL, '2022-06-02 14:57:19', '2022-06-02 14:57:19'),
(31, '::1', 1, '2022-06-04 11:04:38', NULL, '2022-06-04 05:04:38', '2022-06-04 05:04:38'),
(32, '::1', 1, '2022-06-04 11:09:20', NULL, '2022-06-04 05:09:20', '2022-06-04 05:09:20'),
(33, '::1', 1, '2022-06-04 11:09:35', NULL, '2022-06-04 05:09:35', '2022-06-04 05:09:35'),
(34, '127.0.0.0', 1, '2022-06-04 11:09:48', NULL, '2022-06-04 05:09:48', '2022-06-04 05:09:48'),
(35, '127.0.0.0', 1, '2022-06-04 11:11:14', NULL, '2022-06-04 05:11:14', '2022-06-04 05:11:14'),
(36, '127.0.0.0', 1, '2022-06-04 11:11:26', NULL, '2022-06-04 05:11:26', '2022-06-04 05:11:26'),
(37, '127.0.0.0', 1, '2022-06-04 11:12:20', NULL, '2022-06-04 05:12:20', '2022-06-04 05:12:20'),
(38, '127.0.0.0', 1, '2022-06-04 11:12:32', NULL, '2022-06-04 05:12:32', '2022-06-04 05:12:32'),
(39, '::1', 1, '2022-06-04 11:13:09', NULL, '2022-06-04 05:13:09', '2022-06-04 05:13:09'),
(40, '127.0.0.0', 1, '2022-06-04 11:13:20', NULL, '2022-06-04 05:13:20', '2022-06-04 05:13:20'),
(41, '127.0.0.0', 1, '2022-06-04 11:13:44', NULL, '2022-06-04 05:13:44', '2022-06-04 05:13:44'),
(42, '127.0.0.0', 1, '2022-06-04 11:13:46', NULL, '2022-06-04 05:13:46', '2022-06-04 05:13:46'),
(43, '127.0.0.0', 1, '2022-06-04 11:16:21', NULL, '2022-06-04 05:16:21', '2022-06-04 05:16:21'),
(44, '127.0.0.0', 1, '2022-06-04 11:16:39', NULL, '2022-06-04 05:16:39', '2022-06-04 05:16:39'),
(45, '127.0.0.0', 1, '2022-06-04 11:19:09', NULL, '2022-06-04 05:19:09', '2022-06-04 05:19:09'),
(46, '127.0.0.0', 1, '2022-06-04 11:21:02', NULL, '2022-06-04 05:21:02', '2022-06-04 05:21:02'),
(47, '127.0.0.0', 1, '2022-06-04 11:21:07', NULL, '2022-06-04 05:21:07', '2022-06-04 05:21:07'),
(48, '127.0.0.0', 1, '2022-06-04 11:21:09', NULL, '2022-06-04 05:21:09', '2022-06-04 05:21:09'),
(49, '127.0.0.0', 1, '2022-06-04 11:21:26', NULL, '2022-06-04 05:21:26', '2022-06-04 05:21:26'),
(50, '127.0.0.0', 1, '2022-06-04 11:22:53', NULL, '2022-06-04 05:22:53', '2022-06-04 05:22:53'),
(51, '127.0.0.0', 1, '2022-06-04 11:24:19', NULL, '2022-06-04 05:24:19', '2022-06-04 05:24:19'),
(52, '127.0.0.0', 1, '2022-06-04 11:24:26', NULL, '2022-06-04 05:24:26', '2022-06-04 05:24:26'),
(53, '127.0.0.0', 1, '2022-06-04 11:25:20', NULL, '2022-06-04 05:25:20', '2022-06-04 05:25:20'),
(54, '127.0.0.0', 1, '2022-06-04 11:26:12', NULL, '2022-06-04 05:26:12', '2022-06-04 05:26:12'),
(55, '127.0.0.0', 1, '2022-06-04 11:26:34', NULL, '2022-06-04 05:26:34', '2022-06-04 05:26:34'),
(56, '127.0.0.0', 1, '2022-06-04 11:27:25', NULL, '2022-06-04 05:27:25', '2022-06-04 05:27:25'),
(57, '::1', 1, '2022-06-04 11:28:00', NULL, '2022-06-04 05:28:00', '2022-06-04 05:28:00'),
(58, '127.0.0.0', 1, '2022-06-04 11:28:04', NULL, '2022-06-04 05:28:04', '2022-06-04 05:28:04'),
(59, '127.0.0.0', 1, '2022-06-04 11:30:51', NULL, '2022-06-04 05:30:51', '2022-06-04 05:30:51'),
(60, '127.0.0.0', 1, '2022-06-04 11:31:41', NULL, '2022-06-04 05:31:41', '2022-06-04 05:31:41'),
(61, '127.0.0.0', 1, '2022-06-04 11:31:55', NULL, '2022-06-04 05:31:55', '2022-06-04 05:31:55'),
(62, '127.0.0.0', 1, '2022-06-04 11:33:41', NULL, '2022-06-04 05:33:41', '2022-06-04 05:33:41'),
(63, '127.0.0.0', 1, '2022-06-04 11:34:14', NULL, '2022-06-04 05:34:14', '2022-06-04 05:34:14'),
(64, '127.0.0.0', 1, '2022-06-04 11:42:24', NULL, '2022-06-04 05:42:24', '2022-06-04 05:42:24'),
(65, '::1', 1, '2022-06-04 11:45:14', NULL, '2022-06-04 05:45:14', '2022-06-04 05:45:14'),
(66, '::1', 1, '2022-06-04 11:50:17', NULL, '2022-06-04 05:50:17', '2022-06-04 05:50:17'),
(67, '::1', 1, '2022-06-04 12:00:01', NULL, '2022-06-04 06:00:01', '2022-06-04 06:00:01'),
(68, '::1', 1, '2022-06-04 12:00:46', NULL, '2022-06-04 06:00:47', '2022-06-04 06:00:47'),
(69, '::1', 1, '2022-06-04 12:02:31', NULL, '2022-06-04 06:02:31', '2022-06-04 06:02:31'),
(70, '::1', 1, '2022-06-04 12:03:19', NULL, '2022-06-04 06:03:19', '2022-06-04 06:03:19'),
(71, '::1', 1, '2022-06-04 12:03:47', NULL, '2022-06-04 06:03:47', '2022-06-04 06:03:47'),
(72, '::1', 1, '2022-06-04 12:04:49', NULL, '2022-06-04 06:04:49', '2022-06-04 06:04:49'),
(73, '::1', 1, '2022-06-04 12:05:15', NULL, '2022-06-04 06:05:15', '2022-06-04 06:05:15'),
(74, '::1', 1, '2022-06-04 12:05:42', NULL, '2022-06-04 06:05:42', '2022-06-04 06:05:42'),
(75, '::1', 1, '2022-06-04 12:05:55', NULL, '2022-06-04 06:05:55', '2022-06-04 06:05:55'),
(76, '::1', 1, '2022-06-04 12:18:10', NULL, '2022-06-04 06:18:10', '2022-06-04 06:18:10'),
(77, '::1', 1, '2022-06-04 12:19:36', NULL, '2022-06-04 06:19:36', '2022-06-04 06:19:36'),
(78, '::1', 1, '2022-06-04 12:20:43', NULL, '2022-06-04 06:20:43', '2022-06-04 06:20:43'),
(79, '::1', 1, '2022-06-04 12:21:15', NULL, '2022-06-04 06:21:15', '2022-06-04 06:21:15'),
(80, '::1', 1, '2022-06-04 12:21:59', NULL, '2022-06-04 06:21:59', '2022-06-04 06:21:59'),
(81, '::1', 1, '2022-06-04 12:22:18', NULL, '2022-06-04 06:22:18', '2022-06-04 06:22:18'),
(82, '::1', 1, '2022-06-04 12:24:58', NULL, '2022-06-04 06:24:58', '2022-06-04 06:24:58'),
(83, '::1', 1, '2022-06-04 12:26:53', NULL, '2022-06-04 06:26:53', '2022-06-04 06:26:53'),
(84, '::1', 1, '2022-06-04 12:27:12', NULL, '2022-06-04 06:27:12', '2022-06-04 06:27:12'),
(85, '::1', 1, '2022-06-04 12:27:35', NULL, '2022-06-04 06:27:35', '2022-06-04 06:27:35'),
(86, '::1', 1, '2022-06-04 12:30:46', NULL, '2022-06-04 06:30:46', '2022-06-04 06:30:46'),
(87, '::1', 1, '2022-06-04 12:31:37', NULL, '2022-06-04 06:31:37', '2022-06-04 06:31:37'),
(88, '::1', 1, '2022-06-04 12:33:16', NULL, '2022-06-04 06:33:16', '2022-06-04 06:33:16'),
(89, '::1', 1, '2022-06-04 12:34:30', NULL, '2022-06-04 06:34:30', '2022-06-04 06:34:30'),
(90, '::1', 1, '2022-06-04 12:34:53', NULL, '2022-06-04 06:34:53', '2022-06-04 06:34:53'),
(91, '::1', 1, '2022-06-04 12:39:07', NULL, '2022-06-04 06:39:07', '2022-06-04 06:39:07'),
(92, '::1', 1, '2022-06-04 12:44:28', NULL, '2022-06-04 06:44:28', '2022-06-04 06:44:28'),
(93, '::1', 1, '2022-06-04 12:45:50', NULL, '2022-06-04 06:45:50', '2022-06-04 06:45:50'),
(94, '::1', 1, '2022-06-04 12:47:37', NULL, '2022-06-04 06:47:37', '2022-06-04 06:47:37'),
(95, '::1', 1, '2022-06-04 12:56:21', NULL, '2022-06-04 06:56:21', '2022-06-04 06:56:21'),
(96, '::1', 1, '2022-06-04 12:57:23', NULL, '2022-06-04 06:57:23', '2022-06-04 06:57:23'),
(97, '::1', 1, '2022-06-04 13:05:32', NULL, '2022-06-04 07:05:32', '2022-06-04 07:05:32'),
(98, '::1', 1, '2022-06-04 13:06:18', NULL, '2022-06-04 07:06:18', '2022-06-04 07:06:18'),
(99, '::1', 1, '2022-06-04 13:07:35', NULL, '2022-06-04 07:07:35', '2022-06-04 07:07:35'),
(100, '::1', 1, '2022-06-04 13:07:36', NULL, '2022-06-04 07:07:36', '2022-06-04 07:07:36'),
(101, '::1', 1, '2022-06-04 13:09:15', NULL, '2022-06-04 07:09:15', '2022-06-04 07:09:15'),
(102, '::1', 1, '2022-06-04 13:09:16', NULL, '2022-06-04 07:09:16', '2022-06-04 07:09:16'),
(103, '::1', 1, '2022-06-04 13:11:25', NULL, '2022-06-04 07:11:25', '2022-06-04 07:11:25'),
(104, '::1', 1, '2022-06-04 13:13:31', NULL, '2022-06-04 07:13:31', '2022-06-04 07:13:31'),
(105, '::1', 1, '2022-06-04 13:13:32', NULL, '2022-06-04 07:13:32', '2022-06-04 07:13:32'),
(106, '::1', 1, '2022-06-04 14:37:15', NULL, '2022-06-04 08:37:15', '2022-06-04 08:37:15'),
(107, '::1', 1, '2022-06-04 14:40:21', NULL, '2022-06-04 08:40:21', '2022-06-04 08:40:21'),
(108, '::1', 1, '2022-06-04 14:40:57', NULL, '2022-06-04 08:40:57', '2022-06-04 08:40:57'),
(109, '::1', 1, '2022-06-04 14:42:11', NULL, '2022-06-04 08:42:11', '2022-06-04 08:42:11'),
(110, '::1', 1, '2022-06-04 14:42:13', NULL, '2022-06-04 08:42:13', '2022-06-04 08:42:13'),
(111, '::1', 1, '2022-06-04 14:42:41', NULL, '2022-06-04 08:42:41', '2022-06-04 08:42:41'),
(112, '::1', 1, '2022-06-04 14:43:29', NULL, '2022-06-04 08:43:29', '2022-06-04 08:43:29'),
(113, '::1', 1, '2022-06-04 14:45:02', NULL, '2022-06-04 08:45:02', '2022-06-04 08:45:02'),
(114, '::1', 1, '2022-06-04 14:45:04', NULL, '2022-06-04 08:45:04', '2022-06-04 08:45:04'),
(115, '::1', 1, '2022-06-04 14:47:05', NULL, '2022-06-04 08:47:05', '2022-06-04 08:47:05'),
(116, '::1', 1, '2022-06-04 14:47:07', NULL, '2022-06-04 08:47:07', '2022-06-04 08:47:07'),
(117, '::1', 1, '2022-06-04 14:47:30', NULL, '2022-06-04 08:47:30', '2022-06-04 08:47:30'),
(118, '::1', 1, '2022-06-04 14:49:29', NULL, '2022-06-04 08:49:29', '2022-06-04 08:49:29'),
(119, '::1', 1, '2022-06-04 14:50:29', NULL, '2022-06-04 08:50:29', '2022-06-04 08:50:29'),
(120, '::1', 1, '2022-06-04 14:50:45', NULL, '2022-06-04 08:50:45', '2022-06-04 08:50:45'),
(121, '::1', 1, '2022-06-04 14:52:02', NULL, '2022-06-04 08:52:02', '2022-06-04 08:52:02'),
(122, '::1', 1, '2022-06-04 14:53:21', NULL, '2022-06-04 08:53:21', '2022-06-04 08:53:21'),
(123, '::1', 1, '2022-06-04 14:53:45', NULL, '2022-06-04 08:53:45', '2022-06-04 08:53:45'),
(124, '::1', 1, '2022-06-04 14:54:05', NULL, '2022-06-04 08:54:05', '2022-06-04 08:54:05'),
(125, '::1', 1, '2022-06-04 14:54:09', NULL, '2022-06-04 08:54:10', '2022-06-04 08:54:10'),
(126, '::1', 1, '2022-06-04 14:54:36', NULL, '2022-06-04 08:54:36', '2022-06-04 08:54:36'),
(127, '::1', 1, '2022-06-04 14:55:06', NULL, '2022-06-04 08:55:06', '2022-06-04 08:55:06'),
(128, '::1', 1, '2022-06-04 14:55:59', NULL, '2022-06-04 08:55:59', '2022-06-04 08:55:59'),
(129, '::1', 1, '2022-06-04 14:57:06', NULL, '2022-06-04 08:57:07', '2022-06-04 08:57:07'),
(130, '::1', 1, '2022-06-04 14:58:05', NULL, '2022-06-04 08:58:05', '2022-06-04 08:58:05'),
(131, '::1', 1, '2022-06-04 14:58:23', NULL, '2022-06-04 08:58:23', '2022-06-04 08:58:23'),
(132, '::1', 1, '2022-06-04 14:59:21', NULL, '2022-06-04 08:59:21', '2022-06-04 08:59:21'),
(133, '::1', 1, '2022-06-04 14:59:57', NULL, '2022-06-04 08:59:57', '2022-06-04 08:59:57'),
(134, '::1', 1, '2022-06-04 15:02:13', NULL, '2022-06-04 09:02:13', '2022-06-04 09:02:13'),
(135, '::1', 1, '2022-06-04 15:02:58', NULL, '2022-06-04 09:02:58', '2022-06-04 09:02:58'),
(136, '::1', 1, '2022-06-04 15:03:12', NULL, '2022-06-04 09:03:12', '2022-06-04 09:03:12'),
(137, '::1', 1, '2022-06-04 15:14:08', NULL, '2022-06-04 09:14:08', '2022-06-04 09:14:08'),
(138, '127.0.0.0', 1, '2022-06-04 15:14:17', NULL, '2022-06-04 09:14:17', '2022-06-04 09:14:17'),
(139, '127.0.0.0', 1, '2022-06-04 15:17:26', NULL, '2022-06-04 09:17:26', '2022-06-04 09:17:26'),
(140, '127.0.0.0', 1, '2022-06-04 15:17:42', NULL, '2022-06-04 09:17:42', '2022-06-04 09:17:42'),
(141, '::1', 1, '2022-06-04 15:23:05', NULL, '2022-06-04 09:23:05', '2022-06-04 09:23:05'),
(142, '::1', 1, '2022-06-04 15:23:08', NULL, '2022-06-04 09:23:08', '2022-06-04 09:23:08'),
(143, '::1', 1, '2022-06-04 15:23:51', NULL, '2022-06-04 09:23:51', '2022-06-04 09:23:51'),
(144, '::1', 1, '2022-06-04 15:23:52', NULL, '2022-06-04 09:23:52', '2022-06-04 09:23:52'),
(145, '127.0.0.0', 1, '2022-06-04 15:24:04', NULL, '2022-06-04 09:24:04', '2022-06-04 09:24:04'),
(146, '::1', 1, '2022-06-04 15:26:41', NULL, '2022-06-04 09:26:41', '2022-06-04 09:26:41'),
(147, '::1', 1, '2022-06-04 15:26:54', NULL, '2022-06-04 09:26:54', '2022-06-04 09:26:54'),
(148, '::1', 1, '2022-06-04 15:28:15', NULL, '2022-06-04 09:28:15', '2022-06-04 09:28:15'),
(149, '::1', 1, '2022-06-04 15:28:54', NULL, '2022-06-04 09:28:54', '2022-06-04 09:28:54'),
(150, '::1', 1, '2022-06-04 15:29:51', NULL, '2022-06-04 09:29:51', '2022-06-04 09:29:51'),
(151, '::1', 1, '2022-06-04 15:29:52', NULL, '2022-06-04 09:29:52', '2022-06-04 09:29:52'),
(152, '::1', 1, '2022-06-04 15:50:38', NULL, '2022-06-04 09:50:38', '2022-06-04 09:50:38'),
(153, '::1', 1, '2022-06-04 15:52:19', NULL, '2022-06-04 09:52:19', '2022-06-04 09:52:19'),
(154, '::1', 1, '2022-06-04 16:11:59', NULL, '2022-06-04 10:11:59', '2022-06-04 10:11:59'),
(155, '::1', 1, '2022-06-04 16:15:18', NULL, '2022-06-04 10:15:18', '2022-06-04 10:15:18'),
(156, '::1', 1, '2022-06-04 16:23:16', NULL, '2022-06-04 10:23:16', '2022-06-04 10:23:16'),
(157, '::1', 1, '2022-06-04 16:25:00', NULL, '2022-06-04 10:25:00', '2022-06-04 10:25:00'),
(158, '127.0.0.0', 1, '2022-06-04 17:12:12', NULL, '2022-06-04 11:12:12', '2022-06-04 11:12:12'),
(159, '127.0.0.0', 1, '2022-06-04 17:48:30', NULL, '2022-06-04 11:48:30', '2022-06-04 11:48:30'),
(160, '::1', 1, '2022-06-04 17:58:17', NULL, '2022-06-04 11:58:17', '2022-06-04 11:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `content_type`, `title`, `product_name`, `product_price`, `banner_photo`, `active_status`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'left', 'প্রচারের জন্য', 'চন্দন কাঠ', '9000', 'public/uploads/banner/sandalwood3.jpg', 1, 1, NULL, '2022-05-17 18:44:02', '2022-05-17 20:36:21'),
(2, 'right', '২৫% ডিস্কাউন্টে', 'লাল চন্দন কাঠ', '1000', 'public/uploads/banner/lalsandalwood.png', 1, 1, NULL, '2022-05-17 20:34:47', '2022-05-17 20:34:47'),
(3, 'left', 'dfd', 'dsf', '4523', 'public/uploads/banner/khasiya ful.webp', 1, 1, NULL, '2022-05-29 07:39:43', '2022-05-29 07:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `blog_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_slug`, `writer`, `date`, `blog_thumbnail`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'চন্দনের কাঠের  সাথে এর গুরা', 'চন্দনের-কাঠের-সাথে-এর-গুরা', 'আরিফ', '2022-06-04', 'public/uploads/blog/sandalwood3.jpg', 1, NULL, '2022-06-04 04:56:21', '2022-06-04 04:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_icon`, `slug`, `category_status`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'মধু', '<i class=\"fas fa-coffee\"></i>', 'honey', 2, 1, NULL, '2022-05-17 00:32:30', '2022-05-20 17:52:13'),
(3, 'চন্দন কাঠ', '<i class=\"far fa-edit\"></i>', 'sandal-wood', 2, 1, NULL, '2022-05-17 01:59:20', '2022-05-30 06:34:31'),
(4, 'তেতুল চাটনী', '<i class=\"fab fa-penny-arcade\"></i>', 'tetuk-chatni', 1, 1, NULL, '2022-05-17 20:52:59', '2022-05-20 17:02:10'),
(5, 'মোম', '<i class=\"fas fa-coffee\"></i>', 'candle', 1, 1, NULL, '2022-05-17 20:53:08', '2022-05-20 17:04:28'),
(6, 'বাদাম', '<i class=\"fas fa-coffee\"></i>', 'nuts', 2, 1, NULL, '2022-05-17 20:53:18', '2022-05-30 06:33:41'),
(11, 'Basic Computer', '<i class=\"fas fa-coffee\"></i>', 'basic-computer', 2, 0, NULL, '2022-05-18 21:58:16', '2022-05-20 17:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity_date`, `active_status`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2k', 10, '2022-05-29', 1, 1, NULL, '2022-05-27 20:41:26', '2022-05-29 07:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 4, 'Lalmonirhat', 1, NULL, '2022-05-29 09:43:11', '2022-05-30 03:33:40'),
(7, 5, 'Foridpur', 1, NULL, '2022-05-30 03:03:19', '2022-05-30 06:29:12'),
(8, 6, 'Pangsha', 1, NULL, '2022-05-30 03:05:34', '2022-05-30 03:33:40'),
(9, 5, 'Lalmonirhat1', 1, NULL, '2022-05-30 03:08:02', '2022-05-30 06:29:12'),
(10, 5, 'Foridpur2', 1, NULL, '2022-05-30 03:08:13', '2022-05-30 06:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Rongpur', 1, NULL, NULL, '2022-05-30 03:07:39'),
(5, 'Dhaka', 1, NULL, '2022-05-30 03:03:01', '2022-05-30 06:29:12'),
(6, 'Dhaka1', 1, '2022-05-30 03:06:35', '2022-05-30 03:05:25', '2022-05-30 03:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_16_095149_create_categories_table', 1),
(6, '2022_05_16_110104_create_products_table', 1),
(7, '2022_05_17_084107_create_product_multiple_images_table', 1),
(8, '2022_05_18_060135_create_banners_table', 1),
(10, '2022_05_24_083612_create_wishlists_table', 1),
(11, '2022_05_25_045909_create_divisions_table', 1),
(12, '2022_05_25_053330_create_coupons_table', 1),
(13, '2022_05_26_071244_create_districts_table', 1),
(14, '2022_05_26_091730_create_thanas_table', 1),
(15, '2022_05_28_085439_create_orders_table', 1),
(16, '2022_05_28_132000_create_order_items_table', 1),
(18, '2022_05_29_114432_create_visitors_table', 2),
(29, '2022_05_22_051207_create_blogs_table', 3),
(30, '2022_06_01_145835_create_all_visitors_table', 3),
(31, '2022_06_01_193415_create_testimonials_table', 3),
(32, '2022_06_02_141631_create_product_contents_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(50,2) NOT NULL,
  `order_date` date NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_date` date DEFAULT NULL,
  `processing_date` date DEFAULT NULL,
  `picked_date` date DEFAULT NULL,
  `shipped_date` date DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `cancel_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `order_type` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `shipping_name`, `shipping_mobile`, `shipping_email`, `shipping_address`, `division_id`, `district_id`, `thana_id`, `payment_type`, `amount`, `order_date`, `invoice_no`, `confirm_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `order_type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ariful Siker', '01784703000', '01784703000', 'address', '5', '7', '5', 'Cash On Delivary', 1760.00, '2022-05-31', NULL, '2022-05-31', '2022-05-31', '2022-05-31', '2022-05-31', '2022-05-31', '2022-06-02', NULL, 'Cancel', 1, NULL, '2022-05-31 07:24:51', '2022-06-02 05:52:45'),
(2, 'Ariful Sikder', '01784703000', 'a@gmail.com', 'hello', '5', '7', '5', 'Cash On Delivary', 100.00, '2022-06-04', NULL, '2022-06-04', '2022-06-04', '2022-06-04', '2022-06-04', '2022-06-04', NULL, '2022-06-04', 'Return', 1, NULL, '2022-06-04 05:19:09', '2022-06-04 10:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_qty` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_qty`, `price`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 39, 1, 1760.00, 1, NULL, '2022-05-31 07:24:51', '2022-05-31 07:24:51'),
(2, 2, 3, 1, 100.00, 1, NULL, '2022-06-04 05:19:09', '2022-06-04 05:19:09');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_discount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_offer` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_qty`, `product_code`, `product_price`, `product_discount`, `short_description`, `product_thumbnail`, `product_slider_img`, `special_offer`, `product_slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 2, 'খাটি মধু', '111', 'প্রোডাক্টের কোড u', '2000', '20', '<p>1111</p>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/haninut.jpg', NULL, 'honey-nuts-new', 1, NULL, '2022-05-17 00:33:00', '2022-05-20 20:59:28'),
(3, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '0', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/sandalwood2.jpg', NULL, 'tetul-chatni2', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(4, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '10', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni1', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:55'),
(5, 2, 'খাটি মধু', '111', 'প্রোডাক্টের কোড u', '2000', '20', '<p>1111</p>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/modhu.jpg', NULL, 'honey-nuts', 1, NULL, '2022-05-17 00:33:00', '2022-05-20 20:58:38'),
(6, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(7, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(8, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(30, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood-wood', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(31, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-ni', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(32, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red-red', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(33, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-nid', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(34, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-redred', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(35, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood-woodre', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(36, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-nii', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(37, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red-redred', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(38, 3, 'dsf', '10', 'fds', '5000', '12', '<font color=\"#9aa0a6\">dsfdsfdsfdsf</font>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/lalsandalwood.png', '1', 'new-product-for-sell', 1, NULL, '2022-05-29 07:48:20', '2022-05-30 06:34:31'),
(39, 3, 'Shandal wood new', '11', 'something', '2000', '12', '<p><span style=\"color: rgb(35, 38, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 15px;\">You have to choose a way to represent this location as a String, a possible way can be to save the latitude and the longitude separately.</span><br></p>', 'public/uploads/product/Sandalwood.jpg', 'public/uploads/product_banner/sandalWood1.jpg', '1', 'new-product-for-sell-sandal-wood', 1, NULL, '2022-05-29 07:51:48', '2022-05-30 06:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_contents`
--

CREATE TABLE `product_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_warrenty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free_shipping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_contents`
--

INSERT INTO `product_contents` (`id`, `product_id`, `product_warrenty`, `free_shipping`, `file_type`, `long_description`, `content_file`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 39, 'প্রোডাক্টের অয়ারেন্টি update', 'ফ্রি শিপিং update', 'Video', '<p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।<br></p>', 'public/uploads/product/productContent\\1734532881501350.mp4', 1, NULL, '2022-06-02 10:17:00', '2022-06-02 14:15:07'),
(2, 38, 'প্রোডাক্টের অয়ারেন্টি', 'ফ্রি শিপিং', 'Video', '<p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</p><p>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</p>', 'public/uploads/product/productContent\\1734532881501350.mp4', 1, NULL, '2022-06-02 12:13:11', '2022-06-04 12:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_multiple_images`
--

CREATE TABLE `product_multiple_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `multiple_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_multiple_images`
--

INSERT INTO `product_multiple_images` (`id`, `product_id`, `multiple_image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 2, 'public/uploads/product/smart-phone-half-block.jpg', 1, NULL, '2022-05-17 00:33:00', '2022-05-17 00:33:00'),
(4, 2, 'public/uploads/product/Untitled-1.jpg', 1, NULL, '2022-05-17 00:33:00', '2022-05-17 00:33:00'),
(5, 3, 'public/uploads/product/smart-phone-half-block.jpg', 1, NULL, '2022-05-17 01:59:47', '2022-05-17 01:59:47'),
(6, 3, 'public/uploads/product/NationalFlag.jpg', 1, NULL, '2022-05-17 01:59:47', '2022-05-17 03:08:43'),
(7, 4, 'public/uploads/product/sandalwood3.jpg', 1, NULL, '2022-05-17 22:13:12', '2022-05-17 22:13:12'),
(8, 4, 'public/uploads/product/tetul chatni.jpg', 1, NULL, '2022-05-17 22:13:12', '2022-05-17 22:13:12'),
(9, 8, 'public/uploads/product/misro.png', 1, NULL, '2022-05-18 17:34:37', '2022-05-18 17:34:37'),
(10, 8, 'public/uploads/product/modhu.jpg', 1, NULL, '2022-05-18 17:34:37', '2022-05-18 17:34:37'),
(11, 8, 'public/uploads/product/mosla.jpg', 1, NULL, '2022-05-18 17:34:37', '2022-05-18 17:34:37'),
(12, 38, 'public/uploads/product/lalsandalwood.png', 1, NULL, '2022-05-29 07:48:20', '2022-05-29 07:48:20'),
(13, 39, 'public/uploads/product/tetul chatni.jpg', 1, NULL, '2022-05-29 07:51:49', '2022-05-29 07:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `description`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'মারজুক রাসেল', 'বিনিয়োগকারি', 'আমি আমার আঙ্গুল রাখছি  প্রতি বছর আমাদের শপ! এটি আমাকে প্রবণতার ভাল ধারণা দেয়। আমার পরিবার এটা পছন্দ করে, খুব.', 'public/uploads/testimonial/demo.jpg', 1, NULL, '2022-06-02 04:48:14', '2022-06-02 09:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `thana_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `division_id`, `district_id`, `thana_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 4, 6, 'Adidmari', 1, NULL, '2022-05-29 09:43:16', '2022-05-30 03:07:39'),
(5, 5, 7, 'Rajbari', 1, NULL, '2022-05-30 03:03:27', '2022-05-30 06:29:12'),
(6, 6, 8, 'Sherpur', 1, '2022-05-30 03:06:35', '2022-05-30 03:05:44', '2022-05-30 03:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$PRRbxfBmNlmFbDgzgjLmpeR7yOtg/q2l9te59uQ6/ChUs/O9qpYfW', NULL, NULL, '2022-05-29 06:32:38', '2022-05-29 06:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_visit_times` int(21) NOT NULL,
  `category_visit_times` int(21) NOT NULL,
  `date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `visitor_ip`, `category_id`, `product_id`, `product_visit_times`, `category_visit_times`, `date`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(19, '::1', 2, 2, 13, 66, '2022-06-04 10:24:40', 1, NULL, '2022-06-01 06:57:25', '2022-06-04 10:24:40'),
(20, '::1', 3, 3, 84, 23, '2022-06-04 13:53:03', 1, NULL, '2022-06-01 06:58:06', '2022-06-04 13:53:03'),
(21, '::1', 4, 4, 21, 9, '2022-06-04 05:58:49', 1, NULL, '2022-06-01 06:58:22', '2022-06-04 05:58:49'),
(22, '127.0.0.0', 3, 39, 27, 6, '2022-06-04 11:56:41', 1, NULL, '2022-06-04 05:14:14', '2022-06-04 11:56:41'),
(23, '127.0.0.0', 4, 4, 0, 2, '2022-06-04 11:51:08', 1, NULL, '2022-06-04 05:34:46', '2022-06-04 11:51:08'),
(24, '127.0.0.0', 2, 5, 28, 0, '2022-06-04 11:11:10', 1, NULL, '2022-06-04 10:26:33', '2022-06-04 11:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 1, 4, NULL, '2022-05-27 19:59:26', '2022-05-27 19:59:26'),
(16, 1, 7, NULL, '2022-05-27 19:59:33', '2022-05-27 19:59:33'),
(17, 1, 2, NULL, '2022-05-28 20:58:30', '2022-05-28 20:58:30'),
(18, 1, 2, NULL, '2022-05-28 20:58:30', '2022-05-28 20:58:30'),
(19, 1, 3, NULL, '2022-05-28 23:38:05', '2022-05-28 23:38:05'),
(20, 1, 3, NULL, '2022-05-28 23:38:05', '2022-05-28 23:38:05'),
(21, 1, 5, NULL, '2022-05-30 08:38:07', '2022-05-30 08:38:07'),
(22, 1, 5, NULL, '2022-05-30 08:38:07', '2022-05-30 08:38:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_visitors`
--
ALTER TABLE `all_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_blog_slug_unique` (`blog_slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_district_name_unique` (`district_name`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisions_division_name_unique` (`division_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_slug_unique` (`product_slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_contents`
--
ALTER TABLE `product_contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_contents_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_multiple_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `thanas_thana_name_unique` (`thana_name`),
  ADD KEY `thanas_division_id_foreign` (`division_id`),
  ADD KEY `thanas_district_id_foreign` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitors_category_id_foreign` (`category_id`),
  ADD KEY `visitors_product_id_foreign` (`product_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_visitors`
--
ALTER TABLE `all_visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product_contents`
--
ALTER TABLE `product_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_contents`
--
ALTER TABLE `product_contents`
  ADD CONSTRAINT `product_contents_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  ADD CONSTRAINT `product_multiple_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thanas`
--
ALTER TABLE `thanas`
  ADD CONSTRAINT `thanas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thanas_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `visitors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
