-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para bd_hosie
CREATE DATABASE IF NOT EXISTS `bd_hosie` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_hosie`;

-- Copiando estrutura para tabela bd_hosie.budgets
CREATE TABLE IF NOT EXISTS `budgets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_hosie.budgets: ~22 rows (aproximadamente)
/*!40000 ALTER TABLE `budgets` DISABLE KEYS */;
INSERT INTO `budgets` (`id`, `mail`, `type`, `meters`, `quant`, `created_at`, `updated_at`) VALUES
	(4, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:40:45', '2019-12-20 20:40:45'),
	(5, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:41:13', '2019-12-20 20:41:13'),
	(6, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:34', '2019-12-20 20:46:34'),
	(7, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:35', '2019-12-20 20:46:35'),
	(8, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:35', '2019-12-20 20:46:35'),
	(9, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:35', '2019-12-20 20:46:35'),
	(10, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:35', '2019-12-20 20:46:35'),
	(11, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:35', '2019-12-20 20:46:35'),
	(12, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:36', '2019-12-20 20:46:36'),
	(13, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:36', '2019-12-20 20:46:36'),
	(14, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:36', '2019-12-20 20:46:36'),
	(15, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:36', '2019-12-20 20:46:36'),
	(16, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:36', '2019-12-20 20:46:36'),
	(17, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:37', '2019-12-20 20:46:37'),
	(18, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:46:37', '2019-12-20 20:46:37'),
	(19, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:48:22', '2019-12-20 20:48:22'),
	(20, 'milena03rosa@gmail.com', 'Studio', '30', '2', '2019-12-20 20:48:30', '2019-12-20 20:48:30'),
	(21, '208232017@eniac.edu.br', 'Sobrado', '80', '4', '2019-12-20 20:50:14', '2019-12-20 20:50:14'),
	(22, '208232017@eniac.edu.br', 'Sobrado', '80', '4', '2019-12-20 20:53:25', '2019-12-20 20:53:25'),
	(23, 'eduardarosa@gmail.com', 'Studio', '18', '2', '2019-12-20 20:54:11', '2019-12-20 20:54:11');
/*!40000 ALTER TABLE `budgets` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_hosie.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_hosie.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_hosie.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_hosie.migrations: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_20_202848_create_budgets_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_hosie.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_hosie.password_resets: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('eduardarosa@bloco1.com.br', '$2y$10$hO3F/67w0FtKujM38TfsaeOYce9yT/oE7obD1xJyHDzWdpnZ2bXRO', '2019-12-23 18:26:17');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_hosie.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela bd_hosie.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Eduarda Cirina Rosa', 'eduardarosa@bloco1.com.br', NULL, '$2y$10$hUdgsFou0kA0.nZbfAYrZODc0wh9LRRw/adjN.A5y0U5ClURdGI8q', NULL, '2019-12-20 19:29:24', '2019-12-20 19:29:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
