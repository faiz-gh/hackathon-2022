-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2022 at 09:16 AM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminID` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminID`, `email`, `password`) VALUES
(1, 'admin@123', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `birthform`
--

CREATE TABLE `birthform` (
  `birthformID` int NOT NULL,
  `userID` int NOT NULL,
  `regNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `regDate` datetime DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` int DEFAULT NULL,
  `birthDate` datetime DEFAULT NULL,
  `birthPlace` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fatherName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `motherName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `permAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `affiliationCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `motherID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fatherID` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marriageCert` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dischargeSlip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthCertificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birthStatus` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birthform`
--

INSERT INTO `birthform` (`birthformID`, `userID`, `regNo`, `regDate`, `ward`, `zone`, `name`, `gender`, `birthDate`, `birthPlace`, `fatherName`, `motherName`, `tempAddress`, `permAddress`, `remarks`, `affiliationCode`, `motherID`, `fatherID`, `marriageCert`, `dischargeSlip`, `birthCertificate`, `birthStatus`) VALUES
(22, 2, NULL, '2022-10-07 11:04:11', 'Gls university', 'Gls university', 'Gls university', 0, '2022-10-04 00:00:00', 'Gls university', 'Gls university', 'Gls university', 'Gls university', 'Gls university', NULL, NULL, 'CEC_Final.pdf', 'CEC_Final.pdf', 'CEC_Final.pdf', 'CEC_Final.pdf', NULL, 2),
(23, 2, NULL, '2022-10-07 11:04:59', 'kank', 'maninagar', 'piyush surana', 0, '2022-10-13 00:00:00', 'bikaner', 'fname', 'mname', 'ahmedabad', 'bikaner', NULL, NULL, '', '', '', '', NULL, 1),
(24, 2, NULL, '2022-10-07 11:05:34', '', '', 'piyush', 0, '2022-10-11 00:00:00', 'ahmedabad', 'f name', 'mname', 'ahme', 'bikaner', NULL, NULL, '', '', '', '', NULL, 1),
(25, 2, NULL, '2022-10-07 11:06:53', 'kankaria', 'maninagar', 'piyush', 0, '2022-10-19 00:00:00', 'ahmedabad', 'fname', 'manme', 'ahmedabad', 'bikaner', NULL, NULL, 'CEC_Final.pdf', 'CEC_Final.pdf', 'CEC_Final.pdf', 'CEC_Final.pdf', NULL, 1),
(26, 2, NULL, '2022-10-07 14:21:22', 'sdasdsdadasdsfdsa', 'sdasdsdsa', 'Gls university', 0, '2022-10-18 00:00:00', 'Gls university', '', 'Gls university', 'sdassdsnsdad', '', NULL, NULL, '', '', '', '', NULL, 2),
(27, 2, NULL, '2022-10-07 14:38:09', 'sefsefSF', 'mgijkgtgj', 'piyush', 0, '2022-10-18 00:00:00', 'sadasdad', '', 'fsdfasdasd', 'esfsfdfsefesf', '', NULL, NULL, 'unit3 and 4 CEC.pdf', 'CEC_Final.pdf', 'unit3 and 4 CEC.pdf', 'Harsh Agrawal.docx.pdf', NULL, 2),
(28, 2, NULL, '2022-10-07 20:20:46', 'gjadgfahf', 'hjasgjfhgahjf', 'Faiz', 0, '2022-10-10 00:00:00', 'vcjhdsgvjhdsv', '', 'vdsgfjdhagv', 'fjyasgjfhakfa', '', NULL, NULL, 'Unit-2 Assignment.pdf', 'Unit-1 Assignment.pdf', 'Unit-4 Assignment.pdf', 'Unit-3 Assignment.pdf', NULL, 2),
(29, 2, NULL, '2022-10-07 20:25:04', 'dsbvhbsdhvbsdjkv', 'vcdshjvgjhsdvjs', 'Faiz', 0, '2022-10-25 00:00:00', 'vjkhsdhvhjsdbv', '', 'chjdbvhjbds', 'vhsdhjvsjkvhs', '', NULL, NULL, 'Unit-2 Assignment.pdf', 'Unit-1 Assignment.pdf', 'Unit-4 Assignment.pdf', 'Unit-3 Assignment.pdf', NULL, 1),
(30, 2, NULL, '2022-10-07 20:50:31', 'banipark', 'junagarh', 'MEET', 0, '2022-10-18 00:00:00', 'delhi', '', 'shah', 'delhi', '', NULL, NULL, 'CEC_Final.pdf', 'Harsh Agrawal.docx.pdf', 'Harsh Agrawal.docx.pdf', 'unit3 and 4 CEC.pdf', NULL, 2),
(31, 2, NULL, '2022-10-07 20:52:18', 'banipark', 'junagarh', 'MEET', 0, '2022-10-18 00:00:00', 'delhi', '', 'shah', 'delhi', '', NULL, NULL, 'CEC_Final.pdf', 'Harsh Agrawal.docx.pdf', 'Harsh Agrawal.docx.pdf', 'unit3 and 4 CEC.pdf', NULL, 2),
(32, 2, NULL, '2022-10-08 03:24:52', 'faiz', 'faiz', 'Faiz', 0, '2022-10-20 00:00:00', 'faiz', '', 'faiz', 'faiz', '', NULL, NULL, 'Unit-2 Assignment.pdf', 'Unit-1 Assignment.pdf', 'Unit-4 Assignment.pdf', 'Unit-3 Assignment.pdf', NULL, 2),
(33, 2, NULL, '2022-10-08 06:02:54', 'sdbasdnd', 'dsfbdnfd', 'mam', 0, '2022-10-18 00:00:00', 'BIKaner', '', 'SHRUTI', 'shgdhsjadgas', '', NULL, NULL, 'Unit-4 Assignment.pdf', 'Unit-4 Assignment.pdf', 'Unit-4 Assignment.pdf', 'Unit-5 Assignment.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deathform`
--

CREATE TABLE `deathform` (
  `deathFormID` int NOT NULL,
  `userID` int NOT NULL,
  `regNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `regDate` datetime DEFAULT NULL,
  `ward` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` int DEFAULT NULL,
  `deathDate` datetime DEFAULT NULL,
  `deathPlace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `motherName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fatherName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `permAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharCard` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `noc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rationCard` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `delayedPerm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `postMortem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deathDeclaration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deathCertificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deathStatus` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deathform`
--

INSERT INTO `deathform` (`deathFormID`, `userID`, `regNo`, `regDate`, `ward`, `zone`, `name`, `gender`, `deathDate`, `deathPlace`, `motherName`, `fatherName`, `tempAddress`, `permAddress`, `remarks`, `aadharCard`, `noc`, `rationCard`, `delayedPerm`, `postMortem`, `deathDeclaration`, `deathCertificate`, `deathStatus`) VALUES
(1, 2, NULL, '2022-10-07 12:17:44', 'Gls university', 'Gls university', 'Gls university', 0, '2022-10-18 00:00:00', 'Gls university', 'Gls university', 'Gls university', 'Gls university', 'Gls university', NULL, 'CEC_Final.pdf', 'CEC_Final.pdf', 'Harsh Agrawal.docx.pdf', 'Harsh Agrawal.docx.pdf', 'unit3 and 4 CEC.pdf', 'unit3 and 4 CEC.pdf', NULL, 1),
(2, 2, NULL, '2022-10-07 16:12:50', 'fsdfdfs', 'dfsfdf', 'piyush', 0, '2022-10-25 00:00:00', 'sfsdfsd', 'fsdfsdfds', 'dfdfs', '', 'trehty', NULL, 'Harsh Agrawal.docx.pdf', 'Harsh Agrawal.docx.pdf', 'unit3 and 4 CEC.pdf', 'unit3 and 4 CEC.pdf', 'CEC_Final.pdf', 'CEC_Final.pdf', NULL, 2),
(3, 2, NULL, '2022-10-07 20:27:20', 'vdsagvjhdsavjsdbv', 'vsdvjhasdbvjank', 'cbjsdhfhjkf', 0, '2022-10-11 00:00:00', 'vjhsdhvjkshdjkv', 'dajkshfjkahgva', 'cjhdhvjkahvakj', '', 'cjdavjadvjdsnv', NULL, 'Unit-1 Assignment.pdf', 'Unit-2 Assignment.pdf', 'Unit-3 Assignment.pdf', 'Unit-4 Assignment.pdf', 'Unit-5 Assignment.pdf', 'Unit-6 Assignment.pdf', NULL, 1),
(4, 2, NULL, '2022-10-07 20:54:54', 'chandni chowk', 'old delhi', 'meeti', 1, '2022-10-18 00:00:00', 'delhi', 'taruna', 'shah', '', 'mumbai', NULL, 'Harsh Agrawal.docx.pdf', 'Harsh Agrawal.docx.pdf', 'unit3 and 4 CEC.pdf', 'unit3 and 4 CEC.pdf', 'CEC_Final.pdf', 'CEC_Final.pdf', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `userID` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`userID`, `email`, `password`, `date`) VALUES
(2, 'faizghanchi@gmail.com', 'Faiz@1234', '2022-09-23 06:23:57'),
(8, 'root', '#2022@Hackathon', '2022-09-29 14:56:38'),
(14, 'admin', '#Hackathon@2022', '2022-09-29 15:02:11'),
(16, 'piyush@123', '123', '2022-09-30 14:06:05'),
(17, 'piyushsurana2003@gmail.com', 'PIYUSH', '2022-10-05 10:39:35'),
(18, 'YASH@123', 'YASG', '2022-10-05 10:42:14'),
(28, 'john@gmail.com', '123', '2022-10-07 05:20:07'),
(30, 'piyush@456', 'piyush', '2022-10-07 05:32:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `birthform`
--
ALTER TABLE `birthform`
  ADD PRIMARY KEY (`birthformID`),
  ADD UNIQUE KEY `regNo` (`regNo`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `deathform`
--
ALTER TABLE `deathform`
  ADD PRIMARY KEY (`deathFormID`),
  ADD UNIQUE KEY `regNo` (`regNo`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `emaill` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `adminID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birthform`
--
ALTER TABLE `birthform`
  MODIFY `birthformID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `deathform`
--
ALTER TABLE `deathform`
  MODIFY `deathFormID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `birthform`
--
ALTER TABLE `birthform`
  ADD CONSTRAINT `birthform_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `userlogin` (`userID`);

--
-- Constraints for table `deathform`
--
ALTER TABLE `deathform`
  ADD CONSTRAINT `deathform_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `userlogin` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
