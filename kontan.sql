-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 02:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perhitungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontan`
--

CREATE TABLE `kontan` (
  `Customer` varchar(100) NOT NULL,
  `Jenis_Pembayaran` varchar(20) NOT NULL,
  `Tanggal_Pendataan` date NOT NULL,
  `Jenis_Ikan` varchar(80) NOT NULL,
  `Jumlah_Ikan` varchar(25) NOT NULL,
  `DOS` int(11) NOT NULL,
  `Berat_Ikan` varchar(11) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontan`
--

INSERT INTO `kontan` (`Customer`, `Jenis_Pembayaran`, `Tanggal_Pendataan`, `Jenis_Ikan`, `Jumlah_Ikan`, `DOS`, `Berat_Ikan`, `Harga`, `Total`) VALUES
('Jason', 'Cash', '2022-04-11', 'Cakalang', '80', 60, '900Kg', 'Rp25000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontan`
--
ALTER TABLE `kontan`
  ADD PRIMARY KEY (`Customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
