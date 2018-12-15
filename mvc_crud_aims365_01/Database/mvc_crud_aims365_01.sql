-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 01:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_crud_aims365_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobile`
--

CREATE TABLE `tb_mobile` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mobile`
--

INSERT INTO `tb_mobile` (`id`, `company`, `model`, `details`, `price`) VALUES
(1, 'SONY', 'XPERIA U', 'N/A', '15500'),
(2, 'XIOMI', 'NOTE 2', 'N/A', '12300'),
(7, 'samsung 1', '12121', '12121', '21212'),
(10, 'NOKIA', 'ASA', 'N/A', '2500'),
(11, 'LG', 'LB-416024', 'N/A', '21600'),
(12, 'iTEL', 'IT2170', 'N/A', '1000'),
(13, 'WINMAX', 'X870', 'N/A', '6000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mobile`
--
ALTER TABLE `tb_mobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mobile`
--
ALTER TABLE `tb_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
