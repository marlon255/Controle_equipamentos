-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16-Fev-2016 às 17:52
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
-- Estrutura da tabela `cadastro_combustivel`
--

CREATE TABLE IF NOT EXISTS `cadastro_combustivel` (
`id` int(10) NOT NULL,
  `combustivel_nome` varchar(45) NOT NULL,
  `combustivel_pref` varchar(6) NOT NULL,
  `comb_unit` varchar(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cadastro_combustivel`
--

INSERT INTO `cadastro_combustivel` (`id`, `combustivel_nome`, `combustivel_pref`, `comb_unit`) VALUES
(1, 'Ã“leo Diesel', 'S500', 'L'),
(4, 's', 's', 'Kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_combustivel`
--
ALTER TABLE `cadastro_combustivel`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_combustivel`
--
ALTER TABLE `cadastro_combustivel`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
