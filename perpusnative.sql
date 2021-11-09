-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2021 pada 10.11
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusnative`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `deskripsi`, `foto`, `jumlah_pinjam`) VALUES
(4, 'Seni Budaya', 'Buku paket seni budaya SMP kelas 9 ', 'Seni_budaya.jpg', 0),
(6, 'Bahasa Inggris', 'Bahasa Inggris bright SMP kelas 8', 'Buku_Bahasa_Inggris.jpg.jpg', 0),
(7, 'Matematika', 'Buku paket Matematika kelas 11', 'Buku_Matematika.jpg.jpg', 0),
(8, 'Buku Bind', 'Buku Bahasa Indonesia kelas 8', 'Buku_Bind.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman_buku`
--

CREATE TABLE `detail_peminjaman_buku` (
  `id_detail_peminjaman_buku` int(11) NOT NULL,
  `id_peminjaman_buku` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_peminjaman_buku`
--

INSERT INTO `detail_peminjaman_buku` (`id_detail_peminjaman_buku`, `id_peminjaman_buku`, `id_buku`, `qty`) VALUES
(3, 3, 6, 1),
(4, 4, 0, 1),
(5, 4, 0, 1),
(6, 4, 0, 1),
(7, 4, 0, 1),
(8, 4, 0, 1),
(9, 4, 5, 1),
(10, 4, 6, 1),
(11, 4, 6, 1),
(12, 4, 4, 1),
(13, 4, 4, 1),
(14, 4, 4, 1),
(15, 5, 5, 1),
(16, 5, 0, 1),
(17, 6, 0, 1),
(18, 6, 4, 1),
(19, 6, 0, 1),
(20, 7, 6, 1),
(21, 8, 6, 1),
(22, 9, 8, 1),
(23, 10, 4, 1),
(24, 11, 7, 1),
(25, 12, 8, 1),
(26, 13, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_buku` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `kelompok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kelompok`) VALUES
(1, 'XI RPL 1', '1'),
(2, 'XI RPL 2', '1'),
(16, 'XI RPL 3', '1'),
(17, 'XI RPL 6', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `id_peminjaman_buku` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman_buku`
--

INSERT INTO `peminjaman_buku` (`id_peminjaman_buku`, `id_siswa`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(3, 1, '2021-09-15', '2021-09-20'),
(9, 22, '2021-09-25', '2021-09-30'),
(10, 22, '2021-09-25', '2021-09-30'),
(11, 27, '2021-09-25', '2021-09-30'),
(12, 22, '2021-09-27', '2021-10-02'),
(13, 22, '2021-09-27', '2021-10-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_buku`
--

CREATE TABLE `pengembalian_buku` (
  `id_pengembalian_buku` int(11) NOT NULL,
  `id_peminjaman_buku` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian_buku`
--

INSERT INTO `pengembalian_buku` (`id_pengembalian_buku`, `id_peminjaman_buku`, `tanggal_pengembalian`, `denda`) VALUES
(3, 3, '2021-09-15', 0),
(4, 4, '2021-09-17', 0),
(5, 5, '2021-09-17', 0),
(6, 6, '2021-09-21', 0),
(7, 7, '2021-09-22', 0),
(8, 9, '2021-09-25', 0),
(9, 10, '2021-09-27', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `tanggal_lahir`, `gender`, `alamat`, `username`, `password`, `id_kelas`) VALUES
(22, 'Inkra Andini Firmansyah', '2005-06-06', 'P', 'Kota Malang', 'inkraandini', 'beac9f1716e7a6539611ed18e01431c0', 1),
(27, 'Neilsya Amstrani', '2021-09-15', 'P', 'Kota Tulungagung', 'neilsyaamstrani', '25b044d43ee8b970ce722220a089635a', 1),
(50, 'Fadilla Ratna Dwita', '2005-10-04', 'P', 'Kota Tulungagung', 'fadillaratna', '64a819e32f29f65782df38254eadf817', 17);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  ADD PRIMARY KEY (`id_detail_peminjaman_buku`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`id_peminjaman_buku`);

--
-- Indeks untuk tabel `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD PRIMARY KEY (`id_pengembalian_buku`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman_buku`
--
ALTER TABLE `detail_peminjaman_buku`
  MODIFY `id_detail_peminjaman_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  MODIFY `id_peminjaman_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  MODIFY `id_pengembalian_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
