-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2019 at 01:39 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.1.25-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineattendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `in_time` datetime NOT NULL,
  `out_time` datetime NOT NULL,
  `common_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_hour` double(8,2) DEFAULT NULL,
  `attendance_in` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_id`, `in_time`, `out_time`, `common_ip`, `total_hour`, `attendance_in`, `created_at`, `updated_at`) VALUES
(10, 1, '2019-03-04 22:35:35', '2019-03-04 00:00:00', '127.0.0.1', 0.01, '2019-03-04', NULL, '2019-03-04 16:35:57'),
(11, 1, '2019-03-05 15:33:37', '2019-03-05 00:00:00', '127.0.0.1', 0.09, '2019-03-05', NULL, '2019-03-05 09:38:53'),
(12, 1, '2019-03-06 15:55:30', '2019-03-06 00:00:00', '127.0.0.1', 2.42, '2019-03-06', NULL, '2019-03-06 12:20:58'),
(14, 2, '2019-03-06 10:00:00', '2019-03-06 15:00:00', '127.0.0.1', 6.00, '2019-03-06', '2019-03-05 18:00:00', '2019-03-06 04:00:00'),
(15, 2, '2019-03-07 13:00:00', '2019-03-07 16:00:00', '127.0.0.1', 3.00, '2019-03-07', NULL, NULL),
(16, 5, '2019-03-06 09:00:00', '2019-03-06 15:00:00', '127.0.0.1', 6.00, '2019-03-06', NULL, NULL),
(17, 5, '2019-03-07 11:00:00', '2019-03-06 18:00:00', '127.0.0.1', 7.00, '2019-03-07', NULL, NULL),
(18, 8, '2019-03-06 08:00:00', '2019-03-06 11:00:00', '127.0.0.1', 3.00, '2019-03-06', NULL, NULL),
(19, 8, '2019-03-07 10:00:00', '2019-03-06 16:00:00', '127.0.0.1', 8.00, '2019-03-07', NULL, NULL),
(20, 4, '2019-03-06 09:00:00', '2019-03-06 13:00:00', '127.0.0.1', 4.00, '2019-03-06', NULL, NULL),
(21, 4, '2019-03-07 10:00:00', '2019-03-07 19:00:00', '127.0.0.1', 9.00, '2019-03-07', NULL, NULL);

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
(4, '2019_03_01_150721_create_attendances_table', 2);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` datetime DEFAULT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` enum('admin','oparetor','staff') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'staff',
  `status` enum('active','inactive','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `common_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `sex`, `email`, `dob`, `department_name`, `user_role`, `status`, `email_verified_at`, `password`, `job_id`, `common_id`, `local_ip`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iqbal', 'hasan', 'male', 'admin@admin.com', '1988-07-21 00:00:00', 'Mathematics', 'admin', 'active', NULL, '$2y$10$8j4lN3JadA1vg9E7Y9HxcukedEjFISltd9dJwqLLGsM.Frjz6LgIG', 'EMP20191', NULL, '192.168.2.230', 'KbNqq4Ierlrv4UlJVjjkVUmznr0q87Rxn7znyNlgQCkQKLS2elL76ivqVQ8i', '2019-03-04 02:49:30', '2019-03-04 02:49:30'),
(2, 'Siddique', 'Alam', 'male', 'alam@admin.com', '1989-03-19 00:00:00', 'Mathematics', 'staff', 'active', NULL, '$2y$10$Lp0/IkZFqdwku3wpFfh9IuD.wEM4n7OznHwCZI9NN1afF/adPve0e', 'EMP20192', NULL, '192.168.2.231', 'i77nXAbRJGEoVZvkgUa0K9LEXWVrMkGst4Ncwy90uX5dMjGef5uoRnLjJ8Ap', '2019-03-04 14:58:48', '2019-03-06 10:28:19'),
(4, 'Akter', 'Hossain', 'male', 'akter@gmail.com', '1992-01-01 00:00:00', 'Designer', 'staff', 'active', NULL, '$2y$10$LhokoLDBYig04iEWMxdsbu4Tl0afLNVuDmDkHS8y6tZkVs1h1At42', 'EMP201909', NULL, '192.168.2.234', NULL, '2019-03-06 10:47:43', '2019-03-06 10:47:43'),
(5, 'Billal', 'Hossain', 'male', 'billal@gmail.com', '1988-03-06 00:00:00', 'Development', 'staff', 'active', NULL, '$2y$10$NkMJskJDuDRpxvZ1d878IuzHwo1P.iSZafRS6rVFVmEqSKsPEJDX6', 'EMP201908', NULL, '192.168.2.235', NULL, '2019-03-06 10:50:06', '2019-03-06 10:50:06'),
(8, 'Ariful', 'Haque', 'male', 'arif@gmail.com', '1987-03-06 00:00:00', 'Server Admin', 'admin', 'active', NULL, '$2y$10$icr/ZZHrSaZ1p38MUSMJoOYkTNxBU7AH9qJfsvAF3RKyYIoxpt07e', 'EMP201906', NULL, '192.168.2.237', 'w0uic0sOOc9qK89034qbe3p5zn0qe9VVOJCn6VyJpawA6318jjfNryZXwW8G', '2019-03-06 10:53:40', '2019-03-06 10:53:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_job_id_unique` (`job_id`),
  ADD UNIQUE KEY `users_local_ip_unique` (`local_ip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
