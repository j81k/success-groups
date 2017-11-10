-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 08:29 PM
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

--
-- Dumping data for table `sg_customers_master`
--

INSERT INTO `sg_customers_master` (`id`, `username`, `email`, `display_name`, `contact_no`, `member_status`, `status`, `created_on`, `updated_on`) VALUES
(1, '', '', '', '', 0, 1, '2017-11-06 17:07:50', '2017-11-06 11:37:50'),
(2, 'JaiK', 'dev.jeyakumar@gmail.com', 'Jai K', '9945657645', 0, 1, '2017-11-06 18:01:17', '2017-11-06 12:31:17');

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

--
-- Dumping data for table `sg_customer_details`
--

INSERT INTO `sg_customer_details` (`id`, `customer_id`, `name`, `contact_no`, `address_1`, `address_2`, `location`, `status`, `created_on`) VALUES
(1, 1, '', '', '', '', '', 1, '2017-11-06 17:07:50'),
(2, 2, 'Jai K', '9945657645', '#4/42', '', 'Bangalore', 1, '2017-11-06 18:01:17'),
(3, 2, 'Jai K', '9945657645', '#4/42', '', 'Bangalore', 1, '2017-11-06 18:06:17'),
(4, 2, 'Jai K', '9945657645', '#4/42', '', 'bangaldesh', 1, '2017-11-06 18:09:51'),
(5, 2, 'Jai K', '9945657645', '#4/42', 'West street', 'Bangalore, Karnataka, India', 1, '2017-11-08 00:02:03'),
(6, 2, 'Jai K', '9945657645', '#4/42', 'West street', 'Chennai, Tamil Nadu, India', 1, '2017-11-08 00:19:12'),
(7, 2, 'Jai K', '9945657645', '#4/42', 'West street', 'Chennai, Tamil Nadu, India', 1, '2017-11-08 00:31:25'),
(8, 2, 'Jai K', '09945657645', '#4/42', '', 'Bangalore, Karnataka, India', 1, '2017-11-10 00:17:14'),
(9, 2, 'Jai K', '09945657645', '#4/42', '', 'Bangalore, Karnataka, India', 1, '2017-11-10 00:19:41'),
(10, 2, 'Jai K', '0994565789', '#4/42', '', 'Bangalore, Karnataka, India', 1, '2017-11-10 00:22:12'),
(11, 2, 'Jai K', '09945657645', '#4/42', '', 'Madras, Tamil Nadu, India', 1, '2017-11-10 00:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `sg_packages`
--

CREATE TABLE `sg_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(60) DEFAULT NULL,
  `package_slug` text,
  `package_excerpt` mediumtext,
  `package_desc` longtext,
  `package_days` int(4) DEFAULT NULL,
  `package_nights` int(4) DEFAULT NULL,
  `package_price` decimal(10,2) DEFAULT NULL,
  `package_image` varchar(256) DEFAULT NULL,
  `status` int(2) DEFAULT '1' COMMENT '0-Inactive, 1-Active, 10-Deleted',
  `created_on` datetime DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sg_packages`
--

INSERT INTO `sg_packages` (`id`, `package_name`, `package_slug`, `package_excerpt`, `package_desc`, `package_days`, `package_nights`, `package_price`, `package_image`, `status`, `created_on`, `updated_on`) VALUES
(1, 'Honeymoon Package', 'honeymoon-package', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 4, 3, NULL, NULL, 1, '2017-11-10 06:25:38', '2017-11-09 19:06:30'),
(2, 'Holiday Package', 'holiday-package', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 2, 1, '2500.00', NULL, 1, '2017-11-10 10:24:44', '2017-11-09 19:07:57');

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

--
-- Dumping data for table `sg_request_callback`
--

INSERT INTO `sg_request_callback` (`id`, `name`, `contact_no`, `respond_status`, `status`, `created_on`) VALUES
(1, NULL, NULL, 0, 1, '2017-11-06 17:35:19'),
(2, 'Jai', NULL, 0, 1, '2017-11-06 17:37:40'),
(3, 'Jai', NULL, 0, 1, '2017-11-06 17:44:02'),
(4, 'Ashk', '9987323644', 0, 1, '2017-11-06 17:44:59'),
(5, 'Kelvin', '9987323644', 0, 1, '2017-11-06 17:48:00'),
(6, 'John', '9987323644', 0, 1, '2017-11-06 17:50:18'),
(7, 'John', '9987323644', 0, 1, '2017-11-06 17:51:31'),
(8, 'John', '9987323644', 0, 1, '2017-11-06 17:53:04'),
(9, 'John', '9987323644', 0, 1, '2017-11-06 17:55:16');

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

--
-- Dumping data for table `sg_service_bookings`
--

INSERT INTO `sg_service_bookings` (`id`, `ref_id`, `service_name`, `service_slug`, `customer_id`, `customer_details_id`, `book_status`, `status`, `created_on`, `updated_on`) VALUES
(1, 'B263346C2FCFF9E0B8', 'Honeymoon Package', 'honeymoon_package', 2, 8, 1, NULL, '2017-11-10 00:17:14', '2017-11-10 00:17:14'),
(2, 'F250AD1175B482D597', 'Honeymoon Package', 'honeymoon_package', 2, 9, 1, NULL, '2017-11-10 00:19:41', '2017-11-10 00:19:41'),
(3, 'D9FCF278EE75DA0618', 'Honeymoon Package', 'honeymoon_package', 2, 10, 1, NULL, '2017-11-10 00:22:12', '2017-11-10 00:22:12'),
(4, 'EC8BE8DDB6022BC0F2', 'Temple Pooja Package', 'temple_pooja_package', 2, 11, 1, NULL, '2017-11-10 00:22:51', '2017-11-10 00:22:51');

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

--
-- Dumping data for table `sg_success_bookings`
--

INSERT INTO `sg_success_bookings` (`id`, `ref_id`, `customer_id`, `customer_details_id`, `vechile_id`, `success_type`, `no_of_days`, `pickup_place`, `drop_place`, `travel_date`, `station_type`, `est_usage_hrs`, `is_night_journey`, `is_drop_same_location`, `total_km`, `rate_per_km`, `total_rate`, `book_status`, `status`, `created_on`, `updated_on`) VALUES
(1, '000003W5E11264SGSF', 2, 2, 4, 1, 45, 'chennai', 'chennai', '2017-11-11 00:14:08', 2, '0.99', 0, 1, 0, '0.00', '0.00', 1, 1, '2017-11-06 18:01:17', '2017-11-06 18:01:17'),
(2, '000003W5E11264SGSF', 2, 3, 4, 1, 34, 'madras', 'madras', '2017-06-11 18:04:50', 2, '0.99', 0, 1, 0, '0.00', '0.00', 1, 1, '2017-11-06 18:06:17', '2017-11-06 18:06:17'),
(3, '000003W5E11264SGSF', 2, 4, 4, 1, 2, 'delhi', 'delhi', '2017-06-11 18:08:12', 2, '0.99', 0, 1, 0, '0.00', '0.00', 1, 1, '2017-11-06 18:09:51', '2017-11-06 18:09:51'),
(4, '000003W5E11264SGSF', 2, 5, 4, 1, 67, 'Bangalore, Karnataka, India', 'Bangalore, Karnataka, India', '2017-07-11 23:58:07', 2, '0.99', 0, 1, 0, '0.00', '0.00', 1, 1, '2017-11-08 00:02:03', '2017-11-08 00:02:03'),
(5, '58A30B8BC3EC11E7BC', 2, 6, 5, 2, 2, 'Madras, Tamil Nadu, India', 'Bangalore, Karnataka, India', '2017-08-11 00:02:25', 1, NULL, 0, 0, 348, '20.00', '6960.00', 1, 1, '2017-11-08 00:19:12', '2017-11-08 00:19:12'),
(6, '5FEB7589ADF7F861B3', 2, 7, 5, 2, 2, 'Madras, Tamil Nadu, India', 'Bangalore, Karnataka, India', '2017-08-11 00:02:25', 1, '0.00', 0, 0, 348, '20.00', '6960.00', 1, 1, '2017-11-08 00:31:25', '2017-11-08 00:31:25');

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
-- Indexes for table `sg_packages`
--
ALTER TABLE `sg_packages`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sg_customer_details`
--
ALTER TABLE `sg_customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sg_packages`
--
ALTER TABLE `sg_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sg_request_callback`
--
ALTER TABLE `sg_request_callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sg_service_bookings`
--
ALTER TABLE `sg_service_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sg_success_bookings`
--
ALTER TABLE `sg_success_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sg_vechiles_master`
--
ALTER TABLE `sg_vechiles_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
