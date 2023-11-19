CREATE DATABASE IF NOT EXISTS `agendamentos`;

USE `agendamentos`;

CREATE TABLE IF NOT EXISTS `agenda` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `sobrenome` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `dataNascimento` DATE NOT NULL,
    `diaAgendamento` DATE NOT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `especialidade` VARCHAR(255) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `pesquisa` TEXT NOT NULL,
    `dizer` TEXT NOT NULL,
    `data_registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
