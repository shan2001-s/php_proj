-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 06:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crewbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `crewid` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `nationality` text NOT NULL,
  `birthdate` text NOT NULL,
  `rank` text NOT NULL,
  `vessel_type` text NOT NULL,
  `final_school` text NOT NULL,
  `martial_status` text NOT NULL,
  `waistline` text NOT NULL,
  `uniform_size` text NOT NULL,
  `blood_type` text NOT NULL,
  `safeshoe` text NOT NULL,
  `health_status` text NOT NULL,
  `bank_info` text NOT NULL,
  `tele1` text NOT NULL,
  `tele2` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `english_level` text NOT NULL,
  `application_date` text NOT NULL,
  `passportno` text NOT NULL,
  `passportdate` text NOT NULL,
  `passportexpiredate` text NOT NULL,
  `sbookno` text NOT NULL,
  `sbookdate` text NOT NULL,
  `sbookexpire` text NOT NULL,
  `lincece` text NOT NULL,
  `lincecedate` text NOT NULL,
  `linceceexpire` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`crewid`, `firstname`, `middlename`, `lastname`, `father_name`, `mother_name`, `nationality`, `birthdate`, `rank`, `vessel_type`, `final_school`, `martial_status`, `waistline`, `uniform_size`, `blood_type`, `safeshoe`, `health_status`, `bank_info`, `tele1`, `tele2`, `address`, `city`, `english_level`, `application_date`, `passportno`, `passportdate`, `passportexpiredate`, `sbookno`, `sbookdate`, `sbookexpire`, `lincece`, `lincecedate`, `linceceexpire`, `image`) VALUES
(44, 'Moe', 'pwint', 'phyu', 'aung', 'Nwe1', 'myanmar', '2018-07-02', '4', '3', 'hpaan', 'phyu', '5', 'XXL', 'AB', '4', '3', 'xxxxxxxx456xxxxxx', 'phyu', '09424103.705', 'Thazin Street', 'Mandaly', 'beginner', '2021-12-28', '2021-12-01', '2021-12-08', '2021-12-16', '003', '2021-12-15', '2021-12-09', '2021-12-08', '2021-12-22', '2021-12-10', 'reg61af6b62e790a7.49425991.jpg'),
(48, 'zaw', 'Zaw', 'myo', 'mg', 'chan', 'myanmar', '2018-07-02', '42', '7', 'hpaan1', 'myo', '1', 'XL', 'A', '4', 'MNH', 'xxxxxxxx456xxxxxx', 'myo', '09656542411', 'Thazin Street', 'Bagan', 'beginner', '2021-12-01', 'xx2564xx', '2021-11-30', '2021-12-31', '0001', '2021-12-11', '2021-12-09', '4', '2021-12-08', '2021-12-24', 'reg61af6ccb6e6f42.95235546.jpg'),
(50, 'Khing', 'Yee', 'Aye', 'Zaw Zaw', 'Yee Yee', 'myanmar', '2018-07-02', 'Rank 1', '14', 'hpaan', 'Aye', '60', 'XXL', 'O', '46', 'MNH1', 'xxxxxxxx456xxxxxx1', 'Aye', '0965654241', 'Thazin Street', 'Mandaly', 'beginner', '2021-12-30', 'xx2564xx1', '2021-12-16', '2021-12-18', '004', '2021-12-07', '2021-12-23', '545', '2021-12-21', '2021-12-21', 'reg618d007c7732a7.14041523.jpg'),
(51, 'Kyaw', 'Aung', 'Aung', 'aung', 'Myo', 'myanmar', '2018-07-02', '45', '12', 'hpaan', '09424103.705', '12', 'S', 'B', '31', 'MNH', 'xxxxxxxx456xxxxxx1', 'Aung', '09656542411', 'Thazin Street', 'Bago', 'beginner', '2021-12-15', 'xx2564xx', '2021-12-11', '2021-12-24', '00045', '2021-12-31', '2021-12-31', '41', '2021-12-08', '2021-12-22', 'reg61b2dbb6bb8351.49066380.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `crew_certificate`
--

CREATE TABLE `crew_certificate` (
  `id` int(11) NOT NULL,
  `crew_id` text NOT NULL,
  `certificate_id` text NOT NULL,
  `issue` text NOT NULL,
  `number` int(11) NOT NULL,
  `expired` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crew_certificate`
--

INSERT INTO `crew_certificate` (`id`, `crew_id`, `certificate_id`, `issue`, `number`, `expired`) VALUES
(4, '13', 'ARPA SIMULATOP', '2021-12-07', 3, '2021-12-13'),
(5, '13', 'GMDSS GOC - FLAG STATE', '2021-12-28', 6, '2021-12-29'),
(6, '13', 'BASIC SAFETY TRAININE(BST)', '2021-12-06', 7, '2021-12-08'),
(7, '13', 'RADAR OBSERVER, PLOTTINE & SIMULATOR --', '2021-12-30', 8, '2021-12-28'),
(8, '21', 'ARPA SIMULATOP', '2021-12-08', 5, '2021-12-15'),
(9, '21', 'RADAR OBSERVER, PLOTTINE & SIMULATOR --', '', 4, ''),
(10, '22', 'ARPA SIMULATOP', '2021-12-14', 2, '2021-12-15'),
(11, '22', 'ARPA SIMULATOP', '2021-12-21', 3, '2021-12-25'),
(12, '22', 'GMDSS GOC - FLAG STATE', '2021-12-20', 4, '2021-12-31'),
(13, '22', 'PROFICIENCY IN SURVIVAL CRAFT & RESCUE BOATS', '2022-01-09', 22, '2021-12-02'),
(14, '44', 'GMDSS ENDORSEMENT - GOC', '2021-12-01', 2, '2021-12-07'),
(15, '44', 'PROFICIENCY IN SURVIVAL CRAFT & RESCUE BOATS', '2021-12-29', 3, '2022-01-05'),
(16, '44', 'ARPA SIMULATOP', '2021-12-29', 6, '2021-12-22'),
(17, '50', 'GMDSS ENDORSEMENT - GOC', '2021-11-30', 12, '2021-12-17'),
(18, '50', 'PROFICIENCY IN SURVIVAL CRAFT & RESCUE BOATS', '2021-12-07', 12, '2021-12-31'),
(19, '50', 'RADAR OBSERVER, PLOTTINE & SIMULATOR --', '2021-12-06', 12, '2021-12-31'),
(20, '50', 'GMDSS GOC - FLAG STATE', '2021-11-29', 3, '2021-12-30'),
(21, '50', 'ARPA SIMULATOP', '2021-12-13', 5, '2021-12-24'),
(22, '50', 'PROFICIENCY IN SURVIVAL CRAFT & RESCUE BOATS', '2021-11-29', 6, '2021-12-31'),
(23, '50', 'RADAR OBSERVER, PLOTTINE & SIMULATOR --', '2021-12-13', 6, '2021-12-31'),
(24, '50', 'GMDSS ENDORSEMENT - GOC', '2021-12-12', 9, '2021-12-29'),
(25, '51', 'GMDSS GOC - FLAG STATE', '2021-11-29', 3, '2021-12-13'),
(29, '48', 'GMDSS ENDORSEMENT - GOC', '2021-12-07', 3, '2021-12-28'),
(30, '48', 'GMDSS GOC - FLAG STATE', '2021-12-06', 3, '2021-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `company_name` text NOT NULL,
  `ship_name` text NOT NULL,
  `rank_service` text NOT NULL,
  `vessel_service_type` text NOT NULL,
  `crew_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `company_name`, `ship_name`, `rank_service`, `vessel_service_type`, `crew_id`) VALUES
(23, 'ZMK', 'w-4', 'rank-4', 'eee', '50'),
(24, 'OPM', 'w-5', 'rank-5', 'kkk', '50'),
(25, 'AyE', 'w-6', 'rank-6', 'LLL', '50'),
(26, 'SUPER', 'w-7', 'rank-7', 'hhh', '50'),
(27, 'KBZ', 'w-1', 'rank-1', 'ddd', '48'),
(28, 'AYA', 'w-2', 'rank-2', 'ggg', '48'),
(29, 'CB', 'w-3', 'rank-3', 'aaa', '48'),
(32, 'CB', 'ship-1', 'rank-1', 'ddd', '51'),
(33, 'AYA', 'ship-2', 'rank-4', 'eee', '51'),
(34, 'KBZ', 'ship-3', 'rank-1', 'LLL', '51'),
(35, 'MAX', 'ship-4', 'tanker', 'MMM', '51'),
(36, 'q', 'ship-5', 'www', 'kkk', '51'),
(37, 'Aye', '888', 'rank-1', 'ddd', '44'),
(38, 'CB', 'w-4', 'rank-4', 'MMM', '44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'sshan02001@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `vessel`
--

CREATE TABLE `vessel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vessel`
--

INSERT INTO `vessel` (`id`, `name`) VALUES
(1, 'aaa'),
(2, 'bbb'),
(3, 'ddd'),
(4, 'eee'),
(5, 'fff'),
(6, 'ggg'),
(7, 'hhh'),
(9, 'iii'),
(10, 'jjj'),
(11, 'kkk'),
(12, 'LLL'),
(13, 'lll'),
(14, 'MMM'),
(15, 'NNN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`crewid`);

--
-- Indexes for table `crew_certificate`
--
ALTER TABLE `crew_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel`
--
ALTER TABLE `vessel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crew`
--
ALTER TABLE `crew`
  MODIFY `crewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `crew_certificate`
--
ALTER TABLE `crew_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `vessel`
--
ALTER TABLE `vessel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
