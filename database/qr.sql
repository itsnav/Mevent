-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2013 at 02:04 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'ravi.itscute@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `bannertxt` varchar(50) NOT NULL,
  `abttxt` varchar(160) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(160) NOT NULL,
  `seats` int(5) NOT NULL,
  `closingdate` varchar(25) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `bannertxt`, `abttxt`, `email`, `address`, `seats`, `closingdate`, `flag`) VALUES
(1, 'music show', 'Grand finale', 'final round', 'ravi@gmail.com', 'cbe', 100, '30/03/2013', 0),
(2, 'car show', 'a car stunt show', 'a  massive work', 'abc@gmail.com', 'madurai', 200, '30/03/2013', 1),
(3, 'stunt', 'a stunt show', 'final round', 'xyz@gmail.com', 'chennai', 100, '13/02/2013', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `userid` varchar(20) NOT NULL,
  `eventid` varchar(20) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `pre_edition` varchar(5) DEFAULT NULL,
  `profession` varchar(15) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `event` varchar(40) DEFAULT NULL,
  `about` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `eventid`, `name`, `company`, `mobile`, `email`, `city`, `country`, `pre_edition`, `profession`, `designation`, `event`, `about`) VALUES
('ra510966d81ecd6', '1', 'ravi', 'oandz', '9999999999', 'ravi.17@gmail.com', 'coimbatore', 'india', 'yes', 'entrepreneur', 'div_head', 'event1', 'newsletter'),
('si5109691a880c1', '1', 'siju', 'oandz', '7777777777', 'siju10050@gmail.com', 'coimbatore', 'india', 'no', 'employee', 'team_lead', 'event1', 'regular'),
('si5109698a00270', '1', 'siju', 'oandz', '7777777777', 'siju10050@gmail.com', 'coimbatore', 'india', 'no', 'employee', 'team_lead', 'event1', 'regular'),
('si51096a17a8a29', '1', 'siju', 'oandz', '7777777777', 'siju10050@gmail.com', 'coimbatore', 'india', 'no', 'employee', 'team_lead', 'event1', 'regular'),
('si51097314d99d7', '1', 'siju', 'oandz', '7777777777', 'siju10050@gmail.com', 'coimbatore', 'india', 'no', 'employee', 'team_lead', 'event1', 'regular'),
('si51097383895f7', '1', 'katra', 'oandz', '7777777777', 'siju10050@gmail.com', 'coimbatore', 'india', 'no', 'employee', 'team_lead', 'event1', 'regular');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
