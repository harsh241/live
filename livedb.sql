-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 05:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `account_no` int(10) NOT NULL,
  `user_id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`account_no`, `user_id`, `username`, `password`) VALUES
(5, 1, 'harsh', '1234'),
(7, 23, 'ali', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `fullname` varchar(50) NOT NULL,
  `address` varchar(25) DEFAULT NULL,
  `city` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mpesa_code` varchar(10) NOT NULL,
  `product` varchar(60) NOT NULL,
  `quantity` varchar(60) NOT NULL,
  `unitcost` varchar(60) NOT NULL,
  `total` bigint(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`fullname`, `address`, `city`, `phone`, `email`, `mpesa_code`, `product`, `quantity`, `unitcost`, `total`) VALUES
('harsh', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'cbvnms', 'spanner', '3', '200', 0),
('harsh', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'cbvnms', 'spanner', '3', '200', 0),
('harsh', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'cbvnms', 'spanner', '3', '200', 0),
('harsh', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'cbvnms', 'spanner', '3', '200', 0),
('harsh', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'cbvnms', 'spanner', '3', '200', 0),
('harsh', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'cbvnms', 'spanner', '3', '200', 20000),
('neymis2009', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'cmnn', 'scanner', '12', '200', 2399),
('neymis2009', '12', 'nairobi', 778888, 'neymis2009@yahoo.com', 'cvs', 'shirt,trouser,food,bed', '60', '200', 25000),
('neymis2009', 'P.o Box 1409', 'Kitale', 711200386, 'jneyole434@gmail.com', 'bnwdfjkdfk', 'spanner', '3', '277', 5025),
('harsh', 'TYYU', 'U9O', 56, 'Y@T.COM', 'UIJK', 'JU', '4', '24', 105);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `name` varchar(100) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `price` bigint(10) NOT NULL,
  `total` bigint(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `prod_no` int(10) NOT NULL,
  `prod_id` int(15) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_descr` text NOT NULL,
  `prod_cat` varchar(100) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_quan` int(10) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`prod_no`, `prod_id`, `prod_name`, `prod_descr`, `prod_cat`, `prod_price`, `prod_quan`, `date_added`) VALUES
(10, 1, 'screws', 'multi purpose tools', 'Tools', 100, 20, '2017-09-13 16:42:14'),
(11, 22, 'hammer', 'steel', 'Tools', 100, 100, '2017-09-13 16:48:23'),
(12, 122, 'scanner', 'scanner', 'Phone', 100, 20, '2017-09-13 19:59:18'),
(13, 4, 'shoe', 'white', 'Fashion', 2500, 10, '2017-09-14 13:47:33'),
(14, 2222, 'guitar', 'electric guitar wooden', 'Fashion', 5000, 1, '2017-09-15 11:44:39'),
(15, 44, 'candy', 'fruty', 'Fashion', 100, 10, '2017-09-18 11:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `user_no` int(10) NOT NULL,
  `user_id` int(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `no_street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_no` bigint(15) NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`user_no`, `user_id`, `fname`, `mname`, `lname`, `no_street`, `city`, `contact_no`, `dob`, `age`, `gender`, `user_type`) VALUES
(9, 1, 'harsh', 'm', 'patel', 'gogate', 'ktl', 7102030, '0000-00-00', 21, 'Male', 'Administrator'),
(11, 23, 'david', 'rashid', 'ali', 'line', 'ktl', 454566, '2010-12-12', 22, 'Male', 'Clerk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`account_no`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`prod_no`),
  ADD UNIQUE KEY `prod_id` (`prod_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`user_no`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `account_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `prod_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `user_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
