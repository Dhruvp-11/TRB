-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 12:41 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(4) NOT NULL,
  `sender` char(20) NOT NULL,
  `receiver` char(20) NOT NULL,
  `balance` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'sweta', 'kush', 500, '2021-02-11 01:00:00'),
(2, 'mann', 'milind', 2000, '2021-02-11 02:13:23'),
(3, 'Kush Patel', 'Hari vyas', 400, '2021-02-11 16:42:25'),
(4, 'Hari vyas', 'Kush Patel', 400, '2021-02-11 16:43:23'),
(5, 'Kush Patel', 'Hari vyas', 400, '2021-02-11 16:45:09'),
(6, 'Kush Patel', 'Neel Patel', 100, '2021-02-12 07:12:41'),
(7, 'Kush Patel', 'Sweta Patel', 200, '2021-02-13 10:49:51'),
(8, 'Kush Patel', 'Sweta Patel', 200, '2021-02-13 10:54:04'),
(9, 'Kush Patel', 'Sweta Patel', 200, '2021-02-13 11:03:50'),
(10, 'Sweta Patel', 'Hari vyas', 200, '2021-02-13 11:04:50'),
(11, 'Kush Patel', 'Milind Gandhi', 100, '2021-02-13 11:05:31'),
(12, 'Neel Patel', 'Sweta Patel', 100, '2021-02-16 00:21:25'),
(13, 'Kush Patel', 'Neel Patel', 200, '2021-02-16 22:24:08'),
(14, 'Kush Patel', 'Rutvik Joshi', 200, '2021-02-16 22:28:12'),
(15, 'Kush Patel', 'Neel Patel', 100, '2021-02-16 22:29:47'),
(16, 'Kush Patel', 'Jayati Patel', 100, '2021-02-16 22:30:11'),
(17, 'Kush Patel', 'Dhruv Patel', 100, '2021-02-16 22:31:19'),
(18, 'Kush Patel', 'Jayati Patel', 200, '2021-02-17 11:43:37'),
(19, 'Kush Patel', 'Dhruv Patel', 100, '2021-02-17 15:14:37'),
(20, 'Neel Patel', 'Kush Patel', 100, '2021-02-17 15:15:35'),
(21, 'Kush Patel', 'Hari vyas', 100, '2021-02-17 15:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL,
  `pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `balance`, `pin`) VALUES
(1, 'Kush Patel', 'kushp123@gmail.com', 53200, 1211),
(2, 'Sweta Patel', 'swetapatel@gmail.com', 90500, 929),
(3, 'Jayati Patel', 'mitadayani@gmail.com', 50300, 1111),
(4, 'Dhruv Patel', 'dhruv4503@gmail.com', 40200, 123),
(5, 'Neel Patel', 'neelpatel@gmail.com', 10200, 0),
(6, 'Rutvik Joshi', 'rutvikj56@gmail.com', 15200, 2222),
(7, 'Krisha Patel', 'krisha11@gmail.com', 9000, 3333),
(8, 'Milind Gandhi', 'milind122@gmail.com', 1600, 6666),
(9, 'Vishwa Patel', 'Vish889@gmail.com', 6000, 8778),
(10, 'Hari vyas', 'harivyas67@gmail.com', 2100, 5555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
