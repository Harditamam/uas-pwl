-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 04.15
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-tor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id`, `catatan`, `id_etor`, `created_at`, `updated_at`) VALUES
(6, 'testing', 4, '2021-09-22 08:11:29', '2021-09-24 05:36:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_belanja`
--

CREATE TABLE `detail_belanja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vol` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hibah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lainnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etor` int(11) NOT NULL,
  `id_io` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_belanja`
--

INSERT INTO `detail_belanja` (`id`, `mak`, `uraian`, `vol`, `satuan`, `harga_satuan`, `jurusan`, `hibah`, `lainnya`, `id_etor`, `id_io`, `created_at`, `updated_at`, `fakultas`, `universitas`) VALUES
(8, '537112', '61', 0, '-', '0', '0', '0', '0', 4, '5', '2021-10-06 00:59:27', '2021-10-06 00:59:27', '0', '0'),
(9, '525112', '12', 0, '-', '0', '0', '0', '0', 4, '1', '2021-10-14 17:40:35', '2021-10-14 17:40:35', '0', '0'),
(10, '525112', '15', 0, '-', '0', '0', '0', '0', 4, '1', '2021-10-14 17:45:59', '2021-10-14 17:45:59', '0', '0'),
(11, '525112', '15', 0, '-', '0', '0', '0', '0', 4, '1', '2021-10-14 17:46:00', '2021-10-14 17:46:00', '0', '0'),
(12, '525112', '12', 0, '-', '0', '0', '0', '0', 4, '1', '2021-10-14 17:48:13', '2021-10-14 17:48:13', '0', '0'),
(13, '525113', '20', 2000, '2000', '2000', '2000', '2000', '2000', 4, '1', '2021-10-14 17:55:33', '2021-10-14 18:16:09', '2000', '2000'),
(17, '525112', '12', 2, '-', '0', '0', '0', '1000', 4, '8', '2021-10-16 20:08:13', '2021-10-16 20:37:19', '0', '0');

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
-- Struktur dari tabel `iku`
--

CREATE TABLE `iku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iku` int(11) NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_awal` int(10) UNSIGNED NOT NULL,
  `target1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etor` int(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `iku`
--

INSERT INTO `iku` (`id`, `iku`, `keterangan`, `tahun_awal`, `target1`, `target2`, `target3`, `target4`, `target5`, `id_etor`, `created_at`, `updated_at`) VALUES
(1, 2, '', 2021, '1', '2', '3', '40', '500', 4, '2021-09-06 19:14:47', '2021-10-16 18:46:22'),
(16, 3, '', 2021, '2', '2', '1', '1', '1', 4, '2021-09-09 17:59:23', '2021-09-09 17:59:23'),
(19, 3, '', 2021, '1', '2', '3', '4', '50', 13, '2021-10-16 14:31:37', '2021-10-16 14:32:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_io` int(11) NOT NULL,
  `id_etor` int(30) NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_io`, `id_etor`, `bulan`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2021-11', '2021-09-09 06:33:19', '2021-10-16 19:21:18'),
(5, 5, 4, 'januari 2020', '2021-09-09 18:10:18', '2021-09-09 18:10:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kodemak`
--

CREATE TABLE `kodemak` (
  `kode_mak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_belanja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kodemak`
--

INSERT INTO `kodemak` (`kode_mak`, `jenis_belanja`, `keterangan`, `created_at`, `updated_at`) VALUES
('525111', 'Belanja gaji dan tunjangan\r\n', 'pengeluaran utk pembyrn gaji dan tunjangan peg.BLU\r\n', NULL, NULL),
('525112\r\n', 'Belanja Barang\r\n', 'pengeluaran utk pembelian brg utk keg.operasional dan non operasional BLU\r\n', NULL, NULL),
('525113\r\n', 'Belanja jasa\r\n', 'pengeluaran utk memperoleh jasa utk keg.operasional dan non operasional\r\n', NULL, NULL),
('525114\r\n', 'Belanja Pemeliharaan\r\n', 'pengeluaran utk pemeliharaan BMN BLU\r\n', NULL, NULL),
('525115\r\n', 'Belanja perjalanan\r\n', 'pengeluaran utk pembyrn perjalanan dinas pegawai BLU\r\n', NULL, NULL),
('525119\r\n', 'Belanja penyediaan brg n jasa BLU lainnya\r\n', 'pengeluaran utk keperluan diluar akun2 diatas utk menunjang keg.BLU yg bersangkutan\r\n', NULL, NULL),
('537111\r\n', 'Belanja Modal Tanah\r\n', 'Pengeluaran untuk pembelian tanah dan pengembangannya\r\n', NULL, NULL),
('537112\r\n', 'Belanja Modal Peralatan & Mesin\r\n', 'Pengeluaran untuk pembelian Peralatan & Mesin \r\n', NULL, NULL),
('537113\r\n', 'Belanja Modal Gedung & Bangunan\r\n', 'Pengeluaran untuk pembelian/pembangunan Gedung & Bangunan dan pengembangannya\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kodemakrincian`
--

CREATE TABLE `kodemakrincian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_rincian` int(11) NOT NULL,
  `rincian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kodemakrincian`
--

INSERT INTO `kodemakrincian` (`id`, `kode_rincian`, `rincian`, `kode_mak`, `created_at`, `updated_at`) VALUES
(2, 2, 'belanja gaji peg.tetap ', '525111', NULL, NULL),
(3, 3, 'bel.tunj.struktural, fungsional,non struktural ', '525111', NULL, NULL),
(4, 4, 'belanja insentif, uang makan', '525111', NULL, NULL),
(5, 5, 'belanja THR, tunj.asuransi, tunj.lainny', '525111', NULL, NULL),
(6, 6, 'belanja honorarium panitia keg, penguji, pengajar,pembuat soal&koreksi,penjaga ujian', '525111', NULL, NULL),
(7, 7, 'belanja honorarium laboran, ass.pengajar, pembimbing', '525111', NULL, NULL),
(8, 8, 'belanja honorarium pemateri, rapat, moderator, pengemudi, tim olahraga/kesenian', '525111', NULL, NULL),
(9, 9, 'belanja honor auditee (pemeriksaan oleh SPI, Inspektorat, BPKP, dan BPK)', '525111', NULL, NULL),
(10, 10, 'belanja honor pegawai asing, honorarium lainnya', '525111', NULL, NULL),
(11, 11, 'belanja lembur', '525111', NULL, NULL),
(12, 1, 'belanja bahan habis pakai (ATK, alat listrik&elektronik, benda pos, peralatan kebersihan dan bahan pembersih, BBM, tabung pemadam kebakaran, bahan hiasan/dekorasi, souvenir/cinderamata/buah tangan, spanduk/backdrop/baliho, bahan dokumentasi/foto)', '525112', NULL, NULL),
(15, 2, 'belanja Bahan (bahan baku bangunan, bahan laboratorium, bahan obat2an, bahan material lainnya)', '525112', NULL, NULL),
(16, 3, 'belanja Makanan dan Minuman (keperluan sehari-hari dan konsumsi kegiatan)', '525112', NULL, NULL),
(17, 4, 'belanja Cetak dan Penggandaan (pencetakan, fotocopy/penjilidan)', '525112', NULL, NULL),
(18, 5, 'belanja pakaian dinas, atribut pakaian dinas', '525112', NULL, NULL),
(19, 6, 'belanja Jamuan Tamu/Entertainment', '525112', NULL, NULL),
(20, 1, 'belanja rekening telepon, air, listrik, langganan internet, langganan jurnal elektronik ilmiah, surat kabar', '525113', NULL, NULL),
(21, 2, 'belanja paket/pengiriman', '525113', NULL, NULL),
(22, 3, 'belanja iklan cetak/elektronik', '525113', NULL, NULL),
(23, 4, 'belanja jasa keuangan', '525113', NULL, NULL),
(24, 5, 'belanja jasa konsultan/tenaga ahli (ex:konsultan penddkn, keu/pajak, audit, desain bangunan,', '525113', NULL, NULL),
(25, 0, 'sistem informasi, perencanaan/pengembangan,laboratorium,jasa penilai(apraisal), konsultan mutu/ISO', '525113', NULL, NULL),
(26, 6, 'belanja jasa EO', '525113', NULL, NULL),
(27, 7, 'belanja jasa dokumentasi', '525113', NULL, NULL),
(28, 8, 'belanja jasa sertifikasi', '525113', NULL, NULL),
(29, 9, 'belanja jasa hiburan, jasa keg.lainnya', '525113', NULL, NULL),
(30, 10, 'belanja sewa perlengkapan&peralatan kantor (ex: meja kursi kantor, hiasan&dekorasi,komputer&printer', '525113', NULL, NULL),
(31, 0, 'proyektor/layar, generator, pakaian, peralatan pesta) ', '525113', NULL, NULL),
(32, 11, 'belanja sewa peralatan laboratorium/praktikum', '525113', NULL, NULL),
(33, 12, 'belanja sewa peralatan mobilitas (ang.darat, laut,udara)', '525113', NULL, NULL),
(34, 13, 'belanja sewa alat berat (ekskavator, bulldozer)', '525113', NULL, NULL),
(35, 14, 'belanja sewa bangunan/ged, sewa tanah/lahan', '525113', NULL, NULL),
(36, 15, 'belanja premi asuransi kendaraan, peralataan, gedung', '525113', NULL, NULL),
(37, 16, 'belanja pajak aset (BPKP,PBB)', '525113', NULL, NULL),
(38, 17, 'belanja asosiasi/keanggotan PT', '525113', NULL, NULL),
(39, 1, '\"belanja pemeliharaan gedung/bangunan/lahan/jalan ', ' Pengecatan\"', '0000-00-00 00:00:00', NULL),
(40, 2, 'belanja Pemeliharaan Jaringan, Jalan, dan Irigasi', '525114', NULL, NULL),
(41, 3, 'belanja Pemeliharaan Kendaraan (jasa service, KIR, suku cadang, STNK', '525114', NULL, NULL),
(42, 4, 'belanja Pemeliharaan Peralatan dan Mesin (peralatan ktr/lab, mesin)', '525114', NULL, NULL),
(43, 1, 'Belanja Perjalanan', '525115', NULL, NULL),
(44, 1, 'belanja fee kontrak kerjasama (penelitian/pengabdian masy./penddk n pelatihan/lainnya)', '525119', NULL, NULL),
(45, 2, 'belanja bantuan sosial (bantuan beasiswa mhsw, keg.mhsw, pendidikan masy.,bencana alam, keagamaan, keg.kemasyarakatan, bantuan lainnya, konsultasi hukum ', '525119', NULL, NULL),
(47, 3, 'belanja denda dan tuntutan ganti rugi', '525119', NULL, NULL),
(48, 4, 'belanja tak terduga', '525119', NULL, NULL),
(49, 5, 'belanja Bantuan Studi S1/S2/S3,study homestay, kursus,seminar/lokakarya/diklat/ujian sertifikasi', '525119', NULL, NULL),
(50, 6, 'belanja bantuan penulisan (buku, jurnal, artikel populer)', '525119', NULL, NULL),
(51, 7, 'belanja bantuan kesejahteraan (kesehatan, purna tugas, kematian, lainnya)', '525119', NULL, NULL),
(52, 8, 'belanja bantuan keanggotan profesi ', '525119', NULL, NULL),
(53, 9, 'belanja bunga (blm msk RBA)', '525119', NULL, NULL),
(54, 1, 'Belanja Tanah', '537111', NULL, NULL),
(55, 2, 'Kepengurusan surat-surat tanah', '537111', NULL, NULL),
(56, 3, 'Pengurukan/pengolahan tanah', '537111', NULL, NULL),
(57, 1, 'Belanja Bahan Baku Peralatan & Mesin', '537112', NULL, NULL),
(58, 2, 'Upah Tenaga Kerja pembuatan Peralatan & Mesin', '537112', NULL, NULL),
(59, 3, 'Honor Pengelola Teknis Peralatan & Mesin', '537112', NULL, NULL),
(60, 4, 'Sewa untuk kegiatan pengadaan Peralatan & Mesin', '537112', NULL, NULL),
(61, 5, 'Perencanaan dan Pengawasan Pengadaan Peralatan & Mesin', '537112', NULL, NULL),
(62, 6, 'Perijinan untuk Pengadaan Peralatan & Mesin', '537112', NULL, NULL),
(63, 7, 'Pemasangan Peralatan & Mesin', '537112', NULL, NULL),
(64, 8, 'Perjalanan Peralatan & Mesin', '537112', NULL, NULL),
(65, 1, 'Belanja Gedung & Bangunan', '537113', NULL, NULL),
(66, 2, 'Bahan Baku Pembuatan Gedung & Bangunan', '537113', NULL, NULL),
(67, 3, 'Upah Tenaga Kerja', '537113', NULL, NULL),
(68, 4, 'Honor Pengelola Teknis Gedung & Bangunan', '537113', NULL, NULL),
(69, 5, 'Sewa untuk kegiatan pengadaan Gedung & Bangunan', '537113', NULL, NULL),
(70, 6, 'Perencanaan dan Pengawasan Pengadaan Gedung & Bangunan', '537113', NULL, NULL),
(71, 7, 'Perijinan untuk Pengadaan Gedung & Bangunan', '537113', NULL, NULL),
(72, 8, 'Perjalanan Gedung & Bangunan', '537113', NULL, NULL),
(73, 1, 'Belanja Jalan, Jembatan, dan Jaringan', '537114', NULL, NULL),
(74, 2, 'Bahan Baku Pembuatan Jalan, Jembatan, dan Jaringan', '537114', NULL, NULL),
(75, 3, 'Upah Tenaga Kerja', '537114', NULL, NULL),
(76, 4, 'Honor Pengelola Teknis Jalan, Jembatan, dan Jaringan', '537114', NULL, NULL),
(77, 5, 'Sewa untuk kegiatan pengadaan Jalan, Jembatan, dan Jaringan', '537114', NULL, NULL),
(78, 6, 'Perencanaan dan Pengawasan Pengadaan Jalan, Jembatan, dan Jaringan', '537114', NULL, NULL),
(79, 7, 'Perijinan untuk Pengadaan Jalan, Jembatan, dan Jaringan', '537114', NULL, NULL),
(80, 8, 'Perjalanan Jalan, Jembatan, dan Jaringan', '537114', NULL, NULL),
(81, 1, 'Buku/Monografi', '537115', NULL, NULL),
(82, 2, 'Alat Musik', '537115', NULL, NULL),
(83, 3, 'Software', '537115', NULL, NULL),
(84, 4, 'Tanaman/Pohon', '537115', NULL, NULL),
(85, 5, 'Patung, Lukisan dan Benda Seni Lainnya', '537115', NULL, NULL),
(86, 6, 'Tanaman dan Hewan yang diawetkan untuk koleksi', '537115', NULL, NULL),
(87, 7, 'Tanda Penghargaan', '537115', NULL, NULL),
(88, 8, 'Journal', '537115', NULL, NULL);

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_06_22_081822_tb_unit', 1),
(11, '2021_06_22_082320_tb_jenjang', 1),
(12, '2021_06_22_082333_tb_uraian', 1),
(13, '2021_07_07_104027_create_table_tb_jenjangs', 2),
(14, '2021_07_07_104136_create_table_jenjangs', 2),
(15, '2021_07_07_144948_create_program1_table', 2),
(16, '2021_07_07_145004_create_program2_table', 3),
(17, '2021_07_07_145013_create_program3_table', 3),
(18, '2021_07_08_065537_create_tbikk_table', 4),
(19, '2021_07_08_065754_create_tbikkuraian_table', 4),
(20, '2021_07_11_024446_create_tbikk_table', 5),
(21, '2021_07_11_030825_create_tbikkuraian_table', 5),
(22, '2021_07_11_030904_create_tbikupilar_table', 5),
(23, '2021_08_22_175718_create_tbl_etor_table', 6),
(24, '2021_09_07_025030_create_iku_table', 7),
(25, '2021_09_07_165802_create_table_kegiatan', 8),
(26, '2021_09_07_165948_create_table_ikk', 9),
(27, '2021_09_08_132242_create_table_io', 10),
(28, '2021_09_09_061503_create_detail_belanja', 11),
(29, '2021_09_09_095730_create_jadwal', 12),
(30, '2021_09_22_124223_create_catatan_table', 13),
(31, '2021_10_05_151734_create_kodemak_table', 14),
(32, '2021_10_05_152147_create_kodemakrincian_table', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program1`
--

CREATE TABLE `program1` (
  `kode_program1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program1`
--

INSERT INTO `program1` (`kode_program1`, `judul1`, `created_at`, `updated_at`) VALUES
('015', 'Layanan Pendidikan', NULL, NULL),
('016', 'Layanan Administrasi Pendidikan', NULL, NULL),
('017', 'Layanan Administrasi Perpustakaan', NULL, NULL),
('022', 'Proposal Penelitian', NULL, NULL),
('025', 'Proposal Hak Kekayaan Intelektual', NULL, NULL),
('026', 'Jurnal', NULL, NULL),
('027', 'Proposal Pengabdian Kepada Masyarakat', NULL, NULL),
('028', 'Hasil Pengabdian Kepada Masyarakat', NULL, NULL),
('046', 'Alat Pendidikan Pendukung Pembelajaran', NULL, NULL),
('047', 'Buku Pustaka Pendukung Pembelajaran', NULL, NULL),
('049', 'Layanan Perkantoran Satker (BOPTN)', NULL, NULL),
('059', 'Dokumen Perencanaan dan Penganggaran', NULL, NULL),
('060', 'Laporan Keuangan dan Kinerja Satker', NULL, NULL),
('061', 'Mahasiswa Baru', NULL, NULL),
('062', 'Prodi Memenuhi Standar Mutu Pendidikan', NULL, NULL),
('063', 'Layanan Pemberdayaan Mahasiswa', NULL, NULL),
('064', 'Pendidik dan Tenaga Kependidikan Peserta Pengembangan SDM', NULL, NULL),
('065', 'Hasil Penelitian', NULL, NULL),
('0994', 'Layanan Perkantoran ', NULL, NULL),
('0995', 'Kendaraan Bermotor', NULL, NULL),
('0996', 'Perangkat Pengolah Data dan Komunikasi', NULL, NULL),
('0997', 'Peralatan dan Fasilitas Perkantoran', NULL, NULL),
('0998', 'Gedung/Bangunan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program2`
--

CREATE TABLE `program2` (
  `id_program2` bigint(20) UNSIGNED NOT NULL,
  `kode_program2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_program1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program2`
--

INSERT INTO `program2` (`id_program2`, `kode_program2`, `judul2`, `kode_program1`, `created_at`, `updated_at`) VALUES
(1, '012', 'Pengenalan Kehidupan Kampus (PK2) Mahasiswa Baru', '015', NULL, NULL),
(2, '013', 'Daftar Ulang Mahasiswa', '015', NULL, NULL),
(3, '014', 'Perkuliahan', '015', NULL, NULL),
(4, '015', 'Praktikum', '015', NULL, NULL),
(5, '016', 'Ujian & Seminar', '015', NULL, NULL),
(6, '017', 'Pembimbingan', '015', NULL, NULL),
(7, '018', 'Yudisium & Wisuda', '015', NULL, NULL),
(8, '019', 'Sertifikasi', '015', NULL, NULL),
(9, '020', 'Pendidikan dan Pelatihan Pendukung Pembelajaran', '015', NULL, NULL),
(10, '021', 'Seminar dan Workshop Pendukung Pembelajaran', '015', NULL, NULL),
(11, '022', 'Pertukaran Mahasiswa', '015', NULL, NULL),
(12, '023', 'Pemeliharaan Fasilitas Perkuliahan', '015', NULL, NULL),
(13, '011', 'Pemrograman Mata Kuliah (KRS)', '016', NULL, NULL),
(14, '012', 'Perencanaan Dosen Pengampu (Staffing/Plotting Dosen)', '016', NULL, NULL),
(15, '013', 'Monitoring dan Evaluasi PBM', '016', NULL, NULL),
(16, '014', 'Penyusunan Buku Pedoman Pendidikan', '016', NULL, NULL),
(17, '015', 'Pemanfaatan ICT Pendukung Layanan Administrasi Pendidikan', '016', NULL, NULL),
(18, '011', 'Layanan Pinjam Baca Buku Pustaka', '017', NULL, NULL),
(19, '012', 'Layanan Pustaka Elektronik (e-library)', '017', NULL, NULL),
(20, '013', 'Administrasi Koleksi Pustaka', '017', NULL, NULL),
(21, '014', 'Pengadaan Fasilitas Penunjang Perpustakaan', '017', NULL, NULL),
(22, '015', 'Langganan Pustaka Elektronik', '017', NULL, NULL),
(23, '016', 'Pemeliharaan Fasilitas Perpustakaan', '017', NULL, NULL),
(24, '011', 'Sosialisasi Penyusunan Proposal Penelitian', '022', NULL, NULL),
(25, '012', 'Seleksi Proposal Penelitian', '022', NULL, NULL),
(26, '013', 'Diseminasi Proposal Penelitian', '022', NULL, NULL),
(27, '011', 'Sosialisasi Penyusunan Proposal Hak Kekayaan Intelektual', '025', NULL, NULL),
(28, '012', 'Seleksi Proposal Hak Kekayaan Intelektual', '025', NULL, NULL),
(29, '013', 'Diseminasi Proposal Hak Kekayaan Intelektual', '025', NULL, NULL),
(30, '011', 'Manajemen Jurnal Ilmiah', '026', NULL, NULL),
(31, '012', 'Publikasi Jurnal Internasional', '026', NULL, NULL),
(32, '013', 'Publikasi Jurnal Nasional', '026', NULL, NULL),
(33, '014', 'Penerbitan Jurnal', '026', NULL, NULL),
(34, '011', 'Sosialisasi Penyusunan Proposal Pengabdian Kepada Masyarakat', '027', NULL, NULL),
(35, '012', 'Seleksi Proposal Pengabdian Kepada Masyarakat', '027', NULL, NULL),
(36, '013', 'Diseminasi Proposal Pengabdian Kepada Masyarakat', '027', NULL, NULL),
(37, '011', 'Pelaksanaan Pengabdian Masyarakat', '028', NULL, NULL),
(38, '012', 'Hibah Program Pengabdian Masyarakat', '028', NULL, NULL),
(39, '013', 'Evaluasi hasil pengabdian kepada masyarakat', '028', NULL, NULL),
(40, '011', 'Pengadaan Peralatan Ruang Kuliah', '046', NULL, NULL),
(41, '012', 'Pengadaan Peralatan Laboratorium', '046', NULL, NULL),
(42, '013', 'Pengadaan Peralatan Praktikum', '046', NULL, NULL),
(43, '014', 'Pengadaan Peralatan Pendukung Pembelajaran Jarak Jauh', '046', NULL, NULL),
(44, '015', 'Pengadaan Peralatan Pendukung Pembelajaran Lainnya', '046', NULL, NULL),
(45, '011', 'Pengadaan Buku Pustaka Pendukung Pembelajaran', '047', NULL, NULL),
(46, '012', 'Pengadaan Buku Pustaka atas Kerjasama dalam bentuk CSR', '047', NULL, NULL),
(47, '011', 'Pembayaran Gaji dan Tunjangan Pegawai', '049', NULL, NULL),
(48, '012', 'Pembayaran Tunjangan Kinerja Pegawai (Remunerasi)', '049', NULL, NULL),
(49, '013', 'Pemeliharaan Fasilitas Gedung Perkantoran', '049', NULL, NULL),
(50, '014', 'Pemeliharaan Fasilitas Perkantoran', '049', NULL, NULL),
(51, '015', 'Pemeliharaan Fasilitas Pendukung Layanan Perkantoran Lainnya', '049', NULL, NULL),
(52, '016', 'Pemeliharaan Gedung Perkantoran', '049', NULL, NULL),
(53, '017', 'Pemeliharaan Kendaraan Dinas', '049', NULL, NULL),
(54, '018', 'Langganan Daya dan Jasa', '049', NULL, NULL),
(55, '019', 'Perjalanan Dinas', '049', NULL, NULL),
(56, '020', 'Penjaminan Mutu Kegiatan Pendukung Akademik', '049', NULL, NULL),
(57, '021', 'Rapat Koordinasi Pimpinan', '049', NULL, NULL),
(58, '022', 'Sosialisasi Program Kerja', '049', NULL, NULL),
(59, '023', 'Operasional Pengelolaan Unit/Lembaga Pendukung Tridharma PT', '049', NULL, NULL),
(60, '024', 'Bantuan Sosial ', '049', NULL, NULL),
(61, '025', 'Seminar dan Workshop Kegiatan Pendukung Tridharma PT ', '049', NULL, NULL),
(62, '026', 'Pendidikan dan Pelatihan Pendukung Tridharma PT ', '049', NULL, NULL),
(63, '027', 'Monitoring dan Evaluasi Kegiatan Pendukung Tridharma PT', '049', NULL, NULL),
(64, '028', 'Pengadaan Bahan Operasional Kantor', '049', NULL, NULL),
(65, '029', 'Pengadaan Aplikasi Berbasis Teknologi Informasi dan Komunikasi', '049', NULL, NULL),
(66, '030', 'Kegiatan Pendukung Tridharma PT Lainnya', '049', NULL, NULL),
(67, '011', 'Penyusunan Dokumen Rencana Strategis ', '059', NULL, NULL),
(68, '012', 'Penyusunan Dokumen Statuta ', '059', NULL, NULL),
(69, '013', 'Penyusunan Dokumen Rencana Bisnis dan Anggaran', '059', NULL, NULL),
(70, '014', 'Penyusunan Dokumen Rencana Kerja Anggaran', '059', NULL, NULL),
(71, '015', 'Penyusunan Dokumen Rencana Kerja Tahunan', '059', NULL, NULL),
(72, '016', 'Penyusunan Dokumen Kertas Kerja ', '059', NULL, NULL),
(73, '017', 'Penyusunan Dokumen Rencana Umum Pengadaan ', '059', NULL, NULL),
(74, '018', 'Penyusunan Dokumen Rencana Kinerja ', '059', NULL, NULL),
(75, '019', 'Penyusunan Dokumen Rencana Kerjasama ', '059', NULL, NULL),
(76, '020', 'Penyusunan Dokumen Perencanaan dan Penganggaran Lainnya', '059', NULL, NULL),
(80, '011', 'Seleksi Mahasiswa', '061', NULL, NULL),
(81, '011', 'Akreditasi Program Studi', '062', NULL, NULL),
(82, '012', 'Sertifikasi Program Studi', '062', NULL, NULL),
(83, '013', 'Akreditasi & Sertifikasi Laboratorium', '062', NULL, NULL),
(84, '014', 'Pengadaan Materi dan Modul Pembelajaran', '062', NULL, NULL),
(85, '015', 'Pengadaan Bahan Praktikum', '062', NULL, NULL),
(86, '016', 'Penjaminan Mutu Program Studi', '062', NULL, NULL),
(87, '017', 'Pemutakhiran dan Pengembangan Kurikulum', '062', NULL, NULL),
(88, '018', 'Pemutakhiran dan Pengembangan Metode Pembelajaran', '062', NULL, NULL),
(89, '019', 'Pemanfaatan Teknologi Informasi dan Komunikasi (TIK) dalam Pembelajaran', '062', NULL, NULL),
(90, '020', 'Seminar, Workshop, & Lokakarya Pengembangan Program Studi', '062', NULL, NULL),
(91, '021', 'Pengembangan Pusat Informasi, Studi, dan Kajian', '062', NULL, NULL),
(92, '022', 'Penelusuran Alumni (Tracer Study)', '062', NULL, NULL),
(93, '023', 'Penjaminan Mutu Laboratorium', '062', NULL, NULL),
(94, '011', 'Pembinaan Organisasi Kemahasiswaan', '063', NULL, NULL),
(95, '012', 'Pelatihan & Pembinaan Kemahasiswaan', '063', NULL, NULL),
(96, '013', 'Kompetisi Mahasiswa', '063', NULL, NULL),
(97, '014', 'Hibah Mahasiswa Berprestasi', '063', NULL, NULL),
(98, '015', 'Delegasi Mahasiswa', '063', NULL, NULL),
(99, '016', 'Pengadaan Peralatan Habis pakai Pendukung Kegiatan Kemahasiswaan', '063', NULL, NULL),
(100, '017', 'Pemeliharaan Fasilitas Kegiatan Kemahasiswaan', '063', NULL, NULL),
(101, '011', 'Pendidikan dan Pelatihan Tenaga Pendidik ', '064', NULL, NULL),
(102, '012', 'Pendidikan dan Pelatihan Tenaga Kependidikan', '064', NULL, NULL),
(103, '013', 'Bantuan Studi', '064', NULL, NULL),
(104, '011', 'Pelaksanaan Penelitian', '065', NULL, NULL),
(105, '012', 'Hibah Penelitian ', '065', NULL, NULL),
(106, '011', 'Pembayaran Gaji dan Tunjangan Pegawai', '0994', NULL, NULL),
(107, '012', 'Pembayaran Tunjangan Kinerja Pegawai (Remunerasi)', '0994', NULL, NULL),
(108, '013', 'Pemeliharaan Fasilitas Gedung Perkantoran', '0994', NULL, NULL),
(109, '014', 'Pemeliharaan Fasilitas Perkantoran', '0994', NULL, NULL),
(110, '015', 'Pemeliharaan Fasilitas Pendukung Layanan Perkantoran Lainnya', '0994', NULL, NULL),
(111, '016', 'Pemeliharaan Gedung Perkantoran', '0994', NULL, NULL),
(112, '017', 'Pemeliharaan Kendaraan Dinas', '0994', NULL, NULL),
(113, '018', 'Langganan Daya dan Jasa', '0994', NULL, NULL),
(114, '019', 'Perjalanan Dinas', '0994', NULL, NULL),
(115, '020', 'Penjaminan Mutu Kegiatan Pendukung Akademik', '0994', NULL, NULL),
(116, '021', 'Rapat Koordinasi Pimpinan', '0994', NULL, NULL),
(117, '022', 'Sosialisasi Program Kerja', '0994', NULL, NULL),
(118, '023', 'Operasional Pengelolaan Unit/Lembaga Pendukung Tridharma PT', '0994', NULL, NULL),
(119, '024', 'Bantuan Sosial ', '0994', NULL, NULL),
(120, '025', 'Seminar dan Workshop Kegiatan Pendukung Tridharma PT ', '0994', NULL, NULL),
(121, '026', 'Pendidikan dan Pelatihan Pendukung Tridharma PT ', '0994', NULL, NULL),
(122, '027', 'Monitoring dan Evaluasi Kegiatan Pendukung Tridharma PT', '0994', NULL, NULL),
(123, '028', 'Pengadaan Bahan Operasional Kantor', '0994', NULL, NULL),
(124, '029', 'Pengadaan Aplikasi Berbasis Teknologi Informasi dan Komunikasi', '0994', NULL, NULL),
(125, '030', 'Kegiatan Pendukung Tridharma PT Lainnya', '0994', NULL, NULL),
(126, '011', 'Pengadaan Kendaraan Roda 2 Operasional', '0995', NULL, NULL),
(127, '012', 'Pengadaan Kendaraan  Roda 4 Operasional', '0995', NULL, NULL),
(128, '013', 'Pengadaan Kendaraan  Roda 6 Operasional', '0995', NULL, NULL),
(129, '014', 'Pengadaan Kendaraan Roda 4 Pejabat', '0995', NULL, NULL),
(130, '015', 'Pengadaan Kendaraan Bermotor atas Kerjasama dalam bentuk CSR', '0995', NULL, NULL),
(131, '011', 'Pengadaan Komputer', '0996', NULL, NULL),
(132, '012', 'Pengadaan Server', '0996', NULL, NULL),
(133, '013', 'Pengadaan Peralatan Jaringan', '0996', NULL, NULL),
(134, '014', 'Pengadaan Jaringan Komunikasi', '0996', NULL, NULL),
(135, '015', 'Pengadaan Jaringan Internet', '0996', NULL, NULL),
(136, '016', 'Pengadaan Perangkat Pengolah Data dan Komunikasi atas Kerjasama (CSR)', '0996', NULL, NULL),
(137, '011', 'Pengadaan Peralatan Layanan Perkantoran', '0997', NULL, NULL),
(138, '012', 'Pengadaan Fasilitas Gedung Perkantoran', '0997', NULL, NULL),
(139, '013', 'Pengadaan Peralatan dan Fasilitas Perkantoran atas Kerjasama (CSR)', '0997', NULL, NULL),
(140, '014', 'Pengadaan Peralatan dan Fasilitas Perkantoran Lainnya', '0997', NULL, NULL),
(141, '011', 'Pembangunan Gedung Perkuliahan', '0997', NULL, NULL),
(142, '012', 'Pembangunan Gedung Perkantoran', '0998', NULL, NULL),
(143, '013', 'Pembangunan Gedung Laboratorium', '0998', NULL, NULL),
(144, '014', 'Pembangunan Gedung Pendukung Pembelajaran', '0998', NULL, NULL),
(145, '015', 'Pembangunan Gedung Aktivitas Mahasiswa', '0998', NULL, NULL),
(146, '016', 'Pengadaan Gedung/Bangunan atas Kerjasama (CSR)', '0998', NULL, NULL),
(147, '011', 'Rekonsiliasi', '060', NULL, NULL),
(148, '012', 'Penyusunan Laporan Keuangan\r\n', '060', NULL, NULL),
(149, '013', 'Audit Laporan Keuangan\r\n', '060', NULL, NULL),
(150, '011', 'Seleksi Mahasiswa', '061', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `program3`
--

CREATE TABLE `program3` (
  `id_program3` bigint(20) UNSIGNED NOT NULL,
  `kode_program3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_program2` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program3`
--

INSERT INTO `program3` (`id_program3`, `kode_program3`, `judul3`, `id_program2`, `created_at`, `updated_at`) VALUES
(1, '001', 'Orietasi Pendidikan (ORDIK)', 1, NULL, NULL),
(2, '002', 'Krida Mahasiswa (olahraga)', 1, NULL, NULL),
(3, '003', 'Orietasi Pendidikan ke Kampus Induk', 1, NULL, NULL),
(4, '001', 'Daftar Ulang Mahasiswa Baru', 2, NULL, NULL),
(5, '002', 'Daftar Ulang Mahasiswa Lama', 2, NULL, NULL),
(6, '001', 'Pemrograman Mata Kuliah', 3, NULL, NULL),
(7, '002', 'Proses Belajar Mengajar/Perkuliahan', 3, NULL, NULL),
(8, '003', 'Kuliah Dosen Tamu', 3, NULL, NULL),
(9, '004', 'Kuliah Praktisi', 3, NULL, NULL),
(10, '005', 'Kuliah Umum', 3, NULL, NULL),
(11, '006', 'Kuliah Semester Antara', 3, NULL, NULL),
(12, '007', 'Kuliah Tambahan di luar jam kerja', 3, NULL, NULL),
(13, '008', 'Persiapan dan Evaluasi Perkuliahan Semester', 3, NULL, NULL),
(14, '009', 'Visiting Profesor', 3, NULL, NULL),
(15, '010', 'Kuliah Tamu ', 3, NULL, NULL),
(16, '011', 'Asistensi', 3, NULL, NULL),
(17, '001', 'Praktikum Laboratorium', 4, NULL, NULL),
(18, '002', 'Praktikum Lapangan', 4, NULL, NULL),
(19, '003', 'Kuliah kerja Nyata Profesi (KKNP)', 4, NULL, NULL),
(20, '004', 'Program Magang', 4, NULL, NULL),
(21, '005', 'Prakterk Kerja Lapang (PKL)', 4, NULL, NULL),
(22, '006', 'Kuliah Kerja Lapang (KKL)', 4, NULL, NULL),
(23, '007', 'Fieldtrip dan Company Visit', 4, NULL, NULL),
(24, '008', 'Pembekalan Magang / PKL / KKL / KKN-P', 4, NULL, NULL),
(25, '009', 'Supervisi Magang / PKL / KKL / KKN-P', 4, NULL, NULL),
(26, '001', 'Ujian Tengah Semester', 5, NULL, NULL),
(27, '002', 'Ujian Akhir Semester', 5, NULL, NULL),
(28, '003', 'Ujian Komprehensif', 5, NULL, NULL),
(29, '004', 'Ujian Proposal Disertasi', 5, NULL, NULL),
(30, '005', 'Ujian Disertasi Tertutup', 5, NULL, NULL),
(31, '006', 'Ujian Disertasi Terbuka', 5, NULL, NULL),
(32, '007', 'Seminar Proposal Skripsi', 5, NULL, NULL),
(33, '008', 'Ujian Proposal Skripsi', 5, NULL, NULL),
(34, '009', 'Ujian Skripsi', 5, NULL, NULL),
(35, '010', 'Ujian Proposal Tesis', 5, NULL, NULL),
(36, '011', 'Ujian Tesis', 5, NULL, NULL),
(37, '012', 'Ujian Kualifikasi', 5, NULL, NULL),
(38, '013', 'Seminar Hasil Skripsi', 5, NULL, NULL),
(39, '014', 'Seminar Hasil Tesis', 5, NULL, NULL),
(40, '015', 'Seminar Hasil Disertasi', 5, NULL, NULL),
(41, '016', 'Ujian Magang / PKL / KKL / KKN-P', 5, NULL, NULL),
(42, '001', 'Bimbingan Skripsi', 6, NULL, NULL),
(43, '002', 'Bimbingan Tesis', 6, NULL, NULL),
(44, '003', 'Bimbingan Disertasi', 6, NULL, NULL),
(45, '004', 'Bimbingan KKNP', 6, NULL, NULL),
(46, '001', 'Pra Yudisium', 7, NULL, NULL),
(47, '002', 'Yudisium', 7, NULL, NULL),
(48, '003', 'Prosesi Wisuda', 7, NULL, NULL),
(49, '004', 'Pelepasan Wisudawan', 7, NULL, NULL),
(50, '005', 'Sumpah Profesi', 7, NULL, NULL),
(51, '001', 'TOEIC', 8, NULL, NULL),
(52, '002', 'TOEFL', 8, NULL, NULL),
(53, '003', 'Internet and Computing Core Certification (IC3)', 8, NULL, NULL),
(54, '004', 'Sertifikasi Bahasa Inggris Mahasiswa', 8, NULL, NULL),
(55, '005', 'Sosialisasi Test TOEFL, TOIEC, IELTS, dan IC3', 8, NULL, NULL),
(56, '006', 'Sertifikasi Kompetensi (Microsoft)', 8, NULL, NULL),
(57, '002', 'Pelatihan Ketrampilan Teknis.........', 9, NULL, NULL),
(58, '004', 'Pelatihan Bahasa Inggris Mahasiswa', 9, NULL, NULL),
(59, '005', 'Pelatihan Memasuki Dunia Kerja', 9, NULL, NULL),
(60, '006', 'Pelatihan SIAKAD untuk Maba', 9, NULL, NULL),
(61, '007', 'Matrikulasi & Pembinaan Mahasiswa Afirmasi ', 9, NULL, NULL),
(62, '008', 'Pelatihan TOT Sertifikasi Mahasiswa', 9, NULL, NULL),
(63, '001', 'Sosialisasi Sistem Informasi Bagi Mahasiswa ', 10, NULL, NULL),
(64, '003', 'Review, Resensi, & Bedah Buku', 10, NULL, NULL),
(65, '001', 'Pembekalan pertukaran mahasiswa', 11, NULL, NULL),
(66, '002', 'Pengiriman delegasi pertukaran mahasiswa', 11, NULL, NULL),
(67, '001', 'Pemeliharaan Gedung Perkuliahan', 12, NULL, NULL),
(68, '002', 'Pemeliharaan Gedung Laboratorium', 12, NULL, NULL),
(69, '003', 'Pemeliharaan Gedung Pendukung Pembelajaran', 12, NULL, NULL),
(70, '004', 'Pemeliharaan Peralatan Pembelajaran', 12, NULL, NULL),
(71, '005', 'Pemeliharaan Peralatan Laboratorium', 12, NULL, NULL),
(72, '006', 'Pemeliharaan Peralatan Pendukung Pembelajaran', 12, NULL, NULL),
(73, '001', 'Pemrograman Mata Kuliah S1', 13, NULL, NULL),
(74, '002', 'Pemrograman Mata Kuliah S2', 13, NULL, NULL),
(75, '003', 'Pemrograman Mata Kuliah S3', 13, NULL, NULL),
(76, '001', 'Penyusunan Jadwal Perkuliahan S1', 14, NULL, NULL),
(77, '002', 'Penyusunan Jadwal Perkuliahan S2', 14, NULL, NULL),
(78, '003', 'Penyusunan Jadwal Perkuliahan S3', 14, NULL, NULL),
(79, '001', 'Monitoring dan Evaluasi PBM S1', 15, NULL, NULL),
(80, '002', 'Monitoring dan Evaluasi PBM S2', 15, NULL, NULL),
(81, '003', 'Monitoring dan Evaluasi PBM S3', 15, NULL, NULL),
(82, '002', 'Penyusunan Buku Pedoman Pendidikan S1', 16, NULL, NULL),
(83, '003', 'Penyusunan Buku Pedoman Pendidikan Pasca Sarjana', 16, NULL, NULL),
(84, '004', 'Penyusunan Buku Pedoman Penulisan Skripsi ', 16, NULL, NULL),
(85, '005', 'Penyusunan Buku Pedoman Penulisan Tesis', 16, NULL, NULL),
(86, '006', 'Penyusunan Buku Pedoman Penulisan Disertasi', 16, NULL, NULL),
(87, '001', 'Pembuatan Aplikasi Registrasi ', 17, NULL, NULL),
(88, '002', 'Pembuatan Aplikasi Pemrograman Mata Kuliah (KRS)', 17, NULL, NULL),
(89, '003', 'Pembuatan Aplikasi Hasil Evaluasi Studi (KHS)', 17, NULL, NULL),
(90, '004', 'Pembuatan Aplikasi Pendukung Sistem Informasi Akademik Lainnya', 17, NULL, NULL),
(91, '005', 'Pelatihan Aplikasi Registrasi ', 17, NULL, NULL),
(92, '006', 'Pelatihan Aplikasi Pemrograman Mata Kuliah (KRS)', 17, NULL, NULL),
(93, '007', 'Pelatihan Aplikasi Hasil Evaluasi Studi (KHS)', 17, NULL, NULL),
(94, '008', 'Pelatihan Aplikasi Pendukung Sistem Informasi Akademik Lainnya', 17, NULL, NULL),
(95, '001', 'Layanan pinjam baca buku pustaka diluar jam kerja', 18, NULL, NULL),
(96, '001', 'Langganan Jurnal Elektronik (e-Journal)', 22, NULL, NULL),
(97, '002', 'Langganan Buku Elektronik (e-book)', 22, NULL, NULL),
(98, '001', 'Pemeliharaan Gedung Perpustakaan', 23, NULL, NULL),
(99, '002', 'Pemeliharaan Peralatan Perpustakaan', 23, NULL, NULL),
(100, '003', 'Pengadaan Bahan RFID Tag', 23, NULL, NULL),
(101, '001', 'Diseminasi publikasi Jurnal ilmiah internasional', 31, NULL, NULL),
(102, '002', 'Insentif publikasi Jurnal ilmiah internasional', 31, NULL, NULL),
(103, '003', 'Publikasi Jurnal ilmiah internasional', 31, NULL, NULL),
(104, '001', 'Diseminasi publikasi Jurnal ilmiah nasional', 32, NULL, NULL),
(105, '002', 'Insentif publikasi Jurnal ilmiah nasional', 32, NULL, NULL),
(106, '003', 'Publikasi Jurnal ilmiah nasional', 32, NULL, NULL),
(107, '001', 'Penerbitan Jurnal Lokal', 33, NULL, NULL),
(108, '002', 'Penerbitan Jurnal Nasional', 33, NULL, NULL),
(109, '001', 'Pengembangan Pengabdian Masyarakat Internal Fakultas', 37, NULL, NULL),
(110, '001', 'Hibah Bina Desa', 38, NULL, NULL),
(111, '001', 'Pengadaan peralatan ruang kuliah', 40, NULL, NULL),
(112, '001', 'Pengadaan Peralatan Laboratorium .........', 41, NULL, NULL),
(113, '002', 'Pengadaan Peralatan Laboratorium .........', 41, NULL, NULL),
(114, '001', 'Pengadaan Peralatan Praktikum ...............', 42, NULL, NULL),
(115, '002', 'Pengadaan Peralatan Praktikum ...............', 42, NULL, NULL),
(116, '001', 'Pengadaan Buku Pendukung Pusat Dokumentasi dan Informasi', 45, NULL, NULL),
(117, '002', 'Pengadaan Buku Ruang Baca', 45, NULL, NULL),
(118, '001', 'Pembayaran Gaji dan Tunjangan Pegawai Non PNS', 47, NULL, NULL),
(119, '002', 'Pembayaran Tunjangan PNS Non Struktural', 47, NULL, NULL),
(120, '003', 'Pembayaran Kekurangan Gaji Pegawai Non PNS', 47, NULL, NULL),
(121, '004', 'Pembayaran Tunjangan Pengelola Unit Pendukung', 47, NULL, NULL),
(122, '005', 'Pembayaran Tunjangan Pengelola Keuangan', 47, NULL, NULL),
(123, '006', 'Pembayaran Tunjangan Bina Lingkungan', 47, NULL, NULL),
(124, '007', 'Pembayaran Tunjangan Pejabat Struktural', 47, NULL, NULL),
(125, '008', 'Pembayaran Tunjangan Pimpinan Fakultas', 47, NULL, NULL),
(126, '009', 'Pembayaran Uang Makan Pegawai Non PNS', 47, NULL, NULL),
(127, '010', 'Pembayaran Uang Lembur dan Uang Makan Lembur', 47, NULL, NULL),
(128, '001', 'Langganan Daya & Jasa Operasional Kantor', 54, NULL, NULL),
(129, '001', 'Survailance ISO & Akreditasi Perguruan Tinggi', 56, NULL, NULL),
(130, '002', 'Pembentukan Kode Etik Staf Administrasi', 56, NULL, NULL),
(131, '003', 'Penjaminan Mutu Layanan (ISO 9001:2008)', 56, NULL, NULL),
(132, '004', 'Audit Eksternal ISO 17025:2008', 56, NULL, NULL),
(133, '001', 'Rapat Koordinasi Rencana Strategis', 57, NULL, NULL),
(134, '002', 'Rapat Koordinasi Program Kerja Tahunan', 57, NULL, NULL),
(135, '003', 'Rapat Koordinasi Program Kerjasama', 57, NULL, NULL),
(136, '004', 'Rapat Koordinasi Program Uang Kuliah Tunggal', 57, NULL, NULL),
(137, '005', 'Rapat Koordinasi Program Kerja Tahunan', 57, NULL, NULL),
(138, '001', 'Sosialisasi program & beasiswa universitas luar negeri', 58, NULL, NULL),
(139, '002', 'Sosialisasi perijinan bagi mahasiswa & dosen asing', 58, NULL, NULL),
(140, '003', 'Sosialisasi Sistem Informasi Bagi Tenaga Administrasi', 58, NULL, NULL),
(141, '004', 'Sosialisasi Sistem Informasi Bagi Pejabat ', 58, NULL, NULL),
(142, '001', 'Operasional Pengelolaan Universitas', 59, NULL, NULL),
(143, '002', 'Operasional Pengelolaan Fakultas/Program', 59, NULL, NULL),
(144, '003', 'Operasional Pengelolaan Lembaga ', 59, NULL, NULL),
(145, '004', 'Operasional Pengelolaan Unit', 59, NULL, NULL),
(146, '005', 'Operasional Pengelolaan Badan', 59, NULL, NULL),
(147, '006', 'Operasional Pengelolaan Jurusan', 59, NULL, NULL),
(148, '007', 'Operasional Pengelolaan Program Studi', 59, NULL, NULL),
(149, '008', 'Operasional Pengelolaan Unit/Lembaga Pendukung Tridharma PT Lainnya', 59, NULL, NULL),
(150, '009', 'Perjalanan Dinas', 59, NULL, NULL),
(151, '010', 'Pengadaan Jasa Cleaning Service', 59, NULL, NULL),
(152, '011', 'Pengelolaan Pangkalan Data Perguruan Tinggi (PDPT)', 59, NULL, NULL),
(153, '001', 'Bantuan Bina Lingkungan', 60, NULL, NULL),
(154, '002', 'Penghargaan Dosen dan Pegawai Berprestasi', 60, NULL, NULL),
(155, '001', 'Seminar International', 61, NULL, NULL),
(156, '002', 'Workshop Uber HAKI dan karya dosen bidang seni & sastra', 61, NULL, NULL),
(157, '003', 'Workshop E-Tax', 61, NULL, NULL),
(158, '001', 'Pelatihan Pengelolaan Portal Blog', 62, NULL, NULL),
(159, '001', 'Audit Inventarisasi Aset Tetap ', 63, NULL, NULL),
(160, '002', 'Audit Kepegawaian ', 63, NULL, NULL),
(161, '003', 'Audit Tata Kelola IT ', 63, NULL, NULL),
(162, '004', 'Monev BOPTN', 63, NULL, NULL),
(163, '005', 'Audit Tata Kelola dan Status Unit Bisnis (4 satker)', 63, NULL, NULL),
(164, '006', 'Audit Tata Kelola dan Status Aset BMN', 63, NULL, NULL),
(165, '001', 'Pembuatan Aplikasi dan Database Berbasis Web', 65, NULL, NULL),
(166, '001', 'Dies Natalis', 66, NULL, NULL),
(167, '002', 'Benchmarking Internasional', 66, NULL, NULL),
(168, '003', 'Rintisan Kerjasama Nasional & Internasional', 66, NULL, NULL),
(169, '004', 'Pameran & Promosi Pendidikan', 66, NULL, NULL),
(170, '005', 'Sinkronisasi Sistem Terpadu', 66, NULL, NULL),
(171, '001', 'Rekonsiliasi Barang Milik Negara (BMN) ', 147, NULL, NULL),
(172, '002', 'Rekonsiliasi Barang Persediaan', 147, NULL, NULL),
(173, '003', 'Rekonsiliasi Sistem Akuntansi Kuasa Pengguna Anggaran', 147, NULL, NULL),
(174, '004', 'Rekonsiliasi Pendapatan BLU', 147, NULL, NULL),
(175, '005', 'Rekonsiliasi Belanja BLU', 147, NULL, NULL),
(176, '006', 'Rekonsiliasi Keuangan Unit Bisnis', 147, NULL, NULL),
(177, '001', 'Penyusunan Laporan Barang Milik Negara (BMN) ', 148, NULL, NULL),
(178, '002', 'Penyusunan Laporan Barang Persediaan', 148, NULL, NULL),
(179, '003', 'Penyusunan Laporan Sistem Akuntansi Kuasa Pengguna Anggaran', 148, NULL, NULL),
(180, '004', 'Penyusunan Laporan Pendapatan BLU', 148, NULL, NULL),
(181, '005', 'Penyusunan Laporan Belanja BLU', 148, NULL, NULL),
(182, '006', 'Penyusunan Laporan Keuangan Unit Bisnis', 148, NULL, NULL),
(183, '001', 'Audit Laporan Keuangan oleh Kantor Akuntan Publik (KAP)', 149, NULL, NULL),
(184, '002', 'Audit Laporan Keuangan oleh Badan Pemeriksa Keuangan (BPK) RI', 149, NULL, NULL),
(185, '003', 'Audit Laporan Keuangan oleh Badan Pemeriksa Keuangan dan Pembangunan (BPKP) RI', 149, NULL, NULL),
(186, '004', 'Audit Laporan Keuangan oleh Itjen Kemenristek & Dikti RI', 149, NULL, NULL),
(187, '005', 'Audit Laporan Keuangan oleh Komisi Pemberatan Korupsi (KPK) RI', 149, NULL, NULL),
(188, '001', 'Seleksi Mahasiswa S1 Program Mandiri ', 150, NULL, NULL),
(189, '002', 'Seleksi Mahasiswa S2 Program Mandiri ', 150, NULL, NULL),
(190, '003', 'Seleksi Mahasiswa S3 Program Mandiri ', 150, NULL, NULL),
(191, '004', 'Seleksi Mahasiswa Vokasi Program Mandiri ', 150, NULL, NULL),
(192, '005', 'Seleksi Mahasiswa S1 Alih Program', 150, NULL, NULL),
(193, '006', 'Matrikulasi', 150, NULL, NULL),
(194, '007', 'Program Alih Tahun (PAT)', 150, NULL, NULL),
(195, '001', 'Penyusunan Borang Akreditasi Nasional PS S1', 81, NULL, NULL),
(196, '002', 'Penyusunan Borang Akreditasi Nasional PS S2', 81, NULL, NULL),
(197, '003', 'Penyusunan Borang Akreditasi Nasional PS S3', 81, NULL, NULL),
(198, '004', 'Penyusunan Borang Akreditasi Internasional PS S1', 81, NULL, NULL),
(199, '005', 'Penyusunan Borang Akreditasi Internasional PS S2', 81, NULL, NULL),
(200, '006', 'Penyusunan Borang Akreditasi Internasional PS S3', 81, NULL, NULL),
(201, '007', 'Workshop Akreditasi Nasional PS', 81, NULL, NULL),
(202, '008', 'Workshop Akreditasi Internasional PS', 81, NULL, NULL),
(203, '009', 'Persiapan Menuju Akreditasi Internasional AUN-QA ', 81, NULL, NULL),
(204, '010', 'Sosialiasi Akreditasi Jurusan/Prodi oleh LAM dan EMI', 81, NULL, NULL),
(205, '011', 'Persiapan Akreditasi & Visitasi BAN PT ', 81, NULL, NULL),
(206, '001', 'Penyusunan Borang Sertifikasi Internasional PS', 82, NULL, NULL),
(207, '002', 'Workshop Sertifikasi Internasional PS', 82, NULL, NULL),
(208, '001', 'Kalibrasi alat laboratorium sesuai ISO 17025:2008', 83, NULL, NULL),
(209, '002', 'Workshop Sosialisasi dan Pelayanan Kalibrasi Peralatan', 83, NULL, NULL),
(210, '003', 'Pendampingan Sertifikasi Laboratorium', 83, NULL, NULL),
(211, '004', 'International Working Sister Labs', 83, NULL, NULL),
(212, '001', 'Pengadaan Materi Pembelajaran', 84, NULL, NULL),
(213, '002', 'Pengadaan Modul Pembelajaran', 84, NULL, NULL),
(214, '003', 'Pembuatan Video Tutorial Pembelajaran', 84, NULL, NULL),
(215, '004', 'Seleksi dan Hibah Modul Pembelajaran', 84, NULL, NULL),
(216, '001', 'Pengadaan bahan praktikum', 85, NULL, NULL),
(217, '001', 'Survey Kepuasan Layanan Mahasiswa, Dosen, Pegawai, dan Pihak Ketiga', 86, NULL, NULL),
(218, '002', 'Survey Kepuasan Orang Tua Mahasiswa', 86, NULL, NULL),
(219, '003', 'Survey Kepuasan Pengguna Lulusan', 86, NULL, NULL),
(220, '004', 'Evaluasi dan Perbaikan Dokumen Penjaminan Mutu', 86, NULL, NULL),
(221, '005', 'Monev Penjaminan Mutu di tingkat Fakultas', 86, NULL, NULL),
(222, '006', 'Pelatihan Auditor Audit Internal Mutu (AIM)', 86, NULL, NULL),
(223, '007', 'Audit Internal Mutu (AIM)', 86, NULL, NULL),
(224, '008', 'Perumusan & Penyusunan Kode Etik Dosen', 86, NULL, NULL),
(225, '009', 'Penyusunan Sistem Anti Plagiasi', 86, NULL, NULL),
(226, '010', 'Audit Mutu oleh Unit Jaminan Mutu (UJM), Gugus Jaminan Mutu (GJM) dan SPI', 86, NULL, NULL),
(227, '001', 'Workshop kurikulum', 87, NULL, NULL),
(228, '002', 'Seminar kurikulum', 87, NULL, NULL),
(229, '003', 'Lokakarya Kurikulum', 87, NULL, NULL),
(230, '004', 'Rekontruksi Kurikulum', 87, NULL, NULL),
(231, '001', 'Workshop Metode Pembelajaran', 88, NULL, NULL),
(232, '002', 'Seminar Metode Pembelajaran', 88, NULL, NULL),
(233, '003', 'Lokakarya Metode Pembelajaran', 88, NULL, NULL),
(234, '004', 'Pelatihan metode pembelajaran berbasis Student Centred Learning  (SCL)', 88, NULL, NULL),
(235, '001', 'Pengembangan aplikasi SIM FEB Modul Akademik ', 89, NULL, NULL),
(236, '002', 'Pengembangan Aplikasi SIM FEB Modul Portal Mahasiswa', 89, NULL, NULL),
(237, '003', 'Pengembangan Aplikasi Official Web ', 89, NULL, NULL),
(238, '004', 'Pengembangan Template web ', 89, NULL, NULL),
(239, '001', 'Seminar', 90, NULL, NULL),
(240, '002', 'Seminar Nasional ', 90, NULL, NULL),
(241, '003', 'Focust Group Discussion (FGD) ', 90, NULL, NULL),
(242, '001', 'Pembentukan Pusat Kajian ?.', 91, NULL, NULL),
(243, '002', 'Pembentukan Pusat Kajian ?.', 91, NULL, NULL),
(244, '001', 'Pembinaan Organisasi Kemahasiswaan Bidang Minat Bakat', 94, NULL, NULL),
(245, '002', 'Pembinaan Organisasi Kemahasiswaan Bidang Penalaran', 94, NULL, NULL),
(246, '003', 'Pembinaan Organisasi Kemahasiswaan Bidang Kewirausahaan', 94, NULL, NULL),
(247, '004', 'Pembinaan Badan Eksekutif Mahasiswa', 94, NULL, NULL),
(248, '005', 'Monitoring dan Evaluasi Unit Kegiatan Mahasiswa', 94, NULL, NULL),
(249, '001', 'Pelatihan & Pembinaan Kemahasiswaan Bidang Minat Bakat', 95, NULL, NULL),
(250, '002', 'Pelatihan & Pembinaan Kemahasiswaan Bidang Penalaran', 95, NULL, NULL),
(251, '003', 'Pelatihan & Pembinaan Kemahasiswaan Bidang Kewirausahaan', 95, NULL, NULL),
(252, '001', 'Kompetisi Mahasiswa Bidang Minat Bakat', 96, NULL, NULL),
(253, '002', 'Kompetisi Mahasiswa Bidang Penalaran', 96, NULL, NULL),
(254, '003', 'Kompetisi Mahasiswa Bidang Kewirausahaan', 96, NULL, NULL),
(255, '001', 'Hibah Mahasiswa Berprestasi Bidang Minat Bakat', 97, NULL, NULL),
(256, '002', 'Hibah Mahasiswa Berprestasi Bidang Penalaran', 97, NULL, NULL),
(257, '003', 'Hibah Mahasiswa Berprestasi Bidang Kewirausahaan', 97, NULL, NULL),
(258, '001', 'Delegasi Mahasiswa Bidang Minat Bakat', 98, NULL, NULL),
(259, '002', 'Delegasi Mahasiswa Bidang Penalaran', 98, NULL, NULL),
(260, '003', 'Delegasi Mahasiswa Bidang Kewirausahaan', 98, NULL, NULL),
(261, '001', 'Pengadaan Peralatan Habis pakai Kesenian', 99, NULL, NULL),
(262, '002', 'Pengadaan Peralatan Habis pakai Olah Raga', 99, NULL, NULL),
(263, '003', 'Pengadaan Peralatan Habis pakai Pendukung Kegiatan Kemahasiswaan lainnya', 99, NULL, NULL),
(264, '001', 'Pemeliharaan Gedung UKM', 100, NULL, NULL),
(265, '002', 'Pemeliharaan Fasilitas Gedung UKM', 100, NULL, NULL),
(266, '003', 'Pemeliharaan Peralatan Kegiatan Kemahasiswaan', 100, NULL, NULL),
(267, '001', 'Pelatihan Academic Achievement', 101, NULL, NULL),
(268, '002', 'Pelatihan Pekerti', 101, NULL, NULL),
(269, '003', 'Pelatihan teknik/metoda pembelajaran', 101, NULL, NULL),
(270, '004', 'Pelatihan Bahasa Inggris bagi Dosen', 101, NULL, NULL),
(271, '005', 'Pengiriman Delegasi Dosen Pada Kegiatan Ilmiah Nasional dan Internasional', 101, NULL, NULL),
(272, '006', 'Pelatihan dan Sertifikasi Dosen', 101, NULL, NULL),
(273, '007', 'Pengiriman Delegasi Dosen Dalam rangka Seminar/Workshop/TOT dan kegiatan sejenis', 101, NULL, NULL),
(274, '008', 'Pelatihan penelitian dan penulisan karya ilmiah Internasional', 101, NULL, NULL),
(275, '009', 'Peningkatan jumlah dosen yang mengikuti seminar/workshop dll di forum internasional', 101, NULL, NULL),
(276, '010', 'Pengiriman Delegasi Dosen dalam Asosiasi Profesi Nasional dan Internasional', 101, NULL, NULL),
(277, '011', 'Diklat Metodologi Penelitian dan Penulisan Ilmiah', 101, NULL, NULL),
(278, '012', 'Diklat manajemen  organisasi, leadership, human communication relationship', 101, NULL, NULL),
(279, '013', 'Pelatihan Media dan Sumber Belajar Berbasis TI bagi Dosen', 101, NULL, NULL),
(280, '014', 'Pelatihan analisis dasar proksimat', 101, NULL, NULL),
(281, '001', 'Diklat Pustakawan', 102, NULL, NULL),
(282, '002', 'Pelatihan dan Sertifikasi Staf kependidikan', 102, NULL, NULL),
(283, '003', 'Peningkatan Kualitas Kinerja Pegawai', 102, NULL, NULL),
(284, '004', 'Pelatihan Kompetensi Laboran', 102, NULL, NULL),
(285, '005', 'Pelatihan Berbahasa Inggris Tenaga Kependidikan', 102, NULL, NULL),
(286, '006', 'Pelatihan Sistem Informasi Manajemen Terpadu', 102, NULL, NULL),
(287, '007', 'Pelatihan Pengelolaan Web', 102, NULL, NULL),
(288, '008', 'Pelatihan Teknologi Informasi dan Komunikasi', 102, NULL, NULL),
(289, '009', 'Pelatihan Pengadaan Barang dan Jasa', 102, NULL, NULL),
(290, '010', 'Pelatihan kemanan dan keselamatan kerja laboratorium K3', 102, NULL, NULL),
(291, '001', 'Bantuan Studi Tenaga Pendidik', 103, NULL, NULL),
(292, '002', 'Bantuan Studi Tenaga Kependidikan', 103, NULL, NULL),
(293, '001', 'Penelitian Kerjasama Regional', 104, NULL, NULL),
(294, '002', 'Penelitian Kerjasama Nasional', 104, NULL, NULL),
(295, '003', 'Penelitian Kerjasama Internasional', 104, NULL, NULL),
(296, '004', 'Penelitian Percepatan Guru Besar', 104, NULL, NULL),
(297, '001', 'Seleksi Hibah Penelitian', 105, NULL, NULL),
(298, '002', 'Hibah Penelitian ', 105, NULL, NULL),
(299, '001', 'Pembayaran Gaji dan Tunjangan Pegawai Non PNS', 106, NULL, NULL),
(300, '002', 'Pembayaran Tunjangan PNS Non Struktural', 106, NULL, NULL),
(301, '003', 'Pembayaran Kekurangan Gaji Pegawai Non PNS', 106, NULL, NULL),
(302, '004', 'Pembayaran Tunjangan Pengelola Unit Pendukung', 106, NULL, NULL),
(303, '005', 'Pembayaran Tunjangan Pengelola Keuangan', 106, NULL, NULL),
(304, '006', 'Pembayaran Tunjangan Bina Lingkungan', 106, NULL, NULL),
(305, '007', 'Pembayaran Tunjangan Pejabat Struktural', 106, NULL, NULL),
(306, '008', 'Pembayaran Tunjangan Pimpinan Fakultas', 106, NULL, NULL),
(307, '009', 'Pembayaran Uang Makan Pegawai Non PNS', 106, NULL, NULL),
(308, '010', 'Pembayaran Uang Lembur dan Uang Makan Lembur', 106, NULL, NULL),
(309, '001', 'Langganan Daya & Jasa Operasional Kantor', 113, NULL, NULL),
(310, '001', 'Survailance ISO & Akreditasi Perguruan Tinggi', 115, NULL, NULL),
(311, '002', 'Pembentukan Kode Etik Staf Administrasi', 115, NULL, NULL),
(312, '003', 'Penjaminan Mutu Layanan (ISO 9001:2008)', 115, NULL, NULL),
(313, '004', 'Audit Eksternal ISO 17025:2008', 115, NULL, NULL),
(314, '001', 'Rapat Koordinasi Rencana Strategis', 116, NULL, NULL),
(315, '002', 'Rapat Koordinasi Program Kerja Tahunan', 116, NULL, NULL),
(316, '003', 'Rapat Koordinasi Program Kerjasama', 116, NULL, NULL),
(317, '004', 'Rapat Koordinasi Program Uang Kuliah Tunggal', 116, NULL, NULL),
(318, '005', 'Rapat Koordinasi Program Kerja Tahunan', 116, NULL, NULL),
(319, '001', 'Sosialisasi program & beasiswa universitas luar negeri', 117, NULL, NULL),
(320, '002', 'Sosialisasi perijinan bagi mahasiswa & dosen asing', 117, NULL, NULL),
(321, '003', 'Sosialisasi Sistem Informasi Bagi Tenaga Administrasi', 117, NULL, NULL),
(322, '004', 'Sosialisasi Sistem Informasi Bagi Pejabat ', 117, NULL, NULL),
(323, '002', 'Operasional Pengelolaan Fakultas/Program', 118, NULL, NULL),
(324, '003', 'Operasional Pengelolaan Lembaga ', 118, NULL, NULL),
(325, '004', 'Operasional Pengelolaan Unit', 118, NULL, NULL),
(326, '005', 'Operasional Pengelolaan Badan', 118, NULL, NULL),
(327, '006', 'Operasional Pengelolaan Jurusan', 118, NULL, NULL),
(328, '007', 'Operasional Pengelolaan Program Studi', 118, NULL, NULL),
(329, '008', 'Operasional Pengelolaan Unit/Lembaga Pendukung Tridharma PT Lainnya', 118, NULL, NULL),
(330, '009', 'Perjalanan Dinas', 118, NULL, NULL),
(331, '010', 'Pengadaan Jasa Cleaning Service', 118, NULL, NULL),
(332, '011', 'Pengelolaan Pangkalan Data Perguruan Tinggi (PDPT)', 118, NULL, NULL),
(333, '001', 'Bantuan Bina Lingkungan', 119, NULL, NULL),
(334, '002', 'Penghargaan Dosen dan Pegawai Berprestasi', 119, NULL, NULL),
(335, '001', 'Seminar International', 120, NULL, NULL),
(336, '002', 'Workshop Uber HAKI dan karya dosen bidang sosial dan humaniora', 120, NULL, NULL),
(337, '003', 'Workshop E-Tax', 120, NULL, NULL),
(338, '001', 'Pelatihan Pengelolaan Portal Blog Unram', 121, NULL, NULL),
(339, '001', 'Audit Inventarisasi Aset Tetap UNRAM', 122, NULL, NULL),
(340, '002', 'Audit Kepegawaian UNRAM', 122, NULL, NULL),
(341, '003', 'Audit Tata Kelola IT UNRAM', 122, NULL, NULL),
(342, '004', 'Monev BOPTN ', 122, NULL, NULL),
(343, '005', 'Audit Tata Kelola dan Status Unit Bisnis ', 122, NULL, NULL),
(344, '006', 'Audit Tata Kelola dan Status Aset ', 122, NULL, NULL),
(345, '001', 'Pembuatan Aplikasi dan Database Berbasis Web', 124, NULL, NULL),
(346, '001', 'Dies Natalis', 125, NULL, NULL),
(347, '002', 'Benchmarking Internasional', 125, NULL, NULL),
(348, '003', 'Rintisan Kerjasama Nasional & Internasional', 125, NULL, NULL),
(349, '004', 'Pameran & Promosi Pendidikan', 125, NULL, NULL),
(350, '005', 'Sinkronisasi Sistem Terpadu', 125, NULL, NULL),
(351, '001', 'Pengadaan Kendaraan Unit Bisnis', 130, NULL, NULL),
(352, '001', 'Pembangunan Lanjutan Gedung', 136, NULL, NULL),
(353, '002', 'Jasa Konstruksi Pembangunan Gedung ', 136, NULL, NULL),
(354, '001', 'Pembangunan Gedung Kuliah Bersama', 141, NULL, NULL),
(355, '002', 'Pembangunan Gedung Kuliah Pascasarjana', 141, NULL, NULL),
(356, '003', 'Pembangunan Gedung Kuliah Vokasi', 141, NULL, NULL),
(357, '001', 'Pembangunan Gedung Arsip', 142, NULL, NULL),
(358, '002', 'Pembangunan Gedung Administrasi', 142, NULL, NULL),
(359, '001', 'Pembangunan Gedung Laboratorium .....', 143, NULL, NULL),
(360, '001', 'Pembangunan Gedung Sarana Ibadah', 144, NULL, NULL),
(361, '002', 'Pembangunan Gedung Keamanan', 144, NULL, NULL),
(362, '001', 'Pembangunan Gedung UKM', 145, NULL, NULL),
(363, '002', 'Pembangunan Gedung HMJ', 145, NULL, NULL),
(364, '003', 'Pembangunan Gedung BEM', 145, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_ikk`
--

CREATE TABLE `table_ikk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ikk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_awal` int(11) NOT NULL,
  `target1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target5` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etor` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_ikk`
--

INSERT INTO `table_ikk` (`id`, `ikk`, `tahun_awal`, `target1`, `target2`, `target3`, `target4`, `target5`, `id_etor`, `id_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'tes', 2021, '1', '2', '3', '4', '5', 4, 3, '2021-09-07 19:22:41', '2021-09-07 19:22:41'),
(3, 'cek', 2021, '1', '1', '1', '1', '1', 4, 3, '2021-09-08 01:00:56', '2021-09-08 01:00:56'),
(6, 'kong guan 111', 2021, '3', '4', '31', '21', '111', 4, 6, '2021-09-08 01:31:52', '2021-10-16 15:01:44'),
(7, 'tes', 2021, '1', '2', '3', '4', '5', 4, 5, '2021-09-08 03:39:42', '2021-09-08 03:39:42'),
(9, 'tes', 2021, '2', '2', '2', '2', '20%', 4, 8, '2021-09-09 00:03:34', '2021-09-12 18:53:46'),
(11, 'tes 2', 2021, '7', '7', '7', '7', '71', 4, 6, '2021-09-09 07:09:45', '2021-09-09 15:26:09'),
(13, '', 2021, '', '', '', '', '', 4, 6, '2021-09-09 18:04:59', '2021-10-16 19:00:54'),
(14, 'ooooxxxx', 2021, '5', '5', '5', '5', '5', 4, 6, '2021-09-12 17:49:10', '2021-09-12 17:52:55'),
(16, '-', 2021, '-', '-', '-', '-', '-', 4, 8, '2021-10-16 18:59:19', '2021-10-16 18:59:19'),
(17, '-', 2021, '-', '-', '-', '-', '-', 4, 6, '2021-10-16 18:59:35', '2021-10-16 18:59:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_io`
--

CREATE TABLE `table_io` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `input` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_io`
--

INSERT INTO `table_io` (`id`, `input`, `output`, `id_etor`, `created_at`, `updated_at`) VALUES
(1, 'Meningkatnya persentase kegiatan perkuliahan maupun seminar/workshop/pelatihan secara daring.', 'Pengadaan multimedia room, sistem pembelajaran daring khusus untuk FEB, dan  perangkat lunak (aplikasi) video konferensi.', 4, '2021-09-08 12:37:08', '2021-10-16 19:06:33'),
(5, 'testing', 'coba', 4, '2021-09-09 18:08:50', '2021-09-09 18:08:50'),
(8, 'ui', 'ui', 4, '2021-10-16 15:02:10', '2021-10-16 15:02:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kegiatan`
--

CREATE TABLE `table_kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_kegiatan`
--

INSERT INTO `table_kegiatan` (`id`, `nama_kegiatan`, `id_etor`, `created_at`, `updated_at`) VALUES
(6, 'kong guan121as', 4, '2021-09-08 01:31:04', '2021-10-16 15:01:53'),
(8, 'testing xxx', 4, '2021-09-09 00:00:35', '2021-09-20 01:03:30'),
(13, 'tes', 4, '2021-10-16 15:00:00', '2021-10-16 15:00:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbikk`
--

CREATE TABLE `tbikk` (
  `kode_ikk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_ikk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbikk`
--

INSERT INTO `tbikk` (`kode_ikk`, `judul_ikk`, `created_at`, `updated_at`) VALUES
('01', 'Layanan Pendidikan dan Pembelajaran\r\n', NULL, NULL),
('02', 'Penelitian dan Pengabdian Masyarakat\r\n', NULL, NULL),
('03', 'Kegiatan Kemahasiswaan\r\n', NULL, NULL),
('04', 'Mahasiswa Penerima Beasiswa\r\n', NULL, NULL),
('05', 'Operasional Pendidikan Tinggi Sesuai Standar Mutu dan Good Governance\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbikkuraian`
--

CREATE TABLE `tbikkuraian` (
  `id_ikk_uraian` bigint(20) UNSIGNED NOT NULL,
  `kode_ikk_uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ikk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_ikk_uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbikkuraian`
--

INSERT INTO `tbikkuraian` (`id_ikk_uraian`, `kode_ikk_uraian`, `kode_ikk`, `judul_ikk_uraian`, `created_at`, `updated_at`) VALUES
(1, '01\r\n', '01\r\n', 'Jumlah Kegiatan Penyusunan, Pengembangan dan Workshop kurikulum, Revisi kurikulum Program Studi berbasis Kerangka Kualifikasi Nasional Indonesia (KKNI)\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '02', '01', 'Jumlah kegiatan yang melibatkan stakeholder dan alumni dalam pengembangan dan Penyusunan kurikulum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '03', '01', 'Jumlah alumni yang memberikan data mendapatkan pekerjaan pertama', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '04', '01', 'Jumlah kegiatan course on farm and field', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '05', '01', 'Jumlah kegiatan Penyusunan dan workshop Modul Praktikum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '06', '01', 'Jumlah kegiatan Kuliah Tamu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '07', '01', 'Jumlah Workshop Aplikasi Teknologi Informasi beorientasi skill khusus Program Studi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '08', '01', 'Jumlah kegiatan pemanfaatan e-learning', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '09', '01', 'Jumlah kegiatan Pengembangan sistem evaluasi hasil belajar berbasis database', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '10', '01', 'Jumlah dokumen instrumen- instrumen pendukung dalam pelaksanaan kurikulum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '11', '01', 'Jumlah dokumen Penyempurnaan kurikulum pada program S2/S3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '12', '01', 'Jumlah kegiatan Workshop dosen pembimbing lapangan dan mahasiswa peserta kerja praktek lapangan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '13', '01', 'Jumlah dosen yang dikirim sebagai pembimbing lapangan dan mahasiswa ke perusahaan/industri dan instansi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '14', '01', 'Jumlah Kegiatan Promosi peningkatan kualitas calon mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '15', '01', 'Jumlah Kegiatan Peningkatan passing grade calon mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '16', '01', 'Jumlah Mahasiswa Baru yang S1 yang diterima', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '17', '01', 'Jumlah kegiatan Monitoring perkuliahan dan waktu bimbingan tugas akhir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '18', '01', 'Jumlah mahasiswa yang terlayani kegiatan perkuliahan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '19', '01', 'Jumlah Mahasiswa yang telah menyelesaikan pendidikan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '20', '01', 'Jumlah mahasiswa yang terlayani kegiatan perkuliahan tatap muka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '21', '01', 'Jumlah mahasiswa yang terlayani kegiatan perkuliahan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '22', '01', 'Jumlah mahasiswa yang agang di industri/ lembaga profesi/ lembaga penelitian dll', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '23', '01', 'Jumlah paket bahan-bahan habis pakai untuk kelancaran pembelajaran dan Praktikum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '24', '01', 'Jumlah Kegiatan Praktikum Lapangan untuk Prodi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '25', '01', 'Jumlah kegiatan Field Work untuk mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '26', '01', 'Jumlah kegiatan Workshop Kuliah Lapangan & Bimbingan Skripsi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '27', '01', 'Jumlah Kegiatan perbaikan proses monitoring perkuliahan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '28', '01', 'Jumlah kegiatan promosi untuk peningkatan kualitas calon mahasiswa masuk sesuai bidang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '29', '01', 'Jumlah lulusan yang memperoleh Surat Keterangan Pendamping Ijazah (SKPI)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '30', '01', 'Jumlah mahasiswa yang magang di perusahaan /industri/instansi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '31', '01', 'Jumlah Rumah Sakit Pendidikan yang didirikan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '32', '01', 'Jumlah Program Studi Baru yang dibuka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '33', '01', 'Jumlah proposal penelitian yang diberikan bantuan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '34', '01', 'Jumlah Riset Unggulan Perguruan Tinggi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '35', '01', 'Jumlah kegiatan penelitian yang menggunakan University Farm sebagai lokasi penelitian berkelanjutan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '36', '01', 'Jumlah judul Riset Iptek', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '37', '01', 'Jumlah riset Terapan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '38', '01', 'Jumlah kegiatan pengembangan inovasi nasional dan daerah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '39', '01', 'Jumlah kegiatan pengembangan ipteks berbasis keunggulan sumber daya alam, budaya, manusia)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '40', '01', 'Jumlah Dosen yang dilatih penulisan proposal Penelitian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '41', '01', 'Jumlah Desa yang terbina dalam program pengabdian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '42', '01', 'Jumlah Workshop untuk Dosen Pembimbing Lapangan dan calon mahasiswa kuliah kerja di desa binaan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '43', '01', 'Jumlah kegiatan bakti sosial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '44', '01', 'Jumlah kegiatan Workshop Penyusunan dan bimbingan Proposal Pengabdian Masyarakat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '45', '01', 'Jumlah Dosen yang dilatih penulisan proposal Pengabdian pada Masyarakat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '46', '01', 'Jumlah proposal pengabdian pada masyarakat yang diberikan bantuan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '47', '01', 'Jumlah mahasiswa yang mengikuti program KKN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '48', '01', 'Jumlah kegiatan Workshop penulisan HKI dan Paten untuk dosen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '49', '01', 'Jumlah kegiatan Kerjasama Riset Unggulan Perguruan Tinggi dan Lembaga Riset Nasional atau Internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '1', '02', 'Jumlah kegiatan peningkatan kerja sama riset dengan masyarakat dan industri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '2', '02', 'Jumlah kegiatan Workshop penulisan artikel untuk jurnal ilmiah internasional bereputasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '3', '02', 'Jumlah Dosen penerima insentif untuk publikasi nasional terakreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '4', '02', 'Jumah dosen penerima Insentif Seminar nasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '5', '02', 'Jumlah kegiatan Pendampingan penulisan dan publikasi karya ilmiah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '6', '02', 'Jumlah artikel yang dipublis pada Jurnal terakreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '7', '02', 'Jumlah kegiatan Seminar Ilmiah bulanan Program Studi menurut bidang keilmuan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '8', '02', 'Jumlah kegiatan Workshop penulisan artikel untuk jurnal ilmiah internasional bereputasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '9', '02', 'Jumlah Dosen yang mendapatkan insentif karya ilmiah yang dimuat di jurnal internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '10', '02', 'Jumah dosen penerima Insentif Seminar internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '11', '02', 'Jumlah calon yang mengikuti workshop jurnal ilmiah internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '12', '02', 'Jumlah Calon Profesor penerima Insentif Riset', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '13', '02', 'Jumlah mahasiwa yang mengikuti Pelatihan Penulisan karya ilmiah untuk mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '14', '02', 'Jumlah publikasi oleh mahasiswa dalam jurnal ilmiah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '15', '02', 'Jumlah kegiatan teknologi tepat Guna (TTG), Rekayasa yang diselengarakan oleh Pemerintah, maupun antar Universitas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '16', '02', 'Jumlah Model/Prototype/ Desain/Karya seni/ Rekayasa Sosial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '17', '02', 'Jumlah kegiatan penguatan Program Propotipe Laik Industri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '18', '02', 'Jumlah kegiatan penyusunan Dokumen Detail Engineering Design dari propotipe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '19', '02', 'Jumlah kegiatan Penyusunan Dokumen hasil uji simulasi laik industri di laboratorium', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '20', '02', 'Jumlah dokumen Penyusunan Dokumen hasil uji propotipe laik industri yang sudah mengalami pengujian dalam lingkungan sesungguhnya', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '21', '02', 'Jumlah dokumen yang didaftarkan HAKi untuk mendapatkan pengakuan propotipe industri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '22', '02', 'Jumlah Pengadaan jurnal nasional terakreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '23', '02', 'Pengadaan sarana dan prasarana penunjang jurnal jurusan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '24', '02', 'Jumlah jurnal jurusan yang memperoleh insentif', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '25', '02', 'Jumlah kegiatan pelatihan starategi penyusunan proposal penelitian yang kompetitif tingkat Nasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '26', '02', 'Jumlah kegiatan Pelatihan bagi pengelola jurnal yang sudah terbit dalam bentuk cetak untuk ditingkatkan menjadi jurnal elektronik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '27', '02', 'Jumlah kegiatan Pelatihan bagi pengelola jurnal elektronik, namun belum mendaftarkan akreditasi jurnal terindeks di SINTA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '28', '02', 'Jumlah Pelatihan bagi pengelola jurnal yang terakreditasi dan terindeks di Sinta 3-6 untuk mencapai peringkat 1-2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '29', '02', 'Jumlah kegiatan Penyusunan Rencana Pengembangan Jangka Menengah Manajemen Inovasi Perguruan Tinggi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '30', '02', 'Jumlah Penggunaan Tingkat Kesiapan Inovasi (KATSINOV) sebagai alat ukur produk inovasi/ calon produk inovasi sebagai sarana penentuan kebijakan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '31', '02', 'Jumlah Pengembangan Teaching Industri untuk mendukung pengembangan klaster inovasi yang berbasis pada produk unggulan daerah dengan mengi-ntegrasikan kapasitas dan sumber daya di perguruan tinggi, baik dalam bentuk start-up maupun dalam bentuk kolaborasi ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '32', '02', 'Jumlah inkubasi teknologi yang dimanfaatkan untuk melahirkan start-up unggulan dari hasil penelitian dan pengembangan, melalui pemanfaatan pendanaan riset atau pengabdian masyarakat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '33', '02', 'Jumlah dokumen yang didaftarkan HAKi untuk mendapatkan pengakuan produk inovasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, '34', '02', 'Jumlah UNIMART (University Market) yang dibentuk, sebagai showroom untuk memasarkan produk perguruan tinggi dengan memanfaatkan teknologi digital', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, '35', '02', 'Jumlah kegiatan Workshop penulisan artikel untuk jurnal ilmiah nasional terakreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '36', '02', 'Jumlah kegiatan Workshop Peningkatan Kuantitas dan Kualitas Publikasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '37', '02', 'Jumlah jurnal internal terakreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '38', '02', 'Jumlah Jurnal Nasional DOAJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, '39', '02', 'Jumlah Jurnal Terinstgrasi BKSPTNB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '40', '02', 'Jumlah JIM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '41', '02', 'Jumlah Lektor Kepala penerima Insentif Riset', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '42', '02', 'Jumah artikel mendapat insentif prosiding terindek scopus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '1', '03', 'Jumlah kegiatan Olimpiade sebagai ajang kompetisi para siswa yang diselenggarakan oleh Himpunan Mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '2', '03', 'Jumlah kegiatan peningkatan penyerapan lulusan di dunia kerja melalui rekruitmen langsung', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, '3', '03', 'Jumlah Workshop kewirausahaan untuk lulusan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '4', '03', 'Jumlah bulanl ayanan operasional UPT Kewirausahaan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, '5', '03', 'Jumlah kerjasama dengan dunia usaha dan industri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, '6', '03', 'Jumlah kegiatan short course berorientasi skill khusus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, '7', '03', 'Jumlah kegiatan job fair yang diselenggarakan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, '8', '03', 'Jumlah Workshop Peningkatan Soft Skill Mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, '9', '03', 'Jumlah bimbingan Proposal PKM untuk mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, '10', '03', 'Jumlah mahasiswa yang lulus dalam Bimbingan teknis dan ujian kompetensi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, '11', '03', 'Jumlah tempat latihan usaha di dalam kampus yang tercipta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, '12', '03', 'Jumlah kegiatan Pelatihan kewirausahaan mahasiswa dan networking', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, '13', '03', 'Jumlah kegiatan pelatihan pembuatan CV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, '14', '03', 'Jumlah kegiatan penguatan tata kelola UPT Pusat Jasa Ketegakerjaan (CDC)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, '15', '03', 'Jumlah kegiatan Pelatihan untuk Pembina kegiatan kemahasiswaan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, '16', '03', 'Jumlah kegiatan Pembinaan kegiatan kemahasiswaan yang bersertifikat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, '17', '03', 'Jumlah mahasiswa yang dikirim ke pelatihan/seminar, asosiasi profesi dan perlombaan tingkat nasional di bidang penalaran, minat dan bakat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, '18', '03', 'Jumlah mahasiwa yang mengikuti Pelatihan literasi perpustakaan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, '19', '03', 'Jumlah pelatih seni/olahraga yang bersertifikat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, '20', '03', 'Jumlah mahasiswa yang dikirim ke pelatihan/seminar, asosiasi profesi dan perlombaan tingkat Internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, '21', '03', 'Jumlah Pelatihan Bhs Inggris untuk mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, '22', '03', 'Jumlah mahasiswa yang mengikuti event mahasiswa tingkat nasional dan internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, '1', '04', 'Jumlah mahasiswa penerima beasiswa dari berbagai sumber', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, '2', '04', 'Jumlah mahasiswa penerima bantuan program Bidik Misi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, '3', '04', 'Jumlah mahasiswa penerima bantuan program Afirmasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, '4', '04', 'Jumlah kegiatan penunjang seleksi calon mahasiswa penerima program bidik misi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, '5', '04', 'Jumlah kegiatan penunjang seleksi calon mahasiswa penerima program afirmasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, '6', '04', 'Jumlah aplikasi/data base penunjang layanan beasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, '7', '04', 'Jumlah mahasiswa penerima beasiswa yang telayani', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, '8', '04', 'Jumlah Mahasiswa Penerima beasiswa yang dievaluasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, '1', '05', 'Jumlah pusat tempat Uji Kompetensi yang dikembangkan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, '2', '05', 'Jumlah Workshop Penguatan tempat uji kompetensi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, '3', '05', 'Jumlah Laboratorium yang menerima Insentif proposal hibah Laboratorium standar ISO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, '4', '05', 'Jumlah kegiatan pemenuhan elemen standar BAN-PT untuk Program Studi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, '5', '05', 'Jumlah prodi yang melakukan Reakreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, '6', '05', 'Jumlah Kegiatan Evaluasi diri jurusan/prodi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, '7', '05', 'Jumlah kegiatan pemenuhan elemen standar BAN-PT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, '8', '05', 'Jumlah kegiatan penyiapan Dokumen ISO oleh unit-unit kerja FEB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, '9', '05', 'Jumlah kegiatan Workshop Standarisasi prodi untuk akreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, '10', '05', 'Jumlah paket sarana dan prasarana untuk pemenuhan SNPT dan standar internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, '11', '05', 'Jumlah kegiatan Penguatan website FEB, Fakultas berbasis bilingual', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, '12', '05', 'Jumlah kegiatan pemenuhan elemen standar akreditasi internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, '13', '05', 'Jumlah Kegiatan Evaluasi diri jurusan/prodi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, '14', '05', 'Jumlah kegiatan workshop standarisasi prodi untuk akreditasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, '15', '05', 'Jumlah kegiatan penguatan organisasi untuk SPMI fakultas dan prodi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, '16', '05', 'Jumlah kegiatan Penguatan AIMA online dan QA award', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, '17', '05', 'Jumlah kegiatan Peningkatan program SPMI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, '18', '05', 'Jumlah kegiatan Penguatan program AIMA tingkat fakultas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, '19', '05', 'Jumlah prodi yang diaudit melaui Siklus Audit internal mutu akademik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, '20', '05', 'Jumlah kegiatan Pelaksanaan Audit investigasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, '21', '05', 'Jumlah auditor internal AIMA yang tersertifikasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, '22', '05', 'Jumlah Workshop Penjaminan Mutu untuk Dosen dan Mahasiswa, laboran dan tenaga administrasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, '23', '05', 'Workshop Penguatan manajemen bersertifikat ISO/KAN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, '24', '05', 'Jumlah peralatan pendidikan di laboratorium yang telah dikalibrasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, '25', '05', 'Jumlah laboratorium yang disediakan peralatan pendidikan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, '26', '05', 'Jumlah Workshop Praktikum pengendalian dan penjaminan mutu pada prodi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, '27', '05', 'Jumlah Workshop pengembangan modul Praktikum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, '28', '05', 'Jumlah paket peningkatan sarana dan prasarana laboratorium terpadu, stasiun riset dan University Farm', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, '29', '05', 'Jumlah Laboratorium yang bersertifikat ISO/KAN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, '30', '05', 'Jumlah POB yang disusun', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, '31', '05', 'Jumlah Dosen mengikuti Seminar/pelatihan/Workshop/ Pengembangan Mutu SDM dari Calon Lektor Kepala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, '32', '05', 'Jumlah dosen penerima beasiswa untuk melanjutkan S3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, '33', '05', 'Jumlah dosen calon peserta studi lanjut yang mengikjuti program intensif', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, '34', '05', 'Jumlah Dosen calon peserta studi lanjut yang mengikuti TOEFL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, '35', '05', 'Jumlah kegiatan Peningkatan Kerjasama perusahaan/instansi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, '36', '05', 'Jumlah kegiatan rintisan dan monitoring perusahaan dan instansi baru sesuai keahlian yang dimiliki oleh mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, '37', '05', 'Jumlah kegiatan aliansi strategis antar perguruan tinggi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, '38', '05', 'Jumlah kegiatan yang membangun komunikasi dengan pemerintah desa, kecamatan dan kabupaten terutama desa di sekitar kampus dan laboratorium FEB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, '39', '05', 'Jumlah Desa binaan Baru', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, '40', '05', 'Jumlah kegiatan pengembangan kerjasama hubungan akademik dan hubungan industrial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, '41', '05', 'Jumlah kegiatan penguatan institusi menjadi hasil pusat unggulan mendukung program nasional/daerah,', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, '42', '05', 'Jumlah kelas internasional yang dibuka baru dan dikembangkan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, '43', '05', 'Jumlah kelas internasional Kerjasama dengan mitra pemerintah dan lembaga lain', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, '44', '05', 'Jumlah kegiatan Promosi kerjasama internasional universitas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, '45', '05', 'Jumlah pelatihan bahasa asing untuk tenaga pengajar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, '46', '05', 'Jumlah kegiatan rintisan dan monitoring implementasi Kerjasama akademik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, '47', '05', 'Jumlah kegiatan rintisan dan monitoring implementasi Kerjasama peningkatan pendapatan PNBP FEB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, '48', '05', 'Jumlah kegiatan Promosi Peningkatan jumlah mahasiswa asing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, '49', '05', 'Jumlah kegiatan rintisan dan monitoring kerjasama pertukaran staf akademik dan mahasiswa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, '50', '05', 'Jumlah dosen dan mahasiswa yang terlibat pada event internasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, '51', '05', 'Jumlah bulan layanan perkantoran', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, '52', '05', 'Jumlah peralatan perkantoran yang diadakan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, '53', '05', 'Jumlah meubelair yang diadakan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, '54', '05', 'Luas bangunan yang dibangun atau direnovasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, '55', '05', 'Jumlah sarana kantor yang dipelihara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, '56', '05', 'Luas prasarana kantor yang dipelihara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, '57', '05', 'Jumlah kegiatan Pengembangan Pangkalan Data Jurusan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, '58', '05', 'Jumlah kegiatan peningkatan efektifitas pemanfaatan perpustakaan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, '59', '05', 'Jumlah kegiatan Penguatan managemen kepegawaian berbasis IT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, '60', '05', 'Jumlah Workshop kepemimpinan/leadership management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, '61', '05', 'Jumlah Workshop keselamatan dan keterampilan kerja pegawai', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, '62', '05', 'Jumlah Workshop tata kelola barang milik negara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, '63', '05', 'Jumlah prodi yang melakukan Digitalisasi informasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, '64', '05', 'Jumlah kegiatan pemeliharaan dan pengembangan data prodi berbasis informasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, '65', '05', 'Jumlah tenaga kependidikan yang mengikuti diklat teknis dan fungsional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, '66', '05', 'Jumlah kegiatan Penguatan kelembagaan TIK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, '67', '05', 'Jumlah Kegiatan Penguatan Kelembagaan Pustaka FEB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, '68', '05', 'Jumlah kegiatan Penguatan pendataan berbasis online', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, '69', '05', 'Jumlah tenaga kependidikan yang dbayar tunajangan kinerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, '70', '05', 'Jumlah Dosen Non LK dan GB yang dbayar tunjangan kinerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, '71', '05', 'Jumlah Calon Lektor Kepala yang mendapatkan bantuan Penelitian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, '72', '05', 'Jumlah Dosen Lektor Kepala yang dbayar tunajangan kinerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, '73', '05', 'Jumlah dosen mengikuti seminar/pelatihan/workshop/peng embangan mutu SDM Dari Calon Guru Besar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, '74', '05', 'Jumlah Calon Guru Besar yang mendapatkan bantuan Penelitian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, '75', '05', 'Jumlah Dosen Guru Besar yang dbayar tunajangan kinerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, '76', '05', 'Jumlah Dosen PNS yang diterima', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, '77', '05', 'Jumlah kegiatan Pengisian kinerja dosen secara online', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, '78', '05', 'Jumlah dosen yang tersertifikasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, '79', '05', 'Jumlah kegiatan pengembangan sistem kepangkatan dosen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, '80', '05', 'Jumlah kegiatan penyiapan Sistem Informasi Pengembangan Kualifikasi dan Prestasi Dosen', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, '81', '05', 'Jumlah kegiatan Penguatan perencanaan, penganggaran dan monitoring dan evaluasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, '82', '05', 'Jumlah kegiatan penguatan manajemen perencanaan dan penggaran sesuai standar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, '83', '05', 'Penilaian LAKIP “AA”', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, '84', '05', 'Opini Keuangan WTP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, '85', '05', 'Jumlah kegiatan Pelaksanaan Audit SPI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, '86', '05', 'Jumlah publikasi dan informasi FEB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, '87', '05', 'Jumlah kegiatan Monitoring Realisasi Pendapatan dan Biaya Operasional Secara Berkala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, '88', '05', 'Peraturan Rektor Tentang Perencanaan dan Penggunaan PNBP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, '89', '05', 'Jumlah Pemantauan Realisasi Pendapatan Terhadap Belanja Kegiatan Secara Berkala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, '90', '05', 'Jumlah Penyusunan SOP Pendapatan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, '91', '05', 'Jumlah Kegiatan Penyusunan TOR PNBP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, '92', '05', 'Peraturan Rektor Tentang Tarif Layanan Akademik', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, '93', '05', 'Jumlah kegiatan pemeliharaan aset bisnis dan layanan umum', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, '94', '05', 'Jumlah aplikasi pengelolaan aset yang dibangun', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, '95', '05', 'Jumlah kegiatan pengembagan kapasiitas Pengelolaan Unit Layanan Umum dan Bisnis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, '96', '05', 'Jumlah Unit Bisnis Baru yang diberikan bantuan operasional', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, '97', '05', 'Jumlah kegiatajn pengembagan dengan pelaku usaha', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, '98', '05', 'Jumlah SDM Pengelola aset uang mengikuti pengembangan SDM', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, '99', '05', 'Jumlah Kegiatan Promosi Produk Layanan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, '100', '05', 'Jumlah Aplikasi pengelolaan keuangan yang dibangun', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, '101', '05', 'Jumlah SOP Pengelolaan keuangan yang disempurnakan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, '102', '05', 'Jumlah SDM yang mengikuti pengembangan kapasitas pengelolaan keuangan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, '103', '05', 'Jumlah Kegiatan pendukung layanan tata kelola perencanaan dan penganggaran', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, '104', '05', 'Jumlah Kegiatan Evaluasi Temuan Secara Berkala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, '105', '05', 'Jumlah kegitan Koordinasi dengan Pihak Terkait terhadap Tindak Lanjut Temuan BPK baik secara Internal dan Eksternal', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbikupilar`
--

CREATE TABLE `tbikupilar` (
  `kode_iku` bigint(20) UNSIGNED NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbikupilar`
--

INSERT INTO `tbikupilar` (`kode_iku`, `uraian`, `satuan`, `pilar`, `created_at`, `updated_at`) VALUES
(1, 'Persentase lulusan Sl dan D4/03/D2 yang berhasil:\r\na. mendapatkan pekerjaan,\r\nb. melanjutkan studi; atau\r\nC. menjadi wiraswasta.\r\n', '%', 'Pilar 1\r\n', NULL, NULL),
(2, 'Mahasiswa di luar kampus:\r\nPersentase lulusan S1 dan D4/D3/D2 yang:\r\na. menghabiskan paling sedikit 20 (dua puluh) sks di luar karnpus; atau\r\nb. meraih prestasi paling rendah tingkat nasional.\r\n', '%', 'Pilar 1', NULL, NULL),
(3, 'Dosen di luar kampus:\r\nPersentase dosen yang berkegiatan tridarma di kampus lain, di QS100 berdasarkan bidang ilmu, (QS100 by subject), bekerja sebagai praktisi di dunia industri, atau membina mahasiswa yang berhasil meraih prestasi paling rendah tingkat nasional dalam 5 (lima) tahun terakhir.\r\n', '%', 'Pilar 3\r\n', NULL, NULL),
(4, 'Kualifikasi dosen:\r\nPersentase dosen tetap:\r\na. berkualifikasi akademik S3;.\r\nb. memiliki sertifikat kompetensi/ profesi yang diakui oleh industri dan dunia kerja; atau\r\nC. berasal dari kalangan praktisi profesional, dunia industri, atau dunia kerja.\r\n', '%', 'Pilar 5', NULL, NULL),
(5, 'Penerapan riset dosen:\r\nJumlah keluaran penelitian dan pengabdian kepada masyarakat yang berhasil mendapat rekognisi internasional atau diterapkan oleh masyarakat per jumlah dosen.\r\n', '%', 'Pilar 3', NULL, NULL),
(6, 'Kemitraan program studi:\r\nPersentase program studi S1 dan D4/D3/D2 yang melaksanakan kerja sama dengan mitra.\r\n', '%', 'Pilar 4', NULL, NULL),
(7, 'Pembelajaran dalam kelas:\r\nPersentase mata kuliah Sl dan D4/D3/D2 yang menggunakan metode pembelajaran pemecahan kasus (case method) atau pembelajaran kelompok berbasis projek (team­based project) sebagai sebagian bobot evaluasi.\r\n', '%', 'Pilar 1', NULL, NULL),
(8, 'Akreditasi lnternasional:\r\nPersentase program studi S1danD4/D3/D2 yang memiliki akreditasi atau sertifikat internasional yang diakui pemerintah.\r\n', '%', 'Pilar 5', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_etor`
--

CREATE TABLE `tbl_etor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_kerja` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_program` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latar_belakang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rasional` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dibaca` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oke` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_etor`
--

INSERT INTO `tbl_etor` (`id`, `unit_kerja`, `nama_program`, `no_tor`, `latar_belakang`, `rasional`, `tujuan`, `created_at`, `updated_at`, `dibaca`, `oke`) VALUES
(4, 'Akademik', '4', '4471 - 01.01.00 - 015.013.001', 'tes2', 'tes3', 'tes1', '2021-08-30 03:22:00', '2021-10-16 20:37:19', '0', '1'),
(6, 'Akademik', '1', '4471 - 01.01.00 - 015.012.001', 'tes', 'tes', 'tes', '2021-08-30 03:23:23', '2021-10-05 06:32:18', '1', '1'),
(7, 'Akademik', '1', '4471 - 01.01.00 - 015.012.001', 'tes', 'tes', 'tes', '2021-09-09 17:57:23', '2021-10-05 06:32:32', '1', ''),
(8, 'Akademik', '1', '4471 - 01.01.00 - 015.012.001', 'tes', 'tes', 'tes', '2021-09-12 06:43:37', '2021-10-05 06:32:25', '1', ''),
(9, 'Akademik', '1', '4471 - 01.01.00 - 015.012.001', 'tes eko', 'tes', 'tes', '2021-09-12 06:55:05', '2021-09-25 15:03:38', '1', ''),
(11, 'Akademik', '2', '4471 - 01.01.00 - 015.012.002', 'tes', 'tes', 'tes', '2021-10-16 14:15:36', '2021-10-16 14:15:36', '0', '0'),
(13, 'Akademik', '3', '4471 - 01.01.00 - 015.012.003', 'eko', 'eko', 'eko', '2021-10-16 14:20:56', '2021-10-16 14:32:42', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenjang`
--

CREATE TABLE `tb_jenjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_jenjang`
--

INSERT INTO `tb_jenjang` (`id`, `code_unit`, `code_jenjang`, `jenjang`, `date`) VALUES
(1, '01', '01', 'Akademik', '2021-06-29 07:42:14'),
(2, '01', '02', 'Keuangan', '2021-06-29 07:42:14'),
(3, '01', '03', 'Kepegawaian', '2021-06-29 07:42:14'),
(4, '01', '04', 'Perlengkapan', '2021-06-29 07:42:14'),
(5, '01', '05', 'Kemahasiswaan Alumni', '2021-06-29 07:42:14'),
(6, '01', '06', 'Humas, Publikasi & Media', '2021-06-29 07:42:14'),
(7, '01', '07', 'Layanan IT', '2021-06-29 07:42:14'),
(8, '02', '01', 'Diploma', '2021-06-29 07:42:14'),
(9, '02', '02', 'S1', '2021-06-29 07:42:14'),
(10, '02', '03', 'S2 ', '2021-06-29 07:42:14'),
(11, '03', '01', 'BP2EB ( Badan Penelitian dan Pengembangan Ekonomi & Bisnis)', '2021-06-29 07:43:12'),
(12, '03', '02', 'Labolatorium Komputer', '2021-06-29 07:43:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_unit`
--

INSERT INTO `tb_unit` (`id`, `code_unit`, `unit`, `date`) VALUES
(1, '01', 'Fakultas', '2021-06-29 07:35:17'),
(2, '02', 'Prodi', '2021-06-29 07:35:17'),
(3, '03', 'Unit Penunjang', '2021-06-29 07:35:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_uraian`
--

CREATE TABLE `tb_uraian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_unit` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_jenjang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_uraian` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_uraian`
--

INSERT INTO `tb_uraian` (`id`, `code_unit`, `code_jenjang`, `code_uraian`, `uraian`, `date`) VALUES
(1, '01', '01', '00', 'Akademik', '2021-06-29 08:24:56'),
(2, '01', '02', '00', 'Keuangan', '2021-06-29 08:24:56'),
(3, '01', '03', '00', 'Kepegawaian', '2021-06-29 08:24:56'),
(4, '01', '04', '00', 'Perlengkapan', '2021-06-29 08:24:56'),
(5, '01', '05', '00', 'Kemahasiswaan Alumni', '2021-06-29 08:24:56'),
(6, '01', '06', '00', 'Humas, Publikasi & Media', '2021-06-29 08:24:56'),
(7, '01', '07', '00', 'Layanan IT', '2021-06-29 08:24:56'),
(8, '02', '01', '01', 'Diploma Akuntansi', '2021-06-29 08:31:51'),
(9, '02', '01', '02', 'Diploma Perpajakan', '2021-06-29 08:31:57'),
(10, '02', '01', '03', 'Diploma Pariwisata', '2021-06-29 08:32:04'),
(11, '02', '02', '01', 'S1- EP ( Ekonomi Pembangunan)', '2021-06-29 08:31:39'),
(12, '02', '02', '02', 'S1 - Manajemen', '2021-06-29 08:31:39'),
(13, '02', '02', '03', 'S1 - Akuntansi', '2021-06-29 08:31:39'),
(14, '02', '03', '01', 'Magister Management', '2021-06-29 08:31:39'),
(15, '02', '03', '02', 'Magister Akuntansi', '2021-06-29 08:31:39'),
(16, '02', '03', '03', 'Magister Ilmu Ekonomi', '2021-06-29 08:32:38'),
(17, '03', '01', '00', 'BP2EB ( Badan Penelitian dan Pengembangan Ekonomi & Bisnis)', '2021-06-29 08:33:33'),
(18, '03', '02', '00', 'Labolatorium Komputer', '2021-06-29 08:33:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atasan_langsung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_atasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','manager','operator','verifikator') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `code`, `name`, `nip`, `atasan_langsung`, `nip_atasan`, `jabatan`, `email`, `phone`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'hendra', NULL, NULL, NULL, NULL, 'a@mail.com', NULL, 'admin', NULL, '$2y$10$3DMTwU8z1IjvwqyVI7lsQeGeC2zoQxzhT4NAqURrwTxA.9CzhXJG.', NULL, '2021-07-01 22:48:43', '2021-07-01 22:48:43'),
(20, '5', 'Eko Efri', NULL, 'Hendra Trisnayadi', '123456789', NULL, 'bd@mail.com', '0928838838', 'operator', NULL, '$2y$10$Wl0pr7KAOzsNyDeyCJg2fOaTy4l0kLkSBm2LP/8usLusYRK1pOLbG', NULL, '2021-07-07 03:50:56', '2021-07-07 05:28:38'),
(21, 'aaa', 'Tes1x', NULL, NULL, NULL, NULL, 'c@mail.com', NULL, 'admin', NULL, '$2y$10$5L9lKW/KTjyVjG8JCHGSU.YOWxJCKnrdR0m.7.SI7/g41SB0lS8we', NULL, '2021-07-07 17:38:17', '2021-07-07 17:50:40'),
(22, 'yyy', 'Tes2x', '123456789', NULL, NULL, 'Wakil Dekan', 'd@mail.com', NULL, 'manager', NULL, '$2y$10$PZoPSTQbjxP.dutY6WaPg.zGwFoku0EYxdZZKVrqQZCWC5xNylNU.', NULL, '2021-07-07 17:38:51', '2021-07-07 17:51:37'),
(23, '2', 'Tes3x', NULL, 'Tes4', '123456789', NULL, 'e@mail.com', '08234200212', 'operator', NULL, '$2y$10$2SZdz/JGcu.yCJmAEhUu6uDvy1VatU9.wYrr6.nyPa5jv6xGoYfpK', NULL, '2021-07-07 17:39:38', '2021-07-07 17:53:33'),
(24, 'xxx', 'Tes6x', '123456789', NULL, NULL, NULL, 'f@mail.com', NULL, 'verifikator', NULL, '$2y$10$iP9IH7x9pKD7.CBTE8qUQexPkmTM2XURc/h89eYX2FQwcIgvSqkgG', NULL, '2021-07-07 17:40:13', '2021-07-07 17:54:02'),
(26, 'aaa', 'Eko', NULL, NULL, NULL, NULL, 'm@mail.com', NULL, 'admin', NULL, '$2y$10$UOgkjhTTzon19s6C90Yz/eKRQ6YE/iebBB53RDgJB8M5YZ4zTrkU6', NULL, '2021-07-07 22:40:57', '2021-07-07 22:40:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_belanja`
--
ALTER TABLE `detail_belanja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `iku`
--
ALTER TABLE `iku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kodemak`
--
ALTER TABLE `kodemak`
  ADD PRIMARY KEY (`kode_mak`);

--
-- Indeks untuk tabel `kodemakrincian`
--
ALTER TABLE `kodemakrincian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `program1`
--
ALTER TABLE `program1`
  ADD PRIMARY KEY (`kode_program1`);

--
-- Indeks untuk tabel `program2`
--
ALTER TABLE `program2`
  ADD PRIMARY KEY (`id_program2`);

--
-- Indeks untuk tabel `program3`
--
ALTER TABLE `program3`
  ADD PRIMARY KEY (`id_program3`);

--
-- Indeks untuk tabel `table_ikk`
--
ALTER TABLE `table_ikk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_io`
--
ALTER TABLE `table_io`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbikk`
--
ALTER TABLE `tbikk`
  ADD PRIMARY KEY (`kode_ikk`);

--
-- Indeks untuk tabel `tbikkuraian`
--
ALTER TABLE `tbikkuraian`
  ADD PRIMARY KEY (`id_ikk_uraian`);

--
-- Indeks untuk tabel `tbikupilar`
--
ALTER TABLE `tbikupilar`
  ADD PRIMARY KEY (`kode_iku`);

--
-- Indeks untuk tabel `tbl_etor`
--
ALTER TABLE `tbl_etor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_unit` (`code_unit`);

--
-- Indeks untuk tabel `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_unit_code_unit_unique` (`code_unit`);

--
-- Indeks untuk tabel `tb_uraian`
--
ALTER TABLE `tb_uraian`
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
-- AUTO_INCREMENT untuk tabel `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `detail_belanja`
--
ALTER TABLE `detail_belanja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku`
--
ALTER TABLE `iku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kodemakrincian`
--
ALTER TABLE `kodemakrincian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `program2`
--
ALTER TABLE `program2`
  MODIFY `id_program2` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT untuk tabel `program3`
--
ALTER TABLE `program3`
  MODIFY `id_program3` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT untuk tabel `table_ikk`
--
ALTER TABLE `table_ikk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `table_io`
--
ALTER TABLE `table_io`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `table_kegiatan`
--
ALTER TABLE `table_kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbikkuraian`
--
ALTER TABLE `tbikkuraian`
  MODIFY `id_ikk_uraian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT untuk tabel `tbikupilar`
--
ALTER TABLE `tbikupilar`
  MODIFY `kode_iku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_etor`
--
ALTER TABLE `tbl_etor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_uraian`
--
ALTER TABLE `tb_uraian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jenjang`
--
ALTER TABLE `tb_jenjang`
  ADD CONSTRAINT `tb_jenjang_ibfk_1` FOREIGN KEY (`code_unit`) REFERENCES `tb_unit` (`code_unit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
