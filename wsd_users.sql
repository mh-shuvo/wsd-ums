-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2024 at 07:07 AM
-- Server version: 8.2.0
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsd_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `type` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `username`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(4, 'user', 'shuvo', 'shuvo1@gmail.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-05 10:40:30', '2024-02-06 06:39:15'),
(5, 'admin', 'admin', 'admin@gmail.com', '$2y$10$BZVnn8aYUHpb9a3BAiV/EuNnVGOp2F9evZvVEzH.1RRS8n6t7gOQW', 'active', '2024-02-05 10:40:30', '2024-02-05 19:18:16'),
(6, 'user', 'user1', 'user1@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(7, 'user', 'user2', 'user2@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(8, 'user', 'user3', 'user3@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(9, 'user', 'user4', 'user4@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(10, 'user', 'user5', 'user5@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(11, 'user', 'user6', 'user6@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(12, 'user', 'user7', 'user7@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(13, 'user', 'user8', 'user8@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(14, 'user', 'user9', 'user9@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(15, 'user', 'user10', 'user10@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(16, 'user', 'user11', 'user11@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(17, 'user', 'user12', 'user12@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(18, 'user', 'user13', 'user13@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(19, 'user', 'user14', 'user14@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(20, 'user', 'user15', 'user15@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(21, 'user', 'user16', 'user16@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(22, 'user', 'user17', 'user17@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(23, 'user', 'user18', 'user18@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(24, 'user', 'user19', 'user19@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(25, 'user', 'user20', 'user20@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(26, 'user', 'user21', 'user21@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(27, 'user', 'user22', 'user22@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(28, 'user', 'user23', 'user23@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(29, 'user', 'user24', 'user24@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(30, 'user', 'user25', 'user25@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(31, 'user', 'user26', 'user26@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(32, 'user', 'user27', 'user27@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(33, 'user', 'user28', 'user28@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(34, 'user', 'user29', 'user29@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(35, 'user', 'user30', 'user30@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(36, 'user', 'user31', 'user31@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(37, 'user', 'user32', 'user32@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(38, 'user', 'user33', 'user33@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(39, 'user', 'user34', 'user34@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(40, 'user', 'user35', 'user35@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(41, 'user', 'user36', 'user36@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(42, 'user', 'user37', 'user37@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(43, 'user', 'user38', 'user38@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(44, 'user', 'user39', 'user39@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(45, 'user', 'user40', 'user40@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(46, 'user', 'user41', 'user41@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(47, 'user', 'user42', 'user42@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(48, 'user', 'user43', 'user43@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(49, 'user', 'user44', 'user44@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(50, 'user', 'user45', 'user45@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(51, 'user', 'user46', 'user46@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(52, 'user', 'user47', 'user47@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(53, 'user', 'user48', 'user48@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(54, 'user', 'user49', 'user49@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54'),
(55, 'user', 'user50', 'user50@example.com', '$2y$10$8eFLn9mQFDdi3QqX156B9eXIfNgDX1yzeSHsnfhzZHYd/VYdLj0UK', 'active', '2024-02-06 06:37:52', '2024-02-06 06:39:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
