-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 08:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(223) NOT NULL,
  `Name` varchar(253) NOT NULL,
  `ac_no` varchar(225) NOT NULL,
  `balance` varchar(205) NOT NULL,
  `date` date NOT NULL,
  `ph_no` varchar(102) NOT NULL,
  `email` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `ac_no`, `balance`, `date`, `ph_no`, `email`) VALUES
(11, 'diwakar shukla', '465', '0000', '2122-02-01', '9619935337', 'shukladiwakar941@gmail.com'),
(12, 'diwakar shukla', '465', '12112', '2122-02-01', '9619935337', 'shukladiwakar941@gmail.com'),
(13, 'ajax', '456', '43535', '0354-05-31', '4345', '354sa@gmail.com'),
(14, 'alsml;asdja', '534', '3544', '0056-03-24', '34354', '64sa@gmail.com'),
(15, 'alsml;asdja', '5342454', '3544', '0056-03-24', '34354', '64sa@gmail.com'),
(16, 'alsml;asdja', '5342454', '3544', '0056-03-24', '34354', '64sa@gmail.com'),
(17, 'diwakar', '5277', '427', '4444-04-05', '2', '124527@hmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(223) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
