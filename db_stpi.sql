/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.19 : Database - db_stpi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_stpi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_stpi`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`USERNAME`,`PASSWORD`) values ('admin','admin');

/*Table structure for table `asuransi` */

DROP TABLE IF EXISTS `asuransi`;

CREATE TABLE `asuransi` (
  `NO_ASURANSI` varchar(15) NOT NULL,
  `NIT` varchar(10) DEFAULT NULL,
  `GAMBAR` text,
  PRIMARY KEY (`NO_ASURANSI`),
  KEY `NIT` (`NIT`),
  CONSTRAINT `asuransi_ibfk_1` FOREIGN KEY (`NIT`) REFERENCES `taruna` (`NIT`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `asuransi` */

insert  into `asuransi`(`NO_ASURANSI`,`NIT`,`GAMBAR`) values ('1234','7777','D A.png');

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `ID_JURUSAN` varchar(10) NOT NULL,
  `NAMA_JURUSAN` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_JURUSAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`ID_JURUSAN`,`NAMA_JURUSAN`) values ('001','Penerbangan'),('002','Teknik Penerbangan'),('003','Keselamatan Penerbangan'),('004','Manajemen Penerbangan'),('005','Aviation');

/*Table structure for table `perlengkapan` */

DROP TABLE IF EXISTS `perlengkapan`;

CREATE TABLE `perlengkapan` (
  `ID_PAKET` varchar(15) NOT NULL,
  `DETAIL` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`ID_PAKET`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perlengkapan` */

insert  into `perlengkapan`(`ID_PAKET`,`DETAIL`) values ('1234','Baret,Topi,Pin');

/*Table structure for table `prodi` */

DROP TABLE IF EXISTS `prodi`;

CREATE TABLE `prodi` (
  `ID_PRODI` varchar(10) NOT NULL,
  `NAMA_PRODI` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID_PRODI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prodi` */

insert  into `prodi`(`ID_PRODI`,`NAMA_PRODI`) values ('001','PRODI A'),('002','PRODI B');

/*Table structure for table `provinsi` */

DROP TABLE IF EXISTS `provinsi`;

CREATE TABLE `provinsi` (
  `ID_PROV` varchar(5) NOT NULL,
  `NAMA_PROV` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`ID_PROV`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `provinsi` */

insert  into `provinsi`(`ID_PROV`,`NAMA_PROV`) values ('P001','Aceh'),('P002','Bali'),('P003','Bangka Belitung'),('P004','Banten'),('P005','Bengkulu'),('P006','DKI Jakarta'),('P007','Daerah Istimewa Yogyakarta'),('P008','Gorontalo'),('P009','Jambi'),('P010','Jawa Barat'),('P011','Jawa Tengah'),('P012','Jawa Timur'),('P013','Kalimantan Barat'),('P014','Kalimantan Selatan'),('P015','Kalimantan Tengah'),('P016','Kalimantan Timur'),('P017','Kalimantan Utara'),('P018','Kepulauan Riau'),('P019','Lampung'),('P020','Maluku Utara'),('P021','Maluku'),('P022','Nusa Tenggara Barat'),('P023','Nusa Tenggara Timur'),('P024','Papua Barat'),('P025','Papua'),('P026','Riau'),('P027','Sulawesi Selatan'),('P028','Sulawesi Tengah'),('P029','Sulawesi Tenggara'),('P030','Sulawesi Utara'),('P031','Sumatera Barat'),('P032','Sumatera Selatan'),('P033','Sumatera Utara'),('P034','Kepulauan Bangka Belitung');

/*Table structure for table `taruna` */

DROP TABLE IF EXISTS `taruna`;

CREATE TABLE `taruna` (
  `NIT` varchar(10) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `TMP_LAHIR` varchar(30) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT '1990-01-01',
  `J_KEL` varchar(10) DEFAULT NULL,
  `GOL_DARAH` varchar(4) DEFAULT NULL,
  `TG_BADAN` varchar(4) DEFAULT NULL,
  `BR_BADAN` varchar(4) DEFAULT NULL,
  `ALAMAT` varchar(120) DEFAULT NULL,
  `KD_POS` varchar(6) DEFAULT NULL,
  `KELURAHAN` varchar(30) DEFAULT NULL,
  `KECAMATAN` varchar(30) DEFAULT NULL,
  `KOTA` varchar(75) DEFAULT NULL,
  `ID_PROV` varchar(30) DEFAULT NULL,
  `NO_TELP` varchar(12) DEFAULT NULL,
  `NO_KTP` varchar(20) DEFAULT NULL,
  `NO_KK` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `ID_PRODI` varchar(10) DEFAULT NULL,
  `KELAS` varchar(25) DEFAULT NULL,
  `ID_JURUSAN` varchar(25) DEFAULT NULL,
  `TINGKAT` varchar(25) DEFAULT NULL,
  `NAMA_ASRAMA` varchar(25) DEFAULT NULL,
  `KAMAR` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`NIT`),
  KEY `ID_PROV` (`ID_PROV`),
  KEY `ID_PRODI` (`ID_PRODI`),
  KEY `ID_JURUSAN` (`ID_JURUSAN`),
  KEY `ID_KOTA` (`KOTA`),
  CONSTRAINT `taruna_ibfk_4` FOREIGN KEY (`ID_PROV`) REFERENCES `provinsi` (`ID_PROV`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `taruna_ibfk_5` FOREIGN KEY (`ID_PRODI`) REFERENCES `prodi` (`ID_PRODI`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `taruna_ibfk_6` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `taruna` */

insert  into `taruna`(`NIT`,`NAMA`,`TMP_LAHIR`,`TGL_LAHIR`,`J_KEL`,`GOL_DARAH`,`TG_BADAN`,`BR_BADAN`,`ALAMAT`,`KD_POS`,`KELURAHAN`,`KECAMATAN`,`KOTA`,`ID_PROV`,`NO_TELP`,`NO_KTP`,`NO_KK`,`EMAIL`,`ID_PRODI`,`KELAS`,`ID_JURUSAN`,`TINGKAT`,`NAMA_ASRAMA`,`KAMAR`) values ('1111','Rose','utu','1990-01-01','Perempuan','A','56','67','7','67','jh','jh','jh','P003','ert','ert','ert','ert','002','ert','003','ert','ert','ert'),('7777','Brian O','hfhg','1996-12-12','Laki-laki','O','179','79','ytry','tretr','tret','rer','Jakarta','P006','erw','ewr','rew','ewr','002','tere','002','rew','rew','rew');

/*Table structure for table `trans_perlengkapan` */

DROP TABLE IF EXISTS `trans_perlengkapan`;

CREATE TABLE `trans_perlengkapan` (
  `ID_TRANS` int(10) NOT NULL AUTO_INCREMENT,
  `NIT` varchar(10) DEFAULT NULL,
  `ID_PAKET` varchar(15) DEFAULT NULL,
  `KELAS` varchar(25) DEFAULT NULL,
  `TGL` date DEFAULT NULL,
  PRIMARY KEY (`ID_TRANS`),
  KEY `NIT` (`NIT`),
  KEY `ID_PAKET` (`ID_PAKET`),
  CONSTRAINT `trans_perlengkapan_ibfk_1` FOREIGN KEY (`NIT`) REFERENCES `taruna` (`NIT`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `trans_perlengkapan_ibfk_2` FOREIGN KEY (`ID_PAKET`) REFERENCES `perlengkapan` (`ID_PAKET`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `trans_perlengkapan` */

/*Table structure for table `view_data_taruna` */

DROP TABLE IF EXISTS `view_data_taruna`;

/*!50001 DROP VIEW IF EXISTS `view_data_taruna` */;
/*!50001 DROP TABLE IF EXISTS `view_data_taruna` */;

/*!50001 CREATE TABLE  `view_data_taruna`(
 `NIT` varchar(10) ,
 `NAMA` varchar(30) ,
 `TMP_LAHIR` varchar(30) ,
 `TGL_LAHIR` date ,
 `J_KEL` varchar(10) ,
 `GOL_DARAH` varchar(4) ,
 `TG_BADAN` varchar(4) ,
 `BR_BADAN` varchar(4) ,
 `ALAMAT` varchar(120) ,
 `KD_POS` varchar(6) ,
 `KELURAHAN` varchar(30) ,
 `KECAMATAN` varchar(30) ,
 `NAMA_PROV` varchar(75) ,
 `KOTA` varchar(75) ,
 `NAMA_PRODI` varchar(30) ,
 `NAMA_JURUSAN` varchar(30) ,
 `KELAS` varchar(25) ,
 `TINGKAT` varchar(25) ,
 `NO_TELP` varchar(12) ,
 `NO_KTP` varchar(20) ,
 `NO_KK` varchar(20) ,
 `EMAIL` varchar(30) ,
 `NAMA_ASRAMA` varchar(25) ,
 `KAMAR` varchar(25) 
)*/;

/*View structure for view view_data_taruna */

/*!50001 DROP TABLE IF EXISTS `view_data_taruna` */;
/*!50001 DROP VIEW IF EXISTS `view_data_taruna` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_data_taruna` AS (select `taruna`.`NIT` AS `NIT`,`taruna`.`NAMA` AS `NAMA`,`taruna`.`TMP_LAHIR` AS `TMP_LAHIR`,`taruna`.`TGL_LAHIR` AS `TGL_LAHIR`,`taruna`.`J_KEL` AS `J_KEL`,`taruna`.`GOL_DARAH` AS `GOL_DARAH`,`taruna`.`TG_BADAN` AS `TG_BADAN`,`taruna`.`BR_BADAN` AS `BR_BADAN`,`taruna`.`ALAMAT` AS `ALAMAT`,`taruna`.`KD_POS` AS `KD_POS`,`taruna`.`KELURAHAN` AS `KELURAHAN`,`taruna`.`KECAMATAN` AS `KECAMATAN`,`provinsi`.`NAMA_PROV` AS `NAMA_PROV`,`taruna`.`KOTA` AS `KOTA`,`prodi`.`NAMA_PRODI` AS `NAMA_PRODI`,`jurusan`.`NAMA_JURUSAN` AS `NAMA_JURUSAN`,`taruna`.`KELAS` AS `KELAS`,`taruna`.`TINGKAT` AS `TINGKAT`,`taruna`.`NO_TELP` AS `NO_TELP`,`taruna`.`NO_KTP` AS `NO_KTP`,`taruna`.`NO_KK` AS `NO_KK`,`taruna`.`EMAIL` AS `EMAIL`,`taruna`.`NAMA_ASRAMA` AS `NAMA_ASRAMA`,`taruna`.`KAMAR` AS `KAMAR` from (((`taruna` join `prodi` on((`taruna`.`ID_PRODI` = `prodi`.`ID_PRODI`))) join `jurusan` on((`taruna`.`ID_JURUSAN` = `jurusan`.`ID_JURUSAN`))) join `provinsi` on((`taruna`.`ID_PROV` = `provinsi`.`ID_PROV`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
