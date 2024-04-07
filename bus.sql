-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2024 at 10:35 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `email`, `level`, `password`) VALUES
('modi', 'purvil', 'reger@gmail.com', 'Adminstartor', '5beb87bf838f6efe6a7eb4cf793e0de9'),
('purvil', 'modi', 'cebucb@gmail.com', 'owner', '5beb87bf838f6efe6a7eb4cf793e0de9');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `order_id` varchar(255) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `seat_no` varchar(50) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`order_id`, `ticket_id`, `bus_no`, `name`, `bank`, `email`, `pname`, `age`, `seat_no`) VALUES
('ORD-0000001', 'TKT-0000001', 'GJ147856', 'purvil', 'CORPORATION BANK', 'purvilmodi5@gmail.com', 'vdv', '83', '12'),
('ORD-0000001', 'TKT-0000002', 'GJ147856', 'purvil', 'CORPORATION BANK', 'purvilmodi5@gmail.com', 'dv', '84', '16'),
('ORD-0000002', 'TKT-0000003', 'GJ147856', 'purvil', 'UNION BANK OF INDIA', 'purvilmodi5@gmail.com', 'vashd', '85', '12'),
('ORD-0000002', 'TKT-0000004', 'GJ147856', 'purvil', 'UNION BANK OF INDIA', 'purvilmodi5@gmail.com', 'vdvs', '84', '16'),
('ORD-0000003', 'TKT-0000005', 'GJ147856', 'purvil', 'CANARA BANK', 'purvilmodi5@gmail.com', 'va', '85', '12'),
('ORD-0000004', 'TKT-0000006', 'GJ147856', 'Modi', 'CANARA BANK', 'purvilmodi2@gmail.com', 'cas', '86', '16'),
('ORD-0000005', 'TKT-0000007', 'GJ147856', 'Modi', 'GRAMIN VIKASH BANK', 'purvilmodi2@gmail.com', 'scsa', '87', '6'),
('ORD-0000006', 'TKT-0000008', 'GJ789678', 'Modi', 'BANDHAN BANK LIMITED', 'purvilmodi2@gmail.com', 'vbnc', '85', '15'),
('ORD-0000007', 'TKT-0000009', 'GJ789678', 'Modi', 'UNION BANK OF INDIA', 'purvilmodi2@gmail.com', 'nilesh', '13', '1'),
('ORD-0000007', 'TKT-0000010', 'GJ789678', 'Modi', 'UNION BANK OF INDIA', 'purvilmodi2@gmail.com', 'purvil', '20', '2'),
('ORD-0000008', 'TKT-0000011', 'GJ789678', 'Modi', 'UNION BANK OF INDIA', 'purvilmodi2@gmail.com', 'nb', '85', '9'),
('ORD-0000009', 'TKT-0000012', 'GJ789678', 'Modi', 'BANDHAN BANK LIMITED', 'purvilmodi2@gmail.com', 'bvvb', '85', '12'),
('ORD-0000009', 'TKT-0000013', 'GJ789678', 'Modi', 'BANDHAN BANK LIMITED', 'purvilmodi2@gmail.com', 'yruur', '83', '16'),
('ORD-0000010', 'TKT-0000014', 'GJ789678', 'Modi', 'ORIENTAL BANK OF COMMERCE', 'purvilmodi2@gmail.com', 'bdvabds', '85', '7'),
('ORD-0000010', 'TKT-0000015', 'GJ789678', 'Modi', 'ORIENTAL BANK OF COMMERCE', 'purvilmodi2@gmail.com', 'kvbdsakb', '86', '8'),
('ORD-0000010', 'TKT-0000016', 'GJ789678', 'Modi', 'ORIENTAL BANK OF COMMERCE', 'purvilmodi2@gmail.com', 'awev', '85', '11'),
('ORD-0000011', 'TKT-0000017', 'GJ15LK8569', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'bvw', '85', '15'),
('ORD-0000011', 'TKT-0000018', 'GJ15LK8569', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'vew', '84', '16'),
('ORD-0000012', 'TKT-0000019', 'GJ789678', 'Modi', 'BANDHAN BANK LIMITED', 'purvilmodi2@gmail.com', 'dr4x', '90', '7'),
('ORD-0000012', 'TKT-0000020', 'GJ789678', 'Modi', 'BANDHAN BANK LIMITED', 'purvilmodi2@gmail.com', 'dr4', '88', '10'),
('ORD-0000012', 'TKT-0000021', 'GJ789678', 'Modi', 'BANDHAN BANK LIMITED', 'purvilmodi2@gmail.com', 'awev', '86', '11'),
('ORD-0000013', 'TKT-0000022', 'GJ15LK8569', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'vcvdc', '87', '12'),
('ORD-0000013', 'TKT-0000023', 'GJ15LK8569', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'ads', '86', '14'),
('ORD-0000014', 'TKT-0000024', 'GJ15LK8569', 'Modi', 'BANK OF INDIA', 'purvilmodi2@gmail.com', 'dnvknd', '87', '9'),
('ORD-0000014', 'TKT-0000025', 'GJ15LK8569', 'Modi', 'BANK OF INDIA', 'purvilmodi2@gmail.com', 'acs', '85', '11'),
('ORD-0000015', 'TKT-0000026', 'GJ123654', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'n', '85', '11'),
('ORD-0000015', 'TKT-0000027', 'GJ123654', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'uiu', '84', '15'),
('ORD-0000016', 'TKT-0000028', 'GJ123654', 'Modi', 'UCO BANK', 'purvilmodi2@gmail.com', 'vsd', '84', '9'),
('ORD-0000017', 'TKT-0000029', 'GJ123654', 'Modi', 'BANK OF BARODA', 'purvilmodi2@gmail.com', 'cas', '86', '13'),
('ORD-0000018', 'TKT-0000030', 'GJ123654', 'Modi', 'BANK OF BARODA', 'purvilmodi2@gmail.com', 'karan', '24', '5'),
('ORD-0000019', 'TKT-0000031', 'GJ123654', 'Modi', 'STATE BANK OF INDIA', 'purvilmodi2@gmail.com', 'regbre', '20', '1'),
('ORD-0000019', 'TKT-0000032', 'GJ123654', 'Modi', 'STATE BANK OF INDIA', 'purvilmodi2@gmail.com', 'jay', '44', '2'),
('ORD-0000020', 'TKT-0000033', 'GJ0101KK', 'Modi', 'BANDHAN BANK LIMITED', 'purvilmodi2@gmail.com', 'jay', '12', '9');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
CREATE TABLE IF NOT EXISTS `bus` (
  `no` varchar(25) NOT NULL,
  `type` varchar(255) NOT NULL,
  `origin` varchar(250) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` int(11) NOT NULL,
  `arrival_time` time NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`no`, `type`, `origin`, `destination`, `date`, `time`, `price`, `arrival_time`) VALUES
('GJ01KL7896', 'Sleeper', 'Amod', 'Ankleshwar', '2024-03-31', '10:25:00', 52, '04:12:00'),
('GJ123654', 'Local', 'Disa', 'Dwarka', '2024-03-27', '04:00:00', 300, '11:54:06'),
('GJ01JK7885', 'Volvo Sleeper', 'Disa', 'Dwarka', '2024-03-28', '12:01:00', 850, '09:03:00'),
('GJ789678', 'volvo', 'Disa', 'Palanpur', '2024-03-31', '09:45:41', 500, '11:54:06'),
('GJ08uj2563', 'AC Sleeper', 'Abrama', 'Ahmedabad', '2024-04-11', '10:02:00', 522, '08:00:00'),
('GJ02BC7458', 'Volvo Seater', 'Disa', 'Palanpur', '2024-03-28', '10:00:00', 60, '10:30:00'),
('GJ15LK8569', 'Volvo Seater', 'Disa', 'Ahmedabad', '2024-03-21', '10:02:00', 400, '08:02:00'),
('GJ0101KK', 'Express', 'Disa', 'Dwarka', '2024-03-30', '15:00:00', 400, '19:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `email`, `mobile`, `name`, `password`, `address`, `image`) VALUES
('satyam', 'purvilmodi2@gmail.com', '9427202773', 'Modi', '5beb87bf838f6efe6a7eb4cf793e0de9', 'satyam society', 'Alpesh.jpg'),
('jay@123', 'jay123@gmail.com', '9987456324', 'jay', '5beb87bf838f6efe6a7eb4cf793e0de9', 'Deesa', 'student.jpg'),
('karan@123', 'karan123@gmail.com', '9874596321', 'karan malvi', '5beb87bf838f6efe6a7eb4cf793e0de9', 'palanpur', 'Darshanimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `order_id` varchar(255) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `exp_month` varchar(255) NOT NULL,
  `exp_year` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_age` varchar(255) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_id`, `ticket_id`, `bus_no`, `bank_name`, `card_name`, `card_no`, `exp_month`, `exp_year`, `cvv`, `seat`, `email`, `p_name`, `p_age`) VALUES
('ORD-0000020', 'TKT-0000033', 'GJ0101KK', 'iTtBiqUCf8G22AS8txbqy0TeCwp83aVhJ2NO2Ph7JuI=', 'zcXt2mFvs9J+MCyVXSbBXQ==', 'MnNQi7vte5DE1R2I6wSt+7jEcYVahDP2NfZYy0d9deM=', 'October', '2035', 'zk0utsXXUr/R8B6MZci1fw==', '9', 'purvilmodi2@gmail.com', 'jay', '12'),
('ORD-0000006', 'TKT-0000008', 'GJ789678', 'iTtBiqUCf8G22AS8txbqy0TeCwp83aVhJ2NO2Ph7JuI=', 'RDQG91q1zbdbUF/h5F9sCg==', 'UtItGedfejOTC4B5FK2dIvSCxT9c8SEjjw5sz8BpfFc=', 'August', '8569', 'lT67s1r7RpK+NjTszOVxHw==', '15', 'purvilmodi2@gmail.com', 'vbnc', '85'),
('ORD-0000009', 'TKT-0000012', 'GJ789678', 'iTtBiqUCf8G22AS8txbqy0TeCwp83aVhJ2NO2Ph7JuI=', '33BEphIBvwjvncR6jNsHjA==', 'WjK9/NFgxStZADHUM6Kdsz9f3XchdTHIK+B6xt5uRvs=', 'August', '8569', 'lT67s1r7RpK+NjTszOVxHw==', '12', 'purvilmodi2@gmail.com', 'bvvb', '85'),
('ORD-0000007', 'TKT-0000010', 'GJ789678', 's1rPUoYMDpgSkHvT9g/PRquo03lONT+XT77WOOVjg6o=', '5jNNnrZxwYdlDT+Y/XG8Hg==', '20KfyMc/zBM67bGX3bZJaKLQxt/yhHhVjkZN4V6EPwo=', 'March', '2024', 'wGMgkGhvVdgophgpYKV+Ag==', '2', 'purvilmodi2@gmail.com', 'purvil', '20'),
('ORD-0000012', 'TKT-0000019', 'GJ789678', 'iTtBiqUCf8G22AS8txbqy0TeCwp83aVhJ2NO2Ph7JuI=', 'AJVX9nTD0YZS9WNr7ujLgg==', 'hd2wo6gE4xLPEg/vM7mcFHYTaHyXk3wJ05YhLhxKSHI=', 'August', '2136', '7QL/NJMPfVF7XXkZSZycpw==', '7', 'purvilmodi2@gmail.com', 'dr4x', '90'),
('ORD-0000012', 'TKT-0000020', 'GJ789678', 'iTtBiqUCf8G22AS8txbqy0TeCwp83aVhJ2NO2Ph7JuI=', 'AJVX9nTD0YZS9WNr7ujLgg==', 'hd2wo6gE4xLPEg/vM7mcFHYTaHyXk3wJ05YhLhxKSHI=', 'August', '2136', '7QL/NJMPfVF7XXkZSZycpw==', '10', 'purvilmodi2@gmail.com', 'dr4', '88'),
('ORD-0000014', 'TKT-0000024', 'GJ15LK8569', 'tjEVlifC/ZwPEoybUIZEgw==', 'DyFpb1Lq24HK+jVUUAggwA==', 'RWTNtf+soXfBaCYgPdRL5NDJSPGulDMDaDNMHiPxuf4=', 'November', '8569', 'lT67s1r7RpK+NjTszOVxHw==', '9', 'purvilmodi2@gmail.com', 'dnvknd', '87'),
('ORD-0000014', 'TKT-0000025', 'GJ15LK8569', 'tjEVlifC/ZwPEoybUIZEgw==', 'DyFpb1Lq24HK+jVUUAggwA==', 'RWTNtf+soXfBaCYgPdRL5NDJSPGulDMDaDNMHiPxuf4=', 'November', '8569', 'lT67s1r7RpK+NjTszOVxHw==', '11', 'purvilmodi2@gmail.com', 'acs', '85'),
('ORD-0000015', 'TKT-0000026', 'GJ123654', 'F0eHDTXjeb0giCdlUoXXrHRuGTWh3h9V3igqKbruyho=', 'dIXIcHtEvG50Nf3qsMHr/g==', 'WjK9/NFgxStZADHUM6Kdsz9f3XchdTHIK+B6xt5uRvs=', 'September', '8569', 'wFYJI2wF1RyADwKOTEROKg==', '11', 'purvilmodi2@gmail.com', 'n', '85'),
('ORD-0000015', 'TKT-0000027', 'GJ123654', 'F0eHDTXjeb0giCdlUoXXrHRuGTWh3h9V3igqKbruyho=', 'dIXIcHtEvG50Nf3qsMHr/g==', 'WjK9/NFgxStZADHUM6Kdsz9f3XchdTHIK+B6xt5uRvs=', 'September', '8569', 'wFYJI2wF1RyADwKOTEROKg==', '15', 'purvilmodi2@gmail.com', 'uiu', '84'),
('ORD-0000016', 'TKT-0000028', 'GJ123654', 'R2ofLXkg/Fod2BMoW4TCQA==', 'VgGMvd66iwU4MwIbTozKkw==', 'D0VxCWBclaECS+FflfclExxQ8gWrBnA0zPaRcw1C6J0=', 'October', '8569', 'lT67s1r7RpK+NjTszOVxHw==', '9', 'purvilmodi2@gmail.com', 'vsd', '84'),
('ORD-0000017', 'TKT-0000029', 'GJ123654', 'ZaC1R2OrtPmw9z+AdZzX+Q==', '+kZX1T7mCy2ecfRHgZVnqQ==', '0YhIJab8ZrjQYSF6XhKa2xBcVT8tA7JieF+BKgUUyxs=', 'October', '7458', 'lT67s1r7RpK+NjTszOVxHw==', '13', 'purvilmodi2@gmail.com', 'cas', '86'),
('ORD-0000018', 'TKT-0000030', 'GJ123654', 'ZaC1R2OrtPmw9z+AdZzX+Q==', 'u3kw/js6bnAQkAvNF0j/8Q==', 'u6x/CRwDsbkc7D3qcma9R2HtGQz244r7mCFeUV0UX5M=', 'September', '2032', 'OVJFU3VWfuMMJom/HR6I8w==', '5', 'purvilmodi2@gmail.com', 'karan', '24'),
('ORD-0000019', 'TKT-0000031', 'GJ123654', 'TCordGQl5nBEkoIdghXKJTYAwcZDCvwO89qS4tQRE+Y=', 'HEfW7OouvXP/Lw/mAL19Ww==', 'nWqqrgtvpAn24zh0rOnKMHRi4PzNEQcF6N7SlvorLhE=', 'July', '2029', 'A58rq8EYKe4aMHtoFdGB3Q==', '1', 'purvilmodi2@gmail.com', 'regbre', '20');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

DROP TABLE IF EXISTS `pending`;
CREATE TABLE IF NOT EXISTS `pending` (
  `order_id` varchar(255) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`order_id`, `ticket_id`, `bus_no`, `name`, `bank`, `email`, `pname`, `age`, `seat_no`) VALUES
('ORD-0000002', 'TKT-0000003', 'GJ147856', 'purvil', 'UNION BANK OF INDIA', 'purvilmodi5@gmail.com', 'vashd', '85', '12'),
('ORD-0000002', 'TKT-0000004', 'GJ147856', 'purvil', 'UNION BANK OF INDIA', 'purvilmodi5@gmail.com', 'vdvs', '84', '16'),
('ORD-0000004', 'TKT-0000006', 'GJ147856', 'Modi', 'CANARA BANK', 'purvilmodi2@gmail.com', 'cas', '86', '16'),
('ORD-0000005', 'TKT-0000007', 'GJ147856', 'Modi', 'GRAMIN VIKASH BANK', 'purvilmodi2@gmail.com', 'scsa', '87', '6'),
('ORD-0000008', 'TKT-0000011', 'GJ789678', 'Modi', 'UNION BANK OF INDIA', 'purvilmodi2@gmail.com', 'nb', '85', '9'),
('ORD-0000013', 'TKT-0000023', 'GJ15LK8569', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'ads', '86', '14'),
('ORD-0000013', 'TKT-0000022', 'GJ15LK8569', 'Modi', 'INDIAN OVERSEAS BANK', 'purvilmodi2@gmail.com', 'vcvdc', '87', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
