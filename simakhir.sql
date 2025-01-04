-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2025 pada 10.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `title`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 3, 'Proposal Skripsi', 'proposal_skripsi.pdf', '2024-12-21 08:04:28', '2024-12-21 08:04:28'),
(2, 4, 'Metode waterfall', 'waterfall.pdf', '2024-12-26 13:25:13', '2024-12-26 13:25:13'),
(4, 3, 'Revisi Dokumen', 'documents/gKUGgnjQjKilXdi3O0tXVtNwPUnfz4B0XGQyeHh6.docx', '2024-12-27 22:33:14', '2024-12-27 22:33:14'),
(6, 14, 'Dokumen Baru Update', 'documents/A6o4sQmwHIY13TdwomfBSE0Ha8eIgLrAUYnHxbWh.docx', '2024-12-28 02:35:04', '2024-12-28 03:26:06'),
(8, 14, 'Revisi Baru', 'documents/gtQ8KwrQ9ypNbPalG2m3U2jokAMZryEEbslPCslF.docx', '2024-12-28 03:30:50', '2024-12-28 03:30:50'),
(9, 14, 'Bahasa Inggris', 'documents/VBe5Wz5Mt16eXTGkXjLpZxQPKu4hVc3TAU6WR5TO.pdf', '2024-12-29 19:47:44', '2025-01-03 12:06:30'),
(10, 4, 'Dokumen Revisi', 'documents/bUJ4zZSp7YpL64qCj8zjuFWvq1Ta0qoBPicLx9wF.pdf', '2025-01-01 05:28:20', '2025-01-01 05:28:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comments` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `document_id`, `user_id`, `comments`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Tolong tambahkan lebih banyak referensi.', '2024-12-21 10:06:43', '2024-12-21 10:06:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '0001_01_01_000000_create_users_table', 1),
(12, '0001_01_01_000001_create_cache_table', 1),
(13, '0001_01_01_000002_create_jobs_table', 1),
(14, '2024_12_15_095149_create_documents_table', 1),
(15, '2024_12_15_095757_create_tasks_table', 1),
(16, '2024_12_15_100301_create_schedules_table', 1),
(17, '2024_12_15_101357_create_schedule_user_table', 1),
(18, '2024_12_15_101732_create_feedback_table', 1),
(19, '2024_12_15_101839_create_results_table', 1),
(20, '2024_12_16_145856_create_permission_tables', 1),
(21, '2024_12_19_080644_add_title_and_status_to_schedules_table', 2),
(22, '2024_12_20_140028_add_note_to_schedules_table', 3),
(23, '2024_12_25_101736_add_role_to_users_table', 4),
(24, '2024_12_25_110310_add_role_to_users_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'kelola pengguna', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(2, 'jadwalkan seminar', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(3, 'backup data', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(4, 'lihat jadwal bimbingan', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(5, 'setujui tolak seminar', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(6, 'menilai seminar', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(7, 'kelola tugas skripsi', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(8, 'unggah dokumen', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(9, 'daftar seminar', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(10, 'lihat hasil penilaian', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(11, 'akses dashboard dosen', 'web', '2024-12-24 21:43:22', '2024-12-24 21:43:22'),
(12, 'akses dashboard admin', 'web', '2024-12-25 02:55:16', '2024-12-25 02:55:16'),
(13, 'akses dashboard mahasiswa', 'web', '2024-12-25 02:55:16', '2024-12-25 02:55:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` bigint(20) UNSIGNED NOT NULL,
  `score` decimal(5,2) NOT NULL,
  `comments` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `results`
--

INSERT INTO `results` (`id`, `user_id`, `schedule_id`, `score`, `comments`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 89.00, 'sangat baik', '2024-12-21 10:15:50', '2024-12-23 23:40:07'),
(2, 14, 7, 80.00, 'baik', '2024-12-28 10:49:06', '2024-12-28 10:49:06'),
(3, 14, 10, 100.00, 'Good Job!!!!!', '2025-01-03 12:09:20', '2025-01-03 12:09:20'),
(4, 14, 12, 0.00, NULL, '2025-01-04 08:54:50', '2025-01-04 08:54:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(2, 'dosen', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57'),
(3, 'mahasiswa', 'web', '2024-12-16 08:38:57', '2024-12-16 08:38:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(4, 3),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 2),
(12, 1),
(13, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` enum('bimbingan','seminar','ujian') NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id`, `user_id`, `date`, `time`, `location`, `type`, `note`, `created_at`, `updated_at`, `title`, `status`) VALUES
(1, 3, '2024-12-23', '10:00:00', 'Kampus A', 'seminar', 'Jangan sampai telat', '2024-12-21 10:08:48', '2024-12-25 00:48:54', 'Proposal Skripsi', 'approved'),
(5, 3, '2024-12-30', '22:15:00', 'Ruang A402', 'bimbingan', 'persiapkan dengan baik', '2024-12-26 05:47:37', '2024-12-31 21:24:09', 'Bimbingan', 'approved'),
(6, 4, '2025-01-06', '20:14:00', 'Ruang B201', 'bimbingan', NULL, '2024-12-26 06:19:49', '2024-12-31 09:52:37', 'Materi Bimbingan', 'rejected'),
(7, 14, '2024-12-28', '20:40:00', 'Kampus B', 'seminar', NULL, '2024-12-28 03:48:25', '2024-12-29 19:49:36', 'Revisi Materi', 'approved'),
(10, 14, '2024-12-30', '22:54:00', 'Ruang B', 'seminar', 'Catatan Seminar 1', '2024-12-29 08:54:44', '2025-01-04 01:35:33', 'Seminar', 'rejected'),
(11, 3, '2025-01-15', '07:15:00', 'Ruang D', 'bimbingan', 'Jadwal di ruang D', '2025-01-01 05:20:07', '2025-01-01 05:24:59', 'Materi Bimbingan Terbaru', 'pending'),
(12, 14, '2025-01-10', '22:15:00', 'Ruang AB', 'bimbingan', 'Bimbingan 2', '2025-01-02 07:13:53', '2025-01-02 09:10:30', 'Materi Bimbingan 2', 'approved'),
(13, 15, '2025-01-07', '21:35:00', 'Ruang ABC', 'bimbingan', 'Ruang bimbingan adalah ruang ABC', '2025-01-02 19:36:15', '2025-01-02 19:36:15', NULL, 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule_user`
--

CREATE TABLE `schedule_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('B2KYs6xr07Pj0yNXT6sKDACgRPuHgOZBqPO4wKPn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjNtajllNGRTcThWY2F6R1JBM2tUNHhFcHpuZG8yNDVFeTFCSldiMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1735931582),
('c0CNwlzSW9SJ7UoIKma7nBnV4XnXm4sYkt15GoiW', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 13; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2xLNHNxdFZxSlRiWVY2bEJWWjlaZ2FyVVN0S2hlU2VkODhhbnRqNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1735982344);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `deadline` date NOT NULL,
  `status` enum('pending','completed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `title`, `description`, `deadline`, `status`, `created_at`, `updated_at`) VALUES
(3, 14, 'Tugas 1', 'Deskripsi 1', '2024-12-31', 'pending', '2024-12-29 06:49:54', '2024-12-29 06:49:54'),
(4, 3, 'Penulisan Latar Belakang', 'Tulis latar belakang penelitian dengan format yang sudah diberikan oleh dosen pembimbing.', '2025-01-07', 'pending', '2025-01-03 02:30:14', '2025-01-03 02:30:14'),
(5, 14, 'Revisi Tugas', 'Deskripsi revisi tugas', '2025-01-08', 'completed', '2024-12-29 08:05:16', '2024-12-29 08:13:49'),
(6, 3, 'Revisi Tugas', 'Perbaiki Tugas anda', '2025-01-04', 'pending', '2025-01-02 07:21:01', '2025-01-02 07:23:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','dosen','mahasiswa') NOT NULL DEFAULT 'mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Muhammad', 'admin@gmail.com', NULL, '$2y$12$ZI9BdOBpuivd1VN2DzzE9uqgex7gVY.W1k25a0hODrpqaxawrEjY2', NULL, '2024-12-17 08:17:41', '2024-12-18 06:04:33', 'admin'),
(2, 'Afif', 'dosen@gmail.com', NULL, '$2y$12$RhUIR2Y9fFPzH0Gte.3fvO.leblJYlXVtkSzthwEpBoXfQ8rsRIJu', NULL, '2024-12-21 00:56:11', '2024-12-21 00:56:11', 'dosen'),
(3, 'Naufal', 'mahasiswa@gmail.com', NULL, '$2y$12$S1izHbItXl7Mp0C58q/3zuT98sULOWHLGi5pV9cZgtxTgb4gXddEu', NULL, '2024-12-21 00:58:35', '2024-12-21 00:58:35', 'mahasiswa'),
(4, 'Abdul Qodir', 'abdul@gmail.com', NULL, '$2y$12$PwcqJaDaWCSQTM4E8IyDYuTegruMJi9hM3T6/E.LtpShciZMrg8DG', NULL, '2024-12-21 04:02:08', '2024-12-21 04:02:08', 'mahasiswa'),
(14, 'Jamie', 'jamie@gmail.com', NULL, '$2y$12$QDk7gD5U8K6a/IHPnKfqCuVZuQb2ZGMpCOuTELnWhjcau8xWbncI.', 'TnwsbIwGIV9Onr8BsdZ718HTElucwc6sOzPOfQM8U6uIhpGwCvaAbVp8mn3o', '2024-12-27 00:26:44', '2024-12-27 00:26:44', 'mahasiswa'),
(15, 'Ujang', 'ujang@gmail.com', NULL, '$2y$12$BEA5kPStbCw/YDxmKMGwL.4PErtNn5HIKYnniUL0KVE97euYDjc02', NULL, '2025-01-02 19:26:47', '2025-01-02 19:26:47', 'mahasiswa'),
(16, 'Agus', 'gus@gmail.com', NULL, '$2y$12$OMPpFy4h3mmOXM/3Vlkx5OeLRKJUasm5q71BHkuVgGV55/Yws5CfS', NULL, '2025-01-02 19:39:44', '2025-01-02 19:39:44', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_document_id_foreign` (`document_id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_schedule_id_foreign` (`schedule_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `schedule_user`
--
ALTER TABLE `schedule_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_user_schedule_id_foreign` (`schedule_id`),
  ADD KEY `schedule_user_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `schedule_user`
--
ALTER TABLE `schedule_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_document_id_foreign` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `schedule_user`
--
ALTER TABLE `schedule_user`
  ADD CONSTRAINT `schedule_user_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedule_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
