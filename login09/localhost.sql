-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 05:52 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `practice`
--
CREATE DATABASE IF NOT EXISTS `practice` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `practice`;

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employ`
--

CREATE TABLE IF NOT EXISTS `employ` (
  `uid` int(255) NOT NULL,
  `aleave` varchar(255) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `desig` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `posted` varchar(255) NOT NULL,
  `durat` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `uname` varchar(225) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employ`
--

INSERT INTO `employ` (`uid`, `aleave`, `sdate`, `edate`, `desig`, `dept`, `posted`, `durat`, `mobile`, `address`, `uname`) VALUES
(2, 'casual leave', '2015-06-10', '2015-06-19', 'teacher', 'edu', 'leh', 2, 53534534, 'srinagar', 'syedd'),
(19, 'casual leave', '2015-06-25', '2015-06-26', 'sdcsdc', 'scdsc', 'sdcs', 7, 1212121212, 'sdcscscsdcs', 'syed');

-- --------------------------------------------------------

--
-- Table structure for table `websiteusers`
--

CREATE TABLE IF NOT EXISTS `websiteusers` (
  `fullname` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `websiteusers`
--

INSERT INTO `websiteusers` (`fullname`, `userName`, `email`, `pass`, `cpass`, `uid`) VALUES
('fsfsdfs', 'fsdfsdf', 'fsdfsdf', 'fsdfsdf', '', 1),
('syed', 'syedd', 'syedddddd', '1234', '', 2),
('dgdf', 'dfgdfgdf', 'gdfgdf', 'fgdfgdfg', '12345', 3),
('rtert', 'tert', 'tert', 'tertre', '123231312', 4),
('rwer', 'rwerwerwer', 'rwerw', '123', '12345', 5),
('rr', 'wer', 'er', '1234', '123', 6),
('sss', 'dsdsdsdsd', 'dsdsds', '123456', '123', 7),
('rwer', 'rwerwerwer', 'rwerw', '12345', '12345', 8),
('trtr', 'ytr', 'ytr', '12345', '1234', 9),
('ertet', 'tttr', 'rett', '1234', '123456', 10),
('gdfgdfg', 'rwerwerwer', 'rwerw', '1234', '1234567', 11),
('fdfsa', 'sdfsfdsa', 'fsfsdf', '12345', '12345', 12),
('fg', 'gdf', 'gdfgdf', '1234', '12345', 13),
('fhfg', 'hgfh', 'hfgh', 'hgfhfgh', 'hfghfghfg', 14),
('ghjgh', 'jghj', 'jghjg', 'were123', 'were123', 15),
('dfgdfg', 'gdfgdf', 'gfdfg', 'fgdfgdf', 'ertrgdfg', 16),
('fgdf', 'dfgdfgdfgf', 'gdfgdfgf', 'd', 'dgdfgdf', 17),
('fg', 'gg', 'gdfgfdg', 'gg', 'rtertert', 18),
('syed', 'syed', 'afdaflkl;fdf', '12345', '12345', 19),
('nilza', 'nil', 'skadsdsd', 'nil123', 'nil123', 20),
('gdfgdfgg', 'gdfgdfg', 'dfgdfgf', '123', '123', 21),
('fgdfg', 'gdfgdf', 'gdfgdfg', 'gdfgd', 'dgdfgdfgdfgdfg', 22),
('tamchos', 'tam', 'asdfsadfsdfsdf', 'tam123', 'tam123', 23),
('syed', 'syed', 'kjdfklgjdfgdf', 'syed123', 'syed123', 24),
('tamchos', 'tamchos', 'fksdlkfjsfjs;fs', 'tam123', 'tam111', 25),
('sam', 'sami', 'fsdfsdf', 'sam123', 'sam123', 26);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
