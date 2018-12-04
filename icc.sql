-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 06:32 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldata`
--

CREATE TABLE `tbldata` (
  `ID` int(11) NOT NULL,
  `MUNICIPALITY` text,
  `SITES` text,
  `BRGY` text,
  `VOLUNTEERS` text,
  `DISTANCE` text,
  `WEIGHT` text,
  `TRASH_BAGS` text,
  `PLASTIC` text,
  `TINY_TRASH` text,
  `OTHER_TRASH` text,
  `GLASS_METALS` text,
  `FISHING_GEAR` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldata`
--

INSERT INTO `tbldata` (`ID`, `MUNICIPALITY`, `SITES`, `BRGY`, `VOLUNTEERS`, `DISTANCE`, `WEIGHT`, `TRASH_BAGS`, `PLASTIC`, `TINY_TRASH`, `OTHER_TRASH`, `GLASS_METALS`, `FISHING_GEAR`) VALUES
(1, 'Sta. Cruz', '2', '2', '3', '4', '5', '6', '7', '8', '7', '8', '7'),
(2, 'Botolan', '12', '32', '100', '12', '50', '100', '34', '43', '43', '43', '43'),
(3, 'Cabangan', '11', '30', '100', '12', '50', '100', '34', '43', '43', '43', '43'),
(4, 'San Felipe', '10', '', '100', '12', '2', '100', '34', '43', '43', '43', '43'),
(5, 'Sta. Cruz', '8', '6', '02', '1500', '20', '50', '20', '30', '500', '20', '30'),
(6, 'Masinloc', '2', '3', '55', '1200', '35', '464', '3', '6', '7', '8', '5'),
(7, 'Masinloc', '3', '3', '4', '5', '55', '66', '22', '33', '44', '55', '66'),
(8, 'Candelaria', '3', '4', '5', '5', '7', '88', '88', '88', '55', '66', '77'),
(9, 'Subic', '34', '43', '54', '56', '65', '45', '64', '46', '76', '67', '87'),
(10, 'San Narciso', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123', '123'),
(11, 'Palauig', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldata`
--
ALTER TABLE `tbldata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldata`
--
ALTER TABLE `tbldata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
