-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 07:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `no_induk` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `nama_walikelas` varchar(50) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `anak_ke` int(1) NOT NULL,
  `nama_ortu_wali` varchar(50) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat_jalan` varchar(50) NOT NULL,
  `alamat_desa_kelurahan` varchar(50) NOT NULL,
  `alamat_kecamatan` varchar(50) NOT NULL,
  `alamat_kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `eskul` varchar(50) NOT NULL,
  `nilai_eskul` varchar(10) NOT NULL,
  `agama_moral` text NOT NULL,
  `nilai_agama_moral` varchar(10) NOT NULL,
  `menerima_bahasa` text NOT NULL,
  `nilai_menerima_bahasa` varchar(10) NOT NULL,
  `mengungkapkan_bahasa` text NOT NULL,
  `nilai_mengungkapkan_bahasa` varchar(10) NOT NULL,
  `keaksaraan` text NOT NULL,
  `nilai_aksara` varchar(10) NOT NULL,
  `pen_umum` text NOT NULL,
  `nilai_pen_umum` varchar(10) NOT NULL,
  `konsep_bentuk` text NOT NULL,
  `nilai_konsep_bentuk` varchar(10) NOT NULL,
  `konsep_bilangan` text NOT NULL,
  `nilai_konsep_bilangan` varchar(10) NOT NULL,
  `motorik_k` text NOT NULL,
  `nilai_motorik_k` varchar(10) NOT NULL,
  `motorik_h` text NOT NULL,
  `nilai_motorik_h` varchar(10) NOT NULL,
  `kesehatan` text NOT NULL,
  `nilai_kesehatan` varchar(10) NOT NULL,
  `nikmat_lagu` text NOT NULL,
  `nilai_nikmat_lagu` varchar(10) NOT NULL,
  `tertarik_seni` text NOT NULL,
  `nilai_tertarik_seni` varchar(10) NOT NULL,
  `tjmurid` text NOT NULL,
  `nilai_tjmurid` varchar(10) NOT NULL,
  `emo_murid` text NOT NULL,
  `nilai_emo_murid` varchar(10) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `alfa` int(11) NOT NULL,
  `saran` text NOT NULL,
  `komentar` text NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`no_induk`, `nama_lengkap`, `nama_panggilan`, `nama_walikelas`, `kelas`, `semester`, `foto`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `anak_ke`, `nama_ortu_wali`, `ayah`, `ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_telp`, `alamat_jalan`, `alamat_desa_kelurahan`, `alamat_kecamatan`, `alamat_kabupaten`, `provinsi`, `eskul`, `nilai_eskul`, `agama_moral`, `nilai_agama_moral`, `menerima_bahasa`, `nilai_menerima_bahasa`, `mengungkapkan_bahasa`, `nilai_mengungkapkan_bahasa`, `keaksaraan`, `nilai_aksara`, `pen_umum`, `nilai_pen_umum`, `konsep_bentuk`, `nilai_konsep_bentuk`, `konsep_bilangan`, `nilai_konsep_bilangan`, `motorik_k`, `nilai_motorik_k`, `motorik_h`, `nilai_motorik_h`, `kesehatan`, `nilai_kesehatan`, `nikmat_lagu`, `nilai_nikmat_lagu`, `tertarik_seni`, `nilai_tertarik_seni`, `tjmurid`, `nilai_tjmurid`, `emo_murid`, `nilai_emo_murid`, `sakit`, `izin`, `alfa`, `saran`, `komentar`, `created_at`) VALUES
(123, 'Kevin Sanjaya', 'Kevin', 'Sari', 'A', 1, 'Gatebox3.jpg', 'Pria', 'Ciamis', '2015-10-21', 'Pria', 2, 'Cahyadi', '', '', 'Dokter', 'pns', 2147483647, 'Jalan Jendral Sudirman', 'karadenan', 'cibinong', 'Bogor', 'jawabarat', 'Drumband', 'A', 'Baik', '', 'Mengerti dua perintah yang diberikan bersamaan serta mengenal perbendaharaan\r\nkata mengenal kata sifat (nakal,pelit,baik,hati,berani,baik,jelek,dsb )\r\nBerkembang Sangat Baik\r\n', '', 'Mengulang kalimat sederhana serta menjawab pertanyaan sesuai pertanyaan\r\nBerkembang Sangat Baik\r\n', '', 'Berkembang Sangat Baik', '', 'Mengenal benda berdasarkan fungsi (pisau untuk memotong pensil untuk menulis)\r\nserta mengenal konsep sederhana dalam kehidupan sehari-hari (gerimis,hujan,\r\ngelap,terang,temaram) Berkembang Sangat Baik\r\n', '', 'Mengenal pola (mis : AB-AB dan ABC-ABC) dan mengulanginya Berkembang Sangat Baik', '', 'Mengenal konsep bilangan, lambang bilangan, lambang huruf tingkatkan dalam bimbingan dan latihan', '', 'Menirukan gerakan binatang, pohon tertiup angin, pesawat terbang, dsb Berkembang Sangat Baik.', '', 'Membuat garis vertical,horizontal,lengkung kiri/kanan miring kiri/kanan dan  lingkaran\r\nBerkembang Sangat Baik.\r\n', '', 'Sehat Sekali', '', 'Senang mendengarkan berbagai macam music atau lagu ke sukaannya Berkembang Sangat Baik.', '', 'Membentuk berdasarkan objek yang dilihatnya mis: dengan plastisin, tanahliat Berkembang Sangat Baik', '', 'asdas', '', 'asdasdas', '', 1, 2, 4, 'Ditingkatkan Lagi Belajarnya', 'Terimakasih ibu telah membimbing anak saya', 2019),
(543, 'Andryan', 'Bam', 'Novita', 'B', 1, 'Gatebox4.jpg', 'Pria', 'Ciamis', '2019-10-10', 'Pria', 2, 'Herman', '', '', 'Polisi', 'Ibu Rumah Tannga', 2147483647, 'Jalan Jendral Sudirman', 'karadenan', 'cibinong', 'Bogor', 'jawabarat', 'Drumband', 'A', 'baik', '', 'Sangat Baik merespon', '', 'Sangat Lancar', '', 'Sangat Lancar', '', 'Bagus Sekali', '', 'Bagus Sekali', '', 'Bagus Sekali', '', 'Sudah dapat mengikuti gerakan', '', 'Sudah Bagus Sekali', '', 'Sehat Sekali', '', 'Sangat Mantap', '', 'Tertarik sekali', '', 'asdas', '', 'asdas', '', 1, 2, 3, 'tidak Ada', '', 2019),
(1234, 'Bambang', 'Bang', 'Sari', 'B', 1, 'default6.jpg', 'Pria', 'Ciamis', '2019-11-05', 'Pria', 2, 'Ahmad', '', '', 'PNS', 'Dokter', 2147483647, 'karadenan', 'karadenan', 'cibinong', 'Bogor', 'jawabarat', 'Tari Jaipong', 'A', 'sangat baik', '', 'Sangat Baik merespon', '', 'Sangat Lancar', '', 'Sangat Lancar', '', 'Bagus Sekali', '', 'Bagus Sekali', '', 'Bagus Sekali', '', 'Sudah dapat mengikuti gerakan', '', 'Sudah Bagus Sekali', '', 'Sehat Sekali', '', 'Sangat Mantap', '', 'Tertarik sekali', '', 'asdas', '', 'asdas', '', 1, 2, 3, 'tidak Ada', '', 2019),
(76543, 'aw', 'we', 'Sari', 'A', 2, '3dcuy21.jpg', 'Pria', '', '0000-00-00', '-- Pilih Agama --', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 2019),
(6545842, 'wow', 'wow', 'Novi', 'B', 2, 'WA121.jpeg', 'Wanita', 'wow', '2019-11-25', 'Pria', 1, 'wow', 'wow', 'wow1', 'pns', 'pns', 76543, 'karadenan', 'asdas', 'sadas', 'Bogor', 'jawabarat', 'Drumband', 'A', 'asdasdas', 'A', 'asdsadas', 'A', 'asdasdsa', 'B', 'asdsad', 'C', 'asdasdas', 'D', 'asdsad', 'A', 'sadasd', 'A', 'asdas', 'A', 'afwegasd', 'A', 'asdasdasd', 'A', 'asdasd', 'B', 'asdasd', 'C', 'asdsad', 'A', 'asdasd', 'A', 2, 1, 3, 'ga ada', '', 2019),
(9876543, 'caur', '', '-- Pilih Wali Kelas --', '--', 1, 'WA122.jpeg', '-- Pilih Jenis ', '', '0000-00-00', '-- Pilih Agama --', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 2019),
(23456789, 'aasda', 'sadas', 'Novi', 'A', 2, '3dcuy53.jpg', 'Pria', 'asd', '2019-11-26', 'Pria', 2, 'Ahmad', 'ahmad', 'yani', 'Dokter', 'Atlet Badminton', 123, 'Jalan Jendral Sudirman', 'asdas', 'cibinong', 'Bogor', 'jawabarat', 'Pencak Silat', 'B', 'sangat baik', '', 'baik', '', 'baik', '', 'baik', '', 'asd', '', 'asd', '', 'asd', '', 'asd', '', 'asd', '', 'asd', '', 'asd4', '', 'asd3', '', 'asd2', '', 'asd1', '', 1, 2, 3, 'asdsadsa', '', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `data_pelamar`
--

CREATE TABLE `data_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `Pendidikan_Terakhir` varchar(3) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `jenis_disabilitas` varchar(25) NOT NULL,
  `kompetensi` varchar(30) NOT NULL,
  `created_at` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelamar`
--

INSERT INTO `data_pelamar` (`id_pelamar`, `id_perusahaan`, `nama`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `Pendidikan_Terakhir`, `alamat`, `no_hp`, `foto`, `jenis_disabilitas`, `kompetensi`, `created_at`) VALUES
(1, 13, 'mamat', 'jakarta', '2019-08-21', 'Pria', 'sma', 'jakarta', '098765456789', 'colorful-triangles11.jpg', 'asdjasdas', 'komputer', 2019),
(2, 13, 'dani', 'jakarta', '1997-06-09', 'Pria', 'S2', 'jakarta', '09887656789', 'colorful-triangles23.jpg', 'Disabilitas Fisik', 'komputer', 2019),
(3, 13, 'azman', 'jakarta', '1998-07-28', 'Pria', 'S2', 'jakarta', '0854567', 'colorful-triangles24.jpg', 'Disabilitas Fisik', 'komputer', 2019),
(4, 13, 'aku', 'adalah', '1998-07-28', 'Pria', 'S2', 'jakarta', '09765456789', 'colorful-triangles33.jpg', 'Disabilitas Wicara', 'Desain Grafis', 2019),
(5, 13, 'edo', 'jakarta', '2019-08-07', 'Pria', 'S3', 'jakarta', '0889587878', 'colorful-triangles34.jpg', 'Disabilitas Rumah', 'Komputer', 2019),
(6, 6, 'Santoso', 'Jakarta', '1998-08-25', 'Pria', 'SMK', 'Jakarta', '08122222384', 'guaganteng.jpg', 'Disabilitas Fisik', 'Komputer', 2019),
(7, 7, 'Adi', 'Bogor', '1990-09-10', 'Pria', 'S1', 'Bogor', '086288282', 'colorful-triangles25.jpg', 'Disabilitas Fisik', 'Komputer', 2019),
(8, 6, 'kuncoro', 'jakarta', '1996-07-23', 'Pria', 'SMP', 'jakarta', '0812456789', 'default8.jpg', 'Disabilitas Fisik', 'Komputer', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `usia` tinyint(3) NOT NULL,
  `jenis_kelamin_guru` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `foto`, `nip`, `usia`, `jenis_kelamin_guru`, `alamat`, `no_hp`, `created_at`) VALUES
(1, 'Novi', 'Gatebox1.jpg', '212345654', 20, 'Perempuan', 'Jakarta', '081234567', 2019),
(2, 'Sari', 'tk_cuy.jpg', '765432345', 22, 'Laki-Laki', 'jakarta', '098765432', 2019),
(3, 'Novita', 'default.jpg', '1235678876543', 30, 'Perempuan', 'Bogor', '0872826812', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `jml_murid` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `wali`, `jml_murid`, `created_at`) VALUES
(1, 'A', 'Riri', 20, 2019),
(2, 'B', 'Adi Sanjaya', 10, 2019),
(3, 'C', 'Rara Cindy', 12, 2019),
(4, 'D', 'Wahyu', 30, 2019),
(5, 'E', 'Haykal', 5, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `no_induk` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `program_pengembangan` varchar(100) NOT NULL,
  `bb` varchar(11) NOT NULL,
  `mb` varchar(11) NOT NULL,
  `bsh` varchar(10) NOT NULL,
  `bsb` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi_sekolah` varchar(50) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nuks_kepsek` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi_sekolah`, `kepsek`, `nuks_kepsek`, `logo`) VALUES
(1, 'TK AL IKHLAS', 'Bogor', 'karadenan', 'cibinong', 'Kabupaten Bogor', 'Jawa Barat', 'Pradipta Dwi Haryadi', '15116772', 'WA13.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `no_induk` varchar(30) NOT NULL,
  `nama_ortu_wali` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` tinyint(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `no_induk`, `nama_ortu_wali`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Pradipta Dwi Haryadi', '1234', '', 'haryadipradipta@gmail.com', 'guaganteng1.jpg', '$2y$10$04DzOTIWBXommjxoyK5CfuKmLB0Jym7BST7gMpScktOUB2cbx/qyy', 4, 1, 1555857393),
(6, 'Admin', '1234', '', 'admin@gmail.com', 'guaganteng2.jpg', '$2y$10$hn.p7I3aLQ8ozvgyDHOtL.EiFwpuswgJfJjLxvRJIAkZoszRbDz9e', 1, 1, 1555861392),
(7, 'Elevenia', '', '', 'company@gmail.com', 'elevenia_baru.png', '$2y$10$TRiiwe/hi/E6ki6r9oXPge9iZAOzMtX6lQPapnPE.Sk8320NOZ.lq', 3, 1, 1557123461),
(9, 'user', '123', '', 'user@gmail.com', 'guaganteng3.jpg', '$2y$10$UgvKaQdZFA8kIT7eW4VXiO/tMJe362e.0TMYb1mOFzK9Z5ENKDs2q', 2, 1, 1561125978),
(13, 'TK Al Ikhlas', '', '', 'sekolah@gmail.com', 'tk_cuy.jpg', '$2y$10$k1FbcOb20sOmN24yx1j4IOMUSvyEhjKe46qSE.UpW/xK047cmR5ZO', 3, 1, 1565966435),
(14, 'Bambang', '1234', 'Ahmad', 'murid@gmail.com', 'default.jpg', '$2y$10$nWx3N3ilQ5Y6n2cAbtBrBuFfH9mIjaJ9fLtrw4GPRN28G6aC9vpim', 2, 1, 1573711892),
(15, 'andryan', '543', '', 'user2@gmail.com', 'default.jpg', '$2y$10$L4VRQ9VVDZO50Q9LoWBDReLER/KckwA1HdIYifBO2OEtfGxcwxr6y', 2, 1, 1573842773),
(16, 'andryan', '543', 'herman', 'user3@gmail.com', 'default.jpg', '$2y$10$cE.5F1EFcd.64b43FMTc5eRbyKAvgcVS/62DQayyGRdrFCMGKsRc6', 2, 1, 1573843486),
(18, 'Kevin Sanjaya', '1234', 'Cahyadi', 'koplakanda4@gmail.com', 'default.jpg', '$2y$10$rBhERBBEFyaBXt3O3dONf.d7lOW/bID7ZZDATl66EkT.LwyQ/4tnS', 2, 1, 1573890762);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(12, 1, 6),
(28, 1, 2),
(30, 3, 3),
(31, 2, 4),
(34, 1, 7),
(36, 1, 10),
(38, 5, 2),
(39, 5, 3),
(41, 5, 5),
(44, 5, 10),
(48, 6, 4),
(50, 4, 7),
(52, 3, 5),
(64, 4, 5),
(68, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_job_vacancy`
--

CREATE TABLE `user_job_vacancy` (
  `id` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `image` varchar(128) NOT NULL,
  `job_vacancy` varchar(20) NOT NULL,
  `requirement` text NOT NULL,
  `special_requirements` text NOT NULL,
  `note` text NOT NULL,
  `address` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_job_vacancy`
--

INSERT INTO `user_job_vacancy` (`id`, `id_perusahaan`, `company_name`, `image`, `job_vacancy`, `requirement`, `special_requirements`, `note`, `address`, `status`, `created_at`) VALUES
(1, 13, 'tokopedia', 'tokopedia.png', 'Admin', 'Bisa Mengoprasikan komputer\r\n,Mempunyai semangat yang tinggi dalam belajar, mampu bekerja dalam tim, bisa berinteraksi dengan orang lain', 'Semua Jenis Disabilitas', 'Diutamakan Perempuan', 'Jakarta', 1, 2019),
(2, 7, 'BukaLapak', 'colorful-triangles25.jpg', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 0, 2019),
(3, 6, 'PT. HM SAMPOERNA Tbk.', 'sampurna.png', 'Admin', 'Bisa Mengoprasikan komputer\r\n,Mempunyai semangat yang tinggi dalam belajar, mampu bekerja dalam tim, bisa berinteraksi dengan orang lain', 'Disabilitas Fisik', 'Di dahulukan laki laki tetapi perempuan boleh melamar', 'Jakarta', 1, 2019),
(4, 7, 'Elevenia', 'elevenia_baru.png', 'Programmer', 'Bisa Mengoprasikan komputer\r\n,Mempunyai semangat yang tinggi dalam belajar, mampu bekerja dalam tim, bisa berinteraksi dengan orang lain', 'semua jenis disabilitas', 'Mempunyai pengalaman menjadi nilai plus', 'Jakarta', 1, 2019),
(5, 6, 'Bank DKI', 'bank_dki.jpg', 'Teller Bank', 'Bisa Mengoprasikan komputer\r\n,Mempunyai semangat yang tinggi dalam belajar, mampu bekerja dalam tim, bisa berinteraksi dengan orang lain', 'semua jenis disabilitas', '-', 'jakarta', 1, 2019),
(7, 6, 'Shopee', 'shope.png', 'Back-End Programmer', 'Mampu bekerja dalam tim, bisa mengoprasikan komputer,mempunyai logika yang baik, memiliki semangat belajar', 'Semua jenis disabilitas, menguasai oop php,menguasai CodeIgniter', 'Mempunyai pengalaman menjadi nilai khusus', 'Jakarta', 1, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(4, 'User'),
(5, 'Sekolah'),
(6, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Guru'),
(4, 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `url` text NOT NULL,
  `icon` text NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 6, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 4, 'Rapot', 'user/datarapor', 'fas fa-fw fa-receipt', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(7, 5, 'Data Sekolah', 'sekolah/sekolah', 'fas fa-fw fa-school', 1),
(8, 5, 'Profile Guru', 'sekolah/guru', 'fas fa-fw fa-chalkboard-teacher', 1),
(9, 5, 'Data Rapor', 'sekolah/datarapor', 'fas fa-fw fa-receipt', 1),
(10, 5, 'Profile', 'sekolah', 'fas fa-fw fa-building', 1),
(11, 5, 'Edit Profile', 'sekolah/edit', 'fas fa-fw fa-edit', 1),
(12, 5, 'Change Password', 'sekolah/changepassword', 'fas fa-fw fa-key', 1),
(13, 2, 'Job Vacancy', 'home', 'fas fa-fw fa-building', 1),
(14, 6, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(15, 4, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(16, 4, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(17, 4, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(24, 1, 'Data Rapor', 'admin/datarapor', 'fas fa-fw fa-book', 1),
(25, 1, 'Data Sekolah', 'admin/sekolah', 'fas fa-fw fa-school', 1),
(26, 1, 'Profile Guru', 'admin/guru', 'fas fa-fw fa-chalkboard-teacher', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `data_pelamar`
--
ALTER TABLE `data_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_job_vacancy`
--
ALTER TABLE `user_job_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelamar`
--
ALTER TABLE `data_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user_job_vacancy`
--
ALTER TABLE `user_job_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
