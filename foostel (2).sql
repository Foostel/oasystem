-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 12:12 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel_info`
--

CREATE TABLE `hostel_info` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `b1` int(3) NOT NULL DEFAULT 0,
  `ab1` int(3) NOT NULL DEFAULT 0,
  `rb1` int(5) NOT NULL DEFAULT 0,
  `b2` int(3) NOT NULL DEFAULT 0,
  `ab2` int(3) NOT NULL DEFAULT 0,
  `rb2` int(5) NOT NULL DEFAULT 0,
  `b3` int(3) NOT NULL DEFAULT 0,
  `ab3` int(3) NOT NULL DEFAULT 0,
  `rb3` int(5) NOT NULL DEFAULT 0,
  `b4` int(3) NOT NULL DEFAULT 0,
  `ab4` int(3) NOT NULL DEFAULT 0,
  `rb4` int(5) NOT NULL DEFAULT 0,
  `cm` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_info`
--

INSERT INTO `hostel_info` (`uid`, `cid`, `b1`, `ab1`, `rb1`, `b2`, `ab2`, `rb2`, `b3`, `ab3`, `rb3`, `b4`, `ab4`, `rb4`, `cm`) VALUES
(11121, 10001, 1, 4, 7000, 1, 4, 5000, 0, 0, 0, 0, 0, 0, 5000),
(11121, 10002, 1, 2, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000),
(11121, 10003, 1, 2, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000),
(11121, 10004, 1, 2, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000),
(11121, 10005, 1, 2, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostel_info`
--
ALTER TABLE `hostel_info`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel_info`
--
ALTER TABLE `hostel_info`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
