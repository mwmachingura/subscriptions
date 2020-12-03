-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 04:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subscriptions_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `dateofbirth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `postaladdress` varchar(100) NOT NULL,
  `mobilenumber` varchar(30) NOT NULL,
  `subscriptiontype` varchar(20) NOT NULL,
  `deliverymethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriber_id`, `firstname`, `lastname`, `dateofbirth`, `email`, `postaladdress`, `mobilenumber`, `subscriptiontype`, `deliverymethod`) VALUES
(1, 'Ella', 'Tamhu', '1990-05-14', 'etamhu@gmail.com', '50 Indice Drive, Masvingo', '+263779822457', 'Premium', 'Text'),
(3, 'Bella', 'Swan', '1969-08-22', 'bswan@gmail.com', '44 Green Estate, New York, USA', '+1883698574', 'Basic', 'Mail'),
(4, 'Tendekai', 'Nhau', '1975-05-12', 'tnhau@hotmail.co.zw', '52 Place Road, Harare', '+263785442192', 'Basic', 'Text'),
(5, 'Farai', 'Mhara', '1992-02-05', 'farie@gmail.com', '25 Hitlon Road, Gweru', '+263775968124', 'Premium', 'Mail');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobilenumber` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `residentialaddress` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `mobilenumber`, `dateofbirth`, `residentialaddress`, `department`) VALUES
(1, 'Mutsa', 'Machingura', 'mutsamach', 'admin@example.com', '+263773274942', '1996-08-14', '43, Mnyanda Street, Harare', 'IT'),
(2, 'Millicent', 'Ndoro', 'ndoromillie', 'ndorom@admin.co.zw', '+263775587546', '1995-10-25', '50 Irene Drive, Mutare', 'Marketing'),
(3, 'Owen', 'Munagi', 'omunagiza', 'munagiowen@work.co.za', '+27783558965', '1995-01-22', '30 Tutbury Close, Harare', 'Sales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
