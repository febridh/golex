-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 02:22 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `golex`
--

-- --------------------------------------------------------

--
-- Table structure for table `situs`
--

CREATE TABLE IF NOT EXISTS `situs` (
  `idsitus` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `deskripsi` varchar(560) NOT NULL,
  `keyword` varchar(500) NOT NULL,
  `url` varchar(560) NOT NULL,
  `added` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `situs`
--

INSERT INTO `situs` (`idsitus`, `judul`, `deskripsi`, `keyword`, `url`, `added`) VALUES
(462032235, 'Riyan Satria', 'Landing Page of Riyan Satria', 'web developer surabaya', 'http://localhost/riyan', 1514118202),
(474812674, 'Cara Mengkustom Menu Klik Kanan pakai Javascript - Belajar Ngeweb ID', 'Cara Membuat Website Gratis', 'Cara Membuat Website Gratis', 'http://www.belajarnge.web.id/2017/12/custom-right-click.html', 1514118991),
(586351051, '', '', '', 'https://www.google.com', 1514120997),
(741351527, 'Tampilkan | Buat Slide Presentasi', 'Buat Slide Presentasi dengan Mudah, Gratis, dan Terkontrol', 'google slide,office powerpoint,slide presentation', 'http://localhost/slide', 1514117259),
(874879144, '', '', '', 'www.google.com', 1514121024),
(1014086957, '', '', '', 'www.belajarnge.web.id', 1514118616),
(1197918726, 'Login Android', '', '', 'http://localhost/android', 1514117271),
(1303131431, 'Membuat Animasi Lingkaran bergeser pakai EaselJS - Belajar Ngeweb ID', 'Cara Membuat Website Gratis', 'Cara Membuat Website Gratis', 'http://www.belajarnge.web.id/2017/11/membuat-animasi-bergerak.html', 1514119095),
(1316127029, '', '', '', 'https://www.facebook.com', 1514117226),
(1316385220, 'Kutukank | Cari Tukang Surabaya', 'Cari tukang apapun di Surabaya', 'tukang di surabaya', 'http://localhost/tukang', 1514117238);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `situs`
--
ALTER TABLE `situs`
  ADD PRIMARY KEY (`idsitus`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
