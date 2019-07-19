-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 19 Ιουλ 2019 στις 03:29:26
-- Έκδοση διακομιστή: 10.3.16-MariaDB
-- Έκδοση PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `webite`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `statistic`
--

CREATE TABLE `statistic` (
  `statisticID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `rounds` int(11) NOT NULL,
  `hit` int(11) NOT NULL,
  `miss` int(11) NOT NULL,
  `quits` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `avgSpeed` int(11) NOT NULL,
  `playTotalTime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
