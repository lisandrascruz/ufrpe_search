-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Maio-2015 às 21:14
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ufrpe_search`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenacoes`
--

CREATE TABLE IF NOT EXISTS `coordenacoes` (
  `id` int(11) NOT NULL,
  `nome_coordenacao` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `coordenacoes`
--

INSERT INTO `coordenacoes` (`id`, `nome_coordenacao`, `email`, `telefone`) VALUES
(1, 'Agronomia', 'coordenacao@ag.ufrpe.br', NULL),
(2, 'Bacharelado em Administração', 'coordenacao@ba.ufrpe.br', NULL),
(3, 'Bacharelado em Ciências Biológicas', 'coordenacao@bcb.ufrpe.br', NULL),
(4, 'Bacharelado em Ciência da Computação', 'coordenacao@bcc.ufrpe.br', NULL),
(5, 'Bacharelado em Ciências Sociais', 'coordenacao@bcs.ufrpe.br', NULL),
(6, 'Bacharelado em Ciências Econômicas', 'coordenacao@bce.ufrpe.br', NULL),
(7, 'Bacharelado em Economia Doméstica', 'coordenacao@bed.ufrpe.br', NULL),
(8, 'Bacharelado em Sistemas de Informação', 'coordenacao@bsi.ufrpe.br', NULL),
(9, 'Engenharia Agrícola e Ambiental', 'coordenacao@eagri.ufrpe.br', NULL),
(10, 'Engenharia Florestal', 'coordenacao@efl.ufrpe.br', NULL),
(11, 'Engenharia de Pesca', 'coordenacao@ep.ufrpe.br', NULL),
(12, 'Bacharelado em Gastronomia', 'coordenacao@gsa.ufrpe.br', NULL),
(13, 'Licenciatura em Educação Física', 'coordenacao@lef.ufrpe.br', NULL),
(14, 'Licenciatura Plena em Ciências Biológicas', 'coordenacao@lcb.ufrpe.br', NULL),
(15, 'Licenciatura Plena em Ciências Agrícolas', 'coordenacao@lca.ufrpe.br', NULL),
(16, 'Licenciatura Plena em Computação', 'coordencao@lc.ufrpe.br', NULL),
(17, 'Licenciatura Plena em Física', 'coordenacao@lf.ufrpe.br', NULL),
(18, 'Licenciatura Plena', 'coordenacao@lh.ufrpe.br', NULL),
(19, 'Licenciatura em Letras', 'coordenacao@ll.ufrpe.br', NULL),
(20, 'Licenciatura Plena em Matemática', 'coordenacao@lm.ufrpe.br', NULL),
(21, 'Licenciatura Plena em Pedagogia', 'coordenacao@lns.ufrpe.br', NULL),
(22, 'Licenciatura Plena em Química', 'coordenacao@lq.ufrpe.br', NULL),
(23, 'Medicina Veterinária', 'coordenacao@mv.ufrpe.br', NULL),
(24, 'Zootecnia', 'coordenacao@cz.ufrpe.br', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordenacoes`
--
ALTER TABLE `coordenacoes`
  ADD UNIQUE KEY `id` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
