CREATE DATABASE IF NOT EXISTS biblioteca_db;
USE biblioteca_db;

CREATE TABLE IF NOT EXISTS livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    ano_publicacao INT(4),
    genero VARCHAR(50)
);
INSERT INTO livros (titulo, autor, ano_publicacao, genero) VALUES 
('Noite na Taverna', 'Álvares de Azevedo', 1855, 'Conto Gótico'),
('Hamlet', 'William Shakespeare', 1603, 'Tragédia');