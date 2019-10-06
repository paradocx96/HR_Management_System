-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 06:55 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `mstatus` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `joindate` date NOT NULL,
  `password` varchar(100) NOT NULL,
  `nofchildren` int(5) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `nic`, `nationality`, `religion`, `mstatus`, `gender`, `phone`, `email`, `username`, `birthday`, `address`, `designation`, `joindate`, `password`, `nofchildren`, `lastlogin`, `is_deleted`) VALUES
(1, 'Janith', 'Sudaraka', '902142157V', 'Sri Lanka', 'Buddhism', 'Married', 'Male', 772135456, 'janith@gmail.com', 'janith', '1990-02-14', 'No.193, Kandekatiya, Boralasgamuwa', 'Business Analyst', '2018-09-30', 'janith1990', 1, '2019-10-04 16:52:48', 0),
(2, 'Chathura', 'Janith', '928546972V', 'Sri Lanka', 'Buddhism', 'Married', 'Male', 775845287, 'chathura@yahoo.com', 'chathura', '1992-08-15', 'PO.BOX.1001, Colombo 09', 'Business Analyst', '2018-09-30', 'chathura1992', 2, '2019-10-06 04:59:13', 0),
(3, 'Charuka', 'Siripala', '962154789V', 'Sri Lanka', 'Christianity', 'Unmarried', 'Male', 710158754, 'charuka@gmail.com', 'siripala', '1996-02-15', 'No.123, Kalagedihena, Nittabuwa', 'Assistant HR Manager', '2018-10-05', 'siripala1996', 0, '2019-10-05 02:05:31', 0),
(4, 'Dayas', 'Gunasekara', '975145698V', 'Sri Lanka', 'Buddhism', 'Unmarried', 'Male', 755889895, 'dayas@gmail.com', 'dayas', '1997-05-14', 'No.13/1, Pallewaththa, Kaduwela', 'Marketing consultant', '2018-10-05', 'dayas1997', 0, '2019-10-06 05:01:05', 0),
(5, 'Sirisena', 'Sumathipala', '815463587V', 'Sri Lanka', 'Christianity', 'Married', 'Male', 772164564, 'sirisena@hotmail.com', 'sirisena', '1981-05-04', 'No.651, Arangala, Malabe', 'Financial Planner', '2018-11-05', 'sirisena1981', 2, '2019-10-06 05:02:59', 0);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
