-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 03:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_astro`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'balpir123', 'nicopoerbaa1@gmail.com', '$2y$10$ap0dNcp.v/J0uZfoaZwore9nNPwZZT.1LRHLqYKMwP1ZmZBfsVoHu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(2000) NOT NULL,
  `jawaban` varchar(2000) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_faq`
--

INSERT INTO `tb_faq` (`id`, `pertanyaan`, `jawaban`, `tanggal`) VALUES
(2, '<p>Ini merupakan contoh pertanyaan tipe dua untuk ditampilkan ?</p>', '<p><strong>Ini </strong>merupakan testing data untuk faq, penjabaran data dapat diubah sesuai keinginan secara dinamis tanpa perlu metode manual, sangat praktis efisien untuk mengubah data setiap waktu yang kita inginkan. Develop by Ghaly Fadhillah</p>', '14 February 2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id`, `nama`) VALUES
(1, 'malang'),
(2, 'jombang'),
(3, 'pasruan'),
(4, 'jogja'),
(5, 'Belum tau kota');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `plat` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mobil`
--

INSERT INTO `tb_mobil` (`id`, `jenis`, `plat`, `gambar`) VALUES
(1, 'toyota', 'w 1212 xy', 'mobil1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kata_kunci` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `facebook_link` varchar(200) NOT NULL,
  `instagram_link` varchar(200) NOT NULL,
  `gmaps` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`id`, `nama`, `kata_kunci`, `deskripsi`, `alamat`, `no_telp`, `email`, `logo`, `facebook_link`, `instagram_link`, `gmaps`) VALUES
(1, 'Astro Travel', 'tes kata kunci', 'tes deskripsi', 'tes alamat', 'tes telepon', 'tesemail@gmail.com', '898471.jpg', 'tes link fb', 'tes link instagram', 'tes gmaps');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supir`
--

CREATE TABLE `tb_supir` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_supir`
--

INSERT INTO `tb_supir` (`id`, `nama`, `nik`, `alamat`, `no_hp`, `gambar`) VALUES
(1, 'janico desmile', '1279999182918', 'jl letda sujono tebing tinggi', '0819283981', 'user1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `kode_lokasi` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `konten` varchar(10000) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `dibuat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id`, `judul`, `kode_lokasi`, `gambar`, `konten`, `tanggal`, `dibuat`) VALUES
(1, 'Kampung Warna Warni aa', 2, 'frozen-forest-1920x1080-winter-aerial-view-4k-6377.jpg', '<p>woiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>', '12 February 2020', 'adminstrator'),
(10, 'ppp', 1, 'frozen-forest-1920x1080-winter-aerial-view-4k-63771.jpg', '<p>a.com</p>', '18 February 2020', 'Adminstrator'),
(12, 'Astro Travel', 2, 'beach-1920x1080-aerial-view-4k-17956.jpg', '<p>aassas</p>', '09 March 2020', 'Adminstrator'),
(13, 'aaa', 3, '898471.jpg', '<p>asaasasasasasassssssssssssssssssssssssssssssssssssssssssssssssss</p>', '10 March 2020', 'Adminstrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_supir`
--
ALTER TABLE `tb_supir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_lokasi` (`kode_lokasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_supir`
--
ALTER TABLE `tb_supir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD CONSTRAINT `tb_wisata_ibfk_1` FOREIGN KEY (`kode_lokasi`) REFERENCES `tb_lokasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
