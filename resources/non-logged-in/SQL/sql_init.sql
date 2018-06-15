-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema hw
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema hw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `hw` DEFAULT CHARACTER SET utf8 ;
USE `hw` ;

-- -----------------------------------------------------
-- Table `hw`.`tbl_students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hw`.`tbl_students` (
  `studentid` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `school_id` INT NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(50) NULL,
  PRIMARY KEY (`studentid`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hw`.`tbl_homework`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `hw`.`tbl_homework` (
  `homeworkid` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(90) NULL,
  `description` VARCHAR(140) NULL,
  `date` DATETIME NULL,
  PRIMARY KEY (`homeworkid`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
