-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 08:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiketpemesanan`
--

CREATE TABLE `tiketpemesanan` (
  `no_id` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_kereta` varchar(15) NOT NULL,
  `no_kereta` int(10) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `no_kursi` int(15) NOT NULL,
  `berangkat` varchar(20) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tiba` varchar(20) NOT NULL,
  `tanggal_tiba` date NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiketpemesanan`
--

INSERT INTO `tiketpemesanan` (`no_id`, `nama`, `nama_kereta`, `no_kereta`, `kelas`, `no_kursi`, `berangkat`, `tanggal_berangkat`, `tiba`, `tanggal_tiba`, `harga`) VALUES
(3, 'syahid', 'pandanwangi', 345, 'EKONOMI', 23, 'surabaya', '2014-04-08', 'jember', '2014-04-09', '40000'),
(11, 'idos', 'kamandaka', 223, 'EKONOMI', 23, 'tegal', '2019-11-01', 'semarang', '2019-11-01', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiketpemesanan`
--
ALTER TABLE `tiketpemesanan`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiketpemesanan`
--
ALTER TABLE `tiketpemesanan`
  MODIFY `no_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
