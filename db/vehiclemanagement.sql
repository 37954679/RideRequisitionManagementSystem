-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 02:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehiclemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `School_Club` varchar(30) NOT NULL,
  `Total_Number` varchar(30) NOT NULL,
  `VehicleRequested` varchar(30) NOT NULL,
  `Reason_For_Booking` varchar(40) NOT NULL,
  `Destination` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `RegNumber` varchar(40) NOT NULL,
  `TotalNumber` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `approval` varchar(30) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `StudentName`, `School_Club`, `Total_Number`, `VehicleRequested`, `Reason_For_Booking`, `Destination`, `date`, `RegNumber`, `TotalNumber`, `status`, `approval`) VALUES
(12, 'Beatrice Odera', 'Science Engineering and Techno', '', 'KAC334J', 'To help The poor', 'Turkana', '2022-12-21', 'bbit/mg/1423/09/19', 50, 0, 'approved'),
(27, 'Vincent', 'Science Engineering and Techno', '', 'KAC334J', 'Kaba', 'Kabarak', '2022-12-22', 'INTE?MG?2277/05/18', 12, 0, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `VehicleType` varchar(30) NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL,
  `VehicleNumberPlate` varchar(40) NOT NULL,
  `Availability` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `Name`, `Email`, `VehicleType`, `PhoneNumber`, `VehicleNumberPlate`, `Availability`, `password`) VALUES
(1, 'admin@gmail.com', 'abbyjerono2000@gmail.com', 'Buses', '071234567', 'KAC334J', 'unavailable', '123456'),
(2, 'admin@gmail.com', 'abbyjerono2000@gmail.com', 'Buses', '0756789034', 'Available', 'unavailable', '123456'),
(3, 'Vincent', 'vincentbettoh@gmail.com', 'Buses', '0712345678', 'KAC334J', 'available', '123456'),
(4, 'Victor', 'victor@gmail.com', 'Buses', '0712345678', 'KAC334J', 'unavailable', '123456'),
(5, 'IT2030', 'abbyjerono2000@gmail.com', 'Buses', '0789009876', 'Available', 'unavailable', 'staff123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `StaffNo` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Name`, `Department`, `StaffNo`, `Password`, `email`) VALUES
(1, 'VIncent Bett', 'IT', 'IT2030', 'staff123', ''),
(2, 'KARIU MARK', 'ICT', '77779IO', 'staff123', ''),
(3, 'jonah langat', 'ICT', '123ict', 'staff123', 'bodera@kabarak.ac.ke');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Event` varchar(30) NOT NULL,
  `School` varchar(30) NOT NULL,
  `RegistrationNumber` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `Event`, `School`, `RegistrationNumber`, `email`) VALUES
(1, 'VIncent Bett', 'Clubs', 'Business', 'INTE?MG?2277/05/18', 'vincentbettoh@gmail.com'),
(5, 'Beatrice Odera', 'Clubs', 'Business and Economics', 'bbit/mg/1423/09/19', 'beatriceodera75@gmail.com'),
(7, 'rian', 'Basketball Tournament', 'SSET', 'cs/mg/12345/12345/12345', 'wayako@kabarak.ac.ke'),
(8, 'rian', 'Basketball Tournament', 'SSET', 'INTE?MG?2277/05/18', 'wayako@kabarak.ac.ke'),
(9, 'amerix', '', 'SSET', '', ''),
(10, 'emiily kiptoo', 'academics', 'Business and Economics', 'LAW/3454/09/12', 'emmykoskei@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin@gmail.com', '123456', 'admin'),
(19, 'LAW/3454/09/12', 'student', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `VehicleType` varchar(30) NOT NULL,
  `NumberPlate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`VehicleType`, `NumberPlate`) VALUES
('Buses', 'KAC334J'),
('Buses', 'kbl345'),
('Buses', 'kbl345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
