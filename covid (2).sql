-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 07:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Appoiment_date` date NOT NULL,
  `Appoiment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`id`, `booking_id`, `User_id`, `Appoiment_date`, `Appoiment_time`) VALUES
(1, 1, 2, '2024-12-13', '00:08:00'),
(2, 2, 4, '2025-03-08', '20:06:00'),
(3, 3, 2, '2025-03-05', '05:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `address`, `age`, `gender`, `User_id`, `status`) VALUES
(1, 'wasay', 'shahfaisal', 21, 'Male', 2, 'Approved'),
(2, 'ali', 'korangi', 18, 'Male', 4, 'Approved'),
(3, 'abdullah', 'shahfaisal', 18, 'Male', 2, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` bigint(20) UNSIGNED NOT NULL,
  `vaccine_id` bigint(20) UNSIGNED NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `patient_id`, `hospital_id`, `vaccine_id`, `Status`) VALUES
(1, 3, 2, 2, 'Approved'),
(3, 5, 4, 5, 'Approved'),
(6, 6, 2, 4, 'Approved');

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_08_29_094508_create_users_table', 1),
(4, '2024_08_29_193420_create_vaccines_table', 1),
(5, '2024_08_31_161626_create_bookings_table', 1),
(6, '2024_09_23_193507_create_permission_tables', 1),
(7, '2024_09_26_133323_create_reports_table', 1),
(8, '2024_09_27_185125_create_changes_table', 1),
(9, '2024_09_27_195041_create_requests_table', 1),
(10, '2024_09_28_170818_create_appoinments_table', 1),
(11, '2024_12_08_160900_create_customers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'booking lists', 'web', '2024-12-08 20:37:26', '2024-12-08 20:37:26'),
(2, 'Vaccine list', 'web', '2024-12-08 20:40:24', '2024-12-08 20:40:24'),
(3, 'view and export report', 'web', '2024-12-08 20:40:37', '2024-12-08 20:40:37'),
(4, 'create reports', 'web', '2024-12-08 20:40:55', '2024-12-08 20:40:55'),
(5, 'edit report', 'web', '2024-12-08 20:41:07', '2024-12-08 20:41:07'),
(6, 'vaccination status', 'web', '2024-12-08 20:41:20', '2024-12-08 20:41:20'),
(7, 'request details', 'web', '2024-12-08 20:41:34', '2024-12-08 20:41:34'),
(8, 'create appoinment', 'web', '2024-12-08 20:41:51', '2024-12-08 20:41:51'),
(9, 'vaccine request', 'web', '2024-12-08 20:42:47', '2024-12-08 20:42:47'),
(10, 'booking', 'web', '2024-12-08 20:42:58', '2024-12-08 20:42:58'),
(11, 'search', 'web', '2024-12-08 20:43:07', '2024-12-08 20:43:07'),
(12, 'view report', 'web', '2024-12-08 20:43:21', '2024-12-08 20:43:21'),
(13, 'admin view report', 'web', '2024-12-08 20:43:32', '2024-12-08 20:43:32'),
(14, 'Appoinment view', 'web', '2024-12-08 20:43:48', '2024-12-08 20:43:48'),
(15, 'create permission', 'web', '2024-12-08 20:46:02', '2024-12-08 20:46:02'),
(16, 'edit permission', 'web', '2024-12-08 20:46:13', '2024-12-08 20:46:13'),
(17, 'create Role', 'web', '2024-12-08 20:46:29', '2024-12-08 20:46:29'),
(18, 'edit Role', 'web', '2024-12-08 20:46:43', '2024-12-08 20:46:43'),
(19, 'delete role', 'web', '2024-12-08 20:46:55', '2024-12-08 20:46:55'),
(20, 'user details', 'web', '2024-12-08 20:47:17', '2024-12-08 20:47:17'),
(21, 'edit users', 'web', '2024-12-08 20:47:31', '2024-12-08 20:47:31');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `vaccine_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Test_Result` varchar(255) NOT NULL,
  `Test_date` varchar(255) NOT NULL,
  `Vaccination_status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `booking_id`, `vaccine_id`, `user_id`, `Test_Result`, `Test_date`, `Vaccination_status`) VALUES
(1, 1, 1, 2, 'negative', '2025-01-03', 'Vaccinated'),
(2, 2, 3, 4, 'positive', '2024-12-18', 'Not Vaccinated'),
(3, 3, 3, 2, 'negative', '2025-03-28', 'Not Vaccinated');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `vaccine_id` bigint(20) UNSIGNED NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-12-08 20:51:00', '2024-12-08 20:51:00'),
(3, 'Hospital', 'web', '2024-12-09 00:49:37', '2024-12-09 00:49:37'),
(4, 'Patient', 'web', '2024-12-09 00:58:07', '2024-12-09 00:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 3),
(2, 1),
(3, 1),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 3),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Noman', 'nomaniqbalnh488352@gmail.com', '$2y$12$n8Pn.KUmkQhEpbDgBgAXouLAr7jjHz/Bur9uBg3923lNgerDPOeuG', 'Approved'),
(2, 'liaquat national', 'liaquat@gmail.com', '$2y$12$FhhjnX47ckAzULa2xAfQoO954N.KjsffMfC2HyUmwTmIhVkEDEbq2', 'Approved'),
(3, 'wasay', 'wasay@gmail.com', '$2y$12$.ledNWH878NbTES3mEHWeu7latsJeXogst9M8mVhiJ6PB0A57O/5q', 'Approved'),
(4, 'civil', 'civil@gmail.com', '$2y$12$nsXjSlCcxnZoXKhWlyqaC.9V4ZNfA4BsL42iUUa0FjyweLDA/GeXO', 'Approved'),
(5, 'ali', 'ali@gmail.com', '$2y$12$h8EnlZIdQhm8PA/g1Ex/nOlTALhM3Mctpx/T89PNlL/BewdOHCu06', 'Approved'),
(6, 'abdullah', 'abdullah@gmail.com', '$2y$12$/6sgVHehsW6yygxra.EMHuZjIeNVNQ0GY6tacS0il00KB2SgIdPOi', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Vaccine_name` varchar(255) NOT NULL,
  `Manufacture` date NOT NULL,
  `Expiry_date` date NOT NULL,
  `AvailableOrNot` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `Vaccine_name`, `Manufacture`, `Expiry_date`, `AvailableOrNot`) VALUES
(1, 'Covaxin', '2020-08-12', '2023-08-12', 'Available'),
(2, 'Nuvaxovid', '2021-07-10', '2026-05-07', 'Not Available'),
(3, 'Covilo', '2022-06-10', '2023-07-09', 'Available'),
(4, 'Comirnaty', '2021-10-12', '2022-07-10', 'Not Available'),
(5, 'Covishield', '2021-05-10', '2022-05-10', 'Available'),
(6, 'Vaxzevria', '2021-05-10', '2022-05-10', 'Not Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appoinments_booking_id_foreign` (`booking_id`),
  ADD KEY `appoinments_user_id_foreign` (`User_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`User_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_patient_id_foreign` (`patient_id`),
  ADD KEY `customers_hospital_id_foreign` (`hospital_id`),
  ADD KEY `customers_vaccine_id_foreign` (`vaccine_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_booking_id_foreign` (`booking_id`),
  ADD KEY `reports_vaccine_id_foreign` (`vaccine_id`),
  ADD KEY `reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_hospital_id_foreign` (`hospital_id`),
  ADD KEY `requests_patient_id_foreign` (`patient_id`),
  ADD KEY `requests_vaccine_id_foreign` (`vaccine_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD CONSTRAINT `appoinments_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`),
  ADD CONSTRAINT `appoinments_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `customers_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `customers_vaccine_id_foreign` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccines` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`),
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reports_vaccine_id_foreign` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccines` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `requests_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `requests_vaccine_id_foreign` FOREIGN KEY (`vaccine_id`) REFERENCES `vaccines` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
