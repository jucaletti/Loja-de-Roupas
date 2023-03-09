-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2023 às 00:36
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaderoupas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `roupas`
--

CREATE TABLE `roupas` (
  `id_roupas` int(11) NOT NULL,
  `nome_roupas` varchar(75) NOT NULL,
  `cor_roupas` varchar(25) NOT NULL,
  `tipo_roupas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `roupas`
--

INSERT INTO `roupas` (`id_roupas`, `nome_roupas`, `cor_roupas`, `tipo_roupas`) VALUES
(1, 'Vestido lilás', 'lilas', 'vestido'),
(2, 'Vestido de paetê preto', 'preto', 'vestido'),
(3, 'Vestido rosa', 'rosa', 'vestido');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `roupas`
--
ALTER TABLE `roupas`
  ADD PRIMARY KEY (`id_roupas`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `roupas`
--
ALTER TABLE `roupas`
  MODIFY `id_roupas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
