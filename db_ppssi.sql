/*
 Navicat Premium Data Transfer

 Source Server         : Lokal
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : db_ppssi

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 19/09/2023 09:13:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for agendas
-- ----------------------------
DROP TABLE IF EXISTS `agendas`;
CREATE TABLE `agendas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `quota` int(11) NULL DEFAULT NULL,
  `gift` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `date_start` datetime(0) NULL DEFAULT NULL,
  `date_end` datetime(0) NULL DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `certificate_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of agendas
-- ----------------------------
INSERT INTO `agendas` VALUES (1, 'uploads/Webinar-HISFARSI.jpeg', 'WEBINAR : TEKNIK PENYUNTIKAN INSULIN DALAM KEBERHASILAN TERAPI DIABETES MELITUS', '<p>Himpunan Seminat Farmasi Rumah Sakit PP IAI bekerjasama dengan PT. Becton Dickinson lndonesia menyelenggarakan Seminar Online dengan tema Teknik Penyuntikan Insulin dalam Keberhasilan Terapi Diabetes Melitus yang akan diselenggarakan pada :<br />\r\nHari/Tanggal : Sabtu, 29 Januari 2022<br />\r\nWaktu : 10:00- 12:00 WIB</p>\r\n\r\n<p>Narasumber:</p>\r\n\r\n<ol>\r\n	<li>Update Terapi Insulin pada Kasus Diabetes Melitus serta Pentingnya Edukasi Pasien<br />\r\n	dr. Adeputri Tanesha Idhayu, Sp.PD</li>\r\n	<li>Teknik Penyuntikan Insulin yang Tepat serta Peranan Apoteker dalam Keberhasilan Terapi Insulin<br />\r\n	apt. Benny Setiawan, M.Farm-Klin<br />\r\n	Moderator<br />\r\n	apt. Rini Isyana Wardani, S.Farm</li>\r\n</ol>\r\n\r\n<p>Informasi kegiatan : webinar.hisfarsi.pusat@gmail.com<br />\r\nPeserta maksimal 1000 orang, diutamakan Apoteker yang bekerja di Rumah Sakit Terima kasih</p>', 'Online', 100, '-', '2023-02-14 10:00:00', '2023-02-14 12:00:00', 'https://docs.google.com/forms/d/e/1FAIpQLScv-9Qp-jfP9ZiPFf8X1dSMw6flJlkzyAf_FMhTyA9pU4nLDg/closedform', NULL, 'webinar-teknik-penyuntikan-insulin-dalam-keberhasilan-terapi-diabetes-melitus', 0, '2023-02-14 05:09:27', '2023-09-19 01:03:52', '2023-09-19 01:03:52');
INSERT INTO `agendas` VALUES (2, 'uploads/Webinar.jpeg', 'Webinar: Simplifikasi Terapi Diabetes Mellitus dengan Fixed Ratio Combination Drug', '<p>Hari/Tanggal &nbsp;&nbsp;&nbsp; : Sabtu, 26 Februari 2022</p>\r\n\r\n<p>Waktu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10:00- 12:10 WIB</p>\r\n\r\n<p>Narasumber:</p>\r\n\r\n<ol>\r\n	<li>Terapi Diabetes Mellitus dari OAD sampai pemberian Insulin (Fixed Ratio Combination).<br />\r\n	dr DickyL. Tahapary. SpPD- KEMD, PhD</li>\r\n	<li>Evaluasi KinerjaTenaga Kefarmasian di Rumah Sakit untuk Peningkatan Mutu Pelayanan</li>\r\n</ol>\r\n\r\n<p>apt. Dra. Nugraharti, M.Pharm</p>\r\n\r\n<p>Moderator<br />\r\napt. Mariyatul Qibtiyah, S.Si SpFRS</p>\r\n\r\n<p>Link Pendaftaran :&nbsp;<a href=\"https://docs.google.com/forms/d/e/1FAIpQLSeSbv8bwlEIP-l2tFbEffNt626gOlumpd7ywWDeE2N_EU7OXg/viewform\" target=\"_blank\">KLIK DISINI</a>&nbsp;&nbsp;<br />\r\nInformasi kegiatan : webinar.hisfarsi.pusat@gmail.com<br />\r\nPeserta maksimal 1000 orang, diutamakan Apoteker yang bekerja di Rumah Sakit Terima kasih</p>', 'Online', 100, '-', '2022-01-26 10:00:00', '2022-01-26 12:10:00', 'https://docs.google.com/forms/d/e/1FAIpQLSeSbv8bwlEIP-l2tFbEffNt626gOlumpd7ywWDeE2N_EU7OXg/viewform', NULL, 'webinar-simplifikasi-terapi-diabetes-mellitus-dengan-fixed-ratio-combination-drug', 1, '2023-02-14 05:16:14', '2023-09-19 01:03:50', '2023-09-19 01:03:50');
INSERT INTO `agendas` VALUES (3, 'uploads\\WhatsApp-Image-2022-11-24-at-17.24.41.jpeg', 'Webinar PP HISFARSI', '<p>Himpunan Seminat Farmasi Rumah Sakit PP IAI bekerjasama dengan PT. Taisho Pharmaceutical Indonesia menyelenggarakan Seminar Online pada:<br />\r\nHari/Tanggal : Sabtu/ 10 Desember 2022<br />\r\nWaktu : 10:00- 12:00 WIB</p>\r\n\r\n<p>Judul Materi:</p>\r\n\r\n<ol>\r\n	<li>Lesi Rongga Mulut: Diagnosis dan Penanganannya<br />\r\n	drg. Widya Apsari, Sp.PM(K)<br />\r\n	Dokter Gigi Spesialis Penyakit Mulut RS PKN Dharmais</li>\r\n	<li>Kesiapsiagaan Farmasi terhadap Darurat Bencana<br />\r\n	Marsma TNI (Purn) Dr. apt. Yuli Subiakto, Drs. M.Si<br />\r\n	Fakultas Farmasi Militer Universitas Pertahanan RI<br />\r\n	Ketua Perhimpunan Farmasi Militer 2021-2025</li>\r\n</ol>\r\n\r\n<p>Moderator<br />\r\napt. Dra. Siti Farida., Sp FRS. FISQua<br />\r\nRSUD Dr. Soetomo<br />\r\nBidang Pendidikan &amp; Pelatihan PP HISFARSI</p>\r\n\r\n<p>Link Pendaftaran:&nbsp;<a href=\"https://docs.google.com/forms/d/1nIfXqYtlyVL4lVzQete4XLODmC9SL5ZrzkkyZ0VRS7I/edit#responses\" target=\"_blank\">KLIK DISINI</a></p>\r\n\r\n<p>Informasi kegiatan : webinar.hisfarsi.pusat@gmail.com<br />\r\nPeserta maksimal 1000 orang</p>\r\n\r\n<p>Seminar ini tidak disiarkan lewat kanal youtube.</p>\r\n\r\n<p>Bidang Diklat PP HISFARSI<br />\r\nTerima kasih</p>', 'Online', 100, '-', '2022-12-10 10:00:00', '2022-12-10 12:00:00', NULL, NULL, 'webinar-pp-hisfarsi', 1, '2023-02-14 05:59:04', '2023-09-19 01:03:47', '2023-09-19 01:03:47');
INSERT INTO `agendas` VALUES (5, 'uploads\\WhatsApp-Image-2022-11-24-at-17.24.41.jpeg', 'Webinar PP HISFARSI', '<p>Himpunan Seminat Farmasi Rumah Sakit PP IAI bekerjasama dengan PT. Taisho Pharmaceutical Indonesia menyelenggarakan Seminar Online pada:<br />\r\nHari/Tanggal : Sabtu/ 10 Desember 2022<br />\r\nWaktu : 10:00- 12:00 WIB</p>\r\n\r\n<p>Judul Materi:</p>\r\n\r\n<ol>\r\n	<li>Lesi Rongga Mulut: Diagnosis dan Penanganannya<br />\r\n	drg. Widya Apsari, Sp.PM(K)<br />\r\n	Dokter Gigi Spesialis Penyakit Mulut RS PKN Dharmais</li>\r\n	<li>Kesiapsiagaan Farmasi terhadap Darurat Bencana<br />\r\n	Marsma TNI (Purn) Dr. apt. Yuli Subiakto, Drs. M.Si<br />\r\n	Fakultas Farmasi Militer Universitas Pertahanan RI<br />\r\n	Ketua Perhimpunan Farmasi Militer 2021-2025</li>\r\n</ol>\r\n\r\n<p>Moderator<br />\r\napt. Dra. Siti Farida., Sp FRS. FISQua<br />\r\nRSUD Dr. Soetomo<br />\r\nBidang Pendidikan &amp; Pelatihan PP HISFARSI</p>\r\n\r\n<p>Link Pendaftaran:&nbsp;<a href=\"https://docs.google.com/forms/d/1nIfXqYtlyVL4lVzQete4XLODmC9SL5ZrzkkyZ0VRS7I/edit#responses\" target=\"_blank\">KLIK DISINI</a></p>\r\n\r\n<p>Informasi kegiatan : webinar.hisfarsi.pusat@gmail.com<br />\r\nPeserta maksimal 1000 orang</p>\r\n\r\n<p>Seminar ini tidak disiarkan lewat kanal youtube.</p>\r\n\r\n<p>Bidang Diklat PP HISFARSI<br />\r\nTerima kasih</p>\r\n\r\n<p>Tagged&nbsp;<a href=\"https://hisfarsi.org/index.php/tag/webinar/\">Webinar</a></p>', 'Zoom', 100, '-', '2023-02-19 09:39:00', '2023-02-19 09:39:37', 'https://docs.google.com/forms/d/1nIfXqYtlyVL4lVzQete4XLODmC9SL5ZrzkkyZ0VRS7I/edit#responses', NULL, 'webinar-pp-hisfarsi', 0, '2023-02-19 00:39:39', '2023-02-19 23:17:38', '2023-02-19 23:17:38');
INSERT INTO `agendas` VALUES (6, 'storage/events\\otoplasty.png', 'WERBINAR WCD 2023', '<p>Tanggal 4 Februari diperingati sebagai Hari Kanker Sedunia, dan tema tahun ini adalah &ldquo;Close the Care Gap &ndash; Uniting Our Voices and Taking Action&rdquo;</p>\r\n\r\n<p>Apoteker berperan dalam Close the Care Gap pada bidang onkologi agar setiap pasien mudah mengakes layanan farmasi onkologi.</p>\r\n\r\n<p>Pengurus Pusat HISFARSI melalui Peer Group Apoteker Spesialis Onkologi akan mengadakan Webinar Kefarmasian<br />\r\n&ldquo;Indonesian Pharmacists in Cancer Care: Taking Action to Close the Care Gap&rdquo; pada:</p>\r\n\r\n<p>🗓️ Sabtu, 11 Februari 2023<br />\r\n⏰ 09.00-12.30 WIB</p>\r\n\r\n<p>Webinar ini akan mengupas peran Apoteker dalam Edukasi kepada Pasien Onkologi, serta memperlihatkan keseharian para Apoteker yang bekerja di bidang onkologi, baik di area cytotoxic handling maupun pelayanan farmasi klinis.</p>\r\n\r\n<p>&ldquo;Patient Education in Oncology: How Pharmacists Build a Good Rapport with Patients&rdquo; oleh apt. Yovita Diane Titiesari, M.Sc. (Clinical Pharmacist RS Khusus Kanker MRCCC Siloam Hospitals Semanggi Jakarta)</p>\r\n\r\n<p>&ldquo;A Day in a Life of Oncology Pharmacists&rdquo; oleh apt. Bayu Prio Septiantoro (Farmasi Klinis RSUP Dr. Kariadi Semarang) dan apt. Ayu Hasti (Penanggung Jawab Pelayanan Pencampuran Sitostatika RSUPN Dr. Cipto Mangunkusumo Jakarta)</p>\r\n\r\n<p>Moderator: apt. Risani Andalasia Putri, M.Farm. (Kasub. Instalasi Pelayanan dan Farmasi Klinik RS Kanker Dharmais Jakarta)</p>\r\n\r\n<p>Sambutan dari:</p>\r\n\r\n<ol>\r\n	<li>apt. Amrizal Marzuki, M.Kes., MARS, Ph.D (Ketua Umum HISFARSI PP IAI)</li>\r\n	<li>Dr. dr. Tubagus Djumhana Atmakusuma, Sp.PD-KHOM (Ketua PERHOMPEDIN)</li>\r\n</ol>\r\n\r\n<p>Daftarkan kehadiran Anda melalui link berikut ini&nbsp;<a href=\"https://docs.google.com/forms/d/e/1FAIpQLSeAD6FDF9OOSGBhrcfz0buhmkghTpWlWcCD2odrWw_3TkiuZQ/viewform\" target=\"_blank\">KLIK DISINI</a></p>\r\n\r\n<p>Terbatas pada 500 pendaftar pertama</p>\r\n\r\n<p>2 SKP Pembelajaran dalam konfirmasi.</p>', 'Zoom', 100, '-', '2023-02-11 08:26:00', '2023-02-20 08:26:40', 'https://docs.google.com/forms/d/e/1FAIpQLSeAD6FDF9OOSGBhrcfz0buhmkghTpWlWcCD2odrWw_3TkiuZQ/viewform', NULL, 'werbinar-wcd-2023', 0, '2023-02-19 23:27:29', '2023-05-03 13:54:29', '2023-05-03 13:54:29');
INSERT INTO `agendas` VALUES (7, 'uploads\\WhatsApp-Image-2023-02-07-at-12.33.28.jpeg', 'WERBINAR WCD 2023', '<p>Tanggal 4 Februari diperingati sebagai Hari Kanker Sedunia, dan tema tahun ini adalah &ldquo;Close the Care Gap &ndash; Uniting Our Voices and Taking Action&rdquo;</p>\r\n\r\n<p>Apoteker berperan dalam Close the Care Gap pada bidang onkologi agar setiap pasien mudah mengakes layanan farmasi onkologi.</p>\r\n\r\n<p>Pengurus Pusat HISFARSI melalui Peer Group Apoteker Spesialis Onkologi akan mengadakan Webinar Kefarmasian<br />\r\n&ldquo;Indonesian Pharmacists in Cancer Care: Taking Action to Close the Care Gap&rdquo; pada:</p>\r\n\r\n<p>🗓️ Sabtu, 11 Februari 2023<br />\r\n⏰ 09.00-12.30 WIB</p>\r\n\r\n<p>Webinar ini akan mengupas peran Apoteker dalam Edukasi kepada Pasien Onkologi, serta memperlihatkan keseharian para Apoteker yang bekerja di bidang onkologi, baik di area cytotoxic handling maupun pelayanan farmasi klinis.</p>\r\n\r\n<p>&ldquo;Patient Education in Oncology: How Pharmacists Build a Good Rapport with Patients&rdquo; oleh apt. Yovita Diane Titiesari, M.Sc. (Clinical Pharmacist RS Khusus Kanker MRCCC Siloam Hospitals Semanggi Jakarta)</p>\r\n\r\n<p>&ldquo;A Day in a Life of Oncology Pharmacists&rdquo; oleh apt. Bayu Prio Septiantoro (Farmasi Klinis RSUP Dr. Kariadi Semarang) dan apt. Ayu Hasti (Penanggung Jawab Pelayanan Pencampuran Sitostatika RSUPN Dr. Cipto Mangunkusumo Jakarta)</p>\r\n\r\n<p>Moderator: apt. Risani Andalasia Putri, M.Farm. (Kasub. Instalasi Pelayanan dan Farmasi Klinik RS Kanker Dharmais Jakarta)</p>\r\n\r\n<p>Sambutan dari:</p>\r\n\r\n<ol>\r\n	<li>apt. Amrizal Marzuki, M.Kes., MARS, Ph.D (Ketua Umum HISFARSI PP IAI)</li>\r\n	<li>Dr. dr. Tubagus Djumhana Atmakusuma, Sp.PD-KHOM (Ketua PERHOMPEDIN)</li>\r\n</ol>\r\n\r\n<p>Daftarkan kehadiran Anda melalui link berikut ini&nbsp;<a href=\"https://docs.google.com/forms/d/e/1FAIpQLSeAD6FDF9OOSGBhrcfz0buhmkghTpWlWcCD2odrWw_3TkiuZQ/viewform\" target=\"_blank\">KLIK DISINI</a></p>\r\n\r\n<p>Terbatas pada 500 pendaftar pertama</p>\r\n\r\n<p>2 SKP Pembelajaran dalam konfirmasi.</p>', 'Zoom', 100, '-', '2023-02-11 08:26:00', '2023-02-20 08:26:40', 'https://docs.google.com/forms/d/e/1FAIpQLSeAD6FDF9OOSGBhrcfz0buhmkghTpWlWcCD2odrWw_3TkiuZQ/viewform', NULL, 'werbinar-wcd-2023', 0, '2023-02-19 23:27:54', '2023-02-19 23:28:03', '2023-02-19 23:28:03');
INSERT INTO `agendas` VALUES (8, 'uploads\\65a7054d-f174-4d5e-b783-32bbd3f8983f.jpg', 'Pelatihan Sterilisasi Tingkat Dasar Bagi Pelaksana Pelayanan Sterilisasi di Fasyankes', '<p>Hadirilah Pelatihan Sterilisasi Tingkat Dasar Bagi Pelaksana Pelayanan Sterilisasi di Fasyankes</p>', 'Hotel Horison', 1000, '-', '2023-09-19 09:04:00', '2023-09-30 09:05:50', 'https://bit.ly/FormPendaftaranPesertaPelatihanDasarKaltim', NULL, 'pelatihan-sterilisasi-tingkat-dasar-bagi-pelaksana-pelayanan-sterilisasi-di-fasyankes', 1, '2023-09-19 01:06:05', '2023-09-19 01:06:05', NULL);

-- ----------------------------
-- Table structure for beritas
-- ----------------------------
DROP TABLE IF EXISTS `beritas`;
CREATE TABLE `beritas`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of beritas
-- ----------------------------
INSERT INTO `beritas` VALUES (1, 'blogs\\hisfarsi1.jpeg', 'WEBINAR : SPREAD AWARENESS, STOP RESISTANCE', '<p>Pengurus Pusat Himpunan Seminat Farmasi Rumah Sakit Indonesia (PP HISFARSI) bekerjasama dengan PT. Hexpharm Jaya mengadakan webinar dalam rangka memperingati World Antimicrobial Awareness Week (WAAW) 2021 yang mengusung tagline &ldquo;Spread Awareness, Stop Resistance&rdquo; pada :<br />\r\nHari/Tanggal: Sabtu, 20 November 2021<br />\r\nWaktu : 10.00-12.00 WIB</p>', 'webinar-spread-awareness-stop-resistance', '2023-02-08 06:43:19', '2023-09-19 01:03:37', '2023-09-19 01:03:37');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED NULL DEFAULT 0,
  `categoriescol` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_categories_categories_idx`(`parent_id`) USING BTREE,
  CONSTRAINT `fk_categories_categories` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Visi & Misi', '<p><strong><em><strong><em>Visi :</em></strong></em></strong></p>\r\n\r\n<blockquote>\r\n<p>Menjadi organisasi profesi yang mewadahi para apoteker di rumah sakit dalam mewujudkan pengelolaan instalasi farmasi yang profesional di indonesia yang bertaraf internasional</p>\r\n</blockquote>\r\n\r\n<p><strong><em><strong><em>Misi :</em></strong></em></strong></p>\r\n\r\n<ul>\r\n	<li>Meningkatkan profesionalisme para apoteker di rumah sakit dalam pengelolaan perbekalan farmasi yang efisien</li>\r\n	<li>Meningkatkan profesionalisme para apoteker di rumah sakit dalam menempatkan diri sebagai bagian dari tenaga kesehatan dalam penentuan terapi pasien berorientasi kepada efektifitas dan keselamatan pasien</li>\r\n	<li>Melindungi anggota dan menyelesaikan permasalahan yang terkait dengan bidang pekerjaan di instalasi farmasi</li>\r\n	<li>Menjalin kerja sama dengan organisasi terkait di bidang farmasi baik di dalam dan luar negeri, serta dengan para pemangku kepentingan yang terkait dengan pelayanan farmasi RS</li>\r\n</ul>', 'active', NULL, 'visi-misi', '2023-02-15 01:18:11', '2023-02-15 01:18:11', NULL, 1, NULL);
INSERT INTO `categories` VALUES (2, 'Sejarah HISFARSI', '<p>Apoteker Indonesia merupakan bagian dari masyarakat Indonesia yang dianugerahi bekal ilmu pengetahuan dan teknologi serta keahlian di bidang kefarmasian, yang dapat dimanfaatkan sebesar-besarnya bagi kemanusiaan, bagi peningkatan kesejahteraan rakyat, bagi pengembangan pribadi warga negara Republik Indonesia, untuk mewujudkan masyarakat yang adil dan makmur, berdasarkan Pancasila dan Undang-undang Dasar 1945.</p>\r\n\r\n<p>Apoteker khususnya yang bekerja di Rumah Sakit dituntut untuk merealisasikan perluasan paradigma Pelayanan Kefarmasian dari orientasi produk menjadi orientasi pasien. Untuk itu kompetensi Apoteker perlu ditingkatkan secara terus menerus agar perubahan paradigma tersebut dapat diimplementasikan. Apoteker harus dapat memenuhi hak pasien agar terhindar dari hal-hal yang tidak diinginkan termasuk tuntutan hukum. Dengan demikian, para Apoteker Indonesia dapat berkompetisi dan menjadi tuan rumah di negara sendiri.</p>\r\n\r\n<p>Memperhatikan perkembangan di atas, Kongres Nasional Ikatan Sarjana Farmasi (ISFI) XV tahun 1996 di Semarang merekomendasikan pembentukan Himpunan Seminat Farmasi Rumah Sakit Indonesia. Rekomendasi tersebut dibahas dan disepakati oleh beberapa Apoteker yang bekerja di Rumah Sakit di berbagai wilayah Indonesia pada Pan Pacific Congress 1997 di Bali untuk membentuk Organisasi bernama Himpunan Seminat Farmasi Rumah Sakit Indonesia yang disingkat menjadi HISFARSI, kemudian ditindak lanjuti dengan menyelenggarakan Kongres HISFARSI I di Jakarta pada tanggal 25 &ndash; 27 April 2005.</p>\r\n\r\n<p>Himpunan Seminat Farmasi Rumah Sakit Indonesia adalah merupakan bagian integral dari Ikatan Apoteker Indonesia dan merupakan satu-satunya organisasi para Apoteker Seminat Farmasi Rumah Sakit, yang merupakan perwujudan dari hasrat murni dan keinginan luhur para anggotanya, yang menyatakan untuk menyatukan diri dalam upaya mengembangkan profesi luhur kefarmasian rumah sakit di Indonesia pada umumnya dan martabat anggota pada khususnya.</p>\r\n\r\n<p>Dalam Anggaran Dasar Ikatan Apoteker Indonesia (AD-IAI) dinyatakan bahwa&nbsp;Himpunan adalah kelompok seminat apoteker berdasarkan praktik; Himpunan dapat dibentuk sesuai dengan kebutuhan di tingkat pusat dan daerah; Himpunan di tingkat daerah berkolaborasi secara nasional; Himpunan nasional sebagaimana dimaksud diatas merupakan kelengkapan Pengurus Pusat; Ketentuan mengenai Himpunan diatur lebih lanjut dalam Anggaran Rumah Tangga.</p>', 'active', NULL, 'sejarah-hisfarsi', '2023-02-15 01:29:16', '2023-02-15 01:29:16', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for galeris
-- ----------------------------
DROP TABLE IF EXISTS `galeris`;
CREATE TABLE `galeris`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeris
-- ----------------------------
INSERT INTO `galeris` VALUES (2, 'uploads\\photo1683160997.jpeg', 'Rapat Pengurus Hisfarsikaltim', '2023-05-04 00:47:59', '2023-05-04 00:47:59', NULL);
INSERT INTO `galeris` VALUES (3, 'uploads\\photo1683162614.jpeg', 'Hari Kesehatan Sedunia \"Membangun dunia yang lebih adil dan lebih sehat untuk semua orang\"', '2023-05-04 01:12:26', '2023-05-04 01:12:26', NULL);
INSERT INTO `galeris` VALUES (4, 'uploads\\photo1683162651 (1).jpeg', 'Olimpiade Farmasi Klinik tahun 2022', '2023-05-04 01:13:03', '2023-05-04 01:13:03', NULL);

-- ----------------------------
-- Table structure for layanans
-- ----------------------------
DROP TABLE IF EXISTS `layanans`;
CREATE TABLE `layanans`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `categories` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanans
-- ----------------------------
INSERT INTO `layanans` VALUES (1, NULL, 'PPSSI PD KALTIM', '<p>Sejawat Apoteker Rumah Sakit di seluruh tanah air , selamat datang dan selamat bergabung di website PP Hisfarsi , website yang diharapkan dapat memberikan informasi untuk kita semua Marilah kita panjatkan puji syukur kehadirat Allah SWT atas limpahan rahmat yang diberikan kepada kita sehingga kita masih bisa menjalankan profesi ini dengan baik, lancar, selamat, dan semangat sampai saat ini dan masih bisa bergabung dalam kepengurusan PP HISFARSI ini</p>', 'Profil', 'ppssi-pd-kaltim', '2023-02-15 03:33:23', '2023-09-19 01:13:01', NULL);
INSERT INTO `layanans` VALUES (2, NULL, 'Visi & Misi', '<p><strong><em><strong><em>Visi :</em></strong></em></strong></p>\r\n\r\n<blockquote>\r\n<p>Menjadi organisasi profesi yang mewadahi para apoteker di rumah sakit dalam mewujudkan pengelolaan instalasi farmasi yang profesional di indonesia yang bertaraf internasional</p>\r\n</blockquote>\r\n\r\n<p><strong><em><strong><em>Misi :</em></strong></em></strong></p>\r\n\r\n<ul>\r\n	<li>Meningkatkan profesionalisme para apoteker di rumah sakit dalam pengelolaan perbekalan farmasi yang efisien</li>\r\n	<li>Meningkatkan profesionalisme para apoteker di rumah sakit dalam menempatkan diri sebagai bagian dari tenaga kesehatan dalam penentuan terapi pasien berorientasi kepada efektifitas dan keselamatan pasien</li>\r\n	<li>Melindungi anggota dan menyelesaikan permasalahan yang terkait dengan bidang pekerjaan di instalasi farmasi</li>\r\n	<li>Menjalin kerja sama dengan organisasi terkait di bidang farmasi baik di dalam dan luar negeri, serta dengan para pemangku kepentingan yang terkait dengan pelayanan farmasi RS</li>\r\n</ul>', 'About', 'visi-misi', '2023-02-15 03:39:31', '2023-02-15 03:39:31', NULL);
INSERT INTO `layanans` VALUES (3, NULL, 'Sejarah HISFARSI PD KALTIM', '<p>Apoteker Indonesia merupakan bagian dari masyarakat Indonesia yang dianugerahi bekal ilmu pengetahuan dan teknologi serta keahlian di bidang kefarmasian, yang dapat dimanfaatkan sebesar-besarnya bagi kemanusiaan, bagi peningkatan kesejahteraan rakyat, bagi pengembangan pribadi warga negara Republik Indonesia, untuk mewujudkan masyarakat yang adil dan makmur, berdasarkan Pancasila dan Undang-undang Dasar 1945.</p>\r\n\r\n<p>Apoteker khususnya yang bekerja di Rumah Sakit dituntut untuk merealisasikan perluasan paradigma Pelayanan Kefarmasian dari orientasi produk menjadi orientasi pasien. Untuk itu kompetensi Apoteker perlu ditingkatkan secara terus menerus agar perubahan paradigma tersebut dapat diimplementasikan. Apoteker harus dapat memenuhi hak pasien agar terhindar dari hal-hal yang tidak diinginkan termasuk tuntutan hukum. Dengan demikian, para Apoteker Indonesia dapat berkompetisi dan menjadi tuan rumah di negara sendiri.</p>\r\n\r\n<p>Memperhatikan perkembangan di atas, Kongres Nasional Ikatan Sarjana Farmasi (ISFI) XV tahun 1996 di Semarang merekomendasikan pembentukan Himpunan Seminat Farmasi Rumah Sakit Indonesia. Rekomendasi tersebut dibahas dan disepakati oleh beberapa Apoteker yang bekerja di Rumah Sakit di berbagai wilayah Indonesia pada Pan Pacific Congress 1997 di Bali untuk membentuk Organisasi bernama Himpunan Seminat Farmasi Rumah Sakit Indonesia yang disingkat menjadi HISFARSI, kemudian ditindak lanjuti dengan menyelenggarakan Kongres HISFARSI I di Jakarta pada tanggal 25 &ndash; 27 April 2005.</p>\r\n\r\n<p>Himpunan Seminat Farmasi Rumah Sakit Indonesia adalah merupakan bagian integral dari Ikatan Apoteker Indonesia dan merupakan satu-satunya organisasi para Apoteker Seminat Farmasi Rumah Sakit, yang merupakan perwujudan dari hasrat murni dan keinginan luhur para anggotanya, yang menyatakan untuk menyatukan diri dalam upaya mengembangkan profesi luhur kefarmasian rumah sakit di Indonesia pada umumnya dan martabat anggota pada khususnya.</p>\r\n\r\n<p>Dalam Anggaran Dasar Ikatan Apoteker Indonesia (AD-IAI) dinyatakan bahwa&nbsp;Himpunan adalah kelompok seminat apoteker berdasarkan praktik; Himpunan dapat dibentuk sesuai dengan kebutuhan di tingkat pusat dan daerah; Himpunan di tingkat daerah berkolaborasi secara nasional; Himpunan nasional sebagaimana dimaksud diatas merupakan kelengkapan Pengurus Pusat; Ketentuan mengenai Himpunan diatur lebih lanjut dalam Anggaran Rumah Tangga.</p>', 'About', 'sejarah-hisfarsi-pd-kaltim', '2023-02-15 03:42:58', '2023-04-06 02:45:57', NULL);
INSERT INTO `layanans` VALUES (4, NULL, 'SUSUNAN PENGURUS HISFARSI', '<p>SUSUNAN PENGURUS HISFARSI</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/storage/photos/shares/SUSUNAN_PENGURUS_HISFARSI___HIMPUNAN_SEMINAT_FARMASI_RUMAH_SAKIT__DAERAH_IKATAN_APOTEKER_INDONESIA_KALIMANTAN_TIMURMASA_BAKTI_2017_-_2021.png\" style=\"height:2000px; width:1414px\" /></p>', 'About', 'susunan-pengurus-hisfarsi', '2023-04-26 02:05:03', '2023-04-26 02:06:24', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES (1, 'storage/partners\\logo (1).png', 'IAI PC Balikpapan Kota', 'https://iaipcbalikpapan.org/', '2023-02-15 23:40:41', '2023-02-15 23:41:43', NULL);
INSERT INTO `partners` VALUES (2, 'storage/partners\\logo (1).png', 'Ikatan Apoteker Indonesia', 'https://iaipcbalikpapan.org/', '2023-02-15 23:40:50', '2023-02-15 23:40:55', '2023-02-15 23:40:55');
INSERT INTO `partners` VALUES (3, 'storage/partners\\kemenkes-768x576.png', 'Kementerian Kesehatan Republik Indonesia', 'https://www.kemkes.go.id/', '2023-02-15 23:42:04', '2023-02-15 23:42:04', NULL);
INSERT INTO `partners` VALUES (4, 'storage/partners\\logo (1).png', 'IAI PC Balikpapan', 'https://iaipcbalikpapan.org/', '2023-05-04 02:39:26', '2023-05-04 02:39:26', NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pengumumans
-- ----------------------------
DROP TABLE IF EXISTS `pengumumans`;
CREATE TABLE `pengumumans`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tittle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for slides
-- ----------------------------
DROP TABLE IF EXISTS `slides`;
CREATE TABLE `slides`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tittle` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'administrator', 'ppssikaltim@gmail.com', NULL, '$2y$10$.gZsrLlYqzs2.rp8hzXgZexqSSrrcbzoezpz/vHhgNwX8Qo1Xql2a', NULL, '2023-09-19 01:03:15', '2023-09-19 01:03:15', NULL);

-- ----------------------------
-- Table structure for videos
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
