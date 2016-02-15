-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 15-Fev-2016 às 18:55
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
-- Estrutura da tabela `cadastro_proprietario`
--

CREATE TABLE IF NOT EXISTS `cadastro_proprietario` (
`id` int(10) NOT NULL,
  `raz_soc` varchar(48) NOT NULL,
  `nome_fant` varchar(32) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `insc_estad` varchar(15) NOT NULL,
  `insc_munic` varchar(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `endereco` varchar(25) NOT NULL,
  `comple` varchar(25) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `email` varchar(48) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cadastro_proprietario`
--

INSERT INTO `cadastro_proprietario` (`id`, `raz_soc`, `nome_fant`, `cnpj`, `insc_estad`, `insc_munic`, `cep`, `estado`, `cidade`, `bairro`, `endereco`, `comple`, `telefone`, `email`) VALUES
(1, 'a', 'a', '11.111.111/1111-11', '111.111.111.111', '111111111111111', '11111-111', 'a', 'a', 'a', 'a', 'a', '33 33333-3333', 'a@a.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_proprietario`
--
ALTER TABLE `cadastro_proprietario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_proprietario`
--
ALTER TABLE `cadastro_proprietario`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
