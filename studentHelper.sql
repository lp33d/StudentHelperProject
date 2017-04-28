- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 10:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studenthelper`
--
create database studenthelper;
use studenthelper;
-- --------------------------------------------------------

--
-- Table structure for table `instudygroup`
--

CREATE TABLE `instudygroup` (
  `joinID` int(11) NOT NULL,
  `user_FK` int(11) NOT NULL,
  `studyGroup_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` int(11) NOT NULL,
  `buildingName` varchar(255) NOT NULL,
  `roomName` varchar(255) NOT NULL,
  `maxStudents` int(11) NOT NULL,
  `projector` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studygroup`
--

CREATE TABLE `studygroup` (
  `studyID` int(11) NOT NULL,
  `studyName` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `projector` varchar(3) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `studyGroupMaxStudents` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `userType` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `userType`) VALUES
(1, 'lect@test.com', 'password', 'lect'),
(2, 'stud@test.com', 'password', 'stud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instudygroup`
--
ALTER TABLE `instudygroup`
  ADD PRIMARY KEY (`joinID`),
  ADD UNIQUE KEY `joinID` (`joinID`),
  ADD UNIQUE KEY `joinID_2` (`joinID`),
  ADD KEY `user_FK` (`user_FK`,`studyGroup_FK`),
  ADD KEY `studyGroup` (`studyGroup_FK`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `studygroup`
--
ALTER TABLE `studygroup`
  ADD PRIMARY KEY (`studyID`),
  ADD KEY `studyID` (`studyID`);
