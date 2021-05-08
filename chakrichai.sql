-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 06:53 PM
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
-- Table structure for table `cregister`
--

CREATE TABLE `cregister` (
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
-- Dumping data for table `cregister`
--

INSERT INTO `cregister` (`cname`, `uid`, `lnumber`, `mobile`, `mail`, `address`, `country`, `pass`) VALUES
('IT Solution', 1421, 1812090642, 1772267829, 'neamul.islam09@northsouth.edu', 'Pabna', 'Bangladesh', '1234'),
('Unicorn', 3211, 1212691144, 1234567890, 'jsahfh@gmail.com', 'bogura', 'bangladesh', '1212'),
('IT Bari', 33211, 1209874567, 987654321, 'afdsahj@gmail.com', 'Chitagong', 'Bangladesh', '212121');

-- --------------------------------------------------------

--
-- Table structure for table `jregister`
--

CREATE TABLE `jregister` (
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
-- Dumping data for table `jregister`
--

INSERT INTO `jregister` (`fname`, `lname`, `uid`, `mobile`, `mail`, `address`, `country`, `birthday`, `pass`, `cv`) VALUES
('Partho', 'Biswas', 1234, 1988764564, 'parthobiswas@northsouth.edu', 'Dhaka', 'Bangladesh', '2000-05-15', 124300, 'sun.png'),
('Neamul Islam', '', 0, 0, '', '', '', '0000-00-00', 0, ''),
('Mehedi', 'Hasan', 1209, 1772267829, 'mehedi@gmail.com', 'Pabna', 'Bangladesh', '2000-12-14', 1243, 'knowledge-library.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
