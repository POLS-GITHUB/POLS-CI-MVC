-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 09:00 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `own_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'palash', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `U_id` int(42) NOT NULL,
  `inv_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `amt` varchar(255) NOT NULL,
  `deliverd` varchar(255) NOT NULL,
  `patent_desc` text NOT NULL,
  `deliverd_desc` text NOT NULL,
  `A_id` int(42) NOT NULL,
  `P_con` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`U_id`, `inv_no`, `name`, `address`, `amt`, `deliverd`, `patent_desc`, `deliverd_desc`, `A_id`, `P_con`) VALUES
(2, '0002277', 'P.S.RANDHAWA', 'SANDHA BAZAR', '5000', 'PALASH', '', '', 6, '9433051111'),
(3, '0002049', 'LIFE BLUE PRINT', 'MUKUNDAPUR', '35349', 'UNKNOWN', '', '', 6, '9007792254'),
(4, '0002468', 'M/S BAISAKHI', 'A.G MARKET', '3600', 'PALASH', '', '', 6, '905136394'),
(5, '0002558', 'ASTHA MEDICAL CENTER', '172, R.C DAS ROAD, BURDWAN', '45901', 'PALASH', '', '', 6, '8327089535'),
(6, '0001898', 'NORTH CALCUTTA MEDICAL AGENCY', '9/3 FEEDER ROAD RATHTALA', '5637', 'PALASH', '', '', 6, '9051028906'),
(7, '0001840', 'PADMA GOPAL MEDICAL AGENCY', '66 A.SEN ROAD KOLKATA', '1220', 'PALASH', '', '', 6, '8981382446'),
(8, '0002203', 'NIRMAL MEDICAL STORES', '2/6 L.N.C LANE KADAMTALA', '569', 'PALASH', '', '', 6, '03326774325'),
(9, '0002188', 'NIRMAL MEDICAL STORES', '2/6 L.N.C LANE KADAMTALA', '1452', 'DIPAYAN', '', '', 6, '03326774325'),
(11, '0001764', 'NITAI PANDIT', 'MEDICAL COLLEGE', '1950', 'DIPAYAN', '', '', 6, '9433408280'),
(12, 'CN00085', 'RAJ MEDICAL', 'CHANDRABATI , UTARPODRA(NEAR-WEST_BANK)', '176', 'PALASH', '', '', 6, '8930167512'),
(13, '0002787', 'GOPAL MEDICAL HALL', '34H, B.T.ROAD , KOLKATA-700002', '990', 'PALASH', '', '', 6, '9007836724'),
(14, '0002777', 'MOUMITA ADAK', 'HOWRAH MAIDAN', '2025', 'PALASH', '', '', 6, '7003949172'),
(15, '0002786', 'PLUSE BEAT', '28 , B.T.ROAD,CHIRIAMORE, KOLKATA-700019.', '990', 'PALASH', '', '', 6, '8479831238'),
(16, '0003081', 'KRISHNA MEDICAL HALL', '105,KHUDIRAM BOSE SARANI, KOL-700004\r\n\r\n\r\n\r\n', '1731', 'DIPAYAN', '', '', 6, '03325337077,9883287012');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `U_id` int(18) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `A_id` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`U_id`, `Uname`, `subject`, `address`, `Contact`, `email`, `pass`, `A_id`) VALUES
(1, 'SATTYA', 'MANAGER', 'RANAGHAT .', '9333894361', 'S@mail.com', '0f6e06a7f619c4069d2ab85cbbb4034d5deec464', 1),
(2, 'ARPAN', 'ACCOUNTANT', 'BALLY KHAL', '8981590054', 'A@mail.com', '25ec33ba2c1e24dc5927bda118cb9b47f70a7c08', 2),
(3, 'BAPI', 'DELIVERY BOY', 'MADHYAM GRAM', '7003365613', 'B@mail.com', '6e41864f2d47c23b187a2dec3fca43e72dd9c238', 3),
(4, 'DILIP', 'DELEVERY BOY', 'MADHYAM GRAM', '9874742183', 'D@mail.com', '9afd1a977a4a5002cf76506e012c5db959cf8262', 4),
(5, 'DIBAKAR', 'VENTURE/2', 'PALLA', '9064125288', 'D2@mail.com', 'b7b01f7349bf01929123eedee6e927e14f62f933', 5),
(6, 'PALASH', 'DELEVERY BOY', 'HOWRAH', '9674090898', 'P@mail.com', '8b8997b61b064e77d246745fdc676e8c276ecca8', 6),
(7, 'DIPAYAN', 'DELEVERY BOY', 'BEHALA TRAM DEPO', '8777318690', 'DIPAN@mail.com', 'ef3756bae84606a5ffe2083932ae7ee80ab9a5e1', 7),
(8, 'LOB', 'DELIVERY BOY', 'MOTHURA PUR', '9674090898', 'lob@gmail.com', '7add3881e60317d129b458e047fa7df1db0750a8', 0),
(9, 'POLS', 'CI', 'nbvfnnsdon', '9239324460', 'pk@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(10, 'POLS', 'CI', 'kjnasdvdanv', '1234567890', 'pk@nsj.com', '68eda260a14f3caa506009dff76a61871755ca30', 0),
(11, 'KING', 'LOCAL', 'CIDESDShjkhjkllk', '9674090898', 'K@mail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0),
(12, 'SHREE', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0),
(13, 'SHREE', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0),
(14, 'MOLY', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '8b8997b61b064e77d246745fdc676e8c276ecca8', 0),
(15, 'SELLY', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0),
(16, 'teLLY', 'MYLOCAL', 'sdfgsdfgsdfgsdg', '9674090898', 'pk@gmail.com', '68eda260a14f3caa506009dff76a61871755ca30', 0),
(17, 'SOMA', 'ASDNO', 'NJKASNDCSNCSCDN', '9674090898', 'S@GMAIL.COM', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', 0),
(18, 'SHAM', 'DCFDFBG', 'SDAJFBKDSFGBVB', '9674090898', 'K@mail.com', '8b8997b61b064e77d246745fdc676e8c276ecca8', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`U_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `U_id` int(42) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `U_id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
