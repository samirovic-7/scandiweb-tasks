-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 12:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scandiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `SKU` int(250) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Weight` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `SKU` int(250) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Size` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`SKU`, `Name`, `Price`, `State`, `Size`) VALUES
(23, 'محمد', '87.00', 'DVD', 120),
(324, 'سمير', '50.40', 'DVD', 21),
(333, 'mymy', '22.00', 'DVD', 3),
(342, 'واحد', '0.04', 'DVD', 25);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `SKU` int(250) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Height` int(50) NOT NULL,
  `Width` int(50) NOT NULL,
  `length` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`SKU`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`SKU`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`SKU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
