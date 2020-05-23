-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2020 pada 03.03
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `government`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pencaker`
--

CREATE TABLE `data_pencaker` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(60) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `no_kk` varchar(30) DEFAULT NULL,
  `pendidikan` varchar(3) DEFAULT NULL,
  `alamat` tinytext,
  `kota` varchar(60) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `kecamatan` varchar(60) DEFAULT NULL,
  `desa` varchar(60) DEFAULT NULL,
  `keahlian` varchar(150) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `ijazah` varchar(150) DEFAULT NULL,
  `sertifikat` varchar(160) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pencaker`
--

INSERT INTO `data_pencaker` (`id`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `email`, `pass`, `no_telpon`, `no_kk`, `pendidikan`, `alamat`, `kota`, `kode_pos`, `kecamatan`, `desa`, `keahlian`, `photo`, `ijazah`, `sertifikat`, `jurusan`) VALUES
(2, 'Dasep Depiyawan', '3217141304990005', 'Bandung', '1999-04-13', 'depiyawandasep13@gmail.com', '202cb962ac59075b964b07152d234b70', '083821619460', '', 'SMK', 'Jl Raya Puncak Sari', 'Bandung', '40563', 'Sindangkerta', 'Puncaksari', NULL, 'wewe.jpg', 'jam.jpg', 'logo SWA1.jpg', 'Teknik Komputer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pencaker`
--
ALTER TABLE `data_pencaker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pencaker`
--
ALTER TABLE `data_pencaker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
