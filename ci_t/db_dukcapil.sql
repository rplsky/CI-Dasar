-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 12:20 PM
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
-- Database: `db_dukcapil`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarga`
--

CREATE TABLE `tbl_keluarga` (
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('ISLAM','KRISTEN KATOLIK','KRISTEN PROTESTAN','HINDU','BUDHA','KONGHUCU') NOT NULL,
  `pendidikan` varchar(5) NOT NULL,
  `jenis_pekerjaan` varchar(30) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `no_kk` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_keluarga`
--

INSERT INTO `tbl_keluarga` (`nik`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jenis_pekerjaan`, `golongan_darah`, `no_kk`) VALUES
('3217060708020018', 'vv cxvd', 'LAKI-LAKI', 'BANDUNG', '2023-08-27', 'ISLAM', 'SD', 'PELAJAR/MAHASISWA', 'O', '335345'),
('3217060801960001', 'RIZKY FAUZI ACHMAN', 'LAKI-LAKI', 'BANDUNG', '1996-01-08', 'ISLAM', 'S1', 'PELAJAR/MAHASISWA', 'B', '3217060305056168'),
('3217060804670002', 'AAM ACHMAN', 'LAKI-LAKI', 'BANDUNG', '1967-04-08', 'ISLAM', 'SMA', 'KARYAWAN SWASTA', 'A', '3217060305056168'),
('3217064905700001', 'JUJU WAHJUNINGSIH', 'PEREMPUAN', 'GARUT', '1970-05-09', 'ISLAM', 'SMA', 'MENGURUS RUMAH TANGGA', 'B', '3217060305056168');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `desakelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupatenkota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `kepala_dukcapil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kk`
--

INSERT INTO `tbl_kk` (`no_kk`, `nama_kk`, `alamat`, `rt`, `rw`, `desakelurahan`, `kecamatan`, `kabupatenkota`, `provinsi`, `kodepos`, `tgl_keluar`, `kepala_dukcapil`) VALUES
('3217060305056168', 'AAM ACHMAN', 'BUMI PAKUSARAKAN D3 NO. 15', '001', '019', 'TANIMULYA', 'NGAMPRAH', 'BANDUNG BARAT', 'JAWA BARAT', '40551', '2021-06-15', 'DRS. H. HENDRA TRISMAYADI, M.SI'),
('335345', 'bhcj', 'jh bjh', '001', '009', 'sbdjk', 'vcds', 'Cimahi', 'csd', '40552', '2023-08-27', 'Rizky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `fk_keluarga_kk` (`no_kk`);

--
-- Indexes for table `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`no_kk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  ADD CONSTRAINT `fk_keluarga_kk` FOREIGN KEY (`no_kk`) REFERENCES `tbl_kk` (`no_kk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
