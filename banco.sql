-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 17/06/2020 às 10:33
-- Versão do servidor: 5.7.30-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Agenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Analista`
--

CREATE TABLE `Analista` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `nomeusuario` varchar(40) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `status` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Analista`
--

INSERT INTO `Analista` (`id`, `nome`, `nomeusuario`, `senha`, `status`, `area`) VALUES
(1, 'Jose Sousa', 'jose.sousa', '12345678', 'disponivel', 'tributaria'),
(2, 'Maria Costa', 'maria.costa', '12345678', 'ocupado', 'contabilidade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Atendimento`
--

CREATE TABLE `Atendimento` (
  `id` int(11) NOT NULL,
  `nomecliente` varchar(40) NOT NULL,
  `doccliente` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Cliente`
--

CREATE TABLE `Cliente` (
  `id` int(11) NOT NULL,
  `doc` varchar(18) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `endereço` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Gerente`
--

CREATE TABLE `Gerente` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `nomeusuario` varchar(40) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Gerente`
--

INSERT INTO `Gerente` (`id`, `nome`, `nomeusuario`, `senha`) VALUES
(1, 'Pedro Silva', 'pedro.silva', '12345678');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Recepcionista`
--

CREATE TABLE `Recepcionista` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `nomeusuario` varchar(40) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `Recepcionista`
--

INSERT INTO `Recepcionista` (`id`, `nome`, `nomeusuario`, `senha`) VALUES
(1, 'Ana Andrade', 'ana.andrade', '12345678');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Analista`
--
ALTER TABLE `Analista`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nomeusuario` (`nomeusuario`);

--
-- Índices de tabela `Atendimento`
--
ALTER TABLE `Atendimento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `doc` (`doc`);

--
-- Índices de tabela `Gerente`
--
ALTER TABLE `Gerente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nomeusuario` (`nomeusuario`);

--
-- Índices de tabela `Recepcionista`
--
ALTER TABLE `Recepcionista`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `nomeusuario` (`nomeusuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Analista`
--
ALTER TABLE `Analista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de tabela `Atendimento`
--
ALTER TABLE `Atendimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de tabela `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de tabela `Gerente`
--
ALTER TABLE `Gerente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `Recepcionista`
--
ALTER TABLE `Recepcionista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;