-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 08:47 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodywidgets`
--
CREATE DATABASE
IF NOT EXISTS `woodywidgets` DEFAULT CHARACTER
SET latin1
COLLATE latin1_swedish_ci;
USE `woodywidgets`;

-- --------------------------------------------------------

--
-- Table structure for table `maincontent`
--

CREATE TABLE `maincontent`
(
  `id` int
(11) NOT NULL,
  `link_id` varchar
(50) NOT NULL,
  `headline` varchar
(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincontent`
--

INSERT INTO `maincontent` (`
id`,
`link_id
`, `headline`, `body`) VALUES
(1, 'index.php', 'Home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p> <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'),
(2, 'aboutus.php', 'About us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p> <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'),
(3, 'products.php', 'Products', '<strong>Lorem ipsum</strong>\r\n dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p> <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'),
(4, 'services.php', 'Services', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p> <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'),
(5, 'support.php', 'Support', 'Download the Latest Support files for your Woody Widgets.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products`
(
  `id` int
(11) NOT NULL,
  `image` varchar
(100) NOT NULL,
  `name` varchar
(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`
id`,
`image
`, `name`, `description`) VALUES
(1, 'product.gif', 'Widget 1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque harum nihil natus temporibus repellendus blanditiis recusandae voluptatem, officia deserunt rem ipsa in obcaecati dolorum rerum aliquam optio tempore quaerat unde!'),
(2, 'product.gif', 'Widget 2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque harum nihil natus temporibus repellendus blanditiis recusandae voluptatem, officia deserunt rem ipsa in obcaecati dolorum rerum aliquam optio tempore quaerat unde!'),
(3, 'product.gif', 'Widget 3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque harum nihil natus temporibus repellendus blanditiis recusandae voluptatem, officia deserunt rem ipsa in obcaecati dolorum rerum aliquam optio tempore quaerat unde!'),
(4, 'product.gif', 'Widget 4', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque harum nihil natus temporibus repellendus blanditiis recusandae voluptatem, officia deserunt rem ipsa in obcaecati dolorum rerum aliquam optio tempore quaerat unde!'),
(5, 'product.gif', 'Widget 5', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque harum nihil natus temporibus repellendus blanditiis recusandae voluptatem, officia deserunt rem ipsa in obcaecati dolorum rerum aliquam optio tempore quaerat unde!'),
(6, 'product.gif', 'Widget 6', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque harum nihil natus temporibus repellendus blanditiis recusandae voluptatem, officia deserunt rem ipsa in obcaecati dolorum rerum aliquam optio tempore quaerat unde!');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles`
(
  `id` int
(11) NOT NULL,
  `role` varchar
(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`
id`,
`role
`) VALUES
(1, 'admin'),
(2, 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services`
(
  `id` int
(11) NOT NULL,
  `image` varchar
(100) NOT NULL,
  `name` varchar
(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`
id`,
`image
`, `name`, `description`) VALUES
(1, 'woody.webp', 'Service 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.\r\nNulla quis sem at nibh elementum imperdiet. Duis sagittis it. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.'),
(2, 'woody.webp', 'Service 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.\r\nNulla quis sem at nibh elementum imperdiet. Duis sagittis it. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support`
(
  `id` int
(11) NOT NULL,
  `name` varchar
(100) NOT NULL,
  `link` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`
id`,
`name
`, `link`) VALUES
(1, 'Update 1.0.0', '5cd92fad764302.24429139.txt'),
(2, 'Update 1.0.1', '5cd9303c326401.74038003.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
  `id` int
(11) NOT NULL,
  `username` varchar
(50) NOT NULL,
  `password` varchar
(255) NOT NULL,
  `role` int
(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`
id`,
`username
`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$WqIloribyp1HFf.rZWgJsuUvep68A6vwQb4H.uMRsk.fOCKcIAqVe', 1),
(2, 'editor', '$2y$10$QYede5CtR5iTgWultPTvr.w9wTr.IQ0KgtInXtAtguGMgH2wu4F8i', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maincontent`
--
ALTER TABLE `maincontent`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
ADD PRIMARY KEY
(`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maincontent`
--
ALTER TABLE `maincontent`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
