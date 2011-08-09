/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.41 : Database - pekka
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pekka` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pekka`;

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `no_induk` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `umur` int(3) NOT NULL,
  `kd_pendidikan` int(2) NOT NULL,
  `kd_pekerjaan` int(2) NOT NULL,
  `kd_sebab` int(2) NOT NULL,
  `sebab_lain` varchar(25) NOT NULL,
  `jml_tanggungan` int(2) NOT NULL,
  `tgl_gabung` varchar(10) NOT NULL,
  `nm_kelompok` varchar(25) NOT NULL,
  PRIMARY KEY (`no_induk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
