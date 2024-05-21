-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2024 at 02:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `s_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`s_no`, `name`, `email`, `username`, `password`) VALUES
(1, 'Shuja ur Rahman', 'shujaurrehman210@gmail.com', 'shujaurrahman', '$2y$10$t4dvsV0gzJ0q2xktIsPBs.x8zRHGroM.s8bqdxnPIkRrjhr16zTBq');

-- --------------------------------------------------------

--
-- Table structure for table `contacus`
--

CREATE TABLE `contacus` (
  `s_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mssg` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacus`
--

INSERT INTO `contacus` (`s_no`, `name`, `email`, `mssg`, `time`) VALUES
(1, 'Shuja Ur Rahman', 'Shujaurrehman210@gmail.com', 'hye', '2024-03-15 02:38:22'),
(2, 'Shuja Ur Rahman', 'Shujaurrehman210@gmail.com', 'hye', '2024-03-15 02:38:27'),
(3, 'Shuja Ur Rahman', 'Shujaurrehman210@gmail.com', 'hye\r\n', '2024-03-15 02:38:33'),
(4, 'AQSA RAHMAN', 'Shujaurrehman210@gmail.com', 'dneufbe', '2024-03-15 02:38:38'),
(5, 'Shuja Ur Rahman', 'Shujaurrehman210@gmail.com', 'd, jebnjcjwnv', '2024-03-15 02:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` longtext NOT NULL,
  `media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `media`) VALUES
(36, 522260942, 611235416, 'MWmrq/QzNQ9qnhJj5uo4MhVSuo+fpNtsnk7v5fHcSvs=', ''),
(37, 611235416, 522260942, 'C1Ujqa814T63WaV1Nvy9ZQ6a4bSzCCeGYC6ubgmIG+s=', ''),
(38, 522260942, 611235416, 'aQp9rMMINBLkv6n4S/At8nXf4uGmVvxJvR5ZqPwd4wZc/Qsd9id7elVcoos0arD1iWTAaqqKOGYT74xBpIW7jNY+SctVWnMNRclDB6SWafs=', ''),
(40, 611235416, 522260942, '7srsRu3swPVf6loxxQKIbz8c71hElBZmSnNT6apTrvP6RcsDLqOlcuM9HdFvWQK/RScurEv0bfjabmJQusgKZB67WF2ADjBnpwRwwSyqxK8=', ''),
(41, 522260942, 611235416, 'hEtoL5Gb/4uPOMbcHY8XuGQDUQeWIxu8nz4bni3oPNMC+O+JTb6jXPq3w02RnDyCFyx8E8VmsJ9cGIcut126/8pXb/d+Mh4zbrqUkV3QUsIqgnus0Cg0hILwpu38jvvZ2PXd/yPRZWwnJ6FPuZ6l2g==', ''),
(42, 611235416, 522260942, 'J0YYPFv6ZDDCiBZm5HWpYGahtQYUJy0jpicRJet6Uhr1f+NFjy6fP/1uu2KebtNX', ''),
(43, 522260942, 611235416, 'A0JEcsJsschFEmq3dZitebkmZnOxLpaOJM+X6tMXK3c=', ''),
(44, 691425726, 682587391, 'U3VxOVPSSqjmtfL0uzsZmP0zaPAynk/QZWpEVRqhAPw=', ''),
(45, 682587391, 522260942, 'o/51/yh11tEsCePBeK/8A3Ylvtu58JuVw8HrNic+PEA=', ''),
(46, 682587391, 522260942, '6XNzY+twxIqGD9L4Qpz1M6i3sbKj8XLXxvPNOPaIqwk=', ''),
(47, 522260942, 682587391, 'ZrRmWWGnJX9gOfOMrLLxtQOqHEHdpWh9e7YIES5EAZU=', ''),
(48, 682587391, 522260942, 'qP21xaIBqscBWa1ASgecDHHuZ8bfJxMkcLKSV25aF6I=', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `code` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `code`, `status`) VALUES
(3, 522260942, 'Shuja', 'Rahman', 'Shujaurrehman210@gmail.com', '202cb962ac59075b964b07152d234b70', '1716227216Photo.jpg', 0, 'Active now'),
(4, 691425726, 'Shuja', 'Rahman', 'Shujaurrehm210@gmail.com', 'f7e0b956540676a129760a3eae309294', '1716227989Photo.jpg', 0, 'Active now'),
(5, 611235416, 'AES', 'Encryption', 'AES@gmail.com', '202cb962ac59075b964b07152d234b70', '1716234318ndp0qysajt951.png', 0, 'Active now'),
(6, 682587391, 'Arshad', 'Ahmad', 'arshadahmad@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1716273454Screenshot 2024-02-13 at 8.08.54 PM.png', 0, 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `email` (`email`) USING HASH,
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- Indexes for table `contacus`
--
ALTER TABLE `contacus`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacus`
--
ALTER TABLE `contacus`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
