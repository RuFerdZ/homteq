-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 08:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w1714943_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNo` int(4) NOT NULL,
  `userId` int(4) NOT NULL,
  `orderDateTime` datetime NOT NULL,
  `orderTotal` decimal(8,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `orderLineId` int(4) NOT NULL,
  `orderNo` int(4) NOT NULL,
  `prodId` int(4) NOT NULL,
  `quantityOrdered` int(4) NOT NULL,
  `subTotal` decimal(8,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 'ASUS VivoBook 15 ', '01_small.jpeg', '01_large.jpeg', 'ASUS VivoBook 15 15.6in Pentium Gold 4GB 128GB Laptop 762/1523\r\n', 'VivoBook 15 pushes the limits of what\'s possible inspiring you to break new bounds. The new frameless 4 sided NanoEdge design gives an almost-bezel-free display with vast amounts of screen area and extremely immersive visuals. Even with the ultra slim bezel, a pleasing HD camera is accommodated on the top bezel for you to video chat with family and friends. Life moves fast and you\'ll need a laptop that won\'t weigh you down. VivoBook 15 is compact and has a travel friendly weight of just 1.6KG so it\'s easy for you to slip into your bag.\r\n\r\nYour future is what you make of it and VivoBook 15 has the tools to help you every step of the way. With an Intel Pentium Gold 5405U processor and a Windows 10 Home S OS you\'re ready for what lies ahead, whether it\'s multitasking, multimedia editing or taking a browse through social media. You can also open up to a world of productivity and possibilities with the Ergo-lift hinge.\r\n\r\nVivoBook 15 is equipped with the reversible USB Type-C port featuring an any way up design that makes connecting devices as easy as possible. It also delivers data transfer speeds that are up to 10 x faster than older USB 2.0 connections. There are also USB 3.1 Gen 1 and USB 2.0 ports, HDMI output and a micro SD reader so now you can easily connect to all of your current displays and projectors with zero hassle.', '329.99', 4),
(2, 'Apple MacBook Air', '03_small.jpeg', '03_large.jpeg', 'Apple MacBook Air 2019 13 Inch i5 8GB 128GB - Gold 147/1511', 'The most loved Mac is about to make you fall in love all over again. Available in silver, space grey and gold, the new thinner and lighter MacBook Air features a brilliant Retina display with True Tone technology, Touch ID, the latest-generation keyboard and a Force Touch trackpad. The iconic wedge is created from 100 per cent recycled aluminium, making it the greenest Mac ever. And with all-day battery life, MacBook Air is your perfectly portable, do-it-all notebook.\r\n\r\nWith a resolution of 2560x1600 for over 4 million pixels, the results are positively jaw-dropping. Images take on a new level of detail and realism. Text is sharp and clear. And True Tone technology automatically adjusts the white point of the display to match the colour temperature of your environment — making web pages and email look as natural as the printed page. With 48 per cent more colours than the previous generation, everything you see is rich and vibrant.\r\n\r\nThe advanced security and convenience of Touch ID are now built directly into MacBook Air. Simply place your finger on the Touch ID sensor and — just like that — your Mac unlocks. Use your fingerprint to immediately access locked documents, notes and system settings, without entering yet another password. Online shopping is even easier — select Apple Pay at checkout, and with just one touch you\'re done. With Touch ID, your private information stays private.', '1050.00', 7),
(3, 'Acer Aspire 3', '04_small.jpeg', '04_large.jpeg', 'Acer Aspire 3 15.6in Celeron 4GB 128GB FHD Laptop - Black 741/5344\r\n', 'This stylish FULL HD Acer Aspire 3 is driven by a powerful Intel Celeron processor and 4GB of RAM, great for you to meet multiple tasks and surf the internet seamlessly. 128GB of SSD storage delivers amazing memory and speed, perfect for you to save and stream your favourite holiday photos and videos. Sit back and enjoy endless entertainment stress free as this laptop will stay right by your side for up to 9.5 hours.\r\n\r\nBlueLightShield technology reduces the exposure of blue light, which can be potentially harmful, by adjusting color hue and brightness.\r\n\r\nChiclet Keyboard Shaped for comfort and style, the chiclet keyboard stands out with its round-cornered keys.', '399.00', 2),
(4, 'Lenovo IdeaPad S145 ', '02_small.jpeg', '02_large.jpeg', 'Lenovo IdeaPad S145 15.6 Inch A9 4GB 128GB Laptop - Black 308/3471', 'Built to last. Engineered for long-lasting performance, the Lenovo IdeaPad S145 delivers powerful AMD performance in a robust laptop—it\'s perfect for your everyday tasks. This device boasts a thin and light, stylish design, a great audio experience, and storage options that keep your information secure.\r\n\r\nSee more, do more. A narrow bezel on 2 sides makes for a clean design and larger display giving you more viewing area and less clutter.\r\n\r\nExpect more from your entertainment Whether you\'re watching a video, streaming music, or video-chatting, you\'re sure to love what you hear on the IdeaPad S145— Dolby Audio delivers crystal clear sound. Unleash your inner traveler With a starting weight of 1.85 kg the IdeaPad S145 is a great choice for when you\'re on-the-go. Reliable storage. Keep your data secure and quickly available with solid state storage (SSD).', '299.99', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(4) NOT NULL,
  `userType` varchar(1) NOT NULL,
  `userFName` varchar(50) NOT NULL,
  `userSName` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userPostCode` varchar(50) NOT NULL,
  `userTelNo` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) VALUES
(1, ' ', 'Rusiru ', 'Fernando', '994', '11500', '0763358718', 'rusiru.2018194@iit.ac.lk', 'password@1234'),
(28, ' ', 'Hasani', 'Dilhari', '37, Nittambuwa, Sri Lanka', '3700', '+94 76 566 1821', 'hasani.2018077@iit.ac.lk', 'hasanid@1997'),
(29, ' ', 'Dilanka', 'Harshani', 'Katunayaka, Sri Lanka', '11500', '072 87 21 890', 'dila@gmail.com', '1234@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNo`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`orderLineId`),
  ADD KEY `orderNo` (`orderNo`),
  ADD KEY `prodId` (`prodId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_line`
--
ALTER TABLE `order_line`
  MODIFY `orderLineId` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_ibfk_1` FOREIGN KEY (`orderNo`) REFERENCES `orders` (`orderNo`),
  ADD CONSTRAINT `order_line_ibfk_2` FOREIGN KEY (`prodId`) REFERENCES `product` (`prodId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
