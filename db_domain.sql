-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for domain_trustpositif
DROP DATABASE IF EXISTS `domain_trustpositif`;
CREATE DATABASE IF NOT EXISTS `domain_trustpositif` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `domain_trustpositif`;

-- Dumping structure for table domain_trustpositif.tb_domains
DROP TABLE IF EXISTS `tb_domains`;
CREATE TABLE IF NOT EXISTS `tb_domains` (
  `seq` int NOT NULL AUTO_INCREMENT,
  `domain_name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `domain_is_blocked` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ssl_exp` date DEFAULT NULL,
  `domain_add_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`seq`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table domain_trustpositif.tb_domains: ~184 rows (approximately)
INSERT INTO `tb_domains` (`seq`, `domain_name`, `domain_is_blocked`, `ssl_exp`, `domain_add_dt`) VALUES
	(62, 'dingdongtogel176.net', 'Ada', '2023-05-06', '2023-03-16 23:20:48'),
	(68, '4dpwvip.com', 'Ada', '2023-05-02', '2023-03-16 23:41:59'),
	(69, 'danatgl.net', 'Ada', '2023-04-18', '2023-03-16 23:41:59'),
	(70, 'danatoto.com', 'Ada', '2023-06-06', '2023-03-16 23:41:59'),
	(71, 'danatoto166.com', 'Tidak Ada', '2023-06-06', '2023-03-16 23:41:59'),
	(72, 'danatoto166.net', 'Tidak Ada', '2023-04-18', '2023-03-16 23:41:59'),
	(73, 'danatoto166.org', 'Tidak Ada', '2023-04-18', '2023-03-16 23:41:59'),
	(74, 'danatoto168.com', 'Tidak Ada', '2023-06-06', '2023-03-16 23:41:59'),
	(75, 'danatoto168.org', 'Tidak Ada', '2023-06-06', '2023-03-16 23:41:59'),
	(76, 'danatoto176.com', 'Tidak Ada', '2023-07-05', '2023-03-16 23:41:59'),
	(77, 'dingdongtgl.com', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(78, 'dingdongtogel.com', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(79, 'dingdongtogel.net', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(80, 'dingdongtogel.org', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(81, 'dingdongtogel118.com', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(82, 'dingdongtogel166.com', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(83, 'dingdongtogel166.net', 'Tidak Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(84, 'dingdongtogel166.org', 'Tidak Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(85, 'dingdongtogel168.com', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(86, 'dingdongtogel176.com', 'Ada', '2023-06-11', '2023-03-16 23:41:59'),
	(87, 'fiatogel.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(88, 'fiatogel.net', 'Tidak Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(89, 'fiatogel.org', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(90, 'fiatogel166.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(91, 'fiatogel166.net', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(92, 'fiatogel166.org', 'Tidak Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(93, 'fiatogel168.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(94, 'fiatogel168.org', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(95, 'gengapk.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(96, 'gengcasino.com', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(97, 'gengtgl.org', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(98, 'gengtogel.com', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(99, 'gengtogel.net', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(100, 'gengtogel.org', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(101, 'gengtogel166.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(102, 'gengtogel166.net', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(103, 'gengtogel166.org', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(104, 'gengtogel176.com', 'Tidak Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(105, 'gengtoto.com', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(106, 'gengtoto.net', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(107, 'gengtoto168.com', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(108, 'gengtoto168.org', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(109, 'gengtoto888.com', 'Ada', '2023-05-03', '2023-03-16 23:41:59'),
	(110, 'goltgl.org', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(111, 'goltgl88.com', 'Tidak Ada', NULL, '2023-03-16 23:41:59'),
	(112, 'goltogel.com', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(113, 'goltogel.net', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(114, 'goltogel.org', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(115, 'goltogel118.com', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(116, 'goltogel166.com', 'Tidak Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(117, 'goltogel166.net', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(118, 'goltogel166.org', 'Tidak Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(119, 'goltogel168.com', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(120, 'goltogel168.org', 'Ada', '1970-01-01', '2023-03-16 23:41:59'),
	(121, 'goltogel176.com', 'Tidak Ada', NULL, '2023-03-16 23:41:59'),
	(122, 'hometogel.com', 'Ada', NULL, '2023-03-16 23:41:59'),
	(123, 'hometogel.live', 'Ada', NULL, '2023-03-16 23:41:59'),
	(124, 'hometogel.org', 'Ada', NULL, '2023-03-16 23:41:59'),
	(125, 'hometogel166.com', 'Tidak Ada', NULL, '2023-03-16 23:41:59'),
	(126, 'hometogel166.net', 'Ada', NULL, '2023-03-16 23:41:59'),
	(127, 'hometogel166.org', 'Ada', NULL, '2023-03-16 23:41:59'),
	(128, 'hometogel168.com', 'Ada', NULL, '2023-03-16 23:41:59'),
	(129, 'hometogel168.org', 'Ada', NULL, '2023-03-16 23:41:59'),
	(130, 'hometogel176.com', 'Tidak Ada', NULL, '2023-03-16 23:41:59'),
	(131, 'indratogel.com', 'Tidak Ada', NULL, '2023-03-16 23:41:59'),
	(132, 'indratogel.net', 'Ada', NULL, '2023-03-16 23:41:59'),
	(133, 'indratogel.online', 'Ada', NULL, '2023-03-16 23:41:59'),
	(134, 'indratogel.org', 'Ada', NULL, '2023-03-16 23:41:59'),
	(135, 'indratogel166.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(136, 'indratogel166.net', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(137, 'indratogel166.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(138, 'indratogel168.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(139, 'indratogel168.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(140, 'indratogel176.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(141, 'ingdongtogel168.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(142, 'jiewwijcgeng.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(143, 'jonitgl.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(144, 'jonitgl.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(145, 'jonitogel.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(146, 'jonitogel.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(147, 'jonitogel.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(148, 'jonitogel118.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(149, 'jonitogel166.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(150, 'jonitogel166.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(151, 'jonitogel166.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(152, 'jonitogel168.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(153, 'jonitogel168.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(154, 'jonitogel176.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(155, 'linetgl.cc', 'Ada', NULL, '2023-03-16 23:42:00'),
	(156, 'linetgl.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(157, 'linetgl.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(158, 'linetogel.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(159, 'linetogel.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(160, 'linetogel118.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(161, 'linetogel166.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(162, 'linetogel166.net', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(163, 'linetogel166.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(164, 'linetogel168.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(165, 'linetogel168.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(166, 'linetogel176.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(167, 'lunatgl.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(168, 'lunatgl.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(169, 'lunatogel.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(170, 'lunatogel.net', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(171, 'lunatogel.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(172, 'lunatogel166.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(173, 'lunatogel166.net', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(174, 'lunatogel166.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(175, 'lunatogel168.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(176, 'lunatogel168.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(177, 'lunatogel176.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(178, 'mariatgl.net', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(179, 'mariatgl.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(180, 'mariatogel.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(181, 'mariatogel.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(182, 'mariatogel166.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(183, 'mariatogel166.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(184, 'mariatogel166.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(185, 'mariatogel168.com', 'Ada', NULL, '2023-03-16 23:42:00'),
	(186, 'mariatogel168.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(187, 'mariatogel176.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(188, 'nanastoto.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(189, 'nanastoto.net', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(190, 'oppatoto.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(191, 'oppatoto.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(192, 'oppatoto.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(193, 'oppatoto118.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(194, 'oppatoto166.net', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(195, 'oppatoto166.org', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(196, 'partaitogel.com', 'Tidak Ada', NULL, '2023-03-16 23:42:00'),
	(197, 'partaitogel.net', 'Tidak Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(198, 'partaitogel166.com', 'Tidak Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(199, 'partaitogel166.net', 'Tidak Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(200, 'partaitogel168.com', 'Tidak Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(201, 'partaitogel168.org', 'Tidak Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(202, 'partaitogel176.com', 'Tidak Ada', '2023-07-05', '2023-03-16 23:42:00'),
	(203, 'partaitogel88.com', 'Tidak Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(204, 'patihtogel.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(205, 'patihtogel.net', 'Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(206, 'patihtoto.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(207, 'patihtoto.net', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(208, 'patihtoto.org', 'Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(209, 'patihtoto166.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(210, 'patihtoto166.net', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(211, 'patihtoto166.org', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(212, 'patihtoto168.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(213, 'patihtoto168.org', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(214, 'patihtoto176.com', 'Tidak Ada', '2023-06-25', '2023-03-16 23:42:00'),
	(215, 'protgl.org', 'Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(216, 'protogel.com', 'Tidak Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(217, 'protogel.net', 'Ada', NULL, '2023-03-16 23:42:00'),
	(218, 'protogel.org', 'Ada', NULL, '2023-03-16 23:42:00'),
	(219, 'protogel166.com', 'Tidak Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(220, 'protogel166.net', 'Tidak Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(221, 'protogel166.org', 'Tidak Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(222, 'protogel168.com', 'Tidak Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(223, 'protogel168.org', 'Tidak Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(224, 'protogel176.com', 'Tidak Ada', '2024-02-27', '2023-03-16 23:42:00'),
	(225, 'pwvip4d.com', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(226, 'pwvip4d.net', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(227, 'pwvip4d.org', 'Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(228, 'pwvip4d166.com', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(229, 'pwvip4d166.net', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(230, 'pwvip4d166.org', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(231, 'pwvip4d168.com', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(232, 'pwvip4d168.org', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(233, 'pwvip4d176.com', 'Tidak Ada', '2024-02-26', '2023-03-16 23:42:00'),
	(234, 'togelfia.com', 'Tidak Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(235, 'togelfia.net', 'Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(236, 'togelfia.org', 'Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(237, 'togelgol.org', 'Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(238, 'togelhome.com', 'Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(239, 'togelhome.net', 'Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(240, 'togelhome.org', 'Ada', '1970-01-01', '2023-03-16 23:42:00'),
	(241, 'togelindra.net', 'Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(242, 'togelindra.org', 'Ada', '2023-05-03', '2023-03-16 23:42:00'),
	(243, 'togeljoni.com', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(244, 'togeljoni.org', 'Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(245, 'togeljoni118.com', 'Tidak Ada', '2023-05-02', '2023-03-16 23:42:00'),
	(246, 'togeljoni168.org', 'Ada', '2024-02-02', '2023-03-16 23:42:00'),
	(247, 'togelline.org', 'Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(248, 'togeloppa.com', 'Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(249, 'togeloppa.net', 'Ada', '2023-05-10', '2023-03-16 23:42:00'),
	(250, 'togeloppa.org', 'Ada', '2023-05-10', '2023-03-16 23:42:00');

-- Dumping structure for table domain_trustpositif.tb_user
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` enum('superadmin','operator') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'operator',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table domain_trustpositif.tb_user: ~2 rows (approximately)
INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
	(1, 'daeng', 'daeng1', 'admin', 'superadmin'),
	(2, 'daenglagi', 'daeng2', 'admin', 'operator');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
