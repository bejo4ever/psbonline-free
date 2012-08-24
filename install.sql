/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : psbonlinefree

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2012-04-26 10:20:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pendaftar`
-- ----------------------------
DROP TABLE IF EXISTS `pendaftar`;
CREATE TABLE `pendaftar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `noujiannasional` varchar(20) NOT NULL,
  `thnlulus` year(4) NOT NULL,
  `nopendaftaran` varchar(20) NOT NULL,
  `tempatlahir` varchar(250) NOT NULL,
  `tgllahir` varchar(15) NOT NULL,
  `kelamin` enum('P','L') NOT NULL,
  `alamat` text NOT NULL,
  `kabkota` varchar(250) NOT NULL,
  `notelphp` varchar(50) NOT NULL,
  `sekolahasal` varchar(250) NOT NULL,
  `nilaiuas` varchar(5) NOT NULL,
  `nilaiindo` varchar(5) NOT NULL,
  `nilaimatematika` varchar(5) NOT NULL,
  `nilaiipa` varchar(5) NOT NULL,
  `dipakai` varchar(5) NOT NULL,
  `diterima` varchar(5) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pendaftar
-- ----------------------------

-- ----------------------------
-- Table structure for `pengguna`
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `userpass` varchar(250) NOT NULL,
  `aktif` char(5) NOT NULL DEFAULT '1',
  `level` char(5) NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('1', 'kepsek', '395df8f7c51f007019cb30201c49e884b46b92fa', '1', '9');
INSERT INTO `pengguna` VALUES ('2', 'operator', '395df8f7c51f007019cb30201c49e884b46b92fa', '1', '8');
