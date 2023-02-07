-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 07:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eirish_payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `rate` double NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `birth_date` date NOT NULL,
  `civil_status` varchar(45) NOT NULL,
  `emergency_name` varchar(45) NOT NULL,
  `emergency_contact` varchar(45) NOT NULL,
  `job_id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `emp_id`, `name`, `address`, `position`, `rate`, `phonenumber`, `sex`, `birth_date`, `civil_status`, `emergency_name`, `emergency_contact`, `job_id`, `salary_id`) VALUES
(54, '', 'Joseph Mercado', 'Pampanga', 'Mason', 350, '', '', '0000-00-00', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `archive_attendancee`
--

CREATE TABLE `archive_attendancee` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dateTime` varchar(50) NOT NULL,
  `logType` varchar(45) NOT NULL,
  `dateTime1` varchar(50) NOT NULL,
  `logTypeout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendancee`
--

CREATE TABLE `attendancee` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dateTime` varchar(50) NOT NULL,
  `logType` varchar(45) NOT NULL,
  `dateTime1` varchar(50) NOT NULL,
  `logTypeout` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendancee`
--

INSERT INTO `attendancee` (`id`, `emp_id`, `name`, `dateTime`, `logType`, `dateTime1`, `logTypeout`) VALUES
(36, 0, 'Julianne Santos', '17-11-2022 21:39:17', 'IN', '', ''),
(37, 0, 'Roi Albert B. Mutuc', '17-11-2022 21:39:17', 'IN', '', ''),
(38, 0, 'Leo Gonsales', '17-11-2022 21:39:17', 'IN', '', ''),
(39, 0, 'John Ellery Manlapas', '17-11-2022 21:39:17', 'IN', '', ''),
(40, 40, 'Lebron James', '17-11-2022 21:39:17', 'IN', '', ''),
(41, 41, 'Aren Gerard De Jesus', '17-11-2022 21:39:17', 'OUT', '', ''),
(42, 42, 'Kareem Abdul Jabbar', '17-11-2022 21:39:17', 'OUT', '', ''),
(43, 43, 'Joseph Mercado', '17-11-2022 21:39:17', 'OUT', '', ''),
(44, 44, 'Wally Santos', '17-11-2022 21:39:17', 'OUT', '', ''),
(45, 45, 'Rea Benito', '17-11-2022 21:39:17', 'OUT', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `rate` double NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `birth_date` date NOT NULL,
  `civil_status` varchar(45) NOT NULL,
  `emergency_name` varchar(45) NOT NULL,
  `emergency_contact` varchar(45) NOT NULL,
  `job_id` int(11) NOT NULL,
  `salary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `name`, `address`, `position`, `rate`, `phonenumber`, `sex`, `birth_date`, `civil_status`, `emergency_name`, `emergency_contact`, `job_id`, `salary_id`) VALUES
(51, '', 'Rea Benito', 'Bulacan', 'Mason', 350, '', '', '0000-00-00', '', '', '', 0, 0),
(52, '', 'Aren Gerard De Jesus', 'Pampanga', 'Mason', 350, '', '', '0000-00-00', '', '', '', 0, 0),
(54, '', 'ye', 'apalit', 'kargador', 500, '09473623409', 'Male', '0000-00-00', 'Single', 'Mother', '09', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `rate` double NOT NULL,
  `overtime` varchar(50) NOT NULL,
  `gross_salary` varchar(100) NOT NULL,
  `deductions` varchar(100) NOT NULL,
  `net_salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `emp_id`, `name`, `days`, `rate`, `overtime`, `gross_salary`, `deductions`, `net_salary`) VALUES
(36, 36, 'Julianne Santos', '10', 350, '150', '20000', '100', '5000'),
(37, 37, 'Roi Albert B. Mutuc', '10', 500, '150', '20000', '100', '5000'),
(38, 38, 'Leo Gonsales', '5', 2000, '0', '50000', '100', '60,000'),
(39, 39, 'John Ellery Manlapas', '10', 350, '150', '20000', '100', '5000'),
(40, 40, 'Lebron James', '10', 350, '150', '20000', '100', '5000'),
(41, 41, 'Aren Gerard De Jesus', '10', 350, '150', '20000', '100', '5000'),
(42, 42, 'Kareem Abdul Jabbar', '7', 500, '150', '20000', '100', '5000'),
(43, 43, 'Joseph Mercado', '10', 350, '150', '20000', '100', '5000'),
(44, 44, 'Wally Santos', '10', 350, '150', '20000', '100', '5000'),
(45, 45, 'Rea Benito', '10', 350, '150', '20000', '100', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(27, 'jhjb', 'saitamabald23@gmail.com', '$2y$10$mYwY10iABGLcuzAnURaxA.6l4HGOUrMP4a/ZHeeB0d2pQrtsr374.', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive_attendancee`
--
ALTER TABLE `archive_attendancee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendancee`
--
ALTER TABLE `attendancee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `archive_attendancee`
--
ALTER TABLE `archive_attendancee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `attendancee`
--
ALTER TABLE `attendancee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
