-- --------------------------------------------------------
-- 主机:                           localhost
-- 服务器版本:                        5.7.24 - MySQL Community Server (GPL)
-- 服务器OS:                        Win64
-- HeidiSQL 版本:                  10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for demo
CREATE DATABASE IF NOT EXISTS `demo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `demo`;

-- Dumping structure for table demo.tbl_ceshi
CREATE TABLE IF NOT EXISTS `tbl_ceshi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `age` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table demo.tbl_ceshi: ~8 rows (大约)
/*!40000 ALTER TABLE `tbl_ceshi` DISABLE KEYS */;
INSERT INTO `tbl_ceshi` (`id`, `name`, `age`) VALUES
	(1, 'huibf', 10),
	(2, 'laozhu', 15),
	(3, 'longjie', 45),
	(4, 'Wruce Bayne', 10),
	(5, 'Wruce Bayne', 10),
	(6, 'Wruce Bayne', 10),
	(7, 'Wruce Bayne', 10),
	(8, 'Wruce Bayne', 10),
	(9, 'Wruce Bayne', 10);
/*!40000 ALTER TABLE `tbl_ceshi` ENABLE KEYS */;

-- Dumping structure for table demo.tbl_failed_jobs
CREATE TABLE IF NOT EXISTS `tbl_failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.tbl_failed_jobs: ~0 rows (大约)
/*!40000 ALTER TABLE `tbl_failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_failed_jobs` ENABLE KEYS */;

-- Dumping structure for table demo.tbl_migrations
CREATE TABLE IF NOT EXISTS `tbl_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.tbl_migrations: ~4 rows (大约)
/*!40000 ALTER TABLE `tbl_migrations` DISABLE KEYS */;
INSERT INTO `tbl_migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users11_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2014_10_12_000000_create_users_table', 2);
/*!40000 ALTER TABLE `tbl_migrations` ENABLE KEYS */;

-- Dumping structure for table demo.tbl_password_resets
CREATE TABLE IF NOT EXISTS `tbl_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `tbl_password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.tbl_password_resets: ~0 rows (大约)
/*!40000 ALTER TABLE `tbl_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_password_resets` ENABLE KEYS */;

-- Dumping structure for table demo.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbl_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.tbl_users: ~0 rows (大约)
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'huibf', '15222@sldk.dsd', NULL, '123456', NULL, NULL, NULL);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

-- Dumping structure for table demo.tbl_users11
CREATE TABLE IF NOT EXISTS `tbl_users11` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tbl_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table demo.tbl_users11: ~0 rows (大约)
/*!40000 ALTER TABLE `tbl_users11` DISABLE KEYS */;
INSERT INTO `tbl_users11` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'huibf', '191207953@qq.commm', '2019-11-05 17:03:48', '123456', NULL, NULL, NULL);
/*!40000 ALTER TABLE `tbl_users11` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
