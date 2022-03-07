-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 05:15 AM
-- Server version: 10.3.16-MariaDB
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
-- Database: `little&little`
--

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
(4, '2022_03_05_041543_create_package_ticket', 2),
(9, '2022_03_05_080731_create_order_ticket', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_ticket`
--

CREATE TABLE `tbl_order_ticket` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `sId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_order` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `quantity_ticket` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `date_use` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order_ticket`
--

INSERT INTO `tbl_order_ticket` (`order_id`, `sId`, `user_order`, `email`, `phone_number`, `quantity_ticket`, `package_id`, `date_use`, `created_at`, `updated_at`) VALUES
(47, 'tt57js19k68glgf3bdls1knoeq', 'Trần Đức Toàn', 'toan.job@gmail.com', '6565656', 3, 2, '5/03/2022', '2022-03-05 23:26:09', '2022-03-05 23:26:09'),
(48, 'tt57js19k68glgf3bdls1knoeq', 'Trần Đức Toàn', 'toan.job@gmail.com', '6565656', 3, 2, '5/03/2022', '2022-03-05 23:28:00', '2022-03-05 23:28:00'),
(49, 'tt57js19k68glgf3bdls1knoeq', 'Trần Đức Toàn_test', 'toan.job@gmail.com', '323222222222222', 5, 1, '5/03/2022', '2022-03-05 23:42:30', '2022-03-05 23:42:30'),
(50, 'tt57js19k68glgf3bdls1knoeq', 'Trần Đức Toàn_test1', 'toan.job@gmail.com', '323222222222222', 5, 1, '5/03/2022', '2022-03-05 23:43:49', '2022-03-05 23:43:49'),
(51, 'tt57js19k68glgf3bdls1knoeq', 'Trần Đức Toàn_test1', 'toan.job@gmail.com', '323222222222222', 5, 1, '5/03/2022', '2022-03-05 23:43:58', '2022-03-05 23:43:58'),
(52, 'tt57js19k68glgf3bdls1knoeq', 'Trần Đức Toàn_test2', 'toan.job@gmail.com', '323222222222222', 5, 1, '5/03/2022', '2022-03-05 23:46:51', '2022-03-05 23:46:51'),
(53, 'tt57js19k68glgf3bdls1knoeq', 'NGuyen minh tuan', 'toantdgcs@gmail.com', '234244', 3, 2, '5/03/2022', '2022-03-05 23:49:08', '2022-03-05 23:49:08'),
(54, 'rdep10mifmdubmecri79a0akbh', 'Trần Đức Toàn', 'toantdgcs@gmail.com', '0837943763', 2, 3, '6/03/2022', '2022-03-06 02:12:21', '2022-03-06 02:12:21'),
(55, 'rdep10mifmdubmecri79a0akbh', 'Nguyễn Quang Khải', 'abc_text@gmail.com', '083798554', 5, 1, '6/03/2022', '2022-03-06 02:28:27', '2022-03-06 02:28:27'),
(56, 'o6q7q2bafhu49fkvchdj3o9igc', 'Trần Đức Toàn', 'toantdgcs@gmail.com', '012345678', 3, 1, '5/03/2022', '2022-03-06 06:23:58', '2022-03-06 06:23:58'),
(57, 'o6q7q2bafhu49fkvchdj3o9igc', 'Jecia', 'toan.job@gmail.com', '012456', 6, 1, '6/03/2022', '2022-03-06 07:03:10', '2022-03-06 07:03:10'),
(58, 'i3a3lecuip3puq9l0nbmqr73o2', 'Trần Đức Toàn', 'toan_test@gmail.com', '0123456789', 10, 1, '07/03/2022', '2022-03-06 21:06:50', '2022-03-06 21:06:50'),
(59, 'i3a3lecuip3puq9l0nbmqr73o2', 'Trần Đức Toàn', 'toan.job@gmail.com', '546464646', 3, 2, '07/03/2022', '2022-03-06 21:07:32', '2022-03-06 21:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packageticket`
--

CREATE TABLE `tbl_packageticket` (
  `package_id` int(10) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `package_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_packageticket`
--

INSERT INTO `tbl_packageticket` (`package_id`, `package_name`, `package_code`, `package_price`, `created_at`, `updated_at`) VALUES
(1, 'Gói gia đình', 'ALT205896', 35, '2022-03-04 17:00:00', '2022-03-04 17:00:00'),
(2, 'Gói cá nhân', 'ALT3678945', 40, NULL, NULL),
(3, 'Gói cho học sinh', 'ALT1235555', 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_order_ticket`
--
ALTER TABLE `tbl_order_ticket`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_packageticket`
--
ALTER TABLE `tbl_packageticket`
  ADD PRIMARY KEY (`package_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order_ticket`
--
ALTER TABLE `tbl_order_ticket`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_packageticket`
--
ALTER TABLE `tbl_packageticket`
  MODIFY `package_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
