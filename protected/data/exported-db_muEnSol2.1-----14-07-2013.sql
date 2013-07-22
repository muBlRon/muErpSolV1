-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 14, 2013 at 09:39 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_muensolv2p1`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_academichistory`
-- 

CREATE TABLE `tbl_academichistory` (
  `academicHistoryID` int(11) NOT NULL auto_increment,
  `ach_degree` enum('S.S.C.','H.S.C','DAKHIL','ALIM','GCSE','GCE','Graduation','Post Graduation','Deploma','Post Graduatoin Deploma') collate utf8_unicode_ci default NULL,
  `ach_group` enum('Science','Humanities','Commerce') collate utf8_unicode_ci default NULL,
  `ach_institution` varchar(50) collate utf8_unicode_ci default NULL,
  `ach_board` enum('Sylhet','Comilla','Dhaka','Chittagong','Rajshahi','Jessore','Barisal','Madrasah','Technical','EDEXCEL') collate utf8_unicode_ci default NULL,
  `ach_passingYear` smallint(6) default NULL,
  `ach_result` float default NULL,
  `ach_remarks` text collate utf8_unicode_ci,
  `personID` int(11) NOT NULL,
  PRIMARY KEY  (`academicHistoryID`),
  KEY `FK_AcademicHistory_Person` (`personID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `tbl_academichistory`
-- 

INSERT INTO `tbl_academichistory` (`academicHistoryID`, `ach_degree`, `ach_group`, `ach_institution`, `ach_board`, `ach_passingYear`, `ach_result`, `ach_remarks`, `personID`) VALUES 
(1, '', '', 'Metropolitan University', '', 2011, 5, 'ok', 1),
(2, '', '', '', '', NULL, NULL, NULL, 151),
(3, '', '', '', '', NULL, NULL, NULL, 152),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(5, 'S.S.C.', 'Science', 'Sylher Govet', 'Comilla', 2006, 2.2, NULL, 155),
(6, 'H.S.C', 'Humanities', 'mc', 'Comilla', 2008, 2.5, NULL, 155),
(7, 'S.S.C.', 'Science', 'hate kori', 'Chittagong', 2006, 2.2, NULL, 158),
(8, 'H.S.C', 'Humanities', 'modon mohon college', 'Comilla', 2008, 3.5, NULL, 158),
(9, 'S.S.C.', 'Humanities', 'Sylher Govet', 'Sylhet', 2006, 2.2, NULL, 159),
(10, 'H.S.C', 'Science', 'mc', 'Comilla', 2008, 4.5, NULL, 159);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_administration`
-- 

CREATE TABLE `tbl_administration` (
  `administrationCode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `adm_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `adm_location` varchar(300) collate utf8_unicode_ci default NULL,
  `adm_remarks` text collate utf8_unicode_ci,
  `adm_contactNo` varchar(25) collate utf8_unicode_ci default NULL,
  `adm_email` varchar(100) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`administrationCode`),
  UNIQUE KEY `UQ_tbl_administration_adm_name` (`adm_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_administration`
-- 

INSERT INTO `tbl_administration` (`administrationCode`, `adm_name`, `adm_location`, `adm_remarks`, `adm_contactNo`, `adm_email`) VALUES 
('Account', 'Office of the Director, Admin, Finance and Accounts', 'left side of the main lounge', '', '', 'account@metrouni.edu.bd'),
('Exam', 'Office of the Controller of Examinations', 'Farthest end of the 7th floor.', '', '', 'exam@metrouni.edu.bd'),
('IBIT', 'Institute of Business & Information Technology (IBIT)', '5th floor of Al-Hamra Shopping City, Sylhet', '', '', 'ibit@metrouni.edu.bd'),
('Library', 'Library', 'Farthest end of the 7th floor.', '', '', 'Library@metrouni.edu.bd'),
('OVC', 'Office of the Vice Chancellor', 'Main Lounge ', '', '', 'vc@metrouni.edu.bd'),
('PAD', 'Office of the Director, Planning & Development', 'Right side of the main lounge', '', '', 'pad@metrouni.edu.bd'),
('Proctor', 'Office of the Proctor', 'Right side of the main lounge', '', '', 'proctor@metrouni.edu.bd'),
('Registry', 'Office of the Registrar:', 'Main Lounge', '', '', 'registrar@metrouni.edu.bd');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_admission`
-- 

CREATE TABLE `tbl_admission` (
  `studentID` varchar(15) collate utf8_unicode_ci NOT NULL,
  `sectionName` varchar(1) collate utf8_unicode_ci NOT NULL,
  `batchName` smallint(6) NOT NULL,
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  `adm_date` date NOT NULL,
  `adm_status` enum('0','1') collate utf8_unicode_ci default '0',
  `adm_creditTransfered` enum('0','1') collate utf8_unicode_ci default '0',
  `adm_remarks` text collate utf8_unicode_ci,
  `employeeID` int(11) default NULL,
  PRIMARY KEY  (`studentID`,`sectionName`,`batchName`,`programmeCode`),
  KEY `FK_Admission_Sections` (`sectionName`,`batchName`,`programmeCode`),
  KEY `FK_Admission_Employee` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_admission`
-- 

INSERT INTO `tbl_admission` (`studentID`, `sectionName`, `batchName`, `programmeCode`, `adm_date`, `adm_status`, `adm_creditTransfered`, `adm_remarks`, `employeeID`) VALUES 
('111-112-001', 'A', 1, '112', '2013-07-09', '0', '0', NULL, NULL),
('132-115-001', 'A', 30, '115', '2013-07-03', '0', '0', NULL, NULL),
('132-115-002', 'A', 30, '115', '2013-07-03', '0', '0', NULL, NULL),
('132-116-001', 'A', 30, '116', '2013-07-03', '0', '0', NULL, NULL),
('132-116-002', 'A', 30, '116', '2013-07-03', '0', '0', NULL, NULL),
('132-116-003', 'A', 30, '116', '2013-07-04', '0', '0', NULL, NULL),
('132-116-004', 'B', 30, '116', '2013-07-04', '0', '0', NULL, NULL),
('132-116-005', 'A', 30, '116', '2013-07-11', '0', '0', NULL, NULL),
('132-116-006', 'A', 30, '116', '2013-07-10', '0', '0', NULL, NULL),
('132-116-007', 'A', 30, '116', '2013-07-11', '0', '0', NULL, NULL),
('132-116-008', 'A', 30, '116', '2013-07-29', '0', '0', NULL, NULL),
('132-116-009', 'A', 30, '116', '2013-07-11', '0', '0', NULL, NULL),
('132-116-010', 'A', 30, '116', '2013-07-08', '0', '0', NULL, NULL),
('132-116-011', 'A', 30, '116', '2013-07-14', '0', '0', NULL, NULL),
('132-116-012', 'A', 30, '116', '2013-07-10', '0', '0', NULL, NULL),
('132-116-013', 'A', 30, '116', '2013-07-16', '0', '0', NULL, NULL),
('132-116-014', 'A', 30, '116', '2013-07-10', '0', '0', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_batch`
-- 

CREATE TABLE `tbl_batch` (
  `batchName` smallint(6) NOT NULL,
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  `bat_term` enum('1','2','3') collate utf8_unicode_ci NOT NULL,
  `bat_year` smallint(6) NOT NULL,
  `bat_advisor` int(11) default NULL,
  PRIMARY KEY  (`batchName`,`programmeCode`),
  KEY `FK_Batch_Programme` (`programmeCode`),
  KEY `FK_Batch_Faculty` (`bat_advisor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_batch`
-- 

INSERT INTO `tbl_batch` (`batchName`, `programmeCode`, `bat_term`, `bat_year`, `bat_advisor`) VALUES 
(1, '112', '1', 2011, NULL),
(1, '117', '1', 2012, NULL),
(2, '112', '2', 2011, NULL),
(2, '117', '2', 2012, NULL),
(3, '112', '3', 2011, NULL),
(3, '117', '3', 2012, NULL),
(4, '112', '1', 2012, NULL),
(4, '117', '1', 2013, NULL),
(5, '112', '2', 2012, NULL),
(5, '117', '2', 2013, NULL),
(6, '112', '3', 2012, NULL),
(7, '112', '1', 2013, NULL),
(8, '112', '2', 2013, NULL),
(8, '121', '2', 2010, NULL),
(9, '121', '3', 2010, NULL),
(10, '121', '1', 2011, NULL),
(12, '121', '3', 2011, NULL),
(12, '131', '2', 2012, NULL),
(13, '121', '1', 2012, NULL),
(13, '131', '3', 2012, NULL),
(14, '121', '2', 2012, NULL),
(15, '121', '3', 2012, NULL),
(16, '121', '1', 2013, NULL),
(17, '121', '2', 2013, NULL),
(18, '115', '2', 2009, NULL),
(18, '116', '2', 2009, NULL),
(19, '115', '3', 2009, NULL),
(19, '116', '3', 2009, NULL),
(20, '115', '1', 2010, NULL),
(20, '116', '1', 2010, NULL),
(20, '119', '2', 2013, NULL),
(21, '115', '2', 2010, NULL),
(21, '116', '2', 2010, NULL),
(22, '115', '3', 2010, NULL),
(22, '116', '3', 2010, NULL),
(23, '115', '1', 2011, NULL),
(23, '116', '1', 2011, NULL),
(24, '115', '2', 2011, NULL),
(24, '116', '2', 2011, NULL),
(25, '115', '3', 2011, NULL),
(25, '116', '3', 2011, NULL),
(25, '126', '1', 2012, NULL),
(26, '115', '1', 2012, NULL),
(26, '116', '1', 2012, NULL),
(26, '126', '2', 2012, NULL),
(27, '115', '2', 2012, NULL),
(27, '116', '2', 2012, NULL),
(27, '126', '3', 2012, NULL),
(28, '115', '3', 2012, NULL),
(28, '116', '3', 2012, NULL),
(28, '126', '1', 2013, NULL),
(29, '115', '1', 2013, NULL),
(29, '116', '1', 2013, NULL),
(29, '126', '2', 2013, NULL),
(30, '115', '2', 2013, NULL),
(30, '116', '2', 2013, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_department`
-- 

CREATE TABLE `tbl_department` (
  `dpt_code` varchar(10) collate utf8_unicode_ci NOT NULL,
  `dpt_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `dpt_location` varchar(350) collate utf8_unicode_ci default NULL,
  `dpt_contactNo` varchar(15) collate utf8_unicode_ci default NULL,
  `dpt_email` varchar(100) collate utf8_unicode_ci default NULL,
  `dpt_remarks` text collate utf8_unicode_ci,
  `dpt_head` int(11) default NULL,
  `dpt_headStatus` enum('Head','Head in Charge') collate utf8_unicode_ci default 'Head',
  `departmentID` int(11) NOT NULL auto_increment,
  `schoolID` int(11) NOT NULL,
  PRIMARY KEY  (`departmentID`),
  UNIQUE KEY `UQ_tbl_department_dpt_code` (`dpt_code`),
  UNIQUE KEY `UQ_tbl_department_dpt_name` (`dpt_name`),
  KEY `FK_Department_School` (`schoolID`),
  KEY `FK_Department_Faculty` (`dpt_head`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `tbl_department`
-- 

INSERT INTO `tbl_department` (`dpt_code`, `dpt_name`, `dpt_location`, `dpt_contactNo`, `dpt_email`, `dpt_remarks`, `dpt_head`, `dpt_headStatus`, `departmentID`, `schoolID`) VALUES 
('CSE', 'Department of Computer Science & Engineering', NULL, NULL, NULL, 'Bismillah Hir Rahmanir Rahim', NULL, 'Head', 1, 1),
('EEE', 'Department of Electronic & Electrical Engineering', NULL, NULL, NULL, 'Bismillah Hir Rahmanir Rahim', NULL, 'Head', 2, 1),
('BA', 'Department of Business Administration', NULL, NULL, NULL, 'Has Three Promgammes', NULL, 'Head', 3, 2),
('ENG', 'Department of English', NULL, NULL, NULL, 'Has three programmes', NULL, 'Head', 4, 3),
('LJ', 'Department of Law & Justice', NULL, NULL, NULL, 'Has four Programmes', NULL, 'Head', 5, 4);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_employee`
-- 

CREATE TABLE `tbl_employee` (
  `employeeID` int(11) NOT NULL,
  `emp_designations` varchar(25) collate utf8_unicode_ci NOT NULL,
  `emp_suppervisoryRole` varchar(25) collate utf8_unicode_ci default NULL,
  `emp_joining` date NOT NULL,
  `emp_leave` date default NULL,
  `emp_loginName` varchar(50) collate utf8_unicode_ci default NULL,
  `emp_password` varchar(255) collate utf8_unicode_ci default NULL,
  `emp_accessLevel` enum('0','1','2','3') collate utf8_unicode_ci default NULL,
  `administrationCode` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`employeeID`),
  UNIQUE KEY `emp_loginName` (`emp_loginName`),
  KEY `FK_employee_administration` (`administrationCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_employee`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_examination`
-- 

CREATE TABLE `tbl_examination` (
  `examinationID` int(11) NOT NULL auto_increment,
  `exm_type` enum('0','1','3','4') collate utf8_unicode_ci default NULL,
  `exm_examTerm` enum('1','2','3') collate utf8_unicode_ci default NULL,
  `exm_examYear` smallint(6) NOT NULL,
  `exm_startDate` date default NULL,
  `exm_endDate` date default NULL,
  `exm_resultDate` date default NULL,
  `markingSchameID` int(11) default NULL,
  PRIMARY KEY  (`examinationID`),
  UNIQUE KEY `UQ_Examination_exm_type` (`exm_type`,`exm_examTerm`,`exm_examYear`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbl_examination`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_exammarks`
-- 

CREATE TABLE `tbl_exammarks` (
  `examinationID` int(11) NOT NULL,
  `moduleRegistrationID` int(11) NOT NULL,
  `emr_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `emr_mark` float default NULL,
  `facultyID` int(11) default NULL,
  PRIMARY KEY  (`examinationID`,`moduleRegistrationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_exammarks`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_examregistration`
-- 

CREATE TABLE `tbl_examregistration` (
  `examinationID` int(11) NOT NULL,
  `moduleRegistrationID` int(11) NOT NULL,
  `exr_date` timestamp NULL default CURRENT_TIMESTAMP,
  `exr_issueAdmit` enum('0','1') collate utf8_unicode_ci default NULL,
  `employeeID` int(11) default NULL,
  PRIMARY KEY  (`examinationID`,`moduleRegistrationID`),
  UNIQUE KEY `UQ_tbl_examRegistration_examinationID` (`examinationID`,`moduleRegistrationID`),
  KEY `FK_ExamRegistration_moduleRegistration` (`moduleRegistrationID`),
  KEY `FK_ExamRegistration_Employee` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_examregistration`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_faculty`
-- 

CREATE TABLE `tbl_faculty` (
  `facultyID` int(11) NOT NULL,
  `fac_designation` enum('Teachers Assistant','Lecturer','Senior Lecturer','Assistant Professor','Associate Professor','Professor') collate utf8_unicode_ci default 'Lecturer',
  `fac_position` varchar(25) collate utf8_unicode_ci default NULL,
  `fac_joining` date NOT NULL,
  `fac_leave` date default NULL,
  `fac_loginName` varchar(50) collate utf8_unicode_ci default NULL,
  `fac_password` varchar(255) collate utf8_unicode_ci default NULL,
  `fac_accessLevel` enum('0','1','2','3') collate utf8_unicode_ci default '0',
  `departmentID` int(11) default NULL,
  PRIMARY KEY  (`facultyID`),
  UNIQUE KEY `fac_loginName` (`fac_loginName`),
  KEY `FK_Faculty_Department` (`departmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_faculty`
-- 

INSERT INTO `tbl_faculty` (`facultyID`, `fac_designation`, `fac_position`, `fac_joining`, `fac_leave`, `fac_loginName`, `fac_password`, `fac_accessLevel`, `departmentID`) VALUES 
(1, 'Lecturer', '', '0000-00-00', '0000-00-00', 'a', '123456', '0', 4),
(2, 'Lecturer', '', '0000-00-00', '0000-00-00', 'sa', '123456', '0', 4);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_jobexperiance`
-- 

CREATE TABLE `tbl_jobexperiance` (
  `jobExperianceID` int(11) NOT NULL auto_increment,
  `joe_employer` varchar(200) collate utf8_unicode_ci default NULL,
  `joe_address` varchar(300) collate utf8_unicode_ci default NULL,
  `joe_position` varchar(50) collate utf8_unicode_ci default NULL,
  `joe_startDate` date default NULL,
  `joe_endDate` date default NULL,
  `joe_contact` varchar(15) collate utf8_unicode_ci default NULL,
  `personID` int(11) NOT NULL,
  PRIMARY KEY  (`jobExperianceID`),
  KEY `FK_JobExperiance_Person` (`personID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tbl_jobexperiance`
-- 

INSERT INTO `tbl_jobexperiance` (`jobExperianceID`, `joe_employer`, `joe_address`, `joe_position`, `joe_startDate`, `joe_endDate`, `joe_contact`, `personID`) VALUES 
(1, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_markingschame`
-- 

CREATE TABLE `tbl_markingschame` (
  `markingSchameID` int(11) NOT NULL,
  `mrs_versionNo` varchar(10) collate utf8_unicode_ci NOT NULL,
  `mrs_attendance` smallint(6) NOT NULL,
  `mrs_classTest` smallint(6) NOT NULL,
  `mrs_midTerm` smallint(6) NOT NULL,
  `mrs_final` smallint(6) NOT NULL,
  `mrs_startTerm` enum('1','2','3') collate utf8_unicode_ci default NULL,
  `mrs_startYear` smallint(6) NOT NULL,
  `mrs_endTerm` enum('1','2','3') collate utf8_unicode_ci default NULL,
  `mrs_endYear` smallint(6) default NULL,
  `mrs_gradingSchemeName` varchar(50) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`markingSchameID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_markingschame`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_module`
-- 

CREATE TABLE `tbl_module` (
  `moduleCode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `syllabusCode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `mod_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `mod_shortName` varchar(10) collate utf8_unicode_ci default NULL,
  `mod_creditHour` enum('1','1.5','2','2.5','3','3.5','4') collate utf8_unicode_ci NOT NULL default '3',
  `mod_type` enum('0','1') collate utf8_unicode_ci default '0',
  `mod_labIncluded` enum('0','1') collate utf8_unicode_ci default '0',
  `mod_mejor` enum('0','1') collate utf8_unicode_ci default '0',
  `mod_group` varchar(50) collate utf8_unicode_ci default NULL,
  `mod_sequence` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`moduleCode`),
  KEY `FK_Module_Syllabus` (`syllabusCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_module`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_moduleregistration`
-- 

CREATE TABLE `tbl_moduleregistration` (
  `moduleRegistrationID` int(11) NOT NULL,
  `termAdmissionID` int(11) NOT NULL,
  `offeredModuleID` int(11) NOT NULL,
  `reg_date` timestamp NULL default CURRENT_TIMESTAMP,
  `reg_type` enum('0','1','2') collate utf8_unicode_ci default NULL,
  `reg_attendence` float default NULL,
  `reg_classTest` float default NULL,
  `reg_midTerm` float default NULL,
  `markingSchameID` int(11) NOT NULL,
  `facultyID` int(11) default NULL,
  PRIMARY KEY  (`moduleRegistrationID`),
  UNIQUE KEY `UQ_tbl_moduleRegistration_termAdmissionID` (`termAdmissionID`,`offeredModuleID`),
  KEY `FK_ModuleRegistration_Faculty` (`facultyID`),
  KEY `FK_ModuleRegistration_MarkingSchame` (`markingSchameID`),
  KEY `FK_ModuleRegistration_OfferedModule` (`offeredModuleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_moduleregistration`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_offeredmodule`
-- 

CREATE TABLE `tbl_offeredmodule` (
  `offeredModuleID` int(11) NOT NULL,
  `moduleCode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `sectionName` varchar(1) collate utf8_unicode_ci NOT NULL,
  `batchName` smallint(6) NOT NULL,
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  `facultyID` int(11) default NULL,
  `ofm_term` enum('1','2','3') collate utf8_unicode_ci default NULL,
  `ofm_year` smallint(6) NOT NULL,
  PRIMARY KEY  (`offeredModuleID`),
  UNIQUE KEY `UQ_tbl_offeredModule_moduleCode` (`moduleCode`,`sectionName`,`batchName`,`programmeCode`),
  KEY `FK_OfferedModule_Faculty` (`facultyID`),
  KEY `FK_OfferedModule_Sections` (`sectionName`,`batchName`,`programmeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_offeredmodule`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_person`
-- 

CREATE TABLE `tbl_person` (
  `personID` int(11) NOT NULL auto_increment,
  `per_title` enum('Mr.','Ms.','Mrs.','Dr.','Prof.','Engr.','Adv.') collate utf8_unicode_ci default 'Mr.',
  `per_firstName` varchar(50) collate utf8_unicode_ci NOT NULL,
  `per_lastName` varchar(50) collate utf8_unicode_ci NOT NULL,
  `per_gender` enum('male','female') collate utf8_unicode_ci default 'male',
  `per_dateofBirth` date NOT NULL,
  `per_bloodGroup` enum('O+','A+','B+','AB+','O-','A-','B-','AB-') collate utf8_unicode_ci default NULL,
  `per_nationality` varchar(20) collate utf8_unicode_ci NOT NULL default 'Bangladeshi',
  `per_fathersName` varchar(100) collate utf8_unicode_ci NOT NULL,
  `per_mothersName` varchar(100) collate utf8_unicode_ci NOT NULL,
  `per_spouseName` varchar(100) collate utf8_unicode_ci default NULL,
  `per_parmanentAddress` varchar(300) collate utf8_unicode_ci default NULL,
  `per_postCode` varchar(10) collate utf8_unicode_ci default NULL,
  `per_telephone` varchar(15) collate utf8_unicode_ci default NULL,
  `per_mobile` varchar(15) collate utf8_unicode_ci NOT NULL,
  `per_email` varchar(100) collate utf8_unicode_ci default NULL,
  `per_presentAddress` varchar(300) collate utf8_unicode_ci default NULL,
  `per_maritulStatus` enum('single','married') collate utf8_unicode_ci default 'single',
  `per_criminalConviction` enum('0','1') collate utf8_unicode_ci NOT NULL default '0',
  `per_convictionDetails` longtext collate utf8_unicode_ci,
  `per_entryDate` timestamp NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`personID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=160 ;

-- 
-- Dumping data for table `tbl_person`
-- 

INSERT INTO `tbl_person` (`personID`, `per_title`, `per_firstName`, `per_lastName`, `per_gender`, `per_dateofBirth`, `per_bloodGroup`, `per_nationality`, `per_fathersName`, `per_mothersName`, `per_spouseName`, `per_parmanentAddress`, `per_postCode`, `per_telephone`, `per_mobile`, `per_email`, `per_presentAddress`, `per_maritulStatus`, `per_criminalConviction`, `per_convictionDetails`, `per_entryDate`) VALUES 
(1, 'Mr.', 'a', 'b', 'male', '0000-00-00', 'O+', 'Bangladeshi', 'a', 'b', '', '', '', '', '0111111', '', '', 'single', '0', '', '0000-00-00 00:00:00'),
(2, 'Mr.', 'aa', 'ab', 'male', '0000-00-00', 'O+', 'Bangladeshi', 'aa', 'sa', '', '', '', '', '00011', '', '', 'single', '0', '', '0000-00-00 00:00:00'),
(3, 'Mr.', 'yy', 'xx', 'male', '1989-07-03', 'A-', 'Bangladeshi', 'xx', 'xx', NULL, NULL, NULL, NULL, '', NULL, NULL, 'single', '0', NULL, '2013-07-03 18:23:35'),
(4, 'Mr.', 'hh', 'jj', 'male', '1988-07-03', 'B+', 'Bangladeshi', 'hh', 'mm', NULL, NULL, NULL, NULL, '', NULL, NULL, 'single', '0', NULL, '2013-07-03 18:25:48'),
(5, 'Ms.', 'gg', 'hh', 'female', '2013-07-04', 'A+', 'Bangladeshi', 'ff', 'mm', NULL, NULL, NULL, NULL, '0812', NULL, NULL, 'single', '0', NULL, '2013-07-04 11:28:40'),
(6, 'Mr.', 'mm', 'nn', 'male', '2013-07-01', 'B+', 'Bangladeshi', 'fff', 'mmm', NULL, NULL, NULL, NULL, '0871', NULL, NULL, 'single', '0', NULL, '2013-07-04 12:25:11'),
(7, 'Mr.', 'a', 'b', 'male', '1989-07-09', 'B+', 'Bangladeshi', 'c', 'd', '', 'f', 'g', '00', '01711444789', 'ok@gmail.com', 'e', 'single', '0', '', '2013-07-11 14:44:53'),
(149, 'Prof.', 'x', 'x', 'male', '2013-07-02', 'A+', 'Bangladeshi', 'x', 'x', '', 'x', '0', '', '00', '', 'x', 'single', '0', '', '2013-07-13 15:52:12'),
(150, 'Ms.', 'a', 'a', 'male', '2013-07-11', 'B+', 'Bangladeshi', 'a', 'a', '', 'a', 'a', '', '00', '', 'a', 'single', '0', '', '2013-07-13 17:32:16'),
(151, 'Mr.', 'b', 'b', 'male', '2013-07-03', 'B+', 'Bangladeshi', 'b', 'b', '', 'b', 'b', '', '0', '', 'b', 'single', '0', '', '2013-07-13 17:37:45'),
(152, 'Ms.', 'z', 'z', 'male', '2013-07-03', 'B+', 'Bangladeshi', 'z', 'z', '', 'z', 'z', '', '000', '', 'z', 'single', '0', '', '2013-07-13 18:06:32'),
(153, 'Mr.', 'c', 'c', 'male', '2013-07-03', 'B+', 'Bangladeshi', 'c', 'c', 'c', 'c', 'c', '', '00', '', 'c', 'single', '0', '', '2013-07-14 14:09:55'),
(154, 'Mr.', 'z', 'z', 'male', '2013-07-16', 'AB+', 'Bangladeshi', 'z', 'z', '', 'z', 'z', '', '00', '', 'z', 'single', '0', '', '2013-07-14 14:13:39'),
(155, 'Mr.', 'm', 'm', 'male', '2013-07-14', 'B+', 'Bangladeshi', 'm', 'm', 'm', 'm', 'm', '', '000', '', 'm', 'single', '0', '', '2013-07-14 14:19:09'),
(156, 'Mr.', 'a', 'a', 'male', '2013-07-10', 'B+', 'Bangladeshi', 'a', 'a', '', 'a', 'a', '', '000', '', 'a', 'single', '0', '', '2013-07-14 14:24:22'),
(157, 'Mr.', 'x', 'x', 'male', '2013-07-03', 'AB+', 'Bangladeshi', 'x', 'x', '', 'x', 'x', '', '00', '', 'x', 'single', '0', '', '2013-07-14 14:32:47'),
(158, 'Mr.', 'r', 'r', 'male', '2013-07-11', 'O+', 'japanis', 'r', 'r', '', 'r', 'r', '', '000', '', 'r', 'single', '0', '', '2013-07-14 14:36:39'),
(159, 'Mr.', 'sdf', 'ewe', 'male', '2013-07-11', 'A+', 'Bangladeshi', 'qw', 'qw', '', 'qw', 'qw', '', '234', '', 'sdfsdfq', 'single', '0', '', '2013-07-14 15:35:11');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_programme`
-- 

CREATE TABLE `tbl_programme` (
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  `pro_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `pro_shortName` varchar(20) collate utf8_unicode_ci NOT NULL,
  `pro_totalTerms` int(11) NOT NULL,
  `pro_startTerm` enum('1','2','3') collate utf8_unicode_ci NOT NULL,
  `pro_startYear` smallint(6) NOT NULL,
  `pro_remarks` text collate utf8_unicode_ci,
  `pro_type` enum('undergraduate','postgraduate','deploma') collate utf8_unicode_ci default 'undergraduate',
  `pro_medium` enum('English','Bangla','Bilingual') collate utf8_unicode_ci default 'English',
  `departmentID` int(11) NOT NULL,
  PRIMARY KEY  (`programmeCode`),
  KEY `FK_Programme_Department` (`departmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_programme`
-- 

INSERT INTO `tbl_programme` (`programmeCode`, `pro_name`, `pro_shortName`, `pro_totalTerms`, `pro_startTerm`, `pro_startYear`, `pro_remarks`, `pro_type`, `pro_medium`, `departmentID`) VALUES 
('112', 'B.Sc. Engineering in Computer Science and Engineering [EVE]', 'CSE[eve]', 9, '1', 2011, 'Bismillah Hir Rahmanir Rahim', 'undergraduate', 'English', 1),
('113', 'LL.B. Honours', 'L.L.B.(Hons)', 12, '3', 2005, '', 'undergraduate', 'English', 5),
('114', 'B.A. Honours in English', 'Eng(Hons)', 12, '1', 2005, '', 'undergraduate', 'English', 4),
('115', 'B.Sc. Engineering in Computer Science and Engineering ', 'CSE', 12, '3', 2003, 'Bismillah Hir Rahmanir Rahim\r\n\r\n', 'undergraduate', 'English', 1),
('116', 'Bachelor of Business Administration', 'B.B.A.', 12, '3', 2003, '', 'undergraduate', 'English', 3),
('117', 'B.Sc. Honours in Computing & Information Systems ', 'CIS', 12, '1', 2012, '', 'undergraduate', 'English', 1),
('118', 'B.Sc. Engineering in Electronic & Electrical Engineering', 'EEE', 12, '3', 2004, '', 'undergraduate', 'English', 2),
('119', 'B.Sc. Engineering in Electronic & Electrical Engineering [EVE]', 'EEE[eve]', 12, '1', 2007, '', 'undergraduate', 'English', 2),
('121', 'Master of Business Administration [ Regular ]', 'M.B.A.[Regular]', 3, '1', 2008, '', 'postgraduate', 'English', 3),
('122', 'LL.B. (Preliminary)', 'L.L.B.(pre)', 3, '1', 2006, '', 'undergraduate', 'Bilingual', 5),
('123', 'LL.B. (Final)', 'L.L.B.(Final)', 3, '1', 2007, '', 'undergraduate', 'Bilingual', 5),
('126', 'Master of Business Administration [General]', 'M.B.A.[General]', 5, '1', 2004, '', 'postgraduate', 'English', 3),
('127', 'M.A. in English (Preliminary & Final)', 'ENG(pre)', 0, '2', 2006, '', 'postgraduate', 'English', 4),
('128', 'M.A. in English (Final)', 'ENG(Final)', 3, '2', 2005, '', 'postgraduate', 'English', 4),
('131', 'M.Sc. in Management Information System', 'MS.M.I.S.', 3, '3', 2008, '', 'postgraduate', 'English', 1),
('132', 'LL.M. 1 Year Programme for LL.B. Honours Graduate', 'L.L.M.(1year)', 3, '1', 2010, '', 'postgraduate', 'English', 5),
('133', 'LL.M. 2 Year Programme for LL.B. Pass Graduate', 'L.L.M.(2years)', 6, '2', 2012, '', 'postgraduate', 'Bilingual', 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_school`
-- 

CREATE TABLE `tbl_school` (
  `sch_code` varchar(10) collate utf8_unicode_ci NOT NULL,
  `sch_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `sch_remarks` text collate utf8_unicode_ci,
  `sch_dean` int(11) default NULL,
  `sch_deanStatus` enum('Dean','Dean in Charge') collate utf8_unicode_ci default 'Dean',
  `schoolID` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`schoolID`),
  UNIQUE KEY `UQ_tbl_school_sch_code` (`sch_code`),
  UNIQUE KEY `UQ_tbl_school_sch_name` (`sch_name`),
  KEY `FK_School_Faculty` (`sch_dean`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `tbl_school`
-- 

INSERT INTO `tbl_school` (`sch_code`, `sch_name`, `sch_remarks`, `sch_dean`, `sch_deanStatus`, `schoolID`) VALUES 
('SoS', 'School of Science', 'Bismillah Hir Rahman Nir Raheem\r\n\r\nschool of science has two departments. \r\n\r\n', NULL, 'Dean in Charge', 1),
('SoB', 'School of Business', '', NULL, 'Dean in Charge', 2),
('SoH', ' School of Humanities & Social Sciences', 'Has one Department with three programmes', NULL, 'Dean', 3),
('SoL', ' School of Law', 'Has one Department with four Programmes ', NULL, 'Dean', 4);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_section`
-- 

CREATE TABLE `tbl_section` (
  `sectionName` varchar(1) collate utf8_unicode_ci NOT NULL,
  `batchName` smallint(6) NOT NULL,
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  `sec_startDate` date NOT NULL,
  `sec_startId` smallint(3) NOT NULL,
  `sec_endId` smallint(3) default NULL,
  `sec_remarks` text collate utf8_unicode_ci,
  PRIMARY KEY  (`sectionName`,`batchName`,`programmeCode`),
  KEY `FK_Sections_Batch` (`batchName`,`programmeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_section`
-- 

INSERT INTO `tbl_section` (`sectionName`, `batchName`, `programmeCode`, `sec_startDate`, `sec_startId`, `sec_endId`, `sec_remarks`) VALUES 
('A', 1, '112', '2012-01-17', 1, 50, NULL),
('A', 1, '117', '2012-01-17', 1, 50, NULL),
('A', 2, '112', '2012-01-17', 1, 50, NULL),
('A', 2, '117', '2012-01-17', 1, 50, NULL),
('A', 3, '112', '2012-01-17', 1, 50, NULL),
('A', 3, '117', '2012-01-17', 1, 50, NULL),
('A', 4, '112', '2012-01-17', 1, 50, NULL),
('A', 4, '117', '2012-01-17', 1, 50, NULL),
('A', 5, '112', '2012-01-17', 1, 50, NULL),
('A', 5, '117', '2012-01-17', 1, 50, NULL),
('A', 6, '112', '2012-01-17', 1, 50, NULL),
('A', 7, '112', '2012-01-17', 1, 50, NULL),
('A', 8, '112', '2012-01-17', 1, 50, NULL),
('A', 12, '131', '2012-01-17', 1, 50, NULL),
('A', 13, '131', '2012-01-17', 1, 50, NULL),
('A', 18, '115', '2012-01-17', 1, 50, NULL),
('A', 18, '116', '2012-01-17', 1, 50, NULL),
('A', 19, '115', '2012-01-17', 1, 50, NULL),
('A', 19, '116', '2012-01-17', 1, 50, NULL),
('A', 20, '115', '2012-01-17', 1, 50, NULL),
('A', 20, '116', '2012-01-17', 1, 50, NULL),
('A', 20, '119', '0000-00-00', 0, NULL, NULL),
('A', 21, '115', '2012-01-17', 1, 50, NULL),
('A', 21, '116', '2012-01-17', 1, 50, NULL),
('A', 22, '115', '2012-01-17', 1, 50, NULL),
('A', 22, '116', '2012-01-17', 1, 50, NULL),
('A', 23, '115', '2012-01-17', 1, 50, NULL),
('A', 23, '116', '2012-01-17', 1, 50, NULL),
('A', 24, '115', '2012-01-17', 1, 50, NULL),
('A', 24, '116', '2012-01-17', 1, 50, NULL),
('A', 25, '115', '2012-01-17', 1, 50, NULL),
('A', 25, '116', '2012-01-17', 1, 50, NULL),
('A', 26, '115', '2012-01-17', 1, 50, NULL),
('A', 26, '116', '2012-01-17', 1, 50, NULL),
('A', 27, '115', '2012-01-17', 1, 50, NULL),
('A', 27, '116', '2012-01-17', 1, 50, NULL),
('A', 28, '115', '2012-01-17', 1, 50, NULL),
('A', 28, '116', '2012-01-17', 1, 50, NULL),
('A', 29, '115', '2012-01-17', 1, 50, NULL),
('A', 29, '116', '2012-01-17', 1, 50, NULL),
('A', 30, '115', '2012-01-17', 1, 50, NULL),
('A', 30, '116', '2012-01-17', 1, 50, NULL),
('B', 30, '116', '2013-07-04', 51, 100, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_student`
-- 

CREATE TABLE `tbl_student` (
  `studentID` varchar(15) collate utf8_unicode_ci NOT NULL,
  `personID` int(11) NOT NULL,
  `stu_academicTerm` enum('1','2','3') collate utf8_unicode_ci NOT NULL default '1',
  `stu_academicYear` smallint(6) NOT NULL,
  `stu_testDate` date default NULL,
  `stu_totalScore` float default NULL,
  `stu_optainedScore` float default NULL,
  `stu_conditions` text collate utf8_unicode_ci,
  `stu_previousID` varchar(11) collate utf8_unicode_ci default NULL,
  `stu_previousDegree` varchar(100) collate utf8_unicode_ci default NULL,
  `stu_guardiansName` varchar(100) collate utf8_unicode_ci default NULL,
  `stu_guardiansAddress` text collate utf8_unicode_ci,
  `stu_guardiansMobile` varchar(15) collate utf8_unicode_ci default NULL,
  `stu_financialSource` varchar(10) collate utf8_unicode_ci default NULL,
  `stu_financialSourceDescription` varchar(300) collate utf8_unicode_ci default NULL,
  `employeeID` int(11) default NULL,
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`studentID`),
  KEY `FK_Student_Employee` (`employeeID`),
  KEY `FK_Student_Person` (`personID`),
  KEY `FK_Student_Programme` (`programmeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_student`
-- 

INSERT INTO `tbl_student` (`studentID`, `personID`, `stu_academicTerm`, `stu_academicYear`, `stu_testDate`, `stu_totalScore`, `stu_optainedScore`, `stu_conditions`, `stu_previousID`, `stu_previousDegree`, `stu_guardiansName`, `stu_guardiansAddress`, `stu_guardiansMobile`, `stu_financialSource`, `stu_financialSourceDescription`, `employeeID`, `programmeCode`) VALUES 
('111-112-001', 159, '1', 2011, NULL, NULL, NULL, '', '', '', 'asdas', 'ewer', '1212312', NULL, NULL, NULL, '112'),
('132-115-001', 1, '2', 2013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '115'),
('132-115-002', 2, '2', 2013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '115'),
('132-116-001', 3, '2', 2013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '116'),
('132-116-002', 4, '2', 2013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '116'),
('132-116-003', 5, '2', 2013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '116'),
('132-116-004', 6, '2', 2013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '116'),
('132-116-005', 7, '2', 2013, NULL, NULL, NULL, 'k', '', '', 'h', 'i', '00', NULL, NULL, NULL, '116'),
('132-116-006', 149, '2', 2013, NULL, NULL, NULL, '', '', '', 'k', 'k', '00', NULL, NULL, NULL, '116'),
('132-116-007', 150, '2', 2013, NULL, NULL, NULL, '', '', 'B.Sc. Engineering in Electronic & Electrical Engineering', 'a', 'a', '00', NULL, NULL, NULL, '116'),
('132-116-008', 151, '2', 2013, NULL, NULL, NULL, '', '', 'B.A. Honours in English', 'm', 'm', '0', NULL, NULL, NULL, '116'),
('132-116-009', 152, '2', 2013, NULL, NULL, NULL, '', '', '', 'z', 'z', '0', NULL, NULL, NULL, '116'),
('132-116-010', 154, '2', 2013, NULL, NULL, NULL, '', '', '', 'z', 'z', '00', NULL, NULL, NULL, '116'),
('132-116-011', 155, '2', 2013, NULL, NULL, NULL, '', '', '', 'm', 'm', '00', NULL, NULL, NULL, '116'),
('132-116-012', 156, '2', 2013, NULL, NULL, NULL, 'a', '', '', 'a', 'a', '00', NULL, NULL, NULL, '116'),
('132-116-013', 157, '2', 2013, NULL, NULL, NULL, '', '', '', 'x', 'x', '00', NULL, NULL, NULL, '116'),
('132-116-014', 158, '2', 2013, NULL, NULL, NULL, '', '', '', 'r', 'r', '00', NULL, NULL, NULL, '116');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_syllabus`
-- 

CREATE TABLE `tbl_syllabus` (
  `syllabusCode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  `syl_version` float NOT NULL,
  `syl_startTerm` enum('1','2','3') collate utf8_unicode_ci default NULL,
  `syl_startYear` smallint(6) default NULL,
  `syl_endTerm` enum('1','2','3') collate utf8_unicode_ci default NULL,
  `syl_endYear` smallint(6) default NULL,
  `syl_maxCreditHour` smallint(6) NOT NULL,
  `syl_description` longtext collate utf8_unicode_ci,
  `syl_minCGPA` float NOT NULL,
  `syl_maxCGPA` float NOT NULL,
  `syl_approvedDate` date NOT NULL,
  PRIMARY KEY  (`syllabusCode`),
  KEY `programmeCode` (`programmeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_syllabus`
-- 

INSERT INTO `tbl_syllabus` (`syllabusCode`, `programmeCode`, `syl_version`, `syl_startTerm`, `syl_startYear`, `syl_endTerm`, `syl_endYear`, `syl_maxCreditHour`, `syl_description`, `syl_minCGPA`, `syl_maxCGPA`, `syl_approvedDate`) VALUES 
('CIS-V1', '117', 1, '2', 2013, '', 0, 164, NULL, 2, 4, '2011-06-12'),
('CSE-V1', '115', 1, '2', 2004, '', 2003, 164, NULL, 2, 4, '2004-06-03');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_termadmission`
-- 

CREATE TABLE `tbl_termadmission` (
  `termAdmissionID` int(11) NOT NULL,
  `studentId` varchar(15) collate utf8_unicode_ci NOT NULL,
  `sectionName` varchar(1) collate utf8_unicode_ci NOT NULL,
  `batchName` smallint(6) NOT NULL,
  `programmeCode` varchar(3) collate utf8_unicode_ci NOT NULL,
  `tra_term` enum('1','2','3') collate utf8_unicode_ci default NULL,
  `tra_year` smallint(6) NOT NULL,
  `tra_date` date NOT NULL,
  `employeeID` int(11) default NULL,
  PRIMARY KEY  (`termAdmissionID`),
  UNIQUE KEY `UQ_tbl_termAdmission_studentId` (`studentId`,`sectionName`,`batchName`,`programmeCode`,`tra_term`,`tra_year`),
  KEY `FK_TermAdmission_Employee` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_termadmission`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_yiimysession`
-- 

CREATE TABLE `tbl_yiimysession` (
  `id` char(32) collate utf8_unicode_ci NOT NULL,
  `expire` int(11) default NULL,
  `data` longblob,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `tbl_yiimysession`
-- 

INSERT INTO `tbl_yiimysession` (`id`, `expire`, `data`) VALUES 
('0f3efdec700b94da543fb95ddeb30f3f', 1373796130, 0x62373766306366393032356165656234396163373035626338653738303331625f5f72657475726e55726c7c733a34363a222f6d75457270536f6c56312f696e6465782e7068703f723d41646d697373696f6e2f67657441646d697373696f6e223b62373766306366393032356165656234396163373035626338653738303331625f5f69647c733a353a2261646d696e223b62373766306366393032356165656234396163373035626338653738303331625f5f6e616d657c733a353a2261646d696e223b62373766306366393032356165656234396163373035626338653738303331625f5f7374617465737c613a303a7b7d70726f436f64657c733a333a22313132223b6261744e616d657c733a313a2231223b7365634e616d657c733a313a2241223b617c733a32383a224269736d696c6c616820486972205261686d616e697220526168696d223b);

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `tbl_academichistory`
-- 
ALTER TABLE `tbl_academichistory`
  ADD CONSTRAINT `FK_AcademicHistory_Person` FOREIGN KEY (`personID`) REFERENCES `tbl_person` (`personID`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_admission`
-- 
ALTER TABLE `tbl_admission`
  ADD CONSTRAINT `FK_Admission_Employee` FOREIGN KEY (`employeeID`) REFERENCES `tbl_employee` (`employeeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Admission_Sections` FOREIGN KEY (`sectionName`, `batchName`, `programmeCode`) REFERENCES `tbl_section` (`sectionName`, `batchName`, `programmeCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Admission_Student` FOREIGN KEY (`studentID`) REFERENCES `tbl_student` (`studentID`);

-- 
-- Constraints for table `tbl_batch`
-- 
ALTER TABLE `tbl_batch`
  ADD CONSTRAINT `FK_Batch_Faculty` FOREIGN KEY (`bat_advisor`) REFERENCES `tbl_faculty` (`facultyID`),
  ADD CONSTRAINT `FK_Batch_Programme` FOREIGN KEY (`programmeCode`) REFERENCES `tbl_programme` (`programmeCode`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_department`
-- 
ALTER TABLE `tbl_department`
  ADD CONSTRAINT `FK_Department_Faculty` FOREIGN KEY (`dpt_head`) REFERENCES `tbl_faculty` (`facultyID`),
  ADD CONSTRAINT `FK_Department_School` FOREIGN KEY (`schoolID`) REFERENCES `tbl_school` (`schoolID`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_employee`
-- 
ALTER TABLE `tbl_employee`
  ADD CONSTRAINT `FK_employee_administration` FOREIGN KEY (`administrationCode`) REFERENCES `tbl_administration` (`administrationCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Employee_Person` FOREIGN KEY (`employeeID`) REFERENCES `tbl_person` (`personID`);

-- 
-- Constraints for table `tbl_exammarks`
-- 
ALTER TABLE `tbl_exammarks`
  ADD CONSTRAINT `FK_examMarks_examRegistration` FOREIGN KEY (`examinationID`, `moduleRegistrationID`) REFERENCES `tbl_examregistration` (`examinationID`, `moduleRegistrationID`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_examregistration`
-- 
ALTER TABLE `tbl_examregistration`
  ADD CONSTRAINT `FK_ExamRegistration_Employee` FOREIGN KEY (`employeeID`) REFERENCES `tbl_employee` (`employeeID`),
  ADD CONSTRAINT `FK_ExamRegistration_Examination` FOREIGN KEY (`examinationID`) REFERENCES `tbl_examination` (`examinationID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ExamRegistration_moduleRegistration` FOREIGN KEY (`moduleRegistrationID`) REFERENCES `tbl_moduleregistration` (`moduleRegistrationID`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_faculty`
-- 
ALTER TABLE `tbl_faculty`
  ADD CONSTRAINT `FK_Faculty_Department` FOREIGN KEY (`departmentID`) REFERENCES `tbl_department` (`departmentID`),
  ADD CONSTRAINT `FK_Faculty_Person` FOREIGN KEY (`facultyID`) REFERENCES `tbl_person` (`personID`);

-- 
-- Constraints for table `tbl_jobexperiance`
-- 
ALTER TABLE `tbl_jobexperiance`
  ADD CONSTRAINT `FK_JobExperiance_Person` FOREIGN KEY (`personID`) REFERENCES `tbl_person` (`personID`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_module`
-- 
ALTER TABLE `tbl_module`
  ADD CONSTRAINT `FK_Module_Syllabus` FOREIGN KEY (`syllabusCode`) REFERENCES `tbl_syllabus` (`syllabusCode`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_moduleregistration`
-- 
ALTER TABLE `tbl_moduleregistration`
  ADD CONSTRAINT `FK_ModuleRegistration_Faculty` FOREIGN KEY (`facultyID`) REFERENCES `tbl_faculty` (`facultyID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ModuleRegistration_MarkingSchame` FOREIGN KEY (`markingSchameID`) REFERENCES `tbl_markingschame` (`markingSchameID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ModuleRegistration_OfferedModule` FOREIGN KEY (`offeredModuleID`) REFERENCES `tbl_offeredmodule` (`offeredModuleID`),
  ADD CONSTRAINT `FK_ModuleRegistration_TermAdmission` FOREIGN KEY (`termAdmissionID`) REFERENCES `tbl_termadmission` (`termAdmissionID`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_offeredmodule`
-- 
ALTER TABLE `tbl_offeredmodule`
  ADD CONSTRAINT `FK_OfferedModule_Faculty` FOREIGN KEY (`facultyID`) REFERENCES `tbl_faculty` (`facultyID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OfferedModule_Module` FOREIGN KEY (`moduleCode`) REFERENCES `tbl_module` (`moduleCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OfferedModule_Sections` FOREIGN KEY (`sectionName`, `batchName`, `programmeCode`) REFERENCES `tbl_section` (`sectionName`, `batchName`, `programmeCode`);

-- 
-- Constraints for table `tbl_programme`
-- 
ALTER TABLE `tbl_programme`
  ADD CONSTRAINT `FK_Programme_Department` FOREIGN KEY (`departmentID`) REFERENCES `tbl_department` (`departmentID`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_school`
-- 
ALTER TABLE `tbl_school`
  ADD CONSTRAINT `FK_School_Faculty` FOREIGN KEY (`sch_dean`) REFERENCES `tbl_faculty` (`facultyID`);

-- 
-- Constraints for table `tbl_section`
-- 
ALTER TABLE `tbl_section`
  ADD CONSTRAINT `FK_Sections_Batch` FOREIGN KEY (`batchName`, `programmeCode`) REFERENCES `tbl_batch` (`batchName`, `programmeCode`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_student`
-- 
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `FK_Student_Employee` FOREIGN KEY (`employeeID`) REFERENCES `tbl_employee` (`employeeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Student_Person` FOREIGN KEY (`personID`) REFERENCES `tbl_person` (`personID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Student_Programme` FOREIGN KEY (`programmeCode`) REFERENCES `tbl_programme` (`programmeCode`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_syllabus`
-- 
ALTER TABLE `tbl_syllabus`
  ADD CONSTRAINT `FK_Syllabus_Programme` FOREIGN KEY (`programmeCode`) REFERENCES `tbl_programme` (`programmeCode`) ON UPDATE CASCADE;

-- 
-- Constraints for table `tbl_termadmission`
-- 
ALTER TABLE `tbl_termadmission`
  ADD CONSTRAINT `FK_TearmAdmission_Admission` FOREIGN KEY (`studentId`, `sectionName`, `batchName`, `programmeCode`) REFERENCES `tbl_admission` (`studentID`, `sectionName`, `batchName`, `programmeCode`),
  ADD CONSTRAINT `FK_TermAdmission_Employee` FOREIGN KEY (`employeeID`) REFERENCES `tbl_employee` (`employeeID`) ON UPDATE CASCADE;
  
  
  
-- execute this is command promt ----------  
DELIMITER $$
CREATE TRIGGER trg_create_section AFTER INSERT 
	ON tbl_batch
	FOR EACH ROW
	BEGIN
		INSERT INTO tbl_section
		SET  sectionName = 'A',
        batchName = NEW.batchName,
        programmeCode = NEW.programmeCode;
        
	END $$
DELIMITER ;

 
  
  
  
  
