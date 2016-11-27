-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2016 at 01:32 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE IF NOT EXISTS `registered_users` (
  `name` varchar(25) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `eventdate` date NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`name`, `eventname`, `description`, `location`, `eventdate`, `email`) VALUES
('dhanapal', 'Animation ', 'VFX animated', 'SJT', '2016-11-29', 'sdhanapalms@gmail.com'),
('abc', 'disq', 'sdfs', 'vit', '2016-11-02', 'sdhan@gmail.com'),
('balaji', 'ABC', 'ABCDHEBHD', 'VELLORE', '2016-11-11', 'balaji@gmail.com'),
('balaji', 'ABC', 'ABCDHEBHD', 'VELLORE', '2016-11-11', 'balaji@gmail.com'),
('jsdbcjsd', 'bsjcbc', 'sdfsdf', 'sfsdfdf', '2016-11-11', 'dsadasdasd@gmail.com'),
('naren', 'vfx', 'abxsgde', 'vellore', '2016-11-29', 'gsrs.1311@gmail.com'),
('naren', 'vfx', 'abxsgde', 'vellore', '2016-11-29', 'gsrs.1311@gmail.com'),
('abcdef', 'phone', 'asdsdadsd', 'vit', '2016-11-30', 'sdhshd@gmail.com');
