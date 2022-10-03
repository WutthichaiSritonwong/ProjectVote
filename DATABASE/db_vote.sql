-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 02:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(100) NOT NULL,
  `prefix` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `idcard` varchar(200) NOT NULL,
  `birthday` varchar(200) NOT NULL,
  `hNumber` varchar(200) NOT NULL,
  `moo` varchar(200) NOT NULL,
  `alley` varchar(200) NOT NULL,
  `road` varchar(200) NOT NULL,
  `parish` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `nPhone` varchar(100) NOT NULL,
  `community` varchar(200) NOT NULL,
  `vocal_id_1` varchar(100) NOT NULL,
  `vocal_name_1` varchar(200) NOT NULL,
  `vocal_id_2` varchar(100) NOT NULL,
  `vocal_name_2` varchar(200) NOT NULL,
  `vocal_id_3` varchar(100) NOT NULL,
  `vocal_name_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `prefix`, `name`, `surname`, `idcard`, `birthday`, `hNumber`, `moo`, `alley`, `road`, `parish`, `district`, `province`, `zip`, `nPhone`, `community`, `vocal_id_1`, `vocal_name_1`, `vocal_id_2`, `vocal_name_2`, `vocal_id_3`, `vocal_name_3`) VALUES
(5, 'นาย', 'วุฒิชัย', 'ศรีต้นวงศ์', '9999999999999', '00/00/0000', '55', '5', '-', '-', 'นาข่า', 'ท่าบ่อ', 'หนองคาย', '43110', '0987654321', 'ท่าบ่อ', '0001', 'สส.โดม', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
