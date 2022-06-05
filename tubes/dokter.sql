-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:29 PM
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
  `npm` char(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `npm`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Dzikry', '213040133', 'dzikry@gmail.com', 'teknik informatika', 'dzikry.jpg'),
(2, 'jordan', '213040123', 'jordan@gmail.com', 'teknik informatika', 'jordan.jpg'),
(3, 'finneas', '213040111', 'finneas@gmail.com', 'teknik industri', 'finneas.jpg'),
(4, 'bruno', '213040222', 'bruno@gmail.com', 'teknik pangan', 'bruno.jpg'),
(5, 'slash', '213040555', 'slash@gmail.com', 'teknik mesin', 'slash.jpg'),
(6, 'freddie', '213040666', 'freddie@gmail.com', 'teknik informatika', 'freddie.jpg'),
(7, 'curry', '213040777', 'curry@gmail.com', 'teknik pangan', 'curry.jpg'),
(8, 'ronaldo', '213040888', 'ronaldo@gmail.com', 'teknik informatika', 'ronaldo.jpg'),
(9, 'messi', '213040999', 'messi@gmail.com', 'teknik mesin', 'messi.jpg'),
(10, 'maguire', '213040100', 'maguire@gmail.com', 'teknik informatika', 'maguire.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
