-- Amul Shop Database Structure
-- Created for XAMPP local development

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `amul`
-- Create database if not exists
CREATE DATABASE IF NOT EXISTS `amul` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `amul`;

-- --------------------------------------------------------
-- Table structure for table `contact_messages`
-- --------------------------------------------------------

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `consent` tinyint(1) NOT NULL DEFAULT 1,
  `status` varchar(20) DEFAULT 'New',
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `submitted_at` (`submitted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Table structure for table `product_enquiries`
-- --------------------------------------------------------

CREATE TABLE `product_enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `preferred_contact` varchar(20) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `enquiry_type` varchar(50) NOT NULL,
  `urgency` varchar(20) DEFAULT 'normal',
  `message` text NOT NULL,
  `consent` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(20) DEFAULT 'New',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category` (`product_category`),
  KEY `enquiry_type` (`enquiry_type`),
  KEY `status` (`status`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Table structure for table `users`
-- --------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','guest') NOT NULL DEFAULT 'guest',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Insert default users
-- --------------------------------------------------------

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('om', '$2y$10$8K1p3UnqiO6TDu.IG2k/9eLa7m/jWNm.tqU0Rjct5vRHOlcTUKHcK', 'admin'),
('guest', '$2y$10$n9x3h8QqLPKsB5w6RJW9/.xEfgY5nO2wKJz7qHNvC8U0DvO4t.VW2', 'guest');

-- --------------------------------------------------------
-- Sample data for testing (optional)
-- --------------------------------------------------------

INSERT INTO `contact_messages` (`name`, `phone`, `email`, `subject`, `message`) VALUES
('John Doe', '9876543210', 'john@example.com', 'Product Inquiry', 'I would like to know more about your milk products.'),
('Jane Smith', '9876543211', 'jane@example.com', 'Store Hours', 'What are your operating hours?');

INSERT INTO `product_enquiries` (`name`, `phone`, `email`, `preferred_contact`, `product_category`, `product_name`, `enquiry_type`, `urgency`, `message`, `consent`) VALUES
('Raj Patel', '9876543212', 'raj@example.com', 'phone', 'Dairy Products', 'Amul Butter', 'availability', 'high', 'Need bulk quantity for restaurant', 1),
('Priya Sharma', '9876543213', 'priya@example.com', 'email', 'Ice Cream', 'Kulfi', 'pricing', 'normal', 'Price for 1 liter pack', 1);

COMMIT;
