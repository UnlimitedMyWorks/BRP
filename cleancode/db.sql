-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2019 at 01:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `fname` varchar(50) NOT NULL,
  `aadharNum` varchar(12) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`fname`, `aadharNum`, `mobile`, `dob`) VALUES
('Minnu', '123456789000', 1234567890, '2019-12-01'),
('Minnu r', '123456789001', 1234567891, '2019-12-03'),
('Minnu q', '123456789201', 1234567892, '2009-12-03'),
('Minnu sq', '123456789001', 1234567882, '2009-01-03'),
('Minnu s', '123456709001', 1239567882, '2008-01-03'),
('Minnuh sq', '123456789801', 1234567880, '2009-09-03'),
('Minnu saq', '123456709001', 1234567852, '2009-01-31'),
('Minnu ssq', '121456789001', 8234567882, '2000-11-30'),
('Minnu fsq', '123456719001', 1234567812, '2000-11-13'),
('Minnu sqa', '123456780001', 1234567889, '2000-01-31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
