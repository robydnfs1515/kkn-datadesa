-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 05:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datadesatt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bbm`
--

CREATE TABLE `tb_bbm` (
  `id_bbm` int(11) NOT NULL,
  `nama_bbm` varchar(50) NOT NULL,
  `nonik_bbm` varchar(20) NOT NULL,
  `jumlah_bbm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bbm`
--

INSERT INTO `tb_bbm` (`id_bbm`, `nama_bbm`, `nonik_bbm`, `jumlah_bbm`) VALUES
(1, 'A', '354534534534', 'dawdawd'),
(3, 'B', '4534646346', '46346346346346');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bpnt`
--

CREATE TABLE `tb_bpnt` (
  `id_bpnt` int(11) NOT NULL,
  `nama_bpnt` varchar(50) NOT NULL,
  `nonik_bpnt` varchar(20) NOT NULL,
  `jumlah_bpnt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bpnt`
--

INSERT INTO `tb_bpnt` (`id_bpnt`, `nama_bpnt`, `nonik_bpnt`, `jumlah_bpnt`) VALUES
(2, 'A', '3423525', '23423');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pkp`
--

CREATE TABLE `tb_pkp` (
  `id_pkp` int(11) NOT NULL,
  `nama_pkp` varchar(50) NOT NULL,
  `nonik_pkp` varchar(20) NOT NULL,
  `jumlah_pkp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pkp`
--

INSERT INTO `tb_pkp` (`id_pkp`, `nama_pkp`, `nonik_pkp`, `jumlah_pkp`) VALUES
(2, 'A', '35235235235235', '2352352'),
(3, 'B', '42453252523523', '325235');

-- --------------------------------------------------------

--
-- Table structure for table `tb_umkm`
--

CREATE TABLE `tb_umkm` (
  `id_umkm` int(11) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `nonik_umkm` varchar(20) NOT NULL,
  `jumlah_umkm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_umkm`
--

INSERT INTO `tb_umkm` (`id_umkm`, `nama_umkm`, `nonik_umkm`, `jumlah_umkm`) VALUES
(2, 'A', '2423648234', '343342');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upah`
--

CREATE TABLE `tb_upah` (
  `id_upah` int(11) NOT NULL,
  `nama_upah` varchar(30) NOT NULL,
  `nonik_upah` varchar(20) NOT NULL,
  `jumlah_upah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_upah`
--

INSERT INTO `tb_upah` (`id_upah`, `nama_upah`, `nonik_upah`, `jumlah_upah`) VALUES
(1, 'A', '28356239856328', '2376284238946'),
(2, 'B', '4236482394', '84328497234'),
(8, 'C', '234242', '2424234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bbm`
--
ALTER TABLE `tb_bbm`
  ADD PRIMARY KEY (`id_bbm`);

--
-- Indexes for table `tb_bpnt`
--
ALTER TABLE `tb_bpnt`
  ADD PRIMARY KEY (`id_bpnt`);

--
-- Indexes for table `tb_pkp`
--
ALTER TABLE `tb_pkp`
  ADD PRIMARY KEY (`id_pkp`);

--
-- Indexes for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- Indexes for table `tb_upah`
--
ALTER TABLE `tb_upah`
  ADD PRIMARY KEY (`id_upah`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bbm`
--
ALTER TABLE `tb_bbm`
  MODIFY `id_bbm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_bpnt`
--
ALTER TABLE `tb_bpnt`
  MODIFY `id_bpnt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pkp`
--
ALTER TABLE `tb_pkp`
  MODIFY `id_pkp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  MODIFY `id_umkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_upah`
--
ALTER TABLE `tb_upah`
  MODIFY `id_upah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
