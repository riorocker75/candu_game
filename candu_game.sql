-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 11:57 AM
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
(156, 1671279050, 14, 40, 1, 2),
(157, 30941201, 5, 14, 1, 4),
(158, 30941201, 6, 16, 1, 4),
(159, 30941201, 7, 19, 1, 4),
(160, 30941201, 8, 22, 1, 4),
(161, 30941201, 9, 25, 1, 4),
(162, 30941201, 10, 28, 1, 4),
(163, 30941201, 11, 31, 1, 4),
(164, 30941201, 12, 34, 1, 4),
(165, 30941201, 13, 37, 1, 4),
(166, 30941201, 14, 40, 1, 4),
(167, 2104167401, 5, 14, 1, 1),
(168, 2104167401, 6, 15, 1, 1),
(169, 2104167401, 7, 18, 1, 1),
(170, 2104167401, 8, 21, 1, 1),
(171, 2104167401, 9, 24, 1, 1),
(172, 2104167401, 10, 27, 1, 1),
(173, 2104167401, 11, 30, 1, 1),
(174, 2104167401, 12, 33, 1, 1),
(175, 2104167401, 13, 36, 1, 1),
(176, 2104167401, 14, 39, 1, 1),
(177, 942086823, 5, 14, 1, 2),
(178, 942086823, 6, 15, 1, 2),
(179, 942086823, 7, 18, 1, 2),
(180, 942086823, 8, 21, 1, 2),
(181, 942086823, 9, 24, 1, 2),
(182, 942086823, 10, 27, 1, 2),
(183, 942086823, 11, 30, 1, 2),
(184, 942086823, 12, 33, 1, 2),
(185, 942086823, 13, 36, 1, 2),
(186, 942086823, 14, 39, 1, 2),
(187, 628629664, 5, 14, 1, 4),
(188, 628629664, 6, 15, 1, 4),
(189, 628629664, 7, 18, 1, 4),
(190, 628629664, 8, 21, 1, 4),
(191, 628629664, 9, 24, 1, 4),
(192, 628629664, 10, 27, 1, 4),
(193, 628629664, 11, 30, 1, 4),
(194, 628629664, 12, 33, 1, 4),
(195, 628629664, 13, 36, 1, 4),
(196, 628629664, 14, 39, 1, 4),
(197, 2107266751, 5, 13, 1, 1),
(198, 2107266751, 6, 17, 1, 1),
(199, 2107266751, 7, 20, 1, 1),
(200, 2107266751, 8, 23, 1, 1),
(201, 2107266751, 9, 26, 1, 1),
(202, 2107266751, 10, 29, 1, 1),
(203, 2107266751, 11, 32, 1, 1),
(204, 2107266751, 12, 35, 1, 1),
(205, 2107266751, 13, 38, 1, 1),
(206, 2107266751, 14, 41, 1, 1),
(207, 554291666, 5, 13, 1, 2),
(208, 554291666, 6, 17, 1, 2),
(209, 554291666, 7, 20, 1, 2),
(210, 554291666, 8, 23, 1, 2),
(211, 554291666, 9, 26, 1, 2),
(212, 554291666, 10, 29, 1, 2),
(213, 554291666, 11, 32, 1, 2),
(214, 554291666, 12, 35, 1, 2),
(215, 554291666, 13, 38, 1, 2),
(216, 554291666, 14, 41, 1, 2),
(217, 1017862334, 5, 13, 1, 4),
(218, 1017862334, 6, 17, 1, 4),
(219, 1017862334, 7, 20, 1, 4),
(220, 1017862334, 8, 23, 1, 4),
(221, 1017862334, 9, 26, 1, 4),
(222, 1017862334, 10, 29, 1, 4),
(223, 1017862334, 11, 32, 1, 4),
(224, 1017862334, 12, 35, 1, 4),
(225, 1017862334, 13, 38, 1, 4),
(226, 1017862334, 14, 41, 1, 4),
(227, 1432099545, 5, 13, 1, 1),
(228, 1432099545, 6, 16, 1, 1),
(229, 1432099545, 7, 19, 1, 1),
(230, 1432099545, 8, 22, 1, 1),
(231, 1432099545, 9, 25, 1, 1),
(232, 1432099545, 10, 28, 1, 1),
(233, 1432099545, 11, 31, 1, 1),
(234, 1432099545, 12, 34, 1, 1),
(235, 1432099545, 13, 37, 1, 1),
(236, 1432099545, 14, 40, 1, 1),
(237, 2034378043, 5, 13, 1, 2),
(238, 2034378043, 6, 16, 1, 2),
(239, 2034378043, 7, 19, 1, 2),
(240, 2034378043, 8, 22, 1, 2),
(241, 2034378043, 9, 25, 1, 2),
(242, 2034378043, 10, 28, 1, 2),
(243, 2034378043, 11, 31, 1, 2),
(244, 2034378043, 12, 34, 1, 2),
(245, 2034378043, 13, 37, 1, 2),
(246, 2034378043, 14, 40, 1, 2),
(247, 1616150218, 5, 13, 1, 4),
(248, 1616150218, 6, 16, 1, 4),
(249, 1616150218, 7, 19, 1, 4),
(250, 1616150218, 8, 22, 1, 4),
(251, 1616150218, 9, 25, 1, 4),
(252, 1616150218, 10, 28, 1, 4),
(253, 1616150218, 11, 31, 1, 4),
(254, 1616150218, 12, 34, 1, 4),
(255, 1616150218, 13, 37, 1, 4),
(256, 1616150218, 14, 40, 1, 4),
(257, 1115717944, 5, 13, 1, 1),
(258, 1115717944, 6, 15, 1, 1),
(259, 1115717944, 7, 18, 1, 1),
(260, 1115717944, 8, 21, 1, 1),
(261, 1115717944, 9, 24, 1, 1),
(262, 1115717944, 10, 27, 1, 1),
(263, 1115717944, 11, 30, 1, 1),
(264, 1115717944, 12, 33, 1, 1),
(265, 1115717944, 13, 36, 1, 1),
(266, 1115717944, 14, 39, 1, 1),
(267, 1014436634, 5, 13, 1, 2),
(268, 1014436634, 6, 15, 1, 2),
(269, 1014436634, 7, 18, 1, 2),
(270, 1014436634, 8, 21, 1, 2),
(271, 1014436634, 9, 24, 1, 2),
(272, 1014436634, 10, 27, 1, 2),
(273, 1014436634, 11, 30, 1, 2),
(274, 1014436634, 12, 33, 1, 2),
(275, 1014436634, 13, 36, 1, 2),
(276, 1014436634, 14, 39, 1, 2),
(277, 1581918799, 5, 13, 1, 4),
(278, 1581918799, 6, 15, 1, 4),
(279, 1581918799, 7, 18, 1, 4),
(280, 1581918799, 8, 21, 1, 4),
(281, 1581918799, 9, 24, 1, 4),
(282, 1581918799, 10, 27, 1, 4),
(283, 1581918799, 11, 30, 1, 4),
(284, 1581918799, 12, 33, 1, 4),
(285, 1581918799, 13, 36, 1, 4),
(286, 1581918799, 14, 39, 1, 4),
(287, 122507622, 5, 12, 1, 1),
(288, 122507622, 6, 17, 1, 1),
(289, 122507622, 7, 20, 1, 1),
(290, 122507622, 8, 23, 1, 1),
(291, 122507622, 9, 26, 1, 1),
(292, 122507622, 10, 29, 1, 1),
(293, 122507622, 11, 32, 1, 1),
(294, 122507622, 12, 35, 1, 1),
(295, 122507622, 13, 38, 1, 1),
(296, 122507622, 14, 41, 1, 1),
(297, 208039289, 5, 12, 1, 2),
(298, 208039289, 6, 17, 1, 2),
(299, 208039289, 7, 20, 1, 2),
(300, 208039289, 8, 23, 1, 2),
(301, 208039289, 9, 26, 1, 2),
(302, 208039289, 10, 29, 1, 2),
(303, 208039289, 11, 32, 1, 2),
(304, 208039289, 12, 35, 1, 2),
(305, 208039289, 13, 38, 1, 2),
(306, 208039289, 14, 41, 1, 2),
(307, 607811325, 5, 12, 1, 4),
(308, 607811325, 6, 17, 1, 4),
(309, 607811325, 7, 20, 1, 4),
(310, 607811325, 8, 23, 1, 4),
(311, 607811325, 9, 26, 1, 4),
(312, 607811325, 10, 29, 1, 4),
(313, 607811325, 11, 32, 1, 4),
(314, 607811325, 12, 35, 1, 4),
(315, 607811325, 13, 38, 1, 4),
(316, 607811325, 14, 41, 1, 4),
(317, 589268640, 5, 12, 1, 1),
(318, 589268640, 6, 16, 1, 1),
(319, 589268640, 7, 19, 1, 1),
(320, 589268640, 8, 22, 1, 1),
(321, 589268640, 9, 25, 1, 1),
(322, 589268640, 10, 28, 1, 1),
(323, 589268640, 11, 31, 1, 1),
(324, 589268640, 12, 34, 1, 1),
(325, 589268640, 13, 37, 1, 1),
(326, 589268640, 14, 40, 1, 1),
(327, 1192286602, 5, 12, 1, 2),
(328, 1192286602, 6, 16, 1, 2),
(329, 1192286602, 7, 19, 1, 2),
(330, 1192286602, 8, 22, 1, 2),
(331, 1192286602, 9, 25, 1, 2),
(332, 1192286602, 10, 28, 1, 2),
(333, 1192286602, 11, 31, 1, 2),
(334, 1192286602, 12, 34, 1, 2),
(335, 1192286602, 13, 37, 1, 2),
(336, 1192286602, 14, 40, 1, 2),
(337, 1126645020, 5, 12, 1, 4),
(338, 1126645020, 6, 16, 1, 4),
(339, 1126645020, 7, 19, 1, 4),
(340, 1126645020, 8, 22, 1, 4),
(341, 1126645020, 9, 25, 1, 4),
(342, 1126645020, 10, 28, 1, 4),
(343, 1126645020, 11, 31, 1, 4),
(344, 1126645020, 12, 34, 1, 4),
(345, 1126645020, 13, 37, 1, 4),
(346, 1126645020, 14, 40, 1, 4),
(347, 1808743245, 5, 12, 1, 1),
(348, 1808743245, 6, 15, 1, 1),
(349, 1808743245, 7, 18, 1, 1),
(350, 1808743245, 8, 21, 1, 1),
(351, 1808743245, 9, 24, 1, 1),
(352, 1808743245, 10, 27, 1, 1),
(353, 1808743245, 11, 30, 1, 1),
(354, 1808743245, 12, 33, 1, 1),
(355, 1808743245, 13, 36, 1, 1),
(356, 1808743245, 14, 39, 1, 1),
(357, 1200757485, 5, 12, 1, 2),
(358, 1200757485, 6, 15, 1, 2),
(359, 1200757485, 7, 18, 1, 2),
(360, 1200757485, 8, 21, 1, 2),
(361, 1200757485, 9, 24, 1, 2),
(362, 1200757485, 10, 27, 1, 2),
(363, 1200757485, 11, 30, 1, 2),
(364, 1200757485, 12, 33, 1, 2),
(365, 1200757485, 13, 36, 1, 2),
(366, 1200757485, 14, 39, 1, 2),
(367, 328609674, 5, 12, 1, 4),
(368, 328609674, 6, 15, 1, 4),
(369, 328609674, 7, 18, 1, 4),
(370, 328609674, 8, 21, 1, 4),
(371, 328609674, 9, 24, 1, 4),
(372, 328609674, 10, 27, 1, 4),
(373, 328609674, 11, 30, 1, 4),
(374, 328609674, 12, 33, 1, 4),
(375, 328609674, 13, 36, 1, 4),
(376, 328609674, 14, 39, 1, 4);

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
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `uji`
--
ALTER TABLE `uji`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
