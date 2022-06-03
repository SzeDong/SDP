-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2022 at 10:27 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `badmintonmemberlist`
--

INSERT INTO `badmintonmemberlist` (`MemberID`, `MemberName`) VALUES
(1, 'Im Nayeon'),
(2, 'Yoo Jeongyeon'),
(3, 'Hirai Momo'),
(4, 'Minatozaki Sana'),
(5, 'Park Jihyo');

-- --------------------------------------------------------

--
-- Table structure for table `basketballmemberlist`
--

DROP TABLE IF EXISTS `basketballmemberlist`;
CREATE TABLE IF NOT EXISTS `basketballmemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `basketballmemberlist`
--

INSERT INTO `basketballmemberlist` (`MemberID`, `MemberName`) VALUES
(1, 'Myoui Mina'),
(2, 'Kim Dahyun'),
(3, 'Son Chaeyoung'),
(4, 'Chou Tzuyu'),
(5, 'Park Jin Young');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dancingmemberlist`
--

INSERT INTO `dancingmemberlist` (`MemberID`, `MemberName`) VALUES
(1, 'Hwang Ye Ji'),
(2, 'Choi Ji Su'),
(3, 'Shin Ryu Jin'),
(4, 'Lee Chae Ryeong'),
(5, 'Shin Yu Na');

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventName`, `EventDescription`, `Time`, `Date`, `Venue`, `OrganisingClub`, `Status`) VALUES
(14, 'JYP Selection', 'The long awaited JYP selection is back, dance, sing or impress your way through and get a chance to represent the campus to join JYP survival show', '11:00:00', '2022-10-20', 'Stadium Bukit Jalil', 'Dancing Club', 'Unapproved'),
(11, 'TWICELIGHTS In Kuala Lumpur', 'Twice World Tour 2022', '16:00:00', '2022-08-17', 'Axiata Arena', 'Media Club', 'Approved'),
(13, 'Student Council Election', 'Anually election where the new student councils will be chosen', '17:30:00', '2022-05-18', 'APU Campus', 'Student Council Club', 'Unapproved'),
(12, 'Kusanali Banner', 'The dendro archon first banner', '11:00:00', '2022-11-09', 'Sumeru City Centre', 'Student Council Club', 'Unapproved'),
(15, 'Night Under The Stars', 'The wind orchestra is back with their concert, grabs your tickets before its too late!', '18:00:00', '2022-09-14', 'Dewan Fillharmonik', 'Orchestra Club', 'Unapproved'),
(16, 'Lee Zi Jia Face Off', 'The world renouned badminton player is here to spar with fellow badminton players, hurry sign up as seats are limited', '19:00:00', '2022-03-29', 'White Fairy Badminton Court', 'Badminton Club', 'Unapproved'),
(17, 'NBA playoffs 2023', 'Yearly playoff for basketball', '10:00:00', '2023-01-26', 'Wawasan Basketball Court', 'Basketball Club', 'Approved'),
(18, 'Maniac', 'Stray Kids 2nd World Tour', '16:00:00', '2022-06-28', 'Prudential Centre', 'Media Club', 'Approved'),
(19, 'Checkmate', 'Itzy 1st World Tour', '16:00:00', '2022-08-06', 'Seoul City Centre', 'Media Club', 'Approved'),
(20, 'Comic Fiesta 2022', 'Join us at the comic fiesta with lots of cosplayers!', '08:00:00', '2022-12-14', 'KLCC', 'Media Club', 'Approved');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eventmembers`
--

INSERT INTO `eventmembers` (`ID`, `MemberName`, `PhoneNumber`, `Email`, `EventName`) VALUES
(12, 'Kirito', 110072008, 'haremking@sao.com', 'Comic Fiesta 2022'),
(10, 'Goh Yong Jay', 103282002, 'jay@bunga.com', 'NBA playoffs 2023'),
(11, 'Yang Jeong In', 102082001, 'in@straykids.com', 'Maniac'),
(7, 'Gan Gee Yin', 103212002, 'yin@bunga.com', 'Maniac'),
(8, 'Hirai Momo', 111091997, 'momo@twice.com', 'TWICELIGHTS In Kuala Lumpur'),
(9, 'Keith Wong Jitt', 104182002, 'keith@bunga.com', 'TWICELIGHTS In Kuala Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `mediamemberlist`
--

DROP TABLE IF EXISTS `mediamemberlist`;
CREATE TABLE IF NOT EXISTS `mediamemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mediamemberlist`
--

INSERT INTO `mediamemberlist` (`MemberID`, `MemberName`) VALUES
(1, 'Leaf'),
(2, 'Krystal'),
(3, 'May'),
(4, 'Dawn Berlitz'),
(5, 'Hilda');

-- --------------------------------------------------------

--
-- Table structure for table `orchestramemberlist`
--

DROP TABLE IF EXISTS `orchestramemberlist`;
CREATE TABLE IF NOT EXISTS `orchestramemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orchestramemberlist`
--

INSERT INTO `orchestramemberlist` (`MemberID`, `MemberName`) VALUES
(1, 'Kirigaya Kazuto'),
(2, 'Asuna Yuuki'),
(3, 'Kirigaya Suguha'),
(4, 'Shino Asada'),
(5, 'Alice Zuberg');

-- --------------------------------------------------------

--
-- Table structure for table `studentcouncilmemberlist`
--

DROP TABLE IF EXISTS `studentcouncilmemberlist`;
CREATE TABLE IF NOT EXISTS `studentcouncilmemberlist` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `MemberName` varchar(255) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentcouncilmemberlist`
--

INSERT INTO `studentcouncilmemberlist` (`MemberID`, `MemberName`) VALUES
(1, 'Keqing'),
(2, 'Ganyu'),
(3, 'Raiden Ei'),
(4, 'Sangonomiya Kokomi'),
(5, 'Yae Miko');

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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `email`) VALUES
(1, 'member', 'Keith Wong Jitt', '1804', 'keith@bunga.com'),
(2, 'member', 'Gan Gee Yin', '0321', 'yin@bunga.com'),
(3, 'member', 'Chow Sze Dong', '1023', 'dong@bunga.com'),
(4, 'member', 'Fong Wan Yee', '0328', 'yee@bunga.com'),
(5, 'member', 'Goh Yong Jay', '0328', 'jay@bunga.com'),
(6, 'teacher', 'Jean Gunnhildr', '0314', 'jean@genshin.com'),
(7, 'teacher', 'Lisa Minci', '0609', 'lisa@genshin.com'),
(8, 'teacher', 'Eula Lawrence', '1025', 'eula@genshin.com'),
(9, 'teacher', 'Diluc Ragnvindr', '0430', 'diluc@genshin.com'),
(10, 'teacher', 'Kaeya Alberich', '1130', 'kaeya@genshin.com'),
(11, 'committee', 'Ningguang', '086', 'ning@genshin.com'),
(12, 'committee', 'Beidou', '0214', 'bei@genshin.com'),
(13, 'committee', 'Shen He', '0310', 'shen@genshin.com'),
(14, 'committee', 'Yelan', '0420', 'ye@genshin.com'),
(15, 'committee', 'Zhong Li', '1231', 'zhong@genshin.com'),
(16, 'admin', 'Raiden Makoto', '0626', 'makoto@genshin.com'),
(17, 'admin', 'Kamisato Ayato', '0326', 'ayato@genshin.com'),
(18, 'admin', 'Arataki Itto', '0601', 'itto@genshin.com'),
(19, 'admin', 'Kujou Sara', '0714', 'sara@genshin.com'),
(20, 'admin', 'Thoma', '0109', 'thoma@genshin.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
