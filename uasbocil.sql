-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2024 pada 16.18
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
-- Database: `uasbocil`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_01_094145_tbl_produk', 1),
(8, '2024_02_02_012831_tbl_satuan', 2),
(9, '2024_02_02_013940_tbl_paketan', 3);

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
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `tbl_paketan`
--

CREATE TABLE `tbl_paketan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_antrian` varchar(255) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `nm_cus` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nm_produk` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `ket` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_paketan`
--

INSERT INTO `tbl_paketan` (`id`, `kd_antrian`, `tgl_pesanan`, `nm_cus`, `alamat`, `nm_produk`, `qty`, `harga`, `ket`, `created_at`, `updated_at`) VALUES
(2, 'PAP-002', '2024-02-17', 'Miftahul Huda', 'Jl. pancran', 'Roll Cake Klepon', '100', 4275000, 'Paket', '2024-02-02 19:09:11', '2024-02-02 19:19:47'),
(3, 'PAP-002', '2024-02-15', 'Miftahul Huda', 'Pancuran', 'Roll Cake Mangga Original', '150', 7125000, 'ok', '2024-02-02 19:23:07', '2024-02-02 19:23:07'),
(4, 'PAS-003', '2024-02-14', 'Almarsya', 'Jalan jalan', 'Chocomalt Cake Coffee', '60', 2850000, 'ok', '2024-02-02 20:37:50', '2024-02-02 20:37:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_kue` varchar(255) NOT NULL,
  `nm_kue` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `rasa` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL,
  `gambar4` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `kd_kue`, `nm_kue`, `harga`, `rasa`, `ket`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `created_at`, `updated_at`) VALUES
(2, 'KP-001', 'Roll Cake Mangga Original', 50000, 'Mangga', 'Cake gulung aroma khas mangga yang lembut/moist dengan isian selai buah mangga gedong asli homemade.', '1 (11).jpeg', '1 (13).jpeg', '1 (14).jpeg', '1 (16).jpeg', NULL, '2024-02-01 22:33:10'),
(3, 'KP-002', 'Paket Cake 4 Sekat', 245000, 'Lotus, Cadbury, Chantily, dan Strawberi keju.', 'Cake Premium dengan 4 varian berbeda.Lotus, cadbury, chantily, dan strawberi keju.', '1 (2).jpeg', '', '', '', NULL, NULL),
(4, 'KP-003', 'Baby Strudel Coklat Isi (10)', 50000, 'cokalt, pisang, keju', 'Baby Strudel Coklat terdapat beberapa isi dengan berisi 10', '1 (3).jpeg', '1 (6).jpeg', '69.jpg', '70.jpg', NULL, NULL),
(5, 'KP-004', 'Roll Cake Tiramisu', 45000, 'Coklat', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores unde inventore impedit veniam officia, excepturi autem voluptatem nobis aliquam commodi.', '1 (10).jpeg', '1 (9).jpeg', '', '', NULL, NULL),
(6, 'KP-005', 'Chocomalt Cake Coffee', 50000, 'Coffee', 'Cake coklat yang lembut/moist dengan berlapis selai coklat, topping Coffee dan topping chocomalt yang lebih nyoklat dan melted.', '1 (34).jpeg', '71.jpg', '72.jpg', '', NULL, NULL),
(7, 'KP-006', 'Chocomalt Cake Ulang Tahun', 175000, 'Coklat', 'Bolu coklat yang lembut/moist dengan berlapis isian selai coklat dan topping Chocomalt yang lebih nyoklat dan melted.', '1 (30).jpeg', '4.jpg', '', '', NULL, NULL),
(8, 'KP-007', 'Roll Cake Mangga Cheese', 60000, 'Mangga, Keju', 'Bolu Gulung Aroma Khas Mangga Yang Lembut/Moist Dengan isian selai buah mangga gedong asli HomeMade dan perpaduan topping parutan keju.', '1 (36).jpg', '1(37).jpg', '2.jpg', '', NULL, '2024-02-01 22:54:50'),
(9, 'KP-008', 'Roll Cake Klepon', 45000, 'Gula Merah, Kelapa', 'Bolu Gulung dengan rasa seperti kue klepon tradisional dengan isi selai gula merah dan topping kelapa parut.', '18.jpg', '19.jpg', '', '', NULL, NULL),
(10, 'KP-009', 'Strudel Pizza', 70000, 'Daging sapi, smoked beef, sosis', 'Kue pastry dengan tekstur yang crunchy dan berlapis. Isian Daging sapi asli, smoked beef, sosis dengan perpaduan saos pizza spesial dan topping keju mozarella.Perpaduan Rasa yang spesial dan premium dengan bahan-bahan pilihan', '1 (26).jpeg', '1 (27).jpeg', '', '', NULL, NULL),
(11, 'KP-010', 'Klepon Cake & Putu Pisang', 70000, 'Pisang', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum praesentium odio repellendus culpa laborum natus accusantium? Exercitationem nisi ullam non?', '56.jpg', '55.jpg', '57.jpg', '58.jpg', NULL, NULL),
(12, 'KP-011', 'Strudel ChocoBan Chesee', 60000, 'Coklat, Pisang, Keju', 'Kue pastry dengan tekstur yang crunchy dan berlapis.Isian Buah pisang asli dengan perpaduan topping keju chocolate yang melted.Perpaduan Rasa yang spesial dan premium dengan bahan-bahan pilihan.', '1 (28).jpeg', '1 (29).jpeg', '1 (31).jpeg', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_satuan`
--

CREATE TABLE `tbl_satuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_antrian` varchar(255) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `nm_cus` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nm_produk` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `ket` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_satuan`
--

INSERT INTO `tbl_satuan` (`id`, `kd_antrian`, `tgl_pesanan`, `nm_cus`, `alamat`, `nm_produk`, `qty`, `harga`, `ket`, `created_at`, `updated_at`) VALUES
(2, 'PAS-001', '2024-02-06', 'Miftahul Huda', 'Jl. pancuran', 'Chocomalt Cake Coffee', '8', 400000, 'Pesan Sekarang', '2024-02-02 16:23:32', '2024-02-02 19:11:56'),
(3, 'PAS-003', '2024-02-17', 'Miftahul Huda', 'OKOKOKOK', 'Roll Cake Mangga Cheese', '4', 240000, 'ok', '2024-02-02 16:29:12', '2024-02-02 16:29:12'),
(4, 'PAS-004', '2024-02-04', 'Miftahul Huda', 'asdas', 'Paket Cake 4 Sekat', '2', 490000, 'asdsa', '2024-02-02 16:34:37', '2024-02-02 16:34:37'),
(5, 'PAS-005', '2024-02-06', 'Miftahul Huda', 'jl', 'Roll Cake Klepon', '4', 180000, 'ok', '2024-02-02 16:35:08', '2024-02-02 16:51:49'),
(7, 'PAS-005', '2024-02-13', 'Miftahul Huda', 'ok', 'Strudel ChocoBan Chesee', '6', 360000, 'ok', '2024-02-02 18:53:00', '2024-02-02 18:53:00'),
(8, 'PAS-006', '2024-02-13', 'Miftahul Huda', 'okok', 'Baby Strudel Coklat Isi (10)', '4', 200000, 'ok', '2024-02-02 18:54:25', '2024-02-02 18:54:25'),
(10, 'PAS-007', '2024-02-21', 'Miftahul Huda', 'ok', 'Strudel ChocoBan Chesee', '6', 360000, 'ok', '2024-02-02 18:55:35', '2024-02-02 18:55:35'),
(11, 'PAS-008', '2024-02-10', 'Miftahul Huda', 'Jl pancuran', 'Paket Cake 4 Sekat', '5', 1225000, 'ok', '2024-02-02 20:08:18', '2024-02-02 20:08:18'),
(12, 'PAS-009', '2024-02-16', 'Almarsya', 'Jl.apasaja', 'Paket Cake 4 Sekat', '10', 2450000, 'ok', '2024-02-02 20:15:08', '2024-02-02 20:15:08');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2a$12$t10WIKIx6HEs.8NCD4qo3.qK1yqpsyevILKv/Ngtxv.JKcMsxaZoa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `tbl_paketan`
--
ALTER TABLE `tbl_paketan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_paketan`
--
ALTER TABLE `tbl_paketan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_satuan`
--
ALTER TABLE `tbl_satuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
