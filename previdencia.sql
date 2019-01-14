-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jan-2019 às 16:00
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `previdencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `cargos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `nome`, `img`, `cargos`) VALUES
(1, 'Maria', '3be2d7dbd560a9ba8f679ee089f404c2..jpg', 'TI'),
(2, 'Pedro', '03ee39dd2c232d4de78dc30934cc28c2..jpg', 'TI'),
(3, 'Lucas', 'd1d3d25b90b4eed0a22aa202a3d4c3ba..jpg', 'Financeiro'),
(4, 'Carol', '26cda4f5d71c87c67aadedb99d9b83f2..jpg', 'Financeiro'),
(5, 'Renato', 'be61fd14a3ddb33bb8d3ef6c16580ca6..jpg', 'RH'),
(6, 'JoÃ£o', '64a857a2e81dfe307f7df7263b519ae1..jpg', 'RH'),
(7, 'Daniela', '3feedc2888aa0c580d36cc41642c704b..jpg', 'CONTÃƒÂBIL'),
(8, 'Ana', '0211d9c88829a2977639567d8a35cbde..jpg', 'CONTÃƒÂBIL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `candidato` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`, `candidato`) VALUES
(8, 'TI', ''),
(9, 'Financeiro', ''),
(10, 'RH', ''),
(11, 'CONTÃBIL', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleicao`
--

CREATE TABLE `eleicao` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_fim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eleicao`
--

INSERT INTO `eleicao` (`id`, `nome`, `dt_inicio`, `dt_fim`) VALUES
(19, 'Sindico', '2019-01-11', '2019-02-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleitor`
--

CREATE TABLE `eleitor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `candidato` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `recibo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eleitor`
--

INSERT INTO `eleitor` (`id`, `nome`, `cpf`, `candidato`, `cargo`, `recibo`) VALUES
(1, 'Renato Lemos', '531.519.404-39', '', '', '4f75e2a0f88df359d568cd178'),
(2, 'joao silva', '154564123321321321321', 'Renato Lemos', 'TI', '7279bfb4abd76f1ea73cb54f2'),
(3, 'Renato Lemos', '12345678901', 'maria', 'RH', '5ef2c02fbd30ebd98b2f5d81c'),
(4, 'Renato Lemos', '531.519.404-39', 'teste', 'Financeiro', 'b6f4e89bcdd0310e0a1674276'),
(5, 'pedro ', '001.554.846-46', '', '', '57c078ccd03185778cfe516d1'),
(6, 'teste', '999.999.999-99', 'jose', 'Financeiro', 'fe4f2b0849e1fa447a5ff19a8'),
(7, '123456', '121.213.213-21', 'jose', 'Financeiro', '397e654496688a2afa2645463'),
(8, 'renato', '111.111.111-11', 'Pedro', 'RH', '288b78e3b74efead6d9b0b462'),
(9, 'Maria', '123.132.132-13', 'Ana', 'CONTÃƒÂBIL', 'e24ceb9f0acbe9d2f8807550d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eleicao`
--
ALTER TABLE `eleicao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eleitor`
--
ALTER TABLE `eleitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidato`
--
ALTER TABLE `candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `eleicao`
--
ALTER TABLE `eleicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `eleitor`
--
ALTER TABLE `eleitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
