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
	validade DATE NOT NULL,
	PRIMARY KEY (cod))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table INGREDIENTE_COZINHA
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS INGREDIENTE_COZINHA (
	INGREDIENTE_cod INT NOT NULL,
	COZINHA_cod INT NOT NULL,
	PRIMARY KEY (INGREDIENTE_cod, COZINHA_cod),
	INDEX `fk_INGREDIENTE_COZINHA_INGREDIENTE_COD_idx` (INGREDIENTE_cod ASC),
	CONSTRAINT `fk_INGREDIENTE_COZINHA_INGREDIENTE_COD`
		FOREIGN KEY (INGREDIENTE_cod) REFERENCES INGREDIENTE (cod)
		ON DELETE CASCADE
		ON UPDATE NO ACTION,
	INDEX `fk_INGREDIENTE_COZINHA_COZINHA_COD_idx` (COZINHA_cod ASC),
	CONSTRAINT `fk_INGREDIENTE_COZINHA_COZINHA_COD`
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
	PRIMARY KEY (cod))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table FUNCIONARIO_COZINHA
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS FUNCIONARIO_COZINHA (
	FUNCIONARIO_cod INT NOT NULL,
	COZINHA_cod INT NOT NULL,
	PRIMARY KEY (FUNCIONARIO_cod, COZINHA_cod),
	INDEX `fk_FUNCIONARIO_COZINHA_FUNCIONARIO_COD_idx` (FUNCIONARIO_cod ASC),
	CONSTRAINT `fk_FUNCIONARIO_COZINHA_FUNCIONARIO_COD`
		FOREIGN KEY (FUNCIONARIO_cod) REFERENCES FUNCIONARIO (cod)
		ON DELETE CASCADE
		ON UPDATE NO ACTION,
	INDEX `fk_FUNCIONARIO_COZINHA_COZINHA_COD_idx` (COZINHA_cod ASC),
	CONSTRAINT `fk_FUNCIONARIO_COZINHA_COZINHA_COD`
		FOREIGN KEY (COZINHA_cod) REFERENCES COZINHA (cod)
		ON DELETE CASCADE
		ON UPDATE NO ACTION)
ENGINE = InnoDB;