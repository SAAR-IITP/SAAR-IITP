-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2019 at 10:26 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6497535_saar`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactInfo`
--

CREATE TABLE `contactInfo` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact` bigint(15) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactInfo`
--

INSERT INTO `contactInfo` (`name`, `contact`, `email`) VALUES
('', 0, ''),
('vatsal.singhal.vs@gmail.com', 9313906989, 'vatsal.singhal.vs@gmail.com'),
('vatsal', 9313906989, 'vatsal.singhal.vs@gmail.com'),
('Chandan', 9113305904, 'chandanmahi1998@gmail.com'),
('vatsal singhal', 9891824200, 'vatsal.eliot@gmail.com'),
('vatsal singhal', 9891824200, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `college_id` varchar(9) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_no` bigint(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb_id` varchar(300) DEFAULT NULL,
  `linkden` varchar(300) DEFAULT NULL,
  `DOB` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `graduation_year` text NOT NULL,
  `degree` varchar(50) NOT NULL,
  `department` text NOT NULL,
  `employment_type` text NOT NULL,
  `present_employer` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `achievement` varchar(50) NOT NULL,
  `date_of_registration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`college_id`, `first_name`, `last_name`, `contact_no`, `email`, `fb_id`, `linkden`, `DOB`, `password`, `graduation_year`, `degree`, `department`, `employment_type`, `present_employer`, `designation`, `address`, `city`, `state`, `country`, `achievement`, `date_of_registration`) VALUES
('1234567', 'qwert', 'qwerty', 9876543210, 'qwerty@iitp.ac.in', '1234567', '1234567', '1998-01-31', 'ea3a56c6a1f0272ec675c598699add1d43e4cf12', '2014', 'B.Tech', 'CSE', 'job', 'qwertyuqwerty', 'wertyui', 'dsfdfsfsfsdf', 'qwertyqwerty', 'haryana', 'india', 'qwertyuiop[asdfghjklzxcvbnm', '2019-03-26'),
('123456789', 'Abhinav', 'agyag', 9876543234, 'abkgyna@gmail.com', 'adasfaaasfaafasfs', 'aasagas', '2019-03-15', '6367c48dd193d56ea7b0baad25b19455e529f5ee', '2019', 'M.Tech', 'EE', 'Entrepreneur', 'sdfghjk', 'avasjv', 'ncasjkvasv vaiugvia vaa', 'saafaaasfaa', 'asfas', 'Indian', 'awfaag', '2019-03-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`college_id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
