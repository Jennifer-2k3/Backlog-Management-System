-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 08:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backlog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `psw`) VALUES
(1, 'admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `id` int(50) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sec` varchar(16) NOT NULL,
  `dt` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `cregno` varchar(20) NOT NULL,
  `sregno` varchar(20) NOT NULL,
  `dt1` varchar(20) NOT NULL,
  `img1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `backk`
--

CREATE TABLE `backk` (
  `id` int(10) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `sub` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cla`
--

CREATE TABLE `cla` (
  `id` int(10) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mate`
--

CREATE TABLE `mate` (
  `id` int(50) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sec` varchar(16) NOT NULL,
  `dt` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `cregno` varchar(20) NOT NULL,
  `sturegno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `noti`
--

CREATE TABLE `noti` (
  `id` int(50) NOT NULL,
  `con` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `id` int(50) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sec` varchar(20) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_report`
--

CREATE TABLE `student_report` (
  `SNO` int(11) NOT NULL,
  `Roll_No` varchar(50) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `Attendance` int(11) DEFAULT NULL,
  `Innovative` int(11) DEFAULT NULL,
  `Seminar` int(11) DEFAULT NULL,
  `Assignment` int(11) DEFAULT NULL,
  `Test` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Result` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stureg`
--

CREATE TABLE `stureg` (
  `id` int(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `sec` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backk`
--
ALTER TABLE `backk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cla`
--
ALTER TABLE `cla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mate`
--
ALTER TABLE `mate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noti`
--
ALTER TABLE `noti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_report`
--
ALTER TABLE `student_report`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `stureg`
--
ALTER TABLE `stureg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `backk`
--
ALTER TABLE `backk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cla`
--
ALTER TABLE `cla`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mate`
--
ALTER TABLE `mate`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `noti`
--
ALTER TABLE `noti`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_report`
--
ALTER TABLE `student_report`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stureg`
--
ALTER TABLE `stureg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
