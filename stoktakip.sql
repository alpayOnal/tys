/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : stoktakip

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-02-02 12:12:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `brands`
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES ('17', '45345435');
INSERT INTO `brands` VALUES ('15', '6575675');
INSERT INTO `brands` VALUES ('19', '45645645');
INSERT INTO `brands` VALUES ('20', 'dfghdfgh');

-- ----------------------------
-- Table structure for `customers`
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_group_id` smallint(5) unsigned DEFAULT NULL,
  `current_code` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `company_name` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `company_title` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone_gsm` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `web` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `city` int(11) unsigned DEFAULT NULL,
  `town` int(11) unsigned DEFAULT NULL,
  `company_type` enum('BUYER','SELLER') COLLATE utf8_turkish_ci DEFAULT 'BUYER',
  `point` tinyint(1) DEFAULT NULL COMMENT 'firma puanı',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('1', null, '001', 'Kutay Group', 'Ltd ŞTI', '', '', '', 'kutay@kutaygroup.com', '', '', '0', '0', 'SELLER', null);
INSERT INTO `customers` VALUES ('2', null, '002', 'OZN Elektronik', 'A.Ş', '', '', '', 'destek@ozn.com.tr', 'www.ozn.com.tr', '', '0', '0', 'BUYER', null);

-- ----------------------------
-- Table structure for `customer_groups`
-- ----------------------------
DROP TABLE IF EXISTS `customer_groups`;
CREATE TABLE `customer_groups` (
  `customer_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`customer_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of customer_groups
-- ----------------------------
INSERT INTO `customer_groups` VALUES ('1', 'A Grubu');
INSERT INTO `customer_groups` VALUES ('2', 'B Grubu');
INSERT INTO `customer_groups` VALUES ('3', 'C Grubu');

-- ----------------------------
-- Table structure for `customer_meetings`
-- ----------------------------
DROP TABLE IF EXISTS `customer_meetings`;
CREATE TABLE `customer_meetings` (
  `meeting_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned DEFAULT NULL,
  `customer_personel_id` int(10) unsigned DEFAULT NULL,
  `member_id` int(10) unsigned DEFAULT NULL,
  `note` mediumtext COLLATE utf8_turkish_ci,
  `manager_note` mediumtext COLLATE utf8_turkish_ci COMMENT 'bu kısmı sadece mevcut üye görecek',
  PRIMARY KEY (`meeting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of customer_meetings
-- ----------------------------

-- ----------------------------
-- Table structure for `customer_staff`
-- ----------------------------
DROP TABLE IF EXISTS `customer_staff`;
CREATE TABLE `customer_staff` (
  `staff_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gsm` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone_internal` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'Dahili',
  `email` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of customer_staff
-- ----------------------------
INSERT INTO `customer_staff` VALUES ('1', '1', 'Hasan Demir', '0532710557', '0532710557', 'bilgehasan@hotmail.com');
INSERT INTO `customer_staff` VALUES ('2', '2', 'Alpay Önal', '054365898', '', 'alpaycom@gmail.com');
INSERT INTO `customer_staff` VALUES ('4', '2', 'Mustafa Bal', '0564654', '564564654', 'mustafa@medyafikirleri.com');

-- ----------------------------
-- Table structure for `invoices`
-- ----------------------------
DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `invoice_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) unsigned DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `currency` enum('TL','EURO','USD') COLLATE utf8_turkish_ci DEFAULT NULL,
  `type` enum('NAKIT','SENET','CEK') COLLATE utf8_turkish_ci DEFAULT 'NAKIT',
  `comment` mediumtext COLLATE utf8_turkish_ci,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of invoices
-- ----------------------------

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `member_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_turkish_ci NOT NULL,
  `member_type` enum('Member','Staff','Admin') COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Member',
  `name` varchar(32) COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `gender` enum('M','F') COLLATE utf8_turkish_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `phone` bigint(10) unsigned NOT NULL DEFAULT '0',
  `registered_on` date NOT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `last_login_ip` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'ip2long(ip)',
  `last_profile_update` datetime DEFAULT NULL,
  `member_status` enum('Active','Passive','Valid','Deleted','Invalid') COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`member_id`),
  KEY `email` (`email`),
  KEY `member_status` (`member_status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'hasandemir.hd@gmail.com', 'hasan', '7246c2ecbf5ca430ecbd3d2bc377d3c3', 'Admin', 'Hasan Demir', null, null, '0', '0', '2012-12-16', '2012-12-21 23:55:18', '2130706433', null, 'Active');

-- ----------------------------
-- Table structure for `offers`
-- ----------------------------
DROP TABLE IF EXISTS `offers`;
CREATE TABLE `offers` (
  `offer_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Teklif ID',
  `member_id` int(11) unsigned DEFAULT NULL COMMENT 'Personel ID',
  `customer_id` int(11) unsigned DEFAULT NULL COMMENT 'şirket ID',
  `customer_staff` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL COMMENT 'görüşülen personel',
  `note` mediumtext COLLATE utf8_turkish_ci COMMENT 'Görüşme Notu',
  `offer_date` date DEFAULT NULL,
  `offer_status` enum('WAITING','REJEDTED','APPROVED') COLLATE utf8_turkish_ci DEFAULT 'WAITING',
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of offers
-- ----------------------------
INSERT INTO `offers` VALUES ('1', '1', '5', '1', 'Güzelk teklid', '2013-05-02', 'WAITING');

-- ----------------------------
-- Table structure for `offer_products`
-- ----------------------------
DROP TABLE IF EXISTS `offer_products`;
CREATE TABLE `offer_products` (
  `offer_product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `offer_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `product_description` mediumtext COLLATE utf8_turkish_ci,
  PRIMARY KEY (`offer_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of offer_products
-- ----------------------------

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_code` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `group_id` smallint(5) unsigned DEFAULT NULL,
  `brand_id` mediumint(8) unsigned DEFAULT NULL,
  `tax_rate` tinyint(3) unsigned DEFAULT NULL,
  `cost_price` decimal(6,2) DEFAULT NULL,
  `sale_price` decimal(6,2) DEFAULT NULL,
  `currency` enum('DOLAR','EURO','TL') COLLATE utf8_turkish_ci DEFAULT 'TL',
  `quantity` smallint(5) unsigned DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `type` enum('YEDEKPARCA','URUN') COLLATE utf8_turkish_ci DEFAULT 'URUN',
  `description` mediumtext COLLATE utf8_turkish_ci,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for `product_groups`
-- ----------------------------
DROP TABLE IF EXISTS `product_groups`;
CREATE TABLE `product_groups` (
  `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of product_groups
-- ----------------------------
INSERT INTO `product_groups` VALUES ('1', 'A Grubu');
INSERT INTO `product_groups` VALUES ('2', 'B Grubu');

-- ----------------------------
-- Table structure for `services`
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `service_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `member_id` int(10) unsigned DEFAULT NULL,
  `process` mediumtext COLLATE utf8_turkish_ci,
  `explanation` mediumtext COLLATE utf8_turkish_ci COMMENT 'Açıklama',
  `service_status` enum('RESOLVED','WAITING') COLLATE utf8_turkish_ci DEFAULT 'WAITING',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
