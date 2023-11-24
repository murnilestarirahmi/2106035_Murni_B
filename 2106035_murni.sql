-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 01:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106035_murni`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_antri` int(11) NOT NULL,
  `nm_pemilik` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `ktgr_hewan` varchar(10) NOT NULL,
  `nm_hewan` varchar(30) NOT NULL,
  `usia_hewan` int(11) NOT NULL,
  `jk_hewan` char(6) NOT NULL,
  `wrn_hewan` varchar(20) NOT NULL,
  `ras_hewan` varchar(20) NOT NULL,
  `layanan` varchar(30) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_antri`, `nm_pemilik`, `tgl_lahir`, `no_wa`, `ktgr_hewan`, `nm_hewan`, `usia_hewan`, `jk_hewan`, `wrn_hewan`, `ras_hewan`, `layanan`, `keluhan`) VALUES
(1, 'Murni', '2003-03-26', '089123123123', 'kucing', 'Milo', 26, 'jantan', 'Oranye', 'Mixed Dom', 'kesehatan', 'Demam sudah 2 hari'),
(2, 'Lestari', '1994-01-14', '089234234234', 'Otter', 'Sky', 24, 'Jantan', 'Abu-abu', '-', 'Pengobatan', 'Luka bakar di kaki'),
(3, 'Rahmi', '2002-05-02', '085456456456', 'Anjing', 'Daegal', 29, 'Betina', 'Putih', 'Bichon', 'Pasca Op', 'Kontrol pacsa steril');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_antri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_antri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
