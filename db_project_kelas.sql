/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.27-MariaDB : Database - db_project_kelas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_project_kelas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_project_kelas`;

/*Table structure for table `daftar_lomba` */

DROP TABLE IF EXISTS `daftar_lomba`;

CREATE TABLE `daftar_lomba` (
  `id_daftar` int(10) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `daftar_lomba` varchar(255) DEFAULT NULL,
  `gender` char(25) DEFAULT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `daftar_lomba` */

/*Table structure for table `panitia` */

DROP TABLE IF EXISTS `panitia`;

CREATE TABLE `panitia` (
  `mhsNpm` char(12) NOT NULL,
  `mhsNama` varchar(255) DEFAULT NULL,
  `mhsAlamat` text DEFAULT NULL,
  `mhsFakultas` varchar(255) DEFAULT NULL,
  `mhsProdi` varchar(255) DEFAULT NULL,
  `pj_lomba` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mhsNpm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `panitia` */

insert  into `panitia`(`mhsNpm`,`mhsNama`,`mhsAlamat`,`mhsFakultas`,`mhsProdi`,`pj_lomba`) values 
('2313213','budi','Bandar Lampung','FTIK','Informatika','Adzan'),
('34535','SUEP','Lampung','FSIP','PBI','Marawis'),
('435353','Aceng','Kedaton','FEB','Manajamen','Hadroh'),
('53456','Ucup','Kemiling','FTIK','Teknik Komputer','Da\"i');

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(90) NOT NULL,
  `asal_sekolah` varchar(90) DEFAULT NULL,
  `daftar_lomba` varchar(90) DEFAULT NULL,
  `gender` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `peserta` */

insert  into `peserta`(`nama`,`email`,`asal_sekolah`,`daftar_lomba`,`gender`) values 
('alala','alalal@gmail.com','alalal','alalala','laki-laki');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`name`,`username`,`pass`,`role`) values 
(7,'jhon','jhon123','5db536d03370ecd82ea9540b0ea21be9','admin'),
(8,'dimas','dimas22','827ccb0eea8a706c4c34a16891f84e7b','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
