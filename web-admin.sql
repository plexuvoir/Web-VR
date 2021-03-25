-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 04:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-admin`
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
(4, '2021_02_16_045102_create_tempat_wisata_models', 2),
(5, '2021_02_16_062633_create_spot_models', 3),
(6, '2021_02_20_073223_create_spot_models', 4),
(7, '2021_02_16_062721_create_tombol_spots', 5),
(8, '2021_03_17_054648_create_tombol_spots_table', 6),
(9, '2021_03_17_060329_create_tombol_spots_table', 7);

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
-- Table structure for table `spot_models`
--

CREATE TABLE `spot_models` (
  `id_spot` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tempat_wisata` bigint(20) UNSIGNED NOT NULL,
  `nama_spot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_video_pagi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_suara_pagi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suhu_pagi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angin_pagi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permukaan_pagi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_video_sore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_suara_sore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suhu_sore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angin_sore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permukaan_sore` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_models`
--

INSERT INTO `spot_models` (`id_spot`, `created_at`, `updated_at`, `id_tempat_wisata`, `nama_spot`, `link_video_pagi`, `link_suara_pagi`, `suhu_pagi`, `angin_pagi`, `permukaan_pagi`, `link_video_sore`, `link_suara_sore`, `suhu_sore`, `angin_sore`, `permukaan_sore`) VALUES
(9, '2021-03-22 21:37:19', '2021-03-22 21:37:19', 26, 'Pintu Masuk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2021-03-22 21:37:35', '2021-03-22 21:37:35', 26, 'Hutan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_models_tests`
--

CREATE TABLE `spot_models_tests` (
  `id_spot` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `id_tempat_wisata` int(11) DEFAULT NULL,
  `nama_spot` varchar(50) DEFAULT NULL,
  `link_video_pagi` varchar(50) DEFAULT NULL,
  `link_suara_pagi` varchar(50) DEFAULT NULL,
  `suhu_pagi` varchar(50) DEFAULT NULL,
  `angin_pagi` varchar(50) DEFAULT NULL,
  `permukaan_pagi` varchar(50) DEFAULT NULL,
  `link_video_sore` varchar(50) DEFAULT NULL,
  `link_suara_sore` varchar(50) DEFAULT NULL,
  `suhu_sore` varchar(50) DEFAULT NULL,
  `angin_sore` varchar(50) DEFAULT NULL,
  `permukaan_sore` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spot_models_tests`
--

INSERT INTO `spot_models_tests` (`id_spot`, `created_at`, `updated_at`, `id_tempat_wisata`, `nama_spot`, `link_video_pagi`, `link_suara_pagi`, `suhu_pagi`, `angin_pagi`, `permukaan_pagi`, `link_video_sore`, `link_suara_sore`, `suhu_sore`, `angin_sore`, `permukaan_sore`) VALUES
(1, '2020-07-31', '2020-05-27', 1, 'El Cafetal', '1C1N298uLeDYbNdCRoQn7jszGMRXWYYwSv', '19Bcgc8Gbo69pe98BKX4Zt2UdP4gmWCb6R', 'Genesis', 'Contour', 'GL-Class', '17SQu8sWVi7n9tTkyRjotJ9nLTRYxXn85t', '1E6f6xvqeYMKLZ3EF8WsuVFZjXyrqK3HeL', '3500', 'Mark VII', 'Century'),
(2, '2020-10-24', '2020-09-04', 2, 'Shuikou', '18xuoU3smcfwaTxf5BdKJgVqG76QFeGKXh', '19fifmstUbKUnhMD89zAtmM2g9WyZKmn4x', 'Sonata', 'Allroad', 'Brat', '1JytJimdLHNkTsKK36nAfMVjueisee4nXj', '15kGvGFmsvzK5rHLmox9Qw75YQrB4S6tLG', 'Phantom', 'ES', 'Ghost'),
(3, '2020-08-05', '2021-03-12', 3, 'Balzara', '1Ld8eE2iLmAiwFrdCAfvVmnFoJZ824Nko3a', '1653Lf4Jw81CNbwAsFzbrF35zZKDUuS5LDa', '350Za', 'XC90a', 'Corvettea', '1PP8Xg49hXgfmv873vM6kUpvczBS1czdyBa', '1FQoWn9RRWc88ugnmciJ3yym94LyWeTiGNa', 'Eclipsea', 'Rivieraa', 'Silverado 1500a'),
(4, '2020-08-01', '2020-08-28', 4, 'Larnaca', '1P2ZtC7pEWBzkr9ZaQB6cnJmZ3WVQy4RpW', '14akWjVbufNx99aw4EUSDZ6v8Zd66ex9v9', 'Acadia', 'Venture', 'Supra', '1Dt2FGL96n2nTGynz7P4hfGCrsckBgxC6q', '1KRdy9hddGLV3sBbwPGJPBWYXkLR14fdCe', 'Tahoe', 'LX', 'Daytona'),
(5, '2020-11-20', '2021-01-09', 5, 'Schiedam postbusnummers', '15dbLz9rma6gDWnbCxtZ95sn6hesfmGts6', '19Lok3u6Qdc1JHzG1piJanLWgHJogCVja8', 'Protege5', 'Element', 'Savana 2500', '18z8742cUq7xmUkfrqwRajgcQoGwu7pDnu', '13bqiuUzvKBbDRiiEgQZBFoS7YYiS7C2q3', 'Viper', 'LS', 'Shadow'),
(6, '2021-03-09', '2021-03-09', NULL, 'dQAWSWAD', 'AWDDAW', 'ad', 'awd', 'awd', 'adw', 'daw', 'adw', 'wdadawdawdaw', 'daw', 'adw'),
(7, '2021-03-10', '2021-03-10', 3, 'daw', 'awd', 'awd', 'adw', 'daw', 'awd', 'awd', 'wda', 'adw', 'awd', 'awd'),
(16, '2021-03-15', '2021-03-15', 22, 'adwadw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2021-03-16', '2021-03-16', 21, 'Pintu Masuk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2021-03-16', '2021-03-16', 21, 'Jembatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2021-03-16', '2021-03-16', 77, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2021-03-19', '2021-03-19', 3, 'Jembatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata_models`
--

CREATE TABLE `tempat_wisata_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_tempat_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempat_wisata_models`
--

INSERT INTO `tempat_wisata_models` (`id`, `created_at`, `updated_at`, `nama_tempat_wisata`) VALUES
(26, '2021-03-22 21:36:32', '2021-03-22 21:37:01', 'Pantai Balekambang'),
(27, '2021-03-22 21:36:43', '2021-03-22 21:36:43', 'Pantai Watu Leter'),
(28, '2021-03-22 21:36:49', '2021-03-22 21:36:49', 'Pantai 3 Warna');

-- --------------------------------------------------------

--
-- Table structure for table `tombol_spots`
--

CREATE TABLE `tombol_spots` (
  `id_tombol` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tempat_wisata` bigint(20) UNSIGNED NOT NULL,
  `id_in` int(10) UNSIGNED NOT NULL,
  `id_own` int(10) UNSIGNED NOT NULL,
  `x_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `y_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `z_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x_rot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `y_rot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `z_rot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tombol_spots`
--

INSERT INTO `tombol_spots` (`id_tombol`, `created_at`, `updated_at`, `id_tempat_wisata`, `id_in`, `id_own`, `x_pos`, `y_pos`, `z_pos`, `x_rot`, `y_rot`, `z_rot`) VALUES
(14, '2021-03-22 21:37:46', '2021-03-24 00:26:21', 26, 9, 10, '43', '45', '54', '24', '74', '64'),
(15, '2021-03-24 00:24:01', '2021-03-24 00:26:11', 26, 10, 9, '555', '5', '5', '5', '57', '5');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$TxrvjIbcvIMpQsJOvwkwl.SeArIVlfm8u8kedMFroFpdFdJdlrZUi', 'F78jLfZxArz8AdPnQhowq2sFv6KU6NJIp1mqNgEKWkiNxhtKTL', '2021-02-15 00:23:17', '2021-02-15 00:23:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `spot_models`
--
ALTER TABLE `spot_models`
  ADD PRIMARY KEY (`id_spot`),
  ADD KEY `spot_models_id_tempat_wisata_index` (`id_tempat_wisata`);

--
-- Indexes for table `spot_models_tests`
--
ALTER TABLE `spot_models_tests`
  ADD PRIMARY KEY (`id_spot`);

--
-- Indexes for table `tempat_wisata_models`
--
ALTER TABLE `tempat_wisata_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tombol_spots`
--
ALTER TABLE `tombol_spots`
  ADD PRIMARY KEY (`id_tombol`),
  ADD KEY `tombol_spots_id_tempat_wisata_index` (`id_tempat_wisata`),
  ADD KEY `tombol_spots_id_in_index` (`id_in`),
  ADD KEY `tombol_spots_id_own_index` (`id_own`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spot_models`
--
ALTER TABLE `spot_models`
  MODIFY `id_spot` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spot_models_tests`
--
ALTER TABLE `spot_models_tests`
  MODIFY `id_spot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tempat_wisata_models`
--
ALTER TABLE `tempat_wisata_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tombol_spots`
--
ALTER TABLE `tombol_spots`
  MODIFY `id_tombol` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spot_models`
--
ALTER TABLE `spot_models`
  ADD CONSTRAINT `spot_models_id_tempat_wisata_foreign` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisata_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tombol_spots`
--
ALTER TABLE `tombol_spots`
  ADD CONSTRAINT `tombol_spots_id_in` FOREIGN KEY (`id_in`) REFERENCES `spot_models` (`id_spot`) ON DELETE CASCADE,
  ADD CONSTRAINT `tombol_spots_id_own` FOREIGN KEY (`id_own`) REFERENCES `spot_models` (`id_spot`) ON DELETE CASCADE,
  ADD CONSTRAINT `tombol_spots_id_tempat_wisata` FOREIGN KEY (`id_tempat_wisata`) REFERENCES `tempat_wisata_models` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
