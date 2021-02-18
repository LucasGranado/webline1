CREATE DATABASE estudo;

USE estudo;

CREATE TABLE turmas(
	codigo INT PRIMARY KEY AUTO_INCREMENT,
	descricao VARCHAR(50)
);

CREATE TABLE alunos(
	codigo INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	ra VARCHAR(20) NOT NULL,
	email VARCHAR(50),
	fk_turmas INT,
	FOREIGN KEY (fk_turmas) REFERENCES turmas(codigo)
);

INSERT INTO turmas(codigo, descricao) VALUES (1, 'Turma A')(2, 'Turma B'), (3, 'Turma C') ;