-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 05:05 PM
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
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `perusahaan` varchar(30) DEFAULT NULL,
  `penerima` varchar(50) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `alamat_penerima` text NOT NULL,
  `po` varchar(30) NOT NULL,
  `wo` varchar(30) NOT NULL,
  `nospb` varchar(30) NOT NULL,
  `kd_part` varchar(11) NOT NULL,
  `part` varchar(50) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_berita` date NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `nosurat`, `perusahaan`, `penerima`, `alamat_pengirim`, `alamat_penerima`, `po`, `wo`, `nospb`, `kd_part`, `part`, `jml`, `tgl_berita`, `keterangan`) VALUES
(3, 'AK01', 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', 'Jakarta', 'Bekasi', '50', '123', '09', '02', 'Baut', 332, '2020-09-30', ''),
(4, 'AK02', 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', 'Jakarta', 'Bekasi', '20', '20', '10', '03', 'sabun', 5, '2020-09-30', ''),
(5, 'AK01', 'PT. Metindo Erasakti', 'PT. Metindo Erasakti', '', '', '', '', '', '', '', 510, '2020-10-08', ''),
(6, '03', 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', '', '', '', '', '', '', '', 600, '2020-10-09', 'asd'),
(7, '04', 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', '', '', '', '', '', '', '', 500, '2020-10-08', 'wew');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_surat` varchar(50) NOT NULL,
  `plat` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id_driver`, `nama`, `id_surat`, `plat`, `tgl`, `ket`) VALUES
(1, 'Udin', '1', 'Iw 02154 FW', '2020-09-27', 'Sampai Tujuan'),
(2, 'Anjay', '2', '21515', '2020-09-27', 'Sampai Tujuan');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `kd_mt` varchar(11) NOT NULL,
  `material` varchar(50) NOT NULL,
  `ket` varchar(50) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`kd_mt`, `material`, `ket`, `created_at`) VALUES
('abc', 'test12', 'waasdas', '2020-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `kd_part` varchar(11) NOT NULL,
  `part` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`kd_part`, `part`, `ket`, `created_at`) VALUES
('01', 'polibox', 'minjem', '2020-09-27'),
('02', 'Baut', '23as0d3as', '2020-09-27'),
('03', 'sabun', 'bolong', '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `logo` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `telp`, `logo`, `created_at`) VALUES
(1, 'PT. Metindo Erasakti', 'Bekasi', '(0219) 5454685', 'tutwuri(1).png', '2020-09-19'),
(2, 'PT TRI SUKSES METAL', 'Bekasi', '0251 123456', 'LOGO_TMP2.jpg', '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `polibox`
--

CREATE TABLE `polibox` (
  `id_polibox` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `part` varchar(50) NOT NULL,
  `jml` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polibox`
--

INSERT INTO `polibox` (`id_polibox`, `id_perusahaan`, `pengirim`, `part`, `jml`, `alamat`, `alamat_pengirim`, `tgl`, `ket`) VALUES
(1, 1, 'PT TRI SUKSES METAL', 'polibox', 1001, 'Jakarta', 'Bekasi', '2020-09-27', 'Belum DiKembalikan'),
(2, 1, 'PT TRI SUKSES METAL', 'polibox', 500, 'Jakarta', 'Bekasi', '2020-09-27', 'Sudah DiKembalikan'),
(3, 1, 'PT TRI SUKSES METAL', 'polibox', 20, 'Jakarta', 'Bekasi', '2020-09-30', 'Belum DiKembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id_surat` int(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `kd_part` varchar(11) NOT NULL,
  `part` varchar(50) NOT NULL,
  `jml` int(30) NOT NULL,
  `po` varchar(50) NOT NULL,
  `wo` int(50) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_jalan`
--

INSERT INTO `surat_jalan` (`id_surat`, `nosurat`, `id_perusahaan`, `pengirim`, `kd_part`, `part`, `jml`, `po`, `wo`, `alamat`, `alamat_pengirim`, `tgl`, `keterangan`) VALUES
(1, 'AK01', 1, 'PT Trisukses Metal Presisi', '02', 'Baut', 500, '50', 123, 'Jalan Menteng', 'Bekasi', '2020-09-01', 'Belum Diterima'),
(2, 'AK02', 1, 'PT Trisukses Metal Presisi', '03', 'sabun', 30, '20', 20, 'Jalan Menteng', 'Bekasi', '2020-09-27', 'Belum Diterima'),
(3, '03', 1, 'PT Trisukses Metal Presisi', '03', 'sabun', 500, '12', 2, 'Jakarta', 'Bekasi', '2020-09-29', 'Belum Diterima'),
(4, '04', 1, 'PT TRI SUKSES METAL', '03', 'sabun', 6000, '05', 6, 'Jakarta', 'Bekasi', '2020-09-29', 'Belum Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `surat_penerimaan`
--

CREATE TABLE `surat_penerimaan` (
  `id_customer` int(11) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `nosurat` varchar(30) NOT NULL,
  `kd_part` varchar(11) NOT NULL,
  `part` varchar(50) NOT NULL,
  `jml` int(11) NOT NULL,
  `nospb` varchar(20) NOT NULL,
  `po` varchar(20) NOT NULL,
  `wo` varchar(20) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_penerimaan`
--

INSERT INTO `surat_penerimaan` (`id_customer`, `penerima`, `pengirim`, `alamat`, `alamat_pengirim`, `nosurat`, `kd_part`, `part`, `jml`, `nospb`, `po`, `wo`, `tgl`) VALUES
(5, 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', 'Jakarta', 'Bekasi', 'AK01', '02', 'Baut', 500, '09', '50', '123', '2020-09-29'),
(6, 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', 'Jakarta', 'Bekasi', 'AK02', '03', 'sabun', 100, '10', '20', '20', '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `surat_pengembalian`
--

CREATE TABLE `surat_pengembalian` (
  `id_surat` int(11) NOT NULL,
  `id_polibox` int(11) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `alamat_penerima` text NOT NULL,
  `part` varchar(30) NOT NULL,
  `jml_kembali` int(20) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_pengembalian`
--

INSERT INTO `surat_pengembalian` (`id_surat`, `id_polibox`, `perusahaan`, `penerima`, `alamat_pengirim`, `alamat_penerima`, `part`, `jml_kembali`, `tgl_kembali`, `keterangan`) VALUES
(3, 2, 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', 'Jakarta', 'Bekasi', 'polibox', 500, '2020-09-30', NULL),
(5, 3, 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', 'Jakarta', 'Bekasiasdasd', 'polibox', 15, '2020-09-30', 'wedw'),
(6, 1, 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', '', '', '', 500, '2020-10-08', NULL),
(7, 1, 'PT. Metindo Erasakti', 'PT TRI SUKSES METAL', '', '', '', 5000, '2020-10-08', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
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

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Pradipta Dwi Haryadi', 'haryadipradipta@gmail.com', 'guaganteng1.jpg', '123', 1, 1, 1555857393),
(6, 'Admin', 'admin@gmail.com', 'guaganteng2.jpg', '123', 1, 1, 1555861392),
(36, 'customer', 'customer@gmail.com', 'default.jpg', '123', 2, 1, 1601451497),
(37, 'driver', 'driver@gmail.com', 'default.jpg', '123', 3, 1, 1601451566),
(38, 'asd', 'asd@gmail.com', 'default.jpg', '123as', 1, 1, 1601481394),
(39, 'koack', 'b@gmail.com', 'default.jpg', '123', 1, 1, 1601519572);

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
(31, 2, 4),
(36, 1, 10),
(65, 3, 7),
(75, 2, 9),
(76, 3, 8);

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
(6, 'Menu'),
(8, 'Driver'),
(9, 'Customer');

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
(2, 'Customer'),
(3, 'Driver');

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
(32, 7, 'Data Rapot', 'guru/datarapot', 'fas fa-fw fa-book', 1),
(33, 7, 'Profile', 'guru', 'fas fa-fw fa-user-tie', 1),
(35, 7, 'Edit Profile', 'guru/edit', 'fas fa-fw fa-user-edit', 1),
(36, 7, 'Change Password', 'guru/changepassword', 'fas fa-fw fa-user-tie', 1),
(37, 4, 'Data Rapot', 'user/datarapot', 'fas fa-fw fa-receipt', 1),
(38, 4, 'My Profile ', 'user', 'fas fa-fw fa-user', 1),
(39, 4, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(40, 4, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(41, 1, 'Material', 'admin/material', 'fas fa-fw fa-receipt', 1),
(42, 1, 'Part', 'admin/part', 'fas fa-fw fa-list', 1),
(43, 1, 'Perusahaan', 'admin/perusahaan', 'fas fa-fw fa-school', 1),
(44, 1, 'User List', 'admin/userlist', 'fas fa-fw fa-user-tie', 1),
(45, 1, 'Surat Jalan', 'admin/suratjalan', 'fas fa-fw fa-receipt', 1),
(46, 1, 'Surat Peminjaman Polibox', 'admin/polibox', 'fas fa-fw fa-list-alt', 1),
(47, 8, 'Konfirmasi', 'driver', 'fas fa-fw fa-receipt', 1),
(48, 8, 'Change Password', 'driver/changepassword', 'fas fa-fw fa-key', 1),
(50, 9, 'Surat Pengembalian Polibox', 'customer/polibox', 'fas fa-fw fa-list-alt', 1),
(51, 9, 'BAST', 'customer/berita', 'fas fa-fw fa-book', 1),
(53, 9, 'Surat Jalan', 'customer/suratjalan', 'fas fa-fw fa-receipt', 1),
(54, 9, 'Surat Peminjaman Polibox', 'customer/suratpolibox', 'fas fa-fw fa-list-alt', 1),
(55, 9, 'Change Password', 'customer/changepassword', 'fas fa-fw fa-key', 1),
(56, 1, 'BAST', 'admin/bast', 'fas fa-fw fa-book', 1),
(57, 1, 'Surat Pengembalian Polibox', 'admin/poliboxkembali', 'fas fa-fw fa-list-alt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`kd_mt`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`kd_part`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `polibox`
--
ALTER TABLE `polibox`
  ADD PRIMARY KEY (`id_polibox`);

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surat_penerimaan`
--
ALTER TABLE `surat_penerimaan`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `surat_pengembalian`
--
ALTER TABLE `surat_pengembalian`
  ADD PRIMARY KEY (`id_surat`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `polibox`
--
ALTER TABLE `polibox`
  MODIFY `id_polibox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_penerimaan`
--
ALTER TABLE `surat_penerimaan`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surat_pengembalian`
--
ALTER TABLE `surat_pengembalian`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
