-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 01:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`) VALUES
('admin1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultyID` varchar(20) NOT NULL,
  `img_source` varchar(400) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultyID`, `img_source`, `name`, `email`, `mobile`, `address`, `website`, `password`) VALUES
('1', '', 'Shruti Bilolikar', 'shrutibilolikar2003@gmail.com', '8208096560', 'na', 'link', '12345678'),
('2', '', 'Radhika Gupta', 'rads@gmail.com', '8208096560', 'na', 'link2', 'sb'),
('3', '', 'naysha', 'shrutibilolikar2003@gmail.com', '0820809656', 'na', 'link2', '12345678'),
('4', '', 'Pankti', 'pankti@gmail.com', '9876543211', 'gujarat', 'iit2021134@iiita.ac.in', '789'),
('5', 'upload_images/imgn.jpg', 'tanisha', 'dentistsarika@yahoo.com', '+918860541', '3a /59, Rachna , Vaishali', 'iit2021134@iiita.ac.in', '765');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `researcherID` varchar(20) NOT NULL,
  `facultyID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  `projectName` varchar(100) NOT NULL,
  `contributor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `link`, `projectName`, `contributor`) VALUES
('12', 'iit2021134@iiita.ac.in', 'Software Security', ''),
('pid2', 'https://profile.iiita.ac.in/venkat/', 'Venkat Sir', '');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publicationID` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  `publicationName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publicationID`, `link`, `publicationName`) VALUES
('3', 'ajdjd', 'sddhdhs');

-- --------------------------------------------------------

--
-- Table structure for table `publicationcontributor`
--

CREATE TABLE `publicationcontributor` (
  `publicationID` varchar(20) NOT NULL,
  `contributorID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publicationcontributor`
--

INSERT INTO `publicationcontributor` (`publicationID`, `contributorID`) VALUES
('3', 'smdjfn');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE `researcher` (
  `researcherID` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`researcherID`, `name`, `mobile`, `description`, `email`, `department`, `password`) VALUES
('1', 'Shruti Bilolikar', '0820809656', 'qebhrfrueh', 'shrutibilolikar2003@', 'IT', '12345678'),
('2', 'Radhika Gupta', '8208096560', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni ', 'rads2003@gmail.com', 'IT', 'sb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`researcherID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `publicationcontributor`
--
ALTER TABLE `publicationcontributor`
  ADD PRIMARY KEY (`publicationID`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD PRIMARY KEY (`researcherID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
