-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 11:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recommendation_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pass` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
(1, 'admin'),
(2, 'thanh'),
(3, 'tung');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(12, 'user1'),
(13, 'user2'),
(14, 'user3'),
(15, 'user4');

-- --------------------------------------------------------

--
-- Table structure for table `user_movies`
--

CREATE TABLE `user_movies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_movies`
--

INSERT INTO `user_movies` (`id`, `user_id`, `movie_name`, `movie_rating`) VALUES
(67, 12, 'Shen', '78'),
(68, 12, 'Fiora', '55'),
(69, 12, 'Darius', '90'),
(70, 12, 'Zac', '78'),
(71, 12, 'Olaf', '100'),
(72, 12, 'Garen', '90'),
(73, 12, 'Warwick', '99'),
(74, 12, 'Kled', '77'),
(75, 12, 'Gwen', '50'),
(76, 12, 'Nasus', '88'),
(77, 13, 'Yasuo', '33'),
(78, 13, 'Fiora', '71'),
(79, 13, 'Teemo', '70'),
(80, 13, 'Zac', '80'),
(81, 13, 'Olaf', '90'),
(82, 13, 'Udyr', '90'),
(83, 13, 'Gangplank', '60'),
(84, 13, 'Poppy', '43'),
(85, 13, 'Quinn', '75'),
(86, 13, 'Nasus', '88'),
(87, 14, 'Urgot', '100'),
(88, 14, 'Sett', '88'),
(89, 14, 'Darius', '11'),
(90, 14, 'Zorick', '54'),
(91, 14, 'Leesin', '76'),
(92, 14, 'Udyr', '70'),
(93, 14, 'Gangplank', '64'),
(94, 14, 'Malphite', '40'),
(95, 14, 'Kayle', '74'),
(96, 14, 'Singed', '50'),
(97, 15, 'Shen', '100'),
(98, 15, 'Mordekaiser', '87'),
(99, 15, 'Camille', '81'),
(100, 15, 'Akshan', '98'),
(101, 15, 'Olaf', '12'),
(102, 15, 'Garen', '0'),
(103, 15, 'Warwick', '0'),
(104, 15, 'Renekton', '43'),
(105, 15, 'Gwen', '69'),
(106, 15, 'Maokai', '18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_movies`
--
ALTER TABLE `user_movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_movies`
--
ALTER TABLE `user_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
