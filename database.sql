/*
SQLyog Ultimate v11.21 (64 bit)
MySQL - 10.4.21-MariaDB : Database - db_project_kelas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_project_kelas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_project_kelas`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `mhsNpm` char(12) NOT NULL,
  `mhsNama` varchar(255) DEFAULT NULL,
  `mhsAlamat` text DEFAULT NULL,
  `mhsFakultas` varchar(255) DEFAULT NULL,
  `mhsProdi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mhsNpm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`mhsNpm`,`mhsNama`,`mhsAlamat`,`mhsFakultas`,`mhsProdi`) values ('11312136','Mahasiswa1','alamat mahasiswa 1\r\n','Teknik','Teknik Informatika'),('11312137','Mahasiswa2','alamat mahasiswa 2\r\n','Teknik','Teknik Elektro'),('11312138','Mahasiswa 3','alamat mahasiswa 3','fakultas mahasiswa 3','prodi mahasiswa 3');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id_user`,`name`,`username`,`pass`,`role`) values (1,'admin','tes','28b662d883b6d76fd96e4ddc5e9ba780','Admin'),(2,'admin2','Admin2','7a8a80e50f6ff558f552079cefe2715d','Admin'),(4,'tess1','tes11','22daf1a39b6e5ea16554f59e472d96f6','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
