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
-- Table structure for table `hello`
--

CREATE TABLE `hello` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  `downloadurl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hello`
--

INSERT INTO `hello` (`id`, `name`, `comment`, `category`, `price`, `data`, `imageurl`, `downloadurl`) VALUES
(0, 'Teacher ITKKTech Facebook Reactions', 'Chrome Extensions เปลี่ยนจากรูปไลค์ธรรมดาเป็นรูปหน้าอาจารย์ เทคโนโลยีและสารสนเทศ', 'Chrome Extensions', 'ฟรี', '9 กรกฎาคม 2559', 'http://brsocial.esy.es/icon128.png', 'https://chrome.google.com/webstore/detail/teacher-itkktech-facebook/ggmiggmcgfodhcemjfonjbgkaecncifn'),
(1, 'Optifine Auto Updater 3.1 (UK)', 'โปรแกรมที่อัดเดตเวอร์ชั่นOptifineในMinecraftของคุณ!! ถ้า เวอร์ชั่น มาใหม่ เราอัดเดตทันที', 'โปรแกรมช่วยอัดเดต', 'ฟรี', '12 มิถุนายน 2559', 'http://skin-mine.com/pic/Minecraft.ico', 'https://github.com/boyphongsakorn/Optifine_Auto_Updater/releases/download/v3.1/OptiFine_Auto_Updater_UK_Server.exe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hello`
--
ALTER TABLE `hello`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
