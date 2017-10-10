/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.25-MariaDB-1~xenial : Database - bkd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bkd` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bkd`;

/*Table structure for table `tbl_asesor` */

DROP TABLE IF EXISTS `tbl_asesor`;

CREATE TABLE `tbl_asesor` (
  `idAsesor` int(11) NOT NULL AUTO_INCREMENT,
  `idPT` int(11) DEFAULT NULL,
  `ilmu` int(11) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idAsesor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_asesor` */

insert  into `tbl_asesor`(`idAsesor`,`idPT`,`ilmu`,`nama`,`nip`) values 
(1,1,1,'Ir. Hemansyah Alam, MT','9910111240594307027'),
(2,2,1,'Ir. Zanuddin, MT','990811241006207026');

/*Table structure for table `tbl_bidang_kinerja` */

DROP TABLE IF EXISTS `tbl_bidang_kinerja`;

CREATE TABLE `tbl_bidang_kinerja` (
  `idBidang` int(11) NOT NULL AUTO_INCREMENT,
  `namaBidang` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idBidang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_bidang_kinerja` */

insert  into `tbl_bidang_kinerja`(`idBidang`,`namaBidang`) values 
(1,'Pendidikan'),
(2,'Penelitian'),
(3,'Pengabdian Masyarakat');

/*Table structure for table `tbl_dosen` */

DROP TABLE IF EXISTS `tbl_dosen`;

CREATE TABLE `tbl_dosen` (
  `idDosen` int(11) NOT NULL AUTO_INCREMENT,
  `noSertifikat` int(11) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL,
  `namaDosen` varchar(250) DEFAULT NULL,
  `idPT` int(11) DEFAULT NULL,
  `idProdi` int(11) DEFAULT NULL,
  `idJabfung` int(11) DEFAULT NULL,
  `idGol` int(11) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `tempatLahir` varchar(200) DEFAULT NULL,
  `idJenisDosen` int(11) DEFAULT NULL,
  `idIlmu` int(11) DEFAULT NULL,
  `idTA` int(11) DEFAULT NULL,
  `idasesor1` int(11) DEFAULT NULL,
  `idasesor2` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `idSemester` int(11) DEFAULT NULL,
  `s1` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `hp` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`idDosen`),
  KEY `idGol` (`idGol`),
  KEY `idPT` (`idPT`),
  KEY `idProdi` (`idProdi`),
  KEY `idJabfung` (`idJabfung`),
  KEY `idJenisDosen` (`idJenisDosen`),
  KEY `idIlmu` (`idIlmu`),
  KEY `idTA` (`idTA`),
  KEY `idasesor1` (`idasesor1`),
  KEY `idasesor2` (`idasesor2`),
  KEY `idSemester` (`idSemester`),
  KEY `s1` (`s1`),
  KEY `s2` (`s2`),
  KEY `s3` (`s3`),
  CONSTRAINT `tbl_dosen_ibfk_1` FOREIGN KEY (`idGol`) REFERENCES `tbl_golongan` (`idGol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_10` FOREIGN KEY (`idSemester`) REFERENCES `tbl_semester` (`idSemester`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_11` FOREIGN KEY (`s1`) REFERENCES `tbl_pt` (`idPT`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_12` FOREIGN KEY (`s2`) REFERENCES `tbl_pt` (`idPT`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_13` FOREIGN KEY (`s3`) REFERENCES `tbl_pt` (`idPT`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_2` FOREIGN KEY (`idPT`) REFERENCES `tbl_pt` (`idPT`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_3` FOREIGN KEY (`idProdi`) REFERENCES `tbl_prodi` (`idPordi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_4` FOREIGN KEY (`idJabfung`) REFERENCES `tbl_jabfung` (`idJabfung`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_5` FOREIGN KEY (`idJenisDosen`) REFERENCES `tbl_jenis_dosen` (`idJenisDosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_6` FOREIGN KEY (`idIlmu`) REFERENCES `tbl_keilmuan` (`idIlmu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_7` FOREIGN KEY (`idTA`) REFERENCES `tbl_ta` (`idTa`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_8` FOREIGN KEY (`idasesor1`) REFERENCES `tbl_asesor` (`idAsesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_dosen_ibfk_9` FOREIGN KEY (`idasesor2`) REFERENCES `tbl_asesor` (`idAsesor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_dosen` */

insert  into `tbl_dosen`(`idDosen`,`noSertifikat`,`nip`,`nidn`,`namaDosen`,`idPT`,`idProdi`,`idJabfung`,`idGol`,`tglLahir`,`tempatLahir`,`idJenisDosen`,`idIlmu`,`idTA`,`idasesor1`,`idasesor2`,`email`,`idSemester`,`s1`,`s2`,`s3`,`hp`) values 
(5,2,'208001',1022028302,'ANDI IKBAL',1,1,NULL,NULL,'0000-00-00','',1,2,NULL,NULL,NULL,'andi@sttindonesia.ac.id',NULL,1,NULL,NULL,'0813643818746'),
(6,NULL,'207002',1010088301,'MOCHAMMAD RIZKI ROMDONI',1,6,1,NULL,'1983-08-10','Garut',3,3,NULL,NULL,NULL,'rizki@sttindonesia.ac.id',NULL,5,4,NULL,'081214553388'),
(7,NULL,'106006',1007117902,'MUHAMMAD FAIZAL',1,2,1,NULL,'1979-11-07','Tanjungpinang',1,3,NULL,NULL,NULL,'faizal@sttindonesia.ac.id',NULL,18,11,NULL,'081268028283'),
(8,NULL,'106003',1014085901,'MUHAMMAD SALEH H UMAR',1,2,1,NULL,'1959-08-14','Tanjungpinang',3,3,NULL,NULL,NULL,'saleh@sttindonesia.ac.id',NULL,10,11,NULL,'08127069393'),
(9,NULL,'208002',1006018001,'DEDY JAUHARI',1,1,NULL,NULL,'1980-01-07','Tanjungpinang',1,2,NULL,NULL,NULL,'dedi@sttindonesia.ac.id',NULL,14,11,NULL,'08123423433'),
(10,NULL,'209004',1023098701,'DWI NURUL HUDA',1,1,NULL,NULL,'1987-09-23','Bandung',1,2,NULL,NULL,NULL,'dwi@sttindonesia.ac.id',NULL,5,NULL,NULL,'082169990454'),
(11,NULL,'1001106001',1001106001,'ELVIANNA',1,1,NULL,NULL,'1960-10-01','Kediri',1,2,NULL,NULL,NULL,'elviana@sttindonesia.ac.id',NULL,10,10,NULL,'081364079393'),
(12,NULL,'1007028901',1007028901,'FITRI QUROTUL UYUN',1,1,NULL,NULL,'0000-00-00','Bandung',1,NULL,NULL,NULL,NULL,'fitri@sttindonesia.ac.id',NULL,5,NULL,NULL,'081291212322'),
(13,NULL,'1002001',1004018801,'NURUL SAEPUL',1,2,NULL,NULL,'1988-01-04','Garut',1,3,NULL,NULL,NULL,'epul@sttindonesia.ac.id',NULL,17,11,NULL,'085269549540'),
(14,NULL,'1005128601',1005128601,'HETI MULYANI',1,1,NULL,NULL,'1986-12-12','Subang',1,2,NULL,NULL,NULL,'hetty@sttindonesia.ac.id',NULL,5,13,NULL,'085294854501'),
(15,NULL,'1026028803',1026028803,'IMRON NUGRAHA',1,1,NULL,NULL,'0000-00-00','Garut',1,2,NULL,NULL,NULL,'imron@sttindonesia.ac.id',NULL,17,11,NULL,'081921312311'),
(16,NULL,'208001',1017088502,'RICAK AGUS SETIAWAN',1,2,1,NULL,'1985-08-17','Banjarnegara',1,3,NULL,NULL,NULL,'ricak@sttindonesia.ac.id',NULL,5,8,NULL,'085221689088'),
(17,NULL,'1024118401',1024118401,'INDRA MAULANA YUSUP KUSUMAH',1,1,NULL,NULL,'1984-11-24','Bandung',1,3,NULL,NULL,NULL,'indra@sttindonesia.ac.id',NULL,5,9,NULL,'0812889433343'),
(18,NULL,'1008048703',1008048703,'LEVA AFFRILLIANGGI FALIHAH',1,1,NULL,NULL,'1987-04-08','Bandung',1,2,NULL,NULL,NULL,'leva@sttindonesia.ac.id',NULL,5,11,NULL,'08123892121'),
(19,NULL,'209002',1024048403,'RUDI BAMBANG HERDIANA',1,1,NULL,NULL,'1984-04-24','Tasikmalaya',1,2,NULL,NULL,NULL,'rudi@sttindonesia.ac.id',NULL,5,9,NULL,'081990890774'),
(20,NULL,'1015058701',1015058701,'LIZA SAFITRI',1,1,NULL,NULL,'1987-05-15','Sungailiat',1,2,NULL,NULL,NULL,'liza@sttindonesia.ac.id',NULL,5,NULL,NULL,'085760216774'),
(21,NULL,'210001',1017078801,'SITI YULIYANTI',1,1,NULL,NULL,'1988-07-17','Cimahi',1,2,NULL,NULL,NULL,'ulie@sttindonesia.ac.id',NULL,5,13,NULL,'081285879875'),
(22,NULL,'207005',422066703,'SLAMET SANTOSO',1,1,NULL,NULL,'1967-06-22','Pemalang',1,2,NULL,NULL,NULL,'slamet@sttindonesia.ac.id',NULL,6,6,NULL,'085225998979'),
(23,NULL,'207001',1004128201,'WANHENDRA MANIHURUK',1,2,1,NULL,'1982-12-04','Garingging',1,3,NULL,NULL,NULL,'wanhendra@sttindonesia.ac.id',NULL,5,8,NULL,'081268034690'),
(24,NULL,'1002048601',1002048601,'ADE WINARNI',1,1,NULL,NULL,'1986-04-02','Purwakarta',1,2,NULL,NULL,NULL,'ade@sttindonesia.ac.id',NULL,5,4,NULL,'081291212322');

/*Table structure for table `tbl_golongan` */

DROP TABLE IF EXISTS `tbl_golongan`;

CREATE TABLE `tbl_golongan` (
  `idGol` int(11) NOT NULL AUTO_INCREMENT,
  `namaGolongan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idGol`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_golongan` */

insert  into `tbl_golongan`(`idGol`,`namaGolongan`) values 
(1,'Penata Muda - Gol. III/a'),
(2,'Penata Muda Tk. I - Gol. III/b'),
(3,'Penata - Gol. III/c'),
(4,'Penata Tk. I - Gol. III/d'),
(5,'Pembina - Gol. IV/a'),
(6,'Pembina Tk. I - Gol. IV/b'),
(7,'Pembina Utama Muda - Gol. IV/c'),
(8,'Pembina Utama Madya - Gol. IV/d'),
(9,'  Pembina Utama - Gol. IV/e');

/*Table structure for table `tbl_jabfung` */

DROP TABLE IF EXISTS `tbl_jabfung`;

CREATE TABLE `tbl_jabfung` (
  `idJabfung` int(11) NOT NULL AUTO_INCREMENT,
  `namaJabfung` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idJabfung`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabfung` */

insert  into `tbl_jabfung`(`idJabfung`,`namaJabfung`) values 
(1,'Asisten Ahli'),
(2,'Lektor'),
(3,'Lektor Kepala'),
(4,'Guru Besar');

/*Table structure for table `tbl_jenis_dosen` */

DROP TABLE IF EXISTS `tbl_jenis_dosen`;

CREATE TABLE `tbl_jenis_dosen` (
  `idJenisDosen` int(11) NOT NULL AUTO_INCREMENT,
  `kodeJenisDosen` varchar(5) DEFAULT NULL,
  `namaJenisDosen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idJenisDosen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jenis_dosen` */

insert  into `tbl_jenis_dosen`(`idJenisDosen`,`kodeJenisDosen`,`namaJenisDosen`) values 
(1,'DS','Dosen Biasa'),
(2,'PR','Profesor'),
(3,'DT','Dosen dengan tugas Tambahan'),
(4,'PT','Profesor dengan tugas Tambahan');

/*Table structure for table `tbl_keilmuan` */

DROP TABLE IF EXISTS `tbl_keilmuan`;

CREATE TABLE `tbl_keilmuan` (
  `idIlmu` int(11) NOT NULL AUTO_INCREMENT,
  `namaIlmu` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idIlmu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_keilmuan` */

insert  into `tbl_keilmuan`(`idIlmu`,`namaIlmu`) values 
(1,'Teknik Industri'),
(2,'Teknik Informatika'),
(3,'Sistem Informasi'),
(4,'Teknik Elektro');

/*Table structure for table `tbl_kinerja` */

DROP TABLE IF EXISTS `tbl_kinerja`;

CREATE TABLE `tbl_kinerja` (
  `idKinerja` int(11) NOT NULL AUTO_INCREMENT,
  `idBidang` int(11) DEFAULT NULL,
  `jenisKegiatan` varchar(200) DEFAULT NULL,
  `buktiPenugasan` varchar(200) DEFAULT NULL,
  `sksPenugasan` varchar(5) DEFAULT NULL,
  `masaPenugasan` varchar(200) DEFAULT NULL,
  `buktiDokumen` varchar(200) DEFAULT NULL,
  `sksDokumen` varchar(5) DEFAULT NULL,
  `idRekomendasi` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `idDosen` int(11) DEFAULT NULL,
  `idasesor1` int(11) NOT NULL,
  `idasesor2` int(11) NOT NULL,
  `idSemester` int(11) NOT NULL,
  PRIMARY KEY (`idKinerja`),
  KEY `bidangKinerja` (`idBidang`),
  KEY `dosenKinerja` (`idDosen`),
  KEY `tahun0` (`tahun`),
  CONSTRAINT `bidangKinerja` FOREIGN KEY (`idBidang`) REFERENCES `tbl_bidang_kinerja` (`idBidang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dosenKinerja` FOREIGN KEY (`idDosen`) REFERENCES `tbl_dosen` (`idDosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tahun0` FOREIGN KEY (`tahun`) REFERENCES `tbl_ta` (`idTa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kinerja` */

insert  into `tbl_kinerja`(`idKinerja`,`idBidang`,`jenisKegiatan`,`buktiPenugasan`,`sksPenugasan`,`masaPenugasan`,`buktiDokumen`,`sksDokumen`,`idRekomendasi`,`tahun`,`idDosen`,`idasesor1`,`idasesor2`,`idSemester`) values 
(22,1,'Sistem Basis Data II','SK Mengajar','4','1 Semester','Presensi mahasiswa','2',1,4,16,0,0,2),
(23,1,'Struktur Data','SK Mengajar','8','1 Semester','Presensi mahasiswa','4',1,4,16,0,0,2),
(24,1,'Pemrograman III','SK Mengajar','6','1 Semester','Presensi mahasiswa','3',1,6,16,0,0,1),
(25,1,'Sistem Basis Data II','SK Mengajar','4','1 Semester','Presensi mahasiswa','2',1,6,16,0,0,2),
(26,1,'Sistem Basis Data I','SK Mengajar','4','1 Semester','Presensi mahasiswa','2',1,7,16,0,0,1),
(27,1,'Analisis Sistem Informasi','SK Mengajar','6','1 Semester','Presensi mahasiswa','3',1,7,16,0,0,2),
(28,1,'Pemrograman III','SK Mengajar','6','1 Semester','Presensi mahasiswa','3',1,8,16,0,0,1),
(29,1,'Sistem Pendukung Keputusan','SK Mengajar','6','1 Semester','Presensi mahasiswa','3',1,8,16,0,0,2),
(30,1,'Pemrograman III','SK Mengajar','6','1 Semester','Presensi mahasiswa','3',1,9,16,0,0,1),
(31,1,'Analisis Sistem Informasi','SK Mengajar','6','1 Semester','Presensi mahasiswa','3',1,9,16,0,0,2),
(32,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,6,16,0,0,2),
(33,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,7,16,0,0,1),
(34,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,7,16,0,0,2),
(35,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,8,16,0,0,1),
(36,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,8,16,0,0,0),
(37,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,9,16,0,0,1),
(38,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,9,16,0,0,2),
(39,1,'Pembimbing Skripsi','SK Pembimbing','12','2 Semester','Form Bimbingan','6',1,6,16,0,0,1),
(40,1,'Pembimbing Skripsi','SK Pembimbing','12','2','Form Bimbingan','6',1,7,16,0,0,1),
(41,1,'Pembimbing Skripsi','SK Pembimbing','12','2 Semester','Form Bimbingan','6',1,8,16,0,0,1),
(42,1,'Pembimbing Skripsi','SK Pembimbing','6','2 Semester','Form Bimbingan','6',1,9,16,0,0,2),
(43,1,'Algoritma & Pemrograman','SK MENGAJAR','4','1 SEMESTER','PRESENSI MAHASISWA','4',1,12,6,0,0,1),
(44,1,'Program Paket Niaga 1','SK MENGAJAR','2','1 SEMESTER','PRESENSI MAHASISWA','2',1,12,6,0,0,1),
(45,1,'Sistem Basis Data  1','SK MENGAJAR','2','1 SEMESTER','PRESENSI MAHASISWA','2',1,12,6,0,0,1),
(46,1,'Penguji Skripsi','SK Penguji','12','1 Semester','Form Penilaian Sidang Skripsi','6',1,7,16,0,0,1),
(47,1,'Struktur Data','SK MENGAJAR','4','1 SEMESTER','PRESENSI MAHASISWA','4',1,12,6,0,0,1),
(48,1,'Penguji Skripsi','SK Penguji','18','1 Semester','Form Penilaian Sidang Skripsi','6',1,8,16,0,0,1),
(49,1,'Penguji Skripsi','SK Penguji','12','1 Semester','Form Penilaian Sidang Skripsi','6',1,9,16,0,0,1),
(50,1,'Struktur Data','SK MENGAJAR','4','1 SEMESTER','PRESENSI MAHASISWA','4',1,12,6,0,0,2),
(51,1,'Program Paket Niaga 2','SK MENGAJAR','2','1 SEMESTER','PRESENSI MAHASISWA','2',1,12,6,0,0,2),
(53,1,'Pembimbing UKM Mahasiswa','SK Pengangkatan ','','2 Semester','Laporan Kegiatan','',1,6,16,0,0,1),
(55,1,'Pembimbing UKM Mahasiswa','SK Pengangkatan ','','2 Semester','Laporan Kegiatan','',1,7,16,0,0,1),
(57,1,'Pembimbing UKM Mahasiswa','SK Pengangkatan ','','2 Semester','Laporan Kegiatan','',1,8,16,0,0,1),
(59,1,'Pembimbing UKM Mahasiswa','SK Pengangkatan ','','2 Semester','Laporan Kegiatan','',1,9,16,0,0,1),
(63,2,'Pengaruh Sistem Informasi Akademik (SIMAK) dan Kinerja Staf Terhadap Kepuasan Pelayanan Administrasi Mahasiswa Pada STTI Tanjungpinang		','','','','Jurnal Bangkit Indonesia, Sekolah Tinggi Teknologi Indonesia Tanjungpinang Vol 1 No.1 ','',1,9,16,0,0,0),
(64,1,'Pemrograman V','SK MENGAJAR','6','1 SEMESTER','3','3',1,9,6,0,0,1),
(65,3,'Kegiatan Donor Darah','','','19 Juni 2010','','',1,7,16,0,0,0),
(66,1,'Jaringan Komputer','SK MENGAJAR','6','1 SEMESTER','PRESENSI MAHASISWA','3',1,9,6,0,0,1),
(67,1,'E-Business','SK MENGAJAR','3','1 SEMESTER','PRESENSI MAHASISWA','3',1,9,6,0,0,2),
(68,1,'Sistem Pengamanan Komputer','SK MENGAJAR','6','1 SEMESTER','PRESENSI MAHASISWA','3',1,9,6,0,0,2),
(70,3,'Tim Penguji Eksternal Ujian Praktek SMK PELNUSA','Surat Tugas','','10 Maret 2011','Sertifikat','',1,7,16,0,0,2),
(72,3,'Tim Penguji Eksternal Ujian Praktek SMK PELNUSA','Surat Tugas','','13 Maret 2013','','',1,9,16,0,0,2),
(75,2,'\"Portal Interoperabilitas  E-Government (PIE): Platform Integrasi Sismte Informasi Pemerintahan\", disajikan dalam Seminar Nasional Teknik Elektro dan Informatika dalam Pengembangan Teknologi Berkelanj','Surat Tugas','','17 Juli 2012','Proceeding','',1,8,6,0,0,2),
(77,3,'Menjadi Tim Penilai Ujian Praktik Produktif SMK Maitreyawira Tanjungpinang Bidang Keahlian Teknik Komputer & Jaringan','Surat Tugas','','9 Maret 2013','Sertifikat','',1,9,6,0,0,2),
(79,3,'Menjadi Tim Penilai Ujian Praktik Produktif SMK N 1 Tanjungpinang Bidang Keahlian Teknik Komputer & Jaringan','Surat Tugas','','28 Feb - 3 Maret 2013','Sertifikat','',1,9,6,0,0,2),
(80,3,'Menjadi Tim Penilai Ujian Praktik Produktif SMK N 4 Tanjungpinang Bidang Keahlian Teknik Komputer & Jaringan','Surat Tugas','','4 - 5 Maret 2013','Sertifikat','',1,9,6,0,0,2),
(81,1,'Pembimbing KP','SK Pembimbing','3','2 Semester','Form Bimbingan','3',1,9,6,0,0,1),
(87,1,'Logika Matematika','SK Mengajar','2','1 Semester','Presensi Mahasiswa','2',1,6,24,0,0,1),
(88,1,'Pengolahan Citra','SK Mengajar','6','1 Semester','Presensi Mahasiswa','',1,6,24,0,0,1),
(89,1,'Pengolahan Citra','SK Mengajar','6','1 Semester','Presensi Mahasiswa',NULL,1,9,24,0,0,1),
(90,1,'Aljabar Linear','SK Mengajar','4','1 Semester','Presensi Mahasiswa',NULL,1,9,24,0,0,1),
(91,1,'Sistem Pendukung Keputusan  ','SK Mengajar','6','1 Semester','Presensi Mahasiswa',NULL,1,9,24,0,0,1),
(92,1,'Artificial Intelegent ','SK Mengajar','3','1 Semester','Presensi Mahasiswa',NULL,1,9,24,0,0,1),
(93,1,'Pemograman II','SK Mengajar','6','1 Semester','Presensi Mahasiswa',NULL,1,17,24,0,0,1),
(94,1,'Data Mining ','SK Mengajar','4','1 Semester','Presensi Mahasiswa',NULL,1,17,24,0,0,1),
(95,1,'Pembimbing Praktek Kerja Lapangan','SK Pembimbing','','2','Laporan Kerja Praktek',NULL,1,9,24,0,0,1),
(96,1,'Pembimbing Praktek Kerja Lapangan','SK Pembimbing','','2 Semester','Laporan Kerja Praktek',NULL,1,9,24,0,0,2),
(97,1,'Pembimbing Skripsi','SK Pembimbing','','2 Semester','Laporan Skripsi',NULL,1,9,24,0,0,1),
(98,1,'Pembimbing Skripsi','SK Pembimbing','','2 Semester','Laporan Skripsi',NULL,1,9,24,0,0,2),
(99,1,'Bertugas sebagai Penguji pada Ujian Akhir','SK Penguji','','3 Hari','Hasil Penilaian',NULL,1,9,24,0,0,1),
(100,1,'Bertugas sebagai Penguji pada Ujian Akhir','SK Penguji','','3 Hari','Hasil Penilaian',NULL,1,9,24,0,0,2),
(101,1,'Membina Kegiatan Mahasiswa di Bidang Akademik dan Kemahasiswaan','SK','','','',NULL,1,9,24,0,0,1),
(102,1,'Membina Kegiatan Mahasiswa di Bidang Akademik dan Kemahasiswaan','','','','',NULL,1,9,24,0,0,2),
(103,1,'Mengembangkan bahan pengajaran Modul Pengolahan Citra ','SK','','1 Semester','Modul Modul Pengolahan Citra ',NULL,NULL,9,24,0,0,1),
(104,3,'Menjadi Tim Penilai Ujian Praktik Produktif SMK N 1 Tanjungpinang Bidang Keahlian Teknik Komputer & Jaringan','SK','','3 Hari','Sertifikat',NULL,1,9,24,0,0,2),
(105,3,'Menjadi Tim Penilai Ujian Praktik Produktif SMK Maitreyawira Tanjungpinang Bidang Keahlian Teknik Komputer & Jaringan','Surat Tugas','','','',NULL,NULL,9,24,0,0,2),
(106,3,'Kegiatan Pengenalan IT untuk Sekolah Dasar Sekecamatan Gunung Kijang Bintan','','','','',NULL,NULL,9,24,0,0,2),
(107,3,'Menjadi Tim Penilai Ujian Praktik Produktif SMK N 1 Tanjungpinang Bidang Keahlian Teknik Komputer & Jaringan','Surat Tugas','','3 Hari','',NULL,NULL,17,24,0,0,2),
(108,3,'Menjadi Tim Penilai Ujian Praktik Produktif SMK Maitreyawira Tanjungpinang Bidang Keahlian Teknik Komputer & Jaringan','Surat Tugas','','3 Hari','',NULL,NULL,17,24,0,0,2);

/*Table structure for table `tbl_prodi` */

DROP TABLE IF EXISTS `tbl_prodi`;

CREATE TABLE `tbl_prodi` (
  `idPordi` int(11) NOT NULL AUTO_INCREMENT,
  `namaProdi` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idPordi`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_prodi` */

insert  into `tbl_prodi`(`idPordi`,`namaProdi`) values 
(1,'Teknik Informatika'),
(2,'Sistem Informasi'),
(3,'Sistem Informasi - Komputer Akuntansi'),
(4,'Teknik Fisika'),
(5,'Managemen Informatika'),
(6,'Sistem Informasi'),
(7,'Syariah'),
(8,'Manajemen - Konsentrasi Sumber Daya Manusia'),
(9,'Matematika'),
(10,'Ilmu Komputer'),
(11,'Bahasa dan Sastra'),
(12,'jhkjhjhk');

/*Table structure for table `tbl_pt` */

DROP TABLE IF EXISTS `tbl_pt`;

CREATE TABLE `tbl_pt` (
  `idPT` int(11) NOT NULL AUTO_INCREMENT,
  `namaPT` varchar(250) DEFAULT NULL,
  `alamatPT` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idPT`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pt` */

insert  into `tbl_pt`(`idPT`,`namaPT`,`alamatPT`) values 
(1,'Sekolah Tinggi Teknologi Indonesia Tanjungpinang','Jl. Brigjend Katamso Km 2,5 Tlp.0811 7002638 Tanjungpinang - Kepulauan Riau'),
(2,'Teknik Industri - Institut Teknologi Medan (ITM)','Medan'),
(3,'Teknik Industri - Institut Teknologi Sepuluh Nopember Surabaya (ITS)','Surabaya'),
(4,'Universitas Udayana','Bali'),
(5,'STMIK Bandung','Bandung'),
(6,'Institut Teknologi Bandung','Bandung'),
(7,'Universitas Langlang Buana','Bandung'),
(8,'STMIK Putra Batam','Batam'),
(9,'STMIK LIKMI','Bandung'),
(10,'Universitas Islam Indonesia (UII) ','Yogyakarta'),
(11,'Universitas Winayamukti',''),
(12,'Universitas Negeri Semarang',''),
(13,'Institut Pertanian Bogor (IPB)',''),
(14,'Universitas Putra Indonesia YPTK','Padang'),
(15,'Universitas Bandung Raya','Bandung'),
(16,'Sekolah Tinggi Hukum Garut','Garut'),
(17,'Univeristas Pendidikan Indonesia','Bandung'),
(18,'Universitas Islam Sultan Agung (UNISSULA) ','Semarang - Jawa Tengah');

/*Table structure for table `tbl_rekomendasi` */

DROP TABLE IF EXISTS `tbl_rekomendasi`;

CREATE TABLE `tbl_rekomendasi` (
  `idRekomedasi` int(11) NOT NULL AUTO_INCREMENT,
  `rekomendasi` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idRekomedasi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_rekomendasi` */

insert  into `tbl_rekomendasi`(`idRekomedasi`,`rekomendasi`) values 
(1,'Selesai'),
(2,'Lanjutan'),
(3,'Gagal'),
(4,'Lainnya'),
(5,'Beban Lebih');

/*Table structure for table `tbl_semester` */

DROP TABLE IF EXISTS `tbl_semester`;

CREATE TABLE `tbl_semester` (
  `idSemester` int(11) NOT NULL AUTO_INCREMENT,
  `namaSemester` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idSemester`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_semester` */

insert  into `tbl_semester`(`idSemester`,`namaSemester`) values 
(1,'Ganjil'),
(2,'Genap');

/*Table structure for table `tbl_ta` */

DROP TABLE IF EXISTS `tbl_ta`;

CREATE TABLE `tbl_ta` (
  `idTa` int(11) NOT NULL AUTO_INCREMENT,
  `ta` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`idTa`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_ta` */

insert  into `tbl_ta`(`idTa`,`ta`,`status`) values 
(4,'2008/2009',0),
(6,'2009/2010',0),
(7,'2010/2011',0),
(8,'2011/2012',0),
(9,'2012/2013',0),
(12,'2007/2008',0),
(17,'2013/2014',0),
(18,'2014/2015',0),
(19,'2015/2016',0),
(20,'2016/2017',0),
(21,'2017/2018',1);

/*Table structure for table `tbl_user_cms` */

DROP TABLE IF EXISTS `tbl_user_cms`;

CREATE TABLE `tbl_user_cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_user_cms` */

insert  into `tbl_user_cms`(`id`,`username`,`password`,`nama`,`email`,`status`) values 
(1,'gede','$2a$10$NskiH9hitZ7EWCDMou1UD.NRqkup7.uisd/t6./lOZ12Jikg7QWF.','Administrator','dev@dua-rasa.com','administrasi'),
(2,'admin','$2a$10$M0Z3.tA3.fv/KIUN0Ck6OO8bX7e7d.ZE7EGRE8.H0ig5qlUUVT9jO','Gede Lumbung','gede@mail.com','laboratorium'),
(3,'agus','e10adc3949ba59abbe56e057f20f883e','Agus Ganteng','agus@mail.com','radiologi'),
(4,'fisioterapi','$2a$10$lfk1b0qhMQvyZWrn5yc/yu/If8ysN3jPrg49JvJJu6tRi4T0Sl9TK','Fisioterapi User','fisioterapi@mail.com','fisioterapi'),
(5,'registrasi','$2a$10$cBlgSna.FFQztovwPkKy8uW2U0ZrwKd/HFPxMPtIYeGPcUIYSNt1.','registrasi','registrasi@mail.com','registrasi'),
(6,'ugd','$2a$10$Wm18mXxJfU1k5GjqLkJgCeiIejAIHLKii8UaeuXQCt4y4XxpPe3Tu','ugd','ugd@mail.com','ugd'),
(7,'apotik','$2a$10$FGmZkJSrn6eu.p2FN4/OG.au8.Y8N91vcYgMDGNBn6utkZevF7cqS','apotik','apotik@mail.com','apotik');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
