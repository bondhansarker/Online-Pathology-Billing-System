-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 11:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oreo`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Appointment_date` varchar(40) NOT NULL,
  `Appointment_time` varchar(50) NOT NULL,
  `Appointment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_id`, `Email`, `Appointment_date`, `Appointment_time`, `Appointment_status`) VALUES
(28, 'mou@gmail.com', '2019-04-06', '9:00AM-10:00AM', 'Approved'),
(29, 'mou@gmail.com', '2019-04-26', '05:00PM-06:00PM', 'Approved'),
(30, 'mou@gmail.com', '2019-05-01', '9:00AM-10:00AM', 'Approved'),
(31, 'mou@gmail.com', '2019-04-10', '10:00AM-11:00AM', 'Approved'),
(32, 'mou@gmail.com', '2019-04-02', '03:00PM-04:00PM', 'Not yet'),
(17279, 'mou@gmail.com', '2019-04-13', ' 01:00PM-02:00PM', 'Not yet');

-- --------------------------------------------------------

--
-- Table structure for table `blood_sample_report`
--

CREATE TABLE `blood_sample_report` (
  `blood_report_id` int(50) NOT NULL,
  `Sample_id` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Patient_name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `Blood_group` varchar(50) NOT NULL,
  `WBC` varchar(50) NOT NULL,
  `RBC` varchar(50) NOT NULL,
  `HEMOGLOBIN` varchar(50) NOT NULL,
  `HEMATOCRIT` varchar(50) NOT NULL,
  `MCV` varchar(50) NOT NULL,
  `MCH` varchar(50) NOT NULL,
  `MCHC` varchar(50) NOT NULL,
  `MPV` varchar(50) NOT NULL,
  `LYMPHOCYTES` varchar(50) NOT NULL,
  `DIFFERENTIAL_TYPE` varchar(50) NOT NULL,
  `GLUCOSE` varchar(50) NOT NULL,
  `RESULT` varchar(50) NOT NULL,
  `COMMENT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_sample_report`
--

INSERT INTO `blood_sample_report` (`blood_report_id`, `Sample_id`, `Email`, `Patient_name`, `Age`, `Sex`, `Blood_group`, `WBC`, `RBC`, `HEMOGLOBIN`, `HEMATOCRIT`, `MCV`, `MCH`, `MCHC`, `MPV`, `LYMPHOCYTES`, `DIFFERENTIAL_TYPE`, `GLUCOSE`, `RESULT`, `COMMENT`) VALUES
(1, 30, 'mou@gmail.com', 'Bondhan Sarker', '25', 'Male', 'A+', '12', '12', '12', '21', '12', '12', '12', '12', '12', '13', '14', 'Postive', 'Good'),
(2, 29, 'mou@gmail.com', 'Tasnim Mou', '25', 'Female', 'A-', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', '50', 'BAD', 'Take rest properly');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_id` int(250) NOT NULL,
  `Balance` int(50) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `Patient_name` varchar(100) NOT NULL,
  `Phone_number` varchar(12) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date_of_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_id`, `Balance`, `User_type`, `Patient_name`, `Phone_number`, `Address`, `Email`, `Password`, `Date_of_register`) VALUES
(11, 1940, 'Patient', 'Bondhan Sarker', '015214697665', 'Uttara,Dhaka', 'bondhan@gmail.com', '1', '2019-04-01'),
(12, 1077, 'Patient', 'Tasnim Mou', '01733556613', 'Uttara,Dhaka', 'mou@gmail.com', '1', '2019-04-01'),
(13, 2000, 'Patient', 'Ashik', '01752374339', 'Uttara,Dhaka', 'ashik@gmail.com', '1', '2019-04-01'),
(14, 2000, 'Patient', 'Nabil', '01799391786', 'Uttara,Dhaka', 'nabil@gmail.com', '1', '2019-04-01'),
(15, 2000, 'Patient', 'Alamin', '01799391786', 'Uttara,Dhaka', 'rafi@gmail.com', '1', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `Sample_id` int(50) NOT NULL,
  `Sample_type` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Patient_name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `Date_of_delivery` varchar(50) NOT NULL,
  `Date_of_payment` varchar(50) NOT NULL,
  `Cost` int(50) NOT NULL,
  `Sample_status` varchar(50) NOT NULL,
  `Payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`Sample_id`, `Sample_type`, `Email`, `Patient_name`, `Age`, `Sex`, `Date_of_delivery`, `Date_of_payment`, `Cost`, `Sample_status`, `Payment_status`) VALUES
(28, 'Blood', 'mou@gmail.com', 'Bondhan Sarker', '25', 'Male', '2019-04-04', '2019-04-08', 50, 'Done', 'Due'),
(29, 'Blood', 'mou@gmail.com', 'Tasnim Mou', '25', 'Female', '2019-04-04', '2019-04-09', 50, 'Done', 'Completed'),
(30, 'Blood', 'mou@gmail.com', 'Tasnim Mou', '25', 'Female', '2019-04-18', '2019-04-22', 50, 'Done', 'Completed'),
(31, 'Urine', 'mou@gmail.com', 'Tasnim Mou', '25', 'Female', '2019-04-08', '2019-04-11', 100, 'Done', 'Completed'),
(32, 'Blood', 'mou@gmail.com', 'Fahmida Tasnim Mou', '23', 'Female', '2019-04-04', '2019-04-11', 50, 'Not yet', 'Due'),
(67044, 'Blood', 'bondhan@gmail.com', 'Bondhan Sarker', '25', 'Male', '2019-04-03', '2019-04-03', 50, 'Not yet', 'Due');

-- --------------------------------------------------------

--
-- Table structure for table `urine_sample_report`
--

CREATE TABLE `urine_sample_report` (
  `urine_report_id` int(50) NOT NULL,
  `Sample_id` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Patient_name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `Albumin` varchar(50) NOT NULL,
  `ALP` varchar(50) NOT NULL,
  `BHM` varchar(50) NOT NULL,
  `CK` varchar(50) NOT NULL,
  `CRISTROL` varchar(50) NOT NULL,
  `Epinephrin` varchar(50) NOT NULL,
  `Metanephorin` varchar(50) NOT NULL,
  `Normetanephorin` varchar(50) NOT NULL,
  `Dopamine` varchar(50) NOT NULL,
  `COMMENT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urine_sample_report`
--

INSERT INTO `urine_sample_report` (`urine_report_id`, `Sample_id`, `Email`, `Patient_name`, `Age`, `Sex`, `Albumin`, `ALP`, `BHM`, `CK`, `CRISTROL`, `Epinephrin`, `Metanephorin`, `Normetanephorin`, `Dopamine`, `COMMENT`) VALUES
(16, 31, 'mou@gmail.com', 'Tasnim Mou', '25', 'Female', '10%', '10%', '10%', '10%', '10%', '10%', '10%', '10%', '10%', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(10) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone_number` varchar(50) NOT NULL,
  `User_type` varchar(50) NOT NULL,
  `Pathologist_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_name`, `Email`, `Password`, `Phone_number`, `User_type`, `Pathologist_type`) VALUES
(1, 'Bondhan', 'admin@gmail.com', '1', '111111', 'Admin', 'None'),
(2, 'Abir', 'staff@gmail.com', '1', '222222', 'Staff', 'None'),
(3, 'Nabil', 'blood@gmail.com', '1', '3333333', 'Pathologist', 'Blood'),
(10, 'Abir', 'urine@gmail.com', '1', '4444444', 'Pathologist', 'Urine'),
(13, 'Abir', 'x-ray@gmail.com', '1', '55555555', 'Pathologist', 'X-ray');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_id`);

--
-- Indexes for table `blood_sample_report`
--
ALTER TABLE `blood_sample_report`
  ADD PRIMARY KEY (`blood_report_id`),
  ADD UNIQUE KEY `Sample_id` (`Sample_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`Sample_id`);

--
-- Indexes for table `urine_sample_report`
--
ALTER TABLE `urine_sample_report`
  ADD PRIMARY KEY (`urine_report_id`),
  ADD UNIQUE KEY `Sample_id` (`Sample_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17280;
--
-- AUTO_INCREMENT for table `blood_sample_report`
--
ALTER TABLE `blood_sample_report`
  MODIFY `blood_report_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `Sample_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67045;
--
-- AUTO_INCREMENT for table `urine_sample_report`
--
ALTER TABLE `urine_sample_report`
  MODIFY `urine_report_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
