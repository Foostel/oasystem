-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 12:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `area` varchar(100) DEFAULT NULL,
  `sarea` varchar(100) NOT NULL,
  `vt` varchar(50) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `image` blob,
  `lng` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_facility`
--

CREATE TABLE `hostel_facility` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `ht` varchar(10) NOT NULL DEFAULT '',
  `gym` int(1) NOT NULL DEFAULT '0',
  `p` int(1) NOT NULL DEFAULT '0',
  `m` int(1) NOT NULL DEFAULT '0',
  `w` int(1) NOT NULL DEFAULT '0',
  `g` int(1) NOT NULL DEFAULT '0',
  `rs` int(1) NOT NULL DEFAULT '0',
  `ab` int(1) NOT NULL DEFAULT '0',
  `ac` int(1) NOT NULL DEFAULT '0',
  `cw` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_info`
--

CREATE TABLE `hostel_info` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `b1` int(3) NOT NULL DEFAULT '0',
  `ab1` int(3) NOT NULL DEFAULT '0',
  `rb1` int(5) NOT NULL DEFAULT '0',
  `b2` int(3) NOT NULL DEFAULT '0',
  `ab2` int(3) NOT NULL DEFAULT '0',
  `rb2` int(5) NOT NULL DEFAULT '0',
  `b3` int(3) NOT NULL DEFAULT '0',
  `ab3` int(3) NOT NULL DEFAULT '0',
  `rb3` int(5) NOT NULL DEFAULT '0',
  `b4` int(3) NOT NULL DEFAULT '0',
  `ab4` int(3) NOT NULL DEFAULT '0',
  `rb4` int(5) NOT NULL DEFAULT '0',
  `cm` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_address`
--

CREATE TABLE `room_address` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `bn` varchar(50) NOT NULL,
  `bno` varchar(10) NOT NULL DEFAULT '',
  `state` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `landmark` varchar(50) NOT NULL DEFAULT '',
  `area` varchar(100) DEFAULT NULL,
  `sarea` varchar(100) NOT NULL,
  `vt` varchar(50) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `image` blob,
  `lng` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_address`
--

INSERT INTO `room_address` (`uid`, `cid`, `bn`, `bno`, `state`, `city`, `landmark`, `area`, `sarea`, `vt`, `pincode`, `image`, `lng`, `lat`) VALUES
(11125, 11269, 'Farzi Rooms', '45', 'madhya pradesh', 'indore', 'Geeta Bhavan', 'Geeta Bhavan Square, AB Rd, Indore, Madhya Pradesh, India', 'geeta bhavan square, ab rd, indore, madhya pradesh, india geeta bhavan', NULL, 521452, NULL, '75.88427230535876', '22.718006052574538');

-- --------------------------------------------------------

--
-- Table structure for table `room_facility`
--

CREATE TABLE `room_facility` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `ge` varchar(10) NOT NULL DEFAULT '',
  `wk` varchar(10) NOT NULL DEFAULT '',
  `p` int(1) NOT NULL DEFAULT '0',
  `w` int(1) NOT NULL DEFAULT '0',
  `rs` int(1) NOT NULL DEFAULT '0',
  `ab` int(1) NOT NULL DEFAULT '0',
  `tc` int(1) NOT NULL DEFAULT '0',
  `b` int(1) NOT NULL DEFAULT '0',
  `c` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_facility`
--

INSERT INTO `room_facility` (`uid`, `cid`, `ge`, `wk`, `p`, `w`, `rs`, `ab`, `tc`, `b`, `c`) VALUES
(11125, 11269, 'Girls', 'Student', 0, 0, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `b1` int(3) NOT NULL DEFAULT '0',
  `ab1` int(3) NOT NULL DEFAULT '0',
  `rb1` int(5) NOT NULL DEFAULT '0',
  `b2` int(3) NOT NULL DEFAULT '0',
  `ab2` int(3) NOT NULL DEFAULT '0',
  `rb2` int(5) NOT NULL DEFAULT '0',
  `b3` int(3) NOT NULL DEFAULT '0',
  `ab3` int(3) NOT NULL DEFAULT '0',
  `rb3` int(5) NOT NULL DEFAULT '0',
  `b4` int(3) NOT NULL DEFAULT '0',
  `ab4` int(3) NOT NULL DEFAULT '0',
  `rb4` int(5) NOT NULL DEFAULT '0',
  `cm` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`uid`, `cid`, `b1`, `ab1`, `rb1`, `b2`, `ab2`, `rb2`, `b3`, `ab3`, `rb3`, `b4`, `ab4`, `rb4`, `cm`) VALUES
(11125, 11269, 1, 40, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50000);

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
  `area` varchar(100) NOT NULL DEFAULT '',
  `sarea` varchar(100) NOT NULL,
  `vt` varchar(40) NOT NULL DEFAULT '',
  `pincode` varchar(6) NOT NULL DEFAULT '',
  `image` blob NOT NULL,
  `lng` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiffin_address`
--

INSERT INTO `tiffin_address` (`uid`, `cid`, `bn`, `bno`, `state`, `city`, `landmark`, `area`, `sarea`, `vt`, `pincode`, `image`, `lng`, `lat`) VALUES
(11125, 10050, 'Rau Tiffin Center', '45', 'maharashtra', 'nagpur', 'Lokmat Square', 'Lokmat Chowk, Lokmat Chowk, Nagpur, Maharashtra, India', '0', '', '65549', '', '79.08040178561646', '21.147965096940638'),
(11125, 10051, 'Rau Tiffin Center', '45', 'maharashtra', 'nagpur', 'Lokmat Square', 'Lokmat Chowk, Lokmat Chowk, Nagpur, Maharashtra, India', 'lokmat chowk, lokmat chowk, nagpur, maharashtra, india lokmat square', '', '65549', '', '79.08040178561646', '21.147965096940638'),
(11125, 10052, 'Ma Ambey Bhojnalaya', '5', 'madhya pradesh', 'indore', 'Near Bangali Square', 'Bengali Square, Indore, Indore, Madhya Pradesh, India', 'bengali square, indore, indore, madhya pradesh, india near bangali square', '', '452001', '', '75.90479541480192', '22.720133524958428'),
(11125, 10053, 'JMB Foods', '4', 'madhya pradesh', 'indore', 'Telephone Square', 'Telephone Nagar, Indore, Indore, Madhya Pradesh, India', 'telephone nagar, indore, indore, madhya pradesh, india telephone square', '', '452001', '', '75.90375693984265', '22.720301839909126');

-- --------------------------------------------------------

--
-- Table structure for table `tiffin_facility`
--

CREATE TABLE `tiffin_facility` (
  `uid` int(6) NOT NULL,
  `cid` int(6) NOT NULL,
  `l` int(1) NOT NULL DEFAULT '0',
  `ld` varchar(50) NOT NULL DEFAULT '',
  `b` int(1) NOT NULL DEFAULT '0',
  `bd` varchar(50) NOT NULL DEFAULT '',
  `d` int(1) NOT NULL DEFAULT '0',
  `dd` varchar(50) NOT NULL DEFAULT '',
  `hd` int(1) NOT NULL DEFAULT '0',
  `cae` int(1) NOT NULL DEFAULT '0',
  `c` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiffin_facility`
--

INSERT INTO `tiffin_facility` (`uid`, `cid`, `l`, `ld`, `b`, `bd`, `d`, `dd`, `hd`, `cae`, `c`) VALUES
(11125, 10050, 1, '12PM,to,01PM,1000,Monthly', 0, '01AM,to,01AM,,', 0, '01AM,to,01AM,,', 0, 1, 0),
(11125, 10051, 1, '12PM,to,01PM,1000,Monthly', 0, '01AM,to,01AM,,', 0, '01AM,to,01AM,,', 0, 1, 0),
(11125, 10052, 1, '12PM,to,02PM,800,Monthly', 0, '07AM,to,11AM,500,Monthly', 1, '08PM,to,11PM,1000,Monthly', 0, 1, 0),
(11125, 10053, 1, '11AM,to,02PM,1000,Monthly', 0, '01AM,to,01AM,,', 1, '07PM,to,11PM,1000,Monthly', 0, 1, 1);

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
  `password` varchar(35) NOT NULL,
  `pp` varchar(30) NOT NULL DEFAULT './files/user/0000_PP.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `gender`, `age`, `phone`, `email`, `password`, `pp`) VALUES
(11125, 'Mihir', 'Soni', 'Male', 20, '919753621953', 'msonii2000@gmail.com', '83f714e18dcf081ad6d8328211185436', './files/user/11125_PP.jpg'),
(11126, 'Mihir', 'Soni', 'Male', 20, '919981166046', 'shots.mihir@gmail.com', '6011fb17db7ce218ea555eaf26f98432', './files/user/11126_PP.jpg');

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
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT for table `hostel_facility`
--
ALTER TABLE `hostel_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT for table `hostel_info`
--
ALTER TABLE `hostel_info`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT for table `room_address`
--
ALTER TABLE `room_address`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11270;

--
-- AUTO_INCREMENT for table `room_facility`
--
ALTER TABLE `room_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11270;

--
-- AUTO_INCREMENT for table `room_info`
--
ALTER TABLE `room_info`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11270;

--
-- AUTO_INCREMENT for table `tiffin_address`
--
ALTER TABLE `tiffin_address`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10054;

--
-- AUTO_INCREMENT for table `tiffin_facility`
--
ALTER TABLE `tiffin_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10054;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
