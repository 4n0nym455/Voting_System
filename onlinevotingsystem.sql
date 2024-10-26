-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 11:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinevotingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `voterdata`
--

CREATE TABLE `voterdata` (
  `ID` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `mobile` int(10) NOT NULL,
  `registration` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `standard` enum('group','voter') NOT NULL,
  `status` int(11) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voterdata`
--

INSERT INTO `voterdata` (`ID`, `username`, `mobile`, `registration`, `password`, `photo`, `standard`, `status`, `votes`) VALUES
(1, 'joseph', 743743748, 'ct206/109461/22', '1234', 'DEMO.png', 'voter', 0, 0),
(2, 'john', 1234567890, 'ct103/1234/34', '12345', 'joseph.png.png', 'voter', 0, 0),
(3, 'farhiya', 1233456677, 'ct215/36/3334', '34567', 'Screenshot 2023-11-30 002629.png', 'voter', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voterdata`
--
ALTER TABLE `voterdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voterdata`
--
ALTER TABLE `voterdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
