CREATE DATABASE meu_banco_de_dados;
USE meu_banco_de_dados;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
