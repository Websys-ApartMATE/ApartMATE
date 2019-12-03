-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2019 at 06:18 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ApartMATE`
--
CREATE DATABASE IF NOT EXISTS `ApartMATE` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ApartMATE`;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `msg_to` smallint(3) NOT NULL,
  `msg_from` smallint(3) NOT NULL,
  `contents` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `chat`
--

TRUNCATE TABLE `chat`;
--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`timestamp`, `msg_to`, `msg_from`, `contents`) VALUES
('2019-11-28 02:38:13', 1, 2, 'Hello World'),
('2019-11-28 05:31:43', 2, 1, 'Hello, This is Andrew Smith. How are you doing today?');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
CREATE TABLE `listings` (
  `listing_id` int(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `street` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `sqft` int(50) NOT NULL,
  `bed` int(2) NOT NULL,
  `bath` int(2) NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `times` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(2) NOT NULL DEFAULT 5,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `utilites` int(1) DEFAULT NULL,
  `landlord` smallint(3) DEFAULT NULL,
  `Picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `listings`
--

TRUNCATE TABLE `listings`;
--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listing_id`, `zip`, `street`, `city`, `state`, `price`, `sqft`, `bed`, `bath`, `description`, `times`, `rating`, `type`, `utilites`, `landlord`, `Picture`, `name`) VALUES
(1, 12180, '110 Colleen Rd', 'Troy', 'NY', 1783, 1200, 2, 1, 'High Speed Internet Access</br>\r\nHeating<br/>\r\nCeiling Fans<br/>\r\nSmoke Free', 'Mondays 5pm-9pm', 3, 'Lease', 0, 1, 'countryGardenPic.jpg', 'Country Garden Apartments'),
(2, 12180, '2 Stanton St', 'Troy', 'NY', 900, 700, 2, 2, 'High Speed Internet Access<br/>\r\nHeating<br/>\r\nSmoke Free<br/>', 'Monday 5pm-9pm', 3, 'Lease', 1, 3, 'hudsonPointe.jpg', 'Hudson Pointe'),
(3, 12180, '6 Ridgeway Ln', 'Troy', 'NY', 1200, 1000, 3, 1, 'Cable Ready<br/>\r\nStorage Units<br/>\r\nTub/Shower', 'Mondays 5pm-9pm', 3, 'Lease', 1, 3, 'duncanMeadows.jpg', 'The Summit at Duncan Meadows');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` smallint(3) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(15) NOT NULL,
  `dob` date NOT NULL,
  `rating` int(2) DEFAULT NULL,
  `user_type` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `full_name`, `phone_number`, `dob`, `rating`, `user_type`) VALUES
(1, 'smitha24@rpi.edu', 'test', 'Andrew Smith', 1111111111, '1998-11-18', 5, 0),
(2, 'test@rpi.edu', 'test2', 'Bandrew Smith', 1111111112, '1978-02-25', 5, 0),
(3, 'test2@rpi.edu', 'test3', 'Candrew Smith', 1111111222, '1950-01-01', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`timestamp`),
  ADD KEY `msg_from` (`msg_from`),
  ADD KEY `msg_to` (`msg_to`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`listing_id`),
  ADD KEY `landlord` (`landlord`),
  ADD KEY `zip` (`zip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `listing_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`msg_from`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`msg_to`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_ibfk_1` FOREIGN KEY (`landlord`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
