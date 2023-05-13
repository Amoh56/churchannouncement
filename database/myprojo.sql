-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 10:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprojo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'mwiti', 'mwiti#6'),
(2, 'mwiti', 'mwiti#6');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `uname`, `password`) VALUES
(1, 'mwiti', 'mwiti#6'),
(2, 'mwiti', 'mwiti#6');

-- --------------------------------------------------------

--
-- Table structure for table `annmembers`
--

CREATE TABLE `annmembers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `jumuiya` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annmembers`
--

INSERT INTO `annmembers` (`id`, `firstname`, `surname`, `jumuiya`) VALUES
(1, 'Hugholin', 'Muthomi', 'ann');

-- --------------------------------------------------------

--
-- Table structure for table `josephmembers`
--

CREATE TABLE `josephmembers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `jumuiya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `josephmembers`
--

INSERT INTO `josephmembers` (`id`, `firstname`, `surname`, `jumuiya`) VALUES
(1, 'Amos', 'Nkanata', 'joseph'),
(4, 'Jedidah', 'Nkanata', 'joseph'),
(15, 'Brian', 'Munene', 'joseph'),
(19, 'Nelly ', 'Makena', 'joseph'),
(20, 'Peter', 'Mwichwiri', 'joseph'),
(21, 'Lemmy', 'Mutugi', 'joseph'),
(22, 'Reuben', 'Gichuru', 'joseph'),
(23, 'Brian', 'Koome', 'joseph');

-- --------------------------------------------------------

--
-- Table structure for table `lukemembers`
--

CREATE TABLE `lukemembers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `jumuiya` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lukemembers`
--

INSERT INTO `lukemembers` (`id`, `firstname`, `surname`, `jumuiya`) VALUES
(1, 'collins', 'Mwikuu', 'luke'),
(2, 'Belinda', 'Mwikuu', 'luke');

-- --------------------------------------------------------

--
-- Table structure for table `michaelmembers`
--

CREATE TABLE `michaelmembers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `jumuiya` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `michaelmembers`
--

INSERT INTO `michaelmembers` (`id`, `firstname`, `surname`, `jumuiya`) VALUES
(1, 'Boniface', 'Murangiri', 'michael');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `organization` varchar(50) NOT NULL,
  `announcement` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`id`, `sender_name`, `date`, `organization`, `announcement`) VALUES
(8, 'Boniface Murangiri', '2022-03-15', 'Nkumari youth chairperson', 'Hello all,\r\nhave a nice holiday'),
(9, 'Boniface Murangiri', '2022-03-16', 'nkumari fraternity', 'Hello all,\r\ntoday is my day\r\n'),
(10, 'Amos Mwiti', '2022-03-17', 'Developer', 'It was on Wednesdaynight,\r\ni completed database work of this website'),
(11, 'nyakundi victor', '2022-03-18', 'Nkumari youth chairperson', 'all youths to remain behind after the main service shortly'),
(12, 'Lewis Macharia', '2022-04-06', 'IT Kyu', 'Teacher not coming to class'),
(13, 'Brayo Dephaz', '2022-04-23', 'Kyu Comp Science', 'Let do this'),
(14, 'Amoh the Developer', '2022-04-26', 'Kenya ', 'System Testing'),
(15, 'Josephat Karani', '2022-05-03', 'KyU CIT Department', 'Demo Project Presentation This week at Lab 3'),
(16, 'Jane Mundati', '2022-05-06', 'KyU BBIT', 'Am Testing the system'),
(17, 'Mercy Makena', '2022-05-14', 'Wamama Chama', 'On this day......'),
(18, 'Dr. Karani', '2022-05-16', 'KyU ICT', 'Testing'),
(19, 'Boniface Murangiri', '2022-05-16', 'nkumari fraternity', 'Testing\r\n'),
(20, 'Amos Mwiti', '2022-05-20', 'Developer', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `phones` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `phones`) VALUES
(1, 'Tecno'),
(2, 'samsung'),
(3, 'oppo'),
(4, 'oppo'),
(5, 'oppo'),
(6, 'Tecno'),
(7, 'oppo'),
(8, 'motorolla'),
(9, 'itel'),
(10, 'samsung'),
(11, 'motorolla'),
(12, 'itel'),
(13, 'samsung');

-- --------------------------------------------------------

--
-- Table structure for table `toannouncement`
--

CREATE TABLE `toannouncement` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `organization` varchar(30) NOT NULL,
  `announcement` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toannouncement`
--

INSERT INTO `toannouncement` (`id`, `sender_name`, `date`, `organization`, `announcement`) VALUES
(1, 'Boniface Murangiri', '2022-03-16', 'nkumari fraternity', 'Hello all,\r\ntoday is my day'),
(2, 'Amos Mwiti', '2022-03-17', 'Developer', 'It was on Wednesdaynight, i completed database work of this website'),
(3, 'nyakundi victor', '2022-03-18', 'Nkumari youth chairperson', 'all youths to remain behind after the main service shortly'),
(4, 'Amoh the Developer', '2022-04-26', 'Kenya', 'System Testing'),
(5, 'Jamlick Mwanontii', '2022-03-07', 'muuga fm', 'transfered'),
(6, 'Josephat Karani', '2022-05-03', 'KyU CIT Department', 'Demo Project Presentation This week at Lab 3'),
(17, '', '0000-00-00', '', ''),
(18, 'Jane Mundati', '2022-05-06', '	KyU BBIT', 'Am Testing the system'),
(19, 'Boniface Murangiri', '2022-03-15', 'Nkumari youth chairperson', 'Hello all,have a nice holiday'),
(20, 'Boniface Murangiri', '2022-03-15', 'Nkumari youth chairperson', 'Hello all,have a nice holiday'),
(21, 'Boniface Murangiri', '2022-03-15', 'Nkumari youth chairperson', 'Hello all,have a nice holiday'),
(22, 'Boniface Murangiri', '2022-03-15', 'Nkumari youth chairperson', 'Hello all,have a nice holiday'),
(23, '', '0000-00-00', '', ''),
(24, '', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annmembers`
--
ALTER TABLE `annmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `josephmembers`
--
ALTER TABLE `josephmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lukemembers`
--
ALTER TABLE `lukemembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `michaelmembers`
--
ALTER TABLE `michaelmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sender`
--
ALTER TABLE `sender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toannouncement`
--
ALTER TABLE `toannouncement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `annmembers`
--
ALTER TABLE `annmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `josephmembers`
--
ALTER TABLE `josephmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lukemembers`
--
ALTER TABLE `lukemembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `michaelmembers`
--
ALTER TABLE `michaelmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sender`
--
ALTER TABLE `sender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `toannouncement`
--
ALTER TABLE `toannouncement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
