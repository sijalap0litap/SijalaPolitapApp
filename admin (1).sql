-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 11:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataka_lab`
--

CREATE TABLE `dataka_lab` (
  `nip` bigint(20) NOT NULL,
  `nama_pengurus` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmasi_password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataka_lab`
--

INSERT INTO `dataka_lab` (`nip`, `nama_pengurus`, `username`, `password`, `confirmasi_password`, `jabatan`, `email`, `no_hp`, `foto`, `created_at`, `updated_at`) VALUES
(122222222, 'kalab', 'kalab', '$2y$10$dgxXJACPcNbz.vURuvuP9O331f4YQta5mPoa9DcsbdbE8KWiwz9iW', 'kalab', 'Amd.Kom', 'kalab11@gmail.com', '085750053814', 'app/images/kalab/1656871792-00DO9.jpg', '2022-07-12 03:51:43', '2022-07-12 10:51:43'),
(232838273273, 'Rosi', 'rosi', '$2y$10$YUQw3Pz/AyAmqdsYsD0h9uD6SlvhqNFdzrJdhs7GENVFOI1s6AGLi', 'rosi', 'Teknisi', 'rosi@gmail.com', '934384738', 'app/images/kalab/1654579766-HMUKO.png', '2022-06-27 05:55:37', '2022-06-26 22:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `NIP` bigint(18) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmasi_password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` int(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`NIP`, `username`, `password`, `confirmasi_password`, `nama`, `no_hp`, `email`, `jurusan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(141414, 'mourin', '$2y$10$AQRWu90U8ul5lmviDXcSrOhI0FRdT3MQsamM4pZe9JIYuwupG.KYi', 'mourin', 'mourin', '08973028399', 'mourin@gmail.com', 'Teknik mesin', 'app/images/dosen/1654584985-T4Vyj.png', 2, '2022-04-26 21:23:40', '2022-06-09 07:05:52'),
(1234567, NULL, '$2y$10$yrj2XmU7SnT9NE42VX8nWOzZPUBs5GkgE47aaRZnZpGc.p.DJaODG', 'dosen', 'dosen', '085750053814', 'dosen11@gmail.com', 'Teknik Informatika', 'app/images/dosen/1656939050-UTOkF.jpg', 2, '2022-07-04 05:48:27', '2022-07-04 05:50:50'),
(4847484, NULL, '$2y$10$oB.InZ0d0enpynigD8sHRua3dQwghKLtxg4aTkhaLxYnTFc0i17Ma', 'dosen', 'dosen', '085758858585', 'dosen33@gmail.com', 'Teknik Informatika', 'app/images/dosen/1656987242-F3tTq.jpg', 2, '2022-07-04 19:13:19', '2022-07-04 19:14:02'),
(12222222, NULL, '$2y$10$OF4Lvz2QKsuIj9fu1V.SW.gDNbW9W58GrJnSn.jVFoZOF//vUtRaq', 'dosen', 'dosen', '085750053814', 'dosen11@gmail.com', 'Teknik Informatika', 'app/images/dosen/1656870346-K5EfM.jpg', 2, '2022-07-03 10:44:52', '2022-07-03 10:45:46'),
(3042020029, NULL, '$2y$10$3K.jUkX0yoiGhRR3LlHztOTcFt9gXE2vWqte5kQSpCe5tL1NT4czW', 'dhanu', 'Dhanu Brukman Nur Hakim', '085750053814', 'dhanu', 'Teknik Informatika', 'app/images/dosen/1656309770-IQPMR.jpg', 2, '2022-06-26 23:01:49', '2022-06-26 23:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `data_keluhan`
--

CREATE TABLE `data_keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `nip_nim` bigint(14) DEFAULT NULL,
  `tanggal_keluhan` date DEFAULT NULL,
  `nama_pengaju` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `alat_rusak` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_keluhan`
--

INSERT INTO `data_keluhan` (`id_keluhan`, `nip_nim`, `tanggal_keluhan`, `nama_pengaju`, `jurusan`, `deskripsi`, `alat_rusak`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(675, NULL, NULL, 'mourin', NULL, 'tombol \"Backspace\" hilang', NULL, 'app/images/keluhan/1654845293-ViT3P.jpg', NULL, '2022-06-10 00:14:54', '2022-07-02 01:07:08'),
(676, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 23:47:25', '2022-07-06 23:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `data_laboratorium`
--

CREATE TABLE `data_laboratorium` (
  `id_lab` int(11) NOT NULL,
  `nama_lab` varchar(255) DEFAULT NULL,
  `kapasitas_lab` varchar(255) DEFAULT NULL,
  `jurusan` enum('Teknik Informatika','Teknik Elektro','Teknik Sipil','Teknik Mesin','Teknik Pertambangan','TPHP','BTP','Agroindustri') DEFAULT NULL,
  `nama_gedung` varchar(255) DEFAULT NULL,
  `lantai` varchar(255) DEFAULT NULL,
  `nama_teknisi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_laboratorium`
--

INSERT INTO `data_laboratorium` (`id_lab`, `nama_lab`, `kapasitas_lab`, `jurusan`, `nama_gedung`, `lantai`, `nama_teknisi`, `created_at`, `updated_at`) VALUES
(1, 'Laboratorium Rekayasa Perangkat Lunak', '36 Orang', 'Teknik Informatika', 'Gedung Laboratorium Teknik Informatik', '3', 'Rosi Ar rasyid', '2022-04-19 07:02:08', '2022-06-10 07:13:23'),
(2, 'Laboratorium Multimedia', '39 Orang', 'Teknik Informatika', 'Gedung Laboratorium Teknik Informatik', '3', 'Wahyu', '2022-04-19 07:10:05', '2022-06-10 07:13:32'),
(3, 'Laboratorium Pemograman', '33 Orang', 'Teknik Informatika', 'Gedung Laboratorium Teknik Informatik', '3', 'Rodiyansah', '2022-04-19 07:47:35', '2022-06-28 14:48:15'),
(4, 'Laboratorium Project Berbasis Learning', '40 Orang', 'Teknik Informatika', 'Gedung Laboratorium Teknik Informatik', '3', 'Rosi Ar rasyid', '2022-04-21 22:16:04', '2022-04-26 06:06:58'),
(7, 'Laboratorium Project Berbasis Learning1', '40 Orang', 'Teknik Informatika', 'Gedung Baru', '3', 'Rosi', '2022-05-17 01:18:47', '2022-05-17 01:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `NIM` bigint(16) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmasi_password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` int(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`NIM`, `username`, `password`, `confirmasi_password`, `nama`, `no_hp`, `email`, `semester`, `jurusan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(3042020028, 'mahasiswa', '$2y$10$4SnookGQKCqi732skPL6huIOAxJ4qw8vPyQRqwgNWpn/5.lxyBPmO', 'mahasiswa', 'mahasiswa', '085750053814', 'mahasiswa11@gmail.com', '4', 'Teknik Informatika', 'app/images/mahasiswa/1656870163-zJdB1.jpg', 2, '2022-07-03 10:41:56', '2022-07-03 10:42:43'),
(3042020029, 'dhanu', '$2y$10$CIMCY9XOvR4N5Ng1EhENUegfYLJqAbtYEjtzJ0uzDrzzXWBs2w/we', 'dhanu', 'Dhanu Brukman Nur Hakim', NULL, NULL, NULL, 'Teknik Informatika', NULL, 2, '2022-07-02 01:27:09', '2022-07-12 10:45:59'),
(3043020028, 'cahya', '$2y$10$d53lQ5CmSZ1JBF6zJIM4POVDie6WP6lMB7lSEHseb1zOwr9nxhoea', 'cahya', 'cahya novitasari', '0897653311', 'cahya@gmail.com', '2', NULL, 'app/images/mahasiswa/1655476826-zROOI.jpg', 2, '2022-06-10 01:47:23', '2022-06-17 07:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id_data_peminjaman` int(11) NOT NULL,
  `nip_nim` bigint(20) DEFAULT NULL,
  `nama_kelompok` varchar(255) DEFAULT NULL,
  `id_lab` int(11) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `waktu_mulai` varchar(255) DEFAULT NULL,
  `waktu_selesai` varchar(255) DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `keperluan_alat` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `jabatan` int(2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id_data_peminjaman`, `nip_nim`, `nama_kelompok`, `id_lab`, `jurusan`, `tanggal_peminjaman`, `waktu_mulai`, `waktu_selesai`, `tanggal_selesai`, `keperluan_alat`, `status`, `jabatan`, `updated_at`, `created_at`) VALUES
(63, 3043020028, 'PBL 2', 3, NULL, '2022-07-04', '8', '15', NULL, 'pc sebanyak 30 unit', 2, 2, '2022-07-04 01:11:32', '2022-07-04 08:11:32'),
(66, 12222222, 'PBL 2', 1, 'Teknik Informatika', '2022-07-04', '8', '9', NULL, 'pc sebanyak 30 unit', 2, 2, '2022-07-12 10:28:30', '2022-07-12 03:28:30'),
(67, 12222222, 'PBL 2', 1, NULL, '2022-07-04', '8', '9', NULL, 'pc sebanyak 30 unit', 3, 2, '2022-07-12 10:28:34', '2022-07-12 03:28:34'),
(68, 3042020028, 'PBL 2', 1, 'Teknik Informatika', '2022-07-04', '8', '8', NULL, 'pc sebanyak 30 unit', 1, 2, '2022-07-04 01:11:15', '2022-07-04 01:11:15'),
(69, 3043020028, 'mega', 3, 'Teknik Informatika', '2022-07-06', '10', '13', NULL, 'headset', 1, 2, '2022-07-06 00:56:53', '2022-07-06 00:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `add`, `start`, `end`, `created_at`, `updated_at`) VALUES
(15, 'MATA KULIAH', NULL, '2022-07-04 08:00:00', '2022-07-04 15:00:00', '2022-07-04 14:28:13', '2022-07-04 14:28:13'),
(16, 'MATA KULIAH', NULL, '2022-07-05 08:00:00', '2022-07-05 15:00:00', '2022-07-04 14:28:24', '2022-07-04 14:28:24'),
(17, 'MATA KULIAH', NULL, '2022-07-06 08:00:00', '2022-07-06 15:00:00', '2022-07-04 14:28:38', '2022-07-04 14:28:38'),
(18, 'MATA KULIAH', NULL, '2022-07-07 08:00:00', '2022-07-07 15:00:00', '2022-07-04 14:28:48', '2022-07-04 14:28:48'),
(19, 'MATA KULIAH', NULL, '2022-07-08 08:00:00', '2022-07-08 15:00:00', '2022-07-04 14:29:04', '2022-07-04 14:29:04'),
(21, 'mega', NULL, '2022-07-11 00:00:00', '2022-07-12 00:00:00', '2022-07-05 18:28:41', '2022-07-05 18:28:41'),
(22, 'kalab', NULL, '2022-07-11 00:00:00', '2022-07-12 00:00:00', '2022-07-06 23:59:19', '2022-07-06 23:59:19'),
(23, 'h', NULL, '2022-07-05 00:00:00', '2022-07-06 00:00:00', '2022-07-07 00:17:36', '2022-07-07 00:17:36'),
(24, 'mega', NULL, '2022-07-10 07:00:00', '2022-07-10 13:00:00', '2022-07-07 00:18:39', '2022-07-07 00:18:39'),
(27, 'cvcgycfgcv', NULL, '2022-06-27 00:00:00', '2022-06-28 00:00:00', '2022-07-13 04:25:18', '2022-07-13 04:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` bigint(36) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `hari`, `waktu_mulai`, `waktu_selesai`, `updated_at`, `created_at`) VALUES
(6, '2022-07-04', '10', '00:00:09', '00:00:14', '2022-07-03 10:06:36', '2022-07-03 10:06:36'),
(7, '2022-07-04', 'selasa', '00:00:10', '00:00:14', '2022-07-03 10:08:33', '2022-07-03 10:08:33'),
(8, '2022-07-04', 'senin', '00:00:09', '00:00:17', '2022-07-03 10:19:23', '2022-07-03 10:19:23'),
(9, '2022-07-04', 'selasa', '00:00:10', '00:00:11', '2022-07-03 10:23:36', '2022-07-03 10:23:36'),
(10, '2022-07-04', 'senin', '00:00:08', '00:00:15', '2022-07-03 10:24:30', '2022-07-03 10:24:30'),
(11, '2022-07-04', 'senin', '00:00:08', '00:00:09', '2022-07-03 10:57:48', '2022-07-03 10:57:48'),
(12, NULL, NULL, NULL, NULL, '2022-07-04 00:02:26', '2022-07-04 00:02:26'),
(13, '2022-07-04', 'senin', '00:00:08', '00:00:08', '2022-07-04 01:11:15', '2022-07-04 01:11:15'),
(14, '2022-07-06', 'selasa', '00:00:10', '00:00:13', '2022-07-06 00:56:53', '2022-07-06 00:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_kelompok` varchar(255) DEFAULT NULL,
  `nama_laboratorium` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `keperluan_alat` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_kelompok`, `nama_laboratorium`, `jurusan`, `semester`, `tanggal_peminjaman`, `tanggal_selesai`, `keperluan_alat`, `status`, `updated_at`, `created_at`) VALUES
(1, 'mega', 'Multimedia', 'Teknik Informatika', NULL, '2022-04-04', '2022-04-06', 'DDD', 1, '2022-04-18 11:43:27', '2022-04-18 11:43:27');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_07_04_064450_create_events_table', 1);

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
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_lab` int(11) NOT NULL,
  `keperluan_alat` varchar(255) DEFAULT NULL,
  `nama_peminjam` varchar(255) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `waktu_awal` date DEFAULT NULL,
  `waktu_akhir` date DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `created_at`, `updated_at`) VALUES
(1, 'teknologi informasi', '2022-07-07 01:12:35', '2022-07-07 15:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmasi_password` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `confirmasi_password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin', '$2y$10$goHdUHfSqazcUwFvgjJfH.zc6aRCSWTesGWGMunA0hgccQw7pHDda', 'admin', 'app/images/admin/1658741874-LVISr.jpg', NULL, '2022-07-25 09:37:54', '2022-07-25 02:37:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataka_lab`
--
ALTER TABLE `dataka_lab`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `data_keluhan`
--
ALTER TABLE `data_keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `data_laboratorium`
--
ALTER TABLE `data_laboratorium`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD PRIMARY KEY (`id_data_peminjaman`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

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
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_keluhan`
--
ALTER TABLE `data_keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=677;

--
-- AUTO_INCREMENT for table `data_laboratorium`
--
ALTER TABLE `data_laboratorium`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  MODIFY `id_data_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` bigint(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
