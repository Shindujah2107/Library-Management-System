-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 06:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library2`
--
CREATE DATABASE IF NOT EXISTS `library2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library2`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `post` varchar(100) NOT NULL,
  `jdate` date NOT NULL,
  `quali` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `address1`, `address2`, `phone`, `post`, `jdate`, `quali`, `exp`, `username`, `password`) VALUES
(0, 'Ram', 'sdfghsdfgh', 'dfgh', 765843943, 'Librarian', '2020-01-09', 'Bcom', 'ghjj', 'aaa', '47bce5c74f589f4'),
(10, 'Meera Ram', 'No:01,main street ,Badulla.', 'No:01,main street ,Badulla.', 716001044, 'Admin', '2020-01-15', 'Bcom', 'New', 'meera', 'meera'),
(11, 'Kala', 'No:02,Main Street. Badulla.', 'mainNo:02,Main Street. Kandy .', 765843943, 'Library Assistant', '2020-01-17', 'Bcom', 'New', 'aaa', '202cb962ac59075');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);
