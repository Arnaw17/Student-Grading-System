-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 06:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('Arnaw', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `Faculty_ID` int(100) NOT NULL,
  `Faculty_Name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Faculty_Uniqueno` int(100) NOT NULL,
  `Faculty_Phone` int(100) NOT NULL,
  `Faculty_Email` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Faculty_Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`Faculty_ID`, `Faculty_Name`, `Faculty_Uniqueno`, `Faculty_Phone`, `Faculty_Email`, `Department`, `Faculty_Password`) VALUES
(1, 'Arnaw', 1234, 241, 'ara', '1234', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Student_id` int(11) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Reg` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `Student_department` varchar(255) NOT NULL,
  `Father_Name` varchar(255) NOT NULL,
  `Student_Phone` varchar(255) NOT NULL,
  `Student_Email` varchar(255) NOT NULL,
  `Student_Address` varchar(255) NOT NULL,
  `Student_State` varchar(255) NOT NULL,
  `Student_City` varchar(255) NOT NULL,
  `Pin_Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Student_id`, `Student_Name`, `Student_Reg`, `Semester`, `Student_department`, `Father_Name`, `Student_Phone`, `Student_Email`, `Student_Address`, `Student_State`, `Student_City`, `Pin_Code`) VALUES
(9, 'Arnaw', '19201060007', '4', 'ELECTRICAL', 'xyz', '1233', 'araw@gmail.com', 'dudhni', 'duma', 'dumka', '814101'),
(17, 'Prince', '5678', '6', 'MECHANICAL', 'xyz', '91025', 'arnaw2017.com@gmail.com', 'Gaushala Dudhani Dumka', 'Jharkhand', 'Dumka', '814101'),
(18, 'NAHID', '22040445010', '5', 'CSE', 'XYZ', '1234', 'NAHID@GMAIL.COM', 'SRI AMRAPARA', 'JHARKHAND', 'DUMKA', '814101'),
(19, 'ARNAW', '22040445002', '5', 'CSE', 'XYZ', '1234', 'NAHID@GMAIL.COM', 'SRI AMRAPARA', 'JHARKHAND', 'DUMKA', '814101');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks table`
--

CREATE TABLE `student_marks table` (
  `Student_id` int(100) NOT NULL,
  `student_reg` varchar(255) NOT NULL,
  `Student_sem` varchar(255) NOT NULL,
  `Subject_1` varchar(255) NOT NULL,
  `subject1marks` varchar(255) NOT NULL,
  `Subject_2` varchar(255) NOT NULL,
  `subject2marks` varchar(255) NOT NULL,
  `Subject_3` varchar(255) NOT NULL,
  `subject3marks` varchar(255) NOT NULL,
  `Subject_4` varchar(255) NOT NULL,
  `subject4marks` varchar(255) NOT NULL,
  `Subject_5` varchar(255) NOT NULL,
  `subject5marks` varchar(255) NOT NULL,
  `Subject_6` varchar(100) NOT NULL,
  `subject6marks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_marks table`
--

INSERT INTO `student_marks table` (`Student_id`, `student_reg`, `Student_sem`, `Subject_1`, `subject1marks`, `Subject_2`, `subject2marks`, `Subject_3`, `subject3marks`, `Subject_4`, `subject4marks`, `Subject_5`, `subject5marks`, `Subject_6`, `subject6marks`) VALUES
(1, '19201060007', '4', 'OS', '123', 'DBMS', '123', 'DAA', '123', 'ADF', '123', 'ADF', '123', ' ADF', '123'),
(3, '22040445010', '5', 'OPERATING SYSTEM', '90', 'DBMS', '95', 'MATHEMATICS', '82', 'DAA', '90', 'ECONOMICS', '92', ' AUTOMATA', '95'),
(4, '22040445002', '5', 'OPERATING SYSTEM', '90', 'DBMS', '95', 'MATHEMATICS', '82', 'DAA', '90', 'ECONOMICS', '92', ' AUTOMATA', '95');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`Faculty_ID`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `student_marks table`
--
ALTER TABLE `student_marks table`
  ADD PRIMARY KEY (`Student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `Faculty_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student_marks table`
--
ALTER TABLE `student_marks table`
  MODIFY `Student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
