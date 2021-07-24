-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 12:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_registry`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_pass` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `favourite1` varchar(50) NOT NULL,
  `favourite2` varchar(50) NOT NULL,
  `favourite3` varchar(50) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  `address3` varchar(300) NOT NULL,
  `contact1` bigint(20) NOT NULL,
  `contact2` bigint(20) NOT NULL,
  `contact3` bigint(20) NOT NULL,
  `favourite4` varchar(20) NOT NULL,
  `favourite5` varchar(20) NOT NULL,
  `contact4` bigint(12) NOT NULL,
  `contact5` bigint(11) NOT NULL,
  `address4` varchar(300) NOT NULL,
  `address5` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `confirm_pass`, `id`, `email`, `favourite1`, `favourite2`, `favourite3`, `address1`, `address2`, `address3`, `contact1`, `contact2`, `contact3`, `favourite4`, `favourite5`, `contact4`, `contact5`, `address4`, `address5`) VALUES
('hamza18', '12345', '12345', 17, 'hamzanasim2001@gmail.com', 'Healthspring Clinic', 'Reliance Fresh Grocery Store', 'Swastik Hardware', 'Shop Number 20, Ground Floor, Meredien Apartments, Sector 6, Landmark: Near Direct2u Grocery Store, Navi Mumbai', 'Plot No - 06 & 07, Sant Jnaneshwar Mauli Marg, Dr D Y Patil Vidyanagar, Nerul East, Sector 5, Nerul, Navi Mumbai, Maharashtra 400706', 'F2 Shopping Center Shop No 13, Nerul Station Road, Nerul, Navi Mumbai - 400706, Opposite Nerul Station', 8045688433, 2227727882, 8976350032, 'Axis Bank ATM', 'Lokal Café and Bistr', 0, 8369727491, 'Nerul West, Station Road, NL - 1 Type, Sector 10, Nerul, Navi Mumbai', 'Shop 2, 3 & 4, Seawood Avenue, Sector 3, Kharghar, Navi Mumbai'),
('test1', '123', '123', 18, 'test@yahoo.com', 'Havmor Ice Cream', 'Lokal Café and Bistro', 'True Health Care Clinic', 'Shop 10, Mahavir Niwas, Plot 301, Sector 21, Nerul, Navi Mumbai - 400706, Near Seawoods Darawe Station , Navi Mumbai , Opposite Haware Centurion Mall', 'Shop 2, 3 & 4, Seawood Avenue, Sector 3, Kharghar, Navi Mumbai', '1st FLR Office Number 10, Ambika Medical Centre, Plot Number 23, Building Number- 1, Sector 8, Samadhan Corner, Phase-II, Landmark: Adjacent to Rajiv Gandhi Flyover & Beside Kamlesh Hospital, Navi Mumbai', 9820085098, 8369727491, 2071178378, 'Anuj Auto petrol pum', 'Seasons Hotel', 2227708012, 7977345614, 'Plot No 45, Nerul, Navi Mumbai - 400706, Near Sector 13', 'Plot No.45, Sector -13, D.Y.Patil Stadium Road, Nerul, Navi Mumbai, Maharashtra 400706'),
('test2', '12345', '12345', 19, 'test@example.com', 'Hotel Starwood', 'Lokal Café and Bistro', 'Café Creme', 'Hotel Starwood Residency Hotel Mumbai, Sector 1, Shiravane, Nerul, Navi Mumbai, Maharashtra, India', 'Shop 2, 3 & 4, Seawood Avenue, Sector 3, Kharghar, Navi Mumbai', '2, Plot 64 & 65, Seawood Arcade 1, Sector 19, Nerul, Navi Mumbai', 1246201616, 8369727491, 8828407009, '', '', 0, 0, '', ''),
('test13', '123456', '123456', 20, 'test@yahoo.com', 'Apollo Sugar Clinic', '', '', 'Parsik Hill Road, Ekta Vihar-Cbd Belapur, Sector Number- 21, Off Uran Nerul Road, Landmark: Opposite Wounderspark, Navi Mumbai', '', '', 8049475028, 0, 0, '', '', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
