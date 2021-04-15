-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2020 às 01:00
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fiberintra`
--
CREATE DATABASE IF NOT EXISTS `fiberintra` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `fiberintra`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coletas`
--

CREATE TABLE `coletas` (
  `id` int(11) NOT NULL,
  `n_pedido` int(11) NOT NULL,
  `n_nf` int(11) NOT NULL,
  `data_coleta` date NOT NULL,
  `arquivo1` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comprovantes`
--

CREATE TABLE `comprovantes` (
  `id` int(11) NOT NULL,
  `id_pedido` int(5) DEFAULT NULL,
  `nome` varchar(220) DEFAULT NULL,
  `imagem1` varchar(220) NOT NULL,
  `imagem2` varchar(220) NOT NULL,
  `deposito` enum('Confirmado','Pendente') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_pedido` int(5) DEFAULT NULL,
  `nf` varchar(220) DEFAULT NULL,
  `deposito` enum('Confirmado','Pendente') DEFAULT NULL,
  `valor` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `coletas`
--
ALTER TABLE `coletas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comprovantes`
--
ALTER TABLE `comprovantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `coletas`
--
ALTER TABLE `coletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
