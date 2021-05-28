-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 04:36 AM
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
-- Database: `rasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(11) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `faxnumber` varchar(255) NOT NULL,
  `tanno` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `pfno` varchar(255) NOT NULL,
  `esicno` varchar(255) NOT NULL,
  `loginshortername` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `address`, `address1`, `address2`, `pincode`, `state`, `country`, `phonenumber`, `email`, `faxnumber`, `tanno`, `gst`, `pfno`, `esicno`, `loginshortername`, `status`, `createddate`) VALUES
(2, 'branch21', 'address1', 'address11', 'address21', '123451', 'tamilnadu1', 'india1', '1234567891', 'karthiscores1@gmail.com', '1234561', '1231', '2341', '4561', '6781', 'login ok1', '0', '2021-05-28 02:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `trustactive` varchar(50) NOT NULL,
  `schoolcreationactive` varchar(50) NOT NULL,
  `manageuseractive` varchar(50) NOT NULL,
  `feemasteractive` varchar(50) NOT NULL,
  `subjectmasteractive` varchar(50) NOT NULL,
  `subjectgroupmasteractive` varchar(50) NOT NULL,
  `staffmasteractive` varchar(50) NOT NULL,
  `holidayinfoactive` varchar(50) NOT NULL,
  `createstudentactive` varchar(50) NOT NULL,
  `studentrollback` varchar(50) NOT NULL,
  `bulkimport` varchar(50) NOT NULL,
  `feescollectionactive` varchar(50) NOT NULL,
  `historyactive` varchar(50) NOT NULL,
  `birthdaywishesactive` varchar(50) NOT NULL,
  `generalwishesactive` varchar(50) NOT NULL,
  `paymentreminderactive` varchar(50) NOT NULL,
  `studentreportactive` varchar(50) NOT NULL,
  `castereportactive` varchar(50) NOT NULL,
  `pendingfeereportactive` varchar(50) NOT NULL,
  `collectionreportactive` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Createddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `user_name`, `user_password`, `role`, `trustactive`, `schoolcreationactive`, `manageuseractive`, `feemasteractive`, `subjectmasteractive`, `subjectgroupmasteractive`, `staffmasteractive`, `holidayinfoactive`, `createstudentactive`, `studentrollback`, `bulkimport`, `feescollectionactive`, `historyactive`, `birthdaywishesactive`, `generalwishesactive`, `paymentreminderactive`, `studentreportactive`, `castereportactive`, `pendingfeereportactive`, `collectionreportactive`, `status`, `Createddate`) VALUES
(1, 'admin', 'support@feathertechnology.in', 'feather123', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '2021-04-17 17:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `loginid` int(11) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `fk_user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`loginid`, `ipaddress`, `login_date`, `fk_user_id`) VALUES
(1, '::1', '2021-04-17 05:14:16', '1'),
(2, '::1', '2021-04-17 05:16:15', '1'),
(3, '::1', '2021-04-17 05:17:36', '1'),
(4, '::1', '2021-04-19 09:50:40', '1'),
(5, '::1', '2021-04-23 10:45:10', '1'),
(6, '::1', '2021-04-24 06:52:22', '1'),
(7, '::1', '2021-04-24 10:36:30', '1'),
(8, '::1', '2021-04-24 10:37:55', '1'),
(9, '::1', '2021-04-24 10:39:46', '1'),
(10, '::1', '2021-04-24 11:56:41', '1'),
(11, '::1', '2021-04-25 12:28:33', '1'),
(12, '::1', '2021-04-26 10:23:53', '1'),
(13, '::1', '2021-04-26 10:42:25', '1'),
(14, '::1', '2021-04-27 01:32:36', '1'),
(15, '::1', '2021-04-27 08:12:46', '1'),
(16, '::1', '2021-04-29 10:34:22', '1'),
(17, '::1', '2021-04-29 11:20:33', '1'),
(18, '::1', '2021-04-30 10:33:16', '1'),
(19, '::1', '2021-04-30 10:34:57', '1'),
(20, '::1', '2021-05-01 12:21:25', '1'),
(21, '::1', '2021-05-01 04:54:12', '1'),
(22, '::1', '2021-05-04 10:27:10', '1'),
(23, '::1', '2021-05-05 07:25:33', '1'),
(24, '::1', '2021-05-06 12:03:20', '1'),
(25, '::1', '2021-05-06 11:00:45', '1'),
(26, '::1', '2021-05-07 04:28:21', '1'),
(27, '::1', '2021-05-07 05:24:13', '1'),
(28, '::1', '2021-05-07 11:56:56', '1'),
(29, '::1', '2021-05-09 03:58:57', '1'),
(30, '::1', '2021-05-13 04:22:59', '1'),
(31, '::1', '2021-05-13 11:57:33', '1'),
(32, '::1', '2021-05-14 04:29:22', '1'),
(33, '::1', '2021-05-14 08:09:56', '1'),
(34, '::1', '2021-05-18 06:10:48', '1'),
(35, '::1', '2021-05-19 06:18:37', '1'),
(36, '::1', '2021-05-20 05:55:25', '1'),
(37, '::1', '2021-05-20 06:29:46', '2'),
(38, '::1', '2021-05-20 06:30:46', '2'),
(39, '::1', '2021-05-20 06:31:03', '2'),
(40, '::1', '2021-05-20 06:31:17', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
