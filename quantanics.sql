-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 11:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quantanics`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `password`, `emp_name`, `dept`, `designation`) VALUES
('EMP1001', 'nk1234', 'StrategyNaveen', 'BE CSE', 'FULL STACK DEVELOPER');

-- --------------------------------------------------------

--
-- Table structure for table `domain_table`
--

CREATE TABLE `domain_table` (
  `domain_id` varchar(90) NOT NULL,
  `domain_name` varchar(98) DEFAULT NULL,
  `domain_status` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domain_table`
--

INSERT INTO `domain_table` (`domain_id`, `domain_name`, `domain_status`) VALUES
('1', 'Web Development', '1'),
('2', 'IOT Engineer', '1'),
('3', 'Mobile Development', '1'),
('4', 'Web Full Stack', '1');

-- --------------------------------------------------------

--
-- Table structure for table `intern_table`
--

CREATE TABLE `intern_table` (
  `intern_id` varchar(99) NOT NULL,
  `sname` varchar(90) NOT NULL,
  `regno` varchar(99) NOT NULL,
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
  `intern_status` varchar(99) NOT NULL,
  `reject_reason` varchar(98) NOT NULL,
  `allowance` int(90) NOT NULL,
  `fees` int(90) NOT NULL,
  `dob` date NOT NULL,
  `payment_status` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intern_table`
--

INSERT INTO `intern_table` (`intern_id`, `sname`, `regno`, `dept`, `year`, `email_id`, `clg_name`, `mobile`, `resume`, `bonafide`, `id_card`, `profile`, `start_date`, `end_date`, `domain`, `registeration_status`, `intern_status`, `reject_reason`, `allowance`, `fees`, `dob`, `payment_status`) VALUES
('QAIN1001', 'Naveen Kumar', '', 'BE CSE', '4th year', 'naveenkumar709434@gmail.com', 'Anna University Regional Campus', 6379617916, '', '', '', 'empty', '0000-00-00', '0000-00-00', '4', 1, 'paid', '', 0, 0, '2000-04-18', '2000'),
('QAIN1002', 'navin', '', 'cse', '4th year', 'naveekumarnk18420@gmail.com', 'aurcm', 6379617916, '', '', '', 'empty', '0000-00-00', '0000-00-00', '4', 1, 'free', '', 0, 0, '2023-05-04', ''),
('QAIN1003', 'strategy', '', 'cse', '4th year', 'strategy@gmail.com', 'AURCM', 9942933262, '', '', '', 'empty', '0000-00-00', '0000-00-00', '2', 2, '', '                    sfsdf', 0, 0, '2023-05-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `message_table`
--

CREATE TABLE `message_table` (
  `id` int(99) NOT NULL,
  `mid` varchar(99) NOT NULL,
  `mname` varchar(99) NOT NULL,
  `msg` text NOT NULL,
  `mdomain` varchar(99) NOT NULL,
  `mprofile` varchar(99) NOT NULL,
  `messager_status` varchar(99) NOT NULL,
  `mstatus` varchar(99) NOT NULL,
  `last_updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_table`
--

INSERT INTO `message_table` (`id`, `mid`, `mname`, `msg`, `mdomain`, `mprofile`, `messager_status`, `mstatus`, `last_updated_on`) VALUES
(1, 'QAIN1001', 'Naveen Kumar', 'hi', '4', 'empty', 'intern', '1', '2023-05-14 06:04:25'),
(2, 'QAIN1001', 'Naveen Kumar', 'welcome Naveen', '4', 'empty', 'intern', '1', '2023-05-14 06:19:38'),
(3, 'EMP1001', 'StrategyNaveen', 'hi welcome to the quantanics', '4', 'empty', 'admin', '1', '2023-05-14 07:16:53'),
(4, 'EMP1001', 'StrategyNaveen', 'hi', '4', 'empty', 'admin', '1', '2023-05-14 07:18:20'),
(5, 'EMP1001', 'StrategyNaveen', 'Good Morining Guy`s', '4', 'empty', 'admin', '1', '2023-05-14 07:19:16'),
(6, 'EMP1001', 'StrategyNaveen', 'Good Afternoon', '4', 'empty', 'admin', '1', '2023-05-14 07:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `intern_id` varchar(99) NOT NULL,
  `paid_amount` int(99) NOT NULL,
  `remaining_amount` int(99) NOT NULL,
  `total_payment` int(99) NOT NULL,
  `payment_proof` varchar(99) NOT NULL,
  `last_updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `message_table`
--
ALTER TABLE `message_table`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task_table`
--
ALTER TABLE `task_table`
  MODIFY `id` int(98) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `task_table`
--
ALTER TABLE `task_table`
  ADD CONSTRAINT `task_table_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `intern_table` (`intern_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
