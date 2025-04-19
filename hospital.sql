-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2025 at 06:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `apt_no` varchar(8) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`apt_no`, `pid`, `reason`, `doc_id`) VALUES
('APPT0001', 'OPID_00001', 'pain', 567000),
('APPT0002', 'OPID_00002', 'viral fever', 567001),
('APPT0003', 'OPID_00003', 'checkup', 567003),
('APPT0004', 'OPID_00006', 'allergy', 567004),
('APPT0006', 'OPID_00002', '', 567008),
('APPT0007', 'OPID_00008', '', 567007),
('APPT0008', 'OPID_00009', 'red pus boils', 567004);

--
-- Triggers `booking`
--
DELIMITER $$
CREATE TRIGGER `before_booking` BEFORE INSERT ON `booking` FOR EACH ROW BEGIN 
INSERT INTO `id_apt`(`id`) values (NULL); 
set new.apt_no=CONCAT("APPT", LPAD(LAST_INSERT_ID(), 4, "0")); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `record_create` AFTER INSERT ON `booking` FOR EACH ROW BEGIN
  INSERT INTO invoice (invoice_no, apt_no)
  VALUES (NULL, NEW.apt_no);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `record_create2` AFTER INSERT ON `booking` FOR EACH ROW BEGIN
update invoice
set total_amt=(SELECT d.consult_fee + i.hosp_charges
                       FROM doctor_details d
                       JOIN booking b ON d.doc_id =b.doc_id
                       JOIN invoice i ON i.apt_no = b.apt_no WHERE i.apt_no = new.apt_no) WHERE apt_no = NEW.apt_no;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `data_collect`
--

CREATE TABLE `data_collect` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `gender` char(2) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_collect`
--

INSERT INTO `data_collect` (`id`, `name`, `age`, `email`, `phoneno`, `gender`, `subject`, `comments`) VALUES
(1, 'Nidhi', 0, '', 0, 'm', 'hhhh', 'ggg'),
(2, 'nikita', 0, '', 0, 'm', 'hhh', 'kkkk'),
(3, 'Joseph', 30, 'Josephmm@gmail.com', 0, 'm', 'Updation of phone number', 'How can i update my phonenumber? Kindly contact me at the earliest.'),
(4, 'Aditi', 24, 'aditirao@gmail.com', 8226541701, 'o', 'Unable to register', 'I am not able to register on your website. Please let me know');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` varchar(4) NOT NULL,
  `dept_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`) VALUES
('DT01', 'Cardiology'),
('DT05', 'Dermatology'),
('DT10', 'Neurology'),
('DT04', 'OBG'),
('DT11', 'Oncology'),
('DT12', 'Orthopedics'),
('DT06', 'Pathology'),
('DT02', 'Pediatrics'),
('DT09', 'Psychiatry'),
('DT08', 'Radiology'),
('DT03', 'Surgery'),
('DT07', 'Urology');

--
-- Triggers `dept`
--
DELIMITER $$
CREATE TRIGGER `before_dept_id` BEFORE INSERT ON `dept` FOR EACH ROW BEGIN
INSERT INTO `id_dept`(`id`) VALUES (NULL);
SET NEW.dept_id=CONCAT("DT", LPAD(LAST_INSERT_ID(), 2,"0"));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `doc_id` int(11) NOT NULL,
  `prefix` varchar(4) DEFAULT 'Dr.',
  `doc_name` varchar(30) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `consult_fee` decimal(10,2) NOT NULL,
  `dept_id` varchar(4) DEFAULT NULL
) ;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`doc_id`, `prefix`, `doc_name`, `gender`, `phoneno`, `email`, `consult_fee`, `dept_id`) VALUES
(567000, 'Dr.', 'Arun Shenoy', 'm', 8798765645, 'drarun@gmail.com', 650.00, 'DT01'),
(567001, 'Dr.', 'Meghana Singh', 'f', 9878765645, 'drmeghana@gmail.com', 400.00, 'DT02'),
(567002, 'Dr.', 'Ajay Malik', 'm', 8767654567, 'drajay@gmail.com', 700.00, 'DT03'),
(567003, 'Dr.', 'Sarah Mathew', 'f', 9653903521, 'drsarah@gmail.com', 550.00, 'DT04'),
(567004, 'Dr.', 'Archana Sharma', 'f', 7632195438, 'drarchana@gmail.com', 600.00, 'DT05'),
(567005, 'Dr.', 'Anju Singh', 'f', 9854376218, 'dranju@gmail.com', 650.00, 'DT06'),
(567006, 'Dr.', 'Anjum Khan', 'm', 6432678591, 'dranjum@gmail.com', 500.00, 'DT07'),
(567007, 'Dr.', 'Rahul Rao', 'm', 8462897116, 'drrahul@gmail.com', 800.00, 'DT08'),
(567008, 'Dr.', 'Nikhil Kamath', 'm', 6632781196, 'drnikhil@gmail.com', 750.00, 'DT09'),
(567009, 'Dr.', 'Simran Sharma', 'f', 7785622901, 'drsimran@gmail.com', 800.00, 'DT10'),
(567010, 'Dr.', 'Neha Gupta', 'f', 7287664903, 'drneha@gmail.com', 850.00, 'DT03'),
(567011, 'Dr.', 'Abhinav Anand', 'm', 9466278003, 'drabhinav@gmail.com', 700.00, 'DT11'),
(567012, 'Dr.', 'Radhika Agarwal', 'f', 6678836021, 'drradhika@gmail.com', 850.00, 'DT01'),
(567013, 'Dr.', 'Janhavi Prabhu', 'f', 9200267459, 'drjanhavi@gmail.com', 650.00, 'DT02'),
(567014, 'Dr.', 'Dev Bhat', 'm', 7543879022, 'drdev@gmail.com', 700.00, 'DT03'),
(567015, 'Dr.', 'Bhavya Raj', 'm', 8774563129, 'drbhavya@gmail.com', 550.00, 'DT04');

-- --------------------------------------------------------

--
-- Table structure for table `id_apt`
--

CREATE TABLE `id_apt` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_apt`
--

INSERT INTO `id_apt` (`id`) VALUES
(1),
(2),
(3),
(4),
(6),
(7),
(8),
(9);

-- --------------------------------------------------------

--
-- Table structure for table `id_dept`
--

CREATE TABLE `id_dept` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_dept`
--

INSERT INTO `id_dept` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12);

-- --------------------------------------------------------

--
-- Table structure for table `id_inv`
--

CREATE TABLE `id_inv` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_inv`
--

INSERT INTO `id_inv` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8);

-- --------------------------------------------------------

--
-- Table structure for table `id_out`
--

CREATE TABLE `id_out` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_out`
--

INSERT INTO `id_out` (`id`) VALUES
(1),
(2),
(3),
(5),
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` varchar(7) NOT NULL,
  `apt_no` varchar(8) NOT NULL,
  `hosp_charges` decimal(10,2) NOT NULL DEFAULT 350.00,
  `total_amt` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `apt_no`, `hosp_charges`, `total_amt`) VALUES
('INV0001', 'APPT0001', 350.00, 1000.00),
('INV0002', 'APPT0002', 350.00, 750.00),
('INV0003', 'APPT0003', 350.00, 900.00),
('INV0004', 'APPT0004', 350.00, 950.00),
('INV0005', 'APPT0006', 350.00, 1100.00),
('INV0006', 'APPT0007', 350.00, 1150.00),
('INV0007', 'APPT0008', 350.00, 950.00);

--
-- Triggers `invoice`
--
DELIMITER $$
CREATE TRIGGER `before_invoice` BEFORE INSERT ON `invoice` FOR EACH ROW BEGIN 
INSERT INTO id_inv value (null); 
set new.invoice_no=concat("INV", LPAD(LAST_INSERT_ID(), 4,"0")); END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(6) NOT NULL
) ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'nidhi', '111', 'user'),
(2, 'nikita', '456', 'user'),
(3, 'admin', 'xxx', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `outpatient_details`
--

CREATE TABLE `outpatient_details` (
  `pid` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `age` int(3) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL
) ;

--
-- Dumping data for table `outpatient_details`
--

INSERT INTO `outpatient_details` (`pid`, `name`, `gender`, `age`, `phoneno`, `email`, `address`) VALUES
('OPID_00001', 'Tina', 'f', 26, 9878765676, 'tina12@gmail.com', 'manipal'),
('OPID_00002', 'Krista', 'f', 27, 9787129001, 'Kristaff@gmail.ocm', 'kundapur'),
('OPID_00003', 'Nirbhay', 'm', 22, 8324156620, 'nnbhay@gmail.com', 'valencia, mangalore'),
('OPID_00005', 'Kavita', 'f', 25, 9223415673, 'kavitar@gmail.com', 'jeppu, mangalore'),
('OPID_00006', 'Ruth', 'f', 28, 6155249031, 'Ruthdsouza@gmail.com', 'Surathkal'),
('OPID_00007', 'Rajith', 'm', 26, 9251673211, 'Rajithh@gmail.com', 'manipal'),
('OPID_00008', 'Aroma', 'o', 27, 7365211542, 'aromakk@gmail.com', 'Surathkal'),
('OPID_00009', 'Shlok', 'm', 29, 8112357320, 'aashlok@gmail.com', 'kundapur'),
('OPID_00010', 'Shashank', 'm', 22, 8767564567, 'shashank@gmail.com', 'manipal');

--
-- Triggers `outpatient_details`
--
DELIMITER $$
CREATE TRIGGER `before_opid` BEFORE INSERT ON `outpatient_details` FOR EACH ROW BEGIN
insert into `id_out`(`id`) values (NULL);
set new.pid=CONCAT("OPID_", LPAD(LAST_INSERT_ID(), 5, "0"));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`apt_no`),
  ADD KEY `pid` (`pid`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `data_collect`
--
ALTER TABLE `data_collect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_name` (`dept_name`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `phoneno` (`phoneno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `id_apt`
--
ALTER TABLE `id_apt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_dept`
--
ALTER TABLE `id_dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_inv`
--
ALTER TABLE `id_inv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_out`
--
ALTER TABLE `id_out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `apt_no` (`apt_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outpatient_details`
--
ALTER TABLE `outpatient_details`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `phoneno` (`phoneno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_collect`
--
ALTER TABLE `data_collect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_details`
--
ALTER TABLE `doctor_details`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_apt`
--
ALTER TABLE `id_apt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `id_dept`
--
ALTER TABLE `id_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `id_inv`
--
ALTER TABLE `id_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `id_out`
--
ALTER TABLE `id_out`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `outpatient_details` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctor_details` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD CONSTRAINT `doctor_details_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `dept` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`apt_no`) REFERENCES `booking` (`apt_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
