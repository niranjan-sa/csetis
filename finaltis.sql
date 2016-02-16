-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 11:51 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tis`
--

-- --------------------------------------------------------

--
-- Table structure for table `basicdetails`
--

CREATE TABLE IF NOT EXISTS `basicdetails` (
  `userid` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `namefathus` varchar(50) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `academicpos` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `highestqual` varchar(30) NOT NULL,
  `extrahiqual` varchar(30) DEFAULT NULL,
  `statushiqual` varchar(30) NOT NULL,
  `toa` varchar(30) NOT NULL,
  `woa` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basicdetails`
--

INSERT INTO `basicdetails` (`userid`, `title`, `gender`, `fullname`, `namefathus`, `mothername`, `academicpos`, `dob`, `highestqual`, `extrahiqual`, `statushiqual`, `toa`, `woa`, `department`) VALUES
(2, 'Dr.', 'Male', 'S.S.Kamat', 'S.B.Kamat', 'Jyoti', 'Professor', '1980-01-13', 'Ph.D.', '', 'Completed', 'Regular', 'PG', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `bookpublished`
--

CREATE TABLE IF NOT EXISTS `bookpublished` (
  `userid` int(11) NOT NULL,
  `authorfrom` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `coauthorname` varchar(50) DEFAULT NULL,
  `bookname` varchar(50) NOT NULL,
  `dobp` date NOT NULL,
  `editionofbook` varchar(50) DEFAULT NULL,
  `isbn` mediumint(9) DEFAULT NULL,
  `content` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookpublished`
--

INSERT INTO `bookpublished` (`userid`, `authorfrom`, `department`, `authorname`, `coauthorname`, `bookname`, `dobp`, `editionofbook`, `isbn`, `content`) VALUES
(2, 'PG', 'CSE', 'S.S.Kamat', '', 'Basics of Database', '2015-11-01', '2015', 1397, 'Good for beginners'),
(2, 'PG', 'CSE', 'S.S.Kamat', '', 'Computer Architecture', '2013-12-11', '2013', 3554, 'Every CSE student must read this book..!!');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `depname` varchar(30) NOT NULL,
  `yearofestb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depname`, `yearofestb`) VALUES
('CSE', '1986-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE IF NOT EXISTS `diploma` (
  `userid` int(11) NOT NULL,
  `noc` varchar(50) DEFAULT NULL,
  `nod` varchar(50) DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL,
  `dodc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`userid`, `noc`, `nod`, `percentage`, `dodc`) VALUES
(2, 'WCE, SANGLI', 'CSE', '90', '2002-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `doctoraldegree`
--

CREATE TABLE IF NOT EXISTS `doctoraldegree` (
  `userid` int(11) NOT NULL,
  `dg` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `noc` varchar(50) DEFAULT NULL,
  `dodd` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctoraldegree`
--

INSERT INTO `doctoraldegree` (`userid`, `dg`, `area`, `noc`, `dodd`) VALUES
(2, 'Ph.D.', 'Data Encryption', 'IITB', '2012-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `eventorganized`
--

CREATE TABLE IF NOT EXISTS `eventorganized` (
  `userid` int(11) NOT NULL,
  `eventcoordinatorfrom` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `typeofevent` varchar(50) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `coordinatorname` varchar(30) NOT NULL,
  `cocoordinatorname` varchar(30) DEFAULT NULL,
  `dos` date NOT NULL,
  `doe` date NOT NULL,
  `toe` varchar(50) NOT NULL,
  `nameofresource1` varchar(30) NOT NULL,
  `nameofresource2` varchar(30) DEFAULT NULL,
  `nameofresource3` varchar(30) DEFAULT NULL,
  `nameofresource4` varchar(30) DEFAULT NULL,
  `details` varchar(150) NOT NULL,
  `totalparticipants` int(11) NOT NULL,
  `wceparticipants` int(11) NOT NULL,
  `nonwceparticipants` int(11) NOT NULL,
  `expenditure` int(11) NOT NULL,
  `expenditurethrough` varchar(30) NOT NULL,
  `otherthing` varchar(30) DEFAULT NULL,
  `irg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventorganized`
--

INSERT INTO `eventorganized` (`userid`, `eventcoordinatorfrom`, `department`, `typeofevent`, `duration`, `coordinatorname`, `cocoordinatorname`, `dos`, `doe`, `toe`, `nameofresource1`, `nameofresource2`, `nameofresource3`, `nameofresource4`, `details`, `totalparticipants`, `wceparticipants`, `nonwceparticipants`, `expenditure`, `expenditurethrough`, `otherthing`, `irg`) VALUES
(2, 'PG', 'CSE', 'Workshop', 'threedays', 'S.S.Kamat', 'A.A.Pathak', '2015-11-01', '2015-11-03', 'Php Workshop', 'N.S.Agnihotri', '', '', '', 'Event carried out for 3 days.', 200, 80, 120, 2, 'TEQIPII', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `foreigntravel`
--

CREATE TABLE IF NOT EXISTS `foreigntravel` (
  `userid` int(11) NOT NULL,
  `facultyfrom` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `pov` varchar(30) NOT NULL,
  `nof` varchar(50) NOT NULL,
  `details` varchar(150) NOT NULL,
  `eov` int(11) NOT NULL,
  `sponsor` varchar(30) NOT NULL,
  `other` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foreigntravel`
--

INSERT INTO `foreigntravel` (`userid`, `facultyfrom`, `department`, `pov`, `nof`, `details`, `eov`, `sponsor`, `other`) VALUES
(2, 'PG', 'CSE', 'Conference', 'S.S.Kamat', 'National Conference on Robotics and Future', 50000, 'WceFund', '');

-- --------------------------------------------------------

--
-- Table structure for table `graduation`
--

CREATE TABLE IF NOT EXISTS `graduation` (
  `userid` int(11) NOT NULL,
  `graduation` varchar(30) NOT NULL,
  `other` varchar(30) DEFAULT NULL,
  `discipline` varchar(50) NOT NULL,
  `noc` varchar(50) NOT NULL,
  `dog` date NOT NULL,
  `percentage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduation`
--

INSERT INTO `graduation` (`userid`, `graduation`, `other`, `discipline`, `noc`, `dog`, `percentage`) VALUES
(2, 'B.Tech.', '', 'CSE', 'WCE, SANGLI', '2005-05-01', '9.5');

-- --------------------------------------------------------

--
-- Table structure for table `guestlecturedelivered`
--

CREATE TABLE IF NOT EXISTS `guestlecturedelivered` (
  `userid` int(11) NOT NULL,
  `facultyfrom` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `nameofthefaculty` varchar(50) NOT NULL,
  `nameoforganization` varchar(80) NOT NULL,
  `place` varchar(30) NOT NULL,
  `typeoflecture` varchar(50) NOT NULL,
  `titleoflecture` varchar(50) NOT NULL,
  `durationoflecture` varchar(30) NOT NULL,
  `dol` date NOT NULL,
  `numberofstudents` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestlecturedelivered`
--

INSERT INTO `guestlecturedelivered` (`userid`, `facultyfrom`, `department`, `nameofthefaculty`, `nameoforganization`, `place`, `typeoflecture`, `titleoflecture`, `durationoflecture`, `dol`, `numberofstudents`) VALUES
(2, 'PG', 'CSE', 'S.S.Kamat', 'CSE, WCE', 'Sangli', 'Guest Lecture', 'Web Technology', 'One Hour', '2015-11-17', 120);

-- --------------------------------------------------------

--
-- Table structure for table `guestlectureorganized`
--

CREATE TABLE IF NOT EXISTS `guestlectureorganized` (
  `userid` int(11) NOT NULL,
  `facultyfrom` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `nameofthefaculty` varchar(50) NOT NULL,
  `nameofresourceperson` varchar(50) NOT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `place` varchar(50) NOT NULL,
  `titleoflecture` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `starttime` time NOT NULL,
  `enddate` date NOT NULL,
  `endtime` time NOT NULL,
  `numberofstudents` int(11) NOT NULL,
  `totalexpenditure` int(11) NOT NULL,
  `expthrough` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestlectureorganized`
--

INSERT INTO `guestlectureorganized` (`userid`, `facultyfrom`, `department`, `nameofthefaculty`, `nameofresourceperson`, `organization`, `place`, `titleoflecture`, `startdate`, `starttime`, `enddate`, `endtime`, `numberofstudents`, `totalexpenditure`, `expthrough`) VALUES
(2, 'PG', 'CSE', 'S.S.Kamat', 'N.S.Agnihotri', 'CSE Dept., WCE', 'Sangli', 'Android', '2015-11-08', '09:00:00', '2015-11-09', '17:00:00', 150, 1, 'TEQIP');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructuredevelopment`
--

CREATE TABLE IF NOT EXISTS `infrastructuredevelopment` (
  `userid` int(11) NOT NULL,
  `wing` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `other1` varchar(30) DEFAULT NULL,
  `nof` varchar(50) NOT NULL,
  `tod` varchar(30) NOT NULL,
  `other2` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `purchased` varchar(30) NOT NULL,
  `specification` varchar(150) NOT NULL,
  `expenditure` int(11) NOT NULL,
  `dop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infrastructuredevelopment`
--

INSERT INTO `infrastructuredevelopment` (`userid`, `wing`, `department`, `other1`, `nof`, `tod`, `other2`, `quantity`, `purchased`, `specification`, `expenditure`, `dop`) VALUES
(2, 'PG', 'CSE', '', 'S.S.Kamat', 'Software', '', 100, 'PGFund', 'Matlab', 1, '2015-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `mou`
--

CREATE TABLE IF NOT EXISTS `mou` (
  `userid` int(11) NOT NULL,
  `typeofmou` varchar(30) NOT NULL,
  `facultyfrom` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `nameofindustry` varchar(50) NOT NULL,
  `moudate` date NOT NULL,
  `purposeofmou` varchar(150) NOT NULL,
  `detailsofmou` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mou`
--

INSERT INTO `mou` (`userid`, `typeofmou`, `facultyfrom`, `department`, `nameofindustry`, `moudate`, `purposeofmou`, `detailsofmou`) VALUES
(2, 'Industry', 'PG', 'CSE', 'Sangli', '2015-11-17', 'development of students', 'funding to student projects');

-- --------------------------------------------------------

--
-- Table structure for table `patent`
--

CREATE TABLE IF NOT EXISTS `patent` (
  `userid` int(11) NOT NULL,
  `facultyfrom` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `typeofpatent` varchar(30) NOT NULL,
  `statusofpatent` varchar(30) NOT NULL,
  `nameoffirstauthor` varchar(50) NOT NULL,
  `nameofcoauthor` varchar(50) DEFAULT NULL,
  `title` varchar(30) NOT NULL,
  `dateofpatentfiled` date NOT NULL,
  `dateofpatentawarded` date DEFAULT NULL,
  `patentnumber` varchar(30) NOT NULL,
  `detailsofpatent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patent`
--

INSERT INTO `patent` (`userid`, `facultyfrom`, `department`, `typeofpatent`, `statusofpatent`, `nameoffirstauthor`, `nameofcoauthor`, `title`, `dateofpatentfiled`, `dateofpatentawarded`, `patentnumber`, `detailsofpatent`) VALUES
(2, 'PG', 'CSE', 'International', 'Awarded', 'S.S.Kamat', 'N.S.Agnihotri', 'mobile theft security', '2013-12-01', '2015-01-05', '8655316846', 'This software informs user about mobile current lo');

-- --------------------------------------------------------

--
-- Table structure for table `postgraduation`
--

CREATE TABLE IF NOT EXISTS `postgraduation` (
  `userid` int(11) NOT NULL,
  `pg` varchar(30) DEFAULT NULL,
  `other` varchar(30) DEFAULT NULL,
  `discipline` varchar(50) DEFAULT NULL,
  `noc` varchar(50) DEFAULT NULL,
  `dopg` date DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postgraduation`
--

INSERT INTO `postgraduation` (`userid`, `pg`, `other`, `discipline`, `noc`, `dopg`, `percentage`) VALUES
(2, 'M.Tech.', '', 'CSE', 'IITB', '2007-05-01', '9.2');

-- --------------------------------------------------------

--
-- Table structure for table `projectgrants`
--

CREATE TABLE IF NOT EXISTS `projectgrants` (
  `userid` int(11) NOT NULL,
  `investigatorfrom` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `nameofagency` varchar(50) NOT NULL,
  `otherfundingagency` varchar(50) DEFAULT NULL,
  `statusofproject` varchar(30) NOT NULL,
  `nameofprincipalinvestigator` varchar(50) NOT NULL,
  `nameofcoinvestigator` varchar(50) DEFAULT NULL,
  `titleofproject` varchar(50) NOT NULL,
  `amountsantioned` int(11) NOT NULL,
  `dateofprojectsantioned` date NOT NULL,
  `dateofprojectcompleted` date DEFAULT NULL,
  `projectabstract` varchar(150) NOT NULL,
  `equipmentdetails` varchar(150) NOT NULL,
  `totalrevenue` int(11) NOT NULL,
  `totalpaperspublished` int(11) NOT NULL,
  `btechstudents` int(11) NOT NULL,
  `mtechstudents` int(11) NOT NULL,
  `phdstudents` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectgrants`
--

INSERT INTO `projectgrants` (`userid`, `investigatorfrom`, `department`, `nameofagency`, `otherfundingagency`, `statusofproject`, `nameofprincipalinvestigator`, `nameofcoinvestigator`, `titleofproject`, `amountsantioned`, `dateofprojectsantioned`, `dateofprojectcompleted`, `projectabstract`, `equipmentdetails`, `totalrevenue`, `totalpaperspublished`, `btechstudents`, `mtechstudents`, `phdstudents`) VALUES
(2, 'PG', 'CSE', 'AICTE', '', 'Completed', 'S.S.Kamat', 'A.A.Pathak', 'Anti-theft Technology', 4, '2013-12-01', '2015-05-03', 'This software alerts user if device gets stolen', 'arduino, wireless adapter', 5, 100, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`userid`, `username`, `password`, `type`) VALUES
(1, 'pathakaa', 'pathakaa', 't'),
(2, 'kamatss', 'kamatss', 't'),
(3, 'agnihotrins', 'agnihotrins', 't');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depname`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
