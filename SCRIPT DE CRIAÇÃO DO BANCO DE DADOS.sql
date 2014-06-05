--CRIANDO O BANCO DE DADOS
CREATE DATABASE clinica
  WITH OWNER = clinica
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Portuguese_Brazil.1252'
       LC_CTYPE = 'Portuguese_Brazil.1252'
       CONNECTION LIMIT = -1;



--CRIANDO A TABELA "paciente"

CREATE TABLE pacientes (
	codpaciente SERIAL PRIMARY KEY,
	nome varchar (255),
	endereco varchar (255),
	telefone varchar (100),
	sexo varchar (25),
	cpf integer,
	diagnostico text
);
 --CRIANDO PACIENTES
START TRANSACTION;

INSERT INTO pacientes (nome, endereco, telefone, sexo, cpf, diagnostico) VALUES
('ISIS VALVERDE', 'AV: DAS FLORES', '96-9154875', 'MASCULINO', 15484454, 'Fortes dores abdominais'),
('RODRIGO FARO', 'AV: DAS FLORES', '96-9154875', 'MASCULINO', 15484454, 'Fortes dores abdominais'),
('DIOGO MARADONA', 'AV: DAS FLORES', '96-9154875', 'MASCULINO', 15484454, 'Fortes dores abdominais'),
('FELIPE ALFAIA', 'AV: DAS FLORES', '96-9154875', 'MASCULINO', 15484454, 'Fortes dores abdominais'),
('ROBERTO CARLOS', 'AV: DAS FLORES', '96-9154875', 'MASCULINO', 15484454, 'Fortes dores abdominais');

COMMIT;

--ALTERA AS OUTRAS INFORMAÇÕES, EU MUDEI APENAS OS NOMES