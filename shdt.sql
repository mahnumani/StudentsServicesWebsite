-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 06:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `hightlight`
--

CREATE TABLE `hightlight` (
  `h_id` int(11) NOT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hightlight`
--

INSERT INTO `hightlight` (`h_id`, `text`) VALUES
(23, 'Stdudent help desk technician is optimized for course registation and student results.\r\nWhenever any student go for registation a course. He have no idea, how many courses did he drop or fail. If he takes any drop or fail course, whether it will overlap his regular courses. Also, All the offered courses are published in university notice board. Student doesn\'t see list on online. This site fix that problem easily..');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(30) NOT NULL,
  `id` bigint(11) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `id`, `dept`, `email`, `phone`, `pass`) VALUES
('abuhanifnumani', 1234, '123f', 'abc@gmail.com', 12345, 1234),
('ahn', 170102030067, 'cse', 'abuhanif@gmail.com', 2147483647, 0),
('Ahmed Al Kahir', 170103020017, 'CSE', 'a@c.com', 1212121, 12345621),
('zahid mahmud emon', 170103020030, 'CSE', 'zmemon046@gmail.com', 1521327534, 0),
('Tania Tun Jannat', 170103020049, 'CSE', 'JANNAT@GMAIL.COM', 2147483647, 0),
('Farhan Nabil', 170103020060, 'CSE', 'fn47@hanif.poribohon', 98, 0),
('Abu Hanif', 170103020067, 'CSE', 'abuhanifnumani123@hotmail.com', 1712030863, 1241),
('Abu Hanif', 170103020088, 'CSE', 'abc@c.com', 1212421424, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `auto` int(11) NOT NULL,
  `regi_id` bigint(100) NOT NULL,
  `course_no` varchar(30) NOT NULL,
  `mark` float NOT NULL,
  `cgpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`auto`, `regi_id`, `course_no`, `mark`, `cgpa`) VALUES
(7, 170103020067, 'CSE 111', 88, 4),
(8, 170103020067, 'MAT 101', 78, 3.75),
(9, 170103020067, 'CSE 123', 70, 3.5),
(10, 170103020067, 'CSE 113', 88, 4),
(11, 170103020067, 'CSE 114', 88, 4),
(12, 170103020067, 'MAT 103', 88, 4),
(13, 170103020067, 'CSE 131', 88, 4),
(14, 170103020067, 'CSE 132', 88, 4),
(15, 170103020067, 'CSE 121', 88, 4),
(16, 170103020067, 'CSE 122', 88, 4),
(17, 170103020017, 'CSE 111', 66, 3.5),
(18, 170103020030, 'CSE 111', 80, 4),
(19, 170103020030, 'CSE 123', 87, 4),
(20, 170103020030, 'CSE 113', 76, 3.75),
(21, 170103020030, 'MAT 101', 70, 3.5),
(22, 170103020060, 'CSE 111', 40, 1),
(23, 170103020049, 'CSE 111', 67, 4),
(24, 170103020049, 'CSE 112', 99, 2.9);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `ro_id` int(11) NOT NULL,
  `day` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `p1` varchar(10) NOT NULL,
  `p2` varchar(10) NOT NULL,
  `p3` varchar(10) NOT NULL,
  `p4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`ro_id`, `day`, `semester`, `p1`, `p2`, `p3`, `p4`) VALUES
(2, 'Sat', '9', '', 'CSE 325', 'CSE 334', 'CSE 334'),
(3, 'Sun', '9', '...', '...', 'CSE 325', '...'),
(4, 'Mon', '9', '...', 'CSE 455', 'CSE 456', 'CSE 456'),
(5, 'Tue', '9', 'CSE 300', 'CSE 300', '...', 'CSE 333'),
(6, 'Wed', '9', 'CSE 333', 'CSE 455', 'CSE 326', 'CSE 326');

-- --------------------------------------------------------

--
-- Table structure for table `slideimg`
--

CREATE TABLE `slideimg` (
  `s_id` int(11) NOT NULL,
  `img_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideimg`
--

INSERT INTO `slideimg` (`s_id`, `img_url`) VALUES
(13, 'vfdsgd'),
(14, 'vfdsgd'),
(15, 'fds'),
(16, 'poi'),
(17, 'www'),
(18, 'dkfjhes.liewioufewiufew'),
(19, 'fasfrewf');

-- --------------------------------------------------------

--
-- Stand-in structure for view `ss`
-- (See below for the actual view)
--
CREATE TABLE `ss` (
`name` varchar(30)
,`id` bigint(11)
,`dept` varchar(30)
,`phone` int(11)
,`sum(mark)` double
,`avg(cgpa)` double
);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `sy_id` int(11) NOT NULL,
  `course_no` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `credit` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`sy_id`, `course_no`, `title`, `credit`, `description`) VALUES
(1, 'CSE 111', 'Fundamentals of Computers', 3, 'NULL'),
(2, 'CSE 113', 'Structured Programming Language ', 3, 'NULL'),
(3, 'CSE 114', 'Structured Programming Language Lab', 1.5, 'NULL'),
(4, 'MAT 101', 'Calculus', 3, 'null'),
(5, 'CSE 121', 'Basic Electrical Engineering', 3, 'null'),
(6, 'CSE 122', 'Basic Electrical Engineering LAB', 1.5, 'null'),
(7, 'CSE 123', 'Discrete Mathematics', 3, 'null'),
(8, 'CSE 131', 'Data Structure', 3, 'null'),
(9, 'CSE 132', 'Data Structure Lab', 1.5, 'null'),
(10, 'MAT 103', 'Matrices, Vector Analysis and Geometry', 3, 'null');

-- --------------------------------------------------------

--
-- Stand-in structure for view `test`
-- (See below for the actual view)
--
CREATE TABLE `test` (
`name` varchar(30)
,`id` bigint(11)
,`dept` varchar(30)
,`email` varchar(100)
,`phone` int(11)
,`pass` int(11)
,`auto` int(11)
,`regi_id` bigint(100)
,`course_no` varchar(30)
,`mark` float
,`cgpa` double
);

-- --------------------------------------------------------

--
-- Structure for view `ss`
--
DROP TABLE IF EXISTS `ss`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ss`  AS  select `test`.`name` AS `name`,`test`.`id` AS `id`,`test`.`dept` AS `dept`,`test`.`phone` AS `phone`,sum(`test`.`mark`) AS `sum(mark)`,avg(`test`.`cgpa`) AS `avg(cgpa)` from `test` group by `test`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `test`
--
DROP TABLE IF EXISTS `test`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `test`  AS  select `reg`.`name` AS `name`,`reg`.`id` AS `id`,`reg`.`dept` AS `dept`,`reg`.`email` AS `email`,`reg`.`phone` AS `phone`,`reg`.`pass` AS `pass`,`result`.`auto` AS `auto`,`result`.`regi_id` AS `regi_id`,`result`.`course_no` AS `course_no`,`result`.`mark` AS `mark`,`result`.`cgpa` AS `cgpa` from (`reg` join `result` on((`reg`.`id` = `result`.`regi_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hightlight`
--
ALTER TABLE `hightlight`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`auto`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`ro_id`);

--
-- Indexes for table `slideimg`
--
ALTER TABLE `slideimg`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`sy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hightlight`
--
ALTER TABLE `hightlight`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `ro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slideimg`
--
ALTER TABLE `slideimg`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
