-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 04:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_visitors`
--

CREATE TABLE `all_visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_visitors`
--

INSERT INTO `all_visitors` (`id`, `visitor_ip`, `status`, `date`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '::1', 1, '2022-06-01 20:22:16', NULL, '2022-06-01 14:22:16', '2022-06-01 14:22:16'),
(2, '::1', 1, '2022-06-01 20:23:03', NULL, '2022-06-01 14:23:03', '2022-06-01 14:23:03'),
(3, '::1', 1, '2022-06-01 20:23:38', NULL, '2022-06-01 14:23:38', '2022-06-01 14:23:38'),
(4, '::1', 1, '2022-06-01 20:24:25', NULL, '2022-06-01 14:24:25', '2022-06-01 14:24:25'),
(5, '::1', 1, '2022-06-01 20:24:30', NULL, '2022-06-01 14:24:30', '2022-06-01 14:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `content_type`, `title`, `product_name`, `product_price`, `banner_photo`, `active_status`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'left', 'প্রচারের জন্য', 'চন্দন কাঠ', '9000', 'public/uploads/banner/sandalwood3.jpg', 1, 1, NULL, '2022-05-17 18:44:02', '2022-05-17 20:36:21'),
(2, 'right', '২৫% ডিস্কাউন্টে', 'লাল চন্দন কাঠ', '1000', 'public/uploads/banner/lalsandalwood.png', 1, 1, NULL, '2022-05-17 20:34:47', '2022-05-17 20:34:47'),
(3, 'left', 'dfd', 'dsf', '4523', 'public/uploads/banner/khasiya ful.webp', 1, 1, NULL, '2022-05-29 07:39:43', '2022-05-29 07:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `blog_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_icon`, `slug`, `category_thumbnail`, `category_status`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'মধু', '<i class=\"fas fa-coffee\"></i>', 'honey', 'public/uploads/categorymisro.png', 2, 1, NULL, '2022-05-17 00:32:30', '2022-05-20 17:52:13'),
(3, 'চন্দন কাঠ', '<i class=\"far fa-edit\"></i>', 'sandal-wood', 'public/uploads/categorySandalwood.jpg', 2, 1, NULL, '2022-05-17 01:59:20', '2022-05-30 06:34:31'),
(4, 'তেতুল চাটনী', '<i class=\"fab fa-penny-arcade\"></i>', 'tetuk-chatni', 'public/uploads/categorytetul chatni.jpg', 1, 1, NULL, '2022-05-17 20:52:59', '2022-05-20 17:02:10'),
(5, 'মোম', '<i class=\"fas fa-coffee\"></i>', 'candle', 'public/uploads/categorymom.jpg', 1, 1, NULL, '2022-05-17 20:53:08', '2022-05-20 17:04:28'),
(6, 'বাদাম', '<i class=\"fas fa-coffee\"></i>', 'nuts', 'public/uploads/categoryhaninut.jpg', 2, 1, NULL, '2022-05-17 20:53:18', '2022-05-30 06:33:41'),
(11, 'Basic Computer', '<i class=\"fas fa-coffee\"></i>', 'basic-computer', 'public/uploads/categoryhaninut.jpg', 2, 0, NULL, '2022-05-18 21:58:16', '2022-05-20 17:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity_date`, `active_status`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2k', 10, '2022-05-29', 1, 1, NULL, '2022-05-27 20:41:26', '2022-05-29 07:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 4, 'Lalmonirhat', 1, NULL, '2022-05-29 09:43:11', '2022-05-30 03:33:40'),
(7, 5, 'Foridpur', 1, NULL, '2022-05-30 03:03:19', '2022-05-30 06:29:12'),
(8, 6, 'Pangsha', 1, NULL, '2022-05-30 03:05:34', '2022-05-30 03:33:40'),
(9, 5, 'Lalmonirhat1', 1, NULL, '2022-05-30 03:08:02', '2022-05-30 06:29:12'),
(10, 5, 'Foridpur2', 1, NULL, '2022-05-30 03:08:13', '2022-05-30 06:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Rongpur', 1, NULL, NULL, '2022-05-30 03:07:39'),
(5, 'Dhaka', 1, NULL, '2022-05-30 03:03:01', '2022-05-30 06:29:12'),
(6, 'Dhaka1', 1, '2022-05-30 03:06:35', '2022-05-30 03:05:25', '2022-05-30 03:06:35');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_16_095149_create_categories_table', 1),
(6, '2022_05_16_110104_create_products_table', 1),
(7, '2022_05_17_084107_create_product_multiple_images_table', 1),
(8, '2022_05_18_060135_create_banners_table', 1),
(10, '2022_05_24_083612_create_wishlists_table', 1),
(11, '2022_05_25_045909_create_divisions_table', 1),
(12, '2022_05_25_053330_create_coupons_table', 1),
(13, '2022_05_26_071244_create_districts_table', 1),
(14, '2022_05_26_091730_create_thanas_table', 1),
(15, '2022_05_28_085439_create_orders_table', 1),
(16, '2022_05_28_132000_create_order_items_table', 1),
(18, '2022_05_29_114432_create_visitors_table', 2),
(26, '2022_05_22_051207_create_blogs_table', 3),
(27, '2022_06_01_145835_create_all_visitors_table', 3),
(28, '2022_06_01_193415_create_testimonials_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(50,2) NOT NULL,
  `order_date` date NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_date` date DEFAULT NULL,
  `processing_date` date DEFAULT NULL,
  `picked_date` date DEFAULT NULL,
  `shipped_date` date DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `cancel_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `order_type` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `shipping_name`, `shipping_mobile`, `shipping_email`, `shipping_address`, `division_id`, `district_id`, `thana_id`, `payment_type`, `amount`, `order_date`, `invoice_no`, `confirm_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `order_type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ariful Siker', '01784703000', '01784703000', 'address', '5', '7', '5', 'Cash On Delivary', 1760.00, '2022-05-31', NULL, '2022-05-31', '2022-05-31', '2022-05-31', '2022-05-31', '2022-05-31', NULL, NULL, 'Delivered', 1, NULL, '2022-05-31 07:24:51', '2022-05-31 07:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_qty` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_qty`, `price`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 39, 1, 1760.00, 1, NULL, '2022-05-31 07:24:51', '2022-05-31 07:24:51');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_discount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_offer` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_qty`, `product_code`, `product_price`, `product_discount`, `short_description`, `long_description`, `product_thumbnail`, `product_slider_img`, `special_offer`, `product_slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 2, 'খাটি মধু', '111', 'প্রোডাক্টের কোড u', '2000', '20', '<p>1111</p>', '<p>1111</p>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/haninut.jpg', NULL, 'honey-nuts-new', 1, NULL, '2022-05-17 00:33:00', '2022-05-20 20:59:28'),
(3, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '0', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/sandalwood2.jpg', NULL, 'tetul-chatni2', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(4, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '10', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni1', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:55'),
(5, 2, 'খাটি মধু', '111', 'প্রোডাক্টের কোড u', '2000', '20', '<p>1111</p>', '<p>1111</p>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/modhu.jpg', NULL, 'honey-nuts', 1, NULL, '2022-05-17 00:33:00', '2022-05-20 20:58:38'),
(6, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(7, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(8, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(30, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood-wood', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(31, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-ni', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(32, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red-red', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(33, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-nid', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(34, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-redred', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(35, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood-woodre', 1, NULL, '2022-05-17 01:59:47', '2022-05-30 06:34:31'),
(36, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-nii', 1, NULL, '2022-05-17 22:13:12', '2022-05-20 20:58:05'),
(37, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red-redred', 1, NULL, '2022-05-18 17:34:37', '2022-05-20 20:09:01'),
(38, 3, 'dsf', '10', 'fds', '5000', '12', '<font color=\"#9aa0a6\">dsfdsfdsfdsf</font>', '<div class=\"VwiC3b yXK7lf MUxGbd yDYNvb lyLwlc lEBKkf\" style=\"padding-top: 0px; margin-bottom: 0px; color: rgb(189, 193, 198); display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden; font-family: arial, sans-serif; font-size: 14px; background-color: rgb(32, 33, 36); -webkit-line-clamp: 2;\"><span class=\"MUxGbd wuQ4Ob WZ8Tjf\" style=\"padding-top: 0px; margin-bottom: 0px; color: rgb(154, 160, 166);\">May 6, 2019&nbsp;—&nbsp;</span><span style=\"font-weight: bold; color: rgb(188, 192, 195);\">Object</span>&nbsp;of&nbsp;<span style=\"font-weight: bold; color: rgb(188, 192, 195);\">class Torann</span>\\<span style=\"font-weight: bold; color: rgb(188, 192, 195);\">GeoIP</span>\\<span style=\"font-weight: bold; color: rgb(188, 192, 195);\">Location could not</span>&nbsp;be&nbsp;<span style=\"font-weight: bold; color: rgb(188, 192, 195);\">converted</span>&nbsp;to&nbsp;<span style=\"font-weight: bold; color: rgb(188, 192, 195);\">string</span>. This Is My Auth LoginController. How to Insert GeoIP Loacation data&nbsp;...</div><div style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(32, 33, 36);\"><div class=\"YkS8D\" style=\"display: flex; white-space: nowrap;\"><a class=\"YjtGef\" href=\"https://stackoverflow.com/a/56002824\" ping=\"/url?sa=t&amp;source=web&amp;rct=j&amp;url=https://stackoverflow.com/a/56002824&amp;ved=2ahUKEwj8wbL96IT4AhXUTWwGHSGWDPQQ4-4CegQIHxAB\" grepper-handle-result-click=\"1\" style=\"color: rgb(138, 180, 248); -webkit-tap-highlight-color: rgba(255, 255, 255, 0.1); outline: 0px;\">3 answers</a>&nbsp;<span class=\"Bxc0O\" style=\"color: rgb(154, 160, 166);\">·</span>&nbsp;<span class=\"EFv1uc\" style=\"color: rgb(154, 160, 166);\">0 votes:&nbsp;</span><span class=\"EETcFd OSrXXb\" style=\"overflow: hidden; text-overflow: ellipsis; display: inline-block;\">This is happending because GeoIP::getLocation(\'240</span></div></div>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/lalsandalwood.png', '1', 'new-product-for-sell', 1, NULL, '2022-05-29 07:48:20', '2022-05-30 06:34:31'),
(39, 3, 'Shandal wood new', '11', 'something', '2000', '12', '<p><span style=\"color: rgb(35, 38, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 15px;\">You have to choose a way to represent this location as a String, a possible way can be to save the latitude and the longitude separately.</span><br></p>', '<p><span style=\"color: rgb(35, 38, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 15px;\">You have to choose a way to represent this location as a String, a possible way can be to save the latitude and the longitude separately.</span><span style=\"color: rgb(35, 38, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 15px;\">You have to choose a way to represent this location as a String, a possible way can be to save the latitude and the longitude separately.</span><span style=\"color: rgb(35, 38, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI Adjusted&quot;, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 15px;\">You have to choose a way to represent this location as a String, a possible way can be to save the latitude and the longitude separately.</span><br></p>', 'public/uploads/product/Sandalwood.jpg', 'public/uploads/product_banner/sandalWood1.jpg', '1', 'new-product-for-sell-sandal-wood', 1, NULL, '2022-05-29 07:51:48', '2022-05-30 06:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_multiple_images`
--

CREATE TABLE `product_multiple_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `multiple_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_multiple_images`
--

INSERT INTO `product_multiple_images` (`id`, `product_id`, `multiple_image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 2, 'public/uploads/product/smart-phone-half-block.jpg', 1, NULL, '2022-05-17 00:33:00', '2022-05-17 00:33:00'),
(4, 2, 'public/uploads/product/Untitled-1.jpg', 1, NULL, '2022-05-17 00:33:00', '2022-05-17 00:33:00'),
(5, 3, 'public/uploads/product/smart-phone-half-block.jpg', 1, NULL, '2022-05-17 01:59:47', '2022-05-17 01:59:47'),
(6, 3, 'public/uploads/product/NationalFlag.jpg', 1, NULL, '2022-05-17 01:59:47', '2022-05-17 03:08:43'),
(7, 4, 'public/uploads/product/sandalwood3.jpg', 1, NULL, '2022-05-17 22:13:12', '2022-05-17 22:13:12'),
(8, 4, 'public/uploads/product/tetul chatni.jpg', 1, NULL, '2022-05-17 22:13:12', '2022-05-17 22:13:12'),
(9, 8, 'public/uploads/product/misro.png', 1, NULL, '2022-05-18 17:34:37', '2022-05-18 17:34:37'),
(10, 8, 'public/uploads/product/modhu.jpg', 1, NULL, '2022-05-18 17:34:37', '2022-05-18 17:34:37'),
(11, 8, 'public/uploads/product/mosla.jpg', 1, NULL, '2022-05-18 17:34:37', '2022-05-18 17:34:37'),
(12, 38, 'public/uploads/product/lalsandalwood.png', 1, NULL, '2022-05-29 07:48:20', '2022-05-29 07:48:20'),
(13, 39, 'public/uploads/product/tetul chatni.jpg', 1, NULL, '2022-05-29 07:51:49', '2022-05-29 07:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `description`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ariful Sikder1111', 'Chairman', 'dsfs', 'public/uploads/testimonial/horiner chamra2.jpg', 1, NULL, '2022-06-01 13:45:02', '2022-06-01 13:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `thana_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `division_id`, `district_id`, `thana_name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 4, 6, 'Adidmari', 1, NULL, '2022-05-29 09:43:16', '2022-05-30 03:07:39'),
(5, 5, 7, 'Rajbari', 1, NULL, '2022-05-30 03:03:27', '2022-05-30 06:29:12'),
(6, 6, 8, 'Sherpur', 1, '2022-05-30 03:06:35', '2022-05-30 03:05:44', '2022-05-30 03:06:35');

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$PRRbxfBmNlmFbDgzgjLmpeR7yOtg/q2l9te59uQ6/ChUs/O9qpYfW', NULL, NULL, '2022-05-29 06:32:38', '2022-05-29 06:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_visit_times` int(21) NOT NULL,
  `category_visit_times` int(21) NOT NULL,
  `date` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `visitor_ip`, `category_id`, `product_id`, `product_visit_times`, `category_visit_times`, `date`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(19, '::1', 2, 2, 8, 8, '2022-06-01 10:59:48', 1, NULL, '2022-06-01 06:57:25', '2022-06-01 10:59:48'),
(20, '::1', 3, 3, 6, 1, '2022-06-01 11:01:09', 1, NULL, '2022-06-01 06:58:06', '2022-06-01 11:01:09'),
(21, '::1', 4, 4, 5, 2, '2022-06-01 14:25:02', 1, NULL, '2022-06-01 06:58:22', '2022-06-01 14:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 1, 4, NULL, '2022-05-27 19:59:26', '2022-05-27 19:59:26'),
(16, 1, 7, NULL, '2022-05-27 19:59:33', '2022-05-27 19:59:33'),
(17, 1, 2, NULL, '2022-05-28 20:58:30', '2022-05-28 20:58:30'),
(18, 1, 2, NULL, '2022-05-28 20:58:30', '2022-05-28 20:58:30'),
(19, 1, 3, NULL, '2022-05-28 23:38:05', '2022-05-28 23:38:05'),
(20, 1, 3, NULL, '2022-05-28 23:38:05', '2022-05-28 23:38:05'),
(21, 1, 5, NULL, '2022-05-30 08:38:07', '2022-05-30 08:38:07'),
(22, 1, 5, NULL, '2022-05-30 08:38:07', '2022-05-30 08:38:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_visitors`
--
ALTER TABLE `all_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_blog_slug_unique` (`blog_slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_district_name_unique` (`district_name`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisions_division_name_unique` (`division_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_slug_unique` (`product_slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_multiple_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `thanas_thana_name_unique` (`thana_name`),
  ADD KEY `thanas_division_id_foreign` (`division_id`),
  ADD KEY `thanas_district_id_foreign` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitors_category_id_foreign` (`category_id`),
  ADD KEY `visitors_product_id_foreign` (`product_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_visitors`
--
ALTER TABLE `all_visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  ADD CONSTRAINT `product_multiple_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thanas`
--
ALTER TABLE `thanas`
  ADD CONSTRAINT `thanas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thanas_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `visitors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
