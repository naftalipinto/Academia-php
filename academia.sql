-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(6) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `morada` varchar(45) DEFAULT NULL,
  `data_nasc` varchar(45) DEFAULT NULL,
  `bi` varchar(45) DEFAULT NULL,
  `id_cliente` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `morada`, `data_nasc`, `bi`, `id_cliente`) VALUES
(15, 'Naftali', 'zango', '2022-06-19', '98765gfd', NULL),
(16, 'Ferdinando', 'sdfgh', '2022-06-30', '4567', NULL),
(17, 'Tatiana', 'zango', '2022-06-21', '87654', NULL),
(18, 'Feliciana', 'zango', '2022-06-19', '98765gfd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

CREATE TABLE `aula` (
  `id_aula` int(6) NOT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `duracao` varchar(45) DEFAULT NULL,
  `limite` varchar(45) DEFAULT NULL,
  `id_professor` int(6) DEFAULT NULL,
  `id_sala` int(6) DEFAULT NULL,
  `id_modalidade` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cancha`
--

CREATE TABLE `cancha` (
  `id_canha` int(6) NOT NULL,
  `nsala` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(6) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `morada` varchar(45) DEFAULT NULL,
  `data_nasc` varchar(45) DEFAULT NULL,
  `bi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `morada`, `data_nasc`, `bi`) VALUES
(10, 'Feliciana', 'zango', '2022-06-19', '98765gfd'),
(11, 'Nataniel', 'zango', '2022-06-20', '1234'),
(12, 'Tatiana', 'zango', '2022-06-21', '87654'),
(13, 'Ferdinando', 'sdfgh', '2022-06-30', '4567'),
(14, 'jose', 'xdfghj', '2022-06-13', '56789'),
(15, 'ana', 'zango', NULL, '34567'),
(16, 'muenze', 'kilas', '2022-06-17', '23456'),
(17, 'Dorivaldo Valentim', 'Luanda', '2002-12-03', '08620056LA048');

-- --------------------------------------------------------

--
-- Table structure for table `cliente_loca`
--

CREATE TABLE `cliente_loca` (
  `id_clienteloca` int(6) NOT NULL,
  `dt` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `id_cliente` int(6) DEFAULT NULL,
  `id_cancha` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contrato`
--

CREATE TABLE `contrato` (
  `id_contrato` int(6) NOT NULL,
  `forma` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `dt_in` varchar(45) DEFAULT NULL,
  `dt_out` varchar(45) DEFAULT NULL,
  `id_aluno` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `forma`, `valor`, `dt_in`, `dt_out`, `id_aluno`) VALUES
(11, 'Cash', '500', '2022-06-16', '2022-06-09', 15),
(12, 'Cash', '345', '2022-06-17', '2022-06-20', 16),
(13, 'Cash', '4567', '2022-06-16', '2022-06-21', 17),
(14, 'Cash', '2000', '2022-06-28', '2022-07-28', 18);

-- --------------------------------------------------------

--
-- Table structure for table `frequenta`
--

CREATE TABLE `frequenta` (
  `id_frequenta` int(6) NOT NULL,
  `id_aula` int(6) DEFAULT NULL,
  `id_aluno` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(6) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `data_nasc` varchar(45) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `bi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome`, `data_nasc`, `acesso`, `senha`, `bi`) VALUES
(2, 'Naftali Pinto', '2004-02-24', 'Administrador', 'Nike2004..', '98765'),
(3, 'segundo', '2022-06-19', 'Administrador', 'Nike2004..', '3456'),
(4, 'Naf', '2022-06-26', '1', '....', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `modalidade`
--

CREATE TABLE `modalidade` (
  `id_modalidade` int(6) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modalidade`
--

INSERT INTO `modalidade` (`id_modalidade`, `nome`) VALUES
(1, 'Football'),
(2, 'Basket'),
(3, 'voley');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(6) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `morada` varchar(45) DEFAULT NULL,
  `data_nasc` varchar(45) DEFAULT NULL,
  `bi` varchar(45) DEFAULT NULL,
  `salario` float DEFAULT NULL,
  `carteira` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id_professor`, `nome`, `morada`, `data_nasc`, `bi`, `salario`, `carteira`) VALUES
(1, 'lengo jsdfgh', 'swertyu', '2022-06-20', '1', 34567, 34567),
(2, 'ferdinando', 'zango', '2022-06-20', '234567', 23456, 23456),
(3, 'iuktf', '', '2022-06-21', 'uyjtfuyjdtf9ogyilut98o6u7yrf6iuyrfh', 0, 0),
(6, 'lengo junior', 'swertyu', '2022-06-20', '1', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `professor_loca`
--

CREATE TABLE `professor_loca` (
  `id_professorloca` int(6) NOT NULL,
  `dt` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `id_professor` int(6) DEFAULT NULL,
  `id_cancha` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proforienta`
--

CREATE TABLE `proforienta` (
  `id_proforienta` int(6) NOT NULL,
  `id_professor` int(6) DEFAULT NULL,
  `id_modalidade` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proforienta`
--

INSERT INTO `proforienta` (`id_proforienta`, `id_professor`, `id_modalidade`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `qualificacao`
--

CREATE TABLE `qualificacao` (
  `id_qualificacao` int(6) NOT NULL,
  `nome` varchar(6) DEFAULT NULL,
  `id_professor` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

CREATE TABLE `sala` (
  `id_sala` int(6) NOT NULL,
  `nsala` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`id_sala`, `nsala`) VALUES
(9, '234'),
(10, '45'),
(4, '55'),
(5, '6'),
(6, '7'),
(7, '8'),
(11, '876');

-- --------------------------------------------------------

--
-- Table structure for table `telefone_cli`
--

CREATE TABLE `telefone_cli` (
  `id_telefonecli` int(6) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `id_cliente` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefone_cli`
--

INSERT INTO `telefone_cli` (`id_telefonecli`, `numero`, `id_cliente`) VALUES
(2, 'asdfg', 10),
(3, '987654', 11),
(4, '87654', 12),
(5, '7654e', 13),
(6, '2345', 14),
(7, '34567', 16),
(8, '933802891', 17);

-- --------------------------------------------------------

--
-- Table structure for table `telefone_prof`
--

CREATE TABLE `telefone_prof` (
  `id_telefoneprof` int(6) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `id_professor` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefone_prof`
--

INSERT INTO `telefone_prof` (`id_telefoneprof`, `numero`, `id_professor`) VALUES
(1, '456789', 1),
(2, '87654', 2),
(3, '', 3),
(4, '456789', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`),
  ADD KEY `id_professor` (`id_professor`),
  ADD KEY `id_modalidade` (`id_modalidade`),
  ADD KEY `id_sala` (`id_sala`);

--
-- Indexes for table `cancha`
--
ALTER TABLE `cancha`
  ADD PRIMARY KEY (`id_canha`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `cliente_loca`
--
ALTER TABLE `cliente_loca`
  ADD PRIMARY KEY (`id_clienteloca`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `id_aluno` (`id_aluno`);

--
-- Indexes for table `frequenta`
--
ALTER TABLE `frequenta`
  ADD PRIMARY KEY (`id_frequenta`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_aula` (`id_aula`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Indexes for table `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`id_modalidade`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`),
  ADD UNIQUE KEY `carteira` (`carteira`);

--
-- Indexes for table `professor_loca`
--
ALTER TABLE `professor_loca`
  ADD PRIMARY KEY (`id_professorloca`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `proforienta`
--
ALTER TABLE `proforienta`
  ADD PRIMARY KEY (`id_proforienta`),
  ADD KEY `id_professor` (`id_professor`),
  ADD KEY `id_modalidade` (`id_modalidade`);

--
-- Indexes for table `qualificacao`
--
ALTER TABLE `qualificacao`
  ADD PRIMARY KEY (`id_qualificacao`),
  ADD KEY `id_professor` (`id_professor`);

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`),
  ADD UNIQUE KEY `nsala` (`nsala`);

--
-- Indexes for table `telefone_cli`
--
ALTER TABLE `telefone_cli`
  ADD PRIMARY KEY (`id_telefonecli`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `telefone_prof`
--
ALTER TABLE `telefone_prof`
  ADD PRIMARY KEY (`id_telefoneprof`),
  ADD KEY `id_professor` (`id_professor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `id_aula` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cancha`
--
ALTER TABLE `cancha`
  MODIFY `id_canha` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cliente_loca`
--
ALTER TABLE `cliente_loca`
  MODIFY `id_clienteloca` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id_contrato` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `frequenta`
--
ALTER TABLE `frequenta`
  MODIFY `id_frequenta` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `id_modalidade` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `professor_loca`
--
ALTER TABLE `professor_loca`
  MODIFY `id_professorloca` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proforienta`
--
ALTER TABLE `proforienta`
  MODIFY `id_proforienta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qualificacao`
--
ALTER TABLE `qualificacao`
  MODIFY `id_qualificacao` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sala`
--
ALTER TABLE `sala`
  MODIFY `id_sala` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `telefone_cli`
--
ALTER TABLE `telefone_cli`
  MODIFY `id_telefonecli` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `telefone_prof`
--
ALTER TABLE `telefone_prof`
  MODIFY `id_telefoneprof` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`),
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`id_modalidade`) REFERENCES `modalidade` (`id_modalidade`),
  ADD CONSTRAINT `aula_ibfk_3` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`);

--
-- Constraints for table `cliente_loca`
--
ALTER TABLE `cliente_loca`
  ADD CONSTRAINT `cliente_loca_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Constraints for table `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `frequenta`
--
ALTER TABLE `frequenta`
  ADD CONSTRAINT `frequenta_ibfk_1` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`),
  ADD CONSTRAINT `frequenta_ibfk_2` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`),
  ADD CONSTRAINT `frequenta_ibfk_3` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frequenta_ibfk_4` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professor_loca`
--
ALTER TABLE `professor_loca`
  ADD CONSTRAINT `professor_loca_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`);

--
-- Constraints for table `proforienta`
--
ALTER TABLE `proforienta`
  ADD CONSTRAINT `proforienta_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`),
  ADD CONSTRAINT `proforienta_ibfk_2` FOREIGN KEY (`id_modalidade`) REFERENCES `modalidade` (`id_modalidade`),
  ADD CONSTRAINT `proforienta_ibfk_3` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proforienta_ibfk_4` FOREIGN KEY (`id_modalidade`) REFERENCES `modalidade` (`id_modalidade`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qualificacao`
--
ALTER TABLE `qualificacao`
  ADD CONSTRAINT `qualificacao_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`),
  ADD CONSTRAINT `qualificacao_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telefone_cli`
--
ALTER TABLE `telefone_cli`
  ADD CONSTRAINT `telefone_cli_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `telefone_cli_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telefone_prof`
--
ALTER TABLE `telefone_prof`
  ADD CONSTRAINT `telefone_prof_ibfk_1` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`),
  ADD CONSTRAINT `telefone_prof_ibfk_2` FOREIGN KEY (`id_professor`) REFERENCES `professor` (`id_professor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
