-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2022 at 07:05 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`ClubID`, `ClubName`, `ClubDescription`, `President`, `VicePresident`, `PhoneNumber`, `Email`, `Status`) VALUES
(1, 'Badminton Club', ' The Badminton Club was created for students to explore, practice and compete in the sport of badminton. Our club provides a fun, and competitive badminton environment. Feel free to join us if you are interested!', 'Yang Jeong In', 'Cha Eun Woo', 102082001, 'maknae@straykids.com', 'Approved'),
(2, 'Basketball Club', 'Our club provides a fun and competitive basketball environment. Members will learn how to dribble, shoot, pass and new abilities to further strengthen their skillset for basketball. Kindly join us if you are interested!', 'Kim Seung Min', 'Moon Bin', 109222000, 'sunshine@strayids.com', 'Approved'),
(3, 'Dancing Club', 'Our club allows people to learn different types of dance styles such as Ballet, Hip Hop, Jazz, Modern Dance and lots more to explore! Do not fret if you lack dance experience, just join us and learn to dance! Do feel free to join us if you are interested!', 'Han Ji Sung', 'Kim Myung Jun', 109142000, 'squirrel@strayids.com', 'Approved'),
(4, 'Media Club', 'Our club allow members to learn and understand more about photography, filming and handling PA equipment. Come join us if you are interested!', 'Bang Chan', 'Park Jin Woo', 110031997, 'kangaroo@strayids.com', 'Approved'),
(5, 'Orchestra Club', 'Our club is a fun club for people who have a burning passion for music. Besides that, we will be having performances twice a year. Orchestra club is a chance for members to learn how to read, write and perform music. Come join this musical family', 'Kim Mingyu', 'Xu Ming Hao', 104061997, 'wristband@seventeen.com', 'Approved'),
(6, 'Student Council Club', 'The purpose of the student council club is to provide members an opportunity to develop their leadership skills by organizing and carrying out school activities and service projects. Please join us if you are interested!', 'Choi Yoo Jung', 'Yeh Shu Hwa', 111121999, 'wink@wekimeki.com', 'Approved'),
(7, 'AMG Club', 'Join us to discuss the recent trends of Anime, Manga and Games. We are usually active in discord and will have tris to anime cons.', 'Keith Wong Jitt', 'Kirigaya Kazuto', 104182002, 'amg@apu.com', 'Unapproved'),
(8, 'Kpop Club', 'We are a group of passionate people that love kpop. We will do group purchases for the merch for kpop new releases too.', 'Gan Gee Yin', 'Yang Jeong In', 103212002, 'kpop@apu.com', 'Unapproved'),
(9, 'E-sport Club', 'We currently accept members that are elite in at least more than 10 PC games. Aiming to win various championships, leave if you arent an elite gamer.', 'Chow Sze Dong', 'Takanori Nishikawa', 110232002, 'esport@apu.com', 'Unapproved'),
(10, 'Foodie Club', 'We explore all kinds of delicacies around the world. Joining this club will require you to be able to constantly travel and have enough cash flow to join foodie trips with us.', 'Fong Wan Yee', 'Colin Lim', 105142001, 'foodie@apu.com', 'Unapproved'),
(11, 'Playboy Club', 'Having a very strict entry requirement, only those with good talking skills and have a high net worth may join us. We will constantly be having trips to bars and the sort so be prepared for your liver.', 'Goh Yong Jay', 'Show Lo', 103282002, 'playboy@apu.com', 'Unapproved');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eventmembers`
--

INSERT INTO `eventmembers` (`ID`, `MemberName`, `PhoneNumber`, `Email`, `EventName`) VALUES
(12, 'Kirito', 110072008, 'haremking@sao.com', 'Comic Fiesta 2022'),
(10, 'Goh Yong Jay', 103282002, 'jay@bunga.com', 'NBA playoffs 2023'),
(11, 'Yang Jeong In', 102082001, 'in@straykids.com', 'Maniac'),
(7, 'Gan Gee Yin', 103212002, 'yin@bunga.com', 'Maniac'),
(8, 'Hirai Momo', 111091997, 'momo@twice.com', 'TWICELIGHTS In Kuala Lumpur'),
(9, 'Keith Wong Jitt', 104182002, 'keith@bunga.com', 'TWICELIGHTS In Kuala Lumpur'),
(13, 'Shin Yuna', 112092003, 'yuna@itzy.com', 'Checkmate');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `comments` varchar(400) NOT NULL,
  `submit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `feedback_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `username`, `comments`, `submit_time`, `feedback_status`) VALUES
(1, 'Gan Gee Yin', 'Aiyo next time can have more stock for the merchandise if you are organising an event? I queue 3 hour already only tell me no stock for a Nachimbong.', '2022-06-28 11:01:32', 'Approve'),
(2, 'Kirito', 'Overall comic fiesta was great just some advice for fellow participants, avoid being rude when waiting for a carpark cause the driver may just stay there longer just to annoy you for being rude hehe.', '2022-12-14 14:42:57', 'Approve'),
(3, 'May', 'For event organizers please keep in mind that if your event is too late, some particiapnts will have to walk home since public transport isnt operating till late night', '2020-02-28 18:57:25', 'Draft'),
(4, 'Yang Jeong In', 'Would like to thank the staff for their attentiveness during the rehearsals and help searching for my phone when I left it in the car while travelling to the Maniac Concert yesterday. Also, a huge thank you for the many Stays that supported us for this event. Stray Kids will be back!', '2020-06-28 23:05:28', 'Draft'),
(5, 'Hirai Momo', 'The Night Under The Stars concert was an amazing orchestral concert that I advice everyone to at least them watch them perform once. The violin soloist was especially charming and played with much class. He talked with much elegance when I approached him for a photo after the concert. Whoever his girlfriend is, she is a lucky girl.', '2020-09-14 12:32:41', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_replies`
--

DROP TABLE IF EXISTS `feedback_replies`;
CREATE TABLE IF NOT EXISTS `feedback_replies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `feedback_id` int NOT NULL,
  `reply_comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback_replies`
--

INSERT INTO `feedback_replies` (`id`, `feedback_id`, `reply_comment`) VALUES
(8, 1, 'Thank you for your support over the event. Unfortunately due to the Nachimbong being high in demand, it was sold out. We will make sure to notify the committee team to prepare properly for future events. Meanwhile, we will grant you a personal hangout session with a Stray Kids member of your choice, do check out your email for more details.'),
(9, 2, 'Hi we are sorry that you met some uncultured participants during the event, we will take note to organize events with more parking slots nearby next time.'),
(10, 5, 'Thanks for your support over the concert. Due to his high popularity, our solist has decided to have a tour soon. Therefore, do stay tuned for the details!');

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
-- Table structure for table `newannouncement`
--

DROP TABLE IF EXISTS `newannouncement`;
CREATE TABLE IF NOT EXISTS `newannouncement` (
  `announcementid` int NOT NULL AUTO_INCREMENT,
  `clubname` varchar(255) NOT NULL,
  `announcementdescription` varchar(255) NOT NULL,
  PRIMARY KEY (`announcementid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newannouncement`
--

INSERT INTO `newannouncement` (`announcementid`, `clubname`, `announcementdescription`) VALUES
(1, 'Badminton Club', 'Dear members of the Badminton Club,\r\nThe competition that is going to hold on 01-06-2022 2pm at Serdang Badminton Court, Seri Kembangan, Selangor will be canceled due to not much registration for the competition.\r\nThanks.\r\nFrom the President of Badminton '),
(2, 'Dancing Club', 'Dear members, please be reminded that the practise session is postponed until further notice as the coach is having health issues.'),
(3, 'Student Council Club', 'Reminder that every member of Asia Pacific University has one vote for the online popularity contest. Those who create spam accounts to vote will be taken action against'),
(4, 'Orchestra Club', 'Dear performers that are performing for the Japan student exchange program please take a good rest tonight and fall in by 7:30 a.m. sharp in the APU stage beside the convenience store.'),
(5, 'Orchestra Club', 'D5 countdown for our annually bandcamp, reminder to pack your luggage and include your nessecities and instruments. The committees and teachers will be looking forward to seeing you in the camp.'),
(6, 'Orchestra Club', 'A deep thank you from the organizing party for actively participating in the school team selections. Those who are shortlisted will be announced by tomorrow April 5th 06:00 p.m.');

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
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `timetableid` int NOT NULL AUTO_INCREMENT,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `venue` varchar(255) NOT NULL,
  `clubname` varchar(255) NOT NULL,
  PRIMARY KEY (`timetableid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetableid`, `starttime`, `endtime`, `venue`, `clubname`) VALUES
(1, '08:30:00', '10:30:00', 'Block B, Level 6, Room 01', 'Student Council Club'),
(2, '11:15:00', '12:15:00', 'Media Room, Block C, Level 4', 'Media Club'),
(3, '08:00:00', '10:00:00', 'APU basketball court', 'Basketball Club'),
(4, '08:45:00', '12:45:00', 'White fairy badminton court', 'Badminton Club'),
(5, '17:00:00', '19:30:00', 'APU D5-05', 'Dancing Club');

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
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `email`) VALUES
(1, 'member', 'Keith Wong Jitt', '90e1357833654983612fb05e3ec9148c', 'keith@bunga.com'),
(2, 'member', 'Gan Gee Yin', 'cd2acea595e93463bc8ea3b6d1583fc9', 'yin@bunga.com'),
(3, 'member', 'Chow Sze Dong', 'ce5140df15d046a66883807d18d0264b', 'dong@bunga.com'),
(4, 'member', 'Fong Wan Yee', 'dc9d7b225e0a391fb028fb337ffd1c1d', 'yee@bunga.com'),
(5, 'member', 'Goh Yong Jay', 'e0bc50d4196a3d8b47b95ca694c2eb66', 'jay@bunga.com'),
(6, 'teacher', 'Jean Gunnhildr', '2763d6234f7431f32844926f634c8fd4', 'jean@genshin.com'),
(7, 'teacher', 'Lisa Minci', 'bbdf56e2fbd1dbb503ceb433bed825ca', 'lisa@genshin.com'),
(8, 'teacher', 'Eula Lawrence', '82b8a3434904411a9fdc43ca87cee70c', 'eula@genshin.com'),
(9, 'teacher', 'Diluc Ragnvindr', '1b8ecc49a1e5dba91d313dd3a41aaff2', 'diluc@genshin.com'),
(10, 'teacher', 'Kaeya Alberich', '4a213d37242bdcad8e7300e202e7caa4', 'kaeya@genshin.com'),
(11, 'committee', 'Ningguang', '04a36e43715f361a98b20c741c51a799', 'ning@genshin.com'),
(12, 'committee', 'Beidou', 'cd6ebdcfe9b6f0ce7ac05d8848a8c956', 'bei@genshin.com'),
(13, 'committee', 'Shen He', 'af60524461db23510568ba60bdfa6c46', 'shen@genshin.com'),
(14, 'committee', 'Yelan', '745d4e02f3f10a3bb0872c578fce35e4', 'ye@genshin.com'),
(15, 'committee', 'Zhong Li', '6c14da109e294d1e8155be8aa4b1ce8e', 'zhong@genshin.com'),
(16, 'admin', 'Raiden Makoto', '1aa6f8ae85e92e03593a6b5a37f60c57', 'makoto@genshin.com'),
(17, 'admin', 'Kamisato Ayato', '86564dcdfc2f8dde5d4ba87e621ea1e9', 'ayato@genshin.com'),
(18, 'admin', 'Arataki Itto', '398bb4d9a15db2d8bf52b9ca9c8538ee', 'itto@genshin.com'),
(19, 'admin', 'Kujou Sara', 'b626870cbf36f5f9559dd94f6032251f', 'sara@genshin.com'),
(20, 'admin', 'Thoma', 'bbe9047444895de971dcc65fe7f9504f', 'thoma@genshin.com'),
(26, 'member', 'Im Nayeon', '510e07be2d27ba618dc0a1461269736e', 'nayeon@twice.com'),
(27, 'member', 'Yoo Jeongyeon', 'c6bff625bdb0393992c9d4db0c6bbe45', 'jeongyeon@twice.com'),
(28, 'member', 'Hirai Momo', '8f1d43620bc6bb580df6e80b0dc05c48', 'momo@twice.com'),
(29, 'member', 'Minatozaki Sana', '310ce61c90f3a46e340ee8257bc70e93', 'sana@twice.com'),
(30, 'member', 'Park Jihyo', '155d328d7db586cf215aca5e8088dfed', 'jihyo@twice.com'),
(31, 'member', 'Myoui Mina', 'd647fad58cb420d58678644665603f24', 'mina@twice.com'),
(32, 'member', 'Kim Dahyun', 'a8039d12c5011e25df37cc608100618a', 'dahyun@twice.com'),
(33, 'member', 'Son Chaeyoung', '04be135cad7e049d73e3bb1ac5af388f', 'chaeyoung@twice.com'),
(34, 'member', 'Chou Tzuyu', '09bb9b610c9bdc2393e852c23df1ccf3', 'tzuyu@twice.com'),
(35, 'member', 'Park Jin Young', '33ceb07bf4eeb3da587e268d663aba1a', 'jinyoung@jyp.com'),
(36, 'member', 'Hwang Ye Ji', '455c31f948773e91caff3a6a1f22456c', 'yeji@itzy.com'),
(37, 'member', 'Choi Ji Su', 'd14ceb37e82ddfe68777e8454997ed7d', 'lia@itzy.com'),
(38, 'member', 'Shin Ryu Jin', '5932477ff12bb1e1092805267bda177d', 'ryujin@itzy.com'),
(39, 'member', 'Lee Chae Ryeong', '0cae130d84b77dfd664e70648582c136', 'chaereong@itzy.com'),
(40, 'member', 'Shin Yu Na', '7e7e69ea3384874304911625ac34321c', 'yuna@itzy.com'),
(41, 'member', 'Leaf', '298923c8190045e91288b430794814c4', 'leaf@gen1.com'),
(42, 'member', 'Krystal', '1b8ecc49a1e5dba91d313dd3a41aaff2', 'krystal@gen2.com'),
(43, 'member', 'May', '3a15c7d0bbe60300a39f76f8a5ba6896', 'may@gen3.com'),
(44, 'member', 'Dawn Berlitz', '8a5dd78aadea6ffc984bda22064adb92', 'dawn@gen4.com'),
(45, 'member', 'Hilda', 'ba7df060feb0b2ddaee4c4b760f187b3', 'hilda@gen5.com'),
(46, 'member', 'Kirigaya Kazuto', 'd7322ed717dedf1eb4e6e52a37ea7bcd', 'kirito@sao.com'),
(47, 'member', 'Asuna Yuuki', '246dcd487ef18b08f36dec3ae43029ea', 'asuna@sao.com'),
(48, 'member', 'Kirigaya Suguha', 'f71ec0487b35da010ea9b14aefe130b2', 'leafa@sao.com'),
(49, 'member', 'Shino Asada', '71e887bc2b6a4ebdeedb744c1430d587', 'sinon@sao.com'),
(50, 'member', 'Alice Zuberg', '57d3d307ea7a3152cb20d145dd50914b', 'alice@sao.com'),
(51, 'member', 'Keqing', '147702db07145348245dc5a2f2fe5683', 'keqing@genshin.com'),
(52, 'member', 'Ganyu', 'c6036a69be21cb660499b75718a3ef24', 'ganyu@genshin.com'),
(53, 'member', 'Raiden Ei', '1aa6f8ae85e92e03593a6b5a37f60c57', 'ei@genshin.com'),
(54, 'member', 'Sangonomiya Kokomi', '0cf0613553f1dd3f98b4009b31c52618', 'kokomi@genshin.com'),
(55, 'member', 'Yae Miko', '645da05870c53b787251a4a236a26996', 'yae@genshin.com'),
(56, 'member', 'Kirito', 'd7322ed717dedf1eb4e6e52a37ea7bcd', 'haremking@sao.com'),
(57, 'member', 'Bang Chan', 'aa68c75c4a77c87f97fb686b2f068676', 'bang@straykids.com'),
(58, 'member', 'Lee Min Ho', '82b8a3434904411a9fdc43ca87cee70c', 'minho@straykids.com'),
(59, 'member', 'Seo Chang Bin', '26ffcef53c44522efbfe7fef964a4058', 'changbin@straykids.com'),
(60, 'member', 'Hwang Hyun Jin', '490b6c600e1a306bf2feefc7ee9631b3', 'hyunjin@straykids.com'),
(61, 'member', 'Han Ji Sung', '11e1c7e8dd36f6c9c248881928393727', 'jisung@straykids.com'),
(62, 'member', 'Felix Lee', '06f34114e73791be999e3d13029d9901', 'felix@straykids.com'),
(63, 'member', 'Kim Seung Min', '510e07be2d27ba618dc0a1461269736e', 'seungmin@straykids.com'),
(64, 'member', 'Yang Jeong In', 'a9dd14d824822d6d78d0fe3e55dbd7fb', 'jeongin@straykids.com'),
(65, 'member', 'Cha Eun Woo', '520ffff5e082be9865d99f5b8a8c017a', 'eunwoo@astro.com'),
(66, 'member', 'Moon Bin', 'f6c0c55d8d0a5cd1f69ceaf3d5b4e108', 'moon@astro.com'),
(67, 'member', 'Kim Myung Jun', '31247265f28e5ac616c230743990f79e', 'myungjun@astro.com'),
(68, 'member', 'Park Jin Woo', '75c084449d4e710f45f1bfac493aeaea', 'jinwoo@actor.com'),
(69, 'member', 'Kim Mingyu', '39322734e276ebaea98ff0d97d981750', 'mingyu@seventeen.com'),
(70, 'member', 'Xu Ming Hao', 'e58cc5ca94270acaceed13bc82dfedf7', 'minghao@seventeen.com'),
(71, 'member', 'Choi Yoo Jung', '20d135f0f28185b84a4cf7aa51f29500', 'yoojung@wekimeki.com'),
(72, 'member', 'Yeh Shu Hwa', '84f7b02a8128f5f5775611244c24b941', 'shuhwa@gidle.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
