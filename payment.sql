-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 11:41 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `ip_address`, `user_agent`, `created_at`, `updated_at`) VALUES
(1, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:16:10', '2021-06-21 03:16:10'),
(2, 4, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:16:36', '2021-06-21 03:16:36'),
(3, 7, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:24:38', '2021-06-21 03:24:38'),
(4, 7, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:26:23', '2021-06-21 03:26:23'),
(5, 7, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:28:36', '2021-06-21 03:28:36'),
(6, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:28:56', '2021-06-21 03:28:56'),
(7, 4, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:29:04', '2021-06-21 03:29:04'),
(8, 7, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:29:20', '2021-06-21 03:29:20'),
(9, 7, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:30:27', '2021-06-21 03:30:27'),
(10, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:43:37', '2021-06-21 03:43:37'),
(11, 4, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:44:24', '2021-06-21 03:44:24'),
(12, 7, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:44:39', '2021-06-21 03:44:39'),
(13, 7, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:45:53', '2021-06-21 03:45:53'),
(14, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-21 03:46:10', '2021-06-21 03:46:10'),
(15, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:27:28', '2021-06-22 02:27:28'),
(16, 4, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:28:55', '2021-06-22 02:28:55'),
(17, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:29:55', '2021-06-22 02:29:55'),
(18, 4, 'add new client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:32:36', '2021-06-22 02:32:36'),
(19, 4, 'add new client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:32:43', '2021-06-22 02:32:43'),
(20, 4, 'add new client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:33:03', '2021-06-22 02:33:03'),
(21, 4, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:33:33', '2021-06-22 02:33:33'),
(22, 4, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:34:24', '2021-06-22 02:34:24'),
(23, 4, 'update project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 02:35:02', '2021-06-22 02:35:02'),
(24, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:01:01', '2021-06-22 12:01:01'),
(25, 4, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:12:52', '2021-06-22 12:12:52'),
(26, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:13:21', '2021-06-22 12:13:21'),
(27, 4, 'add new user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:52:54', '2021-06-22 12:52:54'),
(28, 4, 'add new user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:53:10', '2021-06-22 12:53:10'),
(29, 4, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:53:18', '2021-06-22 12:53:18'),
(30, 8, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:53:31', '2021-06-22 12:53:31'),
(31, 8, 'add new user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:57:41', '2021-06-22 12:57:41'),
(32, 8, 'update user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 12:57:50', '2021-06-22 12:57:50'),
(33, 8, 'update user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 13:02:08', '2021-06-22 13:02:08'),
(34, 8, 'update user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 13:07:29', '2021-06-22 13:07:29'),
(35, 8, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 13:08:17', '2021-06-22 13:08:17'),
(36, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 13:08:28', '2021-06-22 13:08:28'),
(37, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 14:16:26', '2021-06-22 14:16:26'),
(38, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:55:15', '2021-06-22 15:55:15'),
(39, 4, 'sent invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:55:31', '2021-06-22 15:55:31'),
(40, 4, 'update project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:55:58', '2021-06-22 15:55:58'),
(41, 4, 'sent invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:56:12', '2021-06-22 15:56:12'),
(42, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:59:19', '2021-06-22 15:59:19'),
(43, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:59:28', '2021-06-22 15:59:28'),
(44, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:59:38', '2021-06-22 15:59:38'),
(45, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 15:59:47', '2021-06-22 15:59:47'),
(46, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:00:01', '2021-06-22 16:00:01'),
(47, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:00:09', '2021-06-22 16:00:09'),
(48, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:00:17', '2021-06-22 16:00:17'),
(49, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:00:23', '2021-06-22 16:00:23'),
(50, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:00:41', '2021-06-22 16:00:41'),
(51, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:00:50', '2021-06-22 16:00:50'),
(52, 4, 'delete invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:00:55', '2021-06-22 16:00:55'),
(53, 4, 'delete invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:01:00', '2021-06-22 16:01:00'),
(54, 4, 'delete invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:01:18', '2021-06-22 16:01:18'),
(55, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:01:41', '2021-06-22 16:01:41'),
(56, 4, 'delete invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:01:52', '2021-06-22 16:01:52'),
(57, 4, 'delete invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:01:57', '2021-06-22 16:01:57'),
(58, 4, 'delete invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:02:01', '2021-06-22 16:02:01'),
(59, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:02:20', '2021-06-22 16:02:20'),
(60, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:02:30', '2021-06-22 16:02:30'),
(61, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:02:41', '2021-06-22 16:02:41'),
(62, 4, 'sent invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 16:15:14', '2021-06-22 16:15:14'),
(63, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 17:57:06', '2021-06-22 17:57:06'),
(64, 4, 'sent invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 17:57:32', '2021-06-22 17:57:32'),
(65, 4, 'sent invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:07:01', '2021-06-22 18:07:01'),
(66, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:11:53', '2021-06-22 18:11:53'),
(67, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:14:21', '2021-06-22 18:14:21'),
(68, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:14:35', '2021-06-22 18:14:35'),
(69, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:14:44', '2021-06-22 18:14:44'),
(70, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:16:32', '2021-06-22 18:16:32'),
(71, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:16:40', '2021-06-22 18:16:40'),
(72, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:18:35', '2021-06-22 18:18:35'),
(73, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:18:46', '2021-06-22 18:18:46'),
(74, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:18:58', '2021-06-22 18:18:58'),
(75, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:19:09', '2021-06-22 18:19:09'),
(76, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:20:02', '2021-06-22 18:20:02'),
(77, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:20:47', '2021-06-22 18:20:47'),
(78, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:32:00', '2021-06-22 18:32:00'),
(79, 4, 'sent invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:32:12', '2021-06-22 18:32:12'),
(80, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:42:59', '2021-06-22 18:42:59'),
(81, 4, 'update invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:43:16', '2021-06-22 18:43:16'),
(82, 4, 'sent invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 18:43:24', '2021-06-22 18:43:24'),
(83, 4, 'Log out', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 19:00:16', '2021-06-22 19:00:16'),
(84, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 19:02:12', '2021-06-22 19:02:12'),
(85, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 21:15:31', '2021-06-22 21:15:31'),
(86, 4, 'user change his photo', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 23:04:19', '2021-06-22 23:04:19'),
(87, 4, 'user change his photo', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 23:04:48', '2021-06-22 23:04:48'),
(88, 4, 'user change his photo', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-22 23:05:19', '2021-06-22 23:05:19'),
(89, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-23 11:22:02', '2021-06-23 11:22:02'),
(90, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-23 19:41:24', '2021-06-23 19:41:24'),
(91, 4, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-23 23:55:07', '2021-06-23 23:55:07'),
(92, 4, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '2021-06-23 23:55:28', '2021-06-23 23:55:28'),
(93, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 13:55:42', '2021-07-01 13:55:42'),
(94, 4, 'add new client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 13:56:49', '2021-07-01 13:56:49'),
(95, 4, 'update client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 13:57:00', '2021-07-01 13:57:00'),
(96, 4, 'delete client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 13:57:04', '2021-07-01 13:57:04'),
(97, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 13:57:47', '2021-07-01 13:57:47'),
(98, 4, 'user change his photo', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 14:01:01', '2021-07-01 14:01:01'),
(99, 4, 'user change his photo', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 15:49:44', '2021-07-01 15:49:44'),
(100, 4, 'delete income', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 16:28:57', '2021-07-01 16:28:57'),
(101, 4, 'delete income', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 16:30:18', '2021-07-01 16:30:18'),
(102, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 20:48:31', '2021-07-01 20:48:31'),
(103, 4, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 20:49:57', '2021-07-01 20:49:57'),
(104, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-01 20:50:50', '2021-07-01 20:50:50'),
(105, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-02 01:06:51', '2021-07-02 01:06:51'),
(106, 4, 'user change his photo', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '2021-07-02 01:08:46', '2021-07-02 01:08:46'),
(107, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '2021-07-05 13:33:45', '2021-07-05 13:33:45'),
(108, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '2021-07-17 16:01:49', '2021-07-17 16:01:49'),
(109, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-07-25 13:25:39', '2021-07-25 13:25:39'),
(110, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-07-31 21:27:42', '2021-07-31 21:27:42'),
(111, 4, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-07-31 21:28:11', '2021-07-31 21:28:11'),
(112, 4, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-07-31 21:30:38', '2021-07-31 21:30:38'),
(113, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-07-31 21:31:03', '2021-07-31 21:31:03'),
(114, 4, 'add new user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-07-31 21:31:57', '2021-07-31 21:31:57'),
(115, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-08-01 01:02:56', '2021-08-01 01:02:56'),
(116, 4, 'update user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-08-01 01:03:57', '2021-08-01 01:03:57'),
(117, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-08-02 18:51:39', '2021-08-02 18:51:39'),
(118, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-08-03 02:42:58', '2021-08-03 02:42:58'),
(119, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-08-03 21:05:45', '2021-08-03 21:05:45'),
(120, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-08-05 20:14:25', '2021-08-05 20:14:25'),
(121, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', '2021-08-05 23:03:58', '2021-08-05 23:03:58'),
(122, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '2021-08-06 18:55:11', '2021-08-06 18:55:11'),
(123, 4, 'add new client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '2021-08-06 18:58:59', '2021-08-06 18:58:59'),
(124, 4, 'add new invoice', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '2021-08-06 18:59:53', '2021-08-06 18:59:53'),
(125, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '2021-08-09 12:00:15', '2021-08-09 12:00:15'),
(126, 4, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', '2021-08-10 16:59:56', '2021-08-10 16:59:56'),
(127, 7, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '2021-09-11 20:22:44', '2021-09-11 20:22:44'),
(128, 7, 'update user', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '2021-09-11 20:23:04', '2021-09-11 20:23:04'),
(129, 7, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '2021-09-11 20:25:23', '2021-09-11 20:25:23'),
(130, 7, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '2021-09-12 21:38:00', '2021-09-12 21:38:00'),
(131, 7, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', '2021-09-13 02:07:17', '2021-09-13 02:07:17'),
(132, 7, 'Log in', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '2021-09-22 00:30:49', '2021-09-22 00:30:49'),
(133, 7, 'add new client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '2021-09-22 00:36:50', '2021-09-22 00:36:50'),
(134, 7, 'add new client', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '2021-09-22 00:36:57', '2021-09-22 00:36:57'),
(135, 7, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '2021-09-22 00:37:10', '2021-09-22 00:37:10'),
(136, 7, 'add new project', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '2021-09-22 00:37:18', '2021-09-22 00:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Mustafa Khan', '0764389819', 'mustafadeveloeper2@gmail.com', 'The company, Kabul, Afghanistan', '2021-06-22 02:32:36', '2021-06-22 02:32:36'),
(2, 'Mustafa Khan', '0764389819', 'mustafadeveloeper@gmail.com', 'The company, Kabul, Afghanistan', '2021-06-22 02:32:43', '2021-06-22 02:32:43'),
(3, 'kamal ajan', '0764389819', 'kamaljan@gmail.com', 'The company, Kabul, Afghanistan', '2021-06-22 02:33:03', '2021-06-22 02:33:03'),
(5, 'Jordan Pennington', '9', 'raminojejy@mailinator.com', 'Repellendus Volupta', '2021-08-06 18:59:00', '2021-08-06 18:59:00'),
(6, 'Xenos Brewer', '22', 'gufevow@mailinator.com', 'Ut earum doloremque', '2021-09-22 00:36:50', '2021-09-22 00:36:50'),
(7, 'Shad Roberts', '45', 'pirybin@mailinator.com', 'Dolor tempora laboru', '2021-09-22 00:36:57', '2021-09-22 00:36:57');

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
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` bigint(20) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `invoice_number`, `project_id`, `amount`, `payment_method`, `currency`, `created_at`, `updated_at`) VALUES
(1, '1', 2, 300, 'Stripe', 'USD', '2021-07-14 16:12:08', '2021-06-22 16:12:08'),
(3, '7', 2, 100, 'Paypal', 'USD', '2021-06-22 16:16:01', '2021-06-22 16:16:01'),
(4, '7', 2, 100, 'Paypal', 'USD', '2021-06-22 16:23:20', '2021-06-22 16:23:20'),
(5, '7', 2, 100, 'Paypal', 'USD', '2021-06-22 16:24:34', '2021-06-22 16:24:34'),
(7, '2', 2, 200, 'Paypal', 'USD', '2021-05-12 18:44:43', '2021-06-22 18:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_number`, `project_id`, `amount`, `status`, `sent_date`, `deadline`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 200, 'Paid', '2021-06-22', '2021-06-17', 'Laravel auto update a field in the table when current date is more than a specific date in the table', '2021-06-22 18:32:00', '2021-06-22 18:36:05'),
(2, 2, 2, 200, 'Paid', '2021-06-22', '2021-06-23', 'Laravel auto update a field in the table when current date is more than a specific date in the table\r\nLaravel auto update a field in the table when current date is more than a specific date in the tableLaravel auto update a field in the table when current date is more than a specific date in the tableLaravel auto update a field in the table when current date is more than a specific date in the tableLaravel auto update a field in the table when current date is more than a specific date in the tableLaravel auto update a field in the table when current date is more than a specific date in the tableLaravel auto update a field in the table when current date is more than a specific date in the table', '2021-06-22 18:42:59', '2021-06-22 18:44:43'),
(3, 3, 3, 300, 'Unsent', NULL, '2021-06-18', 'hhhhhhh', '2021-07-01 13:57:47', '2021-07-01 13:57:47'),
(4, 4, 5, 600, 'Unsent', NULL, '2021-07-15', 'Kabul Jan', '2021-07-01 20:50:50', '2021-07-01 20:50:50'),
(5, 5, 3, 49, 'Unsent', NULL, '1997-05-28', 'Amet repudiandae se', '2021-07-31 21:31:03', '2021-07-31 21:31:03'),
(6, 6, 3, 200, 'Unsent', NULL, '2021-08-11', NULL, '2021-08-06 18:59:53', '2021-08-06 18:59:53');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_22_111407_create_clients_table', 1),
(7, '2021_05_22_123915_create_sessions_table', 1),
(8, '2021_05_23_101745_create_projects_table', 1),
(10, '2021_06_13_061519_create_incomes_table', 1),
(11, '2021_06_20_092015_create_activity_logs_table', 1),
(12, '2021_06_22_061837_create_notifications_table', 2),
(13, '2021_05_30_121335_create_invoices_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noview',
  `read` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `client_id`, `description`, `status`, `read`, `created_at`, `updated_at`) VALUES
(131, 1, 'mustafadeveloeper2@gmail.com paid $ 100 for the sarey.co project via Stripe', 'read', NULL, '2021-06-22 16:23:20', '2021-06-22 16:25:31'),
(132, 1, 'mustafadeveloeper2@gmail.com paid $ 100 for the sarey.co project via Stripe', 'read', NULL, '2021-06-22 16:24:34', '2021-06-22 16:25:26'),
(133, 1, 'mustafadeveloeper2@gmail.com paid $ 200 for the sarey.co project via Stripe', 'read', NULL, '2021-06-22 18:36:05', '2021-06-22 21:16:05'),
(134, 1, 'mustafadeveloeper2@gmail.com paid $ 200 for the sarey.co project via Stripe', 'read', NULL, '2021-06-22 18:44:44', '2021-06-22 21:16:11');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `client_id`, `start_date`, `deadline`, `status`, `total_price`, `currency`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mustafa sadat', 3, '2021-06-19', '2021-07-02', 'In Progress', 200, 'USD', 'Laravel auto update a field in the table when current date is more than a specific date in the table', '2020-09-08 07:00:00', '2021-06-22 02:35:02'),
(2, 'sarey.co', 1, '2021-06-14', '2021-06-20', 'Not Started', 200, 'USD', 'Laravel auto update a field in the table when current date is more than a specific date in the table', '2021-06-22 02:34:24', '2021-06-22 15:55:58'),
(3, 'Kabul Jan', 2, '2021-06-17', '2021-06-21', 'In Progress', 300, 'EUR', NULL, '2023-03-03 08:00:00', '2021-06-23 23:55:07'),
(4, 'Mama jan', 2, '2021-06-18', '2021-06-28', 'Finished', 3000, 'USD', NULL, '2021-06-23 23:55:28', '2021-06-23 23:55:28'),
(5, 'Blood Donation', 2, '2021-07-09', '2021-07-21', 'In Progress', 600, 'USD', 'This is some text and very good', '2021-07-01 20:49:57', '2021-07-01 20:49:57'),
(6, 'Jerry Hess', 3, '1984-12-17', '2008-01-13', 'Finished', 454, 'EUR', 'Veniam elit fuga', '2021-07-31 21:28:11', '2021-07-31 21:28:11'),
(7, 'Jescie Rios', 1, '1996-04-16', '2000-09-02', 'Not Started', 84, 'EUR', 'Nam eu rerum optio', '2021-07-31 21:30:39', '2021-07-31 21:30:39'),
(8, 'Sheek Posh', 1, '2021-09-21', '2021-09-14', 'Finished', 200000, 'USD', 'This is some text and very good', '2021-09-11 20:25:24', '2021-09-11 20:25:24'),
(9, 'Miriam Barrett', 5, '2016-12-26', '1970-07-07', 'Not Started', 247, 'EUR', 'Magni expedita et li', '2021-09-22 00:37:10', '2021-09-22 00:37:10'),
(10, 'Lucius Rutledge', 2, '1998-04-25', '2015-05-05', 'Finished', 926, 'USD', 'Cupiditate unde est', '2021-09-22 00:37:18', '2021-09-22 00:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1GJTMFeoKRaRRq0Q8jnZSERKy5yzegVUFQZszALh', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiajVOT21VVkRZWVZ5R3dOc3R3YW14TDl4NVdES2lseTFBMXpKTXlFZCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cDovL2xvY2FsaG9zdC9wYXltZW50Ijt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvcGF5bWVudC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1641535334),
('4OAnPpvpOZZ1Olrr4748Eh26NaDtqHBVN6rihipM', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2p0N1hENUsxeGI1RFg1NnlPWER5clhHbWVadkVJOGEwMFhjY1llWiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMDoiaHR0cDovL2xvY2FsaG9zdC9wYXltZW50L3VzZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1631473618),
('dcyMgPMdyenMzc6IlsAN9dNLIhtT8stXpvsiq09N', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZGtqZUJGTnlPdFlZRkNxQkZCajdZdURSZ0NidXdObEVyQkZEZW95ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Qvc2hlZWtwb3NoL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNjoiaHR0cDovL2xvY2FsaG9zdC9zaGVla3Bvc2gvZW1wbG95ZWVzIjt9fQ==', 1628589546),
('FRtouGdM33BAZYxI49HRGumaMBYYBSKU36DdFkk6', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTFpveEpoamEzOTlPRzg0YlY1OFpDZWsyb3dzZ25OTGhlV1loeFVjVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvcGF5bWVudC9wcm9qZWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRPa2IvLm1aUGY5UTBJTi9Edi9PR2J1Vm5WTm5GRGZQZmVBVmRpS1EvdlRDVjd2WVRPUU9SaSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkT2tiLy5tWlBmOVEwSU4vRHYvT0didVZuVk5uRkRmUGZlQVZkaUtRL3ZUQ1Y3dllUT1FPUmkiO30=', 1628589615),
('G2nEjOGWMb67Mkb087qxbfuVyX9eJHlXwivP3aqb', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiV050R3FHeUVzRVVKOTRKdGx0b3RhR25BTGhWU1ZmQkxhbDI0QVpjciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvcGF5bWVudC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkVEV2cjhNMDM0dGQyc2JIcUY4dzFzLlFLRXNrWkRkOG5QZ0NIalRSWGFjMW95YkE4dzZ0UTIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFRFdnI4TTAzNHRkMnNiSHFGOHcxcy5RS0Vza1pEZDhuUGdDSGpUUlhhYzFveWJBOHc2dFEyIjt9', 1632245852),
('m6IhdwJk1n9i9NAdGAo0xXm7fZ4Tjmc2G7IA2b1O', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic3k4cXZGd0NmT3BNU0d1M1Z3REhFRlJycGQ0VVBRNzQ2eUVKaXVUMSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMDoiaHR0cDovL2xvY2FsaG9zdC9ITVMiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNjoiaHR0cDovL2xvY2FsaG9zdC9ITVMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1628589558),
('sdb0Fd2webV9yNqpAZoimrVjK80pNdul3XX1MS7T', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoidlJVaXhUTGdTb2ppSkM4a1h3UWR3VjBKYVNkYkxabzNsVkVJVVByTyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vbG9jYWxob3N0L3BheW1lbnQvYWN0aXZpdHktbG9ncyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRURXZyOE0wMzR0ZDJzYkhxRjh3MXMuUUtFc2taRGQ4blBnQ0hqVFJYYWMxb3liQTh3NnRRMiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVEV2cjhNMDM0dGQyc2JIcUY4dzFzLlFLRXNrWkRkOG5QZ0NIalRSWGFjMW95YkE4dzZ0UTIiO30=', 1631473642),
('SnBMdXAT8DAVGkvrJzNFUCy0PiSzF2Tjxmw0Fy6W', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUkoxbjNBTGVLbFJ4UlRwTnRrZTI3OE1WMksxRER4Tm15R2s3b1cxTSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vbG9jYWxob3N0L3BheW1lbnQvbm90aWZpY2F0aW9ucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRURXZyOE0wMzR0ZDJzYkhxRjh3MXMuUUtFc2taRGQ4blBnQ0hqVFJYYWMxb3liQTh3NnRRMiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVEV2cjhNMDM0dGQyc2JIcUY4dzFzLlFLRXNrWkRkOG5QZ0NIalRSWGFjMW95YkE4dzZ0UTIiO30=', 1631464476),
('UhYI4mz2l2Ix0CRWVPMnz7RVFfbHYevA3mlBeFiY', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZVNLRFh5VVVXUjhlUm1FMHAxQkFGVzBPQ3BQM0xoRFBFU1hBZlZFSyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMDoiaHR0cDovL2xvY2FsaG9zdC9wYXltZW50L3VzZXJzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvcGF5bWVudC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1628589557),
('XfXwNn1oTxfZXOOll4TbSZC4dUe8k1Dmx4EDEDGM', 7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibUdiSXJsbThkbk02aDBiNGY0QUxVdzZCZkhCeFJVUGhmUkUwVzQxOSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vbG9jYWxob3N0L3BheW1lbnQvcHJvZmlsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRURXZyOE0wMzR0ZDJzYkhxRjh3MXMuUUtFc2taRGQ4blBnQ0hqVFJYYWMxb3liQTh3NnRRMiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVEV2cjhNMDM0dGQyc2JIcUY4dzFzLlFLRXNrWkRkOG5QZ0NIalRSWGFjMW95YkE4dzZ0UTIiO30=', 1631366746),
('YKhEtyyu0rkvJqcdbodKjT5JQstTwyywBxMptQoi', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3lLcUtNSTVZY1dQazRSaVkzclhrbkg3ZndBcmZqNGpKUWRmdUtrMSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMDoiaHR0cDovL2xvY2FsaG9zdC9wYXltZW50L3VzZXJzIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvcGF5bWVudC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1631164414);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `role`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(4, 'Mustafa Khan', 'mustafadeveloeper2@gmail.com', '2021-06-21 02:30:20', '$2y$10$Okb/.mZPf9Q0IN/Dv/OGbuVnVNnFDfPfeAVdiKQ/vTCV7vYTOQORi', NULL, NULL, 'Admin', 'WFaTGxEypiAi2PM2CGKycqIZWpmq42wkMJInxcxqxkMT2m2lACliERefMKRP', NULL, 'user-img/7P70mUkBKdvfjLeWMFOyvbxGNEKZscFN3Nlr3nxi.png', '2020-11-04 03:29:50', '2021-07-02 01:08:46'),
(7, 'Mustafa Khan', 'mustafasadat338@gmail.com', '2021-06-21 03:45:23', '$2y$10$TEvr8M034td2sbHqF8w1s.QKEskZDd8nPgCHjTRXac1oybA8w6tQ2', NULL, NULL, 'Admin', NULL, NULL, NULL, '2021-06-21 03:17:05', '2021-09-11 20:23:04'),
(8, 'mama jan', 'mama@gmail.com', '2021-06-22 12:53:10', '$2y$10$hbCnH9ojjiRyhUlGPIZSWepgeGEshITpE8/qx4KoBBoOFYJsv/ddS', NULL, NULL, 'Manager', NULL, NULL, NULL, '2021-06-22 12:53:10', '2021-06-22 13:07:29'),
(10, 'bulaj', 'tiqaqohizi@mailinator.com', '2021-07-31 21:31:57', '$2y$10$cak6S6EhoBr85XfZ.hQyUee58DK3sW.TpDXPMbM409AiMjT/RLmb2', NULL, NULL, 'Admin', NULL, NULL, NULL, '2021-07-31 21:31:57', '2021-07-31 21:31:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incomes_project_id_foreign` (`project_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_project_id_foreign` (`project_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_client_id_foreign` (`client_id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_client_id_foreign` (`client_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `incomes`
--
ALTER TABLE `incomes`
  ADD CONSTRAINT `incomes_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
