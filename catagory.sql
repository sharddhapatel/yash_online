-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 08:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catagory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Reena Vaghasiya', 'patelreena172@gmail.ocm', 'reena123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'T-shirt', '2021-06-24 08:00:32', NULL),
(11, 'Shoes', '2021-06-24 08:03:58', NULL),
(12, 'Nightdrass', '2021-06-24 08:05:23', NULL),
(13, 'Shirt', '2021-06-24 08:13:02', NULL),
(14, 'Watch', '2021-06-24 08:13:32', NULL),
(15, 'Branded combo', '2021-06-24 11:47:43', NULL),
(16, 'aaaa', '2021-09-10 05:54:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `productid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `productid`, `name`, `created_at`, `updated_at`) VALUES
(1, '16', 'pink', '2021-10-22 06:36:22', NULL),
(3, '11', 'black', '2021-10-26 12:22:36', NULL),
(4, '11', 'black', '2021-10-26 12:22:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phoneno`, `message`, `created_at`, `updated_at`) VALUES
(191, 'sharddha', 'garsondiyasharddha@gmail.com', '1258963598', 'hello\r\nhi\r\nhow are you', '2021-10-07 12:30:47', NULL),
(192, 'reena vaghasiya', 'garsondiyasharddha@gmail.com', '1258963598', 'HIII', '2021-10-08 05:37:30', NULL),
(193, 'sharddha', 'garsondiyasharddha@gmail.com', '1258963598', 'dgfgcvfb dfgdhfh\r\nfgfghfdh', '2021-10-08 05:38:43', NULL),
(194, 'sharddha', 'garsondiyasharddha@gmail.com', '1258963598', 'kjikjm\r\nmkhjjugbkj\r\n bkygjhb\r\njhgb', '2021-10-08 05:39:35', NULL),
(196, 'reena vaghasiya', 'garsondiyasharddha@gmail.com', '1258963598', 'Hi\r\nHELLO\r\nHow are you?', '2021-10-09 11:42:47', NULL),
(197, 'aaaaaaaaaa', 'garsondiyasharddha@gmail.com', '1258963598', 'Hi\r\nHELLO\r\nHOW ARE YOU?', '2021-10-09 11:54:35', NULL),
(198, 'sharddha', 'sharddha@gmail.com', '1245896523', 'hi', '2021-10-11 10:48:28', NULL),
(199, 'sharddha', 'garsondiyasharddha@gmail.com', '1245896523', 'jhgbkjbnhjui', '2021-10-11 10:55:12', NULL),
(200, 'reena vaghasiya', 'garsondiyasharddha@gmail.com', '1245896523', 'hi', '2021-10-11 11:04:29', NULL),
(201, 'reena vaghasiya', 'garsondiyasharddha@gmail.com', '1245896523', 'kjiyukmju\r\nnmknjiokjoo\r\nmnhikj', '2021-10-11 11:14:38', NULL),
(202, 'aaaaaaaaaaa', 'payal@gmail.com', '1245896523', 'acddbfbvbh', '2021-10-11 11:16:05', NULL),
(204, 'reena vaghasiya', 'sharddha@gmail.com', '1245896523', 'bhuo76julkkkk\r\njhijuijuki', '2021-10-11 11:20:28', NULL),
(205, 'payal', 'payal@gmail.com', '9824596358', 'hi', '2021-10-11 11:39:05', NULL),
(206, 'hjgbiu', 'garsondiyasharddha@gmail.com', '1245896523', 'edrfvbm,./', '2021-10-11 11:44:39', NULL),
(207, 'gvcfbg', 'payal@gmail.com', '9824596358', 'hiii', '2021-10-11 12:27:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sharddha@gmail.com', '123', '2021-06-20 06:04:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardno` text NOT NULL,
  `cvc` text NOT NULL,
  `expirationmonth` text NOT NULL,
  `Expirationyear` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `brand` text NOT NULL,
  `title` text NOT NULL,
  `descripation` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cname`, `brand`, `title`, `descripation`, `price`, `img`, `created_at`, `updated_at`) VALUES
(11, 'T-shirt', 'Adidas', 'Solid polo coller T-shirt', 'All colour are avalable .\r\nSlive=half slive\r\nsize chart -M , L , XL , XXL', '300', '1624523702t-shirt.jpg', '2021-06-24 08:35:02', '2021-06-24 03:05:55'),
(12, 'T-shirt', 'puma', 'Men\'s Round neke T- Shirt', 'Fabric- 100% Cotton single jersey bio washed\r\nGSM - 190\r\nColour - as per image\r\nT shirt Size -M , L ,XL ,XXL', '300', '1624532442t-shirt2.jpg', '2021-06-24 11:00:42', NULL),
(13, 'Shirt', 'Goldan plam', 'Designing shirts(Full Sleeve)', 'Colour -6 as per image\r\nSize: M - L - XL - XXL\r\nM size:-length28\r\n               chest19\r\nM size:-length  28\r\n               chest  19\r\nL size:-length  29\r\n               chest  20\r\nXL size:-length  30.25\r\n               chest  21.50\r\nXXL size:-length  31.25\r\n                  chest   23.50', '380', '1624533443shirt.jpg', '2021-06-24 11:17:23', '2021-06-26 01:22:46'),
(14, 'T-shirt', 'Adidas', 'T-shirt+treck pent', 'Trekc pent  brand = adidas\r\nStyle - Men\'s Round neke T-shirt+track pent\r\nFabric -100% Cotton single  jersey bio washed\r\nTrekc pent size\r\nm=30-32(w)\r\n L=33-34(W)\r\nXL=35-36(W)\r\nXXL=37-38(W)', '600', '1624536663shirt1.jpg', '2021-06-24 12:11:03', NULL),
(15, 'Watch', 'i -watch', 'one plus  smart watch', 'dial size 44mm\r\ndisplay size  1.54 \"Resolution 240*240\r\nCall  Two- way conversation\r\nInformation -Bluetooth synk phone book\r\nheart rate/ blood pressure/Alarm clock/sleep monitore/remore photography', '3000', '1624538086watch-1.jpg', '2021-06-24 12:34:46', NULL),
(16, 'Shoes', 'nike', 'New articles', 'Size - 6 to 10\r\nAll size  available\r\nSame Day Dispatch', '2500', '1624538531shoes.jpg', '2021-06-24 12:42:11', NULL),
(17, 'T-shirt', 'aaaa', 'vhgfgv', 'aAAAAAAAAAAAAA', '256', '1631183118aaa1.jpg', '2021-09-09 10:25:18', '2021-09-09 07:19:05'),
(19, 'T-shirt', 'aaaa', 'sssss', 'aaaaaaaaaaa', '450', '1631356208pexels-mikhail-nilov-6613914.jpg', '2021-09-11 10:30:08', NULL),
(20, 'Watch', 'apple', 'hgvtftyg', 'kjahfdmjjjjjjjjjjjjf\r\nkjsjdrioasjfmx\r\nnskjudsndcks', '1000', '1632727153hgyhub.jpg', '2021-09-27 07:19:13', NULL),
(21, 'Nightdrass', 'adidas', 'nijhfbfn', 'best quality\r\n100%  cotton', '900', '1634035829ladies-night-suit-500x500.jpeg', '2021-10-12 10:50:29', NULL),
(22, 'Shoes', 'adidas', 'aaaa', 'best for every situation', '1000', '1635325940shoes.jpg', '2021-10-27 09:12:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcatagory`
--

CREATE TABLE `subcatagory` (
  `id` int(11) NOT NULL,
  `order_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
