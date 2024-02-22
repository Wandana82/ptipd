-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 05:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_disposisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `id_surat` varchar(255) NOT NULL,
  `Sifat_Surat` varchar(50) NOT NULL,
  `Catatan` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `id_surat`, `Sifat_Surat`, `Catatan`, `id_user`) VALUES
(1, '1', '1', 'mohon di acc', '2'),
(2, '2', '1', 'segera ditindak lanjuti', '3'),
(3, '3', '1', 'gas', '3');

-- --------------------------------------------------------

--
-- Stand-in structure for view `disposisi_masuk`
-- (See below for the actual view)
--
CREATE TABLE `disposisi_masuk` (
`id_disposisi` int(11)
,`id_surat` varchar(255)
,`Sifat_Surat` varchar(50)
,`Catatan` varchar(255)
,`id_user` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `action_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`permission_id`, `role_id`, `page_name`, `action_name`) VALUES
(151, 1, 'disposisi', 'list'),
(152, 1, 'disposisi', 'view'),
(153, 1, 'disposisi', 'add'),
(154, 1, 'disposisi', 'edit'),
(155, 1, 'disposisi', 'editfield'),
(156, 1, 'disposisi', 'delete'),
(157, 1, 'disposisi', 'import_data'),
(158, 1, 'sifat_surat', 'list'),
(159, 1, 'sifat_surat', 'view'),
(160, 1, 'sifat_surat', 'add'),
(161, 1, 'sifat_surat', 'edit'),
(162, 1, 'sifat_surat', 'editfield'),
(163, 1, 'sifat_surat', 'delete'),
(164, 1, 'sifat_surat', 'import_data'),
(165, 1, 'surat_masuk', 'list'),
(166, 1, 'surat_masuk', 'view'),
(167, 1, 'surat_masuk', 'add'),
(168, 1, 'surat_masuk', 'edit'),
(169, 1, 'surat_masuk', 'editfield'),
(170, 1, 'surat_masuk', 'delete'),
(171, 1, 'surat_masuk', 'import_data'),
(172, 1, 'user', 'list'),
(173, 1, 'user', 'view'),
(174, 1, 'user', 'add'),
(175, 1, 'user', 'edit'),
(176, 1, 'user', 'editfield'),
(177, 1, 'user', 'delete'),
(178, 1, 'user', 'import_data'),
(179, 1, 'user', 'accountedit'),
(180, 1, 'user', 'accountview'),
(181, 1, 'role_permissions', 'list'),
(182, 1, 'role_permissions', 'view'),
(183, 1, 'role_permissions', 'add'),
(184, 1, 'role_permissions', 'edit'),
(185, 1, 'role_permissions', 'editfield'),
(186, 1, 'role_permissions', 'delete'),
(187, 1, 'roles', 'list'),
(188, 1, 'roles', 'view'),
(189, 1, 'roles', 'add'),
(190, 1, 'roles', 'edit'),
(191, 1, 'roles', 'editfield'),
(192, 1, 'roles', 'delete'),
(193, 2, 'surat_masuk', 'list'),
(194, 2, 'surat_masuk', 'view'),
(195, 2, 'user', 'accountedit'),
(196, 2, 'user', 'accountview'),
(197, 2, 'disposisi_masuk', 'list'),
(198, 2, 'disposisi_masuk', 'view');

-- --------------------------------------------------------

--
-- Table structure for table `sifat_surat`
--

CREATE TABLE `sifat_surat` (
  `id` int(11) NOT NULL,
  `Sifat_Surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sifat_surat`
--

INSERT INTO `sifat_surat` (`id`, `Sifat_Surat`) VALUES
(1, 'Penting'),
(2, 'Rahasia'),
(3, 'Segera dilaksanakan');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(11) NOT NULL,
  `Nomor_Surat` varchar(50) NOT NULL,
  `Tanggal_Surat` date NOT NULL,
  `Perihal_Surat` varchar(255) NOT NULL,
  `Tanggal_Terima` date NOT NULL,
  `File_Surat` varchar(255) NOT NULL,
  `Diterima_oleh` varchar(100) NOT NULL,
  `Asal_Surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `Nomor_Surat`, `Tanggal_Surat`, `Perihal_Surat`, `Tanggal_Terima`, `File_Surat`, `Diterima_oleh`, `Asal_Surat`) VALUES
(1, 'B-50/UN.20/PP.00.9/04/2023', '2024-02-15', 'Peminjaman Tempat', '2024-02-21', 'http://localhost/ptipd/uploads/files/vguj0d_39rieq6n.pdf', '1', 'FIT'),
(2, 'B-30/UN.20/PP.00.9/0482023', '2024-02-22', 'Peminjaman Tempat Aula', '2024-02-23', 'http://localhost/ptipd/uploads/files/gz20d9t8r3lhji7.jpg', '1', 'Pascasarjana'),
(3, 'B-90/UN.20/PP.00.9/04/2023', '2024-02-22', 'Peminjaman Tempat', '2024-02-22', 'http://localhost/ptipd/uploads/files/5p8bshyrw_aqt74.jpg', '1', 'UptBahasa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Nama_Pengguna` varchar(90) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-05-21 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `Password`, `Nama_Pengguna`, `Email`, `Photo`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `user_role_id`) VALUES
(1, 'Bambang', '$2y$10$K36YaaLCyPoaufYAaj.cBObiQ0hQqMWFbSTOiYI4.Ig6FSk.sQOtS', 'Bambang', 'admin@gmail.com', 'http://localhost/ptipd/uploads/files/1da_3wxjiklzh8b.jpg', NULL, NULL, '2024-05-21 00:00:00', NULL, 1),
(2, '214061021', '$2y$10$4qdFmyoHrH8gpfjT7Hpsw.Yx8mEJ0DgK4Ngfd4xSkN6DvpnIk4uKm', 'Rano', '214061021@staff.uinsaid.ac.id', 'http://localhost/ptipd/uploads/files/u398f6ikoylqta4.jpg', NULL, NULL, '2024-05-21 00:00:00', NULL, 2),
(3, '214061013', '$2y$10$lY48XZO/oVd3lKfL780Uj.RsdgSd2gMIMZHPy8VIyMf4UhnwMv.ei', 'Alan', '214061013@staff.uinsaid.ac.id', 'http://localhost/ptipd/uploads/files/g1p9tqvf6oah7re.jpg', NULL, NULL, '2024-05-21 00:00:00', NULL, 2);

-- --------------------------------------------------------

--
-- Structure for view `disposisi_masuk`
--
DROP TABLE IF EXISTS `disposisi_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `disposisi_masuk`  AS  select `disposisi`.`id_disposisi` AS `id_disposisi`,`disposisi`.`id_surat` AS `id_surat`,`disposisi`.`Sifat_Surat` AS `Sifat_Surat`,`disposisi`.`Catatan` AS `Catatan`,`disposisi`.`id_user` AS `id_user` from `disposisi` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `sifat_surat`
--
ALTER TABLE `sifat_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `sifat_surat`
--
ALTER TABLE `sifat_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
