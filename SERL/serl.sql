-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 12:12 PM
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
-- Database: `serl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `email`, `password`) VALUES
('admin1', '4serltester@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CID` varchar(20) NOT NULL,
  `Cname` varchar(200) NOT NULL,
  `it` int(11) NOT NULL,
  `mba` int(11) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CID`, `Cname`, `it`, `mba`, `faculty`, `ta`) VALUES
('1', 'Software Engineering', 20, 30, 'Dr. Sonali Agrawal', 'Anshuman,Sidhharth,Aaditya'),
('23', 'Object Oriented Methodologies', 40, 10, 'Prof. Channappa B Akki', 'Archit,Hiya,Shivangi,Naman');

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
('PROIT001', 'upload_images/sonali.jpeg', 'Dr. Sonali Agrawal', 'sonali@iiita.ac.in', ' 0532-2922', 'Room No.: 5203,\r\nCC3 Building\r\nIndian Institute of Information Technology\r\nAllahabad (UP) INDIA', ' www.sonaliagarwal.com\r\n', 'PROIT001'),
('PROIT002', 'upload_images/champa.jpeg', 'Prof. Channappa B Akki', ' akki.channappa@iiita.ac.in', ' 0532-2922', 'Indian Institute of Information Technology\r\nAllahabad 211 015, (UP) INDIA', 'akki.channappa@gmail.com', 'PROIT002');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `type`, `email`, `feedback`) VALUES
(1, 'Naysha', 'faculty', 'email', 'nice website'),
(2, 'pankti', 'faculty', 'pankti@gmail', 'feedback1'),
(3, '$name1', '$type', '$email1', '$feedback1'),
(4, 'Sarika Singh', 'Faculty', 'dentistsarika@yahoo.com', 'it is a comprehensive website.'),
(5, 'shruti ', 'Researcher', 'shruti@gmail.com', 'impressive work.'),
(130, 'Ravi', 'ravi@mail.com', 'Student', 'come on!');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  `projectName` varchar(100) NOT NULL,
  `contributor` varchar(50) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `link`, `projectName`, `contributor`, `type`, `description`) VALUES
('1', 'https://profile.iiita.ac.in/sonali/projects.html', ' Big Data and Machine Learning related research', 'Sonali Agrawal', 'Sponsored', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eos, maiores eligendi doloremque consequuntur illum corporis nihil excepturi aliquam maxime itaque hic quia!'),
('2', 'https://profile.iiita.ac.in/sonali/positions.html', ' Software Engineering Research Lab (SERL)', 'Sonali Agrawal', 'International Agreement', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officiis.'),
('3', 'https://profile.iiita.ac.in/sonali/positions.html', ' Software Engineering Research Lab (SERL)', 'Sonali Agrawal', 'Unsponsored', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolor? Ratione nulla magni ullam praesentium voluptates quod blanditiis nesciunt temporibus inventore voluptatibus sapiente, esse nemo quos odit harum pariatur nihil.'),
('4', 'https://profile.iiita.ac.in/sonali/positions.html', ' Software Engineering Research Lab (SERL)', 'Sonali Agrawal', 'International Agreement', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus inventore a eligendi fugit officia, iusto assumenda sit dolorum harum nihil enim, magnam nam, sint in.'),
('5', 'https://serl.iiita.ac.in/project.htm', 'Process Mining for Clinical Workflow', 'Baghesh Kumar', 'Sponsored', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dicta porro ad, dignissimos aperiam nemo nisi necessitatibus delectus dolorum culpa?');

-- --------------------------------------------------------

--
-- Table structure for table `projectcourses`
--

CREATE TABLE `projectcourses` (
  `CID` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectcourses`
--

INSERT INTO `projectcourses` (`CID`, `PID`) VALUES
(1, 2),
(1, 3),
(23, 3),
(23, 1),
(23, 5);

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publicationID` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  `publicationName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publicationID`, `link`, `publicationName`) VALUES
('1', 'http://csur.acm.org/', ' Sonali Agarwal “Stream Data Mining: Platforms, Algorithms, Performance Evaluators and Research Trends”, published in International Journal of Data Base and Application (IJDTA) Vol.9, No.9 (2016), pp. 201-218 http://dx.doi.org/10.14257/ijdta.2016 .9.9.19'),
('2', 'http://www.sersc.org/journals/IJDTA/vol9_no9/19.pdf', 'Sonali Agarwal ”Twin Support Vector Machine for Multiple Instance Learning Based on Bag Dissimilarity”Advances in Artificial Intelligence Volume 2016 (2016), Article ID 1269708, 18 pages, http://dx.doi.org/10.1155/2016/1269708'),
('3', 'https://serl.iiita.ac.in/publications.htm', 'Sonali Agarwal \"Evaluation of Knowledge Gaps for Mathematical Applications in Thermographic Image Processing Technique,” has been accepted for publication in ACM Computing Surveys, 2016, 5 Year Impact Factor :6.559.\r\n'),
('6', '[https://serl.iiita.ac.in/publications.htm]', 'Divya Tomar, Sonali Agarwal ”Twin Support Vector Machine for Multiple Instance Learning Based on Bag Dissimilarity”Advances in Artificial Intelligence Volume 2016 (2016), Article ID 1269708, 18 pages, http://dx.doi.org/10.1155/2016/1269708');

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
('1', 'PROIT001'),
('2', 'PROIT001'),
('3', 'PROIT002'),
('1', 'RIT001'),
('6', 'RIT001'),
('3', 'RIT002');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE `researcher` (
  `researcherID` varchar(20) NOT NULL,
  `img_source` varchar(400) NOT NULL,
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

INSERT INTO `researcher` (`researcherID`, `img_source`, `name`, `mobile`, `description`, `email`, `department`, `password`) VALUES
('RIT001', 'upload_images/baghu.jpeg', 'Baghesh Kumar', '0820809656', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni', 'shrutibilolikar2003@', 'IT', 'RIT001'),
('RIT002', 'upload_images/rohit.jpeg', 'Rohit Prasad', '8208096560', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni ', 'rads2003@gmail.com', 'IT', 'RIT002'),
('RIT003', 'upload_images/imgn.jpg', 'Shruti Bilolikar', '0820809656', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni ', 'shrutibilolikar2003@gmail.com', 'IT', 'RIT003'),
('RIT004', 'upload_images/baghu.jpeg', 'Ramesh kumar', '0820809656', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni ', 'shrutibilolikar2003@gmail.com', 'IT', 'RIT003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultyID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `publicationcontributor`
--
ALTER TABLE `publicationcontributor`
  ADD PRIMARY KEY (`contributorID`,`publicationID`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD PRIMARY KEY (`researcherID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
