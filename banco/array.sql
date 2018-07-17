-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2018 às 04:44
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `array`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comentarios`
--

CREATE TABLE `tb_comentarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `comentario` varchar(220) NOT NULL,
  `created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_comentarios`
--

INSERT INTO `tb_comentarios` (`id`, `id_usuario`, `nome`, `comentario`, `created`) VALUES
(22, 0, 'Fabio', 'Verifique sua empresa.', '2018-04-24'),
(21, 0, 'Marcos', 'Responda aos comentÃ¡rios para aumentar a confianÃ§a dos seus clientes.', '2018-04-24'),
(19, 0, 'Silveira', 'Lembre seus clientes de deixar comentÃ¡rios.', '2018-04-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `email`, `senha`, `imagem`, `created`) VALUES
(8, 'Marcelo Souza', 'teste5@teste.com.br', '4badaee57fed5610012a296273158f5f', '3D Black wallpapers 5.jpg', '2018-04-23'),
(10, 'Messias Souza', 'messias@gmail.com', 'a28f05f5f45fe2d8a900736c8935fe44', 'tv.png', '2018-04-24'),
(11, 'Norma', 'norma@uol.com.br', '73882ab1fa529d7273da0db6b49cc4f3', 'ipad-606764_1920.jpg', '2018-04-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comentarios`
--
ALTER TABLE `tb_comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
