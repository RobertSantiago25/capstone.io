-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 01:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `contact`, `address`, `email`, `password`) VALUES
(5, 'Admin Account', '090999090123', 'Pale Benedicto St Mandurriao', 'Admin1@gmail.com', 'Password1'),
(6, 'Dean Seth', '0963664614', 'Phinma UI', 'Admin@gmail.com', 'Password1');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `message`, `date`) VALUES
(54, 'Maayong adlaw, HK scholars!', '\nMay ara pa bala sa inyo gapangita sang pwede ma-dutyhan as Student Facilitators sa sini nga second semester?\n\nSign-up na sa sini nga google form para kamu mahatagan sang Student Facilitator Assignment! \nPara sa mga dugang nga palamangkutanon, kadto l', '2024-01-29 17:53:50'),
(55, 'For scholars of phinma UI', 'We have a mass and we will give you 50 hours if you attend.', '2024-01-30 11:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `id_num` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `fullname`, `contact`, `id_num`, `year_level`, `course`, `department`, `email`, `faculty_email`, `status`, `post_id`) VALUES
(23, 'Stephanie Seblante', '09090912312', '04-1923-23123', '3rd Year', 'BSIT', 'College of Information Technology Education', 'Stephanie@gmail.com', 'Faculty@gmail.com', 'Pending', 39),
(24, 'Stephanie Seblante', '09090912312', '04-1923-23123', '3rd Year', 'BSIT', 'College of Information Technology Education', 'Stephanie@gmail.com', 'Faculty@gmail.com', 'Pending', 39),
(25, 'Stephanie Seblante', '09090912312', '04-1923-23123', '3rd Year', 'BSIT', 'College of Information Technology Education', 'Stephanie@gmail.com', 'Faculty@gmail.com', 'Approved', 41);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(18, 'Senior High School Department'),
(19, 'College of Maritime Education'),
(20, 'College of Education'),
(21, 'College of Arts and Sciences'),
(22, 'College of Criminal Justice Education'),
(23, 'College of Information Technology Education'),
(24, 'College of Allied Health and Sciences'),
(25, 'College of Engineering'),
(26, 'College of Management and Accountancy');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_num` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `account_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `profile`, `fullname`, `contact`, `address`, `email`, `password`, `id_num`, `department`, `account_status`) VALUES
(23, 'DSC_0658.JPG', 'Ryan Valeriano', '0909646123', 'Pale Benedicto St Mandurriao', 'Faculty@gmail.com', 'Password1', '04-1923-2313', 'College of Arts and Sciences', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `num_students` varchar(255) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `fullname`, `description`, `title`, `num_students`, `faculty_email`, `start_time`, `end_time`, `day`, `department`, `semester`, `school_year`) VALUES
(38, 'Faculty Account', 'See me at CITE Office for more details details details. ', 'Laboratory Assistant', '6', 'Faculty@gmail.com', '07:30', '17:00', 'Monday-Friday', 'College of Arts and Sciences', '2st Semester', 'S.Y.2024-2025'),
(39, 'Faculty Account', 'We need student facilitator to duty in subject GEN 003.', 'Student Facilitator ', '3', 'Faculty@gmail.com', '07:30', '10:30', 'Monday', 'College of Arts and Sciences', '', ''),
(40, 'Faculty Account', 'VIsit the librabry  for more informations.', 'Library Assistant ', '4', 'Faculty@gmail.com', '08:30', '17:30', 'Monday-Friday', 'College of Arts and Sciences', '', ''),
(41, 'Ryan Valeriano', 'I need 3 laboratory assitant to do duty in CL 1-5.', 'Laboratory Assistant', '2', 'Faculty@gmail.com', '07:30', '18:07', 'Monday-Fridany', 'College of Arts and Sciences', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `scholars`
--

CREATE TABLE `scholars` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `id_no` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`id`, `email`, `password`, `student_name`, `contact`, `id_no`, `year_level`, `course`, `department`, `status`) VALUES
(24, 'Robert@gmail.com', 'Password1', 'Robert Jr. H. Santiago', '09636646148', '04-1920-00279', '3rd Year', 'IT', 'Cite Department', 'Activate'),
(25, 'Rhea@gmail.com', 'Password1', 'Rhea Ganancial', '09108568470', '04-2012-02342', '3rd Year', 'BSIT', 'Basic Education Department', 'Activate'),
(26, 'Stephanie@gmail.com', 'Password1', 'Stephanie Seblante', '09090912312', '04-1923-23123', '3rd Year', 'BSIT', 'College of Information Technology Education', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`, `school_year`) VALUES
(1, '1st Semester', 'S.Y.2024-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholars`
--
ALTER TABLE `scholars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `scholars`
--
ALTER TABLE `scholars`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
