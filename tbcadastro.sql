-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/12/2023 às 02:01
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdproduto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcadastro`
--

CREATE TABLE `tbcadastro` (
  `cd_produto` int(11) NOT NULL,
  `nm_produto` varchar(30) NOT NULL,
  `ds_produto` varchar(100) NOT NULL,
  `nm_categoria_produto` varchar(30) NOT NULL,
  `vl_preco_produto` int(11) NOT NULL,
  `qt_produto_estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcadastro`
--

INSERT INTO `tbcadastro` (`cd_produto`, `nm_produto`, `ds_produto`, `nm_categoria_produto`, `vl_preco_produto`, `qt_produto_estoque`) VALUES
(1, 'Garrafa Stanley', 'Garrafa térmica 650', 'ABD', 250, 200),
(2, 'Garrafa Pacco', 'Garrafa térmica 650ml', 'ABD', 587, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  ADD PRIMARY KEY (`cd_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcadastro`
--
ALTER TABLE `tbcadastro`
  MODIFY `cd_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
