CREATE TABLE IF NOT EXISTS `producto_categoria` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` MEDIUMTEXT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE IF NOT EXISTS `producto` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(80) NOT NULL,
  `foto` VARCHAR(200) NOT NULL,
  `plasticoins` INT NOT NULL,
  `descripcion` MEDIUMTEXT NULL,
  `categoria_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_producto_1_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_producto_1`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `producto_categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

