-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 08:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quantanis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `user_id` varchar(98) NOT NULL,
  `password` varchar(98) DEFAULT NULL,
  `emp_name` varchar(98) DEFAULT NULL,
  `dept` varchar(90) DEFAULT NULL,
  `designation` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `password`, `emp_name`, `dept`, `designation`) VALUES
('9100', '123', 'sir', 'cse', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `domain_table`
--

CREATE TABLE `domain_table` (
  `domain_id` varchar(90) NOT NULL,
  `domain_name` varchar(98) DEFAULT NULL,
  `domain_status` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intern_table`
--

CREATE TABLE `intern_table` (
  `intern_id` varchar(99) NOT NULL,
  `regno` varchar(90) NOT NULL,
  `sname` varchar(90) NOT NULL,
  `dept` varchar(90) NOT NULL,
  `year` varchar(98) NOT NULL,
  `email_id` varchar(98) NOT NULL,
  `clg_name` varchar(98) NOT NULL,
  `mobile` bigint(90) NOT NULL,
  `resume` varchar(98) NOT NULL,
  `bonafide` varchar(98) NOT NULL,
  `id_card` varchar(98) NOT NULL,
  `profile` varchar(98) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `domain` varchar(98) NOT NULL,
  `registeration_status` int(90) NOT NULL,
  `reject_reason` varchar(98) NOT NULL,
  `allowance` int(90) NOT NULL,
  `fees` int(90) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intern_table`
--

INSERT INTO `intern_table` (`intern_id`, `regno`, `sname`, `dept`, `year`, `email_id`, `clg_name`, `mobile`, `resume`, `bonafide`, `id_card`, `profile`, `start_date`, `end_date`, `domain`, `registeration_status`, `reject_reason`, `allowance`, `fees`, `dob`) VALUES
('QAIN1001', '910018104304', 'strategistnaveen', 'cse', '4th year', 'naveenkumar709434@gmail.com', 'anna university', 9942933262, 'images.jpg', 'images (1).jpg', 'logo (2).jpg', 'logo_old.png', '2023-03-10', '2023-04-13', 'Web', 1, '', 0, 0, '2000-04-18'),
('QAIN1002', '9100', 'nithesh', 'cse', '4th', 'nitheshwaran003@gmail.com', 'aurcm', 8123456789, 'jennie.xlsx', 'infosysqn.py', '1669833857260.jpg', '1669833857260.jpg', '2023-04-10', '2023-04-10', 'Web', 1, '', 0, 0, '2023-04-10'),
('QAIN1003', '91001', 'nithesh', 'cse', '4th', 'nitheshwaran004@gmail.com', 'aurcm', 8123456789, '1669833857260.jpg', '1669833857260.jpg', '1669833857260.jpg', '1669833857260.jpg', '2023-04-11', '2023-04-11', 'Web', 0, '', 0, 0, '2023-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `message_table`
--

CREATE TABLE `message_table` (
  `id` int(90) NOT NULL,
  `intern_id` varchar(98) DEFAULT NULL,
  `intern_name` varchar(98) DEFAULT NULL,
  `intern_msg` text DEFAULT NULL,
  `domain_name` varchar(98) NOT NULL,
  `profile_name` varchar(98) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_table`
--

INSERT INTO `message_table` (`id`, `intern_id`, `intern_name`, `intern_msg`, `domain_name`, `profile_name`, `time_stamp`) VALUES
(1, 'QAIN1001', 'strategistnaveen', 'hi', 'Web', 'logo_old.png', '2023-04-02 14:25:55'),
(2, 'QAIN1001', 'strategistnaveen', 'nk', 'Web', 'logo_old.png', '2023-04-02 14:43:01'),
(3, 'QAIN1001', 'strategistnaveen', 'hi hello ', 'Web', 'logo_old.png', '2023-04-03 02:06:49'),
(4, 'QAIN1002', 'nithesh', 'hai', 'Web', '1669833857260.jpg', '2023-04-10 04:20:10'),
(5, 'QAIN1002', 'nithesh', 'ff', 'Web', '1669833857260.jpg', '2023-04-10 04:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `task_table`
--

CREATE TABLE `task_table` (
  `id` int(98) NOT NULL,
  `tdate` date DEFAULT NULL,
  `task` varchar(98) DEFAULT NULL,
  `task_desc` varchar(98) DEFAULT NULL,
  `task_status` varchar(98) DEFAULT NULL,
  `domain` varchar(98) DEFAULT NULL,
  `correction_count` varchar(90) DEFAULT NULL,
  `assigned_by` varchar(98) DEFAULT NULL,
  `completion_file` varchar(98) DEFAULT NULL,
  `remark` varchar(98) DEFAULT NULL,
  `comment` varchar(98) DEFAULT NULL,
  `last_updated_by` varchar(90) DEFAULT NULL,
  `intern_id` varchar(98) DEFAULT NULL,
  `check_in` time NOT NULL,
  `check_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_table`
--

INSERT INTO `task_table` (`id`, `tdate`, `task`, `task_desc`, `task_status`, `domain`, `correction_count`, `assigned_by`, `completion_file`, `remark`, `comment`, `last_updated_by`, `intern_id`, `check_in`, `check_out`) VALUES
(1, '2023-04-10', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'QAIN1002', '14:05:14', '24:05:14'),
(145, NULL, 'Query Builders', 'To insert the data in db', 'Successfully inserted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QAIN1002', '00:05:00', '01:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `domain_table`
--
ALTER TABLE `domain_table`
  ADD PRIMARY KEY (`domain_id`);

--
-- Indexes for table `intern_table`
--
ALTER TABLE `intern_table`
  ADD PRIMARY KEY (`intern_id`),
  ADD UNIQUE KEY `regno` (`regno`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `message_table`
--
ALTER TABLE `message_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intern_id` (`intern_id`);

--
-- Indexes for table `task_table`
--
ALTER TABLE `task_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intern_id` (`intern_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_table`
--
ALTER TABLE `message_table`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `task_table`
--
ALTER TABLE `task_table`
  MODIFY `id` int(98) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message_table`
--
ALTER TABLE `message_table`
  ADD CONSTRAINT `message_table_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `intern_table` (`intern_id`);

--
-- Constraints for table `task_table`
--
ALTER TABLE `task_table`
  ADD CONSTRAINT `task_table_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `intern_table` (`intern_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
