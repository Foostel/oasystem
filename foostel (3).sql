-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 01:06 AM
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
-- Table structure for table `hostel_address`
--

CREATE TABLE `hostel_address` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `bn` varchar(50) NOT NULL DEFAULT '',
  `bno` varchar(10) NOT NULL DEFAULT '',
  `state` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `landmark` varchar(50) NOT NULL DEFAULT '',
  `area` varchar(50) DEFAULT NULL,
  `vt` varchar(50) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_facility`
--

CREATE TABLE `hostel_facility` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `ht` varchar(10) NOT NULL DEFAULT '',
  `gym` int(1) NOT NULL DEFAULT 0,
  `p` int(1) NOT NULL DEFAULT 0,
  `m` int(1) NOT NULL DEFAULT 0,
  `w` int(1) NOT NULL DEFAULT 0,
  `g` int(1) NOT NULL DEFAULT 0,
  `rs` int(1) NOT NULL DEFAULT 0,
  `ab` int(1) NOT NULL DEFAULT 0,
  `ac` int(1) NOT NULL DEFAULT 0,
  `cw` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `room_address`
--

CREATE TABLE `room_address` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `bno` varchar(10) NOT NULL DEFAULT '',
  `state` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `landmark` varchar(50) NOT NULL DEFAULT '',
  `area` varchar(50) DEFAULT NULL,
  `vt` varchar(50) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_address`
--

INSERT INTO `room_address` (`uid`, `cid`, `bno`, `state`, `city`, `landmark`, `area`, `vt`, `pincode`, `image`) VALUES
(11121, 10001, 'A-37', 'Andaman & Nicobar', ' Andaman Island ', 'hanuman mandir', 'A-37 Kamla Nagar Kotra Sultanabad', 'Bhopal', 462003, 0x3131313231412d33372e);

-- --------------------------------------------------------

--
-- Table structure for table `room_facility`
--

CREATE TABLE `room_facility` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `ge` varchar(10) NOT NULL DEFAULT '',
  `wk` varchar(10) NOT NULL DEFAULT '',
  `p` int(1) NOT NULL DEFAULT 0,
  `w` int(1) NOT NULL DEFAULT 0,
  `rs` int(1) NOT NULL DEFAULT 0,
  `ab` int(1) NOT NULL DEFAULT 0,
  `tc` int(1) NOT NULL DEFAULT 0,
  `b` int(1) NOT NULL DEFAULT 0,
  `c` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
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
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`uid`, `cid`, `b1`, `ab1`, `rb1`, `b2`, `ab2`, `rb2`, `b3`, `ab3`, `rb3`, `b4`, `ab4`, `rb4`, `cm`) VALUES
(11121, 10001, 1, 2, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tiffin_address`
--

CREATE TABLE `tiffin_address` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `bn` varchar(30) NOT NULL DEFAULT '',
  `bno` varchar(10) NOT NULL DEFAULT '',
  `state` varchar(40) NOT NULL DEFAULT '',
  `city` varchar(40) NOT NULL DEFAULT '',
  `landmark` varchar(40) NOT NULL DEFAULT '',
  `area` varchar(40) NOT NULL DEFAULT '',
  `vt` varchar(40) NOT NULL DEFAULT '',
  `pincode` varchar(6) NOT NULL DEFAULT '',
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tiffin_facility`
--

CREATE TABLE `tiffin_facility` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `l` int(1) NOT NULL DEFAULT 0,
  `ld` varchar(50) NOT NULL DEFAULT '',
  `b` int(1) NOT NULL DEFAULT 0,
  `bd` varchar(50) NOT NULL DEFAULT '',
  `d` int(1) NOT NULL DEFAULT 0,
  `dd` varchar(50) NOT NULL DEFAULT '',
  `hd` int(1) NOT NULL DEFAULT 0,
  `cae` int(1) NOT NULL DEFAULT 0,
  `c` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `gender`, `age`, `phone`, `email`, `password`) VALUES
(11121, 'jayant', 'gawali', 'Male', 21, '919340216311', 'jayantgawali98@gmail.com', 'f0ec91761506810419287bb0dadec846');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostel_address`
--
ALTER TABLE `hostel_address`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hostel_facility`
--
ALTER TABLE `hostel_facility`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hostel_info`
--
ALTER TABLE `hostel_info`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `room_address`
--
ALTER TABLE `room_address`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `room_facility`
--
ALTER TABLE `room_facility`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tiffin_address`
--
ALTER TABLE `tiffin_address`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tiffin_facility`
--
ALTER TABLE `tiffin_facility`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel_address`
--
ALTER TABLE `hostel_address`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT for table `hostel_facility`
--
ALTER TABLE `hostel_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT for table `hostel_info`
--
ALTER TABLE `hostel_info`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10006;

--
-- AUTO_INCREMENT for table `room_address`
--
ALTER TABLE `room_address`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `room_facility`
--
ALTER TABLE `room_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `room_info`
--
ALTER TABLE `room_info`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `tiffin_address`
--
ALTER TABLE `tiffin_address`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10039;

--
-- AUTO_INCREMENT for table `tiffin_facility`
--
ALTER TABLE `tiffin_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10039;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
