-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 07:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `fasilitas` text NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `harga`, `fasilitas`, `tipe`, `status`) VALUES
(1, 500000, 'Kamar ukuran 3x4 meter persegi dengan isian spring bed, kipas angin, dan lemari', 'standart', 'rented'),
(2, 500000, 'Kamar ukuran 3x4 meter persegi dengan isian spring bed, kipas angin, dan lemari', 'standart', 'rented'),
(3, 500000, 'Kamar ukuran 3x4 meter persegi dengan isian spring bed, kipas angin, dan lemari', 'standart', 'rented'),
(4, 500000, 'Kamar ukuran 3x4 meter persegi dengan isian spring bed, kipas angin, dan lemari', 'standart', 'rented'),
(5, 700000, 'Kamar ukuran 4x6 meter persegi dengan isian spring bed, kipas angin, dan lemari', 'large', 'available'),
(6, 700000, 'Kamar ukuran 4x6 meter persegi dengan isian spring bed, kipas angin, dan lemari', 'large', 'rented'),
(7, 700000, 'Kamar ukuran 4x6 meter persegi dengan isian spring bed, kipas angin, dan lemari', 'large', 'rented'),
(8, 1000000, 'Kamar ukuran 4x6 meter persegi dengan isian spring bed, AC, dan lemari', 'exclusive', 'rented'),
(9, 1000000, 'Kamar ukuran 4x6 meter persegi dengan isian spring bed, AC, dan lemari', 'exclusive', 'rented'),
(10, 1000000, 'Kamar ukuran 4x6 meter persegi dengan isian spring bed, AC, dan lemari', 'exclusive', 'rented');

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(10) NOT NULL,
  `id_penghuni` int(10) NOT NULL,
  `keluhan` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_keluhan` datetime NOT NULL DEFAULT current_timestamp(),
  `proses` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `id_penghuni`, `keluhan`, `status`, `tgl_keluhan`, `proses`) VALUES
(34, 22, 'sumppa aku tu cape banget huweee', 'diproses', '2023-06-17 22:16:19', 'hiyyaa'),
(35, 22, 'aaaaaa', 'diterima', '2023-06-17 23:41:31', 'bb bb bbbbbbbbbbb bbbbbbb bbbbbb');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(10) NOT NULL,
  `id_penghuni` int(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `tanggal_bayar` datetime NOT NULL DEFAULT current_timestamp(),
  `jenis` varchar(15) NOT NULL,
  `bukti` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `id_penghuni`, `periode`, `tanggal_bayar`, `jenis`, `bukti`) VALUES
(1, 22, '', '2023-06-11 00:00:00', 'cash', ''),
(4, 36, 'juni', '2023-06-11 19:25:23', 'transfer', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(10) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `username`, `password`) VALUES
(1, 'nisa', 'nisaa', '123'),
(2, 'farras', 'farras', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id_pengelola` int(10) NOT NULL,
  `nama_pengelola` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id_pengelola`, `nama_pengelola`, `username`, `password`) VALUES
(1, 'karima', 'karimaaa', '333'),
(2, 'taehyung', 'thv', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `kategori` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tgl`, `kategori`, `deskripsi`, `jumlah`) VALUES
(1, '2023-06-16 11:56:03', 'Perbaikan', 'Talang air', 300000),
(3, '2023-06-16 23:41:00', 'Pembayaran', 'Membayar PLN Bulan Mei', 200000),
(4, '2023-06-18 01:26:07', 'Pembayaran', 'membayar iuran warga', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `id_penghuni` int(10) NOT NULL,
  `nama_penghuni` varchar(30) NOT NULL,
  `nik` int(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(15) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_keluar` datetime DEFAULT NULL,
  `id_kamar` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`id_penghuni`, `nama_penghuni`, `nik`, `username`, `password`, `tgl_lahir`, `alamat`, `no_hp`, `pekerjaan`, `tgl_masuk`, `tgl_keluar`, `id_kamar`) VALUES
(22, 'farras dsjavge lwdufwifud', 12312, 'farrass', '679', '2003-02-26', 'GOLANTEPUS, RT.02/RW.01, MEJOBO, KUDUS', 888888, 'millioner', '2023-06-10 20:57:00', '1970-01-01 01:00:00', 3),
(32, 'khairunnisa kpkp', 1132412, 'kape', '1234', '2023-06-11', 'Jl. Raya Sarik Laweh', 2147483647, 'mahasiswa', '2023-06-11 05:54:00', '1970-01-01 01:00:00', 2),
(33, 'sisi', 646, 'xixi', '1234', '2023-06-08', 'Jl. Raya Sarik Laweh', 1231, 'mahasiswa', '2023-06-11 06:07:00', '1970-01-01 01:00:00', 10),
(34, 'Farras Hafizhah', 2147483647, 'farrs', '123', '2003-02-26', 'Jl. Raya Sarik Laweh', 2147483647, 'mahasiswa', '2023-06-11 07:43:00', '1970-01-01 01:00:00', 7),
(36, 'taehyung', 123456, 'thv', '123', '1995-12-30', 'daegu', 823456, 'idol', '2023-06-11 07:52:00', '1970-01-01 01:00:00', 4),
(37, 'Melvina Ruth', 2147483647, 'melvinaruth', '345', '2003-03-01', 'ergdfaw', 2147483647, 'mahasiswa', '2023-06-16 10:20:00', '1970-01-01 01:00:00', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `id_penghuni` (`id_penghuni`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`),
  ADD KEY `id_penghuni` (`id_penghuni`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id_pengelola`),
  ADD KEY `password` (`password`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id_penghuni`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id_pengelola` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id_penghuni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`);

--
-- Constraints for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`);

--
-- Constraints for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
