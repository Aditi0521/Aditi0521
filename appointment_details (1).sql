-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 07:40 AM
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
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE `appointment_details` (
  `id` int(11) NOT NULL,
  `common_symptoms` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `doctors` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text NOT NULL,
  `patient_age` int(5) DEFAULT NULL,
  `gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`id`, `common_symptoms`, `doctors`, `appointment_date`, `appointment_time`, `first_name`, `last_name`, `phone`, `email`, `address`, `patient_age`, `gender`, `created_at`) VALUES
(2, 'Cold/Cough', 'Physician', '2023-04-08', '12:58:00', 'Brishti Roy', '', '7045361587', '', 'KANDIVALI', 18, 'female', '2023-04-07 07:29:00'),
(3, 'Fever', 'Physician', '2023-04-08', '13:04:00', 'Brishti Roy', '', '7045361587', '', 'kandivali', 18, 'female', '2023-04-07 07:31:44'),
(4, 'Fever', 'Child Specialist', '2023-04-09', '18:46:00', 'Aditi sahu', '', '9058344587', '', 'chembur', 18, 'female', '2023-04-07 08:14:00'),
(5, 'Period issues', 'Orthopedic', '2023-04-15', '03:44:00', 'Aditi sahu', '', '9058344587', '', 'kjdxcvhjj', 19, 'female', '2023-04-13 18:12:04'),
(6, 'Back pain', 'Ruchi_Verma', '2023-04-22', '20:15:00', 'Brishti Roy', '', '9058344587', '', 'nkjk', 18, 'female', '2023-04-17 12:45:23'),
(7, 'Fever', 'Neha_Singh', '2023-04-21', '16:00:00', 'Aditi sahu', '', '9058344587', '', 'chembur', 19, 'female', '2023-04-19 08:15:05'),
(8, 'Cold/Cough', 'Neha_Singh', '2023-04-21', '17:00:00', 'Brishti Roy', '', '9058344587', '', 'asdfgh', 19, 'female', '2023-04-19 08:27:10'),
(9, 'Others', 'Neha_Singh', '2023-04-21', '17:00:00', 'Aditi sahu', '', '9058344587', '', 'Tilak Nagar, chembur', 19, 'female', '2023-04-19 09:08:47'),
(10, 'Others', 'Neha_Singh', '2023-04-21', '17:43:00', 'Mrudula Sawant', '', '7506070136', '', 'Airoli ', 20, 'female', '2023-04-19 09:14:34'),
(11, 'Fever', 'Vivek_Sharma', '2023-04-21', '19:12:00', 'Brishti Roy', '', '9058344587', '', 'ASdfdd', 18, 'female', '2023-04-20 13:39:41'),
(12, 'Fever', 'Vivek_Sharma', '2023-04-21', '19:12:00', 'Brishti Roy', '', '9058344587', '', 'ASdfdd', 18, 'female', '2023-04-20 13:40:14'),
(13, 'Fever', 'Vivek_Sharma', '2023-04-21', '19:12:00', 'Brishti Roy', '', '9058344587', '', 'ASdfdd', 18, 'female', '2023-04-20 13:44:54'),
(14, 'Fever', 'Vivek_Sharma', '2023-04-21', '19:12:00', 'Brishti Roy', '', '9058344587', '', 'ASdfdd', 18, 'female', '2023-04-20 13:53:11'),
(15, 'Cold/Cough', 'Rajesh_Gupta', '2023-04-21', '20:33:00', 'Brishti Roy', '', '', '', '', 19, 'others', '2023-04-20 15:01:51'),
(16, 'Fever', 'Sanjay_Patelt', '2023-04-22', '19:15:00', 'Brishti Roy', '', '9058344587', '', 'ASdfdd', 18, 'female', '2023-04-20 15:37:47'),
(17, 'Cold/Cough', 'Priya_Kapoor', '2023-04-22', '02:30:00', 'Aditi sahu', '', '9058344587', '', 'fgvb', 18, 'male', '2023-04-20 16:56:29'),
(18, 'Cold/Cough', 'Priya_Kapoor', '2023-04-22', '02:30:00', 'Aditi sahu', '', '9058344587', '', 'fgvb', 18, 'male', '2023-04-20 17:11:29'),
(19, 'Cold/Cough', 'Priya_Kapoor', '2023-04-22', '02:30:00', 'Aditi sahu', '', '9058344587', '', 'fgvb', 18, 'male', '2023-04-20 17:11:42'),
(20, 'Cold/Cough', 'Priya_Kapoor', '2023-04-22', '02:30:00', 'Aditi sahu', '', '9058344587', '', 'fgvb', 18, 'male', '2023-04-20 17:15:06'),
(21, 'Fever', 'Sanjay_Patelt', '2023-04-30', '04:00:00', 'Mrudula Sawant', '', '7506070136', '', 'vfdc', 20, 'female', '2023-04-20 17:15:58'),
(22, 'Fever', 'Sanjay_Patelt', '2023-04-30', '04:00:00', 'Mrudula Sawant', '', '7506070136', '', 'vfdc', 20, 'female', '2023-04-20 17:16:35'),
(23, 'Cold/Cough', 'Rajesh_Gupta', '2023-04-21', '23:00:00', 'Brishti Roy', '', '9058344587', '', 'fgv', 9, 'male', '2023-04-20 17:31:16'),
(24, 'Cold/Cough', 'Abhishek_Singh', '2023-04-23', '13:00:00', 'Mrudula Sawant', '', '7506070136', '', 'asdfgh', 20, 'female', '2023-04-21 05:27:46'),
(25, 'Cold/Cough', 'Pooja_Shah', '2023-04-22', '12:00:00', 'brishtiroy', '', '9058344587', '', 'asdfghj', 21, 'female', '2023-04-21 06:20:13'),
(26, 'Fever', 'Rajesh Gupta', '2023-04-26', '16:25:00', 'Brishti Roy', '', '9058344587', '', 'dxcfvgbhjn', 20, 'male', '2023-04-21 07:52:38'),
(27, 'Others', 'Neha Singh', '2023-04-22', '12:30:00', 'Hiya Roy', '', '9867315302', '', 'tv', 13, 'female', '2023-04-21 16:13:32'),
(28, 'Others', 'Meera Reddy', '2023-04-22', '03:50:00', 'Hiya Roy', '', '9867315302', '', 'tv', 13, 'female', '2023-04-21 16:17:15'),
(29, 'Cold/Cough', 'Ruchi Verma', '2023-04-22', '23:30:00', 'Hiya Roy', '', '9867315302', '', 'qwertyuiop', 19, 'female', '2023-04-21 17:57:22'),
(30, 'Fever', 'Abhishek Singh', '2023-04-23', '19:00:00', 'Brishti Roy', '', '9058344587', '', 'sdf', 18, 'female', '2023-04-22 10:29:33'),
(31, 'Fever', 'Abhishek Singh', '2023-04-23', '19:00:00', 'Brishti Roy', '', '9058344587', '', 'sdf', 18, 'female', '2023-04-22 10:32:59'),
(32, 'Cold/Cough', 'Sanjay Patelt', '2023-04-23', '16:20:00', 'Brishti Roy', '', '9058344587', '', 'qwertyui', 18, 'male', '2023-04-22 10:49:24'),
(33, 'Fever', 'Sanjay Patelt', '2023-04-23', '20:40:00', 'brishti', 'Roy', '9058344587', 'brishti.roy@somaiya.', 'asdfghj', 18, 'female', '2023-04-22 11:05:22'),
(34, 'Toothache', 'Neha Singh', '2023-04-23', '20:50:00', 'Brishti', 'Roy', '9058344587', 'brishti.roy@somaiya.', 'qwertyuiop', 19, 'female', '2023-04-22 11:13:47'),
(35, 'Toothache', 'Swati Sharma', '2023-04-24', '17:16:00', 'brishti', 'Roy', '7506070136', 'hiyaroy2602@gmail.co', 'qwertyuiop', 19, 'male', '2023-04-22 11:45:24'),
(36, 'Back pain', 'Ruchi Verma', '2023-04-23', '12:30:00', 'HIYA', 'Roy', '1234567890', 'hiyaroy2602@gmail.co', 'WEH,tent no. 1,road 45', 967, 'female', '2023-04-22 18:01:56'),
(37, 'Heart attack', 'Dr.Ashutosh Patel', '2023-04-30', '10:48:00', 'Mrudula', 'Sawant', '7506070136', 'mrudula.s@somaiya.edy', 'qwertyuiop', 20, 'female', '2023-04-25 05:18:42'),
(38, 'Fever', 'Dr.Meera Reddy', '2023-04-26', '11:00:00', 'Aditi', 'Sambrekar', '8766728547', 'sambrekaraditi@gmail.com', 'abc,Mumbai', 19, 'female', '2023-04-25 05:23:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_details`
--
ALTER TABLE `appointment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
