-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 04:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_profile` varchar(200) NOT NULL,
  `admin_uname` varchar(200) NOT NULL,
  `admin_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`admin_id`, `admin_name`, `admin_profile`, `admin_uname`, `admin_pass`) VALUES
(1, 'Administrator', 'img/logo/waterbilling_logo.png', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `system_title`
--

CREATE TABLE `system_title` (
  `id_title` int(11) NOT NULL,
  `system_name` varchar(100) NOT NULL,
  `system_title` varchar(100) NOT NULL,
  `system_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_title`
--

INSERT INTO `system_title` (`id_title`, `system_name`, `system_title`, `system_logo`) VALUES
(1, 'Water Billing', '', 'img/logo/waterbilling_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_consumers`
--

CREATE TABLE `tb_consumers` (
  `con_id` int(11) NOT NULL,
  `prk_id` int(11) NOT NULL,
  `account_id` varchar(300) NOT NULL,
  `con_fname` varchar(300) NOT NULL,
  `con_lname` varchar(300) NOT NULL,
  `con_email` varchar(300) NOT NULL,
  `con_cpnumber` varchar(30) NOT NULL,
  `con_avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_consumers`
--

INSERT INTO `tb_consumers` (`con_id`, `prk_id`, `account_id`, `con_fname`, `con_lname`, `con_email`, `con_cpnumber`, `con_avatar`) VALUES
(1, 1, '#3b043c5505166877527763777d6da3ab8', 'Kenneth', 'Tanuron', 'kenneth.tanuron@gmail.com', '09361776112', 'Boy'),
(2, 21, '#e9d8d154bd166877572663777f2e8ed76', 'Juan', 'Tamad', 'juan.tamad@gmail.com', '09361776112', 'Man'),
(3, 1, '#09e868abf41668777188637784e41a195', 'Peter', 'Cayatano', 'peter@gmail.com', '09361776112', 'Boy'),
(4, 1, '#a56a9b7bb61668777477637786050ab3e', 'Eren', 'Yeager', 'eren@gmail.com', '09361776112', 'Man'),
(5, 18, '#ffdb915cde1668777714637786f285251', 'Linda', 'Cruz', 'linda@gmail.com', '09361776112', 'Girl'),
(6, 21, '#5d813789971668777876637787948a81c', 'Itachi', 'Madara', 'itachi@gmail.com', '09361776112', 'Boy'),
(7, 20, '#1ea9919557166877856463778a44822d6', 'Rendor', 'Labrador', 'rendon@gmail.com', '09361776112', 'Boy'),
(8, 1, '#110919557166877856463awdawd123', 'John', 'Tamad', 'john@gmail.com', '09361776112', 'Boy'),
(9, 20, '#eb2ca2348516687801706377908ac1edd', 'Madara', 'Uchiha', 'madara@gmail.com', '09361776112', 'Boy'),
(10, 20, '#ddcdf3796416687803656377914d91625', 'Naruto', 'Uzumaki', 'naruto@gmail.com', '09361776112', 'Boy'),
(12, 21, '#56f9b49d3a16687821406377983c279b9', 'Hinata', 'Kaguya', 'hinata@gmail.com', '09361776112', 'Girl'),
(13, 21, '#09ba30c2a3166878407763779fcd6447f', 'Gaara', 'Madara', 'gaara@gmail.com', '09361776112', 'Boy'),
(14, 21, '#642204a83c16687845496377a1a5242a8', 'AJ', 'Damalan', 'damalan@gmail.com', '09361776112', 'Boy'),
(15, 20, '#f1412fe9f016687869116377aadfe1273', 'Loki', 'Asgradian', 'loki@gmail.com', '09361776112', 'Boy'),
(16, 21, '#1668793035', 'Darana', 'Lunita', 'darana@gmail.com', '09361776112', 'Boy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_credentials`
--

CREATE TABLE `tb_credentials` (
  `cre_id` int(11) NOT NULL,
  `con_id` int(11) NOT NULL,
  `cre_username` varchar(300) NOT NULL,
  `cre_password` varchar(500) NOT NULL,
  `cre_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_credentials`
--

INSERT INTO `tb_credentials` (`cre_id`, `con_id`, `cre_username`, `cre_password`, `cre_status`) VALUES
(1, 1, 'kenneth', '202cb962ac59075b964b07152d234b70', 1),
(2, 2, 'juan', '202cb962ac59075b964b07152d234b70', 1),
(3, 3, 'peter', '202cb962ac59075b964b07152d234b70', 1),
(4, 4, 'eren', '202cb962ac59075b964b07152d234b70', 1),
(5, 5, 'linda', '202cb962ac59075b964b07152d234b70', 1),
(6, 6, 'itachi', '202cb962ac59075b964b07152d234b70', 1),
(7, 7, 'rendon', '202cb962ac59075b964b07152d234b70', 1),
(8, 8, 'john', '202cb962ac59075b964b07152d234b70', 1),
(9, 9, 'madara', '202cb962ac59075b964b07152d234b70', 1),
(10, 10, 'naruto', '202cb962ac59075b964b07152d234b70', 1),
(11, 12, 'hinata', '202cb962ac59075b964b07152d234b70', 1),
(12, 13, 'gaara', 'd5feb376b310c160098436c4ed3631e2', 1),
(13, 14, 'damalan', '0ca38f19bb3e297e299177a4997f05ae', 1),
(14, 15, 'loke', 'd968e18ae294a6e4d53cdf59510ed747', 1),
(15, 16, 'darnaa', '62e0f41ee6600533cb4a60f5828c3e85', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_meter_num`
--

CREATE TABLE `tb_meter_num` (
  `meter_id` int(11) NOT NULL,
  `meter_num` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_meter_num`
--

INSERT INTO `tb_meter_num` (`meter_id`, `meter_num`) VALUES
(4, '0001'),
(5, '0002'),
(6, '0003'),
(7, '0004'),
(8, '0005'),
(9, '0006'),
(10, '0007'),
(11, '0008'),
(12, '0009'),
(13, '0010'),
(14, '0011'),
(15, '0012'),
(16, '0013'),
(17, '0014'),
(18, '0015'),
(19, '0016'),
(20, '0017'),
(23, '0018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_owner_meter`
--

CREATE TABLE `tb_owner_meter` (
  `owner_id` int(11) NOT NULL,
  `con_id` int(11) NOT NULL,
  `meter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_owner_meter`
--

INSERT INTO `tb_owner_meter` (`owner_id`, `con_id`, `meter_id`) VALUES
(1, 1, 4),
(2, 1, 5),
(3, 2, 7),
(4, 3, 6),
(5, 4, 8),
(6, 5, 9),
(7, 6, 10),
(8, 7, 11),
(9, 8, 12),
(10, 9, 13),
(11, 10, 14),
(12, 12, 15),
(13, 13, 16),
(14, 13, 17),
(15, 14, 20),
(16, 15, 18),
(17, 16, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tb_prk`
--

CREATE TABLE `tb_prk` (
  `prk_id` int(11) NOT NULL,
  `prk_name` varchar(300) NOT NULL,
  `prk_sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prk`
--

INSERT INTO `tb_prk` (`prk_id`, `prk_name`, `prk_sort`) VALUES
(1, 'Purok1', 1),
(18, 'Purok6', 1),
(20, 'Purok8', 2),
(21, 'Purok9', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `UQ_admin_id` (`admin_id`);

--
-- Indexes for table `system_title`
--
ALTER TABLE `system_title`
  ADD PRIMARY KEY (`id_title`);

--
-- Indexes for table `tb_consumers`
--
ALTER TABLE `tb_consumers`
  ADD PRIMARY KEY (`con_id`),
  ADD UNIQUE KEY `UQ_con_id` (`con_id`),
  ADD UNIQUE KEY `UQ_account_id` (`account_id`),
  ADD KEY `FK_tb_prk_TO_tb_consumers` (`prk_id`);

--
-- Indexes for table `tb_credentials`
--
ALTER TABLE `tb_credentials`
  ADD PRIMARY KEY (`cre_id`),
  ADD UNIQUE KEY `UQ_cre_id` (`cre_id`),
  ADD UNIQUE KEY `UQ_cre_username` (`cre_username`),
  ADD KEY `FK_tb_consumers_TO_tb_credentials` (`con_id`);

--
-- Indexes for table `tb_meter_num`
--
ALTER TABLE `tb_meter_num`
  ADD PRIMARY KEY (`meter_id`),
  ADD UNIQUE KEY `UQ_meter_id` (`meter_id`),
  ADD UNIQUE KEY `UQ_meter_num` (`meter_num`);

--
-- Indexes for table `tb_owner_meter`
--
ALTER TABLE `tb_owner_meter`
  ADD PRIMARY KEY (`owner_id`),
  ADD UNIQUE KEY `UQ_owner_id` (`owner_id`),
  ADD KEY `FK_tb_consumers_TO_tb_owner_meter` (`con_id`),
  ADD KEY `FK_tb_meter_num_TO_tb_owner_meter` (`meter_id`);

--
-- Indexes for table `tb_prk`
--
ALTER TABLE `tb_prk`
  ADD PRIMARY KEY (`prk_id`),
  ADD UNIQUE KEY `UQ_prk_id` (`prk_id`),
  ADD UNIQUE KEY `UQ_prk_name` (`prk_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_title`
--
ALTER TABLE `system_title`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_consumers`
--
ALTER TABLE `tb_consumers`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_credentials`
--
ALTER TABLE `tb_credentials`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_meter_num`
--
ALTER TABLE `tb_meter_num`
  MODIFY `meter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_owner_meter`
--
ALTER TABLE `tb_owner_meter`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_prk`
--
ALTER TABLE `tb_prk`
  MODIFY `prk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_consumers`
--
ALTER TABLE `tb_consumers`
  ADD CONSTRAINT `FK_tb_prk_TO_tb_consumers` FOREIGN KEY (`prk_id`) REFERENCES `tb_prk` (`prk_id`);

--
-- Constraints for table `tb_credentials`
--
ALTER TABLE `tb_credentials`
  ADD CONSTRAINT `FK_tb_consumers_TO_tb_credentials` FOREIGN KEY (`con_id`) REFERENCES `tb_consumers` (`con_id`);

--
-- Constraints for table `tb_owner_meter`
--
ALTER TABLE `tb_owner_meter`
  ADD CONSTRAINT `FK_tb_consumers_TO_tb_owner_meter` FOREIGN KEY (`con_id`) REFERENCES `tb_consumers` (`con_id`),
  ADD CONSTRAINT `FK_tb_meter_num_TO_tb_owner_meter` FOREIGN KEY (`meter_id`) REFERENCES `tb_meter_num` (`meter_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
