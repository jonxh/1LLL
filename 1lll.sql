-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24. Sep, 2018 20:10 PM
-- Server-versjon: 10.1.30-MariaDB
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
-- Tabellstruktur for tabell `algs`
--

CREATE TABLE `algs` (
  `alg_id` int(11) NOT NULL,
  `alg_oll` int(2) NOT NULL,
  `alg_cp` int(2) NOT NULL,
  `alg_ep` int(2) NOT NULL,
  `alg` varchar(255) NOT NULL,
  `alg_bad` int(1) NOT NULL,
  `alg_oh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `algs`
--

INSERT INTO `algs` (`alg_id`, `alg_oll`, `alg_cp`, `alg_ep`, `alg`, `alg_bad`, `alg_oh`) VALUES
(1, 26, 1, 8, 'R U R\' U R U2 R\'', 0, 1),
(2, 45, 2, 10, 'F R U R\' U\' F\'', 0, 1),
(3, 45, 2, 1, 'F r U M U2 M\' U M U R\' U\' F\'', 0, 1),
(4, 45, 2, 1, 'y F U R U\' R\' F\' r\' U2 R U R\' U r', 0, 1),
(5, 8, 1, 1, 'y2 r\' F2 r U r\' F U2 R U R\' U r ', 0, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `arw_view`
--

CREATE TABLE `arw_view` (
  `arw_id` int(11) NOT NULL,
  `arw_code1` varchar(255) NOT NULL,
  `arw_code2` varchar(255) NOT NULL,
  `arw_code3` varchar(255) NOT NULL,
  `arw_code4` varchar(255) NOT NULL,
  `arw_code5` varchar(255) NOT NULL,
  `arw_code6` varchar(255) NOT NULL,
  `arw_code7` varchar(255) NOT NULL,
  `arw_code8` varchar(255) NOT NULL,
  `arw_code9` varchar(255) NOT NULL,
  `arw_code10` varchar(255) NOT NULL,
  `arw_code11` varchar(255) NOT NULL,
  `arw_code12` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `arw_view`
--

INSERT INTO `arw_view` (`arw_id`, `arw_code1`, `arw_code2`, `arw_code3`, `arw_code4`, `arw_code5`, `arw_code6`, `arw_code7`, `arw_code8`, `arw_code9`, `arw_code10`, `arw_code11`, `arw_code12`) VALUES
(1, '', 'U1U7,U7U1,U3U5,U5U3', 'U5U7,U7U5,U1U3,U3U1', 'U5U1,U1U5,U3U7,U7U3', 'U7U3,U3U5,U5U7', 'U7U3,U3U1,U1U7', 'U5U3,U3U1,U1U5', 'U5U7,U7U1,U1U5', 'U7U5,U5U3,U3U7', 'U7U1,U1U3,U3U7', 'U1U3,U3U5,U5U1', 'U5U1,U1U7,U7U5'),
(2, '', 'U0U8,U8U0,U1U7,U7U1', 'U2U9,U9U2,U1U7,U7U1', 'U6U0,U0U6,U1U7,U7U1', 'U2U0,U0U2,U1U7,U7U1', 'U8U6,U6U8,U1U7,U7U1', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `oll_view`
--

CREATE TABLE `oll_view` (
  `oll_id` int(11) NOT NULL,
  `oll_alg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `oll_view`
--

INSERT INTO `oll_view` (`oll_id`, `oll_alg`) VALUES
(1, 'RBL3BR2L3F3L3FR2L3B2R3'),
(2, 'FRUR3U3F3fRUR3U3f3'),
(3, 'r3R2UR3UrU2r3UR3rU'),
(4, 'r3RU3rU2r3U3RU3R23rU3'),
(5, 'U3B3R2FRF3RBU3'),
(6, 'U3FR2B3R3BR3F3U3'),
(7, 'LFR3FRF2L3U2'),
(8, 'R3F3rU3r3F2RU2'),
(9, 'U2F3L3UB3U3BU3LUF'),
(10, 'yrR2U2RUR3URUr3R'),
(11, 'U2MRUR3URU2R3UM3U'),
(12, 'BU2B3U3R3F3L3U3LFRU2'),
(13, 'L3U3LU3lUL2UL2U2l3U2'),
(14, 'RUR3Ur3U3R2U3R2U2r'),
(15, 'UB3R3F3BU3FUB3RBU'),
(16, 'U3FRF3BUB3U3FR3F3U3'),
(17, 'U2F3RU2r3UF2U3rU2R3F'),
(18, 'RU2R2FRF3U2M3URU3r3'),
(19, 'U2rU2R3U3RU3r2U2RUR3UrU2'),
(20, 'MURUR3U3M2URU3r3U3'),
(21, 'RU2R3U3RUR3U3RU3R3U2'),
(22, 'RU2R2U3R2U3R2U2R'),
(23, 'R3U3RU3R3U2R2UR3URU2R3'),
(24, 'y3R3U2RUR3UR2U2R3U3RU3R3U'),
(25, 'y2RUR3URU3R3URU3R3URU2R3'),
(26, 'RUR3URU2R3'),
(27, 'L3U3LU3L3U2LU2'),
(28, 'RFD2L2U2BL2D2R'),
(29, 'F3LF3L2ULUL3U3LF2U3'),
(30, 'FR3FR2U3R3U3RUR3F2U3'),
(31, 'yLF2l3ULUL3UlU2F3L3U'),
(32, 'yR3F2rU3R3U3RU3r3U2FRU'),
(33, 'yRU2R3U3RU3R3r3U2RUR3UrU3'),
(34, 'y3RUR3U2F2U3r3Fr2Ur3F'),
(35, 'y2R3FRUr3Fry3R2U3R3FR3F3U'),
(36, 'y3l3U2LUL3Ux3U3RU3R3U2RU'),
(37, 'yl3U3LU3L3U2x3U2RUR3URU3'),
(38, 'yrU2R3U3RU3x3UL3ULU2L3U3'),
(39, 'y3RU2R3U3RU3x3UL3ULU2l3U'),
(40, 'y3L3U2LUL3Ux3U3RU3R3U2rU'),
(41, 'yLF3L3FLF3L3FL3U3LUL3U3L'),
(42, 'yR3FRF3R3FRF3RUR3U3RUR3U2'),
(43, 'r3U3RU3R3U2rU3r3U2RUR3UrU'),
(44, 'xRD3R3UR3UR3DRU3RU3x3'),
(45, 'F2RU3R3URUR2F3RF3U3'),
(46, 'yRDr3U3rD3R2U3R3FRF3RU'),
(47, 'U3B3R3U3RUR3U3RUBU'),
(48, 'FRUR3U3RUR3U3F3'),
(49, 'LB3U2BU2BL2B3LU2'),
(50, 'U2L3FU2F3U2F3L2FL3'),
(51, 'BULU3L3ULU3L3B3'),
(52, 'y2R3U3FR3F3RFR3F3RURU2'),
(53, 'y2r3U3RU3R3URU3R3U2rU2'),
(54, 'rU2R3U3RUR3U3RU3r3'),
(55, 'y2rU2R3U3R2r3UR3U3rU3r3'),
(56, 'RBLB3R2BUL3U3B3R'),
(57, 'RUR3U3R3LFRF3L3U2'),
(58, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `algs`
--
ALTER TABLE `algs`
  ADD PRIMARY KEY (`alg_id`);

--
-- Indexes for table `arw_view`
--
ALTER TABLE `arw_view`
  ADD PRIMARY KEY (`arw_id`);

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
  MODIFY `alg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `arw_view`
--
ALTER TABLE `arw_view`
  MODIFY `arw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `oll_view`
--
ALTER TABLE `oll_view`
  MODIFY `oll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
