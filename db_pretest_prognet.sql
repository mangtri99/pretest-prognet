/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.28-MariaDB : Database - db_pretest_prognet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pretest_prognet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pretest_prognet`;

/*Table structure for table `tb_siswa` */

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `nisn` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa` */

insert  into `tb_siswa`(`id`,`nama`,`nis`,`nisn`,`no_hp`,`alamat`) values 
(1,'aaa','123','777','7777','aaaaaaa'),
(3,'asd','99999','123','123612356','adshsdh');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
