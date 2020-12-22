-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 06:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obrazac`
--

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

CREATE TABLE `prijava` (
  `id` int(11) NOT NULL,
  `broj_firme` varchar(255) NOT NULL,
  `naziv_firme` varchar(255) NOT NULL,
  `adresa_firme` varchar(255) NOT NULL,
  `grad_firme` varchar(255) NOT NULL,
  `postanskibroj_firme` varchar(255) NOT NULL,
  `vrsta_prijave` char(5) NOT NULL,
  `telefon_firme` varchar(50) NOT NULL,
  `email_firme` varchar(50) NOT NULL,
  `licni_broj` varchar(255) NOT NULL,
  `datum_korisnika` varchar(10) NOT NULL,
  `imei_prezime_korisnika` varchar(255) NOT NULL,
  `spol` char(10) NOT NULL,
  `licna_adresa` varchar(255) NOT NULL,
  `licni_email` varchar(255) NOT NULL,
  `strucna_sprema` char(5) NOT NULL,
  `sati` varchar(50) NOT NULL,
  `minute` varchar(50) NOT NULL,
  `strucna_sprema_na _radnom` char(5) NOT NULL,
  `datum_prijave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prijava`
--

INSERT INTO `prijava` (`id`, `broj_firme`, `naziv_firme`, `adresa_firme`, `grad_firme`, `postanskibroj_firme`, `vrsta_prijave`, `telefon_firme`, `email_firme`, `licni_broj`, `datum_korisnika`, `imei_prezime_korisnika`, `spol`, `licna_adresa`, `licni_email`, `strucna_sprema`, `sati`, `minute`, `strucna_sprema_na _radnom`, `datum_prijave`) VALUES
(70, '123', 'tarik', 'zaulica,6', 'Sarajevo', '123', 'OO', '+38762411664', 'terzotarik@gmail.com', '123', '2020-12-03', 'tarik terzo', 'Å½ensko', '1234', 'tarikf@gmail.com', 'VÅ S', '18:42', '18:42', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prijava`
--
ALTER TABLE `prijava`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prijava`
--
ALTER TABLE `prijava`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
