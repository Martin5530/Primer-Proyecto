-- MySQL Script generated by MySQL Workbench
-- Thu Aug 20 15:24:19 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema CyADP
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `CyADP` ;

-- -----------------------------------------------------
-- Schema CyADP
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CyADP` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `CyADP` ;

-- -----------------------------------------------------
-- Table `CyADP`.`Empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Empresas` (
  `id_Emp` INT NOT NULL AUTO_INCREMENT,
  `nombre_Emp` VARCHAR(45) NULL,
  `descripcion_Emp` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Emp`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Puesto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Puesto` (
  `id_Pto` INT NOT NULL AUTO_INCREMENT,
  `codigo_Pto` INT NULL,
  `nombre_Pto` VARCHAR(100) NULL,
  `fecha_Vali_Pto` DATETIME NULL,
  `estatus_Pto` INT NULL,
  `mision_Pto` VARCHAR(400) NULL,
  `contribucion_Pto` VARCHAR(400) NULL,
  `nivel_Org_Pto` INT NULL,
  `nivel_inmediato_Pto` VARCHAR(200) NULL,
  `puesto_tip_Pto` SMALLINT(1) NULL,
  `comentarios_Pto` VARCHAR(500) NULL,
  `experiencia_Años_Pto` INT NULL,
  `info_Adi_Pto` VARCHAR(500) NULL,
  `elaboro_Desc_Pto` INT NULL,
  `autorizo_Desc_Pto` VARCHAR(45) NULL,
  `id_Emp1` INT NOT NULL,
  PRIMARY KEY (`id_Pto`),
  INDEX `fk_Puesto_Empresas1_idx` (`id_Emp1` ASC) ,
  CONSTRAINT `fk_Puesto_Empresas1`
    FOREIGN KEY (`id_Emp1`)
    REFERENCES `CyADP`.`Empresas` (`id_Emp`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Funciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Funciones` (
  `id_Func` INT NOT NULL AUTO_INCREMENT,
  `nombre_Func` VARCHAR(300) NULL,
  `finalidad_Func` VARCHAR(300) NULL,
  `porcentaje_Func` FLOAT NULL,
  `num_Horas_Func` INT NULL,
  `id_Pto1` INT NOT NULL,
  PRIMARY KEY (`id_Func`),
  INDEX `fk_Funciones_Puesto_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Funciones_Puesto`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Indicadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Indicadores` (
  `id_ind` INT NOT NULL AUTO_INCREMENT,
  `concepto_ind` VARCHAR(300) NULL,
  `cantidad_ind` VARCHAR(100) NULL,
  `funcion_asoc_ind` VARCHAR(20) NULL,
  `id_Pto1` INT NOT NULL,
  PRIMARY KEY (`id_ind`),
  INDEX `fk_Indicadores_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Indicadores_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Dimensiones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Dimensiones` (
  `id_dim` INT NOT NULL AUTO_INCREMENT,
  `concepto_dim` VARCHAR(200) NULL,
  `cantidad_dim` VARCHAR(100) NULL,
  `id_Pto1` INT NOT NULL,
  PRIMARY KEY (`id_dim`),
  INDEX `fk_Dimenciones_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Dimenciones_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Interacciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Interacciones` (
  `id_Int` INT NOT NULL AUTO_INCREMENT,
  `puesto_Area_Int` VARCHAR(100) NULL,
  `rol_Cliente_Int` INT NULL,
  `rol_Proveedor_Int` INT NULL,
  `id_Pto1` INT NOT NULL,
  PRIMARY KEY (`id_Int`),
  INDEX `fk_Interacciones_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Interacciones_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Equipo` (
  `id_Equipo` INT NOT NULL AUTO_INCREMENT,
  `nombre_Equipo` VARCHAR(100) NULL,
  PRIMARY KEY (`id_Equipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Escolaridad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Escolaridad` (
  `id_Esc` INT NOT NULL AUTO_INCREMENT,
  `licenciatura_Esc` VARCHAR(100) NULL,
  `especialidad_Esc` VARCHAR(100) NULL,
  `doctorado_Esc` VARCHAR(100) NULL,
  `id_Pto1` INT NOT NULL,
  PRIMARY KEY (`id_Esc`),
  INDEX `fk_Escolaridad_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Escolaridad_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Experiencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Experiencia` (
  `id_Exp` INT NOT NULL AUTO_INCREMENT,
  `tipo_Exp` VARCHAR(50) NULL,
  `area_Puesto_Exp` VARCHAR(200) NULL,
  `tiempo_Esc` VARCHAR(50) NULL,
  `id_Pto1` INT NOT NULL,
  PRIMARY KEY (`id_Exp`),
  INDEX `fk_Experiencia_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Experiencia_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Competencias_Esp`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Competencias_Esp` (
  `id_Comp_Esp` INT NOT NULL AUTO_INCREMENT,
  `area_Comp_Esp` VARCHAR(200) NULL,
  `Conocimiento_Comp_Esp` VARCHAR(200) NULL,
  `nivel_Dom_Comp_Esp` VARCHAR(200) NULL,
  `id_Pto1` INT NOT NULL,
  PRIMARY KEY (`id_Comp_Esp`),
  INDEX `fk_Competencias_Esp_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Competencias_Esp_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Competencias_Gen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Competencias_Gen` (
  `id_Comp_Gen` INT NOT NULL AUTO_INCREMENT,
  `nombre_Comp_Gen` VARCHAR(45) NULL,
  `definicion_Comp_Gen` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Comp_Gen`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Usuarios` (
  `id_Usu` INT NOT NULL AUTO_INCREMENT,
  `num_Exp_Usu` INT NULL,
  `nombre_Usu` VARCHAR(100) NULL,
  `apellido_P_Usu` VARCHAR(100) NULL,
  `apellido_M_Usu` VARCHAR(100) NULL,
  `area_Usu` VARCHAR(200) NULL,
  `puesto_Usu` VARCHAR(200) NULL,
  `tipo_Usu` VARCHAR(50) NULL,
  `telefono_Usu` BIGINT(12) NULL,
  `contrasena_Usu` VARCHAR(50) NULL,
  PRIMARY KEY (`id_Usu`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Equipo_Puesto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Equipo_Puesto` (
  `Equipo_id_Equipo` INT NOT NULL,
  `Puesto_id_Pto` INT NOT NULL,
  `requerido` INT NULL,
  PRIMARY KEY (`Equipo_id_Equipo`, `Puesto_id_Pto`),
  INDEX `fk_Equipo_has_Puesto_Puesto1_idx` (`Puesto_id_Pto` ASC) ,
  INDEX `fk_Equipo_has_Puesto_Equipo1_idx` (`Equipo_id_Equipo` ASC) ,
  CONSTRAINT `fk_Equipo_has_Puesto_Equipo1`
    FOREIGN KEY (`Equipo_id_Equipo`)
    REFERENCES `CyADP`.`Equipo` (`id_Equipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipo_has_Puesto_Puesto1`
    FOREIGN KEY (`Puesto_id_Pto`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Puesto_Competencias_Gen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Puesto_Competencias_Gen` (
  `id_Pto1` INT NOT NULL,
  `id_Comp_Gen1` INT NOT NULL,
  `nivel_Dom_Comp` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Pto1`, `id_Comp_Gen1`),
  INDEX `fk_Puesto_has_Competencias_Gen_Competencias_Gen1_idx` (`id_Comp_Gen1` ASC) ,
  INDEX `fk_Puesto_has_Competencias_Gen_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Puesto_has_Competencias_Gen_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Puesto_has_Competencias_Gen_Competencias_Gen1`
    FOREIGN KEY (`id_Comp_Gen1`)
    REFERENCES `CyADP`.`Competencias_Gen` (`id_Comp_Gen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Areas_Puestos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Areas_Puestos` (
  `id_Area` INT NOT NULL AUTO_INCREMENT,
  `nombre_Area` VARCHAR(45) NULL,
  `nivel_Area` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Area`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Puesto_Areas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Puesto_Areas` (
  `id_Pto1` INT NOT NULL,
  `id_Area1` INT NOT NULL,
  PRIMARY KEY (`id_Pto1`, `id_Area1`),
  INDEX `fk_Puesto_has_Areas_Puestos_Areas_Puestos1_idx` (`id_Area1` ASC) ,
  INDEX `fk_Puesto_has_Areas_Puestos_Puesto1_idx` (`id_Pto1` ASC) ,
  CONSTRAINT `fk_Puesto_has_Areas_Puestos_Puesto1`
    FOREIGN KEY (`id_Pto1`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Puesto_has_Areas_Puestos_Areas_Puestos1`
    FOREIGN KEY (`id_Area1`)
    REFERENCES `CyADP`.`Areas_Puestos` (`id_Area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Puestos_A_Cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Puestos_A_Cargo` (
  `id_Pto_Cargo` INT NOT NULL,
  `nombre_Pto_Cargo` VARCHAR(150) NULL,
  `directo_Pto_Cargo` INT NULL,
  `indirecto_Pto_Cargo` INT NULL,
  `id_Pto` INT NOT NULL,
  PRIMARY KEY (`id_Pto_Cargo`),
  INDEX `fk_Puestos_A_Cargo_Puesto1_idx` (`id_Pto` ASC) ,
  CONSTRAINT `fk_Puestos_A_Cargo_Puesto1`
    FOREIGN KEY (`id_Pto`)
    REFERENCES `CyADP`.`Puesto` (`id_Pto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CyADP`.`Glosario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CyADP`.`Glosario` (
  `id_Palabra` INT NOT NULL,
  `palabra` VARCHAR(50) NULL,
  `significado` VARCHAR(300) NULL,
  PRIMARY KEY (`id_Palabra`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
