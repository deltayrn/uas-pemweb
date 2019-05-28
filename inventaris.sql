-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 06:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Real Property'),
(2, 'Personal Property');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `login`, `password`) VALUES
(1, 'Vincentiana', 'admin', 'admin1'),
(2, 'Abdurrazak Hanif', 'owner', 'owner1'),
(3, 'Brigita Angel Virantika', 'manager', 'manager1'),
(4, 'Erdiansyah Putra', 'superv', 'superv1');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `alamat_pemilik` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `alamat_pemilik`, `no_hp`) VALUES
(1, 'Fadli Zein', 'Karangmalang', '08123456789'),
(2, 'Universitas Negeri Yogyakarta', 'Karangmalang', '0274123123'),
(3, 'Badan Wakaf', 'Yogyakarta', '0274987987'),
(4, 'Pemda Karangmalang', 'Karangmalang', '08123938633'),
(5, 'Angelia Paragon', 'Sleman', '08767898292'),
(6, 'Jenny Jennifer', 'Bantul', '082927263537');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id_property` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL COMMENT 'rel to jenis.id_jenis',
  `id_pemilik` int(11) NOT NULL COMMENT 'rel to pemilik.id_pemilik',
  `nama_property` varchar(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id_property`, `id_jenis`, `id_pemilik`, `nama_property`, `img`) VALUES
(2, 1, 2, 'Masjid Mujahidin', NULL),
(3, 1, 3, 'Masjid Al-Muttaqin', NULL),
(4, 1, 4, 'Taman Kuliner', NULL),
(5, 1, 4, 'Ruko Karangmalang', NULL),
(6, 1, 2, 'Stadion Sepakbola', NULL),
(7, 1, 2, 'Gedung IDB Fakultas Teknik', NULL),
(8, 1, 5, 'Kos Paragon', NULL),
(9, 1, 6, 'Dixie Cafe', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id_property`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id_property` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `property_ibfk_2` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
