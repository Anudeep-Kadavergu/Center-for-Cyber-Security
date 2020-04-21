-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 02:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_achievements`
--

CREATE TABLE `tbl_achievements` (
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`comment`) VALUES
('SALSHHDHSAFDFGFFGFFAGFAFGGFRFRGFFFDFGFFFFFF'),
('VFDHSVFFSDVF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_docs`
--

CREATE TABLE `tbl_docs` (
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `title` varchar(500) DEFAULT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`title`, `content`) VALUES
('Cyber Security Conference', 'Understanding the intensity and effects of growing cyber threats, Kenes Exhibitions has come up with');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `priority` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(20) DEFAULT NULL,
  `hno` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `co` varchar(200) NOT NULL,
  `faculty_id` varchar(20) DEFAULT NULL,
  `passwd` varchar(500) DEFAULT NULL,
  `proexp` varchar(10000) DEFAULT NULL,
  `admres` varchar(10000) DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`priority`, `name`, `category`, `hno`, `street`, `city`, `district`, `pin`, `state`, `phno`, `co`, `faculty_id`, `passwd`, `proexp`, `admres`, `file`, `email`) VALUES
('1', 'Dr Raman Dugyala', 'Center Head', '2-20-2/162\r\n    ', 'Ganesh Nagar , Road no 3/2 ', 'Hyderabad', 'Medchal Malkajgiri', '500039', 'Telangana', '9866587627', 'Seeking a challenging career where my honesty and abilities will be in best use.', 'CCS001', 'S1NBNHhuM2oyMDk1NWdyUC9WbzZWZz09', ' Working  as Professor in Vardhaman.College Of Engineering, Hyderabad, RangaReddy District,  Telanagana ,India from  June 2012 to Till Date.;Worked  as Associate professor(Ratified by JNTU-HYDERABAD) in Sri Venkateshwara Engineering College, Suryapet, Nalgonda, Telangana,India from Feb 2009 to June 2012.;Worked as a Software Engineer for INFOR Global Solutions India (PVT) Limited, Hyd. from Nov 2006 to Jan 2009.;Worked as Assistant professor in Sri Venkateshwara Engineering College, Suryapet, Nalgonda, Telangana,India from Aug 2002 to July 2006 ', 'Working as an Examination Branch In charge.;Worked as an in charge Head of the Department of C.S.E Department.;Worked Coordinator for the Alumni at the time of Accreditation.;Worked as In-Charge to the Examination branch for On Line Exams   Conducted by J.N.T.U.H.;JNTUH University Affiliation works.;NBA (National Board of Accreditation).;NAAC (National Assessment and Accreditation Council).;UGC Works (Autonomous Proposals preparation, 2(f) & 12(B), UGC grants etc.).;AICTE Works (Proposals preparation related to Seminars / FDPs / MODROBS / RPS / EDC etc.).;AFRC (Admission & Fee Regulatory Committee) works for Engineering Colleges Fee Fixation.;Write grant proposals to procure external research funding (DST - Department of Science and Technology, AICTE Projects etc.).;Centre of Excellences (IBM COE, Infosys Campus Connect, Oracle Academy etc Certification Programs, Academic Initiative activities).;Professional Societies Activities (IEEE / ACM / ISTE etc Student  and Faculty Chapters).;Employee Payroll (UGC VI Pay Scales  and 9th PRC scales fixation and salary calculation) .;Placement Activities.;Project Coordinator (B.Tech / M.Tech).;College Website maintenance.;Autonomous Examination Works (Question Papers Procuring).;Planning, evaluating and revise curricula, course content, and course materials and methods of  instruction (Autonomous Works).;Board of Studies (BOS) member at current College and Annamacharya Institute of Technology and Sciences, Rajampet, Kadapa.;Prepared Administrative Manual, Academic Calendars, Academic Audit Process, Blooms Taxonomy (Outcome Based Education -OBE), Project Guidelines, Autonomous Syllabus books,College New letters, College brochure, Placements tips & training materials etc booklets.;Power Point Slides preparation for NBA, NAAC, UGC etc. inspections.;Participate in Faculty recruitment process, Academic audit process etc.;Conducted Online Examinations like Certification Exams, Placement Tests, and Faculty Tests etc.;Participated in campus and community events.', '79297-raman.jpg', 'raman.vsd@gmail.com'),
('2', 'Dr Ramesh Shahabadkar', 'Professor', '\r\n    ', '', '', '', '', '', '8978979516', '', 'CCS002', 'cVdOU1NsS0FlbTY1Q1JEZUhQUnY4dz09', '', '', '68809-dr-ramesh-shahabadkar.jpg', 'rameshsly@gmail.com'),
('2', 'Dr. S.Nageswara Rao', 'Professor', '\r\n    ', '', '', '', '', '', '8008058439', '', 'CCS003', 'V2pabG1kcTZwdGpBcUttcU1sMjlVZz09', '', '', '72349-nageswararao.jpeg', 'nag_sirisala@yahoo.com'),
('2', 'Mr. S Venugopal', 'Associate Professor', '\r\n    ', '', '', '', '', '', '9441030645', '', 'CCS004', 'bzVjcEZzV1FhZm5zQU9uQjNiNVYvUT09', '', '', '58101-s-venu-gopal-photo.jpg', 'nag_sirisala@yahoo.com'),
('2', 'Mrs. B Mahalakshmi', 'Associate Professor', '13-6-438/52/A , Plot No.70\r\n    ', 'Sangamroad, Bapu nagar, Langarhouse', 'Hyderabad', 'Rangareddy', '500028', 'Telangana', '9440833109', '', 'CCS005', 'ZThjZVRYK21tRTB5TFJYQlpmT1pWUT09', '', '', '84229-mahalakshmiphoto.jpg', 'mahal466@gmail.com'),
('2', 'Mr. K Ramu Kuchipudi', 'Associate Professor', '\r\n    ', '', '', '', '', '', '9959983801', '', 'CCS006', 'YytqQmtqRksydllsalFHL3ZuR0x0QT09', '', '', '60207-cb-ram.jpg', 'kramupro@gmail.com'),
('2', 'Mrs. Shobarani Salvadi', 'Associate Professor', '9-1-365/2,Flatno 302\r\n    ', ' Sangamroad, Bapu nagar, Langarhouse', 'Hyderabad', 'Rangareddy', '500008', 'Telangana', '9866444079', '', 'CCS007', 'Wk5BUkVhbmV0eFNHck9USlBreFpSUT09', '', '', '13989-shobasign-1-.jpg', 'reddymallashobarani2@gmail.com'),
('2', 'Mr. C Satya Kumar', 'Associate Professor', '\r\n    ', '', '', '', '', '', '9440583582', '', 'CCS008', 'dkZCVU9SZ2VaZlV3SWk5MEYxc1ZkUT09', '', '', '4092-satyakumarphoto.jpg', 'c.satyakumar@vardhaman.org'),
('3', 'Mr. P Narsimhulu', 'Associate Professor', '13-68/2\r\n    ', 'Nehru Nagar Colony', 'ShadNagar', 'Rangareddy', '509216', 'Telangana', '9866777555', '', 'CCS009', 'QUFxTVYySjdxQjZHNjM1dkVZNmdtQT09', 'Presently Working For Vardhaman College Of Engineering, as Associate Professor, Shamshabad, Hyderabad â€“ 501 218, as Associate Professor Since 1st June 2014.;Worked For CVR College Of Engineering, Vastu Nagar, Mangalpally (Village), Ibrahimpatnam, Hyderabad-501510. from 1st June 2011 to 31st May 2014.;Worked as Associate Professor in Hi-Tech College of Engineering & Technology, Himayath Nagar, C.B. Post-500075, Gandipet , R.R. Dist, from 12th Dec 2005 to 15th May 2009.;Worked in Noor College of Engineering & Technology, Shadnagar, Mahabood nagar Dist, as Asst Professor from 12th July 2002 to 11th Dec 2005.;', '', '28583-01simha-pp.jpg', 'narsimhulupallati@gmail.com'),
('4', 'Mr. G S Prasad Reddy', 'Assistant Professor', '\r\n    ', '', '', '', '', 'Telangana', '7032901205', 'To update myself in ever developing technology aspects and contribute to all round development of students in all competencies required to sustain in competitive world through teaching field and hence', 'CCS010', 'ejg0a3RYcXhzL1Fvb3pZTGlaOVdNZz09', 'Working as Assistant Professor since 6 years in CSE Department at Vardhaman College of Engineering.;', '', '62632-prasadreddycsephoto.jpg', 'gsprasad.reddy56@gmail.com'),
('4', 'Ms. Sheena Mohammed', 'Assistant Professor', '\r\n    ', '', '', '', '', '', '9705717937', '', 'CCS011', 'bU5yNmlOMWM1V3ViL3k2aXF1Z2tLZz09', '', '', '27256-sheena-mohammed.jpg', 'sheenamohammed@vardhaman.org'),
('4', 'Mr, CH Sravan Kumar', 'Assistant Professor', '\r\n    ', '', '', '', '', '', '8977560347', '', 'CCS012', 'cFJlTGJhV29SR1Z1TnlWcTRPS0pRQT09', '', '', '78658-sravankumarphoto.jpg', 'chsravankumar@vardhaman.org'),
('4', 'Ms. Seelam Laxmi Sunaina', 'Assistant Professor', '2-2-38/1\r\n    ', 'Prakash Nagar, Upperpally, Pillar No-176', 'Hyderabad', 'Rangareddy', '500048', 'Telanagana', '9949591751', 'Seeking a challenging career where my honesty and abilities will be in best use.', 'CCS013', 'REI1OTBWaHlGeERtS3UvSzh0bXhBdz09', '', '', '58653-picture-007.jpg', 'slaxmisunaina@gmail.com'),
('', '', 'Center Head', '\r\n    ', '', '', '', '', '', '', '', 'VCE333', 'ZWt3RXVDVlNFYnVYbkQ1T0xxcEM0QT09', '', '', '44636-1481274520a.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `user` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user`, `value`) VALUES
('VCE512', 'xugsuxhr1z0001o7pmu8msx9ii'),
('VCE512', 'pg51z0m1wcoie6p9uqsno1utva'),
('VCE512', 'vdc57fnqg3n1ij194p5vrtbmnt'),
('VCE512', '2a5e8fun5drx0tkmu2aw7j7twz');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `file` varchar(100) NOT NULL,
  `type` int(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `ndate` date NOT NULL,
  `news` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`file`, `type`, `size`, `ndate`, `news`, `link`) VALUES
('cryptocurrency.jpg', 0, '5', '2019-07-28', 'Mnuchin Sounds Alarm Over Facebook Money-Minting Plan', 'https://www.technewsworld.com/story/86129.html'),
('xl-2016-gadgets-1.jpg', 0, '5', '2019-07-27', 'The Router\'s Obstacle-Strewn Route to Home IoT Security', 'https://www.technewsworld.com/story/86115.html'),
('xl-2019-cyber-insurance-1.jpg', 0, '5', '2019-07-26', 'Isn\'t It Time to Buy Cyber Insurance?', 'https://www.technewsworld.com/story/86123.html');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patents`
--

CREATE TABLE `tbl_patents` (
  `cbr` varchar(50) NOT NULL,
  `appno` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `full` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pg`
--

CREATE TABLE `tbl_pg` (
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rd`
--

CREATE TABLE `tbl_rd` (
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rd`
--

INSERT INTO `tbl_rd` (`file`, `type`, `size`, `title`, `faculty`) VALUES
('44384-gmail---individual-recommended-projects-of-icps---raman-d.pdf', 'application/pdf', '67.4853515625', 'Development of Iot devices for upgrading exiting SCADA system to smart grids (Power utilities)', 'CCS001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`email`) VALUES
('anudeepkadavergu@gmail.com'),
(''),
('anudeepkadavergu@gmail.com'),
('anudeepkadavergu@gmail.com'),
('anudeepkadavergu@gmail.com'),
('sakethbandaru@gmail.com'),
('sushmithakilaru1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ug`
--

CREATE TABLE `tbl_ug` (
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upeve`
--

CREATE TABLE `tbl_upeve` (
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads1`
--

CREATE TABLE `tbl_uploads1` (
  `file` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(100) NOT NULL,
  `daate` varchar(50) NOT NULL,
  `subject` varchar(10000) DEFAULT NULL,
  `head` varchar(5000) DEFAULT NULL,
  `mail` varchar(50) NOT NULL,
  `faculty_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads1`
--

INSERT INTO `tbl_uploads1` (`file`, `type`, `size`, `daate`, `subject`, `head`, `mail`, `faculty_id`) VALUES
('45843-a-study-of-crosssite-scripting---raman-d.pdf', 'application/pdf', '307.3525390625', '2018-09-06', 'Due to their high sensible impact, Cross-Site Scripting (XSS) attacks have attracted plenty of attention from the safety community members. Within the same approach, less effective defense techniques are projected, addressing the causes and effects of XSS vulnerabilities. As a result, associate individual usually now not inject or perhaps execute absolute scripting code in many real-life eventualities', 'A STUDY OF CROSS SITE SCRIPTING COMPULSION AGAINST WEB APPLICATIONS', 'raman.vsd@gmail.com', 'VCCS001'),
('41008-iot-fog-e--health---shobarani-reddymalla.pdf', 'application/pdf', '110.9462890625', '2018-09-06', 'Internet of Things (IoT) offers a consistent stage to interface individuals and articles to each other for advancing and making our lives less demanding. This vision conveys us from Compute based Centralize plans to a more circulated condition offering a tremendous measure of uses, for example, brilliant wearableâ€™s, smart home, smart versatility, and smart urban communities. We recommend this requires a change from the facility driven treatment to tolerant driven social insurance where every s', 'A Survey on Internet of Things - Fog Secure Data Inprocessing Health Services', 'reddymallashobarani2@gmail.com', 'VCCS003'),
('26143-a-study-of-crosssite-scripting---raman-d.pdf', 'application/pdf', '307.3525390625', '2018-09-09', 'Due to their high sensible impact, Cross-Site Scripting (XSS) attacks have attracted plenty of attention from the safety community members. Within the same approach, less effective defense techniques are projected, addressing the causes and effects of XSS vulnerabilities. As a result, associate individual usually now not inject or perhaps execute absolute scripting code in many real-life eventualities. During this paper, we have a tendency to examine the attack surface that is still when XSS associated similar scripting attacks square measure purportedly quenched by preventing an assaulter from corporal punishment JavaScript code. we have a tendency to discuss the question of whether', 'A STUDY OF CROSS SITE SCRIPTING COMPULSION AGAINST WEB APPLICATIONS ', 'raman.vsd@gmail.com', 'CCS001'),
('14441-iot-paper---raman-d.pdf', 'application/pdf', '176.6416015625', '2018-09-10', 'It is a known fact that IoT is the most talked about future technology these days. It is nothing but connecting the physical world to the cyber world through internet. Our daily physical devices can be connected by incorporating software programmes, sensors and embedded electronic circuits to feel their presence in the Web and also helping the humans to control/ operate the devices through internet connectivity / connected devices viz., Smart Phone, Tablets, PCs. But same as any upcoming technologies, IoT too ', 'A Roadmap to Security in IoT ', 'raman.vsd@gmail.com', 'CCS001');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
