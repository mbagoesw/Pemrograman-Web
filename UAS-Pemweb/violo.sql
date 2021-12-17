-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2021 at 02:33 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `violo`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id_buyer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_buyer` varchar(50) NOT NULL,
  `bio_buyer` text NOT NULL,
  `wa` varchar(30) NOT NULL,
  `foto` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `id_user`, `nama_buyer`, `bio_buyer`, `wa`, `foto`) VALUES
(17, 2, 'Bagoes Wicaksono', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, ', '08182623184', '4.jpeg'),
(18, 14, 'Rejeanto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '081846514412', '4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `explore`
--

CREATE TABLE `explore` (
  `id_ex` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `shop_gallery` varchar(150) NOT NULL,
  `nama_seller` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `nama_shop` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `explore`
--

INSERT INTO `explore` (`id_ex`, `foto`, `shop_gallery`, `nama_seller`, `kategori`, `nama_shop`) VALUES
(1, 'user.png', '4.jpeg', 'Triana Micku Kuswara', 'Copywriting', 'nanninu'),
(2, 'user.png', '4.jpeg', 'Bagoes Wicaksono', 'Logo Design', 'bagoeswicak'),
(3, 'user.png', '4.jpeg', 'Triana Micku Kuswara', 'Web Design', 'nannanananaa'),
(4, 'user.png', '4.jpeg', 'Bagoes Wicaksono', 'Video Editor', 'bagoessssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Copywriting'),
(2, 'Web Design'),
(3, 'Logo Design'),
(4, 'Video Editor');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_shop` varchar(150) NOT NULL,
  `nama_seller` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `bio_seller` text NOT NULL,
  `ig` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `Li` varchar(100) NOT NULL,
  `wa` varchar(100) NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `id_user`, `nama_shop`, `nama_seller`, `kategori`, `bio_seller`, `ig`, `fb`, `Li`, `wa`, `logo`) VALUES
(6, 6, 'Rhen shop', 'Rhenaldo Muhammad', 'Copywriting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'https://www.instagram.com/ronaldo/', 'https://www.instagram.com/rhen/', 'https://www.linkedin.com/rhen/', '0813845484', '4.jpeg'),
(7, 10, 'Maulitds', 'Maulidta Naflah', 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Vulputate sapien nec sagittis aliquam. Sit amet porttitor eget dolor morbi non arcu risus quis. Arcu non odio euismod lacinia at quis risus sed. ', 'https://www.instagram.com/maus', 'https://www.facebook.com/maus', 'https://www.linkedin.com/maus', '0879516575418', '4.jpeg'),
(8, 12, 'Arya art', 'Aryadani', 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Vulputate sapien nec sagittis aliquam. Sit amet porttitor eget dolor morbi non arcu risus quis. Arcu non odio euismod lacinia at quis risus sed. ', 'https://www.instagram.com/arya', 'https://www.facebook.com/arya', 'https://www.linkedin.com/arya', '087958468789', '4.jpeg'),
(9, 15, 'wicak', 'wicak', 'Copywriting', 'nyenyenye', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/', '08165168451', 'signin1.png'),
(10, 16, 'triana micku', 'Triana Micku', 'Copywriting', 'halo', 'triana_micku', 'triana_micku', 'triana_micku', '083813471734', '4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `no_telp`, `role`) VALUES
(1, 'trianana@gmail.com', 'Triana Micku', 'e10adc3949ba59abbe56e057f20f883e', '081246843256', 'Admin'),
(6, 'rhen@gmail.com', 'Rhenaldo Muhammad', 'e10adc3949ba59abbe56e057f20f883e', '08125849875', 'Seller'),
(9, 'rarauliaaa@gmail.com', 'Zahra Aulia Fauzia', 'e10adc3949ba59abbe56e057f20f883e', '089752654894', 'Seller'),
(10, 'Maus@gmail.com', 'Maulidta', 'e10adc3949ba59abbe56e057f20f883e', '081355659521', 'Seller'),
(11, 'bagoes@gmail.com', 'Bagoes Wicak', 'e10adc3949ba59abbe56e057f20f883e', '0812457484635', 'Buyer'),
(12, 'arya@gmail.com', 'Aryadani', 'e10adc3949ba59abbe56e057f20f883e', '081846576635', 'Seller'),
(14, 'reje@gmail.com', 'Rejeanto', 'e10adc3949ba59abbe56e057f20f883e', '081654897465', 'Buyer'),
(15, 'wicak@gmail.com', 'Muhammad bagoes wicaksono', 'e10adc3949ba59abbe56e057f20f883e', '08654679846', 'Seller'),
(16, 'trianana@gmail.com', 'trianamicku', 'e10adc3949ba59abbe56e057f20f883e', '083813471794', 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id_buyer`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `explore`
--
ALTER TABLE `explore`
  ADD PRIMARY KEY (`id_ex`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id_buyer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `explore`
--
ALTER TABLE `explore`
  MODIFY `id_ex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
