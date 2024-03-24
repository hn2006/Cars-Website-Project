-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2022 at 06:39 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admi_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `email_id` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

DROP TABLE IF EXISTS `dealer`;
CREATE TABLE IF NOT EXISTS `dealer` (
  `dealer_id` int NOT NULL,
  `manf_id` int NOT NULL,
  `location` int NOT NULL,
  PRIMARY KEY (`dealer_id`),
  KEY `manf_id` (`manf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `manufacturer_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `estd_year` int NOT NULL,
  `dealer_id` int NOT NULL,
  `veh_id` int NOT NULL,
  PRIMARY KEY (`manufacturer_id`),
  KEY `veh_id` (`veh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `veh_id` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `range` varchar(100) DEFAULT NULL,
  `battery` varchar(100) NOT NULL,
  `accel_time` varchar(100) NOT NULL,
  `img_link` text NOT NULL,
  `intl_price` int NOT NULL,
  `manf_id` int NOT NULL,
  `top_speed` int NOT NULL,
  PRIMARY KEY (`veh_id`),
  KEY `manf_id` (`manf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 


CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`name`,`email`,`message`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 


--
-- Constraints for dumped tables
--

--
-- Constraints for table `dealer`
--
ALTER TABLE `dealer`
  ADD CONSTRAINT `dealer_ibfk_1` FOREIGN KEY (`manf_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD CONSTRAINT `manufacturer_ibfk_1` FOREIGN KEY (`veh_id`) REFERENCES `vehicle` (`veh_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`manf_id`) REFERENCES `manufacturer` (`manufacturer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
