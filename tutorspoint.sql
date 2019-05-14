-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 11:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorspoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyinfo`
--

CREATE TABLE `applyinfo` (
  `Id` int(11) NOT NULL,
  `JobId` int(20) NOT NULL,
  `TeacherId` int(20) NOT NULL,
  `TeacherNmae` varchar(50) NOT NULL,
  `Time` datetime NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobinfo`
--

CREATE TABLE `jobinfo` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Class` int(30) NOT NULL,
  `StudentGender` varchar(30) NOT NULL,
  `DayPerWeek` int(10) NOT NULL,
  `Salary` double NOT NULL,
  `PreGender` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `OtherReq` varchar(100) NOT NULL,
  `Category` varchar(40) NOT NULL,
  `Time` datetime NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parentsinfo`
--

CREATE TABLE `parentsinfo` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Dob` varchar(50) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `EmailId` varchar(60) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Time` datetime NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentsinfo`
--

INSERT INTO `parentsinfo` (`Id`, `Name`, `Dob`, `Gender`, `Phone`, `EmailId`, `Address`, `Password`, `Time`, `Status`) VALUES
(1, 'istiak', '18-3-1996', 'male', '01837221927', 'mdistiakuddin39@gmail.com', 'kafrul dhaka', 'istiak12', '0000-00-00 00:00:00', 0),
(9, 'tanvir', '23-November-1996', 'male', '01837221927', 'mdtanvir@gmail.com', 'nikunjo', '12345678', '2017-12-23 00:22:33', 0),
(10, 'tanvir', '23-November-1996', 'male', '01837221927', 'mdtanvir@gmail.com', 'nikunjo', '12345678', '2017-12-23 00:26:49', 0),
(11, 'isti', '7-jan-1992', 'male', '01911105421', 'mdisit@gmail.com', 'cantonment', '87654321', '2017-12-23 00:31:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacherinfo`
--

CREATE TABLE `teacherinfo` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Dob` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `University` varchar(80) NOT NULL,
  `Cgpa` float NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Time` datetime NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherinfo`
--

INSERT INTO `teacherinfo` (`Id`, `Name`, `Dob`, `Gender`, `Phone`, `EmailId`, `Address`, `University`, `Cgpa`, `Password`, `Image`, `Time`, `Status`) VALUES
(1, 'Zishan', '27-02-1997', 'male', '01237654389', 'mdjishan9700@gmail.com', 'nikunjo-2', 'AIUB', 4, '123456789', '', '0000-00-00 00:00:00', 0),
(2, 'bijoy', '7-march-1998', 'male', '01711152724', 'mdbijoy@gmail.com', 'bonani dhaka', 'ewu', 3.88, 'zxcvbnm,', '', '2017-12-23 01:48:52', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyinfo`
--
ALTER TABLE `applyinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jobinfo`
--
ALTER TABLE `jobinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `parentsinfo`
--
ALTER TABLE `parentsinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyinfo`
--
ALTER TABLE `applyinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobinfo`
--
ALTER TABLE `jobinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parentsinfo`
--
ALTER TABLE `parentsinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacherinfo`
--
ALTER TABLE `teacherinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
