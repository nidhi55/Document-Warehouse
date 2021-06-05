-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 08:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pr`
--

-- --------------------------------------------------------

--
-- Table structure for table `a012`
--

CREATE TABLE `a012` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a012`
--

INSERT INTO `a012` (`fno`, `fname`, `size`, `type`, `path`) VALUES
(2, 'tum jo', '5897754', 'mp3', 'upload/tum jo.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `a013`
--

CREATE TABLE `a013` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a013`
--

INSERT INTO `a013` (`fno`, `fname`, `size`, `type`, `path`) VALUES
(1, '', '123244', 'pdf', 'upload/.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `a014`
--

CREATE TABLE `a014` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a014`
--

INSERT INTO `a014` (`fno`, `fname`, `size`, `type`, `path`) VALUES
(1, 'tum jo', 'mp3', '5897754', 'upload/tum jo.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `a015`
--

CREATE TABLE `a015` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a015`
--

INSERT INTO `a015` (`fno`, `fname`, `size`, `type`, `path`) VALUES
(1, 'mydoc', '237637', 'pdf', 'upload/mydoc.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `a016`
--

CREATE TABLE `a016` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a017`
--

CREATE TABLE `a017` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a018`
--

CREATE TABLE `a018` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(20) NOT NULL,
  `aname` varchar(256) NOT NULL,
  `apwd` varchar(20) NOT NULL,
  `apro_pic` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apwd`, `apro_pic`) VALUES
(1, 'admin', 'admin', 'uploads/ytru.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `uid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uid`, `username`, `email`, `msg`) VALUES
(2, 'poi', 'poi@gmail.com', 'your web is good'),
(2, 'poi', 'poi@gmail.com', 'good'),
(3, 'rty', 'rty@gmail.com', 'qwertyuohkhjgjmv'),
(1, 'qwe', 'qwe@gmial.com', 'nskdjs'),
(13, '', 'tiya@gmail.com', 'good'),
(13, '', 'tiya@gmail.com', 'hello'),
(13, 'tiya', 'tiya@gmail.com', 'how are you?'),
(12, 'Riya', 'riya@gmail.com', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `fr_id` int(255) NOT NULL,
  `send` varchar(256) NOT NULL,
  `receive` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`fr_id`, `send`, `receive`) VALUES
(1, 'Riya', 'Tiya');

-- --------------------------------------------------------

--
-- Table structure for table `frshare`
--

CREATE TABLE `frshare` (
  `sname` varchar(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frshare`
--

INSERT INTO `frshare` (`sname`, `rname`, `fname`) VALUES
('Riya', 'Jiya', 'tum jo');

-- --------------------------------------------------------

--
-- Table structure for table `fr_list`
--

CREATE TABLE `fr_list` (
  `uname` varchar(256) NOT NULL,
  `fname` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fr_list`
--

INSERT INTO `fr_list` (`uname`, `fname`) VALUES
('Jiya', 'Riya');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `uid`, `rname`, `sname`, `msg`, `status`) VALUES
(1, 14, 'Jiya', 'Riya', 'your friend Riya send file', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `qw`
--

CREATE TABLE `qw` (
  `fno` int(255) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `uid` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `con_no` int(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `pwd` varchar(256) NOT NULL,
  `pro_pic` varchar(255) DEFAULT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`uid`, `name`, `username`, `email`, `con_no`, `dob`, `gender`, `pwd`, `pro_pic`, `theme`) VALUES
(12, 'Riya', 'Riya', 'riya@gmail.com', 2147483647, '2001-05-09', 'Female', 'riya', 'uploads/mypro.png', 'theme/mytheme.jpg'),
(13, 'Tiya', 'Tiya', 'tiya@gmail.com', 985862468, '2001-05-02', 'Female', 'tiya', 'upload/default.jpg', 'white'),
(14, 'Jiya', 'Jiya', 'jiya@gmail.com', 69587998, '1997-07-08', 'Female', 'jiya', 'upload/default.jpg', 'white'),
(17, 'Piya', 'Piya', 'piya@gmail.com', 2147483647, '1995-08-09', 'Female', 'piya', 'upload/default.jpg', 'white'),
(18, 'Diya', 'Diya', 'diya@gmail.com', 987564135, '1997-05-08', 'Female', 'diya', 'upload/default.jpg', 'white');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a012`
--
ALTER TABLE `a012`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `a013`
--
ALTER TABLE `a013`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `a014`
--
ALTER TABLE `a014`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `a015`
--
ALTER TABLE `a015`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `a016`
--
ALTER TABLE `a016`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `a017`
--
ALTER TABLE `a017`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `a018`
--
ALTER TABLE `a018`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`fr_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qw`
--
ALTER TABLE `qw`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a012`
--
ALTER TABLE `a012`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `a013`
--
ALTER TABLE `a013`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a014`
--
ALTER TABLE `a014`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a015`
--
ALTER TABLE `a015`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a016`
--
ALTER TABLE `a016`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a017`
--
ALTER TABLE `a017`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `a018`
--
ALTER TABLE `a018`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `fr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qw`
--
ALTER TABLE `qw`
  MODIFY `fno` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
