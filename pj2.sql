-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 04:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj2`
--

-- --------------------------------------------------------

--
-- Table structure for table `apmt`
--

CREATE TABLE `apmt` (
  `ap_id` int(11) NOT NULL,
  `ap_name` varchar(250) NOT NULL,
  `dc_id` int(11) NOT NULL,
  `ap_pb` varchar(250) NOT NULL,
  `ap_date` date NOT NULL,
  `ap_time` time NOT NULL,
  `ap_phn` varchar(250) NOT NULL,
  `ap_sms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apmt`
--

INSERT INTO `apmt` (`ap_id`, `ap_name`, `dc_id`, `ap_pb`, `ap_date`, `ap_time`, `ap_phn`, `ap_sms`) VALUES
(1, 'Shorif Uddin', 2, 'Pain', '2222-05-05', '14:02:00', '22222', '222222222222222'),
(2, 'Naeem Rony', 2, 'Pain', '2222-05-05', '14:02:00', '22222', '222222222222222'),
(3, 'TABAROK ULLAH TAREK', 4, 'FEVER', '0000-00-00', '14:02:00', '2241522', 'LOREM LOREM'),
(4, 'Arif', 3, 'Pain', '2022-05-05', '14:41:00', '017582552', 'lorem'),
(5, 'BEPS', 5, 'FEVER', '2022-05-05', '23:01:00', '01755', 'pAIN');

-- --------------------------------------------------------

--
-- Table structure for table `banner_info`
--

CREATE TABLE `banner_info` (
  `banner_id` int(11) NOT NULL,
  `ban_title` text NOT NULL,
  `ban_subtitle` text NOT NULL,
  `ban_details` text NOT NULL,
  `ban_btn_name` text NOT NULL,
  `ban_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_info`
--

INSERT INTO `banner_info` (`banner_id`, `ban_title`, `ban_subtitle`, `ban_details`, `ban_btn_name`, `ban_url`) VALUES
(2, 'Your Most Trusted Health Partner', 'TOTAL HEALTH CARE SOLUTION', 'A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.', 'Make Appointments ', 'appoinment.php');

-- --------------------------------------------------------

--
-- Table structure for table `clint`
--

CREATE TABLE `clint` (
  `cl_id` int(11) NOT NULL,
  `cl_cmt` varchar(250) NOT NULL,
  `cl_name` varchar(250) NOT NULL,
  `cl_info` varchar(250) NOT NULL,
  `cl_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clint`
--

INSERT INTO `clint` (`cl_id`, `cl_cmt`, `cl_name`, `cl_info`, `cl_img`) VALUES
(4, 'John Partho', 'Amazing service!', 'They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.', 'upload-551646268738.jpg'),
(5, 'Mullar Sarth', 'Expert doctors!', 'They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.', 'upload-821646268798.jpg'),
(6, 'Kolis Mullar', 'Good Support!', 'They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.', 'upload-821646268827.jpg'),
(7, 'Partho Sarothi', 'Nice Environment!', 'They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.', 'upload-721646268850.jpg'),
(8, 'Kolis Mullar', 'Modern Service!', 'They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.', 'upload-121646268872.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `dc_id` int(11) NOT NULL,
  `dc_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`dc_id`, `dc_name`) VALUES
(1, 'Kolis Mullar'),
(2, 'Partho Sarothi'),
(3, 'John Partho'),
(4, 'Shorif Uddin'),
(5, 'Shahab Uddin'),
(6, 'Samina Priya');

-- --------------------------------------------------------

--
-- Table structure for table `in_serv`
--

CREATE TABLE `in_serv` (
  `servin_id` int(11) NOT NULL,
  `serv_title` varchar(250) NOT NULL,
  `serv_subtitle` varchar(250) NOT NULL,
  `serv_icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_serv`
--

INSERT INTO `in_serv` (`servin_id`, `serv_title`, `serv_subtitle`, `serv_icon`) VALUES
(1, 'Laboratory services', 'Saepe nulla praesentium eaque omnis perferendis a doloremque.', 'icofont-laboratory text-lg'),
(2, 'Heart Disease', 'Saepe nulla praesentium eaque omnis perferendis a doloremque.', 'icofont-heart-beat-alt text-lg'),
(3, 'Dental Care', 'Saepe nulla praesentium eaque omnis perferendis a doloremque.', 'icofont-tooth text-lg'),
(4, 'Body Surgery', 'Saepe nulla praesentium eaque omnis perferendis a doloremque.', 'icofont-crutch text-lg'),
(5, 'Neurology Sargery', 'Saepe nulla praesentium eaque omnis perferendis a doloremque.', 'icofont-brain-alt text-lg'),
(6, 'Gynecology', 'Saepe nulla praesentium eaque omnis perferendis a doloremque.', 'icofont-dna-alt-1 text-lg');

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `pt_id` int(11) NOT NULL,
  `pt_title` varchar(250) NOT NULL,
  `pt_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`pt_id`, `pt_title`, `pt_img`) VALUES
(1, '1', 'upload-861646269880.png'),
(2, '2', 'upload-661646269887.png'),
(3, '3', 'upload-671646269892.png'),
(4, '4', 'upload-911646269898.png'),
(5, '5', 'upload-301646269903.png'),
(6, '6', 'upload-491646269911.png'),
(7, '7', 'upload-711646269917.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_username` varchar(250) NOT NULL,
  `user_pas` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `user_name`, `user_email`, `user_username`, `user_pas`, `role_id`, `user_photo`) VALUES
(1, 'MD. SHORIF UDDIN', 'shorif@gmail.com', 'shorif', '6512bd43d9caa6e02c990b0a82652dca', 1, 'upload-151646141649.jpg'),
(5, 'Naeem Rony', 'rony@gmail.com', 'rony', '6512bd43d9caa6e02c990b0a82652dca', 1, 'upload-881646141553.jpg'),
(12, 'TABAROK ULLAH TAREK', 'tarek@gmail.com', 'tarek', '6512bd43d9caa6e02c990b0a82652dca', 2, 'upload-531646141679.jpg'),
(13, 'sagar', 'sagar@gmail.com', 'sagar', '6512bd43d9caa6e02c990b0a82652dca', 3, 'upload-201646141701.png'),
(14, 'Arif', 'adf@gmAIL.COM', 'arif', '6512bd43d9caa6e02c990b0a82652dca', 4, 'upload-201646141721.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Modaretor'),
(3, 'Editor'),
(4, 'Subscribers');

-- --------------------------------------------------------

--
-- Table structure for table `work_ht`
--

CREATE TABLE `work_ht` (
  `wk_id` int(11) NOT NULL,
  `wk_title` text NOT NULL,
  `Sun_Wed` time NOT NULL,
  `Thu_Fri` time NOT NULL,
  `Sat_sun` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_ht`
--

INSERT INTO `work_ht` (`wk_id`, `wk_title`, `Sun_Wed`, `Thu_Fri`, `Sat_sun`) VALUES
(2, 'Working Time', '08:00:00', '09:00:00', '12:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apmt`
--
ALTER TABLE `apmt`
  ADD PRIMARY KEY (`ap_id`),
  ADD KEY `dc_id` (`dc_id`);

--
-- Indexes for table `banner_info`
--
ALTER TABLE `banner_info`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `clint`
--
ALTER TABLE `clint`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `in_serv`
--
ALTER TABLE `in_serv`
  ADD PRIMARY KEY (`servin_id`);

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`pt_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `work_ht`
--
ALTER TABLE `work_ht`
  ADD PRIMARY KEY (`wk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apmt`
--
ALTER TABLE `apmt`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner_info`
--
ALTER TABLE `banner_info`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clint`
--
ALTER TABLE `clint`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `dc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `in_serv`
--
ALTER TABLE `in_serv`
  MODIFY `servin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work_ht`
--
ALTER TABLE `work_ht`
  MODIFY `wk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apmt`
--
ALTER TABLE `apmt`
  ADD CONSTRAINT `apmt_ibfk_1` FOREIGN KEY (`dc_id`) REFERENCES `doctors` (`dc_id`);

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
