-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2019 at 11:26 AM
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `mobile` bigint(10) NOT NULL DEFAULT 0,
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`mobile`, `username`, `password`) VALUES
(0, 'bye', 'd688fa514c61a513b6fb6dcdd6c32e65'),
(0, 'hello', '49f68a5c8493ec2c0bf489821c21fc3b'),
(0, 'hi', '49f68a5c8493ec2c0bf489821c21fc3b'),
(0, 'minnu', '25f9e794323b453885f5181f1b624d0b'),
(0, 'MINNU1031', '9b38067e23298837802635d5172733d7');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `zipcode` int(6) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`fname`, `lname`, `email`, `address`, `state`, `city`, `mobile`, `dob`, `zipcode`, `gender`) VALUES
('RAJAVARAPU', 'yaswanthkumar', '011111233@gmail.com', '3/355, 3rd ward', 'AndhraPradesh', 'VisÄkhapatnam', 996321556, '2019-12-31', 521121, 'Male'),
('hi', 'hi', 'hi2minnu@gmail.com', 'Sastra university', 'AndhraPradesh', 'VijayawÄda', 7989152377, '2019-12-31', 613401, 'Male'),
('Minnu', 'R', '0111112334ma@gmail.com', 'Sastra university', 'Telangana', 'Hyderabad', 7989152378, '2019-12-31', 613401, 'Male'),
('RAJAVARAPU', 'yaswanthkumar', '0111112334m..a@gmail.com', '3/355, 3rd ward', 'AndhraPradesh', 'VisÄkhapatnam', 9963215561, '2019-12-31', 521121, 'Male'),
('RAJAVARAPU', 'yaswanthkumar', '0111112334@gmail.com', '3/355, 3rd ward', 'AndhraPradesh', 'VijayawÄda', 9963215567, '2019-12-31', 521121, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `from` varchar(30) NOT NULL,
  `to` varchar(30) NOT NULL,
  `doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`from`, `to`, `doj`) VALUES
('NalgondaXRoads', 'Chaderghat', '2019-09-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
