-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2022 às 00:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `greenlibrary`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbassuntomateria`
--

CREATE TABLE `tbassuntomateria` (
  `idAssunto` int(11) NOT NULL,
  `nomeAssunto` varchar(150) NOT NULL,
  `idMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbassuntomateria`
--

INSERT INTO `tbassuntomateria` (`idAssunto`, `nomeAssunto`, `idMateria`) VALUES
(40, 'Natureza', 47),
(41, 'Reproducao', 47),
(42, 'Soma', 48);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmateria`
--

CREATE TABLE `tbmateria` (
  `idMateria` int(11) NOT NULL,
  `nomeMateria` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbmateria`
--

INSERT INTO `tbmateria` (`idMateria`, `nomeMateria`) VALUES
(47, 'Ciências'),
(48, 'Matematica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpostagem`
--

CREATE TABLE `tbpostagem` (
  `idPostagem` int(11) NOT NULL,
  `idAssunto` int(11) DEFAULT NULL,
  `conteudoPostagem` varchar(150) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `dataPostagem` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpostagem`
--

INSERT INTO `tbpostagem` (`idPostagem`, `idAssunto`, `conteudoPostagem`, `idUser`, `idMateria`, `dataPostagem`) VALUES
(30, 42, 'Somar é dificil para caramba, mas mesmo assim eu vou ensinar aqui pra voces, é so jogar na calculadora', 18, 48, '2022-11-18 13:19:12'),
(31, 41, 'Eita bixo sexo', 18, 47, '2022-11-18 13:19:26'),
(32, 40, 'A natureza é linda, adora gato e cachorro, coisa mais linda e fofa que existe, menos quando eles cheiram nosso saco', 20, 47, '2022-11-18 13:20:41'),
(33, 40, 'Plantas me deixam alegre, muito alegre. weed eh bom dms, fico cheio de marola e larica', 20, 47, '2022-11-18 15:01:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `emailUser` varchar(150) NOT NULL,
  `nomeUser` varchar(150) NOT NULL,
  `senhaUser` varchar(150) NOT NULL,
  `Admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `emailUser`, `nomeUser`, `senhaUser`, `Admin`) VALUES
(24, 'teste@gmail.com', 'teste', '$2y$10$DyB0VE/oN9Onas.Q5xa5.OtTwxm2n8phfySBQEQz/m/H1gh3Ttbjy', 0),
(25, 'samu@gmail.com', 'Samuel', '$2y$10$gZL/avg2Ftapx3QVyLD2Ne/qr2xBdb.5RkG.5P/INr9N08WXLHZR.', 1),
(26, 'emile@gmail.com', 'Emile', '$2y$10$0NNiks7SEIFvSx6tYDTlnOR59J7gDj36AmKxF2mDHy7YfRqY3ff36', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbassuntomateria`
--
ALTER TABLE `tbassuntomateria`
  ADD PRIMARY KEY (`idAssunto`);

--
-- Índices para tabela `tbmateria`
--
ALTER TABLE `tbmateria`
  ADD PRIMARY KEY (`idMateria`);

--
-- Índices para tabela `tbpostagem`
--
ALTER TABLE `tbpostagem`
  ADD PRIMARY KEY (`idPostagem`);

--
-- Índices para tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbassuntomateria`
--
ALTER TABLE `tbassuntomateria`
  MODIFY `idAssunto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `tbmateria`
--
ALTER TABLE `tbmateria`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `tbpostagem`
--
ALTER TABLE `tbpostagem`
  MODIFY `idPostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
