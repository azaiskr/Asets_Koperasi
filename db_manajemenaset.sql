-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2023 pada 17.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_manajemenaset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`) VALUES
(1, 'Saka', 'saka01@gmail.com'),
(2, 'Anjani', 'anjani02@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_jualbeli`
--

CREATE TABLE `aset_jualbeli` (
  `id_aset` char(5) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `stok` int(4) NOT NULL DEFAULT 0,
  `nilai_ekonomi` bigint(20) NOT NULL DEFAULT 0,
  `lokasi_jual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aset_jualbeli`
--

INSERT INTO `aset_jualbeli` (`id_aset`, `nama_aset`, `stok`, `nilai_ekonomi`, `lokasi_jual`) VALUES
('SL001', 'Show Case SHARP', 1, 1500000, ''),
('SL002', 'Saham', 2000, 1000000, ''),
('SL003', 'Pesawat BOEING G37', 1, 1000000000, 'Pasar Ungaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_pengalihan`
--

CREATE TABLE `aset_pengalihan` (
  `id_Aset` int(10) NOT NULL,
  `nama_Aset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_Pengalihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_Pengalihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aset_pengalihan`
--

INSERT INTO `aset_pengalihan` (`id_Aset`, `nama_Aset`, `jenis_Pengalihan`, `jumlah`, `lokasi_Pengalihan`) VALUES
(1, 'Mobil', 'Alih modern', '3', 'Kemayoran'),
(2, 'Sepeda', 'Alih alih', '11', 'Sampangan'),
(7, 'Helikopter', 'Alih modern', '4', 'Kemayoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_perbaikans`
--

CREATE TABLE `aset_perbaikans` (
  `id_aset` int(10) UNSIGNED NOT NULL,
  `nama_aset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perbaikan` enum('OK','Diperbaiki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_perbaikan` date NOT NULL,
  `pj_perbaikan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aset_perbaikans`
--

INSERT INTO `aset_perbaikans` (`id_aset`, `nama_aset`, `status_perbaikan`, `tanggal_perbaikan`, `pj_perbaikan`) VALUES
(1, 'Try', 'OK', '2023-04-02', 1),
(2, 'Mobil Supra', 'OK', '2023-03-29', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_terpinjam`
--

CREATE TABLE `aset_terpinjam` (
  `id_aset` char(5) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `nama_peminjam` varchar(25) NOT NULL,
  `jumlah_pinjaman` int(2) NOT NULL,
  `tanggal_pinjaman` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aset_terpinjam`
--

INSERT INTO `aset_terpinjam` (`id_aset`, `nama_aset`, `nama_peminjam`, `jumlah_pinjaman`, `tanggal_pinjaman`, `tanggal_jatuh_tempo`) VALUES
('A0001', 'Monitor PC', 'Juleha', 1, '2023-03-21', '2023-03-30'),
('A0002', 'Proyektor LG', 'David', 2, '2023-03-30', '2023-04-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_tersedia`
--

CREATE TABLE `aset_tersedia` (
  `id_aset` char(5) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aset_tersedia`
--

INSERT INTO `aset_tersedia` (`id_aset`, `nama_aset`, `stok`) VALUES
('A0003', 'Layar LCD', 3),
('A0004', 'Camera Sony Mirrorlens', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aset_tetaps`
--

CREATE TABLE `aset_tetaps` (
  `id_Aset` int(10) UNSIGNED NOT NULL,
  `nama_Aset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `nilai_ekonomi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aset_tetaps`
--

INSERT INTO `aset_tetaps` (`id_Aset`, `nama_Aset`, `lokasi`, `kondisi`, `jumlah`, `ukuran`, `nilai_ekonomi`) VALUES
(2, 'Mobil', 'Sekaran', 'Dipinjam', 5, 20, 30000000),
(3, 'Motor', 'Sekaran', 'Bagus', 15, 10, 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `piutang`
--

CREATE TABLE `piutang` (
  `id_pinjaman` char(5) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `jumlah_pinjaman` mediumint(9) NOT NULL,
  `waktu_pinjaman` date NOT NULL,
  `pelunasan` char(20) NOT NULL DEFAULT 'Belum Lunas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `piutang`
--

INSERT INTO `piutang` (`id_pinjaman`, `nama_peminjam`, `jumlah_pinjaman`, `waktu_pinjaman`, `pelunasan`) VALUES
('P0001', 'Dion', 500000, '2023-04-01', 'Belum Lunas'),
('P0002', 'Silvi', 300000, '2023-03-29', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pj_perbaikans`
--

CREATE TABLE `pj_perbaikans` (
  `id_pj` int(10) UNSIGNED NOT NULL,
  `nama_pj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_Hp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pj_perbaikans`
--

INSERT INTO `pj_perbaikans` (`id_pj`, `nama_pj`, `no_Hp`) VALUES
(1, 'Ahmad', 85213678990),
(2, 'AHASS Taman Siswa', 81328779081);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekapitulasi`
--

CREATE TABLE `rekapitulasi` (
  `id` int(3) NOT NULL,
  `jenis_aset` varchar(30) NOT NULL,
  `kuantitas` mediumint(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekapitulasi`
--

INSERT INTO `rekapitulasi` (`id`, `jenis_aset`, `kuantitas`) VALUES
(1, 'Aset Tetap', 2),
(2, 'Aset Terpinjam', 2),
(3, 'Aset Tersedia', 2),
(4, 'Aset Perbaikan', 3),
(5, 'Aset Jual Beli', 0),
(6, 'Aset Pengalihan', 3),
(7, 'Piutang', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `aset_jualbeli`
--
ALTER TABLE `aset_jualbeli`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indeks untuk tabel `aset_perbaikans`
--
ALTER TABLE `aset_perbaikans`
  ADD UNIQUE KEY `aset_perbaikans_id_aset_unique` (`id_aset`),
  ADD KEY `aset_perbaikans_pj_perbaikan_foreign` (`pj_perbaikan`);

--
-- Indeks untuk tabel `aset_tetaps`
--
ALTER TABLE `aset_tetaps`
  ADD PRIMARY KEY (`id_Aset`);

--
-- Indeks untuk tabel `piutang`
--
ALTER TABLE `piutang`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indeks untuk tabel `pj_perbaikans`
--
ALTER TABLE `pj_perbaikans`
  ADD PRIMARY KEY (`id_pj`),
  ADD UNIQUE KEY `pj_perbaikans_id_pj_unique` (`id_pj`);

--
-- Indeks untuk tabel `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aset_tetaps`
--
ALTER TABLE `aset_tetaps`
  MODIFY `id_Aset` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pj_perbaikans`
--
ALTER TABLE `pj_perbaikans`
  MODIFY `id_pj` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aset_perbaikans`
--
ALTER TABLE `aset_perbaikans`
  ADD CONSTRAINT `aset_perbaikans_pj_perbaikan_foreign` FOREIGN KEY (`pj_perbaikan`) REFERENCES `pj_perbaikans` (`id_pj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
