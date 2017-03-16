-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2017 at 02:29 PM
-- Server version: 5.5.52-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `InfoArch`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(30) DEFAULT NULL,
  `usrname` varchar(30) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `p_name`, `usrname`, `qty`, `amount`, `address`) VALUES
(1, '1', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(2, '2', 'admin', 3, 30, '24 Sekihar Street Karungal '),
(3, '1', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(4, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(5, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(6, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(7, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(8, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(9, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(10, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(11, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(12, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(13, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(14, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(15, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(16, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(17, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(18, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(19, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(20, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(21, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(22, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(23, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(24, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(25, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(26, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(27, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(28, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(29, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(30, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(31, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(32, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(33, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(34, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(35, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(36, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(37, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(38, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(39, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(40, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(41, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(42, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(43, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(44, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(45, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(46, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(47, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(48, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(49, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(50, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(51, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(52, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(53, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(54, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(55, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(56, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(57, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(58, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(59, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(60, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(61, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(62, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(63, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(64, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(65, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(66, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(67, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(68, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(69, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(70, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(71, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(72, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(73, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(74, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(75, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(76, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(77, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(78, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(79, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(80, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(81, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(82, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(83, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(84, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(85, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(86, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(87, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(88, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(89, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(90, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(91, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(92, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(93, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(94, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(95, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(96, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(97, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(98, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(99, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(100, '3', 'admin', 1, 10, '24 Sekihar Street Karungal '),
(101, '1', 'admin', 1, 10, '24 Sekihar Street Karungal ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `qty` varchar(30) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `qty`, `price`, `image`, `description`) VALUES
(2, 'Camphor', '10', '15$', 'http://www.astropeep.com/wp-content/uploads/2011/04/navagraha1-150x150.jpg', 'For God rituals'),
(3, 'Religious Packs', '20', '40$', 'https://docs.google.com/uc?id=0B1mPu_A_jyqTdFZJMlcyNTlJcU0', 'Full Pack for Religious Rituals'),
(4, 'Religious Pack - 2', '30', '50$', 'https://docs.google.com/uc?id=0B1mPu_A_jyqTYnJJQzBUX0c3bDg', 'New Set of Religious Articles'),
(5, 'Pack 2', '5', '15', 'https://docs.google.com/uc?id=0B1mPu_A_jyqTZURPa0JTZ20wTVE', 'Product Try'),
(6, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(7, 'Agarbathi', '5', '20$', ' https://docs.google.com/uc?id=0B1mPu_A_jyqTaGxET3RsR0RiVkU', 'Scented candles for religious purposes'),
(8, 'Agarbathi', '5', '20$', 'https://docs.google.com/uc?id=0B1mPu_A_jyqTdkc3cnN2NGFtTGc', 'Scented candles for religious purposes'),
(9, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(10, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(11, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(12, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(13, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(14, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(15, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(16, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(17, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(18, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(19, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(20, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(21, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(22, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(23, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(24, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(25, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(26, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(27, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(28, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(29, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(30, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(31, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(32, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(33, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(34, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(35, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(36, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(37, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(38, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(39, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(40, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(41, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(42, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(43, 'Deity Products', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(44, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(45, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(46, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(47, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(48, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(49, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(50, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(51, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(52, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(53, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(54, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(55, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(56, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(57, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(58, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(59, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(60, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(61, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(62, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(63, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(64, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(65, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(66, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(67, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(68, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(69, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(70, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(71, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(72, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(73, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(74, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(75, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(76, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(77, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(78, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(79, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(80, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(81, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(82, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(83, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(84, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(85, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes'),
(86, 'Agarbathi', '5', '20$', 'http://www.incenseontheway.com/images/products/camphor_20stick_hem.jpg', 'Scented candles for religious purposes');

-- --------------------------------------------------------

--
-- Table structure for table `Stats`
--

CREATE TABLE IF NOT EXISTS `Stats` (
  `IPAddress` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stats`
--

INSERT INTO `Stats` (`IPAddress`) VALUES
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(6845),
(5271),
(140182),
(140182),
(140182),
(140182),
(140182),
(140182),
(140182),
(140182),
(140182),
(140182),
(140182),
(140182),
(6845),
(6845),
(12979),
(12979),
(12979),
(6850),
(6850),
(6850),
(6850),
(6850),
(6850),
(6850);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `usrname` varchar(30) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `admin` int(1) NOT NULL,
  PRIMARY KEY (`usrname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `usrname`, `pwd`, `email`, `address`, `admin`) VALUES
('admin', 'admin', 'admin', '1234', 'admin@gmail.com', '1750, North Range Road, Bloomington, Indiana', 1),
('admin12', 'admin123', 'admin123', '123456', 'admin1234@gmail.com', 'Housier Court Apartments, Bloomington', 0),
('Manikandan', 'Murugesan', 'Manikandan', 'welcome', 'murugesm@indiana.edu', '575 W Amaryllis Dr', 0),
('Manoj', 'Prabhakar', 'manojks', '1234qwe', 'manojks@gmail.com', 'Chennai,India', 0),
('Prashanth', 'Balasubramani', 'prasbala', 'Prashiub@74', 'prasbala@iu.edu', 'Dindigul,India', 0),
('Vaishnavi', 'T V', 'Vaishu', 'rajalakshmistores', 'vaishuraghavan@gmail.com', 'No 14/6, Balamurugan street ,Perambur ,chennai-11', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
