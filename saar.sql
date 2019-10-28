-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 08:38 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saar`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnus`
--

CREATE TABLE `alumnus` (
  `id` int(11) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fb_link` varchar(250) NOT NULL,
  `linkedin_link` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `graduation_year` year(4) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `employment_type` varchar(100) NOT NULL,
  `present_employer` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `achievements` text NOT NULL,
  `verification_code` varchar(250) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `img_url` varchar(250) NOT NULL DEFAULT 'https://saar-server.000webhostapp.com/images/profile_images/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumnus`
--

INSERT INTO `alumnus` (`id`, `rollno`, `first_name`, `last_name`, `email`, `phone`, `fb_link`, `linkedin_link`, `password`, `dob`, `graduation_year`, `degree`, `department`, `employment_type`, `present_employer`, `designation`, `address`, `country`, `state`, `city`, `achievements`, `verification_code`, `active`, `img_url`) VALUES
(6, '1801me07', 'Amartya', 'Mondal', 'qwerty@gmail.com', '8967570983', '', '', 'f181c50384d8adc56a0ff990d33568f686059c87', '4/1/2000', 2012, 'B.Tech.', 'Mechanical Engineering', 'Entrepreneur', 'DSC', 'Lead', 'Durgapur', 'India', 'West Bengal', 'Durgapur', 'GSOC', '34379', 1, 'https://saar-server.000webhostapp.com/images/profile_images/1801me07.jpg'),
(18, '1801cs50', 'Somenath ', 'Sarkar ', 'somenath1435@gmail.com', '8013054710', '', '', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '14/9/1998', 2018, 'B.Tech.', 'Computer Science and Engineering', 'Entrepreneur', '', '', '', '', '', '', '', '12157', 1, 'https://saar-server.000webhostapp.com/images/profile_images/1801cs50.jpg'),
(19, '1801cs34', 'Oindrila', 'Bhadra', 'oindrilabhadra78@gmail.com', '9903465850', '', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7/8/1999', 2012, 'B.Tech.', 'Computer Science and Engineering', 'Salaried', '', '', '', '', '', '', '', '20886', 1, 'https://saar-server.000webhostapp.com/images/profile_images/default.png'),
(20, '1801cs38', 'Pranay', 'Gupta', 'pranaykgupta21@gmail.com', '9354008441', '', '', '27ef3de6bdd6ec7dff3a5e67ae23fbe17a5cc7fe', '2001-08-21', 2022, 'B.Tech', 'CSE', 'job', 'Kuch hbhi man lo', 'ceo', 'P-2 / 3 , Budh Vihar, Phase-1 , Delhi 110086', 'India', 'Delhi', 'New Delhi', 'none', '43018', 1, 'https://saar-server.000webhostapp.com/images/profile_images/default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnus`
--
ALTER TABLE `alumnus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll_no` (`rollno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnus`
--
ALTER TABLE `alumnus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
