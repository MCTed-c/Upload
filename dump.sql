-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Gen 16, 2015 alle 16:30
-- Versione del server: 5.1.71-community-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_generat0r`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(60) NOT NULL,
  `reg_ip` varchar(20) DEFAULT NULL,
  `last_ip` varchar(20) DEFAULT NULL,
  `reg_date` int(11) NOT NULL,
  `last_login` int(11) DEFAULT NULL,
  `changepsw` int(5) DEFAULT NULL,
  `cambiapassword` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `reg_ip`, `last_ip`, `reg_date`, `last_login`, `changepsw`, `cambiapassword`) VALUES
(1, 'admin', 'e99a18c428cb38d5f260853678922e03', 'paissan.francesco@liceorosmini.eu', '87.9.110.7', '87.9.110.7', 1417976933, 1417998143, NULL, 1),
(2, 'Giò', 'c5cf93d6d20677cda872de6a0fced145', 'giovanni.paissan@gmail.com', '87.9.110.7', '87.9.110.7', 1418057815, 1418152952, NULL, 1),
(3, 'altervista', 'e10adc3949ba59abbe56e057f20f883e', '123456@gmail.com', '87.5.230.77', '87.5.230.77', 1421356637, 1421421542, NULL, 1),
(4, 'aaa', '5898722e026109acad0103e11741e448', 'my@gmail.com', '87.5.230.77', '87.5.230.77', 1421416706, NULL, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
