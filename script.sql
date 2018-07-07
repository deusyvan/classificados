CREATE SCHEMA `classificados` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `classificados`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `telefone` VARCHAR(30) NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `classificados`.`categorias` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `classificados`.`anuncios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` INT(11) NOT NULL,
  `id_categoria` INT(11) NOT NULL,
  `titulo` VARCHAR(100) NULL DEFAULT NULL,
  `descricao` TEXT NULL,
  `valor` FLOAT NULL DEFAULT NULL,
  `estado` INT(11) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `classificados`.`anuncios_imagens` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_anuncio` INT(11) NOT NULL,
  `url` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`));









