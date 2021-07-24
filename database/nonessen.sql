-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 12:24 PM
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
-- Table structure for table `nonessen`
--

CREATE TABLE `nonessen` (
  `id` int(75) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nonessen`
--

INSERT INTO `nonessen` (`id`, `name`, `address`, `contact`) VALUES
(1, 'Hotel Starwood Residency', 'Hotel Starwood Residency Hotel Mumbai, Sector 1, Shiravane, Nerul, Navi Mumbai, Maharashtra, India', 1246201616),
(2, 'Hotel Sky Suites By Monarch', '26,27,28 plot no. 4 and 6, Fairmount Premises ,Sector 17, Palm beach road, Sanpada, Navi Mumbai, Thane, Maharashtra, 400705', 1246201784),
(3, 'The Park Hotel', 'No 1, Sector 10, CBD Belapur, Navi Mumbai, Maharashtra 400614', 2267589000),
(4, 'Raj Inn Guest House/Hotel', 'PAPD 55 MIDC,Near manisha,Shirvane,Nerul', 8456201558),
(5, 'Aishwarya Residency Hotel', 'Plot No 34/B, Sector 23, Nerul, Darave, opposite Seawood Station, East, Navi Mumbai, Maharashtra 400706', 1246201322),
(6, 'Seasons Hotel', 'Plot No.45, Sector -13, D.Y.Patil Stadium Road, Nerul, Navi Mumbai, Maharashtra 400706', 7977345614),
(7, 'Axis Bank ATM', 'Nerul West, Station Road, NL - 1 Type, Sector 10, Nerul, Navi Mumbai', 0),
(8, 'State Bank Of India ATM', 'Nerul West, Station Road, Sector 20, Nerul, Navi Mumbai', 0),
(9, 'Kotak Mahindra ATM', 'Nerul Station Complex, Sector 20, Nerul West, Navi Mumbai', 0),
(10, 'Union Bank of India ATM', 'Nerul Station Complex, Mata Amritanandamayi Marg, Sector 20, Nerul West, Navi Mumbai', 0),
(11, 'HDFC Bank ATM', 'Mata Amritanandamayi Marg, Sector 20, Nerul, Navi Mumbai', 0),
(12, 'ICICI Bank ATM', 'Cbd-Belapur, Shop No 5,Plot No 36,Sector 15,Vishnu Bldg, Navi Mumbai', 0),
(13, 'Contigo Cafe', 'Plot 190A, Sector 12, Vashi, Navi Mumbai', 7710866660),
(14, 'Cafe Creme', '2, Plot 64 & 65, Seawood Arcade 1, Sector 19, Nerul, Navi Mumbai', 8828407009),
(15, 'Lokal Cafe & Bistro', 'Shop 2, 3 & 4, Seawood Avenue, Sector 3, Kharghar, Navi Mumbai', 8369727491),
(16, 'Hugs & Mugs Cafe', 'Shop 24, Sector 4, Bhoomi Towers, Kharghar, Navi Mumbai', 9324412141),
(17, 'Cafe Coffee Day', '4, Gr Flr, Ahilya Gokul Patil Rd, Sector 1, Shiravane, Nerul, Mumbai, Maharashtra 400706', 6363924305),
(18, 'Starbucks Cafe', 'UG Level, Seawoods Grand Central, Sector 40, Nerul, Navi Mumbai, Maharashtra 400706', 7045107808),
(19, 'Apeejay School', 'Nerul, Navi Mumbai - 400706, Near Nerul Railway Station, Opposite Jain Temple, Sector No 15', 2227703635),
(20, 'Delhi World Public School', 'Plot No 7A & 7B, Sector -12, Nerul, Navi Mumbai - 400706, Opposite - Poonam Towers/ Gaon Devi Mandir', 7947458184),
(21, 'Jaipuriar School', 'Plot No 12, Sector No 18, Off Palm Beach Road, Sanpada, Navi Mumbai - 400703, Near Moraj Residency', 7947169205),
(23, 'DAV Public School', 'Plot No 34, Nerul, Navi Mumbai - 400706, Sector No 48,Shwood', 2227714017),
(25, 'Selection Plywood Hardware', 'Shop No.5, Vighnaharta Complex, Plot No. 9, Sector 6, Nerul, Navi Mumbai - 400706, Opposite Samadhan Restaurant', 7947170345),
(26, 'Draksha Park Hardware', '1& 2, Durga, Plot No 44, Sarsole Village, Phase II, Sector-06, Nerul, Navi Mumbai - 400706, Nr. Bikaner', 9022723532),
(27, 'Swastik Hardware ', 'F2 Shopping Center Shop No 13, Nerul Station Road, Nerul, Navi Mumbai - 400706, Opposite Nerul Station', 8976350032),
(28, 'Shivam Electrical & Hardware Store', 'Shop No 14 F/2, Akarshan Apartment, Sector 15, Nerul, Navi Mumbai - 400706, Near Nerul Railway Station, Sector 15', 9819756581),
(29, 'Vardhaman Electric & Hardware', 'Shop No 12, Seawoods Arcade, Plot No 65, Sector No 19, Nerul, Navi Mumbai - 400706, Opp Agrawal Corner', 9820227561),
(30, 'Ply Point Hardware', 'Plot No 13, Shop No 3, Seawood Arcade 2, Nerul, Navi Mumbai - 400706, Near Dmart, Sector 21', 7718095610),
(31, 'Cinepolis Movie Cinema', 'Seawoods Grand Central Mall, 2nd Floor, Gharkul Road, Seawoods Sector 40, Navi Mumbai - 400706, Near Seawood Railway Station', 0),
(32, 'Max Movie Cinema', 'Haware Centurion Mall, Plot No 88/291, Ground Floor, Shop G-26, Nerul, Navi Mumbai - 400706, Near Sector No 19A', 2227717079),
(33, 'INOX Movie Cinema', '3rd Floor, Glomax Mall, Kharghar Station Road, Kharghar, Navi Mumbai - 410210, Near Railway Station', 7045644174),
(34, 'Natural Ice Cream Parlour', 'Shop No.19, Lakshmi Tower Co Operative Housig Society, Plot No 7, Seawoods, Navi Mumbai - 400706, Near Sector 42, Opposite Seawood Station', 8767931272),
(35, 'Havmor Ice Cream', 'Shop 10, Mahavir Niwas, Plot 301, Sector 21, Nerul, Navi Mumbai - 400706, Near Seawoods Darawe Station , Navi Mumbai , Opposite Haware Centurion Mall', 9820085098),
(36, 'Icekraft Ice Cream Parlour', 'Shop No-40, Shreeji Heights, Seawoods Sector 46a, Navi Mumbai - 400706, Off Palm Beach Road', 8080509028),
(37, 'A1 Ice Cream And Juice Centre', 'Shivkrupa Apartment, Building No 3, Nl 4, Shop No 2, Sector 11, Nerul, Navi Mumbai - 400706, Near Shivsena Shakha ', 9867275107),
(38, 'The Frosty Cream (Ice Cream Parlour)', 'Shop 25, Shreeji Heights, Seawoods Sector 46a, Navi Mumbai - 400706, Plot No 1 A, B, C', 7208284000),
(39, 'Brain Freeze Ice Cream And Desserts', 'Shop No 16, Plot No 46/47, Ramkrishna Niwas Co Operative Housing Society, Seawoods, Navi Mumbai - 400706, Near Sector 40, Opposite Seawoods Grand Central Mall', 8657368996),
(40, 'Yes Says Doggie (Pet Spa)', 'Shree Om Sadguru, Shop No 8, Plot No 122, Sector 50, Nerul, Navi Mumbai - 400706, New Seawoods, Near Palm Beach Road & Ratan Icon', 7947176969),
(41, 'Dogs N Pups (Pet shop)', 'Shop No 2, Paradise Palace, Palm Beach Road, Sector 6, Nerul, Navi Mumbai - 400706, Opp SBI Bank', 7947170905),
(42, 'Pets 4 U (Pet shop)', 'Shop No 1, Sparsh Chs, Plot No.101/102, Sector- 44, Seawoods, Navi Mumbai - 400706, Near SS High School ', 8308702823);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
