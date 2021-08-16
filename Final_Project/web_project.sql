-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 06:59 PM
-- Server version: 10.3.15-MariaDB
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
-- Database: `web_project`
--
CREATE DATABASE IF NOT EXISTS `web_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web_project`;

-- --------------------------------------------------------

--
-- Table structure for table `add_emp`
--

DROP TABLE IF EXISTS `add_emp`;
CREATE TABLE `add_emp` (
  `e_id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `dob` text NOT NULL,
  `bl_grp` text NOT NULL,
  `nid` text NOT NULL,
  `salary` int(11) NOT NULL,
  `e_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `add_emp`:
--

--
-- Dumping data for table `add_emp`
--

INSERT INTO `add_emp` (`e_id`, `name`, `pass`, `gender`, `email`, `phone`, `address`, `dob`, `bl_grp`, `nid`, `salary`, `e_count`) VALUES
('12345', 'jamil', '1234567', 'Male', 'jamil@gmail.com', '0171517000', 'qjqhbdkquw', '1999-07-07', 'A(-ve)', '11223344556', 10000, 1),
('1345', 'rafsun', '12345678', 'male', 'rafsun@gmail.com', '01821908765', 'uttara', '23.05.1999', 'o neg', '23456789', 10000, 3),
('1348', 'rakib', '123456', 'male', 'rafn@gmail.com', '01881908765', 'uttara', '28.05.1999', 'o neg', '23459889', 10000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_sm`
--

DROP TABLE IF EXISTS `add_sm`;
CREATE TABLE `add_sm` (
  `e_id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `pass` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `dob` text NOT NULL,
  `bl_grp` text NOT NULL,
  `nid` text NOT NULL,
  `salary` int(11) NOT NULL,
  `e_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `add_sm`:
--

--
-- Dumping data for table `add_sm`
--

INSERT INTO `add_sm` (`e_id`, `name`, `pass`, `gender`, `email`, `phone`, `address`, `dob`, `bl_grp`, `nid`, `salary`, `e_count`) VALUES
('34567', 'Ullash', '1234567', 'Male', 'ullash@ieee.org', '01112233445', 'dhaka', '1998-08-09', 'O(-ve)', '12345678987654', 2000, 1),
('3713', 'Hamidur Rahman Ullash', 'ullash04', 'Male', 'mhullash57@gmail.com', '01942511663', 'Shewrapara, Mirpur, Dhaka-1216.', '1997-07-17', 'B(+ve)', '123456789123', 20000, 3),
('9262', 'ABCD', '12345678', 'Male', 'abc@gmail.com', '0122334456', 'Mirpur', '1998-08-09', 'B(+ve)', '11223355667', 3000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `ad_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `admin_login`:
--

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ad_id`, `email`, `pass`, `Name`) VALUES
(1, 'admin001@gmail.com', '1234', 'Fahimin Haque Arpa'),
(2, 'admin002@gmail.com', '12345', 'Md. Tarif Sadman');

-- --------------------------------------------------------

--
-- Table structure for table `em_msg`
--

DROP TABLE IF EXISTS `em_msg`;
CREATE TABLE `em_msg` (
  `m_id` int(11) NOT NULL,
  `u_email` varchar(20) NOT NULL,
  `msg_rcvr` varchar(100) NOT NULL,
  `msg_type` varchar(20) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `em_msg`:
--

--
-- Dumping data for table `em_msg`
--

INSERT INTO `em_msg` (`m_id`, `u_email`, `msg_rcvr`, `msg_type`, `s_name`, `msg`, `time`) VALUES
(1, 'tarif@gmail.com', 'Admin', 'Ticket Issue', 'Mirpur 10', 'taka pai ami', '12:34:09'),
(2, 'jamil@gmail.com', 'Station Master', 'Feedback', 'Uttara Center', 'time dekha jay', '03:12:19'),
(3, 'jamil@gmail.com', 'Admin', 'Emergency', 'Shahbag', 'Bag Missing', '08:19:01'),
(4, 'tarif@gmail.com', 'Admin', 'Ticket Issue', 'Mirpur 10', 'taka pai ami', '02:16:12'),
(5, 'mhullash57@gmail.com', 'Train Master', 'Emergency', 'Gabtoli', 'Agun Lagche', '03:45:09'),
(6, 'mhullash57@gmail.com', 'Admin', 'Feedback', 'Shewrapara', 'GREAT Service!!!', '11:05:34'),
(7, 'ullash@ieee.org', 'Admin', 'Emergency', 'Airport', 'Amar seat e arekjon boshe ache', '04:55:00'),
(8, 'ullash@ieee.org', 'Station Master', 'Emergency', 'Airport', 'Hudai', '04:58:30'),
(9, 'ullash@ieee.org', 'Admin', 'Feedback', 'Farmgate', 'kichuna', '05:00:00'),
(10, 'ullash@ieee.org', 'Admin', 'Ticket Issue', 'Uttara Center', 'free ticket chai', '03:20:33'),
(11, 'abc@gmail.com', 'Station Master', 'Emergency', 'Shahbag', 'Users are fighting.', '05:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `fair_chart`
--

DROP TABLE IF EXISTS `fair_chart`;
CREATE TABLE `fair_chart` (
  `s_id` int(10) NOT NULL,
  `s_name` text NOT NULL,
  `r_code` varchar(20) NOT NULL,
  `cost` int(3) NOT NULL,
  `count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `fair_chart`:
--

--
-- Dumping data for table `fair_chart`
--

INSERT INTO `fair_chart` (`s_id`, `s_name`, `r_code`, `cost`, `count`) VALUES
(1, 'Uttara North', 'UN-01', 40, 13),
(2, 'Uttara Center', 'UC-02', 60, 14),
(3, 'Uttara South', 'US-03', 24, 15),
(4, 'Pallabi', 'PL-04', 120, 16),
(5, 'Mirpur 11', 'MP-05', 100, 17),
(6, 'Mirpur 10', 'MP-06', 125, 18),
(7, 'Kazipara', 'KZ-07', 35, 19),
(8, 'Shewrapara', 'SP-08', 80, 20),
(9, 'Agargaon', 'AG-09', 70, 21),
(10, 'Bijoy Sarani', 'BS-10', 65, 22),
(11, 'Farmgate', 'FG-11', 45, 23),
(12, 'Karwan Bazar', 'KB-12', 25, 24),
(13, 'Shahbag', 'SB-13', 20, 25),
(14, 'Dhaka University', 'DU-14', 65, 26),
(15, 'Bangladesh Secretariat', 'BS-15', 35, 27),
(16, 'Motijheel', 'ML-16', 15, 28),
(17, 'Bonani', 'BN-17', 75, 29),
(18, 'Airport', 'AP-18', 85, 30),
(19, 'Amin Bazar', 'AB-19', 90, 31),
(20, 'Gabtoli', 'GB-20', 30, 32),
(21, 'Kollanpur', 'KP-21', 55, 33),
(22, 'New Market', 'NM-22', 60, 34),
(23, 'Moh. pur', 'MH-23', 40, 35),
(24, 'Kuril', 'KU-34', 90, 36),
(25, 'Gazipur', 'GZ-03', 60, 39);

-- --------------------------------------------------------

--
-- Table structure for table `payment_data`
--

DROP TABLE IF EXISTS `payment_data`;
CREATE TABLE `payment_data` (
  `t_num` text NOT NULL,
  `u_email` text NOT NULL,
  `p_method` text NOT NULL,
  `p_amount` int(11) NOT NULL,
  `p_num` text NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `payment_data`:
--

--
-- Dumping data for table `payment_data`
--

INSERT INTO `payment_data` (`t_num`, `u_email`, `p_method`, `p_amount`, `p_num`, `p_id`) VALUES
('12', 'arpa@gmail.com', 'Bkash', 35, '3333', 1),
('45', 'arpa@gmail.com', 'Nogod', 35, '12345', 2),
('40', 'tarif@gmail.com', 'Bkash', 65, '1111', 3),
('33', 'tarif@gmail.com', 'Bkash', 75, '9999', 4),
('34', 'arpa@gmail.com', 'Nogod', 65, '12345', 5),
('1', 'jamil@gmail.com', 'Nogod', 40, '7658658', 6),
('35', 'jamil@gmail.com', 'Bkash', 80, '77777', 7);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_ticket`
--

DROP TABLE IF EXISTS `purchase_ticket`;
CREATE TABLE `purchase_ticket` (
  `u_id` int(10) NOT NULL,
  `tkt_id` int(5) NOT NULL,
  `u_email` varchar(20) NOT NULL,
  `route_from` text NOT NULL,
  `route_to` text NOT NULL,
  `p_date` text NOT NULL,
  `p_time` text NOT NULL,
  `class` text NOT NULL,
  `p_num` int(5) NOT NULL,
  `p_type` text NOT NULL,
  `adult` int(5) NOT NULL,
  `child` int(5) NOT NULL,
  `t_name` text NOT NULL,
  `c_num` text NOT NULL,
  `sit_num` int(3) DEFAULT NULL,
  `sit_num1` int(10) NOT NULL,
  `sit_num2` int(10) NOT NULL,
  `sit_num3` int(10) NOT NULL,
  `sit_num4` int(10) NOT NULL,
  `cost` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `purchase_ticket`:
--

--
-- Dumping data for table `purchase_ticket`
--

INSERT INTO `purchase_ticket` (`u_id`, `tkt_id`, `u_email`, `route_from`, `route_to`, `p_date`, `p_time`, `class`, `p_num`, `p_type`, `adult`, `child`, `t_name`, `c_num`, `sit_num`, `sit_num1`, `sit_num2`, `sit_num3`, `sit_num4`, `cost`) VALUES
(7, 2, 'jamil@gmail.com', 'Shahbag', 'Kazipara', '5.Mar', '09:00.PM', 'Non AC', 2, 'Adult, Child', 1, 1, 'Dhaleswari', 'B2', NULL, 2, 3, 0, 0, '45'),
(7, 36, 'jamil@gmail.com', 'Dhaka University', 'Shewrapara', '3.Jan', '07:00.AM', 'AC', 1, 'Child', 0, 1, 'Surma-Meghna', 'D4', 5, 0, 0, 0, 0, '65');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `tkt_id` int(11) NOT NULL,
  `u_email` text NOT NULL,
  `route_from` text NOT NULL,
  `route_to` text NOT NULL,
  `p_date` text NOT NULL,
  `p_time` text NOT NULL,
  `class` text NOT NULL,
  `t_name` text NOT NULL,
  `c_num` text NOT NULL,
  `sit_1` int(11) NOT NULL,
  `sit_2` int(11) NOT NULL,
  `sit_3` int(11) NOT NULL,
  `sit_4` int(11) NOT NULL,
  `sit_5` int(11) NOT NULL,
  `c_tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `tickets`:
--

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`tkt_id`, `u_email`, `route_from`, `route_to`, `p_date`, `p_time`, `class`, `t_name`, `c_num`, `sit_1`, `sit_2`, `sit_3`, `sit_4`, `sit_5`, `c_tid`) VALUES
(3, 'arpa@gmail.com', 'Motijheel', 'Pallabi', '6.Feb', '07:00.AM', 'Non AC', 'Surma-Meghna', 'A1', 1, 0, 0, 0, 0, 1),
(4, 'arpa@gmail.com', 'Kazipara', 'New Market', '4.Aug', '07:00.PM', 'AC', 'Padma', 'A1', 0, 4, 6, 0, 0, 2),
(31, 'arpa@gmail.com', 'Bangladesh Secretariat', 'Dhaka University', '9.Mar', '07:00.PM', 'Non AC', 'Testa', 'B2', 4, 0, 0, 0, 0, 3),
(32, 'tarif@gmail.com', 'Bijoy Sarani', 'Farmgate', '2.Feb', '09:00.PM', 'Non AC', 'Padma', 'B2', 0, 1, 1, 0, 0, 4),
(33, 'tarif@gmail.com', 'Bonani', 'Uttara North', '2.Feb', '09:00.PM', 'Non AC', 'Padma', 'E5', 0, 2, 3, 0, 0, 5),
(34, 'arpa@gmail.com', 'Dhaka University', 'Mirpur 10', '4.Aug', '01:00.AM', 'Non AC', 'Dhaleswari', 'B2', 0, 15, 16, 0, 0, 6),
(1, 'jamil@gmail.com', 'Mirpur 11', 'Uttara South', '6.Apr', '09:00.PM', 'Non AC', 'Padma', 'B2', 10, 0, 0, 0, 0, 7),
(35, 'jamil@gmail.com', 'Shewrapara', 'Uttara Center', '2.Feb', '09:00.PM', 'Non AC', 'Sky', 'B2', 4, 0, 0, 0, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `train_list`
--

DROP TABLE IF EXISTS `train_list`;
CREATE TABLE `train_list` (
  `t_id` int(10) NOT NULL,
  `t_name` text NOT NULL,
  `T_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `train_list`:
--

--
-- Dumping data for table `train_list`
--

INSERT INTO `train_list` (`t_id`, `t_name`, `T_code`) VALUES
(1, 'Surma-Meghna', 'TR-01'),
(2, 'Padma ', 'TR-02'),
(3, 'Jomuna', 'TR-03'),
(4, 'Dhaleswari ', 'TR-04'),
(5, 'Karatoya ', 'TR-05'),
(6, 'Punarbhaba ', 'TR-06'),
(7, 'Himaloy ', 'TR-07'),
(8, 'Sky ', 'TR-08'),
(9, 'Testa ', 'TR-09'),
(10, 'Brahmaputra ', 'TR-10');

-- --------------------------------------------------------

--
-- Table structure for table `train_route`
--

DROP TABLE IF EXISTS `train_route`;
CREATE TABLE `train_route` (
  `r_id` int(10) NOT NULL,
  `r_name` text NOT NULL,
  `r_code` varchar(20) NOT NULL,
  `sm_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `train_route`:
--   `r_id`
--       `fair_chart` -> `s_id`
--

--
-- Dumping data for table `train_route`
--

INSERT INTO `train_route` (`r_id`, `r_name`, `r_code`, `sm_name`) VALUES
(1, 'Uttara North', 'UN-01', 'Akash'),
(2, 'Uttara Center', 'UC-02', 'Sadman'),
(3, 'Uttara South', 'US-03', 'Nadia'),
(4, 'Pallabi', 'PL-04', 'Tanvir'),
(5, 'Mirpur 11', 'MP-05', 'Sabbir'),
(6, 'Mirpur 10', 'MP-06', 'Sami'),
(7, 'Kazipara', 'KZ-07', 'Moon'),
(8, 'Shewrapara', 'SP-08', 'Rafat'),
(9, 'Agargaon', 'AG-09', 'Oyshee'),
(10, 'Bijoy Sarani', 'BS-10', 'Arpa'),
(11, 'Farmgate', 'FG-11', 'Farhan'),
(12, 'Karwan Bazar', 'KB-12', 'Hamim'),
(13, 'Shahbag', 'SB-13', 'Hasan'),
(14, 'Dhaka University', 'DU-14', 'Rakib'),
(15, 'Bangladesh Secretariat', 'BS-15', 'Sami'),
(16, 'Motijheel', 'ML-16', 'Sameen'),
(17, 'Bonani', 'BN-17', 'Taha'),
(18, 'Airport', 'AP-18', 'Nabil'),
(19, 'Amin Bazar', 'AB-19', 'Hanif'),
(20, 'Gabtoli', 'GB-20', 'Abdur'),
(21, 'Kollanpur', 'KP-21', 'Mumin'),
(22, 'New Market', 'NM-22', 'Sky'),
(23, 'Moh. pur', 'MH-23', 'Sadad'),
(24, 'Kuril', 'Kuril-34', 'Mr. Ali'),
(25, 'Gazipur', 'GZ-03', 'Ali Islam');

-- --------------------------------------------------------

--
-- Table structure for table `train_schedule`
--

DROP TABLE IF EXISTS `train_schedule`;
CREATE TABLE `train_schedule` (
  `r_id` int(11) NOT NULL,
  `r_name` text NOT NULL,
  `r_code` varchar(10) NOT NULL,
  `t_name` text NOT NULL,
  `t_code` varchar(10) NOT NULL,
  `dep_time` text NOT NULL,
  `ar_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `train_schedule`:
--

--
-- Dumping data for table `train_schedule`
--

INSERT INTO `train_schedule` (`r_id`, `r_name`, `r_code`, `t_name`, `t_code`, `dep_time`, `ar_time`) VALUES
(64, 'Uttara North', 'UN-01', 'Surma-Meghna', 'TR-01', '07:00AM', '06:45AM'),
(65, 'Uttara Center', 'UC-02', 'Padma', 'TR-02', '09:00AM', '08:45AM'),
(66, 'Uttara South', 'US-03', 'Jomuna', 'TR-03', '11:00AM', '10:45AM'),
(67, 'Pallabi', 'PL-04', 'Dhaleswari', 'TR-04', '01:00PM', '12:45PM'),
(68, 'Mirpur 11', 'MP-05', 'Karatoya', 'TR-05', '03:00PM', '02:45PM'),
(69, 'Mirpur 10', 'MP-06', 'Punarbhaba', 'TR-06', '05:00PM', '04:45PM'),
(70, 'Kazipara', 'KZ-07', 'Himaloy', 'TR-07', '07:00PM', '06:45PM'),
(71, 'Shewrapara', 'SP-08', 'Sky', 'TR-08', '09:00PM', '08:45PM'),
(72, 'Agargaon', 'AG-09', 'Testa', 'TR-09', '11:00PM', '10:45PM'),
(73, 'Bijoy Sarani', 'BS-10', 'Brahmaputra ', 'TR-10', '07:00AM', '06:45AM');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `pswrd` text NOT NULL,
  `phn_number` text NOT NULL,
  `nid` int(13) NOT NULL,
  `adrs` text NOT NULL,
  `dob` text NOT NULL,
  `bl_group` varchar(5) NOT NULL,
  `gender` text NOT NULL,
  `ocpsn` text NOT NULL,
  `healt_issue` text NOT NULL,
  `user_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `user_info`:
--

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`name`, `email`, `pswrd`, `phn_number`, `nid`, `adrs`, `dob`, `bl_group`, `gender`, `ocpsn`, `healt_issue`, `user_count`) VALUES
('Arpa', 'arpa@gmail.com', '123#jI', '01521550999', 2147483647, 'uttara', '1886-Jul-23', 'B(+)', 'Female', 'bekar', 'kisu nai', 8),
('Fahamin', 'fahamin@gmail.com', '123#mn', '01537129000', 2147483647, 'kisu nai', '1999.Oct.24', 'A(+ve', 'Female', 'Student', 'nai', 36),
('Jamil', 'jamil@gmail.com', '123#jP', '01780869801', 778876759, 'Monipur,Dhaka', '1887-Mar-23', 'O(+)', 'Male', 'Student', 'N/a', 7),
('Sabbir', 'sabbir@hotmail.com', '123#jk', '01887766552', 2147483647, 'Rampura', '1887-Jan-23', 'A(-)', 'Male', 'Job', 'n/a', 26),
('Sakib', 'sakib@gmail.com', 'aiub#Y1', '01223344556', 2147483647, 'Elephant road', '1990.Aug.13', 'A(-)', 'Male', 'Student', 'n/a', 28),
('Tanvir', 'tanvir@yahoo.com', '123U#w', '01998877661', 2147483647, 'Lalbag', '1980.May.9', 'AB(+)', 'Male', 'Business man', 'None', 29),
('Tarif', 'tarif@gmail.com', '987#uY', '01786980181', 2147483647, 'Uttora, Dhaka', '0000-00-00', 'A(-)', 'Male', 'Student', 'n/a', 23),
('Ullash', 'ullash@ieee.org', '128Yt#', '01882277663', 2147483647, 'Dhaka', '1992-07-31', 'O(+)', 'Male', 'Business', 'n/a', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_emp`
--
ALTER TABLE `add_emp`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `e_count` (`e_count`);

--
-- Indexes for table `add_sm`
--
ALTER TABLE `add_sm`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `e_count` (`e_count`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `em_msg`
--
ALTER TABLE `em_msg`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `fair_chart`
--
ALTER TABLE `fair_chart`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `count` (`count`);

--
-- Indexes for table `payment_data`
--
ALTER TABLE `payment_data`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `purchase_ticket`
--
ALTER TABLE `purchase_ticket`
  ADD PRIMARY KEY (`tkt_id`),
  ADD UNIQUE KEY `sit_num` (`sit_num`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`c_tid`);

--
-- Indexes for table `train_list`
--
ALTER TABLE `train_list`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `T_code` (`T_code`);

--
-- Indexes for table `train_route`
--
ALTER TABLE `train_route`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `r_code` (`r_code`);

--
-- Indexes for table `train_schedule`
--
ALTER TABLE `train_schedule`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `r_code` (`r_code`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`email`),
  ADD KEY `user_count` (`user_count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_emp`
--
ALTER TABLE `add_emp`
  MODIFY `e_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_sm`
--
ALTER TABLE `add_sm`
  MODIFY `e_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `em_msg`
--
ALTER TABLE `em_msg`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fair_chart`
--
ALTER TABLE `fair_chart`
  MODIFY `count` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `payment_data`
--
ALTER TABLE `payment_data`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase_ticket`
--
ALTER TABLE `purchase_ticket`
  MODIFY `tkt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `c_tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `train_list`
--
ALTER TABLE `train_list`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `train_route`
--
ALTER TABLE `train_route`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `train_schedule`
--
ALTER TABLE `train_schedule`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `train_route`
--
ALTER TABLE `train_route`
  ADD CONSTRAINT `train_route_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `fair_chart` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
