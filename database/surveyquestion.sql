-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2019 at 10:08 AM
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
-- Table structure for table `surveyquestion`
--

CREATE TABLE `surveyquestion` (
  `qID` int(11) NOT NULL,
  `description` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `surveyquestion`
--

INSERT INTO `surveyquestion` (`qID`, `description`) VALUES
(1, 'Νομίζω ότι θα ήθελα να χρησιμοποιώ αυτά τα παιχνίδια συχνά'),
(2, 'Βρήκα αυτά τα παιχνίδια αδικαιολόγητα περίπλοκα'),
(3, 'Σκέφτηκα ότι αυτά τα παιχνίδια ήταν εύκολα στη χρήση'),
(4, 'Νομίζω ότι θα χρειαστώ βοήθεια από κάποιον ειδικό για να μπορέσω να χρησιμοποιήσω αυτά τα παιχνίδια'),
(5, 'Βρήκα τις διάφορες λειτουργίες σ’ αυτά τα παιχνίδια καλά ενσωματωμένες'),
(6, 'Σκέφτηκα ότι υπήρχε μεγάλη ασυνέπεια στη λειτουργία των παιχνιδιών'),
(7, 'Φαντάζομαι ότι οι περισσότεροι άνθρωποι θα μάθουν να χρησιμοποιούν αυτά τα παιχνίδια πολύ γρήγορα'),
(8, 'Βρήκα αυτά τα παιχνίδια πολύ δύσκολα/περίπλοκα στη χρήση'),
(9, 'Ένιωσα πολύ σίγουρος/η χρησιμοποιώντας αυτά τα παιχνίδια'),
(10, 'Χρειάστηκε να μάθω πολλά πράγματα πριν να μπορέσω να ξεκινήσω με αυτά τα παιχνίδια');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surveyquestion`
--
ALTER TABLE `surveyquestion`
  ADD PRIMARY KEY (`qID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
