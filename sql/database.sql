SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema susi
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `susi` ;

-- -----------------------------------------------------
-- Schema susi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `susi` DEFAULT CHARACTER SET utf8 ;
USE `susi` ;

-- -----------------------------------------------------
-- Table `susi`.`item_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`item_types` ;

CREATE TABLE IF NOT EXISTS `susi`.`item_types` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`items` ;

CREATE TABLE IF NOT EXISTS `susi`.`items` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(150) NULL,
  `item_type_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_items_item_types_idx` (`item_type_id` ASC),
  CONSTRAINT `fk_items_item_types`
    FOREIGN KEY (`item_type_id`)
    REFERENCES `susi`.`item_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`campuses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`campuses` ;

CREATE TABLE IF NOT EXISTS `susi`.`campuses` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(11) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `phone_UNIQUE` (`phone` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`user_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`user_types` ;

CREATE TABLE IF NOT EXISTS `susi`.`user_types` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`users` ;

CREATE TABLE IF NOT EXISTS `susi`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `visibility` TINYINT(1) NOT NULL DEFAULT 1,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(14) NULL,
  `phone` VARCHAR(11) NULL,
  `user_type_id` INT UNSIGNED NOT NULL,
  `campus_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_user_types_idx` (`user_type_id` ASC),
  INDEX `fk_users_campuses_idx` (`campus_id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  UNIQUE INDEX `phone_UNIQUE` (`phone` ASC),
  CONSTRAINT `fk_users_user_types`
    FOREIGN KEY (`user_type_id`)
    REFERENCES `susi`.`user_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_campuses`
    FOREIGN KEY (`campus_id`)
    REFERENCES `susi`.`campuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`campus_items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`campus_items` ;

CREATE TABLE IF NOT EXISTS `susi`.`campus_items` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount` INT NOT NULL,
  `validity` DATE NOT NULL,
  `visibility` TINYINT(1) NOT NULL DEFAULT 1,
  `item_id` INT UNSIGNED NOT NULL,
  `user_id` INT UNSIGNED NULL,
  INDEX `fk_campus_items_users_idx` (`user_id` ASC),
  PRIMARY KEY (`id`),
  INDEX `fk_campus_items_items_idx` (`item_id` ASC),
  CONSTRAINT `fk_campus_items_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `susi`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_campus_items_items`
    FOREIGN KEY (`item_id`)
    REFERENCES `susi`.`items` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`deal_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`deal_types` ;

CREATE TABLE IF NOT EXISTS `susi`.`deal_types` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`logs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`logs` ;

CREATE TABLE IF NOT EXISTS `susi`.`logs` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `moment` TIMESTAMP NOT NULL,
  `amount` INT NOT NULL,
  `comment` VARCHAR(150) NULL,
  `campus_item_id` INT UNSIGNED NOT NULL,
  `deal_type_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_logs_log_types_idx` (`deal_type_id` ASC),
  INDEX `fk_log_campus_items_idx` (`campus_item_id` ASC),
  CONSTRAINT `fk_logs_deal_types`
    FOREIGN KEY (`deal_type_id`)
    REFERENCES `susi`.`deal_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_logs_campus_items`
    FOREIGN KEY (`campus_item_id`)
    REFERENCES `susi`.`campus_items` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`indicator_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`indicator_types` ;

CREATE TABLE IF NOT EXISTS `susi`.`indicator_types` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `susi`.`indicators`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `susi`.`indicators` ;

CREATE TABLE IF NOT EXISTS `susi`.`indicators` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` INT UNSIGNED NOT NULL,
  `indicator_type_id` INT UNSIGNED NOT NULL,
  `campus_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_indicators_indicator_types_idx` (`indicator_type_id` ASC),
  INDEX `fk_indicators_items_idx` (`item_id` ASC),
  INDEX `fk_indicators_campuses_idx` (`campus_id` ASC),
  CONSTRAINT `fk_indicators_indicator_types`
    FOREIGN KEY (`indicator_type_id`)
    REFERENCES `susi`.`indicator_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_indicators_items`
    FOREIGN KEY (`item_id`)
    REFERENCES `susi`.`items` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_indicators_campuses`
    FOREIGN KEY (`campus_id`)
    REFERENCES `susi`.`campuses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
