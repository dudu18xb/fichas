-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 09/08/2017 às 08:16
-- Versão do servidor: 5.7.19-0ubuntu0.17.04.1
-- Versão do PHP: 7.0.22-2+ubuntu17.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ficha`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `admin`
--

INSERT INTO `admin` (`id`, `login`, `nome`, `senha`) VALUES
(1, 'eduardo', 'Eduardo Rocha', '6d6354ece40846bf7fca65dfabd5d9d4'),
(2, 'angela', 'Angela Bocchi Biaca', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'marilene', 'Marilene Mamede dos Santos', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'daniel', 'Daniel Argenton Manfredini', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'paty', 'Patricia dos Passos Campanholi', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'julia', 'Julia Maria Conceição Leite', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ficha_medica`
--

INSERT INTO `ficha_medica` (`id`, `nome`, `numero`, `data`) VALUES
(2, 'eduardo', '1221', '1998-02-06'),
(3, 'Bruna mendonça (teste)', '0101010101011001', '2000-12-12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_odontologica`
--

CREATE TABLE `ficha_odontologica` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `numero` varchar(1000) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ficha_odontologica`
--

INSERT INTO `ficha_odontologica` (`id`, `nome`, `numero`, `data`) VALUES
(3, 'Eduardo Silva Rocha', '1221', '1998-02-06');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ficha_odontologica`
--
ALTER TABLE `ficha_odontologica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `ficha_medica`
--
ALTER TABLE `ficha_medica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `ficha_odontologica`
--
ALTER TABLE `ficha_odontologica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
