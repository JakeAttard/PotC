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
(1, 'Bread & Dips', 'Enjoy a warm Focaccia loaf served with glazed dressing and garlic dip.', 15.99, 'calzone.jpg'),
(2, 'Bruschetta', 'Enjoy 2 warm slices of ciabatta bread, toasted with garlic, parsely and freshly diced tomato.', 13.99, 'brushchetta.jpg'),
(3, 'Garlic Prawns', '8 prawns sauteed in a light creamy garlic sauce.', 18.99, 'garlicprawns.jpeg'),
(4, 'Chicken Schnitzel', 'Crumbly oven baked chicken breast topped with our freshly made sauce.', 26.99, 'chickenschnitzel.jpg'),
(5, 'Grilled Barramundi', 'Grilled fillet with golden cooked chips with lemon wedges.', 32.99, 'barramundi.jpeg'),
(6, 'Garlic Pizza', 'With fresh olives, garlic and mozzarella.', 12.99, 'garlicpizza.jpg'),
(7, 'Meat Lovers Pizza', 'Fresh crunchy bacon, hame and salami.', 12.99, 'meatloverspizza.jpg'),
(8, 'Vegetarian Pizza', 'Freshmouth watering tomatoes, mushrooms and eggplant.', 12.99, 'vegetarianpizza.jpg'),
(9, 'Spaghetti Marinara Pasta', 'Spaghetti Bolognese tossed in a pan mixed with seafood, garlic and onions.', 21.99, 'marinarapasta.jpeg'),
(10, 'Spaghetti Bolognese Pasta', 'Spaghetti cooked with traditional style homemade meat suace.', 19.99, 'bolognesepasta.jpg'),
(11, 'Kids Cardinale Pizza', 'Mozzarella cheese and ham.', 9.99, 'cardinalepizza.jpg'),
(12, 'Kids Spaghetti Bolognese Pasta', 'Spaghetti cooked with traditional style homemade meat suace.', 9.99, 'kidsbolognese.jpg'),
(13, 'Kids Ice Cream', 'Soft cold traditional Italian Ice Cream for the children', 4.99, 'icecream.jpg'),
(14, 'Baci', 'Creamy hazelnut chocolate topping for your perfect desert.', 7.99, 'baci.jpg');
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
