-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2020 às 18:18
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `msg` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `msg`, `data`) VALUES
(2, 'Fabiana', 'Olá Full Stack Eletro!', '2020-11-15 14:24:52'),
(3, 'Daniel', 'Eu gostaria de comprar um Playstation 5!', '2020-11-15 14:55:50'),
(5, 'Rafa', 'Já chegou o produto que eu pedi?', '2020-11-15 15:10:17'),
(9, 'Edson', 'Olá, quero um notebook', '2020-11-15 15:12:32'),
(11, 'Ícaro', 'Olá galera!', '2020-11-15 15:13:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedidos` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(150) NOT NULL,
  `telefone` int(15) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `quantidade` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedidos`, `nome`, `endereco`, `telefone`, `descricao`, `precofinal`, `quantidade`) VALUES
(2, 'Fabiana', 'Rua Jorge Amado', 98988989, 'Geladeira', '2000.00', 1),
(5, 'Ricardo', 'Rua A', 34566789, 'Fogão', '1000.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `categoria`, `descricao`, `preco`, `precofinal`, `imagem`) VALUES
(1, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540L', '6389.00', '5019.00', 'imagens/geladeiraprata.jpeg'),
(2, 'geladeira', 'Geladeira Frost Free Brastemp Branca 375 Litros', '2068.00', '1910.00', 'imagens/geladeira.jpeg'),
(3, 'geladeira', 'Geladeira Frost Free Consul Prata 340 Litros', '2199.00', '2069.00', 'imagens/geladeiraprata2.png'),
(4, 'fogao', 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', '1299.00', '1129.00', 'imagens/fogaoPequeno.jpeg'),
(5, 'fogao', 'Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático', '600.00', '519.00', 'imagens/fogao.jpeg'),
(6, 'microondas', 'Micro-ondas Consul 32 Litros inox 220V', '580.00', '409.00', 'imagens/micro.jpeg'),
(7, 'microondas', 'Microondas 25L Espelhado Philco 220V', '508.00', '464.00', 'imagens/micro2.jpeg'),
(8, 'microondas', 'Forno de Microondas Eletrolux 20L Branco', '1299.00', '1129.00', 'imagens/microondas.jpeg'),
(9, 'lavalouca', 'Lava-louça Eletrolux Inox com 10 serviços, 06 Programas de Lavagem e Painel Blue Touch', '3599.00', '2799.00', 'imagens/lavalouca1.jpeg'),
(10, 'lavalouca', 'Lava Louça Compacta, 8 Serviços Branca 127V Brastemp', '1970.00', '1730.00', 'imagens/lavalouca2.jpeg'),
(11, 'lavaroupa', 'Lavadoura de Roupas Philco Inverter', '2399.00', '2179.00', 'imagens/secadora.jpeg'),
(12, 'lavaroupa', 'Lavadoura de Roupas Brastemp 15k branca', '2399.00', '2179.00', 'imagens/lavadora.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedidos`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
