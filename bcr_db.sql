-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2019 at 08:52 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(61) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$2XMDDkdxrOXMbsmRu0z.xOe5JUs0KT0o98SmvUrPMOFnkLFz.0PCG', 'kWNvsP629CJWTtwpeygFkplZOFdflobE3VZXeAGZBgX4ll4XOoK5hJjsvUDX', '2019-07-20 17:57:34', '2019-07-20 17:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `admin_link`
--

DROP TABLE IF EXISTS `admin_link`;
CREATE TABLE IF NOT EXISTS `admin_link` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

DROP TABLE IF EXISTS `apps_countries`;
CREATE TABLE IF NOT EXISTS `apps_countries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `doctor_id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(2, 4, 'اسفسارات', '<p><strong>اسفساراتاسفساراتاسفساراتاسفسارات</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>اسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفساراتاسفسارات<em>اسفساراتاسفساراتاسفساراتاسفسارات</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><em>fdgvsdfv</em></p>\r\n\r\n<p><em>fdsvsdfvsdfv</em></p>\r\n</blockquote>', '618fdc6ea64edb22bec9baf201de18025eba1ed2.jpg', '2019-07-23 22:36:05', '2019-07-23 22:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

DROP TABLE IF EXISTS `article_comments`;
CREATE TABLE IF NOT EXISTS `article_comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_comments_article_id_foreign` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`id`, `body`, `user_id`, `type`, `article_id`, `created_at`, `updated_at`) VALUES
(10, 'dfghdf', 1, 'user', 2, '2019-08-13 09:34:29', '2019-08-13 09:34:29'),
(11, 'dfghdfgh', 1, 'user', 2, '2019-08-13 09:34:33', '2019-08-13 09:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `hospital_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `doctors_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `password`, `email`, `section`, `phone_number`, `hospital_name`, `image`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'doctor1', 'doctor1', '$2y$10$G0NJaYzyW6lXo6hPYfXBYOvof5hoJnY3oFr1ELrc53HTS2nQ7iAkO', 'doctor1@doctor1.com', 'جلدية', 8562516123, 'awda', '', '', 'hUpdzFtk5cmuw3Eq45wlXo2W1sH5OM1vCMNNtbuXfqn3MrFo01YIsgnBltFQ', '2019-07-23 21:50:19', '2019-08-13 11:15:00'),
(2, 'احمد', 'ياسر', '$2y$10$NCVkF4l8k7SDlDh/Dn4vXOzv8.bLCrgY6r802035Tgezd3QPI2hkC', 'ahmad@ahmad.com', 'عام', 8965456, 'العودة', '', '', 'N0sMmdlv5egz2fXlTh19fh9wVM04Gz247xUWVFlDBRwxgbs6F7bTY3MH4P4U', '2019-07-29 17:55:07', '2019-07-29 17:55:07'),
(3, 'test', 'test', '$2y$10$2TRt1fIxbozgL1Nr1cDlo.qjv9eunPjjvuV.80cOL7lnDfMqLYQ2K', 'test@test.com', 'عيون', 54216845312, 'الشفاء', '', '', '0shxmzApms3uoJ646Js7sIlenzNQi7uPOwtROL1k9979NIV0lnNj4P5Qq6AM', '2019-08-05 15:41:59', '2019-08-05 15:41:59'),
(4, 'test2sssssssssss', 'test2sssssssssssssss', '$2y$10$ypeSxam5CB3HOrOfgFR0DOCAIdsN9.9pTY4yIzS.rBTSnwkRZEhIG', 'test2@test2.com', 'ادمان', 5421546312, 'الشفاء', '62de4ffa073e9b1866588627395ba6b42fb54f60.png', 'ssssssssssssssssssssss', '204DhyOiumOrolxkksQwI5C3FV0P7pPwTtu7w7eg7j7gaGfbfSQEieKlT088', '2019-08-05 15:44:14', '2019-08-15 13:00:46'),
(5, 'Kib', 'Hansonn', '$2y$10$VaKIfRyKw.dSJqvr3HU6Kuwcd/iuzbKS5ID51AYdWAwWUKjyYowra', 'Kib@Kib.com', 'جلدية', 546294865, 'العودة', '', '', NULL, '2019-08-13 11:09:48', '2019-08-13 11:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

DROP TABLE IF EXISTS `link`;
CREATE TABLE IF NOT EXISTS `link` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_19_101023_create_admins_table', 1),
(4, '2019_02_19_124048_creat_link_table', 1),
(5, '2019_02_19_124103_creat_admin_link_table', 1),
(6, '2019_02_20_074304_create_patients_table', 1),
(7, '2019_07_19_101531_create_doctors_table', 1),
(8, '2019_09_05_071352_create_articles_table', 1),
(9, '2019_09_13_232453_create_posts_table', 1),
(10, '2019_09_29_153006_create_article_comments_table', 1),
(11, '2019_09_29_153006_create_post_comments_table', 1),
(12, '2020_02_20_074304_create_apps_countries_table', 1),
(13, '2021_02_20_074304_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'فراس وحياته المهنية', '<p>فراس وحياته المهنية&nbsp;فراس وحياته المهنية&nbsp;فراس وحياته المهنية&nbsp;فراس وحياته المهنية&nbsp;</p>\r\n\r\n<p>فراس وحياته المهنية&nbsp;فراس وحياته المهنية&nbsp;فراس وحياته المهنية&nbsp;</p>\r\n\r\n<p>فراس وحياته المهنية&nbsp;فراس وحياته المهنية&nbsp;</p>', 'c55258f4a65c717a9e0e46e3aebd5f9f1917e5b8.jpeg', '2019-07-28 10:39:07', '2019-07-28 10:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

DROP TABLE IF EXISTS `post_comments`;
CREATE TABLE IF NOT EXISTS `post_comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_comments_post_id_foreign` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `body`, `user_id`, `type`, `post_id`, `created_at`, `updated_at`) VALUES
(2, 'dsfs', 1, 'user', 1, '2019-08-13 12:23:57', '2019-08-13 12:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `report` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `report`, `created_at`, `updated_at`) VALUES
(1, 'خطا خطا', '2019-08-05 19:55:15', '2019-08-05 19:55:15'),
(2, 'شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى \r\nشكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى شكوى', '2019-08-07 03:51:44', '2019-08-07 03:51:44'),
(3, 'kugjhfngh', '2019-08-07 05:13:19', '2019-08-07 05:13:19'),
(4, 'dfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfghdfgh', '2019-08-13 09:41:19', '2019-08-13 09:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1سسسسسسسسس', 'user1@user1.com', '3117d38c54acfee28d4f9e845b2c560af101f8a1.png', NULL, '$2y$10$XdmVyl/.uMUQq.1mwNj/xuxtMio2Vv6PUJayJVLAcWsEhfHlL/.AC', 'serRGgIeEjtzPJkwGtwsl52BuB8fQRpnOPGb9BvdqKxoh5bDChZeVwVmcjZp', '2019-07-23 19:40:23', '2019-08-15 12:44:20'),
(2, 'user2', 'user2@user2.com', '', NULL, '$2y$10$Kqr4qjDtZINNtf6hBC5FE.JBaDIXWf7AoXIVHF1irquJ5tx6UEIPO', 'kf13y8zKIvvsJj4UlHAcRByed1V61Bf5mIiK59eLXguHic3ewwAxBy2gfU4V', '2019-08-04 12:01:55', '2019-08-04 12:01:55'),
(3, 'user3', 'user3@user3.com', '', NULL, '$2y$10$51SI48/o7nd0VWF7fUBM2e4tbstkPXUhUWJS5CZB1eYpHgHb1/7N.', '04BvtheRDfHvi1PHT8NjKK0YvWbtYWrHJL51XQloI4jDGhXlBrSh763CpcMH', '2019-08-05 08:53:15', '2019-08-05 08:53:15'),
(5, 'user13', 'user13@user13.com', '', NULL, '$2y$10$s8tbrVEIaJ4aRx.xOS8sW.mijfByWKm.tMBMdL6g7CwbfJLGOmKuC', 'lILH8Cz1HM2SMQwU6dVqbxTNWkTUbIWqA6XpKsJZ14WU4jGNMZg9KQrVLy42', '2019-08-07 03:43:40', '2019-08-07 03:43:40');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD CONSTRAINT `article_comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
