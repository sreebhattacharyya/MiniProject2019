-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2019 at 06:11 AM
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
-- Database: `qbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `q&a`
--

DROP TABLE IF EXISTS `q&a`;
CREATE TABLE IF NOT EXISTS `q&a` (
  `Q. No.` varchar(6) NOT NULL,
  `Question&Options` text NOT NULL,
  `Correct Answer` varchar(6) NOT NULL,
  `SUBJECT` varchar(15) NOT NULL,
  `Type` text NOT NULL,
  `Sub-Topic` text NOT NULL,
  `Objective` varchar(1) NOT NULL,
  `Reference` varchar(100) NOT NULL,
  `Difficulty Level` text NOT NULL,
  `Estimated Time to Solve(in min)` varchar(5) NOT NULL,
  PRIMARY KEY (`Q. No.`)
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `q&a`
--

INSERT INTO `q&a` (`Q. No.`, `Question&Options`, `Correct Answer`, `SUBJECT`, `Type`, `Sub-Topic`, `Objective`, `Reference`, `Difficulty Level`, `Estimated Time to Solve(in min)`) VALUES
('Q.1', 'The lengths of the two sides of a Triangle, forming a right angle, are 3 and 4 units, respectively. What is the length of the third side?', 'Q1_3', 'MATHS', 'Geometry', 'Triangle', 'U', 'None', 'E', '1/2'),
('Q4_4', '', '', '', '', '', '', '', '', ''),
('Q1_1', '4', '', '', '', '', '', '', '', ''),
('Q1_2', '7', '', '', '', '', '', '', '', ''),
('Q1_3', '5', '', '', '', '', '', '', '', ''),
('Q1_4', '2', '', '', '', '', '', '', '', ''),
('Q2', 'The answer to this is option (1)', 'Q2_1', 'MATHS', 'Geometry', 'Circles', '', '', '', ''),
('Q2_1', '', '', '', '', '', '', '', '', ''),
('Q2_2', '', '', '', '', '', '', '', '', ''),
('Q2_3', '', '', '', '', '', '', '', '', ''),
('Q3', 'What is 3+3?', 'Q3_1', 'MATHS', 'Algebra', 'Numbers', '', '', '', ''),
('Q3_1', '6', '', '', '', '', '', '', '', ''),
('Q3_2', '7', '', '', '', '', '', '', '', ''),
('Q3_3', '2', '', '', '', '', '', '', '', ''),
('Q3_4', '1', '', '', '', '', '', '', '', ''),
('Q4', 'Who discovered proton?', 'Q4_2', 'CHEMISTRY', 'Atoms', 'Electronic Structure', '', '', '', ''),
('Q4_1', 'x', '', '', '', '', '', '', '', ''),
('Q4_2', 'y', '', '', '', '', '', '', '', ''),
('Q4_3', 'z', '', '', '', '', '', '', '', ''),
('Q5', 'How many colors are there in rainbow?', 'Q5_2', 'PHYSICS', 'Physical world', 'Light', '', '', '', ''),
('Q5_1', '6', '', '', '', '', '', '', '', ''),
('Q5_2', '7', '', '', '', '', '', '', '', ''),
('Q5_3', '5', '', '', '', '', '', '', '', ''),
('Q5_4', '8', '', '', '', '', '', '', '', ''),
('Q6', 'What is chemical symbol of water?', 'Q6_1', 'CHEMISTRY', 'Chemical Bond', 'Chemical Symbols', '', '', '', ''),
('Q6_1', 'H2O', '', '', '', '', '', '', '', ''),
('Q6_2', 'HO2', '', '', '', '', '', '', '', ''),
('Q6_3', 'H3O', '', '', '', '', '', '', '', ''),
('Q6_4', 'O', '', '', '', '', '', '', '', ''),
('Q7', 'What is the color sequence of rainbow?', 'Q7_3', 'PHYSICS', 'Physical World', 'Light', '', '', '', ''),
('Q7_1', 'VIBYOGR', '', '', '', '', '', '', '', ''),
('Q7_2', 'BVIGYOR', '', '', '', '', '', '', '', ''),
('Q7_3', 'VIBGYOR', '', '', '', '', '', '', '', ''),
('Q7_4', 'ROYGVIB', '', '', '', '', '', '', '', ''),
('Q8', 'What is chemical symbol of Oxygen?', 'Q8_3', 'CHEMISTRY', 'Chemical Bonds', 'Chemical  Symbols', '', '', '', ''),
('Q8_1', 'OX', '', '', '', '', '', '', '', ''),
('Q8_2', 'OXY', '', '', '', '', '', '', '', ''),
('Q8_3', 'O', '', '', '', '', '', '', '', ''),
('Q8_4', 'None of the above', '', '', '', '', '', '', '', ''),
('Q9', 'Which one of the following are sides of an equilateral triangle?', 'Q9_4', 'MATHS', 'Geometry', 'Triangles', '', '', '', ''),
('Q9_1', '2,2,2', '', '', '', '', '', '', '', ''),
('Q9_2', '3,3,3', '', '', '', '', '', '', '', ''),
('Q9_3', '4,4,4', '', '', '', '', '', '', '', ''),
('Q9_4', 'All of the above', '', '', '', '', '', '', '', ''),
('Q10', 'Who discovered neutron?', '', '', '', '', '', '', '', ''),
('Q10_1', 'CHADWICK', 'Q10_1', 'CHEMISTRY', 'Atoms', 'ELectronic Structure', '', '', '', ''),
('Q10_2', 'b', '', '', '', '', '', '', '', ''),
('Q10_3', 'c', '', '', '', '', '', '', '', ''),
('Q10_4', 'd ', '', '', '', '', '', '', '', ''),
('Q11', 'Who did Milikan Oil Drop experiment?', 'Q11_3', 'CHEMISTRY', 'Atoms', 'Electronic Structure', '', '', '', ''),
('Q11_1', 'Einstein', '', '', '', '', '', '', '', ''),
('Q11_2', 'Newton', '', '', '', '', '', '', '', ''),
('Q11_3', 'R.Milikan', '', '', '', '', '', '', '', ''),
('Q11_4', 'Giraffe', '', '', '', '', '', '', '', ''),
('Q12', 'Is 5=10?', 'Q12_1', 'MATHS', 'Algebra', 'Numbers', '', '', '', ''),
('Q12_1', 'No', '', '', '', '', '', '', '', ''),
('Q12_2', 'Yes', '', '', '', '', '', '', '', ''),
('Q12_3', 'None ', '', '', '', '', '', '', '', ''),
('Q12_4', 'All', '', '', '', '', '', '', '', ''),
('Q13', 'What is speed of sound in air?', 'Q13_1', 'PHYSICS', 'Physical Phenomena', 'Sound', '', '', '', ''),
('Q13_1', '340 m/s', '', '', '', '', '', '', '', ''),
('Q13_2', '200 m/s', '', '', '', '', '', '', '', ''),
('Q13_3', '300 m/s', '', '', '', '', '', '', '', ''),
('Q13_4', '390 m/s', '', '', '', '', '', '', '', ''),
('Q14', 'What is refractive index of air?', 'Q4_1', 'PHYSICS', 'Physical Phenomena', 'Light', '', '', '', ''),
('Q14_1', '1', '', '', '', '', '', '', '', ''),
('Q14_2', '1/2', '', '', '', '', '', '', '', ''),
('Q14_3', '1/3', '', '', '', '', '', '', '', ''),
('Q14_4', '1/4', '', '', '', '', '', '', '', ''),
('Q15', '8*9=?', 'Q15_2', 'MATHS', 'Algebra', 'Numbers', '', '', '', ''),
('Q15_1', '64', '', '', '', '', '', '', '', ''),
('Q15_2', '72', '', '', '', '', '', '', '', ''),
('Q15_3', '37', '', '', '', '', '', '', '', ''),
('Q15_4', '8', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `qstn`
--

DROP TABLE IF EXISTS `qstn`;
CREATE TABLE IF NOT EXISTS `qstn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `difficulty` enum('easy','medium','hard') DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `correct_option` int(11) DEFAULT NULL,
  `options` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qstn`
--

INSERT INTO `qstn` (`id`, `subject`, `time`, `difficulty`, `content`, `correct_option`, `options`) VALUES
(1, 'Maths', '00:03:00', 'medium', 'this this a question, ans is opt 1', 1, '1.a 2.b 3.c'),
(2, 'Maths', '00:03:00', 'medium', 'this is a  math qstn, answer is 2', 2, '1. opt1\r\n2. opt2\r\n3. opt3'),
(3, 'Maths', '00:03:00', 'medium', '2+2=?', 3, '1. 1\r\n2. 0\r\n3. 4'),
(4, 'Maths', '00:03:00', 'medium', '7+2=?', 1, '1. 9\r\n2. 4\r\n3. 4'),
(5, 'Physics', NULL, 'easy', 'Data/q1.txt', 1, '3'),
(6, 'Physics', NULL, 'medium', 'Data/q2.txt', 2, '4'),
(7, 'Physics', NULL, 'easy', 'Data/q3.txt', 1, '2'),
(8, 'Physics', NULL, 'medium', 'Data/q4.txt', 2, '6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
