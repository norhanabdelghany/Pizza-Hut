-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 05:42 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `country`, `city`, `address`, `postal_code`, `phone_number`) VALUES
(5, 'gias', 'adqw', '26+6adwd', '1355', '2997'),
(6, 'gias', 'adqw', '26+6adwd', '1355', '2997'),
(7, 'gias', 'adqw', '26+6adwd', '1355', '2997'),
(8, 'gias', 'adqw', '26+6adwd', '1355', '2997'),
(9, 'Egypt', 'Giza', '32 465w asqwd', '15963', '2997'),
(10, 'again', 'as', 'wdq', '1566', '2997'),
(11, 'ewfwef', 'wec', 'dwe', '156', '15555668'),
(12, 'qwdq', 'qwdqw', 'dqwqd', '2222222', '222222222'),
(13, 'cwe', 'dw', 'dwef', '21254', '32345'),
(14, 'egypt', '166', 'xsa65', '1256', '1515668');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `isbn` int(20) NOT NULL,
  `autho_name` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `image_url` varchar(1000) DEFAULT 'def.png',
  `book_condition` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `description`, `price`, `quantity`, `isbn`, `autho_name`, `status`, `category_id`, `customer_id`, `image_url`, `book_condition`) VALUES
(26, 'THE UPSTAIRS ROOM Kate Murray-Browne', 'A surprising and gripping sci-fi thriller with a killer twist\r\n\r\n                        The daughter of two astronauts, Romy Silvers is no stranger to life in space. But she never knew how isolating the universe could be until her parents’ tragic deaths left her alone on the Infinity, a spaceship speeding away from Earth.\r\n                        \r\n                        Romy tries to make the best of her lonely situation, but with only brief messages from her therapist on Earth to keep her company, she can’t help but feel like something is missing. It seems like a dream come true when NASA alerts her that another ship, the Eternity, will be joining the Infinity.\r\n                        \r\n                        Romy begins exchanging messages with J, the captain of the Eternity, and their friendship breathes new life into her world. But as the Eternity gets closer, Romy learns there’s more to J’s mission than she could have imagined. And suddenly, there are worse things than being alone….\r\n                        \r\n                        Now nominated as a YALSA Quick Pick!', 59.99, 50, 985262984, 'Author', 'Available', 15, 16, 'book3.jpg', 'new'),
(27, 'Stephen King’s Cujo horrible psyche', 'A surprising and gripping sci-fi thriller with a killer twist The daughter of two astronauts, Romy Silvers is no stranger to life in space. But she never knew how isolating the universe could be until her parents’ tragic deaths left her alone on the Infinity, a spaceship speeding away from Earth. Romy tries to make the best of her lonely situation, but with only brief messages from her therapist on Earth to keep her company, she can’t help but feel like something is missing. It seems like a dream come true when NASA alerts her that another ship, the Eternity, will be joining the Infinity. Romy begins exchanging messages with J, the captain of the Eternity, and their friendship breathes new life into her world. But as the Eternity gets closer, Romy learns there’s more to J’s mission than she could have imagined. And suddenly, there are worse things than being alone…. Now nominated as a YALSA Quick Pick!', 63.99, 20, 95383893, 'Author', 'Available', 4, 16, 'book4.jpg', 'used'),
(28, 'Sw1 ', 'To learn Programming With PHP', 99.99, 14, 959522, 'Author', 'Available', 10, 16, 'def.png', 'new'),
(29, 'The secret', 'Amazing book', 299.99, 30, 12155658, 'Emmy', 'Available', 6, 14, 'book1.jpg', 'New'),
(30, 'qqq', 'sefwefwefdcsjkvnvkjnse', 455, 30, 548545, 'efqe', 'Available', 17, 16, 'book2.jpg', 'Used'),
(31, 'Avengers', 'The Story about Heros', 25, 6, 25533883, 'tomas', 'Available', 4, 16, 'b12.jpg', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `book_transaction`
--

CREATE TABLE `book_transaction` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_transaction`
--

INSERT INTO `book_transaction` (`id`, `seller_id`, `buyer_id`, `book_id`, `amount`) VALUES
(37, 14, 16, 29, 2),
(39, 16, 14, 31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(3, 'Sports'),
(4, 'Fiction'),
(5, 'Comics'),
(6, 'Science'),
(7, 'Business'),
(8, 'Astrology'),
(9, 'Forest'),
(10, 'Computer'),
(11, 'Yoga'),
(12, 'Low Books'),
(13, 'Architecture'),
(14, 'Competitive Exam'),
(15, 'Art And Culture'),
(16, 'Terrorism'),
(17, 'Religion');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `method_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_method_id` int(11) NOT NULL,
  `payment_type` varchar(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `book_id` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `customer_id`, `shipping_method_id`, `payment_type`, `address_id`, `date`, `book_id`, `quantity`, `total`) VALUES
(10, 16, 1, 'cash', 10, '2020-04-06', 27, 6, 383.94),
(11, 16, 1, 'cash', 10, '2020-04-06', 29, 2, 599.98),
(12, 16, 1, 'cash', 11, '2020-04-06', 27, 6, 383.94),
(13, 16, 1, 'cash', 11, '2020-04-06', 29, 2, 599.98),
(14, 16, 1, 'cash', 12, '2020-04-06', 27, 6, 383.94),
(15, 16, 1, 'cash', 12, '2020-04-06', 29, 2, 599.98),
(16, 16, 1, 'cash', 13, '2020-04-06', 27, 1, 63.99),
(17, 14, 1, 'cash', 14, '2020-04-13', 31, 7, 175);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_method`
--

CREATE TABLE `shipping_method` (
  `id` int(11) NOT NULL,
  `method_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_method`
--

INSERT INTO `shipping_method` (`id`, `method_name`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test1`) VALUES
(1, 1),
(2, 9),
(3, 9),
(4, 6),
(5, 5),
(6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user_type` int(1) NOT NULL DEFAULT 1,
  `can_read` int(5) NOT NULL,
  `can_write` int(5) NOT NULL,
  `can_update` int(5) NOT NULL,
  `can_delete` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `user_type`, `can_read`, `can_write`, `can_update`, `can_delete`) VALUES
(14, 'Gerges_Hanna', 'gerges', '123456', '01067288578', 1, 1, 1, 1, 1),
(15, 'Abanoub', 'bebo', '123', '0156235215', 1, 1, 1, 1, 1),
(16, 'Max', 'max', 'max', '0128315116', 0, 1, 1, 0, 0),
(18, 'reg', 'Reg@red.com', '147852', '0315', 0, 1, 0, 0, 0),
(25, 'mac', 'mac@a.com', '123456', '012165165', 0, 1, 0, 0, 0),
(26, 'wdqw', 'adwa@fefw.bf', '123456', '010525202', 0, 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `isbn` (`isbn`),
  ADD KEY `customer_book_id` (`customer_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `book_transaction`
--
ALTER TABLE `book_transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_trans_id` (`buyer_id`),
  ADD KEY `seller_trans_id` (`seller_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `method_name` (`method_name`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_purchase_id` (`customer_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_sale` (`book_id`),
  ADD KEY `purchase_sale` (`purchase_id`);

--
-- Indexes for table `shipping_method`
--
ALTER TABLE `shipping_method`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `method_name` (`method_name`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `book_transaction`
--
ALTER TABLE `book_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_method`
--
ALTER TABLE `shipping_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `customer_book_id` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `book_transaction`
--
ALTER TABLE `book_transaction`
  ADD CONSTRAINT `buyer_trans_id` FOREIGN KEY (`buyer_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `seller_trans_id` FOREIGN KEY (`seller_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `customer_purchase_id` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `book_sale` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `purchase_sale` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
