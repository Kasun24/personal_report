-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 07:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `agr_sml` int(11) NOT NULL,
  `agr_comp` varchar(50) DEFAULT NULL,
  `agr_country` varchar(20) DEFAULT NULL,
  `agr_job` varchar(50) DEFAULT NULL,
  `agr_sal` varchar(20) DEFAULT NULL,
  `agr_allaw` varchar(20) DEFAULT NULL,
  `agr_ot` varchar(20) DEFAULT NULL,
  `agr_food` varchar(20) DEFAULT NULL,
  `agr_acco` varchar(50) DEFAULT NULL,
  `agr_signD` varchar(20) DEFAULT NULL,
  `agr_agrDoc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `area_police`
--

CREATE TABLE `area_police` (
  `apSMLNo` int(11) DEFAULT NULL,
  `apName` varchar(100) DEFAULT NULL,
  `apDID` varchar(50) DEFAULT NULL,
  `apProb` longtext DEFAULT NULL,
  `apRecD` varchar(50) DEFAULT NULL,
  `apDoc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `head_police`
--

CREATE TABLE `head_police` (
  `hqSMLNo` int(11) DEFAULT NULL,
  `hqApplyD` varchar(50) DEFAULT NULL,
  `hqRefNo` varchar(50) DEFAULT NULL,
  `hqProb` longtext DEFAULT NULL,
  `hqRecD` varchar(50) DEFAULT NULL,
  `hqDoc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `med_sml` int(11) DEFAULT NULL,
  `med_issD` varchar(20) DEFAULT NULL,
  `med_prob` longtext DEFAULT NULL,
  `med_pasGar` varchar(20) DEFAULT NULL,
  `med_pasAtt` longtext DEFAULT NULL,
  `med_comGar` varchar(20) DEFAULT NULL,
  `med_comAtt` longtext DEFAULT NULL,
  `med_recD` varchar(20) DEFAULT NULL,
  `med_doc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `uid` int(11) NOT NULL,
  `prefNo` int(20) NOT NULL,
  `post1` varchar(50) DEFAULT NULL,
  `subdirect` varchar(20) DEFAULT NULL,
  `subcod` varchar(20) DEFAULT NULL,
  `userImg` longtext DEFAULT NULL,
  `surName` varchar(200) DEFAULT NULL,
  `otherName` varchar(200) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `country` varchar(30) NOT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `religon` varchar(50) DEFAULT NULL,
  `cStatus` varchar(20) DEFAULT NULL,
  `addr` longtext DEFAULT NULL,
  `local1` varchar(50) DEFAULT NULL,
  `local2` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `pasImg1` longtext DEFAULT NULL,
  `pasImg2` longtext DEFAULT NULL,
  `pasNo` varchar(20) DEFAULT NULL,
  `pasPob` varchar(200) DEFAULT NULL,
  `pasDoi` varchar(50) DEFAULT NULL,
  `pasDoe` varchar(50) DEFAULT NULL,
  `pasPoi` varchar(200) DEFAULT NULL,
  `eduQuli` varchar(200) DEFAULT NULL,
  `profQuli` varchar(200) DEFAULT NULL,
  `profQuliImg` longtext DEFAULT NULL,
  `languages` varchar(200) DEFAULT NULL,
  `dlNo` varchar(50) DEFAULT NULL,
  `dlImg1` longtext DEFAULT NULL,
  `dlImg2` longtext DEFAULT NULL,
  `dlDoi` varchar(50) DEFAULT NULL,
  `dlType` varchar(50) DEFAULT NULL,
  `complexion` varchar(200) DEFAULT NULL,
  `height` varchar(20) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `noofChild` varchar(20) DEFAULT NULL,
  `childAges` varchar(50) DEFAULT NULL,
  `fatherName` varchar(200) DEFAULT NULL,
  `motherName` varchar(200) DEFAULT NULL,
  `spouseName` varchar(200) DEFAULT NULL,
  `com1From` varchar(20) DEFAULT NULL,
  `com1To` varchar(20) DEFAULT NULL,
  `com1Place` varchar(50) DEFAULT NULL,
  `com1posi` varchar(50) DEFAULT NULL,
  `com2From` varchar(20) DEFAULT NULL,
  `com2To` varchar(20) DEFAULT NULL,
  `com2Place` varchar(50) DEFAULT NULL,
  `com2posi` varchar(50) DEFAULT NULL,
  `com3From` varchar(20) DEFAULT NULL,
  `com3To` varchar(20) DEFAULT NULL,
  `com3Place` varchar(50) DEFAULT NULL,
  `com3posi` varchar(50) DEFAULT NULL,
  `com4From` varchar(20) DEFAULT NULL,
  `com4To` varchar(20) DEFAULT NULL,
  `com4Place` varchar(50) DEFAULT NULL,
  `com4posi` varchar(50) DEFAULT NULL,
  `lstPlace` varchar(50) DEFAULT NULL,
  `returned` varchar(50) DEFAULT NULL,
  `gut1Name` varchar(200) DEFAULT NULL,
  `gut1Addr` longtext DEFAULT NULL,
  `gut1Cont` varchar(20) DEFAULT NULL,
  `gut1Id` varchar(20) DEFAULT NULL,
  `gut1Img1` longtext DEFAULT NULL,
  `gut1Img2` longtext DEFAULT NULL,
  `gut1gid1` longtext DEFAULT NULL,
  `gut1gid2` longtext DEFAULT NULL,
  `gut2Name` varchar(200) DEFAULT NULL,
  `gut2Addr` longtext DEFAULT NULL,
  `gut2Cont` varchar(20) DEFAULT NULL,
  `gut2Id` varchar(20) DEFAULT NULL,
  `gut2Img1` longtext DEFAULT NULL,
  `gut2Img2` longtext DEFAULT NULL,
  `gut2pid1` longtext DEFAULT NULL,
  `gut2pid2` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_agent`
--

CREATE TABLE `sub_agent` (
  `sub_sml` int(11) DEFAULT NULL,
  `sub_code` varchar(20) DEFAULT NULL,
  `sub_name` varchar(50) DEFAULT NULL,
  `sub_addr` longtext DEFAULT NULL,
  `sub_cont1` varchar(20) DEFAULT NULL,
  `sub_cont2` varchar(20) DEFAULT NULL,
  `sub_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visa`
--

CREATE TABLE `visa` (
  `vis_sml` int(11) DEFAULT NULL,
  `vis_issD` varchar(20) DEFAULT NULL,
  `vis_type` varchar(50) DEFAULT NULL,
  `vis_cntr` varchar(20) DEFAULT NULL,
  `vis_exD` varchar(20) DEFAULT NULL,
  `vis_doc` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `work_permite`
--

CREATE TABLE `work_permite` (
  `wor_sml` int(11) DEFAULT NULL,
  `wor_recD` varchar(20) DEFAULT NULL,
  `wor_perNo` varchar(20) DEFAULT NULL,
  `wor_type` varchar(50) DEFAULT NULL,
  `wor_valD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
