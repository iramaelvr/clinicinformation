-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 05:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patientdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `address`, `phone`, `date`, `time`, `doctor_id`, `created_at`, `updated_at`) VALUES
(8, 'Junrel Ednalig', 'Philippines', '09207493641', '2022-11-13', '10:52:00', 3, '2022-11-12 18:52:58', '2022-11-12 18:52:58'),
(10, 'Juan', 'Philippines', '09207493641', '2022-11-14', '22:06:00', 3, '2022-11-14 06:07:34', '2022-11-14 06:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('Female','Male','Others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `username`, `address`, `phone`, `email`, `age`, `gender`, `department`, `created_at`, `updated_at`) VALUES
(3, 'Juan Dela Cruz', 'juan-dela-cruz', '75 rd buhisan cebu city', '09217493641', 'sample@gmail.com', 34, 'Male', 'Main', '2022-11-09 19:15:25', '2022-11-10 00:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inpatients`
--

CREATE TABLE `inpatients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admit_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admit_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inpatients`
--

INSERT INTO `inpatients` (`id`, `name`, `address`, `phone`, `skills`, `admit_type`, `admit_time`, `medicine`, `ward_no`, `room_no`, `doctor_id`, `staff_id`, `created_at`, `updated_at`) VALUES
(9, 'John2', 'capalayan, surigao city', '09345543544', 'asdsdfsdf', NULL, '23:15', '---', '0', '0', 3, 2, '2022-11-14 06:16:31', '2022-11-14 08:33:23');

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
(3, '2017_02_02_061044_create_settings_table', 1),
(4, '2017_02_02_061206_create_images_table', 1),
(5, '2017_09_03_090306_create_patients_table', 1),
(6, '2017_09_03_142723_create_doctors_table', 1),
(7, '2017_09_03_165832_create_staff_table', 1),
(8, '2017_09_03_174453_create_appointments_table', 1),
(9, '2017_09_04_040809_create_inpatients_table', 1);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('Female','Male','Others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(20) NOT NULL,
  `name` varchar(99) NOT NULL,
  `user_type` varchar(99) DEFAULT NULL,
  `address` varchar(99) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(99) DEFAULT NULL,
  `age` int(99) DEFAULT NULL,
  `dob` varchar(99) DEFAULT NULL,
  `gender` varchar(99) DEFAULT NULL,
  `marital_status` varchar(99) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `remember_token` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `user_type`, `address`, `phone`, `email`, `age`, `dob`, `gender`, `marital_status`, `username`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'dfgdsgf122', 'staff', '75 rd buhisan cebu city', '9876865445', 'sample1@gmail.com', 122, '2022-11-10', 'Male', NULL, 'staff', '123', '2022-11-10', '2022-11-10', 1),
(3, 'trhgdvffrgerg', 'staff', '75 rd buhisan cebu city', '232534', 'sample@gmail.com', 32, '2022-11-10', 'Male', NULL, 'staff', '123', '2022-11-10', '2022-11-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'title', 'Patient Management System', NULL, NULL),
(2, 'description', 'PMS is the information system that is developed by the hospital in managing the records of the people that are involved in the organization.', NULL, NULL),
(3, 'address', 'Dillibazar, ktm', NULL, NULL),
(4, 'phone', '9843228246', NULL, NULL),
(5, 'email', 'info@pms.com.np', NULL, NULL),
(6, 'postbox', '', NULL, NULL),
(7, 'facebook', 'https://www.facebook.com', NULL, NULL),
(8, 'twitter', 'https://www.twitter.com', NULL, NULL),
(9, 'google_plus', 'https://www.google.com', NULL, NULL),
(10, 'logo', '/img/logo.png', NULL, NULL),
(11, 'notification-emails', 'admin@pms.com.np', NULL, NULL),
(12, 'placeholder', '/img/logo.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Female','Male','Others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` enum('Unmarried','Married') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `staff_type`, `username`, `address`, `phone`, `email`, `age`, `dob`, `gender`, `marital_status`, `created_at`, `updated_at`) VALUES
(2, 'fdghdfgh', 'rthsrth', 'fdghdfgh', 'srthsrt', '+639207493641', 'sample@gmail.com', 34, '2022-11-10', 'Male', NULL, '2022-11-09 22:35:33', '2022-11-09 22:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(23) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `address`, `user_type`, `phone`, `age`, `dob`, `gender`, `marital_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$2V1jlUdPKx/eDSykIQQuseeNjRUTbdMrQ5nrBZf/MXAIHFQxYitDG', '0', '0', '0', '0', '0000-00-00', '0', '0', 'UhfJTJCNvz3poc3mAFIkst2ZqqP3XLpey4qcuEg0t59y5Bkl2vZhxVOt3pwe', '2022-11-09 00:32:56', '2022-11-09 00:32:56'),
(2, 'hello', 'staff', 'sample@gmail.com', '123', '[value-6]', '[value-7]', '[value-8]', '[value-9]', '0000-00-00', '[value-11]', '[value-12]', 'TJGZnVmi6fBRBdQ5IoHTOEDSgD4JQwO4VrXpdzF5ApgZN9321ts2mT0vPjxV', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imageable_id_index` (`imageable_id`),
  ADD KEY `images_imageable_type_index` (`imageable_type`);

--
-- Indexes for table `inpatients`
--
ALTER TABLE `inpatients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inpatients_doctor_id_foreign` (`doctor_id`),
  ADD KEY `inpatients_staff_id_foreign` (`staff_id`);

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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inpatients`
--
ALTER TABLE `inpatients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
