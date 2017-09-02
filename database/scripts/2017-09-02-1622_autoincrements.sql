ALTER TABLE `producto` 
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `producto` 
DROP FOREIGN KEY `fk_producto_1`;
ALTER TABLE `producto` 
DROP INDEX `fk_producto_1_idx` ;

ALTER TABLE `producto_categoria` 
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;

ALTER TABLE `plasticiudad`.`producto` 
ADD INDEX `fk_producto_1_idx` (`categoria_id` ASC);
ALTER TABLE `plasticiudad`.`producto` 
ADD CONSTRAINT `fk_producto_1`
  FOREIGN KEY (`categoria_id`)
  REFERENCES `plasticiudad`.`producto_categoria` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

