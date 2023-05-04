-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 02:25 PM
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
('PROIT001', 'upload_images/sonali.jpeg', 'Dr. Sonali Agrawal', 'sonali@iiita.ac.in', ' 0532-2922', 'Room No.: 5203,\r\nCC3 Building\r\nIndian Institute of Information Technology\r\nAllahabad (UP) INDIA', ' www.sonaliagarwal.com\r\n', 'PROIT001'),
('PROIT002', 'upload_images/champa.jpeg', 'Prof. Channappa B Akki', ' akki.channappa@iiita.ac.in', ' 0532-2922', 'Indian Institute of Information Technology\r\nAllahabad 211 015, (UP) INDIA', 'akki.channappa@gmail.com', 'PROIT002');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `type`, `feedback`) VALUES
(1, 'Karishma', 'abc@gmail.com', 'Student', 'noice'),
(2, 'Shruti Bilolikar', 'shrutibilolikar2003@gmail.com', 'Student', 'Nice portal'),
(3, 'Shruti Bilolikar', 'shrutibilolikar2003@gmail.com', 'Faculty', 'Nice portal'),
(4, 'Radhika Gupta', 'shrutibilolikar2003@gmail.com', 'Student', 'Nice portal');

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
('1', 'https://profile.iiita.ac.in/sonali/projects.html', ' Big Data and Machine Learning related research', 'Sonali Agrawal'),
('2', 'https://profile.iiita.ac.in/sonali/positions.html', ' Software Engineering Research Lab (SERL)', 'Sonali Agrawal'),
('3', 'https://profile.iiita.ac.in/sonali/positions.html', ' Software Engineering Research Lab (SERL)', 'Sonali Agrawal'),
('4', 'https://profile.iiita.ac.in/sonali/positions.html', ' Software Engineering Research Lab (SERL)', 'Sonali Agrawal'),
('5', 'https://serl.iiita.ac.in/project.htm', 'Process Mining for Clinical Workflow', 'Baghesh Kumar');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
