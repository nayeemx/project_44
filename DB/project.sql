-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2021 at 04:38 PM
-- Server version: 5.7.31
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_38`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

DROP TABLE IF EXISTS `employee_info`;
CREATE TABLE IF NOT EXISTS `employee_info` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(32) NOT NULL,
  `employee_email` varchar(32) NOT NULL,
  `employee_phone_no` varchar(32) NOT NULL,
  `employee_address` text NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `employee_name`, `employee_email`, `employee_phone_no`, `employee_address`) VALUES
(1, 'Mr. Mamun Khan65465465', 'mamun@gmail.com8498', '0178522666', 'Dhaka45464'),
(2, 'Mr. Tomal', 'tomal@gmail.com', '01911367868', 'Barisal'),
(3, 'Mr. Jony', 'jony@gmail.com', '01611367868', 'Barisal'),
(4, 'Mrs. Sumi', 'sumi@gmail.com', '01611367868', 'Dhaka'),
(6, 'fghh', 'fghfg', '65464', 'fghfgh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
