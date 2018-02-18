-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mecmul`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'mec10.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_id` int(11) NOT NULL,
  `about_paragraph` text COLLATE utf8_unicode_ci NOT NULL,
  `about_left` text COLLATE utf8_unicode_ci NOT NULL,
  `about_right` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `about_id`, `about_paragraph`, `about_left`, `about_right`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'MEC Technical Services was founded way back in 2008 by Middle East Development LLC to provide its management business with its own FM services. With the vast experience in both cleaning services, FM services and management skills, it has grown into a professional cleaning services, catering to both residential and commercial markets, satisfying its clients with its sound and effective professional skills. Our continuous training and certifications to enhance its technical skills, cleaning skills, safety and management give us the credibility to proudly ensure customer satisfaction. MEC Tech Services has developed a system on how we can effectively serve the clients’ demand for thorough cleaning, keeping in mind environmental protection. We have a great eye for detail in choosing our products and do not allow harmful chemicals which may harm the people inside your home and in the work area.', 'training and certification. We exist to attract and maintain customers. When we adhere to this standard, everything else will fall into place. Our services will exceed the expectations of our customers.\r\n', 'training and certification. We exist to attract and maintain customers. When we adhere to this standard, everything else will fall into place. Our services will exceed the expectations of our customers.\r\n', 'en', NULL, '2017-07-25 07:31:13'),
(2, 1, 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع ', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع ', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع ', 'ar', NULL, '2017-07-25 07:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `add_services`
--

CREATE TABLE `add_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_services`
--

INSERT INTO `add_services` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'mec2.jpg', '2017-07-25 11:20:00', '2017-07-25 11:20:00'),
(2, '01.png', '2017-07-31 06:39:56', '2017-07-31 06:39:56'),
(3, '03.jpg', '2017-07-31 06:41:39', '2017-07-31 06:41:39'),
(4, '4.jpg', '2017-07-31 06:42:38', '2017-07-31 06:42:38'),
(5, '01.jpg', '2017-07-31 06:43:12', '2017-07-31 06:43:12'),
(6, 'slider.jpg', '2017-07-31 06:43:37', '2017-07-31 06:43:37'),
(7, '03.jpg', '2017-07-31 06:43:55', '2017-07-31 06:43:55'),
(8, 'mec8.jpg', '2017-07-31 06:44:40', '2017-07-31 06:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `add_service_details`
--

CREATE TABLE `add_service_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_id` int(11) NOT NULL,
  `service_title` text COLLATE utf8_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_service_details`
--

INSERT INTO `add_service_details` (`id`, `about_id`, `service_title`, `service_description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Housekeeping services for hotels', 'Motel / Budget hotels and Service apartments', 'en', NULL, '2017-07-25 11:33:06'),
(2, 1, 'ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسوم', 'ar', NULL, NULL),
(3, 2, 'Commercial cleaning', ' It is a long established fact that a reader will be distracted ', 'en', NULL, NULL),
(4, 2, 'ريم إيبسوم ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم', 'ar', NULL, NULL),
(5, 3, ' Building cleaning ', ' It is a long established fact that a reader will be distracted ', 'en', NULL, NULL),
(6, 3, 'ريم إيبسوم ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم', 'ar', NULL, NULL),
(7, 4, 'Building cleaning', 'Motel / Budget hotels and Service apartments', 'en', NULL, NULL),
(8, 4, 'ريم إيبسوم ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم', 'ar', NULL, NULL),
(9, 5, 'Commercial cleaning', ' Crystallization of marble floor ', 'en', NULL, NULL),
(10, 5, 'ريم إيبسوم ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم', 'ar', NULL, NULL),
(11, 6, 'Commercial cleaning', 'It is a long established fact that a reader will be distracted', 'en', NULL, NULL),
(12, 6, 'ريم إيبسوم ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم', 'ar', NULL, NULL),
(13, 7, 'Housekeeping services for hotels', 'It is a long established fact that a reader will be distracted', 'en', NULL, NULL),
(14, 7, 'ريم إيبسوم ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسوم', 'ar', NULL, NULL),
(15, 8, 'Residential cleaning', 'Crystallization of marble floor', 'en', NULL, NULL),
(16, 8, 'ريم إيبسوم ريم إيبسوم', 'ريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسومريم إيبسوم ريم إيبسومريم إيبسوم', 'ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients_sliders`
--

CREATE TABLE `clients_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients_sliders`
--

INSERT INTO `clients_sliders` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(2, 'logo-1.png', '2017-07-24 18:05:01', '2017-07-24 18:05:01'),
(3, 'logo-2.png', '2017-07-24 18:05:08', '2017-07-24 18:05:08'),
(4, 'logo-3.png', '2017-07-24 18:05:14', '2017-07-24 18:05:14'),
(5, 'logo-4.png', '2017-07-24 18:05:20', '2017-07-24 18:05:20'),
(6, 'logo-3.png', '2017-07-31 07:30:33', '2017-07-31 07:30:33'),
(7, 'logo-3.png', '2017-07-31 07:33:37', '2017-07-31 07:33:37'),
(8, 'logo-4.png', '2017-07-31 07:33:56', '2017-07-31 07:33:56'),
(9, 'logo-2.png', '2017-07-31 07:34:22', '2017-07-31 07:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `sales_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `whatsup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `sales_number`, `whatsup`, `email`, `address`, `icon`, `created_at`, `updated_at`) VALUES
(1, ' +971543117003', ' +971543117003', 'info@mec.com', '9232- Dubai - UAE ', '', NULL, '2017-07-26 06:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL),
(2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq_details`
--

CREATE TABLE `faq_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_it` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq_details`
--

INSERT INTO `faq_details` (`id`, `master_it`, `question`, `answer`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Booking faq and conditions ', '\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,\r\n', 'en', NULL, NULL),
(2, 1, 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. ', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم. ', 'ar', NULL, NULL),
(5, 2, ' payment faq ', '\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,\r\n', 'en', NULL, NULL),
(6, 2, ' لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. ', ' لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.  لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. ', 'ar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'mec4.jpg', '2017-07-25 12:15:43', '2017-07-25 12:15:43'),
(2, 'mec7.JPG', '2017-07-25 12:15:49', '2017-07-25 12:15:49'),
(5, 'mec1.jpg', '2017-07-25 12:16:02', '2017-07-25 12:16:02'),
(6, 'Yacht house keeping.jpg', '2017-07-25 12:16:14', '2017-07-25 12:16:14'),
(7, 'Yacht house keeping2.jpg', '2017-07-25 12:16:18', '2017-07-25 12:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `home_aboutas`
--

CREATE TABLE `home_aboutas` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_aboutas`
--

INSERT INTO `home_aboutas` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'mec10.jpg', NULL, '2017-07-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone_number`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Homsa', '01226597576', 'homsa24@gmail.com', 'Proud MEC service specialists, professionally trai...Proud MEC service specialists, professionally trai...Proud MEC service specialists, professionally trai...', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_07_24_113624_create_settings_table', 2),
('2017_07_24_120423_create_social_links_table', 3),
('2017_07_24_121541_create_sliders_table', 4),
('2017_07_24_125817_create_home_aboutas_table', 5),
('2017_07_24_125842_create_home_abouta_details_table', 5),
('2017_07_24_131239_create_home_abouta_details_table', 6),
('2017_07_24_152903_create_clients_sliders_table', 7),
('2017_07_25_074651_create_subscribers_table', 8),
('2017_07_25_083028_create_abouts_table', 9),
('2017_07_25_083114_create_about_details_table', 9),
('2017_07_25_110048_create_services_table', 10),
('2017_07_25_115323_create_add_services_table', 11),
('2017_07_25_115434_create_add_service_details_table', 11),
('2017_07_25_133458_create_galleries_table', 12),
('2017_07_25_134626_create_faqs_table', 12),
('2017_07_26_073405_create_contacts_table', 13),
('2017_07_26_080054_create_messages_table', 14),
('2017_07_31_100529_create_faqs_table', 15),
('2017_07_31_100622_create_faq_details_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_id` int(11) NOT NULL,
  `our_services` text COLLATE utf8_unicode_ci NOT NULL,
  `our_mission` text COLLATE utf8_unicode_ci NOT NULL,
  `our_vision` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `about_id`, `our_services`, `our_mission`, `our_vision`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ', 'en', NULL, '2017-07-25 09:44:26'),
(2, 1, 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، لوريم إيبسوم(Loreا النص، ', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، ', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، ', 'ar', NULL, '2017-07-25 09:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_name_search` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_language` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `site_name`, `site_url`, `site_name_search`, `site_mail`, `site_language`) VALUES
(1, NULL, '2017-08-01 05:50:02', 'Mecmul', 'http://localhost/mec/', 'Mec For Technical Services', 'arabea169@gmail.com', 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(2, 'mec1.jpg', '2017-07-24 10:26:22', '2017-07-24 10:26:22'),
(8, 'mec2.jpg', '2017-07-31 07:33:04', '2017-07-31 07:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `gmail` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `twitter`, `gmail`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'arabea169@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ahmd ', 'arabea169@gmail.com', '$2y$10$ZiHfP5Grw/2LaW4IEW97mubQuqlLIfVJAHzPh/J8UaFew020ZkJkm', NULL, '2017-07-26 06:29:39', '2017-07-26 06:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `__home_aboutas`
--

CREATE TABLE `__home_aboutas` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_id` int(11) NOT NULL,
  `desc` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `__home_aboutas`
--

INSERT INTO `__home_aboutas` (`id`, `about_id`, `desc`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, ' MEC Technical Services was founded way back in 2008 by Middle East Development LLC to provide its management business with its own FM services. ', 'en', NULL, '2017-07-25 06:21:50'),
(2, 1, '                                                                                                                . خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي فيلوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النش بشكل عشوائي أخذتها من نص، \n                        ', 'ar', NULL, '2017-07-25 06:21:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_services`
--
ALTER TABLE `add_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_service_details`
--
ALTER TABLE `add_service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_sliders`
--
ALTER TABLE `clients_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_details`
--
ALTER TABLE `faq_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_aboutas`
--
ALTER TABLE `home_aboutas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `__home_aboutas`
--
ALTER TABLE `__home_aboutas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `add_services`
--
ALTER TABLE `add_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `add_service_details`
--
ALTER TABLE `add_service_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `clients_sliders`
--
ALTER TABLE `clients_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faq_details`
--
ALTER TABLE `faq_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `home_aboutas`
--
ALTER TABLE `home_aboutas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `__home_aboutas`
--
ALTER TABLE `__home_aboutas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
