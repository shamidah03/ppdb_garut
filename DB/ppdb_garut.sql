-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 09:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_garut`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id_kesehatan` int(20) NOT NULL,
  `penyakit_derita` varchar(20) NOT NULL,
  `kelainan_jasmani` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_new`
--

CREATE TABLE `siswa_new` (
  `id_siswa` int(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `agama` varchar(20) NOT NULL,
  `cita` varchar(20) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `anak` varchar(20) NOT NULL,
  `kandung` int(20) NOT NULL,
  `tiri` int(20) NOT NULL,
  `angkat` int(20) NOT NULL,
  `bb` int(20) NOT NULL,
  `tb` int(20) NOT NULL,
  `gd` varchar(10) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `telp_rumah` varchar(20) NOT NULL,
  `e_mail` varchar(20) NOT NULL,
  `Tinggal_dengan` varchar(20) NOT NULL,
  `penyakit_derita` varchar(50) NOT NULL,
  `kelainan_jasmani` varchar(20) NOT NULL,
  `id_mapel` int(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_new`
--

INSERT INTO `siswa_new` (`id_siswa`, `nama_lengkap`, `nama_panggilan`, `jk`, `tanggal_lahir`, `agama`, `cita`, `hobi`, `anak`, `kandung`, `tiri`, `angkat`, `bb`, `tb`, `gd`, `alamat_rumah`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `telp_rumah`, `e_mail`, `Tinggal_dengan`, `penyakit_derita`, `kelainan_jasmani`, `id_mapel`, `created_at`, `updated_at`) VALUES
(3, 'dhjkfahsdjkh', 'gjkhkj', 'Laki-laki', '2020-04-09 00:00:00', 'Islam', 'hkjhlk', 'hjkhkj', '8', 7, 0, 0, 67, 89, 'A', 'hjkhkjh', 'hjkhkjh', 'hjkhkj', 'hjkhkj', 'hjkh', '678680', 'hamidah@gmail.com', 'ortu', 'ghjghjg', 'ghjgjhghj', NULL, '2020-04-25 05:09:56', '2020-04-25 05:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(20) NOT NULL,
  `kelas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, 7),
(2, 8),
(3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajaran`
--

CREATE TABLE `tb_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelajaran`
--

INSERT INTO `tb_pelajaran` (`id_mapel`, `kelas`, `mapel`, `semester`) VALUES
(6, 'Kelas 7', 'Bahasa Indonesia', 'Semester 1'),
(7, 'Kelas 7', 'Bahasa Inggris', 'Semester 1'),
(8, 'Kelas 7', 'Matematika', 'Semester 1'),
(9, 'Kelas 7', 'IPA', 'Semester 1'),
(10, 'Kelas 7', 'IPS', 'Semester 1'),
(11, 'Kelas 8', 'Bahasa Indonesia', 'Semester 1'),
(12, 'Kelas 8', 'Bahasa Inggris', 'Semester 1'),
(13, 'Kelas 8', 'Matematika', 'Semester 1'),
(14, 'Kelas 8', 'IPA', 'Semester 1'),
(15, 'Kelas 8', 'IPS', 'Semester 1'),
(16, 'Kelas 9', 'Bahasa Indonesia', 'Semester 1'),
(17, 'Kelas 9', 'Bahasa Inggris', 'Semester 1'),
(18, 'Kelas 9', 'Matematika', 'Semester 1'),
(19, 'Kelas 9', 'IPA', 'Semester 1'),
(20, 'Kelas 9', 'IPS', 'Semester 1'),
(21, 'Kelas 7', 'Bahasa Indonesia', 'Semester 2'),
(22, 'Kelas 7', 'Bahasa Inggris', 'Semester 2'),
(23, 'Kelas 7', 'Matematika', 'Semester 2'),
(24, 'Kelas 7', 'IPA', 'Semester 2'),
(25, 'Kelas 7', 'IPS', 'Semester 2'),
(26, 'Kelas 8', 'Bahasa Indonesia', 'Semester 2'),
(27, 'Kelas 8', 'Bahasa Inggris', 'Semester 2'),
(28, 'Kelas 8', 'Matematika', 'Semester 2'),
(29, 'Kelas 8', 'IPA', 'Semester 2'),
(30, 'Kelas 8', 'IPS', 'Semester 2'),
(31, 'Kelas 9', 'Bahasa Indonesia', 'Semester 2'),
(32, 'Kelas 9', 'Bahasa Inggris', 'Semester 2'),
(33, 'Kelas 9', 'Matematika', 'Semester 2'),
(34, 'Kelas 9', 'IPA', 'Semester 2'),
(35, 'Kelas 9', 'IPS', 'Semester 2');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tinggal`
--

CREATE TABLE `tempat_tinggal` (
  `id_tempat` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `telp_rumah` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tinggal_dengan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Siti Lathifah', 'lathifah@gmail.com', NULL, '$2y$10$49geFPgO6tuuchZSiTg4N.FazAn0G6AGZpIiW1z1wmMM14m2Q0nRa', NULL, '2020-04-23 21:12:39', '2020-04-23 21:12:39'),
(2, 'Siti Hamidah', 'sitihamidah@gmail.com', NULL, '$2y$10$XK9YSMgirmOgsm0YLpziXeOp.BpeFH2FutQFspwcyCYota335pD/i', NULL, '2020-04-24 23:38:10', '2020-04-24 23:38:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siswa_new`
--
ALTER TABLE `siswa_new`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tempat_tinggal`
--
ALTER TABLE `tempat_tinggal`
  ADD PRIMARY KEY (`id_tempat`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id_kesehatan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa_new`
--
ALTER TABLE `siswa_new`
  MODIFY `id_siswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tempat_tinggal`
--
ALTER TABLE `tempat_tinggal`
  MODIFY `id_tempat` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
