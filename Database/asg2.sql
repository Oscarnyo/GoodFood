-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 05:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_user_id` int(11) NOT NULL,
  `checkout_name` varchar(255) NOT NULL,
  `checkout_price` double NOT NULL,
  `checkout_quantity` double NOT NULL,
  `checkout_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkout_user_id`, `checkout_name`, `checkout_price`, `checkout_quantity`, `checkout_category`) VALUES
(9, 'GoodFood season fruit basket combo', 30, 1, 'fruit');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` double NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `category`, `price`, `quantity`, `description`) VALUES
(1, 'GoodFood seasoning packet flavor (salt and pepper)', 'seasoning packet powder', 10, 27, 'GoodFood signature flavor packet having salt/pepper and some secret ingredient suitable for general usage.'),
(2, 'GoodFood seasoning flavor sauce (sweet and sour)', 'seasoning flavor sauce', 10, 29, 'GoodFood signature flavor packet having sweet/sour and some secret ingredient suitable for thai style and sweet cooking dishes. '),
(3, 'GoodFood seasoning packet flavor (herbs)', 'seasoning packet powder', 10, 29, 'GoodFood signature flavor packet having herbs and some secret ingredient suitable for curry and earthy flavor. '),
(4, 'GoodFood season fruit basket combo', 'fruit', 30, 25, 'GoodFood serious pick on freshly planted fruit from current season. This combo will contain different types of fruit that come with good offer.'),
(5, 'GoodFood season vegetable basket combo', 'vegetable', 30, 32, 'GoodFood serious pick on freshly planted vegetable from current season. This combo will contain different types of vegetable that come with good offer.'),
(6, 'GoodFood signature 30 years cook book', 'recipe book', 55, 34, 'GoodFood special 30 years edition recipe cook book having many professional chef recipe exclusively for GoodFood user only!'),
(7, 'Prize ticket', 'ticket', 5, 87, 'Lucky draw tickets allow user to participate in winning special prize in GoodFood');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `subscription_type` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `plan_name`, `subscription_type`, `price`, `duration`, `description`) VALUES
(0, '', '', 0, '', ''),
(8001, 'GoodFood Basic', 'Basic', 30, '3 Months', '<li> One Free Cook Book </li>\n<li> 10% coupon discount for one purchase every month </li>\n<li> Free snack box will be given to the customer every month </li>'),
(8002, 'GoodFood Standard', 'Standard', 50, '6 Months', '<li> One Free Cook Book </li>\r\n<li> 15% coupon discount for one purchase every month </li>\r\n<li> Up to 50% discount for delivery fees </li>'),
(8003, 'GoodFood Premium', 'Premium', 80, '12 Months', '<li> Meal Plan Available</li>\r\n<li> One To One consultation with a nutritionist once a month</li>\r\n<li> Free fresh vegetables every odd month</li>\r\n<li> Pre-planned workout schedule and meal plan from a nutritionist</li>');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `subscription_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `subscription_id`) VALUES
(1, 'Oscar', 'oscarnyo728@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 8002),
(9, 'Leongsj', 'leongshijie@hotmail.com', '202cb962ac59075b964b07152d234b70', 8003);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8004;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
