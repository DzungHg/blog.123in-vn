-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2020 at 09:01 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ad123in_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `WARNING`
--

CREATE TABLE `WARNING` (
  `id` int(11) NOT NULL,
  `warning` text COLLATE utf8_unicode_ci,
  `Bitcoin_Address` text COLLATE utf8_unicode_ci,
  `Email` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `WARNING`
--

INSERT INTO `WARNING` (`id`, `warning`, `Bitcoin_Address`, `Email`) VALUES
(1, 'To recover your lost Database and avoid leaking it: Send us 0.06 Bitcoin (BTC) to our Bitcoin address 1BLYhUDmnmVPVjcTWgc6gFT6DCYwbVieUD and contact us by Email with your Server IP or Domain name and a Proof of Payment. If you are unsure if we have your data, contact us and we will send you a proof. Your Database is downloaded and backed up on our servers. Backups that we have right now: admincan_vhanh, ad123in_blog, admincan_db, admin123in_123in, ad123in_kti, caancomvn_3, ad123in_123in, admincan_intra, innhanh123_in123, adminanh_proshow, adminkti_db, admingc_com, ad123in_123in2, adminanh_db, innhanh123_one, adminapro_chat, adminapro_photo, ad123in_innhanh, adminap_th, adminkti_db2, admingc_chat, admincan_one . If we dont receive your payment in the next 10 Days, we will make your database public or use them otherwise.', '1BLYhUDmnmVPVjcTWgc6gFT6DCYwbVieUD', 'contact@sqldb.to');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `WARNING`
--
ALTER TABLE `WARNING`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
