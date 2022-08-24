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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (1, 3, 1, 1, 1, 3, 'Setiap 2 Pekan sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (3, 1, 2, 1, 6, 4, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (4, 6, 5, 1, 3, 4, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (5, 5, 4, 1, 3, 4, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (6, 4, 3, 1, 5, 3, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (7, 1, 8, 1, 5, 5, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (8, 7, 10, 1, 1, 7, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (9, 8, 11, 1, 1, 7, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (10, 1, 9, 1, 5, 1, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (11, 12, 28, 1, 5, 4, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (12, 4, 14, 1, 3, 2, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (13, 1, 23, 1, 5, 6, 'Setiap Sepekan Sekali', 'Khusus Ikhwan', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (14, 16, 6, 1, 3, 2, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (15, 15, 12, 1, 4, 1, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (16, 7, 10, 1, 4, 3, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (17, 4, 7, 1, 4, 4, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (18, 3, 11, 1, 4, 5, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (19, 11, 13, 1, 4, 6, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (20, 8, 27, 1, 7, 6, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (21, 1, 25, 1, 6, 4, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (22, 8, 11, 1, 7, 6, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (23, 4, 15, 1, 8, 6, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (24, 4, 7, 2, 12, 3, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (25, 4, 16, 2, 12, 4, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (26, 11, 20, 4, 9, 6, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (27, 14, 11, 1, 9, 5, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (28, 13, 17, 1, 9, 4, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (29, 13, 18, 1, 10, 2, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (30, 13, 24, 4, 10, 3, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (31, 13, 27, 3, 10, 3, 'Setiap Sepekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (32, 13, 19, 1, 16, 6, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (33, 10, 14, 5, 13, 1, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (34, 9, 26, 5, 13, 2, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);
INSERT INTO `jadwal_kajian` (`id_kajian`, `id_ustadz`, `id_kitab`, `id_waktu`, `id_mesjid`, `hari_kajian`, `waktu_kajian`, `keterangan`, `aktif`) VALUES (35, 17, 21, 1, 4, 3, 'Setiap 2 Pekan Sekali', 'Umum Ikhwan & Akhwat', 1);


#
# TABLE STRUCTURE FOR: kitab
#

DROP TABLE IF EXISTS `kitab`;

CREATE TABLE `kitab` (
  `id_kitab` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kitab` varchar(100) NOT NULL,
  `ket_kitab` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kitab`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (1, 'Maqolatul Islamiyyin', 'Prinsip Dasar Aqidah Ahlussunnah Waljama\'ah');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (2, 'Tazkiyatun Nufus', 'Penyucian jiwa dalam Islam');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (3, 'Mulakhosh Fiqh', 'Karya Syaikh Sholih bin Fauzan Al-Fauzan');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (4, 'Al Aqidah  Al Wasithiyyah', 'Aqidah Ahlussunnah Waljamaah');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (5, 'Tafsir Al Qur\'an', 'Surat Al Falaq');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (6, 'Riyadus Sholihin', 'Karya Imam An-Nawawi');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (7, 'Tafsir Juz Amma', 'Surat An Naaziaat');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (8, 'Ta\'lim Mutaalim', 'Pentingnya Adab Sebelum Berilmu');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (9, 'Al Bidayah Fil Aqidah', 'Karya Syaikh Wahid bin Abdisalam bin Bali');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (10, 'Syarah Kitab Adab', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (11, 'Arbain Nawawi', 'Karya Imam An-Nawawi');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (12, 'Ad-Duruusul Muhimmah Liaammatil Ummah', 'Karya Syaikh Abdul Aziz Bin Baz');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (13, 'Al Minahul Aliyah Fi Bayan As Sunanul Yaumiyah', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (14, 'Minhajul Muslim', 'Karya Abu Bakr Jabir Al Jazairi');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (15, 'Ad-Daa\'wa Ad-Dawaa', 'Karya Ibnu Qayyim Al Jauziyyah');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (16, 'Belajar Bahasa Arab', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (17, 'Al Ushulus  Tsalatsah', 'Karya Syaikh Muhammad bin Abdul Wahhab At Tamimi');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (18, 'Al Kabaair', 'Karya Imam Adz Dzahabi');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (19, 'Manhajus Salikin', 'Karya Al Allamah Abdurrahman bin Nashir As-Sa\'di');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (20, 'Al Insyirah Fi Adabin  Nikah', 'Karya Syaikh Abu Ishaq Al Huwaini');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (21, 'Sirah Nabawiyah', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (22, 'Umdatul Mar\'ah', '100 hadist pegangan  bagi Wanita');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (23, 'Manhaji (Belajar Bahasa Arab)', 'Bimbingan Nahwu Shorof dengan mengaji');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (24, 'Subulus Salam', 'Karya Imam Ash-Shan\'ani');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (25, 'Aqidah At Tauhid', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (26, 'Tematik Ilmiyah', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (27, 'Tauhid', '');
INSERT INTO `kitab` (`id_kitab`, `nama_kitab`, `ket_kitab`) VALUES (28, 'Hadzal Habibi Muhammad (Sirah Nabawi)', 'Karya Syaikh Abu Bakar Al Jazairi');


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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (1, 'Masjid Al Ikhlas', 'Jl. Supriyadi Kademangan Kulon Kademangan Bondowoso Jawa Timur 68217', 'https://www.google.com/maps/place/Masjid+Al-Ikhlas+Bondowoso/@-7.9175425,113.832716,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dcc739912737:0xb915c9003edbb00f!8m2!3d-7.9175136!4d113.8327231', 'Mesjid_ikhlas.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (3, 'Masjid Mush\'ab Bin Umair', 'Yayasan Al Fajri Hidayatullah ⁣⁣ Jl. A.Yani, Gang lap. Perintis, Badean Bondowoso, Jawa Timur⁣⁣', 'https://www.google.com/maps/place/Masjid+Mush\'ab+bin+Umair/@-7.9222475,113.8149285,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dcd9d9281c21:0x6ff46414ed4d22e!8m2!3d-7.9222475!4d113.8149285', 'Mesjid_mushab.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (4, 'Masjid Al Furqon Maesan', 'Krajan, Penanggungan, Kecamatan Maesan, Kabupaten Bondowoso Jawa Timur 68262⁣⁣⁣⁣⁣⁣⁣⁣⁣⁣', 'https://www.google.com/maps/place//data=!4m2!3m1!1s0x2dd6c1f71d67c3eb:0xa23c895597aeef3f?utm_source=mstt_1&entry=gps&lucs=swa', 'Mesjid_furqon.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (5, 'Masjid Nurul Huda', 'Tanggulangin (SMK-PP ke Barat), Tegalampel, Bondowoso, Jawa Timur 68291⁣⁣⁣⁣⁣', 'https://www.google.com/maps/place/MASJID+AL+QOLAM+BONDOWOSO/@-7.8820859,113.8220254,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dc501aceaa3d:0xd5243717e9fae21f!8m2!3d-7.8820889!4d113.8220338', 'Mesjid_nurulhuda.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (6, 'Masjid Al Furqon Wonosari', 'Belakang. Gardu, Cindogo Kecamatan Tapen, Kabupaten Bondowoso⁣⁣⁣ Jawa Timur 68282', 'https://www.google.com/maps/place/MASJID+AL+FURQON/@-7.8827659,113.8992472,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dba9415de099:0x7c1f045d08f53c09!8m2!3d-7.8828046!4d113.8992508', 'Mesjid_furqonwns.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (7, 'Masjid Ash Shobiriin', 'Gang Cempaka no. 45 Gontungan, Kecamatan Tamanan Kabupaten Bondowoso, Jawa Timur 68263', 'https://www.google.com/maps/place/Masjidus+Sobirin/@-8.0146807,113.8272501,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6c1617e5c81e3:0xcbb424ad445e0516!8m2!3d-8.0146807!4d113.8272501', 'Mesjid_shobiriin.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (8, 'Musholla Al Fatih', 'Jl. RE. Martadinata Gang Pantekosta, Dabasah Kabupaten Bondowoso Jawa Timur⁣⁣ 68211', 'https://www.google.com/maps/place/MUSHOLLA+SUNNAH+AL-FATIH/@-7.9755502,113.581135,10z/data=!4m9!1m2!2m1!1smushola+al+fatih+bondowoso!3m5!1s0x2dd6dd4c792b76f3:0xe76b1a2788930926!8m2!3d-7.9159064!4d113.8263879!15sChptdXNob2xhIGFsIGZhdGloIGJvbmRvd29zb1o', 'Musholla_fatih.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (9, 'Masjid Al Fatah', 'Jln. Aip Mugiman, Krajan, Koncer Kidul, Tenggarang Kabupaten Bondowoso Jawa Timur 68281', 'https://www.google.com/maps/place/Masjid+umum+Al-Fatah/@-7.9340855,113.8267748,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6c3f3803a581f:0xaef4b99db72d6779!8m2!3d-7.9341196!4d113.8267622', 'Mesjid_fatah.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (10, 'Musholla Bahrul Ulum', 'Dusun Sumber Malang Selatan  RT 10/03 Desa Sumber Anom, Tamanan, Kabupaten Bondowoso', 'https://www.google.co.id/maps/@-6.914709,113.5832404,8z', 'default.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (11, 'Musholla An Ni\'mah', 'Gang Menang Belakang Utama Raya Supermarket Blindungan, Kabupaten Bondowoso', 'https://www.google.com/maps/place/Utama+Raya+Supermarket/@-7.9129732,113.8258458,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6dcc25fea065d:0x6a4e6b47a03efdeb!8m2!3d-7.9129226!4d113.8258554', 'default.jpg', 0);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (12, 'Perum Villa Kembang', 'Perum Villa Kembang Asri RT 23 Blok EA-5 Kembang Kabupaten Bondowoso Jawa Timur', 'https://www.google.com/maps/place/Wangkal,+Sukowiryo,+Kec.+Bondowoso,+Kabupaten+Bondowoso,+Jawa+Timur/@-7.9435303,113.8079481,17z/data=!4m5!3m4!1s0x2dd6c2d807b8896f:0x2e0b8afc870b3729!8m2!3d-7.9432096!4d113.8093363', 'default.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (13, 'PIAT 6 Bondowoso', 'Jln. Raya Situbondo, Glidung, Kecamatan Wonosari Kabupaten Bondowoso Jawa Timur 68282', 'https://www.google.com/maps/place/PIAT+6+Bondowoso/@-7.8863265,113.8912454,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd6db73f38d7501:0xc04d8276a7b671fb!8m2!3d-7.8863274!4d113.8912457', 'default.jpg', 1);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (14, 'Masjid Baitul Izzah', '(Mako Brimob) Jln. Raya Situbondo, Tangsil, Kecamatan Tenggarang Kabupaten Bondowoso Jawa Timur', 'https://www.google.com/maps/place/Masjid+Baitul+Izzah/@-8.101134,113.3701389,9z/data=!4m13!1m6!3m5!1s0x2dd6dc9e536cc6c9:0xff81568337dcfe71!2sMasjid+Baitul+Izzah!8m2!3d-7.9072075!4d113.8559598!3m5!1s0x2dd6dc9e536cc6c9:0xff81568337dcfe71!8m2!3d-7.90720', 'Mesjid_izzah.jpg', 0);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (15, 'Mushola Nurul Yakin', 'Jln. Brigjen Katamso Perum Rambutan Badean Kabupaten Bondowoso Jawa Timur', 'https://www.google.com/maps/place/Musholla+', 'nurulyakin.jpg', 0);
INSERT INTO `mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `lokasi_mesjid`, `foto_mesjid`, `aktif`) VALUES (16, 'Mushola Al Bukhori', 'Desa Bukor Kecamatan Wringin Kabupaten Bondowoso Propinsi Jawa Timur', 'https://www.google.co.id/maps/@-6.914709,113.5832404,8z', 'default.jpg', 1);


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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `nama_pengguna`, `nama_lengkap`, `email`, `password`, `level`) VALUES (1, 'dicky', 'Dicky Erfan Septiono', 'dickyerfan@gmail.com', '$2y$10$L3hF9Zh0fH1QpT543Jy8e.W7pzPKyg1LVJc3dhHsT.aWy3jt46Zvm', 'Admin');
INSERT INTO `user` (`id`, `nama_pengguna`, `nama_lengkap`, `email`, `password`, `level`) VALUES (2, 'bilal', 'Muhammad Bilal Zaidan', 'bilal@gmail.com', '$2y$10$WzKIuhoUGE.UQ..VdmdA3OYW3XsAZLd4HYxa/qovXaFnJIQPj4lvO', 'Admin');


#
# TABLE STRUCTURE FOR: ustadz
#

DROP TABLE IF EXISTS `ustadz`;

CREATE TABLE `ustadz` (
  `id_ustadz` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ustadz` varchar(100) NOT NULL,
  `ket_ustadz` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ustadz`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (1, 'Agus Barnianto', 'Pengasuh Rumah Qur\'an Al Qolam');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (3, 'Muhammad Yasir,Lc.,M.Hi', 'Dosen STDI  Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (4, 'Muhammad Subaidi, S.Ag', 'Pengajar Ma\'had Al Irsyad Al Islamiyyah Bondowoso');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (5, 'Arif Husnul Khuluq, S.H., M.H', 'Dosen STDI Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (6, 'Sabilul Muhtadin, Lc, M.Hi', 'Dosen STDI Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (7, 'Huzeim Miftah, Lc', 'Mudir Ma\'had Al Irsyad Al Islamiyyah');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (8, 'Bagus Ekodono, S.Pdi', 'Pengajar Ma\'had Al Irsyad Al Islamiyah Bondowoso');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (9, 'Emha Aminullah Makmun, B.A', 'Pengajar PIAT 6 Bondowoso');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (10, 'Alfaf Ismail, Lc', 'Mudir PIAT 6 Bondowoso');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (11, 'Muhammad Ayyub, Lc', 'Pengasuh Ponpes Putri Al Ikhlas Wuluhan Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (12, 'Afif Ibrahim, S.Ag', 'Pengajar Ma\'had Al Irsyad Al Islamiyyah Bondowoso');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (13, 'Muhammad Imam Hafili', 'Mahasiswa STDI Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (14, 'Dafid Faturrahman', 'Mahasiswa STDI Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (15, 'Bramasta Singgih', 'Mahasiswa STDI Imam Syafi\'i Jember');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (16, 'Zainuri Abu Sarah', 'Pengasuh Ponpes Al Fajri Bondowoso');
INSERT INTO `ustadz` (`id_ustadz`, `nama_ustadz`, `ket_ustadz`) VALUES (17, 'Barid Sulaiman, Lc', 'Pengajar Ma\'had Al Irsyad Al Islamiyah Bondowoso');


#
# TABLE STRUCTURE FOR: waktu
#

DROP TABLE IF EXISTS `waktu`;

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_waktu` varchar(100) NOT NULL,
  PRIMARY KEY (`id_waktu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (1, 'Ba\'da Maghrib - selesai');
INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (2, 'Jam 16.00 WIB - selesai');
INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (3, 'Ba\'da Isya\' - selesai');
INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (4, 'Ba\'da Ashar - selesai');
INSERT INTO `waktu` (`id_waktu`, `nama_waktu`) VALUES (5, 'Jam 08.00 WIB - selesai (Online)');


