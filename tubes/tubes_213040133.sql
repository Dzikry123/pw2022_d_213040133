-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 06:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040133`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode_dr` char(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `kode_dr`, `email`, `spesialis`, `gambar`) VALUES
(24, 'Boyke Dian .N', '1000', 'boyke@gmail.com', 'Dokter kandungan', '629add627a59a.jpg'),
(25, 'Teuku Adifitrian', '1001', 'teuku@gmail.com', 'dr. Bedah Plastik', '629ade07bf91d.jpg'),
(26, 'Gunawan', '1002', 'gunawan@gmail.com', 'Penyakit Dalam', '629ade3c608b7.jpg'),
(27, 'Boy Abidin', '1003', 'boy@gmail.com', 'Dokter kandungan', '629adea50a8d3.jpg'),
(28, 'Zaidul Akbar', '1004', 'zaidul@mail.com', 'Dokter Umum', '629adeda9d957.jpg'),
(29, 'Nycta Gina', '1005', 'nycta@mail.com', 'Dokter kandungan', '629adf00b5120.jpg'),
(30, 'Eka Julianta. W', '1006', 'eka@gmail.com', 'Bedah saraf', '629adf2a41bf8.jpg'),
(31, 'Sarah Gadrie', '1007', 'sarah@gmail.com', 'Dokter Gigi', '629adf59cd460.jpg'),
(32, 'Reza Gladys', '1008', 'reza@gmail.com', 'Dokter kecantikan', '629adf8c3028c.jpg'),
(33, 'Oky Pratama', '1009', 'oky@gmail.com', 'Dokter kecantikan', '629ae03ad587f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$QeOQZ2qPwP/Gie8QsM3exeeZ9Bve9iVvxBSGdkarv7qEp6QY4fYC2'),
(4, 'admin', '$2y$10$/fFJ1zsCfQNLK4cUyBigkeyLO1up865gRq6OEDhhFX0SScAxXLWhS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
