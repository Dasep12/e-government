/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.37-MariaDB : Database - government
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`government` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `government`;

/*Table structure for table `data_pencaker` */

DROP TABLE IF EXISTS `data_pencaker`;

CREATE TABLE `data_pencaker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(60) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `no_kk` varchar(30) DEFAULT NULL,
  `pendidikan` varchar(3) DEFAULT NULL,
  `alamat` tinytext,
  `kota` varchar(60) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `kecamatan` varchar(60) DEFAULT NULL,
  `desa` varchar(60) DEFAULT NULL,
  `keahlian` varchar(150) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `ijazah` varchar(150) DEFAULT NULL,
  `sertifikat` varchar(160) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `id_active` int(1) DEFAULT NULL,
  `pengalaman` varchar(1000) DEFAULT NULL,
  `join` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `data_pencaker` */

insert  into `data_pencaker`(`id`,`nama`,`nik`,`tempat_lahir`,`tgl_lahir`,`email`,`pass`,`no_telpon`,`no_kk`,`pendidikan`,`alamat`,`kota`,`kode_pos`,`kecamatan`,`desa`,`keahlian`,`photo`,`ijazah`,`sertifikat`,`jurusan`,`id_active`,`pengalaman`,`join`) values (9,'Dasep Depiyawan','321714130499005','Bandung','2020-02-24','depiyawandasep13@gmail.com','c4d8caf1f9c972a550acc6771fad3fd8','083821619460',NULL,'S1','aws','Bandung','df','Sindangkerta','df',NULL,'jam2.jpg','rumah8.jpg','rumah3.jpg','Manajement Informatika',1,'Magand di PT Dirgantara Indonesia','2020-02-07');

/*Table structure for table `jurusan` */

DROP TABLE IF EXISTS `jurusan`;

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `jurusan` */

insert  into `jurusan`(`id`,`nama_jurusan`) values (1,'Sistem Informasi'),(2,'Manajemen Informatika'),(3,'Teknik Informatika'),(4,'Akuntansi'),(5,'Manajemen Bisnis'),(6,'Teknik Industri'),(7,'Sastra Inggris');

/*Table structure for table `skill` */

DROP TABLE IF EXISTS `skill`;

CREATE TABLE `skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) DEFAULT NULL,
  `skill` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `skill` */

insert  into `skill`(`id`,`nik`,`skill`) values (30,'321714130499005','Web Programming'),(31,'321714130499005','Java Programing');

/*Table structure for table `token` */

DROP TABLE IF EXISTS `token`;

CREATE TABLE `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `token` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
