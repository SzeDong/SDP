-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2022 at 06:41 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

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
(1, 'member', 'Keith Wong Jitt', '90E1357833654983612FB05E3EC9148C', 'keith@bunga.com'),
(2, 'member', 'Gan Gee Yin', 'CD2ACEA595E93463BC8EA3B6D1583FC9', 'yin@bunga.com'),
(3, 'member', 'Chow Sze Dong', 'CE5140DF15D046A66883807D18D0264B', 'dong@bunga.com'),
(4, 'member', 'Fong Wan Yee', 'DC9D7B225E0A391FB028FB337FFD1C1D', 'yee@bunga.com'),
(5, 'member', 'Goh Yong Jay', 'E0BC50D4196A3D8B47B95CA694C2EB66', 'jay@bunga.com'),
(6, 'teacher', 'Jean Gunnhildr', '2763D6234F7431F32844926F634C8FD4', 'jean@genshin.com'),
(7, 'teacher', 'Lisa Minci', 'BBDF56E2FBD1DBB503CEB433BED825CA', 'lisa@genshin.com'),
(8, 'teacher', 'Eula Lawrence', '82B8A3434904411A9FDC43CA87CEE70C', 'eula@genshin.com'),
(9, 'teacher', 'Diluc Ragnvindr', '1B8ECC49A1E5DBA91D313DD3A41AAFF2', 'diluc@genshin.com'),
(10, 'teacher', 'Kaeya Alberich', '4A213D37242BDCAD8E7300E202E7CAA4', 'kaeya@genshin.com'),
(11, 'committee', 'Ningguang', '04A36E43715F361A98B20C741C51A799', 'ning@genshin.com'),
(12, 'committee', 'Beidou', 'CD6EBDCFE9B6F0CE7AC05D8848A8C956', 'bei@genshin.com'),
(13, 'committee', 'Shen He', 'AF60524461DB23510568BA60BDFA6C46', 'shen@genshin.com'),
(14, 'committee', 'Yelan', '745D4E02F3F10A3BB0872C578FCE35E4', 'ye@genshin.com'),
(15, 'committee', 'Zhong Li', '6C14DA109E294D1E8155BE8AA4B1CE8E', 'zhong@genshin.com'),
(16, 'admin', 'Raiden Makoto', '1AA6F8AE85E92E03593A6B5A37F60C57', 'makoto@genshin.com'),
(17, 'admin', 'Kamisato Ayato', '86564DCDFC2F8DDE5D4BA87E621EA1E9', 'ayato@genshin.com'),
(18, 'admin', 'Arataki Itto', '398BB4D9A15DB2D8BF52B9CA9C8538EE', 'itto@genshin.com'),
(19, 'admin', 'Kujou Sara', 'B626870CBF36F5F9559DD94F6032251F', 'sara@genshin.com'),
(20, 'admin', 'Thoma', 'BBE9047444895DE971DCC65FE7F9504F', 'thoma@genshin.com'),
(26, 'member', 'Im Nayeon', '510E07BE2D27BA618DC0A1461269736E', 'nayeon@twice.com'),
(27, 'member', 'Yoo Jeongyeon', 'C6BFF625BDB0393992C9D4DB0C6BBE45', 'jeongyeon@twice.com'),
(28, 'member', 'Hirai Momo', '8F1D43620BC6BB580DF6E80B0DC05C48', 'momo@twice.com'),
(29, 'member', 'Minatozaki Sana', '310CE61C90F3A46E340EE8257BC70E93', 'sana@twice.com'),
(30, 'member', 'Park Jihyo', '155D328D7DB586CF215ACA5E8088DFED', 'jihyo@twice.com'),
(31, 'member', 'Myoui Mina', 'D647FAD58CB420D58678644665603F24', 'mina@twice.com'),
(32, 'member', 'Kim Dahyun', 'A8039D12C5011E25DF37CC608100618A', 'dahyun@twice.com'),
(33, 'member', 'Son Chaeyoung', '04BE135CAD7E049D73E3BB1AC5AF388F', 'chaeyoung@twice.com'),
(34, 'member', 'Chou Tzuyu', '09BB9B610C9BDC2393E852C23DF1CCF3', 'tzuyu@twice.com'),
(35, 'member', 'Park Jin Young', '33CEB07BF4EEB3DA587E268D663ABA1A', 'jinyoung@jyp.com'),
(36, 'member', 'Hwang Ye Ji', '455C31F948773E91CAFF3A6A1F22456C', 'yeji@itzy.com'),
(37, 'member', 'Choi Ji Su', 'D14CEB37E82DDFE68777E8454997ED7D', 'lia@itzy.com'),
(38, 'member', 'Shin Ryu Jin', '5932477FF12BB1E1092805267BDA177D', 'ryujin@itzy.com'),
(39, 'member', 'Lee Chae Ryeong', '0CAE130D84B77DFD664E70648582C136', 'chaereong@itzy.com'),
(40, 'member', 'Shin Yu Na', '7E7E69EA3384874304911625AC34321C', 'yuna@itzy.com'),
(41, 'member', 'Leaf', '298923C8190045E91288B430794814C4', 'leaf@gen1.com'),
(42, 'member', 'Krystal', '1B8ECC49A1E5DBA91D313DD3A41AAFF2', 'krystal@gen2.com'),
(43, 'member', 'May', '3A15C7D0BBE60300A39F76F8A5BA6896', 'may@gen3.com'),
(44, 'member', 'Dawn Berlitz', '8A5DD78AADEA6FFC984BDA22064ADB92', 'dawn@gen4.com'),
(45, 'member', 'Hilda', 'BA7DF060FEB0B2DDAEE4C4B760F187B3', 'hilda@gen5.com'),
(46, 'member', 'Kirigaya Kazuto', 'D7322ED717DEDF1EB4E6E52A37EA7BCD', 'kirito@sao.com'),
(47, 'member', 'Asuna Yuuki', '246DCD487EF18B08F36DEC3AE43029EA', 'asuna@sao.com'),
(48, 'member', 'Kirigaya Suguha', 'F71EC0487B35DA010EA9B14AEFE130B2', 'leafa@sao.com'),
(49, 'member', 'Shino Asada', '71E887BC2B6A4EBDEEDB744C1430D587', 'sinon@sao.com'),
(50, 'member', 'Alice Zuberg', '57D3D307EA7A3152CB20D145DD50914B', 'alice@sao.com'),
(51, 'member', 'Keqing', '147702DB07145348245DC5A2F2FE5683', 'keqing@genshin.com'),
(52, 'member', 'Ganyu', 'C6036A69BE21CB660499B75718A3EF24', 'ganyu@genshin.com'),
(53, 'member', 'Raiden Ei', '1AA6F8AE85E92E03593A6B5A37F60C57', 'ei@genshin.com'),
(54, 'member', 'Sangonomiya Kokomi', '0CF0613553F1DD3F98B4009B31C52618', 'kokomi@genshin.com'),
(55, 'member', 'Yae Miko', '645DA05870C53B787251A4A236A26996', 'yae@genshin.com'),
(56, 'member', 'Kirito', 'D7322ED717DEDF1EB4E6E52A37EA7BCD', 'haremking@sao.com'),
(57, 'member', 'Bang Chan', 'AA68C75C4A77C87F97FB686B2F068676', 'bang@straykids.com'),
(58, 'member', 'Lee Min Ho', '82B8A3434904411A9FDC43CA87CEE70C', 'minho@straykids.com'),
(59, 'member', 'Seo Chang Bin', '26FFCEF53C44522EFBFE7FEF964A4058', 'changbin@straykids.com'),
(60, 'member', 'Hwang Hyun Jin', '490B6C600E1A306BF2FEEFC7EE9631B3', 'hyunjin@straykids.com'),
(61, 'member', 'Han Ji Sung', '11E1C7E8DD36F6C9C248881928393727', 'jisung@straykids.com'),
(62, 'member', 'Felix Lee', '06F34114E73791BE999E3D13029D9901', 'felix@straykids.com'),
(63, 'member', 'Kim Seung Min', '510E07BE2D27BA618DC0A1461269736E', 'seungmin@straykids.com'),
(64, 'member', 'Yang Jeong In', 'A9DD14D824822D6D78D0FE3E55DBD7FB', 'jeongin@straykids.com'),
(65, 'member', 'Cha Eun Woo', '520FFFF5E082BE9865D99F5B8A8C017A', 'eunwoo@astro.com'),
(66, 'member', 'Moon Bin', 'F6C0C55D8D0A5CD1F69CEAF3D5B4E108', 'moon@astro.com'),
(67, 'member', 'Kim Myung Jun', '31247265F28E5AC616C230743990F79E', 'myungjun@astro.com'),
(68, 'member', 'Park Jin Woo', '75C084449D4E710F45F1BFAC493AEAEA', 'jinwoo@actor.com'),
(69, 'member', 'Kim Mingyu', '39322734E276EBAEA98FF0D97D981750', 'mingyu@seventeen.com'),
(70, 'member', 'Xu Ming Hao', 'E58CC5CA94270ACACEED13BC82DFEDF7', 'minghao@seventeen.com'),
(71, 'member', 'Choi Yoo Jung', '20D135F0F28185B84A4CF7AA51F29500', 'yoojung@wekimeki.com'),
(72, 'member', 'Yeh Shu Hwa', '84F7B02A8128F5F5775611244C24B941', 'shuhwa@gidle.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
