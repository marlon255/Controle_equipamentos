-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Fev-2016 às 19:07
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `cadastro_combustivel`
--

INSERT INTO `cadastro_combustivel` (`id`, `combustivel_nome`, `combustivel_pref`, `comb_unit`) VALUES
(1, 'Ã“leo Diesel', 'S500', 'L'),
(5, 'Ã“leo Diese', 'S10', 'L');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_equipamento`
--

CREATE TABLE IF NOT EXISTS `cadastro_equipamento` (
`id` int(10) NOT NULL,
  `cad_equip` varchar(35) NOT NULL,
  `cad_mod` varchar(30) NOT NULL,
  `cad_serie` varchar(30) NOT NULL,
  `cad_placa` varchar(8) NOT NULL,
  `cad_chassi` varchar(17) NOT NULL,
  `cad_propri` varchar(35) NOT NULL,
  `cad_pref` varchar(8) NOT NULL,
  `cad_data` varchar(10) NOT NULL,
  `cad_hori` varchar(15) NOT NULL,
  `cad_km` varchar(20) NOT NULL,
  `cad_consu` varchar(20) NOT NULL,
  `cad_fabric` varchar(4) NOT NULL,
  `cad_medida` varchar(6) NOT NULL,
  `cad_hor_min` varchar(10) NOT NULL,
  `cad_valor` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cadastro_equipamento`
--

INSERT INTO `cadastro_equipamento` (`id`, `cad_equip`, `cad_mod`, `cad_serie`, `cad_placa`, `cad_chassi`, `cad_propri`, `cad_pref`, `cad_data`, `cad_hori`, `cad_km`, `cad_consu`, `cad_fabric`, `cad_medida`, `cad_hor_min`, `cad_valor`) VALUES
(1, 'Rolo Compactador', 'aaa', 'aaa', 'aaa', 'aaa', 'TGL', '1', '11/11/1111', '111111', '111111', '111112', '2015', 'Horas', '200', '120000'),
(2, 'Rolo Compactador', 'aaa', 'aaa', 'aaa', 'aaa', 'ABC', '321', '11/11/1111', '111111', '111111', '111112', '2015', 'KM', '200', '120000'),
(3, 'Rolo Compactador', 'aaa', 'aaa', 'aaa', 'aaa', 'TGL', 'RC0101', '11/11/1111', '111111', '111111', '111112', '2015', 'Horas', '200', '120000'),
(4, 'PÃ¡ Carregadeira', '1', '1', '1', '2', 'TGL', '123', '22', '222', '222', '222', '222', 'Horas', '22', '22'),
(6, 'Rolo Compactador', 'bbbb', 'aaa', 'aaa', 'aaa', 'TGL', 'RC0101', '11/11/1111', '111111', '111111', '111112', '2015', 'Horas', '200', '120000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_estoque`
--

CREATE TABLE IF NOT EXISTS `cadastro_estoque` (
`id` int(10) NOT NULL,
  `esto_prefixo` varchar(15) NOT NULL,
  `esto_capacidade` varchar(15) NOT NULL,
  `esto_combus` varchar(65) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `cadastro_estoque`
--

INSERT INTO `cadastro_estoque` (`id`, `esto_prefixo`, `esto_capacidade`, `esto_combus`) VALUES
(1, 'S500', '15000', 'Ã“leo Diesel/S500'),
(3, 'S10', '15000', 'Ã“leo Diese/S10');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cadastro_proprietario`
--

INSERT INTO `cadastro_proprietario` (`id`, `raz_soc`, `nome_fant`, `cnpj`, `insc_estad`, `insc_munic`, `cep`, `estado`, `cidade`, `bairro`, `endereco`, `comple`, `telefone`, `email`) VALUES
(1, 'Brasil Transportes', 'TGL', '11.111.111/1111-11', '111.111.111.111', '111111111111111', '11111-111', 'a', 'a', 'a', 'a', 'a', '33 33333-3333', 'a@a.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_equipamento`
--

CREATE TABLE IF NOT EXISTS `tipo_equipamento` (
`id` int(10) NOT NULL,
  `tipo_equip` varchar(25) NOT NULL,
  `sigla_equip` varchar(3) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `tipo_equipamento`
--

INSERT INTO `tipo_equipamento` (`id`, `tipo_equip`, `sigla_equip`) VALUES
(20, 'Trator de Pneu', 'TP'),
(19, 'Motoniveladora', 'MN'),
(18, 'Mini Carregadeira', 'MC'),
(17, 'Rolo Liso', 'RL'),
(16, 'Rolo Compactador', 'RC'),
(15, 'Escavadeira Hidraulica', 'EH'),
(14, 'PÃ¡ Carregadeira', 'PC'),
(21, 'Trator de Esteira', 'TE'),
(22, 'CaminhÃ£o Basculante', 'CB'),
(23, 'Retro Escavadeira', 'RE'),
(24, 'Vibro Acabadora de Asfalt', 'VA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_combustivel`
--
ALTER TABLE `cadastro_combustivel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_equipamento`
--
ALTER TABLE `cadastro_equipamento`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_estoque`
--
ALTER TABLE `cadastro_estoque`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_proprietario`
--
ALTER TABLE `cadastro_proprietario`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_equipamento`
--
ALTER TABLE `tipo_equipamento`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_combustivel`
--
ALTER TABLE `cadastro_combustivel`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cadastro_equipamento`
--
ALTER TABLE `cadastro_equipamento`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cadastro_estoque`
--
ALTER TABLE `cadastro_estoque`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cadastro_proprietario`
--
ALTER TABLE `cadastro_proprietario`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_equipamento`
--
ALTER TABLE `tipo_equipamento`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
