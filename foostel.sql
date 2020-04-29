-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 11:12 AM
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

--
-- Dumping data for table `hostel_address`
--

INSERT INTO `hostel_address` (`uid`, `cid`, `bn`, `bno`, `state`, `city`, `landmark`, `area`, `sarea`, `vt`, `pincode`, `image`, `lng`, `lat`) VALUES
(11125, 1, 'Rai Hostel', '4', 'madhya pradesh', 'indore', 'Behind Malhar', 'Vijay Nagar, Indore, Indore, Madhya Pradesh, India', 'vijay nagar, indore, indore, madhya pradesh, india behind malhar', NULL, 452001, NULL, '75.89912690842652', '22.75231826186601'),
(11125, 6, 'Yk Hostel', '155A', 'madhya pradesh', 'indore', 'Behind Zoo', 'Indore Zoo, A. B. Road, Indore, Madhya Pradesh, India', 'indore zoo, a. b. road, indore, madhya pradesh, india behind zoo', NULL, 452001, NULL, '75.88631046047635', '22.713802624252125');

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

--
-- Dumping data for table `hostel_facility`
--

INSERT INTO `hostel_facility` (`uid`, `cid`, `ht`, `gym`, `p`, `m`, `w`, `g`, `rs`, `ab`, `ac`, `cw`) VALUES
(11125, 1, 'Girls', 1, 0, 0, 0, 1, 0, 0, 1, 0),
(11125, 2, 'Boys', 1, 0, 1, 0, 1, 0, 0, 1, 1),
(11125, 3, 'Boys', 1, 0, 1, 0, 1, 0, 0, 1, 1),
(11125, 4, 'Boys', 1, 0, 1, 0, 1, 0, 0, 1, 1),
(11125, 5, 'Boys', 1, 0, 1, 0, 1, 0, 0, 1, 1),
(11125, 6, 'Boys', 1, 0, 1, 0, 1, 0, 0, 1, 1);

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
  `cm` int(5) NOT NULL DEFAULT '0',
  `avgcost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel_info`
--

INSERT INTO `hostel_info` (`uid`, `cid`, `b1`, `ab1`, `rb1`, `b2`, `ab2`, `rb2`, `b3`, `ab3`, `rb3`, `b4`, `ab4`, `rb4`, `cm`, `avgcost`) VALUES
(11125, 1, 0, 0, 0, 1, 40, 12000, 0, 0, 0, 0, 0, 0, 1200, 0),
(11125, 6, 1, 10, 5000, 1, 5, 8000, 0, 0, 0, 0, 0, 0, 4500, 11000);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` varchar(50) NOT NULL,
  `ptype` varchar(1) NOT NULL,
  `cid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(11125, 11269, 'Farzi Rooms', '45', 'madhya pradesh', 'indore', 'Geeta Bhavan', 'Geeta Bhavan Square, AB Rd, Indore, Madhya Pradesh, India', 'geeta bhavan square, ab rd, indore, madhya pradesh, india geeta bhavan', NULL, 521452, NULL, '75.88427230535876', '22.718006052574538'),
(11125, 11273, 'Roomer Rooms', '199', 'madhya pradesh', 'chhindwara', 'Behind ram mandir ', 'chhoti bazar ram mandir', 'chhoti bazar ram mandir behind ram mandir', NULL, 480001, NULL, '78.9452211184622', '22.055471378981622'),
(11125, 11274, 'Lala Rooms', '45', 'madhya pradesh', 'indore', 'Near Rajwada Chowk', 'Rajwada, Rajwada Chouk, Indore, Madhya Pradesh, India', 'rajwada, rajwada chouk, indore, madhya pradesh, india near rajwada chowk', NULL, 452001, NULL, '75.86450180435622', '22.717519131721332'),
(11125, 11275, 'Rovert Rooms', '154', 'madhya pradesh', 'bhopal', 'Near main road', 'BHEL, Bhopal, Bhopal, Madhya Pradesh, India', 'bhel, bhopal, bhopal, madhya pradesh, india near main road', NULL, 101010, NULL, '77.45994437559716', '23.229566968057057'),
(11125, 11276, 'Akash Room service', '24A', 'maharashtra', 'nagpur', 'Near central mall', 'Nagpur Central Mall, Nagpur, Maharashtra, India', 'nagpur central mall, nagpur, maharashtra, india near central mall', NULL, 458712, NULL, '79.0954862879405', '21.151119225472954'),
(11125, 11277, 'Rajore Rooms', '58AX', 'madhya pradesh', 'indore', 'Near Saket Square', 'Anand Bazar, Near Saket Square, Indore, Madhya Pradesh, India', 'anand bazar, near saket square, indore, madhya pradesh, india near saket square', NULL, 452001, NULL, '75.89472975126091', '22.726718175995543');

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
(11125, 11269, 'Girls', 'Student', 0, 0, 0, 1, 0, 1, 0),
(11125, 11270, 'Male', 'Student', 0, 0, 0, 0, 0, 0, 0),
(11125, 11271, 'Male', 'Employee', 0, 0, 0, 0, 0, 0, 0),
(11125, 11272, 'Male', 'Student', 0, 0, 0, 0, 0, 0, 0),
(11125, 11273, 'Male', 'Student', 0, 0, 0, 1, 0, 1, 0),
(11125, 11274, 'Male', 'Anyone', 0, 0, 0, 0, 0, 0, 0),
(11125, 11275, 'Male', 'Anyone', 1, 0, 1, 1, 0, 1, 0),
(11125, 11276, 'Anyone', 'Anyone', 1, 0, 0, 1, 0, 1, 0),
(11125, 11277, 'Anyone', 'Anyone', 1, 0, 0, 1, 0, 1, 0);

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
  `cm` int(5) NOT NULL DEFAULT '0',
  `avgcost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`uid`, `cid`, `b1`, `ab1`, `rb1`, `b2`, `ab2`, `rb2`, `b3`, `ab3`, `rb3`, `b4`, `ab4`, `rb4`, `cm`, `avgcost`) VALUES
(11125, 11269, 1, 40, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50000, 0),
(11125, 11270, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11125, 11271, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11125, 11272, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11125, 11273, 1, 1, 4000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 0),
(11125, 11274, 1, 4, 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 0),
(11125, 11275, 0, 0, 0, 0, 0, 0, 1, 4, 12000, 0, 0, 0, 2000, 0),
(11125, 11276, 0, 0, 0, 0, 0, 0, 1, 2, 12000, 0, 0, 0, 4500, 0),
(11125, 11277, 0, 0, 0, 1, 1, 8000, 0, 0, 0, 0, 0, 0, 2000, 10000);

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
(11125, 10053, 'JMB Foods', '4', 'madhya pradesh', 'indore', 'Telephone Square', 'Telephone Nagar, Indore, Indore, Madhya Pradesh, India', 'telephone nagar, indore, indore, madhya pradesh, india telephone square', '', '452001', '', '75.90375693984265', '22.720301839909126'),
(11125, 10055, 'Rajbhog foods', '78A', 'madhya pradesh', 'indore', 'Near C21', 'Vijay Nagar, Indore, Indore, Madhya Pradesh, India', 'vijay nagar, indore, indore, madhya pradesh, india near c21', '', '452001', '', '75.89915871347307', '22.752946959509302'),
(11125, 10056, 'Chaska tiffin ', '458K', 'madhya pradesh', 'bhopal', 'Near mp nagar zone 1', 'MP Nagar Zone 1, Bhopal, Bhopal, Madhya Pradesh, India', 'mp nagar zone 1, bhopal, bhopal, madhya pradesh, india near mp nagar zone 1', '', '452141', '', '77.39473340489008', '23.23938920574767'),
(11125, 10057, 'Banarsi tiffin center', '45A', 'madhya pradesh', 'chhindwara', 'Chhoti bazar', 'behind ram mandir chhindwara', 'behind ram mandir chhindwara chhoti bazar', '', '480001', '', '78.94521883477296', '22.056045992798488');

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
  `c` int(1) NOT NULL DEFAULT '0',
  `avgcost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiffin_facility`
--

INSERT INTO `tiffin_facility` (`uid`, `cid`, `l`, `ld`, `b`, `bd`, `d`, `dd`, `hd`, `cae`, `c`, `avgcost`) VALUES
(11125, 10050, 1, '12PM,to,01PM,1000,Monthly', 0, '01AM,to,01AM,,', 0, '01AM,to,01AM,,', 0, 1, 0, 0),
(11125, 10051, 1, '12PM,to,01PM,1000,Monthly', 0, '01AM,to,01AM,,', 0, '01AM,to,01AM,,', 0, 1, 0, 0),
(11125, 10052, 1, '12PM,to,02PM,800,Monthly', 0, '07AM,to,11AM,500,Monthly', 1, '08PM,to,11PM,1000,Monthly', 0, 1, 0, 0),
(11125, 10053, 1, '11AM,to,02PM,1000,Monthly', 0, '01AM,to,01AM,,', 1, '07PM,to,11PM,1000,Monthly', 0, 1, 1, 0),
(11125, 10054, 0, '01AM,to,01AM,,', 0, '01AM,to,01AM,,', 0, '01AM,to,01AM,,', 0, 0, 0, 0),
(11125, 10055, 1, '12PM,to,02PM,800,Monthly', 1, '07AM,to,10AM,600,Monthly', 1, '07PM,to,10PM,800,Monthly', 1, 1, 1, 733),
(11125, 10056, 1, '12PM,to,03PM,600,Monthly', 0, '01AM,to,01AM,,', 1, '07PM,to,10PM,600,Monthly', 1, 1, 1, 600),
(11125, 10057, 0, '01AM,to,01AM,,', 1, '06AM,to,08AM,300,Monthly', 0, '01AM,to,01AM,,', 1, 0, 1, 300);

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
  `pp` varchar(30) NOT NULL DEFAULT './files/user/0000_PP.jpg',
  `OA` int(1) NOT NULL DEFAULT '0',
  `r` int(11) NOT NULL,
  `h` int(1) NOT NULL,
  `t` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `gender`, `age`, `phone`, `email`, `password`, `pp`, `OA`, `r`, `h`, `t`) VALUES
(11125, 'Mihir', 'Soni', 'Male', 20, '919753621953', 'msonii2000@gmail.com', '83f714e18dcf081ad6d8328211185436', './files/user/11125_PP.jpg', 0, 1, 1, 1),
(11126, 'Mihir', 'Soni', 'Male', 20, '919981166046', 'shots.mihir@gmail.com', '6011fb17db7ce218ea555eaf26f98432', './files/user/11126_PP.jpg', 0, 0, 0, 0);

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
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hostel_facility`
--
ALTER TABLE `hostel_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hostel_info`
--
ALTER TABLE `hostel_info`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_address`
--
ALTER TABLE `room_address`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11278;

--
-- AUTO_INCREMENT for table `room_facility`
--
ALTER TABLE `room_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11278;

--
-- AUTO_INCREMENT for table `room_info`
--
ALTER TABLE `room_info`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11278;

--
-- AUTO_INCREMENT for table `tiffin_address`
--
ALTER TABLE `tiffin_address`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10058;

--
-- AUTO_INCREMENT for table `tiffin_facility`
--
ALTER TABLE `tiffin_facility`
  MODIFY `cid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10058;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
