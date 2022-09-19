-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 02:01 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbrcdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Name`, `Email`, `Password`, `Date`) VALUES
(2, 'Proser', 'superadmin@gmail.com', 'P@ss12341997Best', '2022-09-03 16:12:00'),
(3, 'pastor chris', 'chris@gmail.com', 'P@ss12341997Best', '2022-09-09 17:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `sermon_id` int(11) NOT NULL,
  `theme` varchar(200) NOT NULL,
  `verse` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `preacher` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `scripture` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sermons`
--

INSERT INTO `sermons` (`sermon_id`, `theme`, `verse`, `thumbnail`, `preacher`, `service`, `scripture`, `link`) VALUES
(10, 'The power of God', 'mathew', 'm2.jpg', 'kafuko', 'LABservice', 'gggggggggggggggg', 'youtube.com'),
(11, 'Discovery of your appointment', 'Jeremiah 1:4', 'm8.jpg', 'Pr Chris', 'Main service', 'the word of the lord came me saying...', 'youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_links`
--

CREATE TABLE `social_media_links` (
  `social_id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media_links`
--

INSERT INTO `social_media_links` (`social_id`, `facebook`, `instagram`, `youtube`, `twitter`) VALUES
(1, 'www.facebook.com', 'www.instagram.com/church', 'www.youtube.com', 'www.twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date`) VALUES
(1, 'derrick@gmail.com', '2022-08-15 21:42:36'),
(2, 'Isaac@gmail.com', '2022-08-15 21:53:30'),
(3, 'katwalo@gmail.com', '2022-08-17 22:46:18'),
(4, 'isaacmwiyikinwa08@gmail.com', '2022-08-23 10:23:02'),
(5, 'august@gmail.com', '2022-09-03 15:53:28'),
(9, 'kayanja@gmail.com', '2022-09-09 20:23:19'),
(10, 'crispus@gmail.com', '2022-09-10 08:58:54'),
(11, 'superadmin@gmail.com', '2022-09-10 20:01:05'),
(12, 'muwanguzi@gmail.com', '2022-09-15 08:48:18'),
(13, 'isaacmwiyikinwa08@gmail.com', '2022-09-16 23:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `theme_id` int(11) NOT NULL,
  `m_theme` varchar(200) NOT NULL,
  `m_confession` varchar(200) NOT NULL,
  `y_theme` varchar(200) NOT NULL,
  `y_confession` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`theme_id`, `m_theme`, `m_confession`, `y_theme`, `y_confession`) VALUES
(1, 'This is my month of stepping on the kingdom stage to be appointed', 'I have my great discovery', 'This is my year of stepping on kingdom stage', 'Am a steward in the kingdom of God');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sermons`
--
ALTER TABLE `sermons`
  ADD PRIMARY KEY (`sermon_id`);

--
-- Indexes for table `social_media_links`
--
ALTER TABLE `social_media_links`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`theme_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `sermon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `social_media_links`
--
ALTER TABLE `social_media_links`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
