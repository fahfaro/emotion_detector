-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2019 at 06:54 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emotion_detector`
--
CREATE DATABASE IF NOT EXISTS `emotion_detector` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emotion_detector`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_phone` varchar(14) NOT NULL,
  `user_type` int(11) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `added_by_id` int(11) NOT NULL,
  `added_date_time` datetime NOT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `username`, `user_email`, `user_password`, `user_phone`, `user_type`, `is_enabled`, `added_by_id`, `added_date_time`, `remarks`) VALUES
(1, 'Bilal Akhtar', 'ZXY@asd.com', '123', '123', 1, 1, 1, '2010-11-19 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `mood`
--

DROP TABLE IF EXISTS `mood`;
CREATE TABLE IF NOT EXISTS `mood` (
  `mood_id` int(11) NOT NULL AUTO_INCREMENT,
  `moodname_associated_emotion` varchar(50) NOT NULL,
  `added_by_id` int(11) NOT NULL,
  `added_date_time` datetime NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mood_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_title` varchar(60) NOT NULL,
  `item_path` varchar(255) NOT NULL,
  `added_by_id` int(11) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `added_date_time` datetime NOT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `playlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `playlist_name` varchar(50) NOT NULL,
  `mood_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `added_by_id` int(11) NOT NULL,
  `added_date_time` datetime NOT NULL,
  `is_enabled` tinyint(1) NOT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`playlist_id`),
  KEY `mood_id` (`mood_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
