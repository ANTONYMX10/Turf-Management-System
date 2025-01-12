-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2025 at 11:15 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turfbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int NOT NULL AUTO_INCREMENT,
  `TID` int NOT NULL,
  `tname` varchar(40) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `cdate` date NOT NULL,
  `pdate` date NOT NULL,
  `ctime` varchar(50) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `tprice` int NOT NULL,
  `nop` int NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `TID`, `tname`, `remail`, `cdate`, `pdate`, `ctime`, `status`, `tprice`, `nop`) VALUES
(1, 17, 'ChampionsField', 'jj', '2024-10-23', '2024-10-24', '7am-9am', 2, 0, 0),
(2, 17, 'ChampionsField', 'jj', '2024-10-23', '2024-10-24', '7am-9am', 2, 600, 0),
(3, 17, 'ChampionsField', 'jj', '2024-10-23', '2024-10-24', '7am-9am', 2, 600, 0),
(4, 16, 'kingsSports', 'jj', '2024-10-23', '0000-00-00', '-Select-', 2, 1000, 0),
(5, 16, 'kingsSports', 'jj', '2024-10-23', '0000-00-00', '-Select-', 2, 1000, 0),
(11, 16, 'kingsSports', 'jj', '2024-10-26', '0000-00-00', '-Select-', 1, 1000, 0),
(12, 16, 'kingsSports', 'jj', '2024-10-26', '0000-00-00', '-Select-', 1, 1000, 0),
(13, 16, 'kingsSports', 'jj', '2024-10-26', '0000-00-00', '-Select-', 1, 1000, 0),
(14, 16, 'kingsSports', 'jj', '2024-10-29', '0000-00-00', '-Select-', 1, 1000, 0),
(15, 16, 'kingsSports', 'jj', '2024-10-29', '0000-00-00', '-Select-', 1, 1000, 0),
(16, 16, 'kingsSports', 'jj', '2024-10-31', '0000-00-00', '-Select-', 1, 1000, 0),
(17, 16, 'kingsSports', 'jj', '2024-10-31', '0000-00-00', '-Select-', 1, 1000, 0),
(18, 16, 'kingsSports', 'jj', '2024-10-31', '0000-00-00', '-Select-', 1, 1000, 0),
(19, 16, 'kingsSports', 'antony@gmail.com', '2024-11-08', '2024-11-26', '7am-9am', 3, 1000, 0),
(20, 16, 'kingsSports', 'antony@gmail.com', '2024-11-08', '0000-00-00', '-Select-', 3, 1000, 0),
(21, 16, 'kingsSports', 'antony@gmail.com', '2024-11-08', '2024-11-19', '7am-9am', 3, 1000, 0),
(22, 16, 'kingsSports', 'antony@gmail.com', '2024-11-08', '2024-11-20', '9am-11am', 3, 1000, 0),
(23, 16, 'kingsSports', 'antony@gmail.com', '2024-11-08', '2024-11-26', '9am-11am', 3, 1000, 0),
(24, 16, 'kingsSports', 'antony@gmail.com', '2024-11-08', '2024-11-26', '-Select-', 3, 1000, 0),
(25, 16, 'kingsSports', 'antony@gmail.com', '2024-11-08', '0000-00-00', '-Select-', 3, 1000, 0),
(26, 17, 'ChampionsField', 'antony@gmail.com', '2024-11-09', '2024-11-20', '7am-9am', 3, 600, 0),
(27, 17, 'ChampionsField', 'antony@gmail.com', '2024-11-09', '2024-11-20', '', 3, 600, 0),
(28, 16, 'kingsSports', 'antony@gmail.com', '2024-11-09', '2024-11-20', '7am-9am', 3, 1000, 0),
(44, 16, 'kingsSports', 'antony@gmail.com', '2024-11-13', '2024-11-28', '7am-9am', 3, 1000, 0),
(43, 16, 'kingsSports', 'antony@gmail.com', '2024-11-13', '2024-11-26', '7am-9am', 3, 1000, 11),
(42, 16, 'kingsSports', 'antony@gmail.com', '2024-11-13', '2024-11-21', '9am-11am', 3, 1000, 0),
(41, 16, 'kingsSports', 'antony@gmail.com', '2024-11-13', '2024-11-28', '9am-11am', 3, 1000, 0),
(39, 16, 'kingsSports', 'antony@gmail.com', '2024-11-13', '2024-11-21', '7am-9am', 3, 1000, 0),
(38, 16, 'kingsSports', 'antony@gmail.com', '2024-11-12', '2024-11-26', '9am-11am', 3, 1000, 0),
(37, 16, 'kingsSports', 'antony@gmail.com', '2024-11-12', '2024-11-28', '7am-9am', 3, 1000, 0),
(36, 16, 'kingsSports', 'antony@gmail.com', '2024-11-12', '2024-11-28', '-Select-', 3, 1000, 0),
(45, 17, 'ChampionsField', 'emmanu@gmail.com', '2024-11-13', '2024-11-28', '7am-9am', 2, 600, 0),
(46, 16, 'kingsSports', 'emmanu@gmail.com', '2024-11-13', '2024-11-21', '7am-9am', 2, 1000, 0),
(47, 16, 'kingsSports', 'antony@gmail.com', '2024-11-27', '2024-11-28', '9am-11am', 3, 1000, 0),
(48, 16, 'kingsSports', 'antony@gmail.com', '2024-11-28', '2024-11-29', '9am-11am', 3, 1000, 0),
(49, 16, 'kingsSports', 'antony@gmail.com', '2024-11-28', '2024-11-29', '7am-9am', 3, 1000, 0),
(50, 19, 'Legendsturf', 'antony@gmail.com', '2024-11-29', '2024-11-30', '9am-11am', 3, 900, 0),
(51, 19, 'Legendsturf', 'antony@gmail.com', '2024-11-29', '2024-12-04', '7am-9am', 3, 900, 0),
(52, 19, 'Legendsturf', 'antony@gmail.com', '2024-11-29', '2024-12-13', '7am-9am', 3, 900, 0),
(59, 16, 'kingsSports', 'antony@gmail.com', '2024-11-29', '2024-11-30', '7am-9am', 3, 1000, 0),
(58, 17, 'ChampionsField', 'antony@gmail.com', '2024-11-29', '2024-11-30', '7am-9am', 3, 600, 0),
(57, 16, 'kingsSports', 'antony@gmail.com', '2024-11-29', '2024-12-01', '9am-11am', 3, 1000, 0),
(62, 16, 'kingsSports', 'antony@gmail.com', '2024-11-29', '2024-12-04', '7am-9am', 3, 1000, 0),
(63, 19, 'Legendsturf', 'antony@gmail.com', '2024-11-29', '2024-12-04', '7am-9am', 3, 900, 0),
(64, 17, 'ChampionsField', 'antony@gmail.com', '2024-11-29', '2024-12-04', '7am-9am', 3, 600, 0),
(75, 16, 'kingsSports', 'antony@gmail.com', '2024-12-01', '2024-12-16', '7am-9am', 3, 1000, 0),
(71, 16, 'kingsSports', 'antony@gmail.com', '2024-11-30', '2024-12-05', '7am-9am', 3, 1000, 0),
(69, 16, 'kingsSports', 'antony@gmail.com', '2024-11-30', '2024-12-03', '7am-9am', 3, 1000, 0),
(70, 16, 'kingsSports', 'antony@gmail.com', '2024-11-30', '2024-12-04', '9am-11am', 3, 1000, 0),
(78, 19, 'Legendsturf', 'antony@gmail.com', '2024-12-04', '2024-12-05', '7am-9am', 3, 900, 0),
(77, 16, 'kingsSports', 'antony@gmail.com', '2024-12-01', '2024-12-03', '7am-9am', 3, 1000, 0),
(79, 19, 'Legendsturf', 'legendsturf@gmail.com', '2024-12-04', '2024-12-04', '9am-11am', 4, 900, 0),
(80, 16, 'kingsSports', 'antony@gmail.com', '2024-12-19', '2024-12-26', '7am-9am', 3, 1000, 0),
(81, 16, 'kingsSports', 'antony@gmail.com', '2024-12-22', '2024-12-23', '7am-9am', 3, 1000, 0),
(82, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-06', '2025-01-07', '7am-9am', 3, 900, 0),
(86, 16, 'kingsSports', 'emmanu@gmail.com', '2025-01-07', '2025-01-10', '9am-11am', 2, 1000, 0),
(84, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-06', '2025-01-08', '7pm-8pm', 3, 900, 0),
(87, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-08', '7am-9am', 4, 900, 0),
(88, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-08', '7am-9am', 3, 900, 0),
(89, 16, 'kingsSports', 'antony@gmail.com', '2025-01-07', '2025-01-09', '7am-9am', 3, 1000, 0),
(90, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-08', '9am-11am', 3, 900, 0),
(91, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-09', '7am-9am', 3, 900, 0),
(92, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-08', '9am-11am', 3, 900, 11),
(93, 16, 'kingsSports', 'antony@gmail.com', '2025-01-07', '2025-01-08', '7am-9am', 3, 1000, 12),
(94, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-10', '7am-9am', 3, 900, 12),
(95, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-08', '7pm-8pm', 3, 900, 11),
(96, 19, 'Legendsturf', 'antony@gmail.com', '2025-01-07', '2025-01-09', '7am-9am', 2, 900, 10);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `did` int NOT NULL AUTO_INCREMENT,
  `dname` varchar(300) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`did`, `dname`, `status`) VALUES
(1, 'Ernakulam', 1),
(2, 'Thrissur', 1),
(7, 'Thiruvananthapuram', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `rid` int NOT NULL AUTO_INCREMENT,
  `rfullname` varchar(100) NOT NULL,
  `rcontactno` char(10) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `rfullname`, `rcontactno`, `remail`, `rpassword`, `status`) VALUES
(3, 'Antony', '8848761882', 'antony@gmail.com', 'ak47', 1),
(4, 'abhiram', '9948761966', 'abhi@gmail.com', 'abhi', 1),
(5, 'emmanu', '8848761889', 'emmanu@gmail.com', 'emm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

DROP TABLE IF EXISTS `slot`;
CREATE TABLE IF NOT EXISTS `slot` (
  `sid` int NOT NULL AUTO_INCREMENT,
  `ctime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`sid`, `ctime`) VALUES
(1, '7am-9am'),
(2, '9am-11am'),
(3, '7pm-8pm');

-- --------------------------------------------------------

--
-- Table structure for table `turf`
--

DROP TABLE IF EXISTS `turf`;
CREATE TABLE IF NOT EXISTS `turf` (
  `TID` int NOT NULL AUTO_INCREMENT,
  `tname` varchar(40) NOT NULL,
  `tloc` char(30) NOT NULL,
  `tcontno` int NOT NULL,
  `timage` varchar(150) NOT NULL,
  `tprice` int NOT NULL,
  `temail` char(30) NOT NULL,
  `tpasswrd` int NOT NULL,
  `tdescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tmap` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `did` int NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `turf`
--

INSERT INTO `turf` (`TID`, `tname`, `tloc`, `tcontno`, `timage`, `tprice`, `temail`, `tpasswrd`, `tdescription`, `tmap`, `status`, `did`) VALUES
(1, 'sky sports', 'koonamavu', 2147483647, 'turf1.jpg', 0, 'aera@gm.com', 12364, '', '', 2, 0),
(4, 'Sport on', 'Edappally', 2147483647, 'f592683d6002acb7536a41f65b909ae4_e6df342aa8d8.jpg', 0, 'turf@gmail.com', 123654, '', '', 2, 0),
(2, 'super sports', 'aluva', 1234563291, 'turf2.jpg', 0, 'aera@gm.com', 5555, '', '', 2, 0),
(3, 'acro sports', 'angamaly', 2147483647, 'turf3.jpg', 0, 'acro@gmail.com', 5646854, '', '', 2, 0),
(5, 'Dynamo', '1', 2147483647, '63fbba42714e06277e67cbb2f833f038_a0e1ac420ae8494c3a.jpg', 0, 'dynamo@gm.com', 0, '', '', 2, 0),
(6, 'Dynamo', '1', 2147483647, '889b871ca4ef4ab4a0dbd0cf1e321ea6_4e73053b8b8543c3.jpg', 0, 'dynamo@gm.com', 0, '', '', 2, 0),
(7, 'kingsports', '', 1234563223, '224718d2ef76ad0a5ceb0937befd1b12_e6c7b3d9489.jpg', 0, 'kingssports@gmail.com', 123652, '', '', 2, 1),
(8, 'aurasports', 'Edappally', 1234563211, '60c9096cce12c86e139c8529ee76d7be_65ac2ec4307907cb3088.jpg', 0, 'aurasports@gmail.com', 123651, '', '', 2, 2),
(9, 'gameon', 'kalamassery', 2147483647, '697a5aed62e9bdfd79efc4f04b2f037f_6d924ff8d1ad2bf69d0.jpg', 700, 'playon@gmail.com', 123456, '', '', 2, 1),
(10, 'letsplay', 'koonamavu', 2147483647, 'a243fd6f70ef90c466acdfc3c0f53365_089092ea22ca59.png', 800, 'letsplay@gmail.com', 2345, '', '', 2, 1),
(11, 'Anttsports', 'CHAVAKKAD', 2147483647, '63a14ad40774ce8ec1087549e94a86db_19eaac3651da41e08.png', 900, 'anttsports@gmail.com', 2333, '', '', 2, 2),
(12, 'gv', 'cgh', 2147483647, 'ba73b8910b42807345abb5d501ad21a7_5397783638e.jpg', 600, 'hvuvuy@', 907798, '', '', 2, 2),
(13, 'PlayOn', 'koonamavu', 2147483647, 'a85e780fe7543fb123642dfd15a8bed9_a899b7553162477.jpg', 800, 'playon@gamail.com', 907723, '', '', 2, 1),
(14, 'PlayOn', 'aluva', 2147483647, 'df173cfe8cf8c0e6b362e129ee66d176_aa312567f4e2ceb6.jpg', 700, 'playon3@gamail.com', 907729, '', '', 2, 1),
(15, 'RMsports', 'chavakkad', 2147483647, '2608e7d624a2c562a47804e2229cd21a_58a3c96bee4118c.jpg', 600, 'rm3@gamail.com', 123, '', '', 2, 2),
(16, 'kingsSports', 'edappally', 2147483647, 'c1c4157ecde7f01811809f319d3beb38_765223cf1cce1eba87.jpg', 1000, 'kingssports@gmail.com', 128987, 'A premium artificial grass turf ideal for football, cricket, and other sports.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15651.983643285698!2d76.34867005547462!3d10.10670318035498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080e5a9dce01c9%3A0x57a5c33b550f27d2!2sAluva%2C%20Kerala%20683101%2C%20India!5e0!3m2!1sen!2sbd!4v1696497023407!5m2!1sen!2sbd', 1, 1),
(17, 'ChampionsField', 'Angamaly', 2147483647, '6f3983db3a426c8e34d40240bfaa26a6_5f48c4583b6d9d3dd7.jpg', 600, 'championsfield@gmail.com', 4577, 'Located in the heart of the city, this multi-sport turf is designed for soccer, rugby, and other outdoor sports. ', '', 1, 1),
(18, 'kingsSports', 'edappally', 2147483647, '8a802c12c8c22f46f3f32b78c1818e47_fec4c1d82b05.jpg', 900, 'kingssports@gmail.com', 0, '', '', 2, 1),
(19, 'Legendsturf', 'mala', 2147483647, '445d860b28fa6643d64f8fd0353e44f3_e49788a2ed5d74b5a53.jpg', 900, 'legendsturf@gmail.com', 7622, 'This natural grass turf is perfect for training and friendly matches.', '', 1, 1),
(20, 'RMsportss', 'chavakkad', 2147483647, '7c7f3bf82b76c221ae27aad709fca0f8_4e7b762c5efe3e.jpg', 700, 'rms@gamail.com', 907722, 'welcome', '', 1, 2),
(21, 'ArmSports', 'Chavakk', 2147483647, '0ca0365e0206ddcded15f5bc54f94415_bd48b3b4494a.jpg', 700, 'arm@gamail.com', 4544, 'welcome to', '', 2, 2),
(22, 'ArmSports', 'Chavakk', 2147483647, '08846dbc1f430ddfd24f4273fa83685c_d560269db6.jpg', 700, 'arm@gamail.com', 4544, 'welcome to', '', 2, 2),
(23, 'Rrsportss', 'Chavakkad', 2147483647, 'da8abe66ee2b6af49b89d58608927070_48ff416c341e5da8.jpg', 700, 'rr@gamail.com', 907728, 'welcome', '', 2, 2),
(24, 'kingsS', 'hku', 688789899, 'f263b39f7d1195456f75e6e149885346_42c3972d446.png', 900, 'iulo9iop89', 907723, 'o9p', '', 2, 2),
(25, 'kingsS', 'hku', 688789899, '3a1ba1e0f48be2dad566dee4ac938ed6_2013a042dc14.png', 900, 'iulo9iop89', 907723, 'o9p', '', 2, 2),
(26, 'kingsS', 'hku', 688789899, 'f2f3f1deb370dccc06c9a9495debc23e_8633234bb55d870.png', 900, 'iulo9iop89', 907723, 'o9p', '', 2, 2),
(27, 'gvh', 'htgjhtj', 2147483647, 'b0e86807a7d4fbf5b339c9da90a9ddb4_3ceba833a1457207766.png', 1000, 'rr@gamail.com', 123, 'yio', '', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
