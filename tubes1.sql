-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 02:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `kode` varchar(11) NOT NULL,
  `nama_dish` varchar(50) NOT NULL,
  `category` varchar(10) NOT NULL,
  `price` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`kode`, `nama_dish`, `category`, `price`, `description`, `foto`) VALUES
('B01', 'Iced Matcha Latte', 'Baverage', 'IDR 27.000,-', '<p><strong>ICED MATCHA LATTE</strong></p>', 'dessert2.jpg'),
('D01', 'Matcha Mille Crepe', 'Dessert', 'IDR 36.000,-', '<p><strong>Matcha Mille Crepe</strong></p>', 'mille.jpg'),
('D02', 'Matcha Molten Lava', 'Dessert', 'IDR 47.000,-', '<p><strong>Matcha Molten Lava</strong></p>', 'lava.jpg'),
('D03', 'Matcha Mousse Cake', 'Dessert', 'IDR 30.000,-', '<p><strong>Matcha Mousse Cake</strong></p>', 'mousse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `security_images`
--

CREATE TABLE `security_images` (
  `ID` int(11) NOT NULL,
  `insertdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `referenceid` varchar(100) NOT NULL DEFAULT '',
  `hiddentext` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_images`
--

INSERT INTO `security_images` (`ID`, `insertdate`, `referenceid`, `hiddentext`) VALUES
(1, '2018-12-09 13:42:46', '5af23934108554ac655b0f6c4e7ac01a', 'u5qOdkdA'),
(2, '2018-12-12 11:05:06', 'df8db6c73e3dbc514d99734251861d5b', 'ESu3gcpJ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auth_user`
--

CREATE TABLE `tbl_auth_user` (
  `user_id` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_auth_user`
--

INSERT INTO `tbl_auth_user` (`user_id`, `user_password`) VALUES
('admin', 'admin'),
('user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_images`
--
ALTER TABLE `security_images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `security_images`
--
ALTER TABLE `security_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
