-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 07:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Place` varchar(250) NOT NULL,
  `Time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `Name`, `Place`, `Time`) VALUES
(5, 'Anshul', 'Malad', '2017/04/19'),
(6, 'Anshul', 'Malad', '2017/04/20'),
(7, 'Ravi', 'Andheri', '2017/04/20'),
(8, 'Giridhar', 'Bandra', '2017/04/20'),
(9, 'Ravi', 'Borivali', '2017/04/20'),
(10, 'Sumit', 'Virar', '2017/04/21'),
(11, 'Ravi', 'Andheri', '2017/04/20');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Place` varchar(250) NOT NULL,
  `Type` varchar(250) NOT NULL,
  `Price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `Name`, `Place`, `Type`, `Price`, `image`) VALUES
(1, 'Maruti Swift', 'Goregaon', 'Hatchback', '500', 'swift.jpg'),
(2, 'Hyundai i20', 'Goregaon', 'Hatchback', '800', 'i20.jpg'),
(3, 'Mahindra XUV500', 'Borivali', 'SUV', '1200', 'xuv.jpg'),
(4, 'Mercedes Benz', 'Andheri', 'Luxury', '2000', 'mercedes.jpg'),
(5, 'Hyundai i20', 'Bandra', 'Hatchback', '1200', 'i20.jpg'),
(6, 'BMW', 'Churchgate', 'Luxury', '2500', 'bmw.jpg'),
(7, 'Rangerover', 'Dadar', 'Luxury', '2500', 'rangerover.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
