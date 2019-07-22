-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 12:03 PM
-- Server version: 8.0.16
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BCR_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(61) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@admin1.com', '$2y$10$Cx/PUNbi.IcYado2x74SoO3dQCl7l4KIRkuj7HWl2DSNQoZSiObFa', '2019-07-01 07:28:59', '2019-07-01 07:28:59'),
(2, 'admin2', 'admin2@admin2.com', '$2y$10$2BE/R094zIJc1NOuXQMooOJ15fDfe1nz4Hl0rybeqoIkRGvsrfmQm', '2019-07-01 07:47:18', '2019-07-01 07:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_link`
--

CREATE TABLE `admin_link` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(10) NOT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `doctor_id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(2, 14, 'الرياضة الصباحية', '<p>بسم الله الرحمن الرحيم&nbsp;</p>\r\n\r\n<p>الرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحية.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>الرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحيةالرياضة الصباحية</p>', '7903239c4600ecb013009b14ab9603837fefd258.jpg', '2019-07-11 11:17:56', '2019-07-11 11:17:56'),
(3, 14, 'التثاؤب', '<p>التثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; ي</p>\r\n\r\n<p>التثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; ي</p>\r\n\r\n<p>التثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; يالتثاؤب منا لصفحات السيبرنم سيب&nbsp; ي</p>', '6e26fcb03121c72c49c464dbacb15f2099eeb59e.jpeg', '2019-07-11 11:46:05', '2019-07-11 11:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

CREATE TABLE `article_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`id`, `body`, `user_id`, `type`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'لا يمكنك', 1, 'user', 3, '2019-07-11 14:23:47', '2019-07-11 14:23:47'),
(2, 'سيبر', 1, 'user', 2, '2019-07-11 15:19:54', '2019-07-11 15:19:54'),
(3, 'لاسيبل', 1, 'user', 2, '2019-07-11 15:53:21', '2019-07-11 15:53:21'),
(4, 'لبي', 1, 'user', 3, '2019-07-13 16:24:26', '2019-07-13 16:24:26'),
(5, 'fghjfgj', 1, 'user', 2, '2019-07-15 07:37:17', '2019-07-15 07:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` bigint(20) NOT NULL,
  `country_id` int(10) DEFAULT NULL,
  `phone_number` bigint(20) NOT NULL,
  `hospital_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `password`, `email`, `job_id`, `country_id`, `phone_number`, `hospital_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'يوسف', 'احمد', '$2y$10$rcXubFtbSrLfdj5JXNO/Cut96qLQQ.HtBz7n.BziG/2zBPJoEG7P.', 'yousef@ahmad.com', 6, 56, 65128465, 'الشفاء', NULL, '2019-07-03 05:59:48', '2019-07-04 04:35:18'),
(8, 'عمر', 'عطاا', '$2y$10$B2qOaYtlnrnbGVG00QobgebFuXzCcGj0TuxNKIXe08QNWCMPdBOWa', 'omar@atta.com', 6, 13, 546198615, 'العودة', NULL, '2019-07-03 06:00:57', '2019-07-04 07:20:42'),
(9, 'وليد', 'حاتم', '$2y$10$L6ioY75hZ/p43XfETnzOJODTYufYLroYy1Bqcxa9Ja.taIDIhcVfS', 'waleed@waleed.com', 4, 16, 68513256, 'مشفى رفح', NULL, '2019-07-03 06:02:43', '2019-07-04 07:20:49'),
(10, 'رائد', 'ساري', '$2y$10$UAsekRJWjLWBq6KDaEXEFukVXzt/aaecRIq7tBYceZMZKwawZL2aq', 'raed@raed.com', 8, 21, 98562564, 'العودة', NULL, '2019-07-03 06:03:43', '2019-07-04 07:20:56'),
(12, 'ياسر', 'سعيد', '$2y$10$QTYNrCRqJ5.Fwv9eIedZ4eHroMr85uv6woWWKh0YASDr/xjmkIJOC', 'yaser@yaser.com', 2, 51, 8946525, 'العودة', NULL, '2019-07-03 06:44:26', '2019-07-03 06:44:26'),
(13, 'docror9', 'docror9', '$2y$10$61EVdS.6t5Zpw.5nCUMYYuM1wXxJuAQ9EW3Ddh/iO1J5m979Cha7W', 'docror9@docror9.com', 2, 8, 652398562, 'ssas', NULL, '2019-07-08 04:11:55', '2019-07-08 04:11:55'),
(14, 'doctor5', 'doctor5', '$2y$10$0mnJhlYcUpWdm3eh7lGmbewZS8XGDfJ6s0BHKw23mCflpoxiJm12K', 'doctor5@doctor5.com', 5, NULL, 89651845, 'awda', NULL, '2019-07-11 10:24:30', '2019-07-11 10:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'علاج', '<p>عندي مشكلة العطاس كل صباح بشكل هستيري !&nbsp;</p>\r\n\r\n<p>اي احد عنده معلومات عن الموضوع ؟</p>', '47ec3a0e8be429d90a28789a58de483625f12a27.jpg', '2019-07-11 09:28:00', '2019-07-11 09:28:00'),
(2, 1, 'اسفسارات', '<p>هل يوجد علاج حقيقي للصدفية</p>', 'e12a6f818a923f5821685765a1c2c61aa07ff0c0.png', '2019-07-11 09:59:31', '2019-07-11 09:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `body`, `user_id`, `type`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'يفضل عدم التعرض للهواء البارد بعد الاستيقاظ مباشرة', 1, 'user', 1, '2019-07-11 09:40:34', '2019-07-11 09:40:34'),
(2, 'عدم شرب الماء البارد', 1, 'user', 1, '2019-07-11 09:41:26', '2019-07-11 09:41:26'),
(3, 'لا يوجددددد', 1, 'user', 2, '2019-07-11 10:04:28', '2019-07-11 10:04:28'),
(5, 'يوجد بالاعشاب', 1, 'user', 2, '2019-07-11 10:04:43', '2019-07-11 10:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `report` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `report`, `created_at`, `updated_at`) VALUES
(1, 'مشكلةمشكلةمشكلةمشكلة', '2019-02-24 11:44:44', '2019-02-24 11:44:44'),
(2, 'مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 ', '2019-02-24 12:22:02', '2019-02-24 12:22:02'),
(3, 'مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 مشكلة تقرير 2019 ', '2019-02-26 11:12:34', '2019-02-26 11:12:34'),
(7, 'هنا مسيبرنتس يبرةئءهؤرتسنيبرت الرحال س', '2019-07-04 16:26:51', '2019-07-04 16:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@user1.com', NULL, '$2y$10$dEuiBVwAryaLfZJGlPade.7pe2yCFpxiVMZJI4jCvawY5DpK0L6fy', 'hxsQmg9gSyg3jAtVpEIcg6RchRPgPDx8yRhcYv8RlalwoBj7jYHWOO8ff7Mv', '2019-07-11 08:50:12', '2019-07-11 08:50:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_link`
--
ALTER TABLE `admin_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_title_unique` (`title`);

--
-- Indexes for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_comments_article_id_foreign` (`article_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD KEY `country` (`country_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_link`
--
ALTER TABLE `admin_link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD CONSTRAINT `article_comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `country` FOREIGN KEY (`country_id`) REFERENCES `apps_countries` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
