-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 12:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tau`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('a', '123'),
('b', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dangkive`
--

CREATE TABLE `dangkive` (
  `maDangKi` int(11) NOT NULL,
  `maTau` varchar(100) NOT NULL,
  `tenNguoiMua` varchar(100) NOT NULL,
  `soDienThoai` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `soChungMinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dangkive`
--

INSERT INTO `dangkive` (`maDangKi`, `maTau`, `tenNguoiMua`, `soDienThoai`, `email`, `soChungMinh`) VALUES
(2, '1', 'Le A', '3452423', 'ajsdfh@sdfa', '3534523'),
(3, '1', 'Le B', '534234', 'asfa@sd', '52345'),
(4, '2', 'Le C', '52424', 'asdf@asdf', '634654563'),
(5, '2', 'Le D', '63456345', 'sadf@sfs', '6563546'),
(6, '1', 'ads', '123', 'sdaf@ff', '23423'),
(9, 'AAA', 'Tr', '134', 'gsf@sgf', '1234'),
(10, 'AAA', 'fasdf', '23524', 'asdf@sasf', '354'),
(11, 'AAA', 'fasd', '1242134', 'fgw@sdfgs', '421412'),
(12, 'AAA', 'fasd', '1242134', 'fgw@sdfgs', '421412'),
(13, 'AAA', 'asf', '2343', 'asf@sdgdsfg', '12412'),
(14, 'AAA', 'gsdg', '1241', 'fg@gsdg', '21424'),
(15, 'AAA', 'fasdf', '123', 'sfasd@sdfas', '234124123');

-- --------------------------------------------------------

--
-- Table structure for table `ga`
--

CREATE TABLE `ga` (
  `maGa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenGa` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ga`
--

INSERT INTO `ga` (`maGa`, `tenGa`, `id`) VALUES
('dn', 'Da Nang', 1),
('hcm', 'tp Ho chi Minh', 2),
('hn', 'Ha Noi', 3),
('hu', 'Hue', 4),
('TY', 'Tokyo', 5),
('OY', 'Okayama', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tau`
--

CREATE TABLE `tau` (
  `maTau` varchar(100) NOT NULL,
  `gaDen` varchar(100) NOT NULL,
  `gaDi` varchar(100) NOT NULL,
  `ngayDi` date NOT NULL,
  `soLuongVe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tau`
--

INSERT INTO `tau` (`maTau`, `gaDen`, `gaDi`, `ngayDi`, `soLuongVe`) VALUES
('1', 'hcm', 'dn', '2018-05-19', 55),
('2', 'dn', 'hn', '2018-05-25', 50),
('AAA', 'dn', 'hcm', '2018-05-09', 36),
('D', 'dn', 'hcm', '2018-05-08', 223);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangkive`
--
ALTER TABLE `dangkive`
  ADD PRIMARY KEY (`maDangKi`),
  ADD KEY `maTau` (`maTau`);

--
-- Indexes for table `ga`
--
ALTER TABLE `ga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tau`
--
ALTER TABLE `tau`
  ADD PRIMARY KEY (`maTau`),
  ADD KEY `gaDen` (`gaDen`),
  ADD KEY `gaDi` (`gaDi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangkive`
--
ALTER TABLE `dangkive`
  MODIFY `maDangKi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ga`
--
ALTER TABLE `ga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dangkive`
--
ALTER TABLE `dangkive`
  ADD CONSTRAINT `dangkive_ibfk_1` FOREIGN KEY (`maTau`) REFERENCES `tau` (`maTau`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
