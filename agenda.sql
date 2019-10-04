-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Out-2019 às 02:16
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `apelido` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cep` int(8) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `complemento` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `ativo` int(1) NOT NULL DEFAULT '0',
  `favorito` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `apelido`, `telefone`, `email`, `cep`, `rua`, `complemento`, `bairro`, `cidade`, `ativo`, `favorito`) VALUES
(1, 'Jose Frederico Boaretti Filho', 'Fred', '14988200118', 'frederico.boaretti@gmail.com', 17065032, 'Rua Heitor de Andrada Campos', '3-70', 'São Paulo', 'Bauru', 0, 0),
(2, 'Larissa Pedrozo Magnani', 'Lari', '14988042354', 'laripedrozo@gmail.com', 17053450, 'Rua Bernardino Pereira', '7-49', 'Vila Industrial', 'Bauru', 0, 1),
(3, 'Cleonice de Matos', 'Nice', '1432183032', 'nicematos@gmail.com', 17065032, 'Rua Heitor de Andrada Campos', '3-70', 'Jardim Prudencia', 'Bauru', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
