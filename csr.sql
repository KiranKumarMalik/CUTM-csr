-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 09:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
(2, 'Dr. Sangram Keshari Swain', 'sangramkeshariswain@cutm.ac.in', '9937093949', 'Male', 'Bhubaneswar', 'CUTM3245', 'Examination dean, professor', 'Ph.D. in Computer Science and Engineering having 12 years of teaching experience having a demonstrated history of working in the higher education industry. Skilled in Social Services, Teaching, Research, Data Analysis, and Higher Education. A strong education professional having multidimensional approaches like Engineering, Technology, Management, Social Service and Law. Social Responsibility activity has been my Passion always.', 'India', 'Ramchandrapur, Jatani, Bhubaneswar, Odisha, 752050', 'ef619de1cb093518332ffa724bfd0dfc\n', 'sangram1.png'),
(3, 'Mrs. Prativa Satapathy', 'prativa.satpathy@cutm.ac.in', '7008158545', 'Female', 'Bolangir', 'CUTM478', 'Assistant Professor', '', 'India', '', 'f5af845846d8f826d1f98a328e3863e0', 'femaleuser.jpg'),
(4, 'Chandra Sekhar Patro', 'chandrasekhar.patro@cutm.ac.in', '8331887509', 'Male', 'Rayagada', 'CUTM356', 'Professor', '', 'India', '', 'a3739426d182e1c03f98c4fdb3201fb3', 'maleuser.jpg'),
(5, 'Chandan Kumar Das', 'chandankumar.das@gramtarang.org.in', '7873679676', 'Male', 'Balasore', 'CUTM259', 'Professor', '', 'India', '', 'c2a216e103154abc47fa01423ed27d7e', 'maleuser.jpg'),
(6, 'Mrs.Binapani Barik', 'binapani.barik@cutm.ac.in', '7504915935', 'Male', 'Paralakhemundi', 'CUTM476', 'Professor', '', 'India', '', 'acab867cec4c4d520a8ea061767d156a', 'maleuser.jpg'),
(7, 'Rati Ranjan Mishra', 'ratiranjan.mishra@cutm.ac.in', '8249196464', 'Male', 'Chhatrapur', 'EMP875', 'CSaR Co-ordinator', '', 'India', 'Chhatrapur, Ganjam, Odisha', '36b3be6ed1b0529738601bc18d4e9e5b', 'maleuser.jpg'),
(8, 'Nrusinha Das', 'nrusinha@cutm.ac.in', '', 'Male', '', '', 'Server Administrator', 'I am a system administrative', 'India', '', 'd7ba1f808e8ca199cf947403dbb2441b', 'maleuser.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` int(11) NOT NULL,
  `campusName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `campusName`) VALUES
(1, 'Bhubaneswar'),
(2, 'Bolangir'),
(3, 'Rayagada'),
(4, 'Balasore'),
(5, 'Paralakhemundi'),
(6, 'Chhatrapur');

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
  `courseDuration` varchar(255) NOT NULL,
  `campus` varchar(250) NOT NULL,
  `admissiontype` varchar(255) NOT NULL,
  `admissionyear` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `blood_group` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `campus`
--
ALTER TABLE `campus`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `gallery1`
--
ALTER TABLE `gallery1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery2`
--
ALTER TABLE `gallery2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `preachievements`
--
ALTER TABLE `preachievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `studregd`
--
ALTER TABLE `studregd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
