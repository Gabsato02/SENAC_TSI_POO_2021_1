-- phpMyAdmin SQL Dump
-- version 2.11.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tempo de Geração: Dez 02, 2013 as 03:37 PM
-- Versão do Servidor: 5.5.19
-- Versão do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Banco de Dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `codAdm` int(3) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`codAdm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`codAdm`, `login`, `senha`) VALUES
(1, 'Jojo', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `computadores`
--

CREATE TABLE IF NOT EXISTS `computadores` (
  `codComp` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(15) NOT NULL,
  PRIMARY KEY (`codComp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `computadores`
--

INSERT INTO `computadores` (`codComp`, `nome`) VALUES
(2, 'LAB01 M01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `codForm` int(3) NOT NULL AUTO_INCREMENT,
  `Computador` varchar(10) NOT NULL,
  `Problema` varchar(255) NOT NULL,
  `Data` date NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `DataRes` date DEFAULT NULL,
  PRIMARY KEY (`codForm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `form`
--

INSERT INTO `form` (`codForm`, `Computador`, `Problema`, `Data`, `Status`, `DataRes`) VALUES
(3, 'LAB01 M01', 'Placa de vÃ­deo queimada.', '2014-12-03', 'Pendente', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codUsu` int(3) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `senha` varchar(6) NOT NULL,
  PRIMARY KEY (`codUsu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codUsu`, `login`, `senha`) VALUES
(1, 'Sato', '123');
