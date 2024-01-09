-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 03:22 PM
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
-- Database: `crm_cloths`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `p_id` bigint(20) NOT NULL,
  `supplier` text NOT NULL,
  `regtype` text NOT NULL,
  `state` text NOT NULL,
  `gstno` text DEFAULT NULL,
  `rcm` text DEFAULT NULL,
  `ca` text DEFAULT NULL,
  `purchase_date` date NOT NULL,
  `purchase_type` text NOT NULL,
  `bill_no` bigint(20) NOT NULL,
  `due_days` date NOT NULL,
  `challan_no` bigint(20) NOT NULL,
  `invoice_type` text NOT NULL,
  `barcode` text NOT NULL,
  `item_name` text NOT NULL,
  `design` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `p_qty` bigint(20) NOT NULL,
  `rate` bigint(20) NOT NULL,
  `mrp` bigint(20) NOT NULL,
  `discount` bigint(20) NOT NULL,
  `sell` bigint(20) NOT NULL,
  `wrate` bigint(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `sgst` bigint(20) DEFAULT NULL,
  `branch_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`p_id`, `supplier`, `regtype`, `state`, `gstno`, `rcm`, `ca`, `purchase_date`, `purchase_type`, `bill_no`, `due_days`, `challan_no`, `invoice_type`, `barcode`, `item_name`, `design`, `size`, `color`, `p_qty`, `rate`, `mrp`, `discount`, `sell`, `wrate`, `amount`, `sgst`, `branch_id`) VALUES
(2, 'demo ', 'un reg ', 'gujrat ', ' ', ' ', NULL, '2024-01-09', '1 ', 1, '2024-01-09', 1, '1 ', 'demo-1-s', 'demo', 'demo', 's', 'green', 10, 10, 10, 10, 10, 0, 100, 10, 'Surat'),
(3, 'demo ', 'un reg ', 'gujrat ', ' ', ' ', NULL, '2024-01-09', '1 ', 1, '2024-01-09', 1, '1 ', 'demo-1-xxl', 'demo', 'demo', 'xxl', 'green', 10, 10, 10, 10, 10, 0, 100, 10, 'Surat'),
(4, 'demo ', 'un reg ', 'gujrat ', ' ', ' ', NULL, '2024-01-09', '1 ', 1, '2024-01-09', 1, '1 ', 'demo-1-xxl2', 'demo', 'demo', 'xxl2', 'green', 10, 10, 10, 10, 10, 0, 100, 10, 'Surat'),
(5, 'demo ', 'un reg ', 'gujrat ', ' ', ' ', NULL, '2024-01-09', '1 ', 1, '2024-01-09', 1, '1 ', 'demo-1-xxx3', 'demo', 'demo', 'xxx3', 'green', 10, 10, 10, 10, 10, 0, 100, 10, 'Surat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `p_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
