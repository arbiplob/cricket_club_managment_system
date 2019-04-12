-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 05:37 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'biplob', '12345'),
(2, 'nahid', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `club_member`
--

CREATE TABLE `club_member` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` int(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Profession` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_member`
--

INSERT INTO `club_member` (`id`, `Name`, `Email`, `Number`, `Gender`, `Dob`, `Profession`, `Designation`, `Address`, `Picture`) VALUES
(2, 'Dewan Tajmul Islam Nahid', 'nahid@gmail.com', 175861760, 'Male', '1995-07-20', 'Student', 'President', 'Mohammadpur,Dhaka', '_DSC0088.JPG'),
(3, 'Azizur Rahman Biplob', 'arbiplob11@gmail.com', 1797363192, 'Male', '1997-12-28', 'Student', 'President', 'Malibug,Santinagor,Dhaka', '_DSC0043.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `ground_book`
--

CREATE TABLE `ground_book` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_number` varchar(50) NOT NULL,
  `Purpose` varchar(50) NOT NULL,
  `Booking_date` varchar(50) NOT NULL,
  `B_to` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground_book`
--

INSERT INTO `ground_book` (`id`, `Name`, `Email`, `Contact_number`, `Purpose`, `Booking_date`, `B_to`) VALUES
(1, 'Biplob', 'arbiplob11@gmail.com', '01797363192', 'Party', '2019-02-25', '2019-02-27'),
(2, 'Biplob', 'arbiplob11@gmail.com', '01797363192', 'Party', '2019-02-25', '2019-02-28'),
(3, 'Biplob', 'arbiplob11@gmail.com', '01797363192', 'Event', '2019-02-27', '2019-02-28'),
(4, 'Nahid', 'Nahid1715@gmail.com', '01758617607', 'Event', '2019-02-27', '2019-02-28'),
(5, 'Nahid', 'Nahid1715@gmail.com', '01758617607', 'Party', '2019-02-27', '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `player_reg`
--

CREATE TABLE `player_reg` (
  `id` int(11) NOT NULL,
  `Full_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_number` varchar(50) NOT NULL,
  `Dob` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Playing_role` varchar(50) NOT NULL,
  `Batting_style` varchar(50) NOT NULL,
  `Bowling_style` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_reg`
--

INSERT INTO `player_reg` (`id`, `Full_name`, `Email`, `Phone_number`, `Dob`, `Picture`, `Playing_role`, `Batting_style`, `Bowling_style`, `Address`, `User_name`, `Password`) VALUES
(3, 'Dewan Tajmul Islam Nahid', 'Nahid1715@gmail.com', '0175861760', '1996-08-21', 'Screenshot (10).png', 'Opening Batsman,First Bowler,Batting All-Rounder', 'Right Hand Bat', 'Left-arm fast-medium', 'Mohammadpur,Dhaka', 'nahid', '12345'),
(4, 'Bodrujjaman Jony', 'jony@gmail.com', '01937916755', '2019-03-04', '_DSC0002.JPG', 'Middle Order,Batting All-Rounder', 'Right Hand Bat', 'Right-arm fast-medium', 'Shukrabad', 'jony', '12345'),
(5, 'Azizur Rahman Biplob', 'arbiplob11@gmail.com', '01797363192', '1997-12-28', '_DSC0043.JPG', 'Middle Order,First Bowler,Batting All-Rounder', 'Right Hand Bat', 'Right-arm fast-medium', 'shantinagor,chamelibug,Dhaka', 'biplob', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_member`
--
ALTER TABLE `club_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ground_book`
--
ALTER TABLE `ground_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_reg`
--
ALTER TABLE `player_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `club_member`
--
ALTER TABLE `club_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ground_book`
--
ALTER TABLE `ground_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `player_reg`
--
ALTER TABLE `player_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
