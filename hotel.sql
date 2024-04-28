-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 11:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Galib vai', 'mgalib101@gmail.com', '+8801727044002', 'heyyy\r\n'),
(6, 'Tasfia', 't@gmail.com', '01745667874', 'service is to much better\r\n'),
(4, 'Saad Ahmed', 'saad@gmail.com', '01936-876438', 'Carry on!');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `number` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `name`, `email`, `number`, `location`, `message`, `type`) VALUES
(1, 'Nishat', 'n@gmail.com', '0545442487', 'dhaka', '        I want a room\r\n      ', 'home'),
(4, 'Subaita ', 'subaita@gamil.com', '0177878748', 'satkhira', 'ami sundor room cai ', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `day` varchar(5) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(7) NOT NULL,
  `adults` varchar(5) NOT NULL,
  `rooms` varchar(5) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--



-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image1` varchar(20) NOT NULL,
  `image2` varchar(20) NOT NULL,
  `image3` varchar(20) NOT NULL,
  `image4` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `type`, `title`, `description`, `size`, `price`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'hotel', 'Deluxe Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '44', '10000', 'H1.jpg', 'H2.jpg', 'H3.jpg', 'H4.jpg'),
(2, 'hotel', 'Festive Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '43', '9000', 'H5.jpg', 'H6.jpg', 'H7.jpg', 'H8.jpg'),
(3, 'hostel', 'AC Super Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '46', '9000', 'H9.jpg', 'H10.jpg', 'H11.jpg', 'H12.jpg'),
(4, 'Home', 'AC Normal Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '42', '8000', 'H13.jpg', 'H14.jpg', 'H15.jpg', 'H16.jpg'),
(5, 'Hotle', 'Celebrety Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '55', '15000', 'H17.jpg', 'H18.jpg', 'H19.jpg', 'H20.jpg'),
(6, 'Hotel', 'Normal Room', 'Guests enjoy our exclusive complimentary offerings that include Tea & Sherry Social Hour daily at 4pm in the lobby, the Mountain Sunrise hot breakfast buffet, wi-fi, outdoor year round heated swimming pool and FREE on-site parking.\r\n<br><br>\r\nTo insure a comfortable stay, guest amenities include:<br>\r\n1. Fireplaces (select Superior, Deluxe and Mini-Suite rooms only)<br>\r\n2. Mini Bar (Deluxe and Mini-suites only)<br>\r\n3. In-room Safes<br>\r\n4. High speed wireless Internet access<br>\r\n5. Robes<br>\r\n6. Mini Refrigerator<br>\r\n7. Room Service<br>\r\n8. Coffee Maker<br>\r\n9. Hairdryer<br>\r\n10. Ironing Accessories<br>\r\n11. Turn Down (upon request)', '32', '4500', 'H21.jpg', 'H22.jpg', 'H23.jpg', 'H24.jpg'),
(7, 'hotel', 'about Error room', 'khub nice very nice ..so much awesome', '1050x 120', '1666', 'bg-gov.webp', 'bg5.jpeg', 'ccj.png', 'addmi.jpeg'),
(8, 'hostel', 'Test No 2', 'vallo room ..asoooo\r\n', '10030', '100', 'addmi.jpeg', 'ruet_sm.jpeg', 'ece.jpeg', 'ruet1.jpeg'),
(9, 'home', 'very good home of mine', 'you will be pleased to my home.\r\nplease conatact me .always fell free to ask anything .my ad', '4555', '45469', 'ruet_sm.jpeg', 'ruet_sm.jpeg', 'ece.jpeg', 'addmi.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
