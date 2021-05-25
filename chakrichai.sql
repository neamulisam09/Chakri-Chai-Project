-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 12:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chakrichai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(11) NOT NULL,
  `pass` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `pass`) VALUES
('admin', '1230');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cname` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `lnumber` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cname`, `uid`, `lnumber`, `mobile`, `mail`, `address`, `country`, `pass`) VALUES
('IT Solution', 1421, 1812090642, 1772267829, 'neamul.islam09@northsouth.edu', 'Pabna', 'Bangladesh', '1234'),
('IT Bari', 33211, 1209874567, 987654321, 'afdsahj@gmail.com', 'Chitagong', 'Bangladesh', '212121');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `cname` varchar(20) NOT NULL,
  `cid` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `jtitle` varchar(30) NOT NULL,
  `spackage` int(11) NOT NULL,
  `srequired` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `jlocation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`cname`, `cid`, `category`, `jtitle`, `spackage`, `srequired`, `experience`, `jlocation`) VALUES
('IT Solution', 0, 'it', 'designer', 20000, 'photoshop', '10 years', 'dhaka'),
('tkem', 98, 'it', 'data analyst', 20000, 'mathematical ability', '1 year', 'Dhaka'),
('tkem', 988, 'it', 'ddd', 5555, 'xcvff', '1 year', 'dfdfbgn'),
('IT Solution', 2332, 'it', 'Full Time', 30000, 'MS word', '3 years', 'Chitagong'),
('Unicorn', 1421, 'it', 'Artist', 10000, 'Art', 'o years', 'Rajshahi'),
('wdasa', 0, 'it', 'asdfas', 0, 'asdfsa', 'asdfas', 'asfdasf');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `pass` int(11) NOT NULL,
  `cv` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`fname`, `lname`, `uid`, `mobile`, `mail`, `address`, `country`, `birthday`, `pass`, `cv`) VALUES
('Mehedi', 'Hasan', 1209, 1772267829, 'mehedi@gmail.com', 'Pabna', 'Bangladesh', '2000-12-14', 1243, 'knowledge-library.jpg'),
('Partho', 'Biswas', 1234, 1988764564, 'parthobiswas@northsouth.edu', 'Dhaka', 'Bangladesh', '2000-05-15', 124300, 'sun.png'),
('Rohim ', 'Mia', 7419, 1234567890, 'abcd@gmail.com', 'efgh', 'abcd', '2000-12-02', 1233, 'Facebook.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD UNIQUE KEY `uid` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
