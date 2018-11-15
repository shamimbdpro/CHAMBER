-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2018 at 04:47 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easternhardwareb_bdchamber`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutpages`
--

CREATE TABLE `aboutpages` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_ban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutpages`
--

INSERT INTO `aboutpages` (`id`, `about_ban`, `ban_status`, `about_des`, `created_at`, `updated_at`) VALUES
(1, 'aboutban_1540185833.jpg', '1', '<p>In last three decades, Canada became the choicest destination for \r\nBangladeshi entrepreneurs, investors, professionals as well as students \r\nbecause of the diversity and the prospect Canada holds for new \r\nimmigrants in every sector. With Bangladeshi migrants over 150,000, \r\nBangladeshi community in Canada has also diversified into vivid business\r\n contributing to the economic stability and business growth in different\r\n provinces and territories of Canada. Bangladesh Business Chamber of \r\nCanada (BBCC) has merged to boost the atmosphere for Bangladeshi \r\nentrepreneur wish to invest in Canadian market or Canadian corporations \r\nwish to contribute to emerging Bangladeshi market. BBCC is the network \r\nor rather a robust platform for business community to invest ither in \r\nCanada or Bangladesh.</p>\r\n						  <br><p>In last three decades, Canada became the choicest \r\ndestination for Bangladeshi entrepreneurs, investors, professionals as \r\nwell as students because of the diversity and the prospect Canada holds \r\nfor new immigrants in every sector. With Bangladeshi migrants over \r\n150,000, Bangladeshi community in Canada has also diversified into vivid\r\n business contributing to the economic stability and business growth in \r\ndifferent provinces and territories of Canada. Bangladesh Business \r\nChamber of Canada (BBCC) has merged to boost the atmosphere for \r\nBangladeshi entrepreneur wish to invest in Canadian market or Canadian \r\ncorporations wish to contribute to emerging Bangladeshi market. BBCC is \r\nthe network or rather a robust platform for business community to invest\r\n ither in Canada or Bangladesh.</p>\r\n						  <br><p>In last three decades, Canada became the choicest \r\ndestination for Bangladeshi entrepreneurs, investors, professionals as \r\nwell as students because of the diversity and the prospect Canada holds \r\nfor new immigrants in every sector. With Bangladeshi migrants over \r\n150,000, Bangladeshi community in Canada has also diversified into vivid\r\n business contributing to the economic stability and business growth in \r\ndifferent provinces and territories of Canada. Bangladesh Business \r\nChamber of Canada (BBCC) has merged to boost the atmosphere for \r\nBangladeshi entrepreneur wish to invest in Canadian market or Canadian \r\ncorporations wish to contribute to emerging Bangladeshi market. BBCC is \r\nthe network or rather a robust platform for business community to invest\r\n ither in Canada or Bangladesh.</p>', '2018-10-22 05:23:53', '2018-10-22 05:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `contact_name`, `contact_email`, `contact_message`, `created_at`, `updated_at`) VALUES
(4, 'Md. Shamim Hasan', 'md.shamimtpi@gmail.com', 'Hi', '2018-10-20 05:16:17', NULL),
(5, 'Md. Shamim Hasan', 'md.shamimtpi@gmail.com', 'Hi...How are you', '2018-10-20 05:17:11', NULL),
(6, 'Example22', 'example@gmaill.com', 'This is test23', '2018-10-20 05:37:53', '2018-10-20 05:52:08'),
(7, 'Md. Shamim Hasan', 'md.shamimtpi@gmail.com', ' Bangladesh and daughter of Bangabandhu. On the 17th of September, at  the cordial reception in Montreal, Canada,  a Crystal  Crest of Honor handed over to the Prime Minister Sheikh Hasina by the  H.M. Iqbal, Chamber’s President, CEO of Premium Sweets', '2018-10-20 06:04:29', NULL),
(8, 'Md. Shamim Hasan', 'md.shamimtpi@gmail.com', ' Bangladesh and daughter of Bangabandhu. On the 17th of September, at  the cordial reception in Montreal, Canada,  a Crystal  Crest of Honor handed over to the Prime Minister Sheikh Hasina by the  H.M. Iqbal, Chamber’s President, CEO of Premium Sweets Bangladesh and daughter of Bangabandhu. On the 17th of September, at  the cordial reception in Montreal, Canada,  a Crystal  Crest of Honor handed over to the Prime Minister Sheikh Hasina by the  H.M. Iqbal, Chamber’s President, CEO of Premium Sweets Bangladesh and daughter of Bangabandhu. On the 17th of September, at  the cordial reception in Montreal, Canada,  a Crystal  Crest of Honor handed over to the Prime Minister Sheikh Hasina by the  H.M. Iqbal, Chamber’s President, CEO of Premium Sweets', '2018-10-20 06:06:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `director_id` int(10) UNSIGNED NOT NULL,
  `director_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_message` longtext COLLATE utf8mb4_unicode_ci,
  `director_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`director_id`, `director_name`, `director_title`, `director_email`, `director_phone`, `director_message`, `director_img`, `created_at`, `updated_at`) VALUES
(25, 'Md. Samsujamman', 'Director', 'way2alamin@yahoo.com', '8801920730670', 'From the President’s Desk As the great summer of 2016 bids adieu and ushers a cool setting of the autumn, Bangladesh Business Chamber of Canada (BBCC) is going to hold its 1st Annual General Meeting (AGM) in Toronto, Canada on the 26th August 2016. The occasion will also call for an election to name the new office bearers who will take responsibility of the BBCC for the term 2016-17 and 2017-18. The onus is on me BBCC’s on \r\nFrom the President’s Desk As the great summer of 2016 bids adieu and ushers a cool setting of the autumn, Bangladesh Business Chamber of Canada (BBCC) is going to hold its 1st Annual General Meeting (AGM) in Toronto, Canada on the 26th August 2016. The occasion will also call for an election to name the new office bearers who will take responsibility of the BBCC for the term 2016-17 and 2017-18. The onus is on me BBCC’s on', 'updatedirector_1_1539599491.jpeg', '2018-10-15 04:32:06', '2018-10-15 04:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `event_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_des`, `event_date`, `event_time`, `event_photo`, `event_status`, `created_at`, `updated_at`) VALUES
(23, 'Exposition of lighting products from Oct 25', '<p>If you would like to keep all the information about the forthcoming \r\nconference on one page, then Conference template is the tool for you. \r\nIndeed, it is a free one-page website template which allows you to do \r\njust that. No need to be browsing several pages to find the time and \r\ndate along with a few extra words about the big day. For your attendees,\r\n you can have it all beautifully ordered and presented on one page. They\r\n can quickly check what it is all about and whether or not it fits their\r\n schedule.</p><p>Conference is a popular <a href=\"https://colorlib.com/wp/free-bootstrap-blog-templates/\" data-wpel-link=\"internal\">Bootstrap HTML5 template</a>\r\n which comes as a free or premium version. No need for you to be \r\nbuilding and designing a page all on your own. Pick Conference and start\r\n seeing results in the shortest amount of time possible. \r\nCall-to-actions, speakers, registration, pricing, event schedule and \r\nmore, Conference template has it all.</p>', '2018-10-10', '12:05 AM', 'Event_23_1539679543.jpg', '1', '2018-10-16 08:45:43', '2018-10-16 08:45:44'),
(24, 'Exposition of lighting products from Oct 25', '<p>Six concurrent international exhibitions focusing on power plants, \r\nsolar energy, lighting, real estate and construction and its safety and \r\nsecurity are scheduled to run for three days starting on October 25 at \r\nInternational Convention City Bashundhara in Dhaka.</p>\r\n<p>Organiser CEMS Global aims to create a platform for entrepreneurs and\r\n consumers to build productive business networks, increase connectivity \r\nwith local government agencies and be acquainted with the latest \r\ntechnologies and services.</p>\r\n<p>“These expos help Bangladesh create brands in the global market as \r\nwell as build up a bridge between manufacturers and clients,” said \r\nMeherun N Islam, president and group managing director of CEMS Global, \r\nyesterday.</p>\r\n<p>Investors and traders of 220 organisations from 19 countries \r\nincluding Russia, Japan, the US, Ukraine, Singapore, China, England, \r\nMalaysia, the United Arab Emirates, South Korea, Italy, Germany and \r\nTurkey are scheduled to take part in the events.</p>\r\n<p>Addressing a press conference at the National Press Club, Islam said \r\nDhaka International Lighting Expo 2018 was the first of its kind, \r\nhighlighting the significance of associated materials in the housing \r\nsector.</p>', '2018-10-11', '04:06 AM', 'Event_24_1539679572.jpg', '1', '2018-10-16 08:46:12', '2018-10-16 08:46:13'),
(25, 'Exposition of lighting products from Oct 25', '<p>Six concurrent international exhibitions focusing on power plants, \r\nsolar energy, lighting, real estate and construction and its safety and \r\nsecurity are scheduled to run for three days starting on October 25 at \r\nInternational Convention City Bashundhara in Dhaka.</p>\r\n<p>Organiser CEMS Global aims to create a platform for entrepreneurs and\r\n consumers to build productive business networks, increase connectivity \r\nwith local government agencies and be acquainted with the latest \r\ntechnologies and services.</p>\r\n<p>“These expos help Bangladesh create brands in the global market as \r\nwell as build up a bridge between manufacturers and clients,” said \r\nMeherun N Islam, president and group managing director of CEMS Global, \r\nyesterday.</p>\r\n<p>Investors and traders of 220 organisations from 19 countries \r\nincluding Russia, Japan, the US, Ukraine, Singapore, China, England, \r\nMalaysia, the United Arab Emirates, South Korea, Italy, Germany and \r\nTurkey are scheduled to take part in the events.</p>\r\n<p>Addressing a press conference at the National Press Club, Islam said \r\nDhaka International Lighting Expo 2018 was the first of its kind, \r\nhighlighting the significance of associated materials in the housing \r\nsector.</p>', '2018-04-05', '04:56 AM', 'Event_25_1539679595.jpg', '1', '2018-10-16 08:46:34', '2018-10-16 08:46:35'),
(26, 'Exposition of lighting products from Oct 25', '<p>Six concurrent international exhibitions focusing on power plants, \r\nsolar energy, lighting, real estate and construction and its safety and \r\nsecurity are scheduled to run for three days starting on October 25 at \r\nInternational Convention City Bashundhara in Dhaka.</p>\r\n<p>Organiser CEMS Global aims to create a platform for entrepreneurs and\r\n consumers to build productive business networks, increase connectivity \r\nwith local government agencies and be acquainted with the latest \r\ntechnologies and services.</p>\r\n<p><b>“These expos help Bangladesh create</b> brands in the global market as \r\nwell as build up a bridge between manufacturers and clients,” said \r\nMeherun N Islam, president and group managing director of CEMS Global, \r\nyesterday.</p>\r\n<p>Investors and traders of 220 organisations from 19 countries \r\nincluding Russia, Japan, the US, Ukraine, Singapore, China, England, \r\nMalaysia, the United Arab Emirates, South Korea, Italy, Germany and \r\nTurkey are scheduled to take part in the events.</p>\r\n<p>Addressing a press conference at the National Press Club, Islam said \r\nDhaka International Lighting Expo 2018 was the first of its kind, \r\nhighlighting the significance of associated materials in the housing \r\nsector.</p>', '2018-10-11', '08:09 AM', 'Event_26_1539679620.jpg', '1', '2018-10-16 08:47:00', '2018-10-16 08:47:00'),
(27, 'Exposition of lighting products from Oct 25', '<p>Six concurrent international exhibitions focusing on power plants, \r\nsolar energy, lighting, real estate and construction and its safety and \r\nsecurity are scheduled to run for three days starting on October 25 at \r\nInternational Convention City Bashundhara in Dhaka.</p>\r\n<p>Organiser CEMS Global aims to create a platform for entrepreneurs and\r\n consumers to build productive business networks, increase connectivity \r\nwith local government agencies and be acquainted with the latest \r\ntechnologies and services.</p>\r\n<p>“These expos help Bangladesh create brands in the global market as \r\nwell as build up a bridge between manufacturers and clients,” said \r\nMeherun N Islam, president and group managing director of CEMS Global, \r\nyesterday.</p>\r\n<p>Investors and traders of 220 organisations from 19 countries \r\nincluding Russia, Japan, the US, Ukraine, Singapore, China, England, \r\nMalaysia, the United Arab Emirates, South Korea, Italy, Germany and \r\nTurkey are scheduled to take part in the events.</p>\r\n<p>Addressing a press conference at the National Press Club, Islam said \r\nDhaka International Lighting Expo 2018 was the first of its kind, \r\nhighlighting the significance of associated materials in the housing \r\nsector.</p>', '2018-10-04', '08:56 PM', 'Event_27_1539679640.jpg', '1', '2018-10-16 08:47:20', '2018-10-16 08:47:21'),
(28, 'Exposition of lighting products from Oct 25', '<p>Six concurrent international exhibitions focusing on power plants, \r\nsolar energy, lighting, real estate and construction and its safety and \r\nsecurity are scheduled to run for three days starting on October 25 at \r\nInternational Convention City Bashundhara in Dhaka.</p>\r\n<p>Organiser CEMS Global aims to create a platform for entrepreneurs and\r\n consumers to build productive business networks, increase connectivity \r\nwith local government agencies and be acquainted with the latest \r\ntechnologies and services.</p>\r\n<p>“These expos help Bangladesh create brands in the global market as \r\nwell as build up a bridge between manufacturers and clients,” said \r\nMeherun N Islam, president and group managing director of CEMS Global, \r\nyesterday.</p>\r\n<p>Investors and traders of 220 organisations from 19 countries \r\nincluding Russia, Japan, the US, Ukraine, Singapore, China, England, \r\nMalaysia, the United Arab Emirates, South Korea, Italy, Germany and \r\nTurkey are scheduled to take part in the events.</p>\r\n<p>Addressing a press conference at the National Press Club, Islam said \r\nDhaka International Lighting Expo 2018 was the first of its kind, \r\nhighlighting the significance of associated materials in the housing \r\nsector.</p>', '2018-10-04', '04:06 PM', 'Event_28_1539679711.jpg', '1', '2018-10-16 08:48:31', '2018-10-16 08:48:32'),
(29, 'Exposition of lighting products from Oct 25', '<p>Six concurrent international exhibitions focusing on power plants, \r\nsolar energy, lighting, real estate and construction and its safety and \r\nsecurity are scheduled to run for three days starting on October 25 at \r\nInternational Convention City Bashundhara in Dhaka.</p>\r\n<p>Organiser CEMS Global aims to create a platform for entrepreneurs and\r\n consumers to build productive business networks, increase connectivity \r\nwith local government agencies and be acquainted with the latest \r\ntechnologies and services.</p>\r\n<p>“These expos help Bangladesh create brands in the global market as \r\nwell as build up a bridge between manufacturers and clients,” said \r\nMeherun N Islam, president and group managing director of CEMS Global, \r\nyesterday.</p>\r\n<p>Investors and traders of 220 organisations from 19 countries \r\nincluding Russia, Japan, the US, Ukraine, Singapore, China, England, \r\nMalaysia, the United Arab Emirates, South Korea, Italy, Germany and \r\nTurkey are scheduled to take part in the events.</p>\r\n<p>Addressing a press conference at the National Press Club, Islam said \r\nDhaka International Lighting Expo 2018 was the first of its kind, \r\nhighlighting the significance of associated materials in the housing \r\nsector.</p>', '2018-10-11', '03:46 AM', 'updateevent1_1539688875.jpg', '1', '2018-10-16 11:21:15', '2018-10-16 11:21:15'),
(30, 'Exposition of lighting products from Oct 25', '<p>Six concurrent international exhibitions focusing on power plants, \r\nsolar energy, lighting, real estate and construction and its safety and \r\nsecurity are scheduled to run for three days starting on October 25 at \r\nInternational Convention City Bashundhara in Dhaka.</p>\r\n<p>Organiser CEMS Global aims to create a platform for entrepreneurs and\r\n consumers to build productive business networks, increase connectivity \r\nwith local government agencies and be acquainted with the latest \r\ntechnologies and services.</p>\r\n<p>“These expos help Bangladesh create brands in the global market as \r\nwell as build up a bridge between manufacturers and clients,” said \r\nMeherun N Islam, president and group managing director of CEMS Global, \r\nyesterday.</p>\r\n<p>Investors and traders of 220 organisations from 19 countries \r\nincluding Russia, Japan, the US, Ukraine, Singapore, China, England, \r\nMalaysia, the United Arab Emirates, South Korea, Italy, Germany and \r\nTurkey are scheduled to take part in the events.</p>\r\n<p>Addressing a press conference at the National Press Club, Islam said \r\nDhaka International Lighting Expo 2018 was the first of its kind, \r\nhighlighting the significance of associated materials in the housing \r\nsector.</p>', '2018-10-04', '02:34 AM', 'updateevent1_1539688855.jpg', '1', '2018-10-23 06:33:14', '2018-10-23 06:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `gallerycategories`
--

CREATE TABLE `gallerycategories` (
  `gallerycat_id` int(10) UNSIGNED NOT NULL,
  `gallerycat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallerycat_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallerycategories`
--

INSERT INTO `gallerycategories` (`gallerycat_id`, `gallerycat_name`, `gallerycat_img`, `created_at`, `updated_at`) VALUES
(16, 'BCCB Get-togetheR', 'updatecatimg_1_1539768098.jpg', '2018-10-17 09:21:38', '2018-10-17 09:21:39'),
(17, 'BCCB Get-together1', 'updatecatimg_1_1539768046.jpg', '2018-10-17 09:20:46', '2018-10-17 09:20:47'),
(18, '2018 farewel image', 'updatecatimg_1_1539768084.jpg', '2018-10-17 09:21:31', '2018-10-17 09:21:31'),
(22, '2018 farewel image', 'catimg_22_1539768107.jpg', '2018-10-17 09:21:47', '2018-10-17 09:21:48'),
(23, 'BCCB Get-together', 'catimg_23_1539768116.jpg', '2018-10-17 09:21:56', '2018-10-17 09:21:56'),
(24, 'BCCB Get-togetheR', 'catimg_24_1539768136.jpg', '2018-10-17 09:22:16', '2018-10-17 09:22:16'),
(25, 'BCCB Get-togetheR', 'catimg_25_1539768185.jpg', '2018-10-17 09:23:05', '2018-10-17 09:23:06'),
(26, 'BCCB Get-together', 'catimg_26_1539768240.jpg', '2018-10-17 09:24:00', '2018-10-17 09:24:00'),
(27, '2018 farewel image', 'catimg_27_1539768253.jpg', '2018-10-17 09:24:13', '2018-10-17 09:24:13'),
(28, 'new Gallery ', 'catimg_28_1539768368.jpg', '2018-10-17 09:26:08', '2018-10-17 09:26:09'),
(29, '2018 farewel image', 'catimg_29_1539768455.jpg', '2018-10-17 09:27:35', '2018-10-17 09:27:35'),
(30, 'custom category', 'updatecatimg_1_1539779182.jpg', '2018-10-18 04:47:18', '2018-10-18 04:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `latestnews`
--

CREATE TABLE `latestnews` (
  `latestnews_id` int(10) UNSIGNED NOT NULL,
  `latestnews_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latestnews_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `latestnews_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latestnews_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`latestnews_id`, `latestnews_title`, `latestnews_des`, `latestnews_file`, `latestnews_status`, `created_at`, `updated_at`) VALUES
(19, 'যুক্তরাষ্ট্রে রাজনৈতিক আশ্রয় পেলেন এস. কে. সিনহাff', '', 'news_19_1539521206.pdf', '1', '2018-10-14 19:50:29', '2018-10-14 23:03:31'),
(20, 'যুক্তরাষ্ট্রে রাজনৈতিক আশ্রয় পেলেন এস. কে. সিনহা', '<p>xvxvcxvcxvcg<br></p>', 'updatenews1_1539521364.pdf', '1', '2018-10-14 19:50:46', '2018-10-14 23:03:27'),
(21, 'পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .', '<p>দ্মা সেতুর নামফলক উন্মোচন করেছেন প্রধানমন্ত্রী শেখ হাসিনা। আজ সকাল \r\n১১টায় মাওয়া প্রান্তের পদ্মা সেতুর নামফলক উন্মোচন করেন তিনি। এরপর \r\nমহাসড়কের ঢাকা-মাওয়া অংশের উদ্বোধন, মাওয়া প্রান্তে পদ্মা রেল সংযোগ \r\nপ্রকল্পের নির্মাণ কাজের উদ্বোধন করেন।&nbsp;\r\n\r\n</p><p>এরপর তিনি ১২টার দিকে শরীয়তপুরের জাজিরা প্রান্তে গিয়ে পদ্মা সেতু রেল \r\nসংযোগ প্রকল্পের নির্মাণ কাজের উদ্বোধন, পদ্মা বহুমুখী সেতু প্রকল্পের \r\nসার্বিক অগ্রগতি পরিদর্শন, মূল নদী শাসন কাজ সংলগ্ন স্থায়ী নদী তীর \r\nপ্রতিরক্ষামূলক কাজের উদ্বোধন, পদ্মা সেতুর জাজিরা প্রান্তের নামফলক \r\nউন্মোচন এবং পাঁচ্চর-ভাঙ্গা ১ হাজার ৩৯০ মিটার ছয় লেন সড়কের কাজের উদ্বোধন \r\nকরবেন। এরপর বিকাল ৩টায় মাদারীপুরের কাঁঠালবাড়ী ঘাট এলাকায় আওয়ামী লীগ \r\nআয়োজিত জনসভায় যোগ দেবেন।</p>', 'news.jpg', '1', '2018-10-14 23:02:48', '2018-10-21 07:11:36'),
(23, 'পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .', '<p>পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .</p><p>পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .পদ্মা সেতুর নামফলক উন্মোচন করলেন প্রধানমন্ত্রী .</p>', 'news.jpg', '1', '2018-10-23 06:32:47', '2018-10-23 06:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'updated_1_1540113197.png', '2018-10-21 09:13:20', '2018-10-21 09:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_si` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_display` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_url`, `menu_si`, `menu_display`, `menu_status`, `created_at`, `updated_at`) VALUES
(10, 'Home', '', '1', '11', '1', '2018-10-23 09:03:28', '2018-10-23 09:03:28'),
(11, 'About Us', 'about-us', '2', '11', '1', '2018-10-23 08:06:25', '2018-10-23 08:06:25'),
(12, 'Our Objective', 'objective', '3', '11', '1', '2018-10-23 08:07:16', '2018-10-23 08:07:16'),
(13, 'our mission', 'ourmission', '4', '11', '1', '2018-10-23 07:31:22', NULL),
(14, 'contact', 'contact', '5', '11', '1', '2018-10-23 07:32:05', NULL),
(15, 'Home', '', '1', '00', '1', '2018-10-23 07:40:44', NULL),
(16, 'Our Directors', 'director', '2', '00', '1', '2018-10-23 09:15:25', '2018-10-23 09:15:25'),
(17, 'Our Events', 'event', '3', '00', '1', '2018-10-23 09:43:42', '2018-10-23 09:43:42'),
(18, 'BBCC Mission', 'ourmission', '4', '00', '1', '2018-10-23 07:42:59', NULL),
(19, 'Our Partner', 'partners', '5', '00', '1', '2018-10-23 07:43:35', NULL),
(20, 'Rights and Privileges', 'rp', '6', '00', '1', '2018-10-23 09:40:04', '2018-10-23 09:40:04'),
(21, 'Gallery', '', '5', '00', '1', '2018-10-23 07:44:35', NULL),
(23, 'Message', '', '7', '00', '1', '2018-10-23 07:46:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_Designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_photo`, `message_title`, `message_name`, `message_des`, `message_Designation`, `message_status`, `created_at`, `updated_at`) VALUES
(9, 'slider_9_1539867174.jpg', 'BBCC Directors met with the PM Sheikh Hasina', 'BBCC Directors                  ', '<p>Bangladesh Business Chamber of Canada (BBCC) awarded\r\nthe honor to Sheikh Hasina,the honorable Prime Minister of Bangladesh and\r\ndaughter of Bangabandhu. On the 17<sup>th</sup> of September, at&nbsp; the cordial reception in Montreal,\r\nCanada,&nbsp; a Crystal &nbsp;Crest of Honor handed over to the Prime\r\nMinister Sheikh Hasina by the&nbsp; H.M.\r\nIqbal, Chamber’s President, CEO of Premium Sweets, Mohammed Hasan, Chamber’s\r\nDirector Admin and CEO of Canada National Construction, Mazumder Arifur Rahman,\r\nChamber’s Director and&nbsp; CEO of Magpie\r\nGroup, Joynal Abedin Selim, Chamber’s Director and CEO of Mac Industry, Shahidul\r\nIslam Mintu, Chamber’s Director and CEO of NRB TV, Masud Siddiki, Chamber’s\r\nDirector and CEO of Cafe Royal, and Tapan Sayed, Chamber’s Director and Real\r\nEstate businessman. The Prime Minister praised BBCC’s work. Besides this, the Prime\r\nMinister requested to promote and market the Bangladeshi products in the world market,\r\nand she invited the Non-Resident businessmen to invest more in Bangladesh. The\r\nleaders of BBCC assured the Prime Minister to brightenthe impression about Bangladesh\r\nin the international market. BBCC also showed their interest to perform more in\r\nthe Bangladeshi economy. On the 16<sup>th</sup> of September, the same leading group\r\nof BBCChad a courtesy meeting and cordial greetings with the honorable Prime\r\nMinister Sheikh Hasina at Omni International Hotel, Montreal, Canada. </p><p><br></p>', 'BBCC Directors', '1', '2018-10-20 03:51:19', '2018-10-20 03:51:19'),
(10, 'slider_10_1539867307.jpg', 'Message from the Chief Patron', 'Mizanur Rahman                                    ', '<p>It gives me great pleasure to\r\nknow that the Canada Bangladesh Business Chamber (CBBC) will be holding their\r\nfirst Annual General Meeting in Toronto\r\non August 26, 2016 and a new committee will be taking charge thereupon. I am aware that the CBBC has\r\npromoted and enhanced the trade cooperation between Canada\r\nand Bangladesh\r\nsince its inception and the new committee will continue this good work. The trade volume of our two\r\nfriendly countries has exceeded the $2 billion mark in 2016 and I am confident\r\nthat CBBC will continue to play a vital part in accelerating this growth in the\r\ncoming days. I am pleased to congratulate\r\nthe newly elected President, Board of Directors and all the members, both old\r\nand newly inducted and wish them all the success not only in taking CBBC\r\nforward but also in their individual businesses. <br></p>\r\n<p>From my side and from my High\r\nCommission I assure all support and cooperation to further enhance our\r\nbilateral trade, business and investments between our two friendly countries, Bangladesh and Canada. </p>\r\n<p>&nbsp;</p>', 'High Commissioner of Bangladesh to Canada & <br/> Chief Patron, CBBC.', '1', '2018-10-20 03:52:14', '2018-10-20 03:52:14'),
(11, 'slider_11_1539867377.jpg', 'From the President’s Desk', 'Subir Kumar Dey                                                                                                                                 ', '<p>As the great summer of 2016 bids\r\nadieu and ushers a cool setting of the autumn, Bangladesh Business Chamber of\r\nCanada (BBCC) is going to hold its 1<sup>st</sup> Annual General Meeting (AGM)\r\nin Toronto, Canada on the 26<sup>th</sup> August 2016. The occasion will also call for\r\nan election to name the new office bearers who will take responsibility of the BBCC\r\nfor the term 2016-17 and 2017-18. The onus is on me BBCC’s ongoing President to\r\nformally thank all our old and newly elected inducted members for their great\r\nsupport, enthusiasm and cooperation they have extended to me and my board\r\nmembers in running the affairs and activities of the BBCC successfully so far.\r\n</p><p>&nbsp;</p>\r\n<p>Canada and Bangladesh are tested\r\nfriends and the volume of trade and investment has increased from a mere $200\r\nmillion in 2014 to $2 billion in 2016. The current plan aims to achieve a\r\ntarget of US $5 billion by 2021. Canada has invested more than $300 million in\r\nBangladesh already and all Canadian firms are seriously looking into the ICT,\r\nrenewable energy, and energy projects for investment in Bangladesh. Further\r\nsectors of interest include agro-foods, transportations, telecommunications,\r\nheath care engineering etc. </p>\r\n<p>&nbsp;</p>\r\n<p>Bangladesh was recognized by\r\nCanada as a sovereign country in the year 1972 and the relationship between our\r\ncountries has grown steadily over the last 44 years. The present government of\r\nBangladesh vigorously supports private sector investment with 100% incentives\r\nfor foreign ownership, repatriation of dividend and foreign protection act. The\r\ncurrent volume of trade ratio is in favor of Bangladesh as major export of\r\nBangladesh to Canada includes apparels, footwear &amp; leather goods, frozen\r\nfish, agricultural goods etc. </p>\r\n<p>&nbsp;</p>\r\n<p>Bangladesh’s market of 160\r\nmillion people with a middle income group rising constantly and Bangladesh\r\nproviding a low cost production base and a competitive labor can help Canadian\r\ninvestors to expand their business in Bangladesh in a big way. To this end and\r\nto encourage Bangladeshi entrepreneurs to set up business in Canada also, BBCC intends\r\nto gear up its activities more intensely in the coming days. </p>\r\n<p>&nbsp;</p>\r\n<p>I am confident that the new\r\ncommittee of BBCC with its capable office bearers will further enhance our\r\nbilateral trade and investment in the near future. On behalf of my Board, and\r\nmyself I express my gratitude to His Excellency Mr. Mizanur Rahman High\r\nCommissioner of Bangladesh in Canada, Mr. Dewan Mahmud 1<sup>st</sup> Secretary\r\ncommercial and to His Excellency Mr. Kamrul Ahsan former High Commissioner of\r\nCanada to Bangladesh for their unstinted support extended to BBCC time and\r\nagain. My deep appreciation and gratefulness to our Chief Patron for his\r\nadvice, guidance and cooperation that BBCC received all in earnest. Finally, I\r\nam indebted to all my Board Members and general members of BBCC for helping me\r\nto end my tenure successfully and with grace and dignity. </p>\r\n<p>&nbsp;</p>\r\n<p>My heartiest congratulations to\r\nthe newly elected Board of Directors of BBCC and thanks to all members present\r\ntoday. </p><p><br></p>', 'President BBCC', '1', '2018-10-23 06:32:12', '2018-10-23 06:32:12');

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
(3, '2018_10_10_103833_create_sliders_table', 1),
(4, '2018_10_11_055154_create_ournews_table', 2),
(5, '2018_10_11_105634_create_notices_table', 3),
(6, '2018_10_13_101729_create_latestnews_table', 4),
(7, '2018_10_15_052838_create_directors_table', 5),
(8, '2018_10_15_110723_create_events_table', 6),
(9, '2018_10_16_155419_create_sessions_table', 7),
(10, '2018_10_16_155558_create_gallerycategories_table', 7),
(11, '2018_10_17_102859_create_photogalleries_table', 8),
(12, '2018_10_18_100557_create_sponsors_table', 9),
(13, '2018_10_18_122619_create_welcomemsgs_table', 10),
(14, '2018_10_18_153526_create_directormets_table', 11),
(15, '2018_10_18_170910_create_messages_table', 12),
(16, '2018_10_20_100855_create_contactuses_table', 13),
(17, '2018_10_20_122634_create_newslatters_table', 14),
(18, '2018_10_20_130008_create_newslatters_table', 15),
(19, '2018_10_20_172504_create_sponsorpromotes_table', 16),
(20, '2018_10_21_103015_create_logos_table', 17),
(21, '2018_10_21_114846_create_socials_table', 18),
(22, '2018_10_21_133511_create_orginationinfos_table', 19),
(23, '2018_10_21_134238_create_organizationinfos_table', 20),
(24, '2018_10_21_153150_create_videogalleries_table', 21),
(25, '2018_10_22_094957_create_contactinfos_table', 22),
(26, '2018_10_22_102856_create_aboutpages_table', 23),
(27, '2018_10_22_112710_create_objectivepages_table', 24),
(28, '2018_10_22_120314_create_missions_table', 25),
(29, '2018_10_22_122718_create_rppages_table', 26),
(30, '2018_10_22_130227_create_quicklinks_table', 27),
(31, '2018_10_22_150324_create_menus_table', 28),
(32, '2018_10_22_170422_create_submenus_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` int(10) UNSIGNED NOT NULL,
  `mission_ban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `mission_ban`, `mission_status`, `mission_des`, `created_at`, `updated_at`) VALUES
(1, 'missoin_1540189497.jpg', '1', 'To build better business connection and strengthen bilateral friendship \r\nby increasing networking among Bangladeshi & Canadian enterprises<br><br>\r\nTo strengthen communication with both Canadian and Bangladeshi \r\ngovernment and business entities by facilitating resource sharing, \r\nbusiness experience and views exchanges.<br><br>\r\nTo promote Bangladesh-Canada economic, trade and investment cooperation \r\nby organizing seminars and business matchmaking meetings, Single Country\r\n Trade Fairs in Canada and Bangladesh.<br><br>\r\nTo contribute to the better business adaptation and development of \r\nBangladeshi enterprises in Canada, to the development of Canadian \r\neconomy and local community and to the further development of economic \r\nrelations between Bangladesh and Canada by providing insight into \r\nCanadian business environment and providing support to companies from \r\nboth sides.', '2018-10-22 06:24:57', '2018-10-22 06:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `newslatters`
--

CREATE TABLE `newslatters` (
  `id` int(10) UNSIGNED NOT NULL,
  `newslatter_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newslatter_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslatters`
--

INSERT INTO `newslatters` (`id`, `newslatter_img`, `newslatter_pdf`, `created_at`, `updated_at`) VALUES
(2, 'newslatter_img_1540038212.jpg', 'pdf_1540038231.pdf', '2018-10-20 12:23:51', '2018-10-20 12:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `notice_title`, `notice_des`, `notice_status`, `notice_file`, `created_at`, `updated_at`) VALUES
(115, '28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India', '', '1', 'updatenotice_1_1539502828.pdf', '2018-10-14 15:15:41', '2018-10-14 15:15:41'),
(116, 'C28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '', '1', 'new.jpg', '2018-10-14 14:39:16', '2018-10-14 14:39:16'),
(117, 'C28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '', '1', 'notice_117_1539497022.pdf', '2018-10-14 16:27:07', '2018-10-14 16:27:07'),
(118, 'C28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '<h3 class=\"first\" style=\"margin-right: 180px; margin-left: 0px; padding: 2px 0px 0px; font-family: \"Trebuchet MS\", Verdana, Helvetica, Arial, sans-serif; border: none; font-size: 1.7em; color: rgb(51, 51, 51); line-height: 29.75px; text-rendering: optimizeLegibility; background-color: rgb(236, 243, 247); margin-bottom: 0.3em !important; float: none !important;\"><a href=\"https://forum.joomla.org/viewtopic.php?t=953784#p3488353\" style=\"margin: 0px; padding: 0px; color: rgb(0, 85, 128); text-decoration-line: underline; direction: ltr; unicode-bidi: embed; display: inline-block; outline: 0px;\">blank page on localhost/phpmyadmin</a></h3><ul class=\"post-buttons\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; line-height: 21px; float: none; position: absolute; right: 0px; top: 5px; max-width: 40%; color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; background-color: rgb(236, 243, 247);\"><li style=\"margin: 0px 3px 0px 0px; padding: 0px; line-height: 22px; float: left;\"><a href=\"https://forum.joomla.org/posting.php?mode=quote&f=48&p=3488353&sid=ba552267270a90569e02d3b6a54030cc\" title=\"Reply with quote\" class=\"button button-icon-only\" style=\"margin: 4px 0px; padding: 2px 3px; background-image: -webkit-linear-gradient(top, rgb(255, 202, 65) 0%, rgb(253, 143, 25) 100%); background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(148, 64, 4); direction: ltr; unicode-bidi: embed; display: inline-block; outline: none; font-size: 13px; font-weight: 600; font-family: \"Open Sans\", \"Droid Sans\", Verdana, Arial, Helvetica; line-height: 1.4; text-align: center; white-space: nowrap; vertical-align: middle; touch-action: manipulation; cursor: pointer; user-select: none; border-width: 1px; border-style: solid; border-color: rgb(255, 232, 174) rgb(199, 195, 191) rgb(142, 81, 15); border-image: initial; border-radius: 4px; box-shadow: rgb(96, 138, 174) 0px 1px 0px; text-shadow: rgb(254, 206, 134) 0px 1px 0px;\"><span class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\" style=\"margin: 0px; padding: 0px; width: 1.28571em; display: inline-block; font-weight: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-family: FontAwesome; font-size: 14px; line-height: 1; text-rendering: auto; -webkit-font-smoothing: antialiased; color: rgb(10, 142, 208);\"></span><span class=\"sr-only\" style=\"font-size: 0px;\">Quote</span></a></li></ul><p class=\"author\" style=\"margin-right: 0px; margin-bottom: 0.6em; margin-left: 0px; padding: 0px 0px 5px; line-height: 1.2em; font-family: Verdana, Helvetica, Arial, sans-serif; clear: both; color: rgb(51, 51, 51); background-color: rgb(236, 243, 247);\"><a class=\"unread\" href=\"https://forum.joomla.org/viewtopic.php?p=3488353&sid=ba552267270a90569e02d3b6a54030cc#p3488353\" title=\"Post\" style=\"margin: 0px; padding: 0px; color: rgb(0, 136, 204); direction: ltr; unicode-bidi: embed; display: inline-block; outline: none;\"><span class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\" style=\"margin: 0px; padding: 0px; width: 1.28571em; display: inline-block; font-variant-numeric: normal; font-variant-east-asian: normal; font-family: FontAwesome; font-size: 10px; line-height: 1; text-rendering: auto; -webkit-font-smoothing: antialiased; color: rgb(153, 153, 153);\"></span><span class=\"sr-only\">Post</span></a>&nbsp;<span class=\"responsive-hide\" style=\"margin: 0px; padding: 0px;\">by&nbsp;<strong style=\"margin: 0px; padding: 0px; font-weight: bold;\"><a href=\"https://forum.joomla.org/memberlist.php?mode=viewprofile&u=809141&sid=ba552267270a90569e02d3b6a54030cc\" class=\"username\" style=\"margin: 0px; padding: 0px; color: rgb(0, 136, 204); direction: ltr; unicode-bidi: embed; display: inline-block; outline: none;\">kalkatr</a></strong>&nbsp;»&nbsp;</span>Tue Aug 15, 2017 7:52 am</p><div class=\"content\" style=\"margin: 0px; padding: 0px 0px 1px; clear: both; min-height: 3em; overflow: auto hidden; line-height: 1.4em; font-family: \"Lucida Grande\", \"Trebuchet MS\", Verdana, Helvetica, Arial, sans-serif; font-size: 1.1em; background-color: rgb(236, 243, 247);\">Hi. I want to install joomla on two computers . One has windows 10 and the other has windows 7. On the first one when I have finished installing xampp and trying to access localhost/phpmyadmin, it appears a blank page. on the other computer everything is fine. I have the same installation on both of them.&nbsp;<br style=\"margin: 0px; padding: 0px;\">Can you help me please;</div><div class=\"notice\" style=\"margin: 1.5em 0px 0px; padding: 0.2em 0px 0px; font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif; width: auto; border-top: 1px dashed rgb(204, 204, 204); clear: left; line-height: 18.2px; color: rgb(51, 51, 51); background-color: rgb(236, 243, 247);\">Last edited by&nbsp;<a href=\"https://forum.joomla.org/memberlist.php?mode=viewprofile&u=224484&sid=ba552267270a90569e02d3b6a54030cc\" class=\"username-coloured\" style=\"margin: 0px; color: rgb(0, 0, 102); direction: ltr; unicode-bidi: embed; outline: none; font-weight: bold; padding: 0px !important; display: inline !important;\">imanickam</a>&nbsp;on Tue Aug 15, 2017 11:18 pm, edited 1 time in total.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px; font-weight: bold;\">Reason:</strong>&nbsp;<em style=\"margin: 0px; padding: 0px;\">Moved the topic from the forum Installation Joomla! 3.x to the forum The Lounge</em></div>', '1', 'Notice.jpg', '2018-10-14 16:26:58', '2018-10-14 16:26:58'),
(119, 'C28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '', '1', 'notice_119_1539497076.pdf', '2018-10-14 16:26:45', '2018-10-14 16:26:45'),
(120, 'C28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '', '1', 'notice_120_1539497087.pdf', '2018-10-14 16:26:29', '2018-10-14 16:26:29'),
(121, 'C28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '', '1', 'notice_121_1539497257.png', '2018-10-14 13:07:37', '2018-10-14 13:07:37'),
(122, '28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '', '1', 'notice_122_1539497269.pdf', '2018-10-14 13:07:49', '2018-10-14 13:07:49'),
(123, '28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India', '<h2 style=\"font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(55, 52, 51); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 26px; text-align: center;\">28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Agartala, Tripura, India</h2>', '1', 'notice_123_1539497326.png', '2018-10-14 15:15:21', '2018-10-14 15:15:21'),
(127, 'bangladesh chamber notice board is very important now ', '', '1', 'notice_127_1539504432.pdf', '2018-10-14 15:08:04', '2018-10-14 15:08:04'),
(128, 'C27 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '<p>Welcome to Bangladesh Business Chamber of Canada (BBCC) In last three \r\ndecades, Canada became the choicest destination for Bangladeshi \r\nentrepreneurs, investors, professionals as well as students because of \r\nthe diversity and the prospect Canada holds for new immigrants in every \r\nsector. With Bangladeshi migrants over 150,000, Bangladeshi community in\r\n Canada has also diversified into vivid business contributing to the \r\neconomic stability and business growth in different provinces and \r\nterritories of Canada. Bangladesh Business Chamber of Canad ...<a href=\"http://localhost/bdchamber/public/#\">read more</a><br></p>', '1', 'Notice.jpg', '2018-10-14 16:12:38', '2018-10-14 16:12:38'),
(129, 'C28 Tripura Industries & Commerce Fair from January 29 to February 11, 2018 At Ag ...', '<h2 style=\"font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(55, 52, 51); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 26px; text-align: justify;\">Rangpur Chamber At A Glance</h2><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; text-align: justify;\">The Rangpur Chamber of Commerce & Industry (RCCI) is an economic institution whose establishment was accomplished through the efforts of a group of local businessmen in 1972. It serves as a model of non-profit, service-oriented organization. Now, it is one of the pioneer chambers in the country. Like other chambers, it consists of firms, companies and corporate bodies engaged in trade, commerce, industry, agriculture, manufacturing etc. the basic objective of Rangpur Chamber is to promote and protect the trade, commerce & Industry of Bangladesh in general and those of Rangpur in particular and also to enable the government and other authorities to perform these functions by rendering assistance, information and advice. The RCCI has been playing a significant role in ventilating the problems and grievances of the illustrious entrepreneurs of commerce & Industry as well as negotiating with the competent authorities for appropriate solutions thereof. Since its establishment the Chamber has grown rapidly and today it represents nearly 4500 Members which include large, medium and small companies and firm. Over and above the main objectives of the RCCI are: To Promote and develop Trade, Commerce and Industry of th</p>', '1', 'Notice.jpg', '2018-10-23 06:32:35', '2018-10-23 06:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `objectivepages`
--

CREATE TABLE `objectivepages` (
  `id` int(10) UNSIGNED NOT NULL,
  `ob_ban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ob_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ob_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objectivepages`
--

INSERT INTO `objectivepages` (`id`, `ob_ban`, `ob_status`, `ob_des`, `created_at`, `updated_at`) VALUES
(1, 'obectiveban_1540187559.jpg', '1', 'To establish a common and united platform for all Bangladeshi business \r\npersons in Canada and will act as the VOICE OF BUSINESS in Canada &amp; \r\nBangladesh.<br><br>\r\nTo provide opportunities for Bangladeshi business persons to meet on a \r\nregular basis, and act as a unified forum for the exchange of \r\ninformation relating to current and future business opportunities in \r\nCanada and abroad.<br>\r\nTo promote, develop and strengthen Bangladesh’s business relationship with Canada and other countries.<br><br>\r\nTo make productive recommendations, give feedback and/or representations\r\n to the appropriate government authorities of Canada and other countries\r\n on matters of policies and procedures pertaining to investment, trade \r\nand business activities.<br><br>\r\nTo provide support to organizations dedicated to the development of \r\ninternational trade and investment in Canada, Bangladesh and other \r\ncountries.<br><br>\r\nTo coordinate and/or affiliate with organizations in Canada, Bangladesh \r\nand other countries, with similar or related objectives, to work \r\ncollectively to enhance local and international investment, trade and \r\nbusiness.<br><br>\r\nTo publish for private circulation amongst members such as newsletters, \r\ndatabase, bulletins, reports and/or literatures which may be deemed \r\nappropriate by the Board to work collectively and for the enhancement of\r\n trade and business.<br><br>\r\nTo participate in humanitarian, relief and philanthropy work for the \r\nbenefit of deserving communities in Canada and abroad, subject to \r\nnecessary approval by the Canadian authorities; and To participate \r\ngenerally in such other lawful activities as would in the opinion of the\r\n Board be necessary to further the objectives and for the benefit of the\r\n Bangladeshi business community in Canada.', '2018-10-22 05:59:59', '2018-10-22 06:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `organizationinfos`
--

CREATE TABLE `organizationinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizationinfos`
--

INSERT INTO `organizationinfos` (`id`, `title`, `meta`, `map`, `contact_details`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '    BangladeshChamder', 'organization', '        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14606.939294492851!2d90.3889713971432!3d23.75683385675442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1540179972091\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<p>85 Torbay Road, Suite#1A </p><p>City: Markham, ONL3R1G7 Canada</p><p> Phone: 9056046422</p><p> Fax: 9056046522</p><p> Email:info@bangladeshchamber.ca2 </p><p>Website:www.bangladeshchamber.ca <br></p>', 'Bangladesh Chamber', '2018-10-22 04:11:35', '2018-10-22 04:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `ournews`
--

CREATE TABLE `ournews` (
  `ournews_id` int(10) UNSIGNED NOT NULL,
  `ournews_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ournews_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ournews_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ournews`
--

INSERT INTO `ournews` (`ournews_id`, `ournews_photo`, `ournews_link`, `ournews_status`, `created_at`, `updated_at`) VALUES
(30, 'ournewsupdated_1539502641.png', 'http:/bangaldeshchamber.com', '1', '2018-10-23 06:32:24', '2018-10-23 06:32:24'),
(31, 'ournews_31_1539504833.png', 'http://www.smartfffsoftware.com', '1', '2018-10-14 15:13:53', '2018-10-14 15:13:53'),
(32, 'ournews_32_1539504853.png', 'http://www.smartfffsoftware.com', '1', '2018-10-14 15:14:13', '2018-10-14 15:14:13'),
(33, 'ournews_33_1539504860.png', 'http://www.smartfffsoftware.com', '1', '2018-10-14 15:14:20', '2018-10-14 15:14:20'),
(34, 'ournews_34_1539504865.png', 'http://www.smartfffsoftware.com', '1', '2018-10-14 15:14:25', '2018-10-14 15:14:25'),
(35, 'ournews_35_1539504869.png', 'http://www.smardsfdftsoftware.com', '1', '2018-10-14 15:14:29', '2018-10-14 15:14:29');

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
-- Table structure for table `photogalleries`
--

CREATE TABLE `photogalleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `pgallery_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pgallery_cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pgallery_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photogalleries`
--

INSERT INTO `photogalleries` (`id`, `pgallery_img`, `pgallery_cat`, `pgallery_status`, `created_at`, `updated_at`) VALUES
(5, 'updategallery_img1_1539768467.jpg', '18', '1', '2018-10-17 09:27:47', '2018-10-17 09:27:48'),
(6, 'galleryimg_6_1539766742.jpg', '17', '1', '2018-10-17 08:59:02', '2018-10-17 08:59:02'),
(7, 'galleryimg_7_1539766807.jpg', '17', '1', '2018-10-17 11:30:47', '2018-10-17 11:30:47'),
(8, 'galleryimg_8_1539769376.jpg', '28', '1', '2018-10-17 09:42:56', '2018-10-17 09:42:56'),
(9, 'galleryimg_9_1539769382.jpg', '28', '1', '2018-10-17 09:43:02', '2018-10-17 09:43:02'),
(11, 'updategallery_img1_1539775863.jpg', '25', '1', '2018-10-17 11:31:03', '2018-10-17 11:31:03'),
(12, 'galleryimg_12_1539777563.jpg', '16', '1', '2018-10-17 11:59:23', '2018-10-17 11:59:23'),
(13, 'galleryimg_13_1539777572.jpg', '17', '1', '2018-10-17 11:59:32', '2018-10-17 11:59:32'),
(14, 'galleryimg_14_1539777578.jpg', '18', '1', '2018-10-17 11:59:38', '2018-10-17 11:59:39'),
(16, 'galleryimg_16_1539777596.jpg', '23', '1', '2018-10-17 11:59:56', '2018-10-17 11:59:56'),
(17, 'galleryimg_17_1539777609.jpg', '16', '1', '2018-10-17 12:00:09', '2018-10-17 12:00:09'),
(18, 'galleryimg_18_1539777618.jpg', '16', '1', '2018-10-17 12:00:18', '2018-10-17 12:00:18'),
(19, 'galleryimg_19_1539777625.jpg', '26', '1', '2018-10-17 12:00:25', '2018-10-17 12:00:25'),
(20, 'galleryimg_20_1539777638.jpg', '28', '1', '2018-10-17 12:00:38', '2018-10-17 12:00:38'),
(21, 'galleryimg_21_1539777643.jpg', '29', '1', '2018-10-17 12:00:43', '2018-10-17 12:00:43'),
(22, 'galleryimg_22_1539777650.jpg', '30', '1', '2018-10-17 12:00:50', '2018-10-17 12:57:00'),
(23, 'galleryimg_23_1539779584.jpg', '28', '1', '2018-10-17 12:33:04', '2018-10-17 12:57:16'),
(24, 'galleryimg_24_1539779591.jpg', '28', '1', '2018-10-17 12:33:11', '2018-10-17 12:57:12'),
(25, 'galleryimg_25_1539779597.jpg', '28', '1', '2018-10-17 12:33:17', '2018-10-17 12:57:10'),
(26, 'galleryimg_26_1539779612.jpg', '28', '1', '2018-10-17 12:33:32', '2018-10-17 12:57:07'),
(27, 'galleryimg_27_1539779618.jpg', '28', '1', '2018-10-17 12:33:38', '2018-10-17 12:57:07'),
(28, 'galleryimg_28_1539779628.jpg', '28', '1', '2018-10-17 12:33:48', '2018-10-17 12:57:04'),
(30, 'galleryimg_30_1539779638.jpg', '28', '1', '2018-10-17 12:33:58', '2018-10-17 12:57:02'),
(31, 'updategallery_img1_1540293343.jpg', '28', '1', '2018-10-23 11:15:43', '2018-10-23 11:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `quicklinks`
--

CREATE TABLE `quicklinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `link_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quicklinks`
--

INSERT INTO `quicklinks` (`id`, `link_title`, `link_url`, `created_at`, `updated_at`) VALUES
(3, 'Find the right job. you can get your job accrording to your experise. you can get quickly job from here', 'http://bdjobs.com/', '2018-10-22 08:11:08', '2018-10-22 08:11:08'),
(4, 'Find the right job. you can get your job accrording to your experise. you can get quickly job from here', 'http://bdjobs.com/', '2018-10-22 08:11:28', '2018-10-22 08:11:28'),
(6, ' 	Find the right job. you can get your job accrording to your experise. you can get quickly job from here', 'http://bdjobs.com/', '2018-10-22 08:11:43', NULL),
(7, 'Find the right job. you can get your job accrording to your experise. you can get quickly job from here', 'http://bdjobs.com/', '2018-10-22 08:11:58', NULL),
(8, 'Find the right job. you can get your job accrording to your experise. you can get quickly job from here', 'http://bdjobs.com/', '2018-10-22 08:12:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rppages`
--

CREATE TABLE `rppages` (
  `id` int(10) UNSIGNED NOT NULL,
  `rp_ban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rp_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rp_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rppages`
--

INSERT INTO `rppages` (`id`, `rp_ban`, `rp_status`, `rp_des`, `created_at`, `updated_at`) VALUES
(1, 'obectiveban_1540191109.jpg', '0', '<p>Membership is open to any person, Bangladeshi, Bangladeshi Canadian, \r\nCanadian or any national, who is in agreement with the objectives of the\r\n Bangladesh Business Chamber of Canada (BBCC). Membership will represent\r\n a wide range of industries and professions. Till it is changed by an \r\nAGM, the Membership, benefits and Membership Enrollment Fee of BBCC will\r\n be as follows.</p>\r\n<br>\r\n<p>Corporate Membership (CM) shall be open to corporation active in Canada & or Bangladesh.</p>\r\n<br>\r\n<p>Any business entity whose ownership and/or senior management control \r\nis held by person/s eligible for general membership/s vides Article 5.1;</p>\r\n<br>\r\n<p>Each corporate member shall be eligible to nominate in the prescribed\r\n form by the Chamber up to 01 (one) of its senior level managers to \r\nrepresent it in the Chamber. They shall be known as Corporate Nominees \r\n(CN); such corporate nominee (CN) shall represent the Corporate Member \r\nin all matters related to the Corporate Member. The Corporate Member may\r\n remove its Nominee by a written notice to the Board. However, only two \r\nremovals per calendar year shall be allowed;</p>\r\n<br>\r\n<p>Any member or Corporate Nominee (CN) shall be eligible to seek \r\nnomination for the election of Membership of the Board but shall not \r\nseek nomination for the positions of President, Vice President, General \r\nSecretary and Treasurer. Only General Members are eligible to seek \r\nnomination for President, Vice President, General Secretary and \r\nTreasurer of the Chamber Rights and privileges of members:</p>\r\n<br>\r\n<p>Voting rights: Any Members and Corporate Nominees (CN) are allowed to\r\n vote at the Annual General Meeting (AGM) and Extra Ordinary General \r\nMeeting (EGM) for any resolution/s and election of Board Members;</p>\r\n<p>Other rights: All the Members and Corporate Nominees (CN) are allowed\r\n to seek nominations for the Election of Board Memberships and/or \r\npositions of office bearers with the limitations stated in Article-5.</p>\r\n<br>\r\n<p>All the Members and Corporate Nominees shall have the right to enjoy \r\nthe perks and privileges of the Chamber as announced by the Board  </p>', '2018-10-22 06:53:10', '2018-10-22 06:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_img`, `created_at`, `updated_at`) VALUES
(49, 'slider_49_1539508328.jpg', '2018-10-15 06:39:05', '2018-10-15 06:39:05'),
(50, 'slider_50_1539508332.jpg', '2018-10-15 06:39:09', '2018-10-15 06:39:09'),
(51, 'slider_51_1539508336.jpg', '2018-10-15 06:39:12', '2018-10-15 06:39:12');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `social_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_name`, `social_link`, `social_status`, `created_at`, `updated_at`) VALUES
(3, 'fa-facebook', 'https://www.facebook.com', '1', '2018-10-21 07:28:38', '2018-10-21 09:21:44'),
(4, 'fa-twitter', 'https://www.twitter.com', '1', '2018-10-21 07:28:52', '2018-10-21 09:21:45'),
(6, 'fa-youtube', 'https://www.youtube.com', '1', '2018-10-21 07:29:15', NULL),
(7, 'fa-google-plus', 'https://www.plus.google.com', '1', '2018-10-21 07:29:56', NULL),
(8, 'fa-linkedin', 'http://www.linkedin.com', '1', '2018-10-21 07:30:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sponsorpromotes`
--

CREATE TABLE `sponsorpromotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `sponsor_promote_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_promote_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsorpromotes`
--

INSERT INTO `sponsorpromotes` (`id`, `sponsor_promote_img`, `sponsor_promote_link`, `created_at`, `updated_at`) VALUES
(1, 'sponsorpromote_1540038436.jpg', 'https://www.softdevltd.com', '2018-10-20 12:34:16', '2018-10-20 12:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `sponsor_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `sponsor_img`, `sponsor_status`, `created_at`, `updated_at`) VALUES
(4, 'updated_1_1539838780.jpg', '1', '2018-10-23 06:34:22', '2018-10-23 06:34:22'),
(5, 'sponsor_5_1539836940.jpg', '1', '2018-10-18 04:29:00', '2018-10-18 04:29:00'),
(6, 'sponsor_6_1539839303.jpg', '1', '2018-10-18 05:08:22', '2018-10-18 05:08:23'),
(7, 'sponsor_7_1539839306.jpg', '1', '2018-10-18 05:08:26', '2018-10-21 13:25:49'),
(8, 'sponsor_8_1539839309.jpg', '1', '2018-10-18 05:08:29', '2018-10-18 05:08:29'),
(9, 'sponsor_9_1539839311.jpg', '1', '2018-10-18 05:08:31', '2018-10-18 05:08:31'),
(10, 'sponsor_10_1539839314.jpg', '1', '2018-10-18 05:08:34', '2018-10-18 05:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `submenu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_si` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenu_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `submenu_name`, `submenu_url`, `submenu_si`, `menu_id`, `submenu_status`, `created_at`, `updated_at`) VALUES
(36, 'Msg from the President’s Desk', 'message view/11', '1', '23', '1', '2018-10-24 13:00:21', '2018-10-24 13:00:21'),
(37, 'CBBC Chief Patron\'s Msg', 'message view/10', '2', '23', '1', '2018-10-24 13:00:59', '2018-10-24 13:00:59'),
(44, 'Video Gallery', 'getvideogallery', '2', '21', '1', '2018-10-24 12:56:40', '2018-10-24 12:56:40'),
(45, 'Photo Gallery', 'viewphotogallery', '1', '21', '1', '2018-10-24 12:56:30', NULL);

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
(1, 'Bdchamber', 'admin@gmail.com', NULL, '$2y$10$LneE8vSxhoFyhFJcq9x7Xuhf4E59dHHTivyVIainyF07JIzx6ywLm', 'yDIcdgtOeGWOCKHzyMNRCko2NvDJqCt8uMqUUDKd7A4bdS4s83AzqlM6xjWH', '2018-10-10 05:09:08', '2018-10-10 05:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `videogalleries`
--

CREATE TABLE `videogalleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `video_thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videogalleries`
--

INSERT INTO `videogalleries` (`id`, `video_thumb`, `video_title`, `video_link`, `created_at`, `updated_at`) VALUES
(4, 'CJmlYds1wcA', 'BANGLADESH CHAMBER OF COMMERCE AND INDUSTRY HONGKONG LTD, EC ELECTION 2019', 'CJmlYds1wcA', '2018-10-24 13:30:49', '2018-10-24 13:30:49'),
(8, 'yw_vGuE0MlQ', 'ই ট্রেড লাইসেন্স!। E TRADE LICENSE। সুখবর! মাত্র ৫ মিনিটে অনলাইনেই করূন ট্রেড লাইসেন্স', 'yw_vGuE0MlQ', '2018-10-24 13:30:40', '2018-10-24 13:30:40'),
(9, '5KyI9zhYA10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium alias eaque, et quos nemo error aut quaerat vitae,', '5KyI9zhYA10', '2018-10-24 13:30:34', '2018-10-24 13:30:34'),
(10, 'TckGcxwknYU', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quas, autem. Fugiat labore molestias facere asperiores impedit, earum corrupti cumque, nostrum ex. Earum numquam esse optio atque quisquam ut tempore.', 'TckGcxwknYU', '2018-10-24 13:30:25', '2018-10-24 13:30:25'),
(11, 'HAnw168huqA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium alias eaque, et quos nemo error aut quaerat vitae, impedit aliquid, harum iusto nobis eveniet assumenda ea! Ad illo ullam nobis.', 'HAnw168huqA', '2018-10-24 13:30:18', '2018-10-24 13:30:18'),
(12, 'HAnw168huqA', 'BANGLADESH CHAMBER OF COMMERCE AND INDUSTRY HONGKONG LTD, EC ELECTION 2016', 'HAnw168huqA', '2018-10-24 13:29:29', NULL),
(13, 'w82a1FT5o88', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium alias eaque, et quos nemo error aut quaerat vitae,', 'w82a1FT5o88', '2018-10-24 13:31:20', '2018-10-24 13:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `welcomemsgs`
--

CREATE TABLE `welcomemsgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `welcomemsg` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcomemsgs`
--

INSERT INTO `welcomemsgs` (`id`, `welcomemsg`, `created_at`, `updated_at`) VALUES
(1, '<p>Welcome to Bangladesh Business Chamber of Canada (BBCC) In last three decades, Canada became the choicest destination for \r\nBangladeshi entrepreneurs, investors, professionals as well as students \r\nbecause of the diversity and the prospect Canada holds for new \r\nimmigrants in every sector. With Bangladeshi migrants over 150,000, \r\nBangladeshi community in Canada has also diversified into vivid business\r\n contributing to the economic stability and business growth in different\r\n provinces and territories of Canada. Bangladesh Business Chamber of \r\nCanada (BBCC) has merged to boost the atmosphere for Bangladeshi \r\nentrepreneur wish to invest in Canadian market or Canadian corporations \r\nwish to contribute to emerging Bangladeshi market. BBCC is the network \r\nor rather a robust platform for business community to invest  ither in \r\nCanada or Bangladesh.</p>', '2018-10-22 05:23:12', '2018-10-22 05:23:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutpages`
--
ALTER TABLE `aboutpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallerycategories`
--
ALTER TABLE `gallerycategories`
  ADD PRIMARY KEY (`gallerycat_id`);

--
-- Indexes for table `latestnews`
--
ALTER TABLE `latestnews`
  ADD PRIMARY KEY (`latestnews_id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslatters`
--
ALTER TABLE `newslatters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `objectivepages`
--
ALTER TABLE `objectivepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizationinfos`
--
ALTER TABLE `organizationinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ournews`
--
ALTER TABLE `ournews`
  ADD PRIMARY KEY (`ournews_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photogalleries`
--
ALTER TABLE `photogalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quicklinks`
--
ALTER TABLE `quicklinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rppages`
--
ALTER TABLE `rppages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsorpromotes`
--
ALTER TABLE `sponsorpromotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videogalleries`
--
ALTER TABLE `videogalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcomemsgs`
--
ALTER TABLE `welcomemsgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutpages`
--
ALTER TABLE `aboutpages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `director_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `gallerycategories`
--
ALTER TABLE `gallerycategories`
  MODIFY `gallerycat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `latestnews_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newslatters`
--
ALTER TABLE `newslatters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `objectivepages`
--
ALTER TABLE `objectivepages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organizationinfos`
--
ALTER TABLE `organizationinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ournews`
--
ALTER TABLE `ournews`
  MODIFY `ournews_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `photogalleries`
--
ALTER TABLE `photogalleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `quicklinks`
--
ALTER TABLE `quicklinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rppages`
--
ALTER TABLE `rppages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sponsorpromotes`
--
ALTER TABLE `sponsorpromotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videogalleries`
--
ALTER TABLE `videogalleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `welcomemsgs`
--
ALTER TABLE `welcomemsgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
