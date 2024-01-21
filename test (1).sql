-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 03:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `bookingtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `articleID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `people_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `bookingtime`, `articleID`, `userID`, `amount`, `duration`, `people_number`) VALUES
(1, '2024-01-18 20:07:22', 1, 5, '960', 12, NULL),
(2, '2024-01-18 20:11:31', 1, 5, '960', 12, NULL),
(3, '2024-01-18 21:13:53', 1, 5, '880', 11, NULL),
(4, '2024-01-18 21:14:30', 1, 5, '880', 11, NULL),
(5, '2024-01-18 22:58:10', 2, 5, '36900', 123, NULL),
(6, '2024-01-19 06:50:32', 6, 5, '700', 7, NULL),
(7, '2024-01-19 08:05:35', 8, 5, '250', 5, NULL),
(8, '2024-01-19 09:21:45', 16, 5, '1800', 9, NULL),
(9, '2024-01-19 09:58:00', 2, 5, '3600', 12, NULL),
(10, '2024-01-19 11:31:11', 1, 5, '10560', 12, 11),
(11, '2024-01-19 12:40:07', 19, 5, '4200', 12, 5),
(12, '2024-01-19 14:12:29', 1, 5, '320', 2, 2),
(13, '2024-01-19 16:23:22', 24, 5, '43200', 12, 12),
(14, '2024-01-19 19:44:32', 1, 9, '5760', 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `comments_tb`
--

CREATE TABLE `comments_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Location` varchar(255) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments_tb`
--

INSERT INTO `comments_tb` (`id`, `username`, `subject`, `comment`, `date`, `Location`, `userID`) VALUES
(7, 'straton@gmail.com', 'Feedback', 'to be honest i like your services and i think you derserve a lot of appreciation', '2024-01-12 06:52:02', NULL, NULL),
(8, 'Zabron@gmail.com', 'Feedback', 'you have a bad services you deserve to be fired', '2024-01-12 06:55:45', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `Firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(200) DEFAULT 'Not null',
  `psw` varchar(100) DEFAULT NULL,
  `passwordconfirm` varchar(50) NOT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`Firstname`, `lastname`, `email`, `psw`, `passwordconfirm`, `locations`, `phone`, `gender`, `country_code`, `role`, `userID`) VALUES
('patrick', 'Mbabazi', 'smbabazipatrick@gmail.com', '1234', '1234', 'GACURIRO', '345678', 'MALE', NULL, 'Admin', 1),
('Patrick straton', 'Mbabazi', 'smbabazipatrick@gmail.com', '12', '12', 'GASABO', '781484407', 'MALE', NULL, 'Admin', 4),
('NIRAGIRE', 'Magnifique', 'magnifique@gmail.com', '345', '345', 'NDUBA', '781484407', 'MALE', NULL, 'user', 5),
('Straton', 'Mbabazi', 'smbabazipatrick@gmail.com', '11', '11', 'gisozi', '79087987', 'MALE', NULL, 'Agents', 6),
('MARTIN', 'MARIT', 'martinkizwa@gmail.com', '789', '789', 'GASABO', '79087987', 'MALE', NULL, 'Agents', 7),
('peter', 'NDAGIJIMANA', 'peterndag@gmail.com', '1212', '1212', 'gisozi', '79087987', 'MALE', '', 'user', 9),
('peter', 'NDAGIJIMANA', 'peterndag@gmail.com', '1212', '1212', 'gisozi', '79087987', 'MALE', '', 'user', 10),
('peter', 'NDAGIJIMANA', 'peterndag@gmail.com', '1212', '1212', 'gisozi', '79087987', 'MALE', '', 'user', 11),
('peter', 'NDAGIJIMANA', 'peterndag@gmail.com', '1313', '1313', 'GISOZI', '79087987', 'MALE', 'rda', 'user', 12),
('peter', 'NDAGIJIMANA', 'peterndag@gmail.com', '4566', '1313', 'GISOZI', '79087987', 'MALE', 'rda', 'Admin', 13),
('Zabron', 'NIYOMUSHUMBA', 'zabulonniyomushumba@gmail.com', '2121', '1212', 'GAKENKE', '79087987', 'MALE', '250', 'user', 14),
('samuel', 'Hakizimana', 'hakisamuel@gmail.com', '12', '12', 'GISOZI', '79087987', 'MALE', '250', 'user', 15),
('samuel', 'Hakizimana', 'hakisamuel@gmail.com', '12', '12', 'GISOZI', '79087987', 'MALE', '250', 'user', 16),
('Straton', 'Mbabazi', 'smbabazipatrick@gmail.com', 'M', 'M', 'GISOZI', '79087987', 'MALE', '250', 'user', 17),
('Straton', 'Mbabazi', 'smbabazipatrick@gmail.com', 'M', 'M', 'GISOZI', '79087987', 'MALE', '250', 'user', 18),
('kelia', 'UMUTESI', 'smbabazipatrick@gmail.com', '1Patrick?', '1Patrick?', 'GISOZI', '781484407', 'MALE', '250', 'user', 20),
('kelia', 'UMUTESI', 'smbabazipatrick@gmail.com', '1Patrick?', '1Patrick?', 'GISOZI', '781484407', 'MALE', '250', 'Agents', 21),
('Justine', 'ISHIMWE', 'ishimwe@gmail.com', '12paZZ$%', '12paZZ$%', 'GASABO', '780009090', 'FEMALE', '250', 'user', 22),
('Justine', 'ISHIMWE', 'ishimwe@gmail.com', '12paZZ$%', '12paZZ$%', 'GASABO', '780009090', 'FEMALE', '250', 'user', 23),
('gad', 'IRUMVA', 'irumva@gmail.com', 'iruMVA12#$', 'iruMVA12#$', 'MUSANZE', '782237079', 'FEMALE', '250', 'user', 24),
('Magnifique', 'NIRAGIRE', 'irumva@gmail.com', '13pazZO#$', '13pazZO#$', 'NDUBA', '79087987', 'MALE', '250', 'user', 25),
('Claudine', 'Iradukunda', 'claudine@gmail.com', '12klDN#$', '12klDN#$', 'MUSANZE', '79087987', 'FEMALE', '+244', NULL, 26),
('aline', 'NIYONIZERA', 'aline@gmail.com', '32aLI$#W', '32aLI$#W', 'GISOZI', '79087987', 'FEMALE', '+196', NULL, 27),
('Straton pazzo', 'Mutesi', 'smbabazipatrick@gmail.com', '1234pzZ$', '1234pzZ$', 'NDUBA', '780009090', 'MALE', '250', NULL, 28),
('Straton pazzo', 'Mutesi', 'smbabazipatrick@gmail.com', '1234pzZ$', '1234pzZ$', 'NDUBA', '780009090', 'MALE', '250', NULL, 29),
('Straton', 'Mbabazi', 'smbabazipatrick@gmail.com', '12345Sa$', '12345Sa$', 'GASABO', '79087987', 'FEMALE', '+196', NULL, 30),
('Straton', 'Mbabazi', 'smbabazipatrick@gmail.com', '12345Sa$', '12345Sa$', 'GASABO', '79087987', 'FEMALE', '+196', NULL, 31),
('Straton', 'Mbabazi', 'smbabazipatrick@gmail.com', '12345Sa$', '12345Sa$', 'GASABO', '79087987', 'FEMALE', '+196', NULL, 32);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `card_number` varchar(16) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `booking_id`, `username`, `payment_method`, `duration`, `card_number`, `amount`) VALUES
(26, 8, 'magnifique@gmail.com', 'mtn', 9, '0781484407', 1800.00),
(27, 8, 'magnifique@gmail.com', 'mtn', 9, '0781484407', 1800.00),
(28, 8, 'magnifique@gmail.com', 'airtel', 9, '0721484407', 1800.00),
(29, 8, 'magnifique@gmail.com', 'mtn', 9, '0781484407', 1800.00),
(30, 8, 'magnifique@gmail.com', 'credit_card', 9, '234567788899', 1800.00),
(31, 8, 'magnifique@gmail.com', 'credit_card', 9, '234567788899', 1800.00),
(32, 8, 'magnifique@gmail.com', 'airtel', 9, '234567788899', 1800.00),
(33, 5, 'magnifique@gmail.com', 'airtel', 123, '0721484407', 36900.00),
(34, 5, 'magnifique@gmail.com', 'airtel', 123, '0721484407', 36900.00),
(35, 5, 'magnifique@gmail.com', 'credit_card', 123, '0721484407', 36900.00),
(36, 5, 'magnifique@gmail.com', 'credit_card', 123, '0721484407', 36900.00),
(37, 5, 'magnifique@gmail.com', 'credit_card', 123, '0721484407', 36900.00),
(38, 1, 'magnifique@gmail.com', 'airtel', 12, '', 960.00),
(39, 11, 'magnifique@gmail.com', 'credit_card', 12, '', 4200.00),
(40, 11, 'magnifique@gmail.com', 'credit_card', 12, '2345677888993455', 4200.00),
(41, 11, 'magnifique@gmail.com', 'credit_card', 12, '2345677888993455', 4200.00),
(42, 11, 'magnifique@gmail.com', 'credit_card', 12, '2345677888993455', 4200.00),
(43, 11, 'magnifique@gmail.com', 'credit_card', 12, '2345677888993455', 4200.00),
(44, 1, 'magnifique@gmail.com', 'airtel', 12, '0721484407', 960.00),
(45, 13, 'magnifique@gmail.com', 'mtn', 12, '0781484407', 43200.00),
(46, 14, 'peterndag@gmail.com', 'credit_card', 9, '2345677888993455', 5760.00);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `articleID` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`articleID`, `image`, `image_name`, `price`, `location`, `phone_number`, `Description`, `Type`) VALUES
(1, 0x666174696d612e6a7067, ' FATIMA Hotel Kinigi-MUSANZE', 80, 'MUSANZE', '+250790879872', 'Include nice bedrooms and poor and excellent services', 'HOTEL'),
(2, 0x6769736f7a2e6a7067, 'HOUSE IN GISOZI-GASABO', 300, 'GISOZI', '+25079087983', 'Include nice bedrooms and swimming poor and kitchen', 'HOUSE'),
(3, 0x6769736f7a2e6a7067, 'HOUSE IN GISOZI-GASABO', 300, 'GISOZI', '+250790879872', 'Include nice bedrooms and swimming poor', 'HOUSE'),
(4, 0x6769736f7a2e6a7067, 'HOUSE IN GISOZI-GASABO', 300, 'GISOZI', '+250790879872', 'include five rooms and  kitchen', 'HOUSE'),
(5, 0x6769736f7a2e6a7067, 'HOUSE IN GISOZI-GASABO', 300, 'GISOZI', '+250790879872', 'Include nice bedrooms and swimming poor', 'HOUSE'),
(6, 0x4b4947414c492e6a7067, 'SELENA HOTEL NYARUGENGE', 100, 'NYARUGENGE', '+250790879872', 'Include nice bedrooms and swimming poor', 'HOTEL'),
(7, 0x736f6e61747562652e6a7067, 'House in KICUKIRO', 300, 'KICUKIRO', '+250790879872', 'include five rooms and kitchen and swimming pool', 'HOUSE'),
(8, 0x646f76652e6a7067, 'DOVE HOTEL KIGALI GASABO', 50, 'GISOZI', '+250790879872', 'Include nice bedrooms and  poor and excellent services', 'HOTEL'),
(15, 0x646f76652e6a7067, 'DOVE HOTEL KIGALI GISOZI', 50, 'GISOZI', '+250790879872', 'Include nice bedrooms and  poor and excellent services', 'HOTEL'),
(16, 0x6b61677567752e6a7067, 'HOUSE IN KAGUGU GASABO', 200, 'GISOZI', '+250790879872', 'include five rooms and other kitchen', 'HOUSE'),
(17, 0x6c656d69676f2e6a7067, 'LEMIGO HOTEL KICUKIRO-KIGALI', 60, 'KICUKIRO', '+250790879872', 'Include nice bedrooms and  poor and excellent services', 'HOTEL'),
(18, 0x6c656d69676f2e6a7067, 'LEMIGO HOTEL KICUKIRO', 60, 'KICUKIRO', '+250790879872', NULL, NULL),
(19, 0x68696c6c20766965772e6a7067, 'HILVIEW Hotel RUBAVUGISENYI', 70, 'GISENYI', '0788254412/0733', 'Include nice bedrooms and  poor and excellent services', 'HOTEL'),
(20, 0x68696c6c20766965772e6a7067, 'HILVIEW Hotel RUBAVUGISENYI', 70, 'GISENYI', '0788254412/0733', 'Include nice bedrooms and poor and excellent services', 'HOTEL'),
(21, 0x67616c696c656f2e6a7067, 'GALILEO Hotel RUKALI_HUYE', 70, 'HUYE', '+250790879872', NULL, NULL),
(22, 0x6b616e6f6d62652e6a7067, 'HOUSE LOCATED IN KANOMBE', 150, 'KANOMBE', '+250790879872', NULL, NULL),
(23, 0x6b696e616d62612e6a7067, 'HOUSE IN GISOZI KINAMBA', 150, 'GASABO', '+250790879872', NULL, NULL),
(24, 0x6e79616d6972616d626f2e6a7067, 'HOUSE IN NYAMIRAMBO', 300, 'NYARUGENGE', '+250790879872', '', 'HOUSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `articleID` (`articleID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `comments_tb`
--
ALTER TABLE `comments_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_user` (`userID`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`articleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments_tb`
--
ALTER TABLE `comments_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`articleID`) REFERENCES `uploads` (`articleID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `house` (`userID`);

--
-- Constraints for table `comments_tb`
--
ALTER TABLE `comments_tb`
  ADD CONSTRAINT `fk_comments_user` FOREIGN KEY (`userID`) REFERENCES `house` (`userID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
