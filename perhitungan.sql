-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 03:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
  `Kode_Transaksi` varchar(20) NOT NULL,
  `Tanggal_Transaksi` date NOT NULL,
  `Kode_Ikan` varchar(15) NOT NULL,
  `Jenis_Ikan` varchar(80) NOT NULL,
  `Jumlah_Ikan` int(100) NOT NULL,
  `DOS` int(100) NOT NULL,
  `Berat_Ikan` varchar(11) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontan`
--

INSERT INTO `kontan` (`Customer`, `Jenis_Pembayaran`, `Kode_Transaksi`, `Tanggal_Transaksi`, `Kode_Ikan`, `Jenis_Ikan`, `Jumlah_Ikan`, `DOS`, `Berat_Ikan`, `Harga`, `Total`) VALUES
('Jason', 'Cash', 'tp2023', '2023-04-27', 'MP', 'Maesang', 10, 50, '500', '70000', '3500000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
