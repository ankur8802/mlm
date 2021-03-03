-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 12:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(800) NOT NULL DEFAULT '',
  `password` varchar(800) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bvredeem`
--

CREATE TABLE `bvredeem` (
  `id` int(11) NOT NULL,
  `your_sponsor_id` varchar(255) NOT NULL DEFAULT '',
  `bv` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `admintime` varchar(255) NOT NULL DEFAULT '',
  `status` set('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bvredeem`
--

INSERT INTO `bvredeem` (`id`, `your_sponsor_id`, `bv`, `date`, `time`, `admintime`, `status`) VALUES
(25, 'TCT1508204', '500', '2021-02-20', '00:00:00', '2021-02-20 12:27', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bv_level`
--

CREATE TABLE `bv_level` (
  `id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT '',
  `percentage` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bv_level`
--

INSERT INTO `bv_level` (`id`, `level`, `percentage`) VALUES
(1, '1', '10'),
(2, '2', '10'),
(3, '3', '10'),
(4, '4', '10'),
(5, '5', '10'),
(6, '6', '10'),
(7, '7', '10'),
(8, '8', '10'),
(10, '10', '10'),
(11, '9', '10');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ankur', 'ankurchauhan8802@gmail.com', 'Help', 'abc'),
(5, 'Ankur', 'ankurchauhan88802@gmail.com', 'kjn', 'lkm'),
(6, 'Ankur', 'aankurchauhan8802@gmail.com', 'jnk', 'kjnkjnk');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `time`) VALUES
(2, 'gallery-2.jpg', '2021-02-17 10:31:24'),
(3, 'gallery-3.jpg', '2021-02-17 10:31:30'),
(4, 'gallery-4.jpg', '2021-02-17 10:31:44'),
(5, 'gallery-5.jpg', '2021-02-17 10:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT '',
  `product_name` varchar(255) NOT NULL DEFAULT '',
  `product_image` varchar(255) NOT NULL DEFAULT '',
  `product_quantity` varchar(255) NOT NULL DEFAULT '',
  `product_description` longtext NOT NULL DEFAULT '',
  `product_price` varchar(255) NOT NULL DEFAULT '',
  `product_bv` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `product_name`, `product_image`, `product_quantity`, `product_description`, `product_price`, `product_bv`, `status`, `date`, `time`) VALUES
(4, '', 'Abc', '13.png', '68', '', '500', '100', '1', '2020-10-26', '10:55:25'),
(5, '', 'ATOZ', '14.png', '90', '<p>kjnknk</p>\r\n\r\n<p>&nbsp;</p>\r\n', '5000', '1000', '1', '2020-10-28', '11:36:45'),
(6, 'abc', 'ANkur Chauan', '15.png', '58', '<p>ok</p>\r\n\r\n<p>&nbsp;</p>\r\n', '155', '555', '1', '2020-10-29', '14:53:46'),
(7, 'abc', 'chichi', '16.png', '40', '<p>abc</p>\r\n', '5000', '5000', '1', '2020-11-03', '18:48:20'),
(8, 'Health Supplements', 'abc', '17.png', '84', '', '100', '20', '1', '2021-02-17', '10:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category`, `date`) VALUES
(5, 'Health Supplements', '2020-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `pic` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `mobile` varchar(255) NOT NULL DEFAULT '',
  `house` varchar(255) NOT NULL DEFAULT '',
  `street` varchar(255) NOT NULL DEFAULT '',
  `locality` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `pincode` varchar(255) NOT NULL DEFAULT '',
  `gst` varchar(255) NOT NULL DEFAULT '',
  `your_sponsor_id` varchar(255) NOT NULL DEFAULT '',
  `under_sponsor_id` varchar(255) NOT NULL DEFAULT '',
  `level` varchar(255) NOT NULL DEFAULT '0',
  `bv` varchar(255) NOT NULL DEFAULT '0',
  `dob` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `pan` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `package` varchar(255) NOT NULL DEFAULT '',
  `balance` varchar(255) NOT NULL DEFAULT '0',
  `joining_date` date DEFAULT current_timestamp(),
  `activationdate` varchar(255) NOT NULL DEFAULT '',
  `joining_time` time NOT NULL DEFAULT current_timestamp(),
  `source` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pic`, `email`, `mobile`, `house`, `street`, `locality`, `city`, `state`, `pincode`, `gst`, `your_sponsor_id`, `under_sponsor_id`, `level`, `bv`, `dob`, `password`, `pan`, `status`, `package`, `balance`, `joining_date`, `activationdate`, `joining_time`, `source`) VALUES
(12, 'ankur', '', 'ankurchauhan8802@gmail.com', '8882234966', 'jhb', 'Ganeshpuri', 'bnjkbk', 'Ghaziabad', 'Andaman and Nicobar Islands', '201005', '22', 'TCT1508201', 'root', '0', '0', '08-02-2021', '123', 'bbbpc8798q', '0', '', '5000', '2021-02-16', '', '01:27:57', 'http://localhost/mlm/sign-up'),
(13, 'abc', '', 'a@gmail.com', '8882234855', '55lkm', 'knkn', 'kjnkjn', 'knknk', 'Nagaland', '201005', '123', 'TCT1508202', 'TCT1508201', '0', '0', '09-02-2021', '123', 'bbbpc8798q', '0', '', '0', '2021-02-16', '', '01:28:55', 'http://localhost/mlm/sign-up'),
(14, 'ankur', '', 'aaankur@gmail.com', '8882234966', 'akn', 'Ganeshpuri', 'k', 'Ghaziabad', 'Andaman and Nicobar Islands', '201005', '123', 'TCT1508203', 'TCT1508202', '2', '40000', '10-02-2021', '123', 'bbbpc8798q', '1', '30000', '8345', '2021-02-16', '2021-02-16', '01:29:49', 'http://localhost/mlm/sign-up'),
(15, 'ankur chauhan', '', 'truckvancargo@gmail.com', '8882234966', 'jnkjn', 'kjnkn', 'kjnkn', 'kjnkjn', 'Karnataka', '201005', 'jhb', 'TCT1508204', 'TCT1508203', '3', '173224', '03-02-2021', '123', 'abcde1234d', '0', '', '24134400', '2021-02-18', '2021-02-1', '15:32:22', 'http://localhost/mlm/sign-up');

-- --------------------------------------------------------

--
-- Table structure for table `user_alert`
--

CREATE TABLE `user_alert` (
  `id` int(11) NOT NULL,
  `message_type` varchar(255) NOT NULL DEFAULT '',
  `userid` varchar(255) NOT NULL DEFAULT '',
  `message` longtext NOT NULL DEFAULT '\'\'',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_alert`
--

INSERT INTO `user_alert` (`id`, `message_type`, `userid`, `message`, `date`) VALUES
(5, 'complain', 'TCT1508202', 'kjnkn liuhilh lhnknk,hjn,k', '2020-10-13'),
(7, 'complain', 'TCT1508202', 'kmmlk', '2020-10-19'),
(9, 'Individual', 'TCT1508206', 'abc', '2020-11-03'),
(10, 'complain', 'TCT1508206', 'atoz', '2020-11-03'),
(11, 'all', 'all', 'hello\r\n', '2021-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_bank_detail`
--

CREATE TABLE `user_bank_detail` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `bank` varchar(255) NOT NULL DEFAULT '',
  `accountholdername` varchar(255) NOT NULL DEFAULT '',
  `bankname` varchar(255) NOT NULL DEFAULT '',
  `accountno` varchar(255) NOT NULL DEFAULT '',
  `ifsc` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_bv`
--

CREATE TABLE `user_bv` (
  `id` int(11) NOT NULL,
  `your_sponsor_id` varchar(255) NOT NULL DEFAULT '',
  `user_bv_id` varchar(255) NOT NULL DEFAULT '',
  `bv` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bv`
--

INSERT INTO `user_bv` (`id`, `your_sponsor_id`, `user_bv_id`, `bv`, `date`, `time`) VALUES
(100, 'TCT1508204', 'SELF', '200', '2021-03-03', '12:51:16'),
(101, 'TCT1508203', 'TCT1508204', '80', '2021-03-03', '12:51:16'),
(102, 'TCT1508202', 'TCT1508204', '72', '2021-03-03', '12:51:16'),
(103, 'TCT1508204', 'SELF', '2000', '2021-03-03', '13:05:46'),
(104, 'TCT1508204', 'SELF', '10000', '2021-03-03', '13:06:32'),
(105, 'TCT1508204', 'SELF', '20000', '2021-03-03', '13:07:01'),
(106, 'TCT1508204', 'SELF', '4', '2021-03-03', '13:09:10'),
(107, 'TCT1508204', 'SELF', '4', '2021-03-03', '13:14:12'),
(108, 'TCT1508204', 'SELF', '4', '2021-03-03', '13:16:54'),
(109, 'TCT1508204', 'SELF', '4', '2021-03-03', '13:17:36'),
(110, 'TCT1508204', 'SELF', '1000', '2021-03-03', '13:29:58'),
(111, 'TCT1508204', 'SELF', '4', '2021-03-03', '13:30:50'),
(112, 'TCT1508204', 'SELF', '4', '2021-03-03', '13:31:52'),
(113, 'TCT1508204', 'SELF', '10000', '2021-03-03', '13:32:20'),
(114, 'TCT1508204', 'SELF', '10000', '2021-03-03', '13:33:30'),
(115, 'TCT1508204', 'SELF', '20000', '2021-03-03', '13:34:28'),
(116, 'TCT1508204', 'SELF', '100000', '2021-03-03', '13:35:07'),
(117, 'TCT1508203', 'TCT1508204', '40000', '2021-03-03', '13:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `product_id` varchar(255) NOT NULL DEFAULT '',
  `product_quantity` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `userid`, `product_id`, `product_quantity`, `status`, `date`, `time`) VALUES
(171, 'TCT1508201', '8', '1', '0', '2021-02-28', '01:38:42'),
(172, 'TCT1508201', '6', '1', '0', '2021-02-28', '01:42:58'),
(173, 'TCT1508201', '7', '1', '0', '2021-02-28', '01:43:02'),
(201, 'TCT1508204', '7', '1', '0', '2021-03-03', '13:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_delivery_address`
--

CREATE TABLE `user_delivery_address` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(255) NOT NULL DEFAULT '',
  `address` longtext NOT NULL DEFAULT '',
  `lankmark` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `pincode` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_delivery_address`
--

INSERT INTO `user_delivery_address` (`id`, `userid`, `name`, `contact`, `address`, `lankmark`, `city`, `state`, `pincode`, `date`, `time`) VALUES
(1, 'TCT1508203', 'ankur', '8882234966', 'Ganeshpuri', 'km', 'Ghaziabad', 'U.P', '201005', '2021-02-16', '13:01:43'),
(2, 'TCT1508204', 'Ankur', '8882234966', 'Ganeshpuri', 'jhb', 'Ghaziabad', 'U.P', '201005', '2021-03-03', '12:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_electricity`
--

CREATE TABLE `user_electricity` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `electricity` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_electricity`
--

INSERT INTO `user_electricity` (`id`, `userid`, `electricity`, `status`, `date`) VALUES
(1, 'TCT1508202', 'image21.jpg', '1', '2020-10-08'),
(2, 'TCT1508206', 'sponsor1.jpg', '1', '2020-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_id_proof`
--

CREATE TABLE `user_id_proof` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `id_proof_type` varchar(255) NOT NULL DEFAULT '',
  `id_proof_no` varchar(255) NOT NULL DEFAULT '',
  `id_proof` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_id_proof`
--

INSERT INTO `user_id_proof` (`id`, `userid`, `id_proof_type`, `id_proof_no`, `id_proof`, `status`, `date`) VALUES
(2, 'TCT1508202', 'Passport', '123', 'image32.png', '0', '2020-10-08'),
(3, 'TCT1508202', 'Aadhar Card', '123', 'about-3.jpg', '2', '2020-10-08'),
(4, 'TCT1508202', 'Passport', '111', 'event-3.jpg', '1', '2020-10-08'),
(5, 'TCT1508202', 'Passport', '123', 'bg_3.jpg', '0', '2020-10-09'),
(6, 'TCT1508206', 'Voter ID Proof', '123', 'sponsor1.jpg', '1', '2020-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `user_address` varchar(500) NOT NULL DEFAULT '',
  `order_amount` varchar(255) NOT NULL DEFAULT '',
  `product_order_id` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`id`, `userid`, `user_address`, `order_amount`, `product_order_id`, `date`, `time`, `status`) VALUES
(1, 'TCT1508203', 'ankur , 8882234966 , Ganeshpuri , km , Ghaziabad , U.P , 201005', '655', '1,2', '2021-02-16', '13:01:52', '1'),
(2, 'TCT1508203', 'ankur , 8882234966 , Ganeshpuri , km , Ghaziabad , U.P , 201005', '5000', '3', '2021-02-16', '13:04:04', '1'),
(3, 'TCT1508203', 'ankur , 8882234966 , Ganeshpuri , km , Ghaziabad , U.P , 201005', '6000', '4,5', '2021-02-18', '15:27:33', '1'),
(4, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '6', '2021-03-03', '12:30:33', '1'),
(5, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '7', '2021-03-03', '12:31:56', '1'),
(6, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '8', '2021-03-03', '12:33:30', '1'),
(7, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '9', '2021-03-03', '12:34:39', '1'),
(8, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '10', '2021-03-03', '12:37:03', '1'),
(9, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '11', '2021-03-03', '12:40:45', '1'),
(10, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '12', '2021-03-03', '12:42:05', '1'),
(11, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '13', '2021-03-03', '12:48:39', '1'),
(12, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '14', '2021-03-03', '12:49:58', '1'),
(13, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '15', '2021-03-03', '12:51:15', '1'),
(14, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '10000', '16', '2021-03-03', '13:05:45', '1'),
(15, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '50000', '17', '2021-03-03', '13:06:31', '1'),
(16, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100000', '18', '2021-03-03', '13:07:00', '1'),
(17, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100', '19', '2021-03-03', '13:09:10', '1'),
(18, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100', '20', '2021-03-03', '13:14:12', '1'),
(19, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100', '21', '2021-03-03', '13:16:53', '1'),
(20, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100', '22', '2021-03-03', '13:17:35', '1'),
(21, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '5000', '23', '2021-03-03', '13:29:57', '1'),
(22, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100', '24', '2021-03-03', '13:30:50', '1'),
(23, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100', '25', '2021-03-03', '13:31:52', '1'),
(24, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '50000', '26', '2021-03-03', '13:32:19', '1'),
(25, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '50000', '27', '2021-03-03', '13:33:30', '1'),
(26, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '100000', '28', '2021-03-03', '13:34:28', '1'),
(27, 'TCT1508204', 'Ankur , 8882234966 , Ganeshpuri , jhb , Ghaziabad , U.P , 201005', '500000', '29', '2021-03-03', '13:35:06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_order_product`
--

CREATE TABLE `user_order_product` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `product_id` varchar(255) NOT NULL DEFAULT '',
  `product_quentity` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order_product`
--

INSERT INTO `user_order_product` (`id`, `userid`, `product_id`, `product_quentity`, `status`, `date`, `time`) VALUES
(1, 'TCT1508203', '6', '1', '1', '2021-02-16', '13:01:51'),
(2, 'TCT1508203', '4', '1', '1', '2021-02-16', '13:01:52'),
(3, 'TCT1508203', '5', '1', '1', '2021-02-16', '13:04:04'),
(4, 'TCT1508203', '8', '10', '1', '2021-02-18', '15:27:33'),
(5, 'TCT1508203', '7', '1', '1', '2021-02-18', '15:27:33'),
(6, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:30:33'),
(7, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:31:55'),
(8, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:33:30'),
(9, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:34:39'),
(10, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:37:03'),
(11, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:40:45'),
(12, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:42:05'),
(13, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:48:39'),
(14, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:49:58'),
(15, 'TCT1508204', '7', '1', '1', '2021-03-03', '12:51:15'),
(16, 'TCT1508204', '7', '2', '1', '2021-03-03', '13:05:45'),
(17, 'TCT1508204', '7', '10', '1', '2021-03-03', '13:06:31'),
(18, 'TCT1508204', '7', '20', '1', '2021-03-03', '13:07:00'),
(19, 'TCT1508204', '8', '1', '1', '2021-03-03', '13:09:10'),
(20, 'TCT1508204', '8', '1', '1', '2021-03-03', '13:14:12'),
(21, 'TCT1508204', '8', '1', '1', '2021-03-03', '13:16:52'),
(22, 'TCT1508204', '8', '1', '1', '2021-03-03', '13:17:35'),
(23, 'TCT1508204', '7', '1', '1', '2021-03-03', '13:29:57'),
(24, 'TCT1508204', '8', '1', '1', '2021-03-03', '13:30:49'),
(25, 'TCT1508204', '8', '1', '1', '2021-03-03', '13:31:52'),
(26, 'TCT1508204', '7', '10', '1', '2021-03-03', '13:32:19'),
(27, 'TCT1508204', '7', '10', '1', '2021-03-03', '13:33:30'),
(28, 'TCT1508204', '7', '20', '1', '2021-03-03', '13:34:28'),
(29, 'TCT1508204', '7', '100', '1', '2021-03-03', '13:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_package`
--

CREATE TABLE `user_package` (
  `id` int(11) NOT NULL,
  `package_amount` int(11) NOT NULL,
  `package_bv` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_package`
--

INSERT INTO `user_package` (`id`, `package_amount`, `package_bv`, `date`) VALUES
(4, 10000, '2000', '2020-10-26'),
(6, 2000, '200', '2020-10-26'),
(7, 30000, '2000', '2020-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `user_pan_card`
--

CREATE TABLE `user_pan_card` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `pancard` varchar(255) NOT NULL DEFAULT '',
  `pancard_no` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL DEFAULT '',
  `transaction_no` varchar(255) NOT NULL DEFAULT '',
  `payment_method` varchar(255) NOT NULL DEFAULT '',
  `bank_receipt` varchar(255) NOT NULL DEFAULT '',
  `transaction_date` varchar(255) NOT NULL DEFAULT '',
  `amount` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bvredeem`
--
ALTER TABLE `bvredeem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bv_level`
--
ALTER TABLE `bv_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_alert`
--
ALTER TABLE `user_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_bv`
--
ALTER TABLE `user_bv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_delivery_address`
--
ALTER TABLE `user_delivery_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_electricity`
--
ALTER TABLE `user_electricity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_id_proof`
--
ALTER TABLE `user_id_proof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_order_product`
--
ALTER TABLE `user_order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_package`
--
ALTER TABLE `user_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_pan_card`
--
ALTER TABLE `user_pan_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bvredeem`
--
ALTER TABLE `bvredeem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bv_level`
--
ALTER TABLE `bv_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_alert`
--
ALTER TABLE `user_alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_bank_detail`
--
ALTER TABLE `user_bank_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_bv`
--
ALTER TABLE `user_bv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `user_delivery_address`
--
ALTER TABLE `user_delivery_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_electricity`
--
ALTER TABLE `user_electricity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_id_proof`
--
ALTER TABLE `user_id_proof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_order_product`
--
ALTER TABLE `user_order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_package`
--
ALTER TABLE `user_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_pan_card`
--
ALTER TABLE `user_pan_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
