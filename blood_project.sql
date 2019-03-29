-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 05:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_doners`
--

CREATE TABLE `blood_doners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_district` text COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blood_doners`
--

INSERT INTO `blood_doners` (`id`, `name`, `address`, `email`, `contactNumber`, `home_district`, `about`, `image`, `publication`, `created_at`, `updated_at`) VALUES
(2, 'Julfier Hossain', 'Rangpur', 'julfier@gmail.com', '0122025952', 'Nilphamari', 'Julfier is a very good boy. i her.', '1550772569.jpg', 1, '2019-02-21 12:09:29', '2019-02-21 12:09:29'),
(29, 'Mashud Rana', 'Dhaka', 'mashud624496@gmail.com', '20115646546', 'Dhaka', 'dafgsdfhdfhgh', '1550937309.jpg', 0, '2019-02-23 04:31:58', '2019-02-23 10:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenus`
--

CREATE TABLE `mainmenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mainmenus`
--

INSERT INTO `mainmenus` (`id`, `menu_name`, `publication`, `created_at`, `updated_at`) VALUES
(2, 'About Us', 1, '2019-02-17 11:54:39', '2019-02-17 11:54:39'),
(3, 'Contact', 1, '2019-02-17 11:55:40', '2019-02-17 11:55:40'),
(4, 'Create', 1, '2019-02-17 11:57:10', '2019-02-17 11:57:10'),
(6, 'Socal', 1, '2019-02-17 11:59:50', '2019-02-17 11:59:50'),
(7, 'Home', 0, '2019-02-17 12:00:20', '2019-02-19 06:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_08_133956_create_roles_table', 1),
(4, '2019_02_13_202630_create_sliders_table', 2),
(5, '2019_02_15_184234_create_mainmenus_table', 3),
(6, '2019_02_15_184919_create_mainmenus_table', 4),
(7, '2019_02_18_070936_create_socal_links_table', 5),
(8, '2019_02_18_122327_create_submenus_table', 6),
(9, '2019_02_20_105435_create_blood_doners_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$MOuZLell.FOeApKfFC6zAu8.l0s07.dxNJJxWvmTZq.gbH3qp/izW', '2019-02-08 15:01:23'),
('mashud624496@gmail.com', '$2y$10$k6.w11jkfKH5ZrHj3ukHMugix27OqdXFiHeLlL5GxMb4FLBK3Wa3W', '2019-02-17 07:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2019-02-08 08:03:07', '2019-02-08 08:03:07'),
(2, 'Author', 'author', '2019-02-08 08:03:07', '2019-02-08 08:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publication` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `publication`, `created_at`, `updated_at`) VALUES
(19, '1550231284.jpg', 1, '2019-02-15 05:48:05', '2019-02-15 05:48:05'),
(20, '1550231294.jpg', 1, '2019-02-15 05:48:15', '2019-02-15 05:48:15'),
(21, '1550231302.jpg', 1, '2019-02-15 05:48:23', '2019-02-15 05:48:23'),
(22, '1550231308.jpg', 1, '2019-02-15 05:48:29', '2019-02-15 05:48:29'),
(23, '1550232630.jpg', 1, '2019-02-15 06:10:31', '2019-02-15 06:10:31'),
(24, '1550232639.jpg', 1, '2019-02-15 06:10:40', '2019-02-15 06:10:40'),
(25, '1550232646.jpg', 1, '2019-02-15 06:10:47', '2019-02-15 06:10:47'),
(26, '1550232652.jpg', 1, '2019-02-15 06:10:53', '2019-02-15 06:10:53'),
(27, '1550232659.jpg', 1, '2019-02-15 06:10:59', '2019-02-15 06:10:59'),
(28, '1550232667.jpg', 0, '2019-02-15 06:11:08', '2019-02-17 12:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `socal_links`
--

CREATE TABLE `socal_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci,
  `twitter` text COLLATE utf8_unicode_ci,
  `google` text COLLATE utf8_unicode_ci,
  `in` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `socal_links`
--

INSERT INTO `socal_links` (`id`, `facebook`, `twitter`, `google`, `in`, `created_at`, `updated_at`) VALUES
(4, 'https://www.youtube', 'https://www.youtube.com/watch?v', 'https://www.youtube.com/watch?v=E4HtYArLiwc', 'https://www.youtube.com/watch?v=E4HtYArLiwc', '2019-02-19 00:40:24', '2019-02-19 03:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_nav` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `menu_id`, `sub_nav`, `created_at`, `updated_at`) VALUES
(3, 6, 'Man', '2019-02-18 13:14:35', '2019-02-18 13:14:35'),
(5, 7, 'Home2', '2019-02-19 00:37:08', '2019-02-19 00:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'md.admin', 'admin@gmail.com', NULL, '$2y$10$7qbegPRxpjUo/xeejXkh1.H.9nON60f5.XMWFncn6dPHPTevTWjGa', 'default.png', 'XyUd7z8HYoQVzJkzr6NI8iEu77nz9V4vbV5HRUmZkXChM13Tl64OX7G3LEUl', '2019-02-08 08:03:07', '2019-02-08 08:03:07'),
(2, 2, 'md.author', 'author@gmail.com', NULL, '$2y$10$f68EH61sRMCc7zk/IxMJYOXC8Ilzi9fr4ePjaJ25zSeS6oxpj/3QC', 'default.png', 'EJSyajz7KZQcfgSRonOguJ8dSI7X6g6LQ18c4nQ3Ywd96uSEm9rcYt8FLCzr', '2019-02-08 08:03:07', '2019-02-08 08:03:07'),
(4, 2, 'Zulfiker', 'zulfiker@gmail.com', NULL, '$2y$10$Az8q1YELRq7WP735fnCLaO8DKO.lVJ4tKZE0HiEgq//dYjNJu9lOa', 'default.png', '1tCWLN7ae2tsMWuZ6CxNHEBe6VW6wjhkQcfzOjlwCFQ5iE6cQ7Gag9SZfFDQ', '2019-02-08 11:07:03', '2019-02-08 11:07:03'),
(5, 2, 'Mashud Rana', 'mashud624496@gmail.com', NULL, '$2y$10$XOC4zqLwZ3TUmmW9xI36c.P7lff/ypdOj5bwSX/cEyYvLYrde9Fl.', 'default.png', 'kaJ5uHxoTDKFTROpBjszJnOQq2i15MCeDLjEAQJEAAM3aHBOxZMErqjbh6o8', '2019-02-09 00:16:03', '2019-02-09 00:16:03'),
(6, 2, 'Mehedi', 'mehedi@gmail.com', NULL, '$2y$10$CQtEs3XTbyL1ULnPF0NPLO.r6fWGfiVkcxWOWjtsXeP3OY5IwRFGm', 'default.png', 'GoEH1hmx6LkxgXn91LWxwx3I2AMbmYW0RMSjAY0IaXA7NDltyUls1nAeZKIN', '2019-02-09 13:04:52', '2019-02-09 13:04:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_doners`
--
ALTER TABLE `blood_doners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmenus`
--
ALTER TABLE `mainmenus`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socal_links`
--
ALTER TABLE `socal_links`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_doners`
--
ALTER TABLE `blood_doners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mainmenus`
--
ALTER TABLE `mainmenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `socal_links`
--
ALTER TABLE `socal_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
