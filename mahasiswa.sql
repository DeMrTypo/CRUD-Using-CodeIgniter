-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 02:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `NIM` int(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kota_Asal` varchar(10) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Nama_Ortu` varchar(50) NOT NULL,
  `Alamat_Ortu` varchar(100) NOT NULL,
  `Kode_Pos` int(11) NOT NULL,
  `NoTelp` varchar(12) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`NIM`, `Nama`, `Kota_Asal`, `Tanggal_Lahir`, `Nama_Ortu`, `Alamat_Ortu`, `Kode_Pos`, `NoTelp`, `Status`) VALUES
(672018001, 'SmithyWerberJaggermanJensen', 'London', '2020-11-13', 'Spongebob', 'London , United Kingdom', 57322, '081928007575', 'TAMA'),
(672018021, 'Donny Julianto Setiawan Halim', 'Lampung', '2000-07-26', 'Anon', 'Bandar Lampung , Lampung', 35722, '081276758980', 'tama'),
(672018023, 'Calvin Ravelino', 'Bandar Lam', '2000-05-08', 'Anon', 'Anon', 12312, '123213131312', 'tama'),
(672018035, 'Herlambang Adi Wicaksono', 'Salatiga', '2000-09-19', 'Heru', 'Salatiga', 15722, '082331128391', 'tama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `NIM` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672018037;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
