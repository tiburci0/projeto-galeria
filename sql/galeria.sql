-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Fev 21, 2022 as 02:30 AM
-- Versão do Servidor: 5.5.10
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `galeria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `imagem`) VALUES
(25, '0f0e3b107314367.Y3JvcCw4MDgsNjMyLDAsMA.png'),
(24, 'd8058lwueaar1ew.jfif'),
(23, 'reproducao-gaules-instagram-scaled.jpg'),
(22, '61e1b7843a306.jpeg');
