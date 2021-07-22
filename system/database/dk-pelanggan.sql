-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 07:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dk-pelanggan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `no_admin` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`no_admin`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
('60f43e2764eed', 'Administrator', 'Laki-laki', '083812653581', 'Kp.Kepuh Ds. Lebak Kepuh Kec. Lebak Wangi Kab. Serang - Banten');

-- --------------------------------------------------------

--
-- Table structure for table `cs_detail`
--

CREATE TABLE `cs_detail` (
  `no_cs` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_detail`
--

INSERT INTO `cs_detail` (`no_cs`, `nama`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
('60f2eb18d6aa7', 'Customer Service', 'Laki-laki', '083812653581', 'Kp.Kepuh Ds. Lebak Kepuh');

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `id_kel` varchar(50) NOT NULL,
  `level` varchar(128) NOT NULL,
  `no_cus` varchar(50) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komplain`
--

INSERT INTO `komplain` (`id_kel`, `level`, `no_cus`, `judul`, `deskripsi`, `image`, `tanggal`, `status`) VALUES
('60eb1b84544ba', 'Level 1', '60f43e3bd3ac8', 'keluhan', 'lllll', 'DSC029551.jpg', 20210712, 'selesai'),
('60f857ecca927', 'Level 2', '60f43e3bd3ac8', 'Ijazah SMP', 'ini ijazah salah', 'kkl2.png', 1626888172, 'proses'),
('60f8581f387c7', 'Level 3', '60f43e3bd3ac8', 'test', 'test', 'gmail.png', 1626888223, 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `manager_detail`
--

CREATE TABLE `manager_detail` (
  `no_manager` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_detail`
--

INSERT INTO `manager_detail` (`no_manager`, `nama`, `jenis_kelamin`, `no_tlp`, `alamat`) VALUES
('60f86b7f02cb0', 'Manager Perusahaan', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(64) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
('60f2eb18d6aa7', 'Customer Service', 'cs@gmail.com', 'animasi-orang-berfikir-14.jpg', '$2y$10$tdvsgiGVCnBQJdfe4HaDKehaRiQPr9KcfS9ozWuT09m5ujRtalYH.', 3, 1, 1626532633),
('60f43e2764eed', 'Administrator', 'admin@gmail.com', 'animasi-orang-berfikir-14.jpg', '$2y$10$VoltGbEQXXAO2kdas1ZHFOmfvzuzBwisSgM0RC28bCUuML6Hb4UEK', 1, 1, 1626619431),
('60f43e3bd3ac8', 'user', 'user@gmail.com', 'animasi-orang-berfikir-14.jpg', '$2y$10$Zb9gy48z8DylKNTs6qGWi.vm3hIy3z1vSTII6RyMx.ibw93VFpml.', 2, 1, 1626619452),
('60f86b7f02cb0', 'Manager Perusahaan', 'manager@gmail.com', 'default.jpg', '$2y$10$9ygyA80eZL69UKEmZ.h21.XqKKV29HDSF1NpXOFSNozgU9ZfJGTeK', 4, 1, 1626893183);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `no_cus` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat` varchar(64) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`no_cus`, `nama`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `alamat_lengkap`) VALUES
('60f43e3bd3ac8', 'user', 'Lebak', '2021-07-22', 'Laki-laki', '083812653581', 'Warung Pojok, Jl. Ciwaru Raya No.73, Cipare, Kec. Serang, Kota Serang, Banten 42117\r\nJl. Syekh Moh. Nawawi Albantani Kp. Boru Kecamatan Curug, Banjarsari, Cipocok Jaya, Serang City, Banten 42123, Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'user'),
(3, 'cs'),
(4, 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_detail`
--
ALTER TABLE `admin_detail`
  ADD PRIMARY KEY (`no_admin`);

--
-- Indexes for table `cs_detail`
--
ALTER TABLE `cs_detail`
  ADD PRIMARY KEY (`no_cs`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `manager_detail`
--
ALTER TABLE `manager_detail`
  ADD PRIMARY KEY (`no_manager`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`no_cus`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
