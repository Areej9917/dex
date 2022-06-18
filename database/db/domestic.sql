-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 08:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domestic`
--

-- --------------------------------------------------------

--
-- Table structure for table `awbs`
--

CREATE TABLE `awbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awb_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_city_id` int(11) DEFAULT NULL,
  `acc_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_city_id` int(11) DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment_type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment_concept_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ctn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goods_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_units` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_area_id` int(11) DEFAULT NULL,
  `delivery_status_id` int(11) DEFAULT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_date_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awbs`
--

INSERT INTO `awbs` (`id`, `client_id`, `date`, `service_id`, `custom_code`, `awb_no`, `shipper_id`, `origin_city_id`, `acc_no`, `recipient_id`, `destination_city_id`, `payment_id`, `shipment_type_id`, `shipment_concept_id`, `amount`, `weight`, `ctn`, `str`, `goods_id`, `total_units`, `str1`, `service_area_id`, `delivery_status_id`, `date_time`, `receiver_image`, `receiver_name`, `receiver_date_time`, `created_at`, `updated_at`) VALUES
(20, 21, '00:35:04', '22', '343436', '53564564', '534245345578689', 18, '3423445767898090-897', '3w34', 3504, '00:35:04', '323564767', '34253564765', '12000000', '70kg', '566786', '67576', '45356', '345600', '4646', 33, 22, '00:35:04', '00:35:04', 'ali', '00:35:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `awb_delivery_statuses`
--

CREATE TABLE `awb_delivery_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `awb_id` int(11) NOT NULL,
  `delivery_status_id` int(11) NOT NULL,
  `service_area_id` int(11) DEFAULT NULL,
  `date_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awb_delivery_statuses`
--

INSERT INTO `awb_delivery_statuses` (`id`, `awb_id`, `delivery_status_id`, `service_area_id`, `date_time`, `created_at`, `updated_at`) VALUES
(20, 20, 11, 10, '2020-10-12 00:00:00', '2022-04-18 19:27:20', '2022-04-18 19:27:20'),
(21, 20, 19, 18, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_province` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` int(11) NOT NULL,
  `within_city_rate_type` enum('flat','carton_base','weight_base') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `client_id`, `branch_name`, `branch_code`, `branch_contact_person`, `branch_phone`, `branch_address`, `branch_city`, `branch_postal_code`, `branch_province`, `branch_country`, `origin`, `within_city_rate_type`, `created_at`, `updated_at`) VALUES
(1, '3', 'skyitservices', '000003-1', '2763457645', '324234355', 'DHA2', '2', '5430', '1', 'Pakistan', 2, 'weight_base', '2022-03-30 06:52:43', '2022-03-30 06:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `branch_users`
--

CREATE TABLE `branch_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_users`
--

INSERT INTO `branch_users` (`id`, `user_id`, `branch_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2022-03-30 06:52:43', '2022-03-30 06:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Karachi', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(2, 'Lahore', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(3, 'Faisalabad', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(4, 'Rawalpindi', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(5, 'Gujranwala', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(6, 'Peshawar', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(7, 'Multan', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(8, 'Saidu Sharif', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(9, 'Hyderabad City', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(10, 'Islāmābād', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(11, 'Quetta', 4, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(12, 'Bahawalpur', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(13, 'Sargodha', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(14, 'Sialkot City', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(15, 'Sukkur', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(16, 'Larkana', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(17, 'Chiniot', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(18, 'Shekhupura', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(19, 'Jhang City', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(20, 'Dera Ghazi Khan', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(21, 'Gujrat', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(22, 'Rahimyar Khan', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(23, 'Kasur', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(24, 'Mardan', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(25, 'Mingaora', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(26, 'Nawabshah', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(27, 'Sahiwal', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(28, 'Mirpur Khas', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(29, 'Okara', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(30, 'Mandi Burewala', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(31, 'Jacobabad', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(32, 'Saddiqabad', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(33, 'Kohat', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(34, 'Muridke', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(35, 'Muzaffargarh', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(36, 'Khanpur', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(37, 'Gojra', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(38, 'Mandi Bahauddin', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(39, 'Abbottabad', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(40, 'Turbat', 4, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(41, 'Dadu', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(42, 'Bahawalnagar', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(43, 'Khuzdar', 4, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(44, 'Pakpattan', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(45, 'Tando Allahyar', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(46, 'Ahmadpur East', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(47, 'Vihari', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(48, 'Jaranwala', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(49, 'New Mirpur', 6, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(50, 'Kamalia', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(51, 'Kot Addu', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(52, 'Nowshera', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(53, 'Swabi', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(54, 'Khushab', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(55, 'Dera Ismail Khan', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(56, 'Chaman', 4, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(57, 'Charsadda', 3, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(58, 'Kandhkot', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(59, 'Chishtian', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(60, 'Hasilpur', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(61, 'Attock Khurd', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(62, 'Muzaffarabad', 6, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(63, 'Mianwali', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(64, 'Jalalpur Jattan', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(65, 'Bhakkar', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(66, 'Zhob', 4, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(67, 'Dipalpur', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(68, 'Kharian', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(69, 'Mian Channun', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(70, 'Bhalwal', 1, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(71, 'Jamshoro', 2, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(72, 'Pattoki', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(73, 'Harunabad', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(74, 'Kahror Pakka', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(75, 'Toba Tek Singh', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(76, 'Samundri', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(77, 'Shakargarh', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(78, 'Sambrial', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(79, 'Shujaabad', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(80, 'Hujra Shah Muqim', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(81, 'Kabirwala', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(82, 'Mansehra', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(83, 'Lala Musa', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(84, 'Chunian', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(85, 'Nankana Sahib', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(86, 'Bannu', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(87, 'Pasrur', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(88, 'Timargara', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(89, 'Parachinar', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(90, 'Chenab Nagar', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(91, 'Gwadar', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(92, 'Abdul Hakim', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(93, 'Hassan Abdal', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(94, 'Tank', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(95, 'Hangu', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(96, 'Risalpur Cantonment', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(97, 'Karak', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(98, 'Kundian', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(99, 'Umarkot', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(100, 'Chitral', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(101, 'Dainyor', 5, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(102, 'Kulachi', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(103, 'Kalat', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(104, 'Kotli', 6, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(105, 'Gilgit', 5, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(106, 'Narowal', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(107, 'Khairpur Mir’s', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(108, 'Khanewal', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(109, 'Jhelum', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(110, 'Haripur', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(111, 'Shikarpur', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(112, 'Rawala Kot', 6, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(113, 'Hafizabad', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(114, 'Lodhran', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(115, 'Malakand', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(116, 'Attock City', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(117, 'Batgram', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(118, 'Matiari', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(119, 'Ghotki', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(120, 'Naushahro Firoz', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(121, 'Alpurai', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(122, 'Bagh', 6, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(123, 'Daggar', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(124, 'Leiah', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(125, 'Tando Muhammad Khan', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(126, 'Chakwal', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(127, 'Badin', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(128, 'Lakki', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(129, 'Rajanpur', 1, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(130, 'Dera Allahyar', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(131, 'Shahdad Kot', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(132, 'Pishin', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(133, 'Sanghar', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(134, 'Upper Dir', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(135, 'Thatta', 2, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(136, 'Dera Murad Jamali', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(137, 'Kohlu', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(138, 'Mastung', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(139, 'Dasu', 3, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(140, 'Athmuqam', 6, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(141, 'Loralai', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(142, 'Barkhan', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(143, 'Musa Khel Bazar', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(144, 'Ziarat', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(145, 'Gandava', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(146, 'Sibi', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(147, 'Dera Bugti', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(148, 'Eidgah', 5, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(149, 'Uthal', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(150, 'Khuzdar', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(151, 'Chilas', 5, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(152, 'Panjgur', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(153, 'Gakuch', 5, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(154, 'Qila Saifullah', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(155, 'Kharan', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(156, 'Awaran', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(157, 'Dalbandin', 4, '2022-03-29 08:10:24', '2022-03-29 08:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `city_zone`
--

CREATE TABLE `city_zone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `override_amount` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_zone`
--

INSERT INTO `city_zone` (`id`, `city_id`, `zone_id`, `branch_id`, `override_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '0.00', NULL, NULL),
(2, 2, 2, 1, '0.00', NULL, NULL),
(3, 4, 3, 1, '0.00', NULL, NULL),
(4, 6, 4, 1, '0.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `city_id` int(11) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ntn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income_tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_acc_dept_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_acc_dept_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_acc_dept_contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_acc_dept_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `custom_code`, `user_id`, `phone_no`, `city_id`, `postal_code`, `address`, `billing_address`, `email`, `ntn`, `gst`, `income_tax`, `sales_tax`, `contact_to`, `contact_by`, `customer_acc_dept_name`, `customer_acc_dept_designation`, `customer_acc_dept_contact`, `customer_acc_dept_email`, `created_at`, `updated_at`) VALUES
(1, 'petsaal', '000001', 2, 2423436479, 2, 5200, 'h12 lahore', 'h12 lahore', 'khan21@gmail.com', '-1', '-1', '10', '20', '253623153', '7634728623', 'rabiya khan', 'punjab', '46357622378', 'iqra21@gmail.com', '2022-03-29 12:47:31', '2022-03-29 12:47:31'),
(2, 'NETSOLE', '000002', 3, 3455465789, 2, 6667, 'h12 lahore', 'h12 dha lahore', 'iqra@mail.com', '-2', '21', '10', '20', '034567483934', '03436372821', 'rabiya khan', 'punjab', '3542742763', 'iqra@mail.com', '2022-03-30 00:25:16', '2022-03-30 00:25:16'),
(3, 'ali', '000003', 4, 3472462782, 1, 5300, 'dha lahore', 'da lahore', 'ali@mail.com', '2', '10', '1500000', '300000', '34563752762', '34784773784', 'ali', 'punjab', '46274127429', 'ali@mail.com', '2022-03-30 06:48:15', '2022-03-30 06:48:15'),
(4, 'appgennie', '000004', 6, 64376872692, 2, 5400, 'lahore cantt', 'lahore', 'iqra_52@gmail.com', '1', '1', '12', '10', '3478367836', '4454735782', 'iqra', 'punjab', '6537845278', 'iqra01@mail.com', '2022-04-04 01:11:04', '2022-04-04 01:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_statuses`
--

CREATE TABLE `delivery_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_statuses`
--

INSERT INTO `delivery_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'iqra yasin', '2022-03-29 13:28:48', '2022-03-29 13:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'FABRIC', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(2, 'PRET', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(3, 'ACCESORIES', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(4, 'PERFUME', '2022-03-29 08:10:24', '2022-03-29 08:10:24');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_08_182638_create_permission_tables', 1),
(6, '2022_02_14_202628_create_cities_table', 1),
(7, '2022_02_14_205700_create_zones_table', 1),
(8, '2022_02_14_205902_create_clients_table', 1),
(9, '2022_02_14_205951_create_provinces_table', 1),
(10, '2022_02_22_201552_create_branches_table', 1),
(11, '2022_02_24_062124_add_user_id_to_clients_table', 1),
(12, '2022_02_24_104157_create_branch_users_table', 1),
(13, '2022_02_24_185735_create_city_zone_table', 1),
(14, '2022_02_24_191018_create_services_table', 1),
(15, '2022_02_24_200958_create_service_zone_table', 1),
(16, '2022_02_26_075431_create_rates_within_city_table', 1),
(17, '2022_02_26_080006_add_rate_type_to_branches_table', 1),
(18, '2022_02_28_172314_create_recipients_table', 1),
(19, '2022_03_01_172342_create_awbs_table', 1),
(20, '2022_03_02_152726_create_payments_table', 1),
(21, '2022_03_02_152909_create_shipment_types_table', 1),
(22, '2022_03_02_152927_create_shipment_concepts_table', 1),
(23, '2022_03_07_120102_add_branch_code_to_branches_table', 1),
(24, '2022_03_07_120516_remove_no_of_awb_column_from_clients_table', 1),
(25, '2022_03_07_125622_add_custom_code_to_clients_table', 1),
(26, '2022_03_07_190643_add_group_name_to_permissions_table', 1),
(27, '2022_03_08_054910_add_branch_phone_to_branches_table', 1),
(28, '2022_03_08_060511_add_branch_province_to_recipients_table', 1),
(29, '2022_03_08_070847_create_goods_table', 1),
(30, '2022_03_08_075116_add_columns_to_recipients_table', 1),
(31, '2022_03_08_164336_rename_dog_id_in_awbs_table', 1),
(32, '2022_03_08_173534_rename_branch_id_in_awbs_table', 1),
(33, '2022_03_13_182105_add_client_id_to_awbs_table', 1),
(34, '2022_03_14_054709_add_columns_to_awbs_table', 1),
(35, '2022_03_17_183710_create_deleivery_statuses_table', 1),
(36, '2022_03_17_202221_create_awb_deleivery_status_table', 1),
(37, '2022_03_21_081944_create_service_areas_table', 1),
(38, '2022_03_21_082610_add_location_id_to_awb_deleivery_status_table', 1),
(39, '2022_03_21_082835_add_status_and_location_to_awb_table', 1),
(40, '2022_03_21_195358_add_date_time_to_awb_table', 1),
(41, '2022_03_23_155027_add_date_time_to_awb_deleivery_status_table', 1),
(42, '2022_03_23_163022_add_fields_to_awbs_table', 1),
(43, '2022_03_26_091736_rename_awb_deleivery_status_table', 1),
(44, '2022_03_26_092813_rename_deleivery_statuses_table', 1),
(45, '2022_03_26_093737_rename_deleivery_status_id_in_awb_delivery_statuses_table', 1),
(46, '2022_03_26_123736_rename_columns_in_awbs_table', 1),
(47, '2022_03_26_125203_rename_location_id_in_awb_delivery_statuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 5);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PREPAID', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(2, 'CASH', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(3, 'COD', '2022-03-29 08:10:24', '2022-03-29 08:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'Dashboard', 'web', 'Dashboard', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(2, 'user-create', 'User Create', 'web', 'User', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(3, 'user-list', 'User List', 'web', 'User', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(4, 'role-create', 'Role Create', 'web', 'Role', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(5, 'role-list', 'Role List', 'web', 'Role', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(6, 'branch-create', 'Branch Create', 'web', 'Branch', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(7, 'branch-list', 'Branch list', 'web', 'Branch', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(8, 'recipient-create', 'Recipient Create', 'web', 'Recipient', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(9, 'recipient-list', 'Recipient List', 'web', 'Recipient', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(10, 'client-create', 'Client Create', 'web', 'Client', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(11, 'client-list', 'Client List', 'web', 'Client', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(12, 'awb-create', 'Awb Create', 'web', 'Awb', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(13, 'awb-list', 'Awb List', 'web', 'Awb', '2022-03-29 08:10:24', '2022-03-29 08:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Punjab', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(2, 'Sindh', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(3, 'KPK', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(4, 'Balochistan', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(5, 'Gilgit Baltistan', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(6, 'Azad Kashmir', '2022-03-29 08:10:23', '2022-03-29 08:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `rates_within_city`
--

CREATE TABLE `rates_within_city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `from` double DEFAULT NULL,
  `to` double DEFAULT NULL,
  `rate` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates_within_city`
--

INSERT INTO `rates_within_city` (`id`, `branch_id`, `city_id`, `from`, `to`, `rate`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 200, 1, 65, '2022-03-30 06:52:43', '2022-03-30 06:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE `recipients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_phone_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_phone_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_province` int(11) NOT NULL,
  `branch_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`id`, `client_id`, `branch_name`, `branch_contact_person`, `branch_address`, `branch_email`, `branch_phone_1`, `branch_phone_2`, `branch_fax`, `branch_country`, `branch_province`, `branch_city`, `branch_postal_code`, `created_at`, `updated_at`) VALUES
(1, '1', 'skyitservices', 'iqra yasin', 'h12', 'ali@mail.com', '3472462782', '7823647832', '3425367', 'Pakistan', 1, '1', '5300', '2022-04-02 13:48:08', '2022-04-02 13:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'Super Admin', 'web', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(2, 'client-user', 'Client User', 'web', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(3, 'branch-user', 'Branch User', 'web', '2022-03-29 08:10:23', '2022-03-29 08:10:23');

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
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Overnight', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(2, 'Detained', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(3, 'Economy', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(4, 'Overland', '2022-03-29 08:10:24', '2022-03-29 08:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `service_areas`
--

CREATE TABLE `service_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_areas`
--

INSERT INTO `service_areas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'iqra yasin', '2022-03-30 00:56:23', '2022-03-31 08:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `service_zone`
--

CREATE TABLE `service_zone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `amount` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_zone`
--

INSERT INTO `service_zone` (`id`, `service_id`, `zone_id`, `branch_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '120000.00', NULL, NULL),
(2, 1, 2, 1, '10000.00', NULL, NULL),
(3, 1, 3, 1, '80000.00', NULL, NULL),
(4, 1, 4, 1, '50000.00', NULL, NULL),
(5, 2, 1, 1, '11500.00', NULL, NULL),
(6, 2, 2, 1, '11000.00', NULL, NULL),
(7, 2, 3, 1, '10000.00', NULL, NULL),
(8, 2, 4, 1, '50000.00', NULL, NULL),
(9, 3, 1, 1, '150000.00', NULL, NULL),
(10, 3, 2, 1, '14000.00', NULL, NULL),
(11, 3, 3, 1, '120000.00', NULL, NULL),
(12, 3, 4, 1, '100000.00', NULL, NULL),
(13, 4, 1, 1, '20000.00', NULL, NULL),
(14, 4, 2, 1, '200000.00', NULL, NULL),
(15, 4, 3, 1, '20000.00', NULL, NULL),
(16, 4, 4, 1, '20000.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipment_concepts`
--

CREATE TABLE `shipment_concepts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment_concepts`
--

INSERT INTO `shipment_concepts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CARTON VERIFY', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(2, 'COUNTED', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(3, 'SEAL TO SEAL', '2022-03-29 08:10:24', '2022-03-29 08:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_types`
--

CREATE TABLE `shipment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment_types`
--

INSERT INTO `shipment_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CTNS', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(2, 'SACK BAGS', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(3, 'CTN SACKS', '2022-03-29 08:10:24', '2022-03-29 08:10:24'),
(4, 'FRAGILE CTNS(HWC)', '2022-03-29 08:10:24', '2022-03-29 08:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'profile_image.jpg',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `profile_image`, `phone`, `about`, `address`, `business_category`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'superadmin', 'admin@gmail.com', '$2y$10$gqQcseLiSQPco9x.iRJTKuvBSrYHptTFCeV/9VnvsJxm.PEd0wOGO', 'profile_image.jpg', NULL, NULL, NULL, NULL, 1, NULL, '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(2, 'petsaal', 'iqrayasin21@gmail.com', 'khan21@gmail.com', '$2y$10$2uiilStsiE0FgKTzz6XIXOYxr4ypyRjT.lVkiDvN0awCGmy4ES2Ga', 'profile_image.jpg', NULL, NULL, NULL, NULL, 1, NULL, '2022-03-29 12:47:30', '2022-03-29 12:47:30'),
(3, 'NETSOLE', 'iqra@mail.com', 'iqra@mail.com', '$2y$10$v108Ccp3Sf9wLup.fXBkPekSqDrfxLe2sabKexvvVVWrjh5cW6sUG', 'profile_image.jpg', NULL, NULL, NULL, NULL, 1, NULL, '2022-03-30 00:25:16', '2022-03-30 00:25:16'),
(4, 'ali', 'ali@mail.com', 'ali@mail.com', '$2y$10$lanyQ3KRPnyYcwiUTaD7Qe6pJPV2XvV8MBwQEWHj21Ow/OxG5X8Im', 'profile_image.jpg', NULL, NULL, NULL, NULL, 1, NULL, '2022-03-30 06:48:15', '2022-03-30 06:48:15'),
(5, 'alikhan', 'alikhan@mail.com', 'alikhan@mail.com', '$2y$10$g2FYPXJx2yfeHXw6u6N77.RVUXHLQ1U55kopZ5uwuqdh8D2yUW16K', 'profile_image.jpg', NULL, NULL, NULL, NULL, 1, NULL, '2022-03-30 06:52:43', '2022-03-30 06:52:43'),
(6, 'appgennie', 'iqrayasin', 'iqra_52@gmail.com', '$2y$10$N.OlFGQjXPgq7RhKFfN47eUrnjzR4VBdaYtfpHO100P9Esk/lYqsO', 'profile_image.jpg', NULL, NULL, NULL, NULL, 1, NULL, '2022-04-04 01:11:04', '2022-04-04 01:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Zone A', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(2, 'Zone B', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(3, 'Zone C', '2022-03-29 08:10:23', '2022-03-29 08:10:23'),
(4, 'Zone D', '2022-03-29 08:10:23', '2022-03-29 08:10:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awbs`
--
ALTER TABLE `awbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awb_delivery_statuses`
--
ALTER TABLE `awb_delivery_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_users`
--
ALTER TABLE `branch_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_zone`
--
ALTER TABLE `city_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_statuses`
--
ALTER TABLE `delivery_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates_within_city`
--
ALTER TABLE `rates_within_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_areas`
--
ALTER TABLE `service_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_zone`
--
ALTER TABLE `service_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_concepts`
--
ALTER TABLE `shipment_concepts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_types`
--
ALTER TABLE `shipment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awbs`
--
ALTER TABLE `awbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `awb_delivery_statuses`
--
ALTER TABLE `awb_delivery_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_users`
--
ALTER TABLE `branch_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `city_zone`
--
ALTER TABLE `city_zone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_statuses`
--
ALTER TABLE `delivery_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rates_within_city`
--
ALTER TABLE `rates_within_city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_areas`
--
ALTER TABLE `service_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_zone`
--
ALTER TABLE `service_zone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shipment_concepts`
--
ALTER TABLE `shipment_concepts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipment_types`
--
ALTER TABLE `shipment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
