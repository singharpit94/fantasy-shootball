-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2014 at 07:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sas`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(10) NOT NULL,
  `1` varchar(25) DEFAULT NULL,
  `2` varchar(25) DEFAULT NULL,
  `3` varchar(25) DEFAULT NULL,
  `4` varchar(25) DEFAULT NULL,
  `5` varchar(25) DEFAULT NULL,
  `6` varchar(25) DEFAULT NULL,
  `7` varchar(25) DEFAULT NULL,
  `8` varchar(25) DEFAULT NULL,
  `9` varchar(25) DEFAULT NULL,
  `10` varchar(25) DEFAULT NULL,
  `11` varchar(25) DEFAULT NULL,
  `12` varchar(25) DEFAULT NULL,
  `13` varchar(25) DEFAULT NULL,
  `14` varchar(25) DEFAULT NULL,
  `15` varchar(25) DEFAULT NULL,
  `goal` int(10) DEFAULT NULL,
  `strike` int(10) DEFAULT NULL,
  `mid` int(10) DEFAULT NULL,
  `ford` int(10) DEFAULT NULL,
  `rest` int(10) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `budget` decimal(10,0) DEFAULT NULL,
  `points` int(100) DEFAULT NULL,
  `penality` int(10) DEFAULT NULL,
  `captain` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `goal`, `strike`, `mid`, `ford`, `rest`, `total`, `budget`, `points`, `penality`, `captain`) VALUES
(1, 'arpit singh', 'arpit singh', 'sammita ', 'xyz', 'sasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 0, 0, 0, 3, 5, '416', 118, 2, '43434'),
(2, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '500', 0, 0, NULL),
(3, 'ytytyt', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, 1, '268', 64, 0, 'ytytyt'),
(4, 'sammita ', 'sammita ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, 0, 0, 0, 2, '464', 40, 0, '3434'),
(5, 'fdfdfd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, 0, 1, '477', 34, 0, 'lll'),
(6, 'dfgfdgfdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, 0, 1, '468', 232, 0, NULL),
(7, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '500', 0, 0, NULL),
(8, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, '500', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `type` int(2) NOT NULL,
  `price` decimal(5,0) NOT NULL,
  `points` int(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `Name`, `type`, `price`, `points`, `status`) VALUES
(1, 'arpit singh', 1, '10', 15, 1),
(2, 'sammita ', 1, '18', 20, 1),
(3, 'xyz', 1, '23', 31, 1),
(4, 'sasa', 1, '23', 22, 1),
(5, 'fdfdfd', 1, '23', 34, 0),
(6, 'ytytyt', 3, '232', 32, 3),
(7, 'dsdsdsds', 4, '334', 28, 0),
(8, 'gfdcdff', 2, '32', 23, 0),
(9, 'dfgfdgfdg', 3, '32', 232, 6),
(10, 'dsdsdsdsd', 3, '23', 65, 0),
(11, 'lkllk', 3, '67', 45, 0),
(12, 'gfgfgfgf', 4, '3', 65, 0),
(13, 'fdfsdsdsdsd', 4, '12', 78, 0),
(14, 'vbvbvb', 4, '11', 22, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
