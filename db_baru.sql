-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 07:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

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
  `ol_batas_akhir` text NOT NULL,
  `ol_solusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `output_linguistik`
--

INSERT INTO `output_linguistik` (`ol_id`, `ol_output_id`, `ol_nama`, `ol_batas_awal`, `ol_batas_akhir`, `ol_solusi`) VALUES
(1, '1', 'Berat', '5', '10', '•	Didampingi Psikolog atau Dokter Spesialis Jiwa untuk menjalani terapi\r\n•	Orang terdekat harus mendammpingi atau memantau seluruh kegiatan yang dilakukan selama proses penyembuhan\r\n•	Rancang kembali target hidup anda\r\n•	Bertekat untuk sembuh dari Kecanduan Game Online\r\n•	Berdo’a mendekatkan diri kepada Allah SWT.\r\n'),
(2, '1', 'Ringan', '4', '7', '•	Orang terdekat memberikan nasihat\r\n•	Melakukan kegiatan positif\r\n•	Mengembangkan potensi minat dan bakat\r\n•	Kurangi frekuensi bermain Game Online secara bertahap\r\n•	Fokus terhadap pendidikan atau pekerjaan yang ditekuni\r\n'),
(4, '1', 'Tidak Kecanduan', '1', '5', '•	Melakukan pencegahan agar tidak mengalami kecanduan Game Online\r\n•	Meningkatkan pemahaman tentang bahaya kecanduan bermain Game Online\r\n');

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
(11, 22636, 5, 14, 1, 1),
(12, 22636, 6, 17, 1, 1),
(13, 22636, 8, 23, 1, 1),
(14, 22636, 10, 29, 1, 1),
(15, 22636, 11, 32, 1, 1),
(16, 20897, 5, 14, 1, 2),
(17, 20897, 6, 17, 1, 2),
(18, 20897, 8, 23, 1, 2),
(19, 20897, 10, 29, 1, 2),
(20, 20897, 11, 32, 1, 2),
(21, 15925, 5, 14, 1, 4),
(22, 15925, 6, 17, 1, 4),
(23, 15925, 8, 23, 1, 4),
(24, 15925, 10, 29, 1, 4),
(25, 15925, 11, 32, 1, 4),
(26, 21194, 5, 14, 1, 1),
(27, 21194, 6, 16, 1, 1),
(28, 21194, 8, 22, 1, 1),
(29, 21194, 10, 28, 1, 1),
(30, 21194, 11, 31, 1, 1),
(31, 32710, 5, 14, 1, 2),
(32, 32710, 6, 16, 1, 2),
(33, 32710, 8, 22, 1, 2),
(34, 32710, 10, 28, 1, 2),
(35, 32710, 11, 31, 1, 2),
(36, 31803, 5, 14, 1, 4),
(37, 31803, 6, 16, 1, 4),
(38, 31803, 8, 22, 1, 4),
(39, 31803, 10, 28, 1, 4),
(40, 31803, 11, 31, 1, 4),
(41, 27527, 5, 14, 1, 1),
(42, 27527, 6, 15, 1, 1),
(43, 27527, 8, 21, 1, 1),
(44, 27527, 10, 27, 1, 1),
(45, 27527, 11, 30, 1, 1),
(46, 3928, 5, 14, 1, 2),
(47, 3928, 6, 15, 1, 2),
(48, 3928, 8, 21, 1, 2),
(49, 3928, 10, 27, 1, 2),
(50, 3928, 11, 30, 1, 2),
(51, 6836, 5, 14, 1, 4),
(52, 6836, 6, 15, 1, 4),
(53, 6836, 8, 21, 1, 4),
(54, 6836, 10, 27, 1, 4),
(55, 6836, 11, 30, 1, 4),
(56, 2225, 5, 13, 1, 1),
(57, 2225, 6, 17, 1, 1),
(58, 2225, 8, 23, 1, 1),
(59, 2225, 10, 29, 1, 1),
(60, 2225, 11, 32, 1, 1),
(61, 26333, 5, 13, 1, 2),
(62, 26333, 6, 17, 1, 2),
(63, 26333, 8, 23, 1, 2),
(64, 26333, 10, 29, 1, 2),
(65, 26333, 11, 32, 1, 2),
(66, 20886, 5, 13, 1, 4),
(67, 20886, 6, 17, 1, 4),
(68, 20886, 8, 23, 1, 4),
(69, 20886, 10, 29, 1, 4),
(70, 20886, 11, 32, 1, 4),
(71, 8471, 5, 13, 1, 1),
(72, 8471, 6, 16, 1, 1),
(73, 8471, 8, 22, 1, 1),
(74, 8471, 10, 28, 1, 1),
(75, 8471, 11, 31, 1, 1),
(76, 21074, 5, 13, 1, 2),
(77, 21074, 6, 16, 1, 2),
(78, 21074, 8, 22, 1, 2),
(79, 21074, 10, 28, 1, 2),
(80, 21074, 11, 31, 1, 2),
(81, 18692, 5, 13, 1, 4),
(82, 18692, 6, 16, 1, 4),
(83, 18692, 8, 22, 1, 4),
(84, 18692, 10, 28, 1, 4),
(85, 18692, 11, 31, 1, 4),
(86, 32493, 5, 13, 1, 1),
(87, 32493, 6, 15, 1, 1),
(88, 32493, 8, 21, 1, 1),
(89, 32493, 10, 27, 1, 1),
(90, 32493, 11, 30, 1, 1),
(91, 14627, 5, 13, 1, 2),
(92, 14627, 6, 15, 1, 2),
(93, 14627, 8, 21, 1, 2),
(94, 14627, 10, 27, 1, 2),
(95, 14627, 11, 30, 1, 2),
(96, 11808, 5, 13, 1, 4),
(97, 11808, 6, 15, 1, 4),
(98, 11808, 8, 21, 1, 4),
(99, 11808, 10, 27, 1, 4),
(100, 11808, 11, 30, 1, 4),
(101, 28962, 5, 12, 1, 1),
(102, 28962, 6, 17, 1, 1),
(103, 28962, 8, 23, 1, 1),
(104, 28962, 10, 29, 1, 1),
(105, 28962, 11, 32, 1, 1),
(106, 5081, 5, 12, 1, 2),
(107, 5081, 6, 17, 1, 2),
(108, 5081, 8, 23, 1, 2),
(109, 5081, 10, 29, 1, 2),
(110, 5081, 11, 32, 1, 2),
(111, 14259, 5, 12, 1, 4),
(112, 14259, 6, 17, 1, 4),
(113, 14259, 8, 23, 1, 4),
(114, 14259, 10, 29, 1, 4),
(115, 14259, 11, 32, 1, 4),
(116, 31930, 5, 12, 1, 1),
(117, 31930, 6, 16, 1, 1),
(118, 31930, 8, 22, 1, 1),
(119, 31930, 10, 28, 1, 1),
(120, 31930, 11, 31, 1, 1),
(121, 4318, 5, 12, 1, 2),
(122, 4318, 6, 16, 1, 2),
(123, 4318, 8, 22, 1, 2),
(124, 4318, 10, 28, 1, 2),
(125, 4318, 11, 31, 1, 2),
(126, 30571, 5, 12, 1, 4),
(127, 30571, 6, 16, 1, 4),
(128, 30571, 8, 22, 1, 4),
(129, 30571, 10, 28, 1, 4),
(130, 30571, 11, 31, 1, 4),
(131, 703, 5, 12, 1, 1),
(132, 703, 6, 15, 1, 1),
(133, 703, 8, 21, 1, 1),
(134, 703, 10, 27, 1, 1),
(135, 703, 11, 30, 1, 1),
(136, 8904, 5, 12, 1, 2),
(137, 8904, 6, 15, 1, 2),
(138, 8904, 8, 21, 1, 2),
(139, 8904, 10, 27, 1, 2),
(140, 8904, 11, 30, 1, 2),
(141, 3468, 5, 12, 1, 4),
(142, 3468, 6, 15, 1, 4),
(143, 3468, 8, 21, 1, 4),
(144, 3468, 10, 27, 1, 4),
(145, 3468, 11, 30, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `uji`
--

CREATE TABLE `uji` (
  `id` bigint(20) NOT NULL,
  `kode_user` text NOT NULL,
  `variabel_id` text NOT NULL,
  `nilai_input` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uji`
--

INSERT INTO `uji` (`id`, `kode_user`, `variabel_id`, `nilai_input`) VALUES
(151, 'U-8968', '5', '1'),
(152, 'U-8968', '6', '1'),
(153, 'U-8968', '7', '1'),
(154, 'U-8968', '8', '1'),
(155, 'U-8968', '9', '1'),
(156, 'U-8968', '10', '1'),
(157, 'U-8968', '11', '1'),
(158, 'U-8968', '12', '1'),
(159, 'U-8968', '13', '1'),
(160, 'U-8968', '14', '1'),
(171, 'U-6630', '5', '5'),
(172, 'U-6630', '6', '5'),
(173, 'U-6630', '7', '4'),
(174, 'U-6630', '8', '5'),
(175, 'U-6630', '9', '4'),
(176, 'U-6630', '10', '5'),
(177, 'U-6630', '11', '5'),
(178, 'U-6630', '12', '4'),
(179, 'U-6630', '13', '4'),
(180, 'U-6630', '14', '5'),
(181, 'U-7363', '5', '5'),
(182, 'U-7363', '6', '5'),
(183, 'U-7363', '7', '4'),
(184, 'U-7363', '8', '5'),
(185, 'U-7363', '9', '4'),
(186, 'U-7363', '10', '5'),
(187, 'U-7363', '11', '5'),
(188, 'U-7363', '12', '4'),
(189, 'U-7363', '13', '4'),
(190, 'U-7363', '14', '5'),
(191, 'U-3680', '5', '5'),
(192, 'U-3680', '6', '5'),
(193, 'U-3680', '7', '4'),
(194, 'U-3680', '8', '5'),
(195, 'U-3680', '9', '4'),
(196, 'U-3680', '10', '5'),
(197, 'U-3680', '11', '5'),
(198, 'U-3680', '12', '4'),
(199, 'U-3680', '13', '4'),
(200, 'U-3680', '14', '5'),
(201, 'U-4529', '5', '5'),
(202, 'U-4529', '6', '5'),
(203, 'U-4529', '7', '4'),
(204, 'U-4529', '8', '5'),
(205, 'U-4529', '9', '4'),
(206, 'U-4529', '10', '5'),
(207, 'U-4529', '11', '5'),
(208, 'U-4529', '12', '4'),
(209, 'U-4529', '13', '4'),
(210, 'U-4529', '14', '5'),
(286, 'U-9879', '5', '8'),
(287, 'U-9879', '6', '7'),
(288, 'U-9879', '8', '4'),
(289, 'U-9879', '10', '7'),
(290, 'U-9879', '11', '5'),
(291, 'U-7514', '5', '9'),
(292, 'U-7514', '6', '9'),
(293, 'U-7514', '8', '9'),
(294, 'U-7514', '10', '9'),
(295, 'U-7514', '11', '9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `kode_user` text NOT NULL,
  `nama` text NOT NULL,
  `umur` text NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `kode_user`, `nama`, `umur`, `hasil`) VALUES
(28, 'U-9879', 'tika', '21', 'NAN'),
(29, 'U-7514', 'tikas', '21', '5');

-- --------------------------------------------------------

--
-- Table structure for table `variabel`
--

CREATE TABLE `variabel` (
  `variabel_id` int(11) NOT NULL,
  `variabel_kode` varchar(255) NOT NULL,
  `variabel_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `variabel`
--

INSERT INTO `variabel` (`variabel_id`, `variabel_kode`, `variabel_nama`) VALUES
(5, 'g1', 'Berpikir tentang game sepanjang hari.'),
(6, 'g2', 'Waktu bermain game meningkat.'),
(8, 'g4', 'Orang lain gagal melarang bermain.'),
(10, 'g6', 'Bertengkar dengan keluarga atau teman.'),
(11, 'g7', 'Mengabaikan aktivitas lainya.');

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
(12, 5, 'Tidak Pernah', 1, 4),
(13, 5, 'Terkadang', 3, 6),
(14, 5, 'Sering', 4, 9),
(15, 6, 'Tidak Pernah', 1, 4),
(16, 6, 'Terkadang', 3, 6),
(17, 6, 'Sering', 4, 9),
(18, 7, 'Tidak Pernah', 1, 2),
(19, 7, 'Terkadang', 3, 4),
(20, 7, 'Sering', 5, 6),
(21, 8, 'Tidak Pernah', 1, 4),
(22, 8, 'Terkadang', 3, 6),
(23, 8, 'Sering', 4, 9),
(24, 9, 'Tidak Pernah', 1, 2),
(25, 9, 'Terkadang', 3, 4),
(26, 9, 'Sering', 5, 6),
(27, 10, 'Tidak Pernah', 1, 4),
(28, 10, 'Terkadang', 3, 6),
(29, 10, 'Sering', 4, 9),
(30, 11, 'Tidak Pernah', 1, 4),
(31, 11, 'Terkadang', 3, 6),
(32, 11, 'Sering', 4, 9),
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
-- Indexes for table `uji`
--
ALTER TABLE `uji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `uji`
--
ALTER TABLE `uji`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `variabel`
--
ALTER TABLE `variabel`
  MODIFY `variabel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `variabel_linguistik`
--
ALTER TABLE `variabel_linguistik`
  MODIFY `vl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
