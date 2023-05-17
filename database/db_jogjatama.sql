-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 06:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jogjatama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `kode_jabatan` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `kode_jabatan`, `jabatan`) VALUES
(1, 'ja0001', 'Jabatan Web Development'),
(3, 'ja0002', 'Sales Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontrak`
--

CREATE TABLE `tb_kontrak` (
  `id_kontrak` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nilai_kontrak` varchar(200) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kontrak`
--

INSERT INTO `tb_kontrak` (`id_kontrak`, `id_pegawai`, `id_jabatan`, `nilai_kontrak`, `tanggal_awal`, `tanggal_akhir`) VALUES
(1, 1, 1, '2000000', '2023-05-01', '2023-05-05'),
(2, 2, 3, '40000000', '2023-05-18', '2023-05-21'),
(5, 3, 3, '15000000', '2023-05-18', '2023-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_pegawai` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `id_jabatan`, `nama_pegawai`, `jenis_kelamin`, `telepon`, `alamat`) VALUES
(1, 1, 'Latif Khusaini', 'Laki-laki', '232323', 'Sleman'),
(2, 3, 'romadhon', 'Laki-laki', '0987123123', 'sleman'),
(3, 3, 'Khusaini Romadhon', 'Laki-laki', '1234', 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  ADD PRIMARY KEY (`id_kontrak`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kontrak`
--
ALTER TABLE `tb_kontrak`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
