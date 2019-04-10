-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 09:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animallica`
--
CREATE DATABASE IF NOT EXISTS `animallica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `animallica`;

-- --------------------------------------------------------

--
-- Table structure for table `anunturi`
--

CREATE TABLE `anunturi` (
  `id` int(5) NOT NULL,
  `animal` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descriere` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `poza` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pret` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `localitate` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`id`, `animal`, `descriere`, `poza`, `pret`, `contact`, `localitate`) VALUES
(1, 'Rex', 'Ofer inspre adoptie caine, rasa Staffordshire Bull Terrie. Are 4 luni, raspunde la numele de Rex', 'https://i.redd.it/0jtpr4frvoq21.jpg', 'Gratuit', 't287766@nwytg.net', 'Cluj-Napoca'),
(2, 'Mimi', 'Doresti aceasta pisica adorabila pentru tine? Ei bine o oferta pentru tine! Pretul este negociabil. Detalii la mailul de mai jos.', 'https://i.redd.it/6e6li7dm8pq21.jpg', '250 lei', 't293688@nwytg.net', 'Fantanele'),
(3, 'Yuki', 'Inca nu am gasit o persoana care sa imi poata arata un caine mai frumusel decat Yuki. Aceasta raza de soare poate fi alaturi de tine!', 'https://i.redd.it/lg46cj77fdr21.jpg', '650 lei', 't295692@nwytg.net', 'Botosani'),
(4, 'Mr. Whiskers', 'Dragut, confuz, prostut. Asa arata Mr. Whiskers. Cred ca imaginea alaturata descrie mai bine decat pot eu in cuvinte :P', 'https://i.redd.it/sd9c4t1rvqq21.jpg', 'Gratuit', 't295692@nwytg.net', 'Dorohoi'),
(5, 'Bobi', 'Acest micut maiestuos este gata sa iti topeasca retina. Cum ar putea sa nu? Uite ce dragut e! Doar arunca-i o minge si vezi ce se intampla. Detalii la mailul de mai jos.', 'https://i.redd.it/5u4jnn3dpnq21.png', '300 lei', 'andrei_alex2013@gmail.com', 'Orsova');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunturi`
--
ALTER TABLE `anunturi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
