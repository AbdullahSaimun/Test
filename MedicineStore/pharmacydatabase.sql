-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 03:15 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `name`, `email`, `password`) VALUES
(7, 'kamal', 'k@gmail.com', '2475c20d9e9a1aaee80dcbc4e6316157'),
(8, 'saimun', 'abdullahsaimun@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'ewe', 'we@gmail.com', '4382daaece802e7d788053002d0aaee0'),
(10, 'ewe', 'we@gmail.com', '4382daaece802e7d788053002d0aaee0'),
(11, 'Joni', 'j@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'saju', 's@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(14, 'sakib', 'sa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'Menan', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'Menan', 'menan@hdh.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Menan', 'menan@hdh.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'salman', 'sal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'kamal', 'kl@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'Jony', 'jony@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(100) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `bookCompany` varchar(100) NOT NULL,
  `unitPrice` int(100) NOT NULL,
  `quantiy` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customerlog`
--

CREATE TABLE `customerlog` (
  `id` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerlog`
--

INSERT INTO `customerlog` (`id`, `cname`, `cemail`, `password`) VALUES
(1, 'Rahim', 'r@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'kam', 'kk@gmail.com', 'abdbeb4d8dbe30df8430a8394b7218ef'),
(3, 'fakhrul', 'fa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(100) NOT NULL,
  `devName` varchar(100) NOT NULL,
  `devCompany` varchar(100) NOT NULL,
  `unitPrice` int(100) NOT NULL,
  `quantiy` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(100) NOT NULL,
  `medName` varchar(100) NOT NULL,
  `medCompany` varchar(100) NOT NULL,
  `unitPrice` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medName`, `medCompany`, `unitPrice`, `quantity`) VALUES
(2, 'Ace', 'Square', 2, 88),
(3, 'Napa', 'Beximco', 4, 207),
(9, 'Seclo', 'Square', 5, 75),
(11, 'Vita', 'Agro', 12, 222),
(15, 'Antor', 'df', 22, 20),
(18, 'shihab', 'sas', 12, 21),
(19, 'jawad', 'dad', 100, 1),
(20, 'ant', 'sd', 123, 123),
(22, 'sinamin', 'ibn sina', 2, 110),
(23, 'Aletrol', 'square', 3, 100),
(24, 'Pepsodent', 'uniliver', 35, 30),
(26, 'hello', 'we', 11, 1),
(27, 'gillete', 'p&g', 120, 28),
(28, 'Pevision', 'xyzq', 60, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerlog`
--
ALTER TABLE `customerlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerlog`
--
ALTER TABLE `customerlog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
