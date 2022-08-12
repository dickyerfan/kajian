#
# TABLE STRUCTURE FOR: jadwal_kajian
#

DROP TABLE IF EXISTS `jadwal_kajian`;

CREATE TABLE `jadwal_kajian` (
  `id_kajian` int(11) NOT NULL AUTO_INCREMENT,
  `id_ustadz` int(11) NOT NULL,
  `id_kitab` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_mesjid` int(11) NOT NULL,
  `hari_kajian` int(1) NOT NULL COMMENT '1:Ahad, 2:Senin, 3:Selasa, 4:Rabu, 5:Kamis, 6:Jum''at, 7:Sabtu',
  `waktu_kajian` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT 1 COMMENT '1:Aktif, 0:Tidak',
  PRIMARY KEY (`id_kajian`),
  KEY `id_ustadz` (`id_ustadz`),
  KEY `id_kitab` (`id_kitab`),
  KEY `id_waktu` (`id_waktu`),
  KEY `id_mesjid` (`id_mesjid`),
  CONSTRAINT `jadwal_kajian_ibfk_1` FOREIGN KEY (`id_kitab`) REFERENCES `kitab` (`id_kitab`),
  CONSTRAINT `jadwal_kajian_ibfk_2` FOREIGN KEY (`id_waktu`) REFERENCES `waktu` (`id_waktu`),
  CONSTRAINT `jadwal_kajian_ibfk_3` FOREIGN KEY (`id_ustadz`) REFERENCES `ustadz` (`id_ustadz`),
  CONSTRAINT `jadwal_kajian_ibfk_4` FOREIGN KEY (`id_mesjid`) REFERENCES `mesjid` (`id_mesjid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (1, 3, 1, 1, 1, 3, 'Setiap 2 pekan sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (3, 1, 2, 1, 6, 4, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (4, 6, 7, 1, 3, 4, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (5, 5, 4, 1, 3, 4, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);


#
# TABLE STRUCTURE FOR: kitab
#

DROP TABLE IF EXISTS `kitab`;

CREATE TABLE `kitab` (
  `id_kitab` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kitab` varchar(100) NOT NULL,
  `ket_kitab` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kitab`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (1, 'Maqolatul Islamiyyin', 'Prinsip Dasar Aqidah Ahlussunnah Waljama\'ah');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (2, 'Tazkiyatun Nufus', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (3, 'Mulakhkhosh Fiqh', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (4, 'Al Aqidah  Al Wasithiyyah', 'Aqidah Ahlussunnah Waljamaah');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (5, 'Tafsir Al Qur\'an', 'Surat Al Falaq');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (6, 'Riyadus Sholihin', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (7, 'Tafsir Al Qur\'an', 'Surat An Naas');


#
# TABLE STRUCTURE FOR: mesjid
#

DROP TABLE IF EXISTS `mesjid`;

CREATE TABLE `mesjid` (
  `id_mesjid` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mesjid` varchar(100) NOT NULL,
  `alamat_mesjid` varchar(250) NOT NULL,
  `lokasi_mesjid` varchar(250) NOT NULL,
  `foto_mesjid` varchar(100) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT 1 COMMENT '1:Aktif, 0:Tidak',
  PRIMARY KEY (`id_mesjid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (1, 'Masjid Al Ikhlas', 'Jl. Supriyadi Kademangan Kulon Kademangan Bondowoso Jawa Timur 68217', 'https://www.google.com/maps/place/Masjid+Al-Ikhlas+Bondowoso/@-7.9175425,113.832716,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dcc739912737:0xb915c9003edbb00f!8m2!3d-7.9175136!4d113.8327231', 'Mesjid_ikhlas.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (3, 'Masjid Mush\'ab Bin Umair', 'Yayasan Al Fajri Hidayatullah ⁣⁣ Jl. A.Yani, Gang lap. Perintis, Badean Bondowoso, Jawa Timur⁣⁣', 'https://www.google.com/maps/place/Masjid+Mush\'ab+bin+Umair/@-7.9222475,113.8149285,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dcd9d9281c21:0x6ff46414ed4d22e!8m2!3d-7.9222475!4d113.8149285', 'Mesjid_mushab.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (4, 'Masjid Al Furqon Maesan', 'Krajan, Penanggungan, Kecamatan Maesan, Kabupaten Bondowoso Jawa Timur 68262⁣⁣⁣⁣⁣⁣⁣⁣⁣⁣', 'https://www.google.com/maps/place//data=!4m2!3m1!1s0x2dd6c1f71d67c3eb:0xa23c895597aeef3f?utm_source=mstt_1&entry=gps&lucs=swa', 'Mesjid_furqon.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (5, 'Masjid Nurul Huda', 'Tanggulangin (SMK-PP ke Barat), Tegalampel, Bondowoso, Jawa Timur 68291⁣⁣⁣⁣⁣', 'https://www.google.com/maps/place/MASJID+AL+QOLAM+BONDOWOSO/@-7.8820859,113.8220254,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dc501aceaa3d:0xd5243717e9fae21f!8m2!3d-7.8820889!4d113.8220338', 'Mesjid_nurulhuda.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (6, 'Masjid Al Furqon Wonosari', 'Belakang. Gardu, Cindogo Kecamatan Tapen, Kabupaten Bondowoso⁣⁣⁣ Jawa Timur 68282', 'https://www.google.com/maps/place/MASJID+AL+FURQON/@-7.8827659,113.8992472,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dba9415de099:0x7c1f045d08f53c09!8m2!3d-7.8828046!4d113.8992508', 'Mesjid_furqonwns.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (7, 'Masjid Ash Shobiriin', 'Gang Cempaka no. 45 Gontungan, Kecamatan Tamanan Kabupaten Bondowoso, Jawa Timur 68263', 'https://www.google.com/maps/place/Masjidus+Sobirin/@-8.0146807,113.8272501,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6c1617e5c81e3:0xcbb424ad445e0516!8m2!3d-8.0146807!4d113.8272501', 'Mesjid_shobiriin.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (8, 'Musholla Al Fatih', 'Jl. RE. Martadinata Gang Pantekosta, Dabasah Kabupaten Bondowoso Jawa Timur⁣⁣ 68211', 'https://www.google.com/maps/place/MUSHOLLA+SUNNAH+AL-FATIH/@-7.9755502,113.581135,10z/data=!4m9!1m2!2m1!1smushola+al+fatih+bondowoso!3m5!1s0x2dd6dd4c792b76f3:0xe76b1a2788930926!8m2!3d-7.9159064!4d113.8263879!15sChptdXNob2xhIGFsIGZhdGloIGJvbmRvd29zb1o', 'Musholla_fatih.jpg', 0);


#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'Pengguna',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `nama_pengguna`, `nama_lengkap`, `email`, `password`, `level`) VALUES (1, 'dicky', 'Dicky Erfan Septiono', 'dickyerfan@gmail.com', '$2y$10$L3hF9Zh0fH1QpT543Jy8e.W7pzPKyg1LVJc3dhHsT.aWy3jt46Zvm', 'Admin');


#
# TABLE STRUCTURE FOR: ustadz
#

DROP TABLE IF EXISTS `ustadz`;

CREATE TABLE `ustadz` (
  `id_ustadz` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ustadz` varchar(100) NOT NULL,
  `ket_ustadz` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ustadz`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (1, 'Agus Barnianto', 'Pengasuh Rumah Qur\'an Al Qolam');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (3, 'Muhammad Yasir,Lc.,M.Hi', 'Dosen STDI  Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (4, 'Muhammad Subaidi, S.Ag', 'Pengajar Ma\'had Al Irsyad Al Islamiyah Bondowoso');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (5, 'Arif Husnul Khuluq, S.H., M.H', 'Dosen STDI Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (6, 'Sabilul Muhtadin, Lc, M.Hi', 'Dosen STDI Imam Syafi\'i Jember');


#
# TABLE STRUCTURE FOR: waktu
#

DROP TABLE IF EXISTS `waktu`;

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_waktu` varchar(100) NOT NULL,
  PRIMARY KEY (`id_waktu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (1, 'Ba\'da Maghrib - selesai');
INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (2, 'Jam 16.00 WIB - selesai');
INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (3, 'Ba\'da Isya\' 19.30 WIB - selesai');


