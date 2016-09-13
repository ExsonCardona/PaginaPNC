-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema PNC
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema PNC
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `PNC` DEFAULT CHARACTER SET utf8 ;
USE `PNC` ;

-- -----------------------------------------------------
-- Table `PNC`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `PNC`.`Usuario` (
  `id` INT NOT NULL,
  `Nombre` VARCHAR(100) NULL,
  `Comisaria` VARCHAR(100) NULL,
  `Dependencia` VARCHAR(100) NULL,
  `NIP` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Email` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
