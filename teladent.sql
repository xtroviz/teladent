-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 10:35 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teladent`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_teladent_patient_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_25_194012_create_teladent_admin_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teladent_admin`
--

CREATE TABLE `teladent_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teladent_admin`
--

INSERT INTO `teladent_admin` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'teladent-admin', 'humabinteirfan@gmail.com', '$2y$10$Q902aBrS2W9pNzbyyL6c9.m59Ybjgl/UK1ngMOfPILd3Pjb9Day2q', 'sk65nwpR1awMJp0REB5BRQKpzFVg65B5RTV1sVODk7xAEyVBB9hcS6eDYeP7', '2017-01-26 09:10:54', '2017-02-01 16:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `teladent_patient`
--

CREATE TABLE `teladent_patient` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teladent_patient`
--

INSERT INTO `teladent_patient` (`id`, `patient_id`, `first_name`, `last_name`, `email`, `password`, `zip`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, '342784', 'Huma', 'Irfan', 'humabinteirfan@gmail.com', '$2y$10$h3CdYclvSUiQO1zVCHuNnuZC3OOvLEvHgXnUyCGDKeUsDEoqYv.AC', '54000', '1234567', 'CCCpXxpUiZ7aWbFCIcrgcXkCfyQP8pfO5QNhmFT5bArNVT0BL3FzEnIIy5e7', '2017-01-28 05:44:39', '2017-02-01 16:00:35'),
(4, '293507', 'Huma', 'Siddiqui', 'humabinteirfan@outlook.com', '$2y$10$S246xrxgCeuKDC9R4RIpbOx33x.3KqB2VvHSbqUF5teQu52xRt9zi', '54000', '12356789', NULL, '2017-02-01 10:05:55', '2017-02-01 16:30:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `teladent_admin`
--
ALTER TABLE `teladent_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teladent_admin_username_unique` (`username`),
  ADD UNIQUE KEY `teladent_admin_email_unique` (`email`);

--
-- Indexes for table `teladent_patient`
--
ALTER TABLE `teladent_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teladent_patient_patient_id_unique` (`patient_id`),
  ADD UNIQUE KEY `teladent_patient_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teladent_admin`
--
ALTER TABLE `teladent_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teladent_patient`
--
ALTER TABLE `teladent_patient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
