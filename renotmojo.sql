-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 11:14 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renotmojo`
--

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--

CREATE TABLE `phonebook` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `DOB` date NOT NULL,
  `MobileNumber2` bigint(10) DEFAULT NULL,
  `Email2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phonebook`
--

INSERT INTO `phonebook` (`ID`, `name`, `Email`, `MobileNumber`, `DOB`, `MobileNumber2`, `Email2`) VALUES
(13, 'Ankita Bishnoi', 'bishnoiankita23@gmail.com', 7263546578, '2020-05-21', 8708922315, 'bishnoiankita23@gmail.com'),
(16, 'Aman', 'Aman@gmail.com', 7263546578, '2020-05-01', 6455788697, 'Aman2@gmail.com'),
(17, 'Anil', 'Anil@gmail.com', 7263546578, '2020-05-12', 8708922315, 'Anil2@gmail.com'),
(18, 'Pragya', 'Pragya@gmail.com', 7263546578, '2020-05-06', 8708922315, 'Pragya2@gmail.com'),
(19, 'Akansha', 'Akansha@gmail.com', 7263546578, '2020-05-15', 0, ''),
(20, 'Ankita Bishnoi', 'bishnoiankita23@gmail.com', 7263546578, '2020-05-06', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phonebook`
--
ALTER TABLE `phonebook`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phonebook`
--
ALTER TABLE `phonebook`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
