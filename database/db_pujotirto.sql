-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: localhost    Database: db_pujotirto
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_histori_aktifitas`
--

DROP TABLE IF EXISTS `t_histori_aktifitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_histori_aktifitas` (
  `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) DEFAULT NULL,
  `fullname` varchar(45) DEFAULT NULL,
  `form_` varchar(45) DEFAULT NULL,
  `action_` varchar(45) DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_aktifitas`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_karantina`
--

DROP TABLE IF EXISTS `t_karantina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_karantina` (
  `id_karantina` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `start_karantina` date DEFAULT NULL,
  `finish_karantina` date DEFAULT NULL,
  `status_karantina` varchar(20) DEFAULT NULL,
  `fasilitas_kesehatan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_karantina`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_level`
--

DROP TABLE IF EXISTS `t_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_level` (
  `id_level` varchar(8) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_menu`
--

DROP TABLE IF EXISTS `t_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_menu` (
  `id_menu` varchar(8) NOT NULL,
  `menu` varchar(45) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `updated_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_perantau`
--

DROP TABLE IF EXISTS `t_perantau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_perantau` (
  `id_perantau` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `nama_lengkap` text,
  `jenkel` text,
  `ttl` text,
  `rt` int(11) DEFAULT NULL,
  `rw` int(11) DEFAULT NULL,
  `dusun` text,
  `kelurahan` text,
  `kecamatan` text,
  `kabupaten` text,
  `no_telf` bigint(20) DEFAULT NULL,
  `status_` text,
  `tanggal_pulang` text,
  `tanggal_periksa` text,
  `kota_perantau` text,
  `created_by` text,
  `created_date` text,
  `updated_by` text,
  `updated_date` text,
  `keterangan` text,
  `source_data` text,
  PRIMARY KEY (`id_perantau`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_saran_masukan`
--

DROP TABLE IF EXISTS `t_saran_masukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_saran_masukan` (
  `id_saran_masukan` varchar(10) NOT NULL,
  `operation_system` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(70) DEFAULT NULL,
  `nomor_hp` char(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan_masukan` longtext,
  `tanggal_buat` datetime DEFAULT NULL,
  PRIMARY KEY (`id_saran_masukan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_submenu`
--

DROP TABLE IF EXISTS `t_submenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_submenu` (
  `id_submenu` varchar(8) NOT NULL,
  `submenu` varchar(45) DEFAULT NULL,
  `menu` varchar(45) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_submenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_tamu`
--

DROP TABLE IF EXISTS `t_tamu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_tamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenkel` varchar(15) DEFAULT NULL,
  `nomor_hp_tamu` varchar(12) DEFAULT NULL,
  `dusun_tamu` varchar(45) DEFAULT NULL,
  `kelurahan_tamu` varchar(60) DEFAULT NULL,
  `rw_tamu` varchar(5) DEFAULT NULL,
  `rt_tamu` varchar(5) DEFAULT NULL,
  `kecamatan_tamu` varchar(50) DEFAULT NULL,
  `kabupaten_tamu` varchar(45) DEFAULT NULL,
  `nama_tujuan` varchar(60) DEFAULT NULL,
  `tujuan_berkunjung` varchar(200) DEFAULT NULL,
  `lama_berkunjung` varchar(15) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_users`
--

DROP TABLE IF EXISTS `t_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_users` (
  `id_users` varchar(10) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `fullname` varchar(70) DEFAULT NULL,
  `jenkel` varchar(15) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `t_visit_pj`
--

DROP TABLE IF EXISTS `t_visit_pj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_visit_pj` (
  `id_visit_gt` int(40) unsigned NOT NULL AUTO_INCREMENT,
  `visit_date` datetime DEFAULT NULL,
  `pj_ip` varchar(50) DEFAULT NULL,
  `pj_browser` varchar(45) DEFAULT NULL,
  `pj_version_browser` varchar(50) DEFAULT NULL,
  `pj_version` varchar(50) DEFAULT NULL,
  `pj_os` varchar(45) DEFAULT NULL,
  `pages` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_visit_gt`)
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `vw_master_data`
--

DROP TABLE IF EXISTS `vw_master_data`;
/*!50001 DROP VIEW IF EXISTS `vw_master_data`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_master_data` AS SELECT 
 1 AS `id_perantau`,
 1 AS `nik`,
 1 AS `no_ktp`,
 1 AS `nama_lengkap`,
 1 AS `jenkel`,
 1 AS `ttl`,
 1 AS `rt`,
 1 AS `rw`,
 1 AS `dusun`,
 1 AS `kelurahan`,
 1 AS `kecamatan`,
 1 AS `kabupaten`,
 1 AS `no_telf`,
 1 AS `status_`,
 1 AS `tanggal_pulang`,
 1 AS `tanggal_periksa`,
 1 AS `kota_perantau`,
 1 AS `source_data`,
 1 AS `status_karantina`,
 1 AS `fasilitas_kesehatan`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_master_dynamic_data`
--

DROP TABLE IF EXISTS `vw_master_dynamic_data`;
/*!50001 DROP VIEW IF EXISTS `vw_master_dynamic_data`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_master_dynamic_data` AS SELECT 
 1 AS `nik`,
 1 AS `no_ktp`,
 1 AS `nama_lengkap`,
 1 AS `jenkel`,
 1 AS `ttl`,
 1 AS `rt`,
 1 AS `rw`,
 1 AS `dusun`,
 1 AS `kelurahan`,
 1 AS `kecamatan`,
 1 AS `kabupaten`,
 1 AS `no_telf`,
 1 AS `status_`,
 1 AS `tanggal_pulang`,
 1 AS `tanggal_periksa`,
 1 AS `kota_perantau`,
 1 AS `source_data`,
 1 AS `finish_karantina`,
 1 AS `waktu_karantina`,
 1 AS `karantina_status`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_time_karantina`
--

DROP TABLE IF EXISTS `vw_time_karantina`;
/*!50001 DROP VIEW IF EXISTS `vw_time_karantina`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_time_karantina` AS SELECT 
 1 AS `nik`,
 1 AS `no_ktp`,
 1 AS `nama_lengkap`,
 1 AS `jenkel`,
 1 AS `ttl`,
 1 AS `rt`,
 1 AS `rw`,
 1 AS `dusun`,
 1 AS `kelurahan`,
 1 AS `kecamatan`,
 1 AS `kabupaten`,
 1 AS `no_telf`,
 1 AS `status_`,
 1 AS `tanggal_pulang`,
 1 AS `tanggal_periksa`,
 1 AS `kota_perantau`,
 1 AS `source_data`,
 1 AS `status_karantina`,
 1 AS `fasilitas_kesehatan`,
 1 AS `finish_karantina`,
 1 AS `waktu_karantina`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'db_pujotirto'
--

--
-- Dumping routines for database 'db_pujotirto'
--

--
-- Final view structure for view `vw_master_data`
--

/*!50001 DROP VIEW IF EXISTS `vw_master_data`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_master_data` AS select `a`.`id_perantau` AS `id_perantau`,`a`.`nik` AS `nik`,`a`.`no_ktp` AS `no_ktp`,`a`.`nama_lengkap` AS `nama_lengkap`,`a`.`jenkel` AS `jenkel`,`a`.`ttl` AS `ttl`,`a`.`rt` AS `rt`,`a`.`rw` AS `rw`,`a`.`dusun` AS `dusun`,`a`.`kelurahan` AS `kelurahan`,`a`.`kecamatan` AS `kecamatan`,`a`.`kabupaten` AS `kabupaten`,`a`.`no_telf` AS `no_telf`,`a`.`status_` AS `status_`,`a`.`tanggal_pulang` AS `tanggal_pulang`,`a`.`tanggal_periksa` AS `tanggal_periksa`,`a`.`kota_perantau` AS `kota_perantau`,`a`.`source_data` AS `source_data`,`b`.`status_karantina` AS `status_karantina`,`b`.`fasilitas_kesehatan` AS `fasilitas_kesehatan` from (`t_perantau` `a` join `t_karantina` `b` on((`a`.`nik` = `b`.`nik`))) order by `a`.`id_perantau` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_master_dynamic_data`
--

/*!50001 DROP VIEW IF EXISTS `vw_master_dynamic_data`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_master_dynamic_data` AS select `vw_time_karantina`.`nik` AS `nik`,`vw_time_karantina`.`no_ktp` AS `no_ktp`,`vw_time_karantina`.`nama_lengkap` AS `nama_lengkap`,`vw_time_karantina`.`jenkel` AS `jenkel`,`vw_time_karantina`.`ttl` AS `ttl`,`vw_time_karantina`.`rt` AS `rt`,`vw_time_karantina`.`rw` AS `rw`,`vw_time_karantina`.`dusun` AS `dusun`,`vw_time_karantina`.`kelurahan` AS `kelurahan`,`vw_time_karantina`.`kecamatan` AS `kecamatan`,`vw_time_karantina`.`kabupaten` AS `kabupaten`,`vw_time_karantina`.`no_telf` AS `no_telf`,`vw_time_karantina`.`status_` AS `status_`,`vw_time_karantina`.`tanggal_pulang` AS `tanggal_pulang`,`vw_time_karantina`.`tanggal_periksa` AS `tanggal_periksa`,`vw_time_karantina`.`kota_perantau` AS `kota_perantau`,`vw_time_karantina`.`source_data` AS `source_data`,`vw_time_karantina`.`finish_karantina` AS `finish_karantina`,`vw_time_karantina`.`waktu_karantina` AS `waktu_karantina`,(case when (`vw_time_karantina`.`waktu_karantina` <= '0') then 'KARANTINA SELESAI' when (`vw_time_karantina`.`waktu_karantina` >= '1') then 'ON KARANTINA' end) AS `karantina_status` from `vw_time_karantina` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_time_karantina`
--

/*!50001 DROP VIEW IF EXISTS `vw_time_karantina`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_time_karantina` AS select `vw_master_data`.`nik` AS `nik`,`vw_master_data`.`no_ktp` AS `no_ktp`,`vw_master_data`.`nama_lengkap` AS `nama_lengkap`,`vw_master_data`.`jenkel` AS `jenkel`,`vw_master_data`.`ttl` AS `ttl`,`vw_master_data`.`rt` AS `rt`,`vw_master_data`.`rw` AS `rw`,`vw_master_data`.`dusun` AS `dusun`,`vw_master_data`.`kelurahan` AS `kelurahan`,`vw_master_data`.`kecamatan` AS `kecamatan`,`vw_master_data`.`kabupaten` AS `kabupaten`,`vw_master_data`.`no_telf` AS `no_telf`,`vw_master_data`.`status_` AS `status_`,`vw_master_data`.`tanggal_pulang` AS `tanggal_pulang`,`vw_master_data`.`tanggal_periksa` AS `tanggal_periksa`,`vw_master_data`.`kota_perantau` AS `kota_perantau`,`vw_master_data`.`source_data` AS `source_data`,`vw_master_data`.`status_karantina` AS `status_karantina`,`vw_master_data`.`fasilitas_kesehatan` AS `fasilitas_kesehatan`,(`vw_master_data`.`tanggal_pulang` + interval 14 day) AS `finish_karantina`,(to_days((`vw_master_data`.`tanggal_pulang` + interval 14 day)) - to_days(curdate())) AS `waktu_karantina` from `vw_master_data` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-04 15:57:21
