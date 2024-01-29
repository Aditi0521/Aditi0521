-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 02:27 PM
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
(38, 'Fever', 'Dr.Meera Reddy', '2023-04-26', '11:00:00', 'Aditi', 'Sambrekar', '8766728547', 'sambrekaraditi@gmail.com', 'abc,Mumbai', 19, 'female', '2023-04-25 05:23:11'),
(39, 'Period issues', 'Dr.Pooja Shah', '2023-05-05', '16:30:00', 'Kanishka', 'Raikward', '9058344587', 'kanishka.r@gmail.com', 'jasdkjcdajf ', 25, 'female', '2023-04-30 15:04:33'),
(40, 'Others', 'Dr.Anil Kumar', '2023-05-06', '02:10:00', 'Shivesh', 'Bhat', '8766728547', 'brishti.roy@somaiya.edu', 'vbDSJJVCjjwv', 33, 'male', '2023-04-30 15:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `card_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `card_num` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exp_m` int(2) NOT NULL,
  `exp_y` int(2) NOT NULL,
  `cvv` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `f_name`, `l_name`, `email`, `mobile`, `card_name`, `card_num`, `exp_m`, `exp_y`, `cvv`, `created_at`) VALUES
(1, 'brishti', 'roy', 'brishti.roy@somaiya.edu', '7045361587', 'brishti roy', '1234 5678 9012 3', 6, 23, 0, '2023-04-21 07:47:46'),
(2, 'brishti', 'roy', 'brishti.roy@somaiya.edu', '7045361587', 'brishti roy', '1234 5678 9012 3', 6, 23, 0, '2023-04-21 07:48:32'),
(3, 'brishti', 'roy', 'brishti.roy@somaiya.edu', '7045361587', 'brishti roy', '1234 5678 9012 3', 6, 23, 0, '2023-04-21 07:49:57'),
(4, 'brishti', 'roy', 'brishti.roy@somaiya.edu', '7045361587', 'brishti roy', '1234 5567 8888  ', 6, 23, 0, '2023-04-21 07:53:22'),
(5, 'brishti', 'roy', 'aditi.sahu@somaiya.edu', '7045361587', 'brishti roy', '1111 2222 3333 4', 11, 24, 0, '2023-04-21 07:57:09'),
(6, 'hiya', 'roy', 'hiyaroy2602@gmail.com', '9867315302', 'brishti roy', '1111 2222 3333 4', 12, 25, 0, '2023-04-21 16:14:42'),
(7, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'brishti roy', '1111 2222 3333 4', 11, 24, 0, '2023-04-21 16:17:57'),
(8, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 17:58:06'),
(9, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 18:36:08'),
(10, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 18:36:31'),
(11, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 18:36:35'),
(12, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 18:36:40'),
(13, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 18:36:46'),
(14, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 18:36:50'),
(15, 'Hiya', 'Roy', 'hiyaroy2602@gmail.com', '9867315302', 'hiya roy', '1111 1111 1111 1', 7, 19, 0, '2023-04-21 18:36:55'),
(16, 'brishti', 'Roy', 'brishti.roy@somaiya.edu', '7045361587', 'hiya roy', '1111 1111 1111 1', 2, 24, 0, '2023-04-22 10:30:13'),
(17, '', '', '', '', 'brishti roy', '1111 1111 1111 1', 12, 24, 0, '2023-04-22 11:06:43'),
(18, '', '', '', '', 'brishti roy', '1111 1111 1111 1', 10, 25, 0, '2023-04-22 11:14:27'),
(19, '', '', '', '', 'brishti roy', '1111 2222 3333 4', 10, 25, 0, '2023-04-22 11:46:33'),
(20, 'HIYA ', 'Roy', 'hiyaroy2602@gmail.co', '1234567890', 'brishti roy', '1111-2222-3333-4', 6, 25, 0, '2023-04-22 18:03:12'),
(21, 'Mrudula ', 'Sawant', 'mrudula.s@somaiya.edy', '7506070136', 'brishti roy', '1111 1111 1111 1', 10, 25, 0, '2023-04-25 05:19:57'),
(22, 'Aditi ', 'Sambrekar', 'sambrekaraditi@gmail.com', '8766728547', 'Aditi Sambrekar', '1111222233334444', 12, 30, 0, '2023-04-25 05:23:50'),
(23, 'Kanishka ', 'Raikward', 'kanishka.r@gmail.com', '9058344587', 'Kanishka', '1111 2222 3333 4', 9, 25, 0, '2023-04-30 15:05:03'),
(24, 'Shivesh ', 'Bhat', 'brishti.roy@somaiya.edu', '8766728547', 'DDCS', '1111 2222 3333 4', 12, 25, 0, '2023-04-30 15:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `doc-further-details`
--

CREATE TABLE `doc-further-details` (
  `id` int(11) NOT NULL,
  `doc_image` blob NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `about` text NOT NULL,
  `clinic_name` text NOT NULL,
  `clinic_address` text NOT NULL,
  `clinic_image` blob NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `services` text NOT NULL,
  `specialization` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `college` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year_passed` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hospital` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `from_year` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `to_year` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `registration` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doc-further-details`
--

INSERT INTO `doc-further-details` (`id`, `doc_image`, `gender`, `dob`, `about`, `clinic_name`, `clinic_address`, `clinic_image`, `address_1`, `address_2`, `city`, `state`, `country`, `code`, `services`, `specialization`, `degree`, `college`, `year_passed`, `hospital`, `from_year`, `to_year`, `designation`, `registration`, `year`, `created_at`) VALUES
(1, '', 'Male', '11/22/33', 'XCVBNM,', 'XCVBNM', 'XCVBNM', '', 'SDFGHJK', 'XCVBNM', 'ZTGF', 'Maharashtra', 'India', '519675', 'CVBNM', '', 'FWEKSNRz', 'vnakfdkvr', '3222', 'qrwfkjKS', '2101', '1122', 'BDJFZC FFDKJ', 'AMFKDJA', 3202, '2023-04-30 14:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `query_topic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `full_name`, `email`, `query_topic`, `phone`, `message`, `created_at`) VALUES
(1, '', '', '', '', '', '2023-04-13 18:29:29'),
(2, 'Brishti', 'brishti.roy@somaiya.edu', 'no', '9058344587', 'noo', '2023-04-13 18:29:55'),
(3, 'Aditi Shetty', 'brishti.roy@somaiya.edu', 'nothing', '9058344587', 'just bored in life', '2023-04-13 18:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `mobile`, `created_at`) VALUES
(1, '', '', '', '', '2023-04-13 17:46:05'),
(2, '', '', '', '', '2023-04-13 17:46:16'),
(8, 'Brishti Roy', 'brishti.roy@somaiya.edu', '', '', '2023-04-13 17:58:05'),
(9, 'Aditi sahu', 'brishti.roy@somaiya.edu', '', '', '2023-04-13 18:06:19'),
(10, 'Aditi sahu', 'brishti.roy@somaiya.edu', '', '', '2023-04-13 18:07:03'),
(11, 'Brishti Roy', 'brishti.roy@somaiya.edu', 'rwgwrgt', '7045361587', '2023-04-13 18:08:22'),
(12, 'Brishti Roy', 'brishti.roy@somaiya.edu', 'hdfgbfsvrhigjsf', '7045361587', '2023-04-13 18:09:29'),
(13, 'Aditi sahu', 'aditi.sahu@somaiya.edu', 'asdfgh', '7045361587', '2023-04-19 07:58:47'),
(14, '', '', '', '', '2023-04-26 13:54:34'),
(15, '', '', '', '', '2023-04-26 13:54:49'),
(16, 'Brishti Roy', 'brishti.roy@somaiya.edu', '1234567', '7045361587', '2023-04-26 13:55:19'),
(17, '', '', '', '', '2023-04-26 13:56:12'),
(18, '', '', '', '', '2023-04-26 13:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `signupdoc`
--

CREATE TABLE `signupdoc` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_name` text NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `medid` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `signupdoc`
--

INSERT INTO `signupdoc` (`id`, `userid`, `password`, `f_name`, `l_name`, `email`, `mobile`, `medid`, `created_at`) VALUES
(1, 'zxcvbnm', '12345', 'Hiya', 'Roy', 'brishti.roy@somaiya.edu', '9867315302', '101111', '2023-04-26 19:08:42'),
(2, 'zxcvbnm', '1234567890', 'Hiya', 'roy', 'brishti.roy@somaiya.edu', '7045361587', '101111', '2023-04-26 19:28:30'),
(3, 'zxcvbnm', '1234567890', 'Hiya', 'roy', 'brishti.roy@somaiya.edu', '7045361587', '101111', '2023-04-26 19:29:12'),
(4, 'zxcvbnm', '123456', 'brishti', 'Roy', 'brishti.roy@somaiya.edu', '9867315302', '101111', '2023-04-27 10:01:43'),
(5, 'zxcvbnm', '12345', 'brishti', 'Roy', 'brishti.roy@somaiya.edu', '9867315302', '101111', '2023-04-30 09:20:17'),
(6, '', '', '', '', '', '', '', '2023-04-30 13:31:10'),
(7, '', '', '', '', '', '', '', '2023-04-30 13:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc-further-details`
--
ALTER TABLE `doc-further-details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signupdoc`
--
ALTER TABLE `signupdoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_details`
--
ALTER TABLE `appointment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `doc-further-details`
--
ALTER TABLE `doc-further-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `signupdoc`
--
ALTER TABLE `signupdoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
