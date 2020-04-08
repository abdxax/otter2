-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 05:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otto`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `triton` int(11) NOT NULL,
  `price` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `triton`, `price`, `email`, `status`) VALUES
(1, 556, '', 'a@a.a', 'Done'),
(2, 10092, '', 'r@r.r', 'Done'),
(3, 80008, '', 'r@r.r', 'Done'),
(4, 10092, '', 'r@r.r', 'new'),
(5, 80008, '', 'r@r.r', 'new'),
(6, 889, '', 'shroq@gmail.com', 'Done'),
(7, 2, '', 'shroq@gmail.com', 'Done'),
(8, 5, '', 'a@a.a', 'new'),
(9, 100, '', 'jana@hotmal.com', 'Done'),
(10, 401, '', 'amal@gmail.com', 'Done'),
(11, 108, '', 'amal@gmail.com', 'Done'),
(12, 100, '', 'amal@gmail.com', 'Done'),
(13, 201, '', 'amal@gmail.com', 'Done'),
(14, 100, '', 'ali@gmail.com', 'Done'),
(15, 108, '', 'sara@gmail.com', 'Done'),
(16, 108, '', 'wed@gmail.com', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `spath` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `spath`) VALUES
(22, 'Makkah ', 'img/m.jpg'),
(25, 'Jeddah', 'img/j.jpg'),
(26, 'Riyadh', 'img/r.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `natl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `Gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`email`, `name`, `age`, `phone`, `natl`, `id`, `Gender`) VALUES
('ali@gmail.com', 'ali ali', '21', '03456744333', 'saudi', 1234567890, 'male'),
('amal@gmail.com', 'Amal Ali', '22', '0538874324', 'saudi', 1112345643, 'female'),
('jana@hotmal.com', 'jana ali', '22', '08765433345', 'saudi', 1234567890, 'female'),
('saja123@gmail.com', 'saja s', '54', '12345678909', 'saudi', 438002653, 'female'),
('sara@gmail.com', 'Sara Ahmed', '32', '0532201234', 'saudi', 1112345643, 'female'),
('shroq@gmail.com', 'shroq ali', '22', '0506771234', 'saudi', 1234567890, 'female'),
('ts@s.e', 'rr dd', '12', '123', 'zz', 111, 'male'),
('ty@t.t', 'mmm nn', '44', '123', '3s', 33, 'male'),
('wed@gmail.com', 'wed ali', '33', '0543456879', 'saudi', 438002653, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `city_id` int(11) NOT NULL,
  `tripon` int(20) NOT NULL,
  `DeparturTime` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `ArrivalTime` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `city_to` int(11) NOT NULL,
  `OperationsDays` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_trav` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`city_id`, `tripon`, `DeparturTime`, `ArrivalTime`, `city_to`, `OperationsDays`, `price`, `date_trav`) VALUES
(25, 100, '2:00 p.m', '3:00 p.m', 22, 'Mon', '200', '3/16/2020'),
(25, 102, '10:00a.m', '11:00a.m', 22, 'Mon', '150', '3/9/2020'),
(22, 108, '10:00a.m', '11:00a.m', 25, 'Sun', '200', '3/8/2020'),
(22, 109, '2:00 p.m', '3:00 p.m', 25, 'Sat', '200', '3/7/2020'),
(25, 123, '2:00 p.m', '6:00 p.m', 26, 'Sat', '400', '3/5/2020'),
(25, 201, '2:00 p.m', '4:00 p.m', 23, 'Wed', '300', '3/18/2020'),
(22, 401, '2:00 p.m', '3:00 p.m', 25, 'Sat', '100S.R EC', '3/12/2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `role`) VALUES
('a@a.a', 'd9a6c45eaa6239c8d568f5bac5ff2681ed64f972', 1),
('ali@gmail.com', '2c38b264ef1fa13fdf8c232b47ba5a1dc4218bb4', 2),
('amal@gmail.com', '09ccbd0ba216106cc143c32fa7d9db6a8e6ef42d', 2),
('saja123@gmail.com', '237c4387e5634fb7d632f9187ea8a0b6ca96607a', 2),
('sara@gmail.com', '4d25709e1340ddc938eba4ace1e8fa6d3f068687', 2),
('wed@gmail.com', 'b10bd076d791d2d2296d9e7c47bac2e64ae381dd', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`tripon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
