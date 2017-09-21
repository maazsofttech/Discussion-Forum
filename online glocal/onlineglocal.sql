-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 12:24 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineglocal`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer_science`
--

CREATE TABLE IF NOT EXISTS `computer_science` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `computer_science`
--

INSERT INTO `computer_science` (`notes_id`, `name`, `designation`, `sub`, `topic`, `file`, `descp`, `keywords`) VALUES
(1, 'ji', '', 'sub', 'topic', 'hi', 'hi', 'hi'),
(2, 'ji', '', 'sub', 'topic', 'hi', 'hi', 'hi'),
(3, 'ji', '', 'sub', 'topic', 'hi', 'hi', 'hi'),
(4, 'Tabish', 'student', 'Data Structure', 'Heap', '26414-IMG_20150916_095043.jpg', 'jjj', 'kkkk'),
(5, 'Tabish', 'student', 'Data Structure', 'Heap', '73567-IMG_20150916_095043.jpg', 'mnbvc', 'lkjh');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`d_id` int(20) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_pic` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`, `d_pic`) VALUES
(1, 'School of Technology', 'technology.jpg'),
(2, 'Senior Secondary School', 'ss school.jpg'),
(3, 'School of Education', 'education.jpg'),
(4, 'School of Law', 'law.jpg'),
(5, 'School of Life Science', 'life science.jpg'),
(6, 'School of Management', 'management.jpg'),
(7, 'School of Mass Communication', 'mass.jpg'),
(8, 'Glocal Medical College', 'medical.jpg'),
(9, 'School of Pharmacy', 'pharmacy.jpg'),
(10, 'School of Polytechnic', 'polytechnic.jpg'),
(11, 'School of Computer Science', 'education.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `law`
--

CREATE TABLE IF NOT EXISTS `law` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `life_science`
--

CREATE TABLE IF NOT EXISTS `life_science` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE IF NOT EXISTS `management` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mass_communication`
--

CREATE TABLE IF NOT EXISTS `mass_communication` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE IF NOT EXISTS `medical` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`id` int(20) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_descp` varchar(500) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `polytechnic`
--

CREATE TABLE IF NOT EXISTS `polytechnic` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ss_school`
--

CREATE TABLE IF NOT EXISTS `ss_school` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE IF NOT EXISTS `technology` (
`notes_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`notes_id`, `name`, `designation`, `sub`, `topic`, `file`, `descp`, `keywords`) VALUES
(1, 'mji', 'Student', 'mkll', 'mlml', '58597-IMG_20150916_095043.jpg', 'mnbv', 'mkijhg'),
(2, 'ss', 'Student', 'ss', 'ss', '42684-IMG_20150916_095043.jpg', 'hh', 'hh'),
(3, 'nmjj', 'Student', 'hyy', 'bhhyu', '85353-IMG_20150916_095043.jpg', 'jkjh', 'jhj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`u_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profilepic` varchar(300) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `email`, `password`, `profilepic`, `dept`, `course`, `designation`) VALUES
(22, 'Tabish Tanseef', 'tabishtanseef@gmail.com', 'tabish', '81634-DSC_0557.JPG', 'School of Computer Science', 'B.tech', 'student'),
(23, 'ff', 'ff@gmail.com', 'ff', '30835-DSC_0326.JPG', 'School of Technology', 'MCA', 'student'),
(24, 'ww', 'ww@gmail.com', 'ww', '87142-DSC_0317.JPG', 'Senior Secondary School', 'BA', 'student'),
(25, 'Mohd Shahrukh', 'mohdshahrukh216@gmail.com', 'shahrukhhm', '76927-DSC_0475.JPG', 'School of Computer Science', 'MCA', 'Student'),
(26, 'gg', 'gg@gmail.com', 'gg', '18426-DSC_0333.JPG', 'School of Technology', 'None', 'Student'),
(27, 'MD Aamir', 'aamirm85@gmail.com', 'mehandi@123', '76719-20160529_171005.jpg', 'School of Technology', 'B.tech', 'Student'),
(28, 'Tab', 'tabishtanseef@gmail.com', 'tabish', '31795-20160529_131221.jpg', 'School of Computer Science', 'B.tech', 'Student'),
(29, 'nn', 'nabeelazam4321@gmail.com', 'nn', '62398-medical.sql', 'School of Technology', 'None', 'Student'),
(30, 'mn', 'Maz@gmail.com', 'mn', '44412-eclipse.exe', 'School of Technology', 'None', 'Faculty'),
(31, 'Mohd Shahrukh', 'mohd.israr.399488@facebook.com', 'mn', '29055-WIN_20150905_122547.JPG', 'School of Computer Science', 'BAMS', 'Student'),
(32, 'hgghuh', 'tabishtanseef@yahoo.in', 'm bj', '92287-WIN_20150907_102754.JPG', 'School of Technology', 'None', 'Student'),
(33, 'tab', 'tabishtanseef@yahoo.in', 'mbnm', '80468-WIN_20150930_113032.JPG', 'School of Technology', 'None', 'Student'),
(34, 'Tabish Tanseef', 'tabishtanseef@yahoo.in', 'mn', '15852-WIN_20150930_113032.JPG', 'School of Technology', 'None', 'Student'),
(35, 'cff', 'vv@gmail.com', 'aa', '26946-pim_installmgr.log.bak', 'School of Technology', 'None', 'Faculty'),
(36, 'Tabish Tanseef', 'tabishtanseef@yahoo.in', 'mnbvcxz', '38013-IMG_20150916_095043.jpg', 'School of Technology', 'B.Pharma', 'Student'),
(37, 'Mohd Shahrukh', 'tabishtanseef@gmail.com', '5555', '20976-IMG_20150916_095043.jpg', 'School of Life Science', 'D.Pharma', 'Student'),
(38, 'srk', 'srk@gmail.com', 'ss', '92357-IMG_20150916_095043.jpg', 'School of Computer Science', 'MCA', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer_science`
--
ALTER TABLE `computer_science`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `law`
--
ALTER TABLE `law`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `life_science`
--
ALTER TABLE `life_science`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `mass_communication`
--
ALTER TABLE `mass_communication`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `polytechnic`
--
ALTER TABLE `polytechnic`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `ss_school`
--
ALTER TABLE `ss_school`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
 ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer_science`
--
ALTER TABLE `computer_science`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `d_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `law`
--
ALTER TABLE `law`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `life_science`
--
ALTER TABLE `life_science`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mass_communication`
--
ALTER TABLE `mass_communication`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polytechnic`
--
ALTER TABLE `polytechnic`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ss_school`
--
ALTER TABLE `ss_school`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
MODIFY `notes_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
