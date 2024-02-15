-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 08:29 AM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'waiting',
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `name`, `email`, `phone`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '7', 'sagar kumar behera', 'sagarkumar@ralecon.com', '9632587415', 'Rejected', '2024-02-14', '2024-02-17', '2024-02-14 04:40:36', '2024-02-15 00:22:55'),
(3, '1', 'swaraj', 'swaraj123@yahoo.com', '9632587418', 'Approved', '2024-02-14', '2024-02-16', '2024-02-14 04:53:33', '2024-02-15 00:22:52'),
(4, '8', 'Gatikrishna Sahoo', 'gatikrishasahoo123@yahoo.com', '9632587418', 'waiting', '2024-03-01', '2024-03-15', '2024-02-14 05:28:36', '2024-02-14 05:28:36'),
(6, '7', 'sagar', 'sagarkumar@ralecon.com', '9632587415', 'waiting', '2024-04-12', '2024-04-30', '2024-02-14 05:33:03', '2024-02-14 05:33:03'),
(7, '7', 'sagar', 'sagarkumar@ralecon.com', '9632587415', 'Rejected', '2024-05-16', '2024-05-25', '2024-02-14 05:59:53', '2024-02-15 00:18:39'),
(8, '1', 'Sanjeeb Das', 'sanjeebdas123@yahoo.com', '9632587410', 'Approved', '2024-03-01', '2024-03-04', '2024-02-14 06:00:57', '2024-02-15 00:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sagar kumar behera', 'sagarkumar@ralecon.com', '9632587415', 'test', '2024-02-15 01:51:45', '2024-02-15 01:51:45'),
(2, 'kathiravan  v', 'kathir@ralecon.com', '9632587419', 'Testing', '2024-02-15 01:52:26', '2024-02-15 01:52:26'),
(3, 'Sanjeeb Das', 'sanjeebdas123@yahoo.com', '9632587418', 'well done', '2024-02-15 01:53:41', '2024-02-15 01:53:41'),
(4, 'Gatikrishna Sahoo', 'gatikrishasahoo123@yahoo.com', '9632587412', 'wow', '2024-02-15 01:57:29', '2024-02-15 01:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1707978020.jpg', '2024-02-15 00:50:20', '2024-02-15 00:50:20'),
(2, '1707978042.jpg', '2024-02-15 00:50:42', '2024-02-15 00:50:42'),
(3, '1707978046.jpg', '2024-02-15 00:50:46', '2024-02-15 00:50:46'),
(4, '1707978051.jpg', '2024-02-15 00:50:51', '2024-02-15 00:50:51'),
(5, '1707978055.jpg', '2024-02-15 00:50:55', '2024-02-15 00:50:55'),
(6, '1707978059.jpg', '2024-02-15 00:50:59', '2024-02-15 00:50:59'),
(7, '1707978062.jpg', '2024-02-15 00:51:02', '2024-02-15 00:51:02'),
(8, '1707978065.jpg', '2024-02-15 00:51:05', '2024-02-15 00:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(6, '2024_02_13_045854_create_sessions_table', 1),
(7, '2024_02_13_093305_create_rooms_table', 2),
(8, '2024_02_14_095606_create_bookings_table', 3),
(9, '2024_02_15_042344_add_status_field_to_bookings', 4),
(10, '2024_02_15_044429_add_status_field_to_bookings', 5),
(11, '2024_02_15_055707_create_galleries_table', 6),
(12, '2024_02_15_071055_create_contacts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) NOT NULL DEFAULT 'yes',
  `room_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_title`, `image`, `description`, `price`, `wifi`, `room_type`, `created_at`, `updated_at`) VALUES
(1, 'Family Room', '1707891573.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam aspernatur sapiente magnam facilis earum. Beatae, molestias ullam magnam quaerat quo aliquam nobis asperiores animi quasi?', '3520', 'yes', 'premium', '2024-02-13 04:50:13', '2024-02-14 00:49:33'),
(7, 'Presentation Room', '1707891678.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, in deleniti! Obcaecati perspiciatis, placeat vitae exercitationem sit porro odio vero consectetur qui esse molestias laudantium corporis ut quis, repellendus commodi quaerat aperiam tenetur maxime dolorem, ab ipsam similique. Autem ab incidunt nobis non deserunt eius hic repudiandae odio, numquam exercitationem.', '1899', 'yes', 'deluxe', '2024-02-14 00:51:18', '2024-02-14 00:51:18'),
(8, 'Meeting Room', '1707891976.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, in deleniti! Obcaecati perspiciatis, placeat vitae exercitationem sit porro odio vero consectetur qui esse molestias laudantium corporis ut quis, repellendus commodi quaerat aperiam tenetur maxime dolorem, ab ipsam similique. Autem ab incidunt nobis non deserunt eius hic repudiandae odio, numquam exercitationem.', '1924', 'no', 'regular', '2024-02-14 00:56:16', '2024-02-14 00:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FG5mtr9GoSl8EDA7e72IXDeqjPI96GUesKSbn0i4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicDJaenJUWExMdjNPNkVXNWlxUmdXZllGNjBjN1pSNW9mN3lwdzF3NSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1707980054),
('uwxt7l1Qpsrldbi34GBKgcgsQ7RJK4tSCsg6kXRr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2FTWHZ4cjZ3WXhScm1GRjFxU0lMMktMdHdIb2RkSFB4elR0M0ljViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1707980055),
('Y0WORycXOA1fZMQFxyo1z1dpiOVhUp00DuJ1A8zf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVJBakhtRTVPRjlGamxsSDJneDZKMWkwNFRQWTcxY04xWWNYajNpYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1707982057);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'sagar', 'sagarkumar@ralecon.com', '9632587415', 'user', NULL, '$2y$10$LHfAocXrhhguKjkPyZvdd.sPtksHIW2QIjhx1GXtwt27J4aV.pCbK', NULL, NULL, NULL, 'WUvWF6m257YdX2jrwyLlRELm3FkG239rDXgwEBjIO6ixXmtc9YgqTYGUeaA3', NULL, NULL, '2024-02-13 00:12:07', '2024-02-13 00:12:07'),
(2, 'Admin', 'admin@gmail.com', '9632587419', 'admin', NULL, '$2y$10$rO6dBLrHvi5WrQfpPJwSO.JpWDT3pqn9PdTZqE0.euAs5pZSS3UBy', NULL, NULL, NULL, 'LbUebpVa8AZtUdnLyEHxUOTBPXob3bLpxo9oTMTgisxhC3AnnU0wEziAzjIa', NULL, NULL, '2024-02-13 00:13:57', '2024-02-13 00:13:57'),
(3, 'swaraj', 'swaraj123@yahoo.com', '9632587418', 'user', NULL, '$2y$10$rbMTN8FcGSKwolXel3av0.ubJfnrifUuORjwjG8FINRo9h3RpVbPq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 02:02:02', '2024-02-13 02:02:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
