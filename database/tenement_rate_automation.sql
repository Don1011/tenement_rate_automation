-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 03:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenement_rate_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `land_size` int(10) NOT NULL,
  `vicinity` int(11) NOT NULL,
  `sub_vicinity` int(11) NOT NULL,
  `use_of_land` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `full_name`, `email`, `phone_number`, `land_size`, `vicinity`, `sub_vicinity`, `use_of_land`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', '09034673273', 500, 8, 15, 'agricultural');

-- --------------------------------------------------------

--
-- Table structure for table `sub_vicinities`
--

CREATE TABLE `sub_vicinities` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vicinity_id` int(255) NOT NULL,
  `size_m2` int(11) NOT NULL,
  `residential_use_rate` decimal(11,2) NOT NULL,
  `residential_use_price` decimal(11,2) NOT NULL,
  `commercial_use_rate` decimal(11,2) NOT NULL,
  `commercial_use_price` decimal(11,2) NOT NULL,
  `industrial_use_rate` decimal(11,2) NOT NULL,
  `industrial_use_price` decimal(11,2) NOT NULL,
  `edu_health_use_rate` decimal(11,2) NOT NULL,
  `edu_health_use_price` decimal(11,2) NOT NULL,
  `institutional_use_rate` decimal(11,2) NOT NULL,
  `institutional_use_price` decimal(11,2) NOT NULL,
  `filling_station_rate` decimal(11,2) NOT NULL,
  `filling_station_price` decimal(11,2) NOT NULL,
  `agricultural_use_rate` decimal(11,2) NOT NULL,
  `agricultural_use_price` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_vicinities`
--

INSERT INTO `sub_vicinities` (`id`, `name`, `vicinity_id`, `size_m2`, `residential_use_rate`, `residential_use_price`, `commercial_use_rate`, `commercial_use_price`, `industrial_use_rate`, `industrial_use_price`, `edu_health_use_rate`, `edu_health_use_price`, `institutional_use_rate`, `institutional_use_price`, `filling_station_rate`, `filling_station_price`, `agricultural_use_rate`, `agricultural_use_price`) VALUES
(1, 'Barnawa G.R.A.', 1, 900, '13.00', '11997.00', '28.00', '24993.00', '3.00', '2250.00', '25.00', '22500.00', '3.00', '22500.00', '250000.00', '250000.00', '0.05', '45.00'),
(2, 'Barnawa Villages', 1, 450, '7.00', '2997.00', '22.00', '9999.00', '3.00', '50.00', '20.00', '9000.00', '2.00', '675.00', '250000.00', '250000.00', '0.05', '675.00'),
(3, 'Ungwan Sarki G.R.A.', 2, 900, '33.00', '29997.00', '44.00', '39996.00', '3.00', '2250.00', '30.00', '27000.00', '2.00', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(4, 'Ungwan Sarki Villages', 2, 450, '7.00', '2997.00', '22.00', '9999.00', '2.50', '1125.00', '3.00', '9000.00', '2.00', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(5, 'Malali G.R.A', 3, 900, '33.00', '29997.00', '44.00', '39996.00', '2.50', '250000.00', '30.00', '27000.00', '2.00', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(6, 'Malali Layout', 3, 900, '17.00', '14994.00', '33.00', '29997.00', '2.50', '250000.00', '25.00', '22500.00', '2.00', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(7, 'Malali Village', 3, 450, '20.00', '2997.00', '22.00', '9999.00', '2.50', '250000.00', '20.00', '9000.00', '2.00', '675.00', '250000.00', '250000.00', '0.05', '23.00'),
(8, 'Nassarawa Village', 4, 450, '7.00', '2997.00', '22.00', '9999.00', '2.50', '250000.00', '3.00', '1125.00', '20.00', '9000.00', '250000.00', '250000.00', '0.05', '23.00'),
(9, 'Ungwan Rimi G.R.A.', 5, 900, '33.00', '29997.00', '44.00', '39996.00', '2.50', '250000.00', '30.00', '250000.00', '2.00', '1350.00', '25000.00', '25000.00', '0.05', '45.00'),
(10, 'Ungwan Rimi Village', 5, 450, '7.00', '2997.00', '22.00', '9999.00', '2.50', '250000.00', '20.00', '6997.00', '2.00', '675.00', '25000.00', '25000.00', '0.05', '225.00'),
(11, 'Ungwan Rimi Low Cost Housing', 5, 900, '17.00', '14994.00', '33.00', '29997.00', '2.50', '250000.00', '25.00', '22500.00', '2.00', '1350.00', '25000.00', '25000.00', '0.05', '45.00'),
(12, 'Kakuri G.R.A.', 6, 900, '13.00', '11997.00', '28.00', '24993.00', '5.00', '4050.00', '25.00', '22500.00', '2.00', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(13, 'Kakuri Village', 6, 450, '7.00', '2997.00', '22.00', '9999.00', '3.00', '1125.00', '20.00', '9000.00', '2.00', '675.00', '250000.00', '250000.00', '0.05', '23.00'),
(14, 'National Eye Center G.R.A', 7, 900, '17.00', '14994.00', '33.00', '29997.00', '56.00', '49995.00', '25.00', '22500.00', '2.00', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(15, 'Kudenda Layout', 8, 900, '13.00', '11997.00', '28.00', '24993.00', '3.00', '2250.00', '25.00', '2500.00', '2.00', '1350.00', '250000.00', '250000.00', '0.05', '1350.00'),
(16, 'Kudenda Village', 8, 450, '7.00', '2997.00', '22.00', '9990.00', '3.00', '1125.00', '20.00', '9000.00', '2.00', '675.00', '250000.00', '250000.00', '0.05', '675.00'),
(17, 'Kawo, Ungwan Gwari, Hayin Banki, SMC Quarters', 10, 450, '17.00', '7497.00', '33.00', '14998.00', '3.00', '1125.00', '25.00', '11250.00', '2.00', '675.00', '250000.00', '250000.00', '0.05', '23.00'),
(18, 'Kawo, Hayin Banki, Ungwan Gwari, Rafin Gaza Village', 10, 450, '7.00', '2997.00', '22.00', '9999.00', '56.00', '124997.00', '20.00', '9000.00', '2.00', '675.00', '250000.00', '250000.00', '0.05', '23.00'),
(19, 'Badarawa G.R.A.', 9, 900, '33.00', '29997.00', '44.00', '39996.00', '56.00', '49995.00', '30.00', '27000.00', '3.00', '22500.00', '250000.00', '250000.00', '0.05', '45.00'),
(20, 'Badarawa Village', 9, 450, '7.00', '2997.00', '22.00', '9999.00', '56.00', '24997.00', '20.00', '9000.00', '2.00', '900.00', '250000.00', '250000.00', '0.05', '45.00'),
(21, 'Tudun Wada(Lodge Layout, Ungwan Mu\'azu Layout, Tudun Wada G.R.A. and Hayin Damani Layout)', 11, 750, '17.00', '12495.00', '33.00', '24997.00', '3.00', '1875.00', '25.00', '18750.00', '3.00', '2250.00', '250000.00', '250000.00', '0.05', '45.00'),
(22, 'Tudun Wada Village', 11, 450, '7.00', '2997.00', '22.00', '9999.00', '3.00', '1125.00', '20.00', '9000.00', '2.00', '900.00', '250000.00', '250000.00', '0.05', '45.00'),
(23, 'Kaduna Metropolis Area (Ahmadu Bello Way, Ibrahim Taiwo Road, etc)', 12, 900, '22.22', '19998.00', '33.33', '29997.00', '55.55', '49995.00', '30.00', '27000.00', '1.50', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(24, 'Trade Fair/Barkallahu Layout', 13, 900, '16.66', '14994.00', '33.33', '29997.00', '2.50', '2250.00', '25.00', '22500.00', '1.50', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(25, 'Trade Fair / Barkallahu Village', 13, 450, '6.66', '2997.00', '22.22', '9999.00', '55.55', '24997.50', '20.00', '9000.00', '1.50', '675.00', '250000.00', '250000.00', '0.50', '45.00'),
(26, 'Kurmi Mashi Layout, Mando Prison Layour, Gwamna Road Layout, College Road Layout, Badikko Layout', 14, 450, '16.66', '7497.00', '33.33', '14998.00', '55.55', '11025.00', '2.50', '1125.00', '1.50', '675.00', '250000.00', '250000.00', '0.05', '45.00'),
(27, 'Industrial Layouts (Mando, Ludenda, Refinery, Nassarawa, Kawo, and H/Banko)', 15, 1000, '0.00', '0.00', '0.00', '0.00', '2.50', '250000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(30, 'Sohawo & Ungwan Hazo Layout', 16, 750, '16.66', '124950.00', '33.33', '24997.00', '2.50', '1875.00', '25.00', '18750.00', '1.50', '1125.00', '250000.00', '250000.00', '0.05', '37.50'),
(31, 'Millenium City Village, Danbushiya, Danhanu, Keke, etc.', 17, 900, '33.33', '29997.00', '44.44', '39996.00', '55.55', '49995.00', '30.00', '27000.00', '1.50', '1350.00', '250000.00', '250000.00', '0.05', '45.00'),
(32, 'Kajuru, Kachia, Jaba, Zangin Kataf, Kaura, Kagoro, Kagarko.', 21, 450, '3.33', '1498.00', '5.55', '2497.00', '0.75', '3337.50', '5.00', '2250.00', '0.50', '225.00', '75000.00', '75000.00', '0.50', '22.50'),
(33, 'Giwa / Birnin Gwari', 18, 450, '3.33', '1498.00', '5.55', '2497.00', '0.75', '337.50', '5.00', '2250.00', '0.50', '225.00', '75000.00', '75000.00', '0.05', '22.60'),
(34, 'Kabala Costain Layout', 19, 450, '16.66', '7497.00', '33.33', '14998.50', '2.50', '1125.00', '25.00', '1125.00', '1.50', '675.00', '250000.00', '250000.00', '0.05', '22.50'),
(35, 'Kabala Costain Village', 19, 450, '6.66', '2997.00', '22.22', '9999.00', '55.55', '24997.00', '20.00', '9000.00', '1.50', '675.00', '250000.00', '250000.00', '0.05', '22.50'),
(36, 'Saminaka, Ikara, Kauru, Makarfi Layout and Village', 22, 450, '3.33', '1498.50', '5.55', '2497.50', '0.75', '337.50', '5.00', '2250.00', '0.50', '225.00', '75000.00', '75000.00', '0.05', '22.50'),
(37, 'Trikania Layout', 23, 450, '30.00', '15000.00', '20.00', '10000.00', '55.55', '25750.00', '20.00', '10000.00', '15.00', '13000.00', '70000.00', '70000.00', '0.05', '45.00');

-- --------------------------------------------------------

--
-- Table structure for table `vicinities`
--

CREATE TABLE `vicinities` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vicinities`
--

INSERT INTO `vicinities` (`id`, `name`) VALUES
(1, 'Barnawa'),
(2, 'Ungwan Sarki'),
(3, 'Malali'),
(4, 'Nassarawa'),
(5, 'Ungwan Rimi'),
(6, 'Kakuri'),
(7, 'National Eye Center'),
(8, 'Kudenda'),
(9, 'Badarawa'),
(10, 'Kawo, Ungwan Gwari, Hayin Banki'),
(11, 'Tudun Wada'),
(12, 'Kaduna Metropolis Area'),
(13, 'Trade Fair/Barkallahu'),
(14, 'Kurmi Mashi, Mando Prison, Gwamna Road'),
(15, 'Industrial Layout'),
(16, 'Sohawo & Ungwan Hazo'),
(17, 'Millenium City'),
(18, 'Giwa'),
(19, 'Kabala Costain'),
(21, 'Kajuru, Kadara, Jaba, Zangon Kataf, Kaura, Kagoro, Kagarko.'),
(22, 'Saminaka, Ikara, Kauru, Makarfi Layout & Village\r\n'),
(23, 'Trikania');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_vicinities`
--
ALTER TABLE `sub_vicinities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vicinities`
--
ALTER TABLE `vicinities`
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
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_vicinities`
--
ALTER TABLE `sub_vicinities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `vicinities`
--
ALTER TABLE `vicinities`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
