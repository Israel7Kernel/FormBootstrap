
CREATE INDEX `ID_USUARIO_CLIENT_idx` ON `CostanzoVentas`.`CLIENTES` (`ID_USUARIO` ASC) VISIBLE;

CREATE INDEX `ID_ESTADO_DOM_idx` ON `CostanzoVentas`.`MUNICIPIOS` (`ID_ESTADO` ASC) VISIBLE;

CREATE INDEX `ID_CLIENTE_DOM_idx` ON `CostanzoVentas`.`DOMICILIOS` (`ID_CLIENTE` ASC) VISIBLE;

CREATE INDEX `ID_MUNICIPIO_DOM_idx` ON `CostanzoVentas`.`DOMICILIOS` (`ID_MUNICIPIO` ASC) VISIBLE;

CREATE INDEX `ID_CLIENTE_PEDIDO_idx` ON `CostanzoVentas`.`PEDIDOS` (`ID_CLIENTE` ASC) VISIBLE;

CREATE INDEX `ID_DOMICILIO_PEDIDO_idx` ON `CostanzoVentas`.`PEDIDOS` (`ID_DOMICILIO` ASC) VISIBLE;

CREATE INDEX `ID_ARTICULO_EQUI_idx` ON `CostanzoVentas`.`EQUIVALENCIAS` (`ID_ARTICULO` ASC) VISIBLE;

CREATE INDEX `ID_ARTICULO_LISTA_idx` ON `CostanzoVentas`.`LISTA_PRECIOS` (`ID_ARTICULO` ASC) VISIBLE;

CREATE INDEX `ID_ARTICULO_DISPO_idx` ON `CostanzoVentas`.`DISPONIBILIDAD` (`ID_ARTICULO` ASC) VISIBLE;

CREATE INDEX `ID_PEDIDO_CONT_idx` ON `CostanzoVentas`.`CONTENIDO_PEDIDOS` (`ID_PEDIDO` ASC) VISIBLE;

CREATE INDEX `ID_ARTICULO_CONT_idx` ON `CostanzoVentas`.`CONTENIDO_PEDIDOS` (`ID_ARTICULO` ASC) VISIBLE;

CREATE INDEX `ID_CLIENTE_INFO_idx` ON `CostanzoVentas`.`INFORMACION` (`ID_CLIENTES` ASC) VISIBLE;

CREATE INDEX `ID_PEDIDO_AUTO_idx` ON `CostanzoVentas`.`AUTORIZADOS` (`ID_PEDIDO` ASC) VISIBLE;

CREATE INDEX `ID_PEDIDO_DEVO_idx` ON `CostanzoVentas`.`DEVOLUCIONES` (`ID_PEDIDO` ASC) VISIBLE;

CREATE INDEX `ID_PEDIDO_NOT_idx` ON `CostanzoVentas`.`NOTIFICACIONES` (`ID_PEDIDO` ASC) VISIBLE;

