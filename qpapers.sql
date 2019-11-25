-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2019 at 06:21 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qpapers`
--

-- --------------------------------------------------------

--
-- Table structure for table `exqp1`
--

DROP TABLE IF EXISTS `exqp1`;
CREATE TABLE IF NOT EXISTS `exqp1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qref` int(11) NOT NULL,
  `response` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_ref` (`qref`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exqp1`
--

INSERT INTO `exqp1` (`id`, `qref`, `response`) VALUES
(1, 5, 1),
(2, 6, NULL),
(3, 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reg_qpaper`
--

DROP TABLE IF EXISTS `reg_qpaper`;
CREATE TABLE IF NOT EXISTS `reg_qpaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `auth` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_qpaper`
--

INSERT INTO `reg_qpaper` (`id`, `name`, `auth`) VALUES
(1, 'exqp1', 'Amor');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exqp1`
--
ALTER TABLE `exqp1`
  ADD CONSTRAINT `question_ref` FOREIGN KEY (`qref`) REFERENCES `qbank`.`qstn` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
