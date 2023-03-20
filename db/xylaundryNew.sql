-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 07:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xylaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`, `keterangan`) VALUES
(1, 1, 1, 12, ''),
(9, NULL, NULL, 2, ''),
(11, NULL, NULL, 2, ''),
(12, 16, 1, 3, ''),
(13, 17, 1, 10, ''),
(14, 18, 1, 2, ''),
(15, 21, 1, 3, ''),
(16, 26, 1, 3, ''),
(18, 28, 1, 4, ''),
(19, 29, 1, 3, ''),
(21, 31, 1, 4, ''),
(23, 33, 1, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(1, 'Nasyih Wawan', 'Bandung', 'L', '0234032'),
(2, 'Risqi Andryana', 'Cibiru', 'L', '093219798'),
(15, 'Risqi Andryana s', 'Cibiru', 'L', '213321'),
(16, 'Darryl', 'Cipdaung', 'L', '312321');

-- --------------------------------------------------------

--
-- Table structure for table `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_outlet`
--

INSERT INTO `tb_outlet` (`id`, `nama`, `alamat`, `tlp`) VALUES
(1, 'Bandung', 'Bandung timur', '5435435'),
(2, 'Laundry 1', 'Cipadung', '0832019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('kiloan','satuan','selimut','bed_cover','kaos','lain') NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 1, 'kiloan', 'P2', 7000),
(2, 1, 'satuan', 'P1', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `qty` double NOT NULL,
  `diskon` double NOT NULL,
  `pajak` int(11) NOT NULL,
  `status` enum('baru','proses','selesai','diambil','pending','dijemput','segera tiba') NOT NULL,
  `dibayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_outlet`, `id_paket`, `kode_invoice`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `qty`, `diskon`, `pajak`, `status`, `dibayar`, `id_user`) VALUES
(1, 1, 1, 'dawdwdw', 1, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 'diambil', 'dibayar', 2),
(15, 1, 1, 'AKU', 1, '2023-03-02', '2023-03-03', '2023-03-04', 0, 0, 0, 0, 'selesai', 'dibayar', 3),
(16, 1, 1, 'doaidwd', 1, '2023-03-03', '2023-03-03', '2023-03-04', 0, 3, 0, 0, 'diambil', '', 3),
(17, 1, 1, 'dadadad', 1, '2023-03-08', '2023-03-10', '2023-03-09', 0, 10, 0, 0, 'diambil', 'dibayar', 3),
(18, 1, 1, '64089512e2fe6', 2, '2023-03-08', '2023-03-08', '2023-03-08', 0, 2, 0, 0, 'proses', 'dibayar', 3),
(21, 2, 1, '640a9478e78b3', 2, '2023-03-10', '2023-03-18', '2023-03-10', 0, 3, 0, 0, 'baru', 'dibayar', 3),
(26, 2, 1, '640a9bc7171f3', 2, '2023-03-11', '2023-03-10', '2023-03-10', 0, 3, 0, 0, 'baru', 'dibayar', 3),
(28, 2, 1, '6417d31b79b47', 15, '0000-00-00', '0000-00-00', '0000-00-00', 0, 4, 0, 0, 'selesai', 'belum_dibayar', 15),
(29, 2, 1, '6417d7f05e241', 15, '0000-00-00', '0000-00-00', '0000-00-00', 0, 3, 0, 0, 'pending', 'belum_dibayar', 15),
(31, 1, 1, '6417dbe940055', 15, '0000-00-00', '0000-00-00', '0000-00-00', 0, 4, 0, 0, 'pending', 'belum_dibayar', 15),
(33, 1, 1, '6417dc5478de9', 15, '0000-00-00', '0000-00-00', '0000-00-00', 0, 3, 0, 0, 'pending', 'belum_dibayar', 15);

--
-- Triggers `tb_transaksi`
--
DELIMITER $$
CREATE TRIGGER `after_insert_tb_transaksi` AFTER INSERT ON `tb_transaksi` FOR EACH ROW INSERT INTO tb_detail_transaksi (id_transaksi, id_paket, qty) VALUES (NEW.id, NEW.id_paket, NEW.qty)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_outlet` int(11) DEFAULT NULL,
  `role` enum('admin','kasir','owner','member','kurir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `id_outlet`, `role`) VALUES
(2, 'admin2', 'admin2', '$2y$10$kE9Aclna4jZxYBWR3kd/tuXt0yzRmrE.WVBSt7ijs7AmgtHm9R51.', 1, 'admin'),
(3, 'admin', 'admin', '$2y$10$kE9Aclna4jZxYBWR3kd/tuXt0yzRmrE.WVBSt7ijs7AmgtHm9R51.', 1, 'admin'),
(4, 'Owner', 'owner', '$2y$10$zdF7YbMW6QriH5zAC8Z7DOnBePxvzpHVJGXKfF10Nf4lssIFnjlEq', 1, 'owner'),
(5, 'Kasir', 'kasir', '$2y$10$D4XncUzYpyXlgkoz/w1Ek.6lzxD2a7Yp.ahQhYliR7VRHu1W58PK2', 1, 'kasir'),
(15, 'Risqi Andryana s', 'risqi', '$2y$10$m6QorgHRMREp5rcsoifo4uQI05C/Tmvmw84aCaL59yjONkew82Ixe', NULL, 'member'),
(16, 'Darryl', 'darryl', '$2y$10$xpqEvGeychX40Q8jrWKV2O82F09avMI9Y.cOuOgZxPixDm0zy/Mz6', NULL, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id`),
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
