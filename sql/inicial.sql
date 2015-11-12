-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net

-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

create database susi_bd;
use susi_bd;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `susi_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campus_usuario`
--

CREATE TABLE IF NOT EXISTS `campus_usuario` (
    `id` int(11) NOT NULL,
    `nome` varchar(50) NOT NULL,
    `senha` varchar(64) NOT NULL,
    `contato` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE IF NOT EXISTS `material` (
    `id` int(11) NOT NULL,
    `campus` int(11) NOT NULL,
    `nome` varchar(50) NOT NULL,
    `quantidade` int(11) NOT NULL,
    `validade` date NOT NULL,
    `indicador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacao`
--

CREATE TABLE IF NOT EXISTS `movimentacao` (
    `id` int(11) NOT NULL,
    `tipo` int(11) NOT NULL,
    `campus` int(11) NOT NULL,
    `momento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `antes` int(11) NOT NULL,
    `depois` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_indicador`
--

CREATE TABLE IF NOT EXISTS `tipo_indicador` (
    `id` int(11) NOT NULL,
    `nome` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_indicador`
--

INSERT INTO `tipo_indicador` (`id`, `nome`) VALUES
(1, 'Excesso'),
(2, 'Carência');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_movimentacao`
--

CREATE TABLE IF NOT EXISTS `tipo_movimentacao` (
    `id` int(11) NOT NULL,
    `nome` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_movimentacao`
--

INSERT INTO `tipo_movimentacao` (`id`, `nome`) VALUES
(1, 'Consumo'),
(2, 'Deterioração'),
(3, 'Perda'),
(4, 'Aquisição'),
(5, 'Outra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus_usuario`
--
ALTER TABLE `campus_usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nome` (`nome`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movimentacao`
--
ALTER TABLE `movimentacao`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_indicador`
--
ALTER TABLE `tipo_indicador`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_movimentacao`
--
ALTER TABLE `tipo_movimentacao`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus_usuario`
--
ALTER TABLE `campus_usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movimentacao`
--
ALTER TABLE `movimentacao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_indicador`
--
ALTER TABLE `tipo_indicador`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_movimentacao`
--
ALTER TABLE `tipo_movimentacao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
