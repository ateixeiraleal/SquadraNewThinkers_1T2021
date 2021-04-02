-- -----------------------------------------------------
-- Schema RESTAURANTE
-- -----------------------------------------------------
create schema restaurante;
use restaurante;

-- -----------------------------------------------------
-- Table COZINHA
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS COZINHA (
  cod INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  numeroPratos INT(3) NOT NULL,
  numeroCozinheiros INT(3) NOT NULL,
  tempoPreparo INT(3) NOT NULL,
  horaAbertura INT(2) NOT NULL,
  horaFechamento INT(2) NOT NULL,
  pratoPrincipal VARCHAR(45) NULL,
  PRIMARY KEY (cod))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table INGREDIENTE
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS INGREDIENTE (
	cod INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	validade DATETIME NOT NULL,
	COZINHA_cod INT NOT NULL,
	PRIMARY KEY (cod, COZINHA_cod),
	INDEX `fk_INGREDIENTE_COZINHA_idx` (COZINHA_cod ASC),
	CONSTRAINT `fk_INGREDIENTE_COZINHA`
		FOREIGN KEY (COZINHA_cod) REFERENCES COZINHA (cod)
		ON DELETE CASCADE
		ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table FUNCIONARIO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS FUNCIONARIO (
	cod INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
	atividade VARCHAR(45) NOT NULL,
	COZINHA_cod INT NOT NULL,
	PRIMARY KEY (cod, COZINHA_cod),
	INDEX `fk_FUNCIONARIO_COZINHA_idx` (COZINHA_cod ASC),
	CONSTRAINT `fk_FUNCIONARIO_COZINHA`
		FOREIGN KEY (COZINHA_cod) REFERENCES COZINHA (cod)
		ON DELETE CASCADE
		ON UPDATE NO ACTION)
ENGINE = InnoDB;