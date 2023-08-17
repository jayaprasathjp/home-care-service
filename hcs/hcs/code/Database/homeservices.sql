-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 05:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservices`
--
CREATE DATABASE IF NOT EXISTS `homeservices` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `homeservices`;

-- --------------------------------------------------------

--
-- Table structure for table `category table`
--

CREATE TABLE `category table` (
  `cat_id` int(150) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category table`
--

INSERT INTO `category table` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'painter', 'All Painting related work '),
(2, 'electrician', 'all electricity related work'),
(3, 'cook', 'all daily cooking related work '),
(4, 'homecleaners', 'all cleaning related to home');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` bigint(15) NOT NULL,
  `customer_mail` varchar(50) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `customer_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_contact`, `customer_mail`, `customer_address`, `customer_pass`) VALUES
(1, 'kartik hegde', 8277311424, 'sushmitahegde.2002@gmail.com', 'room number 116,khk boys hostel,vidyagiri,dharwad', '1bbd886460827015e5d605ed44252251'),
(2, 'kartik hegde', 8277311424, 'kartik@gmail.com', 'room number 116,khk boys hostel,vidyagiri,dharwad', '1bbd886460827015e5d605ed44252251'),
(3, 'Sushmita V Hegde', 8277311424, 'sushmitahegde.2000@gmail.com', 'Hosaripal po:kodnagadde tq:sirsi(u.k)', '1bbd886460827015e5d605ed44252251');

-- --------------------------------------------------------

--
-- Table structure for table `rating_table`
--

CREATE TABLE `rating_table` (
  `rating_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `reviews` varchar(200) NOT NULL,
  `ratings` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating_table`
--

INSERT INTO `rating_table` (`rating_id`, `customer_id`, `reviews`, `ratings`) VALUES
(9, 2, 'ok', 4),
(10, 1, 'excellent', 4),
(11, 2, 'ok', 4),
(12, 2, 'excellent\r\n', 5),
(13, 1, 'good service', 5),
(14, 2, 'okkk\r\n', 0),
(15, 2, 'seht', 3),
(16, 2, 'ugtjfdh', 5);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `uname`, `email`, `psw`) VALUES
(1, 'kavya', 'sj09@gmail.com', 'Kavya@123'),
(2, 'muskan', 'muskanr@gmail.com', 'Muskan@123'),
(9, 'sandhya', 'sandhyasa931@gmail.com', 'Sandhya@123'),
(10, 'sandhya', 'sandhyasa931@gmail.com', 'Sandhya@123'),
(11, 'Sushmita V Hegde', 'sushmitahegde.2000@gmail.com', 'fb74a072fafb9686c4a711319f5b5969'),
(12, 'kartik v hegde', 'kartikhegde.2002@gmail.com', '1bbd886460827015e5d605ed44252251'),
(13, 'kartik hegde', 'sushmitahegde.2004@gmail.com', '1bbd886460827015e5d605ed44252251'),
(14, 'kartik v hegde', 'kartikhegde.1996@gmail.com', '1bbd886460827015e5d605ed44252251'),
(16, 'kartik v hegde', 'kartikhegde.2000@gmail.com', '1bbd886460827015e5d605ed44252251'),
(17, 'kartik v hegde', 'kartikhegde.1000@gmail.com', '1bbd886460827015e5d605ed44252251');

-- --------------------------------------------------------

--
-- Table structure for table `request table`
--

CREATE TABLE `request table` (
  `request_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `worker_id` int(15) NOT NULL,
  `request_date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  `work_cat` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request table`
--

INSERT INTO `request table` (`request_id`, `customer_id`, `worker_id`, `request_date`, `description`, `work_cat`, `status`) VALUES
(2, 0, 2, '0000-00-00', 'one room painting', '1', 'pending'),
(3, 0, 3, '0000-00-00', 'okkk', '1', 'pending'),
(7, 3, 3, '2023-01-13', 'new one', '1', 'pending'),
(8, 0, 2, '2023-01-13', 'one rrom', '1', 'pending'),
(9, 3, 2, '2023-01-13', 'neww room\r\n', '1', 'pending'),
(10, 3, 17, '2023-01-13', 'cfghdsxfh', '2', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(10) NOT NULL,
  `worker_name` varchar(100) NOT NULL,
  `worker_exp` int(10) NOT NULL,
  `worker_expertise` varchar(100) NOT NULL,
  `worker_cat` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `worker_name`, `worker_exp`, `worker_expertise`, `worker_cat`, `phone`) VALUES
(0, 'kartik v hegde', 3, 'best cook', '3', 8151048182),
(1, 'kartikhegde', 1, 'sdffds', '2', 453214532),
(2, 'rohan', 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni ullam ducimus quos, libero illo accu', '1', 3421342),
(3, 'raju', 3, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni ullam ducimus quos, libero illo accu', '1', 8776654321),
(17, 'kartik v hegde', 2, 'hdsfhd', '2', 8151048182);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category table`
--
ALTER TABLE `category table`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `rating_table`
--
ALTER TABLE `rating_table`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `request table`
--
ALTER TABLE `request table`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category table`
--
ALTER TABLE `category table`
  MODIFY `cat_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating_table`
--
ALTER TABLE `rating_table`
  MODIFY `rating_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request table`
--
ALTER TABLE `request table`
  MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
