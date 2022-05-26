-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 05:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm_bankingservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `name` text NOT NULL,
  `accountno` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `amountofmoney` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`name`, `accountno`, `password`, `amountofmoney`) VALUES
('mahmoud abdelrahman', 112233, '125m7', 100000),
('yahia adel', 123456, '123y6', 20000),
('karima mahmoud', 234561, '235k1', 10000),
('aya ali', 345612, '345a2', 12000),
('maher melad', 445566, '440m5', 50000),
('ayman soltan', 778899, '778a9', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `opname` text NOT NULL,
  `opserial` int(11) NOT NULL,
  `opdate` date NOT NULL,
  `optime` time NOT NULL,
  `opamount` double NOT NULL,
  `accountno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`opname`, `opserial`, `opdate`, `optime`, `opamount`, `accountno`) VALUES
('add', 80, '2016-10-12', '12:10:00', 3000, 112233),
('withdraw', 81, '2017-01-10', '22:14:00', 10000, 112233),
('add', 82, '2017-04-20', '15:22:00', 12000, 112233),
('withdraw', 83, '2017-12-15', '10:23:00', 5000, 112233),
('add', 84, '2018-05-16', '14:12:00', 6000, 112233),
('withdraw', 85, '2017-05-10', '02:14:00', 6000, 445566),
('add', 86, '2017-12-19', '05:33:00', 10000, 445566),
('withdraw', 87, '2018-04-05', '20:40:00', 4000, 445566),
('add', 88, '2018-12-13', '21:05:00', 5000, 445566),
('withdraw', 89, '2017-10-10', '20:20:00', 5000, 778899),
('add', 90, '2018-08-05', '20:40:00', 4000, 778899),
('withdraw', 91, '2018-11-04', '15:33:00', 10000, 778899),
('add', 92, '2018-10-11', '18:20:00', 10000, 123456),
('withdraw', 93, '2018-12-10', '19:30:00', 5000, 123456),
('add', 94, '2019-01-12', '05:40:00', 2000, 123456),
('withdraw', 95, '2018-12-20', '10:12:00', 2000, 234561),
('add', 96, '2019-02-12', '20:13:00', 3000, 234561),
('add', 97, '2018-08-10', '11:12:00', 2000, 345612),
('withdraw', 98, '2018-10-11', '04:33:00', 4000, 345612),
('withdraw', 99, '2019-03-10', '08:11:00', 3000, 345612);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`accountno`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`opserial`),
  ADD KEY `accountno` (`accountno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `opserial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`accountno`) REFERENCES `clients` (`accountno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
