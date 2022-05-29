-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 02:27 PM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `content_type`, `title`, `product_name`, `product_price`, `banner_photo`, `active_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'left', 'প্রচারের জন্য', 'চন্দন কাঠ', '9000', 'public/uploads/banner/sandalwood3.jpg', 1, 1, '2022-05-18 00:44:02', '2022-05-18 02:36:21'),
(2, 'right', '২৫% ডিস্কাউন্টে', 'লাল চন্দন কাঠ', '1000', 'public/uploads/banner/lalsandalwood.png', 1, 1, '2022-05-18 02:34:47', '2022-05-18 02:34:47');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_slug`, `writer`, `date`, `blog_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'চন্দনের কাঠের সাথে এর গুরা', 'sandal-wood', 'আরিফ', '2022-05-23', 'public/uploads/blog/Sandalwood.jpg', '2022-05-23 05:14:35', '2022-05-23 05:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `category_icon`, `category_thumbnail`, `category_status`, `status`, `created_at`, `updated_at`) VALUES
(2, 'মধু', 'honey', '<i class=\"fas fa-coffee\"></i>', 'public/uploads/categorymisro.png', '2', 1, '2022-05-17 06:32:30', '2022-05-20 23:52:13'),
(3, 'চন্দন কাঠ', 'sandal-wood', '<i class=\"far fa-edit\"></i>', 'public/uploads/categorySandalwood.jpg', '2', 1, '2022-05-17 07:59:20', '2022-05-20 23:51:58'),
(4, 'তেতুল চাটনী', 'tetuk-chatni', '<i class=\"fab fa-penny-arcade\"></i>', 'public/uploads/categorytetul chatni.jpg', '1', 1, '2022-05-18 02:52:59', '2022-05-20 23:02:10'),
(5, 'মোম', 'candle', '<i class=\"fas fa-coffee\"></i>', 'public/uploads/categorymom.jpg', '1', 1, '2022-05-18 02:53:08', '2022-05-20 23:04:28'),
(6, 'বাদাম', 'nuts', '<i class=\"fas fa-coffee\"></i>', 'public/uploads/categoryhaninut.jpg', '2', 1, '2022-05-18 02:53:18', '2022-05-20 23:03:34'),
(11, 'Basic Computer', 'basic-computer', '<i class=\"fas fa-coffee\"></i>', 'public/uploads/categoryhaninut.jpg', '2', 0, '2022-05-19 03:58:16', '2022-05-20 23:04:17');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity_date`, `active_status`, `status`, `created_at`, `updated_at`) VALUES
(1, '2k', 10, '2022-05-28', 1, 1, '2022-05-28 02:41:26', '2022-05-28 02:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Rajbari', 1, '2022-05-26 02:27:48', '2022-05-26 03:12:46'),
(2, '1', 'Foridpur', 1, '2022-05-26 04:23:38', '2022-05-26 04:23:38'),
(3, '1', 'Pangsha', 1, '2022-05-26 04:23:52', '2022-05-26 04:23:52'),
(4, '2', 'Lalmonirhat', 1, '2022-05-26 04:24:08', '2022-05-26 04:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2022-05-26 02:27:04', '2022-05-26 02:27:04'),
(2, 'Rongpur', 1, '2022-05-26 02:27:12', '2022-05-26 03:08:51');

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
(10, '2022_05_18_060135_create_banners_table', 2),
(11, '2022_05_22_051207_create_blogs_table', 3),
(12, '2022_05_24_083612_create_wishlists_table', 4),
(32, '2022_05_25_045909_create_divisions_table', 5),
(33, '2022_05_25_053330_create_coupons_table', 5),
(34, '2022_05_26_071244_create_districts_table', 5),
(35, '2022_05_26_091730_create_thanas_table', 6),
(54, '2022_05_28_085439_create_orders_table', 7),
(55, '2022_05_28_132000_create_order_items_table', 7);

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
  `product_discount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `short_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_offer` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_qty`, `product_code`, `product_price`, `product_discount`, `short_description`, `long_description`, `product_thumbnail`, `product_slider_img`, `special_offer`, `product_slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'খাটি মধু', '111', 'প্রোডাক্টের কোড u', '2000', '20', '<p>1111</p>', '<p>1111</p>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/haninut.jpg', NULL, 'honey-nuts-new', 1, '2022-05-17 06:33:00', '2022-05-21 02:59:28'),
(3, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '0', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/sandalwood2.jpg', NULL, 'tetul-chatni2', 1, '2022-05-17 07:59:47', '2022-05-21 02:59:13'),
(4, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '10', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni1', 1, '2022-05-18 04:13:12', '2022-05-21 02:58:55'),
(5, 2, 'খাটি মধু', '111', 'প্রোডাক্টের কোড u', '2000', '20', '<p>1111</p>', '<p>1111</p>', 'public/uploads/product/haninut.jpg', 'public/uploads/product_banner/modhu.jpg', NULL, 'honey-nuts', 1, '2022-05-17 06:33:00', '2022-05-21 02:58:38'),
(6, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood', 1, '2022-05-17 07:59:47', '2022-05-21 02:58:22'),
(7, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni', 1, '2022-05-18 04:13:12', '2022-05-21 02:58:05'),
(8, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red', 1, '2022-05-18 23:34:37', '2022-05-21 02:09:01'),
(30, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood-wood', 1, '2022-05-17 07:59:47', '2022-05-21 02:58:22'),
(31, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-ni', 1, '2022-05-18 04:13:12', '2022-05-21 02:58:05'),
(32, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red-red', 1, '2022-05-18 23:34:37', '2022-05-21 02:09:01'),
(33, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-nid', 1, '2022-05-18 04:13:12', '2022-05-21 02:58:05'),
(34, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-redred', 1, '2022-05-18 23:34:37', '2022-05-21 02:09:01'),
(35, 3, 'লাল চন্দন কাঠ', '1', '1', '100', '10', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing</span><br></div>', '<div style=\"color: rgb(253, 255, 241); background-color: rgb(39, 40, 34); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: rgb(33, 37, 41); font-family: RationalDisplay-Book, sans-serif; font-size: 24px; white-space: normal; background-color: rgb(252, 252, 252);\">The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.</span><br></div>', 'public/uploads/product/lalsandalwood2.jpg', 'public/uploads/product_banner/lalsandalwood.png', NULL, 'red-shandal-wood-woodre', 1, '2022-05-17 07:59:47', '2022-05-21 02:58:22'),
(36, 4, 'তেতুল চাটনি', '10', '১২৩৪৫৬৭৮', '100', '0', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p>', '<p class=\"mb-2\" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; font-family: Poppins, sans-serif; font-size: 14px; line-height: 1.86; color: rgb(102, 102, 102); margin-bottom: 1rem !important;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য বৃদ্ধি করে, ভঙ্গুরতা রোধ করে।</p><ul class=\"mb-8\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\"><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li><li style=\"box-sizing: inherit; position: relative; padding-left: 2.4rem;\">শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়।</li></ul>', 'public/uploads/product/tetul chatni.jpg', 'public/uploads/product_banner/tetul chatni.jpg', NULL, 'tetul-chatni-nii', 1, '2022-05-18 04:13:12', '2022-05-21 02:58:05'),
(37, 2, 'খাটি মধু', '0', '১২৩৪৫৬৭৮', '500', '10', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে&nbsp;</span><br></p>', '<p><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">সাধারণভাবে বলা যায়-&nbsp;</span><b style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">মধু</b><span style=\"color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(32, 33, 36);\">&nbsp;হলো লাখ লাখ মৌমাছির অক্লান্ত শ্রম আর সেবাব্রতী জীবনের দান। মৌমাছিরা ফুলে ফুলে বিচরণ করে ফুলের রেণু ও মিষ্টি রস সংগ্রহ করে পাকস্থলীতে রাখে। তারপর সেখানে মৌমাছির মুখ নিঃসৃত লালা মিশ্রিত হয়ে রাসায়নিক জটিল</span><br></p>', 'public/uploads/product/misro.png', 'public/uploads/product_banner/misro.png', '1', 'honey-red-redred', 1, '2022-05-18 23:34:37', '2022-05-21 02:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_multiple_images`
--

CREATE TABLE `product_multiple_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `multiple_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_multiple_images`
--

INSERT INTO `product_multiple_images` (`id`, `multiple_image`, `status`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 'public/uploads/product/smart-phone-half-block.jpg', 1, 2, '2022-05-17 06:33:00', '2022-05-17 06:33:00'),
(4, 'public/uploads/product/Untitled-1.jpg', 1, 2, '2022-05-17 06:33:00', '2022-05-17 06:33:00'),
(5, 'public/uploads/product/smart-phone-half-block.jpg', 1, 3, '2022-05-17 07:59:47', '2022-05-17 07:59:47'),
(6, 'public/uploads/product/NationalFlag.jpg', 1, 3, '2022-05-17 07:59:47', '2022-05-17 09:08:43'),
(7, 'public/uploads/product/sandalwood3.jpg', 1, 4, '2022-05-18 04:13:12', '2022-05-18 04:13:12'),
(8, 'public/uploads/product/tetul chatni.jpg', 1, 4, '2022-05-18 04:13:12', '2022-05-18 04:13:12'),
(9, 'public/uploads/product/misro.png', 1, 8, '2022-05-18 23:34:37', '2022-05-18 23:34:37'),
(10, 'public/uploads/product/modhu.jpg', 1, 8, '2022-05-18 23:34:37', '2022-05-18 23:34:37'),
(11, 'public/uploads/product/mosla.jpg', 1, 8, '2022-05-18 23:34:37', '2022-05-18 23:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `thanas`
--

CREATE TABLE `thanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanas`
--

INSERT INTO `thanas` (`id`, `division_id`, `district_id`, `thana_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '3', 'Rajbari', 1, '2022-05-26 04:32:11', '2022-05-26 04:32:11'),
(2, '2', '4', 'Adidmari', 1, '2022-05-26 06:22:20', '2022-05-26 08:14:00');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$uWZb0VopV1aV/uUGcIqoBOklS5oo2blDxWGQEOr/4xbeghzOXR1Ca', NULL, '2022-05-17 06:26:52', '2022-05-17 06:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(15, 1, 4, '2022-05-28 01:59:26', '2022-05-28 01:59:26'),
(16, 1, 7, '2022-05-28 01:59:33', '2022-05-28 01:59:33'),
(17, 1, 2, '2022-05-29 02:58:30', '2022-05-29 02:58:30'),
(18, 1, 2, '2022-05-29 02:58:30', '2022-05-29 02:58:30'),
(19, 1, 3, '2022-05-29 05:38:05', '2022-05-29 05:38:05'),
(20, 1, 3, '2022-05-29 05:38:05', '2022-05-29 05:38:05');

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `slug` (`slug`);

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
  ADD UNIQUE KEY `districts_district_name_unique` (`district_name`);

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
  ADD UNIQUE KEY `product_slug` (`product_slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_multiple_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `thanas`
--
ALTER TABLE `thanas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `thanas_thana_name_unique` (`thana_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_multiple_images`
--
ALTER TABLE `product_multiple_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thanas`
--
ALTER TABLE `thanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
