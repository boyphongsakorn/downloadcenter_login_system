-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 05:09 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boyphon1_dl`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `adminid` varchar(255) NOT NULL,
  `logourl` varchar(255) NOT NULL,
  `headurl` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `titlecolor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`adminid`, `logourl`, `headurl`, `title`, `titlecolor`) VALUES
('1075075735924471', 'http://brsocial.esy.es/boyphongsakorn_downloadcenter.png', 'http://investinbelarus.by/kcfinder/upload/images/atos-ascent-How-to-simplify-IT-complexity-to-enable-innovation.jpg', 'ศูนย์ดาว์นโหลด', '#ff0000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
