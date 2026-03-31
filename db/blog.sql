-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2026 at 01:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_picture`, `user_type`, `updated_at`, `created_at`) VALUES
(3, 'jessica doe', 'jessica@gmail.com', '$2y$10$TOp6USqAyD/GO4R9QOiSpeBEJ4jI0/ZdAQd/Lo0Km.buN2qRZ3XDy', '', 0, '2026-03-27 10:01:58', '2026-03-27 10:01:58'),
(4, 'jean doe', 'jean@gmail.com', '$2y$10$JYD8/4KZvc/VDzNeUf3xYOQuLe9b74kD5B/b0aovbnVf8DoMDEAZO', '', 0, '2026-03-27 10:03:25', '2026-03-27 10:03:25'),
(5, 'james doe', 'james@gmail.com', '$2y$10$48qpw3gUx/P2lT04KzrwyeXpr0JO6JKawefXVC9c1nO1Dc..BGxde', '', 0, '2026-03-27 10:06:24', '2026-03-27 10:06:24'),
(6, 'jerry doe', 'jerry@gmail.com', '$2y$10$ZJrYUAObCXrkL4bWkehlNulSWa.GHPtzndQ5rKFU2uqzkkuRfidC6', '', 0, '2026-03-27 10:08:04', '2026-03-27 10:08:04'),
(8, 'Kenneth Otis', 'developerkenneth9696@gmail.com', '$2y$10$XuYuuIIOfZ/qz7HApNZLG.QDmFLes0qg/MdPhDbDZK5K5BGc/GRua', '', 1, '2026-03-27 10:13:15', '2026-03-27 10:13:15'),
(9, 'jude doe', 'jude@testmail.com', '$2y$10$5TF0KEBWqhSXJgg7HWF9KuaADVsZVMEV4GuYHjzFoQWBoYT.yEviu', '', 0, '2026-03-27 10:51:13', '2026-03-27 10:51:13'),
(10, 'Prince ', 'Prince@gmail.com', '$2y$10$Ygl2Lj0/tJVAxwno4Uth1ezmGdtwzWG97F.Fe0TZBlyqQf9WV4lX2', '', 0, '2026-03-27 10:57:17', '2026-03-27 10:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
