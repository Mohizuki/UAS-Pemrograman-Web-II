-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 06:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_novel`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailgenre`
--

CREATE TABLE `detailgenre` (
  `id` bigint(11) NOT NULL,
  `genrename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailgenre`
--

INSERT INTO `detailgenre` (`id`, `genrename`) VALUES
(1, 'Fantasy'),
(2, 'Action'),
(3, 'Drama'),
(4, 'Sci-fi'),
(5, 'Romance'),
(6, 'Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `detailnovel`
--

CREATE TABLE `detailnovel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT current_timestamp(),
  `desc_novel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailnovel`
--

INSERT INTO `detailnovel` (`id`, `judul`, `genre`, `desc_novel`, `created_at`, `updated_at`) VALUES
(2, 'Ambar Naon', '[\"Action\",\"Drama\"]', 'blablabla', '2022-06-06 00:54:47', '2022-06-06 00:54:47'),
(4, 'Ambar lmao', '[\"Fantasy\"]', 'ahahaha', '2022-06-06 00:55:24', '2022-06-06 00:55:24'),
(5, 'ayobisa', '2022-06-06 23:55:11', 'waktu mepet', '2022-06-06 07:55:11', '2022-06-06 07:55:11'),
(6, 'ayobisa', '[\"Drama\"]', 'waktu mepet', '2022-06-06 07:55:11', '2022-06-06 07:55:11');

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
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id` int(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambars`
--

INSERT INTO `gambars` (`id`, `gambar`) VALUES
(1, 'images/s1.jpg'),
(2, 'images/s2.jpg'),
(3, 'images/s3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `listgenres`
--

CREATE TABLE `listgenres` (
  `id` bigint(20) NOT NULL,
  `gambar_id` bigint(50) NOT NULL,
  `genrename` varchar(50) NOT NULL,
  `caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listgenres`
--

INSERT INTO `listgenres` (`id`, `gambar_id`, `genrename`, `caption`) VALUES
(1, 1, 'Fantasy', 'Fantasy novels are speculative fiction stories with imaginary characters set in imaginary universes with mythology, folklore and Magic.'),
(2, 2, 'Action', 'Exciting action sequences take priority and significant conflicts between characters are usually resolved with one\'s physical power.'),
(3, 3, 'Drama', 'Plot-driven stories focused on realistic characters experiencing human struggle.'),
(4, 1, 'Sci-fi', 'Imagined technological advancements settings which are currently unreal in the present day but could be invented by future\'s science.'),
(5, 2, 'Romance', 'Falling in love and struggling to progress towards—or maintain—a romantic relationship take priority...'),
(6, 3, 'Adventure', 'Whether aiming for a specific goal or just struggling to survive, the main character is thrust into unfamiliar situations or lands..');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `sectionones`
--

CREATE TABLE `sectionones` (
  `id` bigint(11) NOT NULL,
  `gambar_id` bigint(50) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sectionones`
--

INSERT INTO `sectionones` (`id`, `gambar_id`, `judul`, `caption`) VALUES
(1, 1, 'Shuumatsu Nani Shitemasu ka', 'The story follows Willem Kmetsch, the last surviving human, 500 years after the end of the world at the hands...'),
(2, 2, 'Touhou fanfiction', 'Touhou fiction, which includes both the original stories and the various fan works.'),
(3, 3, 'Fate Grand/Order fanfiction', 'fate grand ordere fanfiction stories,  stories include: Grand Ancestral Bloodlines, ...');

-- --------------------------------------------------------

--
-- Table structure for table `sosialmedia`
--

CREATE TABLE `sosialmedia` (
  `id` bigint(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `medialink` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosialmedia`
--

INSERT INTO `sosialmedia` (`id`, `logo`, `medialink`) VALUES
(1, 'fa fa-github', 'https://github.com/Mohizuki'),
(2, 'fa fa-instagram', 'https://www.instagram.com/crunchill/'),
(3, 'fa fa-steam', 'https://steamcommunity.com/id/mohizuki/');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `detailgenre`
--
ALTER TABLE `detailgenre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailnovel`
--
ALTER TABLE `detailnovel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listgenres`
--
ALTER TABLE `listgenres`
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
-- Indexes for table `sectionones`
--
ALTER TABLE `sectionones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
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
-- AUTO_INCREMENT for table `detailgenre`
--
ALTER TABLE `detailgenre`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detailnovel`
--
ALTER TABLE `detailnovel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listgenres`
--
ALTER TABLE `listgenres`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sectionones`
--
ALTER TABLE `sectionones`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
