-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2020 pada 20.00
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwitansi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `nama`, `pass`, `level`) VALUES
('001', 'Tri Abi', '4d68cd24896bdde7698100ca2c3ca765', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `pelanggan` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `no_invoice` varchar(30) NOT NULL,
  `creator` varchar(30) NOT NULL,
  `cetak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`pelanggan`, `harga`, `no_invoice`, `creator`, `cetak`) VALUES
('4314324', 25000, 'efaf', 'chintia', '2020-09-30'),
('432214324', 25000, 'efaf', 'chintia', '2020-09-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kwit`
--

CREATE TABLE `kwit` (
  `no_nota` varchar(30) NOT NULL,
  `customer` varchar(30) NOT NULL,
  `terbilang` varchar(300) NOT NULL,
  `tanggal_b` date NOT NULL,
  `tanggal_c` varchar(30) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `tertulis` varchar(30) NOT NULL,
  `creator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kwit`
--

INSERT INTO `kwit` (`no_nota`, `customer`, `terbilang`, `tanggal_b`, `tanggal_c`, `invoice`, `tertulis`, `creator`) VALUES
('108/X / 09/20', 'Bengawan Tech', 'Satu Juta', '2020-10-05', '', 'inv8080', '1,000,000', 'Chintya'),
('109/X / 09/20', 'Bengawan Tech', 'Dua Juta', '2020-10-05', '20 Oktober 2020', 'Inv9090', '2,000,000', 'Chintya R.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nim`, `nama`, `pass`) VALUES
('0001', 'Chintya', 'd8578edf8458ce06fbc5bb76a58c5ca4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`pelanggan`);

--
-- Indeks untuk tabel `kwit`
--
ALTER TABLE `kwit`
  ADD PRIMARY KEY (`no_nota`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
