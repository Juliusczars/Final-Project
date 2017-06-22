-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 11:54 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knhdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `SN` int(10) NOT NULL,
  `P_id` int(10) NOT NULL,
  `Order_no` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Pdate` date NOT NULL,
  `Createdby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`SN`, `P_id`, `Order_no`, `Name`, `Description`, `Quantity`, `Pdate`, `Createdby`) VALUES
(1, 1, 1, 'Lenovo', 'CPU', 10, '2017-04-24', 'JaneDoe'),
(4, 2, 2, 'Dell', 'Dell 19" monitors', 12, '2017-04-25', 'JaneDoe'),
(5, 3, 7, 'Laserjet', 'Printer', 12, '2017-05-05', 'Jmay'),
(6, 5, 9, 'Cisco e45t', '24 port switch', 5, '2017-05-05', 'Jmay'),
(8, 7, 11, 'CAT 6', 'network cables', 2, '2017-05-05', 'Jmay'),
(9, 8, 12, 'router and switch cabinets', 'cabinets', 5, '2017-05-05', 'Jmay'),
(10, 9, 13, 'TPC', 'UPS', 12, '2017-05-05', 'Jmay'),
(11, 10, 14, 'RJ45', 'networking equipment', 2, '2017-05-05', 'Jmay'),
(12, 11, 15, 'cartridge', 'printing tools', 4, '2017-05-05', 'Jmay'),
(13, 4, 17, 'HP ln32w', 'Keyboards and mouse', 45, '2017-05-13', 'Tom'),
(15, 6, 10, 'jfjf', 'Routers', 2, '2017-05-13', 'Tom'),
(17, 6, 18, 'Cisco ', 'Routers', 3, '2017-05-13', 'Tom');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `P_no` int(10) NOT NULL,
  `Id_no` int(10) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` int(50) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`P_no`, `Id_no`, `Fname`, `Lname`, `Email`, `Department`, `Address`, `Contact`, `Gender`) VALUES
(6000, 2340976, 'Jeremy', 'Clarkson', 'Jeremy@ymail.com', 'Human Resource', '096-098', 729876543, 'Male'),
(6001, 30276453, 'Hayley', 'Klaus', 'Hayley@gmail.com', 'Supply Chain', '348-01000', 789654372, 'Female'),
(6002, 3452678, 'Raymond', 'Richard', 'Richie@gmail.com', 'Finance', '0908-0200', 787890546, 'Male'),
(6003, 7689594, 'Jane', 'chen', 'Jchen@gmail.com', 'Reception', '345292', 689643903, 'Female'),
(6004, 87598595, 'Chloe', 'Charlie', 'Chloe@gmail.com', 'Level 1', '45, Nairobi', 795949494, 'Female'),
(6005, 969869, 'Charlie', 'Mikaelson', 'Mikaelson@hotmail.com', 'Paedetric', '6464-0600', 675849393, 'Male'),
(6006, 8657949, 'Nik', 'Klaus', 'Klaus@gmail.com', 'Level 10', '9079-0100', 789456709, 'Male'),
(6007, 2342978, 'Elijah', 'michael', 'Elijah@yahoo.com', 'Morgue', '879796', 79854637, 'Male'),
(6008, 231757, 'Kenneth', 'Peter', 'Peter@yahoo.com', 'Level 3', '4567890', 74056483, 'Male'),
(6009, 4567899, 'Mercy', 'Chela', 'Chela@gmail.com', 'Planning', '869696-07', 79854369, 'Female'),
(7499, 31330105, 'Jane', 'Doe', 'Janedoe@gmail.com', 'ICT', '69-20117', 710829547, 'Female'),
(7500, 30145001, 'John', 'Doe', 'Johndoe@gmail.com', 'ICT', '69-20117', 710768098, 'Male'),
(7501, 26958052, 'Tom', 'Neville', 'Tomnev@yahoo.com', 'ICT', '48344', 769897685, 'Male'),
(7502, 23456789, 'James', 'May', 'Jmay@hotmail.com', 'ICT', '345-00100', 798654738, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `ordering`
--

CREATE TABLE `ordering` (
  `Order_Id` int(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Order_date` date NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `procurement` varchar(50) NOT NULL,
  `Createdon` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `ordering`
--

INSERT INTO `ordering` (`Order_Id`, `Description`, `Quantity`, `Order_date`, `Reason`, `Status`, `procurement`, `Createdon`, `Orderedby`) VALUES
(1, 'CPU', 1, '2017-04-11', 'Item below re_order level', 'Approved', 'executed', '2017-04-29 08:22:24.815495', 'JaneDoe'),
(2, 'Monitor', 12, '2017-04-25', 'Quantity below re_order level', 'Approved', 'executed', '2017-04-28 07:16:16.787371', 'JaneDoe'),
(3, '500 GB HDD', 20, '2017-04-28', 'Required for replacements', 'Declined', 'pending', '2017-04-28 07:35:42.990860', 'JaneDoe'),
(4, 'hp', 2, '2017-04-20', 'hghghgd', 'Approved', 'pending', '2017-05-01 08:48:30.004294', 'JaneDoe'),
(7, 'Printer', 12, '2017-05-05', 'Refill stock', 'Approved', 'executed', '2017-05-05 08:00:03.512934', 'Jmay'),
(8, 'Computer Accessories', 20, '2017-05-05', 'out of stock\r\n', 'Declined', 'pending', '2017-05-05 07:55:58.093473', 'Jmay'),
(9, 'switches', 5, '2017-05-05', 'Required for installation', 'Approved', 'executed', '2017-05-05 08:01:55.502091', 'Jmay'),
(10, 'Routers', 2, '2017-05-05', 'Required for new installation', 'Approved', 'executed', '2017-05-13 09:29:38.518298', 'Jmay'),
(11, 'CAT 6 cables', 2, '2017-05-05', 'Required for new Installation', 'Approved', 'executed', '2017-05-05 08:04:49.699733', 'Jmay'),
(12, 'switch  cabinets', 5, '2017-05-05', 'Required for installation', 'Approved', 'executed', '2017-05-05 08:05:45.180500', 'Jmay'),
(13, 'UPSes', 12, '2017-05-05', 'For replacement', 'Approved', 'executed', '2017-05-05 08:06:28.876547', 'Jmay'),
(14, 'RJ45', 2, '2017-05-05', 'for installation', 'Approved', 'executed', '2017-05-05 08:07:33.059543', 'Jmay'),
(15, 'cartridges', 4, '2017-05-05', 'for replacements', 'Approved', 'executed', '2017-05-05 08:08:16.762996', 'Jmay'),
(16, 'Fiber optic cable rolls(800m)', 3, '2017-05-24', 'For new installation', 'pending', 'pending', '2017-05-13 08:33:43.420139', 'JaneDoe'),
(17, 'Keyboards and mouse', 45, '2017-05-13', 'For maintenance', 'Approved', 'executed', '2017-05-13 09:24:27.353879', 'Tom'),
(18, 'Routers', 3, '2017-05-13', 'For  installation', 'Approved', 'executed', '2017-05-13 09:30:11.797309', 'Tom');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Orderlev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_id`, `Description`, `Quantity`, `Orderlev`) VALUES
(1, 'Processing Unit(CPU)', 11, 5),
(2, 'Monitor', 12, 5),
(3, 'Printer', 12, 5),
(4, 'Computer Accessories', 45, 5),
(5, 'Switch/wireless AP', 5, 5),
(6, 'Router', 5, 5),
(7, 'Network cables', 2, 5),
(8, 'Cabinets', 5, 5),
(9, 'UPS', 12, 5),
(10, 'Network Accessories', 2, 5),
(11, 'Printing Accessories', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `p_dispatch`
--

CREATE TABLE `p_dispatch` (
  `SN` int(10) NOT NULL,
  `P_no` int(10) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Ddate` date NOT NULL,
  `Serialno` varchar(50) DEFAULT NULL,
  `Department` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Createdby` varchar(50) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `p_dispatch`
--

INSERT INTO `p_dispatch` (`SN`, `P_no`, `Description`, `Ddate`, `Serialno`, `Department`, `Location`, `Quantity`, `Createdby`, `Time`) VALUES
(1, 7501, 'Processing Unit(CPU)', '2017-03-25', '20CDNE', 'Supply Chain', 'Cashpoint', 4, '', '2017-05-05 06:45:07.632173'),
(2, 7500, 'Processing Unit(CPU)', '2017-03-23', 'lx', 'Level 6', 'cash office', 10, 'JaneDoe', '2017-04-30 09:47:39.099257'),
(3, 7502, 'Processing Unit(CPU)', '2017-04-24', 'LXRDF', 'Level 10', 'ward 5A', 12, 'JaneDoe', '2017-04-24 07:59:18.285988'),
(5, 7500, 'Monitor', '2017-05-04', 'Ljikol', 'Human Resource', 'Head of department', 1, 'JaneDoe', '2017-05-04 07:28:34.420369'),
(6, 6007, 'Printer', '2017-05-13', 'hjKL87', 'Eye Clinic', 'office 2', 1, 'JaneDoe', '2017-05-13 08:38:58.293915'),
(7, 6001, 'Computer Accessories', '2017-05-13', 'N/A', 'Maintenance', 'store', 1, 'Tom', '2017-05-13 08:56:11.551171');

-- --------------------------------------------------------

--
-- Table structure for table `s_task`
--

CREATE TABLE `s_task` (
  `Ticket_no` int(10) NOT NULL,
  `TimeA` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000' ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `s_task`
--

INSERT INTO `s_task` (`Ticket_no`, `TimeA`, `Cdate`, `Officer`, `Solution`, `TimeClosed`, `createdby`) VALUES
(1, '2017-04-29 10:26:57.469980', '2017-04-03', 'JohnDoe', 'FunSoft Reinstalled', '2017-04-04', 'JaneDoe'),
(2, '2017-05-04 08:43:00.073526', '2017-05-04', 'Tom ', 'Quickbook registered', '2017-05-04', 'JaneDoe'),
(3, '2017-05-13 08:44:21.817811', '2017-05-13', 'JaneDoe', 'Network restored', '2017-05-13', 'Tom'),
(4, '2017-05-13 08:51:34.889593', '2017-05-13', 'Tom', 'internet access restored', '2017-05-13', 'Tom');

-- --------------------------------------------------------

--
-- Table structure for table `s_ticket`
--

CREATE TABLE `s_ticket` (
  `Ticket_no` int(10) NOT NULL,
  `P_no` int(10) NOT NULL,
  `Ext_no` int(10) NOT NULL,
  `Cdate` date NOT NULL,
  `Fault` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Timecreated` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000' ON UPDATE CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `s_ticket`
--

INSERT INTO `s_ticket` (`Ticket_no`, `P_no`, `Ext_no`, `Cdate`, `Fault`, `Department`, `Location`, `Status`, `Timecreated`, `Createdby`) VALUES
(1, 7499, 3231, '2017-03-22', 'Computer S/W', 'Level 5', '5A', 'closed', '2017-04-29 10:07:28.611299', 'JaneDoe'),
(2, 7499, 3456, '2017-03-31', 'Computer H/W', 'Level 5', 'Cashpoint', 'closed', '2017-05-04 08:43:00.216794', 'JaneDoe'),
(3, 6007, 868765, '2017-05-13', 'Network Issues', 'Radiology', 'X-ray section', 'closed', '2017-05-13 08:44:22.313056', 'Tom'),
(4, 6002, 7576, '2017-05-13', 'Internet Connection', 'Security', 'Head of department office', 'closed', '2017-05-13 08:51:35.767736', 'Tom');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `P_no` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`P_no`, `Username`, `Email`, `Password`) VALUES
(7499, 'JaneDoe', 'Janedoe@gmail.com', '1234'),
(7500, 'JohnDoe', 'Johndoe@gmail.com', '4321aB'),
(7501, 'Tom', 'Tomnev@gmail.com', 'abcd'),
(7502, 'Jmay', 'Jmay@hotmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `usersii`
--

CREATE TABLE `usersii` (
  `P_no` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersii`
--

INSERT INTO `usersii` (`P_no`, `Username`, `Email`, `Password`) VALUES
(7499, 'JaneDoe1', 'Janedoe@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `w_task`
--

CREATE TABLE `w_task` (
  `Ticket_no` int(10) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `w_task`
--

INSERT INTO `w_task` (`Ticket_no`, `Time`, `Cdate`, `Solution`, `Repairer`, `Createdby`) VALUES
(1, '2017-05-05 07:03:50.025062', '2017-04-29', 'HDD replaced', 'Tom', 'JaneDoe'),
(2, '2017-05-13 08:55:27.126406', '2017-05-13', 'New keyboard given', 'Jmay', 'Tom'),
(3, '2017-05-13 09:15:19.978339', '2017-05-13', 'UPS battery replaced\r\n', 'JaneDoe', 'Tom');

-- --------------------------------------------------------

--
-- Table structure for table `w_ticket`
--

CREATE TABLE `w_ticket` (
  `Ticket_no` int(10) NOT NULL,
  `P_no` int(10) NOT NULL,
  `Ext_no` int(10) NOT NULL,
  `Cdate` date NOT NULL,
  `Fault` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Device` varchar(50) NOT NULL,
  `Info` varchar(50) DEFAULT NULL,
  `Location` varchar(50) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `w_ticket`
--

INSERT INTO `w_ticket` (`Ticket_no`, `P_no`, `Ext_no`, `Cdate`, `Fault`, `Department`, `Device`, `Info`, `Location`, `Status`, `Time`, `Createdby`) VALUES
(1, 7500, 43213, '2017-04-11', 'not powering on', 'Finance', 'Processing Unit(CPU)', 'HP', 'expenditure', 'closed', '2017-04-29 11:10:06.424613', 'JaneDoe'),
(2, 6001, 8687, '2017-05-13', 'cannot type', 'Maintenance', 'Computer Accessories', 'Hp keyboard', 'store', 'closed', '2017-05-13 08:55:28.242007', 'Tom'),
(3, 6006, 56432, '2017-05-13', 'not powering on devices', 'Human Resource', 'UPS', 'APC UPS', 'Directors office', 'closed', '2017-05-13 09:15:20.295702', 'Tom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `Order_no` (`Order_no`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`P_no`,`Id_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`),
  ADD UNIQUE KEY `Description` (`Description`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`P_no`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `usersii`
--
ALTER TABLE `usersii`
  ADD PRIMARY KEY (`P_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `SN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ordering`
--
ALTER TABLE `ordering`
  MODIFY `Order_Id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `p_dispatch`
--
ALTER TABLE `p_dispatch`
  MODIFY `SN` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `s_ticket`
--
ALTER TABLE `s_ticket`
  MODIFY `Ticket_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `w_task`
--
ALTER TABLE `w_task`
  MODIFY `Ticket_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `w_ticket`
--
ALTER TABLE `w_ticket`
  MODIFY `Ticket_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`P_no`) REFERENCES `employee` (`P_no`);

--
-- Constraints for table `usersii`
--
ALTER TABLE `usersii`
  ADD CONSTRAINT `usersii_ibfk_1` FOREIGN KEY (`P_no`) REFERENCES `employee` (`P_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
