SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Table structure for table `booking`
--
CREATE DATABASE IF NOT EXISTS 1621ict;

USE 1621ict;

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `arrival_time` varchar(255) NOT NULL,
  `seats` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `customer_email` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `arrival_time`, `seats`, `booking_date`, `customer_email`) VALUES
(1, 'jsdflk', 'dsafdasdf', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `CUSTID` int(11) NOT NULL,
  `FIRSTNAME` varchar(64) DEFAULT NULL,
  `LASTNAME` varchar(64) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `PHONE` varchar(16) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CUSTID`, `FIRSTNAME`, `LASTNAME`, `ADDRESS`, `PHONE`, `email`, `password`) VALUES
(1, 'John', 'Smith', '5 Fictitious Street, Springfield', '(07) 1122 3344', '', ''),
(2, 'Fred', 'Jones', '12 Some Place, Gotham', '(02) 9988 7766', '', ''),
(3, 'Bob', 'Bee', '50 Fifty Court, Brisbane', '(07) 1111 2222', '', ''),
(4, 'firstname', 'lastname', 'address', '12123123', 'mrbilal007@ymail.com', 'ufone007');

-- --------------------------------------------------------

-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `PRODID` int(11) NOT NULL,
  `PRODUCTNAME` varchar(64) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `PRICE` float DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODID`, `PRODUCTNAME`, `DESCRIPTION`, `PRICE`, `image`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CUSTID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EVENTID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PRODID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CUSTID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EVENTID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PRODID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
