-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 04:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warnet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `idmenu` int(11) NOT NULL,
  `kode_menu` varchar(8) NOT NULL,
  `nmmenu` varchar(25) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_menu`
--

INSERT INTO `mst_menu` (`idmenu`, `kode_menu`, `nmmenu`, `link`) VALUES
(1, 'M2022001', 'menu', 'mod_menu'),
(2, 'M2022002', 'user login', 'mod_userlogin'),
(3, 'M2022003', 'operator', 'mod_op'),
(5, 'M2022004', 'Paket', 'mod_paket'),
(9, 'M2022005', 'transaksi', 'mod_transaksi');

-- --------------------------------------------------------

--
-- Table structure for table `mst_paket`
--

CREATE TABLE `mst_paket` (
  `idpaket` int(11) NOT NULL,
  `id_pc` int(11) NOT NULL,
  `nmpaket` varchar(8) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_paket`
--

INSERT INTO `mst_paket` (`idpaket`, `id_pc`, `nmpaket`, `harga`) VALUES
(1, 1, 'paket 1', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `mst_pc`
--

CREATE TABLE `mst_pc` (
  `id_pc` int(11) NOT NULL,
  `nmpc` varchar(10) NOT NULL,
  `jenispc` varchar(10) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_pc`
--

INSERT INTO `mst_pc` (`id_pc`, `nmpc`, `jenispc`, `img`) VALUES
(1, 'PC 01', 'Reguler', 'monitor.jpg'),
(2, 'PC 02', 'Reguler', 'monitor.jpg'),
(3, 'PC 03', 'Reguler', 'monitor.jpg'),
(4, 'PC 04', 'VIP', 'mov.jpg'),
(5, 'PC 05', 'VIP', 'mov.jpg'),
(6, 'PC 06', 'VIP', 'mov.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mst_transaksi`
--

CREATE TABLE `mst_transaksi` (
  `id_trans` int(11) NOT NULL,
  `idpaket` int(11) NOT NULL,
  `id_pc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mst_userlogin`
--

CREATE TABLE `mst_userlogin` (
  `iduser` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_userlogin`
--

INSERT INTO `mst_userlogin` (`iduser`, `username`, `nama`, `password`, `is_active`) VALUES
(10, 'ling', 'ling', '202cb962ac59075b964b07152d234b70', 1),
(13, 'man', 'man', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `idop` varchar(15) NOT NULL,
  `namaop` varchar(50) NOT NULL,
  `alamatop` varchar(100) NOT NULL,
  `notlpop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`idop`, `namaop`, `alamatop`, `notlpop`) VALUES
('', 'sop', 'sop', '0918292938');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `mst_paket`
--
ALTER TABLE `mst_paket`
  ADD PRIMARY KEY (`idpaket`),
  ADD KEY `fk_idpc` (`id_pc`);

--
-- Indexes for table `mst_pc`
--
ALTER TABLE `mst_pc`
  ADD PRIMARY KEY (`id_pc`);

--
-- Indexes for table `mst_transaksi`
--
ALTER TABLE `mst_transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `fk_paket` (`idpaket`),
  ADD KEY `fk_pc` (`id_pc`);

--
-- Indexes for table `mst_userlogin`
--
ALTER TABLE `mst_userlogin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`idop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mst_paket`
--
ALTER TABLE `mst_paket`
  MODIFY `idpaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_pc`
--
ALTER TABLE `mst_pc`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mst_transaksi`
--
ALTER TABLE `mst_transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_userlogin`
--
ALTER TABLE `mst_userlogin`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_paket`
--
ALTER TABLE `mst_paket`
  ADD CONSTRAINT `fkidpc` FOREIGN KEY (`id_pc`) REFERENCES `mst_pc` (`id_pc`);

--
-- Constraints for table `mst_transaksi`
--
ALTER TABLE `mst_transaksi`
  ADD CONSTRAINT `fk_paket` FOREIGN KEY (`idpaket`) REFERENCES `mst_paket` (`idpaket`),
  ADD CONSTRAINT `fk_pc` FOREIGN KEY (`id_pc`) REFERENCES `mst_pc` (`id_pc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
