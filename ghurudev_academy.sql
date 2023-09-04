-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 07:16 AM
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
-- Database: `ghurudev_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminpassword` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `name`, `adminid`, `adminpassword`) VALUES
(1, 'Ghurudev', 'Ghurudev@2023', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kids_fees_table`
--

CREATE TABLE `kids_fees_table` (
  `id` int(11) NOT NULL,
  `kid_check_enroll` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kid_amnt_paid` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kid_pending_amnt` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kid_fees_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kids_fees_table`
--

INSERT INTO `kids_fees_table` (`id`, `kid_check_enroll`, `kid_amnt_paid`, `kid_pending_amnt`, `kid_fees_status`) VALUES
(2, '333', '10000', '1500', 'InComplete');

-- --------------------------------------------------------

--
-- Table structure for table `kids_payment`
--

CREATE TABLE `kids_payment` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_enroll` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_standard` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kids_payment`
--

INSERT INTO `kids_payment` (`id`, `order_id`, `payment_id`, `kids_enroll`, `kids_name`, `amount`, `kids_email`, `kids_mobile`, `kids_standard`, `status`) VALUES
(1, 'order_MA1A6l1bMMXYAy', 'pay_MA1AOHyWXq6Owx', '333', 'anand', '999', 'aaa@gmail.com', '1234567890', 'Day Care(age:1.5 - 4.5)', 'success'),
(2, 'order_MArrG44WiZSlzq', 'pay_MArrWjGixcui8B', '333', 'anand', '100', 'aaa@gmail.com', '1234567890', 'Young Learner English', 'success'),
(3, 'order_MC2lLDiSnSGqDd', 'pay_MC2lZ2YbRwgWZe', '333', 'anand', '55555', 'aaa@gmail.com', '1234567890', '1st standard', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `kids_table`
--

CREATE TABLE `kids_table` (
  `id` int(11) NOT NULL,
  `kids_enroll` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_age` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_parent` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_school` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_standard` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_doj` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids_pic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kids_table`
--

INSERT INTO `kids_table` (`id`, `kids_enroll`, `kids_name`, `kids_dob`, `kids_age`, `kids_gender`, `kids_parent`, `kids_school`, `kids_standard`, `kids_doj`, `kids_mobile`, `kids_mail`, `kids_address`, `kids_pic`) VALUES
(1, '333', 'anand', '2000-02-01', '22', 'Male', 'selvam', 'ghs', '5th standard', '2000-10-29', '1234567890', 'dd@gmail.com', 'chennai', 'yoga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_lname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_age` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_doj` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_pic` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `staff_id`, `staff_fname`, `staff_lname`, `staff_dob`, `staff_age`, `staff_gender`, `staff_subject`, `staff_doj`, `staff_number`, `staff_email`, `staff_address`, `staff_pic`) VALUES
(2, '1224444', 'subashh', 'D', '9999-09-09', '22', 'Male', 'Chemistry', '1999-07-07', '1234567890', 'ss@gmail.com', 'aaaa', 'nutrition3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_fees_table`
--

CREATE TABLE `student_fees_table` (
  `id` int(11) NOT NULL,
  `std_enroll_check` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_paid_amnt` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_pending_amnt` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_amnt_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_fees_table`
--

INSERT INTO `student_fees_table` (`id`, `std_enroll_check`, `std_paid_amnt`, `std_pending_amnt`, `std_amnt_status`) VALUES
(1, '0822', '1000', '1500', 'InComplete');

-- --------------------------------------------------------

--
-- Table structure for table `student_payment`
--

CREATE TABLE `student_payment` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enroll` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_standard` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_payment`
--

INSERT INTO `student_payment` (`id`, `order_id`, `payment_id`, `enroll`, `name`, `amount`, `email`, `mobile`, `std_standard`, `status`) VALUES
(1, 'order_M9hmnN711lDu8i', 'pay_M9hn3A0t5GzUIO', '333', 'anandd', '55', 'subash@gmail.com', '7338939037', '8th standard', 'success'),
(2, 'order_M9hplzJJ9yfivm', 'pay_M9hq79QIAxZFaF', '333', 'anandd', '55', 'subash@gmail.com', '7338939037', '8th standard', 'success'),
(3, 'order_M9hrIxjlk31ng3', 'pay_M9hrZBOKlKAkEl', '333', 'anandd', '55', 'subash@gmail.com', '7338939037', '8th standard', 'success'),
(4, 'order_M9hub8pe28hkoi', 'pay_M9hutWCrzN1hEg', '12345', 'anand', '999', 'yanianand571@gmail.com', '7338939037', '10th standard', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `std_enroll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_standard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_doj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `std_enroll`, `std_name`, `std_dob`, `std_age`, `std_gender`, `std_parent`, `std_school`, `std_standard`, `std_doj`, `std_mobile`, `std_mail`, `std_address`, `std_pic`) VALUES
(12, '0822', 'subashh d', '1999-07-07', '24', 'Male', 'Durai', 'chanakya matric hr sec school', '7th standard', '1999-07-07', '9597656498', 'subashcb7799@gmail.com', 'chennai', 'logo.png'),
(13, '0822', 'subash d', '99999-09-09', '24', 'Male', 'Durai', 'chanakya matric hr sec school', '7th standard', '1999-07-07', '9597656498', 'subashcb7799@gmail.com', 'chennai', 'walking.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_fees_table`
--
ALTER TABLE `kids_fees_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_payment`
--
ALTER TABLE `kids_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids_table`
--
ALTER TABLE `kids_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees_table`
--
ALTER TABLE `student_fees_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payment`
--
ALTER TABLE `student_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kids_fees_table`
--
ALTER TABLE `kids_fees_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kids_payment`
--
ALTER TABLE `kids_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kids_table`
--
ALTER TABLE `kids_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_fees_table`
--
ALTER TABLE `student_fees_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_payment`
--
ALTER TABLE `student_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
