-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 07:54 PM
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
-- Table structure for table `sg_attachments`
--

CREATE TABLE `sg_attachments` (
  `id` int(11) NOT NULL,
  `ref_id` text,
  `customer_id` int(11) DEFAULT NULL,
  `customer_details_id` int(11) DEFAULT NULL,
  `vechile_id` int(11) DEFAULT NULL,
  `vechile_year` int(4) DEFAULT NULL,
  `vechile_no` text,
  `driver_type` int(2) DEFAULT '1' COMMENT '1-Owner Come Driver, 2-Other Driver',
  `have_rc_book` int(1) DEFAULT '0' COMMENT '0-No, 1-Yes',
  `have_all_permit` int(1) DEFAULT '0' COMMENT '0-No, 1-Yes',
  `have_state_permit` int(1) DEFAULT '0' COMMENT '0-No, 1-Yes',
  `have_insurance` int(1) DEFAULT '0' COMMENT '0-No, 1-Yes',
  `have_driving_license` int(1) DEFAULT '0' COMMENT '0-No, 1-Yes',
  `status` int(2) DEFAULT '1' COMMENT '0-Inactive, 1-Active, 10-Deleted',
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `sg_customers_master`
--

CREATE TABLE `sg_customers_master` (
  `id` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `display_name` varchar(60) DEFAULT NULL,
  `contact_no` text,
  `member_status` int(2) DEFAULT '0' COMMENT '0-Guest, 1-Member)',
  `status` int(2) DEFAULT '1' COMMENT '0-Inactive, 1-Active, 10-Deleted',
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sg_customer_details`
--

CREATE TABLE `sg_customer_details` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `contact_no` text COMMENT 'Booked Contact No',
  `address_1` mediumtext,
  `address_2` mediumtext,
  `location` varchar(60) DEFAULT NULL,
  `status` int(2) DEFAULT '1' COMMENT '0-Inactive, 1-Active, 10-Deleted',
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sg_request_callback`
--

CREATE TABLE `sg_request_callback` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `contact_no` text,
  `respond_status` int(2) DEFAULT '0' COMMENT '0-Fresh, 1-Respond',
  `status` int(2) DEFAULT '1' COMMENT '0-Inactive, 1-Active, 10-Deleted',
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sg_service_bookings`
--

CREATE TABLE `sg_service_bookings` (
  `id` int(11) NOT NULL,
  `ref_id` text,
  `service_name` varchar(256) DEFAULT NULL,
  `service_slug` text,
  `customer_id` int(11) DEFAULT NULL,
  `customer_details_id` int(11) DEFAULT NULL,
  `book_status` int(2) DEFAULT '1',
  `status` int(2) DEFAULT NULL COMMENT '0-Inactive, 1-Active, 10-Deleted',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sg_success_bookings`
--

CREATE TABLE `sg_success_bookings` (
  `id` int(11) NOT NULL,
  `ref_id` text,
  `customer_id` int(11) NOT NULL,
  `customer_details_id` int(11) DEFAULT NULL,
  `vechile_id` int(11) DEFAULT NULL,
  `success_type` int(2) DEFAULT '1' COMMENT '1-Call Drivers, 2-Travels',
  `no_of_days` int(11) DEFAULT NULL,
  `pickup_place` varchar(256) DEFAULT NULL,
  `drop_place` varchar(256) DEFAULT NULL,
  `travel_date` datetime DEFAULT NULL,
  `station_type` int(2) DEFAULT '1' COMMENT '1-local, 2-Outstation',
  `est_usage_hrs` decimal(2,2) DEFAULT NULL,
  `is_night_journey` int(1) DEFAULT '0' COMMENT '0-No, 1-Yes',
  `is_drop_same_location` int(1) DEFAULT '0' COMMENT '0-No, 1-Yes',
  `total_km` int(11) DEFAULT NULL,
  `rate_per_km` decimal(10,2) DEFAULT NULL,
  `total_rate` decimal(10,2) DEFAULT NULL COMMENT 'approx. amount',
  `book_status` int(2) DEFAULT '1',
  `status` int(2) DEFAULT '1' COMMENT '0-Inactive, 1-Active, 10-Deleted',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
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
(2, 'Sedan', 'Sedan', 'sedan', '12.00', NULL, 1),
(3, 'SUV', 'SUV', 'suv', '15.00', NULL, 1),
(4, 'Luxury Cars', 'Luxury Cars', 'luxury-cars', '25.00', NULL, 1),
(5, 'Tata Ace', 'Tata Ace', 'tata-ace', '20.00', NULL, 1),
(6, 'Tempo Traveller', '407', '407', '15.00', NULL, 1),
(7, 'Heavy Vechile', 'Heavy Vechile', 'heavy-vechile', '30.00', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sg_attachments`
--
ALTER TABLE `sg_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sg_contact_us`
--
ALTER TABLE `sg_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sg_customers_master`
--
ALTER TABLE `sg_customers_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sg_customer_details`
--
ALTER TABLE `sg_customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sg_request_callback`
--
ALTER TABLE `sg_request_callback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sg_service_bookings`
--
ALTER TABLE `sg_service_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sg_success_bookings`
--
ALTER TABLE `sg_success_bookings`
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
-- AUTO_INCREMENT for table `sg_attachments`
--
ALTER TABLE `sg_attachments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_contact_us`
--
ALTER TABLE `sg_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_customers_master`
--
ALTER TABLE `sg_customers_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_customer_details`
--
ALTER TABLE `sg_customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_request_callback`
--
ALTER TABLE `sg_request_callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_service_bookings`
--
ALTER TABLE `sg_service_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_success_bookings`
--
ALTER TABLE `sg_success_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sg_vechiles_master`
--
ALTER TABLE `sg_vechiles_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
