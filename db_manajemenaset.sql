-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2023 pada 20.00
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
(0, 'dumm', 'Diperbaiki', '2023-03-29', 1),
(1, 'dumm', 'Diperbaiki', '2023-03-29', 1),
(2, 'adidas', 'OK', '2023-03-28', 1);

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
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_29_062342_create_pj_perbaikans_table', 1),
(6, '2023_03_29_062614_create_aset_perbaikans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Ahmad', 3010),
(2, 'AHASS Taman Siswa', 890);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aset_perbaikans`
--
ALTER TABLE `aset_perbaikans`
  ADD UNIQUE KEY `aset_perbaikans_id_aset_unique` (`id_aset`),
  ADD KEY `aset_perbaikans_pj_perbaikan_foreign` (`pj_perbaikan`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pj_perbaikans`
--
ALTER TABLE `pj_perbaikans`
  ADD PRIMARY KEY (`id_pj`),
  ADD UNIQUE KEY `pj_perbaikans_id_pj_unique` (`id_pj`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pj_perbaikans`
--
ALTER TABLE `pj_perbaikans`
  MODIFY `id_pj` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
