-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 04:44 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
  `id_kelas` varchar(5) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `usia` tinyint(3) NOT NULL,
  `jenis_kelamin_guru` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `id_kelas`, `foto`, `nip`, `usia`, `jenis_kelamin_guru`, `alamat`, `no_hp`, `created_at`) VALUES
(1, 'Novi', '1', 'default.jpg', '212345654', 20, 'Perempuan', 'Jakarta', '081234567', 2019),
(2, 'Sari', '2', 'default.jpg', '765432345', 22, 'Perempuan', 'jakarta', '098765432', 2019),
(3, 'Novita', '3', 'default.jpg', '1235678876543', 30, 'Perempuan', 'Bogor', '0872826812', 2019),
(4, 'Agus', '4', 'default.jpg', '3221515', 22, 'Laki-Laki', 'Bogor', '084512316', 2020),
(5, 'setia', '12', 'default.jpg', '123456', 127, 'Laki-Laki', '2131', '2312', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jml_murid` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `jml_murid`, `created_at`) VALUES
(1, '1A', 20, 2019),
(2, '1B', 10, 2019),
(3, '2A', 12, 2019),
(4, '2B', 30, 2019),
(5, '3A', 5, 2019),
(7, '4A', 10, 2019),
(8, '4B', 30, 2020),
(10, '5B', 20, 2020),
(12, '6A', 40, 2020),
(13, '6B', 30, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `kkm` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `kkm`) VALUES
(1, 'PKN', 70),
(2, 'Bahasa Indonesia', 70),
(3, 'Matematika', 70),
(4, 'Pendidikan IPA', 70),
(5, 'Pendidikan IPS', 70),
(6, 'Bahasa Inggris', 75),
(7, 'Olahraga', 70),
(8, 'Seni Budaya', 70);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `no_induk` int(13) NOT NULL,
  `nama_murid` varchar(50) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `anak_ke` tinyint(1) NOT NULL,
  `nama_ortu_wali` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat_jalan` varchar(50) NOT NULL,
  `alamat_desa_kelurahan` varchar(50) NOT NULL,
  `alamat_kecamatan` varchar(50) NOT NULL,
  `alamat_kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`no_induk`, `nama_murid`, `nama_panggilan`, `id_kelas`, `semester`, `foto`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `anak_ke`, `nama_ortu_wali`, `ayah`, `ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_telp`, `alamat_jalan`, `alamat_desa_kelurahan`, `alamat_kecamatan`, `alamat_kabupaten`, `provinsi`) VALUES
(123456, 'Sandi', 'Ahmada', '2', 2, 'default.jpg', '123456', 'asd', '2020-07-29', '123456', 2, 'asd', 'asd', 'asd', 'asd', 'asd', '87', 'asd', 'asd', 'asd', 'asd', 'asd'),
(456123, 'Pradipta Dwi Haryadi', 'dipta', '1', 2, 'foto_berdasi1.jpg', '456123', 'bogor', '2020-08-11', '456123', 2, 'Jarjit', 'epan', 'kinah', 'pns', 'pns', '0812345678', 'Kenangan', 'karadenan', 'cibinong', 'bogor', 'jawabarat');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `no_induk` varchar(11) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `angka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `no_induk`, `mapel`, `angka`) VALUES
(1, '456123', 'Bahasa Indonesia', 90),
(5, '456123', 'Bahasa Inggris', 80),
(7, '456123', 'Seni Budaya', 90),
(8, '456123', 'Pendidikan IPS', 80),
(11, '123456', 'PKN', 90),
(13, '456123', 'Matematika', 90),
(14, '456123', 'Pendidikan IPA', 90),
(15, '456123', 'Olahraga', 80),
(16, '456123', 'PKN', 89),
(17, '123456', 'Bahasa Indonesia', 90),
(18, '123456', 'Matematika', 80);

-- --------------------------------------------------------

--
-- Table structure for table `rapot`
--

CREATE TABLE `rapot` (
  `id_rapot` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `sakit` tinyint(3) NOT NULL,
  `izin` tinyint(3) NOT NULL,
  `alfa` tinyint(3) NOT NULL,
  `ekskul` varchar(30) NOT NULL,
  `nilai_ekskul` varchar(1) NOT NULL,
  `akhlak` varchar(1) NOT NULL,
  `kedisiplinan` varchar(1) NOT NULL,
  `kerajinan` varchar(1) NOT NULL,
  `kebersihan` varchar(1) NOT NULL,
  `saran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapot`
--

INSERT INTO `rapot` (`id_rapot`, `no_induk`, `id_kelas`, `sakit`, `izin`, `alfa`, `ekskul`, `nilai_ekskul`, `akhlak`, `kedisiplinan`, `kerajinan`, `kebersihan`, `saran`) VALUES
(6, 123456, 2, 2, 2, 1, 'Paskibra', 'B', 'A', 'A', 'A', 'A', 'ditingkatkan lagi belajarnya'),
(8, 456123, 1, 1, 1, 1, 'Paskibra', 'A', 'A', 'A', 'A', 'A', 'ditingkatkan lagi belajarnya');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi_sekolah` varchar(30) NOT NULL,
  `kepsek` varchar(50) NOT NULL,
  `nuks_kepsek` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL,
  `logo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `provinsi_sekolah`, `kepsek`, `nuks_kepsek`, `tahun_ajaran`, `logo`) VALUES
(1, 'SDN SASANA WIYATA 1', 'Bogor', 'Pomad', 'Ciluar', 'Kota Bogor', 'Jawa Barat', 'Pradipta Dwi Haryadi', '15116772', '2020/2021', 'tutwuri2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `no_induk` varchar(30) NOT NULL,
  `id_kelas` int(11) NOT NULL,
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

INSERT INTO `user` (`id`, `name`, `no_induk`, `id_kelas`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Pradipta Dwi Haryadi', '1234', 1, 'haryadipradipta@gmail.com', 'guaganteng1.jpg', '$2y$10$hn.p7I3aLQ8ozvgyDHOtL.EiFwpuswgJfJjLxvRJIAkZoszRbDz9e', 3, 1, 1555857393),
(6, 'Admin', '1234', 2, 'admin@gmail.com', 'guaganteng2.jpg', '$2y$10$hn.p7I3aLQ8ozvgyDHOtL.EiFwpuswgJfJjLxvRJIAkZoszRbDz9e', 1, 1, 1555861392),
(9, 'user', '123', 0, 'user@gmail.com', 'guaganteng3.jpg', '$2y$10$UgvKaQdZFA8kIT7eW4VXiO/tMJe362e.0TMYb1mOFzK9Z5ENKDs2q', 2, 1, 1561125978),
(13, 'TK Al Ikhlas', '', 1, 'sekolah@gmail.com', 'tk_cuy.jpg', '$2y$10$k1FbcOb20sOmN24yx1j4IOMUSvyEhjKe46qSE.UpW/xK047cmR5ZO', 3, 1, 1565966435),
(14, 'Sandi', '123456', 2, 'murid@gmail.com', 'default.jpg', '$2y$10$nWx3N3ilQ5Y6n2cAbtBrBuFfH9mIjaJ9fLtrw4GPRN28G6aC9vpim', 2, 1, 1573711892),
(15, 'andryan', '543', 0, 'user2@gmail.com', 'default.jpg', '$2y$10$L4VRQ9VVDZO50Q9LoWBDReLER/KckwA1HdIYifBO2OEtfGxcwxr6y', 2, 1, 1573842773),
(16, 'andryan', '543', 0, 'user3@gmail.com', 'default.jpg', '$2y$10$cE.5F1EFcd.64b43FMTc5eRbyKAvgcVS/62DQayyGRdrFCMGKsRc6', 2, 1, 1573843486),
(18, 'Kevin Sanjaya', '1234', 0, 'koplakanda4@gmail.com', 'default.jpg', '$2y$10$rBhERBBEFyaBXt3O3dONf.d7lOW/bID7ZZDATl66EkT.LwyQ/4tnS', 4, 1, 1573890762),
(24, 'Sandi', '123456', 2, 'murid2@gmail.com', 'default.jpg', '$2y$10$ZybIPvcjLRjpVrydIYu56u5G.xflPtkiVcTeWWjOhMyMBzGCZCt8O', 2, 1, 1598779295),
(27, 'Pradipta Dwi Haryadi', '456123', 1, 'murid3@gmail.com', 'foto_berdasi.jpg', '$2y$10$WpeORwtDZbSKgQi7XAu2AeaVK.yI5MkqnOmRUmMSZALUpKMnBJObm', 2, 1, 1598779550),
(29, 'Novi', '', 1, 'guru@gmail.com', 'default.jpg', '$2y$10$8.uKSdK/bVYLllc4p/a4rulxOMabKF9lNVs2qZCnnlDvcICwUpdNe', 3, 1, 1598781050),
(30, 'Sari', '', 2, 'guru2@gmail.com', 'default.jpg', '$2y$10$AtjRkjJOmgqMccSkkd6JWOTsZJKDhpFnl9TBtdhKoUblPlLQEhada', 3, 1, 1598781064);

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
(36, 1, 10),
(38, 5, 2),
(39, 5, 3),
(41, 5, 5),
(44, 5, 10),
(48, 6, 4),
(64, 4, 5),
(65, 3, 7);

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
(6, 'Menu'),
(7, 'Guru');

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
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(7, 5, 'Data Sekolah', 'sekolah/sekolah', 'fas fa-fw fa-school', 1),
(8, 5, 'Data Wali Kelas', 'sekolah/guru', 'fas fa-fw fa-chalkboard-teacher', 1),
(9, 5, 'Data Rapor', 'sekolah/datarapor', 'fas fa-fw fa-receipt', 1),
(10, 5, 'Profile', 'sekolah', 'fas fa-fw fa-building', 1),
(11, 5, 'Edit Profile', 'sekolah/edit', 'fas fa-fw fa-edit', 1),
(12, 5, 'Change Password', 'sekolah/changepassword', 'fas fa-fw fa-key', 1),
(13, 2, 'Job Vacancy', 'home', 'fas fa-fw fa-building', 1),
(14, 6, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(25, 1, 'Identitas Sekolah', 'admin/sekolah', 'fas fa-fw fa-school', 1),
(26, 1, 'Data Wali Kelas', 'admin/guru', 'fas fa-fw fa-chalkboard-teacher', 1),
(27, 1, 'Data Mata Pelajaran', 'admin/mapel', 'fas fa-fw fa-list', 1),
(28, 1, 'Data Kelas', 'admin/kelas', 'fas fa-fw fa-list-alt', 1),
(29, 1, 'Data Murid', 'admin/murid', 'fas fa-fw fa-user-graduate', 1),
(31, 1, 'Data Rapot', 'admin/datarapot', 'fas fa-fw fa-book', 1),
(32, 7, 'Data Rapot', 'guru/datarapot', 'fas fa-fw fa-book', 1),
(33, 7, 'Profile', 'guru', 'fas fa-fw fa-user-tie', 1),
(35, 7, 'Edit Profile', 'guru/edit', 'fas fa-fw fa-user-edit', 1),
(36, 7, 'Change Password', 'guru/changepassword', 'fas fa-fw fa-user-tie', 1),
(37, 4, 'Data Rapot', 'user/datarapot', 'fas fa-fw fa-receipt', 1),
(38, 4, 'My Profile ', 'user', 'fas fa-fw fa-user', 1),
(39, 4, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(40, 4, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

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
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'murid2@gmail.com', 'EVHjha1qRS7RE8B4huArjw0eoxWJAWjLftd9S/K4SfI=', 1598778665),
(2, 'murid2@gmail.com', 'phjMCIso/+VCjUHwjTZFQDOA/5PGQQHaGWEviCthIOo=', 1598778997),
(3, 'murid2@gmail.com', 'Mu6fNGYc09jlmyNUasVHRvwljS4HAnKGljCbsb3nJW8=', 1598779062),
(4, 'murid2@gmail.com', 'K1D4IcbJ4wBAzZX/Tx4/VvA9VO6fi67NG977uWqfzCM=', 1598779109),
(5, 'murid2@gmail.com', 'WGv3v3pVszF2wfm2qh7sjsRtKVZRMb5ADh/g2lqnPow=', 1598779183),
(6, 'murid2@gmail.com', 'QfaB3BlzMOCxe6TdKjag8295WSRYhP0b+u5jxX0KK7k=', 1598779295),
(7, 'murid3@gmail.com', 'UTueq5iw7yLz0M7pTYxxz/K+Q/WMKXLs/t26G2GwIpU=', 1598779443),
(8, 'murid4@gmail.com', 'B4Kf5CN7OPjVZEJX4bvWznjylR1isdyC6aY4jIVGeOQ=', 1598779531),
(9, 'murid3@gmail.com', '+UFQMGVmeNIPrXkeJA9m1tSh1GXEYJU78tyRSoY2KU0=', 1598779550),
(10, 'guru@gmail.com', 'oOV5zduDjfQHSwUWxsACAOSDSV1HmDtnaM7M7Jyvzjs=', 1598781016),
(11, 'guru@gmail.com', 'qwHY5uZkk8vVSoirgSbnD5711niNCtKPXtnRvypVpwk=', 1598781050),
(12, 'guru2@gmail.com', 'Ues9kyS1bq/RXv1SUyWIPeazW8lQ3YB1X9aQxm+7QH4=', 1598781064);

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
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `rapot`
--
ALTER TABLE `rapot`
  ADD PRIMARY KEY (`id_rapot`),
  ADD KEY `no_induk` (`no_induk`,`id_kelas`),
  ADD KEY `no_induk_2` (`no_induk`,`id_kelas`),
  ADD KEY `no_induk_3` (`no_induk`);

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
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `no_induk` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456124;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rapot`
--
ALTER TABLE `rapot`
  MODIFY `id_rapot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_job_vacancy`
--
ALTER TABLE `user_job_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
