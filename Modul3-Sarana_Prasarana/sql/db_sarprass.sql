/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - db_sarprass
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_sarprass` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_sarprass`;

/*Table structure for table `tb_detail_prasarana` */

DROP TABLE IF EXISTS `tb_detail_prasarana`;

CREATE TABLE `tb_detail_prasarana` (
  `id_detail_prasarana` int(4) NOT NULL,
  `id_prasarana` tinyint(4) DEFAULT NULL,
  `id_gedung` tinyint(4) DEFAULT NULL,
  `nama_prasarana` varchar(70) DEFAULT NULL,
  `kondisi` enum('baik','sedikit rusak','butuh perbaikan') DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_detail_prasarana`),
  KEY `id_prasarana` (`id_prasarana`),
  KEY `id_gedung` (`id_gedung`),
  CONSTRAINT `id_gedung` FOREIGN KEY (`id_gedung`) REFERENCES `tb_gedung` (`id_gedung`),
  CONSTRAINT `id_prasarana` FOREIGN KEY (`id_prasarana`) REFERENCES `tb_prasarana` (`id_prasarana`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detail_prasarana` */

insert  into `tb_detail_prasarana`(`id_detail_prasarana`,`id_prasarana`,`id_gedung`,`nama_prasarana`,`kondisi`,`tanggal`) values 
(411,111,11,'Unit Gawat Darurat',NULL,'2022-11-23'),
(412,114,11,'POLIKLINIK OBGYN ',NULL,'2022-11-30'),
(413,114,11,'POLIKLINIK ANAK',NULL,NULL),
(414,114,11,'POLIKLINIK PENYAKIT DALAM',NULL,NULL),
(415,114,11,'POLIKLINIK BEDAH UMUM',NULL,NULL),
(416,114,11,' POLIKLINIK BEDAH ONKOLOGI',NULL,NULL),
(417,114,11,'POLIKLINIK MATA',NULL,NULL),
(418,114,11,'POLIKLINIK SARAF',NULL,NULL),
(419,114,11,'POLIKLINIK JANTUNG',NULL,NULL),
(420,114,11,'POLIKLINIK BEDAH DIGISTIF',NULL,NULL),
(421,114,11,'POLI PARU',NULL,NULL),
(422,114,11,'POLIKLINIK ORTHOPAEDI',NULL,NULL),
(423,114,11,'POLIKLINIK BEDAH PLASTIK',NULL,NULL),
(424,114,11,'POLIKLINIK UROLOGI',NULL,NULL),
(425,114,11,'POLIKLINIK JIWA',NULL,NULL),
(426,114,11,'POLIKLINIK KULIT DAN KELAMIN',NULL,NULL),
(427,114,11,'POLIKLINIK THT',NULL,NULL),
(428,114,11,'POLIKLINIK GIZI',NULL,NULL),
(430,114,11,'POLIKLINIK GIGI & MULUT',NULL,NULL),
(431,114,11,'POLIKLINIK BEDAH MULUT',NULL,NULL);

/*Table structure for table `tb_detail_sarana` */

DROP TABLE IF EXISTS `tb_detail_sarana`;

CREATE TABLE `tb_detail_sarana` (
  `id_detail_sarana` int(4) NOT NULL AUTO_INCREMENT,
  `id_sarana` int(4) DEFAULT NULL,
  `id_detail_prasarana` int(4) DEFAULT NULL,
  `jumlah` tinyint(4) DEFAULT NULL,
  `baik` tinyint(4) DEFAULT NULL,
  `rusak` tinyint(4) DEFAULT NULL,
  `perbaikan` tinyint(4) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  KEY `id_sarana` (`id_sarana`),
  KEY `id_detail_prasarana` (`id_detail_prasarana`),
  KEY `id_detail_sarana` (`id_detail_sarana`),
  CONSTRAINT `id_detail_prasarana` FOREIGN KEY (`id_detail_prasarana`) REFERENCES `tb_detail_prasarana` (`id_detail_prasarana`),
  CONSTRAINT `id_sarana` FOREIGN KEY (`id_sarana`) REFERENCES `tb_sarana` (`id_sarana`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detail_sarana` */

insert  into `tb_detail_sarana`(`id_detail_sarana`,`id_sarana`,`id_detail_prasarana`,`jumlah`,`baik`,`rusak`,`perbaikan`,`tanggal`) values 
(1,212,411,1,1,0,0,'2023-01-06 12:58:25'),
(2,212,411,13,13,10,0,'2022-12-15 01:01:55'),
(3,215,413,12,1,11,0,'2022-12-22 09:48:06'),
(4,215,413,13,10,17,0,'2023-01-06 12:59:27'),
(5,217,431,15,14,2,0,'2022-12-06 22:14:28'),
(6,214,417,12,1,2,0,'2022-12-17 22:15:38'),
(7,216,415,8,6,2,1,'2022-12-01 23:17:55'),
(8,219,421,15,11,3,1,'2023-01-06 13:57:56'),
(9,211,425,15,15,0,0,'2022-12-07 15:04:39'),
(10,227,426,14,10,4,0,'2023-01-06 13:58:52'),
(11,216,415,80,0,0,0,'2022-12-01 16:21:19'),
(12,216,414,80,75,5,0,'2022-12-22 09:24:05'),
(13,212,425,100,100,0,0,'2022-12-07 18:08:10'),
(14,215,422,23,23,0,0,'2022-12-22 07:23:30'),
(15,212,424,1,1,0,0,'2022-12-22 09:22:33'),
(16,212,425,10,0,10,0,'2022-12-22 12:33:59'),
(17,212,424,10,10,0,0,'2022-12-22 15:28:58'),
(18,212,424,90,90,0,0,'2023-01-03 22:11:38'),
(19,215,423,12,12,0,0,'2023-01-06 10:46:38'),
(20,212,421,12,12,0,0,'2023-01-06 13:56:36'),
(21,215,423,12,12,0,0,'2023-01-06 14:42:29');

/*Table structure for table `tb_gedung` */

DROP TABLE IF EXISTS `tb_gedung`;

CREATE TABLE `tb_gedung` (
  `id_gedung` tinyint(4) NOT NULL,
  `luas_gedung` int(11) DEFAULT NULL,
  `nama_gedung` varchar(70) DEFAULT NULL,
  `jumah_lantai` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_gedung`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_gedung` */

insert  into `tb_gedung`(`id_gedung`,`luas_gedung`,`nama_gedung`,`jumah_lantai`) values 
(11,200,'arjuna',4);

/*Table structure for table `tb_inventory` */

DROP TABLE IF EXISTS `tb_inventory`;

CREATE TABLE `tb_inventory` (
  `id_sarana` int(4) NOT NULL,
  `total` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_inventory` */

insert  into `tb_inventory`(`id_sarana`,`total`) values 
(212,237),
(212,237),
(215,72),
(215,72),
(217,15),
(214,12),
(216,168),
(219,15),
(211,15),
(227,14),
(216,168),
(216,168),
(212,237),
(215,72),
(212,237),
(212,237),
(212,237),
(212,237),
(215,72),
(212,237),
(215,72);

/*Table structure for table `tb_pengajuan_barang` */

DROP TABLE IF EXISTS `tb_pengajuan_barang`;

CREATE TABLE `tb_pengajuan_barang` (
  `id_pengajuan_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sarana` varchar(80) DEFAULT NULL,
  `keperluan` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pengajuan_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_pengajuan_barang` */

insert  into `tb_pengajuan_barang`(`id_pengajuan_barang`,`nama_sarana`,`keperluan`,`status`,`tanggal`) values 
(1,'Mikroskop','Lab','disetujui','2023-01-03 22:36:20'),
(2,'Mesin Rotngen','Untuk radiologi','disetujui','2022-12-22 10:15:44'),
(3,'Mesin jahit','Klinik Bersalin','disetujui','2022-12-22 12:29:51'),
(4,'Meja Kamar','Kamar Inap','disetujui','2022-12-22 15:36:05'),
(7,'Rotgen ','USG ','disetujui','2023-01-06 14:02:36');

/*Table structure for table `tb_perbaikan` */

DROP TABLE IF EXISTS `tb_perbaikan`;

CREATE TABLE `tb_perbaikan` (
  `id_perbaikan` int(4) NOT NULL AUTO_INCREMENT,
  `id_sarana` int(4) DEFAULT NULL,
  `jumlah_rusak` int(11) DEFAULT NULL,
  `sedang_diperbaiki` int(4) DEFAULT NULL,
  `telah_diperbaiki` int(4) DEFAULT NULL,
  `status_setuju` text DEFAULT NULL,
  PRIMARY KEY (`id_perbaikan`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_perbaikan` */

insert  into `tb_perbaikan`(`id_perbaikan`,`id_sarana`,`jumlah_rusak`,`sedang_diperbaiki`,`telah_diperbaiki`,`status_setuju`) values 
(1,0,2,0,0,'tolak'),
(2,0,5,0,0,'tolak'),
(3,0,8,0,0,'setuju'),
(4,0,8,0,0,'tolak'),
(5,0,11,0,0,'tolak'),
(6,0,8,0,0,'tolak'),
(7,0,222,0,0,'tolak'),
(10,0,0,0,0,'setuju'),
(21,0,12,0,0,'setuju'),
(34,212,1,0,0,'ditolak'),
(37,219,4,0,0,'disetujui'),
(38,212,10,0,0,'disetujui'),
(39,212,0,0,0,'ditolak'),
(48,219,3,0,0,'disetujui'),
(49,227,4,0,0,'ditolak');

/*Table structure for table `tb_prasarana` */

DROP TABLE IF EXISTS `tb_prasarana`;

CREATE TABLE `tb_prasarana` (
  `id_prasarana` tinyint(4) NOT NULL,
  `jenis_prasarana` varchar(70) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prasarana`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_prasarana` */

insert  into `tb_prasarana`(`id_prasarana`,`jenis_prasarana`,`jumlah`) values 
(111,'UGD',1),
(112,'IGD',1),
(113,'Rawat Inap',130),
(114,'Poliklinik',20);

/*Table structure for table `tb_sarana` */

DROP TABLE IF EXISTS `tb_sarana`;

CREATE TABLE `tb_sarana` (
  `id_sarana` int(4) NOT NULL,
  `nama_sarana` varchar(80) DEFAULT NULL,
  `jenis_sarana` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_sarana`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_sarana` */

insert  into `tb_sarana`(`id_sarana`,`nama_sarana`,`jenis_sarana`) values 
(211,'Stetoskop','Medis'),
(212,'Kasur Periksa','Non Medis'),
(213,'Hospital Bed','Non Medis'),
(214,'Sofa','Non Medis'),
(215,'Meja','Non Medis'),
(216,'Kursi','Medis'),
(217,'Tensimeter','Medis'),
(218,'Termometer Medis','Medis'),
(219,'Nebulizer','Medis'),
(220,'Timbangan Badan','Medis'),
(221,'Fetal Doppler','Medis'),
(222,'Hearing Aid','Medis'),
(223,'Kursi Roda','Medis'),
(224,'Tongkat Kruk','Medis'),
(225,'Lampu Inframerah','Medis'),
(226,'Mesin CPAP','Medis'),
(227,' Autoclave','Medis'),
(228,'Oksigen Medis','Medis'),
(229,'Meja Operasi','Medis'),
(230,'Kursi Ginekologi','Medis'),
(231,'Overbed Table','Medis'),
(232,'Tiang Infus','Medis'),
(233,'Bed Screen','Non Medis'),
(234,'adnya','Medis'),
(235,'Patien Monitor','Medis'),
(236,'Clinical Centrifuge','Medis'),
(237,'Ventilator','Medis');

/*Table structure for table `tbl_member` */

DROP TABLE IF EXISTS `tbl_member`;

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `level` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_member` */

insert  into `tbl_member`(`id`,`username`,`password`,`email`,`create_at`,`level`) values 
(1,'Mawar','mawar','Mawar@gmail.com','2022-12-22 06:07:43','admin'),
(2,'Melati','melati','Melati@gmail.comm','2022-12-22 03:46:13','kepalars'),
(3,'Bunga','bunga','Bunga@gmail.com','2022-12-22 03:46:17','kabid'),
(19,'ipinga','123','asdo@gmail.com','2022-12-22 11:00:13',NULL),
(20,'ipingaaaaa','aaaa','adny003@gmail.com','2023-01-03 22:19:30',NULL);

/* Trigger structure for table `tb_detail_sarana` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_insert` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_insert` AFTER INSERT ON `tb_detail_sarana` FOR EACH ROW BEGIN
	INSERT INTO tb_perbaikan(id_sarana, jumlah_rusak)
        VALUES(new.id_sarana, new.rusak);
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_detail_sarana` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_inventory` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_inventory` AFTER INSERT ON `tb_detail_sarana` FOR EACH ROW BEGIN
	call inventory();
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_detail_sarana` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_inventory2` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_inventory2` AFTER INSERT ON `tb_detail_sarana` FOR EACH ROW BEGIN
	call inventory();
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_detail_sarana` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_kerusakan` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_kerusakan` AFTER UPDATE ON `tb_detail_sarana` FOR EACH ROW BEGIN
	INSERT INTO tb_perbaikan(id_sarana, jumlah_rusak, status_setuju)
        VALUES(old.id_sarana, new.rusak, 'belum disetujui');
    END */$$


DELIMITER ;

/* Procedure structure for procedure `a` */

/*!50003 DROP PROCEDURE IF EXISTS  `a` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `a`()
BEGIN
		DECLARE selesai INT DEFAULT FALSE;
		DECLARE p_id_sarana, p_total INT DEFAULT 0;
		
		DECLARE cur_f CURSOR FOR SELECT id_sarana
		FROM tb_detail_sarana;	
		
		DECLARE CONTINUE HANDLER FOR NOT FOUND SET selesai = TRUE;
	
		DELETE FROM tb_inventory;
	
		OPEN cur_f;
		loop_rekap: LOOP
			FETCH cur_f INTO p_id_sarana;
			
			IF selesai THEN
				LEAVE loop_rekap;
			END IF;
			
			SELECT SUM(tb_detail_sarana.jumlah) INTO p_total
			FROM tb_pembayaran
			INNER JOIN tb_mahasiswa AS m ON (m.nim = p.nim)
			INNER JOIN tb_jurusan AS j ON (j.id_jurusan = m.id_jurusan)
			RIGHT JOIN tb_fakultas AS f ON (f.id_fakultas = j.id_fakultas)
			WHERE tb_detail_sarana.id_sarana = p_id_sarana;
			
			IF p_total IS NULL 
				THEN SET p_total = 0;
			END IF;
			
			INSERT INTO tb_inventory VALUES (p_id_sarana, p_total);
		END LOOP loop_rekap; 
		CLOSE cur_f;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `aa` */

/*!50003 DROP PROCEDURE IF EXISTS  `aa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `aa`()
BEGIN
		DECLARE selesai INT DEFAULT FALSE;
		DECLARE p_id_sarana, p_total INT DEFAULT 0;
		
		DECLARE cur_f CURSOR FOR SELECT id_sarana
		FROM tb_detail_sarana;	
		
		DECLARE CONTINUE HANDLER FOR NOT FOUND SET selesai = TRUE;
	
		DELETE FROM tb_inventory;
	
		OPEN cur_f;
		loop_rekap: LOOP
			FETCH cur_f INTO p_id_sarana;
			
			IF selesai THEN
				LEAVE loop_rekap;
			END IF;
			
			SELECT SUM(tb_detail_sarana.jumlah) INTO p_total
			FROM tb_pembayaran
			WHERE tb_detail_sarana.id_sarana = p_id_sarana;
			
			IF p_total IS NULL 
				THEN SET p_total = 0;
			END IF;
			
			INSERT INTO tb_inventory VALUES (p_id_sarana, p_total);
		END LOOP loop_rekap; 
		CLOSE cur_f;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `aaa` */

/*!50003 DROP PROCEDURE IF EXISTS  `aaa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `aaa`()
BEGIN
		DECLARE selesai INT DEFAULT FALSE;
		DECLARE p_id_sarana, p_total INT DEFAULT 0;
		
		DECLARE cur_f CURSOR FOR SELECT id_sarana
		FROM tb_detail_sarana;	
		
		DECLARE CONTINUE HANDLER FOR NOT FOUND SET selesai = TRUE;
	
		DELETE FROM tb_inventory;
	
		OPEN cur_f;
		loop_rekap: LOOP
			FETCH cur_f INTO p_id_sarana;
			
			IF selesai THEN
				LEAVE loop_rekap;
			END IF;
			
			SELECT SUM(tb_detail_sarana.jumlah) INTO p_total
			FROM tb_detail_sarana
			WHERE tb_detail_sarana.id_sarana = p_id_sarana group by id_sarana;
			
			IF p_total IS NULL 
				THEN SET p_total = 0;
			END IF;
			
			INSERT INTO tb_inventory VALUES (p_id_sarana, p_total);
		END LOOP loop_rekap; 
		CLOSE cur_f;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `aaaa` */

/*!50003 DROP PROCEDURE IF EXISTS  `aaaa` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `aaaa`()
BEGIN
		DECLARE selesai INT DEFAULT FALSE;
		DECLARE p_id_sarana, p_total INT DEFAULT 0;
		
		DECLARE cur_f CURSOR FOR SELECT id_sarana
		FROM tb_detail_sarana;	
		
		DECLARE CONTINUE HANDLER FOR NOT FOUND SET selesai = TRUE;
	
		DELETE FROM tb_inventory;
	
		OPEN cur_f;
		loop_rekap: LOOP
			FETCH cur_f INTO p_id_sarana;
			
			IF selesai THEN
				LEAVE loop_rekap;
			END IF;
			
			SELECT SUM(tb_detail_sarana.jumlah) INTO p_total
			FROM tb_detail_sarana
			WHERE tb_detail_sarana.id_sarana = p_id_sarana group by id_sarana;
			
			IF p_total IS NULL 
				THEN SET p_total = 0;
			END IF;
			
			INSERT INTO tb_inventory VALUES (p_id_sarana, p_total);
		END LOOP loop_rekap;

		CLOSE cur_f;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `inventory` */

/*!50003 DROP PROCEDURE IF EXISTS  `inventory` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `inventory`()
BEGIN
		DECLARE selesai INT DEFAULT FALSE;
		DECLARE p_id_sarana, p_total INT DEFAULT 0;
		
		DECLARE cur_f CURSOR FOR SELECT id_sarana
		FROM tb_detail_sarana;	
		
		DECLARE CONTINUE HANDLER FOR NOT FOUND SET selesai = TRUE;
	
		DELETE FROM tb_inventory;
	
		OPEN cur_f;
		loop_rekap: LOOP
			FETCH cur_f INTO p_id_sarana;
			
			IF selesai THEN
				LEAVE loop_rekap;
			END IF;
			
			SELECT SUM(tb_detail_sarana.jumlah) INTO p_total
			FROM tb_detail_sarana
			WHERE tb_detail_sarana.id_sarana = p_id_sarana group by id_sarana;
			
			IF p_total IS NULL 
				THEN SET p_total = 0;
			END IF;
			
			INSERT INTO tb_inventory VALUES (p_id_sarana, p_total);
		END LOOP loop_rekap;

		CLOSE cur_f;
	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
