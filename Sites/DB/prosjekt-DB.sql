-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2022 at 11:38 PM
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
-- Database: `prosjekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` text NOT NULL,
  `long_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_phone` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `primary_room` varchar(255) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `rent_start` date DEFAULT NULL,
  `rent_end` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `location`, `price`, `description`, `long_description`, `image`, `owner`, `owner_email`, `owner_phone`, `date_added`, `primary_room`, `bedroom`, `floor`, `rent_start`, `rent_end`) VALUES
(37, 'Kristiansand', 6200, 'Hybel med kort vei til butikk og treningssenter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'hybel-401-red2-1024x682.jpg', 'Niklas Fugledal', 'niklasfugledal@live.no', '97737950', '2022-12-06 22:18:15', '25m2', '12m2', '2', '2023-01-01', '2023-07-01'),
(40, 'Søgne', 4200, 'Hybel utenfor Kristiansand med god belligenhet for friluftsliv', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ed033bf1d988455c9dedafcd9fb0254d.jpg.900x600_q95_crop_upscale.jpg', 'Niklas Fugledal', 'niklasfugledal@live.no', '97737950', '2022-12-06 22:32:34', '30m2', '16m2', '2', '2023-01-01', '2023-07-01'),
(39, 'Vågsbygd', 5200, 'Ny hybel med fin natur rundt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Torp-Campus-hybel.jpg', 'Niklas Fugledal', 'niklasfugledal@live.no', '97737950', '2022-12-06 22:25:09', '39m2', '15m2', '1', '2023-01-01', '2023-07-01'),
(11, 'Kristiansand', 6500, 'Nyoppusset! ferdig bygget 2020', 'asd', 'hybel401-red-1024x682.jpg', 'Niklas Fugledal', 'niklasfugledal@live.no', '97737950', '2022-12-01 12:14:34', '25m2', '8m2', '3', '2022-02-01', '2024-02-01'),
(35, 'Grimstad', 5500, 'Oppusset hybel i kollektiv', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Hybel_3-1.JPG', 'Niklas Fugledal', 'niklasfugledal@live.no', '97737950', '2022-12-04 18:58:25', '30m2', '12m2', '3.', '2023-01-01', '2023-07-01'),
(41, 'Kristiansand Sentrum', 6500, 'Sentral hybel med gode kollektivforbindelser', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '6e8ccb1a23bc4bccbca4a61102e8db48.jpg.900x600_q95_crop_upscale.jpg', 'Niklas Fugledal', 'niklasfugledal@live.no', '97737950', '2022-12-06 22:34:44', '50m2', '20m2', '3', '2023-01-01', '2023-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rent_start` date NOT NULL,
  `rent_end` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(255) NOT NULL,
  `house_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `request_start` date DEFAULT NULL,
  `request_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `house_id`, `user_id`, `request_start`, `request_end`) VALUES
(28, 8, 2, '2022-12-06', '2022-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `adress`, `cell`, `bday`, `password`, `type`) VALUES
(2, 'admin', 'admin@gmail.com', '', '', '0000-00-00', '$2y$10$ek57JlAgAzW52bjMjgurruZ2cG9eDxa7iI0iEr4BLKrxO9pOM/TMK', 'admin'),
(3, 'Tommy', 'tommyl17@uia.no', 'Kjerrheia 10D', '91165868', '1994-02-12', '$2y$10$LXP65TbNHH77HMCXuhKMfe4nTahijZg98weUOhrmxTrPmIBUBMmo6', 'renter'),
(8, 'Niklas Fugledal', 'niklasfugledal@live.no', 'Kristian IVs Gate 21', '97737950', '1999-08-04', '$2y$10$gIaEmhhkUxRIA9mLNG9QOu/lnjF42CsCCzXuSC3LyXmy8X9k2Fh3S', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_user_house` (`user_id`,`house_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
