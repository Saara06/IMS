-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 07:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `internship_data`
--

CREATE TABLE `internship_data` (
  `name` varchar(100) NOT NULL,
  `rollno` int(100) NOT NULL,
  `facultyMentor` varchar(100) NOT NULL,
  `industryName` varchar(100) NOT NULL,
  `industryAddress` varchar(250) NOT NULL,
  `industryMentorName` varchar(100) NOT NULL,
  `industryMentorDesignation` varchar(100) NOT NULL,
  `industryMentorContact` bigint(20) NOT NULL,
  `industryMentorEmail` varchar(100) NOT NULL,
  `gecPlacement` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internship_data`
--

INSERT INTO `internship_data` (`name`, `rollno`, `facultyMentor`, `industryName`, `industryAddress`, `industryMentorName`, `industryMentorDesignation`, `industryMentorContact`, `industryMentorEmail`, `gecPlacement`) VALUES
('Agnisha Ankush Naik', 191106002, 'Dr. Aisha Fernandes', 'Mea Vita Technologies, Bandra - Maharashtra', 'Bandra, Mumbai 400050 ( Regd. office)Development Centre: Panjim, Goa\r\n', 'Mr. Ronald DSouza', 'CEO', 9820254235, 'ronald@meavita.in', 'No'),
('Akshata Devidas Bhomkar', 191106004, 'Dr. Aisha Fernandes', 'Mea Vita Technologies, Bandra - Maharashtra', 'Bandra, Mumbai 400050 ( Regd. office)Development Centre: Panjim, Goa\r\n', 'Mr. Ronald DSouza', 'CEO', 9820212876, 'ronald@meavita.in', 'No'),
('Anish Gurudas Naik', 191106006, 'Ms. Vaishali Shirodkar', 'Bloombit, Goa', 'Verla-Canca ,Mapusa,Goa\r\n', 'Amogh Bagkar', 'Senior Developer', 8208456448, 'amogh@bloombit.co', 'Yes'),
('Dhananjay Shankar Pawar', 191106014, 'Ms. Vaishali Shirodkar', 'Appbuddy Consultancy LLP, Sankhlim', 'AIC-GIM Sakhlim- Goa\r\n', 'Radhaprasad Borkar', 'Director', 9049212876, 'Rdborkar4engg@gmail.com', 'No'),
('Eveann Afonso', 191106015, 'Ms. Vaishali Shirodkar', 'Citadel Network Pvt Ltd - Pune', 'Unit No 2201A, 22nd Floor, World Trade Center, Brigade Gateway, Rajajinagar Ext, Malleswaram, Bangalore\r\n', 'Sreedhar Saraswati', 'CTO', 8105554112, 'sreedhar@citadelnpl.com', 'Yes'),
('Gauri R. Naik', 191106017, 'Ms. Vaishali Shirodkar', 'Codanto', 'cc', 'cc', 'cc', 123, 'Rdborkar4engg@gmail.com', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internship_data`
--
ALTER TABLE `internship_data`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
