-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 01:06 PM
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
-- Database: `info_for_directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `essential`
--

CREATE TABLE `essential` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `essential`
--

INSERT INTO `essential` (`id`, `name`, `address`, `contact`) VALUES
(1, 'Navi Mumbai Mahanagar Palika Fire Brigade Nerul', '98, Jagatguru Aadi Shankracharya Marg, near Wonders Park, Nerul East, Sector 27, Nerul, Navi Mumbai, Maharashtra 400706', 2227707101),
(2, 'Indian Oil Fuel Station petrol pump', 'P1s, Shiravane, Ahilya Gokul Patil Road, Nerul, Navi Mumbai - 400706', 2227708007),
(3, 'Shri Sai Auto Service petrol pump', 'Plot No 4, Nerul, Navi Mumbai - 400706, Opposite D Y Patil, Vidyanagar, Sector No 1', 2227708007),
(4, 'Anuj Auto petrol pump', 'Plto No 45, Nerul, Navi Mumbai - 400706, Near Sector 13', 2227708012),
(5, 'Gian Automobiles Petrol Pump', 'Plot No 15 Sector 25, Nerul, Navi Mumbai - 400706', 9833041119),
(6, 'Om Sai Petroleum (Petrol Pump)', 'Plot No 14, Uran Phata Road, Cbd Belapur, Navi Mumbai - 400614, Sector 21', 2227520265),
(7, 'Hp Petrol Pump', 'Plot No.2, Seawoods West, Sector 44, Nerul, Navi Mumbai, Maharashtra 400706', 9821898890),
(8, 'Wellness Forever Pharmacy', 'Shop No 7 & 8, Vignahar Building, Plot No 1/1B, Nerul, Navi Mumbai - 400706, Sector No 21', 2227705835),
(9, 'DY Patil Pharmacy', 'C/O Dr Dy Patil Hospital, Nerul, Navi Mumbai - 400706, Sector 5', 8605011508),
(10, 'Adarsh Medical & General Stores pharmacy', '1st Floor Ashirwad Hospital, Nerul, Navi Mumbai - 400706, Sector 1', 9833694354),
(11, 'Shri Dattakripa Pharmacy', 'Plot No 8/3, Nerul, Navi Mumbai - 400706, Sector 8', 2227725102),
(12, 'National Pharmacy And General Store', 'Shop No 2 Plot No 14 G Sect 12 Shivaji Chowk Kharghar, Navi Mumbai, Maharashtra 410210', 9833035155),
(13, 'Wellness Forever (Pharmacy/different branch)', 'Shop No 2, Ground Floor, Chandrai Arcade, Plot No 24/25/26, Nerul, Navi Mumbai - 400706, Opposite Nerul Railway Station, Sector No 20', 9167394096),
(14, 'Nerul Police Station', 'Jagatguru Aadi Shankracharya Marg, Sector 23, Nerul, Navi Mumbai, Maharashtra 400706', 2227702324),
(15, 'India Post', 'Sector 8, Nerul, First Floor, Nerul, Navi Mumbai - 400706', 9172573229),
(16, 'Post Office', 'Phase I, Nerul, Navi Mumbai - 400706, Near S P O Sector 3', 2227707782),
(17, 'D Y Patil Healthcare Gynaecologist', 'DY Patil Healthcare D-wing, Sector-5,Nerul, Navi Mumbai', 2071172714),
(18, 'Tulsi Maternity & Gynaecology Clinic', 'Shop Number 2, Shreeji Darshan CHS, Plot Number 48/49, Sector -40, Landmark: Seawoods Grand Central Mall, Navi Mumbai', 8879996122),
(19, 'Shree Women Clinic Gynaecology', 'Shree womens clinic, shop no.1, shree Radhakrishna society, plot no.33, sector 42A, Seawoods, near seawoods bus stop,Nerul-400706, Landmark: namitas gym, Navi Mumbai', 4448134870),
(20, 'Motherhood Hospital Gynaecology', 'Motherhood Hospital, Fountain Square Building, Sector 7, Kharghar, Navi Mumbai, Maharashtra 410210', 2048556477),
(21, 'Apollo Hospitals Gynaecology', 'Plot Number 13, Parsik Hill Road, Off Uran Road, Sector 23, CBD Belapur Landmark: Opposite Nerul Wonders Park Belapur, Navi Mumbai', 2071185428),
(22, 'Terna Speciality Hospital Gynaecology', 'Plot no 12, Sector 22, Nerul West Landmark: Opp. Nerul Railway Station Nerul, Navi Mumbai', 2048553341),
(23, 'Dr. Sawant Clinic Pediatrician', '10, Kamlabai Birasdar Marg, Nerul East, Sector 21, Nerul, Navi Mumbai, Maharashtra 400706', 2227722256),
(24, 'Dr. Shruti Kalkekar Pediatrician', 'Shop no - 5, New Horizon CHS, Plot no. 1,2 & 3, near Navratna Restaurant, Sector 46, Seawoods, Navi Mumbai, Maharashtra 400706', 9769842515),
(25, 'Jack N Jill Pediatrician Clinic', 'Shop no 7,8,9 Madhushree CHS, Plot Number 33, Opp, Seawoods West, Kendriya Vihar, Sector 40, Nerul, Navi Mumbai, Maharashtra 400706', 7400350001),
(26, 'Shubhashish Pediatrician', '201, Shankar Changu Kanha Thakur Marg, Sector 20, Shankar Changu Kanha Thakur Marg, Sector 20, Nerul, Navi Mumbai, Maharashtra 400706', 7208161798),
(27, 'Dr. Anand Sude Pediatrician', 'Plot no. 27, Ganesh Mandir Marg, Sector 24, Juinagar, Navi Mumbai, Maharashtra 400705', 8108199861),
(28, 'Child Health Centre Pediatrician', 'Sai Prasad, Shopping Complex, Plot Number 17, Sector Number 8., Landmark: Near Sahkar Baza, Navi Mumbai', 2071177328),
(29, 'Healthspring Clinic', 'Shop Number 20, Ground Floor, Meredien Apartments, Sector 6, Landmark: Near Direct2u Grocery Store, Navi Mumbai', 8045688433),
(30, 'Apollo Sugar Clinic', 'Parsik Hill Road, Ekta Vihar-Cbd Belapur, Sector Number- 21, Off Uran Nerul Road, Landmark: Opposite Wounderspark, Navi Mumbai', 8049475028),
(31, 'Bansal Speciality Clinic', 'Shop Number 1 , Plot Number 72, Hem Parbat Co Operative Housing Society, Sector-19, Landmark: Opposite Shankaracharaya Garden, Navi Mumbai', 2248932929),
(32, 'Shivangi Clinic', 'Unit Number 1, First Floor, A-Wing, Olive Complex CHS, Plot Number 44, Sect-42, D\'Mart Road, Seawoods (West), Landmark: Near Grand Central Mall Seawoods Railway Station, Navi Mumbai', 8037298999),
(33, 'True Health Care Clinic', '1st FLR Office Number 10, Ambika Medical Centre, Plot Number 23, Building Number- 1, Sector 8, Samadhan Corner, Phase-II, Landmark: Adjacent to Rajiv Gandhi Flyover & Beside Kamlesh Hospital, Navi Mumbai', 2071178378),
(34, 'Aesthe Touch Dental Clinic', 'Flat No.87/87 A, New Sector 50, Vishnu Shreyas, CHS Cooperative Society, Seawoods, Landmark: Opp. Coorparation Bank., Navi Mumbai, Landmark: Opposite Coorparation Bank, Navi Mumbai', 2071187164),
(35, 'HDFC Bank Ltd', 'Shop No 14, Ground Floor, Coral Crest, Plot No 3, Nerul, Navi Mumbai - 400706, Near Sector 23, Near Nerul Station', 22277224007),
(36, 'ICICI Bank Ltd', 'Unit No 14, Plot No 3, Coral Crest Co Operative Housing Society, Nerul, Navi Mumbai - 400706, Near Sector 23', 9021667777),
(37, 'Union Bank Of India', 'F 009, Commercial Complex, Nerul, Navi Mumbai - 400706, Nerul Railway Station', 2227716317),
(38, 'Axis Bank Ltd', 'Shop No 14, 15, Shanti Vaibhav Co Operative Housing Society, Nerul, Navi Mumbai - 400706, Sector 42 A', 18604195555),
(39, 'Kotak Mahindra Bank', 'Shop No 38-42, Krishna Kamal Co-operative Housing Society, Sector 21, Nerul, Navi Mumbai - 400706, Opposite HDFC Bank & ICICI Bank', 18602662666),
(40, 'State Bank of India', 'Mangalmurti, Nerul, Navi Mumbai - 400706, Sector 20, Opposite Nerul Railway Station', 2227706382),
(41, 'D Mart Grocery Store', 'Plot No, 9, Kamaladevi Birajdar Marg, Nerul East, Sector 21, Nerul, Navi Mumbai, Maharashtra 400706', 2227713881),
(42, 'Reliance Fresh Grocery Store', 'Plot No - 06 & 07, Sant Jnaneshwar Mauli Marg, Dr D Y Patil Vidyanagar, Nerul East, Sector 5, Nerul, Navi Mumbai, Maharashtra 400706', 2227727882),
(43, 'Krishna Grocery Stores', 'Shop No. 1, 2 Sector 06 Plot 187, Palm Bridge, Nerul Sector 6, Navi Mumbai - 400706, Julelal Temple', 7666889298),
(44, 'Vishwas General and Grocery Store', 'F-2, Darshan Apartment, Sector-20, Nerul, Navi Mumbai - 400706, Near Bus Depot', 2227755013),
(45, 'Shree Ashapura General and Grocery Store', 'Shop No 6, Twins Tower, Sector 17, Nerul, Navi Mumbai - 400706, Near Meena Tai Hospital', 2227705213),
(46, 'Apna Bazar Grocery Store', 'Plot no. 25/27, Shop No. 1 to 9, Meridian Apartments, Sector 6 Nerul Rd, Nerul, Navi Mumbai, Maharashtra 400706', 7506999230);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
