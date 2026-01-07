SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- --------------------------------------------------------

--
-- Basis data: `desa_dawuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '85000', 'Luas wilayah desa sumber kedawung', 'service.png', '2022-12-21 05:04:32', '2022-12-21 05:04:32'),
(2, '26', 'Jumlah Kartu Keluarga di desa dumber kedawung', 'service.png', '2022-12-21 05:05:27', '2022-12-21 05:05:27'),
(3, '150', 'Jumla Penduduk di desa Dawuan', 'service.png', '2022-12-21 05:06:00', '2022-12-21 05:06:00'),
(4, '10', 'Prestasi desa Dawuan', 'service.png', '2022-12-21 05:06:32', '2022-12-21 05:06:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Rapat Tahun Baru', 'Tasyakuran bersama warga dawuan untuk mempererat silaturahm', 'galeri d1.jpg', '2022-12-21 05:53:48', '2026-01-06 15:55:53'),
(2, 'Musyawarah Desa', 'Penyambung keharmonisan desa kedawung dengan menjaga kesehatan', 'galeri d3.jpg', '2022-12-21 06:04:19', '2026-01-06 21:35:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'galeri d1.jpg', '2022-12-21 05:14:06', '2026-01-06 15:51:30'),
(3, 'Screenshot 2026-01-07 055222.png', '2022-12-21 05:14:25', '2026-01-06 15:52:35'),
(4, 'galeri d2.jpg', '2022-12-21 05:14:41', '2026-01-06 15:51:40'),
(5, 'g1-01.jpg', '2022-12-21 05:44:52', '2022-12-21 05:44:52'),
(6, 'galeri d3.jpg', '2022-12-21 05:45:49', '2026-01-06 15:51:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2026_01_04_000000_create_users_table', 1),
(2, '2026_01_04_100000_create_password_resets_table', 1),
(3, '2026_01_04_000000_create_failed_jobs_table', 1),
(4, '2026_01_04_000001_create_personal_access_tokens_table', 1),
(5, '2026_01_04_103730_create_sliders', 1),
(6, '2026_01_04_101732_create_services', 1),
(7, '2026_01_04_145631_create_umkms', 1),
(8, '2026_01_04_140930_create_perangkats', 1),
(9, '2026_01_04_141110_create_sambutans', 1),
(10, '2026_01_04_141213_create_testimonis', 1),
(11, '2026_01_04_141241_create_galeris', 1),
(12, '2026_01_04_154943_create_data', 1),
(13, '2026_01_04_043332_create_news', 1),
(14, '2026_01_04_051501_create_events', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bikin Geger Penemuan Mayat', 'KBRN, Majalengka: Keheningan hamparan sawah Desa Balida, Kecamatan Dawuan, Kabupaten Majalengka, Jawa Barat, mendadak pecah oleh kabar duka. Sesosok mayat pria tanpa identitas ditemukan tergeletak tak bernyawa di tengah persawahan, Selasa (30/12/2025) sekitar pukul 11.00 WIB, menggegerkan warga sekitar.', '1767739340_Screenshot 2026-01-07 051522.png', '2022-12-21 05:08:44', '2026-01-06 15:59:59'),
(2, 'Ramaikan Lomba Catur', 'Ayo dulur dulur gabung lomba catur, sambung silaturahmi bersama warga dawuan', 'magnus.jpg', '2022-12-21 05:50:39', '2026-01-06 15:05:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkats`
--

CREATE TABLE `perangkats` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perangkats`
--

INSERT INTO `perangkats` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Desa', 'Abdul Rohman Baehaqi S.Sy', 'user.jpg.jpg', '2022-12-21 04:11:07', '2026-01-06 15:16:49'),
(2, 'Wakil Kepala Desa', 'Usep Saepudin', 'user.jpg.jpg', '2022-12-21 04:11:46', '2026-01-06 15:17:48'),
(3, 'Bendahara', 'Anonim', 'user.jpg.jpg', '2022-12-21 04:13:25', '2026-01-06 21:32:31'),
(4, 'Sekertaris', 'Anonim', 'user.jpg.jpg', '2022-12-21 04:13:51', '2026-01-06 21:32:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutans`
--

CREATE TABLE `sambutans` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sambutans`
--

INSERT INTO `sambutans` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Selamat Tahun Baru', 'Assalamualaikum wr.wb \r\nTidak terasa saat ini kita sudah ada di awal tahun 2026. Saya segenap Kepala Desa Dawuan mengucapkan Selamat tahun baru, semoga apa yang kita laksanakan pada tahun ini selalu berkah .', 'user.jpg.jpg', '2022-12-21 10:59:09', '2026-01-06 15:11:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan KTP', 'Layanan pembuatan KTP elektronik bagi warga berusia 17 tahun ke atas, yang hilang, atau rusak. Persyaratan: fotokopi KK, surat pengantar RT/RW, dan pas foto 3x4. Proses 7-14 hari kerja.', 'service.png', '2022-12-21 04:20:22', '2026-01-06 15:46:18'),
(2, 'Pembuatan Kartu Keluarga', 'Layanan penerbitan atau pembaruan KK untuk warga yang baru menikah, pindah, atau ada perubahan data keluarga. Diperlukan akta nikah/cerai, KTP anggota keluarga, dan surat pengantar RT/RW. Selesai dalam 7-10 hari kerja.', 'service.png', '2022-12-21 04:25:49', '2026-01-06 15:46:29'),
(3, 'Pembuatan Akte Kelahiran', 'Layanan pengurusan akta kelahiran untuk bayi baru lahir atau anak yang belum memiliki akta. Syarat: surat keterangan lahir dari bidan/RS, fotokopi KTP dan KK orang tua, buku nikah. Proses 14 hari kerja.', 'service.png', '2022-12-21 04:26:21', '2026-01-06 15:46:41'),
(4, 'Pembuatan AKte Kematian', 'Layanan penerbitan akta kematian sebagai bukti resmi pencatatan sipil. Diperlukan surat keterangan kematian dari RS/dokter, fotokopi KTP dan KK almarhum, serta surat pengantar RT/RW. Selesai dalam 3-7 hari kerja', 'service.png', '2022-12-21 04:33:50', '2026-01-06 15:46:52'),
(5, 'Prosedur Pindah Domisili', 'Layanan surat keterangan pindah bagi warga yang berpindah tempat tinggal. Syarat: surat pengantar RT/RW, fotokopi KTP dan KK, surat tidak ada tunggakan. Proses 3-5 hari kerja.', 'service.png', '2022-12-21 04:34:28', '2026-01-06 15:47:09'),
(6, 'Pembuatan Surat Izin Kematian', 'Layanan penerbitan surat keterangan kematian untuk keperluan administrasi pemakaman dan pencatatan sipil. Diperlukan surat keterangan dari rumah sakit atau dokter, fotokopi KTP almarhum, dan surat pengantar RT/RW. Proses 1-3 hari kerja.', 'service.png', '2022-12-21 04:36:44', '2026-01-06 15:47:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pemandangan Alam', 'Gunung dan Sawah', 'slide1-01.jpg', '2022-12-21 04:05:21', '2026-01-06 21:31:02'),
(2, 'Kegiatan', 'Balap Kuda', 'slide2-01.jpg', '2022-12-21 04:44:07', '2026-01-06 21:31:40'),
(3, 'Acara', 'Tasyakuran desa dawuan', 'galeri d1.jpg', '2022-12-21 04:59:02', '2026-01-06 21:31:33'),
(4, 'Lomba', 'Lomba Catur', 'slide4-01.jpg', '2022-12-21 04:59:28', '2026-01-06 21:31:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkms`
--

CREATE TABLE `umkms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `umkms`
--

INSERT INTO `umkms` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'UMKM 1', 'UMKM di Desa Dawuan didukung program bantuan modal dari BAZNAS Majalengka. Usaha lokal seperti kuliner dan kerajinan berkembang melalui bazar di tingkat RW, menunjukkan pertumbuhan ekonomi kreatif masyarakat desa.', 'UMKM DAWUAN.jpeg', '2022-12-21 05:00:30', '2026-01-06 15:55:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'dawuhan', 'superadmin', 'dawuhan@gmail.com', NULL, '$2y$10$mjXY55ieKkBPTQejtt3MZu0eDSno1dczJI2Hz6HHSlVm2IxZM//Re', 'FERTWYQOKUt6xaSKZBAzk5Viwywl0DK4mP8toL76WozMMqElrrenJiZmAJQ6', '2022-12-19 20:15:29', '2026-01-05 02:45:45'),
(7, 'Nabila Dwi Paramita', 'admin', 'bila@gmail.com', NULL, '$2y$10$/6qXVTv0La96D5LKYrsYdOTzTGsB4upnwx/gi55tZ4AkUe3QhDEpW', '6ix3OFLDUOuAfX6TgfKROHilLIroYOf3oUk5IQjpEmBpgs52zc7ylqjvTiIk', '2022-12-20 07:56:16', '2022-12-20 07:56:16'),
(8, 'Kurnia Nur Aisyah', 'admin', 'aisyah@gmail.com', NULL, '$2y$10$H0bA4JdNGkNwt4My4psJ.ejP0/qLGEllOwul.bfzEJst/lR11CfYu', 'orDSP8hY2YZL1clY34FVN2SAcwjzGsMIkefB42tKvhUmV8W3XgE3nrQEWsmS', '2022-12-20 07:58:19', '2022-12-20 07:58:19'),
(9, 'David Kurniawan', 'admin', 'david@gmail.com', NULL, '$2y$10$jfqvZREslxiJt4VUlBsfhe/VIUqJQJNkJT/QUll4I8dD5d9.NLn5m', 'MBBuxDI7QNZlOxfrnzP3gVaDAorshau5uWc4pEkpbVQGXhWCuGZ4OCVLJe9Z', '2022-12-20 07:59:04', '2022-12-20 07:59:04'),
(11, 'Nico Tambunan', 'admin', 'nico@gmail.com', NULL, '$2y$10$JQvPgGG0ffECVyEf1l17veTeHzsTZTZ6Ded00InExU1dVl8vDlV0u', 'Y8YXZlGziNffWdJl83GKqvt3Rtb41pghqIGm5lX6qteP6O6IS4bPA0kxbWhF', '2022-12-20 08:03:09', '2022-12-20 08:03:09'),
(12, 'Nallenaya Ilham Putra', 'admin', 'nalle@gmail.com', NULL, '$2y$10$ZIDz.vcWR0FYyzA630UK2Og0Wa7W/O/IcKsXgaWxFAse1wK/k7Yju', 'NcxnOQgZ5nwu3nooTEnoCF0Qhra9I8cayYMy9WztxHMd3KsnSZ7PjuoMv9j1', '2022-12-20 08:03:09', '2026-01-06 07:36:52'),
(15, 'ingga', 'admin', 'ingga@hahahah.vom', NULL, '$2y$10$K48R7ZvWWj6rjqwxCuHkquljCzE.MHbm0Ve8NpHMD8MnAwNTXtsYm', NULL, '2026-01-04 03:22:13', '2026-01-04 03:22:13'),
(16, 'adminingga', 'superadmin', 'adminingga@gmail.fuk', NULL, '$2y$10$/Nl4x0/TXLuGZteXpoZ/n.44v9QYwcJqqTciyANMGQPLFUB3Gp3Rq', NULL, '2026-01-04 03:45:38', '2026-01-04 03:45:38'),
(17, 'Iqbal Maulana', 'admin', 'iqbal@gmail.com', NULL, '$2y$10$AEDek9N09K9Tf3/J6sxhzeSFz8qC3d34gHtUTCWjqV56Hu1AaIdA2', 'ewsFQ1ZlhhYGSbc8Pt1Ap7QHs29nw8pkCkJZgVKoRErAUWl2VpMmvJAWwPke', '2022-12-20 08:03:09', '2026-01-06 07:36:52'),
(18, 'naya', 'admin', 'naya@gmail.com', NULL, '$2y$10$rhm7sOB8435OfTW8/oV9.ecqkMm7JDAdVS2qgFZ2ze65G94ais.Z6', NULL, '2026-01-06 21:41:37', '2026-01-06 21:41:37');

--
-- Indeks untuk tabel yang dibuang
--

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
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
