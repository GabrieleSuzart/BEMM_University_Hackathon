-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2017 às 06:37
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bemm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `coleta`
--

CREATE TABLE IF NOT EXISTS `coleta` (
`idColeta` int(11) unsigned NOT NULL,
  `idOrgColeta` varchar(11) NOT NULL,
  `materialColeta` varchar(100) NOT NULL,
  `capacidadeColeta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizacao`
--

CREATE TABLE IF NOT EXISTS `organizacao` (
`id` int(11) unsigned NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `logadouro` text NOT NULL,
  `numero` varchar(5) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `termos` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transporte`
--

CREATE TABLE IF NOT EXISTS `transporte` (
`idTransporte` int(11) unsigned NOT NULL,
  `idOrgTrans` varchar(11) NOT NULL,
  `tipoTrans` varchar(50) NOT NULL,
  `porteTrans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coleta`
--
ALTER TABLE `coleta`
 ADD PRIMARY KEY (`idColeta`);

--
-- Indexes for table `organizacao`
--
ALTER TABLE `organizacao`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporte`
--
ALTER TABLE `transporte`
 ADD PRIMARY KEY (`idTransporte`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coleta`
--
ALTER TABLE `coleta`
MODIFY `idColeta` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organizacao`
--
ALTER TABLE `organizacao`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transporte`
--
ALTER TABLE `transporte`
MODIFY `idTransporte` int(11) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
