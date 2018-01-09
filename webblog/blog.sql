-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 05:03 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi_berita` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publish`
--

CREATE TABLE `publish` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi_berita` varchar(3500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publish`
--

INSERT INTO `publish` (`id_berita`, `judul_berita`, `kategori`, `isi_berita`) VALUES
(1, 'Barcelona akan Merdeka ?', 'olahraga', '<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.eproident, sunt in culpa qui officia deserunt mollit anim id est laborum.e</p>\r\n\r\n<p><img alt=\"\" src=\"/webblog/admin/kcfinder/upload/images/2.PNG\" style=\"height:328px; width:366px\" /></p>\r\n'),
(2, 'Ayam bakar ', 'coba baru lagi', '<p><img alt=\"\" src=\"/webblog/admin/kcfinder/upload/images/Untitled.png\" style=\"height:176px; width:300px\" /></p>\r\n'),
(3, 'coba', 'ada', '<p>dasdad</p>\r\n'),
(5, 'Membuat Desain Web Dengan HTML5', 'Tutorial', '<p><img alt=\"\" src=\"/webblog/admin/kcfinder/upload/images/Capture.PNG\" style=\"height:238px; width:374px\" /></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('admin','penulis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `status`) VALUES
(1, 'adm_1', 'edw10696@gmail.com', 'edwin1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `publish`
--
ALTER TABLE `publish`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publish`
--
ALTER TABLE `publish`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
