-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 08:53 PM
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
(6, 'Mrs.Binapani Barik', 'binapani.barik@cutm.ac.in', '7504915935', 'Male', 'Paralakhemundi', 'CUTM476', 'Professor', '', 'India', '', 'binapani', 'maleuser.jpg');

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
(2, 'ClubInCharges', 'Bhubaneswar', 'Chinmaya kumar biswal CV AWS.pdf');

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
(3, 'Sports', 'PC Game Club'),
(4, 'Sports', 'Health Club'),
(5, 'Responsibility', 'Youth Red Cross'),
(6, 'Responsibility', 'Science Club'),
(12, 'Culture', 'Dramatic Club'),
(13, 'Culture', 'Painting Club'),
(14, 'Culture', 'Movie Club'),
(15, 'Culture', 'Laughter Club'),
(16, 'Culture', 'Literary Club'),
(17, 'Culture', 'Designer Club'),
(18, 'Culture', 'Handicraft Club'),
(20, 'Sports', 'Sports Club'),
(21, 'Sports', 'Adventure Club'),
(22, 'Sports', 'Yoga & Meditation Society'),
(23, 'Sports', 'NCC Club'),
(24, 'Sports', 'Bharat Scout & Guide Club'),
(25, 'Sports', 'SEDA Club'),
(26, 'Responsibility', 'NSS Club'),
(27, 'Responsibility', 'Robotics Club'),
(28, 'Responsibility', 'Innovateur Club'),
(29, 'Responsibility', 'P & P Club');

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
(32, 'Snehasmruti Nanda', '200301120127@cutm.ac.in', '2022-2023', 'Sports', 'School of Applied Sciences', 'Adventure Club', '2022-10-28', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(33, 'Rajtanaya Swain', '200301120147@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Engineering and Technology', 'Youth Red Cross', '2022-10-28', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(34, 'Pratik Ranjan Dash', '200301120131@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Applied Sciences', 'NSS Club', '2022-10-28', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(35, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Sports', 'School of Engineering and Technology', 'Adventure Club', '2022-10-29', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(36, 'Snehasmruti Nanda', '200301120127@cutm.ac.in', '2022-2023', 'Culture', 'School of Applied Sciences', 'Dance Club', '2022-10-29', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(37, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Engineering and Technology', 'Youth Red Cross', '2022-10-30', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(38, 'Bibek Behera', '200301120146@cutm.ac.in', '2022-2023', 'Culture', 'School of Applied Sciences', 'Dance Club', '2022-10-29', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(39, 'Bibek Behera', '200301120146@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Applied Sciences', 'Youth Red Cross', '2022-10-30', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(40, 'Rajtanaya Swain', '200301120147@cutm.ac.in', '2022-2023', 'Sports', 'School of Engineering and Technology', 'Adventure Club', '2022-10-28', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(41, 'Pratik Ranjan Dash', '200301120132@cutm.ac.in', '2022-2023', 'Culture', 'School of Applied Sciences', 'Dance Club', '2022-10-28', 'Bhubaneswar', '11:18', '13:19', '2.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(42, 'Sagar Kumar Ojha', '200301120123@cutm.ac.in', '2022-2023', 'Culture', 'School of Fisheries', 'Dance Club', '2022-10-28', 'Bhubaneswar', '11:18', '14:19', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(43, 'Chandan Kumar Sahu', '200301120188@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Media and Communication', 'Youth Red Cross', '2022-10-30', 'Bhubaneswar', '10:18', '14:19', '4.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(44, 'Sai Soumyaranjan Pati', '200301120142@cutm.ac.in', '2022-2023', 'Culture', 'M.S. Swaminathan School of Agriculture', 'Dance Club', '2022-10-28', 'Bhubaneswar', '11:18', '14:19', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(45, 'Baisakhi rani Das', '200301120131@cutm.ac.in', '2022-2023', 'Sports', 'School of Agriculture and Bio-Engineering', 'Adventure Club', '2022-10-30', 'Bhubaneswar', '11:18', '14:19', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(46, 'Shaikh Habibur Reheman', '200301120126@cutm.ac.in', '2022-2023', 'Culture', 'School Of Paramedics & Allied Health Science', 'Designer Club', '2022-10-30', 'Bhubaneswar', '11:18', '14:19', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(47, 'Anshuman Jena', '200301120130@cutm.ac.in', '2022-2023', 'Sports', 'School Of Pharmacy', 'Yoga & Meditation Society', '2022-10-31', 'Bhubaneswar', '11:18', '14:19', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(48, 'Animesh Mohanty', '200301120136@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Forensic Sciences', 'Innovateur Club', '2022-10-31', 'Bhubaneswar', '11:18', '14:19', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(49, 'Badri Prasad Dash', '200301120137@cutm.ac.in', '2022-2023', 'Sports', 'School Of Vocational Education and Training', 'NCC Club', '2022-10-31', 'Bhubaneswar', '11:18', '14:19', '3.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(50, 'Abhishek Parida', '200301120149@cutm.ac.in', '2022-2023', 'Responsibility', 'School of Applied Sciences', 'Robotics Club', '2022-09-25', 'Bhubaneswar', '11:18', '15:19', '4.0166666666667', 'Approved', '2022-11-07 17:29:47'),
(51, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-11-03', 'Bhubaneswar', '10:43', '14:43', '4', 'Rejected', '2022-11-07 17:29:47'),
(52, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-11-07', 'Bhubaneswar', '14:01', '16:01', '2', 'Approved', '2022-11-07 17:31:42'),
(53, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '2022-2023', 'Culture', 'School of Engineering and Technology', 'Dance Club', '2022-11-08', 'Bhubaneswar', '13:04', '14:04', '1', 'Approved', '2022-11-05 18:34:39');

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
(15, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '200301120128', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '2020-2021', '4', 'Male', 'Hindu', '19/08/2002', 'To play Cricket', 'Paikasahi, Dhamara, Bhadrak, Odisha-756171					', 'Paikasahi, Dhamara, Bhadrak, Odisha-756171					', 'kiran', '7848051078', 'kiran.jpg', 'Approved'),
(16, 'Snehasmruti Nanda', '200301120127@cutm.ac.in', '200301120127', 'School of Applied Science', 'B.Sc', 'Information Technology', 'Balasore', '2020-2021', '', 'Female', 'Hindu', '15/05/2002', 'Badminton', 'demo1', 'demo1', 'sneha', '9658888642', 'user.jpg', 'Approved'),
(17, 'Rajtanaya Swain', '200301120147@cutm.ac.in', '200301120147', 'School of Management', 'BBA', 'Business', 'Balangir', '2020-2021', '', 'Female', 'Hindu', '16/02/2002', 'Swimming', 'demo2', 'demo2', 'raj', '7848051078', 'user.jpg', 'Approved'),
(18, 'Bibek Behera', '200301120146@cutm.ac.in', '200301120146', 'School of Engineering and Technology', 'B-Tech', 'Computer Science and Engineering', 'Bhubaneswar', '2020-2021', '', 'Male', 'Hindu', '25/07/2002', 'Cricket', 'demo3', 'demo3', 'bibek', '7848051078', 'user.jpg', 'Approved'),
(19, 'Abhishek Parida', '200301120149@cutm.ac.in', '200301120149', 'School of Applied Sciences', 'B.Sc', 'Forensic Science', 'Balasore', '2020-2021', '', 'Male', 'Hindu', '14/05/2002', 'Cricket', 'demo4', 'demo4', 'abhishek', '7848051078', 'user.jpg', 'Approved'),
(20, 'Adarsh Kumar Barik', '200301120050@cutm.ac.in', '200301120050', 'School Of Pharmacy', 'BBA', 'Marketing', 'Paralakhemundi', '2020-2021', '', 'Male', 'Hindu', '19/05/2002', 'Badminton', 'demo5', 'demo5', 'adarsh', '7848051078', 'user.jpg', 'Approved');

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
(1, 'Kiran Kumar Malik', '200301120128@cutm.ac.in', '200301120128', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/08/2002', 'O+'),
(2, 'Snehasmruti Nanda', '200301120127@cutm.ac.in', '200301120127', 'School of Applied Science', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2021', 'Female', 'Hindu', '29/3/2002', 'A+'),
(3, 'Shaikh Habibur Reheman', '200301120126@cutm.ac.in', '200301120126', 'School of Media and Communication', 'B.Tech', 'Camera', 'Bhubaneswar', '', '2020', 'Male', 'Muslim', '01/11/2003', 'O+'),
(4, 'Bibek Behera', '200301120146@cutm.ac.in', '200301120146', 'School of Management', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2022', 'Male', 'Hindu', '15/05/2001', 'B+'),
(5, 'Parinita Tripathy', '190604100003@cutm.ac.in', '190604100003', 'School of Applied Sciences', 'BSc', 'Chemistry', 'Bolangir', '', '2020', 'Female', 'Hindu', '12/08/2002', 'A-'),
(6, 'Ajit Meher', '212517100003@cutm.ac.in', '212517100003', 'School of Pharmacy', 'Pharmacy', 'D.Pharm ', 'Bolangir', '', '2021', 'Male', 'Hindu', '12/08/2002', 'B+'),
(7, 'Jyotirmayee Sahu', '212517100024@cutm.ac.in', '212517100024', 'School of Pharmacy', 'Pharmacy', 'D.Pharm ', 'Bolangir', '', '2021', 'Female', 'Hindu', '15/05/2000', 'B-'),
(8, 'Asif Khan', '212516100013@cutm.ac.in', '212516100013', 'School of Pharmacy', 'Pharmacy', 'B.Pharm', 'Bolangir', '', '2021', 'Male', 'Muslim', '19/03/2001', 'AB+'),
(9, 'Nikita Choudhury', '202616100004@cutm.ac.in', '202616100004', 'School of Pharmacy', 'Pharmacy', 'B. Pharm', 'Rayagada', '', '2020', 'Female', 'Hindu', '21/09/2002', 'B-'),
(10, 'Subham Nayak', '202616100034@cutm.ac.in', '202616100034', 'School of Pharmacy', 'Pharmacy', 'B. Pharm', 'Rayagada', '', '2020', 'Male', 'Hindu', '12/07/2001', 'A-'),
(11, 'Iswari Senapati', '212617100058@cutm.ac.in', '212617100058', 'School of Pharmacy', 'Pharmacy', 'D. Pharm', 'Rayagada', '', '2021', 'Female', 'Hindu', '14/08/2002', 'O+'),
(12, 'Nagarjuna Nayak', '211705350033@cutm.ac.in', '211705350033', 'School of Applied Science', 'M.Sc', 'Chemistry ', 'Balasore', '', '2021', 'Male', 'Hindu', '14/06/2002', 'B+'),
(13, 'Biswajit Kumar Majhi', '200704100011@cutm.ac.in', '200704100011', 'School Of Paramedics & Allied Health Science', 'B.Sc', 'Chemistry', 'Balasore', '', '2020', 'Male', 'Hindu', '21/04/2002', 'B+'),
(14, 'Adarsh Raj swain', '201516100031@cutm.ac.in', '201516100031', 'School of Pharmacy', 'Pharmacy', 'B.Pharm', 'Balasore', '', '2020', 'Male', 'Hindu', '16/06/2001', 'A-'),
(15, 'Biswopati samal', '200301120178@cutm.ac.in', '200301120178', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '18/8/2002', 'B+'),
(16, 'Biswajeet Rout', '200301120189@cutm.ac.in', '200301120189', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '17/02/2000', 'O+'),
(17, 'Fatimun Nisha', '200301121205@cutm.ac.in', '200301121205', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2021', 'Female', 'Muslim', '15/08/2001', 'O+'),
(18, 'Deepan Behera', '200301120166@cutm.ac.in', '200301120166', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '10/06/2002', 'O+'),
(19, 'Swati kirtimayee Behera', '200301120134@cutm.ac.in', '200301120134', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '27/01/2003', 'B+'),
(20, 'Priya Banerjee', '200301121206@cutm.ac.in', '200301121206', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2021', 'Female', 'Hindu', '14/05/2001', 'O+'),
(21, 'Goutam maharana', '200301120163@cutm.ac.in', '200301120163', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '11/03/2002', 'B+'),
(22, 'P Sudip Kumar Prusty', '200301120183@cutm.ac.in', '200301120183', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '19/05/2002', 'O+'),
(23, 'Sai somya ranjan pati', '200301120142@cutm.ac.in', '200301120142', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '30/03/2003', 'B+'),
(24, 'Pratik Ranjan Dash', '200301120132@cutm.ac.in', '200301120132', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '03/03/2001', 'O+'),
(25, 'Rashmi ranjan acharya', '200301120177@cutm.ac.in', '200301120177', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '31/03/2003', 'A-'),
(26, 'Abhishek Parida', '200301120149@cutm.ac.in', '200301120149', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '10/06/2001', 'AB-'),
(27, 'Rajtanaya Swain', '200301120147@cutm.ac.in', '200301120147', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Female', 'Hindu', '7/02/2003', 'B+'),
(30, 'Lalatendu bidyadhar samal ', '200301120148@cutm.ac.in', '200301120148', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '29/05/2003', 'AB+'),
(31, 'Sagar Kumar Ojha ', '200301120123@cutm.ac.in', '200301120123', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubaneswar', '', '2020', 'Male', 'Hindu', '10/04/2002', 'B+'),
(32, 'Animesh Mohanty', '200301120136@cutm.ac.in', '200301120136', 'School of Engineering and Technology', 'B.Tech', 'Computer Science and Engineering', 'Bhubanewsar', '', '2020', 'Male', 'Hindu', '27/04/2002', 'O+');

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
(1, 'Rajkumar Mohanta', 'rajkumar.mohanta@cutm.ac.in', '7008789363', 'emp13', 'Ass Prof', 'Bhubaneswar', 'M. Tech', 'School of Engineering and Technology', 'Dance Club', 'Male', 'iglwdDuG', '1561624449.jpg'),
(17, 'Suvendu Kumar Nayak', '200301120149@cutm.ac.in', '9348905343', 'EMP78', 'Assistant Professor', 'Bhubaneswar', 'Phd', 'School of Engineering and Technology', 'Music Club', 'Male', 'vLYl9rF5', 'maleuser.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coordinatorstypeschool`
--
ALTER TABLE `coordinatorstypeschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `csrpr`
--
ALTER TABLE `csrpr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `csrtimesheet`
--
ALTER TABLE `csrtimesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
