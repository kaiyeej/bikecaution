-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 09:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikecaution_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bike_history`
--

CREATE TABLE `tbl_bike_history` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `origin_latlng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_latlng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinned_places`
--

CREATE TABLE `tbl_pinned_places` (
  `pinned_place_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `place_category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_latlng` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_remarks` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_category` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'A - Admin : B - Biker',
  `user_fname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_contact_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_category`, `user_fname`, `user_mname`, `user_lname`, `user_address`, `user_contact_number`, `username`, `password`, `date_added`, `date_modified`) VALUES
(1, 'A', 's', 's', 's', 's', 's', 's', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bike_history`
--
ALTER TABLE `tbl_bike_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `tbl_pinned_places`
--
ALTER TABLE `tbl_pinned_places`
  ADD PRIMARY KEY (`pinned_place_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bike_history`
--
ALTER TABLE `tbl_bike_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pinned_places`
--
ALTER TABLE `tbl_pinned_places`
  MODIFY `pinned_place_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
