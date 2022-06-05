-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 03:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pangkat_golongan` varchar(20) NOT NULL,
  `tmt` date NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `password` text NOT NULL,
  `status_user` int(11) NOT NULL DEFAULT 1,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pangkat_golongan`, `tmt`, `jekel`, `pendidikan_terakhir`, `no_hp`, `foto`, `password`, `status_user`, `id_kelas`) VALUES
(5, '9191919198', 'Aninda Syifa Rosita Uyun', 'Kudus', '1999-05-25', 'Undaan Kudus', 'Gol 1A', '2022-06-04', 'Perempuan', 'S1', '081818818181', '1654351659_92b02dae45328dfb5cc6.png', 'anin', 1, 0),
(6, '20219191919', 'Eggy Andika Wardani', 'Kudus', '2021-12-01', 'Gang Durian 1 RT 1 RW 1 Dukuh Madaran Desa Mijen, Kaliwungu, Kabupaten Kudus', 'Gol 1A', '2022-06-04', 'Laki-laki', 'S1', '0191991919', 'img.png', '12345', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam_mulai` varchar(20) NOT NULL,
  `jam_selesai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_guru`, `id_mapel`, `kelas`, `tahun_ajaran`, `semester`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(3, 6, 17, 6, '2018/2019', 'Genap', 'Minggu', '11:30', '12:30');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `kkm` int(5) UNSIGNED NOT NULL,
  `kelas` int(10) UNSIGNED NOT NULL,
  `id_guru` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`, `kkm`, `kelas`, `id_guru`) VALUES
(16, 'Pelajaran Agama Islam', 80, 5, 5),
(17, 'Bahasa Indonesia', 80, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `password` text NOT NULL,
  `status_user` int(11) NOT NULL DEFAULT 1,
  `kelas` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `no_kk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jekel`, `agama`, `no_hp`, `foto`, `password`, `status_user`, `kelas`, `nik`, `no_kk`) VALUES
(4, '499', 'Eggy Andika Wardani', 'Kudus', '2021-12-02', 'Gang Durian 1 RT 1 RW 1 Dukuh Madaran Desa Mijen, Kaliwungu, Kabupaten Kudus', 'Perempuan', 'Katolik', '98632', '1654351070_3369609eaeb9a65f92c8.png', 'qwertyu', 1, 4, '234567', '34567'),
(5, '18', 'Nur', 'Kudus', '2014-12-01', 'Kudus Jateng', 'Laki-laki', 'Protestan', '28', 'img.png', 'qwerty', 1, 4, '1234567', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
