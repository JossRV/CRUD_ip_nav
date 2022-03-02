CREATE SCHEMA `contador_vistas` ;

CREATE TABLE `contador_vistas`.`t_countvistas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ip` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));