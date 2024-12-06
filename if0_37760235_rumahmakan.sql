-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.infinityfree.com
-- Generation Time: Dec 05, 2024 at 11:07 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_37760235_rumahmakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `DaftarMeja`
--

CREATE TABLE `DaftarMeja` (
  `NomorMeja` int(3) NOT NULL,
  `NamaMeja` varchar(10) NOT NULL,
  `Potongan` double(5,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DaftarMenu`
--

CREATE TABLE `DaftarMenu` (
  `KodeMenu` int(3) NOT NULL,
  `NamaMenu` varchar(45) NOT NULL,
  `HargaJual` double(7,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `IsiStrukNota`
--

CREATE TABLE `IsiStrukNota` (
  `NomorNota` int(10) NOT NULL,
  `KodeMenu` int(3) NOT NULL,
  `JumlahPesanan` double(5,3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `KodePetugas` int(2) NOT NULL,
  `NamaPetugas` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Level` enum('Pramusaji','Kasir','Admin') NOT NULL DEFAULT 'Pramusaji'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `StrukNota`
--

CREATE TABLE `StrukNota` (
  `NomorNota` int(10) NOT NULL,
  `NomorMeja` int(3) NOT NULL,
  `WaktuPesan` datetime NOT NULL DEFAULT current_timestamp(),
  `TotalHarga` double(15,2) DEFAULT NULL,
  `KodePetugas` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `DaftarMeja`
--
ALTER TABLE `DaftarMeja`
  ADD PRIMARY KEY (`NomorMeja`);

--
-- Indexes for table `DaftarMenu`
--
ALTER TABLE `DaftarMenu`
  ADD PRIMARY KEY (`KodeMenu`);

--
-- Indexes for table `IsiStrukNota`
--
ALTER TABLE `IsiStrukNota`
  ADD KEY `IndexNota` (`NomorNota`),
  ADD KEY `IndexMenu` (`KodeMenu`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`KodePetugas`);

--
-- Indexes for table `StrukNota`
--
ALTER TABLE `StrukNota`
  ADD PRIMARY KEY (`NomorNota`),
  ADD KEY `IndexMeja` (`NomorMeja`),
  ADD KEY `IndexKodePetugas` (`KodePetugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `DaftarMeja`
--
ALTER TABLE `DaftarMeja`
  MODIFY `NomorMeja` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DaftarMenu`
--
ALTER TABLE `DaftarMenu`
  MODIFY `KodeMenu` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `KodePetugas` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `StrukNota`
--
ALTER TABLE `StrukNota`
  MODIFY `NomorNota` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
