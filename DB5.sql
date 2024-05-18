-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 02:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign in sync`
--

-- --------------------------------------------------------

--
-- Table structure for table `bosssitting`
--

CREATE TABLE `bosssitting` (
  `id` int(11) NOT NULL,
  `idPrive` int(11) NOT NULL,
  `maxAbesence` int(20) NOT NULL,
  `maxLatence` int(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `payHour` int(20) NOT NULL,
  `shiftHour` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bosssitting`
--

INSERT INTO `bosssitting` (`id`, `idPrive`, `maxAbesence`, `maxLatence`, `salary`, `payHour`, `shiftHour`) VALUES
(1, 1, 12, 11, 70, 11, 11),
(2, 2, 12, 11, 10, 11, 11),
(3, 3, 3, 3, 3, 3, 3),
(8, 4, 12, 11, 12, 11, 61);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `passsword` varchar(200) NOT NULL,
  `salary` int(40) DEFAULT NULL,
  `age` int(7) NOT NULL,
  `login_date` date DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `idPrive` int(11) NOT NULL,
  `imgname` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `username`, `address`, `email`, `gender`, `phone`, `passsword`, `salary`, `age`, `login_date`, `token`, `idPrive`, `imgname`) VALUES
(1, 'nada', 'eldabour', 'nada eldabour', 'kjion ibob 89bui', 'nada@gimail.com', 1, '2001243254563434', 'nada123321', 200000, 20050502, NULL, NULL, 1, '99440887_557541408298448_2196168609833680896_n1715774275.jpg'),
(2, 'nada', 'eldabour', 'nada eldabour', 'knio no', 'nn15056691@gmail.com', 1, '04524542452', 'nada123', 200000, 20050502, '2024-03-12', NULL, 4, NULL),
(3, 'nada', 'eldabour1', 'nada eldabour1', 'knionob[0[noib', 'nn15056962@gmail.com', 1, '7687567468', '1234', 200000, 20050502, '2024-03-12', NULL, 1, NULL),
(4, 'nada', 'nada', NULL, NULL, 'nn15056963@gmail.com', 1, NULL, '123', NULL, 19, NULL, NULL, 4, NULL),
(5, 'nada', 'nada', NULL, NULL, 'nn15056964@gmail.com', 1, NULL, '', NULL, 19, NULL, NULL, 1, NULL),
(6, 'nada', 'nada', NULL, NULL, 'nn15056965@gmail.com', 1, NULL, '', NULL, 19, NULL, NULL, 1, NULL),
(7, 'nada', 'nada', NULL, NULL, 'nn15056967@gmail.com', 1, NULL, '', NULL, 19, NULL, NULL, 1, NULL),
(8, 'nada', 'nada', NULL, NULL, 'nn150569610@gmail.com', 1, NULL, '123', NULL, 18, NULL, NULL, 1, NULL),
(9, 'nada', 'eldabour', NULL, NULL, 'nn150569611@gmail.com', 1, NULL, '123', NULL, 18, NULL, NULL, 1, NULL),
(10, 'nada', 'nada', NULL, NULL, 'nn150569612@gmail.com', 1, NULL, '123', NULL, 18, NULL, NULL, 1, NULL),
(11, 'nada', 'nada', NULL, NULL, 'nn150569613@gmail.com', 1, NULL, '123', NULL, 18, NULL, NULL, 1, NULL),
(12, 'hoda', 'hoda', NULL, NULL, 'nn150569614@gmail.com', 1, NULL, '123', NULL, 18, NULL, NULL, 1, NULL),
(13, 'hoda', 'hoda', NULL, NULL, 'nn150569615@gmail.com', 1, NULL, '1234', NULL, 44, NULL, NULL, 1, NULL),
(14, 'hoda', 'hoda', NULL, NULL, 'nn150569621@gmail.com', 1, NULL, '1234', NULL, 44, NULL, NULL, 1, NULL),
(15, 'hoda', 'hoda', NULL, NULL, 'nn150569622@gmail.com', 1, NULL, '1234', NULL, 44, NULL, NULL, 1, NULL),
(16, 'hoda', 'hoda', NULL, NULL, 'nn150569623@gmail.com', 1, NULL, '1234', NULL, 44, NULL, NULL, 1, NULL),
(17, 'hoda', 'hoda', NULL, NULL, 'nn150569624@gmail.com', 1, NULL, '1234', NULL, 44, NULL, NULL, 1, NULL),
(18, 'layla', 'layla', NULL, NULL, 'nn1505696@gmail.com', 1, NULL, '1234', NULL, 44, NULL, NULL, 1, NULL),
(19, 'marym', 'marym', NULL, NULL, 'nn1505696@gmail.com', 1, NULL, '123', NULL, 20, NULL, NULL, 1, NULL),
(20, 'khaled', 'hamam', NULL, NULL, 'demo@example.com', 0, NULL, '123', NULL, 19, NULL, 'd5d1c217a5616117ca7a623525b3db21bdd94682e75f5770bab7d46fabacc999232e3bbbab55636d565fd209ee153a180171', 1, NULL),
(21, 'khaled', 'hamam', NULL, NULL, 'khaledhamam920@gmail.com', 0, NULL, '1234', NULL, 22, NULL, 'a26b896f06f28000311b1ee9ede6bf5327505a72da95a36579e5fb117977bd89ae4e308f590f7636f941187904dee4868307', 4, NULL),
(22, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 1, NULL, 'Nada!23321', NULL, 30, NULL, NULL, 4, NULL),
(23, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 1, NULL, 'Nada!23321', NULL, 30, NULL, NULL, 4, NULL),
(24, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 1, NULL, 'N!nada123321', NULL, 30, NULL, NULL, 2, NULL),
(25, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 0, NULL, 'Nada!23321', NULL, 19, NULL, NULL, 4, NULL),
(26, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 0, NULL, 'Nada!23321', NULL, 19, NULL, NULL, 4, NULL),
(27, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 0, NULL, 'Nada!23321', NULL, 19, NULL, NULL, 4, NULL),
(28, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 0, NULL, 'Nada!23321', NULL, 19, NULL, NULL, 4, NULL),
(29, 'boss', 'test1', NULL, NULL, 'nn123321@gmail.com', 1, NULL, 'N!nada123321', NULL, 20, NULL, NULL, 4, NULL),
(30, 'nada', 'eldabour', NULL, NULL, 'nn1505696@gmail.com', 1, NULL, 'N!nada123321', NULL, 21, NULL, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `dayy` date NOT NULL,
  `timee` time NOT NULL,
  `id_employee` int(11) NOT NULL,
  `Eout` time DEFAULT NULL,
  `daysession` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `dayy`, `timee`, `id_employee`, `Eout`, `daysession`) VALUES
(1, '2024-05-13', '13:58:39', 1, '01:51:07', 6),
(2, '2024-05-14', '12:57:21', 2, NULL, 6),
(3, '2024-05-14', '13:48:41', 2, NULL, 6),
(4, '2024-05-14', '13:58:06', 1, '01:51:07', 6),
(5, '2024-05-14', '23:10:37', 1, '01:51:07', 6),
(15, '2024-05-15', '02:28:32', 1, '02:28:49', 1),
(16, '2024-05-15', '02:29:16', 1, '02:29:35', 2),
(17, '2024-05-15', '02:31:04', 1, '02:31:34', 3),
(18, '2024-05-15', '02:43:34', 1, NULL, 0),
(19, '2024-05-15', '09:32:50', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` int(11) NOT NULL,
  `privileges` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `privileges`) VALUES
(1, 'employee'),
(2, 'supervisor'),
(3, 'admin'),
(4, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(20) NOT NULL,
  `emp_id` int(20) NOT NULL,
  `shiftname` varchar(200) NOT NULL,
  `shift_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(20) NOT NULL,
  `task_period` datetime NOT NULL,
  `task_date` date NOT NULL,
  `task_prio` datetime NOT NULL,
  `id_emp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_period`, `task_date`, `task_prio`, `id_emp`) VALUES
(1, '2024-03-22 08:16:51', '2024-03-20', '2024-03-22 08:16:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testtask`
--

CREATE TABLE `testtask` (
  `id` int(20) NOT NULL,
  `date1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `testtask`
--

INSERT INTO `testtask` (`id`, `date1`) VALUES
(1, '2024-03-29'),
(2, '0000-00-00'),
(3, '2024-05-21'),
(4, '0000-00-00'),
(5, '0000-00-00'),
(6, '2024-03-22'),
(7, '2024-03-22'),
(8, '2024-03-22'),
(9, '2024-03-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bosssitting`
--
ALTER TABLE `bosssitting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPrive` (`idPrive`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPrive` (`idPrive`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employee` (`id_employee`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testtask`
--
ALTER TABLE `testtask`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bosssitting`
--
ALTER TABLE `bosssitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testtask`
--
ALTER TABLE `testtask`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bosssitting`
--
ALTER TABLE `bosssitting`
  ADD CONSTRAINT `bosssitting_ibfk_1` FOREIGN KEY (`idPrive`) REFERENCES `privileges` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`idPrive`) REFERENCES `privileges` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
