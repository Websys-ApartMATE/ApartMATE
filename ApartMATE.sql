-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2019 at 10:41 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `msg_to` smallint(3) NOT NULL,
  `msg_from` smallint(3) NOT NULL,
  `contents` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `listings` (
  `listing_id` int(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `sqft` int(50) NOT NULL,
  `bed` int(2) NOT NULL,
  `bath` int(2) NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `times` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(2) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `utilites` int(1) NOT NULL,
  `landlord` smallint(3) NOT NULL,
  `Picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`listing_id`, `zip`, `address`, `price`, `sqft`, `bed`, `bath`, `description`, `times`, `rating`, `type`, `utilites`, `landlord`, `Picture`, `name`) VALUES
(1, 12180, '110 Colleen Rd, Troy, New York', 1783, 1200, 2, 1, 'High Speed Internet Access</br>\r\nHeating<br/>\r\nCeiling Fans<br/>\r\nSmoke Free', 'Mondays 5pm-9pm', 3, 'Lease', 0, 1, 'countryGardenPic.jpg', 'Country Garden Apartments'),
(2, 12180, '2 Stanton St, Troy, New York', 900, 700, 2, 2, 'High Speed Internet Access<br/>\r\nHeating<br/>\r\nSmoke Free<br/>', 'Monday 5pm-9pm', 3, 'Lease', 1, 3, 'hudsonPointe.jpg', 'Hudson Pointe'),
(3, 12180, '6 Ridgeway Ln, Troy, New York', 1200, 1000, 3, 1, 'Cable Ready<br/>\r\nStorage Units<br/>\r\nTub/Shower', 'Mondays 5pm-9pm', 3, 'Lease', 1, 3, 'duncanMeadows.jpg', 'The Summit at Duncan Meadows');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` smallint(3) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(15) NOT NULL,
  `dob` date NOT NULL,
  `rating` int(2) DEFAULT NULL,
  `user_type` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'test'@'%' IDENTIFIED BY PASSWORD '*C44E1F4F0C910DD1FDB5DCE5CA243964A07E2EDF'; /*PASSWORD: kuzmin*/

GRANT SELECT, INSERT, UPDATE, DELETE ON `ApartMATE`.* TO 'test'@'%';