-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 04:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kajian_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kajian`
--

CREATE TABLE `jadwal_kajian` (
  `id_kajian` int(11) NOT NULL,
  `id_ustadz` int(11) NOT NULL,
  `id_kitab` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `hari_kajian` varchar(10) NOT NULL,
  `waktu_kajian` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kajian`
--

INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `hari_kajian`, `waktu_kajian`, `keterangan`) VALUES
(1, 3, 1, 1, 'Selasa', 'Setiap 2 pekan sekali', '');

-- --------------------------------------------------------

--
-- Table structure for table `kitab`
--

CREATE TABLE `kitab` (
  `id_kitab` int(11) NOT NULL,
  `nama_kitab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitab`
--

INSERT INTO `kitab` (`id_kitab`, `nama_kitab`) VALUES
(1, 'Maqolatul Islamiyyin');

-- --------------------------------------------------------

--
-- Table structure for table `mesjid`
--

CREATE TABLE `mesjid` (
  `id_mesjid` int(11) NOT NULL,
  `nama_mesjid` varchar(100) NOT NULL,
  `alamat_mesjid` varchar(250) NOT NULL,
  `lokasi_mesjid` varchar(250) NOT NULL,
  `foto_mesjid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mesjid`
--

INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`) VALUES
(1, 'Masjid Al Ikhlas', 'Jl. Supriyadi Kademangan, Bondowoso Jawa Timur 68217', 'https://www.google.com/maps/place/Masjid+Al-Ikhlas+Bondowoso/@-7.9175425,113.832716,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dcc739912737:0xb915c9003edbb00f!8m2!3d-7.9175136!4d113.8327231', '');

-- --------------------------------------------------------

--
-- Table structure for table `ustadz`
--

CREATE TABLE `ustadz` (
  `id_ustadz` int(11) NOT NULL,
  `nama_ustadz` varchar(100) NOT NULL,
  `ket_ustadz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ustadz`
--

INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES
(1, 'Agus Barnianto', 'Pembina Yayasan Al Qolam'),
(3, 'Muhammad Yasir,lc.,M.Hi', 'Dosen STDI Jember');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `nama_waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES
(1, 'Ba\'da Maghrib - selesai'),
(2, 'Jam 16.00 WIB - selesai'),
(3, 'Ba\'da Isya\' 19.30 WIB - selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kajian`
--
ALTER TABLE `jadwal_kajian`
  ADD PRIMARY KEY (`id_kajian`),
  ADD KEY `id_ustadz` (`id_ustadz`),
  ADD KEY `id_kitab` (`id_kitab`),
  ADD KEY `id_waktu` (`id_waktu`);

--
-- Indexes for table `kitab`
--
ALTER TABLE `kitab`
  ADD PRIMARY KEY (`id_kitab`);

--
-- Indexes for table `mesjid`
--
ALTER TABLE `mesjid`
  ADD PRIMARY KEY (`id_mesjid`);

--
-- Indexes for table `ustadz`
--
ALTER TABLE `ustadz`
  ADD PRIMARY KEY (`id_ustadz`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_kajian`
--
ALTER TABLE `jadwal_kajian`
  MODIFY `id_kajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitab`
--
ALTER TABLE `kitab`
  MODIFY `id_kitab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mesjid`
--
ALTER TABLE `mesjid`
  MODIFY `id_mesjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ustadz`
--
ALTER TABLE `ustadz`
  MODIFY `id_ustadz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_kajian`
--
ALTER TABLE `jadwal_kajian`
  ADD CONSTRAINT `jadwal_kajian_ibfk_1` FOREIGN KEY (`id_kitab`) REFERENCES `kitab` (`id_kitab`),
  ADD CONSTRAINT `jadwal_kajian_ibfk_2` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`),
  ADD CONSTRAINT `jadwal_kajian_ibfk_3` FOREIGN KEY (`id_ustadz`) REFERENCES `ustadz` (`id_ustadz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
