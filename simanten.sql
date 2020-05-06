-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2020 at 08:01 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simanten`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kepanitiaans`
--

CREATE TABLE `kepanitiaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_acara` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
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
(4, '2020_03_24_034420_create_pengabdian_table', 2),
(5, '2020_03_24_042053_create_praktikum_table', 2),
(6, '2020_03_27_022231_create_sertifikats_table', 2),
(7, '2020_04_06_222006_create_organizations_table', 2),
(8, '2020_04_07_152310_create_kepanitiaan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_acara` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pengabdians`
--

CREATE TABLE `pengabdians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_from` datetime NOT NULL,
  `end_on` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengabdians`
--

INSERT INTO `pengabdians` (`id`, `nim`, `start_from`, `end_on`, `created_at`, `updated_at`) VALUES
(12, '201810370311919', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(13, '201810370311076', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(14, '201810370311862', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(15, '201810370311778', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(16, '201810370311111', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(17, '201810370311948', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(18, '201810370311327', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(19, '201810370311071', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(20, '201810370311677', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL),
(21, '201810370311412', '2018-03-01 12:00:00', NULL, '2020-04-10 06:57:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `praktikums`
--

CREATE TABLE `praktikums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `praktikum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` timestamp NULL DEFAULT NULL,
  `absen` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `praktikums`
--

INSERT INTO `praktikums` (`id`, `nim`, `kelas`, `praktikum`, `jadwal`, `absen`, `created_at`, `updated_at`) VALUES
(1, '201810370311919', 'H', 'PEMROGRAMAN LANJUT', '2020-04-10 00:00:00', '2020-04-10 00:31:00', '2020-04-10 07:21:09', NULL),
(2, '201810370311919', 'F', 'JARINGAN KOMPUTER', '2020-04-10 01:40:00', '2020-04-10 01:40:00', '2020-04-10 07:21:09', NULL),
(3, '201810370311919', 'I', 'WEB', '2020-04-11 00:00:00', '2020-04-11 00:08:00', '2020-04-10 07:21:09', NULL),
(4, '201810370311919', 'B', 'PEMROGRAMAN DASAR', '2020-04-10 06:00:00', '2020-04-10 06:25:00', '2020-04-10 07:21:09', NULL),
(5, '201810370311919', 'A', 'PEMROGRAMAN LANJUT', '2020-04-02 12:05:00', '2020-04-02 12:21:00', '2020-04-10 07:21:09', NULL),
(6, '201810370311919', 'E', 'JARINGAN KOMPUTER', '2020-04-07 08:15:00', '2020-04-07 08:18:00', '2020-04-10 07:21:10', NULL),
(7, '201810370311919', 'A', 'BASIS DATA', '2020-04-03 01:40:00', '2020-04-03 01:59:00', '2020-04-10 07:21:10', NULL),
(8, '201810370311919', 'E', 'MOBILE', '2020-04-04 00:00:00', '2020-04-04 00:10:00', '2020-04-10 07:21:10', NULL),
(9, '201810370311919', 'B', 'WEB', '2020-03-01 00:00:00', '2020-03-01 00:14:00', '2020-04-10 07:21:10', NULL),
(10, '201810370311919', 'C', 'PEMROGRAMAN DASAR', '2020-03-02 01:40:00', '2020-03-02 01:56:00', '2020-04-10 07:21:10', NULL),
(11, '201810370311919', 'D', 'PEMROGRAMAN LANJUT', '2020-03-04 08:15:00', '2020-03-04 08:31:00', '2020-04-10 07:21:10', NULL),
(12, '201810370311919', 'G', 'PEMROGRAMAN LANJUT', NULL, NULL, '2020-04-21 09:32:30', NULL),
(13, '201810370311076', 'B', 'PEMROGRAMAN LANJUT', NULL, NULL, '2020-04-21 09:32:31', NULL),
(14, '201810370311862', 'H', 'PEMROGRAMAN LANJUT', NULL, NULL, '2020-04-21 09:32:31', NULL),
(15, '201810370311778', 'H', 'MOBILE', NULL, NULL, '2020-04-21 09:32:31', NULL),
(16, '201810370311111', 'B', 'BASIS DATA', NULL, NULL, '2020-04-21 09:32:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikats`
--

CREATE TABLE `sertifikats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validated` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sertifikats`
--

INSERT INTO `sertifikats` (`id`, `nim`, `code`, `validated`, `created_at`, `updated_at`) VALUES
(1, '201810370311919', 'E.3.a/001/INFOTECH/LABIT-UMM/IX/2020', 161, NULL, '2020-04-24 08:01:26'),
(2, '201810370311076', 'E.3.a/002/INFOTECH/LABIT-UMM/IX/2020', 2, '2020-04-16 04:01:52', '2020-04-23 09:39:34'),
(3, '201810370311862', 'E.3.a/003/INFOTECH/LABIT-UMM/IX/2020', 4, '2020-04-16 04:02:45', '2020-04-17 13:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nim`, `phone_number`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, 'admin@admin.com', NULL, 1, '$2y$10$UrobhihJWlu990ixy7kkJ.yN2E9sVMaobK5HEd96RBHP/PKrIp.Z.', NULL, '2020-04-04 17:57:45', '2020-04-04 17:57:45'),
(4, 'Vanesa Wijayanti', '201810370311919', '0863 0724 576', 'karman78@gmail.com', NULL, 0, '$2y$10$soxq8509ic99w25hCGULBOpXicCgX14gxnyocjY6D4X.oCdtln.bq', NULL, '2020-04-10 06:51:35', NULL),
(5, 'Kambali Sitorus M.M.', '201810370311076', '(+62) 428 1213 210', 'ganep38@yahoo.co.id', NULL, 0, '$2y$10$E.KF3QkjFAzwRPgKPoJsdOFyjzsHXFVnD3PupG40F95bOmdCXTkZm', NULL, '2020-04-10 06:51:35', NULL),
(6, 'Lintang Utami', '201810370311862', '(+62) 357 6594 810', 'cager.mansur@gmail.com', NULL, 0, '$2y$10$EjnBde/TquGnbQ5D/wbrBuJkUCUENnYE6WrWQHv.bN3cCwLfLDlwS', NULL, '2020-04-10 06:51:35', NULL),
(7, 'Karman Sitorus', '201810370311778', '0881 935 818', 'pratiwi.gara@yahoo.com', NULL, 0, '$2y$10$B/K5G/bsWYTn.jV1HiTXyODAHskIbRTXyHjXOPvLiVzUppasdJtOC', NULL, '2020-04-10 06:51:35', NULL),
(8, 'Darmana Anggriawan', '201810370311111', '0801 2944 647', 'yulianti.daruna@yahoo.com', NULL, 0, '$2y$10$OesSbUK2c3xq8rhit0CEae3Q/9BrKzpFW9OYBzVwLITPO.cb4leCW', NULL, '2020-04-10 06:51:36', NULL),
(9, 'Wardi Sihombing', '201810370311948', '0653 7339 4398', 'krajata@yahoo.com', NULL, 0, '$2y$10$riKhvmcVX6T4InF0EE.PFOvG9zlNdNmT.Vg6f4ud5rjmmTQMdibeO', NULL, '2020-04-10 06:52:00', NULL),
(10, 'Malika Halima Winarsih', '201810370311327', '(+62) 722 9741 3546', 'rika30@gmail.co.id', NULL, 0, '$2y$10$PWqXN9pKn3eXT0iwx9JHPudkZ7vfBJlat4FWRXZX5BIL3CcGFJT5S', NULL, '2020-04-10 06:52:00', NULL),
(11, 'Cawisadi Kusumo M.Farm', '201810370311071', '(+62) 616 1877 901', 'edi.purnawati@gmail.co.id', NULL, 0, '$2y$10$NCE6XBK0KeYqKWXslVvuJ.XkMH2L4BtKb3XZKkH1cAV9.jicYHcky', NULL, '2020-04-10 06:52:00', NULL),
(12, 'Adika Utama Najmudin S.Pd', '201810370311677', '0410 8620 373', 'qlatupono@yahoo.co.id', NULL, 0, '$2y$10$IzJkHgADDKyWo2bMKsdGBe7/gqANxuKPZ7lBO6l1ATD5r2pSM2Mm2', NULL, '2020-04-10 06:52:00', NULL),
(13, 'Puspa Agustina', '201810370311412', '(+62) 957 5962 297', 'safitri.talia@gmail.com', NULL, 0, '$2y$10$d6JtjLLKbuKNkv4lR6kxTOI8PpQEc4Qk8UMSIOlNFEknWfUHG3Sje', NULL, '2020-04-10 06:52:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepanitiaans`
--
ALTER TABLE `kepanitiaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengabdians`
--
ALTER TABLE `pengabdians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `praktikums`
--
ALTER TABLE `praktikums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikats`
--
ALTER TABLE `sertifikats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepanitiaans`
--
ALTER TABLE `kepanitiaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengabdians`
--
ALTER TABLE `pengabdians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `praktikums`
--
ALTER TABLE `praktikums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sertifikats`
--
ALTER TABLE `sertifikats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
