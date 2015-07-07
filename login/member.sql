-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('admin','user') NOT NULL,
  `membername` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- dump ตาราง `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `status`, `membername`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', ''),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', ''),
(3, 'gatoon', '1234', 'user', ''),
(4, 'pan', 'fae0b27c451c728867a567e8c1bb4e53', 'user', ''),
(5, 'pon', '9f6e6800cfae7749eb6c486619254b9c', 'user', ''),
(6, 'amane1', '6f0904a659874f6d41f3fe7aa49082b5', 'user', '?????'),
(7, 'laithai', '402e89e948c35e5419369580e46524c2', 'user', 'ลายไท');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
