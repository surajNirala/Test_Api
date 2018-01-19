-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2018 at 03:51 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `departure` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `children` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `car_registration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `user_id`, `name`, `lead_name`, `address`, `telephone`, `email`, `arrival`, `departure`, `children`, `adult`, `car_registration`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hunter Morar Jr.', 'Rubye Hansen IV', '62127 Gorczany Ville Suite 227\nBetsyshire, OH 33747', 9887540430, 'isaias65@example.org', '2018-01-11 10:01:35', '2018-01-11 10:01:35', 0, 4, '42529001', 'Delectus tempora culpa inventore aliquid illo fugiat sit assumenda.', '2018-01-11 04:31:35', '2018-01-11 04:31:35'),
(2, 1, 'Abigale Walsh', 'Mrs. Loyce Kunde', '906 Parisian Avenue Suite 037\nOndrickamouth, NJ 30540-3960', 9847293035, 'eryn28@example.net', '2018-01-11 10:01:35', '2018-01-11 10:01:35', 6, 0, '56617863', 'Et velit nihil ut et ut rerum.', '2018-01-11 04:31:35', '2018-01-11 04:31:35'),
(4, 1, 'suraj', 'lead_name', 'Loni Ghaziabad', 8285164189, 'dummy@gmail.com', '2016-12-31 18:50:01', '2016-12-31 18:50:01', 2, 2, '82851641', 'this is testing only', '2018-01-12 05:09:44', '2018-01-12 05:09:44'),
(6, 3, 'suraj update', 'vijay', 'Loni Ghaziabad', 8285164189, 'test@update.com', '2017-01-01 04:40:00', '2017-01-01 04:40:01', 2, 25, '82851641', 'this is testing', '2018-01-14 23:21:22', '2018-01-15 06:24:34'),
(16, 3, 'suraj update', 'vijay', 'Loni Ghaziabad', 8285164189, 'kamall@update.com', '2017-01-01 04:40:00', '2017-01-01 04:40:01', 2, 25, '82851641', 'this is testing', '2018-01-15 06:23:39', '2018-01-15 06:44:10'),
(17, 3, 'suraj', 'lead_name', 'Loni Ghaziabad', 8285164189, 'dummy1@gmail.com', '2016-12-31 18:50:01', '2016-12-31 18:50:01', 2, 2, '82851641', 'this is testing only', '2018-01-15 06:30:59', '2018-01-15 06:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `key_logs`
--

CREATE TABLE `key_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `guest_id` int(10) UNSIGNED DEFAULT NULL,
  `park` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plot_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_in` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `key_out` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `key_logs`
--

INSERT INTO `key_logs` (`id`, `user_id`, `guest_id`, `park`, `plot_number`, `type`, `key_in`, `key_out`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '355 Ritchie Underpass Apt. 505', '863', 'guest', '2018-01-11 10:01:35', '2018-01-11 10:01:35', '2018-01-11 04:31:35', '2018-01-11 04:31:35'),
(2, 1, NULL, '7762 Hobart Valley', '51239', 'electrician', '2018-01-11 10:01:35', '2018-01-11 10:01:35', '2018-01-11 04:31:35', '2018-01-11 04:31:35'),
(3, 2, NULL, '80231 Hane Mountains Suite 103', '92850', 'plumber', '2018-01-11 10:01:35', '2018-01-11 10:01:35', '2018-01-11 04:31:35', '2018-01-11 04:31:35'),
(4, 2, NULL, '89156 Brendon Passage', '79868', 'carpenter ', '2018-01-11 10:01:35', '2018-01-11 10:01:35', '2018-01-11 04:31:35', '2018-01-11 04:31:35'),
(5, 2, NULL, 'delhi', '852369', 'painter', '2018-01-14 18:30:01', '2018-01-14 18:30:01', '2018-01-11 05:45:15', '2018-01-15 07:26:56'),
(23, 3, 16, 'delhi', '852369', 'painter', '2018-01-14 18:30:01', '2018-01-14 18:30:01', '2018-01-15 06:23:40', '2018-01-15 07:06:50'),
(24, 3, 17, 'delhi', '852369', 'painter', '2018-01-14 18:30:01', '2018-01-14 18:30:01', '2018-01-15 06:30:59', '2018-01-15 07:28:28'),
(25, 3, 17, 'delhi', '852369', 'painter', '2018-01-14 18:30:01', '2018-01-14 18:30:01', '2018-01-15 06:31:23', '2018-01-15 07:24:25'),
(26, 4, NULL, 'noida', '25896', 'lightman', '2018-01-09 18:30:00', '2018-01-09 18:30:00', '2018-01-16 03:34:25', '2018-01-16 03:34:25'),
(28, 4, NULL, 'new delhi', '896', 'technician', '2018-01-15 18:30:00', '2018-01-15 18:30:00', '2018-01-16 23:05:47', '2018-01-17 05:19:01'),
(29, 4, NULL, 'new delhi', '896', 'technician', '2018-01-15 18:30:00', '2018-01-15 18:30:00', '2018-01-16 23:05:55', '2018-01-17 05:19:07'),
(30, 4, NULL, 'noida', '741852', 'plumber', '2016-12-31 18:30:00', '2017-12-31 18:30:00', '2018-01-17 03:40:48', '2018-01-17 03:40:48'),
(31, 4, NULL, 'new delhi', '896', 'technician', '2018-01-15 18:30:00', '2018-01-15 18:30:00', '2018-01-17 04:49:44', '2018-01-17 05:51:31'),
(32, 4, NULL, 'delhi', '123654', 'plumber', '2016-12-31 18:30:00', '2017-12-31 18:30:00', '2018-01-17 04:50:30', '2018-01-17 04:50:30'),
(33, 4, NULL, 'delhi', '123654', 'plumber', '2016-12-31 18:30:00', '2017-12-31 18:30:00', '2018-01-17 04:53:52', '2018-01-17 04:53:52'),
(34, 4, NULL, NULL, NULL, NULL, '2018-01-17 11:28:22', '2018-01-17 11:28:22', '2018-01-17 05:58:22', '2018-01-17 05:58:22'),
(35, 4, NULL, NULL, NULL, NULL, '2018-01-17 11:29:04', '2018-01-17 11:29:04', '2018-01-17 05:59:04', '2018-01-17 05:59:04'),
(36, 4, NULL, NULL, NULL, NULL, '2018-01-17 11:29:17', '2018-01-17 11:29:17', '2018-01-17 05:59:17', '2018-01-17 05:59:17');

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
(45, '2014_10_12_000000_create_users_table', 1),
(46, '2014_10_12_100000_create_password_resets_table', 1),
(47, '2018_01_03_045520_create_guests_table', 1),
(48, '2018_01_03_045706_create_key_logs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'suraj Nirala', 'suraj@yahoo.com', '$2y$10$n9qWCi3DckdHCsKQ2LY8y.5cPxHv1yGRHGLYqowNrEWI5PdE0gbaq', 1, '1', 'Kl24ENKobdr1Mjoq2DpT', 'b9PUKKIRtg', '2018-01-11 04:31:34', '2018-01-11 04:31:34'),
(2, 'Vijay Pratap', 'vijay@hotmail.com', '$2y$10$QguNN8joH2tQSdWsBcncPO/Tg1u/Jsg7si0EnjG1U3cz05nv36Nn6', 2, '1', 'Uogo2BrxkRFjappjKgg2', 'MZpUwmKBrv', '2018-01-11 04:31:34', '2018-01-11 04:31:34'),
(3, 'vikesh', 'vikesh@gmail.com', '$2y$10$suTKnus2uOlM05t0t4ICVudQOw2R73oj6.f2Zjxa.CrN8kRuLyvKi', 1, '1', NULL, NULL, '2018-01-11 04:54:03', '2018-01-11 04:54:03'),
(4, 'suraj', 'suraj@gmail.com', '$2y$10$zK7KMN8EpzCTx5OqogDvNulPTwtrSIykZ4RCqWEZYfZhtYMr6php.', 2, '1', NULL, NULL, '2018-01-16 03:31:11', '2018-01-16 03:31:11'),
(5, 'demo user', 'surajgmail.com', '$2y$10$zsPn7ilvg60vC88TRaWzJuefaH4yNGzh4UcDSGoZtHQF0R6p/UFFm', 1, '1', NULL, NULL, '2018-01-16 22:48:32', '2018-01-16 22:48:32'),
(6, 'demo user', 'surajjgmail.com', '$2y$10$lnZzyUBKTox3039SouU1FOtnFJgzaksuuT8.BGKwgYxpQPRQV/Tie', 1, '1', NULL, NULL, '2018-01-16 22:51:48', '2018-01-16 22:51:48'),
(7, 'prince', 'prince@gmail.com', '$2y$10$G5IP3PxdOt2KebzFtTzR3eeMFfXBkiyUQ9785ol6QvEWVozo8f2.C', 1, '1', NULL, NULL, '2018-01-16 22:59:08', '2018-01-16 22:59:08'),
(8, '9845', 'suraj@gmail.comm', '$2y$10$JMEdyP1iwe3ZIT.DeqahMuWyZbXqQkiakq8G6tEKkv3Xw6nN8h4uq', 1, '1', NULL, NULL, '2018-01-17 01:35:02', '2018-01-17 01:35:02'),
(9, 'suraj', 'suraj@gmail.commm', '$2y$10$9EKqMNgQXiA0liL9hO14BuLoV1jBhzvPfody02o91AROea.6Xs6pu', 1, '1', NULL, NULL, '2018-01-17 01:35:56', '2018-01-17 01:35:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guests_user_id_index` (`user_id`);

--
-- Indexes for table `key_logs`
--
ALTER TABLE `key_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key_logs_user_id_index` (`user_id`),
  ADD KEY `key_logs_guest_id_index` (`guest_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `key_logs`
--
ALTER TABLE `key_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
