-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/03/2024 às 15:44
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ubs_atena`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `general_sheet`
--

CREATE TABLE `general_sheet` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL COMMENT 'PK(pacient.id)',
  `user_id` int(11) NOT NULL COMMENT 'FK(user.id)',
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `doctor_responsible` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL COMMENT 'FK(user.id)',
  `action` enum('create','delete','update') NOT NULL,
  `table_id` varchar(32) NOT NULL,
  `object_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `medical_history`
--

CREATE TABLE `medical_history` (
  `id` int(11) NOT NULL,
  `general_sheet_id` int(11) NOT NULL COMMENT 'FK(general_sheet.id)',
  `complaint` varchar(256) NOT NULL,
  `pulser` int(11) DEFAULT NULL,
  `temperature` decimal(5,2) DEFAULT NULL,
  `saturation` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `raiox` tinyint(1) NOT NULL,
  `ultrassom` tinyint(1) NOT NULL,
  `liquor` tinyint(1) NOT NULL,
  `blood` tinyint(1) NOT NULL,
  `egg` tinyint(1) NOT NULL,
  `urine` tinyint(1) NOT NULL,
  `tc` tinyint(1) NOT NULL,
  `clinical_data` varchar(256) NOT NULL,
  `diagnosis` varchar(128) NOT NULL,
  `unit_observation` varchar(128) DEFAULT NULL,
  `transfer_to_unit` varchar(128) DEFAULT NULL,
  `susp_violence_mistr` tinyint(1) NOT NULL,
  `risk_class` enum('Nao urgente','Pouco urgente','Urgente','Muito urgente','Emergencia') NOT NULL,
  `exit_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK(user.id)',
  `name` varchar(32) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(32) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `sus_card_number` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `responsible` varchar(32) DEFAULT NULL,
  `parent` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `user_type` enum('administrador','medico','funcionario') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `general_sheet`
--
ALTER TABLE `general_sheet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_sheet_id` (`general_sheet_id`);

--
-- Índices de tabela `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sus_card_number.patient` (`sus_card_number`),
  ADD UNIQUE KEY `email.patient` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username.user` (`username`),
  ADD UNIQUE KEY `cpf.user` (`cpf`),
  ADD UNIQUE KEY `email.user` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `general_sheet`
--
ALTER TABLE `general_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `general_sheet`
--
ALTER TABLE `general_sheet`
  ADD CONSTRAINT `general_sheet_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `general_sheet_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Restrições para tabelas `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Restrições para tabelas `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `medical_history_ibfk_1` FOREIGN KEY (`general_sheet_id`) REFERENCES `general_sheet` (`id`);

--
-- Restrições para tabelas `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
