-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 01:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinylshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `ID` int(11) NOT NULL,
  `titel` varchar(22) NOT NULL DEFAULT '',
  `artiest` varchar(15) NOT NULL DEFAULT '',
  `genre` varchar(15) NOT NULL DEFAULT '',
  `prijs` decimal(5,2) NOT NULL DEFAULT 0.00,
  `voorraad` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`ID`, `titel`, `artiest`, `genre`, `prijs`, `voorraad`) VALUES
(1, 'Cafe Atlantico', 'Cesarie Evora', 'World', '3.00', 100),
(2, 'Rumba Azul', 'Caetano Veloso', 'Latin', '4.90', 50),
(3, 'Survivor', 'Destiny\'s Child', 'R&B', '3.00', 789),
(4, 'Oh Girl', 'The Chi-lites', 'Pop', '3.00', 2),
(5, 'Der Her ist mei getreu', 'Ton Koopman', 'Klasiek', '5.50', 30),
(6, 'Closing Time', 'Tom Waits', 'Rock', '3.00', 0),
(7, 'Irresistible', 'Celia Cruz', 'Latin', '3.50', 23),
(8, 'Marvin Gaye II', 'Marvin Gaye', 'R&B', '4.00', 154),
(9, 'Mi Sangre', 'Juanes', 'Latin', '3.90', 123),
(10, 'Greatest Hits 2', 'Queen', 'Rock', '3.00', 0),
(11, '3121', 'Prince', 'Rock', '3.45', 0),
(12, 'Antologia I', 'Paco de Lucia', 'World', '3.00', 320),
(13, 'Stairway to Heaven', 'Led Zeppelin', 'Rock', '0.99', 200);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `weborder_ID` int(11) NOT NULL,
  `album_ID` int(11) NOT NULL,
  `verkoopprijs` decimal(5,2) NOT NULL,
  `aantal` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `weborder_ID`, `album_ID`, `verkoopprijs`, `aantal`) VALUES
(1, 1, 1, '3.00', 1),
(2, 1, 5, '5.50', 2),
(3, 2, 8, '4.00', 1),
(4, 2, 10, '3.00', 2),
(5, 3, 1, '3.00', 1),
(6, 4, 5, '5.50', 1),
(7, 4, 8, '4.00', 1),
(8, 4, 6, '3.00', 1),
(9, 5, 4, '3.00', 2),
(10, 5, 6, '3.00', 1),
(11, 5, 1, '3.00', 1),
(12, 5, 9, '3.90', 1),
(13, 5, 10, '3.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `ID` int(11) NOT NULL,
  `voornaam` varchar(20) NOT NULL DEFAULT '',
  `naam` varchar(20) NOT NULL DEFAULT '',
  `adres` varchar(20) NOT NULL DEFAULT '',
  `postcode` varchar(6) NOT NULL DEFAULT '',
  `woonplaats` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`ID`, `voornaam`, `naam`, `adres`, `postcode`, `woonplaats`, `email`) VALUES
(1, 'Dylan', 'Huisden', 'Middenweg 11', '1088VV', 'Amsterdam', 'dhuisden@roc.nl'),
(2, 'Nitin', 'Bosman', 'Leidseweg 22', '9900BB', 'Amsterdam', 'nbosman@roc.nl'),
(3, 'Joseph', 'Demirel', 'Leidseplein 33', '9988BB', 'Utrecht', 'josdem@hotmail.com'),
(4, 'Franco', 'Tasiyan', 'Kruislaan 444', '3300VV', 'Utrecht', 'frantas@wanadoo.nl'),
(5, 'Akash', 'Kabli', 'Galileiplantsoen 333', '2299NN', 'Amstelveen', 'aka@hetnet.nl'),
(6, 'Tamara', 'Kabli', 'Mozartstraat 22', '3388XX', 'Amsterdam', 'tamka@hotmail.com'),
(7, 'Arnold', 'Shaw', 'Kruislaan 1', '9876FF', 'Rotterdam', 'asha@roc.nl'),
(11, 'Aboubakr', 'ElHadiyen', 'straatnaam 20', '208395', '1111AA', 'Amsterdam');

-- --------------------------------------------------------

--
-- Table structure for table `weborder`
--

CREATE TABLE `weborder` (
  `ID` int(11) NOT NULL,
  `klant_ID` int(5) NOT NULL,
  `datum` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weborder`
--

INSERT INTO `weborder` (`ID`, `klant_ID`, `datum`) VALUES
(1, 1, '2015-01-01'),
(2, 1, '2015-01-01'),
(3, 2, '2015-02-15'),
(4, 3, '2015-02-20'),
(5, 3, '2015-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `weborder`
--
ALTER TABLE `weborder`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `weborder`
--
ALTER TABLE `weborder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
