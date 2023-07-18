-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 02:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ussername` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `ussername`, `email`, `password`, `role`) VALUES
(1, 'Nabilla putri sahara', '', 'nabillaputris2002@gmail.com', 'Th3c0mbr0', ''),
(2, 'Nabilla putri sahara', '', 'nabillaputris2002@gmail.com', 'Th3c0mbr0', ''),
(3, 'Nabilla putri sahara', '', 'nabillaputris2002@gmail.com', 'Th3c0mbr0', ''),
(4, 'Nabilla putri sahara', '', 'nabillaputris2002@gmail.com', 'Th3c0mbr0', ''),
(5, 'Nabilla putri sahara', 'Nabillaputri', 'nabillaputris2002@gmail.com', 'latrans21', ''),
(6, 'Nabilla putri sahara', 'Nabillaputri', 'nabillaputris2002@gmail.com', 'latrans21', ''),
(7, 'Nabilla putri sahara', 'Nabillaputri', 'nabillaputris2002@gmail.com', 'latrans21', ''),
(8, 'Nabilla putri sahara', 'Nabillaputri', 'nabillaputris2002@gmail.com', 'latrans21', ''),
(9, 'Nabilla putri sahara', 'Nabillaputri', 'nabillaputris2002@gmail.com', 'latrans21', ''),
(10, 'nandi', 'nandi', 'nandi@gmail.com', '123', 'on'),
(11, 'nandi', 'nandi213', 'nand123i@gmail.com', '123', 'admin'),
(12, 'nandi', '123', '123@gmail.com', '123', 'admin'),
(13, 'nandi', '321', '321@gm.c', '321', 'member'),
(14, 'Nabilla putri sahara', 'Nabilla', '2020nabilaputri@gmail.com', 'billa123', 'member'),
(15, 'Nabilla putri ', 'Billa', 'billa@gmail.com', '12345', 'admin'),
(16, 'Salsabila nurani', 'caca', 'caca@gmail.com', 'cabil', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
