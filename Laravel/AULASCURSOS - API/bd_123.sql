-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laravel`;

-- Dumping structure for table laravel.actividades
CREATE TABLE IF NOT EXISTS `actividades` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `curso_id` bigint(20) unsigned NOT NULL,
  `tema_id` bigint(20) unsigned NOT NULL,
  `numero` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_actividad_id` bigint(20) unsigned NOT NULL,
  `formato_archivo_id` bigint(20) unsigned NOT NULL,
  `nombre_recurso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `actividades_tipo_actividad_id_foreign` (`tipo_actividad_id`),
  KEY `actividades_formato_archivo_id_foreign` (`formato_archivo_id`),
  KEY `actividades_tema_id_foreign` (`tema_id`),
  KEY `actividades_curso_id_foreign` (`curso_id`),
  CONSTRAINT `actividades_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `actividades_formato_archivo_id_foreign` FOREIGN KEY (`formato_archivo_id`) REFERENCES `formato_archivo` (`id`),
  CONSTRAINT `actividades_tema_id_foreign` FOREIGN KEY (`tema_id`) REFERENCES `temas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `actividades_tipo_actividad_id_foreign` FOREIGN KEY (`tipo_actividad_id`) REFERENCES `tipo_actividad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.actividades: ~0 rows (approximately)
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` (`id`, `curso_id`, `tema_id`, `numero`, `nombre`, `tipo_actividad_id`, `formato_archivo_id`, `nombre_recurso`, `activo`) VALUES
	(2, 1, 1, 1, 'ASDAD', 1, 1, '123131', 0),
	(3, 1, 1, 2, '1213', 3, 2, '123123', 0),
	(5, 1, 1, 123, '', 4, 1, '', 0),
	(6, 1, 2, 1, '213123', 2, 1, '', 0);
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;

-- Dumping structure for table laravel.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `numero` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subnivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetivo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cursos_user_id_foreign` (`user_id`),
  CONSTRAINT `cursos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.cursos: ~0 rows (approximately)
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`id`, `user_id`, `numero`, `nombre`, `nivel`, `subnivel`, `area`, `imagen`, `objetivo`) VALUES
	(1, 1, 1, 'CCCC', 'NNN', 'SSSS', 'AAA', '111', '1123123');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Dumping structure for table laravel.formato_archivo
CREATE TABLE IF NOT EXISTS `formato_archivo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.formato_archivo: ~2 rows (approximately)
/*!40000 ALTER TABLE `formato_archivo` DISABLE KEYS */;
INSERT INTO `formato_archivo` (`id`, `nombre`) VALUES
	(1, 'pdf'),
	(2, 'youtube');
/*!40000 ALTER TABLE `formato_archivo` ENABLE KEYS */;

-- Dumping structure for table laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_10_04_200744_create_aulascursosyap', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel.temas
CREATE TABLE IF NOT EXISTS `temas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.temas: ~0 rows (approximately)
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
INSERT INTO `temas` (`id`, `nombre`) VALUES
	(1, 'TEMA 01'),
	(2, 'TEMA 02'),
	(3, 'TEMA 03'),
	(4, 'TEMA 04');
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;

-- Dumping structure for table laravel.tipo_actividad
CREATE TABLE IF NOT EXISTS `tipo_actividad` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.tipo_actividad: ~4 rows (approximately)
/*!40000 ALTER TABLE `tipo_actividad` DISABLE KEYS */;
INSERT INTO `tipo_actividad` (`id`, `nombre`) VALUES
	(1, 'Teoria'),
	(2, 'Practica'),
	(3, 'Guia'),
	(4, 'Evaluacion');
/*!40000 ALTER TABLE `tipo_actividad` ENABLE KEYS */;

-- Dumping structure for table laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verificado` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrador` int(11) NOT NULL,
  `perfil` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_login_unique` (`login`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `login`, `password`, `nombre`, `apellido`, `email`, `email_verificado`, `foto`, `administrador`, `perfil`, `activo`) VALUES
	(1, 'JAQUINO', '', '', '', '', 0, '', 0, 0, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
