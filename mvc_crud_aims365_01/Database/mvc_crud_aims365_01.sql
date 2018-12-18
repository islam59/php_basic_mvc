-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 02:37 PM
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
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `published_date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`id`, `book_name`, `author_name`, `published_date`, `price`) VALUES
(1, 'asdfasf ', 'rwqerwer', '2018-12-05', '454'),
(2, 'EKER VITOR 3', 'NAHID TAKLA', '2017-01-31', '100'),
(3, 'EKER VITOR 25', 'MOJIBOR KAKA', '2018-12-31', '800');

-- --------------------------------------------------------

--
-- Table structure for table `tb_car`
--

CREATE TABLE `tb_car` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_car`
--

INSERT INTO `tb_car` (`id`, `company`, `model`, `details`, `price`) VALUES
(1, 'samsung', 'SL410', 'dfaf', 'afdaf'),
(2, 'adfadfa', 'adafda', 'adfafdasd', 'adsfafd'),
(3, 'sfgs', 'sfgs', 'sgfs', '124356787');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laptop`
--

CREATE TABLE `tb_laptop` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laptop`
--

INSERT INTO `tb_laptop` (`id`, `company`, `model`, `details`, `price`) VALUES
(1, 'Dell', 'SL410', 'LATITUTE V03.0', '58000'),
(2, 'Dell', 'sl410', 'n.a', 'as'),
(3, 'thinkpad', 'SL410', 'mfg', '21600');

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
(13, 'WINMAX', 'X870', 'N/A', '6000'),
(14, 'samsung', '1424', 'n/a', '1200'),
(15, 'aa', 'adfsa', 'n/a', ' 1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_car`
--
ALTER TABLE `tb_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mobile`
--
ALTER TABLE `tb_mobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_car`
--
ALTER TABLE `tb_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_laptop`
--
ALTER TABLE `tb_laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_mobile`
--
ALTER TABLE `tb_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
