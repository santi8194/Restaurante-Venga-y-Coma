-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 07:24 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurante`
--

-- --------------------------------------------------------

--
-- Table structure for table `atencion`
--

CREATE TABLE IF NOT EXISTS `atencion` (
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `hora` int(2) NOT NULL DEFAULT '0',
  `id_mesa` int(4) NOT NULL,
  `mesa_rest` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atencion`
--

INSERT INTO `atencion` (`fecha`, `hora`, `id_mesa`, `mesa_rest`) VALUES
('0000-00-00', 36, 0, 'medellin'),
('0000-00-00', 14, 1, 'Bogota');

-- --------------------------------------------------------

--
-- Table structure for table `mesa`
--

CREATE TABLE IF NOT EXISTS `mesa` (
  `id` int(4) NOT NULL DEFAULT '0',
  `capacidad` int(1) NOT NULL,
  `estado` varchar(13) NOT NULL,
  `restaurante` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesa`
--

INSERT INTO `mesa` (`id`, `capacidad`, `estado`, `restaurante`) VALUES
(0, 4, 'No Disponible', 'Barranquil'),
(0, 4, 'No Disponible', 'medellin'),
(1, 5, 'Disponible', 'Bogota'),
(1, 6, 'Disponible', 'Cali');

-- --------------------------------------------------------

--
-- Table structure for table `restaurante`
--

CREATE TABLE IF NOT EXISTS `restaurante` (
  `ciudad` varchar(10) NOT NULL,
  `direccion` varchar(12) NOT NULL,
  `telefono` int(10) NOT NULL,
  `tamano` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurante`
--

INSERT INTO `restaurante` (`ciudad`, `direccion`, `telefono`, `tamano`) VALUES
('Barranquil', 'calle 10', 38297, 79),
('Bogota', 'avenida sali', 2849271, 23),
('Cali', 'trans 859', 38592, 84),
('medellin', 'avenida nuti', 24819, 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`fecha`,`hora`,`id_mesa`), ADD KEY `id_mesa_rest` (`id_mesa`,`mesa_rest`);

--
-- Indexes for table `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`,`restaurante`), ADD KEY `restaurante` (`restaurante`);

--
-- Indexes for table `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`ciudad`), ADD UNIQUE KEY `telefono` (`telefono`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atencion`
--
ALTER TABLE `atencion`
ADD CONSTRAINT `atencion_ibfk_1` FOREIGN KEY (`id_mesa`, `mesa_rest`) REFERENCES `mesa` (`id`, `restaurante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mesa`
--
ALTER TABLE `mesa`
ADD CONSTRAINT `restaurante` FOREIGN KEY (`restaurante`) REFERENCES `restaurante` (`ciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
