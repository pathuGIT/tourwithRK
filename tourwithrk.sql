-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 22, 2025 at 04:37 AM
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
-- Database: `tourwithrk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'adminUser', '<hashed_password_here>'),
(2, 'secondAdmin', 'secondPass'),
(3, 'pathum', '$2y$10$CxEuKQz1nCUTUKq3JwKQre2SnTfTLIYMwueLeL74Rsup.K9dDjZD2'),
(4, 'lakshan', '$2y$10$xbuH/5Ullbl4UvsVQqc/xeY8CgFYYt3MlNPvpI6x1c8ck/9fRcQee');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `date_of_arrival` date NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `country`, `phone`, `email`, `number_of_guests`, `date_of_arrival`, `vehicle`, `created_at`, `status`) VALUES
(11, 'Pathum lakshan', 'Sri Lanka', '0000000000', 'pa00000000e@gmail.com', 6, '2024-07-16', 'van', '2024-07-10 08:33:10', 'expired'),
(12, 'janu', 'japan', '0000000000', '0000ige@gmail.com', 7, '2024-07-24', 'van', '2024-07-12 08:39:27', 'expired'),
(13, 'Pathum lakshan', 'Sri Lanka', '00000000', '000@gmail.com', 5, '2024-09-04', 'car', '2024-08-26 16:29:27', 'expired');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `check` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `country`, `feedback`, `image_path`, `check`) VALUES
(63, 'Hanny', 'none12@gmail.com', 'Germany', 'Fair price, quick and trustful.', '/tourwithRK/content/upload/u1.jpg', 1),
(64, 'David', 'none1@gmail.com', 'Israel', 'I drived with lakshan from the airport and then when i came back, he is a great guy, kind and very friendly and smiling, he help and show me places in the way that worth stopping, i enjoy the ride with his comfortable car. I really recommend on him 👍', '/tourwithRK/content/upload/u2.jpg', 1),
(65, 'Ganiliya virukoh', 'none3@gmail.com', 'Issrael', 'He drives very well and carefully and is very', '/tourwithRK/content/upload/girl.png', 1),
(66, 'Artamonov Evgeniy ', 'none4@gmail.com', 'Russia', 'Lakshan is responsible person. Driving fast and safely.', '/tourwithRK/content/upload/man.png', 1),
(68, 'lakshan', 'laky@gmail.com', 'Germany', 'Good', '/tourwithRK/content/upload/WIN_20240316_22_00_59_Pro.jpg', 1),
(74, 'lakshan', 'laks@gmail.com', 'Israel', 'good', '/tourwithRK/content/upload/pathum.jpg', 1),
(75, 'saman', 'saman@gmail.com', 'Sri Lanka', 'good', '/tourwithRK/content/upload/images.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
