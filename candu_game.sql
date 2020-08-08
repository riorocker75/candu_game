-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 10:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candu_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `makanan_id` int(11) NOT NULL,
  `makanan_umur` text NOT NULL,
  `makanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`makanan_id`, `makanan_umur`, `makanan`) VALUES
(1, '0 - 10 Bulan', 'ASI, Bubur Kedelai'),
(2, '10 - 15 Bulan', 'Nasi, Roti gandum, Susu');

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `output_id` int(11) NOT NULL,
  `nama_output` text NOT NULL,
  `kode_output` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`output_id`, `nama_output`, `kode_output`) VALUES
(1, 'Kecancduan Bermain Game Online', 'TKC');

-- --------------------------------------------------------

--
-- Table structure for table `output_linguistik`
--

CREATE TABLE `output_linguistik` (
  `ol_id` int(11) NOT NULL,
  `ol_output_id` text NOT NULL,
  `ol_nama` text NOT NULL,
  `ol_batas_awal` text NOT NULL,
  `ol_batas_akhir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `output_linguistik`
--

INSERT INTO `output_linguistik` (`ol_id`, `ol_output_id`, `ol_nama`, `ol_batas_awal`, `ol_batas_akhir`) VALUES
(1, '1', 'Berat', '1', '4'),
(2, '1', 'Ringan', '4', '7'),
(4, '1', 'Tidak Kecanduan', '7', '10');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `rule_id` int(11) NOT NULL,
  `rule_kelompok` int(11) NOT NULL,
  `rule_variabel` int(11) NOT NULL,
  `rule_linguistik` int(11) NOT NULL,
  `rule_output` int(11) NOT NULL,
  `rule_outli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`rule_id`, `rule_kelompok`, `rule_variabel`, `rule_linguistik`, `rule_output`, `rule_outli`) VALUES
(107, 989081130, 5, 14, 1, 1),
(108, 989081130, 6, 17, 1, 1),
(109, 989081130, 7, 20, 1, 1),
(110, 989081130, 8, 23, 1, 1),
(111, 989081130, 9, 26, 1, 1),
(112, 989081130, 10, 29, 1, 1),
(113, 989081130, 11, 32, 1, 1),
(114, 989081130, 12, 35, 1, 1),
(115, 989081130, 13, 38, 1, 1),
(116, 989081130, 14, 41, 1, 1),
(117, 1068533946, 5, 14, 1, 2),
(118, 1068533946, 6, 17, 1, 2),
(119, 1068533946, 7, 20, 1, 2),
(120, 1068533946, 8, 23, 1, 2),
(121, 1068533946, 9, 26, 1, 2),
(122, 1068533946, 10, 29, 1, 2),
(123, 1068533946, 11, 32, 1, 2),
(124, 1068533946, 12, 35, 1, 2),
(125, 1068533946, 13, 38, 1, 2),
(126, 1068533946, 14, 41, 1, 2),
(127, 921012270, 5, 14, 1, 4),
(128, 921012270, 6, 17, 1, 4),
(129, 921012270, 7, 20, 1, 4),
(130, 921012270, 8, 23, 1, 4),
(131, 921012270, 9, 26, 1, 4),
(132, 921012270, 10, 29, 1, 4),
(133, 921012270, 11, 32, 1, 4),
(134, 921012270, 12, 35, 1, 4),
(135, 921012270, 13, 38, 1, 4),
(136, 921012270, 14, 41, 1, 4),
(137, 410127475, 5, 14, 1, 1),
(138, 410127475, 6, 16, 1, 1),
(139, 410127475, 7, 19, 1, 1),
(140, 410127475, 8, 22, 1, 1),
(141, 410127475, 9, 25, 1, 1),
(142, 410127475, 10, 28, 1, 1),
(143, 410127475, 11, 31, 1, 1),
(144, 410127475, 12, 34, 1, 1),
(145, 410127475, 13, 37, 1, 1),
(146, 410127475, 14, 40, 1, 1),
(147, 1671279050, 5, 14, 1, 2),
(148, 1671279050, 6, 16, 1, 2),
(149, 1671279050, 7, 19, 1, 2),
(150, 1671279050, 8, 22, 1, 2),
(151, 1671279050, 9, 25, 1, 2),
(152, 1671279050, 10, 28, 1, 2),
(153, 1671279050, 11, 31, 1, 2),
(154, 1671279050, 12, 34, 1, 2),
(155, 1671279050, 13, 37, 1, 2),
(156, 1671279050, 14, 40, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `variabel`
--

CREATE TABLE `variabel` (
  `variabel_id` int(11) NOT NULL,
  `variabel_kode` varchar(255) NOT NULL,
  `variabel_nama` varchar(255) NOT NULL,
  `variabel_satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `variabel`
--

INSERT INTO `variabel` (`variabel_id`, `variabel_kode`, `variabel_nama`, `variabel_satuan`) VALUES
(5, 'g1', 'Berpikir tentang game sepanjang hari.', 'ss'),
(6, 'g2', 'Waktu bermain game meningkat.', ''),
(7, 'g3', 'Bermain game untuk melupakan kehidupan nyata.', ''),
(8, 'g4', 'Orang lain gagal melarang bermain.', ''),
(9, 'g5', 'Merasa tidak enak bila tidak bermain game.', ''),
(10, 'g6', 'Bertengkar dengan keluarga atau teman.', ''),
(11, 'g7', 'Mengabaikan aktivitas lainya.', ''),
(12, 'g8', 'Kehilangan waktu tidur.', ''),
(13, 'g9', 'Mudah kesal.', ''),
(14, 'g10', 'Akan tetap bermain game.', '');

-- --------------------------------------------------------

--
-- Table structure for table `variabel_linguistik`
--

CREATE TABLE `variabel_linguistik` (
  `vl_id` int(11) NOT NULL,
  `vl_variabel` int(11) NOT NULL,
  `vl_nama` varchar(255) NOT NULL,
  `vl_batas_awal` int(11) NOT NULL,
  `vl_batas_akhir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `variabel_linguistik`
--

INSERT INTO `variabel_linguistik` (`vl_id`, `vl_variabel`, `vl_nama`, `vl_batas_awal`, `vl_batas_akhir`) VALUES
(12, 5, 'Tidak Pernah', 1, 3),
(13, 5, 'Terkadang', 4, 6),
(14, 5, 'Sering', 7, 9),
(15, 6, 'Tidak Pernah', 1, 3),
(16, 6, 'Terkadang', 4, 6),
(17, 6, 'Sering', 7, 9),
(18, 7, 'Tidak Pernah', 1, 2),
(19, 7, 'Terkadang', 3, 4),
(20, 7, 'Sering', 5, 6),
(21, 8, 'Tidak Pernah', 1, 3),
(22, 8, 'Terkadang', 4, 6),
(23, 8, 'Sering', 7, 9),
(24, 9, 'Tidak Pernah', 1, 2),
(25, 9, 'Terkadang', 3, 4),
(26, 9, 'Sering', 5, 6),
(27, 10, 'Tidak Pernah', 1, 3),
(28, 10, 'Terkadang', 4, 6),
(29, 10, 'Sering', 7, 9),
(30, 11, 'Tidak Pernah', 1, 3),
(31, 11, 'Terkadang', 4, 6),
(32, 11, 'Sering', 7, 9),
(33, 12, 'Tidak Pernah', 1, 2),
(34, 12, 'Terkadang', 3, 4),
(35, 12, 'Sering', 5, 6),
(36, 13, 'Tidak Pernah', 1, 2),
(37, 13, 'Terkadang', 3, 4),
(38, 13, 'Sering', 5, 6),
(39, 14, 'Tidak Pernah', 1, 3),
(40, 14, 'Terkadang', 4, 6),
(41, 14, 'Sering', 7, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`makanan_id`);

--
-- Indexes for table `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`output_id`);

--
-- Indexes for table `output_linguistik`
--
ALTER TABLE `output_linguistik`
  ADD PRIMARY KEY (`ol_id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `variabel`
--
ALTER TABLE `variabel`
  ADD PRIMARY KEY (`variabel_id`);

--
-- Indexes for table `variabel_linguistik`
--
ALTER TABLE `variabel_linguistik`
  ADD PRIMARY KEY (`vl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `makanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `output`
--
ALTER TABLE `output`
  MODIFY `output_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `output_linguistik`
--
ALTER TABLE `output_linguistik`
  MODIFY `ol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `variabel`
--
ALTER TABLE `variabel`
  MODIFY `variabel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `variabel_linguistik`
--
ALTER TABLE `variabel_linguistik`
  MODIFY `vl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
