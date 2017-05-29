-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 06:25 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewiaprilia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authentication` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `authentication`) VALUES
('dewiaprilia', '1234', 3);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(4) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `nama_minuman` varchar(50) NOT NULL,
  `jumlah_order` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_makanan`, `nama_minuman`, `jumlah_order`, `harga`, `image`) VALUES
(1001, 'Soto Ayam', 'Es Teh', 1, 13000, ''),
(1002, 'Nasi Pecel', 'Es Jeruk', 1, 13000, ''),
(1003, 'Kertas', 'rim', 200, 5750, ''),
(1004, 'Kain', 'm', 25, 14000, ''),
(1006, 'Stiker', 'pcs', 12, 10000, 'images/15672237895906c402eed78.jpg'),
(1999, 'ppp', 'ppp', 9, 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `katalog_makanan`
--

CREATE TABLE `katalog_makanan` (
  `id_katalog` int(4) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `harga_makanan` int(100) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `katalog_makanan`
--

INSERT INTO `katalog_makanan` (`id_katalog`, `nama_makanan`, `harga_makanan`, `path`) VALUES
(1, 'Soto Ayam', 10000, 'assets/images/sotoayam.jpg'),
(2, 'Nasi Pecel', 10000, 'assets/images/nasipecel.jpg'),
(3, 'Gado-Gado', 10000, 'assets/images/gadogado.jpg'),
(4, 'Mie Goreng Instan', 6000, 'assets/images/indomie.jpg'),
(5, 'Mie Goreng Telur', 8000, 'assets/images/mietelur.jpg'),
(6, 'Mie Goreng Telur + Nasi', 10000, 'assets/images/mienasi.jpg'),
(7, 'Mie Kuah Instan ', 6000, 'assets/images/miesoto.jpg'),
(8, 'Mie Soto Telur', 8000, 'assets/images/miesototelur.JPG'),
(9, 'Mie Kuah + Nasi', 10000, 'assets/images/miekuahnasi.jpg'),
(10, 'Penyetan Lele', 9000, 'assets/images/nasilele.jpg'),
(11, 'Penyetan Ayam', 13000, 'assets/images/penyetanayam.jpg'),
(12, 'Penyetan Bebek', 15000, 'assets/images/bebek.jpg'),
(13, 'Penyetan Tempe / Tahu', 6000, 'assets/images/tempetahu.jpg'),
(14, 'Penyetan Telur', 6000, 'assets/images/telurpenyet.jpg'),
(15, 'Penyetan Bakso', 8000, 'assets/images/pentolpenyet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `katalog_minuman`
--

CREATE TABLE `katalog_minuman` (
  `id_katalog` int(4) NOT NULL,
  `nama_minuman` varchar(100) NOT NULL,
  `harga_minuman` int(100) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `katalog_minuman`
--

INSERT INTO `katalog_minuman` (`id_katalog`, `nama_minuman`, `harga_minuman`, `path`) VALUES
(1, 'Teh Es/Hangat', 3000, 'assets/images/esteh.JPG'),
(2, 'Es Sirup', 3000, 'assets/images/essirup.jpg'),
(3, 'Lemon Tea', 3500, 'assets/images/lemontea.jpg'),
(4, 'Kopi', 3500, 'assets/images/Kopi.jpg'),
(5, 'Susu Putih / Coklat', 3500, 'assets/images/susu.jpg'),
(6, 'Air Mineral', 2500, 'assets/images/cleo.jpg'),
(7, 'Ice Blended Susu', 4000, 'assets/images/susu.jpg'),
(8, 'Kopi Susu', 4000, 'assets/images/kopisusu.jpg'),
(9, 'Jeruk Anget / Es', 5000, 'assets/images/jeruk.JPG'),
(15, 'Jeruk Nipis', 3000, 'assets/imagesjeruknipis.jpg'),
(16, 'Jus Apukat', 5000, 'assets/imagesapukat.jpg'),
(17, 'Jus Nangka', 5000, 'assets/imagesjusnangka.jpg'),
(18, 'Jus Melon', 5000, 'assets/imagesjusmelon.png'),
(19, 'Jus Sirsak', 5000, 'assets/imagesjussirsak.png'),
(20, 'Jus Semangka', 5000, 'assets/imagesjussemangka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `address`, `country`, `city`, `phone_number`) VALUES
('Dewi Aprilia', 'dewiaprilia', 'fd89c3b47dd47645d27f1e9c6350c14e32351583', 'tulangan', 'indonesia', 'sidoarjo', '0895333466308'),
('muhammad junianto', 'muhammadjunianto', '50c913b64ed43c391f10ff122f0dfefb4a43049a', 'kenongo', 'indonesia', 'sidoarjo', '089602787794');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `katalog_makanan`
--
ALTER TABLE `katalog_makanan`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `katalog_minuman`
--
ALTER TABLE `katalog_minuman`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog_makanan`
--
ALTER TABLE `katalog_makanan`
  MODIFY `id_katalog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `katalog_minuman`
--
ALTER TABLE `katalog_minuman`
  MODIFY `id_katalog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
