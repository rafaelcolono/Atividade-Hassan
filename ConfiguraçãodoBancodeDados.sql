CREATE DATABASE seu_banco_de_dados;

USE seu_banco_de_dados;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefone VARCHAR(15) NOT NULL,
    data_nascimento DATE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    tipo_usuario ENUM('CLIENTE', 'ADM') NOT NULL DEFAULT 'CLIENTE'
);
