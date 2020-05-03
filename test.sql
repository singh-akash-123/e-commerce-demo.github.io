-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2020 at 11:46 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `chargers`
--

DROP TABLE IF EXISTS `chargers`;
CREATE TABLE IF NOT EXISTS `chargers` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chargers`
--

INSERT INTO `chargers` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_image`, `product_status`) VALUES
(1, 'Sony CP-AD2A/BCABIN5 2.1A adapter with 1.5m USB-A to Micro USB Cable Fast 2.1 A Mobile Charger with Detachable Cable  (Black, Cable Included)', 'Sony', 700, 'image-1.png', 1),
(2, 'Motorola USB Rapid Charger with Micro-USB Data Cable Fast charging 2 A Mobile Charger with Detachable Cable  (White, Cable Included)', 'Motorola', 500, 'image-2.jpeg', 1),
(3, 'Sony CP-AD2A/BCIN5 2.1A Fast 2.1 A Mobile Charger with Detachable Cable  (Black)', 'Sony', 1000, 'image-3.jpeg', 1),
(4, 'Samsung EP-TA60IBEUGIN 1 A Mobile Charger  (Black, Cable Included)', 'Samsung', 400, 'image-4.jpeg', 1),
(5, 'Samsung Travel Adapter EP-TA13IWEUGIN 2 A Mobile Charger with Detachable Cable  (White, Cable Included)', 'Samsung', 999, 'image-5.jpeg', 1),
(6, 'Samsung Travel Adapter (EP-TA20IWEUGIN) WHITE 1 A Mobile Charger with Detachable Cable  (White, Cable Included)', 'Samsung', 150, 'image-6.jpeg', 1),
(7, 'Syska WC-3AD-BK 3.1 A Multiport Mobile Charger with Detachable Cable  (Black, Cable Included)', 'Syska', 180, 'image-7.jpeg', 1),
(8, 'Lenovo 10W AC Adapter 2 A Mobile Charger with Detachable Cable  (Black, Cable Included)', 'Lenevo', 600, 'image-8.jpeg', 1),
(9, 'Apple ML8M2HN/A 5W 1 A Mobile Charger  (White)\r\n', 'Apple', 1000, 'image-9.jpeg', 1),
(10, 'Sony CP-AD2A/WCABIN5 2.1A adpater with 1.5m USB-A to Micro USB Cable Fast 2.1 A Mobile Charger with Detachable Cable  (White, Cable Included)', 'Sony', 900, 'image-10.jpeg', 1),
(11, 'Apple MD836HN/A 12W USB Power Adapter  (White)\r\n', 'Apple', 1700, 'image-11.jpeg', 1),
(12, 'Syska TAFC 1 A Mobile Charger  (White)\r\n', 'Syska', 700, 'image-12.jpeg', 1),
(13, 'Asus APWU001 2.1 A Mobile Charger with Detachable Cable  (White, Cable Included)', 'Asus', 1000, 'image-13.jpeg', 1),
(14, 'ERD TC 80 Four USB Charger Output Current: 1 Amp (Max) Two USB, 2 Amp (Max) Another Two USB Multiport Mobile Charger  (White)', 'ERD', 400, 'image-14.jpeg', 1),
(15, 'ERD TC 100 BC Micro USB Quick Charger 3Amp Mobile Charger with Detachable Cable  (White)\r\n', 'ERD', 612, 'image-15.jpeg', 1),
(16, 'ERD TC70 3 A Mobile Charger with Detachable Cable  (White)\r\n', 'ERD', 500, 'image-16.jpeg', 1),
(17, 'ERD TC-60-DUAL 2 A Multiport Mobile Charger with Detachable Cable  (White, Cable Included)\r\n', 'ERD', 600, 'image-17.jpeg', 1),
(18, 'ERD TC 55 Single Port USB Dock Super Fast Business Class Series Charger 2.4 A Mobile Charger with Detachable Cable  (White)', 'ERD', 350, 'image-18.jpeg', 1),
(19, 'Philips DLP2501 2.1 A Mobile Charger  (White, Grey, Cable Included)\r\n', 'Philips', 549, 'image-19.jpeg', 1),
(20, 'Syska WC-2A / WC-2A-BK 2 A Mobile Charger with Detachable Cable  (Black, Cable Included)', 'Syska', 900, 'image-20.jpeg', 1),
(21, 'Philips DLP2502 3.1 A Dual Port 2.1 A Multiport Mobile Charger  (White, Grey)\r\n', 'Philips', 700, 'image-21.jpeg', 1),
(22, 'Philips DLP2501B 1 A Mobile Charger  (Black)', 'philips', 350, 'image-22.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `earphones`
--

DROP TABLE IF EXISTS `earphones`;
CREATE TABLE IF NOT EXISTS `earphones` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_status` int(10) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earphones`
--

INSERT INTO `earphones` (`product_id`, `product_name`, `product_brand`, `product_status`, `product_price`) VALUES
(1, 'Mi Basic Wired Headset with Mic  (Black, Wired in the ear)\r\n', 'MI', 1, '399'),
(2, 'Mi Dual Driver Wired Headset  (Blue, Wired in the ear)\r\n', 'MI', 1, '799'),
(3, 'realme Buds 2 Wired Headset  (Black, Wired in the ear)\r\n', 'Realme', 1, '599'),
(4, 'realme Buds Wireless Bluetooth Headset  (Yellow, Wireless in the ear)\r\n', 'Realme', 1, '1799'),
(5, 'boAt Bassheads 242 Wired Headset  (Active Black, Wired in the ear)\r\n', 'Boat', 1, '549'),
(6, 'boAt BassHeads 100 Wired Headset  (Black, Wired in the ear)\r\n', 'Boat', 1, '399'),
(7, 'boAt BassHeads 220 Super Extra Bass Wired Headset  (Black, Wired in the ear)\r\n', 'Boat', 1, '549'),
(8, 'boAt Bassheads 242 Wired Headset  (Spirit Lime, Wired in the ear)\r\n', 'Boat', 1, '549'),
(9, 'JBL C50HI Wired Headset  (Black, Wired in the ear)\r\n', 'JBL', 1, '499'),
(10, 'JBL C150SI Wired Headset  (Black, Wired in the ear)\r\n', 'Boat', 1, '799'),
(11, 'Sony 310AP Wired Headset  (Blue, Wired over the head)\r\n', 'Sony', 1, '949'),
(12, 'Sony EX14AP Wired Headset  (Black, Wired in the ear)\r\n', 'Sony', 1, '650');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(120) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_ram` char(5) NOT NULL,
  `product_storage` varchar(50) NOT NULL,
  `product_camera` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive',
  `product_src` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_ram`, `product_storage`, `product_camera`, `product_image`, `product_quantity`, `product_status`, `product_src`) VALUES
(1, 'Honor 9 Lite (Sapphire Blue, 64 GB)  (4 GB RAM)', 'Honor', '14499.00', '4', '64', '13', 'image-1.jpeg', 10, '1', '#'),
(2, 'Infinix Hot S3 (Sandstone Black, 32 GB)  (3 GB RAM)', 'Infinix', '8999.00', '3', '32', '13', 'image-2.jpeg', 10, '1', '#'),
(3, 'VIVO V9 Youth (Gold, 32 GB)  (4 GB RAM)', 'VIVO', '16990.00', '4', '32', '16', 'image-3.jpeg', 10, '1', '#'),
(4, 'Moto E4 Plus (Fine Gold, 32 GB)  (3 GB RAM)', 'Moto', '11499.00', '3', '32', '8', 'image-4.jpeg', 10, '1', '#'),
(5, 'Lenovo K8 Plus (Venom Black, 32 GB)  (3 GB RAM)', 'Lenevo', '9999.00', '3', '32', '13', 'image-5.jpg', 10, '1', '#'),
(6, 'Samsung Galaxy On Nxt (Gold, 16 GB)  (3 GB RAM)', 'Samsung', '10990.00', '3', '16', '13', 'image-6.jpeg', 10, '1', '#'),
(7, 'Moto C Plus (Pearl White, 16 GB)  (2 GB RAM)', 'Moto', '7799.00', '2', '16', '8', 'image-7.jpeg', 10, '1', '#'),
(8, 'Panasonic P77 (White, 16 GB)  (1 GB RAM)', 'Panasonic', '5999.00', '1', '16', '8', 'image-8.jpeg', 10, '1', '#'),
(9, 'OPPO F5 (Black, 64 GB)  (6 GB RAM)', 'OPPO', '19990.00', '6', '64', '16', 'image-9.jpeg', 10, '1', '#'),
(10, 'Honor 7A (Gold, 32 GB)  (3 GB RAM)', 'Honor', '8999.00', '3', '32', '13', 'image-10.jpeg', 10, '1', '#'),
(11, 'Asus ZenFone 5Z (Midnight Blue, 64 GB)  (6 GB RAM)', 'Asus', '29999.00', '6', '128', '12', 'image-12.jpeg', 10, '1', '#'),
(12, 'Redmi 5A (Gold, 32 GB)  (3 GB RAM)', 'MI', '5999.00', '3', '32', '13', 'image-12.jpeg', 10, '1', '#'),
(13, 'Intex Indie 5 (Black, 16 GB)  (2 GB RAM)', 'Intex', '4999.00', '2', '16', '8', 'image-13.jpeg', 10, '1', '#'),
(14, 'Google Pixel 2 XL (18:9 Display, 64 GB) White', 'Google', '61990.00', '4', '64', '12', 'image-14.jpeg', 10, '1', '#');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

DROP TABLE IF EXISTS `speakers`;
CREATE TABLE IF NOT EXISTS `speakers` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_price` decimal(20,0) NOT NULL,
  `product_status` enum('0','1') CHARACTER SET utf8 NOT NULL COMMENT '0-active 1-inactive',
  `product_image` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_status`, `product_image`) VALUES
(1, 'Philips BT40 Portable Bluetooth Speaker  (Black, Mono Channel)', 'Philips', '1199', '1', ''),
(2, 'Philips MMS2580B/94 20 W Portable Bluetooth Home Theatre  (Black, 2.1 Channel)\r\n', 'Philips', '3499', '1', ''),
(3, 'JBL Tuner Portable Bluetooth Speaker  (Black, Stereo Channel)\r\n', 'JBL', '3699', '1', ''),
(4, 'JBL CLIP 3 Portable Bluetooth Speaker  (Black, Stereo Channel)\r\n', 'JBL', '2299', '1', ''),
(5, 'Sony XB10 10 W Portable Bluetooth Speaker  (Black, Mono Channel)\r\n', 'Sony', '3399', '1', ''),
(6, 'Sony SA-D20 60 W Bluetooth Home Theatre  (Black, 2.1 Channel)\r\n', 'Sony', '6999', '1', ''),
(7, 'boAt Stone Grenade 5 W Portable Bluetooth Speaker  (Charcoal Black, Mono Channel)\r\n', 'Boat', '1499', '1', ''),
(8, 'boAt Rugby 10 W Bluetooth Speaker  (Black, Stereo Channel)\r\n', 'Boat', '1599', '1', ''),
(9, 'boAt Stone 1000 14 W Portable Bluetooth Speaker  (Black, Stereo Channel)\r\n', 'Boat', '2999', '1', ''),
(10, 'boAt Stone 650 10 W Bluetooth Speaker  (Rampant Red, Stereo Channel)\r\n', 'Boat', '1199', '1', ''),
(11, 'KDM SPEAKER 119 3 W Bluetooth Speaker  (Red, 2.2 Channel)', 'KDM', '699', '1', ''),
(12, 'KDM SP-W04 3 W Bluetooth Speaker  (Brown, Stereo Channel)', 'KDM', '949', '1', ''),
(13, 'KDM SP113 LED BLUETOOTH SPEAKER 3 W Bluetooth Speaker  (Black, Stereo Channel)', 'KDM', '849', '1', ''),
(14, 'KDM SP 305 SPEAKER 12 W Bluetooth Speaker  (Black, Stereo Channel)', 'KDM', '899', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
