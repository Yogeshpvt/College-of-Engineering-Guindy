-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 07:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_yogesh(it 5211)`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerdetails`
--

CREATE TABLE `registerdetails` (
  `Sname` varchar(50) NOT NULL,
  `Semail` varchar(60) NOT NULL,
  `Sregisterno` varchar(20) NOT NULL,
  `Sprac_sess` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerdetails`
--

INSERT INTO `registerdetails` (`Sname`, `Semail`, `Sregisterno`, `Sprac_sess`) VALUES
('Aaditya Prabu K', 'aadityaprabu@gmail.com', '1213213', 1),
('yogesh', 'alexander@gmail.com', '132123123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `Session_id` int(1) NOT NULL,
  `Session_timings` varchar(30) NOT NULL,
  `Session_day` varchar(30) NOT NULL,
  `Session_seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`Session_id`, `Session_timings`, `Session_day`, `Session_seats`) VALUES
(1, '09:00 – 11:00', 'Tuesday', 6),
(2, '14:00 – 16:00', 'Wednesday', 6),
(3, '09:00 – 11:00 ', 'Tuesday', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registerdetails`
--
ALTER TABLE `registerdetails`
  ADD PRIMARY KEY (`Semail`),
  ADD UNIQUE KEY `Sregisterno` (`Sregisterno`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`Session_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
