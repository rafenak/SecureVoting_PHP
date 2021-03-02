-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 12:40 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `votecount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`ID`, `Name`, `votecount`) VALUES
(1, 'BJP', 43),
(2, 'INC', 110),
(3, 'SHI', 72),
(4, 'NCP', 32);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `ID` int(10) NOT NULL,
  `VoterCard` varchar(20) NOT NULL,
  `Number_of_ID` varchar(20) NOT NULL,
  `Names` varchar(20) NOT NULL,
  `FatherNames` varchar(20) NOT NULL,
  `MotherNames` varchar(20) NOT NULL,
  `DoB` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `sec_name` varchar(20) NOT NULL,
  `VotingCenter` varchar(20) NOT NULL,
  `PoB` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'nonvoted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`ID`, `VoterCard`, `Number_of_ID`, `Names`, `FatherNames`, `MotherNames`, `DoB`, `State`, `District`, `sec_name`, `VotingCenter`, `PoB`, `password`, `status`) VALUES
(1, '12345', '987654321', 'Rafe', 'Farooque', 'Shazia', '20/03/1997', 'Maharashtra', 'Thane', 'Bhiwandi', 'Golden School', '987654321', '12345', 'voted'),
(2, '123456', '78999484913', 'abc', 'xyz', 'ijk', '25/05/1996', 'Gujrat', 'valsad', 'mnk', 'lmnop', '123455', '123456', 'nonvoted'),
(3, '12', 'qw', 'dafda', 'fafs', 'fsf', 'ffssFW', 'WWWG', 'RGWGE', 'DSGHD', 'dfbdq', 'gsg', '12', 'voted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
