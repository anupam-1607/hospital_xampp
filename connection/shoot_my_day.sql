-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 11:01 AM
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
-- Database: `shoot_my_day`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `e_id` int(11) NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `e_name` varchar(50) NOT NULL,
  `e_from` date NOT NULL,
  `e_to` date NOT NULL,
  `e_disc` varchar(100) NOT NULL,
  `e_tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`e_id`, `event_date`, `e_name`, `e_from`, `e_to`, `e_disc`, `e_tag`) VALUES
(1, '2020-02-28 09:58:17', 'Utrayan 2020', '2020-01-12', '2020-01-16', 'Get some special themes in Gujarat', '#UTR2020'),
(2, '2020-02-28 09:58:17', 'Holi 2020', '2020-02-12', '2020-01-19', 'Celebrate your festivals with colorful memories. ', '#HOLI2020');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `email`, `pass`, `type`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', 'admin'),
(3, 'anupam_mistry', 'anupam@gmail.com', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `o_id` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `u_name` varchar(50) NOT NULL,
  `u_num` varchar(50) NOT NULL,
  `peoples` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_num` varchar(50) NOT NULL,
  `f_date` date NOT NULL,
  `t_date` date NOT NULL,
  `shoot` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`o_id`, `booking_date`, `u_name`, `u_num`, `peoples`, `state`, `city`, `area`, `c_name`, `c_num`, `f_date`, `t_date`, `shoot`, `package`) VALUES
(1, '2020-02-28 09:57:41', 'Wakim', 'wikki@gmail.com', '2', 'Rajsthan', 'Jaipur', 'Gam', 'Maharshi', '63258914', '2020-01-14', '0000-00-00', 'Fashion', '2000'),
(2, '2020-02-28 09:57:41', 'abc', 'abc123', '4', 'Gujarat', 'Nadiad', 'Vaishali', 'Hardik', '2362547139', '2020-05-24', '2020-05-25', 'Baby shower', '2500'),
(3, '2020-02-28 09:57:41', 'abc2', 'abc222', '150', 'Gujarat', 'Nadiad', 'Vaniyavad', 'Maharshi', '2314853698', '2020-02-12', '2020-02-15', 'Wedding', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `cameraman`
--

CREATE TABLE `cameraman` (
  `id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `camera` varchar(50) NOT NULL,
  `studio` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cameraman`
--

INSERT INTO `cameraman` (`id`, `register_date`, `fullname`, `email`, `phone`, `camera`, `studio`, `state`, `city`, `birthdate`, `uname`, `pass`, `gender`) VALUES
(1, '2020-02-28 09:59:29', 'Hemin Patel', 'hemin@gmail.com', 954789332, 'Soney A7', 'Hemin Gp Studio', '', '', '1992-07-03', 'hemin007', '123456', 'M'),
(6, '2020-02-28 09:59:29', 'Mayur', 'mayur@gmail.com', 2147483647, 'Nikon', 'The MK Studio', '', '', '1999-04-23', 'mayurmakwana', '1234566', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 0, 'Diu'),
(2, 0, 'Udaipur'),
(3, 0, 'Mubai'),
(4, 0, 'Kochi'),
(5, 0, 'Panji');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `or_id` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`or_id`, `from`, `to`, `payment`) VALUES
(1, '2020-01-01', '2020-01-01', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `shoot`
--

CREATE TABLE `shoot` (
  `sid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoot`
--

INSERT INTO `shoot` (`sid`, `type`) VALUES
(1, 'wedding'),
(2, 'fashion'),
(3, 'baby_shoot');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `city_id`, `state_name`) VALUES
(1, 0, 'Gujrat'),
(2, 0, 'Rajasthan'),
(3, 0, 'Madhya Pradesh'),
(4, 0, 'Goa'),
(5, 0, 'Kerala');

-- --------------------------------------------------------

--
-- Table structure for table `uplodsss`
--

CREATE TABLE `uplodsss` (
  `p_id` int(11) NOT NULL,
  `imgs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uplodsss`
--

INSERT INTO `uplodsss` (`p_id`, `imgs`) VALUES
(2, 'single_offer_img_2.png'),
(3, 'single_offer_img_2.png'),
(4, 'Photogr_2.jpg'),
(9, 'IMG_20191228_000947.jpg'),
(10, 'IMG_20191228_000947.jpg'),
(11, 'IMG_20191228_000947.jpg'),
(12, 'IMG_20191228_000947.jpg'),
(13, 'IMG_20191228_000947.jpg'),
(14, 'IMG_20191228_000947.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `register_date`, `fname`, `lname`, `phone`, `email`, `birthdate`, `city`, `uname`, `pass`, `gender`) VALUES
(2, '2020-02-28 09:49:01', 'Aaryan', 'Raaja', 0, 'anu@gmail.com', '1998-07-16', '', 'aryan1607', '123456', 'M'),
(3, '2020-02-28 09:49:01', 'Aaryan', 'Raaja', 0, 'anu@gmail.com', '1998-07-16', '', 'aryan1607', '123456', 'M'),
(7, '2020-02-28 09:49:01', 'Vimal', 'kesari', 0, 'vimal@gmail.com', '1990-02-12', '', 'vimaaa', '123456', 'M'),
(8, '2020-02-28 09:49:01', 'Swami', 'PAtel', 0, 'kr@gmail.com', '1998-11-24', '', 'swami007', '123456', 'M'),
(15, '2020-02-28 09:49:01', 'Chintan', 'Solanki', 2147483647, 'chintu@gmail.com', '1900-04-23', '', 'chintu123', '123456', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `v_id` int(11) NOT NULL,
  `add_info` timestamp NOT NULL DEFAULT current_timestamp(),
  `v_pic` varchar(50) NOT NULL,
  `v_disc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `cameraman`
--
ALTER TABLE `cameraman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `shoot`
--
ALTER TABLE `shoot`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `uplodsss`
--
ALTER TABLE `uplodsss`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cameraman`
--
ALTER TABLE `cameraman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoot`
--
ALTER TABLE `shoot`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uplodsss`
--
ALTER TABLE `uplodsss`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
