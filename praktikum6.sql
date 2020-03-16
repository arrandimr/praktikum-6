-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mar 2020 pada 06.56
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_bt` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(80) NOT NULL,
  `isi` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_bt`, `nama`, `email`, `isi`) VALUES
(1, 'arrandi', 'arrandi@gmail.com', 123),
(2, 'muhamad', 'muhamad@gmail.com', 124),
(3, 'riesta', 'riesta@gmail.com', 0),
(4, 'yudha', 'yudha@gm.com', 0),
(5, 'helmy', 'hel@gm.com', 983),
(6, 'helmy2', 'hel@gm.com', 785),
(7, 'helmy2', 'hel@gm.com', 785),
(8, 'arrandi2', 'arrandi2@gmail.com', 125);

-- --------------------------------------------------------

--
-- Struktur dari tabel `liga`
--

CREATE TABLE `liga` (
  `id` int(6) UNSIGNED NOT NULL,
  `kode` varchar(3) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `champion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `liga`
--

INSERT INTO `liga` (`id`, `kode`, `negara`, `champion`) VALUES
(1, 'jer', 'jerman', 4),
(2, 'jer', 'jerman', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_bt`);

--
-- Indexes for table `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_bt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `liga`
--
ALTER TABLE `liga`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
