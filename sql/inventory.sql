-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 07:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_laptop`
--

CREATE TABLE `data_laptop` (
  `id` int(15) NOT NULL,
  `Merk_Laptop` varchar(255) NOT NULL,
  `Tipe` varchar(20) NOT NULL,
  `S_N` varchar(50) NOT NULL,
  `Office` varchar(20) NOT NULL,
  `Windows` varchar(20) NOT NULL,
  `kdlaptop` varchar(15) NOT NULL,
  `Nilai_Laptop` varchar(10) DEFAULT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '1',
  `Status` varchar(50) NOT NULL DEFAULT 'Tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_laptop`
--

INSERT INTO `data_laptop` (`id`, `Merk_Laptop`, `Tipe`, `S_N`, `Office`, `Windows`, `kdlaptop`, `Nilai_Laptop`, `jumlah`, `Status`) VALUES
(8, 'HP', 'INSPIRON 15', '019', '2016', 'win10', 'KD-3', '3000000', 2, 'Tersedia'),
(9, 'HP', 'Vivo TP301UJ-DW081D', '003', '2016', 'win10', 'KD-3', '5000000', 0, 'Tersedia'),
(10, 'ASUS', 'Vivo TP302UJ-DW081D', '001', '2016', 'win10', 'KD-1', '10000000', 1, 'Tersedia'),
(12, 'DELL', 'dell1', '019', 'win10', 'KD-2', 'KD-2', '6500000', 2, 'Tersedia'),
(13, 'ASUS', 'Vivo TP301UJ-DW081D', '11', '10', '2010', 'KD-1', '7000000', 0, 'Tersedia'),
(14, 'ASUS', 'Vivo TP301UJ-DW081D', '', '2016', 'win10', 'KD-1', '3000000', 3, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `merklaptop`
--

CREATE TABLE `merklaptop` (
  `kdlaptop` varchar(15) NOT NULL,
  `Merk_laptop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merklaptop`
--

INSERT INTO `merklaptop` (`kdlaptop`, `Merk_laptop`) VALUES
('KD-1', 'ASUS'),
('KD-2', 'DELL'),
('KD-3', 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `serah_terima`
--

CREATE TABLE `serah_terima` (
  `id` int(255) NOT NULL,
  `User` text NOT NULL,
  `BAST` varchar(255) NOT NULL,
  `Tgl_BAST` date NOT NULL,
  `Jabatan` text NOT NULL,
  `Awal_Tagihan` date NOT NULL,
  `Akhir_Tagihan` date NOT NULL,
  `Harga_Sewa` varchar(255) NOT NULL,
  `id_Data_Laptop` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serah_terima`
--

INSERT INTO `serah_terima` (`id`, `User`, `BAST`, `Tgl_BAST`, `Jabatan`, `Awal_Tagihan`, `Akhir_Tagihan`, `Harga_Sewa`, `id_Data_Laptop`) VALUES
(51, 'nindy', '03', '2018-11-07', 'Mahasiswa', '2018-01-07', '2018-05-07', '626.000,00', 9),
(52, 'vivi', '02', '2018-11-07', 'staff', '2018-11-07', '2018-12-07', '6.501.000,00', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_laptop`
--
ALTER TABLE `data_laptop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kdlaptop_merk_laptop` (`kdlaptop`);

--
-- Indexes for table `merklaptop`
--
ALTER TABLE `merklaptop`
  ADD PRIMARY KEY (`kdlaptop`);

--
-- Indexes for table `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_data_laptop_serah_terima_data_laptop` (`id_Data_Laptop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_laptop`
--
ALTER TABLE `data_laptop`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `serah_terima`
--
ALTER TABLE `serah_terima`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_laptop`
--
ALTER TABLE `data_laptop`
  ADD CONSTRAINT `kdlaptop_merk_laptop` FOREIGN KEY (`kdlaptop`) REFERENCES `merklaptop` (`kdlaptop`) ON DELETE CASCADE;

--
-- Constraints for table `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD CONSTRAINT `id_data_laptop_serah_terima_data_laptop` FOREIGN KEY (`id_Data_Laptop`) REFERENCES `data_laptop` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
