-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 13, 2022 at 02:44 PM
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
-- Database: `csr`
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
  `sex` varchar(20) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `empid` varchar(255) NOT NULL,
  `designation` varchar(225) NOT NULL,
  `about` mediumtext NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `sex`, `campus`, `empid`, `designation`, `about`, `country`, `address`, `password`, `profileimg`) VALUES
(2, 'Dr. Sangram Keshari Swain', 'sangramkeshariswain@cutm.ac.in', '9937093949', 'Male', 'Bhubaneswar', 'CUTM3245', 'Examination dean, professor', 'Ph.D. in Computer Science and Engineering having 12 years of teaching experience having a demonstrated history of working in the higher education industry. Skilled in Social Services, Teaching, Research, Data Analysis, and Higher Education. A strong education professional having multidimensional approaches like Engineering, Technology, Management, Social Service and Law. Social Responsibility activity has been my Passion always.', 'India', 'Ramchandrapur, Jatani, Bhubaneswar, Odisha, 752050', 'sangram', 'sangram1.png'),
(3, 'Mrs. Prativa Satapathy', 'prativa.satpathy@cutm.ac.in', '7008158545', 'Female', 'Bolangir', 'CUTM478', 'Assistant Professor', '', 'India', '', 'prativa', 'femaleuser.jpg'),
(4, 'Chandra Sekhar Patro', 'chandrasekhar.patro@cutm.ac.in', '8331887509', 'Male', 'Rayagada', 'CUTM356', 'Professor', '', 'India', '', 'chandra', 'maleuser.jpg'),
(5, 'Chandan Kumar Das', 'chandankumar.das@gramtarang.org.in', '7873679676', 'Male', 'Balasore', 'CUTM259', 'Professor', '', 'India', '', 'chandan', 'maleuser.jpg'),
(6, 'Mrs.Binapani Barik', 'binapani.barik@cutm.ac.in', '7504915935', 'Male', 'Paralakhemundi', 'CUTM476', 'Professor', '', 'India', '', 'binapani', 'maleuser.jpg'),
(7, 'Rati Ranjan Mishra', 'ratiranjan.mishra@cutm.ac.in', '8249196464', 'Male', 'Chhatrapur', 'EMP875', 'CSaR Co-ordinator', '', 'India', 'Chhatrapur, Ganjam, Odisha', 'rati', 'maleuser.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `attachments` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `publishtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `event_name`, `details`, `attachments`, `date_time`, `end_date`, `campus`, `publishtime`) VALUES
(2, 'World Internet Day', '<p style=\"text-align: left;\">Observation</p>', '', '2022-10-28', '2022-11-01', 'Bhubaneswar', '2022-10-28 09:34:48'),
(4, 'Test  ', '<p>test</p>', '', '2022-11-08', '2022-11-09', 'Bhubaneswar', '2022-11-08 09:38:12'),
(7, 'International conference', '<p>dffceswafcswa</p>', '', '2022-11-08', '2022-11-15', 'Bhubaneswar', '2022-11-08 09:50:19'),
(8, 'demo ', '<p>demo 3</p>', 'Chinmaya kumar biswal CV AWS.pdf', '2022-11-10', '2022-11-14', 'Bhubaneswar', '2022-11-10 19:35:43');

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
(7, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '4.0166666666666995', '', '', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`id`, `type`, `campus`, `pdf`) VALUES
(6, 'ClubInCharges', 'Bhubaneswar', 'club coordinator.pdf'),
(7, 'FacultyInCharges', 'Bhubaneswar', 'Faculty Coordinators.pdf'),
(8, 'StudentInCharges', 'Bhubaneswar', 'Student coordinator.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `coordinatorstypeschool`
--

CREATE TABLE `coordinatorstypeschool` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `school_branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinatorstypeschool`
--

INSERT INTO `coordinatorstypeschool` (`id`, `type`, `school_branch`) VALUES
(1, 'ClubInCharges', 'School of Engineering and Technology'),
(8, 'ClubInCharges', 'M.S. Swaminathan School of Agriculture'),
(9, 'ClubInCharges', 'School of Fisheries'),
(10, 'ClubInCharges', 'School of Applied Sciences'),
(11, 'ClubInCharges', 'School of Agriculture and Bio-Engineering'),
(12, 'ClubInCharges', 'School of Media and Communication'),
(13, 'ClubInCharges', 'School of Management'),
(14, 'ClubInCharges', 'School Of Paramedics & Allied Health Science'),
(15, 'ClubInCharges', 'School Of Pharmacy'),
(16, 'ClubInCharges', 'School of Forensic Sciences'),
(17, 'ClubInCharges', 'School Of Vocational Education and Training'),
(28, 'FacultyInCharges', 'School of Fisheries\r\n'),
(29, 'FacultyInCharges', 'School of Applied Sciences'),
(30, 'FacultyInCharges', 'School of Agriculture and Bio-Engineering\r\n'),
(31, 'FacultyInCharges', 'School of Media and Communication'),
(32, 'FacultyInCharges', 'School Of Paramedics & Allied Health Science'),
(33, 'FacultyInCharges', 'School of Forensic Sciences'),
(35, 'FacultyInCharges', 'School of Management'),
(36, 'FacultyInCharges', 'School Of Pharmacy'),
(37, 'FacultyInCharges', 'School Of Vocational Education and Training'),
(38, 'StudentInCharges', 'Bachelor of Technology in Computer Science And Engineering'),
(39, 'StudentInCharges', 'Bachelor of Technology in Mechanical Engineering'),
(40, 'StudentInCharges', 'Bachelor of Technology in Electronics and Communication Engineering'),
(41, 'StudentInCharges', 'Bachelor of Technology in Electrical and Electronics Engineering'),
(42, 'StudentInCharges', 'Bachelor of Technology in Bio-Technology Engineering'),
(43, 'StudentInCharges', 'Bachelor of Technology in Mining Engineering,'),
(44, 'StudentInCharges', 'Bachelor of Technology in Aerospace Engineering'),
(45, 'StudentInCharges', 'Bachelor of Technology in Civil Engineering'),
(46, 'StudentInCharges', 'Bachelor of Agriculture Science'),
(47, 'StudentInCharges', 'Bachelor of Fisheries Science'),
(48, 'StudentInCharges', 'Bachelor of Science in Physics'),
(49, 'StudentInCharges', 'Bachelor of Science in Chemistry'),
(50, 'StudentInCharges', 'Bachelor of Science in Mathematics'),
(51, 'StudentInCharges', 'Bachelor of Science in Botany'),
(52, 'StudentInCharges', 'Bachelor of Science in Zoology'),
(53, 'StudentInCharges', 'Bachelor of Computer Application'),
(54, 'StudentInCharges', 'Bachelor of Science in Health and Wellness'),
(55, 'StudentInCharges', 'Bachelor of Science In Cosmetology and Wellness'),
(56, 'StudentInCharges', 'Bachelor of Technology in Agricultural Engineering'),
(57, 'StudentInCharges', 'Bachelor of Dairy Technology'),
(58, 'StudentInCharges', 'Bachelor of Phytopharmaceuticals'),
(59, 'StudentInCharges', 'Bachelor of Science Animation and Multimedia'),
(60, 'StudentInCharges', 'Bachelor of Commerce'),
(61, 'StudentInCharges', 'Bachelor of Business Administration'),
(62, 'StudentInCharges', 'Bachelor of Management Studies (Airlines and Airport Management)'),
(63, 'StudentInCharges', 'Bachelor of Business Administration (Healthcare Management)'),
(64, 'StudentInCharges', 'Bachelor of Science in Medical Laboratory Technology'),
(65, 'StudentInCharges', 'Bachelor of Science in Medical Radiation Technology'),
(66, 'StudentInCharges', 'Bachelor of Science in Clinical Microbiology\r\n'),
(67, 'StudentInCharges', 'Bachelor of Science in Optometry'),
(68, 'StudentInCharges', 'Bachelor of Science in Anesthesia Technology'),
(69, 'StudentInCharges', 'Bachelor of Science in Emergency Medicine Technology'),
(70, 'StudentInCharges', 'Bachelor of Science in Operation Theatre Technology\r\n'),
(71, 'StudentInCharges', 'Bachelor of Physiotherapy'),
(72, 'StudentInCharges', 'Bachelor of Pharmacy'),
(73, 'StudentInCharges', 'Bachelor of Science in Forensic Science'),
(74, 'StudentInCharges', 'Bachelor of Vocational (Manufacturing)'),
(75, 'StudentInCharges', 'Bachelor of Vocational (Electrical Maintenance)'),
(76, 'StudentInCharges', 'Master of Technology in Power System and Control Engineering'),
(77, 'StudentInCharges', 'Master of Technology in Structural Engineering'),
(78, 'StudentInCharges', 'Master of Technology in Transportation Engineering'),
(79, 'StudentInCharges', 'Master of Business Administration with specialisation in Finance / HR / Marketing '),
(80, 'StudentInCharges', 'Master of Business Administration with specialisation in Development Management (Rural & Urban Development Management)'),
(81, 'StudentInCharges', 'Master of Business Administration (Healthcare Management)'),
(82, 'StudentInCharges', 'Master of Agriculture Science in Agronomy'),
(83, 'StudentInCharges', 'Master of Agriculture Science in Genetics & Plant Breeding'),
(84, 'StudentInCharges', 'Master of Agriculture Science in Horticulture and Vegetable Science'),
(85, 'StudentInCharges', 'Master of Agriculture Science in Agriculture Extension and Communication'),
(86, 'StudentInCharges', 'Master of Agriculture Science In Entomology, New Program'),
(87, 'StudentInCharges', 'Master of Agriculture Science In Plant Pathology'),
(88, 'StudentInCharges', 'Master of Agriculture Science In Seed Science & Technology,'),
(89, 'StudentInCharges', 'Master of Agriculture Science In Soil Science'),
(90, 'StudentInCharges', 'Master of Science in Medical Laboratory Technology'),
(91, 'StudentInCharges', 'Master of Science in Applied and Clinical Microbiology'),
(92, 'StudentInCharges', 'Master of Science in Optometry'),
(93, 'StudentInCharges', 'Master of Science in Applied Mathematics'),
(94, 'StudentInCharges', 'Master of Science in Applied Chemistry'),
(95, 'StudentInCharges', 'Master of Science in Botany'),
(96, 'StudentInCharges', 'Master of Science in Zoology'),
(97, 'StudentInCharges', 'Master of Science in Applied Physics'),
(98, 'StudentInCharges', 'Master of Science in Geoinformatics , New Program'),
(99, 'StudentInCharges', 'Master of Science in Plant Genomics'),
(100, 'StudentInCharges', 'Master of Science in New Materials'),
(101, 'StudentInCharges', 'Master of Science in Nutraceuticals'),
(102, 'StudentInCharges', 'Master of Computer Applications'),
(103, 'StudentInCharges', 'Master of Science in Forensic Science'),
(104, 'StudentInCharges', 'Ph.D in Engineering'),
(105, 'StudentInCharges', 'Ph.D in Agriculture'),
(106, 'StudentInCharges', 'Ph.D in Sciences'),
(107, 'StudentInCharges', 'Ph.D in Applied and Clinical Microbiology'),
(108, 'StudentInCharges', 'ITI in Automobile'),
(109, 'StudentInCharges', 'Diploma in Civil Engineering'),
(110, 'StudentInCharges', 'ITI in Electrical'),
(111, 'StudentInCharges', 'ITI in Mechanical'),
(112, 'StudentInCharges', 'Diploma in Computer Science Engineering'),
(113, 'StudentInCharges', 'Diploma in Electronics and Communication Engineering'),
(114, 'StudentInCharges', 'Diploma in Mining Engineering'),
(115, 'StudentInCharges', 'Diploma in Electrical Engineering'),
(116, 'StudentInCharges', 'Diploma in Mechanical Engineering'),
(117, 'StudentInCharges', 'Diploma in Automobile Engineering'),
(118, 'StudentInCharges', 'Diploma in Vocational in Automobile'),
(119, 'StudentInCharges', 'Diploma in Vocational in Electrical Maintenance'),
(120, 'StudentInCharges', 'Diploma in Vocational in Manufacturing'),
(121, 'StudentInCharges', 'Diploma in Medical Laboratory Technology'),
(122, 'StudentInCharges', 'Diploma in Medical Radiation Technology'),
(123, 'StudentInCharges', 'Diploma in Community Health Practice'),
(124, 'StudentInCharges', 'Diploma in Pharmacy'),
(127, 'FacultyInCharges', 'School of Engineering and Technology');

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
(1, 'Culture', 'Music Club'),
(2, 'Culture', 'Dance Club'),
(3, 'Sports', 'Swimming Club'),
(5, 'Responsibility', 'Youth Red Cross'),
(6, 'Responsibility', 'Science Club'),
(12, 'Culture', 'Dramatic Club'),
(13, 'Culture', 'Painting Club'),
(14, 'Culture', 'Movie Club'),
(15, 'Culture', 'Laughter Club'),
(16, 'Culture', 'Literary Club'),
(17, 'Culture', 'Designer Club'),
(18, 'Culture', 'Handicraft Club'),
(21, 'Sports', 'Adventure Club'),
(22, 'Sports', 'Yoga & Meditation Society'),
(24, 'Sports', 'Bharat Scout & Guide Club'),
(25, 'Sports', 'GYM & Fitness Club'),
(26, 'Responsibility', 'NSS Club'),
(27, 'Responsibility', 'Robotics Club'),
(28, 'Responsibility', 'Innovators & Enterpreneurs Club'),
(29, 'Responsibility', 'P & P Club'),
(30, 'Culture', 'Language Club'),
(31, 'Culture', 'Waste to Wealth Innovation Club'),
(32, 'Culture', 'Creativity Club'),
(33, 'Culture', 'Fashion Club'),
(34, 'Culture', 'CHEF Club'),
(35, 'Responsibility', 'Health Club'),
(36, 'Responsibility', 'Patho Club'),
(37, 'Responsibility', 'Opto Club'),
(38, 'Responsibility', 'Green Club'),
(39, 'Responsibility', 'Aeromodelling Club'),
(40, 'Responsibility', 'Video Gaming Club'),
(41, 'Responsibility', 'Girl\'s NCC Club'),
(42, 'Responsibility', 'Developers Club'),
(43, 'Responsibility', 'Practice Club'),
(44, 'Responsibility', 'Internet of Things Club'),
(45, 'Responsibility', 'Animal Club'),
(46, 'Sports', 'Kabaddi'),
(47, 'Sports', 'Basketball'),
(48, 'Sports', 'KHO-KHO'),
(49, 'Sports', 'Volleyball'),
(50, 'Sports', 'Futsal'),
(51, 'Sports', 'Athletics'),
(52, 'Sports', 'Throwball'),
(53, 'Sports', 'Tennis'),
(54, 'Sports', 'Badminton'),
(55, 'Sports', 'T.T, Chess & Carrom'),
(56, 'Sports', 'Cricket');

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
  `status` varchar(255) NOT NULL,
  `postTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csrtimesheet`
--

INSERT INTO `csrtimesheet` (`id`, `NameOfStd`, `emailOfStd`, `yearOfPr`, `csrPr`, `schoolname`, `club`, `date`, `campus`, `fromTime`, `endTime`, `totalTime`, `status`, `postTime`) VALUES
(28, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Music Club', '2022-09-24', 'Bhubaneswar', '10:35', '11:35', '1', 'Not approved', '2022-11-07 17:29:47'),
(29, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-09-24', 'Bhubaneswar', '11:37', '14:38', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(30, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-10-28', 'Bhubaneswar', '14:15', '15:16', '1.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(31, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dramatic Club', '2022-10-28', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Rejected', '2022-11-07 17:29:47'),
(37, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Engineering and Technology', 'Youth Red Cross', '2022-10-30', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(51, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-11-03', 'Bhubaneswar', '10:43', '14:43', '4', 'Approved', '2022-11-07 17:29:47'),
(52, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-11-07', 'Bhubaneswar', '14:01', '16:01', '2', 'Approved', '2022-11-07 17:31:42'),
(53, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-11-08', 'Bhubaneswar', '13:04', '14:04', '1', 'Approved', '2022-11-05 18:34:39'),
(54, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-11-11', 'Bhubaneswar', '10:44', '13:44', '3', 'Rejected', '2022-11-11 09:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery1`
--

CREATE TABLE `gallery1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `years` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery2`
--

CREATE TABLE `gallery2` (
  `id` int(11) NOT NULL,
  `connect_id` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `preachievements`
--

CREATE TABLE `preachievements` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `regd` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `achievementdetails` varchar(255) NOT NULL,
  `academicyear` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preachievements`
--

INSERT INTO `preachievements` (`id`, `name`, `regd`, `branch`, `achievementdetails`, `academicyear`, `profile_img`, `campus`) VALUES
(2, 'Kiran Kumar Malik', '200301120128', 'B-Tech in Computer Science and Engineering', 'Cricket', '2020-2021', 'user.png', 'Bhubaneswar');

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
  `courseDuration` varchar(255) NOT NULL,
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

INSERT INTO `student` (`id`, `name`, `email`, `regd`, `schoolname`, `program`, `branch`, `campus`, `admissionyear`, `courseDuration`, `sex`, `religion`, `dob`, `hobby`, `present_address`, `permanent_address`, `password`, `mobile`, `profileimage`, `status`) VALUES
(15, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '200301120128', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '2020-2021', '4', 'Male', 'Hindu', '19/08/2002', 'To play Cricket', 'Paikasahi, Dhamara, Bhadrak, Odisha-756171					', 'Paikasahi, Dhamara, Bhadrak, Odisha-756171					', 'kiranmalik', '7848051078', 'kiran.jpg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `studregd`
--

CREATE TABLE `studregd` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `regd` varchar(225) NOT NULL,
  `schoolname` varchar(250) NOT NULL,
  `program` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `campus` varchar(250) NOT NULL,
  `admissiontype` varchar(255) NOT NULL,
  `admissionyear` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `blood_group` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studregd`
--

INSERT INTO `studregd` (`id`, `name`, `email`, `regd`, `schoolname`, `program`, `branch`, `campus`, `admissiontype`, `admissionyear`, `sex`, `religion`, `dob`, `blood_group`) VALUES
(33, 'ADITYA NARAYAN PATHAK', '200101120005@cutm.ac.in', '200101120005', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '29/08/2002', 'O+'),
(34, 'BADRINARAYAN PANDA', '200101120011@cutm.ac.in', '200101120011', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '10/05/2002', 'B+'),
(35, 'ANIKET MOHANTY', '200301120001@cutm.ac.in', '200301120001', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/05/2001', 'A+'),
(36, 'AVINASH KUMAR', '200301120002@cutm.ac.in', '200301120002', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '21/08/2000', 'A+'),
(37, 'PULLAM BHATLA LAXMI SINDHU\r\n', '200301120003@cutm.ac.in\r\n', '200301120003\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '12/05/2001', 'B+'),
(38, 'SATVINDER SINGH\r\n', '200301120004@cutm.ac.in', '200301120004', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/06/1999', 'B+'),
(39, 'ANKITA ROY', '200301120005@cutm.ac.in', '200301120005', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '02/02/2002', 'O+'),
(40, 'PRANAB KUMAR AGASTI\r\n', '200301120006@cutm.ac.in', '200301120006', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/04/2000', 'B-'),
(41, 'KAUSHIK MOHAPATRA\r\n', '200301120007@cutm.ac.in', '200301120007', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/08/2001', 'A+'),
(42, 'AKANKSHA KUMARI', '200301120002@cutm.ac.in', '200301120002', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '03.08.2002', 'B+'),
(43, 'SWAGAT KAR\r\n', '200301120009@cutm.ac.in', '200301120009', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/03/2001', 'A+'),
(44, 'SOURAV MOHANTY', '200301120010@cutm.ac.in', '200301120010', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/07/2002', 'O+'),
(45, 'KAIBALYA KAR', '200301120011@cutm.ac.in', '200301120011', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '22/02/2002', 'A+'),
(46, 'OM PRAKASH MOHANTY\r\n', '200301120012a2cutm.ac.in', '200301120012\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/05/2001', 'A+'),
(47, 'ANSHIT PATTNAIK', '200301120013@cutm.ac.in', '200301120013', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/01/2001', 'A+'),
(49, 'MILAN JANA', '200301120014@cutm.ac.in', '200301120014', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '17/08/2002', 'O+'),
(50, 'NAYABRATA SWAIN', '200301120015@cutm.ac.in', '200301120015\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/09/2001', 'A+'),
(51, 'ASUTOSH SATPATHY', '200301120016@cutm.ac.in', '200301120016\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/06/2002', 'B+'),
(52, 'ANSHUMAN BARIK\r\n', '200301120017@cutm.ac.in', '200301120017', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '24/08/2000', 'A+'),
(53, 'PIYUSH KUMAR\r\n', '200301120018@cutm.ac.in', '200301120018', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/08/2001', 'B+'),
(54, 'BHABANI SANKAR MAHARANA', '200301120019@cutm.ac.in', '200301120019', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '25/03/2001', 'O+'),
(55, 'ADITYA RAJ', '200301120020@cutm.ac.in', '200301120020', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/01/2001', 'A+'),
(56, 'PAYAL PANDA\r\n', '200301120021@cutm.ac.in', '200301120021', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '01/08/2001', 'B+'),
(57, 'SHIBAM ACHARYA\r\n', '200301120022@cutm.ac.in', '200301120022', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '21/03/2001', 'O+'),
(58, 'ABHIJIT BEHERA', '200301120023@cutm.ac.in', '200301120023', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/03/2002', 'AB+'),
(59, 'SUBHRAJIT SENAPATI', '200301120024@cutm.ac.in', '200301120024', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '26/09/2000', 'A+'),
(60, 'ABHISHEK RAJ', '200301120025@cutm.ac.in', '200301120025', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '17/11/2001', 'B+'),
(61, 'RITIK MISHRA', '200301120026@cutm.ac.in', '200301120026', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '21/08/2001', 'B+'),
(62, 'ANKIT KUMAR SAHU', '200301120027@cutm.ac.in', '200301120027', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03.06.1999', 'B+'),
(63, 'GYAN PRAKASH TIWARI', '200301120028@cutm.ac.in', '200301120028', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/11/2001', 'B+'),
(64, 'AMIT KUMAR NAIK', '200301120030@cutm.ac.in', '200301120030', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/02/2001', 'O+'),
(65, 'ANAND SINGH', '200301120031@cutm.ac.in', '200301120031', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '26/12/2001', 'O+'),
(66, 'JYOTI PRAKASH MALLICK', '200301120032@cutm.ac.in', '200301120032', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '24/06/2001', 'A+'),
(67, 'DEEPAK MALLIK', '200301120033@cutm.ac.in', '200301120033', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '26/10/2003', 'O+'),
(68, 'LIPSA LENKA', '200301120034@cutm.ac.in', '200301120034', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '16/06/2002', 'B+'),
(69, 'SATYAJIT PATI', '200301120035@cutm.ac.in', '200301120035', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/11/2001', 'O+'),
(70, 'SIDHARTH BEHERA', '200301120036@cutm.ac.in', '200301120036', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '24/12/2002', 'B+'),
(71, 'SIDHARTH BEHERA', '200301120036@cutm.ac.in', '200301120036\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/10/2001', 'B+'),
(72, 'ARADHANA SAHU', '200301120037@cutm.ac.in', '200301120037', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/06/2002', 'B+'),
(73, 'ANIMESH SINGH', '200301120038@cutm.ac.in', '200301120038', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/02/2002', 'O+'),
(74, 'MOHAMMED AQEEB RAZA', '200301120039@cutm.ac.in', '200301120039', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '11/12/2003', 'B+'),
(75, 'OMKAR NARAYAN BHAL', '200301120040@cutm.ac.in', '200301120040', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/10/2000', 'O+'),
(76, 'ASIT GHOSH', '200301120041@cutm.ac.in', '200301120041', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '26/11/2001', 'B+'),
(77, 'DIBYALARA NAYAK', '200301120042@cutm.ac.in', '200301120042', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '28/04/2001', 'AB+'),
(78, 'SMRUTI SAMRUDDHA', '200301120043@cutm.ac.in', '200301120043', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '13/06/2003', 'B+'),
(79, 'SWASTI SOURAV DAS', '200301120044@cutm.ac.in', '200301120044', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '22/02/2002', 'O+'),
(80, 'CHANDRA SEKHAR SETHI', '200301120045@cutm.ac.in', '200301120045', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/01/2003', 'O+'),
(81, 'SK RIZWANUL HAQUE', '200301120046@cutm.ac.in', '200301120046', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '15/04/2003', 'B+'),
(82, 'PRITAM SUNDARAY', '200301120047@cutm.ac.in', '200301120047', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/04/2001', 'B+'),
(83, 'ASHISH KUMAR SAHOO', '200301120048@cutm.ac.in', '200301120048', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/03/2003', 'A-'),
(84, 'ABHIRAM PANDEY', '200301120049@cutm.ac.in', '200301120049', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '22/02/2000', 'AB-'),
(85, 'ADARSH KUMAR BARIK', '200301120050@cutm.ac.in', '200301120050', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/02/2001', 'B-'),
(86, 'PRITIDWEEP ROUT', '200301120051@cutm.ac.in', '200301120051', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/08/2001', 'B+'),
(87, 'ROHIT GHORAI', '200301120052@cutm.ac.in', '200301120052', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/03/2003', 'AB-'),
(88, 'SUMIT KUMAR NAYAK', '200301120054@cutm.ac.in', '200301120054', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/04/2003', 'O+'),
(89, 'VISHAL MANDAL', '200301120055@cutm.ac.in', '200301120055', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '29/09/2001', 'B-'),
(90, 'SIDDHARTH PRASAD NEWAR', '200301120056@cutm.ac.in', '200301120056', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/02/2002', 'B-'),
(91, 'SHASWAT PRADHAN', '200301120057@cutm.ac.in', '200301120057', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/06/2001', 'B+'),
(92, 'ABHISHEK MAHANTA', '200301120058@cutm.ac.in', '200301120058', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/06/2001', 'B+'),
(93, 'PRATYUSH PAL', '200301120059@cutm.ac.in', '200301120059', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '26/03/2001', 'O+'),
(94, 'SANDEEP KUMAR SAHU', '200301120060@cutm.ac.in', '200301120060', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/03/2001', 'O+'),
(95, 'SITU KUMARI GOPE', '200301120060@cutm.ac.in', '200301120060', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/02/2001', 'B-'),
(96, 'SWETAPRAVA PATASANI', '200301120062@cutm.ac.in', '200301120062', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/05/2000', 'O-'),
(97, 'PRANALI PRATIHARY', '200301120063@cutm.ac.in', '200301120063', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '06/06/2001', 'B+'),
(98, 'ANSIT SOUMYARANJAN HATI', '200301120064@cutm.ac.in', '200301120064', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '05/04/2003', 'AB-'),
(99, 'SANGRAM BHUYAN', '200301120065@cutm.ac.in', '200301120065', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Make', 'Hindu', '20/02/2001', 'O-'),
(100, 'ANWESH PANDA', '200301120066@cutm.ac.in', '200301120066', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/05/2003', 'B-'),
(101, 'SOUMYA RANJAN MOHANTY', '200301120067@cutm.ac.in', '200301120067', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/03/2003', 'A+'),
(102, 'SWETAPADMA BARAL', '200301120068@cutm.ac.in', '200301120068', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '11/05/2001', 'B+'),
(103, 'ROHAN BISWAL', '200301120069@cutm.ac.in', '200301120069', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03.06.1999', 'B+'),
(104, 'KIRTTIRAJ SAHOO', '200301120070@cutm.ac.in', '200301120070', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/01/2003', 'O-'),
(105, 'SIDHANTA SWAIN', '200301120071@cutm.ac.in', '200301120071', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/02/2003', 'A+'),
(106, 'JAGADISH PRASAD BISWAL', '200301120072@cutm.ac.in', '200301120072', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/11/2001', 'B+'),
(107, 'PRATIK MOHAPATRA', '200301120073@cutm.ac.in', '200301120073', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/02/2002', 'O+'),
(108, 'PRUTHWIRAJ MOHANTY', '200301120074@cutm.ac.in', '200301120074', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '26/02/2001', 'B-'),
(109, 'BISWAJIT SAMANTARAY', '200301120075@cutm.ac.in', '200301120075', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/03/2001', 'AB+'),
(110, 'LIKE MOHANTY', '200301120076@cutm.ac.in', '200301120076', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '23/02/2001', 'A+'),
(111, 'DEBASHREE ROUT', '200301120077@cutm.ac.in', '200301120077', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '14/02/2003', 'A+'),
(112, 'ASHISH JENA', '200301120078@cutm.ac.in', '200301120078', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/05/2003', 'B+'),
(113, 'A SRIYA', '200301120079@cutm.ac.in', '200301120079', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/11/2001', 'A+'),
(114, 'JAGANNATH DANSANA', '200301120080@cutm.ac.in', '200301120080', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/05/2000', 'A-ve'),
(115, 'BISWAJIT SAHOO', '200301120081@cutm.ac.in', '200301120081', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '27/03/2002', 'B+ve'),
(116, 'SIBASISH PADHY', '200301120082@cutm.ac.in', '200301120082', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '04/06/1999', 'B+ve'),
(117, 'NAWED AHMED KHAN', '200301120083@cutm.ac.in', '200301120083\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '24/07/2001', 'A-ve'),
(118, 'MONALISHA SWAIN', '200301120084@cutm.ac.in', '200301120084\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '17/2/2001', 'O+ve'),
(119, 'RASID KHAN\r\n', '200301120085@cutm.ac.in', '200301120085\r\n', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '13/8/2001', 'B-ve'),
(120, 'SAURABH KUMAR', '200301120086@cutm.ac.in', '200301120086', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '02/12/2000', 'A+ve'),
(121, 'SAMBIT SAGAR SAMANTARAY', '200301120087@cutm.ac.in', '20030112007', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '15/03/2001', 'B+ve'),
(122, 'ASHISH PRADHAN', '200301120088@cutm.ac.in', '200301120088', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '22/04/2000', 'O-ve'),
(123, 'BADAL KUMAR BEHERA', '200301120089@cutm.ac.in', '200301120089', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '02/07/2001', 'B+ve'),
(124, 'GURSHARAN SINGH BANSAL', '200301120090@cutm.ac.in', '200301120090', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '05/12/2001', 'A+ve'),
(125, 'HIMANSHU SEKHAR PUHAN', '200301120091@cutm.ac.in', '200301120091', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '16/10/2000', 'O-ve'),
(126, 'ABHISEK DAS', '200301120092@cutm.ac.in', '200301120092', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '05/11/1999', 'B+ve'),
(127, 'NISHANTA KUMAR BISWAL', '200301120093@cutm.ac.in', '200301120093', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/04/2000', 'B-ve'),
(128, 'SHIBAPRASAD MALLIK', '200301120094@cutm.ac.in', '200301120094', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '30/05/2001', 'A-ve'),
(129, 'MANAS SAHOO', '200301120095@cutm.ac.in', '200301120095', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/12/2000', 'B+ve'),
(130, 'NEHARANI SAMAL', '200301120096@cutm.ac.in', '200301120096', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/11/2001', 'B-ve'),
(131, 'MD FAIZAN', '200301120097@cutm.ac.in', '200301120097', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '26/12/1999', 'A-ve'),
(132, 'JYOTIR ADITYA BARIK', '200301120098@cutm.ac.in', '200301120098', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '10/05/2002', 'A+'),
(133, 'SUZAIN KHAN', '200301120099@cutm.ac.in', '200301120099', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '03.03.1999', 'O+ve'),
(134, 'BISWAJIT MAHAL', '200301120100@cutm.ac.in', '200301120100', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/09/2000', 'A-ve'),
(135, 'BISWAJIT MAHAL', '200301120100@cutm.ac.in', '200301120100', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/03/2001', 'B+ve'),
(136, 'SOUMYA RANJAN SAHOO', '200301120102@cutm.ac.in', '200301120102', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '24/12/2000', 'A-ve'),
(137, 'AJAY KUMAR GUPTA', '200301120103@cutm.ac.in', '200301120103', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '29/10/1999', 'A-ve'),
(138, 'SUBHASIS PRADHAN', '200301120104@cutm.ac.in', '200301120104', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '07/05/2000', 'B+ve'),
(139, 'SANDEEP PARIDA', '200301120105@cutm.ac.in', '200301120105', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '09/08/1999', 'O+ve'),
(140, 'MANORANJAN SAHU', '200301120106@cutm.ac.in', '200301120106', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '16/12/2001', 'O-ve'),
(141, 'BARSHARANI DAS', '200301120108@cutm.ac.in', '200301120108', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '27/02/2000', 'B-ve'),
(142, 'GIRIJA SHANKAR BHUTIA', '200301120107@cutm.ac.in', '200301120108', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '24/11/2001', 'B-ve'),
(143, 'DIBYARANJAN SINGH SAMANTA', '200301120109@cutm.ac.in', '200301120109', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '29/04/1999', 'B+ve'),
(144, 'SABIT KUMAR PRADHAN', '200301120110@cutm.ac.in', '200301120110', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '30/05/2002', 'B+ve'),
(145, 'MUKESH KUMAR SENAPATI', '200301120111@cutm.ac.in', '200301120111', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '10/02/2000', 'A-ve'),
(146, 'ADITYA RAJ.', '200301120112@cutm.ac.in', '200301120112', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/11/1999', 'O+ve'),
(147, 'SUDHANSU ROUT', '200301120113@cutm.ac.in', '200301120113', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '02/10/2001', 'O-ve'),
(148, 'BRAHMANANDA SETHI', '200301120114@cutm.ac.in', '200301120114', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '09/06/2000', 'O-ve'),
(149, 'ARJYAN JENA', '200301120115@cutm.ac.in', '200301120115', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/08/1999', 'O+ve'),
(150, 'SK SIRAJUL ISLAM', '200301120116@cutm.ac.in', '200301120116', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '25/02/2002', 'A+ve'),
(151, 'ASHISH KUMAR SAHOO', '200301120117@cutm.ac.in', '200301120117', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/12/2001', 'B-ve'),
(152, 'PRITAM NAYAK', '200301120118@cutm.ac.in', '200301120118', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/05/2001', 'B+'),
(153, 'BIBHUTI BHUSAN PANDA', '200301120119@cutm.ac.in', '200301120119', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/07/2001', 'B+ve'),
(154, 'ALOK KUMAR SAHU', '200301120120@cutm.ac.in', '200301120120', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '28/06/2000', 'B+ve'),
(155, 'GOURI SANKAR RATH', '200301120121@cutm.ac.in', '200301120121', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/02/1999', 'A+ve'),
(156, 'M MOHNISH KUMAR', '200301120122@cutm.ac.in', '200301120122', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/04/2000', 'A-ve'),
(157, 'SAGAR KUMAR OJHA', '200301120123@cutm.ac.in', '200301120123', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '04/12/2001', 'B+ve'),
(158, 'GURUKRISHNA DAS', '200301120125@cutm.ac.in', '200301120125', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '25/12/2002', 'B-ve'),
(159, 'SHAIKH HABIBUR REHAMAN', '200301120126@cutm.ac.in', '200301120126', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '23/02/1999', 'A-ve'),
(160, 'SNEHASMRUTI NANDA', '200301120127@cutm.ac.in', '200301120127', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '16/05/2000', 'O-ve'),
(161, 'KIRAN KUMAR MALIK', '200301120128@cutm.ac.in', '200301120128', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/08/2002', 'B+ve'),
(162, 'DEBABRATA DAS', '200301120129@cutm.ac.in', '200301120129', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '30/04/2001', 'A+ve'),
(163, 'ANSHUMAN JENA', '200301120130@cutm.ac.in', '200301120130', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/03/2000', 'A-ve'),
(164, 'BAISAKHI RANI DAS', '200301120131@cutm.ac.in', '200301120131', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '23/01/2002', 'B-ve'),
(165, 'PRATIK RANJAN DASH', '200301120132@cutm.ac.in', '200301120132', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/08/2000', 'B+ve'),
(166, 'OM PRAKASH BEHERA', '200301120133@cutm.ac.in', '200301120133', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '29/06/2001', 'B-ve'),
(167, 'SWATI KIRTIMAYEE BEHERA', '200301120134@cutm.ac.in', '200301120134', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/10/2002', 'O+ve'),
(168, 'ANIMESH MOHANTY', '200301120136@cutm.ac.in', '200301120136', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/03/2001', 'B+ve'),
(169, 'BADRI PRASAD DASH', '200301120137@cutm.ac.in', '200301120137', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '28/09/1999', 'O+ve'),
(170, 'SWORAJYA RANJAN SWAIN', '200301120139@cutm.ac.in', '200301120139', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/07/2001', 'A-ve'),
(171, 'ALOK BEHERA', '200301120140@cutm.ac.in', '200301120140', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '16/12/2002', 'O+ve'),
(172, 'SUDHANSU MOHARANA', '200301120141Acutm.ac.in', '200301120141', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/02/2002', 'B+'),
(173, 'SAI SOMYA RANJAN PATI', '200301120142@cutm.ac.in', '200301120142', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03.06.1999', 'B+'),
(174, 'ADITYA KUMAR DAS', '200301120144@cutm.ac.in', '200301120144', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/05/2000', 'A-ve'),
(175, 'ANSUMAN PARAMGURU', '200301120145@cutm.ac.in', '200301120145', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '01/11/2002', 'O-ve'),
(176, 'BIBEK BEHERA', '200301120146@cutm.ac.in', '200301120146', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '27/12/1999', 'A+ve'),
(177, 'RAJTANAYA SWAIN', '200301120147@cutm.ac.in', '200301120147', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '13/05/2002', 'B+ve'),
(178, 'LALATENDU BIDYADHAR SAMAL', '200301120148@cutm.ac.in', '200301120148', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/09/2001', 'B-ve'),
(179, 'ABHISHEK PARIDA', '200301120149@cutm.ac.in', '200301120149', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/10/2000', 'A-ve'),
(180, 'CHIRANJEEB GARNAYAK', '200301120150@cutm.ac.in', '200301120150', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '07/08/1999', 'O+ve'),
(181, 'PRANAB PRABHANJAN SAHOO', '200301120151@cutm.ac.in', '200301120151', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '27/07/2001', 'A-ve'),
(182, 'NRUSINGHANATH MISHRA', '200301120152@cutm.ac.in', '200301120152', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '07/11/2002', 'O-ve'),
(183, 'MOHIT RAJ', '2003011201532cutm.ac.in', '200301120153', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '04/06/2001', 'B+ve'),
(184, 'SYED SAHNAWAZ HUSSAIN', '200301120154@cutm.ac.in', '200301120154', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '29/04/1999', 'O-ve'),
(185, 'BISHAL BISWAS.', '200301120162@cutm.ac.in', '200301120162', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '16/05/2002', 'B+ve'),
(186, 'GOUTAM MAHARANA', '200301120163@cutm.ac.in', '200301120163', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '22/05/2001', 'O-ve'),
(187, 'RAJESH KUMAR SWAIN', '200301120164@cutm.ac.in', '200301120164', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/12/1999', 'A+ve'),
(188, 'DEEPAK KUMAR SAHU', '200301120165@Cutm.ac.in', '200301120165', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/12/2001', 'B+ve'),
(189, 'DEEPAN BEHERA', '200301120166@Cutm.ac.in', '200301120166', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '30/04/2000', 'O+ve'),
(190, 'SANDEEP KUMAR PRADHAN', '200301120167@cutm.ac.in', '200301120167', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '21/08/2000', 'O+ve'),
(191, 'ANKIT KUMAR KANHAR', '200301120168cutm.ac.in', '200301120168', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/08/2002', 'O+ve'),
(192, 'ASHUTOSH BISWAL', '200301120169@cutm.ac.in', '200301120169', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '05/12/2001', 'B-ve'),
(193, 'SAMIKSHYA PATRA.', '200301120170@cutm.ac.in', '200301120170', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/11/1999', 'A+ve'),
(194, 'ADITYA KUMAR ROUT', '200301120172@cutm.ac.in', '200301120172', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '28/06/2001', 'B-ve'),
(195, 'HAROLD KUMAR NAIK', '200301120173@cutm.ac.in', '200301120173', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '23/07/2000', 'O-ve'),
(196, 'SWASTIK ABHIJIT PATRA', '200301120174@cutm.ac.in', '200301120174', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '30/02/2001', 'A+ve'),
(197, 'SOUMYA RANJAN NAYAK', '200301120175@cutm.ac.in', '200301120175', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '01/01/2001', 'B+ve'),
(198, 'SOUMYA RANJAN NAYAK', '200301120175@cutm.ac.in', '200301120175', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/04/2002', 'A+ve'),
(199, 'MAYANK GOPAL', '200301120176@cutm.ac.in', '200301120176', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '01/06/2001', 'B-ve'),
(200, 'RASHMI RANJAN ACHARYA', '200301120177@cutm.ac.in', '200301120177', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '21/12/2001', 'O+ve'),
(201, 'BISWOPATI SAMAL', '200301120178@cutm.ac.in', '200301120178', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '28/09/1999', 'O-ve'),
(202, 'SHIVAM MANI MISHRA', '200301120179@cutm.ac.in', '200301120179', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '22/08/2001', 'A-ve'),
(203, 'DEBIDUTTA ACHARYA', '200301120180@cutm.ac.in', '200301120180', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/12/2002', 'B+ve'),
(204, 'NITYANANDA MANDAL', '200301120181@cutm.ac.in', '200301120181', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '13/03/2001', 'B-ve'),
(205, 'KEDARNATH SETHI', '200301120182@cutm.ac.in', '200301120182', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '05/12/2000', 'O+ve'),
(206, 'P SUDIP KUMAR PRUSTY', '200301120183@cutm.ac.in', '200301120183', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '07/08/2000', 'B+ve'),
(207, 'JYOTI PRAVA BISWAL', '200301120184@cutm.ac.in', '200301120184', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '18/07/1999', 'A-ve'),
(208, 'CHANDAN KUMAR MALLIK', '200301120185@cutm.ac.in', '200301120185', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '12/01/2002', 'O-ve'),
(209, 'SANJU MARANDI', '200301120186@cutm.ac.in', '200301120186', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '29/01/2000', 'B+ve'),
(210, 'CHANDAN KUMAR SAHU', '200301120188@cutm.ac.in', '200301120188', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/05/2000', 'A+ve'),
(216, 'BISWAJEET ROUT', '200301120189@cutm.ac.in', '200301120189', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '17/09/2000', 'B+ve'),
(217, 'SANDHYARANI BHOI', '200301120190@cutm.ac.in', '200301120190', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '13/08/1999', 'O+ve'),
(218, 'GAUTAM KUMAR', '200301120192@cutm.ac.in', '200301120192', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/08/2000', 'B-ve'),
(219, 'SHREYA PRIYADARSHINI DAS', '200301120193@cutm.ac.in', '200301120193', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '27/09/2001', 'O-ve'),
(220, 'PRIYANSHU DASH', '200301121194@cutm.ac.in', '200301121194', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/11/2001', 'B+ve'),
(221, 'RAHUL GOCHHI', '200301121195@cutm.ac.in', '200301121195', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '20/11/2002', 'O-ve'),
(222, 'AYUSH KUMAR SAMRAT', '200301121196@cutm.ac.in', '200301121196', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '17/06/2000', 'O+ve'),
(223, 'AKASH RANJAN SWAIN', '200301121197@cutm.ac.in', '200301121197', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/04/2001', 'A+ve'),
(224, 'CHANDRAKANTA SAHOO', '200301121198@cutm.ac.in', '200301121198', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '25/12/2001', 'O+ve'),
(225, 'SUVENDU PARIDA', '200301121199@cutm.ac.in', '200301121199', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/07/2000', 'B+ve'),
(226, 'ROHIT KUMAR SAHOO', '200301121200@cutm.ac.in', '200301121200', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'hindu', '24/07/2001', 'A-ve'),
(227, 'SAMEER DEHURY', '2003011212012cutm.ac.in', '200301121201', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '05/03/2001', 'A-ve'),
(228, 'RUDRA NARAYAN ACHARYA', '200301121202@cutm.ac.in', '200301121202', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '02/08/2000', 'B+ve'),
(229, 'BHAGABAT SHAKTI SWORUP MAHAPATRA', '200301121203@cutm.ac.in', '200301121203', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/04/2001', 'O-ve'),
(230, 'G VAMSI SAI', '200301121204@cutm.ac.in', '200301121204', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/05/2001', 'A+'),
(231, 'FATIMUN NISHA', '200301121205@cutm.ac.in', '200301121205', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Muslim', '03/06/2002', 'B+'),
(232, 'PRIYA BANERJEE', '200301121206@cutm.ac.in', '200301121206', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '15/03/2001', 'B+'),
(233, 'ALAPAN BANERJEE', '200301260001@cutm.ac.in', '200301260001', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '14/09/2003', 'O+'),
(234, 'CHINNMAY PRASAD RAY', '200301260002@cutm.ac.in', '200301260002', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '22/02/2002', 'B-');

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
  `Designation` varchar(255) NOT NULL,
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

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `empid`, `Designation`, `campus`, `Qualification`, `SchoolName`, `Clubget`, `Gender`, `password`, `profileimage`) VALUES
(1, 'Rajkumar Mohanta', 'rajkumar.mohanta@cutm.ac.in', '7008789363', 'emp13', 'Ass Prof', 'Bhubaneswar', 'M. Tech', 'School of Engineering and Technology', 'Dance Club', 'Male', 'raj', '1561624449.jpg');

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
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificatelog`
--
ALTER TABLE `certificatelog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordinatorstypeschool`
--
ALTER TABLE `coordinatorstypeschool`
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
-- Indexes for table `gallery1`
--
ALTER TABLE `gallery1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery2`
--
ALTER TABLE `gallery2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preachievements`
--
ALTER TABLE `preachievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studregd`
--
ALTER TABLE `studregd`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `certificatelog`
--
ALTER TABLE `certificatelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coordinatorstypeschool`
--
ALTER TABLE `coordinatorstypeschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `csrpr`
--
ALTER TABLE `csrpr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `csrtimesheet`
--
ALTER TABLE `csrtimesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `gallery1`
--
ALTER TABLE `gallery1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery2`
--
ALTER TABLE `gallery2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preachievements`
--
ALTER TABLE `preachievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `studregd`
--
ALTER TABLE `studregd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
