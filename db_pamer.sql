-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_pamer
CREATE DATABASE IF NOT EXISTS `db_pamer` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_pamer`;

-- Dumping structure for table db_pamer.datapendonors
CREATE TABLE IF NOT EXISTS `datapendonors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noTrans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendonorId` bigint(20) unsigned NOT NULL,
  `petugasaftapsId` bigint(20) unsigned NOT NULL,
  `petugasPengisiId` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `datapendonors_pendonorid_foreign` (`pendonorId`),
  KEY `datapendonors_petugasaftapsid_foreign` (`petugasaftapsId`),
  KEY `datapendonors_petugaspengisiid_foreign` (`petugasPengisiId`),
  CONSTRAINT `datapendonors_pendonorid_foreign` FOREIGN KEY (`pendonorId`) REFERENCES `_pendonors` (`id`),
  CONSTRAINT `datapendonors_petugasaftapsid_foreign` FOREIGN KEY (`petugasaftapsId`) REFERENCES `petugasaftaps` (`id`),
  CONSTRAINT `datapendonors_petugaspengisiid_foreign` FOREIGN KEY (`petugasPengisiId`) REFERENCES `petugas_hbs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.jabatans
CREATE TABLE IF NOT EXISTS `jabatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.mobilunit
CREATE TABLE IF NOT EXISTS `mobilunit` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ponsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_id` bigint(20) unsigned NOT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TanggalLahir` date NOT NULL,
  `gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donorTerakhir` date NOT NULL,
  `donorKe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mobilunit_pekerjaan_id_foreign` (`pekerjaan_id`),
  CONSTRAINT `mobilunit_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaans` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.pekerjaans
CREATE TABLE IF NOT EXISTS `pekerjaans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.pendidikans
CREATE TABLE IF NOT EXISTS `pendidikans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.pengganti
CREATE TABLE IF NOT EXISTS `pengganti` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ponsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_id` bigint(20) unsigned NOT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TanggalLahir` date NOT NULL,
  `gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donorTerakhir` date NOT NULL,
  `donorKe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pengganti_pekerjaan_id_foreign` (`pekerjaan_id`),
  CONSTRAINT `pengganti_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaans` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.pesans
CREATE TABLE IF NOT EXISTS `pesans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalLahir` date NOT NULL,
  `ponsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatanId` bigint(20) unsigned NOT NULL,
  `tenagaId` bigint(20) unsigned NOT NULL,
  `pendidikanId` bigint(20) unsigned NOT NULL,
  `tingkatPend_Id` bigint(20) unsigned NOT NULL,
  `statusPegawai_Id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `petugas_jabatanid_foreign` (`jabatanId`),
  KEY `petugas_tenagaid_foreign` (`tenagaId`),
  KEY `petugas_pendidikanid_foreign` (`pendidikanId`),
  KEY `petugas_tingkatpend_id_foreign` (`tingkatPend_Id`),
  KEY `petugas_statuspegawai_id_foreign` (`statusPegawai_Id`),
  CONSTRAINT `petugas_jabatanid_foreign` FOREIGN KEY (`jabatanId`) REFERENCES `jabatans` (`id`),
  CONSTRAINT `petugas_pendidikanid_foreign` FOREIGN KEY (`pendidikanId`) REFERENCES `pendidikans` (`id`),
  CONSTRAINT `petugas_statuspegawai_id_foreign` FOREIGN KEY (`statusPegawai_Id`) REFERENCES `status_pegawai` (`id`),
  CONSTRAINT `petugas_tenagaid_foreign` FOREIGN KEY (`tenagaId`) REFERENCES `tenagas` (`id`),
  CONSTRAINT `petugas_tingkatpend_id_foreign` FOREIGN KEY (`tingkatPend_Id`) REFERENCES `tingkat_pends` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.petugasaftaps
CREATE TABLE IF NOT EXISTS `petugasaftaps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pendonorId` bigint(20) unsigned NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noKantong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengesahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jamAftap` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dgmu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Metode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macamDonor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `petugasaftaps_pendonorid_foreign` (`pendonorId`),
  CONSTRAINT `petugasaftaps_pendonorid_foreign` FOREIGN KEY (`pendonorId`) REFERENCES `_pendonors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.petugas_hbs
CREATE TABLE IF NOT EXISTS `petugas_hbs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dokterId` bigint(20) unsigned NOT NULL,
  `pendonorId` bigint(20) unsigned NOT NULL,
  `tensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aftap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `petugas_hbs_dokterid_foreign` (`dokterId`),
  KEY `petugas_hbs_pendonorid_foreign` (`pendonorId`),
  CONSTRAINT `petugas_hbs_dokterid_foreign` FOREIGN KEY (`dokterId`) REFERENCES `petugas` (`id`),
  CONSTRAINT `petugas_hbs_pendonorid_foreign` FOREIGN KEY (`pendonorId`) REFERENCES `_pendonors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.sent_mes
CREATE TABLE IF NOT EXISTS `sent_mes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pesanId` bigint(20) unsigned NOT NULL,
  `contakId` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sent_mes_pesanid_foreign` (`pesanId`),
  KEY `sent_mes_contakid_foreign` (`contakId`),
  CONSTRAINT `sent_mes_contakid_foreign` FOREIGN KEY (`contakId`) REFERENCES `_pendonors` (`id`),
  CONSTRAINT `sent_mes_pesanid_foreign` FOREIGN KEY (`pesanId`) REFERENCES `pesans` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.status_pegawai
CREATE TABLE IF NOT EXISTS `status_pegawai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `statusPegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.tenagas
CREATE TABLE IF NOT EXISTS `tenagas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tenaga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.tingkat_pends
CREATE TABLE IF NOT EXISTS `tingkat_pends` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tingkatPendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_pamer._pendonors
CREATE TABLE IF NOT EXISTS `_pendonors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ponsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noKartu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_id` bigint(20) unsigned NOT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TanggalLahir` date NOT NULL,
  `penghargaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dsdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donorTerakhir` date NOT NULL,
  `donorKe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `_pendonors_pekerjaan_id_foreign` (`pekerjaan_id`),
  CONSTRAINT `_pendonors_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
