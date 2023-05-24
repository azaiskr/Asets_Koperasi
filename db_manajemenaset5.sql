-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 08:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_manajemenaset3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `password`) VALUES
(1, 'Saka', 'saka01@gmail.com', ''),
(2, 'Anjani', 'anjani02@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `aset_jualbeli`
--

CREATE TABLE `aset_jualbeli` (
  `id_aset` char(5) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `stok` int(4) NOT NULL DEFAULT 0,
  `nilai_ekonomi` bigint(20) NOT NULL DEFAULT 0,
  `lokasi_jual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aset_jualbeli`
--

INSERT INTO `aset_jualbeli` (`id_aset`, `nama_aset`, `stok`, `nilai_ekonomi`, `lokasi_jual`) VALUES
('SL001', 'Show Case SHARP', 1, 1500000, ''),
('SL002', 'Saham', 2000, 1000000, 'Serdang'),
('SL003', 'Pesawat BOEING G37', 1, 1000000000, 'Pasar Ungaran');

-- --------------------------------------------------------

--
-- Table structure for table `aset_pengalihan`
--

CREATE TABLE `aset_pengalihan` (
  `id_Aset_Pengalihan` int(10) NOT NULL,
  `nama_Aset` varchar(255) DEFAULT NULL,
  `jenis_Pengalihan` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `lokasi_Pengalihan` varchar(255) NOT NULL,
  `id_Aset` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_pengalihan`
--

INSERT INTO `aset_pengalihan` (`id_Aset_Pengalihan`, `nama_Aset`, `jenis_Pengalihan`, `jumlah`, `lokasi_Pengalihan`, `id_Aset`) VALUES
(1, 'Perangkat Komputer', 'Dipindahtangankan', '10', 'Setiabudi', 'AP002');

-- --------------------------------------------------------

--
-- Table structure for table `aset_perbaikans`
--

CREATE TABLE `aset_perbaikans` (
  `id_aset_perbaikan` int(10) NOT NULL,
  `nama_aset` varchar(255) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `status_perbaikan` enum('OK','Diperbaiki') NOT NULL,
  `tanggal_perbaikan` date NOT NULL,
  `id_Aset` varchar(5) NOT NULL,
  `pj_perbaikan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_perbaikans`
--

INSERT INTO `aset_perbaikans` (`id_aset_perbaikan`, `nama_aset`, `jumlah`, `status_perbaikan`, `tanggal_perbaikan`, `id_Aset`, `pj_perbaikan`) VALUES
(1, NULL, 5, 'Diperbaiki', '2023-05-20', 'AP002', 2),
(2, NULL, 1, 'OK', '2023-05-20', 'AP003', 2);

-- --------------------------------------------------------

--
-- Table structure for table `aset_terpinjam`
--

CREATE TABLE `aset_terpinjam` (
  `id_aset_terpinjam` int(5) NOT NULL,
  `nama_peminjam` varchar(25) NOT NULL,
  `jumlah_pinjaman` int(2) NOT NULL,
  `tanggal_pinjaman` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `id_aset` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aset_terpinjam`
--

INSERT INTO `aset_terpinjam` (`id_aset_terpinjam`, `nama_peminjam`, `jumlah_pinjaman`, `tanggal_pinjaman`, `tanggal_jatuh_tempo`, `id_aset`) VALUES
(1, 'Putu', 2, '2023-05-20', '2023-05-27', 'AT001');

-- --------------------------------------------------------

--
-- Table structure for table `aset_tersedia`
--

CREATE TABLE `aset_tersedia` (
  `id_aset` varchar(5) NOT NULL,
  `nama_aset` varchar(50) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aset_tersedia`
--

INSERT INTO `aset_tersedia` (`id_aset`, `nama_aset`, `stok`) VALUES
('AT001', 'TV Panasonic', 8),
('AT002', 'Motor LG', 7);

-- --------------------------------------------------------

--
-- Table structure for table `aset_tetaps`
--

CREATE TABLE `aset_tetaps` (
  `id_Aset` varchar(5) NOT NULL,
  `nama_Aset` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `nilai_ekonomi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset_tetaps`
--

INSERT INTO `aset_tetaps` (`id_Aset`, `nama_Aset`, `lokasi`, `kondisi`, `jumlah`, `ukuran`, `nilai_ekonomi`) VALUES
('AP001', 'Mobil', 'Sekaran', 'Jelek', 20, 50, 1000000000),
('AP002', 'Perangkat Komputer', 'Sekaran', 'Baik', 90, 25, 10000000),
('AP003', 'Pendingin Ruangan', 'Sekaran', 'Baik', 2, 50, 50000000);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_29_062342_create_pj_perbaikans_table', 1),
(6, '2023_03_29_062614_create_aset_perbaikans_table', 1),
(7, '2023_05_03_135351_create_verifikasi_email', 2),
(8, '2014_10_12_000000_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `piutang`
--

CREATE TABLE `piutang` (
  `id_pinjaman` char(5) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `jumlah_pinjaman` mediumint(9) NOT NULL,
  `waktu_pinjaman` date NOT NULL,
  `pelunasan` char(20) NOT NULL DEFAULT 'Belum Lunas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piutang`
--

INSERT INTO `piutang` (`id_pinjaman`, `nama_peminjam`, `jumlah_pinjaman`, `waktu_pinjaman`, `pelunasan`) VALUES
('P0001', 'Dion', 500000, '2023-04-01', 'Belum Lunas'),
('P0002', 'Silvi', 300000, '2023-03-29', 'Lunas'),
('P0003', 'Rocket', 2000000, '2023-05-26', 'Belum Lunas'),
('P0004', 'Aki', 50000, '2023-06-01', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pj_perbaikans`
--

CREATE TABLE `pj_perbaikans` (
  `id_pj` int(10) UNSIGNED NOT NULL,
  `nama_pj` varchar(255) NOT NULL,
  `no_Hp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pj_perbaikans`
--

INSERT INTO `pj_perbaikans` (`id_pj`, `nama_pj`, `no_Hp`) VALUES
(1, 'Ahmad', 85213678990),
(2, 'AHASS Taman Siswa', 81328779081);

-- --------------------------------------------------------

--
-- Table structure for table `rekapitulasi`
--

CREATE TABLE `rekapitulasi` (
  `id` int(3) NOT NULL,
  `jenis_aset` varchar(30) NOT NULL,
  `kuantitas` mediumint(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekapitulasi`
--

INSERT INTO `rekapitulasi` (`id`, `jenis_aset`, `kuantitas`) VALUES
(1, 'Aset Tetap', 3),
(2, 'Aset Terpinjam', 1),
(3, 'Aset Tersedia', 2),
(4, 'Aset Perbaikan', 2),
(5, 'Aset Jual Beli', 3),
(6, 'Aset Pengalihan', 1),
(7, 'Piutang', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT 0,
  `can_reset_password` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_email_verified`, `can_reset_password`, `created_at`, `updated_at`, `token`) VALUES
(2, 'kuriya', 'kuriyamam751@gmail.com', NULL, '$2y$10$kQezYH4pzpthiEs.gGG1YuIkqukcu9GZkcjSiwyKng7H7WhguPweK', NULL, 1, 0, '2023-05-20 11:05:56', '2023-05-20 11:06:53', 'zdvbCVpHiTVk7Km4YGPGtbaC8aoFmaD5FGxYfKKUsLcHjOvJ7gtpwPtGJzoFjvqm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aset_jualbeli`
--
ALTER TABLE `aset_jualbeli`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `aset_pengalihan`
--
ALTER TABLE `aset_pengalihan`
  ADD PRIMARY KEY (`id_Aset_Pengalihan`),
  ADD KEY `id_Aset` (`id_Aset`);

--
-- Indexes for table `aset_perbaikans`
--
ALTER TABLE `aset_perbaikans`
  ADD PRIMARY KEY (`id_aset_perbaikan`),
  ADD KEY `aset_perbaikans_pj_perbaikan_foreign` (`pj_perbaikan`),
  ADD KEY `id_Aset` (`id_Aset`);

--
-- Indexes for table `aset_terpinjam`
--
ALTER TABLE `aset_terpinjam`
  ADD PRIMARY KEY (`id_aset_terpinjam`),
  ADD KEY `id_aset` (`id_aset`);

--
-- Indexes for table `aset_tersedia`
--
ALTER TABLE `aset_tersedia`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `aset_tetaps`
--
ALTER TABLE `aset_tetaps`
  ADD PRIMARY KEY (`id_Aset`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `piutang`
--
ALTER TABLE `piutang`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `pj_perbaikans`
--
ALTER TABLE `pj_perbaikans`
  ADD PRIMARY KEY (`id_pj`),
  ADD UNIQUE KEY `pj_perbaikans_id_pj_unique` (`id_pj`);

--
-- Indexes for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset_pengalihan`
--
ALTER TABLE `aset_pengalihan`
  MODIFY `id_Aset_Pengalihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `aset_perbaikans`
--
ALTER TABLE `aset_perbaikans`
  MODIFY `id_aset_perbaikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aset_terpinjam`
--
ALTER TABLE `aset_terpinjam`
  MODIFY `id_aset_terpinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pj_perbaikans`
--
ALTER TABLE `pj_perbaikans`
  MODIFY `id_pj` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aset_perbaikans`
--
ALTER TABLE `aset_perbaikans`
  ADD CONSTRAINT `aset_perbaikans_ibfk_1` FOREIGN KEY (`id_Aset`) REFERENCES `aset_tetaps` (`id_Aset`),
  ADD CONSTRAINT `aset_perbaikans_pj_perbaikan_foreign` FOREIGN KEY (`pj_perbaikan`) REFERENCES `pj_perbaikans` (`id_pj`);

--
-- Constraints for table `aset_terpinjam`
--
ALTER TABLE `aset_terpinjam`
  ADD CONSTRAINT `aset_terpinjam_ibfk_1` FOREIGN KEY (`id_aset`) REFERENCES `aset_tersedia` (`id_aset`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
