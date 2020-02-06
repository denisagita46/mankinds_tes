-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 05:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mankind`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoitment`
--

CREATE TABLE `appoitment` (
  `id_appoitment` int(11) NOT NULL,
  `nama_appoitment` varchar(50) DEFAULT NULL,
  `tanggal_appoitment` char(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` char(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` int(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoitment`
--

INSERT INTO `appoitment` (`id_appoitment`, `nama_appoitment`, `tanggal_appoitment`, `tempat_lahir`, `tanggal_lahir`, `email`, `telepon`, `alamat`, `flag`) VALUES
(1, 'tes ', '02/06/2020', 'tes', '02/06/2020', '', 2147483647, 'tes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status_pekerjaan` varchar(50) DEFAULT NULL,
  `tgl_registrasi` char(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `status_pekerjaan`, `tgl_registrasi`, `pass`, `level`, `flag`) VALUES
(165, 'deni', 'denisagita47@gmail.com', 'Softwere Development', '02/06/2020', '1234', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoitment`
--
ALTER TABLE `appoitment`
  ADD PRIMARY KEY (`id_appoitment`),
  ADD KEY `id_appoitment` (`id_appoitment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoitment`
--
ALTER TABLE `appoitment`
  MODIFY `id_appoitment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
