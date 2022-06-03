-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2022 at 08:34 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `badmintonmemberlist`
--

DROP TABLE IF EXISTS `badmintonmemberlist`;
CREATE TABLE IF NOT EXISTS `badmintonmemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `badmintonmemberlist`
--

INSERT INTO `badmintonmemberlist` (`MemberID`, `MemberName`) VALUES
(1, 'Gee Yin');

-- --------------------------------------------------------

--
-- Table structure for table `basketballmemberlist`
--

DROP TABLE IF EXISTS `basketballmemberlist`;
CREATE TABLE IF NOT EXISTS `basketballmemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

DROP TABLE IF EXISTS `clubs`;
CREATE TABLE IF NOT EXISTS `clubs` (
  `ClubID` int NOT NULL AUTO_INCREMENT,
  `ClubName` varchar(255) NOT NULL,
  `ClubDescription` varchar(255) NOT NULL,
  `President` varchar(255) NOT NULL,
  `VicePresident` varchar(255) NOT NULL,
  `PhoneNumber` int NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status` enum('Approved','Unapproved','','') NOT NULL DEFAULT 'Unapproved',
  PRIMARY KEY (`ClubID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`ClubID`, `ClubName`, `ClubDescription`, `President`, `VicePresident`, `PhoneNumber`, `Email`, `Status`) VALUES
(1, 'Badminton Club', ' The Badminton Club was created for students to explore, practice and compete in the sport of badminton. Our club provides a fun, and competitive badminton environment. Feel free to join us if you are interested!', 'Yang Jeong In', 'Cha Eun Woo', 102082001, 'maknae@straykids.com', 'Approved'),
(2, 'Basketball Club', 'Our club provides a fun and competitive basketball environment. Members will learn how to dribble, shoot, pass and new abilities to further strengthen their skillset for basketball. Kindly join us if you are interested!', 'Kim Seung Min', 'Moon Bin', 109222000, 'sunshine@strayids.com', 'Approved'),
(3, 'Dancing Club', 'Our club allows people to learn different types of dance styles such as Ballet, Hip Hop, Jazz, Modern Dance and lots more to explore! Do not fret if you lack dance experience, just join us and learn to dance! Do feel free to join us if you are interested!', 'Han Ji Sung', 'Kim Myung Jun', 109142000, 'squirrel@strayids.com', 'Approved'),
(4, 'Media Club', 'Our club allow members to learn and understand more about photography, filming and handling PA equipment. Come join us if you are interested!', 'Bang Chan', 'Park Jin Woo', 110031997, 'kangaroo@strayids.com', 'Approved'),
(5, 'Orchestra Club', 'Our club is a fun club for people who have a burning passion for music. Besides that, we will be having performances twice a year. Orchestra club is a chance for members to learn how to read, write and perform music. Come join this musical family', 'Kim Mingyu', 'Xu Ming Hao', 104061997, 'wristband@seventeen.com', 'Approved'),
(6, 'Student Council Club', 'The purpose of the student council club is to provide members an opportunity to develop their leadership skills by organizing and carrying out school activities and service projects. Please join us if you are interested!', 'Choi Yoo Jung', 'Yeh Shu Hwa', 111121999, 'wink@wekimeki.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `dancingmemberlist`
--

DROP TABLE IF EXISTS `dancingmemberlist`;
CREATE TABLE IF NOT EXISTS `dancingmemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `EventID` int NOT NULL AUTO_INCREMENT,
  `EventName` varchar(255) NOT NULL,
  `EventDescription` varchar(255) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Venue` varchar(255) NOT NULL,
  `OrganisingClub` varchar(255) DEFAULT NULL,
  `Status` enum('Approved','Unapproved') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Unapproved',
  PRIMARY KEY (`EventID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventName`, `EventDescription`, `Time`, `Date`, `Venue`, `OrganisingClub`, `Status`) VALUES
(6, 'testtttttttt', 'test', '16:00:00', '2022-07-29', 'test', 'Badminton Clubb', 'Approved'),
(8, 'testtttttttt', 'test', '16:00:00', '2022-07-29', 'test', 'Badminton Clubb', 'Approved'),
(9, 'testtttttttt', 'test', '16:00:00', '2022-07-29', 'test', 'Badminton Clubb', 'Approved'),
(11, 'TWICELIGHTS In Kuala Lumpur', 'Twice World Tour 2022', '16:00:00', '2022-06-03', 'Axiata Arena', '-Select-', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `eventmembers`
--

DROP TABLE IF EXISTS `eventmembers`;
CREATE TABLE IF NOT EXISTS `eventmembers` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) DEFAULT NULL,
  `PhoneNumber` int NOT NULL,
  `Email` varchar(255) NOT NULL,
  `EventName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eventmembers`
--

INSERT INTO `eventmembers` (`ID`, `MemberName`, `PhoneNumber`, `Email`, `EventName`) VALUES
(2, 'Shin Yunaaa', 112092003, '', '-Select-'),
(3, 'Shin Yunaaa', 112092003, '', ''),
(4, 'Shin Yunaaa', 112092003, '', ''),
(5, 'Shin Yuna', 112092003, 'yuna@itzy.com', ''),
(6, 'Hirai Momo', 111091997, 'momo@twice.com', 'Ms cibai'),
(7, 'Gan Gee Yin', 112092003, 'keith', '-Select-'),
(8, 'Hirai Momo', 111091997, 'momo@twice.com', 'TWICELIGHTS In Kuala Lumpur'),
(9, 'Keith Wong Jitt', 112092003, 'keithwongjittedu@gmail.com', 'TWICELIGHTS In Kuala Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `mediamemberlist`
--

DROP TABLE IF EXISTS `mediamemberlist`;
CREATE TABLE IF NOT EXISTS `mediamemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orchestramemberlist`
--

DROP TABLE IF EXISTS `orchestramemberlist`;
CREATE TABLE IF NOT EXISTS `orchestramemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrationclub`
--

DROP TABLE IF EXISTS `registrationclub`;
CREATE TABLE IF NOT EXISTS `registrationclub` (
  `clubname` varchar(100) NOT NULL,
  `clubDescription` varchar(100) NOT NULL,
  `Preclub` varchar(100) NOT NULL,
  `Vpreclub` varchar(100) NOT NULL,
  `phoneNumber` int NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`clubname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registrationclub`
--

INSERT INTO `registrationclub` (`clubname`, `clubDescription`, `Preclub`, `Vpreclub`, `phoneNumber`, `Email`) VALUES
('Kpop Club', 'Lets join to know more about kpop and vibe together', 'Hirai Momo', 'Minatozaki Sana', 111901229, 'twice@gmail.com'),
('Anime Club', 'Join here to have watch parties and discuss about anime', 'Kirigaya Kazuto', 'Yuuki Asuna', 100700930, 'sao@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentcouncilmemberlist`
--

DROP TABLE IF EXISTS `studentcouncilmemberlist`;
CREATE TABLE IF NOT EXISTS `studentcouncilmemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` enum('member','teacher','committee','admin') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `email`) VALUES
(1, 'member', 'Keith', '0321', 'keith@twicekids.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
