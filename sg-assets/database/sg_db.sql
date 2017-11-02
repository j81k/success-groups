-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 02:17 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sg_contact_us`
--

CREATE TABLE `sg_contact_us` (
  `id` int(11) NOT NULL,
  `cnt_name` varchar(60) DEFAULT NULL,
  `cnt_email` varchar(60) DEFAULT NULL,
  `cnt_contact_no` text,
  `cnt_description` longtext,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `status` int(2) DEFAULT '1' COMMENT '0-Inactive, 1-Active, 10-Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sg_vechiles_master`
--

CREATE TABLE `sg_vechiles_master` (
  `id` int(11) NOT NULL,
  `vechile_type` varchar(60) DEFAULT NULL,
  `vechile_name` varchar(60) DEFAULT NULL,
  `vechile_slug` text,
  `vechile_fare` decimal(20,2) DEFAULT NULL COMMENT 'Rs / KM',
  `vechile_description` mediumtext,
  `status` int(2) DEFAULT '1' COMMENT '0-Unavailable, 1-Available, 10-Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sg_vechiles_master`
--

INSERT INTO `sg_vechiles_master` (`id`, `vechile_type`, `vechile_name`, `vechile_slug`, `vechile_fare`, `vechile_description`, `status`) VALUES
(1, 'Hatch Back', 'Hatch Back', 'hatch-back', '11.00', NULL, 1),
(2, 'Sedan', 'Sedan', 'sedan', '12.00', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sg_contact_us`
--
ALTER TABLE `sg_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sg_vechiles_master`
--
ALTER TABLE `sg_vechiles_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sg_contact_us`
--
ALTER TABLE `sg_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_vechiles_master`
--
ALTER TABLE `sg_vechiles_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
