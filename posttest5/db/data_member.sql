-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 05:15 AM
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
-- Database: `dbmember`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_member`
--

CREATE TABLE `data_member` (
  `id` int(5) NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_member`
--

INSERT INTO `data_member` (`id`, `nama_member`, `tempat_lahir`, `alamat`, `date`) VALUES
(4, 'Muhammad Reza Ubaidillah', 'Samarinda', 'Pemuda', '2022-10-21'),
(5, 'Koles', 'Samarinda ', 'Bumi Sempaja', '2022-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_member`
--
ALTER TABLE `data_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_member`
--
ALTER TABLE `data_member`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
