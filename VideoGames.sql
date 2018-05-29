-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2018 at 12:51 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `VideoGames`
--

-- --------------------------------------------------------

--
-- Table structure for table `VideoGames`
--

CREATE TABLE IF NOT EXISTS `VideoGames` (
  `game_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Year` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `VideoGames`
--

INSERT INTO `VideoGames` (`game_id`, `title`, `genre`, `Year`) VALUES
(8, 'Fort', 'Battle Royale', ''),
(9, 'Mine', 'Adventure', ''),
(10, 'Poke', 'RPG', ''),
(11, 'Halo', 'FPS', ''),
(12, 'Robl', 'Everything', ''),
(13, '', '', ''),
(19, 'Fort', 'Battle Royale', NULL),
(20, 'Fort', 'Battle Royale', NULL),
(21, 'Fort', 'dwd''w', NULL),
(22, 'Cod', 'TPS', NULL),
(23, 'Call', 'TPS', NULL),
(24, 'Fort', 'FPS', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
