-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 12-Fev-2016 às 18:18
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calixto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_equipamento`
--

CREATE TABLE IF NOT EXISTS `tipo_equipamento` (
`id` int(10) NOT NULL,
  `tipo_equip` varchar(25) NOT NULL,
  `sigla_equip` varchar(3) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipo_equipamento`
--

INSERT INTO `tipo_equipamento` (`id`, `tipo_equip`, `sigla_equip`) VALUES
(1, 'a', 'a'),
(2, '', ''),
(3, 'dd', 'dd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tipo_equipamento`
--
ALTER TABLE `tipo_equipamento`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tipo_equipamento`
--
ALTER TABLE `tipo_equipamento`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
