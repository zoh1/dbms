-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 04:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `star` ()  NO SQL
BEGIN
UPDATE feedback SET star='WORST' WHERE rate_speed='0';
UPDATE feedback SET star='BAD' WHERE rate_speed>'0' AND rate_speed<='2';
UPDATE feedback SET star='POOR' WHERE rate_speed>'2' AND rate_speed<='4';
UPDATE feedback SET star='FAIR' WHERE rate_speed>'4' AND rate_speed<='6';
UPDATE feedback SET star='GOOD' WHERE rate_speed>'6' AND rate_speed<='8';
UPDATE feedback SET star='BEST' WHERE rate_speed>'8' AND rate_speed<='10';
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `co_id` int(30) NOT NULL,
  `co_name` varchar(30) NOT NULL,
  `co_loc` varchar(30) DEFAULT NULL,
  `date_of_est` date DEFAULT NULL,
  `no_of_emp` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`co_id`, `co_name`, `co_loc`, `date_of_est`, `no_of_emp`) VALUES
(1, 'Cosmos', 'Bangalore', '2019-04-01', 400),
(2, 'Phoenix', 'Bangalore', '2019-08-05', 500),
(3, 'Antennae', 'Bangalore', '2019-09-03', 470);

-- --------------------------------------------------------

--
-- Table structure for table `companylogin`
--

CREATE TABLE `companylogin` (
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `adno` varchar(30) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `m_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `c_no` int(30) DEFAULT NULL,
  `c_age` int(30) DEFAULT NULL,
  `c_dob` date DEFAULT NULL,
  `s_price` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`adno`, `f_name`, `m_name`, `l_name`, `email_id`, `c_no`, `c_age`, `c_dob`, `s_price`) VALUES
('1223 2134 1231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1223 2134 1455', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1223 2134 2123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('122321342123', 'syeda', 'zohra', 'tazeen', 'syeda.tazeen2014@gmail.com', 2147483647, 18, '2021-01-03', 699),
('21312323232', 'Syeda', 'Zohra', 'Tazeen', 'syeda.tazeen2014@gmail.com', 2147483647, 21, '2021-01-11', 599),
('234567898765431', 'Cos', 'David', 'wer', 'syeda.tazeen2014@gmail.com', 2147483647, 21, '2021-01-29', 1999);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(30) NOT NULL,
  `dept_name` varchar(30) DEFAULT NULL,
  `no_of_emp` int(30) DEFAULT NULL,
  `h_id` int(30) DEFAULT NULL,
  `co_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `no_of_emp`, `h_id`, `co_name`) VALUES
(1, 'IT', 40, 1, 'Cosmos'),
(2, 'Account', 90, 2, 'Cosmos'),
(3, 'Finance', 90, 3, 'Cosmos'),
(4, 'Telecom Administrator', 150, 4, 'Cosmos'),
(5, 'Marketing', 120, 5, 'Cosmos'),
(6, 'IT', 150, 6, 'Phoenix'),
(7, 'Account', 100, 7, 'Phoenix'),
(8, 'Finance', 255, 8, 'Phoenix'),
(9, 'Telecom Administrator', 150, 9, 'Phoenix'),
(10, 'Marketing', 260, 10, 'Phoenix'),
(11, 'IT', 150, 11, 'Antennae'),
(12, 'Account', 200, 12, 'Antennae'),
(13, 'Finance', 150, 13, 'Antennae'),
(14, 'Telecom Administrator', 300, 14, 'Antennae'),
(15, 'Marketing', 325, 15, 'Antennae');

-- --------------------------------------------------------

--
-- Table structure for table `deplog`
--

CREATE TABLE `deplog` (
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(30) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `e_no` varchar(30) DEFAULT NULL,
  `e_pos` varchar(30) DEFAULT NULL,
  `gen` varchar(30) DEFAULT NULL,
  `adno` varchar(30) DEFAULT NULL,
  `e_sal` int(30) DEFAULT NULL,
  `dept_id` int(30) DEFAULT NULL,
  `co_id` int(30) DEFAULT NULL,
  `e_add` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `f_name`, `l_name`, `e_no`, `e_pos`, `gen`, `adno`, `e_sal`, `dept_id`, `co_id`, `e_add`) VALUES
(1, 'Evan', 'James', '9876577778', 'Manager', ' Male', '43223223456', 60000, 3, 1, 'evan@gmail.com'),
(2, 'David', 'James', '7873432435', 'Assistant Manager', ' Male', '456789024323', 50000, 3, 2, 'david@gmail.com'),
(3, 'abc', 'def', '998348327', 'Clerk', 'Male', '2234 2342 2123', 20000, 7, 3, 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `message` varchar(225) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `rate_speed` int(30) DEFAULT NULL,
  `star` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email_id`, `message`, `s_name`, `rate_speed`, `star`) VALUES
('Zohra', 'zoh@gmail.com', 'Works Just Fine', 'Nova', 6, 'FAIR'),
('david', 'david@gmail.com', 'Thank you!', 'Omega', 10, 'BEST'),
('abc', 'abc@gmail.com', 'Nice!', 'Omega', 8, 'GOOD'),
('abc', 'syeda.tazeen2014@gmail.com', 'I\'m very sleepy', 'Omega', 10, 'BEST');

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `salary` AFTER INSERT ON `feedback` FOR EACH ROW BEGIN
UPDATE employee SET e_sal='60000' 
WHERE e_pos='Manager';
UPDATE employee SET e_sal='50000' 
WHERE e_pos='Assistant Manager';
UPDATE employee SET e_sal='20000' 
WHERE e_pos='Clerk';
UPDATE employee SET e_sal='40000' 
WHERE e_pos='Sales Supervisor';
UPDATE employee SET e_sal='30000' 
WHERE e_pos='Sales Representative';
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `h_id` int(30) NOT NULL,
  `h_name` varchar(30) DEFAULT NULL,
  `exp_in_field` int(30) DEFAULT NULL,
  `dept_id` int(30) DEFAULT NULL,
  `no_of_emp` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`h_id`, `h_name`, `exp_in_field`, `dept_id`, `no_of_emp`) VALUES
(1, 'Aaditya', 12, 1, 500),
(2, 'Benjamin', 11, 2, 150),
(3, 'Clara', 10, 3, 40),
(4, 'David', 15, 4, 90),
(5, 'Dean', 15, 5, 60),
(6, 'Richard', 9, 6, 90),
(7, 'Rohan', 12, 7, 100),
(8, 'Rahul', 13, 8, 76),
(9, 'Ali', 16, 9, 30),
(10, 'Zain', 15, 10, 60),
(11, 'Piyush', 15, 11, 150),
(12, 'Rahul', 16, 12, 150),
(13, 'John', 19, 13, 150),
(14, 'Jack', 17, 14, 200),
(15, 'Jacob', 15, 15, 160);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(30) DEFAULT NULL,
  `adno` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `adno`, `pass`) VALUES
('zohra', '1223 2134 1455', '111'),
('syeda', '1223 2134 2123', '222'),
('David', '1223 2134 1231', '111');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(30) NOT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `s_type` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `s_mode` varchar(30) DEFAULT NULL,
  `co_id` int(30) DEFAULT NULL,
  `s_price` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_name`, `s_type`, `status`, `s_mode`, `co_id`, `s_price`) VALUES
(101, 'Nova', 'Prepaid', 'Active', '4G', 1, 599),
(102, 'Nova', 'Prepaid', 'Active', '4G', 1, 1050),
(103, 'Rosette', 'Prepaid', 'Active', '4G', 1, 199),
(104, 'Rosette', 'Prepaid', 'Active', '4G', 1, 999),
(105, 'Planeta', 'Prepaid', 'Active', '4G', 2, 699),
(106, 'Planeta', 'Prepaid', 'Active', '4G', 2, 799),
(107, 'Omega', 'Prepaid', 'Active', '4G', 2, 499),
(108, 'Omega', 'Prepaid', 'Active', '4G', 2, 399),
(109, 'Helix', 'Prepaid', 'Active', '4G', 3, 899),
(110, 'Helix', 'Prepaid', 'Active', '4G', 3, 1000),
(111, 'Orion', 'Postpaid', 'Active', '4G', 3, 1999),
(112, 'Orion', 'Postpaid', 'Active', '4G', 3, 2999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`co_id`,`co_name`),
  ADD UNIQUE KEY `co_name` (`co_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`adno`),
  ADD KEY `s_price` (`s_price`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_id` (`dept_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `co_name` (`co_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `co_id` (`co_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_price` (`s_price`),
  ADD KEY `co_id` (`co_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`s_price`) REFERENCES `service` (`s_price`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hod` (`h_id`),
  ADD CONSTRAINT `department_ibfk_2` FOREIGN KEY (`co_name`) REFERENCES `company` (`co_name`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`co_id`) REFERENCES `company` (`co_id`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`co_id`) REFERENCES `company` (`co_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
