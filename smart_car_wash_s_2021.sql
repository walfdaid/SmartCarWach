-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 08:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_car_wash_s_2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(20) NOT NULL,
  `Station_ID` int(20) NOT NULL,
  `Title` varchar(250) COLLATE utf8_bin NOT NULL,
  `Description` varchar(250) COLLATE utf8_bin NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Station_ID`, `Title`, `Description`, `Price`) VALUES
(1, 1, 'test', 'test', 50);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `ID` int(20) NOT NULL,
  `Name` varchar(250) COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) COLLATE utf8_bin NOT NULL,
  `Address` varchar(250) COLLATE utf8_bin NOT NULL,
  `Longitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Latitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Username` varchar(250) COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`ID`, `Name`, `Phone_Number`, `Address`, `Longitude`, `Latitude`, `Username`, `Password`, `Status`, `Add_Date_Time`) VALUES
(1, 'Test', '0790000000', 'Amman', '35.910514', '31.954302', 'station', '123456789', 'Active', '2021-04-21 06:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `Name` varchar(250) COLLATE utf8_bin NOT NULL,
  `Phone_Number` varchar(250) COLLATE utf8_bin NOT NULL,
  `Longitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Latitude` varchar(250) COLLATE utf8_bin NOT NULL,
  `Password` varchar(250) COLLATE utf8_bin NOT NULL,
  `Status` varchar(250) COLLATE utf8_bin NOT NULL,
  `Add_Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Phone_Number`, `Longitude`, `Latitude`, `Password`, `Status`, `Add_Date_Time`) VALUES
(1, 'Ahmad', '0790000000', '35.910514', '31.954302', '123456789', 'Active', '2021-04-21 06:43:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Station_ID` (`Station_ID`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `Station_ID` FOREIGN KEY (`Station_ID`) REFERENCES `stations` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
