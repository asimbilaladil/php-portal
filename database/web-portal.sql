-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2016 at 10:52 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `clock`
--

CREATE TABLE `clock` (
  `clock_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `clockIn` time NOT NULL,
  `clockOut` time NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clock`
--

INSERT INTO `clock` (`clock_id`, `user_id`, `clockIn`, `clockOut`, `date`) VALUES
(10, 7, '06:26:31', '08:28:28', '2016-03-13'),
(11, 7, '06:28:51', '06:51:58', '2016-03-12'),
(12, 7, '09:29:27', '00:00:00', '2016-03-14'),
(13, 7, '03:19:27', '09:00:00', '2016-03-15'),
(14, 7, '05:18:15', '09:51:28', '2016-03-17'),
(15, 8, '09:50:05', '00:00:00', '2016-03-17'),
(16, 10, '09:53:53', '00:00:00', '2016-03-17'),
(17, 7, '05:41:08', '09:15:45', '2016-03-18'),
(18, 8, '05:42:11', '00:00:00', '2016-03-18'),
(19, 7, '10:41:15', '10:42:25', '2016-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `component_id` int(10) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `user_id`, `component_id`, `salary`) VALUES
(3, 7, 2, 160),
(4, 7, 3, 240),
(5, 8, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payroll_components`
--

CREATE TABLE `payroll_components` (
  `payroll_id` int(50) NOT NULL,
  `name` text NOT NULL,
  `payRate` text NOT NULL,
  `currency` text NOT NULL,
  `payFrequency` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll_components`
--

INSERT INTO `payroll_components` (`payroll_id`, `name`, `payRate`, `currency`, `payFrequency`) VALUES
(1, 'Car', '10', 'Usd', 'Hourly'),
(2, 'Other', '20', 'Usd', 'Hourly'),
(3, 'Health', '30', 'Usd', 'Hourly');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `support_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL,
  `fullName` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`support_id`, `user_id`, `subject`, `message`, `date`, `fullName`, `email`) VALUES
(1, 7, 'Test Title', 'Test Message', '2016-03-19', 'Asim Bilal', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `department` text NOT NULL,
  `userKey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `type`, `username`, `firstName`, `lastName`, `department`, `userKey`) VALUES
(7, 'asimbilal@mail.com', '1234', 'Manager', 'asim', 'Asim', 'Bilal', 'IT', '9INDrrd2vEh36fmb'),
(8, 'asim@mail.com', '1234', '', 'asimit', 'Asim13', 'IT', '', 'VHfL6lMcJxeBKjg'),
(10, 'asim@mail.com', '1234', '', 'asimuser', 'Asim12', 'User', '', 'fWOZlQLyBVD1NJi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clock`
--
ALTER TABLE `clock`
  ADD PRIMARY KEY (`clock_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `payroll_components`
--
ALTER TABLE `payroll_components`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clock`
--
ALTER TABLE `clock`
  MODIFY `clock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payroll_components`
--
ALTER TABLE `payroll_components`
  MODIFY `payroll_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `support_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
