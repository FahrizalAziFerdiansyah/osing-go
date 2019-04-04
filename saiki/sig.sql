-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 01:11 PM
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
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_lengkap`
--

CREATE TABLE `info_lengkap` (
  `id_tempat` int(4) NOT NULL,
  `informasi` varchar(50) NOT NULL,
  `banyak_ditelusuri` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasaweb`
--

CREATE TABLE `jasaweb` (
  `id_perusahaan` int(8) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasaweb`
--

INSERT INTO `jasaweb` (`id_perusahaan`, `nama_perusahaan`, `kategori`, `website`, `no_hp`, `alamat`, `kota`, `provinsi`, `latitude`, `longitude`) VALUES
(1, 'Jasa Pembuatan Website dan Adwords Surabaya Wolacom', 'Internet Marketing', 'wolacom.com', '0812-3555-7773', 'Tower B No 1132 Apartemen Puncak Permai Jalan Raya Darmo Permai 3 Sukomanunggal Surabaya Surabaya City East Java 60188', 'Surabaya', 'Jawa Timur', '-7.277882', '112.4114625'),
(3, 'Jasa Pembuatan Website Situs Toko Online BikinDesainSitus', 'Web Development', 'bikindesainsitus.web.id', '0856-4839-0911', 'Lambang Kuning Kertosono Nganjuk Regency East Java 64315', 'Nganjuk', 'Jawa Timur', '-7.6508023', '112.0022188');

-- --------------------------------------------------------

--
-- Table structure for table `tambah_kecamatan`
--

CREATE TABLE `tambah_kecamatan` (
  `id_kecamatan` int(4) NOT NULL,
  `nama_kecamatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_tempat` int(4) NOT NULL,
  `nama_tempat` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `lat` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `daerah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_lengkap`
--
ALTER TABLE `info_lengkap`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `jasaweb`
--
ALTER TABLE `jasaweb`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tambah_kecamatan`
--
ALTER TABLE `tambah_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_lengkap`
--
ALTER TABLE `info_lengkap`
  MODIFY `id_tempat` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jasaweb`
--
ALTER TABLE `jasaweb`
  MODIFY `id_perusahaan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tambah_kecamatan`
--
ALTER TABLE `tambah_kecamatan`
  MODIFY `id_kecamatan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_tempat` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
