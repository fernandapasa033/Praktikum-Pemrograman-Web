-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 03:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan_gangguan`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_gangguan`
--

CREATE TABLE `form_gangguan` (
  `no_internet` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `ket_gangguan` varchar(50) NOT NULL,
  `waktu_janjian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_gangguan`
--

INSERT INTO `form_gangguan` (`no_internet`, `nama`, `no_telp`, `Alamat`, `ket_gangguan`, `waktu_janjian`) VALUES
(1234, 'joko', 8122, 'ketintang', 'wipi dan tv nyadat', 'minggu'),
(6843517, 'pasa', 8654, 'gresik', 'wipi mati', 'senin'),
(35614651, 'sukadi', 8345, 'lakarsantri', 'telfon mati', 'senin'),
(58544648, 'ipan', 86548, 'kediri', 'wipi lemot', 'selasa'),
(86541654, 'abdul', 8654, 'kantor bank jatim', 'wipi trouble', 'rabu'),
(86545646, 'sukadi', 83513, 'tokyo', 'wipi error', 'rabu'),
(534185137, 'lurah', 85546, 'ponorogo', 'tv mati', 'selasa'),
(534185141, 'ujang', 8947, 'kebumen', 'wipi lemot', 'selasa'),
(2147483647, 'ahmad jabaro', 8565, 'guyangan', 'not fount 404', 'kamis');

-- --------------------------------------------------------

--
-- Table structure for table `tab_login1`
--

CREATE TABLE `tab_login1` (
  `username` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_login1`
--

INSERT INTO `tab_login1` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin'),
('sukadi', 'sukadi123', 'user'),
('lurah', 'lurah123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_gangguan`
--
ALTER TABLE `form_gangguan`
  ADD PRIMARY KEY (`no_internet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
