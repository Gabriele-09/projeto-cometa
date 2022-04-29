Instalar as dependências: composer install

Rodar o script do banco: 

CREATE TABLE `cometa`.`clientes` (
  `cpf` VARCHAR(15) NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `endereco_id` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`cpf`));


CREATE TABLE `cometa`.`fornecedores` (
  `cnpj` VARCHAR(20) NOT NULL,
  `nome` VARCHAR(80) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `endereco_id` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`cpf`));


CREATE TABLE `cometa`.`endereco` (
  `cep` VARCHAR(20) NOT NULL,
  `rua` VARCHAR(80) NOT NULL,
  `bairro` VARCHAR(80) NOT NULL,
  `cidade` VARCHAR(60) NOT NULL,
  `estado` VARCHAR(60) NOT NULL,
  `ibge` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`cep`));