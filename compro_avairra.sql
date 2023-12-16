-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 16, 2023 at 12:10 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compro_avairra`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image_path`, `posision`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'banner/Home/projo-bikin-spanduk-digital-kita-indonesia-kita-prabowo-gibran-dok-istimewa_169.jpeg', 'Home', '2023-12-16 01:49:21', '2023-12-16 01:49:21', NULL),
(2, 'banner/Home/080291100_1697628967-Banner_Infografis_Jelang_Pendaftaran_Capres-Cawapres__Mahfud_MD_Diumumkan_Jadi_Cawapres_Ganjar.jpg', 'Home', '2023-12-16 01:56:13', '2023-12-16 01:56:13', NULL),
(3, 'banner/Home/anies-baswedan-dan-muhaimin-iskandar_169.jpeg', 'Home', '2023-12-16 01:56:26', '2023-12-16 01:56:26', NULL),
(4, 'banner/Home/Logo-Partai-Politik-PDIP.png', 'Home', '2023-12-16 01:56:39', '2023-12-16 01:56:39', NULL),
(5, 'banner/About_Us_1/image.jpg', 'About_Us_1', '2023-12-16 04:47:57', '2023-12-16 04:47:57', NULL),
(6, 'banner/About_Us_2/pasangan-prabowo-subianto-dan-gibran-rakabuming-raka-saat-menghadiri-deklarasi-capres-cawapres-di-indonesia-arena-jakarta-rabu-5_169.jpg', 'About_Us_2', '2023-12-16 04:49:29', '2023-12-16 05:06:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Handphone', 'Deskripsi Handphone', '2023-12-15 11:49:35', '2023-12-16 02:54:43', NULL),
(3, 'Laptop', 'Deskripsi Laptop', '2023-12-15 11:49:46', '2023-12-16 02:54:55', NULL),
(4, 'Baju', 'Deskripsi Baju', '2023-12-16 02:56:13', '2023-12-16 02:56:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PT. Sukses', 'sukses@gmail.com', '0812345//0312312', 'Jl Numpang', '2023-12-16 00:02:47', '2023-12-16 00:10:24', '2023-12-16 00:10:24'),
(2, 'PT. Sukses', 'sukses@gmail.com', '0812341231//031231231', 'Jl. Kumau//Jl. Dia', '2023-12-16 00:10:55', '2023-12-16 00:45:21', '2023-12-16 00:45:21'),
(3, 'PT. Sukses', 'sukses@gmail.com', '0812341231//031231231', 'Jl. Kumau//Jl. Dia', '2023-12-16 00:45:14', '2023-12-16 00:52:43', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_15_142215_create_categories_table', 1),
(6, '2023_12_15_142346_create_products_table', 1),
(7, '2023_12_15_142455_create_companies_table', 1),
(8, '2023_12_15_175434_create_sosial_medias_table', 1),
(9, '2023_12_15_175501_create_banners_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `series` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `nomor`, `series`, `image_path`, `desc`, `created_at`, `updated_at`, `deleted_at`, `name`) VALUES
(3, 2, 'PRDT20231216001', 'Iphone', 'product/Iphone/iphone_12_purple_5_5.jpg', '<p>iPhone 12. Layar Super Retina XDR 6,1 inci yang begitu cerah.1 Ceramic Shield dengan ketahanan jatuh empat kali lebih baik.2 Fotografi pencahayaan rendah yang menakjubkan dengan mode Malam di semua kamera. Mampu merekam, mengedit, dan memutar video sekelas sinema dengan Dolby Vision. Chip A14 Bionic yang andal. Dan aksesori MagSafe baru untuk kemudahan pemasangan dan pengisian daya nirkabel yang lebih cepat.3 Saatnya bersenang-senang.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Poin-poin fitur</strong><br />&bull; Layar Super Retina XDR 6,1 inci1 <br />&bull; Ceramic Shield, lebih tangguh dari kaca ponsel pintar mana pun<br />&bull; Chip A14 Bionic, chip paling cepat yang pernah ada di ponsel pintar <br />&bull; Sistem kamera ganda canggih dengan kamera Ultra Wide dan Wide 12 MP; mode Malam, Deep Fusion, Smart HDR 3, perekaman HDR 4K Dolby Vision <br />&bull; Kamera depan TrueDepth 12 MP dengan mode Malam, perekaman HDR 4K Dolby Vision <br />&bull; Level ketahanan air IP68 terdepan di industri4<br />&bull; Mendukung aksesori MagSafe untuk kemudahan pemasangan dan pengisian daya nirkabel yang lebih cepat3<br />&bull; iOS 14 dengan widget yang didesain ulang di Layar Home, Perpustakaan App yang sepenuhnya baru, Cuplikan App, dan banyak lagi</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Legal</strong><br />1. Layar memiliki sudut melengkung. Jika diukur sebagai persegi, layarnya memiliki ukuran diagonal 6,06 inci. <br />Area bidang layar berukuran lebih kecil.<br />2. Klaim berdasarkan bagian depan Ceramic Shield iPhone 12 dibandingkan dengan iPhone generasi sebelumnya. <br />3. Aksesori dijual terpisah.<br />4. iPhone 12 tahan cipratan, air, dan debu dan diuji dalam kondisi laboratorium terkontrol dengan level IP68 menurut standar IEC 60529 (kedalaman maksimum 6 meter hingga selama 30 menit). Ketahanan terhadap cipratan, air, dan debu tidak berlaku secara permanen. Daya tahan mungkin berkurang akibat penggunaan sehari-hari. Jangan coba mengisi daya iPhone yang basah; lihat panduan pengguna untuk instruksi pembersihan dan pengeringan. Kerusakan akibat cairan tidak ditanggung dalam garansi.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Spesifikasi teknis</strong><br />Kunjungi apple.com/iphone/compare untuk informasi selengkapnya.</p>\r\n<p>&nbsp;</p>', '2023-12-16 03:01:12', '2023-12-16 03:01:12', NULL, '12 Pro Max'),
(4, 2, 'PRDT20231216002', 'Iphone', 'product/Iphone/iphone_13_pink_1_3.jpg', '<p>iPhone 13. Sistem kamera ganda paling canggih yang pernah ada di iPhone. Chip A15 Bionic yang secepat kilat. Lompatan besar dalam kekuatan baterai. Desain kokoh. Dan layar Super Retina XDR yang lebih cerah.<br /><br /></p>\r\n<p><strong>Poin-poin fitur utama</strong></p>\r\n<ul>\r\n<li>Layar Super Retina XDR 6,1 inci<sup>1</sup></li>\r\n<li>Mode Sinematik menambahkan kedalaman bidang yang dangkal dan pindah fokus secara otomatis di video Anda</li>\r\n<li>Sistem kamera ganda canggih dengan kamera Wide dan Ultra Wide 12 MP; Gaya Fotografi, Smart HDR 4, mode Malam, perekaman HDR 4K Dolby Vision</li>\r\n<li>Kamera depan TrueDepth 12 MP dengan mode Malam, perekaman HDR 4K Dolby Vision</li>\r\n<li>Chip A15 Bionic untuk performa secepat kilat</li>\r\n<li>Pemutaran video hingga 19 jam<sup>2</sup></li>\r\n<li>Desain kokoh dengan Ceramic Shield</li>\r\n<li>Level ketahanan air IP68 terdepan di industri<sup>3</sup></li>\r\n<li>iOS 15 dilengkapi berbagai fitur baru untuk melakukan lebih banyak hal dengan iPhone<sup>4</sup></li>\r\n<li>Mendukung aksesori MagSafe untuk kemudahan pemasangan dan pengisian daya nirkabel yang lebih cepat<sup>5</sup></li>\r\n</ul>\r\n<p><br /><strong>Legal</strong></p>\r\n<ol>\r\n<li>Layar memiliki sudut melengkung yang mengikuti desain lekukan yang indah, dan semua sudut ini berada di dalam bidang persegi standar. Jika diukur sebagai bentuk persegi standar, layarnya memiliki ukuran diagonal 6,06 inci. Area bidang layar berukuran lebih kecil.</li>\r\n<li>Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi. Lihat <a title=\"apple.com/batteries\" href=\"https://www.apple.com/batteries/\" target=\"_blank\" rel=\"noopener\">apple.com/batteries</a> untuk informasi selengkapnya.</li>\r\n<li>iPhone 13 tahan tumpahan, cipratan, dan debu dan diuji dalam kondisi laboratorium terkontrol dengan level IP68 menurut standar IEC 60529. Ketahanan terhadap tumpahan, cipratan, dan debu tidak berlaku secara permanen. Daya tahan mungkin berkurang akibat penggunaan sehari-hari. Jangan coba mengisi daya iPhone yang basah; lihat panduan pengguna untuk instruksi pembersihan dan pengeringan. Kerusakan akibat cairan tidak ditanggung dalam garansi.</li>\r\n<li>Beberapa fitur mungkin tidak tersedia untuk semua negara atau semua wilayah.</li>\r\n<li>Aksesori dijual terpisah.</li>\r\n</ol>\r\n<p><br /><strong>Spesifikasi teknis</strong><br />Kunjungi <a title=\"apple.com/iphone/compare\" href=\"https://www.apple.com/id/iphone/compare/\" target=\"_blank\" rel=\"noopener\">apple.com/iphone/compare</a> untuk informasi selengkapnya.</p>\r\n<p>&nbsp;</p>', '2023-12-16 03:03:04', '2023-12-16 03:03:04', NULL, '13 Pro Max'),
(5, 2, 'PRDT20231216003', 'Iphone', 'product/Iphone/iphone_14_pro_deep_purple_5_9.jpg', '<p>iPhone 14 Pro. Memotret detail menakjubkan dengan kamera Utama 48 MP. Nikmati iPhone dalam cara yang sepenuhnya baru dengan layar yang Selalu Aktif dan Dynamic Island. Deteksi Tabrakan,<sup>1</sup> sebuah fitur keselamatan baru, memanggil bantuan saat Anda tak bisa.</p>\r\n<p><br /><br /><strong>Poin-poin fitur utama</strong></p>\r\n<ul>\r\n<li>Layar Super Retina XDR 6,1 inci<sup>2</sup> yang Selalu Aktif dan dilengkapi ProMotion</li>\r\n<li>Dynamic Island, cara baru yang istimewa untuk berinteraksi dengan iPhone</li>\r\n<li>Kamera utama 48 MP untuk resolusi hingga 4x lebih besar</li>\r\n<li>Mode Sinematik kini dalam Dolby Vision 4K pada kecepatan hingga 30 fps</li>\r\n<li>Mode Aksi untuk video handheld yang stabil</li>\r\n<li>Teknologi keselamatan penting&mdash;Deteksi Tabrakan,<sup>1</sup> memanggil bantuan saat Anda tak bisa</li>\r\n<li>Kekuatan baterai sepanjang hari dan pemutaran video hingga 23 jam<sup>3</sup></li>\r\n<li>A16 Bionic, chip ponsel pintar paling maksimal. Seluler 5G super cepat<sup>4</sup></li>\r\n<li>Fitur ketahanan terdepan di industri dengan Ceramic Shield dan tahan air<sup>5</sup></li>\r\n<li>iOS 16 menawarkan semakin banyak cara untuk personalisasi, komunikasi, dan berbagi<sup>6</sup></li>\r\n</ul>\r\n<p><br /><br /><strong>Legal</strong></p>\r\n<ol>\r\n<li>Darurat SOS menggunakan Panggilan Wi-Fi atau koneksi seluler.</li>\r\n<li>Layar memiliki sudut melengkung. Jika diukur sebagai persegi, layarnya memiliki ukuran diagonal 6,12 inci. Area bidang layar berukuran lebih kecil.</li>\r\n<li>Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi; lihat&nbsp;apple.com/batteries&nbsp;untuk informasi selengkapnya.</li>\r\n<li>Memerlukan paket data. 5G tersedia di pasar tertentu dan melalui operator tertentu. Kecepatan bervariasi menurut kondisi lokasi dan operator. Untuk detail tentang dukungan 5G, hubungi operator Anda dan lihat apple.com/iphone/cellular.</li>\r\n<li>iPhone 14 Pro tahan cipratan, air, dan debu dan diuji dalam kondisi laboratorium terkontrol dengan level IP68 menurut standar IEC 60529 (kedalaman maksimum 6 meter hingga selama 30 menit). Ketahanan terhadap cipratan, air, dan debu tidak berlaku secara permanen. Daya tahan mungkin berkurang akibat penggunaan sehari-hari. Jangan coba mengisi daya iPhone yang basah; lihat panduan pengguna untuk instruksi pembersihan dan pengeringan. Kerusakan akibat cairan tidak ditanggung dalam garansi.</li>\r\n<li>Beberapa fitur mungkin tidak tersedia untuk semua negara atau semua wilayah.</li>\r\n</ol>', '2023-12-16 03:06:33', '2023-12-16 03:06:33', NULL, '14 Pro Max'),
(6, 3, 'PRDT20231216004', 'Macbook', 'product/Macbook/macbook_pro_m1_space_gray_1_2.jpg', '<div id=\"headlessui-tabs-panel-:r4:\" tabindex=\"0\" role=\"tabpanel\" data-headlessui-state=\"selected\" aria-labelledby=\"headlessui-tabs-tab-:r0:\">\r\n<div class=\"text-xs tracking-[.5px] leading-loose product-description\">\r\n<p>Chip Apple M1 mendefinisikan ulang MacBook Pro 13 inci. Dilengkapi CPU 8-core yang mampu menangani berbagai tahapan kerja yang kompleks dalam fotografi, pemrograman, pengeditan video, dan lainnya, dengan mudah. GPU 8-core luar biasa yang melibas tugas kaya grafis dengan mudah dan membuat game terasa sangat lancar. Neural Engine 16-core yang canggih untuk tenaga lebih besar bagi pembelajaran mesin di aplikasi favorit Anda. Memori terintegrasi super cepat untuk performa yang lancar. Dan kekuatan baterai‑paling tahan lama yang pernah ada di Mac, hingga 20 jam.(3) Ini adalah laptop pro Apple yang paling populer. Performa jauh lebih baik, jauh lebih pro.</p>\r\n<p>&nbsp;</p>\r\n<p>&bull;&nbsp;Chip M1 yang didesain Apple untuk lompatan besar dalam performa CPU, GPU, dan pembelajaran mesin<br />&bull;&nbsp; Lakukan lebih banyak hal dengan kekuatan baterai hingga 18 jam(3)<br />&bull;&nbsp;&nbsp;CPU 8-core menghadirkan performa hingga 3,5x lebih cepat untuk menangani berbagai proyek lebih cepat(4)<br />&bull;&nbsp;&nbsp;GPU hingga delapan core dengan grafis hingga 5x lebih cepat untuk aplikasi dan game kaya grafis(4)<br />&bull;&nbsp;&nbsp;Neural Engine 16-core untuk pembelajaran mesin canggih<br />&bull;&nbsp;&nbsp;Memori terintegrasi 8 GB menjadikan segala yang Anda lakukan terasa cepat dan lancar <br />&bull;&nbsp;&nbsp;Penyimpanan SSD super cepat membuka aplikasi dan file dalam sekejap<br />&bull;&nbsp;&nbsp;Desain tanpa kipas untuk pengoperasian yang senyap <br />&bull;&nbsp;&nbsp;Layar Retina 13,3 inci dengan warna luas P3 untuk gambar yang cemerlang dan detail luar biasa3<br />&bull;&nbsp;&nbsp;Kamera FaceTime HD dengan prosesor sinyal gambar canggih untuk panggilan video yang lebih jelas dan tajam<br />&bull;&nbsp;&nbsp;Deretan tiga mikrofon lebih mendengarkan Anda. Bukan sekeliling Anda.<br />&bull;&nbsp;&nbsp;Wi-Fi 6 generasi baru untuk konektivitas yang lebih cepat<br />&bull;&nbsp;&nbsp;Dua port Thunderbolt/USB 4 untuk pengisian daya dan aksesori<br />&bull;&nbsp;&nbsp;Magic Keyboard dengan lampu latar dan Touch ID untuk membuka kunci dan melakukan pembayaran dengan aman<br />&bull;&nbsp;&nbsp;macOS Big Sur memperkenalkan desain baru yang tegas dan pembaruan aplikasi besar-besaran untuk Safari, Pesan, dan Peta<br />&bull;&nbsp;&nbsp;Tersedia dalam warna emas, abu-abu, dan perak</p>\r\n<p>&nbsp;</p>\r\n<p><br /><strong>Legal</strong><br />1. Tersedia opsi yang dapat dikonfigurasi.<br />2. Dibandingkan dengan generasi sebelumnya.<br />3. Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi. Lihat apple.com/batteries untuk informasi selengkapnya.<br />4. Lebar layar diukur secara diagonal.</p>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', '2023-12-16 03:07:43', '2023-12-16 03:07:43', NULL, 'Pro M1'),
(7, 3, 'PRDT20231216005', 'Macbook', 'product/Macbook/macbook_air_m1_space_grey_4_6.jpg', '<div id=\"headlessui-tabs-panel-:r4:\" tabindex=\"0\" role=\"tabpanel\" data-headlessui-state=\"selected\" aria-labelledby=\"headlessui-tabs-tab-:r0:\">\r\n<div class=\"text-xs tracking-[.5px] leading-loose product-description\">\r\n<p>Laptop Apple yang paling tipis dan ringan, bertenaga super dengan&nbsp;chip Apple M1. Tuntaskan berbagai proyek Anda dengan CPU 8-core super cepat. Tingkatkan aplikasi dan game kaya grafis ke level lebih tinggi dengan GPU hingga 8-core. Dan percepat tugas pembelajaran mesin dengan Neural Engine 16-core. Semua dengan desain senyap tanpa kipas dan kekuatan baterai paling tahan lama &mdash; hingga 18 jam. (2) MacBook Air. Tetap portabel yang sempurna. Jauh lebih bertenaga.</p>\r\n<p>&nbsp;</p>\r\n<p>&bull;&nbsp;Chip M1 yang didesain Apple untuk lompatan besar dalam performa CPU, GPU, dan pembelajaran mesin<br />&bull;&nbsp;Lakukan lebih banyak hal dengan kekuatan baterai hingga 18 jam(2)<br />&bull;&nbsp;CPU 8-core menghadirkan performa hingga 3,5x lebih cepat untuk menangani berbagai proyek lebih cepat(3)<br />&bull;&nbsp;GPU hingga delapan core dengan grafis hingga 5x lebih cepat untuk aplikasi dan game kaya grafis(3)<br />&bull;&nbsp;Neural Engine 16-core untuk pembelajaran mesin canggih<br />&bull;&nbsp;Memori terintegrasi 8 GB menjadikan segala yang Anda lakukan terasa cepat dan lancar <br />&bull;&nbsp;Penyimpanan SSD super cepat membuka aplikasi dan file dalam sekejap<br />&bull;&nbsp;Desain tanpa kipas untuk pengoperasian yang senyap <br />&bull;&nbsp;Layar Retina 13,3 inci dengan warna luas P3 untuk gambar yang cemerlang dan detail luar biasa3<br />&bull;&nbsp;Kamera FaceTime HD dengan prosesor sinyal gambar canggih untuk panggilan video yang lebih jelas dan tajam<br />&bull;&nbsp;Deretan tiga mikrofon lebih mendengarkan Anda. Bukan sekeliling Anda.<br />&bull;&nbsp; Wi-Fi 6 generasi baru untuk konektivitas yang lebih cepat<br />&bull;&nbsp;Dua port Thunderbolt/USB 4 untuk pengisian daya dan aksesori<br />&bull;&nbsp;Magic Keyboard dengan lampu latar dan Touch ID untuk membuka kunci dan melakukan pembayaran dengan aman<br />&bull; macOS Big Sur memperkenalkan desain baru yang tegas dan pembaruan aplikasi besar-besaran untuk Safari, Pesan, dan Peta<br />&bull;&nbsp;Tersedia dalam warna emas, abu-abu, dan perak.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Legal</strong><br />1. Tersedia opsi yang dapat dikonfigurasi.<br />2.&nbsp;Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi. Lihat apple.com/batteries untuk informasi selengkapnya.<br />3. Dibandingkan dengan generasi sebelumnya<br />4. Lebar layar diukur secara diagonal</p>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', '2023-12-16 03:09:41', '2023-12-16 03:09:41', NULL, 'Air M1'),
(8, 3, 'PRDT20231216006', 'Macbook', 'product/Macbook/macbook_pro_14_inci_m2_2023_space_grey_1_5.jpg', '<div id=\"headlessui-tabs-panel-:r4:\" tabindex=\"0\" role=\"tabpanel\" data-headlessui-state=\"selected\" aria-labelledby=\"headlessui-tabs-tab-:r0:\">\r\n<div class=\"text-xs tracking-[.5px] leading-loose product-description\">\r\n<p>MacBook Pro 14 inci dengan M2 Pro dan M2 Max membawa daya dan kecepatan ke level berikutnya, saat tersambung ke daya atau menggunakan baterai. Dengan layar Liquid Retina XDR yang memukau, semua port yang Anda perlukan, dan kekuatan baterai sepanjang hari (1) &mdash; laptop pro ini siap mendampingi Anda ke mana pun.</p>\r\n<p><strong><br /><br />Poin-poin fitur utama :</strong></p>\r\n<ul>\r\n<li>Layar Liquid Retina XDR 14&nbsp;inci yang menakjubkan dengan Extreme Dynamic Range dan rasio kontras (2)</li>\r\n<li>Chip M2&nbsp;Pro atau M2&nbsp;Max untuk kecepatan dan keandalan luar biasa</li>\r\n<li>CPU hingga 12-core menghadirkan kecepatan hingga 20&nbsp;persen lebih tinggi untuk menuntaskan berbagai tahapan kerja pro lebih cepat (3)</li>\r\n<li>GPU hingga 38-core dengan kecepatan hingga 30&nbsp;persen lebih tinggi untuk aplikasi dan game kaya grafis (3)</li>\r\n<li>Memori terintegrasi hingga 96 GB menjadikan segala yang Anda lakukan terasa cepat dan lancar</li>\r\n<li>Kekuatan baterai hingga 18&nbsp;jam (1)</li>\r\n<li>Penyimpanan SSD super cepat hingga 8&nbsp;TB membuka aplikasi dan file dalam sekejap</li>\r\n<li>Kamera FaceTime HD 1080p</li>\r\n<li>Sistem suara enam speaker dengan woofer force-cancelling</li>\r\n<li>Deretan tiga mikrofon berkualitas studio menangkap suara Anda dengan lebih jernih</li>\r\n<li>Tiga port Thunderbolt 4, port HDMI, slot kartu SDXC, jek headphone, port pengisian daya MagSafe</li>\r\n<li>Konektivitas nirkabel Wi-Fi&nbsp;6E untuk throughput hingga 2x lebih cepat (4)</li>\r\n<li>Magic Keyboard dengan lampu latar dan Touch&nbsp;ID untuk membuka kunci dengan aman</li>\r\n<li>macOS Ventura menghadirkan berbagai cara baru yang andal untuk menyelesaikan lebih banyak pekerjaan, berbagi dan berkolaborasi &mdash; di seluruh perangkat Apple Anda</li>\r\n<li>Tersedia dalam warna abu-abu dan perak</li>\r\n</ul>\r\n<p><strong><br /><br />Legal</strong><br />Tersedia opsi yang dapat dikonfigurasi.</p>\r\n<ol>\r\n<li>Kekuatan baterai untuk pemutaran film aplikasi Apple&nbsp;TV. Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi. Lihat apple.com/batteries untuk informasi selengkapnya.</li>\r\n<li>MacBook&nbsp;Pro 14&nbsp;inci memiliki sudut melengkung di bagian atas. Jika diukur sebagai bentuk persegi standar, layarnya berukuran 14,2&nbsp;inci secara diagonal (area bidang layar berukuran lebih kecil).</li>\r\n<li>Dibandingkan dengan generasi sebelumnya.</li>\r\n<li>Kecepatan didasarkan pada throughput teoretis dan mungkin bervariasi. Wi‑Fi 6E tidak tersedia di Tiongkok daratan. Memerlukan macOS 13.2 atau lebih baru di Jepang.</li>\r\n</ol>\r\n</div>\r\n</div>', '2023-12-16 03:11:03', '2023-12-16 03:11:03', NULL, 'Pro M2'),
(9, 3, 'PRDT20231216007', 'Macbook', 'product/Macbook/macbook_air_m2_midnight_pdp_image_position-1__id_2.jpg', '<div id=\"headlessui-tabs-panel-:r4:\" tabindex=\"0\" role=\"tabpanel\" data-headlessui-state=\"selected\" aria-labelledby=\"headlessui-tabs-tab-:r0:\">\r\n<div class=\"text-xs tracking-[.5px] leading-loose product-description\">\r\n<p>Bertenaga super berkat chip M2 generasi berikutnya, MacBook Air yang didesain ulang menggabungkan performa andal dengan kekuatan baterai hingga 18 jam ke dalam penutup berbahan aluminium yang luar biasa tipis<br /><br /></p>\r\n<ul>\r\n<li>Chip M2 dengan performa CPU, GPU, dan pembelajaran mesin generasi berikutnya</li>\r\n<li>CPU 8-core dan GPU hingga 10-core yang lebih cepat untuk menjalankan berbagai tugas kompleks<sup>1</sup></li>\r\n<li>Neural Engine 16-core untuk berbagai tugas pembelajaran mesin canggih</li>\r\n<li>Memori terintegrasi lebih cepat hingga 24 GB menjadikan segala yang Anda lakukan terasa lancar</li>\r\n<li>Penerapan filter dan efek gambar hingga 20 persen lebih cepat</li>\r\n<li>Pengeditan garis waktu video kompleks hingga 40 persen lebih cepat<sup>3</sup></li>\r\n<li>Lakukan banyak hal sepanjang hari dengan kekuatan baterai hingga 18 jam<sup>2</sup></li>\r\n<li>Desain tanpa kipas untuk pengoperasian yang senyap</li>\r\n<li>Layar Liquid Retina 13,6 inci dengan kecerahan 500 nit dan warna luas P3 untuk gambar yang cemerlang dan detail luar biasa<sup>4</sup></li>\r\n<li>Kamera FaceTime HD 1080p dengan dua kali lipat resolusi dan performa dalam pencahayaan rendah</li>\r\n<li>Deretan tiga mikrofon lebih mendengarkan Anda, bukan sekeliling Anda</li>\r\n<li>Sistem suara empat speaker dengan Audio Spasial untuk pengalaman mendengarkan yang menghanyutkan</li>\r\n<li>Berbagi konten dengan mulus antara iPhone dan Mac</li>\r\n<li>Port pengisian daya MagSafe, dua port Thunderbolt, dan jek headphone</li>\r\n<li>Magic Keyboard dengan lampu latar dan Touch ID untuk membuka kunci dan melakukan pembayaran dengan aman</li>\r\n<li>Koneksi nirkabel Wi-Fi 6 yang kencang</li>\r\n<li>Penyimpanan SSD super cepat membuka aplikasi dan file dalam sekejap</li>\r\n<li>macOS Monterey memungkinkan Anda terhubung, berbagi, dan berkreasi dengan cara yang benar-benar baru &mdash; di semua perangkat Apple Anda</li>\r\n<li>Tersedia dalam warna midnight, starlight, abu-abu, dan perak<br /><br /></li>\r\n</ul>\r\n<p><strong>Legal<br /><br /></strong></p>\r\n<ol>\r\n<li>Tersedia opsi yang dapat dikonfigurasi.</li>\r\n<li>Kekuatan baterai bervariasi tergantung penggunaan dan konfigurasi. Lihat apple.com/batteries untuk informasi selengkapnya.</li>\r\n<li>Dibandingkan dengan generasi sebelumnya.</li>\r\n<li>Layar MacBook Air 13,6 inci memiliki sudut melengkung di bagian atas. Jika diukur sebagai bentuk persegi standar, layarnya berukuran 13,6 inci secara diagonal (area bidang layar berukuran lebih kecil).</li>\r\n</ol>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>', '2023-12-16 03:12:18', '2023-12-16 03:12:18', NULL, 'Air M1'),
(10, 4, 'PRDT20231216008', 'Polo', 'product/Polo/d6210c253fea17a23b70f90074c94b48.jpg', '<table style=\"border-collapse: collapse; width: 100.049%; height: 67.2px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"width: 48.5777%; height: 22.4px;\"><strong>Spesifikasi</strong></td>\r\n<td style=\"width: 48.5777%; height: 22.4px;\"><strong>Type</strong></td>\r\n</tr>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"width: 48.5777%; height: 22.4px;\">Sangat Nyaman</td>\r\n<td style=\"width: 48.5777%; height: 22.4px;\">Kutton</td>\r\n</tr>\r\n<tr style=\"height: 22.4px;\">\r\n<td style=\"width: 48.5777%; height: 22.4px;\">Mudah Menyerap</td>\r\n<td style=\"width: 48.5777%; height: 22.4px;\">Waterprof</td>\r\n</tr>\r\n</tbody>\r\n</table>', '2023-12-16 03:14:31', '2023-12-16 03:14:31', NULL, 'Orange Polos');

-- --------------------------------------------------------

--
-- Table structure for table `sosial_medias`
--

CREATE TABLE `sosial_medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sosial_medias`
--

INSERT INTO `sosial_medias` (`id`, `platform`, `link`, `created_at`, `updated_at`, `deleted_at`, `company_id`) VALUES
(1, 'Facebook Edit', 'Https... Edit', '2023-12-16 01:17:55', '2023-12-16 01:22:18', '2023-12-16 01:22:18', 3);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$npWmkGZeB8te0.rG1ZiouuRaI2/zVAm1F2r2fpV5JEGwmJexeVdZ2', NULL, '2023-12-15 11:38:44', '2023-12-15 11:38:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sosial_medias`
--
ALTER TABLE `sosial_medias`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sosial_medias`
--
ALTER TABLE `sosial_medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
