-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 09:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online_12210917`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kode_admin` varchar(4) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Protestan','Katholik','Hindu','Buddha','Konghucu') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `nama_admin`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `no_hp`) VALUES
('ADM1', 'Katon', 'Laki-Laki', 'Islam', 'Putussibau', '2002-02-22', 'Jln Sungai Durian Laut Gg Karya 1', 'katon@gmail.com', '0895089508'),
('ADM2', 'Aryo', 'Laki-Laki', 'Islam', 'Sambas', '2001-02-22', 'Jln Jln Ke Pasar Tengah Cakeppp', 'aryo@gmail.com', '089520202958'),
('ADM3', 'Wibowo', 'Laki-Laki', 'Islam', 'Kapuas Hulu', '2000-01-02', 'Jln Jln Ke Bali Jangan Lupa Membeli Bensin, kalau tidak isi bensin. bedorong la kau', 'wibowo@gmail.com', '082211022291'),
('BRG4', 'Asep', 'Laki-Laki', 'Protestan', 'Jawa', '2001-01-02', 'Jawa', 'asd2gma@dsad.casd', '0822111');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(4) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `kategori` enum('Elektronik','Furniture') NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `satuan`, `harga_beli`, `harga_jual`, `kategori`, `deskripsi`) VALUES
('BRG1', 'Kursi Lipat', '5 Kg', 120000, 180000, 'Furniture', 'Kursi Lipat adalah barang Import dari Afrika, sedangkan di Afrika tidak ada Air'),
('BRG2', 'Tongkat Penopang Kaki', '1 Kg', 100000, 250000, 'Furniture', 'Tongkat Penopang Kaki, adalah Alat bantu untuk Pemain Sepak Bola yang Lumpuh'),
('BRG3', 'Meja Komputer', '10 Kg', 270000, 350000, 'Furniture', 'Meja Komputer adalah Meja Komputer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
