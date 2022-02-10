-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 12:17 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicationformbiodata`
--

CREATE TABLE `applicationformbiodata` (
  `id` int(11) DEFAULT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `jobposition` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `raddress` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `d_o_b` text,
  `state` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `graduationyear` text,
  `grade` int(11) DEFAULT NULL,
  `gradedescription` varchar(255) DEFAULT NULL,
  `empname` varchar(255) DEFAULT NULL,
  `empaddress` varchar(255) DEFAULT NULL,
  `lastjobposition` varchar(255) DEFAULT NULL,
  `jobrole` varchar(255) DEFAULT NULL,
  `employmentdate` text,
  `employmentstatus` varchar(255) DEFAULT NULL,
  `departuredate` text,
  `careerobjective` text,
  `personalobjective` text,
  `keyword` varchar(255) DEFAULT NULL,
  `gname` varchar(255) DEFAULT NULL,
  `gaddress` varchar(255) DEFAULT NULL,
  `gcontact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `submissiondate` timestamp(4) NULL DEFAULT CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicationformbiodata`
--

INSERT INTO `applicationformbiodata` (`id`, `biodata_id`, `jobposition`, `firstname`, `lastname`, `initials`, `raddress`, `phone`, `email`, `gender`, `d_o_b`, `state`, `nationality`, `hobbies`, `qualification`, `discipline`, `institution`, `graduationyear`, `grade`, `gradedescription`, `empname`, `empaddress`, `lastjobposition`, `jobrole`, `employmentdate`, `employmentstatus`, `departuredate`, `careerobjective`, `personalobjective`, `keyword`, `gname`, `gaddress`, `gcontact`, `photo`, `submissiondate`) VALUES
(0, 1, 'IT Specialist', 'Dominion', 'Favour', 'C.', 'Uyo, Akwa Ibom State', '08079069655', 'dummu@gmail.com', 'Male', '23/2/1998', 'Akwa Ibom', 'Nigerian', 'Reading and Designing', 'B.Sc', 'Computer Science', 'University of Uyo', '12/2/2003', 4, 'Second Class Upper', 'CompuWorks Limited', 'Ayah Lagos', 'Sales Representative', 'Delivery of goods to customers', '3/2/2014', 'Not Working', '21/1/2009', 'Loving the Job. ', 'Thinkability', 'Creative', 'Mr. Victor James', 'Uyo, Akwa Ibom State', '07089685755', '', '2018-08-10 01:20:00.4435'),
(0, 2, 'FrontDesk Officer', 'Grace', 'Godwin', 'F.', 'Ombi I, Lafia, Nasarawa State, Nigeria.', '09099999999', 'pas.chris@gmail.com', 'Female', '2018-08-28', 'Nasarawa State', 'Nigerian', 'Dancing', 'HND', 'Computer Engineering', 'Uyo City Polytechnic', '2018-08-14', 3, 'Lower Credit', 'Lectitech Limited', 'Lafia, Nasarawa State', 'Sales Representative', 'Selling to customers', '2018-08-28', 'No', '2018-08-21', 'Creating friendly environment', ' Hardwork', 'Hardwork', 'Mr. Davis David', 'Uyo, Akwa Ibom State, Nigeria.', '09045556666', 'app_passports/2017-09-18-08-35-46-155.jpg', '2018-08-10 01:28:21.8333'),
(NULL, 3, 'Programmer', 'Onana', 'John', 'Emmanuel', 'Ombi 2, Lafia, Nasarawa State, Nigeria.', '08102197884', 'onanajohn1414@gmail.com', 'Male', '1995-08-01', 'Nasarawa State', 'Nigerian', 'Reading and football', 'Bachelor Degree', 'fisheries', 'Nasarawa State university keffi', '2016-08-02', 0, 'second class upper', 'malvin', 'Ombi 2, Lafia, Nasarawa State, Nigeria.', 'secretary', 'secretary', '2017-07-04', 'No', '2018-08-12', ' skill and expirience', ' professional', 'gentle', 'Francis', 'Ombi 2, Lafia, Nasarawa State, Nigeria.', '09045556666', 'app_passports/2017-04-27-11-01-13-043.jpg', '2018-08-13 06:56:11.3810');

-- --------------------------------------------------------

--
-- Table structure for table `applicationform_tb`
--

CREATE TABLE `applicationform_tb` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) DEFAULT NULL,
  `jobposition` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `d_o_b` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `lastempname` varchar(255) DEFAULT NULL,
  `lastempaddress` varchar(255) DEFAULT NULL,
  `lastjobposition` varchar(255) DEFAULT NULL,
  `careerobjective` varchar(255) DEFAULT NULL,
  `personalobjective` varchar(255) DEFAULT NULL,
  `submissiondate` timestamp(4) NULL DEFAULT CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicationform_tb`
--

INSERT INTO `applicationform_tb` (`id`, `biodata_id`, `jobposition`, `firstname`, `lastname`, `phone`, `email`, `gender`, `d_o_b`, `qualification`, `discipline`, `lastempname`, `lastempaddress`, `lastjobposition`, `careerobjective`, `personalobjective`, `submissiondate`) VALUES
(1, 1, 'Database Administrator', 'Christian', 'Akpan', '07039485184', 'chris.blake2009@yahoo.com', 'Male', '23/6/1989', 'HND', 'Computer Science', 'Compuworks Limited', 'Ikeja, Lagos', 'Lecturer', 'Team participation with visionary disposition.', 'Hard work and commitments gratifies rewards.', '2018-08-10 01:03:06.5872'),
(2, 2, 'Database Administrator', 'Victor', 'Francis', '07033333333', 'pas.chris@gmail.com', 'Male', '2018-08-15', 'HND', 'Computer Engineering', 'Vagious Limited', 'Ikeja, Lagos', 'Sales Representation', ' Teamness', ' Outspoken', '2018-08-10 01:04:49.0271'),
(3, 3, 'Web Developer', 'Justina', 'Edem', '07968605054', 'justnnin@gmail.com', 'Female', '2018-08-27', 'Ordinary Diploma', 'Communication Arts', 'Fradeulus Limited', 'Uyo, Akwa Ibom State', 'Manager', ' Skillful', ' Hardwork', '2018-08-19 13:35:19.8141');

-- --------------------------------------------------------

--
-- Table structure for table `app_biodataform`
--

CREATE TABLE `app_biodataform` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `raddress` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `maritalstatus` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `localgov` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_biodataform`
--

INSERT INTO `app_biodataform` (`id`, `job_id`, `firstname`, `lastname`, `raddress`, `phone`, `email`, `gender`, `dateofbirth`, `maritalstatus`, `state`, `localgov`, `nationality`, `hobbies`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'Christian', 'Akpan', 'Uyo, Akwa Ibom State', '07039485184', 'Chris.blake2009@yahoo.com', 'Male', '1996-09-18', 'Single', 'Akwa Ibom', 'Oruk Anam', 'Nigeria', 'Researching', 1, '2018-09-05 13:44:46.14'),
(2, 'INFOSYSAPP 2', 'Famous', 'Obiakor', 'utimate ldge opposite poly gate', '07000434022', 'fidelis@yahoo.com', 'Male', '1994-04-01', 'Single', 'Delta', 'Ughelli South', 'Nigeria', 'Net Surfing', 2, '2018-09-05 14:03:09.43'),
(3, 'INFOSYSAPP 3', 'Anafa', 'David', 'Naspoly Lafia', '070666666666', 'anafa@gmail.com', 'Male', '2016-09-12', 'Married', 'Kaduna', 'Makarfi', 'Zambia', 'Traveling', 3, '2018-09-05 16:35:24.31'),
(4, 'INFOSYSAPP 4', 'Emmanuel', 'Akpan', 'Etinan, Akwa Ibom State', '07044444444', 'emmyakpan@gmail.com', 'Male', '1999-09-21', 'Single', 'Akwa Ibom', 'Oruk Anam', 'Cameroon', 'Singing', 4, '2018-09-14 21:43:34.79'),
(5, 'INFOSYSAPP 5', 'Daniel', 'Dan', 'lafia', '09098888888', 'danieldan@gmail.com', 'Male', '2000-10-22', 'Single', 'Bayelsa', 'Kolokuma/Opokuma', 'Nigeria', 'Net Surfing', 5, '2018-10-16 15:31:28.15'),
(6, 'INFOSYSAPP 6', 'Uwem', 'Ekeng', 'Nung oku, Uyo', '08183220296', 'ekeng@gmail.com', 'Male', '2017-12-31', 'Single', 'Akwa Ibom', 'Ibesikpo Asutan', 'Liberia', 'Singing', 6, '2018-10-23 08:04:48.99'),
(7, 'INFOSYSAPP 7', 'Blessing', 'Fred', 'Nung oku, Uyo', '090909988877', 'blees@yahoo.com', 'Female', '2018-11-13', 'None', 'Bayelsa', '', 'Nigeria', 'Learning', 7, '2018-11-26 09:04:37.62');

-- --------------------------------------------------------

--
-- Table structure for table `app_certificates`
--

CREATE TABLE `app_certificates` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `highestcert` varchar(255) DEFAULT NULL,
  `ssce` varchar(255) DEFAULT NULL,
  `fslc` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_certificates`
--

INSERT INTO `app_certificates` (`id`, `job_id`, `highestcert`, `ssce`, `fslc`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'app_certificates_highestcert/2017-06-19-12-13-12-088.jpg', 'app_certificates_sscecert/2017-08-04-11-39-24-291.jpg', 'app_certificates_fslccert/2017-08-04-11-38-29-428.jpg', 1, '2018-09-05 13:45:46.89'),
(2, 'INFOSYSAPP 2', 'app_certificates_highestcert/2017-04-27-11-01-13-043.jpg', 'app_certificates_sscecert/2017-06-19-12-13-12-088.jpg', 'app_certificates_fslccert/2017-06-19-12-14-00-763.jpg', 2, '2018-09-05 14:05:05.54'),
(3, 'INFOSYSAPP 3', 'app_certificates_highestcert/2017-08-07-13-28-44-375.jpg', 'app_certificates_sscecert/2017-08-04-11-39-24-291.jpg', 'app_certificates_fslccert/2017-08-04-16-02-19-919.jpg', 3, '2018-09-05 16:36:31.15'),
(4, 'INFOSYSAPP 4', 'app_certificates_highestcert/2017-08-05-09-36-08-112.jpg', 'app_certificates_sscecert/2017-08-04-19-39-09-791.jpg', 'app_certificates_fslccert/2017-08-05-13-09-18-711.jpg', 4, '2018-09-14 21:44:46.83'),
(5, 'INFOSYSAPP 5', 'app_certificates_highestcert/2017-06-19-12-13-12-088.jpg', 'app_certificates_sscecert/2017-06-19-12-14-00-763.jpg', 'app_certificates_fslccert/2017-08-04-19-39-09-791.jpg', 5, '2018-10-16 15:33:07.66'),
(6, 'INFOSYSAPP 6', 'app_certificates_highestcert/2017-06-19-12-14-00-763.jpg', 'app_certificates_sscecert/2017-08-04-18-02-53-810.jpg', 'app_certificates_fslccert/2017-04-08-19-38-02-236.jpg', 6, '2018-10-23 08:06:17.48'),
(7, 'INFOSYSAPP 7', 'app_certificates_highestcert/c3.jpg', 'app_certificates_sscecert/c8.jpg', 'app_certificates_fslccert/c1.jpg', 7, '2018-11-26 09:05:52.35');

-- --------------------------------------------------------

--
-- Table structure for table `app_passports`
--

CREATE TABLE `app_passports` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_passports`
--

INSERT INTO `app_passports` (`id`, `job_id`, `passport`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'app_passports/2017-04-27-11-01-13-043.jpg', 1, '2018-09-05 13:47:59.87'),
(2, 'INFOSYSAPP 2', 'app_passports/2017-04-08-19-38-02-236.jpg', 2, '2018-09-05 14:08:25.43'),
(3, 'INFOSYSAPP 3', 'app_passports/2017-08-07-13-28-44-375.jpg', 3, '2018-09-05 16:38:31.18'),
(4, 'INFOSYSAPP 4', 'app_passports/IMG_20171106_082406.jpg', 4, '2018-09-14 21:47:18.31'),
(5, 'INFOSYSAPP 5', 'app_passports/2017-04-27-11-01-13-043.jpg', 5, '2018-10-16 15:36:09.98'),
(6, 'INFOSYSAPP 6', 'app_passports/2017-08-29-14-42-14-134.jpg', 6, '2018-10-23 08:08:30.56'),
(7, 'INFOSYSAPP 7', 'app_passports/2017-04-27-11-01-13-043.jpg', 7, '2018-11-26 09:07:38.85');

-- --------------------------------------------------------

--
-- Table structure for table `app_referee`
--

CREATE TABLE `app_referee` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `refname` varchar(255) DEFAULT NULL,
  `refaddress` varchar(255) DEFAULT NULL,
  `refoccupation` varchar(255) DEFAULT NULL,
  `refcontact` varchar(255) DEFAULT NULL,
  `attestation` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_referee`
--

INSERT INTO `app_referee` (`id`, `job_id`, `refname`, `refaddress`, `refoccupation`, `refcontact`, `attestation`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'Supl. Friday Akpan', 'Etinan LGA, Akwa Ibom State', 'Retired/Pensioner', '07032383515', 'On', 1, '2018-09-05 13:47:49.85'),
(2, 'INFOSYSAPP 2', 'famous', 'home no 2 adekole street', 'Business Personnel', '08156729876', 'On', 2, '2018-09-05 14:08:17.12'),
(3, 'INFOSYSAPP 3', 'Mr. Christian Akpan', 'Uyo, Akwa Ibom State', 'Business Personnel', '07089685745', 'On', 3, '2018-09-05 16:38:20.20'),
(4, 'INFOSYSAPP 4', 'Mr. Akpan', 'Etinan, Aks', 'Retired/Pensioner', '07086868686', 'On', 4, '2018-09-14 21:46:50.52'),
(5, 'INFOSYSAPP 5', 'Mr christian Akpan', 'Kaduna', 'Public Servant', '08068574648', 'On', 5, '2018-10-16 15:35:51.26'),
(6, 'INFOSYSAPP 6', 'Mr christian Akpan', 'Kaduna', 'Civil Servant', '08068574648', 'On', 6, '2018-10-23 08:08:05.71'),
(7, 'INFOSYSAPP 7', 'Mr christian Akpan', 'Kaduna', 'Civil Servant', '08068574648', 'On', 7, '2018-11-26 09:07:26.62');

-- --------------------------------------------------------

--
-- Table structure for table `careerobjective`
--

CREATE TABLE `careerobjective` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `careerobjective` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careerobjective`
--

INSERT INTO `careerobjective` (`id`, `job_id`, `careerobjective`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', ' Team work', 1, '2018-09-05 13:47:15.62'),
(2, 'INFOSYSAPP 2', 'Ability to work with or without external supervisions', 2, '2018-09-05 14:06:47.87'),
(3, 'INFOSYSAPP 3', ' loves challenges', 3, '2018-09-05 16:37:32.49'),
(4, 'INFOSYSAPP 4', ' Objectivity', 4, '2018-09-14 21:45:55.56'),
(5, 'INFOSYSAPP 5', ' Active team player', 5, '2018-10-16 15:34:59.44'),
(6, 'INFOSYSAPP 6', ' Initiation', 6, '2018-10-23 08:07:34.35'),
(7, 'INFOSYSAPP 7', ' Objective-oriented', 7, '2018-11-26 09:06:59.61');

-- --------------------------------------------------------

--
-- Table structure for table `career_workexperience`
--

CREATE TABLE `career_workexperience` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `lastempname` varchar(255) DEFAULT NULL,
  `lastempaddress` varchar(255) DEFAULT NULL,
  `lastjobposition` varchar(255) DEFAULT NULL,
  `jobrolecategory` varchar(255) DEFAULT NULL,
  `lastempyear` year(4) DEFAULT NULL,
  `currentempstatus` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career_workexperience`
--

INSERT INTO `career_workexperience` (`id`, `job_id`, `lastempname`, `lastempaddress`, `lastjobposition`, `jobrolecategory`, `lastempyear`, `currentempstatus`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'Infosys Digital Solution Limited', 'Ikeja, Lagos', 'Lead Instructor', 'Web Development/Software Unit', 2015, 'Unemployed', 1, '2018-09-05 13:46:55.53'),
(2, 'INFOSYSAPP 2', 'hope james', 'masaka', 'General Manager', 'Customer Service Department', 2016, 'Hands-On-Job', 2, '2018-09-05 14:06:15.07'),
(3, 'INFOSYSAPP 3', 'Naspoly', 'Lafia, Nasarawa State', 'Lecturer', 'Unit Head', 2016, 'Hands-On-Job', 3, '2018-09-05 16:37:17.10'),
(4, 'INFOSYSAPP 4', 'Willitech Engineering Ltd', 'Uyo - Akwa Ibom State', 'Welder', 'Technical and Craft', 2016, 'Unemployed', 4, '2018-09-14 21:45:47.24'),
(5, 'INFOSYSAPP 5', 'Minlect Limited', 'Ombi 2, Lafia', 'Cleaner', 'Others', 2018, 'Unemployed', 5, '2018-10-16 15:34:25.69'),
(6, 'INFOSYSAPP 6', 'Minlect Limited', 'Ombi 2, Lafia', 'IT specialist', 'Unit Head', 2017, 'Hands-On-Job', 6, '2018-10-23 08:07:17.38'),
(7, 'INFOSYSAPP 7', 'Minlect Limited', 'Ombi 2, Lafia', 'Cleaner', 'Department Head', 2018, 'Unemployed', 7, '2018-11-26 09:06:34.24');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `commentdate` timestamp(4) NULL DEFAULT CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `contact_id`, `name`, `email`, `message`, `commentdate`) VALUES
(1, 1, 'Christian Akpan', 'Chris.blake2009@yahoo.com', 'Thank you kindly for your time in developing the OJRS.', '2018-08-13 00:28:05.1967'),
(3, 2, 'Friday Johnson', 'pas.chris@gmail.com', 'Thanks', '2018-08-13 02:12:52.7415'),
(4, 3, 'Solomon Cresent', 'odonyi@gmail.com', 'Thanks to this company for giving an opportunity to get myself a good job', '2018-08-13 19:56:53.6923'),
(5, 4, 'Lizzy', 'Liizy32@gmail.com', 'Goodafternoon Dearest Friend in Graphics Design....Thanks for the motivation so far.', '2018-08-17 15:37:35.2133'),
(6, 5, 'Treasure', 'monica@gmail.com', 'This is very beautiful, dynamic and robust. I like the colour combinations and the logic flow of this system. Thank you.', '2018-08-17 21:36:37.5726'),
(7, 6, 'Emmanuel Akpan', 'emmani@gmail.com', 'Junior (Pst) well done. Your work is fine and beautiful. i wish you the best in your academics and life in general. ', '2018-08-19 19:41:12.6455'),
(8, 7, 'BLESSING', 'blessingetta722@gmail.com', 'pls i think you should improve on staff ', '2018-08-30 12:45:11.3954'),
(9, 8, 'Godswill ', 'godswill@gmail.com', 'Meaning what?', '2018-09-03 11:31:33.5865'),
(10, 9, 'Christian Sunday', 'sund@yahoo.com', 'Testing something again...', '2018-09-03 11:34:40.5581'),
(11, 10, 'christiana Akpan', 'chhhcr@yahoo.com', 'Thank you kindly.', '2018-09-11 12:13:16.8617');

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `appCvs` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `job_id`, `appCvs`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'app_cvs/CV-grace.docx', 1, '2018-09-05 13:46:03.87'),
(2, 'INFOSYSAPP 2', 'app_cvs/2017-07-23-16-23-37-893.jpg', 2, '2018-09-05 14:05:20.98'),
(3, 'INFOSYSAPP 3', 'app_cvs/guidelinez on microsoft word.docx', 3, '2018-09-05 16:36:45.17'),
(4, 'INFOSYSAPP 4', 'app_cvs/PROPOSED OUTLINE FOR 2017 INFOSYS DIGITAL SOLUTIONS STAFF RETREAT.docx', 4, '2018-09-14 21:45:02.31'),
(5, 'INFOSYSAPP 5', 'app_cvs/CV-grace.docx', 5, '2018-10-16 15:33:26.59'),
(6, 'INFOSYSAPP 6', 'app_cvs/CV-KD career.docx', 6, '2018-10-23 08:06:34.65'),
(7, 'INFOSYSAPP 7', 'app_cvs/CV-KD career.docx', 7, '2018-11-26 09:06:05.27');

-- --------------------------------------------------------

--
-- Table structure for table `jobcodes`
--

CREATE TABLE `jobcodes` (
  `id` int(11) NOT NULL,
  `jobcode` varchar(255) DEFAULT NULL,
  `time` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2) ON UPDATE CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobcodes`
--

INSERT INTO `jobcodes` (`id`, `jobcode`, `time`) VALUES
(1, 'IDSLJob1', '2018-09-07 13:27:42.68'),
(2, 'IDSLJob2', '2018-09-07 13:28:19.11'),
(3, 'IDSLJob3', '2018-09-07 13:28:29.10');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `jobcategory` varchar(255) DEFAULT NULL,
  `desiredjobposition` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_id`, `jobcategory`, `desiredjobposition`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'Management Science', 'Strategy Developer', 1, '2018-09-05 13:43:38.44'),
(2, 'INFOSYSAPP 2', 'IT Education', 'IT Specialist', 2, '2018-09-05 14:00:31.73'),
(3, 'INFOSYSAPP 3', 'Framework Developers', 'Entity Framework-ASPNet', 3, '2018-09-05 16:34:28.88'),
(4, 'INFOSYSAPP 4', 'IT Education', 'Classroom Instructor', 4, '2018-09-14 21:42:24.87'),
(5, 'INFOSYSAPP 5', 'Menial Jobs', 'Cashier', 5, '2018-10-16 15:30:11.26'),
(6, 'INFOSYSAPP 6', 'IT Education', 'IT Counselor', 6, '2018-10-23 08:03:36.62'),
(7, 'INFOSYSAPP 7', 'Framework Developers', 'Android Developer', 7, '2018-11-26 09:03:52.75');

-- --------------------------------------------------------

--
-- Table structure for table `jobtable`
--

CREATE TABLE `jobtable` (
  `id` int(11) NOT NULL,
  `job_sn` int(11) DEFAULT NULL,
  `jobcategory` varchar(255) DEFAULT NULL,
  `jobtitle` varchar(255) DEFAULT NULL,
  `jobcode` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `yearsofexperience` varchar(255) DEFAULT NULL,
  `agelimit` varchar(255) DEFAULT NULL,
  `preferredgender` varchar(255) DEFAULT NULL,
  `publicationdate` varchar(255) DEFAULT NULL,
  `expiringdate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtable`
--

INSERT INTO `jobtable` (`id`, `job_sn`, `jobcategory`, `jobtitle`, `jobcode`, `qualification`, `discipline`, `yearsofexperience`, `agelimit`, `preferredgender`, `publicationdate`, `expiringdate`) VALUES
(1, 1, 'Software Engineering', 'Programmer', 'IDSLPJob1', 'BSc and HND Computer Science', 'Computer Science', '1', '25', 'Both Genders', '3rd August, 2018', '11th August, 2018'),
(2, 2, 'Management Science', 'Marketers', 'IDSLMJob1', 'B.Sc, HND, ND in Marketing, Business Admin', 'Marketing', '2', '25', 'Female', '4th August, 2018', '27th August, 2018'),
(4, 3, 'General Duties', 'Graduates', 'IDSLGJob1', 'B.Sc and HND, Computer Engineering, Computer Science and Information Technology', 'Any Discipline', '1', '22', 'Both Genders', '5th August, 2018', '31 December, 2018'),
(5, 4, 'Software Engineering', 'System Analysts', 'IDSLSAJob2', 'B.Sc., B.Tech and HND in Computer Science and Computer Engineering', 'Computer Science', '6', '28', 'Both Genders', '8th August, 2018', '29th August, 2018'),
(6, 5, 'Software Engineering', 'Web Developers', 'IDSLWDJob1', 'B.Sc and HND, Computer Engineering, Computer Science and Information Technology', 'Computer Engineering', '2', '25', 'Female', '9th August, 2018', '18th August, 2018'),
(7, 6, 'General Duties', 'Graduates', '307266', 'Others', 'Any Discipline', '1year', '24years', 'Both Genders', '2018-09-07', '2018-09-21'),
(8, 7, 'General Duties', 'Graduates', '153633', 'B.Sc/Bachelors Degree/HND', 'Others', '1year', '26years', 'Both Genders', '2018-09-07', '2018-09-21'),
(9, 8, 'General Duties', 'Student Attachment', '732352', 'B.Sc/Bachelors Degree/HND', 'Any Discipline', 'No Experience Required', '22years', 'Both Genders', '2018-09-06', '2018-09-22'),
(10, 9, 'Framework Developers', 'IOS Developer', '567522', 'Bachelor Tech', 'Computer Science', '3years', 'None', 'Both Genders', '2018-09-08', '2018-09-15'),
(11, 10, 'Framework Developers', 'IOS Developer', '325826', 'B.Sc/Bachelors Degree/HND', 'Computer Engineering', '2years', '26years', 'Male', '2018-11-12', '2018-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `personalobjective`
--

CREATE TABLE `personalobjective` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `personalobjective` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalobjective`
--

INSERT INTO `personalobjective` (`id`, `job_id`, `personalobjective`, `keyword`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', ' hardwork', 'Hard work and commitment', 1, '2018-09-05 13:47:29.70'),
(2, 'INFOSYSAPP 2', 'Creativity', 'Commitment ', 2, '2018-09-05 14:07:36.68'),
(3, 'INFOSYSAPP 3', ' Hard worker', 'Focus', 3, '2018-09-05 16:37:46.69'),
(4, 'INFOSYSAPP 4', 'Inventive mind', 'Invention', 4, '2018-09-14 21:46:15.38'),
(5, 'INFOSYSAPP 5', ' Hardworking', 'Hardwork', 5, '2018-10-16 15:35:22.97'),
(6, 'INFOSYSAPP 6', ' Commitment', 'Focus', 6, '2018-10-23 08:07:50.14'),
(7, 'INFOSYSAPP 7', ' Hardwork', 'Hardwork', 7, '2018-11-26 09:07:13.54');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `highestqualification` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `schcategory` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `graduationyear` date DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `gradedescription` varchar(255) DEFAULT NULL,
  `sess_check` int(11) DEFAULT NULL,
  `time` timestamp(2) NULL DEFAULT CURRENT_TIMESTAMP(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `job_id`, `highestqualification`, `discipline`, `schcategory`, `institution`, `graduationyear`, `grade`, `gradedescription`, `sess_check`, `time`) VALUES
(1, 'INFOSYSAPP 1', 'HND', 'Computer Science', 'Polytechnic', 'Nasarawa State Polytechnic Lafia', '2018-10-17', '3.50 - 4.00', 'DISTINCTION', 1, '2018-09-05 13:45:25.12'),
(2, 'INFOSYSAPP 2', 'HND', 'Computer Science and Networking', 'College of Education', 'Akwa Ibom State College of Education', '2017-04-19', '3.00 - 3.49', 'UPPER CREDIT', 2, '2018-09-05 14:04:36.29'),
(3, 'INFOSYSAPP 3', 'Masters', 'Electrical and Electronics Engineering', 'University', 'Enugu State University', '2015-09-15', '3.50 - 4.00', 'FIRST CLASS', 3, '2018-09-05 16:36:07.60'),
(4, 'INFOSYSAPP 4', 'Bachelor Degree', 'Welding Technology', 'Polytechnic', 'Akwa Ibom State Polytechnic', '2015-09-08', '2.50 - 2.99', 'LOWER CREDIT', 4, '2018-09-14 21:44:23.89'),
(5, 'INFOSYSAPP 5', 'HND', 'computer science', 'Polytechnic', 'Nasarawa State Polytechnic Lafia', '2018-10-17', '2.00 - 1.49', 'LOWER CREDIT', 5, '2018-10-16 15:32:38.32'),
(6, 'INFOSYSAPP 6', 'HND', 'computer science', 'Polytechnic', 'Dorben Polytechnic Abuja', '2018-10-23', '3.00 - 3.49', 'UPPER CREDIT', 6, '2018-10-23 08:05:37.03'),
(7, 'INFOSYSAPP 7', 'Bachelor Degree', 'computer science', 'University', 'University of Maiduguri', '2018-11-14', '3.00 - 3.49', 'LOWER CREDIT', 7, '2018-11-26 09:05:00.49');

-- --------------------------------------------------------

--
-- Table structure for table `register_admin`
--

CREATE TABLE `register_admin` (
  `id` int(11) NOT NULL,
  `sn` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `regdate` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_admin`
--

INSERT INTO `register_admin` (`id`, `sn`, `title`, `firstname`, `lastname`, `phone`, `email`, `gender`, `regdate`) VALUES
(1, 1, 'Analyst', 'David', 'Akpan', '07039485184', 'Chris.blake2009@yahoo.com', 'Male', '2018-08-06 03:49:40.501583'),
(2, 2, 'Bishop', 'Christian', 'David', '07033333333', 'pas.chris@gmail.com', 'Male', '2018-08-06 03:49:40.501583'),
(3, 3, 'Bishop', 'Solomon', 'Hector', '08055555555', 'hector@gmail.com', 'Male', '2018-08-06 03:49:40.501583'),
(4, 4, 'Mrs', 'Lovely', 'Christian', '09055555555', 'lovelyn@gmail.com', 'Female', '2018-08-06 03:49:40.501583'),
(5, 5, 'Mrs', 'Victoria', 'Kingsmen', '07044444444', 'mminey@gmail.com', 'Female', '2018-08-17 15:30:20.839616');

-- --------------------------------------------------------

--
-- Table structure for table `register_applicants`
--

CREATE TABLE `register_applicants` (
  `id` int(11) NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `initials` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `regdate` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_applicants`
--

INSERT INTO `register_applicants` (`id`, `job_id`, `title`, `firstname`, `lastname`, `initials`, `phone`, `email`, `nationality`, `gender`, `regdate`) VALUES
(1, '1', 'Dr', 'Christian', 'Akpan', 'F.', '07039485184', 'Chris.blake2009@yahoo.com', 'Nigerian', 'Male', '2018-09-05 13:43:15.763191'),
(2, '2', 'Analyst', 'Famous', 'Obiakor', 'G.', '07000434022', 'fidelis@yahoo.com', 'Liberian', 'Male', '2018-09-05 13:59:54.636711'),
(3, '3', 'Mr', 'Anafa', 'David', 'D.', '070666666666', 'anafa@gmail.com', 'Congolese', 'Male', '2018-09-05 16:33:25.652004'),
(4, '4', 'Engr', 'Emmanuel', 'Akpan', 'F.', '07044444444', 'emmyakpan@gmail.com', 'Cameroonian', 'Male', '2018-09-14 21:41:59.407001'),
(5, '5', 'Mr', 'Daniel', 'Dan', 'G.', '09098888888', 'danieldan@gmail.com', 'Liberian', 'Male', '2018-10-16 15:29:36.523782'),
(6, '6', 'Mr', 'Uwem', 'Ekeng', 'M.', '08183220296', 'ekeng@gmail.com', 'Liberian', 'Male', '2018-10-23 08:03:13.290685'),
(7, '7', 'Miss', 'Blessing', 'Fred', 'N.', '090909988877', 'blees@yahoo.com', 'Nigerian', 'Female', '2018-11-26 09:02:55.485065');

-- --------------------------------------------------------

--
-- Table structure for table `trialtest`
--

CREATE TABLE `trialtest` (
  `id` int(11) NOT NULL,
  `now` varchar(11) DEFAULT NULL,
  `date_t` date DEFAULT NULL,
  `time_t` timestamp(2) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trialtest`
--

INSERT INTO `trialtest` (`id`, `now`, `date_t`, `time_t`) VALUES
(1, 'Just see', '2018-09-13', '2018-09-21 03:11:11.19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicationform_tb`
--
ALTER TABLE `applicationform_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_biodataform`
--
ALTER TABLE `app_biodataform`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `app_certificates`
--
ALTER TABLE `app_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `app_passports`
--
ALTER TABLE `app_passports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `app_referee`
--
ALTER TABLE `app_referee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `careerobjective`
--
ALTER TABLE `careerobjective`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `career_workexperience`
--
ALTER TABLE `career_workexperience`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `jobcodes`
--
ALTER TABLE `jobcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`) USING BTREE;

--
-- Indexes for table `jobtable`
--
ALTER TABLE `jobtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalobjective`
--
ALTER TABLE `personalobjective`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sess_check` (`sess_check`);

--
-- Indexes for table `register_admin`
--
ALTER TABLE `register_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `register_applicants`
--
ALTER TABLE `register_applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trialtest`
--
ALTER TABLE `trialtest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicationform_tb`
--
ALTER TABLE `applicationform_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `app_biodataform`
--
ALTER TABLE `app_biodataform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `app_certificates`
--
ALTER TABLE `app_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `app_passports`
--
ALTER TABLE `app_passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `app_referee`
--
ALTER TABLE `app_referee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `careerobjective`
--
ALTER TABLE `careerobjective`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `career_workexperience`
--
ALTER TABLE `career_workexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jobcodes`
--
ALTER TABLE `jobcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jobtable`
--
ALTER TABLE `jobtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `personalobjective`
--
ALTER TABLE `personalobjective`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `register_admin`
--
ALTER TABLE `register_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `register_applicants`
--
ALTER TABLE `register_applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `trialtest`
--
ALTER TABLE `trialtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
