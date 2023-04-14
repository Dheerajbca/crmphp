-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 10:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(8) NOT NULL,
  `myusername` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `myusername`, `password`, `date`) VALUES
(1, 'dheeraj0639', 'dheeraj0639', '2023-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `coustomer`
--

CREATE TABLE `coustomer` (
  `sno` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `clothtype` varchar(100) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `address2` text DEFAULT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(15) NOT NULL,
  `zip` int(10) NOT NULL,
  `leadcomments` text NOT NULL,
  `administrationname` text NOT NULL,
  `leadtype` text NOT NULL,
  `Payment Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coustomer`
--

INSERT INTO `coustomer` (`sno`, `Date`, `fname`, `lname`, `clothtype`, `phonenumber`, `email`, `address`, `address2`, `country`, `state`, `zip`, `leadcomments`, `administrationname`, `leadtype`, `Payment Status`) VALUES
(1, '2023-04-02', 'Dheeraj', '+918427915962', 'coat', 918427915962, 'dheeraj0639@gmail.com', 'batta', '', 'India', 'Punjab', 140413, '', '', '', ''),
(2, '2023-04-02', 'Dheeraj', '+918427915962', 'coat', 918427915962, 'dheeraj0639@gmail.com', 'batta', '', 'India', 'Punjab', 140413, '', '', '', ''),
(3, '2023-04-02', 'prernaui', 'shian', 'dress', 559659226, 'ui@gmail.com', 'uo', '', 'India', 'Punjab', 140413, '', '', '', ''),
(4, '2023-04-02', 'prernaui', 'shian', 'dress', 559659226, 'ui@gmail.com', 'uo', '', 'India', 'Punjab', 140413, '', '', '', ''),
(5, '2023-04-02', 'oguuo', 'hooi', 'nnklnkl', 0, 'nnnii', 'jjpjp', 'nkpjp', 'India', 'Punjab', 54, '', '', '', ''),
(6, '2023-04-02', 'Dheeraj', 'kumar', 'dress', 9595489418, 'dheeraj0639@gmail.com', 'batta', '', 'India', '', 140413, '', '', '', ''),
(7, '2023-04-02', 'dfdfddf', 'fdfdddf', 'fdfdfdfdf', 0, 'fdfdfdfd', 'fdfdfdfdf', 'dfdfdf', 'India', 'Punjab', 599, '', '', '', ''),
(8, '2023-04-05', 'Dheeraj', '', '', 0, '', '', '', '', '', 0, '', '', '', ''),
(9, '2023-04-05', '', '', '', 0, '', '', '', '', '', 0, '', '', '', ''),
(10, '2023-04-05', '', '', '', 0, '', '', '', '', '', 0, '', '', '', ''),
(11, '2023-04-13', '', '', '', 0, '', '', '', '', '', 0, '', '', '', ''),
(12, '2023-04-13', 'dfdfddf', '+918427915962', '', 0, 'dheeraj0639@gmail.com', 'batta', '', 'India', '', 140413, '', '', '', ''),
(13, '2023-04-13', 'INder', 'Singh', 't shirt', 454644545465, 'dheeraj0639@gmail.com', 'batta', 'fdfd', 'India', '', 140413, '', '', '', ''),
(14, '2023-04-13', 'dfdfddf', '+918427915962', 'ADSDAS', 0, 'dheeraj0639@gmail.com', 'DASDAS', 'ADSDSA', '', '', 0, '', '', '', ''),
(15, '2023-04-13', 'AFDSAF', 'ADFDSAF', 'ASDFADSF', 0, 'FADF', 'ASDFASDA', 'FFDFASDF', 'India', 'Punjab', 0, 'FADSFA', 'DAFDSAF', '', 'ASDFADSFAD'),
(16, '2023-04-13', 'ADSFDASF', 'ADFFFA', 'FDASFDAS', 0, 'AFDSFADSF', 'ADFADSF', 'FASDFADF', 'India', 'Punjab', 0, 'FASDFASDFASD', 'ADSFASDFAS', '', 'FADSFASDFSDA'),
(17, '2023-04-13', 'Dheeraj', 'Kumar', 'in Review', 5656565656, 'prerna@gmail.com', 'Hell0o', '', 'India', 'Punjab', 140413, 'Call him at 9 pm', 'Prerna', '', 'Review'),
(18, '2023-04-13', 'Avneet', '+918427915962', 'dress', 48794, 'dheeraj0639@gmail.com', '', 'sfg', 'India', 'Punjab', 140413, 'batta', 'Prerna', '', 'Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `ID` (`Id`);

--
-- Indexes for table `coustomer`
--
ALTER TABLE `coustomer`
  ADD KEY `1` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coustomer`
--
ALTER TABLE `coustomer`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
