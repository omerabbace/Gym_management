-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 07:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `person_id`, `email`, `password`) VALUES
(1, 1, 'omerabbace@gmail.com', '12345'),
(8, 10, 'kaleemrauf@gmail.com', '1212'),
(9, 11, 'bilal@gmail.com', '12345'),
(10, 12, 'ahmer127@gmail.com', '12345'),
(17, 20, 'qamar127@gmail.com', '12345'),
(20, 23, 'awais127@gmail.com', '12345'),
(22, 25, 'mehtab127@gmail.com', '12345'),
(23, 26, 'waqas127@gmail.com', '12345'),
(24, 27, 'farhan127@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ad_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `city` varchar(256) NOT NULL,
  `town` varchar(256) NOT NULL,
  `street` varchar(256) NOT NULL,
  `house` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ad_id`, `person_id`, `city`, `town`, `street`, `house`) VALUES
(6, 10, 'Islamabad', 'muslim town', '7', '1'),
(7, 11, 'Murree', 'abdullah town', '1', '13'),
(8, 12, 'Islamabad', 'Pind', '1', '33'),
(14, 20, 'Islamabad', 'soan', '10', '13'),
(17, 23, 'Rawalpindi', 'tramri', '2', '3'),
(19, 25, 'Rawalpindi', 'chak Beli', '7', '12'),
(20, 26, 'Islamabad', 'khs', '7', '1'),
(21, 27, 'Bagh', 'pak town', '1', '33');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `acc_id`, `person_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `assign_trainer`
--

CREATE TABLE `assign_trainer` (
  `id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_trainer`
--

INSERT INTO `assign_trainer` (`id`, `trainer_id`, `trainee_id`) VALUES
(34, 8, 23),
(35, 8, 27),
(36, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `diet_plan`
--

CREATE TABLE `diet_plan` (
  `diet_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `fee_id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`fee_id`, `pay_id`, `trainee_id`) VALUES
(1, 11, 2),
(2, 31, 7),
(3, 32, 7),
(4, 33, 7),
(5, 34, 7),
(6, 35, 7);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `mem_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `trainee_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership_type`
--

CREATE TABLE `membership_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_type`
--

INSERT INTO `membership_type` (`type_id`, `type`) VALUES
(2, 'Silver'),
(3, 'Gold'),
(4, 'bronze'),
(8, 'Diamond');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `acc_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `person_id`, `date`, `amount`, `acc_number`) VALUES
(11, 10, '0000-00-00', 6, 1234212),
(29, 12, '2023-01-02', 20000, 1234212),
(30, 20, '2023-01-03', 20000, 1234212),
(31, 23, '2023-01-04', 6, 1234212),
(32, 23, '2023-01-04', 6, 1234212),
(33, 23, '2023-01-04', 6, 1234212),
(34, 23, '2023-01-10', 6, 1222121),
(35, 23, '2023-01-17', 800, 1222121);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `p_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`p_id`, `name`, `last_name`, `contact`, `age`) VALUES
(1, 'kaleem', 'abbasi', '03123456789', 30),
(10, 'kaleem', 'abbasi', '03123456789', 32),
(11, 'bilal', 'abbasi', '03133333333', 28),
(12, 'ahmer', 'raja', '0312345675', 20),
(20, 'qamar', 'nusrat', '0343212344', 21),
(23, 'awais', 'carni', '0343212344', 20),
(25, 'mehtab', 'ahmed', '0343212344', 20),
(26, 'waqas', 'khalid', '03123456789', 22),
(27, 'Farhan', 'muazzam', '03343213459', 22);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `sal_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sal_id`, `trainer_id`, `pay_id`) VALUES
(8, 1, 29),
(9, 8, 30);

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `acc_id`, `person_id`) VALUES
(2, 8, 10),
(4, 9, 11),
(7, 20, 23),
(8, 24, 27);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trainer_id`, `acc_id`, `person_id`) VALUES
(1, 10, 12),
(8, 17, 20),
(10, 22, 25),
(11, 23, 26);

-- --------------------------------------------------------

--
-- Table structure for table `training_fee`
--

CREATE TABLE `training_fee` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_fee`
--

INSERT INTO `training_fee` (`id`, `type_id`, `fee`) VALUES
(1, 4, 1200),
(2, 2, 1500),
(3, 3, 2000),
(6, 8, 2500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`acc_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `assign_trainer`
--
ALTER TABLE `assign_trainer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainer_id` (`trainer_id`),
  ADD KEY `assign_trainer_ibfk_1` (`trainee_id`);

--
-- Indexes for table `diet_plan`
--
ALTER TABLE `diet_plan`
  ADD PRIMARY KEY (`diet_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`fee_id`),
  ADD KEY `pay_id` (`pay_id`),
  ADD KEY `trainee_id` (`trainee_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`mem_id`),
  ADD KEY `trainee_id` (`trainee_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `membership_type`
--
ALTER TABLE `membership_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`sal_id`),
  ADD KEY `pay_id` (`pay_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`acc_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`),
  ADD KEY `user_id` (`acc_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `training_fee`
--
ALTER TABLE `training_fee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `training_fee_ibfk_1` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assign_trainer`
--
ALTER TABLE `assign_trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `diet_plan`
--
ALTER TABLE `diet_plan`
  MODIFY `diet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `membership_type`
--
ALTER TABLE `membership_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `sal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `training_fee`
--
ALTER TABLE `training_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`p_id`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`p_id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`p_id`);

--
-- Constraints for table `assign_trainer`
--
ALTER TABLE `assign_trainer`
  ADD CONSTRAINT `assign_trainer_ibfk_1` FOREIGN KEY (`trainee_id`) REFERENCES `person` (`p_id`),
  ADD CONSTRAINT `assign_trainer_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`);

--
-- Constraints for table `diet_plan`
--
ALTER TABLE `diet_plan`
  ADD CONSTRAINT `diet_plan_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`);

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`pay_id`) REFERENCES `payment` (`pay_id`),
  ADD CONSTRAINT `fee_ibfk_2` FOREIGN KEY (`trainee_id`) REFERENCES `trainee` (`id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`trainee_id`) REFERENCES `trainee` (`id`),
  ADD CONSTRAINT `membership_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `membership_type` (`type_id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`pay_id`) REFERENCES `payment` (`pay_id`),
  ADD CONSTRAINT `salary_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`trainer_id`);

--
-- Constraints for table `trainee`
--
ALTER TABLE `trainee`
  ADD CONSTRAINT `trainee_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `trainee_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`p_id`);

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `trainer_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `person` (`p_id`);

--
-- Constraints for table `training_fee`
--
ALTER TABLE `training_fee`
  ADD CONSTRAINT `training_fee_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `membership_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
