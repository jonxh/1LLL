-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 06:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1lll`
--

-- --------------------------------------------------------

--
-- Table structure for table `algs`
--

CREATE TABLE `algs` (
  `alg_id` int(4) NOT NULL,
  `case_id` int(5) NOT NULL,
  `alg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `algs`
--

INSERT INTO `algs` (`alg_id`, `case_id`, `alg`) VALUES
(1, 1, 'y\' R U\' L U2 R\' U\' R\' F R2 U2 R\' F\' L\'');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(10) NOT NULL,
  `oll` varchar(256) NOT NULL,
  `cp` varchar(256) NOT NULL,
  `ep` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `oll`, `cp`, `ep`) VALUES
(1, '1', 'B', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `oll_view`
--

CREATE TABLE `oll_view` (
  `oll_id` int(11) NOT NULL,
  `oll_alg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oll_view`
--

INSERT INTO `oll_view` (`oll_id`, `oll_alg`) VALUES
(1, 'RUB3RBR2U3R3FRF3'),
(2, 'FRUR3U3F3fRUR3U3f3'),
(3, 'r3R2UR3UrU2r3UR3r'),
(4, 'r3RU3rU2r3U3RU3R23r'),
(5, 'U3B3R2FRF3RB'),
(6, 'U3FR2B3R3BR3F3'),
(7, 'LFR3FRF2L3'),
(8, 'L3B3RB3R3B2L'),
(9, 'U2F3L3UB3U3BU3LUF'),
(10, 'U2LUL3F3LFU3F3L3F'),
(11, 'U2RBUB3UR3F2LFL3F'),
(12, 'BU2B3U3R3F3L3U3LFR'),
(13, 'BLUL2U3LB3L3UL'),
(14, 'U2L3BLUL3B3LBU3B3'),
(15, 'UB3R3F3BU3FUB3RB'),
(16, 'U3FRF3BUB3U3FR3F3'),
(17, 'FR3F3R2r3URU3R3U3M3'),
(18, 'RU2R2FRF3U2M3URU3r3'),
(19, 'MURUR3U3M3R3FRF3'),
(20, 'MURUR3U3M2URU3r3'),
(21, 'RU2R3U3RUR3U3RU3R3'),
(22, 'RU2R2U3R2U3R2U2R'),
(23, 'R2DR3U2RD3R3U2R3'),
(24, 'LFR3F3L3FRF3'),
(25, 'R3FRB3R3F3RB'),
(26, 'RUR3URU2R3'),
(27, 'L3U3LU3L3U2L'),
(28, 'RFD2L2U2BL2D2R'),
(29, 'MURUR3U3R3FRF3M3'),
(30, 'FURU3BR3F3RB3R3'),
(31, 'UBF3ULU3L3B3U3F'),
(32, 'UFUR3U3F3UFRF3'),
(33, 'UFUF3U3F3LFL3'),
(34, 'RUR3U3y3r3U3RUM3'),
(35, 'UFU2F2LFL3FU2F3'),
(36, 'U3FU2F2L2BL3FL2B3L'),
(37, 'ULF3L3FUFU3F3'),
(38, 'U2RU2R2F2LFL3F2RF3'),
(39, 'RU3L3B3U3BULR3'),
(40, 'U3B3UFRUR3U3BF3'),
(41, 'LR2D3F3DFRF3L3R'),
(42, 'U2L2R3DFD3F3L3FL3R'),
(43, 'U2L3U3B3UBL'),
(44, 'U3RUBU3B3R3'),
(45, 'ULFUF3U3L3'),
(46, 'U3BUBL3B3LU3B3'),
(47, 'U3B3R3U3RUR3U3RUB'),
(48, 'FRUR3U3RUR3U3F3'),
(49, 'LB3U2BU2BL2B3L'),
(50, 'U2L3FU2F3U2F3L2FL3'),
(51, 'BULU3L3ULU3L3B3'),
(52, 'U2LUL3ULU3FU3F3L3'),
(53, 'U3B3RBR3U2B2L3B3LB3'),
(54, 'U3FR3F3RU2F2LFL3F'),
(55, 'URU2R2U3RU3R3U2FRF3'),
(56, 'RBLB3R2BUL3U3B3R'),
(57, 'RUR3U3R3LFRF3L3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `algs`
--
ALTER TABLE `algs`
  ADD PRIMARY KEY (`alg_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `oll_view`
--
ALTER TABLE `oll_view`
  ADD PRIMARY KEY (`oll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `algs`
--
ALTER TABLE `algs`
  MODIFY `alg_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oll_view`
--
ALTER TABLE `oll_view`
  MODIFY `oll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
