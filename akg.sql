-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table project-rpl.gizi1
CREATE TABLE IF NOT EXISTS `gizi1` (
  `id_gizi1` int(11) NOT NULL AUTO_INCREMENT,
  `energi` int(11) NOT NULL DEFAULT 0,
  `protein` int(11) NOT NULL DEFAULT 0,
  `total_lemak` int(11) NOT NULL DEFAULT 0,
  `omega3` int(11) NOT NULL DEFAULT 0,
  `omega6` int(11) NOT NULL DEFAULT 0,
  `karbohidrat` int(11) NOT NULL DEFAULT 0,
  `serat` int(11) NOT NULL DEFAULT 0,
  `air` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_gizi1`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project-rpl.gizi1: ~26 rows (approximately)
INSERT INTO `gizi1` (`id_gizi1`, `energi`, `protein`, `total_lemak`, `omega3`, `omega6`, `karbohidrat`, `serat`, `air`) VALUES
	(1, 550, 9, 31, 0, 4, 59, 0, 700),
	(2, 800, 15, 35, 0, 4, 105, 11, 900),
	(3, 1350, 20, 45, 0, 7, 215, 19, 1150),
	(4, 1400, 25, 50, 0, 10, 220, 20, 1450),
	(5, 1650, 40, 55, 0, 10, 250, 23, 1650),
	(6, 2000, 50, 65, 1, 12, 300, 28, 1850),
	(7, 2400, 70, 80, 1, 16, 350, 34, 2100),
	(8, 2650, 75, 85, 1, 16, 400, 37, 2300),
	(9, 2650, 65, 75, 1, 17, 430, 37, 2500),
	(10, 2550, 65, 70, 1, 17, 415, 36, 2500),
	(11, 2150, 65, 60, 1, 14, 340, 30, 2500),
	(12, 1800, 64, 50, 1, 14, 275, 25, 1800),
	(13, 1600, 64, 45, 1, 14, 235, 22, 1600),
	(14, 1900, 55, 65, 1, 10, 280, 27, 1850),
	(15, 2050, 65, 70, 1, 11, 300, 29, 2100),
	(16, 2100, 65, 70, 1, 11, 300, 29, 2150),
	(17, 2250, 60, 65, 1, 12, 360, 32, 2350),
	(18, 2150, 60, 60, 1, 12, 340, 30, 2350),
	(19, 1800, 60, 50, 1, 11, 280, 25, 2350),
	(20, 1550, 58, 45, 1, 11, 230, 22, 1550),
	(21, 1400, 58, 40, 1, 11, 200, 20, 1400),
	(22, 180, 1, 2, 0, 2, 25, 3, 300),
	(23, 300, 10, 2, 0, 2, 40, 4, 300),
	(24, 300, 30, 2, 0, 2, 40, 4, 300),
	(25, 330, 20, 2, 0, 2, 45, 5, 800),
	(26, 400, 15, 2, 0, 2, 55, 6, 650);

-- Dumping structure for table project-rpl.gizi2
CREATE TABLE IF NOT EXISTS `gizi2` (
  `id_gizi2` int(11) NOT NULL AUTO_INCREMENT,
  `vitA` int(11) NOT NULL DEFAULT 0,
  `vitD` int(11) NOT NULL DEFAULT 0,
  `vitE` int(11) NOT NULL DEFAULT 0,
  `vitK` int(11) NOT NULL DEFAULT 0,
  `vitB1` int(11) NOT NULL DEFAULT 0,
  `vitB2` int(11) NOT NULL DEFAULT 0,
  `vitB3` int(11) NOT NULL DEFAULT 0,
  `vitB5` int(11) NOT NULL DEFAULT 0,
  `vitB6` int(11) NOT NULL DEFAULT 0,
  `folat` int(11) NOT NULL DEFAULT 0,
  `vitB12` int(11) NOT NULL DEFAULT 0,
  `biotin` int(11) NOT NULL DEFAULT 0,
  `kolin` int(11) NOT NULL DEFAULT 0,
  `vitC` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_gizi2`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project-rpl.gizi2: ~26 rows (approximately)
INSERT INTO `gizi2` (`id_gizi2`, `vitA`, `vitD`, `vitE`, `vitK`, `vitB1`, `vitB2`, `vitB3`, `vitB5`, `vitB6`, `folat`, `vitB12`, `biotin`, `kolin`, `vitC`) VALUES
	(1, 375, 10, 4, 5, 0, 0, 2, 1, 0, 80, 0, 5, 125, 40),
	(2, 400, 10, 5, 10, 0, 0, 4, 1, 0, 80, 1, 6, 150, 50),
	(3, 400, 15, 6, 15, 0, 0, 6, 2, 0, 160, 1, 8, 200, 40),
	(4, 450, 15, 7, 20, 0, 0, 8, 3, 0, 200, 1, 12, 250, 45),
	(5, 500, 15, 8, 25, 0, 0, 10, 4, 1, 300, 2, 12, 375, 45),
	(6, 600, 15, 11, 35, 1, 1, 12, 5, 1, 400, 3, 20, 375, 50),
	(7, 600, 15, 15, 55, 1, 1, 16, 5, 1, 400, 4, 25, 550, 75),
	(8, 700, 15, 15, 55, 1, 1, 16, 5, 1, 400, 4, 30, 550, 90),
	(9, 650, 15, 15, 65, 1, 1, 16, 5, 1, 400, 4, 30, 550, 90),
	(10, 650, 15, 15, 65, 1, 1, 16, 5, 1, 400, 4, 30, 550, 90),
	(11, 650, 15, 15, 65, 1, 1, 16, 5, 1, 400, 4, 30, 550, 90),
	(12, 650, 20, 15, 65, 1, 1, 16, 5, 1, 400, 4, 30, 550, 90),
	(13, 650, 20, 15, 65, 1, 1, 16, 5, 1, 400, 4, 30, 550, 90),
	(14, 600, 15, 15, 35, 1, 1, 12, 5, 1, 400, 3, 20, 375, 50),
	(15, 600, 15, 15, 55, 1, 1, 14, 5, 1, 400, 4, 25, 400, 65),
	(16, 600, 15, 15, 55, 1, 1, 14, 5, 1, 400, 4, 30, 425, 75),
	(17, 600, 15, 15, 55, 1, 1, 14, 5, 1, 400, 4, 30, 425, 75),
	(18, 600, 15, 15, 55, 1, 1, 14, 5, 1, 400, 4, 30, 425, 75),
	(19, 600, 15, 15, 55, 1, 1, 14, 5, 1, 400, 4, 30, 425, 75),
	(20, 600, 20, 20, 55, 1, 1, 14, 5, 1, 400, 4, 30, 425, 75),
	(21, 600, 20, 20, 55, 1, 1, 14, 5, 1, 400, 4, 30, 425, 75),
	(22, 300, 0, 0, 0, 0, 0, 4, 1, 0, 200, 0, 0, 25, 10),
	(23, 300, 0, 0, 0, 0, 0, 4, 1, 0, 200, 0, 0, 25, 10),
	(24, 300, 0, 0, 0, 0, 0, 4, 1, 0, 200, 0, 0, 25, 10),
	(25, 350, 0, 4, 0, 0, 0, 3, 2, 0, 100, 1, 5, 125, 45),
	(26, 350, 0, 4, 0, 0, 0, 3, 2, 0, 100, 1, 5, 125, 45);

-- Dumping structure for table project-rpl.gizi3
CREATE TABLE IF NOT EXISTS `gizi3` (
  `id_gizi3` int(11) NOT NULL AUTO_INCREMENT,
  `kalsium` int(11) NOT NULL DEFAULT 0,
  `fosfor` int(11) NOT NULL DEFAULT 0,
  `magnesium` int(11) NOT NULL DEFAULT 0,
  `besi` double NOT NULL DEFAULT 0,
  `iodium` int(11) NOT NULL DEFAULT 0,
  `seng` double NOT NULL DEFAULT 0,
  `selenium` int(11) NOT NULL DEFAULT 0,
  `mangan` double NOT NULL DEFAULT 0,
  `fluor` double NOT NULL DEFAULT 0,
  `kromium` double NOT NULL DEFAULT 0,
  `kalium` int(11) NOT NULL DEFAULT 0,
  `natrium` int(11) NOT NULL DEFAULT 0,
  `klor` int(11) NOT NULL DEFAULT 0,
  `tembaga` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_gizi3`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project-rpl.gizi3: ~25 rows (approximately)
INSERT INTO `gizi3` (`id_gizi3`, `kalsium`, `fosfor`, `magnesium`, `besi`, `iodium`, `seng`, `selenium`, `mangan`, `fluor`, `kromium`, `kalium`, `natrium`, `klor`, `tembaga`) VALUES
	(1, 200, 100, 30, 0.3, 90, 1.1, 7, 0.003, 0.01, 0.2, 400, 120, 180, 200),
	(2, 270, 275, 55, 11, 120, 3, 10, 0.7, 0.5, 6, 700, 370, 570, 220),
	(3, 650, 460, 65, 7, 90, 3, 18, 1.2, 0.7, 14, 2600, 800, 1200, 340),
	(4, 1000, 500, 95, 10, 120, 5, 21, 1.5, 1, 16, 2700, 900, 1300, 440),
	(5, 1000, 500, 135, 10, 120, 5, 22, 1.7, 1.4, 21, 3200, 1000, 1500, 570),
	(6, 1200, 1250, 160, 8, 120, 8, 22, 1.9, 1.8, 28, 3900, 1300, 1900, 700),
	(7, 1200, 1250, 225, 11, 150, 11, 30, 2.2, 2.5, 36, 4800, 1500, 2300, 795),
	(8, 1200, 1250, 270, 11, 150, 11, 36, 2.3, 4, 41, 5300, 1700, 2500, 890),
	(9, 1000, 700, 360, 9, 150, 11, 30, 2.3, 4, 36, 4700, 1500, 2250, 900),
	(10, 1000, 700, 360, 9, 150, 11, 30, 2.3, 4, 34, 4700, 1500, 2250, 900),
	(11, 1200, 700, 360, 9, 150, 11, 30, 2.3, 4, 29, 4700, 1300, 2100, 900),
	(12, 1200, 700, 350, 9, 150, 11, 29, 2.3, 4, 24, 4700, 1100, 1900, 900),
	(13, 1200, 700, 350, 9, 150, 11, 29, 2.3, 4, 21, 4700, 1000, 1600, 900),
	(14, 1200, 1250, 170, 8, 120, 8, 19, 1.6, 1.9, 26, 4400, 1400, 2100, 700),
	(15, 1200, 1250, 220, 15, 150, 9, 24, 1.6, 2.4, 27, 4800, 1500, 2300, 795),
	(16, 1200, 1250, 230, 15, 150, 9, 26, 1.8, 3, 29, 5000, 1600, 2400, 890),
	(17, 1000, 700, 330, 18, 150, 8, 24, 1.8, 3, 30, 4700, 1500, 2250, 900),
	(18, 1000, 700, 340, 18, 150, 8, 25, 1.8, 3, 29, 4700, 1500, 2250, 900),
	(19, 1200, 700, 340, 8, 150, 8, 25, 1.8, 3, 24, 4700, 1400, 2100, 900),
	(20, 1200, 700, 320, 8, 150, 8, 24, 1.8, 3, 21, 4700, 1200, 1900, 900),
	(21, 1200, 700, 320, 8, 150, 8, 24, 1.8, 3, 19, 4700, 1000, 1600, 900),
	(22, 200, 0, 0, 0, 70, 2, 5, 0.2, 0, 5, 0, 0, 0, 100),
	(23, 200, 0, 0, 9, 70, 4, 5, 0.2, 0, 5, 0, 0, 0, 100),
	(24, 200, 0, 0, 9, 70, 4, 5, 0.2, 0, 5, 0, 0, 0, 100),
	(25, 200, 0, 0, 0, 140, 5, 10, 0.8, 0, 20, 400, 0, 0, 400),
	(26, 200, 0, 0, 0, 140, 5, 10, 0.8, 0, 20, 400, 0, 0, 400);

-- Dumping structure for table project-rpl.kelompok_umur
CREATE TABLE IF NOT EXISTS `kelompok_umur` (
  `id_kel` int(11) NOT NULL AUTO_INCREMENT,
  `batas_awal` int(11) DEFAULT NULL,
  `batas_akhir` int(11) DEFAULT NULL,
  `bulan_tahun` varchar(5) DEFAULT NULL,
  `status` varchar(9) DEFAULT NULL,
  `gizi1` int(11) DEFAULT NULL,
  `gizi2` int(11) DEFAULT NULL,
  `gizi3` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kel`),
  KEY `gizi1` (`gizi1`),
  KEY `gizi2` (`gizi2`),
  KEY `gizi3` (`gizi3`),
  CONSTRAINT `FK_kelompok_umur_gizi1` FOREIGN KEY (`gizi1`) REFERENCES `gizi1` (`id_gizi1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_kelompok_umur_gizi2` FOREIGN KEY (`gizi2`) REFERENCES `gizi2` (`id_gizi2`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_kelompok_umur_gizi3` FOREIGN KEY (`gizi3`) REFERENCES `gizi3` (`id_gizi3`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table project-rpl.kelompok_umur: ~26 rows (approximately)
INSERT INTO `kelompok_umur` (`id_kel`, `batas_awal`, `batas_akhir`, `bulan_tahun`, `status`, `gizi1`, `gizi2`, `gizi3`) VALUES
	(1, 0, 5, 'bulan', 'bayi', 1, 1, 1),
	(2, 6, 11, 'bulan', 'bayi', 2, 2, 2),
	(3, 1, 3, 'tahun', 'bayi', 3, 3, 3),
	(4, 4, 6, 'tahun', 'bayi', 4, 4, 4),
	(5, 7, 9, 'tahun', 'bayi', 5, 5, 5),
	(6, 10, 12, 'tahun', 'laki-laki', 6, 6, 6),
	(7, 13, 15, 'tahun', 'laki-laki', 7, 7, 7),
	(8, 16, 18, 'tahun', 'laki-laki', 8, 8, 8),
	(9, 19, 29, 'tahun', 'laki-laki', 9, 9, 9),
	(10, 30, 49, 'tahun', 'laki-laki', 10, 10, 10),
	(11, 50, 64, 'tahun', 'laki-laki', 11, 11, 11),
	(12, 65, 80, 'tahun', 'laki-laki', 12, 12, 12),
	(13, 81, 130, 'tahun', 'laki-laki', 13, 13, 13),
	(14, 10, 12, 'tahun', 'perempuan', 14, 14, 14),
	(15, 13, 15, 'tahun', 'perempuan', 15, 15, 15),
	(16, 16, 18, 'tahun', 'perempuan', 16, 16, 16),
	(17, 19, 29, 'tahun', 'perempuan', 17, 17, 17),
	(18, 30, 49, 'tahun', 'perempuan', 18, 18, 18),
	(19, 50, 64, 'tahun', 'perempuan', 19, 19, 19),
	(20, 65, 80, 'tahun', 'perempuan', 20, 20, 20),
	(21, 81, 130, 'tahun', 'perempuan', 21, 21, 21),
	(22, 1, 3, 'bulan', 'hamil', 22, 22, 22),
	(23, 4, 6, 'bulan', 'hamil', 23, 23, 23),
	(24, 7, 9, 'bulan', 'hamil', 24, 24, 24),
	(25, 1, 6, 'bulan', 'menyusui', 25, 25, 25),
	(26, 7, 12, 'bulan', 'menyusui', 26, 26, 26);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
