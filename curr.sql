-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 10:45 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curr`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `ContactNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `ContactNo`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31'),
(32, '32'),
(33, '33'),
(34, '34'),
(35, '35'),
(36, '36'),
(37, '37'),
(38, '38'),
(39, '39'),
(40, '40'),
(41, '41'),
(42, '42'),
(43, '43'),
(44, '44'),
(45, '45'),
(46, '46'),
(47, '47'),
(48, '48'),
(49, '49'),
(50, '50'),
(51, '51'),
(52, '52'),
(53, '53'),
(54, '54'),
(55, '55'),
(56, '56'),
(57, '57'),
(58, '58'),
(59, '59'),
(60, '60'),
(61, '61'),
(62, '62'),
(63, '63'),
(64, '64'),
(65, '65'),
(66, '66'),
(67, '67'),
(68, '68'),
(69, '69'),
(70, '70'),
(71, '71'),
(72, '72'),
(73, '73'),
(74, '74'),
(75, '75'),
(76, '76'),
(77, '77'),
(78, '78'),
(79, '79'),
(80, '80'),
(81, '81'),
(82, '82'),
(83, '83'),
(84, '84'),
(85, '85'),
(86, '86'),
(87, '87'),
(88, '88'),
(89, '89'),
(90, '90'),
(91, '91'),
(92, '92'),
(93, '93'),
(94, '94'),
(95, '95'),
(96, '96'),
(97, '97'),
(98, '98'),
(99, '99'),
(100, '100');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ContactNo` int(11) NOT NULL,
  `CustomerName` varchar(200) NOT NULL,
  `City` varchar(100) NOT NULL,
  `PostalCode` varchar(10) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ContactNo`, `CustomerName`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'London', 'WA1 1DP', 'UK'),
(3, 'Antonio Moreno', 'Strasbourg', '67000', 'France'),
(4, 'Thomas Hardy', 'London', 'WX1 6LT', 'UK'),
(5, 'Christina Berglund', 'Madrid', '28023', 'Spain'),
(6, 'Hanna Moos', 'Tsawassen', 'T2F 8M4', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `dealdetails`
--

CREATE TABLE `dealdetails` (
  `DealNo` int(11) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `DealTypeID` int(11) NOT NULL,
  `DealerID` int(11) NOT NULL,
  `DealDate` datetime NOT NULL,
  `DealProfit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealdetails`
--

INSERT INTO `dealdetails` (`DealNo`, `ContactNo`, `DealTypeID`, `DealerID`, `DealDate`, `DealProfit`) VALUES
(109251, 4, 3, 1, '2018-02-07 00:00:00', 729.239990234375),
(109252, 2, 2, 1, '2018-02-16 00:00:00', 2650.949951171875),
(109253, 1, 1, 2, '2018-03-04 00:00:00', 347.2900085449219),
(109254, 6, 2, 4, '2018-03-07 00:00:00', 226.5399932861328),
(109255, 5, 1, 5, '2018-03-12 00:00:00', 997.3499755859375),
(190249, 4, 1, 5, '2018-01-12 00:00:00', 1075.3800048828125),
(190250, 3, 1, 3, '2018-01-27 00:00:00', 54.5);

-- --------------------------------------------------------

--
-- Table structure for table `dealername`
--

CREATE TABLE `dealername` (
  `DealerID` int(11) NOT NULL,
  `DealerCode` int(11) NOT NULL,
  `DealerName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealpair`
--

CREATE TABLE `dealpair` (
  `DealNo` int(11) NOT NULL,
  `CurrencyPair` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealtype`
--

CREATE TABLE `dealtype` (
  `DealTypeID` int(11) NOT NULL,
  `DealTypeDesc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcontacts`
--

CREATE TABLE `subcontacts` (
  `ContactNo` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Default_email` int(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcontacts`
--

INSERT INTO `subcontacts` (`ContactNo`, `Email`, `Default_email`, `id`) VALUES
(1, 'aardo@comcast.net', 0, 1),
(2, 'thurston@mac.com', 1, 2),
(3, 'purvis@sbcglobal.net', 0, 3),
(4, 'kevinm@hotmail.com', 0, 4),
(5, 'nicktrig@live.com', 0, 5),
(55, 'jbailie@live.com\'', 0, 6),
(7, 'wmszeliga@yahoo.com', 0, 7),
(8, 'cyrus@mac.com', 0, 8),
(48, 'murdocj@msn.com{*', 0, 9),
(10, 'itstatus@icloud.com', 0, 10),
(11, 'rande@yahoo.ca', 0, 11),
(64, 'duchamp@mac.com', 0, 12),
(97, 'boser@verizon.net', 1, 13),
(14, 'mchugh@icloud.com+', 0, 14),
(15, 'matthijs@yahoo.com/', 0, 15),
(16, 'mccurley@sbcglobal.net-', 0, 16),
(17, 'jtorkbob@msn.com!', 0, 17),
(18, 'cyrus@mac.com', 0, 18),
(41, 'ngedmond@mac.com', 0, 19),
(20, 'dwheeler@sbcglobal.net%', 0, 20),
(56, 'kwilliams@comcast.net', 0, 21),
(22, 'jbuchana@me.com/', 0, 22),
(23, 'barlow@sbcglobal.net=', 0, 23),
(39, 'guialbu@gmail.com', 0, 24),
(28, 'rhialto@live.com', 1, 25),
(26, 'jshirley@sbcglobal.net', 0, 26),
(27, 'pfitza@verizon.net%', 0, 27),
(25, 'bester@optonline.net', 0, 28),
(29, 'khris@yahoo.ca', 0, 29),
(30, 'roesch@verizon.net', 0, 30),
(31, 'kevinm@hotmail.com', 0, 31),
(61, 'jpflip@live.com', 0, 32),
(33, 'jfinke@sbcglobal.net', 0, 33),
(100, 'benanov@yahoo.com', 0, 34),
(35, 'kevinm@hotmail.com', 0, 35),
(61, 'jpflip@live.com', 0, 36),
(87, 'mbrown@comcast.net', 0, 37),
(38, 'jschauma@comcast.net', 0, 38),
(39, 'guialbu@gmail.com', 0, 39),
(40, 'ntegrity@yahoo.ca|*', 0, 40),
(68, 'sisyphus@msn.com', 1, 41),
(42, 'forsberg@outlook.com', 0, 42),
(43, 'bradl@icloud.com', 0, 43),
(44, 'rafasgj@gmail.com', 0, 44),
(45, 'tsuruta@sbcglobal.net', 0, 45),
(46, 'martyloo@gmail.com', 0, 46),
(47, 'saridder@msn.com', 0, 47),
(28, 'rhialto@live.com', 0, 48),
(49, 'duncand@verizon.net', 0, 49),
(50, 'aglassis@verizon.net', 0, 50),
(22, 'jbuchana@me.com/', 0, 51),
(52, 'guialbu@gmail.com', 0, 52),
(53, 'benits@comcast.net', 0, 53),
(61, 'jpflip@live.com', 0, 54),
(55, 'jbailie@live.com\'', 0, 55),
(56, 'kwilliams@comcast.net', 0, 56),
(63, 'luebke@yahoo.com', 0, 57),
(6, 'claypool@mac.com', 0, 58),
(59, 'notaprguy@live.com', 0, 59),
(21, 'barlow@sbcglobal.net=', 0, 60),
(61, 'jpflip@live.com', 0, 61),
(62, 'gknauss@comcast.net', 0, 62),
(63, 'gknauss@comcast.net', 0, 63),
(64, 'oechslin@yahoo.ca=', 0, 64),
(65, 'mcrawfor@comcast.net', 0, 65),
(66, 'gordonjcp@gmail.com{', 0, 66),
(67, 'noneme@aol.com{', 0, 67),
(68, 'sisyphus@msn.com', 0, 68),
(17, 'jtorkbob@msn.com!', 1, 69),
(70, 'dgatwood@comcast.net', 0, 70),
(97, 'boser@verizon.net', 0, 71),
(72, 'iamcal@verizon.net', 0, 72),
(82, 'fairbank@att.net', 0, 73),
(74, 'privcan@verizon.net_', 0, 74),
(75, 'dalamb@aol.com-', 0, 75),
(5, 'nicktrig@live.com', 0, 76),
(77, 'skajan@hotmail.com', 0, 77),
(78, 'wbarker@aol.com', 0, 78),
(2, 'thurston@mac.com', 0, 79),
(18, 'wenzlaff@outlook.com', 1, 80),
(81, 'lydia@hotmail.com', 0, 81),
(82, 'fairbank@att.net', 0, 82),
(83, 'rcwil@hotmail.com', 0, 83),
(84, 'zyghom@live.com', 0, 84),
(85, 'crobles@gmail.com', 0, 85),
(86, 'matloff@comcast.net', 0, 86),
(87, 'mbrown@comcast.net', 0, 87),
(88, 'kayvonf@live.com', 0, 88),
(89, 'natepuri@icloud.com', 0, 89),
(90, 'kwilliams@att.net', 0, 90),
(91, 'rgarton@icloud.com', 0, 91),
(92, 'kobayasi@hotmail.com', 0, 92),
(33, 'jfinke@sbcglobal.net', 0, 93),
(94, 'laird@aol.com', 0, 94),
(95, 'heidrich@yahoo.ca*', 0, 95),
(96, 'gomor@optonline.net', 0, 96),
(12, 'boomzilla@gmail.com', 0, 97),
(98, 'akoblin@me.com', 0, 98),
(99, 'fraser@outlook.com', 0, 99),
(13, 'bartlett@yahoo.com-', 0, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ContactNo`);

--
-- Indexes for table `dealdetails`
--
ALTER TABLE `dealdetails`
  ADD PRIMARY KEY (`DealNo`),
  ADD KEY `DealNo` (`DealNo`),
  ADD KEY `ContactNo` (`ContactNo`),
  ADD KEY `DealTypeID` (`DealTypeID`),
  ADD KEY `DealerID` (`DealerID`);

--
-- Indexes for table `dealername`
--
ALTER TABLE `dealername`
  ADD PRIMARY KEY (`DealerID`),
  ADD KEY `DealerID` (`DealerID`),
  ADD KEY `DealerCode` (`DealerCode`);

--
-- Indexes for table `dealpair`
--
ALTER TABLE `dealpair`
  ADD PRIMARY KEY (`DealNo`),
  ADD KEY `CurrencyPair` (`CurrencyPair`),
  ADD KEY `DealNo` (`DealNo`);

--
-- Indexes for table `dealtype`
--
ALTER TABLE `dealtype`
  ADD PRIMARY KEY (`DealTypeID`);

--
-- Indexes for table `subcontacts`
--
ALTER TABLE `subcontacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ContactNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dealdetails`
--
ALTER TABLE `dealdetails`
  MODIFY `DealNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190251;

--
-- AUTO_INCREMENT for table `dealername`
--
ALTER TABLE `dealername`
  MODIFY `DealerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealpair`
--
ALTER TABLE `dealpair`
  MODIFY `DealNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealtype`
--
ALTER TABLE `dealtype`
  MODIFY `DealTypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcontacts`
--
ALTER TABLE `subcontacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
