-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2019 at 10:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webite`
--

-- --------------------------------------------------------

--
-- Table structure for table `gameevent`
--

CREATE TABLE `gameevent` (
  `gameEventID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `hit` int(11) NOT NULL,
  `miss` int(11) NOT NULL,
  `quit` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `avgSpeed` int(11) NOT NULL,
  `playtime` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `startTimestamp` int(11) NOT NULL,
  `enTimestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gameevent`
--
ALTER TABLE `gameevent`
  ADD PRIMARY KEY (`gameEventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gameevent`
--
ALTER TABLE `gameevent`
  MODIFY `gameEventID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
