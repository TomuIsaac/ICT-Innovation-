-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2020 at 11:18 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comp`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `pid` int(44) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) NOT NULL,
  `tel` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `iwe` varchar(44) NOT NULL,
  `co` varchar(44) NOT NULL,
  `choice` varchar(44) NOT NULL,
  `name2` varchar(44) NOT NULL,
  `natel` varchar(44) NOT NULL,
  `dat` varchar(44) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`pid`, `name`, `tel`, `email`, `iwe`, `co`, `choice`, `name2`, `natel`, `dat`) VALUES
(1, 'tv center', '0700810121', 'ssunaroger@yahoo.com', 'tv center', 'NGO0', 'non government', 'ssuunam  roger', '0700810121', '20-JUN-2016'),
(2, 'john', '0700810121', 'ssuunaroger@gmail.com', 'john', 'company limited by share', 'roofing', 'john', '0700810121', '17-FEB-2020'),
(3, 'vianney', '6', 'vianneyjk13@yahoo.com', 'kya', 'company limited by share', 'jvk', 'v', 'v', '23-APR-2020'),
(4, 'jane', '3', 'vianneyjk13@yahoo.com', 'v', 'company limited by share', '', 'v', 'vv', '23-APR-2014'),
(5, 'vianney', '6', 'vianneyjk13@yahoo.com', 'kya', 'NGO', '', 'v', 'vv', '23-APR-2014'),
(6, 'vianney', '55', 'vianneyjk13@yahoo.com', 'kya', 'company limited by share', 'ggg', 'gg', 'ggg', '23-APR-2020'),
(7, 'nanfuka', '23456', 'vianneyjk13@yahoo.com', 'vvvv', 'company limited by guarantee', 'kyang', 'ffdsf', 'dsgfg', '23-may-2020');

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE IF NOT EXISTS `approval` (
  `pid` int(44) NOT NULL AUTO_INCREMENT,
  `dat` varchar(44) NOT NULL,
  `name` varchar(44) NOT NULL,
  `co` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `tel` varchar(44) NOT NULL,
  `amt` varchar(44) NOT NULL,
  `com` varchar(44) NOT NULL,
  `appro` varchar(44) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`pid`, `dat`, `name`, `co`, `email`, `tel`, `amt`, `com`, `appro`) VALUES
(1, '28-APR-2020', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '2222', 'vv', 'Yes'),
(2, '28-APR-2014', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '2222', 'vv', 'Yes'),
(6, '28-APR-2020', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '2222', 'jvk', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `infor`
--

CREATE TABLE IF NOT EXISTS `infor` (
  `name` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `mes` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `pid` int(44) NOT NULL AUTO_INCREMENT,
  `dat` varchar(44) NOT NULL,
  `name` varchar(44) NOT NULL,
  `co` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `tel` varchar(44) NOT NULL,
  `amt` varchar(44) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`pid`, `dat`, `name`, `co`, `email`, `tel`, `amt`) VALUES
(1, '23-APR-2020', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '2222'),
(2, '23-APR-2020', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '222200'),
(3, '23-APR-2020', 'tv center', 'NGO0', 'tomusange@yahoo.com', '0700810121', '222200'),
(4, '28-APR-2020', 'john', 'company limited by share', 'ssuunaroger@gmail.com', '0700810121', '222200'),
(5, '28-APR-2020', 'vianney', 'company limited by share', 'vianneyjk13@yahoo.com', '61', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `pid` int(44) NOT NULL AUTO_INCREMENT,
  `dat` varchar(44) NOT NULL,
  `name` varchar(44) NOT NULL,
  `co` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `tel` varchar(44) NOT NULL,
  `amt` varchar(44) NOT NULL,
  `com` varchar(44) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`pid`, `dat`, `name`, `co`, `email`, `tel`, `amt`, `com`) VALUES
(1, '23-APR-2020', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '2222', 'vv'),
(2, '23-APR-2014', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '2222', 'vv'),
(3, '28-APR-2020', 'tv center', 'NGO', 'tomusangeisaac@yahoo.com', '0700810121', '2222', '45'),
(4, '28-APR-2020', 'tv center', 'NGO', 'ssunaroger@yahoo.com', '0700810121', '2222', 'tv center'),
(5, '28-APR-2020', 'tv center', 'NGO0', 'patrick@yahoo.com', '0700810121', '222200', 'jvk'),
(6, '28-APR-2020', 'tv center', 'NGO', 'ssuna@yahoo.com', '0700810121', '2222', 'jvk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(44) NOT NULL,
  `password` varchar(44) NOT NULL,
  `usertype` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `usertype`) VALUES
('admin', 'admin', 'Administrator'),
('cash', 'cash', 'Cashier'),
('bod', 'bod', 'BOD'),
('regi', 'regi', 'Registrar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
