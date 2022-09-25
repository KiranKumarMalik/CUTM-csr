-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 07:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cutm_csr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `empid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `profileimage`, `campus`, `empid`, `password`) VALUES
(1, 'Chinmaya', 'situ@chinmayakumarbiswal.in', '9556328216', 'chinmaya_white.jpg', 'BBSR', 'Admin01', 'situ'),
(2, 'Sangram Keshari Swain', 'sangramkeshariswain@cutm.ac.in', '', '', '', 'CUTM3245', 'sangram');

-- --------------------------------------------------------

--
-- Table structure for table `certificatelog`
--

CREATE TABLE `certificatelog` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Culture` varchar(255) NOT NULL,
  `Responsibility` varchar(255) NOT NULL,
  `Sports` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificatelog`
--

INSERT INTO `certificatelog` (`id`, `Name`, `Email`, `Culture`, `Responsibility`, `Sports`, `Year`) VALUES
(5, 'Chinmaya Kumar Biswal', '180704190006@cutm.ac.in', '14.6333333333333', '12', '12', '2022'),
(6, 'kiran Kumar Malik', '200301120128@cutm.ac.in', '4.6666666666667', '5', '4', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `csrpr`
--

CREATE TABLE `csrpr` (
  `id` int(11) NOT NULL,
  `csrPr` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csrpr`
--

INSERT INTO `csrpr` (`id`, `csrPr`, `club`) VALUES
(1, 'Culture', 'Music'),
(2, 'Culture', 'Dance'),
(3, 'sports', 'PC Game Club'),
(4, 'sports', 'Health Club'),
(5, 'Responsibility', 'Youth Red Cross'),
(6, 'Responsibility', 'Science Club');

-- --------------------------------------------------------

--
-- Table structure for table `csrtimesheet`
--

CREATE TABLE `csrtimesheet` (
  `id` int(11) NOT NULL,
  `NameOfStd` varchar(255) NOT NULL,
  `emailOfStd` varchar(255) NOT NULL,
  `yearOfPr` varchar(255) NOT NULL,
  `csrPr` varchar(255) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `fromTime` varchar(255) NOT NULL,
  `endTime` varchar(255) NOT NULL,
  `totalTime` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csrtimesheet`
--

INSERT INTO `csrtimesheet` (`id`, `NameOfStd`, `emailOfStd`, `yearOfPr`, `csrPr`, `schoolname`, `club`, `date`, `campus`, `fromTime`, `endTime`, `totalTime`, `status`) VALUES
(21, 'Chinmaya Kumar Biswal', '180704190006@cutm.ac.in', '2020-2021', 'Culture', 'School of Applied Science', 'Music', '2022-09-18', 'BBSR', '10:00', '12:38', '2.6333333333333', 'Not approved'),
(22, 'Chinmaya Kumar Biswal', '180704190006@cutm.ac.in', '2022-2023', 'Culture', 'School Applied Science', 'Music', '2022-09-18', 'BBSR', '08:39', '20:39', '12', 'Approved'),
(23, 'Chinmaya Kumar Biswal', '180704190006@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Applied Science', 'Youth Red Cross', '2022-09-18', 'BBSR', '08:40', '20:40', '12', 'Approved'),
(24, 'Chinmaya Kumar Biswal', '180704190006@cutm.ac.in', '2022-2023', 'sports', 'School of Applied Science', 'PC Game Club', '2022-09-18', 'BBSR', '08:40', '20:40', '12', 'Approved'),
(25, 'kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance', '2022-09-21', 'BBSR', '10:00', '14:40', '4.6666666666667', 'Approved'),
(26, 'kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Engineering and Technology', 'Youth Red Cross', '2022-09-21', 'BBSR', '09:40', '14:40', '5', 'Approved'),
(27, 'kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'sports', 'School of Engineering and Technology', 'PC Game Club', '2022-09-21', 'BBSR', '10:40', '14:40', '4', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regd` varchar(255) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `admissionyear` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `profileimage` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `regd`, `schoolname`, `program`, `branch`, `campus`, `admissionyear`, `sex`, `religion`, `dob`, `hobby`, `present_address`, `permanent_address`, `password`, `mobile`, `profileimage`, `status`) VALUES
(1, 'Chinmaya Kumar Biswal', '210720100009@cutm.ac.in', '210720100009', 'School of Applied Sciences', 'Master', 'MCA', 'BBSR', '2021-2022', 'Male', 'Hindu', '17/09/2000', 'Dj', 'Hatabaradihi,Gainada,Balugaon,752027', 'Chilika', 'PMEOhfGD', '6370183009', 'chinmaya.jpg', 'Approved'),
(6, 'Chinmaya Kumar Biswal', '180704190006@cutm.ac.in', '180704190006', 'School of Applied Sciences', 'BSc', 'CTIS', 'BBSR', '2021-2022', 'Male', 'Hindu', '2000-09-17', 'Dj', 'Chilika', 'Chilika', '123456789a', '6370183009', 'chinmaya_white.jpg', 'Approved'),
(9, 'Pritam Kumar Nayak', '190301121115@cutm.ac.in', '190301121115', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'BBSR', '2019-2020', 'Male', 'Hindu', '19/03/2022', 'Gaming', 'demo', 'demo', '123456789a', '06370183009', 'maleuser.jpg', 'Approved'),
(10, 'kiran Kumar Malik', '200301120128@cutm.ac.in', '200301120128', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'BBSR', '2020-2021', 'Male', 'Hindu', '19/08/2002', 'cricket', 'Demo		', 'Demo				', 'Kiran', '7848051078', 'kiran.jpg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `studregd`
--

CREATE TABLE `studregd` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `regd` varchar(50) NOT NULL,
  `schoolname` varchar(225) NOT NULL,
  `program` varchar(225) NOT NULL,
  `branch` varchar(225) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `admissionyear` int(10) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studregd`
--

INSERT INTO `studregd` (`id`, `name`, `email`, `regd`, `schoolname`, `program`, `branch`, `campus`, `admissionyear`, `sex`, `religion`, `dob`, `blood_group`) VALUES
(1, 'Pritam Kumar Nayak', '190301121115@cutm.ac.in', '190301121115', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', 2019, 'Male', 'Hindu', '19/03/2022', 'AB+'),
(2, 'Subham Nayak', '190301120025@cutm.ac.in', '190301120025', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', 2019, 'Male', 'Hindu', '25/02/2022', 'B-'),
(3, 'Phanibhusan Das', '191516100027@cutm.ac.in', '191516100027', 'School Of Pharmacy', 'B.Pharma', 'Pharmacy', 'Bhubaneswar', 2019, 'Male', 'Hindu', '15/03/2001', 'B+'),
(4, 'Smrutideepa Parida', '210705100024@cutm.ac.in', '210705100024', 'School of Applied Sciences', 'M.Sc', 'M.Sc', 'Bhubaneswar', 2019, 'Female', 'Hindu', '15/03/2001', 'B-'),
(5, 'Shaikh Habibur Rehaman', '200301120126@cutm.ac.in', '200301120126', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', 2020, 'Male', 'Muslim', '04/04/2002', 'AB+'),
(0, 'kiran Kumar Malik', '200301120128@cutm.ac.in', '200301120128', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'BBSR', 2020, 'Male', 'Hindu', '19/08/2002', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `empid` varchar(255) NOT NULL,
  `Degination` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `SchoolName` varchar(255) NOT NULL,
  `Clubget` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `empid`, `Degination`, `campus`, `Qualification`, `SchoolName`, `Clubget`, `Gender`, `password`, `profileimage`) VALUES
(1, 'Rajkumar', 'rajkumar@cutm.ac.in', '7008789363', 'emp13', 'Ass Prof', 'BBSR', 'M. Tech', 'B. Tech', 'Dance', 'M', 'raj', 'chinmaya.jpg'),
(3, 'Saneev', 'saneev@cutm.ac.in', '3453534534534', 'emp2', 'ass for', 'BBSR', 'Phd', 'School of Engineering and Technology', 'Music', 'Male', 'situ', ''),
(4, 'abhijit', 'abhjit@cutm.ac.in', '54t45t4', 'emp3', 'ass for', 'BBSR', 'Mtech', 'School of Engineering and Technology', 'PC Game Club', 'Male', 'situ', ''),
(5, 'Suvendu', 'suvendu@cutm.ac.in', '3453254', 'emp4', 'ass for', 'BBSR', 'Phd', 'School of Engineering and Technology', 'Youth Red Cross', 'Male', 'situ', ''),
(16, 'Chinmaya Kumar Biswal', 'chinmayakumarbiswal16045@gmail.com', '06370183009', 'fghfg', 'rthrth', 'BBSR', 'thrth', 'School of Engineering and Technology', 'Dance', 'Male', 'NsAgya1f', 'maleuser.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `admissionyear` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `admissionyear`, `Year`) VALUES
(1, '2020', '2020-2021'),
(2, '2021', '2021-2022'),
(3, '2022', '2022-2023'),
(4, '2023', '2023-2024'),
(5, '2024', '2024-2025'),
(6, '2019', '2019-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificatelog`
--
ALTER TABLE `certificatelog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csrpr`
--
ALTER TABLE `csrpr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csrtimesheet`
--
ALTER TABLE `csrtimesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificatelog`
--
ALTER TABLE `certificatelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `csrpr`
--
ALTER TABLE `csrpr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `csrtimesheet`
--
ALTER TABLE `csrtimesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
